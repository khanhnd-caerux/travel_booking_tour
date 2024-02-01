<?php

namespace Cms\Modules\Auth\Controllers;

use App\Http\Controllers\Controller;
use Cms\Modules\Auth\Services\Contracts\AuthUserServiceContract;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Cms\Modules\Auth\Requests\LoginRequest;

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

    public function login(LoginRequest $request)
    {
        $this->validateLogin($request);

        // If the class is using the ThrottlesLogins trait, we can automatically throttle
        // the login attempts for this application. We'll key this by the username and
        // the IP address of the client making these requests into this application.
        if (method_exists($this, 'hasTooManyLoginAttempts') &&
            $this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);

            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            if ($request->hasSession()) {
                $request->session()->put('auth.password_confirmed_at', time());
            }

            return redirect()->route('admin.dashboard');
        }

        // If the login attempt was unsuccessful we will increment the number of attempts
        // to login and redirect the user back to the login form. Of course, when this
        // user surpasses their maximum number of attempts they will get locked out.
        $this->incrementLoginAttempts($request);

        return redirect()->back()->with('password-fail', 'Sai tên tài khoản hoặc mật khẩu')->withInput();
    }

    public function logout(Request $request)
    {
        $this->performLogout($request);
        return redirect()->route('login');
    }
}
