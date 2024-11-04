<?php

namespace BlankFramework\RoutingInterfaces\Exceptions;

class RouteNotFoundException extends \Exception
{
    public function __construct(string $path)
    {
        $message = sprintf('Route %s not found', $path);

        parent::__construct($message);
    }
}
