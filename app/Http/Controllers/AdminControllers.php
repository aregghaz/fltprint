<?php

namespace App\Http\Controllers;

use App\Tables;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class AdminControllers extends Controller
{
    public function admin()
    {
        return view('admin.admin');
    }

    public function login(Request $request)
    {

        $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        $email = $request['email'];
        $password = $request['password'];
        $user = new User();
        $asd = $user->login($email, $password);
        $user = User::find(1);
        Auth::login($user);
        if ($asd) {
            return view('admin.home');
        }

        return redirect()->back();
    }

    public function Flyers135()
    {
        $value = 1;
        $messageHeader = 'Flyers 135 gr satiné';
        $rowDelete = 'delete_flyers_135_gr_satiné';
        $editRootName = 'edite_Flyers_135_gr_satiné';
        $table = new Tables();
        $firstTable = $table->getTableflyers135();
        $rootName = 'add_Flyers_135_gr_satiné';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['rootName'] = $rootName;
        $array['messageHeader'] = $messageHeader;
        $array['rowDelete'] = $rowDelete;
        $array['editRootName'] = $editRootName;
        $array['value'] = $value;
        return view('admin.fluyers', $array);
    }

    public function flyers170()
    {
        $value = 2;
        $messageHeader = 'Flyers 170 gr satiné + vernis satiné';
        $rowDelete = 'delete_flyers_170';
        $editRootName = 'edite_Flyers170';
        $table = new Tables();
        $firstTable = $table->flyers170();
        $rootName = 'add_Flyers_170';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['rootName'] = $rootName;
        $array['messageHeader'] = $messageHeader;
        $array['rowDelete'] = $rowDelete;
        $array['editRootName'] = $editRootName;
        $array['value'] = $value;
        return view('admin.fluyers', $array);
    }

    public function flyers250()
    {
        $value = 3;
        $messageHeader = 'Flyers 250 gr + vernis satiné';
        $editRootName = 'edite_flyers250';
        $rowDelete = 'delete_flyers250';
        $table = new Tables();
        $firstTable = $table->flyers250();
        $rootName = 'add_flyers250';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['rootName'] = $rootName;
        $array['messageHeader'] = $messageHeader;
        $array['editRootName'] = $editRootName;
        $array['rowDelete'] = $rowDelete;
        $array['value'] = $value;
        return view('admin.fluyers', $array);
    }

    public function flyers300Plastic()
    {
        $value = 4 ;
        $messageHeader = 'Flyers 300 gr + plastification brillante';
        $editRootName = 'edite_flyers300Plastic';
        $rowDelete = 'delete_flyers300Plastic';
        $table = new Tables();
        $firstTable = $table->flyers300_plastic();
        $rootName = 'addFlyers300Plastic';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['rootName'] = $rootName;
        $array['messageHeader'] = $messageHeader;
        $array['value'] = $value;
        $array['editRootName'] = $editRootName;
        $array['rowDelete'] = $rowDelete;
        return view('admin.fluyers', $array);
    }


    public function flyers300()
    {
        $value = 5;
        $messageHeader = 'Flyers 300 gr';
        $editRootName = 'edite_flyers300';
        $rowDelete = 'delete_flyers300';
        $table = new Tables();
        $firstTable = $table->flyers300();
        $rootName = 'add_flyers300';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['rootName'] = $rootName;
        $array['messageHeader'] = $messageHeader;
        $array['value'] = $value;
        $array['editRootName'] = $editRootName;
        $array['rowDelete'] = $rowDelete;
        return view('admin.fluyers', $array);
    }

    public function flyers300Greenline()
    {
        $value = 6;
        $messageHeader = 'Flyers 300 gr Green Line';
        $editRootName = 'edite_flyers350';
        $rowDelete = 'delete_flyers350';
        $table = new Tables();
        $firstTable = $table->flyers300_greenLine();
        $rootName = 'add_flyers300Greenline';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['rootName'] = $rootName;
        $array['messageHeader'] = $messageHeader;
        $array['value'] = $value;
        $array['editRootName'] = $editRootName;
        $array['rowDelete'] = $rowDelete;
        return view('admin.fluyers', $array);
    }

    public function flyers350()
    {
        $value = 7;
        $editRootName = 'edite_flyers350';
        $rowDelete = 'delete_flyers350';
        $messageHeader = 'Flyers 350 gr';
        $table = new Tables();
        $firstTable = $table->flyers350();
        $rootName = 'add_flyers350';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['rootName'] = $rootName;
        $array['messageHeader'] = $messageHeader;
        $array['value'] = $value;
        $array['editRootName'] = $editRootName;
        $array['rowDelete'] = $rowDelete;
        return view('admin.fluyers', $array);
    }

    public function flyers350Brilant()
    {
        $messageHeader = 'Flyers 350 gr plastif brillante';
        $value = 8;
        $editRootName = 'edite_flyers350Brilante';
        $rowDelete = 'delete_flyers350Brilante';
        $table = new Tables();
        $firstTable = $table->flyers350_brilant();
        $rootName = 'add_flyers350Brilante';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['rootName'] = $rootName;
        $array['messageHeader'] = $messageHeader;
        $array['value'] = $value;
        $array['editRootName'] = $editRootName;
        $array['rowDelete'] = $rowDelete;
        return view('admin.fluyers', $array);
    }

    public function flyers350Plastic()
    {
        $value = 8;
        $editRootName = 'edite_flyers350Plastic';
        $rowDelete = 'delete_flyers350Plastic';
        $messageHeader = 'Flyers 350 gr plastif matte';
        $table = new Tables();
        $firstTable = $table->flyers350_plastic();
        $rootName = 'add_flyers350Plastic';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['rootName'] = $rootName;
        $array['messageHeader'] = $messageHeader;
        $array['value'] = $value;
        $array['editRootName'] = $editRootName;
        $array['rowDelete'] = $rowDelete;
        return view('admin.fluyers', $array);
    }


}
