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
        $this->cart = $this->cartRepository->getCart();
    }


    public function applyUpselling($cart) {
        // Apply upselling logic here
        var_dump($cart);
    }
}