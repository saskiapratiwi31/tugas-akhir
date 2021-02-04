<?php 
include "koneksi.php";
$id=$_GET['id'];
$query="DELETE FROM tb_komentar WHERE id='$id'";
$hasil=mysqli_query($koneksi, $query);
if($hasil){
 ?>
<script language="javascript">
 document.location.href="datakomen.php";
</script>
 <?php 
}else{
	echo "gagal hapus data";
}
?>