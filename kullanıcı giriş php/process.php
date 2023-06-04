<?php
$username = $_POST['user'];
$password = $_POST['pass'];


$username = stripcslashes($username);
$password = stripcslashes($password);
$username = mysql_real_escape_string($username);
$password = mysql_real_escape_string($password);

//MySQL veritabanına giriş.
mysql_connect("localhost", "root", "");
$result = mysql_query("select * from users where username = '$username' an password = '$password'")
or die("Veritabanına eylem yapılırken gelen hata:
	".mysql_connect());


	$row = mysql_fetch_array($result);
	if ($row['username'] == $username && $row['password'] == $password){
		echo "Başarıyla giriş yapıldı. Hoş Geldin,"

	} else{
		echo "Giriş Yapılamadı. Lütfen Kulanıcı adınızı ve şifrenizi kontrol edini";
	}
?>