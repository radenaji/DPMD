<?php
session_start();
include "conec.php";
$email =$_POST['email'];
$password =$_POST['password'];

$cek_email = mysqli_query($conec, "select * from users where email='$email'"); //mysqli_num_rows digunakan untukmenghitung jumlah data dari query
$jml_data = mysqli_num_rows($cek_email);

if($jml_data > 0){
    $hasil = mysqli_fetch_array($cek_email); // mysqli_fetch_array digunakan untuk menampilkan hasil query dalam bentuk array
    $new_password = md5($password);
     if($new_password == $hasil['katasandi']){
       
        $_SESSION['iduser'] = $hasil['id']; // menyimpan id dari database ke dalam sesi iduser
        
        echo "<script>window.location.href='index.php?h=profil'</script>";
        exit(); // digunakan untuk memberhentikan proses
     }else{
         $status ="2";
     } 
}else{
    $status ="1";
}

echo "<script>window.location.href='index.php?h=login&s=$status'</script>";