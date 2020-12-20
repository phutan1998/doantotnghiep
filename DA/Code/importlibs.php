<script>
function xoa(i){
    window.location.href="delete.php?id="+i;
}
function change(id){
    var x = document.getElementById("sp-"+id).value;
    window.location.href="update.php?id="+id+"&sl="+x; 
}
function xacnhan(id){
  window.location.href="xacnhan.php?id="+id;
}
function trove(){
  window.location.href="../index.php";  
}
</script>