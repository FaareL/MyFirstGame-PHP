<?php
echo "\n\tWelcome To My Game\n";
while(true) {
	echo "\n+ ------ Game Tebak Angka ------- +\n";
	echo "  Tebak sebuah angka dari 1 dan 9! \n";
	echo "+ ------------------------------- +\n";
	$computer = rand(1,9);
	echo "Masukkan Tebakanmu -> ";
	$player = trim(fgets(STDIN));
	if ($player == $computer) {
		echo "\tMenang\n";
		echo "Angka computer     -> $computer\n\n";
		break;
	}else{
		echo "\tKalah\n";
		echo "Angka computer     -> $computer\n\n";
	}
}