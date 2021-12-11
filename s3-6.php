<?php
$nechet =" ";
$chet =" ";
$a=($_POST["a"]);
$length=strlen($_POST["a"]);

for ($i=0;$i<$length;$i++)
	{
		if ($i%2==0)
		$nechet .= "$a[$i]";
		else 
		$chet.="$a[$i]";
	}
$nechet_reverse= strrev($nechet);
$b=$chet. $nechet_reverse;
$b=mb_convert_encoding($b,"UTF-8");
echo $b;
?>

<?php
$string=($_POST["TEXT"]);
$upper=$lower=0;
foreach(str_split($string) as $c){
    if(ctype_upper($c)){
        ++$upper;
    }elseif(ctype_lower($c)){
        ++$lower;
    }
}

if ($upper>$lower){
	$string= mb_convert_case($string, MB_CASE_UPPER, "UTF-8");
	echo $string;
	}
elseif ($upper<$lower) 
{
$string= mb_convert_case($string, MB_CASE_LOWER, "UTF-8");
echo $string;
}
elseif ($upper=$lower)
echo $string;
?>

<?php
$string=($_POST["b"]);
$length=strlen($_POST["b"]);
for ($i=0;$i!=$length;$i++)
{	
	if ($count==3)
	{
		if($place_for_symbol==0)
			$place_for_symbol=$place_for_symbol+$count;
		else 
			$place_for_symbol=$place_for_symbol+$count+1;
		$string=substr_replace($string, "E", $place_for_symbol,0);
		$count=0;
	}
	$count++;

}
echo $string;

echo ("<BR> <A href='s3-6.html'> Вернуться назад </A>"); 
?>





