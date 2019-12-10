<?php

namespace App\Http\Controllers;

use App\stock;
use Illuminate\Http\Request;
use App\user;


class stock_controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function show(stock $stock)
    {
        $all = stock::all();
        $users = user::where([['id', $_POST['id']]])->first();
        $stock = stock::where([['id',$_POST['stock_id']]])->first();

        if($users['type'] == 1){
              return view('/admin/detail',['buku' => $all,'model' => $stock,'users' => $users]);
        }
        else{
             return view('/consumen/detail',['buku' => $all,'model' => $stock,'users' => $users]);
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function edit(stock $stock)
    {
        $all = stock::all();

        return view('detail',['buku' => $all,'model' => $stock]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, stock $stock)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\stock  $stock
     * @return \Illuminate\Http\Response
     */
    public function destroy(stock $stock)
    {
        //
    }
}
