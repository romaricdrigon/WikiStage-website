<?php

namespace WikiStage\Bundle\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('WikiStageWebBundle:Default:index.html.twig', array('name' => $name));
    }
}
