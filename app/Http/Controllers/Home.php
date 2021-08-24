<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

//import lib session
use Illuminate\Support\Facades\Session;

//import model suplier
use App\M_Supplier;

//import model pengadaan
use App\M_Pengadaan;

class Home extends Controller
{
    //function index

    public function index(){
       // echo "fungsi index home";

      $token = Session::get('token');

      $tokenDb = M_Supplier::where('token', $token)->count();

      if($tokenDb > 0){
         $data['token'] = $token;

      }else{
         $data['token'] = "kosong";

      }

      $data['pengadaan'] = M_Pengadaan::where('status','1')->paginate(15);

      return view('utama.home', $data);
    }
}