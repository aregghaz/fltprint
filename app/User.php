<?php

namespace App;

use Illuminate\Foundation\Auth\User as Authenticatable;
use DB;
use Illuminate\Support\Facades\Auth;
class User extends Authenticatable
{


    public function login($array) {
        $insert = Array();
        $insert['email'] = $array['email'];
        $insert['password'] = $array['password'];

        return DB::table('users')->where(['email' => $insert['email'],'password'=> $insert['password']])->first();
    }
}
