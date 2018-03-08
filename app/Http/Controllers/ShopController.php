<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Format;
use App\Tables;

class ShopController extends Controller
{
    public function shop(){
        $format = new Format();
        $select = $format->menu();
        $array['select'] = $select;
        $array['menu'] = $select;
        return view('device', $array);
    }

    public function urlSelect(Request $request)
    {
        $array = Array();
        $array['tableName'] = $request['tableName'];
        $array['formatValue'] = $request['formatValue'];
        $format = new Format();
        $productName = $format->SearchTabel($array);
        $productCount = $format->SearchTabelById($array);
        $array = Array();
        $array['productName'] = $productName;
        $array['productCount'] = $productCount;
        return response($array);

    }

    public function shopFlyers()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $formatName = $_GET['selectName'].'_format';
        $selectName = $_GET['selectName'];
        $format = new Format();
        $menu = $format->menu();
        $table = new Tables();
        $product = $table->shopTableflyers($productId,$selectName);
        $tableName = $format->getFlyersFormat($formatName);
        $productPrice = $table->getByIdflyers($productId,$selectName);
        $productCount = $table->getByIdflyersCount($selectName);
        $array = Array();
        $array['menu'] = $menu;
        $array['select'] =  $menu;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['tableName'] = $tableName;
        $array['selectName'] = $selectName;
        $array['selectValue'] = $_GET['tableName'];
        $array['priceProduct'] = $priceProduct;
        $array['productPrice'] = $productPrice;
        $array['productCount'] = $productCount;
        return view('shop', $array);
    }



}
