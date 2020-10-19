<?php
    ini_set( 'display_errors', 1 );   
    error_reporting( E_ALL );    
    $from = "ektp@hoster.com";    
    $to = "kmaman31@gmail.com";    
    $subject = "Pemberitahuan";    
    $message = "Silahkan Anda datang ke Dinas Kependudukan dan Pecatatan sipil kota Semarang untuk melakukan Perekaman , kami ucapkan terima kasih.";   
    $headers = "From:" . $from;    
    mail($to,$subject,$message, $headers);    
    echo "Pesan email sudah terkirim.";
?>