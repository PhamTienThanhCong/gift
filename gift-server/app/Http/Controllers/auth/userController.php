<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\auth\LoginRequest;
use App\Http\Requests\auth\StoreRequest;
use App\Models\User;
use App\Models\web_config;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    public $web_config;
    public $config;
    public function __construct()
    {
        $this->web_config = web_config::setSettingWeb();
    }
    
    // login function
    public function login()
    {
        $this->web_config->title = "Đăng nhập";
        $this->web_config->imagePreview = 'login-gb.jpg';
        return view('content/auth/login', [
            "web_config" => $this->web_config
        ]);
    }
    // register function
    public function register()
    {
        $this->web_config->title = "Đăng ký";
        $this->web_config->imagePreview = 'login-gb.jpg';
        return view('content/auth/register', [
            "web_config" => $this->web_config
        ]);
    }
    // forgot password function
    public function forgotPassword()
    {
        $this->web_config->title = "Quên mật khẩu";
        $this->web_config->imagePreview = 'login-gb.jpg';
        return view('content/auth/forgot-password', [
            "web_config" => $this->web_config
        ]);
    }

    // login process function
    public function loginProcess(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                // get ip address of user
                $this->logSite($user->id, $request->ip(), "Đăng nhập tài khoản");
                
                
                return redirect()->route('home');
            }
        } 
        // save email to session old
        $request->session()->flash('email', $request->email);

        return redirect()->route('login')->with('error', 'Đăng nhập thất bại');
    }

    // register process function
    public function registerProcess(StoreRequest $request)
    {
        // create userName from fullName 
        $userName = str_replace(' ', '', $request->fullname);
        $userName = preg_replace('/[^A-Za-z0-9\-]/', '', $userName);

        $checkUserName = User::where('userName', $userName)->first();
        if ($checkUserName) {
            $userName = $userName . rand(1, 100);
        }

        // tạo mã token dài 250 ký tự
        $token = bin2hex(random_bytes(120));

        // create user
        $user = User::create([
            'email' => $request->email,
            'userName' => $userName,
            'fullName' => $request->fullname,
            'password' => Hash::make($request->password),
            'accessToken' => $token,
        ]);

        // save to log site
        $this->logSite($user->id, $request->ip(), "Đăng ký tài khoản");

        // go to login page with message done
        return redirect()->route('login')->with('message', 'Đăng ký thành công');
    }

    // forgot password process function
    public function forgotPasswordProcess(Request $request)
    {

    }

}
