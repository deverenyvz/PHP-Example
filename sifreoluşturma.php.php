<?php
funtction sifre_al($string = 0,  $uzunluk = 10, $tip = FALSE, $buyuk = FALSE) 
{
	$sifre = md5(uniqid($string));
	if ($tip == "Harf") {
		$sifre = ereg_replace("[0-9]", "", $sifre);
		if ($buyuk) {
			for($i = 0; $i  <strlen($sifre); $i++){
				if ($i%3 == 0) $sifre[$i] = strtoupper($sifre[$i]); {
					$yeni_sifre.=$sifre[$i];
				}
				$sifre = $yeni_sifre;
			} 
		}
		elseif ($tip == "Sayi") {
			$sifre = ereg_replace("[a-z]", "", $sifre);

		}
		$sifre = substr($sifre, 0, $uzunluk);
		return $sifre;
	}
}
echo sifre_al();
?>
