<?php
$pageTitle = "Tambah Berita Admin";
require_once '../includes/header.php';
?>

<div class="card" style="max-width: 600px; margin: 0 auto;">
    <h1>Admin: Tambah Berita</h1>
    <form action="save_news.php" method="POST">
        <div class="form-group">
            <label>Judul Berita</label>
            <input type="text" name="judul" required>
        </div>
        <div class="form-group">
            <label>Ringkasan</label>
            <input type="text" name="ringkasan" required>
        </div>
        <div class="form-group">
            <label>Isi Berita</label>
            <textarea name="isi" rows="6" required></textarea>
        </div>
        <button type="submit" class="btn btn-submit">Simpan Berita</button>
    </form>
</div>

<?php require_once '../includes/footer.php'; ?>