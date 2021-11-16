<?php
$arr=array();
$x=rand(0,10);
echo "Исходный массив:";
for ($i=0;$i<=$x;$i++)
{
	$arr[$i]=rand(-5,15);
}
print join(" ",$arr)."<br>";
for ($i=0;$i<=$x;$i++)
{
	if ($arr[$i]<=-2)
	{
		for($i=0;$i<=$x;$i++)
		{
		
			if ($arr[$i]<0)
			{
				$arr[$i]=pow($arr[$i],2);
			}
		
		}
	}
}
echo "Скорректированный массив:";
print join(" ",$arr)."<br>";
?>

