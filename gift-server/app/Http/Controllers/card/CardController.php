<?php

namespace App\Http\Controllers\Card;

use App\Http\Controllers\Controller;
use App\Models\card_config;
use App\Models\card_type;
use App\Models\web_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // lấy tất cả dữ liệu trong bảng card_configs sau đó left join với bảng card_infos để đếm số lượng xuất hiện của id trong bảng card_configs
        $data = card_config::selectRaw('card_configs.*, COUNT(card_infos.id) as quantity')
            ->leftJoin('card_infos', 'card_configs.id', '=', 'card_infos.themeLanding')
            ->groupBy('card_configs.id')
            ->get();

        return view('content.admin.card.card',[
                'web_config' => $this->web_config,
                'data' => $data,
            ]);
    }

    public function create()
    {
        $this->web_config->title = 'Thêm thẻ';
        // get all card type
        $card_type = card_type::all();
        return view('content.admin.card.card_create',[
                'web_config' => $this->web_config,
                'card_types' => $card_type,
            ]);
    }

    public function edit($id)
    {
        $this->web_config->title = 'Sửa thẻ';
        // get data card config by id 
        $data = card_config::find($id);
        // get all card type
        $card_type = card_type::all();
        return view('content.admin.card.card_edit',[
                'web_config' => $this->web_config,
                'data' => $data,
                'card_types' => $card_type,
            ]);
    }

    public function view()
    {
        $this->web_config->title = 'Xem thẻ';
        return view('content.admin.card.card_view',[
                'web_config' => $this->web_config,
            ]);
    }

    public function store(Request $request)
    {
        // get data: name,url,cardId,config,template,source,description from form by method POST 
        $name = $request->get('name');
        $url = $request->get('url');
        $cardId = $request->get('cardId');
        $config = $request->get('config');
        $template = $request->get('template');
        $source = $request->get('source');
        $description = $request->get('description');

        // check has file name img and get file 
        if($request->hasFile('img')) {
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $image_name = time().'_'.$image_name;
            $image->move('images/cards', $image_name);

        }else{
            // return error
            return redirect()->back()->with('error', 'Vui lòng chọn ảnh');
        }

        // insert data to table card_config
        $card_config = new card_config();
        $card_config->name = $name;
        $card_config->url = $url;
        $card_config->cardId = $cardId;
        $card_config->config = $config;
        $card_config->template = $template;
        $card_config->source = $source;
        $card_config->description = $description;
        $card_config->img = $image_name;
        $card_config->save();

        $this->logSite(Auth::user()->id, 'Thêm thẻ', 'Thêm thẻ '.$name.' thành công');

        // return success.
        return redirect()->route('admin.card.create')->with('success', 'Thêm thẻ thành công');
    }

    public function update($id, Request $request)
    {
        // get data: name,url,cardId,config,template,source,description from form by method POST 
        $name = $request->get('name');
        $url = $request->get('url');
        $cardId = $request->get('cardId');
        $config = $request->get('config');
        $template = $request->get('template');
        $source = $request->get('source');
        $description = $request->get('description');
        $card_config = card_config::find($id);
        // check has file name img and get file 
        if($request->hasFile('img')) {
            $image = $request->file('img');
            $image_name = $image->getClientOriginalName();
            $image_name = time().'_'.$image_name;
            $image->move('images/cards', $image_name);

        }else{
            $image_name = $card_config->img;
        }

        // update data to table card_config
        
        $card_config->name = $name;
        $card_config->url = $url;
        $card_config->cardId = $cardId;
        $card_config->config = $config;
        $card_config->template = $template;
        $card_config->source = $source;
        $card_config->description = $description;
        $card_config->img = $image_name;
        $card_config->save();

        $this->logSite(Auth::user()->id, 'Sửa thẻ', 'Sửa thẻ '.$name.' thành công');
        // return success.
        return redirect()->route('admin.card.edit', $id)->with('success', 'Sửa thẻ thành công');
    }

    public function checkUrl(Request $request)
    {
        
        // get url by Method GET
        $url = $request->get('url');

        // tìm kiếm trong bảng card_types có giá trị trùng với url
        $card_type = card_config::where('url', $url)->first();
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
    public function demo($url){
        $card = card_config::where('url', $url)->first();
        if (!$card) {
            abort(404); 
        }
        $card_config = json_decode($card->config);
        $configs = [];
        for ($i=0; $i < count($card_config); $i++) { 
            array_push($configs, $card_config[$i]->demo);
        }
        return view("template-gift.$card->template",[
            'data' => $configs,
        ]);
    }
}
