<?php
echo "program ganjil genap". PHP_EOL;

$number = 1;
if ($number % 2 == 0) {
    echo "genap" . PHP_EOL;
} else {
    echo "ganjil". PHP_EOL;
}

/*
Program Hitung Luas Segitiga

Deklarasi
variabel a,t tipe data >>> integer
variabel hasil >>> float

algoritma
nilai masuk(a,t)
hasil = 1/2 * a * t
nilai keluar("luas segitiga: ", hasil)
*/

echo "program hitung luas segitiga". PHP_EOL;

$a = 6;
$t = 20;
$hasil =(integer)(1/2 *$a *$t) .PHP_EOL;
 echo "luas segitiga adalah: ". $hasil;
/*
output print(string),printf(string),echo(all tipe data)
debug var_dump

*/

echo "hitung volume balok". PHP_EOL;

$p = 82;
$l = 46;
$t = 18;
$hasil = (string)($p * $l * $t). PHP_EOL;
echo "panjang= $p, lebar= $l, tinggi= $t". PHP_EOL; 
echo "volume balok adalah: ". $hasil;
var_dump($hasil);
?>