<?php

namespace App\Controllers;

use CodeIgniter\Controller;

class NilaiController extends Controller
{
    public function index()
    {
        return view('nilai/index');
    }

    public function hitung()
    {
        // Validasi input
        $validationRules = [
            'partisipasi' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[100]',
            'tugas' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[100]',
            'uts' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[100]',
            'uas' => 'required|numeric|greater_than_equal_to[0]|less_than_equal_to[100]',
        ];

        if (!$this->validate($validationRules)) {
            return redirect()->back()->withInput()->with('errors', $this->validator->getErrors());
        }

        // Ambil nilai dari input
        $partisipasi = $this->request->getPost('partisipasi');
        $tugas = $this->request->getPost('tugas');
        $uts = $this->request->getPost('uts');
        $uas = $this->request->getPost('uas');

        // Hitung Nilai Akhir (NA)
        $na = ($partisipasi + $tugas + $uts + $uas) / 4;

        // Konversi Nilai Akhir (NA) menjadi Nilai Huruf (NH)
        $nh = $this->konversiNilaiHuruf($na);

        // Tampilkan hasil
        return view('nilai/hasil', [
            'na' => $na,
            'nh' => $nh
        ]);
    }

    private function konversiNilaiHuruf($na)
    {
        // Konversi nilai berdasarkan interval
        if ($na >= 85) {
            return 'A';
        } elseif ($na >= 80) {
            return 'A-';
        } elseif ($na >= 75) {
            return 'B+';
        } elseif ($na >= 70) {
            return 'B';
        } elseif ($na >= 65) {
            return 'B-';
        } elseif ($na >= 60) {
            return 'C+';
        } elseif ($na >= 55) {
            return 'C';
        } elseif ($na >= 40) {
            return 'D';
        } else {
            return 'E';
        }
    }
}
