<?php

    if($_GET['id_produk']){
    include "koneksi2.php";

    $qry_hapus=mysqli_query($conn,"DELETE FROM `produk` WHERE `id_produk`='".$_GET['id_produk']."'");

    if($qry_hapus){
    echo "<script>alert('Sukses hapus
    produk');location.href='tampil_produk.php';</script>";

    } else {
    echo "<script>alert('Gagal hapus
    produk');location.href='tampil_produk.php';</script>";
    }
    }
    ?>
    <?php

if($_GET['id_petugas']){
include "koneksi2.php";

$qry_hapus=mysqli_query($conn,"delete from petugas where
id_petugas='".$_GET['id_petugas']."'");

if($qry_hapus){
echo "<script>alert('Sukses hapus
petugas');location.href='tampil_petugas.php';</script>";

} else {
echo "<script>alert('Gagal hapus
petugas');location.href='tampil_petugas.php';</script>";
}
}
?>