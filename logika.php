<?php

    // Penulisan array yang lama

    $namaSiswa = array ("Elia", "grace", "Melpen");
    
    // Penulisan array yang baru

    $nama = [ "Elia","Grace","Melpen"];

    // Var_Dump($namasiswa[0]);
    
    echo "<br>". $nama[0];
    echo "<br>". $nama[1];
    echo "<br>". $nama[2];

    foreach($nama as $siswa)
    {
        echo "<br>" .$siswa;
    }

    // Array Multi Dimensi

    $namaSaCode = [
        [
            "namadepan" => "Jakson", 
            "namabelakang" => "Tabuni",
            "usia" => "30",
            "alamat" => "Doyo Kab. Sentani"
        ],

        [
            "namadepan" => "Obet", 
            "namabelakang" => "Tabuni",
            "usia" => "30",
            "alamat" => "Doyo Kab. Sentani"
        ],

        [
            "namadepan" => "Abet", 
            "namabelakang" => "Nauw",
            "usia" => "30",
            "alamat" => "Doyo Kab. Sentani"
        ]
    ];

    // Tampilkan Data
    foreach($namaSaCode as $nama)
    {
        echo "<br> <br> <br> Siswa No ". ++$i ."<br>";
        echo "Nama : ". $nama["namadepan"]." ".$nama["namabelakang"]."<br>";
        echo "Usia : ". $nama["usia"]."<br>";
        echo "Alamat : ". $nama["alamat"]."<br>";  
    }
          

?>