<?php

$jabatan = "supervisor" ; 
$bonus = 200 ;
// $jabatan = readline ("Apa jabatan dirimu ?");
if ($jabatan == "manager") {
   $gaji = 17000000;
}elseif ($jabatan == "supervisor"){
    $gaji = 15000000 ;
}elseif ($jabatan == "staff") {
    $gaji =13000000 ;
}

if($gaji <=1300000){
    $pajak = 5 ;
}elseif ($gaji >=13000000 && $gaji <=15000000) {
    $pajak = 10 ;
}elseif ($gaji >=17000000) {
    $pajak = 15 ;
}
// $bonus = readline ("berapa lama dirimu bekerja?");
if ($bonus <= 200) {
    $hasil =10000 ;
}elseif ($bonus = 200) {
    $hasil = 20000 ;
}elseif ($bonus >=200) {
    $hasil =100000 ;
}

$hasil_gaji =  ($gaji * $pajak) / 100 ;
$potongan_gaji = $gaji - $hasil_gaji + $bonus ;

echo "jabatan kamu =" . "$jabatan" . "<br>"; 
echo "gaji untuk pekerjaan mu = " . "$potongan_gaji" . "<br>";
echo "pajak yang kamu dapatkan =" . "$pajak". "<br>";
echo "bonus yang kamu dapatkan =" . "$bonus". "<br>";
