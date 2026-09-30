<?php
require_once 'config/database.php';

$prodiResult = $conn->query("SELECT id, nama, jenjang, deskripsi FROM program_studi ORDER BY id ASC LIMIT 3");
$newsResult  = $conn->query("SELECT id, judul, ringkasan, tanggal_publish FROM berita ORDER BY tanggal_publish DESC LIMIT 3");

$pageTitle = "Beranda - Telkom University Profile";
require_once 'includes/header.php';
?>

<section class="hero">
    <h1>Praktikum Web Development</h1>
    <p>Belajar membangun website dinamis sambil mempraktikkan Git secara nyata.</p>
    <div class="hero-buttons">
        <a href="programs.php" class="btn btn-primary">Lihat Program Studi</a>
        <a href="news.php" class="btn btn-secondary">Baca Berita</a>
    </div>
</section>

<h2>Program Studi Unggulan</h2>
<div class="grid">
    <?php while($row = $prodiResult->fetch_assoc()): ?>
        <div class="card">
            <span class="tag"><?= htmlspecialchars($row['jenjang']); ?></span>
            <h3><?= htmlspecialchars($row['nama']); ?></h3>
            <p><?= htmlspecialchars($row['deskripsi']); ?></p>
        </div>
    <?php endwhile; ?>
</div>

<h2 style="margin-top: 40px;">Berita Terbaru</h2>
<div class="grid">
    <?php while($news = $newsResult->fetch_assoc()): ?>
        <div class="card">
            <small><?= htmlspecialchars($news['tanggal_publish']); ?></small>
            <h3><?= htmlspecialchars($news['judul']); ?></h3>
            <p><?= htmlspecialchars($news['ringkasan']); ?></p>
            <br>
            <a href="news_detail.php?id=<?= $news['id']; ?>" style="color: var(--primary-color); font-weight:bold;">Baca selengkapnya →</a>
        </div>
    <?php endwhile; ?>
</div>

<?php require_once 'includes/footer.php'; ?>