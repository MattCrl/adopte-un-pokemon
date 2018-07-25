<?php

namespace App\Controller;

use App\Entity\Ad;
use App\Entity\Favorite;
use App\Entity\Message;
use App\Form\AdCommentaryType;
use App\Form\AdFiltersType;
use App\Form\AdSoldType;
use App\Form\AdType;
use App\Form\FavoriteType;
use App\Repository\AdRepository;
use App\Repository\FavoriteRepository;
use App\Repository\MessageRepository;
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

        $user = $this->getUser();


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
                'type' => $type,
                'user' => $user

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
     * @Route("/ad/{id}", name="ad_show", methods="GET|POST")
     * @param Request $request
     * @param Ad $ad
     * @return Response
     */
    public function show(Request $request, Ad $ad,
                         FavoriteRepository $favoriteRepository,
                         AdRepository $adRepository,
                         MessageRepository $messageRepository): Response
    {
        // Fav form
        $form = $this->createForm(FavoriteType::class);
        $form->handleRequest($request);

        // Ad sold form
        $formSold = $this->createForm(AdSoldType::class);
        $formSold->handleRequest($request);

        // Commentary form
        $commentary = new Message();
        $formCommentary = $this->createForm(AdCommentaryType::class, $commentary);
        $formCommentary->handleRequest($request);

        $user = $this->getUser();
        $adUser = $ad->getUser();

        // Commentaries & pagination com
        $commentaries = $messageRepository->getMessagesQuery($ad->getId());
        $page = $request->query->get('page', 1);

        $adapter = new DoctrineORMAdapter($commentaries);
        $pagerfanta = new Pagerfanta($adapter);
        $pagerfanta->setMaxPerPage(4);
        $pagerfanta->setCurrentPage($page);

        // Related ads
        $relatedAds = $adRepository->getRelatedAds($ad->getPokemon()->getType(), $ad->getId());

        shuffle($relatedAds);
        $relatedAds = array_slice($relatedAds, 0, 4);

        // Check if this $ad is already added in favorite by this $user
        $result = $favoriteRepository->findOneBy([
            'user' => $user,
            'ad' => $ad
        ]);

        $em = $this->getDoctrine()->getManager();

        // Pokemon Sold form
        if ($formSold->isSubmitted() && $formSold->isValid() && $user != null && $user == $adUser) {
            $ad->setIsSold(true);
            $em->persist($ad);
            $em->flush();

            return $this->redirectToRoute('app_ads_sold');
        }

        // Fav List form
        if ($form->isSubmitted() && $form->isValid() && $user != null) {
            // If this ad isn't in favlist yet, add it | else , remove it
            if ($result == null) {
                $favorite = new Favorite();
                $favorite->setUser($user);
                $favorite->setAd($ad);
                $em->persist($favorite);
                $em->flush();

                return $this->redirectToRoute('ad_show', ['id' => $ad->getId()]);

            } else {
                $em->remove($result);
                $em->flush();

                return $this->redirectToRoute('ad_show', ['id' => $ad->getId()]);
            }
        }

        // Commentary form
        if ($formCommentary->isSubmitted() && $formCommentary->isValid()) {
            if ($user != null) {
                $commentary->setAd($ad);
                $commentary->setUser($user);
                $em->persist($commentary);
                $em->flush();
            } else {
                $this->addFlash('danger', 'Vous devez être identifié pour poster un commentaire.');
            }


            return $this->redirectToRoute('ad_show', ['id' => $ad->getId()]);
        }

        return $this->render('ad/show.html.twig', [
            'ad' => $ad,
            'form' => $form->createView(),
            'formSold' => $formSold->createView(),
            'result' => $result,
            'user' => $user,
            'relatedAds' => $relatedAds,
            'commentaries' => $commentaries,
            'formCommentary' => $formCommentary->createView(),
            'my_pager' => $pagerfanta,
            ]);
    }

    /**
     * @Route("/member/ad/{id}/edit", name="ad_edit", methods="GET|POST")
     */
    public function edit(Request $request, Ad $ad): Response
    {
        $form = $this->createForm(AdType::class, $ad);
        $form->handleRequest($request);

        $user = $this->getUser()->getEmail();
        $adUser = $ad->getUser()->getEmail();

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('ad_show', ['id' => $ad->getId()]);
        }

        if ($user === $adUser) {
            return $this->render('ad/edit.html.twig', [
                'ad' => $ad,
                'form' => $form->createView(),
                'user' => $user
            ]);
        } else {
            $this->addFlash('danger', 'Vous n\'êtes pas autorisé à modifier cette annonce');
            return $this->redirectToRoute('app_index');
        }

    }

}
