<!DOCTYPE html>
<html lang="en">
<head>
    <title>Kalkulator dengan bahasa pemrograman PHP</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }
    </style>
</head>

<body>
<div class="kalkulator">
    <img src="UNIDA.png" width="75">
    <h2 class="judul"><font color="black"><b>KALKULATOR UNIDA</b></font></h2>
    <form action="" method="post">
        <input type="text" name="bil1" class="bil" autocomplete="off" placeholder="Masukkan bilangan pertama" required>
        <input type="text" name="bil2" class="bil" autocomplete="off" placeholder="Masukkan bilangan kedua" required>
        <select class="opt" name="operasi">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="x">x</option>
            <option value="/">/</option>
        </select>
        <input type="submit" name="hitung" class="tombol" value="Hitung">
    </form> 

    <?php
    $hasil = ""; // Initialize hasil as an empty string

    if (isset($_POST['hitung'])) {
        $bil1 = $_POST['bil1'];
        $bil2 = $_POST['bil2'];
        $operasi = $_POST['operasi'];

        // Validate and convert inputs to float
        $bil1 = floatval($bil1);
        $bil2 = floatval($bil2);

        // Perform calculation based on the selected operation
        switch ($operasi) {
            case "+":
                $hasil = $bil1 + $bil2;
                break;
            case "-":
                $hasil = $bil1 - $bil2;
                break;
            case "x":
                $hasil = $bil1 * $bil2;
                break;
            case "/":
                if ($bil2 != 0) {
                    $hasil = $bil1 / $bil2;
                } else {
                    $hasil = "Error: Pembagian dengan nol";
                }
                break;
        }
    }
    ?>
    <input type="text" value="<?php echo $hasil; ?>" class="bil" readonly>
</div>
</body>
</html>