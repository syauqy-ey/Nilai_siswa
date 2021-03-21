<?php 
    $proses= $_POST['proses'];
    $nama_siswa = $_POST['nama'];
    $mata_kuliah = $_POST['matkul'];
    $nilai_uts = $_POST['nilaiuts'];
    $nilai_uas = $_POST['nilaiuas'];
    $nilai_tugas = $_POST['nilaitugas'];
    $nilai_akhir = (0.3*$nilai_uts+0.35*$nilai_uas+0.35*$nilai_tugas);
    if(!empty($proses)) {
        echo '<br/>Nama : '.$nama_siswa;
        echo '<br/>Mata Kuliah : '.$mata_kuliah;
        echo '<br/>Nilai UTS : '.$nilai_uts;
        echo '<br/>Nilai UAS : '.$nilai_uas;
        echo '<br/>Nilai Tugas Praktikum : '.$nilai_tugas;
        echo '<br/>Nilai Akhir : '.$nilai_akhir;
        echo '<br/>';
    }
    if($nilai_akhir > 55) {
         echo "Anda dinyatakan lulus.";
    } 
     else {
         echo "Anda tidak lulus.";
    }
    echo '<br/>';
    if ($nilai_akhir >= 85 && $nilai_akhir <= 100) {
        echo "Anda mendapatkan grade A.";
    }
    else if ($nilai_akhir >= 70 && $nilai_akhir < 85 ) {
        echo "Anda mendapatkan grade B.";
    }
    else if ($nilai_akhir >= 56 && $nilai_akhir < 70 ) {
        echo "Anda mendapatkan grade C.";
    }
    else if ($nilai_akhir >= 36 && $nilai_akhir < 56 ) {
        echo "Anda mendapatkan grade D.";
    }
    else if ($nilai_akhir >= 0 && $nilai_akhir < 36 ) {
        echo "Anda mendapatkan grade E.";
    }
    else {
        echo "Anda mendapatkan grade I.";
    }
?>