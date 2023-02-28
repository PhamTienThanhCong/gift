<?php

namespace App\Http\Controllers;

use App\Models\developer;
use Illuminate\Http\Request;
use App\Models\Option;
use App\Models\web_config;

class HomeController extends Controller
{
    public $web_config;
    public $config;
    public function __construct()
    {
        $this->web_config = web_config::setSettingWeb();
        $this->config = Option::getOption();
    }
    
    public function index()
    {
        $review = [
            "project_count" => "10",
            "client_count" => "20",
            "year_count" => "5",
            "blog_count" => "30"
        ];

        return view("content/home", [
            "web_config" => $this->web_config,
            "config" => $this->config,
            "review" => $review
        ]);
    }

    public function about()
    {
        $this->web_config->title = "Về chúng tôi";
        $this->web_config->imagePreview = $this->config['slide_images'][0];
        $review = [
            "project_count" => "10",
            "client_count" => "20",
            "year_count" => "5",
            "blog_count" => "30"
        ];
        $develops = developer::all();
        return view("content/about", [
            "web_config" => $this->web_config,
            "config" => $this->config,
            "review" => $review,
            "develops" => $develops
        ]);
    }

    public function contact()
    {
        $this->web_config->title = "Liên hệ";
        $this->web_config->imagePreview = $this->config['about_image'];
        return view("content/contact", [
            "web_config" => $this->web_config,
            "config" => $this->config
        ]);
    }
}
