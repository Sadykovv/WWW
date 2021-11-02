<?php
$digit=rand(1,500);
$n=0;
$m=0;
$k=0;
for (;pow($n,2.0)<=$digit;++$n)
{
}
$n--;
for (;pow($m,2.0)<=$digit-pow($n,2.0);++$m)
{
}
$m--;
for (;pow($k,2.0)<=$digit-pow($n,2.0)-pow($m,2.0);++$k)
{
}
$k--;
echo ($digit) .'<br>';
echo ($n).'<br>';
echo ($m).'<br>';
echo ($k).'<br>';
if (pow($n,2.0)+pow($m,2.0)+pow($k,2.0)==$digit){
echo ("Yes");}
else {
echo ("NO");
}
?>
