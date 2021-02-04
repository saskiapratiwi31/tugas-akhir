<?php 
include "koneksi.php";
$no=$_GET['no'];
$query="DELETE FROM tb_kuliner WHERE no='$no'";
$hasil=mysqli_query($koneksi, $query);
if($hasil){
 ?>
<script language="javascript">
 document.location.href="datakuliner.php";
</script>
 <?php 
}else{
	echo "gagal hapus data";
}
?>