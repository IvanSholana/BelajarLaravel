<?php

$DataMahasiswa = [
    [
        'Nama_Lengkap' => 'Windah Basudara',
        'Jenis_Kelamin' => 'L',
        'Umur' => 22,
        'NIM' => '1203210035'],
    [
        'Nama_Lengkap' => 'Ivan Sholana',
        'Jenis_Kelamin' => 'L',
        'Umur' => 22,
        'NIM' => '1203210030',
    ],
    [
        'Nama_Lengkap' => 'Siti Nur Rohmah',
        'Jenis_Kelamin' => 'P',
        'Umur' => 23,
        'NIM' => '1203210031',
    ],

];

foreach ($DataMahasiswa as $key) {
    echo var_dump($key) . PHP_EOL;
}
