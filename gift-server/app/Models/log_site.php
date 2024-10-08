<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class log_site extends Model
{
    use HasFactory;
    protected $table = 'log_sites';

    protected $fillable = [
        'ip',
        'userId',
        'note',
    ];
}
