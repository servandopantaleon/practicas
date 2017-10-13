<?php

namespace Adir\DanielBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AdirDanielBundle:Default:index.html.twig');
    }
}
