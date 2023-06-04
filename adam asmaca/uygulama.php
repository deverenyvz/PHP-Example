<?php
//ilk ayarlar
include "baglan.php";
include "adam.php";
 
session_start();
$harfler=[  'a','b','c','ç','d','e','f','g','ğ','h','ı',
            'i','j','k','l','m','n','o','ö','p','r','s',
            'ş','t','u','ü','v','y','z',' '];
$sembol="*";
 
$_SESSION["kelime"]=$_SESSION["kelime"]??NULL;
$_SESSION["kelime_ekran"]=$_SESSION["kelime_ekran"]??NULL;
$_SESSION["hak"]=$_SESSION["hak"]??0;
 
if(isset($_GET["uret"])){
    baslat();
}
 
if(isset($_GET["harf"])){
    hak_arttir($_GET["harf"],$_SESSION["kelime"]);
    doldur($_GET["harf"]);
}
//fonksiyonlar
 
function baslat(){
    $kelime = kelime_sec();
    $_SESSION["kelime"] = harf_dizi($kelime);
    $_SESSION["kelime_ekran"] = bos_dizi($kelime);
    $_SESSION["hak"]=0;
}
 
function kelime_sec(){
    global $baglan;
    $sonuc = $baglan->query("SELECT * FROM `kelimeler` ORDER BY RAND() LIMIT 1");
    return $sonuc->fetch()["kelime"];
 
}
 
function harf_dizi($kelime){
    $dizi=[];
    $uzunluk = mb_strlen($kelime);
    for ($i=0; $i <$uzunluk ; $i++) { 
        $harf = mb_substr($kelime,$i,1);
        $dizi[]=$harf;
    }
    return $dizi;
}
 
function bos_dizi($kelime){
    global $sembol;
    $dizi=[];
    $uzunluk = mb_strlen($kelime);
    for ($i=0; $i <$uzunluk ; $i++) { 
        $harf = mb_substr($kelime,$i,1);
        $dizi[]=$sembol;
    }
    return $dizi;
}
 
function kelime_yaz($dizi){
    $metin="";
    foreach ($dizi as $key => $deger) {
        $metin.=$deger;
    }
    return $metin;
}
 
function buton_olustur(){
    global $harfler;
    foreach ($harfler as $key => $value) {
        echo '<a href="?harf='.$value.'" class="m-1 btn btn-warning">'.$value.'</a>';
    }
}
function hak_arttir($harf,$kelime){
    $durum = in_array($harf,$kelime);
    if($durum ===false)
        $_SESSION["hak"]++;
}
 
function doldur($harf){
 
    foreach ($_SESSION["kelime"] as $key => $value) {
        if($value == $harf){
            $_SESSION["kelime_ekran"][$key]=$value;
        }
    }
}
function adam_ciz(){
    global $adam;
    echo "<pre>";
    echo $adam[$_SESSION["hak"]];
    echo "<pre>";
}
 
function harf_kaldi_mi(){
    global $sembol;
    $durum = in_array($sembol,$_SESSION["kelime_ekran"]);
    return $durum;
}
///PHP kodları
?>
<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <title>TasarımKodlama</title>
</head>
<body>
<div class="container">
<div class="row">
    <div class="col">
        <a class="btn btn-secondary my-2" href="?uret=1">Kelime Üret</a>
    </div>
</div>
<div class="row">
    <div class="col">
        <hr>
        <?=$_SESSION["hak"]?>
        <hr>
        <div class="alert alert-warning" >
            <?= kelime_yaz($_SESSION["kelime_ekran"])?>
        </div>
        <hr>
        <?php adam_ciz() ?>
        <hr>
    </div>
</div>
<div class="row">
    <div class="col">
        <?php
        if($_SESSION["hak"] <6 && harf_kaldi_mi()){
            buton_olustur();
        }else if($_SESSION["hak"] <6)
        {
            echo '<div class="alert alert-success" role="alert">Tebrikler</div>';
        }
        else{
            echo '<div class="alert alert-danger" role="alert">Aranan Kelime: '.
            kelime_yaz($_SESSION["kelime"])
            .'</div>';
        }
 
        ?>
    </div>
</div>
</div>
</body>
</html>