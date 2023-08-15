<?php 

$e = 2.08 * pow(10, 11);
$l = 0.25;
$b = 0.01;
$h = 0.2 * pow(10, -2);
$rho = 7810;
$x = 0;
$xOne = $l/3;
$xTwo = (2*$l)/3;
$cOne = 600;
$cTwo = 600;
$etaOne = 3/8;
$etaTwo = 1/(2*pi());
$j = ($b * pow($h, 3))/12;
$uK = sin((pi()*$x)/$l);
$uOne = sin((pi()/$l)*$xOne);
$uOne = sin((pi()/$l)*$xTwo);
$ms = $l*$b*$h*$rho;
$mZero = $ms/$l;
$pI = pow((pi()/$l), 2) * sqrt(($e * $j)/$mZero);
$mOne = ($ms*4)/100;
$mTwo = ($ms*4)/100;
$muOne = $mOne/$ms;
$muTwo = $mTwo/$ms;
$nOne = sqrt($cOne/$mOne);
$nTwo = sqrt($cTwo/$mTwo);
$wZero = 0.1;
$rOne = 0;
$rTwo = 0.2;
$vOne = 0.15;
$vTwo = 0.3;
echo($mTwo);
?>