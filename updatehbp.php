<?php
    include 'connection.php';
    $no_angka_giliran = $_GET['no_angka_giliran'];

    $papar = mysqli_query($connect, "SELECT * FROM maklumathbp WHERE no_angka_giliran='$no_angka_giliran'");

    while($res = mysqli_fetch_array($papar))
    {
        $no_angka_giliran = $res['no_angka_giliran'];
        $nama = $res['nama'];
        $no_ic = $res['no_ic'];
        $tarikh_lahir = $res['tarikh_lahir'];
        $warganegara = $res['warganegara'];
        $negeri_kelahiran = $res['negeri_kelahiran'];
        $batch = $res['batch'];
        $sem = $res['sem'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kemaskini Maklumat Pelajar</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #a1887f;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        h2 {
            text-align: center;
            padding-bottom: 20px;
            color: #333;
        }

        .form-container {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            max-width: 400px;
            width: 100%;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        table td {
            padding: 8px 0;
        }

        table td:first-child {
            text-align: right;
            padding-right: 15px;
        }

        input[type="text"],
        input[type="date"],
        select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
            font-size: 14px;
        }

        input[type="submit"] {
            background-color: #a1887f;
            color: white;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            cursor: pointer;
            font-size: 16px;
            margin-top: 20px;
            width: 100%;
        }

        input[type="submit"]:hover {
            background-color: #795548; 
        }

        @media (max-width: 600px) {
            .form-container {
                padding: 20px;
            }

            table td:first-child {
                text-align: left;
                padding-right: 0;
            }

            table {
                width: 100%;
            }
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Kemaskini Maklumat Pelajar</h2>
        <form action="pros_kemaskinihbp.php" method="post">
            <table>
                <tr>
                    <td>No Angka Giliran</td>
                    <td><input style="border: none;" type="text" name="no_angka_giliran" value="<?php echo $no_angka_giliran; ?>" readonly></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama" value="<?php echo $nama; ?>"></td>
                </tr>
                <tr>
                    <td>No IC</td>
                    <td><input type="text" name="no_ic" value="<?php echo $no_ic; ?>"></td>
                </tr>
                <tr>
                    <td>Tarikh Lahir</td>
                    <td><input type="date" name="tarikh_lahir" value="<?php echo $tarikh_lahir; ?>"></td>
                </tr>
                <tr>
                    <td>Warganegara</td>
                    <td><input type="text" name="warganegara" value="<?php echo $warganegara; ?>"></td>
                </tr>
                <tr>
                    <td>Negeri Kelahiran</td>
                    <td><input type="text" name="negeri_kelahiran" value="<?php echo $negeri_kelahiran; ?>"></td>
                </tr>
                <tr>
                    <td>Batch</td>
                    <td>
                        <select name="batch">
                            <option value="">Pilih Batch</option>
                            <option value="2021" <?php if($batch == '2021') echo 'selected'; ?>>2021</option>
                            <option value="2022" <?php if($batch == '2022') echo 'selected'; ?>>2022</option>
                            <option value="2023" <?php if($batch == '2023') echo 'selected'; ?>>2023</option>
                            <option value="2024" <?php if($batch == '2024') echo 'selected'; ?>>2024</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td>Sem</td>
                    <td>
                        <select name="sem">
                            <option value="">Pilih Sem</option>
                            <option value="1" <?php if($sem == '1') echo 'selected'; ?>>1</option>
                            <option value="2" <?php if($sem == '2') echo 'selected'; ?>>2</option>
                            <option value="3" <?php if($sem == '3') echo 'selected'; ?>>3</option>
                            <option value="4" <?php if($sem == '4') echo 'selected'; ?>>4</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name="update" value="Kemaskini"></td>
                </tr>
            </table>
        </form>
    </div>
</body>
</html>
