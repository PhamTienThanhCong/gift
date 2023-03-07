<?php

namespace App\Http\Controllers\Card;

use App\Http\Controllers\Controller;
use App\Http\Requests\storeCardInfo;
use App\Models\card_config;
use App\Models\card_info;
use App\Models\web_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        // get all card info
        $card_infos = card_info::selectRaw('card_infos.*, card_configs.name as themeName, card_configs.url as themeUrl')
                    ->leftJoin('card_configs', 'card_infos.themeLanding', '=', 'card_configs.id')
                    ->where('card_infos.userId', auth()->user()->id)
                    ->get();
        return view('content.admin.card.card_infor',
            [
                'web_config' => $this->web_config,
                'data' => $card_infos,
            ]
        );
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

    public function edit($id)
    {
        // search template in database card_configs
        $mytemplate = card_info::selectRaw('card_infos.*, card_configs.url as themeUrl')
                    ->leftJoin('card_configs', 'card_infos.themeLanding', '=', 'card_configs.id')
                    ->find($id);
        if(!$mytemplate) return abort(404);
        $template = card_config::where('url', $mytemplate->themeUrl)->first();
        // if not found template return 404

        $config = json_decode($template->config);
        $dataConfig = json_decode($mytemplate->config);

        $this->web_config->title = "Tạo thẻ từ mẫu: {$template->name}";

        $this->web_config->title = 'Sửa thẻ';
        return view('content.admin.card.card_infor_edit',[
            'web_config' => $this->web_config,
            'usesTemplate' => $template,
            'configs' => $config,
            'data' => $mytemplate,
            'dataConfig' => $dataConfig,
        ]);

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
                $config[$i] = $image_name;
            } else {
                $config[$i] = $request->input($requestName);
            }
        }

        $config = json_encode($config);

        $card_info = new card_info;
        $card_info->url = $url;
        $card_info->userId = auth()->user()->id;
        $card_info->maxview = $maxview;
        $card_info->config = $config;
        $card_info->themeLanding = $themeLanding;
        $card_info->save();
        $this->logSite(Auth::user()->id, 'Tạo thẻ', 'Tạo thẻ mới với url: '.$url.'');
        return redirect()->route('user.card')->with('success', 'Tạo thẻ thành công');
    }

    public function update($id)
    {
        $themeLanding = request()->themeLanding;
        $url = request()->url;
        $maxview = request()->maxview;
        $maxview = $maxview ? $maxview : 0;

        $card_config = card_config::find($themeLanding);

        $card_config = json_decode($card_config->config);

        $config = [];
        $card_info = card_info::find($id);

        $old_config = json_decode($card_info->config);

        for ($i=0; $i < count($card_config); $i++) {
            $requestName = "data$i"; 
            if ($card_config[$i]->data_type == 'file') {
                if(request()->hasFile("$requestName")) {
                    $image = request()->file("$requestName");
                    $image_name = $image->getClientOriginalName();
                    $image_name = time().'_'.$image_name;
                    $image->move('images/cards', $image_name);
                }else{
                    $image_name = $old_config[$i];
                }
                $config[$i] = $image_name;
            } else {
                $config[$i] = request()->input($requestName);
            }
        }

        $config = json_encode($config);
        
        $card_info->url = $url;
        $card_info->maxview = $maxview;
        $card_info->config = $config;

        $card_info->save();
        $this->logSite(Auth::user()->id, 'Sửa thẻ', 'Sửa thẻ với url: '.$url.'');
        return redirect()->route('user.card.edit', $id)->with('success', 'Sửa thẻ thành công');
    }

    public function checkUrl(Request $request)
    {
        $url = $request->url;
        $template = card_info::where('url', $url)->first();
        if($template) return response()->json(['status' => false]);
        return response()->json(['status' => true]);
    }

    public function demo($url){
        $template = card_info::where('url', $url)->first();
        // kiểm tra xem người xem có phải là chủ thẻ không
        if(!auth()->check() || $template->userId != auth()->user()->id) {
            if(!session()->has('viewed'.$template->id)){
                $template->view += 1;
                $template->save();
                session()->put('viewed'.$template->id, true);
            }
        } 

        // kiểm tra xem đã xem hết số lượt xem chưa
        if($template->maxview != 0 && $template->view >= $template->maxview) return abort(404);
        
        if(!$template) return abort(404);

        $configs = json_decode($template->config);
        return view("template-gift.template1",[
            'data' => $configs,
        ]);
    }
}
