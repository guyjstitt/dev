<?php

namespace Guy\Bundle\CnetBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('GuyCnetBundle:Default:index.html.twig');
    }

}
