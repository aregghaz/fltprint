<?php

namespace App;

use DB;
use Illuminate\Database\Eloquent\Model;

class Format extends Model
{
    public function Format()
    {
        return $this->hasMany('App\Format');
    }

    public function getFlyersFormat($formatName)
    {
        return DB::table($formatName)->get();
    }

    public function getFlyers135Format($formats)
    {
        return DB::table($formats)->get();
    }
    public function menu()
    {

        return DB::table('menu')->get();
    }
    public function SearchTabel($array)
    {

        return DB::table($array['tableName'])->where('name', $array['formatValue'])->get();
    }

    public function SearchTabelById($array)
    {

        return DB::table($array['tableName'])->where('id', 1)->get();
    }















    public function flyersFormat170()
    {
        return DB::table('flyers170_format')->get();
    }

    public function getflyyers135Format($productId)
    {
        $name = DB::table('flyers135')->where('id', $productId)->lists('name');
        return DB::table('flyers135_format')->where('name', $name)->lists('size');
    }

    public function addFlyersFormat($format)
    {
        DB::table('flyers135_format')->insert($format);
    }

    public function editFlyersFormat($format)
    {
        DB::table('flyers135_format')->where('name', $format['name'])->update($format);
    }

    public function getFlyersFormat170($selectName)
    {
        return DB::table($selectName)->get();
    }


    public function addFlyers170Format($format)
    {
        DB::table('flyers170_format')->insert($format);
    }

    public function editFlyers170Format($format)
    {
        DB::table('flyers170_format')->where('name', $format['name'])->update($format);;
    }

    public function getflyers170Format($productId)
    {
        $name = DB::table('flyers170')->where('id', $productId)->lists('name');
        return DB::table('flyers170_format')->where('name', $name)->lists('size');
    }

    public function getFlyers250Format()
    {
        return DB::table('flyers250_format')->get();
    }

    public function addFlyers250Format($format)
    {
        DB::table('flyers250_format')->insert($format);
    }

    public function getFlyer250Format($productId)
    {

        $name = DB::table('flyers250')->where('id', $productId)->lists('name');
        return DB::table('flyers250_format')->where('name', $name)->lists('size');
    }

    public function editFlyers250Format($format)
    {
        DB::table('flyers250_format')->where('name', $format['name'])->update($format);
    }


    public function getFlyers300_format()
    {
        return DB::table('flyers300_format')->get();
    }

    public function getFlyers300PlastiFormat()
    {
        return DB::table('flyers300_plasti_format')->get();
    }


    public function addFlyers300PlasticFormat($format)
    {
        DB::table('flyers300_plasti_format')->insert($format);
    }

    public function getFlyerPlasticFormat($productId)
    {
        $name = DB::table('flyers300_plastic')->where('id', $productId)->lists('name');
        return DB::table('flyers300_plasti_format')->where('name', $name)->lists('size');
    }

    public function editFlyers300PlasticFormat($format)
    {
        DB::table('flyers300_plasti_format')->where('name', $format['name'])->update($format);
    }


    public function addFlyers300Format($format)
    {

        DB::table('flyers300_format')->insert($format);
    }


    public function addFlyers300($format)
    {
        DB::table('flyers300')->insert($format);
    }

    public function getFlyer300Format($productId)
    {
        $name = DB::table('flyers300')->where('id', $productId)->lists('name');
        return DB::table('flyers300_format')->where('name', $name)->lists('size');
    }


    public function addFlyers300GreenlineFormat($format)
    {

        DB::table('flyers300_greenline_format')->insert($format);
    }


    public function getFlyer300GreenlineFormat($productId)
    {
        $name = DB::table('flyers300_greenline')->where('id', $productId)->lists('name');
        return DB::table('flyers300_greenline_format')->where('name', $name)->lists('size');
    }

    public function getFlyers300greenlineFormat()
    {
        return DB::table('flyers300_greenline_format')->get();
    }


    public function getFlyers350Formats()
    {
        return DB::table('flyers350_formats')->get();
    }

    public function addFlyers350Format($format)
    {

        DB::table('flyers350_formats')->insert($format);
    }

    public function getFlyer350Format($productId)
    {
        $name = DB::table('flyers350')->where('id', $productId)->lists('name');
        return DB::table('flyers350_formats')->where('name', $name)->lists('size');
    }

    public function editFlyers350($format)
    {
        DB::table('flyers350_formats')->where('name', $format['name'])->update($format);
    }


    public function getFlyers350BrilantFormats()
    {
        return DB::table('flyers350_brilant_format')->get();
    }

    public function addFlyers350BrilantFormat($format)
    {

        DB::table('flyers350_brilant_format')->insert($format);
    }

    public function getFlyer350BrilantFormat($productId)
    {
        $name = DB::table('flyers350_brilant')->where('id', $productId)->lists('name');
        return DB::table('flyers350_brilant_format')->where('name', $name)->lists('size');
    }

    public function editFlyers350Brilant($format)
    {
        DB::table('flyers350_brilant_format')->where('name', $format['name'])->update($format);
    }

    public function getFlyers350PlasticFormats()
    {
        return DB::table('flyers300_plasti_format')->get();
    }

    public function addFlyers350PlasticFormat($format)
    {

        DB::table('flyers300_plasti_format')->insert($format);
    }

    public function getFlyer350PlasticFormat($productId)
    {
        $name = DB::table('flyers350_plastic')->where('id', $productId)->lists('name');
        return DB::table('flyers300_plasti_format')->where('name', $name)->lists('size');
    }

    public function editFlyers350Plastic($format)
    {
        DB::table('flyers300_plasti_format')->where('name', $format['name'])->update($format);
    }


    public function getAffiches135Format()
    {
        return DB::table('affiches135_format')->get();
    }

    public function getAffiches1Format()
    {
        return DB::table('affiches1_format')->get();
    }

    public function affiches_grand_format()
    {

        return DB::table('affiches_grand_format')->get();
    }

    public function affiches_digitale_format()
    {

        return DB::table('affiche_digitale_format')->get();
    }

    public function AffichesGreenFormat()
    {

        return DB::table('affiches_green_format')->get();
    }

    public function AffichesRectoFormat()
    {

        return DB::table('affiches_recto_format')->get();
    }

    public function Dépliants135Format()
    {

        return DB::table('dépliants135_format')->get();
    }

    public function carteVisiteBrillanteFormat()
    {

        return DB::table('carte_visite_brillante_format')->get();
    }

    public function carteVisiteMatteFormat()
    {

        return DB::table('carte_visite_matte_format')->get();
    }

    public function CarteVisiteGreenFormat()
    {

        return DB::table('carte_visite_green_format')->get();
    }

    public function carte300Format()
    {

        return DB::table('carte_300_format')->get();
    }

    public function carte350Format()
    {

        return DB::table('carte350_format')->get();
    }

    public function carte310Format()
    {

        return DB::table('carte310_format')->get();
    }

    public function carteDeluxeFormat()
    {

        return DB::table('carte_deluxe_format')->get();
    }

    public function panneauxPlats4Format()
    {

        return DB::table('panneaux_plats_4_format')->get();
    }






}
