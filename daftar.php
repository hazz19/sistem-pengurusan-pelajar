<?php
include 'connection.php';

if (isset($_POST["submit"])) {
    $email = $_POST["email"];
    $password = $_POST["password"];
    $level = $_POST["level"];

    $email = mysqli_real_escape_string($connect, $email);
    $password = mysqli_real_escape_string($connect, $password);
    $level = mysqli_real_escape_string($connect, $level);

    $sql = "SELECT email FROM users WHERE email='$email'";
    $result = mysqli_query($connect, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "<script>alert('Maaf... Pengguna ini sudah didaftarkan dalam sistem');
        window.location='daftar.php'</script>";
    } else {
        $query = mysqli_query($connect, "INSERT INTO users (email, password, level) VALUES ('$email', '$password', '$level')");
        if ($query) {
            echo "<script>alert('Terima Kasih, anda sudah berdaftar');
            window.location='homepage.php'</script>";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Pengurusan Maklumat Pelajar</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(to right, rgb(52, 232, 158), rgb(15, 52, 67));
            font-family: 'Montserrat', sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            padding: 40px;
            width: 350px;
        }
        h3 {
            text-align: center;
            margin-bottom: 30px;
            font-weight: 700;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            font-weight: 500;
            color: #333;
        }
        input[type="text"],
        input[type="password"] {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 14px;
            box-sizing: border-box;
            transition: border-color 0.3s;
        }
        input[type="text"]:focus,
        input[type="password"]:focus {
            border-color: #66bb6a;
            outline: none;
        }
        input[type="submit"] {
            width: 100%;
            padding: 12px;
            background-color: #66bb6a;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        input[type="submit"]:hover {
            background-color: #57a353;
        }
        .footer {
            text-align: center;
            margin-top: 15px;
            font-size: 14px;
        }
        .footer a {
            color: #66bb6a;
            text-decoration: none;
            font-weight: 500;
        }
        .footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h3>Daftar Pengguna Baru</h3>
        <form name="daftar.php" method="POST">
            <label>Email:</label>
            <input type="text" name="email" placeholder="Email" required>

            <label>Password:</label>
            <input type="password" name="password" placeholder="Password" required>

            <label>Level:</label>
            <input type="text" name="level" placeholder="Tulis Admin/Pengguna" required>

            <input type="submit" value="Daftar" name="submit">
        </form>
        <div class="footer">
            <a href="homepage.php">Kembali ke Halaman Utama</a>
        </div>
    </div>
</body>
</html>
