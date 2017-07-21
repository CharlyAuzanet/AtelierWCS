<?php

namespace JqueryBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('JqueryBundle:Default:index.html.twig');
    }
}
