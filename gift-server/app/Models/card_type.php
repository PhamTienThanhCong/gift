<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class card_type extends Model
{
    use HasFactory;
    protected $table = 'card_types';
    protected $fillable = [
        'name',
        'url',
        'description',
        'img',
    ];
}
