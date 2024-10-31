<!-- edit_barang.php -->
<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>Edit Barang</title>
</head>
<body>

    <h1>Edit Barang</h1>

    <form action="<?php echo base_url('sekjur/update_barang'); ?>" method="post">
        <input type="hidden" name="id_barang" value="<?php echo $barang['id_barang']; ?>">
        <label for="nama_barang">Nama Barang:</label><br>
        <input type="text" id="nama_barang" name="nama_barang" value="<?php echo $barang['nama_barang']; ?>"><br>
        <label for="jumlah">Jumlah:</label><br>
        <input type="text" id="jumlah" name="jumlah" value="<?php echo $barang['jumlah']; ?>"><br><br>

        <input type="submit" value="Simpan Perubahan"> 
    </form>

    <a href="<?php echo base_url('sekjur/index'); ?>">Kembali</a> 
</body>
</html>
