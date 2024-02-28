<?php
class KonversiNilai {
    public static function konversi($na) {
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
?>