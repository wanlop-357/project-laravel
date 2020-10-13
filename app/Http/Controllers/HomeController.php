<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use App\Models\DBModel;
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
        $BDM = new DBModel();
        $data = $BDM->getdata();
        return $data;
    }

    public function insertData(Request $request){
        $data = $request->input();
        return json_encode($data);


        
        // $BDM = new DBModel();
        // $data = $BDM->getdata();
        // return $data;
    }

    
}
