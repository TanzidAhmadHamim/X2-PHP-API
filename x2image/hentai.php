<?php
$url = array(
"https://i.postimg.cc/02xWht3p/240527720-153472986999489-1827619954791027325-n-1.gif",
"https://i.postimg.cc/xCX8fy45/240527720-153472986999489-1827619954791027325-n-10.gif",
"https://i.postimg.cc/3wMKTQHL/240527720-153472986999489-1827619954791027325-n-11.gif",
"https://i.postimg.cc/661xKxrd/240527720-153472986999489-1827619954791027325-n-12.gif",
"https://i.postimg.cc/hjy6KVdS/240527720-153472986999489-1827619954791027325-n-13.gif",
"https://i.postimg.cc/Y0QPYZPS/240527720-153472986999489-1827619954791027325-n-14.gif",
"https://i.postimg.cc/SK515mFs/240527720-153472986999489-1827619954791027325-n-15.gif",
"https://i.postimg.cc/zBg2Y48k/240527720-153472986999489-1827619954791027325-n-16.gif",
"https://i.postimg.cc/133W38yX/240527720-153472986999489-1827619954791027325-n-2.gif",
"https://i.postimg.cc/zDwpwCB3/240527720-153472986999489-1827619954791027325-n-3.gif",
"https://i.postimg.cc/Wz9kWbCY/240527720-153472986999489-1827619954791027325-n-4.gif",
"https://i.postimg.cc/mZVC28k3/240527720-153472986999489-1827619954791027325-n-5.gif",
"https://i.postimg.cc/SK0ztP14/240527720-153472986999489-1827619954791027325-n-6.gif",
"https://i.postimg.cc/7ZSLbZXv/240527720-153472986999489-1827619954791027325-n-7.gif",
"https://i.postimg.cc/yNB8RCrD/240527720-153472986999489-1827619954791027325-n-8.gif",
"https://i.postimg.cc/0N2r3qGL/240527720-153472986999489-1827619954791027325-n-9.gif",
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
