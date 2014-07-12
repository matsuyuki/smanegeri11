<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdUrlMatcher
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // smasma_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'smasma_homepage');
            }

            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\AdminController::indexAction',  '_route' => 'smasma_homepage',);
        }

        // smasma_admin_homepage
        if ($pathinfo === '/admin') {
            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\AdminController::adminAction',  '_route' => 'smasma_admin_homepage',);
        }

        // smasma_logout
        if ($pathinfo === '/logout') {
            return array (  '_controller' => 'SMA\\SMABundle\\Controller\\AdminController::logoutAction',  '_route' => 'smasma_logout',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
