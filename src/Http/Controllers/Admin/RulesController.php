<?php
namespace NexaMerchant\Upselling\Http\Controllers\Admin;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;

class RulesController extends Controller
{
    public function index()
    {
        return view('Upselling::Admin.rules.index');
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

        $rule = new Rule();
        $rule->name = $request->name;
        $rule->description = $request->description;
        $rule->type = $request->type;
        $rule->status = $request->status;
        $rule->save();

        return redirect()->route('admin.rules.index');
    }
}