<?php 
header("Content-type: text/plain");
// 1. Logical Part
// 1.1 An evil clown
// The evil clown wants emoticons to have no more than one parenthesis in a row.
// Write with PHP a function to help him with this.

#first variant
/**
 * TE comment:
 * function should replace '))' to ')' and '((' to '('
 */
/**
 * MY comment: changed both versions of the Clown function and added a third.
 * 
 */
function clown(string $string = '')
{
 $symbol = substr($string, -1);
 for ($i = 0; $i < strlen($string); $i++) {
  $clearString .= str_replace(['(', ')'], ['', ''], $string[$i]);
 }

 return $clearString . $symbol;
}
 echo clown('=))'). PHP_EOL;
 
#second variant
/**
 * TE comment:
 * function also should replace '((' not only '))'
 */
function clownOops (string $str, $n) {
	$result = '';

	for ($i=0; $i < strlen($str); $i++) {
		if ($str[$i] === $n && $str[$i + 1] === $n) {
			continue;
		} else {
			$result.= $str[$i];
		}
	}
	return $result;
}

/**
 * TE comment:
 * use PHP_EOL instead of '<br>'
 */
echo clownOops('=)))', ')'). PHP_EOL;

function clownOopsThird(string $string = '') {
	$lenghtString = strlen($string);

	$clearString = '';
	for ($i = 0; $i < $lenghtString; $i++) {
		if ($i == $lenghtString - 1) {
		$clearString .= $string[$i];
		} elseif ($string[$i] === ')' || $string[$i] === '(') {
			continue;
			} else {
				$clearString .= $string[$i];
				}
	}

	return $clearString;
}

echo clownOopsThird('=))))))))))))') . PHP_EOL;
echo clownOopsThird('=((((((((') . PHP_EOL;

// 1.2 Lucky Tickets
// The ticket number consists of 6 numbers. The ticket is lucky if the sum of the first three numbers
// equals the sum of the next three numbers. Examples of such ticket numbers: 933591, 030300.
// Write with PHP a function that returns all lucky numbers.

/**
 * TE comment:
 * argument $lucky unnecessary here
 */
function luckyTickets($str) {
	$str = [];
	foreach (range(1, 1000000) as $number) {
		$number = str_pad($number, 6, '0', STR_PAD_LEFT);
		$arr = str_split($number);

		$isEqual = $arr[0] + $arr[1] + $arr[2] === $arr[3] + $arr[4] + $arr[5];
		if($isEqual) {
			array_push($str, $number);
  		 }
	}
	return $str;
}

// echo "<pre>";
// var_dump(luckyTickets($lucky));
// echo '</pre>';

// 2. Arrays Part
// 2.1 Reverse string
// Write with PHP a function with functional like strrev(). You should NOT use standard PHP functions. You can use oops and other language constructions.

#first variant
function myRevers(string $str) {
    $rev = '';
    for ($i = mb_strlen($str); $i>=0; $i--) {
        $rev .= mb_substr($str, $i, 1);
    }
    return $rev;
}

echo myRevers("Реверс"). PHP_EOL;

#second variant
function toRevers(string $str) {
    $str = implode(array_reverse(str_split($str)));
    return $str;
}

echo toRevers("Lover sssdsd"). PHP_EOL;


// 2.2 Words in text
// Write with PHP a function getWords(string $text) that returns an associative array, where word is
// key, and value is how many times used the word in text. You need to normalize word (Word and
// word should be the same key, you can use strlower() PHP function).

function getWords($text) {
	$text = strtolower($text);
	$notused = ["'", ",", ".", ";","\""];
	$text = str_replace($notused, '', $text);
	$text = explode(' ', $text);
	$text = array_count_values($text);
	return $text;
}
// echo '<pre>';
// print_r(getWords("After several days of rain that nearly floods Derry, Maine, five-year-old Georgie Denbrough goes
// outside to play. He brings with him a paper boat his older brother, Bill, made for him while sick in
// bed. Georgie helps with the boat by retrieving a box of paraffin from the shelves by the cellar stairs,
// even though the power is out and Georgie imagines a monster lives in the cellar. Bill melts the
// paraffin in a bowl, and the boys laugh and joke together while they smear the paraffin over the
// folded newspaper boat to waterproof it. Before Georgie goes out to play, he kisses Bill's cheek, and
// Bill tells Georgie to be careful.
// Even though the rains have slackened, the gutters run with water. In his yellow hat and slicker,
// Georgie follows his boat as it sails along Witcham Street, wishing Bill could be with him to see it go
// because Georgie is not as good as Bill at telling stories about what he sees. A current takes the
// boat into a storm drain, and Georgie peeks inside to look for it.
// In the drain Georgie sees a pair of yellow eyes. Scared, he begins to back away, but a voice speaks
// to him. Georgie looks back and sees a clown; the clown introduces himself as \"Mr. Bob Gray, also
// known as Pennywise the Dancing Clown.\" Georgie at first thought the drain smelled like his scary
// cellar at home, but now he can smell a carnival. Pennywise has Georgie's boat in one hand and a
// balloon in the other; he offers Georgie both. When Georgie reaches forward, Pennywise grabs
// Georgie's arm and rips it off. Georgie dies immediately. Dave Gardner, arriving \"only 45 seconds
// after the first scream,\" finds Georgie's body.
// The sheriff tells reporters Georgie must have got his arm stuck in a fast current in the storm drain.
// Mrs. Denbrough is sedated in the local emergency room; Bill remains sick in bed, listening to his
// father weep in another room. The paper boat continues through the sewers to the Penobscot River
// and out to sea as the rain clouds break overhead.
// "));
// echo '</pre>';

// 2.3 Array Sum
// Write with PHP a function that will return the sum of all array elements, the array can be a nested
// array (nesting can be 2 or more), You should NOT use standard PHP functions

function _sum($arr) {
	$sum = 0;
	array_walk_recursive($arr, function($v) use(&$sum) {
        @$sum += $v;
    });
    return $sum;
}

$arr = [ 12,24,
			[ 21,17,
				[1, 7, 5],
			4,98,1],
		11,	7,
			['2hello', 3, 7],
];


echo (_sum($arr)). PHP_EOL;


// 2.4 Mirror Letters
// The Wizzard decided to make a funny joke. He replaced all letters in words to their mirror letter (A
// will be replaced on Z, B on Y, etc.). Write with PHP a function to help the wizzard to make this joke
// real.

function mirror(string $str) {
	$mirror = ['a'=>'z', 'b'=>'y', 'c'=>'x', 'd'=>'w', 'e'=>'v', 'f'=>'u', 'g'=>'t', 'h'=>'s', 'i'=>'r', 'j'=>'q', 'k'=>'p', 'l'=>'o', 'm'=>'n', 'A'=>'Z', 'B'=>'Y', 'C'=>'X', 'D'=>'W', 'E'=>'V', 'F'=>'U', 'G'=>'T', 'H'=>'S', 'I'=>'R', 'J'=>'Q', 'K'=>'P', 'L'=>'O', 'M'=>'N'];
	$result = str_replace(array_keys($mirror), array_values($mirror), $str);
	return $result;
}
echo mirror('Hello, woung wizzard!'). PHP_EOL;

// 2.5 Unique words
// Write with PHP a function getUniqueWords(string $text) that returns an array, with words which
// used in text only one time. You need to normalize word (Word and word should be the same for
// function, you can use strlower() PHP function).\

function getUniqueWords ($text) {
	$text = strtolower($text);
	$notused = ["'", ",", ".", ";","\""];
	$text = str_replace($notused, '', $text);
	$text = explode(' ', $text);
	$text = array_diff($text, array_diff_key($text, array_unique($text)));
	return $text;
}

echo '<pre>';
print_r(getUniqueWords('I Write PHP Write return PHP Array with One Word'));
echo '<pre>';

// 3. OOP Part
// 3.1 Collection

// 3.2 Zoo

require_once 'Class/Zoo.php';
require_once 'Class/Animal.php';
require_once 'Class/Canine.php';
require_once 'Class/Nautical.php';
require_once 'Class/Insect.php';
require_once 'Class/Kitty.php';

// $zoo = new Canine('antilopa', 'Angola', 'Dambo');
// $zoo->born();
// $zoo->barkDog();
// $zoo->wolf();
// $zoo->antilopa();
// $cat = new Kitty('Cat', 'yellow', Kitty::GENDER_M);
// $cat->infoCat();
// $cougar = new Kitty('Cougar','black', Kitty::GENDER_F);
// $cougar->cougar();
// $lion = new Kitty('Lion', 'yeellow', 'male');
// $lion->lion();
// $nautical = new Nautical('The Shark','Black Sea');
// $nautical->trout();
// $nautical->shark();
// $nautical->fish();

// $insect = new Insect('Sarancha', 'a big', 'on other insect');
// $insect->getInfo();