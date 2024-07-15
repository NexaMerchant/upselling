<?php
namespace NexaMerchant\Upselling\Http\Controllers\Admin;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ProductsController extends Controller
{
    public function index()
    {
        return view('Upselling::Admin.products.index');
    }

    public function create()
    {
        return view('Upselling::Admin.products.create');
    }
}