<?php
$url = array(
"https://i.postimg.cc/XYywzsp3/02d4453f3eb0a76a87148433395b3ec3.gif",
"https://i.postimg.cc/G37G3WDd/574fcc7979b6f-1533876767756310501023.gif",
"https://i.postimg.cc/XqzC25Wp/574fcc797b21e-1533876813029926506824.gif",
"https://i.postimg.cc/DZ5sXDYQ/574fcc92e98c3-1533876840028170363441.gif",
"https://i.postimg.cc/yYD9DLh9/Crafty-Live-Junco-size-restricted.gif",
"https://i.postimg.cc/NFJ1WV6G/dedac9ceaace3856b6fe85522579fb88.gif",
"https://i.imgur.com/oXRW1XU.gif",
"https://i.imgur.com/jKE00VP.gif",
"https://i.imgur.com/e0ep0v3.gif",
"https://i.imgur.com/lmY5soG.gif",
"https://i.imgur.com/IgGumrf.gif",
"https://i.imgur.com/wQjUdnZ.gif",
"https://i.imgur.com/YbNv10F.gif",
"https://i.imgur.com/TItLfqh.gif",
"https://i.imgur.com/sGVgr74.gif",
"https://i.imgur.com/So3TIVK.gif",
"https://i.imgur.com/uLFoTzB.gif",
"https://i.imgur.com/tMRtNZo.gif",
"https://i.imgur.com/1sq3s21.gif",
"https://i.imgur.com/22SacNE.gif",
"https://i.imgur.com/eAtr65v.gif",
"https://i.imgur.com/XQRdm49.gif",
"https://i.imgur.com/4AaMn5E.gif",
"https://i.imgur.com/QqtVl6T.gif",
"https://i.imgur.com/So3TIVK.gif",
"https://i.imgur.com/sGVgr74.gif",
"https://i.imgur.com/TItLfqh.gif",
"https://i.imgur.com/YbNv10F.gif",
"https://i.imgur.com/wQjUdnZ.gif",
"https://i.imgur.com/IgGumrf.gif",
"https://i.imgur.com/lmY5soG.gif",
"https://i.imgur.com/e0ep0v3.gif",
"https://i.imgur.com/jKE00VP.gif",
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
