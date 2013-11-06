<?php

namespace Acme\DemoBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HwController extends Controller
{
    public function indexAction()
    {
        return new Response('Hello)');
    }

    public function congratulateAction()
    {
        $congratulate = array('Congratulations!', 'Congrats!');
        return $this->render('AcmeDemoBundle:Hw:congratulate.html.twig', array('congratulate' => $congratulate));
    }

    public function arrayAction()
    {
        return $this->render('AcmeDemoBundle:Hw:array.html.twig', array('Manufactured' => 'Nissan',
            'Model' => 'Skyline',
            'Color' => 'Color - Black',
            'Price' => 'Price - 45000$'));
    }
}
