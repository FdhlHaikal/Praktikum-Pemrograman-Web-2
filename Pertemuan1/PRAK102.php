<?php

#Variabel
$Jarijari = 4.2;
$Tinggi = 5.4;
$Panjang = 8.9;
$Lebar = 14.7;
$Sisi = 7.9;

#NIM
$NIM = 5;

#Kondisi
if ($NIM == 0 || $NIM == 1) {
    $Tabung = 3.14 * $Jarijari * $Jarijari * $Tinggi;
    echo number_format($Tabung, 3);
} elseif ($NIM == 2 || $NIM == 3) {
    $Kerucut = 1/3 * 3.14 * $Jarijari * $Jarijari * $Tinggi;
    echo number_format($Kerucut, 3);
} elseif ($NIM == 4 || $NIM == 5) {
    $Bola = 4/3 * 3.14 * $Jarijari * $Jarijari * $Jarijari;
    echo number_format($Bola, 3);
} elseif ($NIM == 6 || $NIM == 7) {
    $PrismaSegitiga = 1/2 * $Sisi * $Tinggi;
    echo number_format($PrismaSegitiga, 3);
} elseif ($NIM == 8 || $NIM == 9) {
    $LimasPersegiPanjang = 1/3 * $Panjang * $Lebar * $Tinggi;
    echo number_format($LimasPersegiPanjang, 3);
}
?>