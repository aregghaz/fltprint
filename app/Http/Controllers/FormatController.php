<?php

namespace App\Http\Controllers;


use App\Format;
use App\Tables;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use PDF;

class FormatController extends Controller
{
    public function FlyersFormat(Request $request)
    {
        $formats = $request['selectedOption'] . '_format';
        $format = new Format();
        $tableName = $format->getFlyers135Format($formats);
        return response($tableName);
    }

    public function account()
    {
        $array = Array();
        $format = new Format();
        $select = $format->menu();
        $userId = Auth::user()->id;
        $table = new Tables();
        $info = $table->getUserInfo($userId);
        $array['menu'] = $select;
        $array['info'] = $info;
        return view('account', $array);
    }

    public function changeAccount(Request $request)
    {
        $userId = Auth::user()->id;
        $array = Array();
        $array['name'] = $request['name'];
        $array['email'] = $request['email'];
        $array['portable'] = $request['portable'];
        $array['company'] = $request['company'];
        $array['companyName'] = $request['companyName'];
        $array['telephone'] = $request['telephone'];
        $array['address'] = $request['address'];
        $array['addressElse'] = $request['addressElse'];
        $array['postalCode'] = $request['postalCode'];
        $array['city'] = $request['city'];
        $array['userId'] = $userId;

        $format = new Format();
        $select = $format->menu();

        $table = new Tables();
        $info = $table->changeUserInfo($array);
        $array['menu'] = $select;
        $array['info'] = $info;
        return view('account', $array);
    }

    public function htmltopdfview(Request $request)
    {
        $data = $_GET['data'];
        $count = explode(',', $data);
        $totalCount = $_GET['totalCount'];
        $total = explode(',', $totalCount);
        $size = $_GET['format'];
        $format = explode(',', $size);
        $totalPrice = $_GET['totalPrice'];
        $price = explode(',', $totalPrice);
        $nameProduct = $_GET['nameProduct'];
        $product = explode(',', $nameProduct);
        $countProduct = $_GET['countProduct'];
        $productCount = explode(',', $countProduct);
        $array = Array();
        $array['count'] = $count;
        $array['totalPrice'] = $price;
        $array['totalCount'] = $total;
        $array['product'] = $product;
        $array['format'] = $format;
        $array['productCount'] = $productCount;
        view()->share('products');
        if ($request->has('download')) {
            $pdf = PDF::loadView('page.download', $array);
            return $pdf->download('devise.pdf');
        }
        return redirect()->back();
    }

    public function verification()
    {
        $format = new Format();
        $select = $format->menu();
        $array = Array();
        $array['menu'] = $select;
        return view('menu.verification', $array);
    }

    public function compositions()
    {
        $format = new Format();
        $select = $format->menu();
        $array = Array();
        $array['menu'] = $select;
        return view('menu.compositions', $array);
    }

    public function delay()
    {
        $format = new Format();
        $select = $format->menu();
        $array = Array();
        $array['menu'] = $select;
        return view('menu.delay', $array);
    }

    public function utiles()
    {
        $format = new Format();
        $select = $format->menu();
        $array = Array();
        $array['menu'] = $select;
        return view('menu.utiles', $array);
    }

    public function contacts()
    {
        $format = new Format();
        $select = $format->menu();
        $array = Array();
        $array['menu'] = $select;
        return view('menu.contacts', $array);
    }

    public function payement()
    {
        $format = new Format();
        $select = $format->menu();
        $array = Array();
        $array['menu'] = $select;
        return view('menu.payement', $array);
    }

    public function livraison()
    {
        $format = new Format();
        $select = $format->menu();
        $array = Array();
        $array['menu'] = $select;
        return view('menu.livraison', $array);
    }

    public function techniques()
    {
        $format = new Format();
        $select = $format->menu();
        $array = Array();
        $array['menu'] = $select;
        return view('menu.techniques', $array);
    }

    public function faq()
    {
        $format = new Format();
        $select = $format->menu();
        $array = Array();
        $array['menu'] = $select;
        return view('menu.faq', $array);
    }

}
