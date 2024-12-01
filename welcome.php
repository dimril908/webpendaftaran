<?php
session_start();
echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Halaman dengan CSS Eksternal</title>';
echo '<link rel="stylesheet" href="log.css">';  // Menghubungkan ke file CSS eksternal
echo '</head>';
echo '<body>';
echo '</body>';
echo '</html>';
echo '<div class="tengah">';
echo '<div class="text">';
echo '<div class="kotak">';
echo "<p>Pendaftaran berhasil, selamat datang ".$_SESSION['full_name']."!";
echo '<p>Anda berhasil mendaftar ke kursus online.</p>';
echo '<a href="index.html" class="input">KEMBALI KE HALAMAN SEBELUMNYA</a>';
echo '</div>';
?>

