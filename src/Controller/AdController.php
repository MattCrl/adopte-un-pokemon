<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Form\AdFiltersType;
use App\Form\AdType;
use Pagerfanta\Adapter\DoctrineORMAdapter;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Pagerfanta\Pagerfanta;


class AdController extends Controller
{
    /**
     * @Route("/ad", name="ad_index", methods="GET|POST")
     */
    public function index(Request $request): Response
    {
        $type = $request->query->get('types');
        $form = $this->createForm(AdFiltersType::class);
        $form->handleRequest($request);


        if ($form->isSubmitted() && $type != null) {
            $results = $this->getDoctrine()->getRepository(Ad::class)->getAdsLikeType($type);
        } else {
            $results = $this->getDoctrine()->getRepository(Ad::class)->findAllQuery();
        }

        $page = $request->query->get('page', 1);

        $adapter = new DoctrineORMAdapter($results);
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage(8);
        $pagerfanta->setCurrentPage($page);


        return $this->render('ad/index.html.twig',
            [
                'my_pager' => $pagerfanta,
                'results' => $results,
                'filter' => $form->createView(),
                'request' => $request,
                'type' => $type

            ]
            );
    }

    /**
     * @Route("/member/ad/new", name="ad_new", methods="GET|POST")
     */
    public function new(Request $request): Response
    {
        $ad = new Ad();
        $form = $this->createForm(AdType::class, $ad);
        $form->handleRequest($request);

        $user = $this->getUser();

        if ($form->isSubmitted() && $form->isValid() && $user != null) {
            $ad->setUser($user);
            $ad->setIsSold(false);
            $em = $this->getDoctrine()->getManager();
            $em->persist($ad);
            $em->flush();

            return $this->redirectToRoute('ad_index');
        }

        return $this->render('ad/new.html.twig', [
            'ad' => $ad,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/ad/{id}", name="ad_show", methods="GET")
     */
    public function show(Ad $ad): Response
    {
        return $this->render('ad/show.html.twig', ['ad' => $ad]);
    }

    /**
     * @Route("/ad/{id}/edit", name="ad_edit", methods="GET|POST")
     */
    public function edit(Request $request, Ad $ad): Response
    {
        $form = $this->createForm(AdType::class, $ad);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ad_edit', ['id' => $ad->getId()]);
        }

        return $this->render('ad/edit.html.twig', [
            'ad' => $ad,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/ad/{id}", name="ad_delete", methods="DELETE")
     */
    public function delete(Request $request, Ad $ad): Response
    {
        if ($this->isCsrfTokenValid('delete'.$ad->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($ad);
            $em->flush();
        }

        return $this->redirectToRoute('ad_index');
    }


}
