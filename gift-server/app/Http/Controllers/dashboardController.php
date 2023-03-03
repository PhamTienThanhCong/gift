<?php

namespace App\Http\Controllers;

use App\Models\web_config;
use Illuminate\Http\Request;

class dashboardController extends Controller
{
    public $web_config;
    public function __construct()
    {
        $this->web_config = web_config::setSettingWeb();
    }
    public function index()
    {
        $this->web_config->title = 'Dashboard';
        return view('content.admin.dashboard',[
                'web_config' => $this->web_config,
            ]);
    }
}
