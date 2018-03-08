<?php

namespace App\Http\Controllers;

use App\Format;
use App\Tables;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Validator;


class HomeController extends Controller
{

    public function home()
    {
        $array = Array();
        $format = new Format();
        $select = $format->menu();
        $array['menu'] = $select;
        return view('welcome', $array);
    }


    public function GetProductTable()
    {
        $tableName = $_GET['tableName'];
        $rootName = 'shopFlyers';
        $header = $_GET['header'];
        $table = new Tables();
        $format = new Format();
        $firstTable = $table->getTableflyers135($tableName);
        $select = $format->menu();
        $array = Array();
        $array['menu'] = $select;
        $array['header'] = $header;
        $array['firstTable'] = $firstTable;
        $array['rootName'] = $rootName;
        $array['selectName'] = $tableName;
        return view('Flyers.Flyers135', $array);
    }

    public function identify()
    {

        $format = new Format();
        $select = $format->menu();
        $array = Array();
        $array['menu'] = $select;
        return view('identify', $array);
    }

    public function registration(Request $request)
    {
        $array = Array();
        $format = new Format();
        $select = $format->menu();
        $array['menu'] = $select;
        if ($request['create'] == 'true') {
            return view('registration', $array);
        } else if ($request['create'] == 'false') {
            $array['email'] = $request['email'];
            $array['password'] = md5($request['password']);
            $validator = Validator::make($request->all(), [
                'email' => 'required',
                'password' => 'required'
            ]);
            if ($validator->fails()) {

                return view('device', $array)->withErrors($validator->errors());
            }
            $user = new User();
            $users = $user->login($array);
            $users = User::find($users->id);
            Auth::login($users, true);
            return view('client', $array);
        }
        return redirect()->back();
    }

    public function registrationUser(Request $request)
    {
        $array = Array();
        $format = new Format();
        $select = $format->menu();
        $array['menu'] = $select;
        $array['menu'] = $select;
        $validator = Validator::make($request->all(), [
            'email' => 'required | email | unique:users',
            'password' => 'required | min:4',
            'name' => 'required | min:4'
        ]);
        if ($validator->fails()) {
            return view('registration', $array)->withErrors($validator->errors());
        }
        $user = new User();
        $user->name = $request['name'];
        $user->email = $request['email'];
        $user->portable = $request['portable'];
        $user->password = md5($request['password']);
        $user->company = $request['company'];
        $user->companyName = $request['companyName'];
        $user->telephone = $request['telephone'];
        $user->address = $request['address'];
        $user->addressElse = $request['addressElse'];
        $user->postalCode = $request['postalCode'];
        $user->city = $request['city'];
        $user->companyRe = $request['companyRe'];
        $user->nameRe = $request['nameRe'];
        $user->telephoneRe = $request['telephoneRe'];
        $user->nds = $request['nds'];
        $user->addressRe = $request['addressRe'];
        $user->addressElseRe = $request['addressElseRe'];
        $user->postalRe = $request['postalRe'];
        $user->cityRe = $request['cityRe'];
        $user->save();
        $format = new Format();
        $select = $format->menu();
        $array['menu'] = $select;
        Auth::login($user);
        return view('client', $array);
    }

    public function logout()
    {
        $format = new Format();
        $select = $format->menu();
        $array['menu'] = $select;
        Auth::logout();
        return view('identify', $array);
    }

    public function client()
    {
        $array = Array();
        $format = new Format();
        $select = $format->menu();
        $array['menu'] = $select;
        return view('client', $array);
    }

}
