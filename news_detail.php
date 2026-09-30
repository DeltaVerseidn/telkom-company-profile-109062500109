<?php
require_once 'config/database.php';

$id = isset($_GET['id']) ? (int)$_GET['id'] : 0;
$stmt = $conn->prepare("SELECT judul, isi, tanggal_publish FROM berita WHERE id = ?");
$stmt->bind_param('i', $id);
$stmt->execute();
$result = $stmt->get_result();
$news = $result->fetch_assoc();

if (!$news) {
    http_response_code(404);
    exit('Berita tidak ditemukan.');
}

$pageTitle = htmlspecialchars($news['judul']) . ' - Telkom University';
require_once 'includes/header.php';
?>

<div class="card">
    <small><?= htmlspecialchars($news['tanggal_publish']); ?></small>
    <h1 style="margin: 10px 0; color: var(--primary-dark);"><?= htmlspecialchars($news['judul']); ?></h1>
    <hr style="margin-bottom: 20px; border: 0; border-top: 1px solid var(--border-color);">
    <p><?= nl2br(htmlspecialchars($news['isi'])); ?></p>
    <br><br>
    <a href="news.php" class="btn btn-primary">← Kembali ke Berita</a>
</div>

<?php require_once 'includes/footer.php'; ?>