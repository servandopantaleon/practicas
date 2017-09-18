<?php

namespace holaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('holaBundle:Default:index.html.twig');
    }
}
