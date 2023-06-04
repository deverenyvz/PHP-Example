<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Tablo Rengi Değiştirme-1</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<?php
$yazi=$_POST['yazi'];
$kenarlik=$_POST['kenarlik'];
$hucre=$_POST['hucre'];
?>
<table border="1" cellspacing="0">
  <tr>
    <td colspan="2" bgcolor="#FF99FF">Formdan Gelen Renk Bilgileri</td>
  </tr>
  <tr>
    <td>Yazı Rengi:</td>
    <td bgcolor="<?php echo $yazi; ?>"><?php echo $yazi; ?></td>
  </tr>
  <tr>
    <td>Kenarlık Rengi:</td>
    <td bgcolor="<?php echo $kenarlik; ?>"><?php echo $kenarlik; ?></td>
  </tr>
  <tr>
    <td>Hücre Rengi:</td>
    <td bgcolor="<?php echo $hucre; ?>"><?php echo $hucre; ?></td>
  </tr>
</table>
<p><A HREF="javascript:javascript:history.go(-1)">Geri dön</A>
  <br />
</p>
<p>Renk Uygulanmış Tablo<br />
  
  
</p>
<font color="<?php echo $yazi; ?>">
<table border="1" cellpadding="5" cellspacing="0" bordercolor="<?php echo $kenarlik; ?>" bgcolor="<?php echo $hucre; ?>">
  <tr>
    <td>Bilişim</td>
    <td>Konuları</td>
    <td>Bilişim</td>
    <td>Konuları</td>
    <td>Bilişim</td>
  </tr>
  <tr>
    <td>Konuları</td>
    <td>Bilişim</td>
    <td>Konuları</td>
    <td>Bilişim</td>
    <td>Konuları</td>
  </tr>
  <tr>
    <td>Bilişim</td>
    <td>Konuları</td>
    <td>Bilişim</td>
    <td>Konuları</td>
    <td>Bilişim</td>
  </tr>
  <tr>
    <td>Konuları</td>
    <td>Bilişim</td>
    <td>Konuları</td>
    <td>Bilişim</td>
    <td>Konuları</td>
  </tr>
  <tr>
    <td>Bilişim</td>
    <td>Konuları</td>
    <td>Bilişim</td>
    <td>Konuları</td>
    <td>Bilişim</td>
  </tr>
</table>
</font>
</body>
</html>