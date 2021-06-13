<?php

namespace Balhagar\LaravelToc\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Balhagar\LaravelToc\Skeleton\SkeletonClass
 */
class Toc extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'toc';
    }
}
