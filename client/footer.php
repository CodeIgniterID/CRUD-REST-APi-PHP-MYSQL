<script>
function msg_(msg)
{
    var msg;
    document.getElementById('msg').innerHTML=msg;
    $("#msg").show();
    setTimeout(function() {
        $("#msg").hide();
    }, 3000);
}
</script>

</div>
</body>
</html>