<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['nama'])){
        $nama = $_POST['nama'];
        echo "Nama Anda: <b>$nama</b><br>";
    }
    if(isset($_POST['nim'])){
        $nim = $_POST['nim'];
        echo "NIM Anda: <b>$nim</b><br>";
    }

    if(isset($_POST['nilai'])){
        $nilai = $_POST['nilai'];
        if ($nilai >= 91) {
            $nilaihuruf = 'A';
        } elseif ($nilai >= 81) {
            $nilaihuruf = 'B';
        } elseif ($nilai >= 71) {
            $nilaihuruf = 'C';
        } elseif ($nilai >= 61) {
            $nilaihuruf = 'D';
        } else {
            $nilaihuruf = 'E';
        }
        if ($nilai >= 71) {
            echo "Nilai anda $nilai ($nilaihuruf). Anda dinyatakan lulus.";
        } else {
            echo "Nilai anda $nilai ($nilaihuruf). Mohon maaf, anda dinyatakan gagal.";
        }
    }
}
?>
