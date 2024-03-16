<?php //task 1 a)
$str= 'abba adca abea aaaa abcd';
$sample= '/a[a-z][a-z]a/ui';
$matches= array();
preg_match_all($sample,$str,$matches);
foreach($matches[0] as $match)
{
    echo $match,"\n";
}

