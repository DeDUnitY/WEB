<?php
echo "<pre>";
function PrintArr($arr)
{
    foreach($arr as $value) {
        foreach($value as $val){
            echo $val."\n";
        }
    }
}
// task1

$regular1 = '/a..b/';
$str1 = 'ahb acb aeb aeeb adcb axeb';

preg_match_all($regular1, $str1, $res);

PrintArr($res);


// task1
$regular2 = '/[0-9]+/';

$str2 = 'a1b2c3';

function cube($n) {
    return $n[0] ** 3;
}

echo preg_replace_callback($regular2, "cube", $str2), "\n";