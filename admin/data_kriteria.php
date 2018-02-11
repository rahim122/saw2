<?php include "header.php";
include 'kon.php';?>

    

    
<div id="page-wrapper">
<div class="container-fluid">

                <!-- Page Heading -->
                <div  class="row">
                <div class="col-lg-10">
                <h1 class="page-header">Data Kriteria</h1>
                <ol class="breadcrumb">
                <li class="active">
				Data Kriteria dan Bobot
                </ol>
				
                </div>
                </div>
				<div class="dataTable_wrapper">


	<div class="table-responsive">
	
	
	<table class="table table-striped table-hover" bgcolor="#CCCCCC">
	
    <tr>
	
      <th>No</th>
      <th>Kriteria</th>
	  <th>Bobot</th>
	  
	 </tr>
	 
	 
		<!--/.tampil-->
		
    <?php
      
     $sql = mysqli_query($koneksi, "SELECT * FROM `kriteria`  order by `id_kriteria` asc");
         
      if (mysqli_num_rows($sql) == 0) {
        echo "<tr><td colspan=\"9\">Tidak Ada Data</td></tr>";
      } else {
        $no = 0;
        while ($data = mysqli_fetch_array($sql)) {
          $no++;
          echo '
        <tr bgcolor="#CCCCCC">
           
          <td>'.$no.'</td>
		   <td >'.$data[1].'</td>
		    <td >'.$data[2].'</td>
	
		  
		
        </tr>';
		}
      }
    ?>
	
	</table>
	
	</div>
	


    

    </div>
  <?php include "footer.php";?>

