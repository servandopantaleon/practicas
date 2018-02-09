<?php

namespace Inventario\Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('InventarioBundle:Default:index.html.twig');
    }
}
