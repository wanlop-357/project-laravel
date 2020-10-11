<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DBModel extends Model{
    public function getdata(){
        $data = DB::select("SELECT * FROM `regiter_account`");
        return $data ;
    }
}
