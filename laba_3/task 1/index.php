<?php //task 1 a)
$str= 'abba adca abea aaaa abcd';
$sample= '/a[a-z][a-z]a/ui';
$matches= array();
preg_match_all($sample,$str,$matches);
foreach($matches[0] as $match)
{
    echo $match,"\n";
}
echo "\n";//task 1 b)
$str= 'a1b2c3';
function third_degree($matches)
{
    return pow($matches[0],3);
}
$pattern= ['/[0-9]/u' => 'third_degree'];
//туплю чет:( забыл изначально квадратные скобки поставить так что пришлось искать шаблон //d
$output= preg_replace_callback_array($pattern,$str);
echo $output;
