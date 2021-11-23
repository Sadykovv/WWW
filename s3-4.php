<HTML> 
<HEAD> <TITLE> Угадай число </TITLE> </HEAD>  
<BODY> 
<FORM  method="post" action="<?php print $PHP_SELF ?>"> 
  Введите логин: 
  <INPUT type="text" name="a" size="15"> 
  <INPUT type="hidden" name="h" value="Иван"> 
  <INPUT type="hidden" name="h" value="Алишер"> 
  <INPUT type="hidden" name="h" value="Таня">
  <INPUT type="hidden" name="h" value="Света"> 
  <P> <INPUT type="submit" name="obr" value="Проверить"> 
</FORM> 
<?php
if (isset($_POST["obr"])) { 
 if (($_POST["a"]=="Иван")||($_POST["a"]=="Алишер")||($_POST["a"]=="Таня")||($_POST["a"]=="Света")) { echo($_POST["a"]." -Здравствуйте!"); 
  } else { 
  	echo "Вы не зарегистрированы";
    }
    }
?>  
</BODY> 
</HTML>
