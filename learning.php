<?php 


function nextLetter($str) {
 	$chr = ('z' === $str ? 'a' : ++$str);
 	return $chr;
}

function prevLetter($str) {
 	$chr = ('a' === $str ? 'z' : --$str);
 	return $chr;
}

function getCharBySum($sum){
	$len_sum = $sum % 26;
	$chr = chr($len_sum + ord('a'));
	return $chr;
}

function generatePassword($base){
	//	first char
	$password = nextLetter($base[2][1]);
	// second char
	$password .= prevLetter($base[1][1]);
	// third char
	if (strlen($base[2]) % 2 == 0){
		$mid = strlen($base[2])/2;
		$chr = chr(min(ord($base[2][$mid-1]), ord($base[2][$mid])) - 1);
		$password .= prevLetter($chr);
	}else{
		$password .= nextLetter($base[2][strlen($base[2]) - 1]);
	}
	//fourth char
	$len_sum = strlen($base[0]) + strlen($base[1]) + 2;
	$password .= getCharBySum($len_sum);

	return $password;
}




