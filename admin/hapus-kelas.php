<?php 
$id_kelas = $_GET['id_kelas'];


include'../koneksi.php';
		// menghapus baris data pada suatu tabel dalam database
$sql = "DELETE FROM kelas WHERE id_kelas='$id_kelas'";
$query = mysqli_query($koneksi, $sql);
if($query){
	header("Location:?url=kelas");
 }else{
 	echo "<script>
 	alert('Maaf data anda tidak Terhapus');
 	window.location.assign('?url=kelas');
 	</script>";
 }

 ?>
