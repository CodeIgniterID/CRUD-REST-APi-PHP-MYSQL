<?php
header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Methods: POST");

require'koneksi_db.php';

$json = file_get_contents("php://input");

$data=json_decode($json);

if($data===NULL) { echo 'secured Api.'; } else {

$q ="INSERT INTO produk (nama, harga, stok) VALUES ('$data->nama', '$data->harga', '$data->stok')";
	
	$response=$db->query($q);
	
	if($response){echo 1;}
	
} ?>
	

