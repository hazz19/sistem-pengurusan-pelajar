<?php
include('connection.php');
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

        .navbar a:hover {
            background-color: #ffc107;
            transform: scale(1.05);
        }

        .main-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            padding: 40px 20px; 
            text-align: center;
        }

        h2 {
            color: white; 
            margin: 0;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        table {
            width: 100%;
            max-width: 800px; 
            margin: 20px auto; 
            border-collapse: collapse; 
        }

        td, th {
            padding: 10px; 
            border: 1px solid #ccc; 
            text-align: center;
        }

        th{
            background-color: #ffd54f; 
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%; 
            padding: 10px; 
            border: 1px solid #ccc; 
            border-radius: 5px; 
            box-sizing: border-box; 
        }

        input[type="submit"] {
            background-color: #4caf50; 
            color: white; 
            border: none; 
            border-radius: 5px; 
            padding: 10px 15px; 
            cursor: pointer; 
            transition: background-color 0.3s, transform 0.2s; 
        }

        input[type="submit"]:hover {
            background-color: #45a049; 
            transform: scale(1.05); 
        }

        .btn-danger {
            background-color: red; 
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-danger:hover {
            background-color: darkred; 
            transform: scale(1.05); 
        }

        .btn-update {
            background-color: blue; 
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            text-decoration: none;
            transition: background-color 0.3s, transform 0.2s;
        }

        .btn-update:hover {
            background-color: darkblue; 
            transform: scale(1.05); 
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
        <a href="page_pengguna.php">Halaman Utama</a>
        <a class="kos" href="senaraikos_pengguna.php">Senarai Kos</a>
        <a href="logout.php">Log Keluar</a>
    </div>
    <div class="main-container">
        <h1>SENARAI MAKLUMAT PELAJAR</h1>
        <table>
            <thead>
                <tr>
                    <th>No Angka Giliran</th>
                    <th>Nama</th>
                    <th>No IC</th>
                    <th>Tarikh Lahir</th>
                    <th>Warganegara</th>
                    <th>Negeri Kelahiran</th>
                    <th>Batch</th>
                    <th>Sem</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $papar = mysqli_query($connect, "SELECT * FROM maklumathsk");
                    while($row = mysqli_fetch_array($papar)){
                        echo "
                        <tr>
                            <td>".$row['no_angka_giliran']."</td>
                            <td>".$row['nama']."</td>
                            <td>".$row['no_ic']."</td>
                            <td>".$row['tarikh_lahir']."</td>
                            <td>".$row['warganegara']."</td>
                            <td>".$row['negeri_kelahiran']."</td>
                            <td>".$row['batch']."</td>
                            <td>".$row['sem']."</td>
                        </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>

    <footer>
        <p>&copy; 2024 SISTEM PENGURUSAN MAKLUMAT PELAJAR KVDSAZI. All rights reserved.</p>
    </footer>
</body>
</html>
