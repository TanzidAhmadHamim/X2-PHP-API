<?php
$url = array(
"https://i.imgur.com/KEsmg0b.mp4",
"https://i.imgur.com/JtNsW12.mp4",
"https://i.imgur.com/M74pm8l.mp4",
"https://i.imgur.com/mjlhxpg.mp4",
"https://i.imgur.com/kSEJs6q.mp4",
"https://i.imgur.com/LE5rSAd.mp4",
"https://i.imgur.com/H4sgSzB.mp4",
"https://i.imgur.com/s6cIzAo.mp4",
"https://i.imgur.com/hJKVtpO.mp4",
"https://i.imgur.com/CRqLx2d.mp4",
"https://i.imgur.com/L5OXAqi.mp4",
"https://i.imgur.com/LE5rSAd.mp4",
"https://i.imgur.com/H4sgSzB.mp4",
"https://i.imgur.com/s6cIzAo.mp4",
"https://i.imgur.com/hJKVtpO.mp4",
"https://i.imgur.com/VAi8Dme.mp4",
"https://i.imgur.com/uupuSZm.mp4",
"https://i.imgur.com/PoNv0VP.mp4",
"https://i.imgur.com/n0wxAnZ.mp4",
"https://i.imgur.com/lvh9hrc.mp4",
"https://i.imgur.com/D6FeFHD.mp4",
"https://i.imgur.com/zhLqD8p.mp4",
"https://i.imgur.com/VAi8Dme.mp4",
"https://i.imgur.com/uupuSZm.mp4",
"https://i.imgur.com/n0wxAnZ.mp4",
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
