<?php

namespace NexaMerchant\Upselling\Facades;

use Illuminate\Support\Facades\Facade;

class Upselling extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'upselling';
    }
}
