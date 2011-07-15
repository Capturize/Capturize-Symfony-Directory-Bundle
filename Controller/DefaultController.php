<?php

namespace Capturize\DirectoryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;


class DefaultController extends Controller
{

    public function indexAction()
    {
        $sites = $this->getDoctrine()->getRepository('CapturizeDirectoryBundle:Site')->findAll();

        return $this->render('CapturizeDirectoryBundle:Default:index.html.twig', array("sites" => $sites));
    }
}
