<?php
header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Methods: GET");

//2  baris di atas untuk beda domain atau cors 

require'koneksi_db.php';

$q = "SELECT * FROM produk ORDER BY id DESC";

$tmp = $db->query($q);

while ($row=$tmp->fetch_assoc()){ 
	// code...
    $data['data'][]=$row;
}

echo json_encode($data,JSON_NUMERIC_CHECK);


?>
