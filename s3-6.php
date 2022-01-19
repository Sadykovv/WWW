<?php header ('Content-type:text/html;charset=windows-1251');
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
echo $b;
?>

<?php
 $mass = str_split($_POST["TEXT"]);
    $lol = iconv_strlen($_POST["TEXT"], 'UTF-8');
    $CountUpp = 0;
    $CountDown = 0;
    for ($i = 0; $i < $lol; $i++) {
        $mass[$i] = iconv("windows-1251","UTF-8", $mass[$i]);
        if ($mass[$i] === strtoupper($mass[$i])) {
            $CountUpp++;
        } else {
            $CountDown++;
        }
    }
    if ($CountUpp > $CountDown) {
        echo strtoupper($_POST["TEXT"]);
    } elseif ($CountUpp < $CountDown) {
        echo strtolower($_POST["TEXT"]);
    } else {
        echo $_POST["TEXT"];
    }
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





