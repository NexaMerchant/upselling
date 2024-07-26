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
        ],

        'checkout.cart.collect.totals.before' => [
            'NexaMerchant\Upselling\Listeners\Cart@applyCartRules',
        ],

        'checkout.cart.upselling.before' => [
            'NexaMerchant\Upselling\Listeners\Upselling@applyUpselling',
        ],
        'checkout.cart.upselling.after' => [
            'NexaMerchant\Upselling\Listeners\Cart@applyUpsellingAfter',
        ],
    ];
}
