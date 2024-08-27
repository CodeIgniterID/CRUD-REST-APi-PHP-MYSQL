<?php
require_once'client/head.php';
$str = file_get_contents(BASE_URL_API.'r_tampil');
$json=json_decode($str)->data;
?>
<div class="col-md-4">
<h4> Data produk </h4>
<p>Page : <a href="<?= BASE_URL ?>">Home.</a></p>
<p>Tambah barang baru : <a href="<?= BASE_URL.'c_tambah';?>">+ New</a></p>
<p id="msg"></p>
<ul class="list-group list-group-flush">
<?php 
foreach ($json as $key) {?>
 <li del-id="<?= $key->id?>" class="list-group-item"><b>ID : <?= $key->id?></b> &nbsp;
<a href="<?= BASE_URL.'c_detail/?id='.$key->id?>">[view edit]</a> &nbsp;
 <button class="del" data-value="<?= $key->id?>">hapus</button>
 </li>
 <li del-id="<?= $key->id?>" class="list-group-item">Nama <?= $key->nama?>, harga <?= $key->harga?></li>
<?php } ?>
</ul>
</div>

<script type="text/javascript">
    $('.del').click(function () {
      
    if (!confirm("Do you want delete?")){
      return false;
    }
        var id = $(this).data('value');
        $.ajax({
            url:"<?= BASE_URL_API.'r_hapus'?>",
            data: JSON.stringify({id_del:id}),
            contentType: 'application/json',
             async: false,
             type: 'DELETE',
            
                success:function(response){
                
                if (response == 1 ){
                    $("li[del-id="+id+"]").remove();
                    msg_('<font color=green>Delete product successful</font>');
                } else {
                     msg_('<font color=#666>Failed Delete product</font>');
                }
            }
        });
    });
</script>

<?php require_once'client/footer.php';?>