<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Option;

class HomeController extends Controller
{
    public function index()
    {
        // get all data from options table
        $options = Option::all();
        $data_value = [
            "slide_titles",
            "slide_contents",
            "slide_images"
        ];
        // export options to view
        $config = null;
        for ($i = 0; $i < count($options); $i++) {
            if (in_array($options[$i]->key, $data_value)){
                $data_array = explode(";", $options[$i]->value);
                $config[$options[$i]->key] = $data_array;
            }else{  
                $config[$options[$i]->key] = $options[$i]->value;
            }
        }
        $config["page"] = "home";
        $review = [
            "project_count" => "10",
            "client_count" => "20",
            "year_count" => "5",
            "blog_count" => "30"
        ];
        return view("content/home", [
            "config" => $config,
            "review" => $review
        ]);
    }
}
