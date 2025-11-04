<?php
    include 'connection.php';

    if(isset($_POST['update'])){
        $no_angka_giliran = $_POST['no_angka_giliran'];
        $nama = $_POST['nama'];
        $no_ic = $_POST['no_ic'];
        $tarikh_lahir = $_POST['tarikh_lahir'];
        $warganegara = $_POST['warganegara'];
        $negeri_kelahiran = $_POST['negeri_kelahiran'];
        $batch = $_POST['batch'];
        $sem = $_POST['sem'];

        $edit = mysqli_query($connect, "UPDATE maklumathsk SET nama='$nama', no_ic='$no_ic', tarikh_lahir='$tarikh_lahir', warganegara='$warganegara', negeri_kelahiran='$negeri_kelahiran', batch='$batch', sem='$sem' WHERE no_angka_giliran='$no_angka_giliran'");

        header("location: senaraihsk.php");
    }
?>