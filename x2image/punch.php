<?php
$url = array(
"https://img-cdn.2game.vn/pictures/images/2016/5/30/onehit_30_5_2016_1.GIF",
"https://img-cdn.2game.vn/pictures/images/2016/5/30/onehit_30_5_2016_3.GIF",
"https://img-cdn.2game.vn/pictures/images/2016/5/30/onehit_30_5_2016_6.GIF",
"https://img-cdn.2game.vn/pictures/images/2016/5/30/onehit_30_5_2016_8.GIF",
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