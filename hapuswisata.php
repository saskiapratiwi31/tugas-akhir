<?php 
include "koneksi.php";
$no=$_GET['no'];
$query="DELETE FROM tb_wisata WHERE no='$no'";
$hasil=mysqli_query($koneksi, $query);
if($hasil){
 ?>
<script language="javascript">
 document.location.href="datawisata.php";
</script>
 <?php 
}else{
	echo "gagal hapus data";
}
?>