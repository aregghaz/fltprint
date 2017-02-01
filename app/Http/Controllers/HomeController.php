<?php

namespace App\Http\Controllers;

use App\Format;
use App\Tables;

class HomeController extends Controller
{
    public function Flyers135()
    {
        $value = 1;
        $rootName = 'shopFlyers135';
        $table = new Tables();
        $format = new Format();
        $firstTable = $table->getTableflyers135();
        $thirdTable = $format->getFlyersFormat();
        $secondTable = $table->getTableFlyers135_option();
        $messageHeader = 'Flyers 135 gr satiné';
        $messageText = 'Flyers quadri recto/verso sur papier satiné 135 gr + vernis acrylique recto/verso';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['rootName'] = $rootName;
        $array['value'] = $value;

        return view('Flyers.Flyers135', $array);
    }

    public function flyers170()
    {
        $value = 2;
        $rootName = 'shopFlyers170';
        $table = new Tables();
        $format = new Format();
        $firstTable = $table->flyers170();
        $thirdTable = $format->getFlyersFormat170();
        $secondTable = $table->getTableFlyers135_option();
        $messageHeader = 'Flyers 170 gr satiné + vernis satiné';
        $messageText = 'Flyers quadri recto/verso sur papier satiné 170 gr avec vernis acrylique satiné recto/verso';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function flyers250()
    {
        $value = 3;
        $rootName = 'shopFlyers250';
        $table = new Tables();
        $format = new Format();
        $firstTable = $table->flyers250();
        $thirdTable = $format->getFlyers250Format();
        $secondTable = $table->getTableFlyers135_option();
        $array = Array();
        $messageHeader = 'Flyers 250 gr + vernis satiné';
        $messageText = 'Flyers quadri recto/verso sur papier satiné 250 gr avec vernis acrylique satiné recto/verso';
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);

    }

    public function flyers300_plastic()
    {
        $formats = new Format();
        $table = new Tables();
        $value = 5;
        $rootName = 'shopFlyers300_plastic';
        $firstTable = $table->flyers300_plastic();
        $thirdTable = $formats->getFlyers300PlastiFormat();
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Flyers 300 gr + plastification brillante';
        $messageText = 'Flyers quadri recto/verso sur papier satiné 300 gr avec plastification brillante recto/verso';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function flyers300()
    {
        $value = 4;
        $rootName = 'shopFlyers300';
        $table = new Tables();
        $format = new Format();
        $firstTable = $table->flyers300();
        $thirdTable = $format->getFlyers300_format();
        $secondTable = $table->getTableFlyers135_option();
        $messageHeader = 'Flyers 300 gr';
        $messageText = 'Flyers quadri recto/verso sur papier satiné 300 gr';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function flyers300_greenLine()
    {
        $value = 7;
        $rootName = 'shopFlyers300GreenLine';
        $table = new Tables();
        $formats = new Format();
        $firstTable = $table->flyers300_greenLine();
        $thirdTable = $formats->getFlyers300greenlineFormat();
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Flyers 300 gr Green Line';
        $messageText = 'Flyers recto/verso quadri sur papier 300gr 100%recyclé (Cyclus Print).';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function flyers350()
    {
        $value = 6;
        $rootName = 'shopFlyers350';
        $table = new Tables();
        $format = new Format();
        $firstTable = $table->flyers350();
        $thirdTable = $format->getFlyers350Formats();
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Flyers 350 gr';
        $messageText = 'Flyers quadri recto/verso sur papier satiné 350 gr';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function flyers350_brilant()
    {
        $value = 8;
        $rootName = 'shopFlyers350_brilant';
        $table = new Tables();
        $format = new Format();
        $firstTable = $table->flyers350_brilant();
        $thirdTable = $format->getFlyers350BrilantFormats();
        $secondTable = $table->getFlyers300Brilante_option();
        $messageHeader = 'Flyers 350 gr plastif brillante';
        $messageText = 'Flyers quadri recto/verso sur papier 350 gr avec plastification brillante recto/verso';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function flyers350_plastic()
    {
        $value = 9;
        $rootName = 'shopFlyers350_plastic';
        $table = new Tables();
        $format = new Format();
        $firstTable = $table->flyers350_plastic();
        $thirdTable = $format->getFlyers350PlasticFormats();
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Flyers 350 gr plastif matte';
        $messageText = 'Flyers quadri recto/verso sur papier 350 gr avec plastification matte recto/verso';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function Affiches135()
    {
        $value = 10;
        $rootName = 'shopAffiches135';
        $table = new Tables();
        $firstTable = $table->Affiches135();
        $messageHeader = 'Affiches quadri 135gr';
        $messageText = 'papier 135gr satiné, impression recto quadri, emballées en boîtes solides. Prix promo.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function affiches1()
    {
        $value = 11;
        $rootName = 'shopAffiches1';
        $table = new Tables();
        $format = new Format();
        $firstTable = $table->affiches1();
        $thirdTable = $format->getAffiches1Format();
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Affiches 1 couleur';
        $messageText = 'papier 135gr satiné, impression recto 1 couleur, emballées en boîtes solides. Impression noire ou choisissez une option (au maximum).';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function Affiches_grand()
    {
        $value = 12;
        $rootName = 'shopAffichesGrand';
        $table = new Tables();
        $format = new Format();
        $firstTable = $table->Affiches_grand();
        $thirdTable = $format->affiches_grand_format();
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Affiches grand format';
        $messageText = 'Affiches imprimées recto quadri, papier blueback (dos bleu, spécial pour le recouvrement)';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function affiche_digitale()
    {
        $value = 13;
        $rootName = 'shopAfficheDigitale';
        $table = new Tables();
        $firstTable = $table->affiche_digitale();
        $messageHeader = 'Grande affiche digitale';
        $messageText = 'Affiches imprimées recto quadri, papier 115gr dos bleu';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function affiches_green()
    {
        $value = 14;
        $rootName = 'shopAffichesGreen';
        $table = new Tables();
        $firstTable = $table->affiches_green();
        $messageHeader = 'Affiches Green Line';
        $messageText = 'Papier 130gr recyclé (Cyclus Print), impression recto quadri, emballées en boîtes solides de 250 ex.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function affiches_recto()
    {
        $value = 15;
        $rootName = 'shopAffichesRecto';
        $table = new Tables();
        $firstTable = $table->affiches_recto();
        $messageHeader = 'Affiches recto/verso';
        $messageText = 'Papier 135gr satiné, impression recto/verso quadri, emballées en boîtes solides de 250 ex.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function dépliants135()
    {
        $table = new Tables();
        $format = new Format();
        $value = 16;
        $rootName = 'shopDépliants135';
        $firstTable = $table->dépliants135();
        $thirdTable = $format->Dépliants135Format();
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Dépliants 135gr';
        $messageText = 'Dépliants sur papier 135gr satiné, impression quadri recto/verso + vernis acrylique satiné. Fournis pliés en boîtes. Spécifiez le nombre de pli dans les options et le type de pli dans les commentaires (en deux, décalé, zigzag ou roulé). Le format indiqué est le format ouvert. PRIX PROMO';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function carte_visite_brillante()
    {
        $table = new Tables();
        $format = new Format();
        $value = 17;
        $rootName = 'shopCarteVisiteBrillante';
        $firstTable = $table->carte_visite_brillante();
        $thirdTable = $format->carteVisiteBrillanteFormat();
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Carte de visite brillante';
        $messageText = 'Impression recto/verso quadri, papier 350gr, plastification brillante recto ou recto/verso. Vous recevez une boîte à carte de visite gratuite.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function carte_visite_matte()
    {

        $table = new Tables();
        $format = new Format();
        $value = 18;
        $rootName = 'shopCarteVisiteMatte';
        $firstTable = $table->carte_visite_matte();
        $thirdTable = $format->carteVisiteMatteFormat();
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Carte de visite matt';
        $messageText = 'Impression recto/verso quadri, papier 350gr. Vous recevez une boîte à carte de visite gratuite. Sans plastification.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function carte_visite_green()
    {

        $table = new Tables();
        $format = new Format();
        $value = 19;
        $rootName = 'shopCarteVisiteGreen';
        $firstTable = $table->carte_visite_green();
        $thirdTable = $format->CarteVisiteGreenFormat();
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Carte de visite green line';
        $messageText = 'Cartes de visite recto/verso quadri sur papier 300gr 100%recyclé (Cyclus Print). Vous recevez une boîte à carte de visite gratuite.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function carte_300()
    {

        $table = new Tables();
        $format = new Format();
        $value = 20;
        $rootName = 'shopCarte300';
        $firstTable = $table->carte_300();
        $thirdTable = $format->carte300Format();
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Carte de visite Budget 300gr';
        $messageText = 'Impression sur papier 300gr r/v quadri. Vous recevez une boîte à carte de visite gratuite. (Dans la limite des stocks disponibles).';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function carte_deluxe()
    {
        $table = new Tables();
        $format = new Format();
        $value = 21;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->carte_deluxe();
        $thirdTable = $format->carteDeluxeFormat();
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Carte de visite Deluxe';
        $messageText = 'Impression recto/verso quadri, papier 350gr haut de gamme, plastification matte recto/verso + vernis sélectif (fichiers du vernis à envoyer par mail à info@flyprint.be)';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function carte350()
    {
        $table = new Tables();
        $format = new Format();
        $value = 22;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->carte350();
        $thirdTable = $format->carteDeluxeFormat(); // sxala
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = '350gr Carte postale';
        $messageText = 'Carte postale 350 gr quadri recto/verso + pelliculage UV brillant recto - Attention : ne convient pas aux cachets là ou c\'est imprimé.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function carte310()
    {
        $table = new Tables();
        $format = new Format();
        $value = 22;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->carte310();
        $thirdTable = $format->carteDeluxeFormat(); // sxala
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Véritable carte postale 310gr';
        $messageText = 'Véritable papier carte postale 310gr, vernis UV recto, pas de vernis au verso, il peut donc accepter tout type d\'écriture et marquage (crayon, bic, tampon, marqueur ...).';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function panneaux_plats_4()
    {
        $table = new Tables();
        $format = new Format();
        $value = 22;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->panneaux_plats_4();
        $thirdTable = $format->carteDeluxeFormat(); // sxala
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Panneaux plats 4mm';
        $messageText = 'Panneaux en polypropylène alvéolaire généralement utilisés pour les panneaux immobiliers, d\'une grande résistance, imprimés en quadri recto avec des encres UV. Épaisseur 4 mm.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function panneaux_pyramid_4()
    {
        $table = new Tables();
        $format = new Format();
        $value = 22;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->panneaux_pyramid_4();
        $thirdTable = $format->carteDeluxeFormat(); // sxala
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Panneaux en V (pyramidaux) 4mm';
        $messageText = 'Panneaux en polypropylène alvéolaire généralement utilisés pour les panneaux immobiliers, d\'une grande résistance, imprimés en quadri recto avec des encres UV. Fournis prêts à l\'emploi avec les 3 rainages ainsi que l\'autocollant déjà placé sur toute la longueur des deux pattes. Dimensions ouvertes, chaque versant fait la moitié moins la patte de 5 cm. Épaisseur 4 mm.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function panneaux_fléchage_4()
    {
        $table = new Tables();
        $format = new Format();
        $value = 22;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->panneaux_fléchage_4();
        $thirdTable = $format->carteDeluxeFormat(); // sxala
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Panneaux fléchage 4mm';
        $messageText = 'Panneaux en polypropylène alvéolaire généralement utilisés pour les panneaux immobiliers, d\'une grande résistance, imprimés en quadri recto avec des encres UV. Épaisseur 4 mm.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;

        return view('Flyers.Flyers135', $array);
    }

    public function roll_Up()
    {
        $table = new Tables();
        $format = new Format();
        $value = 22;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->roll_Up();
        $thirdTable = $format->carteDeluxeFormat(); // sxala
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Roll-Up';
        $messageText = 'Le Roll-Up est le support de communication par excellence. Impression recto quadri. Le prix inclus l\'appareil, la bâche, son sac de transport ainsi que le montage. Bâche en polypropylène dos argenté.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function vinyle_autocollant()
    {
        $table = new Tables();
        $format = new Format();
        $value = 22;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->vinyle_autocollant();
        $thirdTable = $format->carteDeluxeFormat(); // sxala
        $secondTable = $table->getTableFlyers135_option(); // sxala
        $messageHeader = 'Vinyle autocollant';
        $messageText = 'Vinyle (matière PVC monomère) adhésif blanc 100µ, impression recto quadri. Découpé au format.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['secondTable'] = $secondTable;
        $array['thirdTable'] = $thirdTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function vinyle_autocollant_rond()
    {
        $table = new Tables();
        $value = 22;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->vinyle_autocollant_rond();
        $messageHeader = 'Vinyle autocollant rond';
        $messageText = 'Vinyle (matière PVC monomère) adhésif blanc 100µ, impression recto quadri. Découpé en rond.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function vinyle_autocollant_grand()
    {
        $table = new Tables();
        $value = 22;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->vinyle_autocollant_grand();
        $messageHeader = 'Vinyle autocollant grand format';
        $messageText = 'Vinyle (matière PVC monomère) adhésif blanc 100µ, impression recto quadri. Sans découpe (fourni en rouleau)';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function brochures_A6()
    {
        $table = new Tables();
        $value = 22;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->brochures_A6();
        $messageHeader = 'Brochures A6';
        $messageText = 'Impression digitale quadri, papier 135gr, finition : 2 agrafes. Payement en ligne obligatoire. Format A6 fermé, A5 ouvert.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function brochures_A5()
    {
        $table = new Tables();
        $value = 22;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->brochures_A5();
        $messageHeader = 'Brochures A5';
        $messageText = 'Impression digitale quadri, papier 135gr, finition : 2 agrafes. Payement en ligne obligatoire. Format A5 fermé, A4 ouvert.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function brochures_a4()
    {
        $table = new Tables();
        $value = 22;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->brochures_a4();
        $messageHeader = 'Brochures A4 - 135gr';
        $messageText = 'Impression quadri sur papier satiné 135gr, finition 2 agrafes. Payement en ligne obligatoire. Format A4 fermé, A3 ouvert.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function brochures_a4_170()
    {
        $table = new Tables();
        $value = 22;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->brochures_a4_170();
        $messageHeader = 'Brochures A4 - 170gr';
        $messageText = 'Impression quadri sur papier satiné 170gr, finition 2 agrafes. Payement en ligne obligatoire. Format A4 fermé, A3 ouvert.';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }

    public function Reliure_135()
    {
        $table = new Tables();
        $value = 22;
        $rootName = 'shopCarteDeluxe';
        $firstTable = $table->Reliure_135();
        $messageHeader = 'Reliure métalique papier 135gr';
        $messageText = 'Impression quadri sur papier 135gr recto/verso. Chaque feuille comporte 2 faces. Si vous avez 46 pages à imprimer, cela fait 23 feuilles et vous choisirez "jusque 30 feuilles".';
        $array = Array();
        $array['firstTable'] = $firstTable;
        $array['messageHeader'] = $messageHeader;
        $array['messageText'] = $messageText;
        $array['value'] = $value;
        $array['rootName'] = $rootName;
        return view('Flyers.Flyers135', $array);
    }



}
