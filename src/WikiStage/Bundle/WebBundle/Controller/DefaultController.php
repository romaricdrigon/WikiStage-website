<?php

namespace WikiStage\Bundle\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('WikiStageWebBundle:Default:index.html.twig');
    }
}
