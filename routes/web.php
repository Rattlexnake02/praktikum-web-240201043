<?php

use Illuminate\Support\Facades\Route;

Route::get('/latihan-php', function () {
    $nama = 'Nama Mahasiswa';
    $nilai = [45, 20, 68, 50, 72];
 
    $hitungRataRata = function (array $data): float {
       $total = 0;
        foreach ($data as $angka) {
            $total += $angka;
        }
        return $total / count($data);
        };
 $rataRata = $hitungRataRata($nilai);
 if ($rataRata >= 75) {
 $status = 'Lulus';
 } else {
 $status = 'Perlu Perbaikan';
 }
 return view('latihan-php', compact(
 'nama', 'nilai', 'rataRata', 'status'
 ));
});