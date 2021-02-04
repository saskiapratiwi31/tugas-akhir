<?php 
include "koneksi.php";
$username=$_GET['username'];
$query="DELETE FROM login WHERE username='$username'";
$hasil=mysqli_query($koneksi, $query);
if($hasil){
 ?>
<script language="javascript">
 document.location.href="dashboard.php";
</script>
 <?php 
}else{
	echo "gagal hapus data";
}
?>