<?php
class Nilai {
    private $partisipasi;
    private $tugas;
    private $uts;
    private $uas;

    public function __construct($partisipasi, $tugas, $uts, $uas) {
        $this->partisipasi = $partisipasi;
        $this->tugas = $tugas;
        $this->uts = $uts;
        $this->uas = $uas;
    }

    public function hitungNA() {
        // Rumus perhitungan NA
        return ($this->partisipasi + $this->tugas + $this->uts + $this->uas) / 4;
    }
}
?>