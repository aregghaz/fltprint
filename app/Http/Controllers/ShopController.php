<?php

namespace App\Http\Controllers;

use App\Format;
use App\Tables;

class ShopController extends Controller
{
    public function shopFlyers135()
    {
        $productId = $_GET['productId'];
        $priceProduct = $_GET['priceProduct'];
        $format = new Format();
        $select = $format->getFlyers();
        $table = new Tables();
        $product = $table->shopTableflyers135($productId);
        $productPrice = $table->getByIdflyers135($productId);
        $tableName = $format->getFlyersFormat();
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['tableName'] = $tableName;
        $array['productPrice'] = $productPrice;
        $array['priceProduct'] = $priceProduct;
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
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['tableName'] = $tableName;
        $array['priceProduct'] = $priceProduct;
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
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['tableName'] = $tableName;
        $array['priceProduct'] = $priceProduct;
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
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
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
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
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
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
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
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
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
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
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
        $array = Array();
        $array['select'] = $select;
        $array['product'] = $product;
        $array['countProduct'] = $_GET['countProduct'];
        $array['selectValue'] = $_GET['selectValue'];
        $array['priceProduct'] = $priceProduct;
        $array['tableName'] = $tableName;
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
