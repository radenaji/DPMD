<?php
include "conec.php";
$nama = $_POST['nama'];
$nis = $_POST['nis'];
$jk = $_POST['jk'];
$tgl = $_POST['tgl'];
$asal = $_POST['asal'];
$alamat = $_POST['alamat'];
$email = $_POST ['email'];
$password= $_POST ['password'];
$new_password = md5($password);

$cover_tmp = $_FILES['cover']['tmp_name'];
$cover_name = $_FILES['cover']['name'];

$cover_ext = pathinfo($cover_name, PATHINFO_EXTENSION);
$new_name = uniqid().".".$cover_ext;
move_uploaded_file($cover_tmp, "./img/$new_name");


$simpan = mysqli_query($conec, "insert into users set namapeserta='$nama',nis_npm='$nis', jenis_kelamin='$jk', ttl='$tgl', asal_pendidikan='$asal',alamat='$alamat',email='$email', password='$new_password', 
                          cover='$new_name'");
if($simpan){
    $status = "1";
}else{
    $status ="2";
}

echo "<script>window.location.href='index.php?h=register&s=$status'</script>";