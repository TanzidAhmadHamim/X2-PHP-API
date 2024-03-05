<?php
$url = array(
"https://i.imgur.com/l1shN1W.gif",
"https://i.imgur.com/tnovURv.gif",
"https://i.imgur.com/e6IEwzg.gif",
"https://i.imgur.com/fWCJmEj.gif",
"https://i.imgur.com/hwt71Li.gif",
"https://i.imgur.com/SZsj1Bd.gif",
"https://i.imgur.com/DaKws14.gif",
"https://i.imgur.com/Glotp9N.gif",
"https://i.imgur.com/5frDSwr.gif",
"https://i.imgur.com/yeDjQFK.gif",
"https://i.imgur.com/BHtfdwx.gif",
"https://i.imgur.com/XJIBhAw.gif",
"https://i.imgur.com/pTUhMhJ.gif",
"https://i.imgur.com/iOaDXGY.gif",
"https://i.imgur.com/wY3W1hU.gif",
"https://i.imgur.com/VAoTtjb.gif",
"https://i.imgur.com/vL3vlvK.gif",
"https://i.imgur.com/igOGwLr.gif",
"https://i.imgur.com/fWpi1oX.gif",
"https://i.imgur.com/Avih7pz.gif",
"https://i.imgur.com/8sFE4d5.gif",
"https://i.imgur.com/IRTEJR7.gif",
"https://i.imgur.com/p2zs9pG.gif",
"https://i.imgur.com/h5EKUEw.gif",
"https://i.imgur.com/aiogsW4.gif",
"https://i.imgur.com/oZRIkn4.gif",
"https://i.imgur.com/rNN5alH.gif",
"https://i.imgur.com/QLhG5ZB.gif",
"https://i.imgur.com/9GVXl8s.gif",
"https://i.imgur.com/32JxoqB.gif",
"https://i.imgur.com/4UJWo8b.gif",
"https://i.imgur.com/uFmtH36.gif",
"https://i.imgur.com/zemGZ28.gif",
"https://i.imgur.com/QbmVOFK.gif",
"https://i.imgur.com/ysQrrA6.gif",
"https://i.imgur.com/hoTj0yO.gif",
"https://i.imgur.com/YHaPGpB.gif",
"https://i.imgur.com/Ux3d1iP.gif",
"https://i.imgur.com/jXk7Pbg.gif",
"https://i.imgur.com/xUeYgAq.gif",
"https://i.imgur.com/1XQvrd0.gif",
"https://i.imgur.com/gS2MvN3.gif",
"https://i.imgur.com/cC0tSOH.gif",
"https://i.imgur.com/2EdwW9f.gif",
"https://i.imgur.com/7kbtwEo.gif",
"https://i.imgur.com/TRiWr5O.gif",
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