<?php
namespace NexaMerchant\Upselling\Http\Controllers\Admin;
use Illuminate\Foundation\Validation\ValidatesRequests;
use NexaMerchant\Upserlling\Models\UpsellingRule;
use Illuminate\Http\Request;
use NexaMerchant\Upselling\Models\UpsellingRule as ModelsUpsellingRule;
use Nicelizhi\Manage\Helpers\SSP;

class RulesController extends Controller
{

    public function __construct(
    )
    {
        
    }

    public function index()
    {

        if (request()->ajax()) {
            $table_pre = config("database.connections.mysql.prefix");
            $table = $table_pre.'upselling_rules';

            // Table's primary key
            $primaryKey = 'id';
            
            $columns = array(
                //array( 'db' => 'id', 'dt' => 0 ),
                array( 'db' => '`p`.`id`',  'dt' => 'id', 'field'=>'id','formatter' => function($d, $row){
                    return $d;
                } ),
                array( 'db' => '`p`.`name`',   'dt' => 'name', 'field'=>'name' ),
                array( 'db' => '`p`.`status`',   'dt' => 'status', 'field'=>'status' ),
                array( 'db' => '`p`.`updated_at`',   'dt' => 'updated_at', 'field'=>'updated_at' )
            );
            // SQL server connection information
            $sql_details = [];

            $joinQuery = "FROM `{$table}` AS `p` ";
            $extraCondition = "";

            return json_encode(SSP::simple( request()->input(), $sql_details, $table, $primaryKey, $columns, $joinQuery, $extraCondition ));

        }
        
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



        return redirect()->route('admin.rules.index');
    }
}