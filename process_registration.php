<?php
session_start();
// Koneksi ke database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pendaftaran_online";

// Buat koneksi
$conn = new mysqli($servername, $username, $password, $dbname);

// Cek koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}

// Ambil data dari formulir
if ($_SERVER["REQUEST_METHOD"] == "POST") {
$full_name = $_POST['full_name'];
$email = $_POST['email'];
$phone_number = $_POST['phone_number'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$date_of_birth = $_POST['date_of_birth'];
$age = $_POST['age'];

// Validasi input
if (empty($full_name) || empty($email) || empty($phone_number) || empty($address) || empty($gender) || empty($date_of_birth) || empty($age)) {
    die("Semua field harus diisi!");
}

// Siapkan query SQL untuk memasukkan data pendaftar
$sql = "INSERT INTO registrants (full_name, email, phone_number, address, gender, date_of_birth, age) VALUES (?, ?, ?, ?, ?, ?, ?)";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssssss", $full_name, $email, $phone_number, $address, $gender, $date_of_birth, $age);


// Eksekusi query
if ($stmt->execute()) {
    header('location: welcome.php');
    $_SESSION['full_name'] = $_POST['full_name'];
     echo "<h3>Selamat datang, $full_name!</h3>";
} else {
    echo "Terjadi kesalahan: " . $stmt->error;
}
 } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

// Tutup koneksi
$stmt->close();
$conn->close();
?>
