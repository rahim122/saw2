<?php include "header.php";
include 'kon.php';?>
<?php // Coding Hapus
if (isset($_GET['del'])) {
  $id = $_GET['del'];
  $cek = mysqli_query($koneksi, "SELECT * FROM `alternatif`  where `nip`='$id'");
  if (mysqli_num_rows($cek) > 0) {
    $delete = mysqli_query($koneksi, "DELETE FROM `alternatif`  where `nip`='$id'");
    if ($delete) {
      echo '<div class="alert alert-danger alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Berhasil!</strong> Data Telah dihapus.</div>';
  echo '<meta http-equiv="refresh" content="0; url=./data_pegawai.php" >'; //coding refresh
    } else {
      echo '<div class="alert alert-warning alert-dismissible" role="alert">
  <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
  <strong>Kesalahan!</strong> Tidak dapat menghapus data.</div>';
    }
  }
}
?>
    

    
<div id="page-wrapper">
<div class="container-fluid">

                <!-- Page Heading -->
                <div  class="row">
                <div class="col-lg-10">
                <h1 class="page-header">Data Pegawai</h1>
                <ol class="breadcrumb">
                <li class="active">
				 
  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span><a href="tambah_pegawai.php" 
  class="btn btn-blue">Tambah Data Baru</a>
    </li>
  
                </ol>
				
                </div>
                </div>
				<div class="dataTable_wrapper">


	<div class="table-responsive">
	
	
	<table class="table table-striped table-hover" bgcolor="#CCCCCC">
	
    <tr>
	
      <th>No</th>
      <th>Nip</th>
	  <th>Nama</th>
	  <th>Alamat</th>
	  <th>Jabatan</th>
	  <th>Pilihan</th>
	  
	  
	 </tr>
	 
	 
		<!--/.tampil-->
		
    <?php
      
     $sql = mysqli_query($koneksi, "SELECT * FROM `alternatif`  order by `nip` asc");
         
      if (mysqli_num_rows($sql) == 0) {
        echo "<tr><td colspan=\"9\">Tidak Ada Data</td></tr>";
      } else {
        $no = 0;
        while ($data = mysqli_fetch_array($sql)) {
          $no++;
          echo '
        <tr bgcolor="#CCCCCC">
           
          <td>'.$no.'</td>
		   <td >'.$data[0].'</td>
		    <td >'.$data[1].'</td>
			<td >'.$data[2].'</td>
			<td >'.$data[3].'</td>
			
			
	
		  
		
        <td><a href="edit_pegawai.php?id='.$data[0].'" class="btn-primary btn-sm"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> 
          <a href="?del='.$data[0].'" class="btn-danger btn-sm" ><span class="glyphicon glyphicon-trash" aria-hidden="true" onclick="return confirm(\'Hapus data ini?\')"></span></a></td>
        </tr>';
		}
      }
    ?>
	
	</table>
	
	</div>

    </div>
	
<script type="text/javascript">
function confirm_delete() {
  return confirm('Apakah ingin di hapus?');
}
</script>
  <?php include "footer.php";?>

