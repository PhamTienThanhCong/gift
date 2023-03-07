<?php

namespace App\Http\Controllers\Card;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeCardInfo;
use App\Models\card_config;
use App\Models\card_info;
use App\Models\web_config;
use Illuminate\Http\Request;

class CardInforController extends Controller
{
    public $web_config;
    public function __construct()
    {
        $this->web_config = web_config::setSettingWeb();
    }
    public function index()
    {
        $this->web_config->title = 'Xem thẻ';
        return view('content.admin.card.card_infor');
    }

    public function create($template)
    {
        // search template in database card_configs
        $template = card_config::where('url', $template)->first();
        // if not found template return 404
        if(!$template) return abort(404);

        $config = json_decode($template->config);

        $this->web_config->title = "Tạo thẻ từ mẫu: {$template->name}";

        return view('content.admin.card.card_infor_create',[
                'web_config' => $this->web_config,
                'usesTemplate' => $template,
                'configs' => $config
            ]);
    }

    public function edit()
    {
        $this->web_config->title = 'Sửa thẻ';
        return view('content.admin.card.card_infor');
    }

    public function view()
    {
        $this->web_config->title = 'Xem thẻ';
        return view('content.admin.card.card_infor');
    }

    public function store(storeCardInfo $request)
    {
        $themeLanding = $request->themeLanding;
        $url = $request->url;
        $maxview = $request->maxview;
        $maxview = $maxview ? $maxview : 0;

        $card_config = card_config::find($themeLanding);

        $card_config = json_decode($card_config->config);
        $config = [];
        
        for ($i=0; $i < count($card_config); $i++) {
            $requestName = "data$i"; 
            if ($card_config[$i]->data_type == 'file') {
                if($request->hasFile("$requestName")) {
                    $image = $request->file("$requestName");
                    $image_name = $image->getClientOriginalName();
                    $image_name = time().'_'.$image_name;
                    $image->move('images/cards', $image_name);
                }else{
                    $image_name = 'demo.jpg';
                }
            } else {
                $config[$card_config[$i]->name] = $request->input($requestName);
            }
        }

        $config = json_encode($config);

        $card_info = new card_info;
        $card_info->url = $url;
        $card_info->maxview = $maxview;
        $card_info->config = $config;
        $card_info->themeLanding = $themeLanding;
        $card_info->save();

        return redirect()->route('user.card')->with('success', 'Tạo thẻ thành công');
    }

    public function update()
    {
        return redirect()->route('admin.card');
    }

    public function checkUrl(Request $request)
    {
        $url = $request->url;
        $template = card_info::where('url', $url)->first();
        if($template) return response()->json(['status' => false]);
        return response()->json(['status' => true]);
    }
}
