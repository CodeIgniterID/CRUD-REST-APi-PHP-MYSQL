<?php
require_once'setup.php';

$url = isset($_GET['url']) ? $_GET['url'] : null;

if($url==='r_tambah'){
require'rest/r_tambah.php';
} else if ($url==='r_tampil'){
require'rest/r_tampil.php';
} else if ($url==='r_detail'){
require'rest/r_detail.php';	
} else if ($url==='r_update'){
require'rest/r_update.php';
} else if ($url==='r_hapus'){
require'rest/r_hapus.php';
} else if ($url==='c_tampil'){
require'client/c_tampil.php';
} else if ($url==='c_detail'){
require'client/c_detail.php';
} else if ($url==='c_tambah'){
require'client/c_tambah.php';					
}else {
require'client/c_home.php';
}

