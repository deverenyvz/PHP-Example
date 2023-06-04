<html xmlns="https://www.w3.org/1999/xhtml">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>PHP Tek Sayı Çift Sayı-2</title>
</head>

<body>
	<p>
		<?php
		$yazili1=$_POST['yazili1'];
		$yazili2=$_POST['yazili2'];
		$performans1=$_POST['performans1'];
		$performans2=$_POST['performans2'];

		$ortalama=($performans1 + $yazili2 + $performans2 + $performans2) / 4;
		if ($ortalama < 50) {
			$sonuc="Dersten Kaldınız";
		}
		else{
			$sonuc="Dersten Geçtiniz";
		}
		?>
	</p>
	<table border="0" bgcolor="#9933FF">
		<tr>
			<td>1.Yazılı Notu:</td>
			<td><strong><?php echo $yazili1; ?></strong></td>
		</tr>
		<tr>
			<td>2.Yazılı Notu:</td>
			<td><strong><?php echo $yazili2; ?></strong></td>
		</tr>
		<tr>
			<td>1.Performans Notu:</td>
			<td><strong><?php echo $yazili2; ?></strong></td>
		</tr>
		<tr>
			<td>2.Performans Notu:</td>
			<td><strong><?php echo $yazili2; ?></strong></td>
		</tr>
		<tr bgcolor="#FFFFFF">
			<td>--</td>
			<td></td>
		</tr>
		<tr>
			<td>Ders Ortalaması:</td>
			<td><strong> <?php echo $ortalama; ?></strong></td>
		</tr>
		<tr>
			<td>Ders Sonucu:</td>
			<td><strong><?php echo $sonuc; ?></strong></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>&nbsp;</td>
		</tr>
	</table>
	<p><A HREF="javascript:javascript:history.go(-1)">Geri dön</A></p>
</body>
</html>