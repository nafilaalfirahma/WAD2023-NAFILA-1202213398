<!-- Pada file ini kalian membuat coding untuk logika create / menambahkan mobil pada showroom -->

<?php
// (1) Jangan lupa sertakan koneksi database dari yang sudah kalian buat yaa
require "connect.php";

// 

// (2) Buatlah perkondisian untuk memeriksa apakah permintaan saat ini menggunakan metode POST
if (isset($_POST['create'])){
    $nama = $_POST['nama_mobil'];
    $brand = $_POST['brand_mobil'];
    $warna = $_POST['warna_mobil'];
    $tipe = $_POST['tipe_mobil'];
    $harga = $_POST['harga_mobil'];

    $query = mysqli_query($conn, "INSERT INTO showroom_mobil(nama_mobil, brand_mobil, warna_mobil, tipe_mobil, harga_mobil)
                                VALUES('$nama','$brand', '$warna', '$tipe', '$harga')");
    if ($query){
        echo "<script>alert('Nilai Data Berhasil ditambahkan')</script>";
    }else{
        echo "<script>alert('Nilai Data Gagal ditambahkan')</script>";
    }

    exit;
} 
// 

?>