<?php
echo "Hi, welcome!\n";
while (true) {
	echo "======= Game Tebak Angka =======\n";
echo "Tebak sebuah angka dari 1 sampai 9!\n";
$computer = rand(1,9);
echo "Masukkin tebakan kamu: ";
$player = trim(fgets(STDIN));
if ($player == $computer) {
	echo "Selamat kamu menang. Angka komputer: $computer\n";
	exit;
} else {
	echo "Sayang sekali, kamu kalah. Angka komputer: $computer\n";
};
echo "This game was made together with Kang Fandy in Webinar\n\n";
}


