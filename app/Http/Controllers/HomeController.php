<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }

    public function index()
    {
        $sliderdata=Book::limit(4)->get();
        $booklist1=Book::limit(8)->get();
        return view('home.index',[
            'sliderdata'=>$sliderdata,
            'booklist1'=>$booklist1
        ]);
    }
    public function book($id){
        $data=Book::find($id);
        return view('home.book',[
            'data'=>$data
        ]);
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
