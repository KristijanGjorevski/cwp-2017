<?php 
header('Content-type: text/plain; charset=utf-8');



$words = str_split(strtolower($_POST["translate"]));


$words_to_cyrilic = "";
$words_to_latin = "";

if ($_POST["convertor"] == "l2c") {

    foreach ($words as $letter) {
        switch ($letter) {

            case ';':
            $words_to_cyrilic .="ч";
                break;
            case 'q':
            $words_to_cyrilic .= "љ";
                break;
            case 'w':
            $words_to_cyrilic .="њ";
                break;
            case 'e':
            $words_to_cyrilic .="е";
                break;
            case 'r':
            $words_to_cyrilic .="р";
                break;
            case 't':
            $words_to_cyrilic .="т";
                break;
            case 'y':
            $words_to_cyrilic .="ѕ";
                break;
            case 'u':
            $words_to_cyrilic .="у";
                break;
            case 'i':
            $words_to_cyrilic .="и";
                break;
            case 'o':
            $words_to_cyrilic .="о";
            break;
            case 'p':
            $words_to_cyrilic .="п";
                break;
            case 'a':
            $words_to_cyrilic .="а";
                break;
            case 's':
            $words_to_cyrilic .="с";
                break;
            case 'd':
            $words_to_cyrilic .="д";
                break;
            case 'f':
            $words_to_cyrilic .="ф";
                break;
            case 'g':
            $words_to_cyrilic .="г";
                break;
            case 'h':
            $words_to_cyrilic .="х";
                break;
            case 'j':
            $words_to_cyrilic .="ј";
                break;
            case 'k':
            $words_to_cyrilic .="к";
                break;
            case 'l':
            $words_to_cyrilic .="л";
                break;
            case 'z':
            $words_to_cyrilic .="з";
                break;
            case 'x':
            $words_to_cyrilic .="џ";
                break;
            case 'c':
            $words_to_cyrilic .="ц";
                break;
            case 'v':
            $words_to_cyrilic .="в";
                break;
            case 'b':
            $words_to_cyrilic .="б";
                break;
            case 'n':
            $words_to_cyrilic .="н";
                break;
            case 'm':
            $words_to_cyrilic .="м";
                break;
            case '\\':
            $words_to_cyrilic .="ж";
                break;
            case ']':
            $words_to_cyrilic .="ѓ";
                break;
            case '[':
            $words_to_cyrilic .="ш";
                break;
            case '\'':
            $words_to_cyrilic .="ќ";
                break;

            default:
            $words_to_cyrilic .= $letter;
                break;
        }
    }
    echo $words_to_cyrilic;
}
if ($_POST["convertor"] == "c2l") {

        foreach ($words as $letter) {
            switch ($letter) {

                case 'ч':
                $words_to_latin .=";";
                    break;
                case 'љ':
                $words_to_latin .= "q";
                    break;
                case 'њ':
                $words_to_latin .="w";
                    break;
                case 'е':
                $words_to_latin .="e";
                    break;
                case 'р':
                $words_to_latin .="r";
                    break;
                case 'т':
                $words_to_latin .="t";
                    break;
                case 'ѕ':
                $words_to_latin .="y";
                    break;
                case 'у':
                $words_to_latin .="u";
                    break;
                case 'и':
                $words_to_latin .="i";
                    break;
                case 'о':
                $words_to_latin .="o";
                break;
                case 'п':
                $words_to_latin .="p";
                    break;
                case 'а':
                $words_to_latin .="a";
                    break;
                case 'с':
                $words_to_latin .="s";
                    break;
                case 'д':
                $words_to_latin .="d";
                    break;
                case 'ф':
                $words_to_latin .="f";
                    break;
                case 'г':
                $words_to_latin .="g";
                    break;
                case 'х':
                $words_to_latin .="h";
                    break;
                case 'ј':
                $words_to_latin .="j";
                    break;
                case 'к':
                $words_to_latin .="k";
                    break;
                case 'л':
                $words_to_latin .="l";
                    break;
                case 'з':
                $words_to_latin .="z";
                    break;
                case 'џ':
                $words_to_latin .="x";
                    break;
                case 'ц':
                $words_to_latin .="c";
                    break;
                case 'в':
                $words_to_latin .="v";
                    break;
                case 'б':
                $words_to_latin .="b";
                    break;
                case 'н':
                $words_to_latin .="n";
                    break;
                case 'м':
                $words_to_latin .="m";
                    break;
                case 'ж':
                $words_to_latin .="\\";
                    break;
                case 'ѓ':
                $words_to_latin .="]";
                    break;
                case 'ш':
                $words_to_latin .="[";
                    break;
                case 'ќ':
                $words_to_latin .="'";
                    break;

                default:
                $words_to_latin .= $letter;
                    break;
                }
            }
    echo $words_to_latin;
}


?>