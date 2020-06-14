<?php
  if(isset($_POST['edit']))
  {
    include('function.php');

    $id = $_GET['id_aduan'];
	$tanggapan = $_POST['tanggapan'];
    
	$hasil = mysqli_query($conn, "UPDATE komentar SET tanggapan='$tanggapan' WHERE id_aduan='$id'");
	
    if($hasil)
    {
	  echo"<script>alert('Komentar Telah Ditanggapi!');</script>";
      header("Refresh:0 url=daftar_aduan.php");
    }
    else {
      echo "Ada Masalah";
    }
  }
  else {
    header('Location:login.php');
  }
?>
