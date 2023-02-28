<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class web_config extends Model
{
    use HasFactory;
    protected $table = "web_configs";

    public function setSettingWeb(){
        $web_config = web_config::get()->first();
        $web_config->social = json_decode($web_config->social);
        return $web_config;
    }
}
