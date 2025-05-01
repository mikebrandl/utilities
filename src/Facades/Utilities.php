<?php

namespace Mike Brandl\Utilities\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Mike Brandl\Utilities\Utilities
 */
class Utilities extends Facade
{
    protected static function getFacadeAccessor(): string
    {
        return \Mike Brandl\Utilities\Utilities::class;
    }
}
