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

    public function getTableflyers135()
    {
        return DB::table('flyers135')->get();

    }


    public function getByIdflyers135($productId)
    {

        return DB::table('flyers135')->where('id', $productId)->get();
    }

    public function getTableFlyers135_formats()
    {

        return DB::table('flyers135_formats')->get();
    }

    public function getTableFlyers135_option()
    {

        return DB::table('flyers300brilante_option')->get();
    }

    public function getFlyers300Brilante_option()
    {

        return DB::table('flyers300brilante_option')->get();
    }

    public function affiches1()
    {

        return DB::table('affiches1')->get();
    }

    public function Affiches135()
    {

        return DB::table('Affiches135')->get();
    }

    public function shopAffiches135($productId)
    {

        return DB::table('affiches135')->where('id', $productId)->lists('name');
    }

    public function Affiches_grand()
    {

        return DB::table('affiches_grand')->get();
    }

    public function shopAffichesGrand($productId)
    {

        return DB::table('affiches_grand')->where('id', $productId)->lists('name');
    }


    public function affiche_digitale()
    {

        return DB::table('affiche_digitale')->get();
    }

    public function shopAfficheDigitale($productId)
    {
        return DB::table('affiche_digitale')->where('id', $productId)->lists('name');

    }

    public function flyers170()
    {

        return DB::table('flyers170')->get();
    }

    public function getByIdflyers170($productId)
    {
        return DB::table('flyers170')->where('id', $productId)->get();

    }

    public function flyers250()
    {

        return DB::table('flyers250')->get();
    }

    public function getByIdflyers250($productId)
    {
        return DB::table('flyers250')->where('id', $productId)->get();

    }

    public function shopflyers250($productId)
    {
        return DB::table('flyers250')->where('id', $productId)->lists('name');

    }

    public function flyers300()
    {

        return DB::table('flyers300')->get();
    }

    public function getByIdflyers300($productId)
    {
        return DB::table('flyers300')->where('id', $productId)->get();

    }

    public function shopFlyers300($productId)
    {

        return DB::table('flyers300')->where('id', $productId)->lists('name');
    }

    public function flyers300_greenLine()
    {

        return DB::table('flyers300_greenLine')->get();
    }

    public function getByIdflyers300GreenLine($productId)
    {
        return DB::table('flyers300_greenLine')->where('id', $productId)->get();

    }

    public function shopFlyers300_greenLine($productId)
    {
        return DB::table('flyers300_greenLine')->where('id', $productId)->lists('name');

    }

    public function flyers300_plastic()
    {

        return DB::table('flyers300_plastic')->get();
    }

    public function shopFlyers300Plastic($productId)
    {

        return DB::table('flyers300_plastic')->where('id', $productId)->lists('name');
    }

    public function getByIdFlyers300Plastic($productId)
    {
        return DB::table('flyers300_plastic')->where('id', $productId)->get();

    }

    public function flyers350()
    {

        return DB::table('flyers350')->get();
    }

    public function getByIdflyers350($productId)
    {
        return DB::table('flyers350')->where('id', $productId)->get();

    }

    public function shopFlyers350($productId)
    {
        return DB::table('flyers350')->where('id', $productId)->lists('name');

    }

    public function flyers350_brilant()
    {

        return DB::table('flyers350_brilant')->get();
    }

    public function shopFlyers350Brilant($productId)
    {
        return DB::table('flyers350_brilant')->where('id', $productId)->lists('name');

    }

    public function flyers350_plastic()
    {

        return DB::table('flyers350_plastic')->get();
    }

    public function shopFlyers350_plastic($productId)
    {
        return DB::table('flyers350_plastic')->where('id', $productId)->lists('name');

    }

    public function affiches_green()
    {

        return DB::table('affiches_green')->get();
    }

    public function shopAffichesGreen($productId)
    {
        return DB::table('affiches_green')->where('id', $productId)->lists('name');

    }


    public function affiches_recto()
    {

        return DB::table('affiches_recto')->get();
    }

    public function shopAffichesRecto($productId)
    {
        return DB::table('affiches_recto')->where('id', $productId)->lists('name');

    }

    public function dépliants135()
    {

        return DB::table('dépliants135')->get();
    }

    public function shopDépliants135($productId)
    {
        return DB::table('dépliants135')->where('id', $productId)->lists('name');

    }

    public function carte_visite_brillante()
    {

        return DB::table('carte_visite_brillante')->get();
    }

    public function shopCarteVisiteBrillante($productId)
    {
        return DB::table('carte_visite_brillante')->where('id', $productId)->lists('name');

    }

    public function carte_visite_matte()
    {

        return DB::table('carte_visite_matte')->get();
    }

    public function shopCarteVisiteMette($productId)
    {
        return DB::table('carte_visite_matte')->where('id', $productId)->lists('name');

    }

    public function carte_visite_green()
    {

        return DB::table('carte_visite_green')->get();
    }

    public function shopCarteVisiteGreen($productId)
    {
        return DB::table('carte_visite_green')->where('id', $productId)->lists('name');

    }

    public function carte_300()
    {
        return DB::table('carte_300')->get();
    }

    public function shopCarte300($productId)
    {
        return DB::table('carte_300')->where('id', $productId)->lists('name');

    }

    public function carte_deluxe()
    {

        return DB::table('carte_deluxe')->get();
    }

    public function shopCarteDeluxe($productId)
    {

        return DB::table('carte_deluxe')->where('id', $productId)->lists('name');
    }

    public function carte350()
    {

        return DB::table('carte350')->get();
    }

    public function carte310()
    {

        return DB::table('carte310')->get();
    }

    public function panneaux_plats_4()
    {

        return DB::table('panneaux_plats_4')->get();
    }

    public function panneaux_pyramid_4()
    {

        return DB::table('panneaux_pyramid_4')->get();
    }

    public function panneaux_fléchage_4()
    {

        return DB::table('panneaux_fléchage_4')->get();
    }

    public function roll_Up()
    {

        return DB::table('roll_up')->get();
    }

    public function vinyle_autocollant()
    {

        return DB::table('vinyle_autocollant')->get();
    }

    public function vinyle_autocollant_rond()
    {

        return DB::table('vinyle_autocollant_rond')->get();
    }

    public function vinyle_autocollant_grand()
    {

        return DB::table('vinyle_autocollant_grand')->get();
    }

    public function brochures_A6()
    {

        return DB::table('brochures_A6')->get();
    }

    public function brochures_A5()
    {

        return DB::table('brochures_A5')->get();
    }

    public function brochures_a4()
    {

        return DB::table('brochures_a4')->get();
    }

    public function brochures_a4_170()
    {

        return DB::table('brochures_a4_170')->get();
    }

    public function Reliure_135()
    {

        return DB::table('Reliure_135')->get();
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

    public function shopTableflyers170($productId)
    {
        return DB::table('flyers170')->where('id', $productId)->lists('name');

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
