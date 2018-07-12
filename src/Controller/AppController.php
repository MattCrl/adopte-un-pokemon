<?php
/**
 * Created by PhpStorm.
 * User: mattcrl
 * Date: 11/07/18
 * Time: 20:59
 */

namespace App\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

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
        return $this->render('index.html.twig');
    }

    /**
     * Member Homepage
     *
     * @Route("/member/homepage", name="app_index_member")
     * @Method("GET")
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function indexMemberAction()
    {
        return $this->render('index.html.twig');
    }
}