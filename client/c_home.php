<?php 
require_once'client/head.php';  ?>

<h4> API :: PHP MYSQL</h4>
<p>Ini adalah CRUD sistem rest API, client Php Mysql sederhana.</p>
<p>APi Client :</p>
<ul>
<li> Client APi view data json : 
<a href="<?= BASE_URL.'c_tampil';?>"><?= BASE_URL.'c_tampil';?></a></li>
<li> Client APi tambah data: 
<a href="<?= BASE_URL.'c_tambah';?>"><?= BASE_URL.'c_tambah';?></a></li>
</ul>
<p>Rest APi :</p>
<ul>
<li> APi data json product : 
<a href="<?= BASE_URL_API.'r_tampil';?>"><?= BASE_URL_API.'r_tampil';?></a></li>
<li> APi data json detail product : 
<a href="<?= BASE_URL_API.'r_detail';?>"><?= BASE_URL_API.'r_detail';?></a></li>
</ul>

<?php require_once'client/footer.php'; ?>
