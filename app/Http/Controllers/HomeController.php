<?php

namespace App\Http\Controllers;

class HomeController extends Controller
{
    public function showWelcome()
    {
        return view('welcome');
    }

    public function sayHello($name){
        return "Hello, $name";
    }

    public function uppercase($word){
        return strtoupper($word);
    }

    public function increment($number){
        if (is_numeric($number)) {
            return $number +1;
        }else {
            return redirect('/');
        }
    }
}
 ?>
