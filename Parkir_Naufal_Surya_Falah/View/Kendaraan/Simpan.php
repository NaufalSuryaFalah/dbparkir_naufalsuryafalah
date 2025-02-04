<?php 
include '../../config/Koneksi.php';

$id_kendaraan =$_POST['id_kendaraan'];
$id_parkir =$_POST['id_parkir'];
$jenis_kendaraan =$_POST['jenis_kendaraan'];

$query = mysqli_query($conn,"INSERT INTO parkir VALUES('$id_kendaraan','$id_parkir','$jenis_kendaraan')
");

echo "<script>
alert('Data Berhasil Disimpan');
window.location.href='index.php';
</script>";
