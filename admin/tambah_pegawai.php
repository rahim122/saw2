<?php include "header.php";
include 'kon.php';?>


    
<div class="container-fluid">

                <!-- Page Heading -->
                <div  class="row">
                <div class="col-lg-10">
                <h1 class="page-header">Formasi Jabatan pada Sekretariat Daerah Kota Banjarbaru</h1>
                <ol class="breadcrumb">
                <li class="active">
				Tambah Data Pegawai Baru</li>
                </ol>
				
                </div>
                </div>
				<div class="dataTable_wrapper">
				<?php
 //.koding simpan
if (isset($_POST['add'])) {
	$nip = $_POST['nip'];
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jabatan = $_POST['jabatan'];
	
  if ($nip != '') {
		$insert = mysqli_query($koneksi, "INSERT INTO alternatif (`nip`, `nama`,`alamat`,`jabatan`) 
		VALUES ('$nip','$nama','$alamat','$jabatan')") or die(mysqli_error());
		
				if($insert) {
			echo '<script type="text/javascript">alert("Data Berhasil disimpan") </script>';
			echo '<meta http-equiv="refresh" content="0; url=./data_pegawai.php" >'; //coding refresh
			
		} else {
			echo '<script type="text/javascript">alert("Data gagal disimpan")
			</script>';
			
			echo '<meta http-equiv="refresh" content="0; url=./tambah_pegawai.php" >'; //coding refresh
		}
	}  else {
		echo '<script type="text/javascript">alert("Data sudah ada")
			</script>';
			echo '<meta http-equiv="refresh" content="0; url=./tambah_pegawai.php" >'; //coding refresh
  }
}

?>
<form  action="" method="post" class="popup-form">					
        <label>Nip</label>
        <input  class="form-control form-white" name="nip" placeholder="Enter Number" pattern="[0-9]*" value="" required>
                        
        <label>Nama</label>
         <input  class="form-control form-white" name="nama" placeholder="Enter text" value="" required>
		
		 <label>Alamat</label>
        <input  class="form-control form-white" name="alamat" placeholder="Enter text" value="" required>
		
		<label>Jabatan</label>
        <input  class="form-control form-white" name="jabatan" placeholder="Enter text" value="" required>

<button type="submit" class="btn btn-primary" name="add"><span class="glyphicon glyphicon-floppy-disk"></span>Simpan</button>
<a href="data_pegawai.php" button type="reset" class="btn btn-default"> <span class="glyphicon glyphicon-triangle-right"></span> Kembali</a>

</form>

    </div>
  <?php include "footer.php";?>

