<?php 


//echo $_POST["comment"];
$count_letters = strlen($_POST["comment"]);
echo "Brojot na site karakteri {$count_letters}";
echo "<br/>";

$words = explode(" ", $_POST["comment"]);
$count_words = count($words);
echo "Brojot na site zborovi {$count_words}";
echo "<br/>";

$sentences = explode(".", $_POST["comment"]);
$count_sentences = count($sentences);
echo "Brojot na site recenici {$count_sentences}";
echo "<br/>";
		$more_then_seven =[];
		$less_then_seven = [];
		$seven = [];

for ($i=0; $i < $count_words ; $i++) { 
	
	if (strlen($words[i]) > 7) {

		array_push($more_then_seven, $words[i]);

	}elseif (strlen($words[i] < 7) {

		array_push($less_then_seven, $words[i]);

	}elseif (strlen($words[i] == 7) {

		array_push($seven, $words[i]);

	}
}
echo "<pre>";
print_r($more_then_seven);
echo "</pre>";
echo "<pre>";
print_r($less_then_seven);
echo "</pre>";
echo "<pre>";
print_r($seven);
echo "</pre>";

?>