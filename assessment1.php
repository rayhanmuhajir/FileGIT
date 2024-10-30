//Adu Kekuatan Tim Tinju
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Adu Kekuatan Tim Tinju</title>
</head>
<body>
    <h2>THIS IS A SHOWTIME!!!!</h2>
    <form method="POST">
        <label for="timA">Pilih nomer Petarung dari Tim A (1-5): </label>
        <input type="number" name="timA" id="timA" min="0" max="4" required><br><br>

        <label for="timB">Pilih nomer Petarung dari Tim B (1-5): </label>
        <input type="number" name="timB" id="timB" min="0" max="4" required><br><br>

        <button type="submit">Fight</button>
    </form>

    <?php
    // Cek apakah data dari form sudah di-submit
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Array nama dan power tim A
        $timA = [
            ["nama" => "Andre", "power" => 80],
            ["nama" => "Berli", "power" => 75],
            ["nama" => "Charlie", "power" => 67],
            ["nama" => "Desmond", "power" => 88],
            ["nama" => "Erina", "power" => 95]
        ];

        // Array nama dan power tim B
        $timB = [
            ["nama" => "Farah", "power" => 75],
            ["nama" => "Gerry", "power" => 89],
            ["nama" => "Hesti", "power" => 76],
            ["nama" => "Indra", "power" => 61],
            ["nama" => "Jordan", "power" => 96]
        ];

        // Ambil input petarung dari form
        $indexA = $_POST['timA'];
        $indexB = $_POST['timB'];

        // Dapatkan kekuatan petarung dari kedua tim
        $powerA = $timA[$indexA]['power'];
        $powerB = $timB[$indexB]['power'];

        // Menampilkan petarung yang diadu
        echo "<h3>Fight Highlights:</h3>";
        echo "<p>Petarung Tim A: " . $timA[$indexA]['nama'] . " dengan kekuatan $powerA</p>";
        echo "<p>Petarung Tim B: " . $timB[$indexB]['nama'] . " dengan kekuatan $powerB</p>";

        // Menentukan pemenang dan sisa kekuatan
        if ($powerA > $powerB) {
            $sisaKekuatan = $powerA - $powerB;
            echo "<h4> Juri memutuskan Pemenangnya adalah " . $timA[$indexA]['nama'] . " dari Tim A dengan sisa kekuatan $sisaKekuatan.</h4>";
        } elseif ($powerB > $powerA) {
            $sisaKekuatan = $powerB - $powerA;
            echo "<h4>Juri memutuskan Pemenangnya adalah " . $timB[$indexB]['nama'] . " dari Tim B dengan sisa kekuatan $sisaKekuatan.</h4>";
        } else {
            echo "<h4>Pertarungan berakhir imbang, juri memutuskan hasil dari pertandingan dengan imbang.</h4>";
        }
    }
    ?>
</body>
</html>
