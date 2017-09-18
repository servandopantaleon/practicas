<?php

namespace reporteBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('reporteBundle:Default:index.html.twig');
    }
}
