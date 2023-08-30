<?php 
	$_mysqli = new mysqli("localhost","root","","siwades_db"); 
	echo "
	<script>console.log('error di koneksi')</script>
	";
	return $_mysqli;
 ?>