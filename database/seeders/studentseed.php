<?php

namespace Database\Seeders;

use App\Models\student;
use Illuminate\Database\Seeder;

class studentseed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Schema::disableForeignKeyConstraints();
        // student::truncate();
        // Schema::enableForeignKeyConstraints();

        // $DataMahasiswa = [
        //     [
        //         'Nama_Lengkap' => 'Windah Basudara',
        //         'Jenis_Kelamin' => 'L',
        //         'Umur' => 22,
        //         'NIM' => '1203210035'],
        //     [
        //         'Nama_Lengkap' => 'Ivan Sholana',
        //         'Jenis_Kelamin' => 'L',
        //         'Umur' => 22,
        //         'NIM' => '1203210030',
        //     ],
        //     [
        //         'Nama_Lengkap' => 'Siti Nur Rohmah',
        //         'Jenis_Kelamin' => 'P',
        //         'Umur' => 23,
        //         'NIM' => '1203210031',
        //     ],

        // ];

        // foreach ($DataMahasiswa as $value) {
        //     student::insert([
        //         'Nama_Lengkap' => $value['Nama_Lengkap'],
        //         'Jenis_Kelamin' => $value['Jenis_Kelamin'],
        //         'Umur' => $value['Umur'],
        //         'NIM' => $value['NIM'],
        //     ]);
        // }
        student::factory()->count(100)->create();
    }
}
