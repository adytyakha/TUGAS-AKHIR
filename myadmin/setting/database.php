<?php

		$db_host = "localhost";
		$db_user = "id5799502_didit1";
		$db_password ="Aku@cinta1kamu";
		$db_name = "id5799502_didit";
		

		$koneksi = mysqli_connect($db_host, $db_user, $db_password, $db_name);

		if (!$koneksi) {
		die("Gagal Terkoneksi ".mysqli_connect_error(). " - ".mysqli_connection_error() );
		exit();

		}
		?>
