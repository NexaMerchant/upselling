<?php
namespace NexaMerchant\Upselling\Http\Controllers\Api;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return response()->json(['code' => 200, 'message' => 'Index']);
    }

    // order create
    
    public function store(Request $request)
    {
        return response()->json(['code' => 200, 'message' => 'Store']);
    }

    public function products(Request $request)
    {
        return response()->json(['code' => 200, 'message' => 'Products']);
    }
}