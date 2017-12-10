<html>
<head>
<title>
</title>
</head>
<body>
//replace $salt with the salt value in the database, replace the "newPassword" in the crypt function
//with whatever you want the password to be. The webpage will give you a string when you run it, copy
//past that into the hashPassword column of the database.
<?PHP
	$iv = mcrypt_create_iv(22,MCRYPT_DEV_URANDOM) ;
	$encoded_iv = str_replace('+' , '.' , base64_encode($iv)) ;
	$salt = "4kin0M" . $encoded_iv . '$' ;
	$hashed_password = crypt("newPassword" , $salt) ;
	echo $hashed_password ;
?>
</body>
</html>
