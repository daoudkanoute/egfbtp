<?php

namespace AppBundle\Repository;

/**
 * SearchPerDayRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class SearchPerDayRepository extends \Doctrine\ORM\EntityRepository
{

    function getMonthsSearchGraph()
    {
        $qb = $this->createQueryBuilder('a')->select('SUM(a.count) as gCount, MONTH(a.date) AS gDmonth, YEAR(a.date) AS gDyear');
        $qb->leftJoin('a.user','u');
        $qb->andWhere($qb->expr()->like('u.roles', ':roles'))->setParameter('roles', '%ROLE_VIEWER%');
        $qb->groupBy('gDmonth')
            ->addGroupBy('gDyear');
        $result  = $qb->getQuery()->getResult();
        $mois = [ "Jan", "Fev", "Mar", "Avr", "Mai", "Juin", "Juil", "Aout", "Sep", "Oct", "Nov", "Dec" ];
        $return = $values = [];
        if(!$result){
            $year = date('Y');
            for($i=0; $i<12; $i++) {
                $return[$year][$mois[$i]] = 0;
            }
            return $return;
        }

        foreach ($result as $item)
            $values[$item['gDyear']][$item['gDmonth']-1] = $item['gCount'];

        foreach ($values as $year => $months)
            for($i=0; $i<12; $i++) {
                if(isset($values[$year][$i])) {
                    $val = $months[$i];
                    $return[$year][$mois[$i]] = $val;
                } else {
                    $return[$year][$mois[$i]] = 0;
                }
            }
        return $return;
    }


    function getMonthsSearchGraphBTP()
    {
        $qb = $this->createQueryBuilder('a')->select('a, SUM(a.count) as gCount, MONTH(a.date) AS gDmonth, YEAR(a.date) AS gDyear');
        $qb->leftJoin('a.user','u');
        $qb->andWhere($qb->expr()->like('u.roles', ':roles'))->setParameter('roles', '%ROLE_BTP%');
        $qb->groupBy('gDmonth')
            ->addGroupBy('gDyear');
        $result  = $qb->getQuery()->getResult();

        $mois = [ "Jan", "Fev", "Mar", "Avr", "Mai", "Juin", "Juil", "Aout", "Sep", "Oct", "Nov", "Dec" ];
        $return = $values = [];
        if(!$result){
            $year = date('Y');
            for($i=0; $i<12; $i++) {
                $return[$year][$mois[$i]] = 0;
            }
            return $return;
        }

        foreach ($result as $item)
            $values[$item['gDyear']][$item['gDmonth']-1] = $item['gCount'];

        foreach ($values as $year => $months)
            for($i=0; $i<12; $i++) {
                if(isset($values[$year][$i])) {
                    $val = $months[$i];
                    $return[$year][$mois[$i]] = $val;
                } else {
                    $return[$year][$mois[$i]] = 0;
                }
            }
        return $return;
    }
}