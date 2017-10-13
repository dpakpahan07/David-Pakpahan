<?php
if(isset($_POST['submit'])){
$name = array("Kevin", "Dapil", "Ajudan pribadi");
	
	$minimum = 5;
	$maximum = 10;
	
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	if(strlen($username) < $minimum){
		echo "Username harus memiliki panjang 5 atau lebih";
	}
	if(strlen($username) > $maximum){
		echo "Username tidak boleh memiliki panjang lebih dari 10 <br />";
	}
	if(!in_array($username, $name)){
		echo "Maaf Mas, akses ditolak";
	}else{
		echo "Selamat Datang!";
	}
}
?>