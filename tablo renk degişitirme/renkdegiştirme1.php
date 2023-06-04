<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>PHP Tablo Rengi Değiştirme-1</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
   <form name="kisisel" method="post" action="tablorengidegistirme2.php">
      <table border="1" cellspacing="0">
         <tr>
            <td colspan="2" align="center" bgcolor="#99FF99">Tablo Renk Bilgilerini Giriniz</td>
         </tr>
         <tr>
            <td align="right">Yazı Rengi:</td>
            <td><input type="radio" name="yazi" value="blue" checked="checked" />Mavi<br />
            <input type="radio" name="yazi" value="red" />Kırmızı<br />
            <input type="radio" name="yazi" value="green" />Yeşil<br />
            <input type="radio" name="yazi" value="yellow" />Sarı</td>
         </tr>
         <tr>
            <td align="right">Kenarlık Rengi:</td><td><input type="radio" name="kenarlik" value="blue"  />
              Mavi<br />
              <input type="radio" name="kenarlik" value="red" checked="checked" />
              Kırmızı<br />
              <input type="radio" name="kenarlik" value="green" />
              Yeşil<br />
              <input type="radio" name="kenarlik" value="yellow" />
              Sarı</td>
         </tr>
         <tr>
            <td align="right">Hücre Rengi:</td>
            <td><input type="radio" name="hucre" value="blue" />
              Mavi<br />
              <input type="radio" name="hucre" value="red" />
              Kırmızı<br />
              <input type="radio" name="hucre" value="green" checked="checked" />
              Yeşil<br />
              <input type="radio" name="hucre" value="yellow" />
            Sarı</td>
         </tr>
         <tr>
            <td align="right">&nbsp;</td>
            <td><input type="submit" name="gonder" value="Renkleri Uygula" /></td>
         </tr>
      </table>
   </form>
<br />
</body>
</html>