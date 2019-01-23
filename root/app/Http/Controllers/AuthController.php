<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use DB;
use Session;
use Core;
class AuthController extends Controller
{
    //
    public function view()
    {
        return view('_login');
    }

    public function redirectPath()
    {
        if (method_exists($this, 'redirectTo')) {
            return $this->redirectTo();
        }

        return property_exists($this, 'redirectTo') ? $this->redirectTo : '/';
    }

    public function login(Request $r)
    {
        // dd($r->all());
        $this->validateLogin($r);
        if ($this->attemptLogin($r)) {
            $this->authenticated($r);
            return redirect($this->redirectTo);
            // return back();
        } else {
            return back()->withErrors("Incorrect Credentials");
        }
    }

    public function validateLogin(Request $r)
    {
        $msg = [ 
                'txt_uname.required' => 'The username field is required.',
                'txt_pass.required' => 'The password field is required.',
                'string' => 'Invalid Credentials',
                ];
        $this->validate($r, ['txt_uname' => 'required|string', 'txt_pass' => 'required|string'], $msg);
    }

    public function attemptLogin(Request $r)
    {
        $users = Core::sql("SELECT * FROM rssys.x08");
        foreach ($users as $u) {
            if ($u->uid == strtoupper($r->txt_uname)) {
                if ($u->pwd == $r->txt_pass) {
                    return true;
                }
            }
        }
        
        return false;
    }

    protected function authenticated(Request $r)
    {
        // Set User Account Session
        // $r->session()->regenerate();
        Session::put('_user', ['id' => $r->txt_uname]);
    }

    public function logout()
    {
        Session::flush();
        return redirect()->to($this->redirectTo);
    }

    protected $redirectTo = "/";
}
