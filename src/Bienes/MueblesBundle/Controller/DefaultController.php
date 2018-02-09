<?php

namespace Bienes\MueblesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('BienesMueblesBundle:Default:index.html.twig');
    }
}
