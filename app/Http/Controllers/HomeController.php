<?php

namespace App\Http\Controllers;

use App\Models\Book;
use App\Models\Category;
use App\Models\Comment;
use App\Models\Faq;
use App\Models\Message;
use App\Models\Settings;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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

    public function storecomment(Request $request)
    {
        //dd($request);
        $data= new Comment();
        $data->user_id=Auth::id();
        $data->book_id=$request->input('book_id');
        $data->subject=$request->input('subject');
        $data->review=$request->input('review');
        $data->rate=$request->input('rate');
        $data->ip=$request->ip();
        $data->save();
        return redirect()->route('book',['id'=>$request->input('book_id')])->with('info','Your comment has been sent , Thank You.');
    }

    public function book($id){
        $data=Book::find($id);
        $settings = Settings::first();
        $comments = Comment::where('book_id',$id)->where('status','Enabled')->get();
        return view('home.book',[
            'data'=>$data,
            'settings'=>$settings,
            'comments'=>$comments,
        ]);
    }


    public function test()
    {
        return view('home.test');
    }

    public function logout(Request $reguest)
    {
        Auth::logout();

        $reguest->session()->invalidate();
        $reguest->session()->regenerateToken();
        return redirect('/');
    }
    public function loginadmincheck(Request $request) {
        $credentials = $request->validate([
            'email' => ['required','email'],
            'password' => ['required'],

        ]);
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/admin');

        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');



    }

}
