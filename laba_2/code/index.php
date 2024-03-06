<?php  //task 1
/* Imagine a lot of code here */
$very_bad_unclear_name = "15 chicken wings";


// Write your code here:
$order =& $very_bad_unclear_name;
$order.= " from McDonald's with love ";


// Don't change the line below
echo "\nYour order is: $very_bad_unclear_name.";

//task 2
$a = 6;
echo "\n$a";
$b = 2;
echo "\n$b";
$c = $a * $b;
echo "\n$c";

$last_month = 1187.23;
$this_month = 1089.98;
$w = $last_month - $this_month;
echo "\nНасколько больше я потратил в прошлом месяце, чем в этом месяце? На $w ";

echo "\n";
//task 11
$num_languages = 4;
$months = 11;
$days = $months * 16;
$days_per_language = $days/$num_languages;
echo "Сколько дней в среднем у мэг ушло на изучение каждого языка? $days_per_language дня(дней) в среднем";

echo "\n";
//task 12
echo 8**2;

echo "\n";
//task 13
$my_num = 100;
$answer = $my_num;
$answer += 2;
$answer *= 2;
$answer -= 2;
$answer /= 2;
$answer -= $my_num;
echo "\nОтвет: $answer";
