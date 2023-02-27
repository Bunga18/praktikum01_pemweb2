<?php
$arrayBuah = ["semangka","melon","jeruk","pepaya"];

//mengurutkan array
sort($arrayBuah);

//menghapus nilai array paling belakang
array_pop($arrayBuah);

//menghapus spesifikasi value array tertentu
unset($arrayBuah[1]);

//menambah value array dibelakang
array_push ($arrayBuah, "Apel");

//untuk menghapus value array yang paling depan
array_shift($arrayBuah);

array_unshift($arrayBuah, "Mangga");

foreach($arrayBuah as $buah){
    echo $buah . "<br>";
}