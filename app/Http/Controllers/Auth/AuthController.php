<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Request\LoginRequest;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Services\AuthService;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Laravel\Socialite\Facades\Socialite;


class AuthController extends Controller
{
    protected $service;

    public function __construct(AuthService $service)
    {
        $this->service = $service;
    }

    /**
     * Show specified view.
     *
     * @param Request $request
     *
     * @return Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|Response
     */
    public function loginView()
    {

        if (Auth::user()) {
            return redirect(route('productIndex', app()->getLocale()));
        } else {
            return view('admin.auth.login');
        }
    }

    /**
     * Authenticate login user.
     *
     * @param LoginRequest $request
     *
     * @return Application|RedirectResponse|Response|Redirector
     * @throws ValidationException
     */
    public function login(LoginRequest $request)
    {
        if (!Auth::attempt([
            'email' => $request->email,
            'password' => $request->password
        ])) {
            $error = ValidationException::withMessages([
                'auth' => [__('validation.wrong_email_or_password')],
            ]);
            throw $error;
        }

        return redirect(route('productIndex', app()->getLocale()));

    }



    /**
     * Logout user.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function logout()
    {
        if (Auth::user()) {
            Auth::logout();
        }
        return redirect()->route('login-view', app()->getLocale());
    }
}
