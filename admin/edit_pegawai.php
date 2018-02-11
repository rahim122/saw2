<?php include "header.php";
include 'kon.php';
$ud1=$_GET ['id'];
?>


    
<div class="container-fluid">

                <!-- Page Heading -->
                <div  class="row">
                <div class="col-lg-10">
                <h1 class="page-header">Formasi Jabatan pada Sekretariat Daerah Kota Banjarbaru</h1>
                <ol class="breadcrumb">
                <li class="active">
				Edit Data Pegawai</li>
                </ol>
				
                </div>
                </div>
				<div class="dataTable_wrapper">
				
				<?php
				$ubah = mysqli_query($koneksi,"select * from alternatif where nip='$ud1'");
				$data = mysqli_fetch_array ($ubah);
				?>
				
				<?php
 //.koding simpan
if (isset($_POST['edt'])) {
	$nama1 = $_POST['nama1'];
	$alamat2 = $_POST['alamat2'];
	$jabatan3 = $_POST['jabatan3'];
	
	$cek=mysqli_query($koneksi,"select * from alternatif where nip='$data[0]'");
	
	
  if (mysqli_num_rows($cek)!= 0) {
		$edit = mysqli_query($koneksi, "UPDATE `alternatif` set `nama`='$nama1',`alamat`='$alamat2',`jabatan`='$jabatan3' where `nip`='$ud1'")
		or die(mysqli_error());
		
				if($edit) {
			echo '<script type="text/javascript">alert("Data Berhasil disimpan") </script>';
			echo '<meta http-equiv="refresh" content="0; url=./data_pegawai.php" >'; //coding refresh
			
		
	}  else {
		echo '<script type="text/javascript">alert("Data sudah ada")
			</script>';
			echo '<meta http-equiv="refresh" content="0; url=./data_pegawai.php" >'; //coding refresh
  }
}
}
?>
<form  action="" method="post" class="popup-form">					
        <label>Nip</label>
        <input  class="form-control form-white" name="" placeholder="Enter text" value="<?php echo $data[0]; ?>" readonly>
                        
        <label>Nama</label>
         <input  class="form-control form-white" name="nama1" placeholder="Enter text" value="<?php echo $data[1]; ?>" required>
		
		 <label>Alamat</label>
        <input  class="form-control form-white" name="alamat2" placeholder="Enter text" value="<?php echo $data[2]; ?>"required>
		
		<label>Jabatan</label>
        <input  class="form-control form-white" name="jabatan3" placeholder="Enter text" value="<?php echo $data[3]; ?>"required>

<button type="submit" class="btn btn-primary" name="edt"><span class="glyphicon glyphicon-floppy-disk"></span>Simpan</button>
<a href="data_pegawai.php" button type="reset" class="btn btn-default"> <span class="glyphicon glyphicon-triangle-right"></span> Kembali</a>

</form>

    </div>
  <?php include "footer.php";?>
