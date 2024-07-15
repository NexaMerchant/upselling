<?php
namespace NexaMerchant\Upselling\Http\Controllers\Admin;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function index()
    {
        return view('upselling::admin.rules.index');
    }
}