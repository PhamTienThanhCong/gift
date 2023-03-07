<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card_info extends Model
{
    use HasFactory;
    protected $table = 'card_infos';
    protected $fillable = [
        'userId',
        'url',
        'themeLanding',
        'config',
        'response',
        'maxview',
        'view',

    ];
}
