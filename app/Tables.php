<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Tables extends Model
{
    public function Tables()
    {
        return $this->hasMany('App\Tables');
    }

    public function getTableflyers135($tableName)
    {
        return DB::table($tableName)->get();

    }
    public function shopTableflyers($productId,$selectName)
    {
        return DB::table($selectName)->where('id', $productId)->lists('name');

    }
    public function getByIdflyers($productId,$selectName)
    {
        return DB::table($selectName)->where('id', $productId)->get();

    }
    public function  getByIdflyersCount($selectName)
    {
        return DB::table($selectName)->where('id', 1)->get();
    }


    public function getUserInfo($userId){
        return DB::table('users')->where('id', $userId)->get();
    }

    public function changeUserInfo($array)
    {
        $insert = Array();
        $insert['name'] = $array['name'];
        $insert['email'] = $array['email'];
        $insert['portable'] = $array['portable'];
        $insert['company'] = $array['company'];
        $insert['companyName'] = $array['companyName'];
        $insert['telephone'] = $array['telephone'];
        $insert['address'] = $array['address'];
        $insert['addressElse'] = $array['addressElse'];
        $insert['postalCode'] = $array['postalCode'];
        $insert['city'] = $array['city'];

          DB::table('users')->where('id', $array['userId'])->update($insert);
        return  DB::table('users')->where('id', $array['userId'])->get();
    }































    public function Tableflyers135($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];
        DB::table('flyers135')->insert($array);

    }

    public function shopTableflyers135($productId)
    {
        return DB::table('flyers135')->where('id', $productId)->lists('name');

    }

    public function Deleteflyers135($names)
    {
        $array = Array();
        $array['id'] = $names['product_id'];
        $name = DB::table('flyers135')->where('id', $array)->lists('name');
        DB::table('flyers_format')->where('name', $name)->delete();
        DB::table('flyers135')->delete($array);

    }

    public function editeTableflyers135($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];
        $array['id'] = $names['id'];
        DB::table('flyers135')->where('id', $array['id'])->update($array);

    }

    public function editeTableflyers170($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];
        $array['id'] = $names['id'];

        DB::table('flyers170')->where('id', $array['id'])->update($array);

    }

    public function Tableflyers170($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];
        DB::table('flyers170')->insert($array);

    }



    public function Deleteflyers170($names)
    {
        $array = Array();
        $array['id'] = $names['product_id'];
        $name = DB::table('flyers170')->where('id', $array)->lists('name');
        DB::table('flyers170_format')->where('name', $name)->delete();
        DB::table('flyers170')->delete($array);


    }

    public function Tableflyers250($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];

        DB::table('flyers250')->insert($array);

    }

    public function shopTableflyers250($productId)
    {
        return DB::table('flyers250_format')->where('id', $productId)->lists('name');

    }

    public function Deleteflyers250($names)
    {
        $array = Array();
        $array['id'] = $names['product_id'];
        $name = DB::table('flyers250')->where('id', $array)->lists('name');
        DB::table('flyers250_format')->where('name', $name)->delete();
        DB::table('flyers250')->delete($array);

    }


    public function editeTableFlyers250($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];
        $array['id'] = $names['id'];

        DB::table('flyers250')->where('id', $array['id'])->update($array);

    }

    public function TableFlyers300Plastic($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];

        DB::table('flyers300_plastic')->insert($array);

    }

    public function editFlyers300Plastic($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];
        $array['id'] = $names['id'];

        DB::table('flyers300_plastic')->where('id', $array['id'])->update($array);

    }

    public function DeleteFlyers300Plastic($names)
    {
        $array = Array();
        $array['id'] = $names['product_id'];
        $name = DB::table('flyers300_plastic')->where('id', $array)->lists('name');
        DB::table('flyers300_plasti_format')->where('name', $name)->delete();
        DB::table('flyers300_plastic')->delete($array);

    }

    public function Tableflyers300($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];
        $array['count_5'] = $names['count_5'];
        $array['count_6'] = $names['count_6'];
        $array['count_7'] = $names['count_7'];
        $array['count_8'] = $names['count_8'];
        $array['count_9'] = $names['count_9'];
        $array['count_10'] = $names['count_10'];
        $array['count_11'] = $names['count_11'];
        $array['count_12'] = $names['count_12'];
        $array['count_13'] = $names['count_13'];

        DB::table('flyers300')->insert($array);

    }

    public function editeTableFlyers300($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];
        $array['count_5'] = $names['count_5'];
        $array['count_6'] = $names['count_6'];
        $array['count_7'] = $names['count_7'];
        $array['count_8'] = $names['count_8'];
        $array['count_9'] = $names['count_9'];
        $array['count_10'] = $names['count_10'];
        $array['count_11'] = $names['count_11'];
        $array['count_12'] = $names['count_12'];
        $array['count_13'] = $names['count_13'];
        $array['id'] = $names['id'];

        DB::table('flyers300')->where('id', $array['id'])->update($array);

    }

    public function DeleteFlyers300($names)
    {
        $array = Array();
        $array['id'] = $names['product_id'];
        $name = DB::table('flyers300')->where('id', $array)->lists('name');
        DB::table('flyers300_format')->where('name', $name)->delete();
        DB::table('flyers300')->delete($array);

    }

    public function TableFlyers300GreenLine($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];

        DB::table('flyers300_greenline')->insert($array);

    }

    public function editeTableFlyers300Greenline($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];

        $array['id'] = $names['id'];

        DB::table('flyers300_greenline')->where('id', $array['id'])->update($array);

    }

    public function deleteFlyers300Greenline($names)
    {
        $array = Array();
        $array['id'] = $names['product_id'];
        $name = DB::table('flyers300_greenline')->where('id', $array)->lists('name');
        DB::table('flyers300_greenline_format')->where('name', $name)->delete();
        DB::table('flyers300_greenline')->delete($array);

    }


    public function Tableflyers350($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];
        $array['count_5'] = $names['count_5'];
        $array['count_6'] = $names['count_6'];
        $array['count_7'] = $names['count_7'];
        $array['count_8'] = $names['count_8'];
        $array['count_9'] = $names['count_9'];
        $array['count_10'] = $names['count_10'];
        $array['count_11'] = $names['count_11'];
        $array['count_12'] = $names['count_12'];
        $array['count_13'] = $names['count_13'];
        $array['count_14'] = $names['count_14'];
        $array['count_15'] = $names['count_15'];

        DB::table('flyers350')->insert($array);

    }

    public function editeTableFlyers350($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];
        $array['count_5'] = $names['count_5'];
        $array['count_6'] = $names['count_6'];
        $array['count_7'] = $names['count_7'];
        $array['count_8'] = $names['count_8'];
        $array['count_9'] = $names['count_9'];
        $array['count_10'] = $names['count_10'];
        $array['count_11'] = $names['count_11'];
        $array['count_12'] = $names['count_12'];
        $array['count_13'] = $names['count_13'];
        $array['count_14'] = $names['count_14'];
        $array['count_15'] = $names['count_15'];
        $array['id'] = $names['id'];
        DB::table('flyers350')->where('id', $array['id'])->update($array);
    }

    public function DeleteFlyers350($names)
    {
        $array = Array();
        $array['id'] = $names['product_id'];
        $name = DB::table('flyers350')->where('id', $array)->lists('name');
        DB::table('flyers350_formats')->where('name', $name)->delete();
        DB::table('flyers350')->delete($array);
    }


    public function Tableflyers350Brilant($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];
        $array['count_5'] = $names['count_5'];
        $array['count_6'] = $names['count_6'];
        $array['count_7'] = $names['count_7'];
        $array['count_8'] = $names['count_8'];
        $array['count_9'] = $names['count_9'];
        $array['count_10'] = $names['count_10'];
        $array['count_11'] = $names['count_11'];
        $array['count_12'] = $names['count_12'];
        $array['count_13'] = $names['count_13'];
        $array['count_14'] = $names['count_14'];
        $array['count_15'] = $names['count_15'];

        DB::table('flyers350_brilant')->insert($array);

    }

    public function getByIdflyers350Brilant($productId)
    {
        return DB::table('flyers350_brilant')->where('id', $productId)->get();

    }

    public function editeTableFlyers350Brilant($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];
        $array['count_5'] = $names['count_5'];
        $array['count_6'] = $names['count_6'];
        $array['count_7'] = $names['count_7'];
        $array['count_8'] = $names['count_8'];
        $array['count_9'] = $names['count_9'];
        $array['count_10'] = $names['count_10'];
        $array['count_11'] = $names['count_11'];
        $array['count_12'] = $names['count_12'];
        $array['count_13'] = $names['count_13'];
        $array['count_14'] = $names['count_14'];
        $array['count_15'] = $names['count_15'];
        $array['id'] = $names['id'];
        DB::table('flyers350_brilant')->where('id', $array['id'])->update($array);
    }

    public function DeleteFlyers350Brilant($names)
    {
        $array = Array();
        $array['id'] = $names['product_id'];
        $name = DB::table('flyers350_brilant')->where('id', $array)->lists('name');
        DB::table('flyers350_brilant_format')->where('name', $name)->delete();
        DB::table('flyers350_brilant')->delete($array);
    }


    public function Tableflyers350Plastic($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];
        $array['count_5'] = $names['count_5'];
        $array['count_6'] = $names['count_6'];
        $array['count_7'] = $names['count_7'];
        $array['count_8'] = $names['count_8'];
        $array['count_9'] = $names['count_9'];
        $array['count_10'] = $names['count_10'];
        $array['count_11'] = $names['count_11'];
        $array['count_12'] = $names['count_12'];
        $array['count_13'] = $names['count_13'];
        $array['count_14'] = $names['count_14'];
        $array['count_15'] = $names['count_15'];

        DB::table('flyers350_plastic')->insert($array);

    }

    public function getByIdflyers350Plastic($productId)
    {
        return DB::table('flyers350_plastic')->where('id', $productId)->get();

    }

    public function editeTableFlyers350Plastic($names)
    {
        $array = Array();
        $array['name'] = $names['formats'];
        $array['count_1'] = $names['count_1'];
        $array['count_2'] = $names['count_2'];
        $array['count_3'] = $names['count_3'];
        $array['count_4'] = $names['count_4'];
        $array['count_5'] = $names['count_5'];
        $array['count_6'] = $names['count_6'];
        $array['count_7'] = $names['count_7'];
        $array['count_8'] = $names['count_8'];
        $array['count_9'] = $names['count_9'];
        $array['count_10'] = $names['count_10'];
        $array['count_11'] = $names['count_11'];
        $array['count_12'] = $names['count_12'];
        $array['count_13'] = $names['count_13'];
        $array['count_14'] = $names['count_14'];
        $array['count_15'] = $names['count_15'];
        $array['id'] = $names['id'];
        DB::table('flyers350_plastic')->where('id', $array['id'])->update($array);
    }

    public function DeleteFlyers350Plastic($names)
    {
        $array = Array();
        $array['id'] = $names['product_id'];
        $name = DB::table('flyers350_plastic')->where('id', $array)->lists('name');
        DB::table('flyers300_plasti_format')->where('name', $name)->delete();
        DB::table('flyers350_plastic')->delete($array);
    }


}
