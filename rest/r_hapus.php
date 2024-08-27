<?php
header("Access-Control-Allow-Headers: Authorization, Content-Type");
header("Access-Control-Allow-Methods: DELETE");

require'koneksi_db.php';

$tmp = file_get_contents("php://input");
$data=json_decode($tmp);

if($data===NULL) { echo 'secured Api.'; } else {

    $q = "DELETE FROM produk WHERE id='$data->id_del'";
    
    $response = $db->query($q); 
    
    if($response){echo 1;};
    
}
    
    ?>