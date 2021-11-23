<HTML> 
<HEAD> <TITLE></TITLE> </HEAD>  
<BODY> 
<FORM  method="post" action="<?php print $PHP_SELF ?>"> 
  Калькулятор  
  <P> Введите два числа<BR> 
  а: <INPUT type="text" name="a" size="3"> 
  b: <INPUT type="text" name="b" size="3">  
  <SELECT  NAME="z" SIZE="1"> 
    <OPTION  VALUE="1"  SELECTED> сложить
    <OPTION  VALUE="2"> вычесть
    <OPTION  VALUE="3"> умножить 
    <OPTION  VALUE="4"> разделить
  </SELECT> 
  <P> <INPUT type="submit" name="obr" value="Вперед!"> 
</FORM> 
<?php
if (isset($_POST["obr"])) 
{ 
	switch ($_POST["z"]) {
	case 1:
	$s1=$_POST["a"]+$_POST["b"];
	break;
	case 2:
	$s1=$_POST["a"]-$_POST["b"];
	break;
	case 3:
	$s1=$_POST["a"]*$_POST["b"];
	break;
	case 4:
	$s1=$_POST["a"]/$_POST["b"];
	break;
	}
	}
echo ($s1); 
?>  
</BODY> </HTML>
