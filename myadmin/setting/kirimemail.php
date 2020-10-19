<?php 

  include 'database.php'; 

     
             $email= $_GET['email'];
   
    
    $from = "no-reply@dispendukcapil.com";    
    $to = "$_GET[email] ";  
     
    $subject = "Dispendukcapil";    
    $message = "Hi $_GET[email],
    Terimakasih sudah mendaftar E-ktp secara Online, 
    Tahap selanjutnya adalah melakukan Perekaman, untuk itu  Silahkan Bapak/Ibu untuk datang ke Dinas Kependudukan dan Pecatatan sipil kota Semarang, Batas waktu yang di tentukan adalah maksimal 3 hari kerja dari sekarang, setelah melebihi batas waktu yang di tentukan harap untuk mendaftarkan ulang dengan datang secara langsung atau hubungi Telp:(024)6712563.
    Demikian surat yang kami sampaikan kami ucapkan terima kasih. 
    ------------------------------------------------------------
    Mohon jangan membalas email ini dikirimkan secara otomatis oleh sistem!!!  ";   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim ke $_GET[email] .";



 ?>
