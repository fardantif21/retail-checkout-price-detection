<?php 
	$conn = mysqli_connect("localhost","root","","data");

    $arr = ["Lifebuoy Total Protect Soap 96gm", "Fanta 250ml", "Fanta 250ml", "LU Oreo Biscuit 19gm"];

    $total = 0;  

    //membuat kamus untuk menyimpan kuantitas produk
    $kuantitas = array();

    //looping untuk menghitung kuantitas produk
    foreach ($arr as $produk) {
        if (array_key_exists($produk, $kuantitas)) {
            $kuantitas[$produk] += 1;
        } else {
            $kuantitas[$produk] = 1;
        }
    }

    //menampilkan kuantitas produk
    foreach ($kuantitas as $produk => $jml) {
        //echo "$produk: $jml <br>";

        //query untuk setiap iterasi
        $query = "SELECT * FROM produk WHERE nama='$produk'";
        $result = mysqli_query($conn, $query);
    
        //proses hasil query
        while ($row = mysqli_fetch_assoc($result)) {
        //tampilkan data hasil query
        echo $row['nama'] . " x" . $jml . " " . $row['harga']*$jml . "<br>";
        $total += $row['harga'] * $jml;
        }

    }

    //Menampilkan total harga barang belanjaan
    echo "Total harga : " . $total; 

?>