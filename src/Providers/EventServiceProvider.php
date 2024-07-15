<?php

namespace NexaMerchant\Upselling\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;

class EventServiceProvider extends ServiceProvider
{
    /**
     * The event handler mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        'customer.registration.after' => [
            'NexaMerchant\Webhooks\Listeners\Customer@afterCreated',
        ]
    ];
}
