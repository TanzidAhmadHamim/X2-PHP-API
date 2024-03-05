<?php
$url = array(
"https://i.imgur.com/TCWfRmm.gif",
"https://i.imgur.com/4vRl6pd.gif",
"https://i.imgur.com/OjRlq03.gif",
"https://i.imgur.com/YZ2x8ec.gif",
"https://i.imgur.com/L0EY2D5.gif",
"https://i.imgur.com/erDJ2bj.gif",
"https://i.imgur.com/U5rD5sn.gif",
"https://i.imgur.com/CtX1NsL.gif",
"https://i.imgur.com/nyW7OCg.gif",
"https://i.imgur.com/ynCmfeC.gif",
"https://i.imgur.com/ckr1IMS.gif",
"https://i.imgur.com/dXFLFLX.gif",
"https://i.imgur.com/pHTPVib.gif",
"https://i.imgur.com/fQ4nIPa.gif",
"https://i.imgur.com/gEb5QPO.gif",
"https://i.imgur.com/63UbnXT.gif",
"https://i.imgur.com/2aReyQt.gif",
"https://i.imgur.com/1loDPG2.gif",
"https://i.imgur.com/vI4Cot5.gif",
"https://i.imgur.com/E0WV6Ox.gif",
"https://i.imgur.com/EJrM7cg.gif",
"https://i.imgur.com/knKVnVF.gif",
"https://i.imgur.com/9E8Xv8m.gif",
"https://i.imgur.com/RSi9gAO.gif",
"https://i.imgur.com/LI983Iv.gif",
"https://i.imgur.com/2lZWYhE.gif",
"https://i.imgur.com/noftD75.gif",
"https://i.imgur.com/ebdayhH.gif",
"https://i.imgur.com/UZMBk0r.gif",
"https://i.imgur.com/gsPly6i.gif",
"https://i.imgur.com/abdSfLb.gif",
"https://i.imgur.com/GFh10yK.gif",
"https://i.imgur.com/ACyBlDg.gif",
"https://i.imgur.com/VkHzzes.gif",
"https://i.imgur.com/F9t0Fqi.gif",
"https://i.imgur.com/QdFKizJ.gif",
"https://i.imgur.com/pUSFgPL.gif",
"https://i.imgur.com/xjnnatC.gif",
"https://i.imgur.com/UIYbfSK.gif",
"https://i.imgur.com/7j8JXJh.gif",
"https://i.imgur.com/SstyXpN.gif",
"https://i.imgur.com/BRyk4mg.gif",
"https://i.imgur.com/rJXSCdt.gif",
"https://i.imgur.com/CmTXeSZ.gif",
"https://i.imgur.com/hrxnyNC.gif",
"https://i.imgur.com/DtYs8Eo.gif",
"https://i.imgur.com/K406Mly.gif",
"https://i.imgur.com/CaQ66Ok.gif",
"https://i.imgur.com/yLVfYoC.gif",
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