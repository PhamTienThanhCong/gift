<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card_config extends Model
{
    use HasFactory;
    protected $table = 'card_configs';

    protected $fillable = [
        'cardId',
        'name',
        'url',
        'img',
        'description',
        'config',
        'template',
    ];
}
