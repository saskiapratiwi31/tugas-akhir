<?php 
include "koneksi.php";
$no=$_GET['no'];
$query="DELETE FROM tb_tempatbaru WHERE no='$no'";
$hasil=mysqli_query($koneksi, $query);
if($hasil){
 ?>
<script language="javascript">
 document.location.href="datapenginapan.php";
</script>
 <?php 
}else{
	echo "gagal hapus data";
}
?>