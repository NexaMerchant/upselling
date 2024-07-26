<?php

namespace NexaMerchant\Upselling\Listeners;

use Webkul\CartRule\Helpers\CartRule;
use NexaMerchant\Upselling\Helper\UpsellingRule;

class Upselling
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
    public function applyUpselling($cart)
    {
        //$this->cartRuleHelper->collect($cart);
    }

    /**
     * Apply valid cart rules to cart
     * 
     * @param  \Webkul\Checkout\Contracts\Cart  $cart
     * @return void
     */
    public function applyUpsellingAfter($cart) {
        //$this->cartRuleHelper->collect($cart);
    }
}