<?php

namespace Cms\Modules\Auth\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Auth\Services\Contracts\AuthUserServiceContract;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    use AuthenticatesUsers {
        logout as performLogout;
    }

    protected $service;

    public function __construct(AuthUserServiceContract $service)
    {
        $this->service = $service;
    }

    public function showLoginForm()
    {
        return view('Auth::login');
    }

    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('login');
    }
}
