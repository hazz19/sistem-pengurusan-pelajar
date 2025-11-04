<?php
    include('connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Senarai Peralatan</title>
</head>
<style>
    h2{
        text-align: center;
        padding-top: 20px;
    }
    body{
        background-color: #7FFFD4;
    }
</style>
<body>
    <h2>REKOD PERALATAN SUKAN</h2>
    <center>
        <table border=1 cellpadding=5 cellspacing=0 bgcolor=white>
            <tr>
                <th>NO ANGKA GILIRAN</th>
                <th>NAMA</th>
                <th>NO IC</th>
                <th>TARIKH LAHIR</th>
                <th>WARGANEGARA</th>
                <th>NEGERI KELAHIRAN</th>
                <th>BATCH</th>
                <th>SEM</th>
            </tr>

            <?php
            $papar=mysqli_query($connect, "SELECT * FROM maklumat");
            while($row=mysqli_fetch_array($papar)){
                echo"
                <tr>
                    <td align='center'>".$row['angkagiliran']."</td>
                    <td align='center'>".$row['nama']."</td>
                    <td align='center'>".$row['no_ic']."</td>
                    <td align='center'>".$row['tarikh_lahir']."</td>
                    <td align='center'>".$row['warganegara']."</td>
                    <td align='center'>".$row['negeri_kelahiran']."</td>
                    <td align='center'>".$row['batch']."</td>
                    <td align='center'>".$row['sem']."</td>
                
                    </tr>
                    ";
            }
            ?>
        </table>
        <p><a href="daftar_namabaru.php"><button name='tambah' type='submit'>&#43; TAMBAH NAMA</button></a></p>
        <p><a href="page_admin.php"><button name="utama" type="submit">HALAMAN UTAMA</button></a></p>
    </center>
</body>
</html>