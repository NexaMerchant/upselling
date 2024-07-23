<?php
/**
 * 
 * This file is auto generate by Nicelizhi\Apps\Commands\Create
 * @author Steve
 * @date 2024-07-12 15:48:01
 * @link https://github.com/xxxl4
 * 
 */
namespace NexaMerchant\Upselling\Http\Controllers\Admin;


use Illuminate\Support\Facades\Redirect;

class SettingController extends Controller
{
    // redirect to configuration page
    public function index() {
        return Redirect::route('admin.configuration.index', (  'apps/' . 'Upselling'));
    }
}
