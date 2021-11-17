<?php 
echo "<p style ='color:red'>Вывод условия задачи в окне браузера</p>";
echo "Просуммировать элементы двумерного массива, сумма индексов которых равна заданной 
константе." ;
echo "<p style ='color:red'>Заполнение двумерного массива</p>";

$arr=array();
$n=rand(1,15);
$t=rand(1,15);
	for ($i=0;$i<$n;$i++)
	{
		for ($j=0;$j<$t;$j++)
		{
			$arr[$i][$j]=rand(1,15);
		}
	}
echo "Вывод массива в виде таблицы";
?>
<HTML>
<BODY>
<TABLE border=1>
<?php
	for ($i=0;$i<$n;$i++)
	{
	echo ("<tr>");
		for ($j=0;$j<$t;$j++)
		{
			echo ("<td align=center>");
			echo ($arr[$i][$j]);
			echo ("</td>");
		}
		echo("</tr>");
	}
?>
</TABLE>
</BODY>
</HTML>
<?php
echo "Обработка массива согласно варианту задания 15:"."<br>";
?>
<?php
$h=6;
if ($h>0){
for ($i=0;$i<$n;$i++)
	{
		for ($j=0;$j<$t;$j++)
		{
			if ($i+$j==$h)
			{
				$s+=$arr[$i][$j];
				echo ($s)."<br>";
			}
		
		
        }
}
}
if ($s>0){
echo "Сумма равна"."<br>";
echo ($s);
}else
{ echo "0";
}
?>
</TABLE>
</BODY>
</HTML>


