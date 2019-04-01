<?php
$koneksi = mysqli_connect 
			(
				"localhost",
				"id8008167_crud1",
				"12345678",
				"id8008167_crud"
			);
if (mysqli_connect_errno())
	{
		echo "Koneksi Gagal"
		.mysqli_connect_error();
	}
?>
