<?php 
include '../../config/Koneksi.php';

$id_parkir =$_POST['id_parkir'];
$Nama =$_POST['Nama'];
$Alamat =$_POST['Alamat'];
$Varian =$_POST['Varian'];
$Harga =$_POST['Harga'];

$query = mysqli_query($conn,"INSERT INTO parkir VALUES('$id_parkir','$Nama','$Alamat','$Varian','$Harga')
");

echo "<script>
alert('Data Berhasil Disimpan');
window.location.href='index.php';
</script>";
