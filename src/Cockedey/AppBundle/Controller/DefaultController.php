<?php

namespace Cockedey\AppBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('CockedeyAppBundle:Default:index.html.twig');
    }
}
