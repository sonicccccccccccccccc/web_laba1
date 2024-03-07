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
foreach ($mas as $val){
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

echo"\n";
//task 15
function printStringReturnNumber($string): int{
    echo "\n$string";
    return 111;
}
$myNum = printStringReturnNumber("Строка:");
echo "myNum = $myNum";

echo"\n";
//task 16
function increaseEnthusiasm($string): string{
    return $string."!";
}
$mystr = increaseEnthusiasm("8952812");
echo $mystr;
echo "\n";
function repeatThreeTimes($string): string{
    return str_repeat($string, 3);
}
$mystr = repeatThreeTimes("8952812");
echo $mystr;
echo "\n", increaseEnthusiasm(repeatThreeTimes("8952812"));

function cut($str, $length = 10){
    return substr($str, 0, $length);
}
echo "\n", cut("5200000052111", 10);

function printMas($mas, $index = 0){
    if ($index < count($mas)){
        echo $mas[$index] . " ";
        printMas($mas, $index + 1);
    }
}
$mas2 = [1, 2, 3, 4, 5];
echo"\n",printMas($mas2);

function summacifr($int){
    $sum = 0;
    while ($int > 0){
        $sum += $int % 10;
        $int = (int)($int / 10);
    }
    if ($sum > 9){
        return summacifr($sum);
    }
    return $sum;
}
$summ = summacifr(525252);
echo "\n",$summ;

echo "\n";
//task 17
function arrayFill($val, $qua){
    $array = [];
    for ($i = 0; $i < $qua; $i++){
        $array[] = str_repeat($val, $i + 1);
    }
    return $array;
}

foreach (arrayFill("x", 5) as $g4) echo "\n$g4";

$array =  [[1, 2, 3], [4, 5], [6]];
function sum(array $mas): int{
    $zer = 0;
    foreach ($mas as $array){
        foreach ($array as $chisl) {
            $zer += $chisl;
        }
    }
    return $zer;
}
echo"\nСумма элементов:",sum($array);

$mas = [];
$count = 1;
for ($i = 0; $i < 3; $i++) {
    $subArray = [];
    for ($j = 0; $j < 3; $j++) {
        $subArray[] = $count++;
    }
    $mas[] = $subArray;
}
foreach ($mas as $subArray){
    echo "\n";
    echo "[";
    $lastIndex = count($subArray) - 1;
    foreach ($subArray as $index => $value){
        echo $value;
        if ($index !== $lastIndex){
            echo ", ";
        }
    }
    echo "]";
}

$array = [2, 5, 3, 9];
$result = ($array[0]*$array[1])+($array[2]*$array[3]);
echo "\nРезультат сложения произведений:$result";

$user = ['name'=>'Alexey','surname'=>'Eschenko','patronymic'=>'Andreevich'];
echo "\nЭтот человек хочет зачёт: ", $user['surname'] . ' ' . $user['name'] . ' ' . $user['patronymic'];

$date = ['year' => date('2004'), 'month' => date('05'), 'day' => date('21')];
echo "\n",$date['year'] . '-' . $date['month'] . '-' . $date['day'];

$arr = ['a', 'b', 'c', 'd', 'e'];
echo "\nКоличество элементов массива:",count($arr);
echo"\n";
echo"Последний и предпоследний:$arr[4],$arr[3]";

echo"\n";
//task 18
function odinplusdva($int1, $int2){
    if ($int1 + $int2 > 10)
        return "Cумма двух чисел больше 10 - true";
    else
        return "Сумма двух чисел меньше 10 - false";
}
$int12 = odinplusdva(5, 2);
echo"\n",$int12;

function odinravnodva($int1, $int2){
    if ($int1 == $int2)
        return "Числа равны - true";
    else
        return "Числа разные - false";
}
$int121 = odinravnodva(5, 2);
echo"\n",$int121;
echo"\n";

$test =0;
if ($test == 0) echo 'верно';

$age = 37;
if ($age <10 or $age>99)
    echo "Вам меньше 10 или больше 99 лет";
else
    $sum = 0;
while ($age > 0){
    $sum += $age % 10;
    $age = (int)($age / 10);
}
if ($sum > 9) echo"\nсумма цифр двузначная:$sum";
else echo"\nсумма цифр однозначная:$sum";

$arr = [1,2,3];
if (count($arr) == 3)
    echo"\nСумма элементов массива:",array_sum($arr);

echo"\n";
//task 19
$ryadi = 20;
$zer = 0;
$st = "x";
while($zer<$ryadi){
    echo "\n",$st;
    $st = $st."x";
    $zer +=1;
}