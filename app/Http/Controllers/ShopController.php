<?php

namespace App\Http\Controllers;

use App\Format;
use App\Tables;
use Illuminate\Http\Request;
class ShopController extends Controller
{
    public function shop(){
        $format = new Format();
        $select = $format->getFlyers();
        $array['select'] = $select;

        return view('shop', $array);
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
    public function shopFlyers135()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopTableflyers135($productId);
        $productPrice = $table->getByIdflyers135($productId);
        $productCount = $table->getByIdflyers135Count();
        $tableName = $format->getFlyersFormat();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['tableName'] = $tableName;
        $array['productPrice'] = $productPrice;
        $array['priceProduct'] = $priceProduct;
        $array['productCount'] = $productCount;
        return view('shop', $array);
    }

    public function shopFlyers170()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopTableflyers170($productId);
        $tableName = $format->getFlyersFormat170();
        $productPrice = $table->getByIdflyers170($productId);
        $productCount = $table->getByIdflyers170Count();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['tableName'] = $tableName;
        $array['priceProduct'] = $priceProduct;
        $array['productPrice'] = $productPrice;
        $array['productCount'] = $productCount;
        return view('shop', $array);
    }

    public function shopFlyers250()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopflyers250($productId);
        $tableName = $format->getFlyers250Format();
        $productPrice = $table->getByIdflyers250($productId);
        $productCount = $table->getByIdflyers250Count();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['tableName'] = $tableName;
        $array['priceProduct'] = $priceProduct;
        $array['productPrice'] = $productPrice;
        $array['productCount'] = $productCount;
        return view('shop', $array);
    }

    public function shopFlyers300()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopFlyers300($productId);
        $tableName = $format->getFlyers300_format();
        $productPrice = $table->getByIdflyers300($productId);
        $productCount = $table->getByIdflyers300Count();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        $array['productPrice'] = $productPrice;
        $array['productCount'] = $productCount;
        return view('shop', $array);
    }

    public function shopFlyers300Plastic()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopFlyers300Plastic($productId);
        $tableName = $format->getFlyers300PlastiFormat();
        $productPrice = $table->getByIdFlyers300Plastic($productId);
        $productCount = $table->getByIdflyers300PlasticCount();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        $array['productPrice'] = $productPrice;
        $array['productCount'] = $productCount;
        return view('shop', $array);
    }

    public function shopFlyers350()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopFlyers350($productId);
        $tableName = $format->getFlyers350Formats();
        $productPrice = $table->getByIdflyers350($productId);
        $productCount = $table->getByIdflyers350Count();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        $array['productPrice'] = $productPrice;
        $array['productCount'] = $productCount;
        return view('shop', $array);
    }

    public function shopFlyers300GreenLine()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopFlyers300_greenLine($productId);
        $tableName = $format->getFlyers300greenlineFormat();
        $productPrice = $table->getByIdflyers300GreenLine($productId);
        $productCount = $table-> getByIdflyers300GreenLineCount();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        $array['productPrice'] = $productPrice;
        $array['productCount'] = $productCount;
        return view('shop', $array);
    }

    public function shopFlyers350Brilant()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopFlyers350Brilant($productId);
        $tableName = $format->getFlyers350PlasticFormats();
        $productPrice = $table->getByIdflyers350Brilant($productId);
        $productCount = $table-> getByIdFlyers350BrilantCount();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        $array['productPrice'] = $productPrice;
        $array['productCount'] = $productCount;
        return view('shop', $array);
    }

    public function shopFlyers350Plastic()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopFlyers350_plastic($productId);
        $tableName = $format->getFlyers350PlasticFormats();
        $productPrice = $table->getByIdflyers350Plastic($productId);
        $productCount = $table-> getByIdFlyers350PlasticCount();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        $array['productPrice'] = $productPrice;
        $array['productCount'] = $productCount;
        return view('shop', $array);
    }

    public function shopAffiches135()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopAffiches135($productId);
        $tableName = $format->getAffiches135Format();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        return view('shop', $array);
    }

    public function shopAffiches1()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopAffiches135($productId);
        $tableName = $format->getAffiches1Format();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        return view('shop', $array);
    }

    public function shopAffichesGrand()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopAffichesGrand($productId);
        $tableName = $format->affiches_grand_format();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        return view('shop', $array);
    }

    public function shopAfficheDigitale()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopAfficheDigitale($productId);
        $tableName = $format->affiches_digitale_format();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        return view('shop', $array);
    }

    public function shopAffichesGreen()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopAffichesGreen($productId);
        $tableName = $format->AffichesGreenFormat();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        return view('shop', $array);
    }

    public function shopAffichesRecto()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopAffichesRecto($productId);
        $tableName = $format->AffichesRectoFormat();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        return view('shop', $array);
    }

    public function shopDépliants135()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopDépliants135($productId);
        $tableName = $format->Dépliants135Format();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        return view('shop', $array);
    }

    public function shopCarteVisiteBrillante()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopCarteVisiteBrillante($productId);
        $tableName = $format->carteVisiteBrillanteFormat();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        return view('shop', $array);
    }

    public function shopCarteVisiteMatte()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopCarteVisiteMette($productId);
        $tableName = $format->carteVisiteMatteFormat();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        return view('shop', $array);
    }

    public function shopCarteVisiteGreen()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopCarteVisiteGreen($productId);
        $tableName = $format->CarteVisiteGreenFormat();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        return view('shop', $array);
    }

    public function shopCarte300()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopCarte300($productId);
        $tableName = $format->carte300Format();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        return view('shop', $array);
    }

    public function shopCarteDeluxe()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopCarteDeluxe($productId);
        $tableName = $format->carteDeluxeFormat();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
        return view('shop', $array);
    }


}
