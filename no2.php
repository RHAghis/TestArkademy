<?php 

function ValidationLogin($name, $age, $username)
{
	if (preg_match('/^[A-Z].{2,25}/', $name)) {
		echo $name." sesuai dengan aturan";
		echo "\n";
	}else{
		echo $name." tidak sesuai dengan aturan";
		echo "\n";
	}

	if (preg_match('/^[0-9].{1,3}/', $age)) {
		echo $age." sesuai dengan aturan";
		echo "\n";
	}else{
		echo $age." tidak sesuai dengan aturan";
		echo "\n";
	}

	if (preg_match('/^[a-zA-Z0-9._-].{0,5}+^[0-9].{0,4}/', $username)) {
		echo $username." sesuai dengan aturan";
		echo "\n";
	}else{
		echo $username." tidak sesuai dengan aturan";
		echo "\n";
	}
}

ValidationLogin('ASE','22', 'ades_.122');

?>