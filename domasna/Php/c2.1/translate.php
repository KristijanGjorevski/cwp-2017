<?php 

$words = str_split(strtolower($_POST["translate"]));
echo "<pre>";
    print_r($words);
echo "</pre>";
$words_translated = "";


foreach ($words as $letter) {
    switch ($letter) {

        case ';':
        $words_translated .="ч";
            break;
        case 'q':
        $words_translated .= "љ";
            break;
        case 'w':
        $words_translated .="њ";
            break;
        case 'e':
        $words_translated .="е";
            break;
        case 'r':
        $words_translated .="р";
            break;
        case 't':
        $words_translated .="т";
            break;
        case 'y':
        $words_translated .="ѕ";
            break;
        case 'u':
        $words_translated .="у";
            break;
        case 'i':
        $words_translated .="и";
            break;
        case 'o':
        $words_translated .="о";
            break;
        case 'p':
        $words_translated .="п";
            break;
        case 'a':
        $words_translated .="а";
            break;
        case 's':
        $words_translated .="с";
            break;
        case 'd':
        $words_translated .="д";
            break;
        case 'f':
        $words_translated .="ф";
            break;
        case 'g':
        $words_translated .="г";
            break;
        case 'h':
        $words_translated .="х";
            break;
        case 'j':
        $words_translated .="ј";
            break;
        case 'k':
        $words_translated .="к";
            break;
        case 'l':
        $words_translated .="л";
            break;
        case 'z':
        $words_translated .="з";
            break;
        case 'x':
        $words_translated .="џ";
            break;
        case 'c':
        $words_translated .="ц";
            break;
        case 'v':
        $words_translated .="в";
            break;
        case 'b':
        $words_translated .="б";
            break;
        case 'n':
        $words_translated .="н";
            break;
        case 'm':
        $words_translated .="м";
            break;
        case '\\':
        $words_translated .="ж";
            break;
        case ']':
        $words_translated .="ѓ";
            break;
        case '[':
        $words_translated .="ш";
            break;
        case '\'':
        $words_translated .="ќ";
            break;

        default:
        $words_translated .= $letter;
            break;
    }
}

echo $words_translated;

?>