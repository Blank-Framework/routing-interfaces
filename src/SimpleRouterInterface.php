<?php

namespace BlankFramework\RoutingInterfaces;

use Psr\Http\Message\RequestInterface;

interface SimpleRouterInterface
{
    public function routeRequest(RequestInterface $request): RouteInterface;
}
