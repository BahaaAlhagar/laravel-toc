<?php

namespace Balhagar\LaravelToc;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Balhagar\LaravelToc\Skeleton\SkeletonClass
 */
class LaravelTocFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'laravel-toc';
    }
}
