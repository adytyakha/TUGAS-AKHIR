<?php 
  include 'database.php'; 

      $id= $_GET['id'];

      $query = mysqli_query($koneksi, "UPDATE dataektp SET status='2' WHERE id='$id' ");
 
      if($query){
        echo ' 
            <script>
                  alert("Berhasil Verifikasi!");
                  window.location = "../verifikasidata2.php"
            </script>';
       } 
       else{
            echo '<script>
                  alert("Gagal Verifikasi!");
                  window.location = "../index.php"
                  </script>';
          }
        

 ?>
