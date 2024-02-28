<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KonversiNilaiController extends Controller
{
    public function index()
    {
        return view('konversi_nilai.blade');
    }

    public function hitung(Request $request)
    {
        // Validasi input
        $request->validate([
            'partisipasi' => 'required|numeric|between:0,100',
            'tugas' => 'required|numeric|between:0,100',
            'uts' => 'required|numeric|between:0,100',
            'uas' => 'required|numeric|between:0,100',
        ]);

        // Ambil nilai dari form
        $partisipasi = $request->input('partisipasi');
        $tugas = $request->input('tugas');
        $uts = $request->input('uts');
        $uas = $request->input('uas');

        // Hitung nilai akhir
        $na = ($partisipasi + $tugas + $uts + $uas) / 4;

        // Konversi nilai ke huruf
        if ($na >= 85) {
            $nh = 'A';
        } elseif ($na >= 80) {
            $nh = 'A-';
        } elseif ($na >= 75) {
            $nh = 'B+';
        } elseif ($na >= 70) {
            $nh = 'B';
        } elseif ($na >= 65) {
            $nh = 'B-';
        } elseif ($na >= 60) {
            $nh = 'C+';
        } elseif ($na >= 55) {
            $nh = 'C';
        } elseif ($na >= 40) {
            $nh = 'D';
        } else {
            $nh = 'E';
        }

        // Tampilkan hasil
        return view('hasil_konversi', compact('na', 'nh'));
    }
}
