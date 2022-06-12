<?php

namespace App\Http\Controllers;

use App\Models\ShopCart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Stmt\Else_;

class ShopCartController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ShopCart::where('user_id',Auth::id())->get();
        return view('home.user.shopcart',[
            'data'=>$data,
        ]);
    }

    public function countshopcart()
    {
        return  ShopCart::where('user_id',Auth::id())->count();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $id=$request->id;
        $data = ShopCart::where('book_id',$id)->where('user_id',Auth::id())->first();
        if ($data)
        {
            return redirect()->back()->with('info','You can not add same book twice');

        }
        else
        {
            $data = new ShopCart();
            $data->book_id = $request->input('id');
            $data->user_id = Auth::id();
        }
        $data->save();

        return redirect()->back()->with('info','Book Added to Shopcart..');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data=ShopCart::find($id);
        $data->delete();
        return redirect()->back()->with('info','Book deleted from Shopcart..');
    }
}
