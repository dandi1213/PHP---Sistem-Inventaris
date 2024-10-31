<!-- mahasiswa/dashboard.php -->
<!DOCTYPE html>
<html>
<head>
    <title>Welcome Mahasiswa</title>
</head>
<body>
    <?php if(isset($mahasiswa_data)) { ?>
        <p>Nim: <?php echo $mahasiswa_data['nim']; ?></p>
        <p>Nama: <?php echo $mahasiswa_data['nama_mhs']; ?></p>
        <p>Kelas: <?php echo $mahasiswa_data['kelas']; ?></p>
        <!-- <p>Kode Lab: <?php echo $mahasiswa_data['kode_lab']; ?></p> -->

        <?php if(isset($nama_lab)) { ?>
            <p>Nama Lab: <?php echo $nama_lab['nama_lab']; ?></p>
        <?php } else { ?>
            <p>Data Lab Tidak Ditemukan</p>
        <?php } ?>

        <?php if(isset($nama_pj)) { ?>
            <p>Nama PJ: <?php echo $nama_pj['nama_pj']; ?></p>
        <?php } else { ?>
            <p>Data PJ Tidak Ditemukan</p>
        <?php } ?>

    <?php } else { ?>
        <p>Data Mahasiswa Tidak Ditemukan</p>
    <?php } ?>
    <a href="<?php echo base_url('Mahasiswa/logout'); ?>">Logout</a>
    <a href="<?php echo base_url('Mahasiswa/cek_barang'); ?>">Next</a> 
</body>
</html>
