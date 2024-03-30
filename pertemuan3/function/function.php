<?php 
function tambah ($angka1, $angka2){
    $hasil = $angka1 + $angka2;
    return $hasil;
};

$hasil_pertambahan = tambah (5, 3);
echo $hasil_pertambahan;