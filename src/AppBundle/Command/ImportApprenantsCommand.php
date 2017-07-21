<?php
namespace AppBundle\Command;

use AppBundle\Entity\Attestation;
use AppBundle\Entity\Image;
use BackendBundle\Entity\EmailJob;
use BackendBundle\Entity\Jobs;
use FOS\UserBundle\Mailer\Mailer;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;
use UserBundle\Entity\Apprenant;

class ImportApprenantsCommand extends ContainerAwareCommand
{

    public function configure()
    {
        $this->setName('app:import:apprenants')
             ->setDescription('Importer des apprenant a partir d\'un fichier excel');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {

        $context = $this->getContainer()->get('router')->getContext();
        $context->setHost('www.passeport-securite-interim-btp.fr');
        $context->setScheme('http');
        $context->setBaseUrl('/');


        $em = $this->getContainer()->get('doctrine')->getManager();
        /** @var \UserBundle\Repository\ApprenantRepository $apprenantsRepository */
        $apprenantsRepository = $em->getRepository('UserBundle:Apprenant');
        $filename = $this->getContainer()->get('kernel')->getRootDir().'/../docs/Apprenants.csv';
        if(!file_exists("{$filename}")) exit;

        $csvFile = file("{$filename}");
        $lines = [];
        $first = true;
        foreach ($csvFile as $line)
        {
            if($first) {
                $first = false;
                continue;
            }
            $lines[] = str_getcsv($line);
        }
        foreach ($lines as $line) {
            $apprenant = $apprenantsRepository->findOneBy(['code' => $line[0]]);
            if(!$apprenant) {

                $attestation = new Attestation();
                $attestation->setDate(new \DateTime($line[6]))
                            ->setSuccessed($line[5] == 'réussi' ? true : false);

                $apprenant = new Apprenant();
                $apprenant->setAttestation($attestation)
                          ->setCode($line[0])
                          ->setNom($line[1])
                          ->setPrenom($line[2])
                          ->setBirthday(\DateTime::createFromFormat('m/d/Y', $line[3]));
                $em->persist($apprenant);
                $em->flush();

                $html  = $this->getContainer()->get('templating')->render("AppBundle:Attestation:view.html.twig",['apprenant' => $apprenant, 'print' => false]);
                $filename = $apprenant->getCode().'.pdf';
                $attestationDir = $this->getContainer()->get('kernel')->getRootDir().'/../web/images/';
                $this->getContainer()->get('knp_snappy.pdf')->generateFromHtml($html, $attestationDir.$filename);

                $image = new Image();
                $image->setAlt($apprenant->getCode());
                $image->setOriginalName($filename);
                $image->setFilename($filename);
                $image->setPath('images/'.$filename);
                $image->setExtension('pdf');
                $apprenant->getAttestation()->setImageOF($image);

                $em->persist($apprenant);
                $em->flush();
            }
        }
    }

}