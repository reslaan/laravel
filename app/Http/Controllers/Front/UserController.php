<?php

namespace App\Http\Controllers\Front;


use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use stdClass;

class UserController extends Controller
{
    public function showAdminName(){

        return 'hello every one';
    }

    public function getIndex(){


            // $data['name'] = 'reso';
            // $data['age'] = 22;
            $data = [];

            $obj = new \stdClass();
            $obj -> name = 'reslaan';
            $obj -> age = 23;

            return view('welcome' ,compact('data')) ;

    }

    public function landing(){
        return view('landing');
    }
}
