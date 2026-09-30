<?php
$pageTitle = "Kontak - Telkom University";
require_once 'includes/header.php';
?>

<div class="card" style="max-width: 600px; margin: 0 auto;">
    <h1>Hubungi Kami</h1>
    <p>Formulir ini menggunakan <code>Prepared Statement</code> untuk keamanan data.</p>
    <br>

    <?php if(isset($_GET['success'])): ?>
        <div style="background: #dcfce7; color: #15803d; padding: 10px; border-radius: 6px; margin-bottom: 15px;">
            Pesan Anda berhasil disimpan ke database.
        </div>
    <?php endif; ?>

    <form action="contact_process.php" method="POST">
        <div class="form-group">
            <label>Nama Lengkap</label>
            <input type="text" name="nama" required>
        </div>
        <div class="form-group">
            <label>Alamat Email</label>
            <input type="email" name="email" required>
        </div>
        <div class="form-group">
            <label>Pesan</label>
            <textarea name="pesan" rows="4" required></textarea>
        </div>
        <button type="submit" class="btn btn-submit">Kirim Pesan</button>
    </form>
</div>

<?php require_once 'includes/footer.php'; ?>