<?php

declare(strict_types=1);

namespace BlankFramework\RoutingInterfaces\Exception;

use Exception;

final class InvalidRouteException extends Exception
{
    public function __construct()
    {
        parent::__construct("Route must return a ResponseHandlerInterface");
    }
}
