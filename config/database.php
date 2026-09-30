<?php
mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

try {
    $conn = new mysqli('localhost', 'root', '', 'db_telkom_profile');
    $conn->set_charset('utf8mb4');
} catch (mysqli_sql_exception $e) {
    exit('Koneksi database gagal. Periksa Apache/MySQL dan konfigurasi database.');
}
?>