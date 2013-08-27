<?php

namespace WikiStage\Bundle\WebBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        $tags = $this->getDoctrine()->getRepository('WikiStageCoreBundle:Tag')->findAll();

        return $this->render('WikiStageWebBundle:Default:index.html.twig', array(
                'tags' => $tags
            ));
    }
}
