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
