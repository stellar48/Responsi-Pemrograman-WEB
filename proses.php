<?php
// filepath: c:\xampp\htdocs\Responsi-Pemrograman-WEB\proses.php
header('Content-Type: application/json');
$nama = $_POST['nama'] ?? '';
$email = $_POST['email'] ?? '';
$bio = $_POST['bio'] ?? '';

// Simpan ke file (opsional, contoh saja)
file_put_contents('data.txt', "$nama|$email|$bio");

// Kirim balik ke JS
echo json_encode([
    'nama' => $nama,
    'email' => $email,
    'bio' => $bio
]);
?>