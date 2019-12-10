<?php

namespace App\Http\Controllers;

use Illuminate\Database\Seeder;
use App\Http\Controllers\Controller;
use App\stock;
use App\user;
use DB;
use App\Quotation;
use Illuminate\Http\Request;


class PageController extends Controller
{

    public function login()
    {
        return view('login');
    }

    public function home()
    {
        $stock = stock::all();


        return view('home', ['buku' => $stock]);
    }

    public function registration()
    {
        return view('regis');
    }

    public function cek_regis(){
        
        $new_user = new user();
 
        $new_user->name = request('nama');
        $new_user->email = request('email');
        $new_user->password = request('password');
        $new_user->type = 0;

        $new_user->save();
 
        return redirect('/');
    }

    public function cek_login(){
        
        $stock = stock::all();
        $users = user::where([['name', request('username')],['password',request('password')]])->first();


        if($users == null){
            return view('/login');
        }
        else if($users['type'] == 1){
            return view('/admin/home_login',['users' => $users,'buku' => $stock]);
        }
        else{
            return view('/consumen/consumen_login',['users' => $users,'buku' => $stock]);
        }
    }

    public function admin_edit(){
        $stok = stock::where([['id',$_POST['stock_id']]])->first();
        $all = stock::all();
        $users = user::where([['id',$_POST['id']]])->first();

        var_dump($_POST['stok']);
        return view('/admin/detail',['buku' => $all,'model' => $stok,'users' => $users]);
    }

    public function cara_pesan(){
        $stock = stock::all();
        return view('carapesan',['buku' => $stock]);
    }

    public function delete(){    
        $users = user::where([['id', request('users')]])->first();
        $deleted = stock::where([['id',request('stock')]])->first();

        DB::table('stocks')->where(['id' => $deleted['id']])->delete();

        $stock = stock::all();

        return view('/admin/home_login',['users' => $users,'buku' => $stock]);
    }
}   