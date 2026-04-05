<?php

declare(strict_types=1);

namespace BlankFramework\RoutingInterfaces;

use BlankFramework\RoutingInterfaces\Exception\InvalidRouteException;
use BlankFramework\RoutingInterfaces\Exception\RouteNotFoundException;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Server\RequestHandlerInterface;

interface SimpleRouterInterface
{
    /**
     * @throws RouteNotFoundException
     * @throws InvalidRouteException
     */
    public function routeRequest(ServerRequestInterface $request): RequestHandlerInterface;
}
