<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('trashkalov_first_homepage', new Route('/', array(
    '_controller' => 'TrashkalovFirstBundle:Default:index',
)));

return $collection;
