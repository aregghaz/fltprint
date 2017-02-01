<?php
namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;
use DB;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    protected $table = 'users';
    public function login($email, $passwprd)
    {
        return DB::table('users')->where(['email' => $email, 'password' => $passwprd])->get();
    }
}