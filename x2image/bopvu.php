<?php
$url = array(
"https://i.postimg.cc/tC2BTrmF/3.gif",
"https://i.postimg.cc/pLrqnDg4/78d07b6be53bea612b6891724c1a23660102a7c4.gif",
"https://i.postimg.cc/gJFD51nb/detail.gif",
"https://i.postimg.cc/xjPRxxQB/GiC86RK.gif",
"https://i.postimg.cc/L8J3smPM/tumblr-myzq44-Hv7-G1rat3p6o1-500.gif",
);
$x2 = array_rand($url);
$x2vip = $url [$x2];
$trai = array(
"data" => $x2vip,
"author" => "X2",
"success" => "true",
);
$rdimg = json_encode($trai);

$i = ['\/v\/','\/','X2 IS HERE'];
$t = ['/v/','/','X2 IS HERE'];
$j = str_replace($i, $t, $rdimg);
echo $j;