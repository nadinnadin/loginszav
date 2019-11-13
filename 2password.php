<?php 


function nextLetterz($str) {
 	$chr = ('z' === $str ? 'a' : ++$str);
 	return $chr;
}

function prevLetterz($str) {
 	$chr = ('a' === $str ? 'z' : --$str);
 	return $chr;
}

function getCharBySumz($sum){
	$len_sum = $sum % 26;
	$chr = chr($len_sum + ord('a'));
	return $chr;
}

function generatePasswordz($base){
	//	first char
	$password = nextLetterz($base[2][2]);
	// second char
	$password .= prevLetterz($base[1][strlen($base[1])-2]);
	// third char
	if (strlen($base[2]) % 2 == 0){
		$mid = strlen($base[2])/2;
		$chr = chr(min(ord($base[2][$mid-1]), ord($base[2][$mid])) - 1);
		$password .= prevLetterz($chr);
	}else{
		$password .= nextLetterz($base[2][1]);
	}
	//fourth char
	$len_sum = strlen($base[0]) + strlen($base[1]) - 2;
	$password .= getCharBySumz($len_sum);

	return $password;
}





