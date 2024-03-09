<?php
echo "<style>h3 {margin: 0px;} </style>";
echo "<pre>";

// task 1
echo "<h3>task 1:</h3>";
$very_bad_unclear_name = "15 chicken wings";

$order = &$very_bad_unclear_name;
$order .= ", but have some new letters";

echo "\nYour order is: $very_bad_unclear_name.\n";

// task 2
echo "<h3>task 2:</h3>";
$ilya = 2;
echo $ilya;
echo "\n";

$eho_odna = 3.14;
echo $eho_odna;
echo "\n";

echo $ilya * 6;
echo "\n";

$last_month = 1187.23;
$this_month = 1089.98;
echo "разница: " . ($last_month - $this_month);
echo "\n";

// task 3
echo "<h3>task 3:</h3>";
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days / $num_languages;
echo $days_per_language;
echo "\n";

// task 4
echo "<h3>task 4:</h3>";
echo 8 ** 2;
echo "\n";

// task 5
echo "<h3>task 5:</h3>";
$my_num = 64;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo $answer;
echo "\n";

// task 6
echo "<h3>task 6:</h3>";
$a = 10;
$b = 3;
echo $a % $b . "\n";

if (0 === $a % $b) {
    echo "Делится\n";
} else {
    echo "Делится с остатком: " . ($a % $b) . "\n";
}
$st = pow(2, 10);
echo "2**10: " . $st . "\n";
$sq = sqrt(245);
echo "корень из 245: " . $sq . "\n";
$mass = [4, 2, 5, 19, 13, 0, 10];
$res = 0;
foreach ($mass as $i) {
    $res += pow($i, 2);
}
$res = sqrt($res);
echo "корень из суммы квадратов элементов: " . $res . "\n";

echo round(sqrt(349), 0) . " " . round(sqrt(349), 1) . " " . round(sqrt(349), 2) . "\n";
$ce = ceil(sqrt(587));
$fl = floor(sqrt(587));
$Arr = [
    "ceil" => $ce,
    "floor" => $fl,
];

$mass = [4, -2, 5, 19, -130, 0, 10];
echo min($mass) . "\n";
echo max($mass) . "\n";

echo "случайное число: " . rand(1, 100) . "\n";
$massRand = [];
echo "случайные числа: ";
for ($i = 0; $i < 10; $i++) {
    $ArrayOfRandNum[$i] = rand(1, 100);
    echo $ArrayOfRandNum[$i] . " ";
}
echo "\n";
$a = rand(1, 50);
$b = rand(50, 100);
echo "модуль разности: " . abs($a - $b) . "\n";

$mass1 = [1, 2, -1, -2, 3, -3];
$mass2 = [];
echo "Новый массив: ";
for ($i = 0; $i < 6; $i++) {
    $mass2[$i] = abs($mass1[$i]);
    echo $mass2[$i] . " ";
}
echo "\n";

$num1 = 99;
$numOfDel = [];
for ($i = 1; $i <= $num1; $i++) {
    if (0 === $num1 % $i) {
        $numOfDel[] = $i;
    }
}
echo "Делители: ";
for ($i = 0; $i < count($numOfDel); $i++) {
    echo $numOfDel[$i] . " ";
}
echo "\n";

$mass = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$counter = 0;
$i = 0;
while ($counter <= 10) {
    $counter += $mass[$i];
    $i++;
}
echo "Необходимо " . $i . " чис(ла\ел) из массива\n";

// task 7
echo "<h3>task 7:</h3>";
$my_str = "test";
function PrintStringReturnNumber($Item)
{
    return strlen($Item);
}
// task 8
echo "<h3>task 8:</h3>";
$my_num = PrintStringReturnNumber($my_str);
echo $my_str . " : " . $my_num . "\n";

function IncreaseEnthusiasm($Item)
{
    return "$Item" . "!";
}

echo IncreaseEnthusiasm($my_str) . "\n";

function RepeatThreeTimes($Item)
{
    return $Item . " " . $Item . " " . $Item;
}

echo RepeatThreeTimes($my_str) . "\n";
echo IncreaseEnthusiasm(RepeatThreeTimes($my_str)) . "\n";
echo RepeatThreeTimes(IncreaseEnthusiasm($my_str)) . "\n";

function Cut($str, $end = 10)
{
    return substr_replace($str, "", $end, strlen($str) - $end);
}

echo Cut($my_str, 2) . "\n";

function PrintArr($arr, $i = 0)
{
    echo $arr[$i] . " ";
    if (array_key_last($arr) > $i) {
        PrintArr($arr, ++$i);
    }
}

PrintArr($mass);

function SumOfNumbers(int $num)
{
    $res = 0;
    while ($res != 0) {
        $res += $num % 10;
        $num = intdiv($num, 10);
    }
    if ($res > 9) {
        $res = SumOfNumbers($res);
    }
    return $res;
}

echo SumOfNumbers(1743) . "\n";
