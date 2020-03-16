<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Validation\ValidationException;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    protected $maxAttempts = 2;

    protected $redirectTo = '/digi';

    public function index()
    {
        return view('digi.login.index');
    }

    public function username()
    {
        return 'email';
    }

    protected function updateLoginStatus(Request $request)
    {
        auth()->user()->statistik_logins()->updateOrCreate([
            'user_id' => auth()->user()->id,
            'ip_address' => $request->ip()
        ])->increment('hit');

        return $this;
    }

    protected function credentials(Request $request)
    {
        return $request->except(['_token']);
    }

    protected function userIsActive()
    {
        return auth()->user()->is_active ? $this : $this->userNotActiveResponse();
    }

    protected function userNotActiveResponse()
    {
        $this->guard()->logout();
        $this->request->session()->invalidate();
        throw ValidationException::withMessages([
            $this->username() => [trans('auth.not_active')],
        ]);
    }

    public function login(Request $request)
    {
        $this->request = $request;

        $this->validateLogin($request);

        if ($this->hasTooManyLoginAttempts($request)) {
            $this->fireLockoutEvent($request);
            return $this->sendLockoutResponse($request);
        }

        if ($this->attemptLogin($request)) {
            return $this->userIsActive()
                        ->updateLoginStatus($request)
                        ->sendLoginResponse($request);
        }

        $this->incrementLoginAttempts($request);

        return $this->sendFailedLoginResponse($request);
    }

    public function create()
    {
        return view('digi.login.create');
    }

    public function store(Request $request)
    {
        return $request;
    }
}
