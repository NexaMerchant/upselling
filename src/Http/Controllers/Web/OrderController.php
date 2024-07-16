<?php
namespace NexaMerchant\Upselling\Http\Controllers\Web;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index()
    {
        return view('Upselling::index');
    }

    public function store(Request $request)
    {
        return redirect()->route('upselling.index');
    }
}