<?php
$profileArray = [
    [ "nama" => "Bunga Aprilia", 
    "kelas" => "TI06",
    "ipk" => 4,
    "sudah_lulus" => false 
],[
    "nama" => "Bunga Aprilia",
    "kelas" => "TI06",
    "ipk" => 4,
    "sudah_lulus" => false
]
    
];
foreach ($profileArray as $profile ){
    echo $profile ['nama'];
}
