<?php
header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Methods: PUT");

require'koneksi_db.php';

$json = file_get_contents("php://input");

$data=json_decode($json);

if($data===NULL) { echo 'secured Api.'; } else {

    $q ="UPDATE produk SET nama='$data->nama', harga='$data->harga', stok='$data->stok' WHERE id ='$data->id'";
	
	$response=$db->query($q);
	
	if($response){echo 1;}
	
}
	

