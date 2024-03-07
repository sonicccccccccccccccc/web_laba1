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

echo "\n";
//task 14
$a= 10;
$b= 3;
$k = $a%$b;

if($k === 0)
    echo "Делится нацело";
else
    echo "Делится с остатком, остаток равен $k";

$st = pow(2,10);
echo "\n$st";

$sqrt = sqrt(245);
echo"\n$sqrt";

$mas = [4, 2, 5, 19, 13, 0, 10];
$sum = 0;
foreach ($mas as $val) {
    $sum += $val ** 2;
}

$sqrt2 = sqrt($sum);
echo "\n$sqrt2";
echo "\nКвадратный корень из 379: ", sqrt(379);
echo "\nРезультат округлен до целых: ", round(sqrt(379));
echo "\nРезультат округлен до десятых: ", round(sqrt(379), 1);
echo "\nРезультат округлен до сотых: ", round(sqrt(379), 2);

echo "\nКорень квадратный из 587: ", sqrt(579);
$round = ["floor" => floor(sqrt(587)), "ceil" => ceil(sqrt(587))];
echo "\nОкругление в меньшую сторону: ", $round["floor"];
echo "\nОкругление в большую сторону: ", $round["ceil"];

$mas =[4, -2, 5, 19, -130, 0, 10];
$minA = min($mas);
$maxA = max($mas);
echo "\nМинимальный $minA, максимальный $maxA";

echo"\nРандомное число: ", rand(1,100);
$zer = 0;
$mas = [];
echo"\nМассив с рандомными чисалми: ";
while ($zer < 10) {
    Array_push($mas, rand());
    $zer += 1;
}
foreach($mas as $g1) echo "$g1 ";

$a = 10;
$b = 11;
$abs = abs($a-$b);
echo "\nМодуль разности: $abs";
echo"\nТрансформер массив: ";
$mas1 = [1, 2, -1, -2, 3, -3];
$nmas1 = array_map('abs',$mas1);
foreach($nmas1 as $g2) echo "$g2 ";

$cm = 30;
echo"\nДелители числа $cm: ";
$mas30 = [];
for ($i = 1; $i <= $cm; $i++)
    if ($cm%$i === 0)
        Array_push($mas30, $i);
foreach($mas30 as $g3) echo "$g3 ";

$num = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$sum = 0;
$zer = 0;
while ($sum<=10){
    $sum += $num[$zer];
    $zer += 1;
}
echo"\nЧтобы сумма была больше 10, нужно сложить $zer первых чисел";