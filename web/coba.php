<?php 
	$conn = mysqli_connect("localhost","root","","data");

    $arr = ["Lifebuoy Total Protect Soap 96gm", "Fanta 250ml", "Fanta 250ml", "LU Oreo Biscuit 19gm"];

    $total = 0;  

    foreach ($arr as $item) {
        //query untuk setiap iterasi
        $query = "SELECT * FROM produk WHERE nama='$item'";
        $result = mysqli_query($conn, $query);
    
        //proses hasil query
        while ($row = mysqli_fetch_assoc($result)) {
        //tampilkan data hasil query
        echo $row['nama'] . " " . $row['harga'] . "<br>";
        $total += $row['harga'];
        }
    }

    //Menghitung total harga barang belanjaan
    echo "Total harga : " . $total; 

?>