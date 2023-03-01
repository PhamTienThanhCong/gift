<?php

namespace App\Http\Controllers;

use App\Models\log_site;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    // logsite function
    public function logSite($userId, $ip, $note)
    {
        log_site::create([
            'userId' => $userId,
            'ip' => $ip,
            'note' => $note,
        ]);
    }
}
