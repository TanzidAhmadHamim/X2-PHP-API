<?php
$url = array(
     "https://drive.google.com/uc?id=1JXqhDn7dpdv9946LqC5pbRqjYSthoAsl",
     "https://drive.google.com/uc?id=1JzbWziwK75R8DcIIWNpPlsLJmGn5WqEP",
     "https://drive.google.com/uc?id=1JYD6e1vkxVLqgPZKOSpkxXXUOpw_hbNg",
     "https://drive.google.com/uc?id=1JqNF2zPuuq9nSyuf2ntdSM9XznekjfiB",
     "https://drive.google.com/uc?id=1K-0JsyNorU-rCimpHytsBGIuR-2_o8Qt",
     "https://drive.google.com/uc?id=1JqNF2zPuuq9nSyuf2ntdSM9XznekjfiB",
     "https://drive.google.com/uc?id=1JzCkq_WrcfiR8c8ZchzI_cIPxJsBKbFl",
     "https://drive.google.com/uc?id=1JBwSwNEhTSH5PKWOfreds1nXWtB3XxZu",
     "https://drive.google.com/uc?id=1JDC_7Neqt2ZnPcZOb30-rbU1TJ52AHsL",
     "https://drive.google.com/uc?id=1JXiBhdHAvuaSJlca2h2SwHW0sasuCAFh"
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