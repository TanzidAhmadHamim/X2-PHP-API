<?php
$url = array(
"https://i.pinimg.com/564x/d7/12/97/d712975bde7cd6e26c330df58e103042.jpg",
"https://i.pinimg.com/564x/59/fb/cb/59fbcbc9c5432b4c71e8ccf70ee6bdbe.jpg",
"https://i.pinimg.com/564x/8f/f3/ca/8ff3cab51eac6822fd282455cc532d16.jpg",
"https://i.pinimg.com/564x/8c/a5/7d/8ca57d99e362d7b234dcdbaa89c72796.jpg",
"https://i.pinimg.com/564x/c1/f1/5b/c1f15b02fe69608fd32bb3a04146b614.jpg",
"https://i.pinimg.com/564x/73/85/d0/7385d00badc511db73fe752729f51e11.jpg",
"https://i.pinimg.com/564x/14/fe/68/14fe6881932b5be1d38969202d99fdc7.jpg",
"https://i.pinimg.com/564x/7b/09/56/7b0956da12f2c5358173ba353145621d.jpg",
"https://i.pinimg.com/564x/27/36/f4/2736f4206ab70a9d988b1a617d7f135d.jpg",
"https://i.pinimg.com/564x/78/bf/11/78bf1135d4bf7096dc5aae9e90a01d79.jpg",
"https://i.pinimg.com/564x/ca/30/d6/ca30d6a5fa7741996544a0142dffabd9.jpg",
"https://i.pinimg.com/564x/ab/14/e3/ab14e304394554050b613c4d30e3622e.jpg",
"https://i.pinimg.com/564x/75/8f/2c/758f2cbf31bb0854d4bb18b5a5833965.jpg",
"https://i.pinimg.com/564x/ae/4d/56/ae4d56e84a2fb01d24e443d7e1994b0b.jpg",
"https://i.pinimg.com/564x/1d/da/07/1dda07d9fba0f64c44f44bb4ef72cdc2.jpg",
"https://i.pinimg.com/564x/e6/25/bf/e625bfedf3bf3f818973ecafa2111653.jpg",
"https://i.pinimg.com/564x/75/f7/04/75f704f08789b95571daa1dae782779a.jpg",
"https://i.pinimg.com/564x/ce/c7/8f/cec78fb0b9a72b31600b97eca7567b94.jpg",
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