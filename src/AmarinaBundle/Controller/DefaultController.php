<?php

namespace AmarinaBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AmarinaBundle:Default:index.html.twig');
    }
}
