<!doctype html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Çarpım Tablosu / eren -  PHP Örnekleri </title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap-theme.min.css">
    </head>
    <body>
    	<div class="container">
    		<form action="<?=$_SERVER['PHP_SELF']?>" method="post">
    			<div class="form-group">
    				<label for="sayi">  Sayı Girin:</label>
    				<input type="text" class="form-control" name="sayi">
                </div>
                <button type="sumbit" name="kontrol" class="btn btn-default">ÇALIŞTIR</button>
            </form>
    		
    	</div>

    	<div class="container">
    		<table class="table table-striped">
    			<?php
    			if (isset($_POST["kontrol"])) {
    				$sayi1=_POST["sayi"];
    				for ($i=1; $i <10; $i++) { 
    					echo "<tr>";
                        echo "<td>$sayi</td><td> * </td><td>$i</td><td>=</td><td>".$i*$sayi."</td>";
                        echo "</tr>";
    				}
    			}
    			?>
    		</table>
    	</div>
    </body>
</html>    