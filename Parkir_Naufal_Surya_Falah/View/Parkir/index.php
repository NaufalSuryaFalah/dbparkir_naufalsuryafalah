<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Parkir</h1>
    <a href="tambah.php">Tambah</a>
    <table border="2">
        <tr>
            <th>Id_parkir</th>
            <th>Nama</th>
            <th>Alamat</th>
            <th>Varian</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>

        <?php 
            include '../../config/Koneksi.php';
            $query=mysqli_query($conn,"SELECT * FROM parkir");
            $no = 1;

            if(mysqli_num_rows($query) > 0){
                while($result=mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td><?php echo $result['id_parkir']?></td>
                        <td><?php echo $result['Nama']?></td>
                        <td><?php echo $result['Alamat']?></td>
                        <td><?php echo $result['Varian']?></td>
                        <td><?php echo $result['Harga']?></td>
                        <td>
                        <a href="">Edit |</a>
                        <a href="">Hapus</a>
                        </td>
                    </tr> 
            <?php 
            $no++;
            }
        }else{
                echo "data kosong";
            }
        ?>   
    </table>
</body>
</html>