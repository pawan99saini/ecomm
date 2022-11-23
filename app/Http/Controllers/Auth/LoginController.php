<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
class LoginController extends Controller {

    // use AuthenticatesUsers;
    use AuthenticatesUsers {
        logout as performLogout;
    }

    protected $redirectTo = RouteServiceProvider::HOME;

    public function __construct() {
    //echo Hash::make('12345678'); exit;
        //echo "<pre>"; print_r((DB::connection()->getDatabaseName())); exit;
//echo "<pre>"; print_r(get_class_methods(DB::connection())); exit;
        $this->middleware('guest')->except('logout');
    }

    public function logout(Request $request) {
        $this->performLogout($request);
        return redirect()->route('login');
    }
}
