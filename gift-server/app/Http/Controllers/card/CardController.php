<?php

namespace App\Http\Controllers\Card;

use App\Http\Controllers\Controller;
use App\Models\web_config;
use Illuminate\Http\Request;

class CardController extends Controller
{
    public $web_config;
    public function __construct()
    {
        $this->web_config = web_config::setSettingWeb();
    }
    public function index()
    {
        $this->web_config->title = 'Danh sách thẻ';
        return view('content.admin.card.card',[
                'web_config' => $this->web_config,
            ]);
    }

    public function create()
    {
        $this->web_config->title = 'Thêm thẻ';
        return view('content.admin.card.card_create',[
                'web_config' => $this->web_config,
            ]);
    }

    public function edit()
    {
        $this->web_config->title = 'Sửa thẻ';
        return view('content.admin.card.card_edit',[
                'web_config' => $this->web_config,
            ]);
    }

    public function view()
    {
        $this->web_config->title = 'Xem thẻ';
        return view('content.admin.card.card_view',[
                'web_config' => $this->web_config,
            ]);
    }
    
}
