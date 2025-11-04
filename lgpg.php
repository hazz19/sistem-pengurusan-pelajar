<?php
    session_start();
    if ($_SESSION) {
        if ($_SESSION['level'] == "Admin") {
            header("Location: page_admin.php");
        } elseif ($_SESSION['level'] == "Pengguna") {
            header("Location: page_pengguna.php");
        }
    }
    include('login.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistem Maklumat Pelajar</title>
    <link rel="stylesheet" href="css/lgpg.css">
    <script>
        function showAlert(message) {
            alert(message);
        }
    </script>
</head>
<body>
    <div class="auth">
        <div class="auth-container">
            <div class="auth-logo">
                <img src="img/logo.png" alt="KVDSAZI Logo">
                <h1>Sistem Maklumat Pelajar KVDSAZI</h1>
            </div>
            <form action="" method="post" class="auth-form">
                <div class="auth-input">
                    <label for="email">E-Mail</label>
                    <input type="email" name="email" id="email" required>
                </div>
                <div class="auth-input">
                    <label for="password">Password</label>
                    <input type="password" name="password" id="password" required>
                </div>
                <div class="auth-level">
                    <label for="level">Level</label>
                    <select name="level" id="level" required>
                        <option value="" disabled selected>Pilih Pengguna</option>
                        <option value="1">Admin</option>
                        <option value="2">Pengguna</option>
                    </select>
                </div>
                <button type="submit" name="submit" class="auth-btn">Log Masuk</button>
                
                <?php if ($error) { echo "<script>showAlert('$error');</script>"; } ?>

                <div class="auth-bottom">
                    <a href="homepage.php">Kembali ke Halaman Utama</a>
                </div>
            </form>
        </div>
    </div>
</body>
</html>