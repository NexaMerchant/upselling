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
use NexaMerchant\Apis\Docs\V1\Shop\Models\Customer\CartItem;

class Upselling {

    private $cart;

    public function __construct(
        protected CartRepository $cartRepository,
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

        foreach ($cart->items as $item) {
            //$itemCartRuleIds = $this->process($item);
        }

    }

    public function process(CartItem $item): array 
    {
        // Process cart item
        //Log::info('Cart item processed '.json_encode($cartItem));
        $item->discount_percent = 0;
        $item->discount_amount = 0;
        $item->base_discount_amount = 0;

        $appliedRuleIds = [];

        return $appliedRuleIds;
        

    }
}