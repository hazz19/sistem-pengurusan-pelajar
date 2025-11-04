<?php
    if(!isset($_SESSION['email'])){
        die("Anda belum login"); // message if not logged in
    }

    if($_SESSION['level'] != "Admin"){
        die("Anda bukan Pentadbir"); // message if not an admin
    }
?>
