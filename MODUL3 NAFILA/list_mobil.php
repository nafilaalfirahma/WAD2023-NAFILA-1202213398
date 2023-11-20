<?php
    include("connect.php");

            // Buatlah query untuk mengambil data dari database (gunakan query SELECT)

            // Buatlah perkondisian dimana: 
            // 1. a. Apabila ada data dalam database, maka outputnya adalah semua data dalam database akan ditampilkan 
            //       (gunakan num_rows > 0, while, dan mysqli_fetch_assoc())
            //    b. Untuk setiap data yang ditampilkan, buatlah sebuah button atau link yang akan mengarahkan web ke halaman 
            //       form_detail_mobil.php dimana halaman tersebut akan menunjukkan seluruh data dari satu mobil berdasarkan id
            // 2. Apabila tidak ada data dalam database, maka outputnya adalah pesan 'tidak ada data dalam tabel'

    $query = mysqli_query($conn, "SELECT * FROM showroom_mobil");
    $isi_data = [];
    
    while ($mobil = mysqli_fetch_assoc($query)){
        $isi_data[]=$mobil;
    } 
            ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Mobil</title> 
</head>
<body>
    <?php include("navbar.php") ?>
    <center>
        <div class="container">
            <h1>List Mobil</h1>
            <br/>
            <table class="table" border="10" celpadding="20" cellspacing="0">
            <thead>
                <tr>
                <th scope="col">ID</th>
                <th scope="col">Nama Mobil</th>
                <th scope="col">Brand</th>
                <th scope="col">Warna</th>
                <th scope="col">Tipe</th>
                <th scope="col">Harga</th>
                <th scope="col">Detail </th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($isi_data as $i) : ?>
                <tr>
                <td> <?php echo $i['id']; ?></td>
                <td> <?php echo $i['nama_mobil']; ?></td>
                <td> <?php echo $i['brand_mobil']; ?></td>
                <td> <?php echo $i['warna_mobil']; ?></td>
                <td> <?php echo $i['tipe_mobil']; ?></td>
                <td> <?php echo $i['harga_mobil']; ?> </td>
                <td><a href="form_detail_mobil.php?id=<?php echo $i['id']; ?>" class="btn-primary btn">Detail</a></td>
                </tr>
                <?php endforeach; ?>
            </tbody>
            </table>

        </div>
    </center>
</body>
</html>
