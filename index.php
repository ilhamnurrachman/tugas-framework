<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Nilai</title>
</head>
<body>
    <h1>Convert Nilai</h1>
    <form action="" method="post">
        <label for="partisipasi">Nilai Partisipasi:</label>
        <input type="text" id="partisipasi" name="partisipasi" required><br><br>
        <label for="tugas">Nilai Tugas:</label>
        <input type="text" id="tugas" name="tugas" required><br><br>
        <label for="uts">Nilai UTS:</label>
        <input type="text" id="uts" name="uts" required><br><br>
        <label for="uas">Nilai UAS:</label>
        <input type="text" id="uas" name="uas" required><br><br>
        <button type="submit">Hitung</button>
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        require_once 'Nilai.php';
        require_once 'KonversiNilai.php';

        $partisipasi = floatval($_POST['partisipasi']);
        $tugas = floatval($_POST['tugas']);
        $uts = floatval($_POST['uts']);
        $uas = floatval($_POST['uas']);

        $nilai = new Nilai($partisipasi, $tugas, $uts, $uas);
        $na = $nilai->hitungNA();
        $nh = KonversiNilai::konversi($na);

        echo "Nilai Akhir (NA): $na<br>";
        echo "Nilai Konversi Huruf (NH): $nh<br>";
    }
    ?>
</body>
</html>
