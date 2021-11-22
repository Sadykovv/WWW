<?php
 if ($_POST["a"]>$_POST["b"])  
   echo ("Наибольшее число:".$_POST["a"]); 
  elseif ($_POST["a"]<$_POST["b"])  
 echo ("Наибольшее число:".$_POST["b"]);  
 elseif ($_POST["a"]=$_POST["b"])
 echo ("Числа равны");

 echo ("<BR> <A href='s3-1.html'> Вернуться назад </A>"); 
?> 
