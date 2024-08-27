<?php
header("Access-Control-Allow-Headers: Authorization, Content-Type");
//header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: GET");

require'koneksi_db.php';
   
    $id = $_GET['id'];
    $q = "SELECT * FROM produk WHERE id='$id' ORDER BY id ASC limit 1";
    
    $tmp = $db->query($q);
    $data=$tmp->fetch_assoc();      
    echo json_encode($data);


?>