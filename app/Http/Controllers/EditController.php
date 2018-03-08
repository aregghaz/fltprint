<?php

namespace App\Http\Controllers;

use App\Format;
use App\Tables;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function addFlyers135(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->addFlyersFormat($format);
        $table = new Tables();
        $table->Tableflyers135($names);
        return redirect()->route('Flyers_135_gr_satiné');
    }

    public function deleteFlyers135(Request $request)
    {
        $names = Array();
        $names['product_id'] = $request['product_id'];
        $table = new Tables();
        $table->Deleteflyers135($names);
        return redirect()->route('Flyers_135_gr_satiné');
    }

    public function getFlyers135(Request $request)
    {
        $productId = $request['rowId'];
        $table = new Tables();
        $formats = new Format();
        $productSize = $formats->getflyyers135Format($productId);
        $firstTable = $table->getByIdflyers135($productId);
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['productSize'] = $productSize;

        return response($array);
    }


    public function editFlyers135(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $names['id'] = $request['row_id_edite'];
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->editFlyersFormat($format);
        $table = new Tables();
        $table->editeTableflyers135($names);
        return redirect()->route('Flyers_135_gr_satiné');
    }

    public function addFlyers170(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];

        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->addFlyers170Format($format);
        $table = new Tables();
        $table->Tableflyers170($names);
        return redirect()->route('flyers170_admin');
    }

    public function deleteFlyers170(Request $request)
    {
        $names = Array();
        $names['product_id'] = $request['product_id'];
        $table = new Tables();
        $table->Deleteflyers170($names);
        return redirect()->route('flyers170_admin');
    }

    public function getFlyers170(Request $request)
    {
        $formats = new Format();
        $productId = $request['rowId'];
        $table = new Tables();
        $firstTable = $table->getByIdflyers170($productId);
        $productSize = $formats->getflyers170Format($productId);
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['productSize'] = $productSize;

        return response($array);
    }

    public function editFlyers170(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $names['id'] = $request['row_id_edite'];
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->editFlyers170Format($format);
        $table = new Tables();
        $table->editeTableflyers170($names);
        return redirect()->route('flyers170_admin');
    }

    public function addFlyers250(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->addFlyers250Format($format);
        $table = new Tables();
        $table->Tableflyers250($names);
        return redirect()->route('flyers250_admin');
    }

    public function deleteFlyers250(Request $request)
    {
        $names = Array();
        $names['product_id'] = $request['product_id'];
        $table = new Tables();
        $table->Deleteflyers250($names);
        return redirect()->route('flyers250_admin');
    }

    public function editFlyers250(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $names['id'] = $request['row_id_edite'];
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->editFlyers250Format($format);
        $table = new Tables();
        $table->editeTableFlyers250($names);
        return redirect()->route('flyers250_admin');
    }

    public function getFlyers250(Request $request)
    {
        $productId = $request['rowId'];
        $table = new Tables();
        $firstTable = $table->getByIdflyers250($productId);
        $productId = $request['rowId'];
        $formats = new Format();
        $productSize = $formats->getFlyer250Format($productId);
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['productSize'] = $productSize;

        return response($array);
    }

    public function addFlyers300Plastic(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->addFlyers300PlasticFormat($format);
        $table = new Tables();
        $table->TableFlyers300Plastic($names);
        return redirect()->route('flyers300Plastic_admin');
    }

    public function editFlyers300Plastic(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $names['id'] = $request['row_id_edite'];
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->editFlyers300PlasticFormat($format);
        $table = new Tables();
        $table->editFlyers300Plastic($names);
        return redirect()->route('flyers300Plastic_admin');
    }

    public function deleteFlyers300Plastic(Request $request)
    {
        $names = Array();
        $names['product_id'] = $request['product_id'];
        $table = new Tables();
        $table->DeleteFlyers300Plastic($names);
        return redirect()->route('flyers300Plastic_admin');
    }

    public function getByIdFlyers300Plastic(Request $request)
    {
        $formats = new Format();
        $productId = $request['rowId'];
        $table = new Tables();
        $firstTable = $table->getByIdFlyers300Plastic($productId);
        $productSize = $formats->getFlyerPlasticFormat($productId);
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['productSize'] = $productSize;
        return response($array);
    }

    public function addFlyers300(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $names['count_5'] = $request['count_5'];
        $names['count_6'] = $request['count_6'];
        $names['count_7'] = $request['count_7'];
        $names['count_8'] = $request['count_8'];
        $names['count_9'] = $request['count_9'];
        $names['count_10'] = $request['count_10'];
        $names['count_11'] = $request['count_11'];
        $names['count_12'] = $request['count_12'];
        $names['count_13'] = $request['count_13'];
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->addFlyers300Format($format);
        $table = new Tables();
        $table->Tableflyers300($names);
        return redirect()->route('flyers300_admin');
    }

    public function editflyers300(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $names['count_5'] = $request['count_5'];
        $names['count_6'] = $request['count_6'];
        $names['count_7'] = $request['count_7'];
        $names['count_8'] = $request['count_8'];
        $names['count_9'] = $request['count_9'];
        $names['count_10'] = $request['count_10'];
        $names['count_11'] = $request['count_11'];
        $names['count_12'] = $request['count_12'];
        $names['count_13'] = $request['count_13'];
        $names['id'] = $request['row_id_edite'];
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->addFlyers300Format($format);
        $table = new Tables();
        $table->editeTableFlyers300($names);
        return redirect()->route('flyers300_admin');
    }

    public function deleteFlyers300(Request $request)
    {
        $names = Array();
        $names['product_id'] = $request['product_id'];
        $table = new Tables();
        $table->DeleteFlyers300($names);
        return redirect()->route('flyers300_admin');
    }

    public function getByIdFlyers300(Request $request)
    {
        $formats = new Format();
        $productId = $request['rowId'];
        $table = new Tables();
        $firstTable = $table->getByIdflyers300($productId);
        $productSize = $formats->getFlyer300Format($productId);
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['productSize'] = $productSize;
        return response($array);
    }


    public function addFlyers300Greenline(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->addFlyers300GreenlineFormat($format);
        $table = new Tables();
        $table->TableFlyers300GreenLine($names);
        return redirect()->route('flyers300GrennLine_admin');
    }

    public function editflyers300Greenline(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['id'] = $request['row_id_edite'];
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->addFlyers300GreenlineFormat($format);
        $table = new Tables();
        $table->editeTableFlyers300Greenline($names);
        return redirect()->route('flyers300GrennLine_admin');
    }

    public function deleteFlyers300Greenline(Request $request)
    {
        $names = Array();
        $names['product_id'] = $request['product_id'];
        $table = new Tables();
        $table->deleteFlyers300Greenline($names);
        return redirect()->route('flyers300GrennLine_admin');
    }

    public function getByIdFlyers300Greenline(Request $request)
    {
        $formats = new Format();
        $productId = $request['rowId'];
        $table = new Tables();
        $firstTable = $table->getByIdflyers300GreenLine($productId);
        $productSize = $formats->getFlyer300GreenlineFormat($productId);
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['productSize'] = $productSize;
        return response($array);
    }


    public function addFlyers350(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $names['count_5'] = $request['count_5'];
        $names['count_6'] = $request['count_6'];
        $names['count_7'] = $request['count_7'];
        $names['count_8'] = $request['count_8'];
        $names['count_9'] = $request['count_9'];
        $names['count_10'] = $request['count_10'];
        $names['count_11'] = $request['count_11'];
        $names['count_12'] = $request['count_12'];
        $names['count_13'] = $request['count_13'];
        $names['count_14'] = $request['count_14'];
        $names['count_15'] = $request['count_15'];
        $table = new Tables();
        $table->Tableflyers350($names);
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->addFlyers350Format($format);
        return redirect()->route('flyers350_admin');
    }


    public function editFlyers350(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $names['count_5'] = $request['count_5'];
        $names['count_6'] = $request['count_6'];
        $names['count_7'] = $request['count_7'];
        $names['count_8'] = $request['count_8'];
        $names['count_9'] = $request['count_9'];
        $names['count_10'] = $request['count_10'];
        $names['count_11'] = $request['count_11'];
        $names['count_12'] = $request['count_12'];
        $names['count_13'] = $request['count_13'];
        $names['count_14'] = $request['count_14'];
        $names['count_15'] = $request['count_15'];
        $names['id'] = $request['row_id_edite'];
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->addFlyers350Format($format);
        $table = new Tables();
        $table->editeTableFlyers350($names);
        return redirect()->route('flyers350_admin');
    }

    public function deleteFlyers350(Request $request)
    {
        $names = Array();
        $names['product_id'] = $request['product_id'];
        $table = new Tables();
        $table->DeleteFlyers350($names);
        return redirect()->route('flyers350_admin');
    }

    public function getByIdFlyers350(Request $request)
    {
        $formats = new Format();
        $productId = $request['rowId'];
        $table = new Tables();
        $firstTable = $table->getByIdflyers350($productId);
        $productSize = $formats->getFlyer350Format($productId);
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['productSize'] = $productSize;
        return response($array);
    }


    public function addFlyers350Brilante(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $names['count_5'] = $request['count_5'];
        $names['count_6'] = $request['count_6'];
        $names['count_7'] = $request['count_7'];
        $names['count_8'] = $request['count_8'];
        $names['count_9'] = $request['count_9'];
        $names['count_10'] = $request['count_10'];
        $names['count_11'] = $request['count_11'];
        $names['count_12'] = $request['count_12'];
        $names['count_13'] = $request['count_13'];
        $names['count_14'] = $request['count_14'];
        $names['count_15'] = $request['count_15'];
        $table = new Tables();
        $table->Tableflyers350Brilant($names);
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->addFlyers350BrilantFormat($format);
        return redirect()->route('flyers350Brilant_admin');
    }

    public function editFlyers350Brilante(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $names['count_5'] = $request['count_5'];
        $names['count_6'] = $request['count_6'];
        $names['count_7'] = $request['count_7'];
        $names['count_8'] = $request['count_8'];
        $names['count_9'] = $request['count_9'];
        $names['count_10'] = $request['count_10'];
        $names['count_11'] = $request['count_11'];
        $names['count_12'] = $request['count_12'];
        $names['count_13'] = $request['count_13'];
        $names['count_14'] = $request['count_14'];
        $names['count_15'] = $request['count_15'];
        $names['id'] = $request['row_id_edite'];
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->addFlyers350BrilantFormat($format);
        $table = new Tables();
        $table->editeTableFlyers350Brilant($names);
        return redirect()->route('flyers350Brilant_admin');
    }

    public function deleteFlyers350Brilante(Request $request)
    {
        $names = Array();
        $names['product_id'] = $request['product_id'];
        $table = new Tables();
        $table->DeleteFlyers350Brilant($names);
        return redirect()->route('flyers350_admin');
    }

    public function getByIdFlyers350Brilante(Request $request)
    {
        $formats = new Format();
        $productId = $request['rowId'];
        $table = new Tables();
        $firstTable = $table->getByIdflyers350Brilant($productId);
        $productSize = $formats->getFlyer350BrilantFormat($productId);
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['productSize'] = $productSize;
        return response($array);
    }


    public function addFlyers350Plastic(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $names['count_5'] = $request['count_5'];
        $names['count_6'] = $request['count_6'];
        $names['count_7'] = $request['count_7'];
        $names['count_8'] = $request['count_8'];
        $names['count_9'] = $request['count_9'];
        $names['count_10'] = $request['count_10'];
        $names['count_11'] = $request['count_11'];
        $names['count_12'] = $request['count_12'];
        $names['count_13'] = $request['count_13'];
        $names['count_14'] = $request['count_14'];
        $names['count_15'] = $request['count_15'];
        $table = new Tables();
        $table->Tableflyers350Plastic($names);
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->addFlyers350PlasticFormat($format);
        return redirect()->route('flyers350Plastic_admin');
    }

    public function editFlyers350Plastic(Request $request)
    {
        $names = Array();
        $names['formats'] = $request['name'];
        $names['count_1'] = $request['count_1'];
        $names['count_2'] = $request['count_2'];
        $names['count_3'] = $request['count_3'];
        $names['count_4'] = $request['count_4'];
        $names['count_5'] = $request['count_5'];
        $names['count_6'] = $request['count_6'];
        $names['count_7'] = $request['count_7'];
        $names['count_8'] = $request['count_8'];
        $names['count_9'] = $request['count_9'];
        $names['count_10'] = $request['count_10'];
        $names['count_11'] = $request['count_11'];
        $names['count_12'] = $request['count_12'];
        $names['count_13'] = $request['count_13'];
        $names['count_14'] = $request['count_14'];
        $names['count_15'] = $request['count_15'];
        $names['id'] = $request['row_id_edite'];
        $format = Array();
        $format['size'] = $request['size'];
        $format['name'] = $request['name'];
        $format['value'] = $request['name'];
        $formats = new Format();
        $formats->addFlyers350PlasticFormat($format);
        $table = new Tables();
        $table->editeTableFlyers350Plastic($names);
        return redirect()->route('flyers350Brilant_admin');
    }

    public function deleteFlyers350Plastic(Request $request)
    {
        $names = Array();
        $names['product_id'] = $request['product_id'];
        $table = new Tables();
        $table->DeleteFlyers350Plastic($names);
        return redirect()->route('flyers350_admin');
    }

    public function getByIdFlyers350Plastic(Request $request)
    {
        $formats = new Format();
        $productId = $request['rowId'];
        $table = new Tables();
        $firstTable = $table->getByIdflyers350Plastic($productId);
        $productSize = $formats->getFlyer350PlasticFormat($productId);
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['productSize'] = $productSize;
        return response($array);
    }


}
