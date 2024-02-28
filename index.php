<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Convert Nilai</title>
</head>

<body>
    <h1>Convert Nilai</h1>
    <form action="<?= site_url('nilai/hitung') ?>" method="post">
        <?= csrf_field() ?>
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
    <?php if (session()->has('errors')) : ?>
        <?php foreach (session('errors') as $error) : ?>
            <p><?= $error ?></p>
        <?php endforeach ?>
    <?php endif ?>
</body>

</html>