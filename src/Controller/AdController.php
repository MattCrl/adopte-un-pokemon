<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 12/07/18
 * Time: 13:30
 */

namespace App\Controller;




use App\Entity\Ad;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;


/**
 * Class AdController
 * @Route("ad")
 * @package App\Controller
 */
class AdController extends Controller
{
    /**
     * @Route("/{id}", name="ad_show")
     * @Method("GET")
     */
    public function showAction(Ad $ad)
    {
        $em = $this->getDoctrine()->getManager();
        $result = $em->getRepository(Ad::class)->findOneBy(['id' => $ad->getId()]);

        return $this->render('ad/ad_show.html.twig', ['result' => $result]);

    }


}