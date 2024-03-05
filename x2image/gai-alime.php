<?php
$url = array(
"https://i.imgur.com/8KhWKLO.jpeg",
 "https://i.imgur.com/MyiAlcp.jpeg",
 "https://i.imgur.com/PtkfTkV.jpeg",
 "https://i.imgur.com/S9MxfnF.jpeg",
 "https://i.imgur.com/kvoHErQ.jpeg",
 "https://i.imgur.com/PMiM73S.jpeg",
 "https://i.imgur.com/o1veaeO.jpeg",
 "https://i.imgur.com/R2zVm7Z.jpeg",
 "https://i.imgur.com/ZJsvsY9.jpeg",
 "https://i.imgur.com/moNUxsN.jpeg",
 "https://i.imgur.com/UN9z88o.jpeg",
 "https://i.imgur.com/8ISvGFc.jpeg",
 "https://i.imgur.com/aEOkBBl.jpeg",
 "https://i.imgur.com/NyTEc99.jpeg",
 "https://i.imgur.com/PCCWoJE.jpeg",
 "https://i.imgur.com/l8wf546.jpeg",
 "https://i.imgur.com/1mCtC4k.jpeg",
 "https://i.imgur.com/o8YRjWC.jpeg",
 "https://i.imgur.com/f395SOy.jpeg",
 "https://i.imgur.com/kkogznu.jpeg",
 "https://i.imgur.com/B0QnISK.jpeg",
 "https://i.imgur.com/06lq0Lt.jpeg",
 "https://i.imgur.com/4HifSBa.jpeg",
 "https://i.imgur.com/NvdMSTP.jpeg",
 "https://i.imgur.com/EmBYzzb.jpeg",
 "https://i.imgur.com/4458hBt.jpeg",
 "https://i.imgur.com/K9A5LH4.jpeg",
 "https://i.imgur.com/UGTLFCl.jpeg",
 "https://i.imgur.com/B4ekDAD.jpeg",
 "https://i.imgur.com/6CPD4xD.jpeg",
 "https://i.imgur.com/vwKo46m.jpeg",
 "https://i.imgur.com/2Nxy5JK.jpeg",
 "https://i.imgur.com/t6yk71a.jpeg",
 "https://i.imgur.com/iIwb5qP.jpeg",
 "https://i.imgur.com/kssub61.jpeg",
 "https://i.imgur.com/zM9dbFk.jpeg",
 "https://i.imgur.com/xf8gQmY.jpeg",
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