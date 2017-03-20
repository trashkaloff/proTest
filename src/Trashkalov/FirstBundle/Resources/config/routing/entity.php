<?php

use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;

$collection = new RouteCollection();

$collection->add('entity_index', new Route(
    '/',
    array('_controller' => 'TrashkalovFirstBundle:Entity:index'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('entity_show', new Route(
    '/{id}/show',
    array('_controller' => 'TrashkalovFirstBundle:Entity:show'),
    array(),
    array(),
    '',
    array(),
    array('GET')
));

$collection->add('entity_new', new Route(
    '/new',
    array('_controller' => 'TrashkalovFirstBundle:Entity:new'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('entity_edit', new Route(
    '/{id}/edit',
    array('_controller' => 'TrashkalovFirstBundle:Entity:edit'),
    array(),
    array(),
    '',
    array(),
    array('GET', 'POST')
));

$collection->add('entity_delete', new Route(
    '/{id}/delete',
    array('_controller' => 'TrashkalovFirstBundle:Entity:delete'),
    array(),
    array(),
    '',
    array(),
    array('DELETE')
));

return $collection;
