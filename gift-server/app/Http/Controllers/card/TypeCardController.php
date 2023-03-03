<?php

namespace App\Http\Controllers\Card;

use App\Http\Controllers\Controller;
use App\Models\card_type;
use App\Models\web_config;
use Illuminate\Http\Request;

class TypeCardController extends Controller
{
    public $web_config;
    public function __construct()
    {
        $this->web_config = web_config::setSettingWeb();
    }
    public function index()
    {
        $this->web_config->title = 'Danh sách loại thẻ';
        return view('content.admin.card.type_card',[
                'web_config' => $this->web_config,
            ]);
    }

    public function create()
    {
        $this->web_config->title = 'Thêm loại thẻ';
        return view('content.admin.card.type_card_create',[
                'web_config' => $this->web_config,
            ]);
    }

    public function store(Request $request)
    {
        //
    }

    public function edit()
    {
        $this->web_config->title = 'Sửa loại thẻ';
        return view('content.admin.card.type_card_edit',[
                'web_config' => $this->web_config,
            ]);
    }

    public function update(Request $request, $id)
    {
        //
    }
    // view
    public function view()
    {
        $this->web_config->title = 'Xem loại thẻ';
        return view('content.admin.card.type_card_view',[
                'web_config' => $this->web_config,
            ]);
    }
    // check isset url
    public function checkUrl($url)
    {   
        // tìm kiếm trong bảng card_types có giá trị trùng với url
        $card_type = card_type::where('url', $url)->first();
        // nếu có trả về false dạng json
        if($card_type) {
            return response()->json(
                [
                    'message' => 'Đã tồn tại url này',
                    'status' => false
                ]
            );
        }
        // nếu không có trả về false
        return response()->json(
            [
                'message' => 'Không tồn tại url này',
                'status' => true
            ]
        );
    }
}
