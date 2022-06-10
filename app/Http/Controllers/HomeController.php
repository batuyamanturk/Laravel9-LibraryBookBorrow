<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public static function maincategorylist()
    {
        return Category::where('parent_id','=',0)->with('children')->get();
    }
    public function categorybooks($id)
    {
        $category=Category::find($id);
        $books= DB::table('books')->where('category_id',$id)->get();
        $settings = Settings::first();
        return view('home.categorybooks',[
            'category'=>$category,
            'books'=>$books,
            'settings'=>$settings
        ]);
    }

    public function index()
    {
        $page='home';
        $sliderdata=Book::limit(4)->get();
        $booklist1=Book::limit(8)->get();
        $settings = Settings::first();
        return view('home.index',[
            'page'=>$page,
            'settings'=>$settings,
            'sliderdata'=>$sliderdata,
            'booklist1'=>$booklist1
        ]);
    }

    public function about()
    {

        $settings = Settings::first();
        return view('home.about',[
            'settings'=>$settings,
        ]);
    }

    public function references()
    {
        $settings = Settings::first();
        return view('home.references',[
            'settings'=>$settings,
        ]);
    }
    public function contact()
    {
        $settings = Settings::first();
        return view('home.contact',[
            'settings'=>$settings,
        ]);
    }

    public function faq()
    {
        $settings = Settings::first();
        $datalist = Faq::all();
        return view('home.faq',[
            'settings'=>$settings,
            'datalist'=>$datalist
        ]);
    }

    public function storemessage(Request $request)
    {
        $data= new Message();
        $data->name=$request->input('name');
        $data->phone=$request->input('phone');
        $data->email=$request->input('email');
        $data->subject=$request->input('subject');
        $data->message=$request->input('message');
        $data->ip=$request->ip();
        $data->save();
        return redirect()->route('contact')->with('info','Your message has been sent , Thank You.');
    }

    public function book($id){
        $data=Book::find($id);
        $settings = Settings::first();
        return view('home.book',[
            'data'=>$data,
            'settings'=>$settings,
        ]);
    }


    public function test()
    {
        return view('home.test');
    }

}
