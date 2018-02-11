<?php
include 'header1.php';

				if(isset($_POST['login'])){

					include"kon.php";
					$username	= $_POST['username'];
					$password	= md5($_POST['password']);
					
					
					$login=mysqli_query($koneksi,"SELECT * FROM `admin` WHERE `username`='$username'  AND `password` ='$password'");


// Apabila username dan password ditemukan
if(mysqli_num_rows($login) == 0){
	echo '<div class="alert alert-danger" align="center" >Login gagal !!! Silahkan Coba Lagi..</div>';
	}
	else
	{
$ketemu =mysqli_num_rows($login);
$r=mysqli_fetch_array($login);					 
session_start();				
$_SESSION['username']     = $r['username'];
$_SESSION['password']     = $r['password'];
$_SESSION['id_admin']=$r['id_admin'];
//$_SESSION['status']=$r['status'];
	header("location:/saw/admin/index.php");
						
						}
					}
				
				?>  
  
				
<!--<H1 align ="center">
  <span class="glyphicon glyphicon-user" aria-hidden="true"></span><a font="50px" href="#" data-toggle="modal" data-target="#modal1" class="btn btn-blue"><STRONG>LOGIN</STRONG></a>
  </H1>-->
  
  
  <!--<div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		<div class="modal-dialog">
			<div class="modal-content modal-popup">
				<a href="#" class="close-link"><i class="icon_close_alt2"></i></a>-->

  
<div class="container" background="img/image_5.jpg">
        <div class="row">
            <div background="img/image_5.jpg" class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default" background="img/image_5.jpg">
                    <div class="panel-heading" background="img/image_5.jpg">
                        <h3 align="center"  class="panel-title">Masuk Aplikasi</h3>
                    </div>
                    <div class="panel-body" background="img/image_5.jpg">
                        <form image="img/image_5.jpg" role="form" action="" method="post">
    
					 <fieldset>
                    
					<div class="form-group" background="img/image_5.jpg">
						<input type="text" name="username" class="form-control" placeholder="Isi Username" required autofocus />
					</div>
					<div class="form-group">
						<input type="password" name="password" class="form-control" placeholder="Isi Password" required autofocus />
					</div>
					
					<div class="form-group" bgcolor="black">
						<input type="submit" name="login" class="btn btn-success btn-block" value="Login" />
					</div>
				 </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>


	