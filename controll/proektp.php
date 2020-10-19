<?php

include("../myadmin/setting/database.php");
// session_start();
// $session_id = $_SESSION['id'];
// if (isset($session_id)) {


// cek apakah tombol daftar sudah diklik atau blum?
    // if (isset($_POST['register'])) {
if($_POST){
        // ambil data dari formulir


    $nik = $_POST['nik'];
    $kk = $_POST['kk'];



  $nama_lengkap = $_POST['nama_lengkap'];
 $ttl = $_POST['ttl'];

  $tmp_lahir = $_POST['tmp_lahir'];
  $jk = $_POST['jk'];
$alamat = $_POST['alamat'];
 $rt = $_POST['rt'];
 $rw = $_POST['rw'];
 $pos = $_POST['pos'];

    $provinsi = $_POST['provinsi'];
  $kabupaten = $_POST['kabupaten'];
  $kecamatan = $_POST['kecamatan'];

  $kelurahan = $_POST['kelurahan'];
  $statuskawin = $_POST['statuskawin'];
$jenis_pekerjaan = $_POST['jenis_pekerjaan'];

  $agama = $_POST['agama'];
  $create = date('d F Y');
$email = $_POST['email'];
$hp = $_POST['hp'];







     
        
        $cek = mysqli_num_rows(mysqli_query($koneksi,"SELECT * FROM dataektp WHERE nik='$nik'"));
 if ($cek > 0){
    echo "<script>window.alert('Maaf , Nik yang anda masukan sudah terdaftar E-KTP, Silahkan cek email !')
    window.location='../sudahterdaftar.php'</script>";
    }else {


        // buat query
        
        
          
        //   $sql = " INSERT INTO `dataektp` (`id`, `nik`, `kk`, `nama_lengkap`) VALUES (NULL, '$nama_lengkap', '$tmp_lahir', '$jk', '$alamat', '$rt', '$rw', '$pos', '$provinsi', '$kabupaten', '$kecamatan', '$kelurahan', '$statuskawin', '$jenis_pekerjaan', '$agama', '$create',  '', '0', '$email', '$hp')";
        
        
         $sql = "INSERT INTO `dataektp` (`id`, `nik`, `kk`, `nama_lengkap`, `ttl`, `tmp_lahir`, `jk`, `alamat`, `rt`, `rw`, `pos`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `statuskawin`, `jenis_pekerjaan`, `agama`, `create`, `gambar`, `status`, `email`, `hp`) VALUES (NULL, '$nik', '$kk', '$nama_lengkap', '$ttl', '$tmp_lahir', '$jk', '$alamat', '$rt', '$rw', '$pos', '$provinsi', '$kabupaten', '$kecamatan', '$kelurahan', '$statuskawin', '$jenis_pekerjaan', '$agama', '$create', '', '0', '$email', '$hp')";

   
       // $sql = "INSERT INTO `dataektp`(`id`,`nik`, `kk`, `nama_lengkap`, `tmp_lahir`, `ttl`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `agama`, `statuskawin`, `jenis_pekerjaan`, `kewarganegaraan`) VALUES (NULL, '$nik', '$kk', '$nama_lengkap', '$tmp_lahir',  '$ttl', '$alamat', '$rt', '$rw', '$kelurahan', '$kecamatan', '$agama', '$statuskawin', '$jenis_pekerjaan')";


    //   $sql = "INSERT INTO `dataektp`(`id`,`nik`, `kk`, `nama_lengkap`, `tmp_lahir`, `jk`, `ttl`, `provinsi`, `kabupaten`, `alamat`, `rt`, `rw`, `kelurahan`, `kecamatan`, `agama`, `statuskawin`, `jenis_pekerjaan`, `email`, `hp`, `create`) VALUES (NULL, '$nik', '$kk', '$nama_lengkap', '$tmp_lahir','$jk',  '$ttl',  '$provinsi',  '$kabupaten', '$alamat', '$rt', '$rw', '$kelurahan', '$kecamatan', '$agama', '$statuskawin', '$jenis_pekerjaan', '$email', '$hp','$create')";
       

        
        
        //   $sql = " INSERT INTO `dataektp` (`id`, `nik`, `kk`, `nama_lengkap`, `ttl`, `tmp_lahir`, `jk`, `alamat`, `rt`, `rw`, `pos`, `provinsi`, `kabupaten`, `kecamatan`, `kelurahan`, `statuskawin`, `jenis_pekerjaan`, `agama`, `create`, `gambar`, `status`, `email`, `hp`) VALUES (NULL,'$nik','$kk', '$nama_lengkap', '$tmp_lahir', '$jk', '$alamat', '$rt', '$rw', '$pos', '$provinsi', '$kabupaten', '$kecamatan', '$kelurahan', '$statuskawin', '$jenis_pekerjaan', '$agama', '$create',  '', '0', '$email', '$hp')";
          
          
       
       
 $query = mysqli_query($koneksi, $sql);





 







        // apakah query simpan berhasil?
        if ($query) {
            // kalau berhasil alihkan ke halaman index.php dengan status=sukses
         echo ' 
						 <script>
        					alert("Selamat Anda Berhasil Mendaftar!");
        					window.location = "../pendaftaranberhasil.php"
      					 </script>';
      }else{
						echo '<script>
        					alert("Gagal Ditambahkan!");
        					window.location = "../pendaftarangagal.php"
      					 	</script>';
					}

        }
        }
  
?>