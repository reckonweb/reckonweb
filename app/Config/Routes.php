<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('about-us', 'Home::index/about-us');
$routes->get('project', 'Home::index/project');
$routes->get('project-detail', 'Home::index/project-detail');
$routes->get('service', 'Home::index/service');
$routes->get('service-detail', 'Home::index/service-detail');
$routes->get('blog', 'Home::index/blog');
$routes->get('blog-detail', 'Home::index/blog-detail');
$routes->get('team', 'Home::index/team');
$routes->get('team-detail', 'Home::index/team-detail');
$routes->get('contact', 'Home::index/contact');
$routes->get('faq', 'Home::index/faq');
