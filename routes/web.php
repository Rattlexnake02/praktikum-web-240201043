<?php

use Illuminate\Support\Facades\Route;

Route::get('/latihan-php', function () {
    $nama = 'Muhamad Isra Dwi Firmansya';
    $nilai = [80, 75, 90, 85, 99];
 
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