<?php

namespace BlankFramework\RoutingInterfaces;

use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

interface RouteInterface
{
    public function handleRequest(RequestInterface $request): ResponseInterface;
}
