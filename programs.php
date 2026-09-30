<?php
require_once 'config/database.php';
$result = $conn->query("SELECT nama, jenjang, deskripsi FROM program_studi ORDER BY jenjang, nama");

$pageTitle = "Program Studi - Telkom University";
require_once 'includes/header.php';
?>

<h1>Daftar Program Studi</h1>
<p>Data diambil secara dinamis dari tabel <code>program_studi</code> MySQL.</p>

<div class="grid">
    <?php while($row = $result->fetch_assoc()): ?>
        <div class="card">
            <span class="tag"><?= htmlspecialchars($row['jenjang']); ?></span>
            <h3><?= htmlspecialchars($row['nama']); ?></h3>
            <p><?= htmlspecialchars($row['deskripsi']); ?></p>
        </div>
    <?php endwhile; ?>
</div>

<?php require_once 'includes/footer.php'; ?>