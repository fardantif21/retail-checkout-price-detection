
    <h1>Home</h1>

<?php
// Menjalankan skrip Python dan menangkap outputnya sebagai string
$output = shell_exec("python C:\\xampp\htdocs\\retail-checkout-price-detection\yolo\opencv.py");
echo $output;

// Mengubah string JSON menjadi array PHP
$arr = json_decode($output);
var_dump($arr)

?>

<br>

<img src="http://localhost//retail-checkout-price-detection//yolo//hasil.jpg" alt="Italian Trulli">