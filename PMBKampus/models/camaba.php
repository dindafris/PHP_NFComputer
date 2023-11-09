<section id="camaba.php" class="camaba">
<?php
    include_once 'koneksi.php';
    $sql = "SELECT nama_lengkap, nisn, asal_sekolah, tahun_lulus FROM camaba";
    $data = $dbh->query($sql);
?>
</section>