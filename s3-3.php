<HTML> 
<HEAD> <TITLE></TITLE> </HEAD>  
<BODY> 
<FORM  method="post" action="<?php print $PHP_SELF ?>"> 
  Калькулятор  
  <P> Выберите операцию и введите конец диапазона (1 до N)<BR> 
  N: <INPUT type="text" name="N" size="3">  
  <SELECT  NAME="z" SIZE="1"> 
    <OPTION  VALUE="1"  SELECTED> четные
    <OPTION  VALUE="2"> нечетные
    <OPTION  VALUE="3"> простые
    <OPTION  VALUE="4"> составные
  </SELECT> 
  <P> <INPUT type="submit" name="obr" value="Вперед!"> 
</FORM> 
<?php
if (isset($_POST["obr"])) 
{ 
	switch ($_POST["z"]) {
	case 1:
	for ($i=1;$i<=$_POST["N"];$i++)
	{	
		if ($i%2==0)
		echo $i." ";
	}
	break;
	case 2:
	for ($i=1;$i<=$_POST["N"];$i++)
	{	
		if ($i%2==1)
		echo $i." ";
	}
	break;
	case 3:
	for ($i=1;$i<$_POST["N"];$i++)
		{
			$prime=true;
			for ($j=2;$j<$_POST["N"];$j++)
			{

				if ($_POST["N"]%$j==0)
			{
				$prime=false;
				break;
			}
			}
			if( $prime)
				echo $i;	
				
		}
		
break;
	case 4:
	$s1=$_POST["a"]/$_POST["b"];
	break;
	}
	}
?>  
</BODY> </HTML>
