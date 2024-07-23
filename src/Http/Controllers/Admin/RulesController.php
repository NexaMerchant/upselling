<?php
namespace NexaMerchant\Upselling\Http\Controllers\Admin;
use Illuminate\Foundation\Validation\ValidatesRequests;
use NexaMerchant\Upserlling\Models\UpsellingRule;
use Illuminate\Http\Request;
use NexaMerchant\Upselling\Models\UpsellingRule as ModelsUpsellingRule;

class RulesController extends Controller
{

    public function __construct(
    )
    {
        
    }

    public function index()
    {

        $lists = ModelsUpsellingRule::all();
        
        return view('Upselling::Admin.rules.index', compact('lists'));
    }

    public function create()
    {
        return view('Upselling::Admin.rules.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'description' => 'required',
            'type' => 'required',
            'status' => 'required',
        ]);



        return redirect()->route('admin.rules.index');
    }
}