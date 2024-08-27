<?php 
require_once'client/head.php';  ?>

<h4> API :: PHP MYSQL</h4>
Ini adalah CRUD sistem rest API, client Php Mysql sederhana.
<p> Menu: </p>
<ul>
<li> Rest api view data json : 
<a href="<?= BASE_URL.'r_tampil';?>"><?= BASE_URL.'r_tampil';?></a></li>
<li> Rest api tambah data: 
<a href="<?= BASE_URL.'r_tambah';?>"><?= BASE_URL.'r_tambah';?></a></li>
</ul>

<?php require_once'client/footer.php'; ?>
