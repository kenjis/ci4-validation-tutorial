<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');

$routes->get('form1', 'Form::form1');
$routes->post('form1', 'Form::form1');

$routes->get('form2', 'Form::form2');
$routes->post('form2', 'Form::form2');
