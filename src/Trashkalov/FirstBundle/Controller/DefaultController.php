<?php

namespace Trashkalov\FirstBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction()
    {
        return $this->render('TrashkalovFirstBundle:Default:index.html.twig');
    }
}
