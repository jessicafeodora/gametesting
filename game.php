<?php
echo "welcome\n";
while (true) {
	echo "=== game tebak angka ===\n";
echo "tebak sebuah angka 1 dan 9!\n";
$computer = rand(1,9);
echo "masukin tebakan lo: ";
$player = trim(fgets(STDIN));
if ($player == $computer) {
	echo "menang. angka komputer: $computer\n";
	exit;
} else {
	echo "kalah. angka komputer: $computer\n";
};
};



