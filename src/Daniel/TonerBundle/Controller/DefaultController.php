<?php

namespace Daniel\TonerBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('DanielTonerBundle:Default:index.html.twig');
    }
}
