<?php

    namespace App\Traits;
    use Illuminate\Http\Request;

    trait AdminAuth{

        public function adminLoginView(){
            return view('admin.auth.login');
        }

        public function adminLogin(Request $request)
        {
            $this->validateLogin($request);
            $this->redirectTo = route('admin.dashboard.index');
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
    
                return $this->sendLoginResponse($request);
            }
    
            // If the login attempt was unsuccessful we will increment the number of attempts
            // to login and redirect the user back to the login form. Of course, when this
            // user surpasses their maximum number of attempts they will get locked out.
            $this->incrementLoginAttempts($request);
    
            return $this->sendFailedLoginResponse($request);
        }
    }