<?php

namespace UniCrm\Bundle\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('UniAdminBundle:Default:index.html.twig');
    }
}
