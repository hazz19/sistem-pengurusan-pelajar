<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM PENGURUSAN PERLATAN SUKAN KVDSAZI, JASIN MELAKA</title>
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
            background-color: #ffc107; 
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

        .daftar{
            background-color: #ffd54f; 
        }

        .navbar a:hover {
            background-color: #ffd54f; 
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

        h3 {
            color: #333;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            max-width: 600px;
            margin: 20px auto;
            border-collapse: collapse;
        }

        td {
            padding: 10px;
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
            background-color: #ff9800;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 15px;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }

        input[type="submit"]:hover {
            background-color: #e68900;
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
        <h2>SELAMAT DATANG KE HALAMAN UTAMA HSK</h2>
    </div>
    <div class="navbar">
        <a class="daftar" href="daftar_namabaru_hsk.php">Daftar Nama Baharu</a>
        <a href="senaraihsk.php">Senarai Nama</a>
        <a href="senaraikos.php">Keluar</a>
    </div>
    <div class="main-container">
        <form method="post">
            <table>
                <tr>
                    <td>No Angka Giliran</td>
                    <td>:</td>
                    <td><input type="text" name="no_angka_giliran" required></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td>:</td>
                    <td><input type="text" name="nama" required></td>
                </tr>
                <tr>
                    <td>No IC</td>
                    <td>:</td>
                    <td><input type="text" name="no_ic" required></td>
                </tr>
                <tr>
                    <td>Tarikh Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tarikh_lahir" required></td>
                </tr>
                <tr>
                    <td>Warganegara</td>
                    <td>:</td>
                    <td><input type="text" name="warganegara" required></td>
                </tr>
                <tr>
                    <td>Negeri Kelahiran</td>
                    <td>:</td>
                    <td><input type="text" name="negeri_kelahiran" required></td>
                </tr>
                <tr>
                    <td>Batch</td>
                    <td>:</td>
                    <td>
                        <select name="batch" required>
                            <option value="">Pilih Batch</option>
                            <option value="2021">2021</option>
                            <option value="2022">2022</option>
                            <option value="2023">2023</option>
                            <option value="2024">2024</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Semester</td>
                    <td>:</td>
                    <td>
                        <select name="sem" required>
                            <option value="">Pilih Sem</option>
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" style="text-align: right;">
                        <input type="submit" name="hantar" value="Hantar">
                    </td>
                </tr>
            </table>
        </form>
    </div>
</body>
<?php
    include('connection.php');
    if(isset($_POST['hantar'])){
        $no_angka_giliran = $_POST['no_angka_giliran'];
        $nama = $_POST['nama'];
        $no_ic = $_POST['no_ic'];
        $tarikh_lahir = $_POST['tarikh_lahir'];
        $warganegara = $_POST['warganegara'];
        $negeri_kelahiran = $_POST['negeri_kelahiran'];
        $batch = $_POST['batch'];
        $sem = $_POST['sem'];

        $add = mysqli_query($connect, "INSERT INTO maklumathsk SET no_angka_giliran='$no_angka_giliran', nama='$nama', no_ic='$no_ic', tarikh_lahir='$tarikh_lahir', warganegara='$warganegara', negeri_kelahiran='$negeri_kelahiran', batch='$batch', sem='$sem'");
    }
?>
</html>
