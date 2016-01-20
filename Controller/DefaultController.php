<?php

namespace Agc\EvaluationsBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('AgcEvaluationsBundle:Default:index.html.twig');
    }
}
