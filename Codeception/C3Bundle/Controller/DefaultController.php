<?php

namespace Codeception\C3Bundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class DefaultController extends Controller
{
    public function cloverAction()
    {
        return new Response('');
    }

    public function serializedAction()
    {
        return new Response('');
    }

    public function htmlAction()
    {
        return new Response('');
    }

    public function cleanAction()
    {
        return new Response('');
    }

}
