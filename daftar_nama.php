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

        $add = mysqli_query($connect, "INSERT INTO maklumat SET no_angka_giliran='$no_angka_giliran', nama='$nama', no_ic='$no_ic', tarikh_lahir='$tarikh_lahir', warganegara='$warganegara', negeri_kelahiran='$negeri_kelahiran', batch='$batch', sem='$sem'");

        header('Location:senarai.php');
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM PENGURUSAN MAKLUMAT PELAJAR KVDSAZI, JASIN MELAKA</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        /* Add your CSS here */
        :root {
            --bg-color: #f9f9f9;
            --text-color: #333;
            --header-bg-color: #ffffff;
            --sidebar-bg-color: #ffffff;
            --sidebar-hover-color: #f0f0f0;
            --card-bg-color: #ffffff;
            --box-shadow-color: rgba(0, 0, 0, 0.1);
            --card-hover-shadow: rgba(0, 0, 0, 0.2);
            --primary-color: #4caf50;
        }

        body.dark-mode {
            --bg-color: #121212;
            --text-color: #e0e0e0;
            --header-bg-color: #1F1F1F;
            --sidebar-bg-color: #2C2C2C;
            --sidebar-hover-color: #555555;
            --card-bg-color: #1e1e1e;
            --box-shadow-color: rgba(255, 255, 255, 0.1);
            --card-hover-shadow: rgba(255, 255, 255, 0.2);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', sans-serif;
        }

        .grid-container {
            display: grid;
            grid-template-columns: 250px auto;
            grid-template-rows: 60px auto;
            grid-template-areas:
                "sidebar header"
                "sidebar main";
            height: 100vh;
            background-color: var(--bg-color);
            color: var(--text-color);
        }

        .header {
            grid-area: header;
            background-color: var(--header-bg-color);
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 0 20px;
            box-shadow: 0 2px 4px var(--box-shadow-color);
            position: relative;
            z-index: 1000;
        }

        .sidebar {
            grid-area: sidebar;
            position: fixed;
            left: 0;
            top: 0;
            height: 100%;
            width: 250px;
            background-color: var(--sidebar-bg-color);
            color: var(--text-color);
            z-index: 999;
            box-shadow: 2px 0 10px var(--box-shadow-color);
        }

        .main-container {
            grid-area: main;
            padding: 40px;
            background-color: var(--bg-color);
            display: flex;
            align-items: center;
            justify-content: center;
            flex-direction: column;
            text-align: center;
            box-shadow: 0 2px 10px var(--box-shadow-color);
            border-radius: 10px;
        }

        .main-container h1 {
            font-size: 24px;
            font-weight: 700;
            color: var(--text-color);
            margin-bottom: 20px;
        }

        .form-container {
            width: 100%;
            max-width: 600px;
            background-color: var(--card-bg-color);
            padding: 20px;
            box-shadow: 0 2px 10px var(--box-shadow-color);
            border-radius: 10px;
        }

        .form-container form {
            display: flex;
            flex-wrap: wrap;
            gap: 15px;
        }

        .form-group {
            flex: 1 1 48%; /* Two columns */
            display: flex;
            flex-direction: column;
        }

        .form-group.full-width {
            flex: 1 1 100%; /* Full width for submit button */
        }

        .form-group label {
            margin-bottom: 5px;
        }

        .form-group input, .form-group select {
            padding: 10px;
            font-size: 16px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .form-group input[type="submit"] {
            background-color: var(--primary-color);
            color: white;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .form-group input[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="grid-container">
    <div class="sidebar">
        <!-- Sidebar Content -->
    </div>

    <div class="main-container">
        <h1>Daftar Pelajar Baharu</h1>
        <div class="form-container">
            <form action="" method="POST">
                <div class="form-group">
                    <label for="no_angka_giliran">No Angka Giliran:</label>
                    <input type="text" id="no_angka_giliran" name="no_angka_giliran" required>
                </div>

                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="text" id="nama" name="nama" required>
                </div>

                <div class="form-group">
                    <label for="no_ic">No IC</label>
                    <input type="text" id="no_ic" name="no_ic" required>
                </div>

                <div class="form-group">
                    <label for="tarikh_lahir">Tarikh Lahir</label>
                    <input type="date" id="tarikh_lahir" name="tarikh_lahir" required>
                </div>

                <div class="form-group">
                    <label for="warganegara">Warganegara</label>
                    <input type="text" id="warganegara" name="warganegara" required>
                </div>

                <div class="form-group">
                    <label for="negeri_kelahiran">Negeri Kelahiran</label>
                    <input type="text" id="negeri_kelahiran" name="negeri_kelahiran" required>
                </div>

                <div class="form-group">
                    <label for="batch">Batch</label>
                    <input type="text" id="batch" name="batch" required>
                </div>

                <div class="form-group">
                    <label for="sem">Semester</label>
                    <input type="text" id="sem" name="sem" required>
                </div>

                <div class="form-group full-width">
                    <input type="submit" name="hantar" value="Hantar">
                </div>
            </form>
        </div>
    </div>
</div>

<script>
    function toggleTheme() {
        document.body.classList.toggle('dark-mode');
    }
</script>

</body>
</html>
