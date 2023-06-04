<?php
$sayi1       =   $_POST['sayi1']  ?? '';
$sayi2       =   $_POST['sayi2']  ?? '';
$op          =   $_POST['op']  ?? '';
$sonuc       =   0;

if(isset($_POST['islem-yap']))
{
	if($op=='+')
		$sonuc = $sayi1 + $sayi2;
	else if($op=='-')
		$sonuc   =   $sayi1  - $sayi2;
	else if($op=='*')
		$sonuc  =   $sayi1 * $sayi2;
	else if($op=='/')
		$sonuc  = $sayi1 / $sayi2
}

?>

<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP Dört İşlem</title> 
    <style>
    	label{
    		display:block;
    	}
    	label input[type='radio']{
    		color:none;
    	}
    	label input[type='radio']+span{
    		color:grey;
    	}
    	label input[type='radio']:checked+span{
    		color:green;
    		font-weight: bold;
    	}
    </style>
</head>
<body>
	<form method="post" action="<?=$_SERVER['PHP_SELF']?>">
    <label for="sayi1">Sayı 1:</label>
    <input name="sayi1" type="text" value="<?=$sayi1?>">
    <label for="sayi2">Sayı 1:</label>
    <input name="sayi2" type="text" value="<?=$sayi2?>">
    <label>
        <input type="radio" name="op" value="+" <?=$op=='+'?'checked':''?>><span>TOPLA</span> 
    </label>
    <label>
        <input type="radio" name="op" value="-" <?=$op=='-'?'checked':''?>><span>ÇIKAR</span>
    </label>
    <label>
        <input type="radio" name="op" value="*" <?=$op=='*'?'checked':''?>><span>ÇARP</span>
    </label>
    <label>
        <input type="radio" name="op" value="/" <?=$op=='/'?'checked':''?>><span>BÖL</span>
    </label>
    <button type="submit" name="islem-yap">İşlem Yap</button>
    </form>
    <h2>İşlem Sonucu: <?=$sonuc?></h2>
</body>
</html>
 