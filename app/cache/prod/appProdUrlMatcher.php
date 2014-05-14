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

        // guy_cnet_homepage
        if ($pathinfo === '/Home') {
            return array (  '_controller' => 'Guy\\Bundle\\CnetBundle\\Controller\\DefaultController::indexAction',  '_route' => 'guy_cnet_homepage',);
        }

        // guy_cnet_portfolio
        if ($pathinfo === '/Portfolio') {
            return array (  '_controller' => 'Guy\\Bundle\\CnetBundle\\Controller\\PortfolioController::indexAction',  '_route' => 'guy_cnet_portfolio',);
        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
