<?PHP 
include ('connection.php');
$no_angka_giliran = $_GET['no_angka_giliran'];
$row = mysqli_query($connect, "DELETE FROM maklumatisk WHERE no_angka_giliran='$no_angka_giliran'");
echo"
    <script>alert('Rekod Berjaya Dihapus');"
    ."window.location='senaraiisk.php'</script>";
?>
