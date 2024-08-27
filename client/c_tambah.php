<?php require_once'client/head.php'; ?>


<h4 class="mb-4">Tambah produk</h4>	
<form id="AddForm">
<p><input type="text" name="nama" placeholder="nama produk.." required></p>
<p><input type="number" name="harga" placeholder="harga.." required></p>
<p><input type="number" name="stok" placeholder="stok.." required></p>
<p id="msg"></p>
<button type="Sumbit">Sumbit</button> &nbsp; <a href="<?= BASE_URL.'c_tampil';?>">Lihat data</a> 
</form>

<script type="text/javascript">
$(function(){
var form1 = document.getElementById('AddForm');
$('#AddForm').on('submit', function(e){ e.preventDefault();

var formData = new FormData(form1);
$.ajax({
            url: "<?= BASE_URL_API.'r_tambah';?>",
            data: JSON.stringify(Object.fromEntries(formData)),
            contentType: "application/json",
            async: false,
            method: "POST",
            
            success:function(response){
            if(response==1){
             msg_('<font color=green>Create product successful</font>');
             $('#AddForm')[0].reset(); 
             } else {
             msg_('<font color=#666>Create product successful</font>');
        }
    
    }
  });
});
});

</script>

<?php require_once'client/footer.php'; ?>