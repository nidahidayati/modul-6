<!DOCTYPE html>
<html>
<head>
    <title>Latihan Kondisi PHP</title>
</head>
<body>
    <h1>Cek Nilai</h1>
    <?php
    $nilai = 85; // Anda bisa mengganti nilai ini untuk menguji kondisi yang berbeda
    echo "<p>Nilai Anda: " . $nilai ."</p>"; 

    if ($nilai > 90) {
        echo "<p style='color:blue;'>Sangat Baik!</p>";
    } elseif ($nilai > 80) {
        echo "<p style='color:green;'>Baik!</p>";
    } elseif ($nilai > 70) {
        echo "<p style='color:orange;'>Cukup.</p>";
    } else { 
       echo "<p style='color:red;'>Maaf, Anda perlu belajar lagi.</p>"; 
    }
    ?>
</body>
</html>