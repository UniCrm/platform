<?php

namespace UniCrm\Bundle\CoreBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return new \Symfony\Component\HttpFoundation\Response('hi');
    }
}
