<?php
require_once 'config/database.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $nama  = trim($_POST['nama']);
    $email = trim($_POST['email']);
    $pesan = trim($_POST['pesan']);

    if (!empty($nama) && !empty($email) && !empty($pesan)) {
        $stmt = $conn->prepare("INSERT INTO pesan (nama, email, pesan) VALUES (?, ?, ?)");
        $stmt->bind_param('sss', $nama, $email, $pesan);
        $stmt->execute();
    }
}

header('Location: contact.php?success=1');
exit;
?>