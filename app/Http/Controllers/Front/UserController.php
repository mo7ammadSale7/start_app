<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class UserController extends Controller
{
    public function showUserName() {
        return 'Mohammad Saleh';
    }

    public function getIndex() {
        $data=[];
        $data['welcome'] = 'welcome mahmoud in laravel';
        $data['age'] = 13;

        $obj = new \stdClass();

        $obj -> name = 'ahmed';
        $obj -> gender = 'male';
        $obj -> age = 38;

        return view('welcome', compact('obj'));
    }
}
