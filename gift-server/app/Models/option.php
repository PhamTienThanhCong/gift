<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class option extends Model
{
    use HasFactory;

    public function getOption(){
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

        $config["about2_steps"] = json_decode($config["about2_steps"]);
        $config["services"] = json_decode($config["services"]);

        return $config;
    }
}
