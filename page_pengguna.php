<?php
session_start();
if(!$_SESSION['email']) {
    header("Location: lgpg.php");
}

include('cek_pengguna.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM PENGURUSAN MAKLUMAT PELAJAR KVDSAZI, JASIN MELAKA</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f9f9f9;
            color: #333;
        }

        .header {
            background-color: #2196F3;
            color: white;
            padding: 20px 0;
            text-align: center;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            display: flex;
            justify-content: center;
        }

        .navbar a {
            display: inline-block;
            padding: 15px 20px;
            text-decoration: none;
            color: white;
            transition: background-color 0.3s, transform 0.2s;
        }

        .utama{
            background-color: #ffc107;
        }

        .navbar a:hover {
            background-color: #ffc107;
            transform: scale(1.05);
        }

        .main-container {
            grid-area: main;
            padding: 40px;
            background-color: white; 
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
            text-align: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.1);
            border-radius: 15px; 
            margin-top: 20px;
            transition: transform 0.3s ease, box-shadow 0.3s ease; 
        }

        h2 {
            color: white;
            margin: 0;
        }

        h1 {
            color: #333;
            margin-bottom: 20px;
        }

        .button-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            width: 50%;
        }

        .button {
            padding: 20px;
            background-color: white;
            color: #333;
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            font-size: 18px;
            cursor: pointer;
            transition: box-shadow 0.3s ease, transform 0.3s ease;
            text-transform: uppercase;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }

        .button:hover {
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.2);
            transform: translateY(-5px);
        }

        footer {
            text-align: center;
            margin-top: 50px;
            font-size: 14px;
            color: #777;
        }

        @media (max-width: 600px) {
            .navbar a {
                width: 100%;
                text-align: center;
            }

            .button-container {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>SISTEM MAKLUMAT PELAJAR KVDSAZI, JASIN, MELAKA</h2>
    </div>
    <div class="navbar">
        <a class="utama" href="page_pengguna.php">Halaman Utama</a>
        <a href="senaraikos_pengguna.php">Senarai Kos</a>
        <a href="logout.php">Log Keluar</a>
    </div>
    <div class="main-container">
        <h1>SELAMAT DATANG KE HALAMAN UTAMA PENGGUNA</h1>
    </div>

    <footer>
        <p>&copy; 2024 SISTEM PENGURUSAN MAKLUMAT PELAJAR KVDSAZI. All rights reserved.</p>
    </footer>
</body>
</html>
