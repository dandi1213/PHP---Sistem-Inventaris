<!-- sekjur/dashboard.php -->
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>Welcome Sekretaris Jurusan</title>
</head>
<body>

    
   
    <a href="<?php echo base_url('sekjur/tambah_barang'); ?>">Add Barang</a> 
    <a href="<?php echo base_url('sekjur/logout'); ?>">Logout</a> 
    
    <h2>Daftar Barang</h2>
    <table border="1">
        <thead>
            <tr>
                <th>ID Barang</th>
                <th>Nama Barang</th>
                <th>Jumlah</th>
                <th>Tindakan</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data_barang as $barang) { ?>
                <tr>
                    <td><?php echo $barang['id_barang']; ?></td>
                    <td><?php echo $barang['nama_barang']; ?></td>
                    <td><?php echo $barang['jumlah']; ?></td>
                    <td>
                        <a href="<?php echo base_url('sekjur/edit_barang/'.$barang['id_barang']); ?>">Edit</a>
                        <a href="<?php echo base_url('sekjur/hapus_barang/'.$barang['id_barang']); ?>">Hapus</a>
                    </td>
                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>
