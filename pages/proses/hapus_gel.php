<?php

include ('../../koneksi.php');
$id = $_GET['id'];

$id = mysqli_real_escape_string($koneksi,$id);

$result = mysqli_query($koneksi, "DELETE FROM tbl_gel WHERE id = '$id'");
$cek = mysqli_affected_rows($koneksi);

if ($cek > 0) {
    echo "<script>
    alert('Berhasil Menghapus');
    </script>";
    header("Location: ../../pages/input_gelombang.php");
}
?>