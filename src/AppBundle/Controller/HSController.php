<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class HSController extends Controller
{
    /**
     * @Route("/", name="app_home")
     */
    public function showHome(Request $request)
    {
//        print_r($request->getSchemeAndHttpHost());
//        exit;
        $templating = $this->container->get('templating');
        return $this->render('default/home.html.twig');

    }

    /**
     * @Route("/hen-events/", name="hen_events")
     */
    public function showHenEvents()
    {
        $templating = $this->container->get('templating');
        return $this->render('default/.html.twig');
    }

}
