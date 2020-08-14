<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
class FirstController extends Controller
{
    public function __construct(){
        $this -> middleware('auth') -> except('first2');
    }
   
    public function nameOfAdmin(){
        return 'here page of admin';
    }
    public function first(){
        return 'first';
    }
    public function first1(){
        return 'first1';
    }
    public function first2(){
        return 'first2';
    }
    public function first3(){
        return 'first3';
    }
}
