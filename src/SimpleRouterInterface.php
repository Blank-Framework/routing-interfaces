<?php

namespace BlankFramework\RoutingInterfaces;

use Psr\Http\Message\ServerRequestInterface;

interface SimpleRouterInterface
{
    public function routeRequest(ServerRequestInterface $request): RouteInterface;
}
