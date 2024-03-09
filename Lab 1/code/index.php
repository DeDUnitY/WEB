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
$days = $months*16;
$days_per_language = $days/$num_languages;
echo $days_per_language;
echo "\n";

// task 4
echo "<h3>task 4:</h3>";
echo 8**2;
echo "\n";

// task 5
echo "<h3>task 5:</h3>";
$my_num = 64;
$answer = $my_num;
$answer +=2;
$answer *=2;
$answer -=2;
$answer /=2;
$answer -=$my_num;
echo $answer;
echo "\n";
