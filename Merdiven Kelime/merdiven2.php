<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Merdivenli Yazdırma-2</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
 
<body>
<?php
$metin=$_POST['metin'];
 
 
$uzunluk= strlen($metin);
 
?>
 
<table width="435" border="1" bgcolor="#FFFF66">
  <tr bgcolor="#00CCCC">
    <td colspan="2" align="center">PHP Rastgele Sayı Üretme</td>
  </tr>
  <tr bgcolor="#99FF66">
    <td width="206">Girilen Metin:</td>
    <td width="213"><?php echo $metin; ?></td>
  </tr>
  <tr bgcolor="#CC9966">
    <td colspan="2">
<?php 
for ($i=0;$i<=$uzunluk;$i++)
{
	$yaz=substr($metin, 0, $i );
	echo $yaz . "<br>";
}
 
?>  
    
    
    
    
    </td>
  </tr>
</table>
<A HREF="javascript:javascript:history.go(-1)">Geri dön</A>
<br />
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- BannerKucuk -->
<ins class="adsbygoogle"
     style="display:inline-block;width:468px;height:60px"
     data-ad-client="ca-pub-2151654795043080"
     data-ad-slot="8393636475"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</body>
</html>