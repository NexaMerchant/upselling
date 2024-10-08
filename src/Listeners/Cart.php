<?php

namespace NexaMerchant\Upselling\Listeners;

use Webkul\CartRule\Helpers\CartRule;
use NexaMerchant\Upselling\Helper\UpsellingRule;

class Cart
{
    /**
     * Create a new listener instance.
     *
     * @param  \Webkul\CartRule\Repositories\CartRule  $cartRuleHelper
     * @return void
     */
    public function __construct(protected CartRule $cartRuleHelper)
    {
    }

    /**
     * Apply valid cart rules to cart
     * 
     * @param  \Webkul\Checkout\Contracts\Cart  $cart
     * @return void
     */
    public function applyCartRules($cart)
    {
        //$this->cartRuleHelper->collect($cart);
    }
}