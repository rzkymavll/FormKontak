<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <div class="card-container">
            <div class="left">
                <div class="left-container">
                    <h2>Hubungi Kami</h2>
                    <p>Silahkan isi form yang sudah disediakan</p>
                </div>
            </div>
            <div class="right">
                <div class="right-container">
                    <h2 class="lg-view">HUBUNGI KAMI</h2>
                    <form action="koneksi.php" method="POST">
                        <input type="text" name="nama" placeholder="Nama" required>
                        <input type="text" name="kelas" placeholder="Kelas" required>
                        <input type="text" name="nim" placeholder="NIM" required>
                        <input type="text" name="gender" placeholder="Gender" required>
                        <textarea name="saran" rows="5" placeholder="Saran" required></textarea>
                        <button type="submit" name="kirim">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
