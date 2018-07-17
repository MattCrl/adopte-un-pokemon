<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 11/07/18
 * Time: 20:59
 */

namespace App\Controller;


use App\Entity\Ad;
use App\Form\AdSearchType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AppController extends Controller
{

    /**
     * Homepage
     *
     * @Route("/", name="app_index")
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();
        $lastAds = $em->getRepository(Ad::class)->getHeightLastAds();
        $ads = $em->getRepository(Ad::class)->findAll();

        $form = $this->createForm(AdSearchType::class);

        return $this->render('index.html.twig', [
            'lastAds' => $lastAds,
            'ads' => $ads,
            'form' => $form->createView()
        ]);
    }

    /**
     * Member Homepage
     *
     * @Route("/member/dashboard", name="app_index_member")
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexMemberAction()
    {
        $em = $this->getDoctrine()->getManager();
        $ads = $em->getRepository(Ad::class)->findAll();

        $user = $this->getUser();

        return $this->render('dashboard/index.html.twig', [
            'ads' => $ads,
            'user' => $user
        ]);
    }

    /**
     * @param Request $request
     * @Route("/results", name="search_results")
     * @return \Symfony\Component\HttpFoundation\RedirectResponse|\Symfony\Component\HttpFoundation\Response
     */
    public function searchByPokemon(Request $request)
    {
        $searched = $request->request->get('ad_search')['pokemon'];
        $results = $this->getDoctrine()->getRepository(Ad::class)->getAdsLikePokemonName($searched);

        return $this->render('search/search_results.html.twig', [
            'results' => $results
        ]);
    }
}
