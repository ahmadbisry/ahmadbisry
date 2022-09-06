<?php

//desimal
$desimal = @$_GET['desimal'];
$hex = dechex($desimal);
$bin = decbin($desimal);
$oct = decoct($desimal);


//binary
$binary = @$_GET['binary'];
$deci = bindec($binary);
$hexa = bindec($binary);
$hitunghex = dechex($hexa);
$octa = bindec($binary);
$hitungoct = decoct($octa);

//hexa
$hexad = @$_GET['hexad'];
$decim = hexdec($hexad);
$bina = hexdec($hexad);
$hitungbinary = decbin($bina);
$octall = hexdec($hexad);
$hitungoctall = decoct($octall);

 
//octal
$octaal = @$_GET['octaal'];
$decima = octdec($octaal);
$binar = octdec($octaal);
$hitungbinar = decbin($binar);
$hexam = octdec($octaal);
$hitunghexam = dechex($hexam);

?>