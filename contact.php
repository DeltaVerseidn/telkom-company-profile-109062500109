<?php include 'config/database.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Kontak - Telkom Profile</title>
</head>
<body>
    <nav>
        <a href="index.php">Beranda</a> | 
        <a href="news.php">Berita</a> | 
        <a href="contact.php">Kontak</a>
    </nav>
    
    <h1>Hubungi Kami</h1>
    <p>Silakan tinggalkan pesan Anda melalui formulir di bawah ini:</p>
    
    <form action="" method="POST">
        <label for="nama">Nama Lengkap:</label><br>
        <input type="text" id="nama" name="nama" required><br><br>
        
        <label for="email">Alamat Email:</label><br>
        <input type="email" id="email" name="email" required><br><br>
        
        <label for="pesan">Pesan:</label><br>
        <textarea id="pesan" name="pesan" rows="4" cols="30" required></textarea><br><br>
        
        <button type="submit">Kirim Pesan</button>
    </form>
</body>
</html>