<?php
$url = array(
"https://i.postimg.cc/KjLJwR7q/1.gif",
"https://i.postimg.cc/PJkmLKZy/13599182.gif",
"https://i.postimg.cc/y8nnMq9H/54674ada39121def8036f8183aa47c7c.gif",
"https://i.postimg.cc/zfBp5dSR/91fea1737989a057137c3c07df8560cf.gif",
"https://i.postimg.cc/JnXN4Syt/detail.gif",
"https://i.postimg.cc/xdhGQ91W/detail-1.gif",
"https://i.postimg.cc/43mvjYs6/detail-2.gif",
"https://i.postimg.cc/zvnFp454/oVtB5Ze.gif",
"https://i.postimg.cc/DZ4g48Nv/tumblr-m742cbe-Lyr1rat3p6o1-500.gif",
"https://i.postimg.cc/gkWDrcHp/tumblr-mju1prx-Ox-T1rke3fuo1-400.gif",
"https://i.postimg.cc/FHFVgP6n/tumblr-mxten51-GCl1smtpyco1-500.gif",
"https://i.postimg.cc/htCbCLW4/tumblr-n66ny2-AOCN1tck5t9o1-500.gif",
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