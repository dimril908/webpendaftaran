<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Online</title>
    <link rel="stylesheet" href="style.css">
 <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
      <style type="text/css">
        .klik{
            width: 95%;
            height: 10px;
            background: darkblue;
            border-radius: 15px;
            padding: 20px;
        }
        a{
            display: flex;
            justify-content: center;
            text-decoration: none;
            color: white;

        }
      </style>  
    
</head>
<body>
<div class="animate__animated animate__lightSpeedInLeft">
    <div class="container">
    <h2>Formulir Pendaftaran Online</h2>
    <form action="process_registration.php" method="POST">
        <div class="form-group">
            <label for="full_name">Nama Lengkap</label>
            <input type="text" id="full_name" name="full_name" required>
        </div>

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>

        <div class="form-group">
            <label for="phone_number">Nomor Telepon</label>
            <input type="text" id="phone_number" name="phone_number" required>
        </div>

        <div class="form-group">
            <label for="address">Alamat</label>
            <textarea id="address" name="address" rows="4" required></textarea>
        </div>

        <div class="form-group">
            <label for="gender">Jenis Kelamin</label>
            <select id="gender" name="gender" required>
                <option value="Male">Laki-Laki</option>
                <option value="Female">Perempuan</option>
            </select>
        </div>

        <div class="form-group">
            <label for="date_of_birth">Tanggal Lahir</label>
            <input type="date" id="date_of_birth" name="date_of_birth" required>
        </div>
         
        <div class="form-group">
        <label for="age">Usia:</label>
        <input type="number" id="age" name="age" required>
        </div>

        <div class="form-group">
            <button type="submit">Daftar</button><br><br>
            </div>
 <div class="klik"><a href="index.php">Kembali</a></div>

           
</div>

    </form>
</div>


</body>
</html>
