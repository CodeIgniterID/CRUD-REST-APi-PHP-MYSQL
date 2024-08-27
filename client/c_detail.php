<?php
require_once'client/head.php'; 

$id = isset($_GET['id']) ? $_GET['id'] : null;
$tmp = file_get_contents(BASE_URL_API.'r_detail/?id='.$id);
$key= json_decode($tmp);
?>
<div class="col-md-4">
<h4 class="mb-4"> Detail produk </h4>
<ul class="list-group list-group-flush">
<form id="UpdateForm">
ID : <?= @$key->id ?>
<p><input type="hidden" name="id" value="<?= @$key->id ?>" readonly="true"required></p>
<p><input type="text" name="nama" value="<?= @$key->nama ?>" required></p>
<p><input type="number" name="harga" value="<?= @$key->harga ?>" required></p>
<p><input type="number" name="stok" value="<?= @$key->stok ?>" required></p>
<p id="msg"></p>
<button type="Sumbit" class="redirect">Update</button> &nbsp; <a href="<?= BASE_URL.'c_tampil';?>">Back</a> 
</form>
 </li>
</ul>
</div>

<script type="text/javascript">
	
var form = document.getElementById('UpdateForm');
$('#UpdateForm').on('submit', function(e){ e.preventDefault();
var formData = new FormData(form);

        $.ajax({
            url:"<?= BASE_URL_API.'r_update'?>",
            data: JSON.stringify(Object.fromEntries(formData)),
    		contentType: 'application/json',
            async: false,
            type: 'PUT',
            
            	success:function(response){
                if (response == 1 ){
                    //$("li[del-id="+id+"]").remove();
                    var msg = '<font color=green>Update successful</font>';
                    document.getElementById('msg').innerHTML=msg;
                        
                        $(".redirect").text("Redirecting..") 
                        // storing url and time 
                        let delay = 500; 
                        let url = "<?= BASE_URL.'c_tampil'?>"; 
                        setTimeout(function(){ 
                        location = url; 
                        },delay); 
                        
                        console.log(response);
                        } else {
                        var msg = 'Update successful';
                        document.getElementById('msg').innerHTML=msg;
                        console.log(response);
                        }
            }
        });
 });
</script>

<?php require_once'client/footer.php'; ?>