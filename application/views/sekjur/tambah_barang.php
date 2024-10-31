<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="public/css/style.css">
    <title>Add Barang</title>
</head>
<body>
    <h1>Add Barang</h1>
    <form action="<?php echo base_url('sekjur/simpan_barang'); ?>" method="post">
        <label for="id_barang">ID Barang:</label><br>
        <input type="text" id="id_barang" name="id_barang"><br>

        <label for="nama_barang">Nama Barang:</label><br>
        <input type="text" id="nama_barang" name="nama_barang"><br>

        <label for="jumlah">Jumlah:</label><br>
        <input type="text" id="jumlah" name="jumlah"><br><br>

        <input type="submit" value="Simpan"> 
    </form>
    <a href="<?php echo base_url('sekjur/index'); ?>">Kembali</a> 
</body>
</html>
