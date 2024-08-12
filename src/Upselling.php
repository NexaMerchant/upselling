<?php
namespace NexaMerchant\Upselling;

use Illuminate\Support\Facades\Event;
use Illuminate\Support\Arr;
use Webkul\Checkout\Traits\CartValidators;
use Webkul\Checkout\Traits\CartTools;
use Webkul\Checkout\Traits\CartCoupons;
use Webkul\Checkout\Repositories\CartRepository;
use Webkul\Checkout\Repositories\CartItemRepository;
use Webkul\Customer\Repositories\CustomerAddressRepository;
use Webkul\Product\Repositories\ProductRepository;
use Webkul\Tax\Repositories\TaxCategoryRepository;
use Webkul\Customer\Repositories\WishlistRepository;
use Webkul\Checkout\Repositories\CartAddressRepository;
use Webkul\Shipping\Facades\Shipping;
use Webkul\Checkout\Models\CartPayment;
use Webkul\Checkout\Models\CartAddress;
use Webkul\Tax\Helpers\Tax;
use Illuminate\Support\Facades\Log;
use Webkul\Checkout\Models\CartItem;
use Webkul\Checkout\Facades\Cart;

use Webkul\Sales\Repositories\OrderRepository;

class Upselling {

    private $cart;

    public function __construct(
        protected CartRepository $cartRepository,
        protected OrderRepository $orderRepository,
        protected CartItemRepository $cartItemRepository,
        protected CartAddressRepository $cartAddressRepository,
        protected ProductRepository $productRepository,
        protected TaxCategoryRepository $taxCategoryRepository,
        protected WishlistRepository $wishlistRepository,
        protected CustomerAddressRepository $customerAddressRepository
    )
    {
        //$this->cart = $this->cartRepository->getCart();
    }


    // enable the upselling
    public function enable() {
        // Enable upselling logic here
        //Log::info('Upselling logic enabled');
        config(['Upselling.enabled' => true]);
    }

    // disable the upselling
    public function disable() {
        // Disable upselling logic here
        //Log::info('Upselling logic disabled');
        config(['Upselling.enabled' => false]);
    }

    public function applyUpselling($cart) {
        $this->cart = $cart;
        // Apply upselling logic here
        //Log::info('Upselling logic applied '.json_encode($cart));

        // // Get cart items
        // $cartItems = $this->cartItemRepository->findWhere(['cart_id' => $this->cart->id]);

        // // Get cart total
        // $cartTotal = $this->cart->grand_total;

        // // Get cart total quantity

        // $cartTotalQuantity = 0;
        // foreach ($cartItems as $cartItem) {
        //     $cartTotalQuantity += $cartItem->quantity;
        // }

        // // Get cart total price
        // $cartTotalPrice = 0;
        // foreach ($cartItems as $cartItem) {
        //     $cartTotalPrice += $cartItem->total;
        // }

        // // Get cart total weight
        // $cartTotalWeight = 0;
        // foreach ($cartItems as $cartItem) {
        //     $cartTotalWeight += $cartItem->product->weight * $cartItem->quantity;
        // }

        // // Get cart total volume
        // $cartTotalVolume = 0;
        // foreach ($cartItems as $cartItem) {
        //     $cartTotalVolume += $cartItem->product->volume * $cartItem->quantity;
        // }

        //check the email of the customer have processing order
        //$customer = auth()->guard('customer')->user();

        //check the email of the customer have processing order in 24 hours

        $processingOrder = $this->orderRepository->findOneWhere([
            'customer_email' => $cart->customer_email,
            'status' => 'processing',
        ]);
        //order findwhere created_at >= now()->subDay()


        Log::info('Processing order found '.json_encode($processingOrder));
        Log::info("Processing Data:". now()->subDay());
        

        if(!$processingOrder) {
            //Log::info('Processing order found '.json_encode($processingOrder));

            Cart::saveShippingMethod('free_free');

            // Apply coupon code
            Cart::setCouponCode('hao123');


            

            Cart::collectTotals();

            Log::info('Processing order cart found '.json_encode($cart));
        }



    }

    /**
     * Cart item discount calculation process
     *
     * @param  \Webkul\Checkout\Models\CartItem  $item
     * @return array
     */

    public function process(CartItem $item): array 
    {
        // Process cart item
        //Log::info('Cart item processed '.json_encode($cartItem));
        //$item->discount_percent = 0;
        //$item->discount_amount = 0;
        //$item->base_discount_amount = 0;

        Log::info('Upselling Discount applied old '.json_encode($item));

        $appliedRuleIds = [];

        // 50% discount for the items
        $rule = new \stdClass();
        $rule->discount_amount = 50;
        $rule->discount_quantity = 0;
        $rule->discount_step = 0;
        $rule->discount_type = 'percent';
        $rule->quantity = 1;

        $quantity = $rule->discount_quantity ? min($item->quantity, $rule->discount_quantity) : $item->quantity;

        $discountAmount = $baseDiscountAmount = 0;


        $rulePercent = min(100, $rule->discount_amount);

        $discountAmount = ($quantity * $item->price + $item->tax_amount - $item->discount_amount) * ($rulePercent / 100);

        $baseDiscountAmount = ($quantity * $item->base_price + $item->base_tax_amount - $item->base_discount_amount) * ($rulePercent / 100);

        
        // 50% of the product price
        $item->discount_amount = $discountAmount;
        $item->base_discount_amount = $baseDiscountAmount;

        $item->discount_percent = $rulePercent;
        $item->base_price = $item->base_price - $baseDiscountAmount;
        $item->price = $item->price - $discountAmount;
        $item->total = $item->price * $item->quantity;
        $item->base_total = $item->base_price * $item->quantity;


        

        Log::info('Upselling Discount applied new '.json_encode($item));


        $item->save();

        return $appliedRuleIds;

        //$this->processFreeShipping();
        

    }


    public function processFreeShipping() {
        // Process shipping discount
        // free shipping for the items

        $cart = $this->cart;
        $cart->shipping_discount_amount = 0;
        $cart->base_shipping_discount_amount = 0;


        Log::info('Free Shipping processed '.json_encode($cart));
        $cart->save();

    }
}