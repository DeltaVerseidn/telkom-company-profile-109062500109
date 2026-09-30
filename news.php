<?php
require_once 'config/database.php';
$result = $conn->query("SELECT id, judul, ringkasan, tanggal_publish FROM berita ORDER BY tanggal_publish DESC");

$pageTitle = "Berita - Telkom University";
require_once 'includes/header.php';
?>

<h1>Berita dan Kegiatan</h1>
<div class="grid">
    <?php while($row = $result->fetch_assoc()): ?>
        <div class="card">
            <small><?= htmlspecialchars($row['tanggal_publish']); ?></small>
            <h3><?= htmlspecialchars($row['judul']); ?></h3>
            <p><?= htmlspecialchars($row['ringkasan']); ?></p>
            <br>
            <a href="news_detail.php?id=<?= $row['id']; ?>" style="color: var(--primary-color); font-weight:bold;">Baca selengkapnya →</a>
        </div>
    <?php endwhile; ?>
</div>

<?php require_once 'includes/footer.php'; ?>