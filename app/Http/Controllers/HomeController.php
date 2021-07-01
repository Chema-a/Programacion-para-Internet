<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $first_login = Auth::user()->first_login;
        $type = Auth::user()->type;
        if ($first_login == '1') {
            User::where('id', Auth::user()->id)->update(array('first_login' => '0'));
            if ($type == '1') {
                return redirect('/student/create');
            } else {
                return redirect('/teacher/create');
            }
        } else {
            return redirect('/');
        }
    }
}
