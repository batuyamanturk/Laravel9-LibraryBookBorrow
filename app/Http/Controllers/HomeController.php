<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {
        echo "Index Function";
    }

    public function test()
    {
        return view('home.test');
    }

    public function param($id,$num)
    {
        //echo "Parameter 1:",$id;
        //echo "<br> Parameter 2:",$num;
        //echo "<br> Sum of parameters :",$id+$num;
        return view('home.test2',
            [
                'id'=>$id,
                'num'=>$num
            ]);
    }

    public function save(Request $request)
    {
        echo "Save function";
        echo "<br>First Name:",$_REQUEST["fname"];
        echo "<br>Last Name:",$_REQUEST["lname"];
    }
}
