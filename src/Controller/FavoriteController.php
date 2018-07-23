<?php

namespace App\Controller;

use App\Entity\Favorite;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/favorite")
 */
class FavoriteController extends Controller
{

    /**
     * @Route("/member/favorite/add", name="add_favorite", methods="GET|POST")
     */
    public function addFavorite(Request $request): Response
    {
        /*$em = $this->getDoctrine()->getManager();
        $user = $this->getUser();

        $this->addUser($user);
        $user->addFavorite($favorite);

        $em->persist($favorite);
        $em->persist($user);
        $em->flush();*/
    }



    /**
     * @Route("/{id}", name="favorite_delete", methods="DELETE")
     */
    public function delete(Request $request, Favorite $favorite): Response
    {
        if ($this->isCsrfTokenValid('delete'.$favorite->getId(), $request->request->get('_token'))) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($favorite);
            $em->flush();
        }

        return $this->redirectToRoute('favorite_index');
    }
}
