<?php

namespace BlankFramework\RoutingInterfaces;

use BlankFramework\RoutingInterfaces\Exceptions\RouteNotFoundException;
use Psr\Http\Message\RequestInterface;

interface SimpleRouterInterface
{
    /**
     * @throws RouteNotFoundException
     */
    public function routeRequest(RequestInterface $request): RouteInterface;
}
