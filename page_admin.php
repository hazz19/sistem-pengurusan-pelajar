<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SISTEM PENGURUSAN MAKLUMAT PELAJAR KVDSAZI, JASIN MELAKA</title>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Outlined" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --bg-color: #f9f9f9;
            --text-color: #333;
            --header-bg-color: #ffffff;
            --sidebar-bg-color: #ffffff;
            --sidebar-hover-color: #f0f0f0;
            --card-bg-color: #ffffff;
            --box-shadow-color: rgba(0, 0, 0, 0.1);
            --button-bg-color: #4caf50;
            --button-hover-bg-color: #45a049;
            --button-text-color: white;
            --card-hover-shadow: rgba(0, 0, 0, 0.2);
        }

        body.dark-mode {
            --bg-color: #121212;
            --text-color: #e0e0e0;
            --header-bg-color: #1F1F1F;
            --sidebar-bg-color: #2C2C2C;
            --sidebar-hover-color: #555555;
            --card-bg-color: #1e1e1e;
            --box-shadow-color: rgba(255, 255, 255, 0.1);
            --button-bg-color: #66bb6a;
            --button-hover-bg-color: #5aaa5e;
            --button-text-color: white;
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

        .header-left, .header-right {
            display: flex;
            align-items: center;
        }

        .header .menu-icon {
            cursor: pointer;
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

        .sidebar-title {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 15px;
            font-size: 20px;
            background-color: var(--sidebar-bg-color);
        }

        .sidebar-title img {
            width: 90%;
        }

        .sidebar-list {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        .sidebar-list-item {
            padding: 15px 20px;
            display: flex;
            align-items: center;
            transition: background-color 0.3s;
        }

        .sidebar-list-item a {
            text-decoration: none;
            color: var(--text-color);
            display: flex;
            align-items: center;
            width: 100%;
        }

        .sidebar-list-item:hover {
            background-color: var(--sidebar-hover-color);
            border-radius: 5px;
        }

        .main-container {
            grid-area: main;
            padding: 40px;
            background-color: var(--bg-color);
            display: flex;
            flex-direction: column;
            justify-content: flex-start;
            align-items: center;
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

        .button-container {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(200px, 1fr));
            gap: 20px;
            width: 100%;
        }

        .button {
            padding: 20px;
            background-color: var(--card-bg-color);
            color: var(--text-color);
            border: none;
            border-radius: 12px;
            box-shadow: 0 4px 8px var(--box-shadow-color);
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
            box-shadow: 0 8px 16px var(--card-hover-shadow);
            transform: translateY(-5px);
        }

        .button span {
            font-size: 40px;
            color: var(--button-bg-color);
        }

        @media (max-width: 768px) {
            .grid-container {
                grid-template-columns: 1fr;
                grid-template-rows: auto auto 1fr;
                grid-template-areas:
                    "header"
                    "sidebar"
                    "main";
            }

            .sidebar {
                width: 100%;
            }

            .button {
                justify-content: center;
            }
        }
    </style>
</head>
<body>

<div class="grid-container">
    <div class="sidebar" id="sidebar">
        <div class="sidebar-title">
            <img src="img/logo.png" alt="Logo">
        </div>
        <ul class="sidebar-list">
            <li class="sidebar-list-item"><a href="page_admin.php"><span class="material-icons-outlined">home</span> Halaman Utama</a></li>
            <li class="sidebar-list-item"><a href="senaraikos.php"><span class="material-icons-outlined">list_alt</span> Senarai Kos</a></li>
            <li class="sidebar-list-item"><a href="logout.php"><span class="material-icons-outlined">logout</span> Log Keluar</a></li>
        </ul>
    </div>

    <div class="header">
        <div class="header-left">
            <h1>SISTEM MAKLUMAT PELAJAR KVDSAZI</h1>
        </div>
        <div class="header-right">
            <span class="material-icons-outlined" onclick="toggleTheme()" style="cursor: pointer;">
                mode_night
            </span>
        </div>
    </div>

    <div class="main-container">
        <h1>SELAMAT DATANG KE HALAMAN UTAMA PENGURUSAN PELAJAR</h1>
        <p>Sistem ini bertujuan untuk memudahkan pengurusan maklumat pelajar di KVDSAZI, Jasin Melaka.</p>
    </div>
</div>

<script>
    function toggleTheme() {
        document.body.classList.toggle('dark-mode');
    }
</script>

</body>
</html>