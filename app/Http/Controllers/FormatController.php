<?php

namespace App\Http\Controllers;


use App\Format;


class FormatController extends Controller
{
    public function FlyersFormat()
    {
        $format = new Format();
        $tableName = $format->getFlyersFormat();

        return response($tableName);
    }

    public function Flyers170Select()
    {
        $format = new Format();
        $tableName = $format->getFlyersFormat170();

        return response($tableName);
    }

    public function Flyers250Select()
    {
        $format = new Format();
        $tableName = $format->getFlyers250Format();

        return response($tableName);
    }

    public function Flyers300Select()
    {
        $format = new Format();
        $tableName = $format->getFlyers300_format();

        return response($tableName);
    }

    public function Flyers300PlasticSelect()
    {
        $format = new Format();
        $tableName = $format-> getFlyers300PlastiFormat();
        return response($tableName);
    }

    public function Flyers350Select()
    {
        $format = new Format();
        $tableName = $format->getFlyers350Formats();
        return response($tableName);
    }

    public function Flyers300GreenLineSelect()
    {
        $format = new Format();
        $tableName = $format->getFlyers300greenlineFormat();
        return response($tableName);
    }

    public function Flyers350BrilanteFormatSelect()
    {
        $format = new Format();
        $tableName = $format->getFlyers350BrilantFormats();
        return response($tableName);
    }

    public function Flyers350PlaticFormatSelect()
    {
        $format = new Format();
        $tableName = $format->getFlyers350PlasticFormats();
        return response($tableName);
    }

    public function Affiches135FormatSelect()
    {
        $format = new Format();
        $tableName = $format->getAffiches135Format();
        return response($tableName);
    }
 public function Affiches1FormatSelect()
    {
        $format = new Format();
        $tableName = $format->getAffiches1Format();
        return response($tableName);
    }

    public function AffichesGrandFormatSelect()
    {
        $format = new Format();
        $tableName = $format->affiches_grand_format();
        return response($tableName);
    }

    public function AffichesDigitaleFormatSelect()
    {
        $format = new Format();
        $tableName = $format->affiches_digitale_format();
        return response($tableName);
    }

    public function AffichesGreenFormatSelect()
    {
        $format = new Format();
        $tableName = $format->AffichesGreenFormat();
        return response($tableName);
    }

    public function affichesRectoFormatSelect()
    {
        $format = new Format();
        $tableName = $format->AffichesRectoFormat();
        return response($tableName);
    }

    public function Dépliants135FormatSelect()
    {
        $format = new Format();
        $tableName = $format->Dépliants135Format();
        return response($tableName);
    }

    public function carteVisiteBrillanteFormatSelect()
    {
        $format = new Format();
        $tableName = $format->carteVisiteBrillanteFormat();
        return response($tableName);
    }

    public function carteVisiteMatteFormatSelect()
    {
        $format = new Format();
        $tableName = $format->carteVisiteMatteFormat();
        return response($tableName);
    }

    public function carteVisiteGreenFormatSelect()
    {
        $format = new Format();
        $tableName = $format->CarteVisiteGreenFormat();
        return response($tableName);
    }

    public function carte300FormatSelect()
    {
        $format = new Format();
        $tableName = $format->carte300Format();
        return response($tableName);
    }

    public function carteDeluxeFormatSelect()
    {
        $format = new Format();
        $tableName = $format->carteDeluxeFormat();
        return response($tableName);
    }


}
