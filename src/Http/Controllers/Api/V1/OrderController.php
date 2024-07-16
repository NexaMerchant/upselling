<?php
namespace NexaMerchant\Upselling\Http\Controllers\Api\V1;

use Illuminate\Http\Request;
use NexaMerchant\Apis\Docs\V1\Admin\Models\Marketing\Event;
use NexaMerchant\Upselling\Http\Controllers\Api\Controller;
use Webkul\Sales\Repositories\OrderRepository;
use Webkul\Sales\Models\Order;

class OrderController extends Controller
{
    public function __construct(OrderRepository $orderRepository)
    {
        // $this->middleware('auth:api');
    }

    public function index()
    {
        return response()->json(['code' => 200, 'message' => 'Index']);
    }

    // order create
    
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // check this email is exist or not
        $order = $this->orderRepository->findOneWhere(['email' => $request->email, 'status' => Order::STATUS_PROCESSING]);
        if(is_null($order)) {
            return response()->json(['code' => 400, 'message' => 'Order not found']);
        }

        // add to cart

        // use upselling rules to get products

        // save payment method

        

        // create order



        return response()->json(['code' => 200, 'message' => 'Store']);
    }

    public function products(Request $request)
    {
        return response()->json(['code' => 200, 'message' => 'Products']);
    }
}