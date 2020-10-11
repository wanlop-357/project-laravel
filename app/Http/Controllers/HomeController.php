<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
class HomeController extends Controller
{
    public function test(){
        $data = DB::select("SELECT * FROM `regiter_account`");
        // $data = json_decode(json_encode($data), true);

        return $data ;
       
    }

    public function index(){
        echo view('Home');
    }
    public function getdata(){
        $data = DB::select("SELECT * FROM `regiter_account`");
        $data = json_decode(json_encode($data), true);
        return json_encode($data) ;
    }

    
}
