<?php

namespace SlugBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('SlugBundle:Default:index.html.twig');
    }
}
