<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HSController extends Controller
{
    /**
     * @Route("/")
     */
    public function showHome()
    {
        $templating = $this->container->get('templating');
        return $this->render('default/homepage.html.twig');

    }

}