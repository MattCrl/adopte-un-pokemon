<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 24/07/18
 * Time: 15:16
 */

namespace App\Controller;


use App\Entity\Ad;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Pagerfanta\Pagerfanta;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DashboardController extends Controller
{
    /**
     * Member ads on sell list
     *
     * @Route("/member/ads_on_sell", name="app_ads_on_sell")
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function memberAdsOnSell(Request $request)
    {
        $userId = $this->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $ads = $em->getRepository(Ad::class)->findMemberAds($userId);

        $user = $this->getUser();

        $page = $request->query->get('page', 1);

        $adapter = new DoctrineORMAdapter($ads);
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage(8);
        $pagerfanta->setCurrentPage($page);

        return $this->render('dashboard/on_sell/index.html.twig', [
            'my_pager' => $pagerfanta,
            'ads' => $ads,
            'user' => $user
        ]);
    }


    /**
     * Member ads sold list
     *
     * @Route("/member/ads_sold", name="app_ads_sold")
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function memberAdsSold(Request $request)
    {
        $userId = $this->getUser()->getId();
        $em = $this->getDoctrine()->getManager();
        $ads = $em->getRepository(Ad::class)->findMemberAllSoldPokemon($userId);
        $sumPrice = $em->getRepository(Ad::class)->sumSoldPrices($userId);


        $user = $this->getUser();

        $page = $request->query->get('page', 1);

        $adapter = new DoctrineORMAdapter($ads);
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage(8);
        $pagerfanta->setCurrentPage($page);

        return $this->render('dashboard/sold/index.html.twig', [
            'my_pager' => $pagerfanta,
            'ads' => $ads,
            'user' => $user,
            'sumPrice' => $sumPrice
        ]);
    }
}