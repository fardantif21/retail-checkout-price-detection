<?php 
	$conn = mysqli_connect("localhost","root","","data");
    
	//Query sql
	//$query="SELECT nama FROM produk";
    
// Menjalankan skrip Python dan menangkap outputnya sebagai string
//$output = shell_exec("python C:\\xampp\htdocs\\retail-checkout-price-detection\yolo\opencv.py");
//echo $output;

// Mengubah string JSON menjadi array PHP
//$arr = json_decode($output);

$arr = ["Lifebuoy Total Protect Soap 96gm", "Fanta 250ml", "LU Oreo Biscuit 19gm"];

// Membuat string kondisi SQL untuk mencocokkan nilai dalam array
//$nilai_sql = "'" . implode("', '", $arr) . "'";


foreach ($arr as $item) {
    echo $item . "<br>";
  }

  
foreach ($arr as $item) {
    //query untuk setiap iterasi
    $query = "SELECT * FROM produk WHERE nama='$item'";
    $result = mysqli_query($conn, $query);
  
    //proses hasil query
    while ($row = mysqli_fetch_assoc($result)) {
      //tampilkan data hasil query
      echo $row['nama'] . " " . $row['harga'] . "<br>";
    }
  }

// Menampilkan hasil query
// while ($row = mysqli_fetch_assoc($result)) {
//     $harga = $row["harga"];
//     echo "Harga produk dengan nama " . $arr[array_search($row['nama'], $arr)] . " adalah: " . $harga . "<br>";
//     $total=$harga;
    
// }
// echo "Total belanjaan :" .$total. "<br>";

?>