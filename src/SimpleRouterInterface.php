<?php

namespace BlankFramework\RoutingInterfaces;

use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

interface SimpleRouterInterface
{
    public function routeRequest(ServerRequestInterface $request): RequestHandlerInterface;
}
