<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;


class FavoriteController extends Controller
{
    /**
     * @Route("/member/favorites", name="app_member_fav")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexAction()
    {
        $favorites = $this->getUser()->getFavorites();

        $user= $this->getUser();

        return $this->render('dashboard/favorite/index.html.twig', [
            'user' => $user,
            'favorites' => $favorites
        ]);
    }

}
