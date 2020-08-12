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
          <div class="maincontentttt">
              <div class="itogg">
                  <div class="jjk">
                      <div class="k111"><span class="chstpr">Шаг ТВЭЛа:</span></div>
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



$shag = $_SESSION['shag'];
$d2 = $_SESSION['d2'];
$shtv = $shag * $d2;
echo $shtv." м.";
?>
                      </span></div>
                  </div>
                  <div class="nashe">
                  <div class="k111"><span class="chstpr">Внутренний радиус ТВЭЛа:</span></div>
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


$vt = $nasel/2;
echo $vt." м.";
?>
                      </span></div>
                  </div>
                  <div class="nashe">
                  <div class="k111"><span class="chstpr">Наружный радиус ТВЭЛа:</span></div>
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



$d2=$_SESSION['d2'];
$tttt=$d2/2;
echo $tttt." м.";
?>
                      </span></div>
                  </div>
                  <div class="nashe">
                  <div class="k111"><span class="chstpr">Радиус оболочки ТВЭЛа:</span></div>
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


$podgtop = $_SESSION['podgtop'];
$d2 = $_SESSION['d2'];
$nasel =$_SESSION['nasel'];
$dd1 = ($d2 - 2 * $podgtop)/2;
$dd2 = ($nasel - 2 * $podgtop)/2;
echo "Внеш.: ".$dd1." ,Внутр.: ".$dd2;
?>
                      </span></div>
                  </div>
                  <div class="nashe">
                  <div class="k111"><span class="chstpr">Наружный и внутренний диаметр сердечника:</span></div>
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



$podgtop = $_SESSION['podgtop'];
$d2 = $_SESSION['d2'];
$nasel =$_SESSION['nasel'];
$dd1 = ($d2 - 2 * $podgtop)/2;
$dd2 = ($nasel - 2 * $podgtop)/2;
$ser1 = 0.0093;
$ser2= 0.0137;
echo "Внутр.: ".$ser1." ,Внеш.: ".$ser2;

?>
                      </span></div>
                  </div>
                  <div class="nashe">
                  <div class="k111"><span class="chstpr">Средний диаметр газового зазора в ТВЭЛе:</span></div>
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



$podgtop = $_SESSION['podgtop'];
$d2 = $_SESSION['d2'];
$nasel =$_SESSION['nasel'];
$dd1 = ($d2 - 2 * $podgtop)/2;
$dd2 = ($nasel - 2 * $podgtop)/2;
$ser1 = 0.0093;
$ser2= 0.0137;
$ggg = ($dd2*2 + $ser2)*0.5;
echo $ggg." м.";

?>
                      </span></div>
                  </div>
                  <div class="nashe">
                  <div class="k111"><span class="chstpr">Площадь ячейки ТВС:</span></div>
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



$mosh = $_SESSION['mosh'];
$f = 6 * sqrt(1/3) * $mosh * $mosh/4;
echo $f." м^2";
?>
                      </span></div>
                  </div>
                  <div class="nashe">
                  <div class="k111"><span class="chstpr">Площадь, занимаемая ТВЭЛом, полой трубкой:</span></div>
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




$podgtop = $_SESSION['podgtop'];
$d2 = $_SESSION['d2'];
$nasel =$_SESSION['nasel'];
$dd1 = ($d2 - 2 * $podgtop)/2;
$dd2 = ($nasel - 2 * $podgtop)/2;
$ser1 = 9.3;
$ser2= 13.7;
$ggg = ($dd2*2 + $ser2)*0.5;

$srzp = $_SESSION['srzp'];
$rasoth = $_SESSION['rasoth'];
$hj = 3.14/4 * (217*($dd2*4*$dd2 - $dd1*2) + $srzp*$srzp * $rasoth + 0.016*0.016);
echo $hj." м^2";
?>
                      </span></div>
                  </div>
                  <div class="nashe">
                  <div class="k111"><span class="chstpr">Тепловой поток:</span></div>
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


$invest = $_SESSION['invest'];
$ty = (1.5*80374)/$invest;
echo $ty." Вт/м";
?>
                      </span></div>
                  </div>
                  <div class="nashe">
                  <div class="k111"><span class="chstpr">Коэффициент запаса до кризиса теплообмена:</span></div>
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



echo " 2.01";
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