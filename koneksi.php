<?php 

$koneksi = mysqli_connect("localhost", "root", "", "form");


if (!$koneksi) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

if (isset($_POST['kirim'])) {
    
    $nama = mysqli_real_escape_string($koneksi, $_POST['nama']);
    $kelas = mysqli_real_escape_string($koneksi, $_POST['kelas']);
    $nim = mysqli_real_escape_string($koneksi, $_POST['nim']);
    $gender = mysqli_real_escape_string($koneksi, $_POST['gender']);
    $saran = mysqli_real_escape_string($koneksi, $_POST['saran']);
    
    $query = "INSERT INTO form (nama, kelas, nim, gender, saran) VALUES ('$nama', '$kelas', '$nim', '$gender', '$saran')";

    if (mysqli_query($koneksi, $query)) {
        echo "Data berhasil disimpan!";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>
