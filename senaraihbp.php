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
            background-color: #795548; 
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

        .daftar {
            background-color: #a1887f;
        }

        .navbar a:hover {
            background-color: #a1887f;
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
            background-color: #a1887f;
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

        @media (max-width: 600px) {
            .navbar a {
                width: 100%; 
                text-align: center; 
            }

            table {
                width: 90%; 
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <h2>SELAMAT DATANG KE HALAMAN UTAMA HBP</h2>
    </div>
    <div class="navbar">
        <a href="daftar_namabaru_hbp.php">Daftar Nama Baharu</a>
        <a class="daftar" href="senaraihbp.php">Senarai Nama</a>
        <a href="senaraikos.php">Keluar</a>
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
                    <th>Padam</th>
                    <th>KemasKini</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    $papar = mysqli_query($connect, "SELECT * FROM maklumathbp");
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
                            <td>
                                <a href='padamhbp.php?no_angka_giliran=".$row['no_angka_giliran']."' class='btn-danger'>Padam</a>
                            </td>
                            <td>
                                <a href='updatehbp.php?no_angka_giliran=".$row['no_angka_giliran']."' class='btn-update'>Kemaskini</a>
                            </td>
                        </tr>
                        ";
                    }
                ?>
            </tbody>
        </table>
    </div>
</body>
</html>
