<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/index.html.twig', [
            'base_dir' => realpath($this->getParameter('kernel.project_dir')).DIRECTORY_SEPARATOR,
        ]);
        /*return Response("sad");*/
    }

    /**
     * @Route("/list", name="lotery_list")
     */
    public function loteryListAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/list.html.twig');
        /*return Response("sad");*/
    }

    /**
     * @Route("/result", name="result")
     */
    public function resultAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/result.html.twig');
        /*return Response("sad");*/
    }
}
