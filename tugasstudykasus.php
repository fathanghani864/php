<?php

$jabatan = "manager" ; 
$bonus = 200 ;
$jabatan = readline ("Apa jabatan dirimu ?");
if ($jabatan == "manager") {
   $gaji = 7000000;
}elseif ($jabatan == "supervisor"){
    $gaji = 5000000 ;
}elseif ($jabatan == "staff") {
    $gaji =3000000 ;
}

if($gaji <=300000){
    $pajak = 5 ;
}elseif ($gaji >=3000000 && $gaji <=5000000) {
    $pajak = 10 ;
}elseif ($gaji >=5000000) {
    $pajak = 15 ;
}
$bonus = readline ("berapa lama dirimu bekerja?");
if ($bonus <= 200) {
    $hasil =10000 ;
}elseif ($bonus = 200) {
    $hasil = 20000 ;
}elseif ($bonus >=200) {
    $hasil =100000 ;
}

$hasil_gaji =  ($gaji * $pajak) / 100 ;
$potongan_gaji = $gaji - $hasil_gaji + $bonus ;

echo "gaji untuk pekerjaan mu = " . "$potongan_gaji" ;
