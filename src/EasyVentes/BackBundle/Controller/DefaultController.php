<?php

namespace EasyVentes\BackBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('EasyVentesBackBundle:Default:index.html.twig', array('name' => $name));
    }
}
