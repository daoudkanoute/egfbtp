<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Template;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class StatistiquesController
 * @package AppBundle\Controller
 * @Route("/statistiques")
 */
class StatistiquesController extends Controller
{
    /**
     * @Route("/", name="admin_statistiques")
     * @Template("AppBundle:Admin:statistiques.html.twig")
     */
    public function indexAction(Request $request)
    {
        $apprenantsRepository  = $this->getDoctrine()->getRepository('UserBundle:Apprenant');
        $attestationRepository  = $this->getDoctrine()->getRepository('AppBundle:Attestation');
        $attestationsGraphs     = $attestationRepository->getAttestationGraph();
        $todayAttestationsCount = $attestationRepository->getTodayAttestationCount();
        $todayAttestationsReussitCount = $attestationRepository->getTodayAttestationReussitCount();

        $searchPerDayRepository  = $this->getDoctrine()->getRepository('AppBundle:SearchPerDay');
        $searchsGraphs  = $searchPerDayRepository->getMonthsSearchGraph();
        $searchsGraphs2 = $searchPerDayRepository->getMonthsSearchGraphBTP();
        $apprenantsByOFGraph = $apprenantsRepository->getStatistiquesByOF();


        return [
            'attestationsGraphs'     => $attestationsGraphs,
            'todayAttestationsCount' => $todayAttestationsCount,
            'todayAttestationsReussitCount' => $todayAttestationsReussitCount,
            'apprenantsByOFGraph'          => $apprenantsByOFGraph,
            'searchsGraphs'          => $searchsGraphs,
            'searchsGraphs2'          => $searchsGraphs2
        ];
    }
}
