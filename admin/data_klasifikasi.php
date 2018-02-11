<?php include "header.php";


     include 'kon.php';?>


    
<div class="container-fluid">

                <!-- Page Heading -->
                <div  class="row">
                <div class="col-lg-10">
                <h1 class="page-header">Formasi Jabatan pada Sekretariat Daerah Kota Banjarbaru</h1>
                <ol class="breadcrumb">
                <li class="active">
				Penilaian Pegawai Baru</li>
                </ol>
				
                </div>
                </div>
				<div class="dataTable_wrapper">
				<?php
 //.koding simpan
if (isset($_POST['add'])) {
	$nama = $_POST['nama'];
	$hasil_ki = $_POST['hasil_ki'];
	$hasil_kk = $_POST['hasil_kk'];
	$hasil_pk = $_POST['hasil_pk'];
	$hasil_kp = $_POST['hasil_kp'];
	$total = $_POST['total'];
  if ($nama != '') {
		$insert = mysqli_query($koneksi, "INSERT INTO sub_kriteria (`nip`, `hasil_ki`,`hasil_kk`,`hasil_pk`,`hasil_kp`,`total`) 
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
		
		<div class="col-md-3"><label>Nama Pegawai</label>
<select class="form-control" span="label label-success" name="idjk" required="required">
		<option required="required" value="">Pilih</option>
		<?php
			$q = mysqli_query ($koneksi, "select * from `alternatif` order by `nip` ASC");
			while ($data = mysqli_fetch_array ($q)) {
			echo '<option value="' . $data[0]. '">' . $data[0].': '.$data[1].'</option>';
			}
		?>
		</select>		
        </div>
		<br></br><br></br>
		<div><ol class="breadcrumb">
                <li class="active">
				Penilaian Kapasitas Intelektual</li>
                </ol>
       <div class="col-md-4"><label>Pekerjaan Formal</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div>
		
		<div class="col-md-4"><label>Pendidikan Teknis</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div>
		
		<div class="col-md-4"><label>Pengalaman Kerja</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div></div>
		
		<br></br><br></br>
		<div><ol class="breadcrumb">
                <li class="active">
				Penilaian Kapasitas Kepribadian</li>
                </ol>
		<div class="col-md-3"><label>Disiplin</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div>
		
		<div class="col-md-3"><label>Motivasi</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div>
		
		<div class="col-md-3"><label>Etika</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div>
		
		<div class="col-md-3"><label>Kejujuran</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div>
		</div>
		
		<br></br><br></br>
		<div><ol class="breadcrumb">
                <li class="active">
				Penilaian Pola Kerja</li>
                </ol>
		
		<div class="col-md-2"><label>Sistematis</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div>
		
		<div class="col-md-2"><label>Analisis</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div>
		
		<div class="col-md-2"><label>Kecermatan</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div></div>
		
		<div class="col-md-2"><label>Tanggap</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div>
		
		<div class="col-md-2"><label>Kerjasama</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div>
		
		<div class="col-md-2"><label>Tanggung Jawab</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div>
		</div>
		<br></br><br></br>
		<div><ol class="breadcrumb">
                <li class="active">
				Penilaian Kepemimpinan</li>
                </ol>
		
		<div class="col-md-3"><label>Kerja Sama</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div>
		
		<div class="col-md-3"><label>Manajerial</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div>
		
		<div class="col-md-3"><label>Pikiran</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div>
		
		<div class="col-md-3"><label>Keteladanan</label> 
        <input  class="form-control form-white" name="nip" pattern="[0-9]*" value="" required></div></div>
		
		<br></br><br></br>
		<div><ol class="breadcrumb">
                <li class="active">
				Hasil Nilai</li>
                </ol>
		<div class="col-md-3"><label>Nilai Kapasitas Intelektual</label> 
        <input  class="form-control form-white" name="ki" pattern="[0-9]*" value="" readonly></div>
		
		<div class="col-md-3"><label>Nilai Kapasitas Kepribadian</label> 
        <input  class="form-control form-white" name="kk" pattern="[0-9]*" value="" readonly></div>
		
		<div class="col-md-3"><label>Nilai Pola Kerja</label> 
        <input  class="form-control form-white" name="pk" pattern="[0-9]*" value="" readonly></div>
		
		<div class="col-md-3"><label>Nilai Kepemimpinan</label> 
        <input  class="form-control form-white" name="kp" pattern="[0-9]*" value="" readonly ></div>
		
                        
        
<br></br><br></br><br>
<div class= "col-md-3">
<button type="submit" class="btn btn-primary" name="add"><span class="glyphicon glyphicon-floppy-disk"></span>Simpan</button>
<a href="data_klasifikasi.php" button type="reset" class="btn btn-default"> <span class="glyphicon glyphicon-triangle-right"></span> Kembali</a></div>

</form>

       

    </div>
  <?php include "footer.php";?>

