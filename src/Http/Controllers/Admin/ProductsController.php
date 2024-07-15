<?php
namespace NexaMerchant\Upselling\Http\Controllers\Admin;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProductsController extends Controller
{
    public function index()
    {
        return view('upselling::admin.products.index');
    }
}