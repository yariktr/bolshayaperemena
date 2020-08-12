<?php session_start(); ?>
<!Doctype html>
<html lang="en">
<link>
	<meta charset="UTF-8">
    <title>ИИ и АЭС в 2020</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<form method="post" action="buizhess.php">
	<div class="line">
          <div class="mm">
                  <img src="http://bolshayaperemena.online/templates/def/img/logo.png" class="kr">
          </div>
          <div class="menu">
              <ul class="lnmn">
                      <li class="l1"><a class="glavnaya" href="index.php">ГЛАВНАЯ</a></li>
                      <li class="l12"><a class="glavnaya" href="buizhess.php">БИЗНЕС-ПОМОЩНИК</a></li>
                      <li class="l123"><a class="glavnaya" href="proekt.php">ПРОЕКТИРОВЩИК</a></li>
                  
            </ul>
          </div>
          </div>
          <div class="maincontenttt">
              <div class="itogg">
                  <div class="jjk">
                      <div class="k1"><span class="chstpr">Чистая прибыль:</span></div>
                      <div class="k2"><span>
                      <?php

$checka1=$_SESSION['checka1'];
$checka2=$_SESSION['checka2'];
$checka3=$_SESSION['checka3'];
$checka4=$_SESSION['checka4'];
$nasel =$_SESSION['nasel'];
$cena = $_SESSION['cena'];
$mosh= $_SESSION['mosh'];
$dolya = $_SESSION['dolya'];
$elek = $_SESSION['elek'];
$rasoth = $_SESSION['rasoth'];
$podgtop = $_SESSION['podgtop'];
$nashe=(100-$dolya)/100;
$nachkap=8000000;
$nasel=($nasel*1000000)/3;
$dohodobh=250 * $cena * $nasel;

$aes = $mosh/1000 * 1.5 * 1000000000;
$nashen= ($aes * $nashe)*3600/1000;
if($checka1="on"){
  $aes = $dolya/100 * $aes;
}


$dohodstr=$aes * $cena;
if($checka3="on"){
  $cenben=37.5;
  $speed=800;
  $rash=12500;
}
if($checka4="on"){
  $cenben=47;
  $speed=80;
  $rash=17;
}
$travelin=($podgtop/$speed) * $rash * $cenben * 2;
$uran=($mosh/1000) * 15000 * 2500;
$personal=$srzp * 3000;
$travelout=($rasoth/$speed) * $rash * $cenben * 2;
$dohodfinal = $dohodstr - ($travelin+$uran+$personal+$travelout+$invest+$star);
echo $dohodfinal." руб.";
?>
                      </span></div>
                  </div>
                  <div class="nashe">
                  <div class="k11"><span class="chstpr">Энергия, доступная России:</span></div>
                      <div class="k2"><span>
                      <?php

$checka1=$_SESSION['checka1'];
$checka2=$_SESSION['checka2'];
$checka3=$_SESSION['checka3'];
$checka4=$_SESSION['checka4'];
$nasel =$_SESSION['nasel'];
$cena = $_SESSION['cena'];
$mosh= $_SESSION['mosh'];
$dolya = $_SESSION['dolya'];
$elek = $_SESSION['elek'];
$rasoth = $_SESSION['rasoth'];
$podgtop = $_SESSION['podgtop'];

$nachkap=8000000;
$nasel=($nasel*1000000)/3;
$dohodobh=250 * $cena * $nasel;

$aes = $mosh/1000 * 1.5 * 1000000000;
$nashe=(100-$dolya)/100;
$nashen= ($aes * $nashe)*3600/1000;

if($checka1="on"){
  $aes = $dolya/100 * $aes;

}

$dohodstr=($aes/(($elek/12) * 1000000000000/3600 + $aes)) * $dohodobh;
if($checka3="on"){
  $cenben=37.5;
  $speed=800;
  $rash=12500;
}
if($checka4="on"){
  $cenben=47;
  $speed=80;
  $rash=17;
}
$travelin=($podgtop/$speed) * $rash * $cenben * 2;
$uran=($mosh/1000) * 15000 * 2500;
$personal=$srzp * 3000;
$travelout=($rasoth/$speed) * $rash * $cenben * 2;
$dohodfinal = $dohodstr - ($travelin+$uran+$personal+$travelout+$invest+$star);
echo $nashen." КВт * ч.";
?>
                      </span></div>
                  </div>
                  <div class="nashe">
                  <div class="k111"><span class="chstpr">Стоимость постройки АЭС окупится за:</span></div>
                      <div class="k2"><span>
                      <?php

$checka1=$_SESSION['checka1'];
$checka2=$_SESSION['checka2'];
$checka3=$_SESSION['checka3'];
$checka4=$_SESSION['checka4'];
$nasel =$_SESSION['nasel'];
$cena = $_SESSION['cena'];
$mosh= $_SESSION['mosh'];
$dolya = $_SESSION['dolya'];
$elek = $_SESSION['elek'];
$rasoth = $_SESSION['rasoth'];
$podgtop = $_SESSION['podgtop'];

$nachkap=8000000;
$nasel=($nasel*1000000)/3;
$dohodobh=250 * $cena * $nasel;
$aes = $mosh/1000 * 1.5 * 1000000000;
$nashe=(100-$dolya)/100;
$nashen= ($aes * $nashe)*3600/1000;

if($checka1="on"){
  $aes = $dolya/100 * $aes;

}



$dohodstr=$aes*$cena;
if($checka3="on"){
  $cenben=37.5;
  $speed=800;
  $rash=12500;
}
if($checka4="on"){
  $cenben=47;
  $speed=80;
  $rash=17;
}
$travelin=($podgtop/$speed) * $rash * $cenben * 2;
$uran=($mosh/1000) * 15000 * 2500;
$personal=$srzp * 3000;
$travelout=($rasoth/$speed) * $rash * $cenben * 2;
$dohodfinal = $dohodstr - ($travelin+$uran+$personal+$travelout+$invest+$star);
$vr = 560000000000/$dohodfinal;

echo $vr." месяцев";
?>
                      </span></div>
                  </div>
              </div>
          </div>
              <footer class="foot">
                  <div class="log">
                    <img src="http://bolshayaperemena.online/templates/def/img/logo_white.png" class="kr2">
                  </div>
               
                  <div class="ots">
                      <ul class="lnmn">
                        <li class="lf"><a class="footr" href="#">О проекте</a></li>
                        <li class="lf"><a class="footr" href="#">О нас</a></li>
                        <li class="lf3"><a class="footr" href="#">Мы всегда на связи</a></li>
                      </ul>
                      </div>
                  </footer>
                  <script src="script.js"></script>
                  <script src="scriptt.js"></script>
</form>
</body>
</html>