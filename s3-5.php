<HTML> 
<HEAD> <TITLE></TITLE> </HEAD>  
<BODY> 
<FORM  method="post" action="<?php print $PHP_SELF ?>"> 
  Анкета "Ваш характер" <BR>
  Введите ваше имя <BR>
  <INPUT type="text" name="z" size="15"> <BR>
  Ответьте да или нет на следующие вопросы: <BR> 
  1. Считаете ли вы, что у многих ваших знакомых хороший характер <BR>
  да <INPUT type="radio" name="a" value="da" CHECKED>  нет <INPUT type="radio" name="a" value="net">  <BR>
 

  
  2. Раздражают ли вас мелкие повседневные обязанности? <BR>
  да <INPUT type="radio" name="b" value="da" CHECKED>  нет <INPUT type="radio" name="b" value="net">  <BR>
  
 
  3. Верите ли вы, что ваши друзья преданы вам?<BR>
  да <INPUT type="radio" name="c" value="da" CHECKED>  нет <INPUT type="radio" name="c" value="net">  <BR>
 


  4. Неприятно ли вам, когда незнакомы человек делает вам замечанее<BR>
  да <INPUT type="radio" name="d" value="da" CHECKED>  нет <INPUT type="radio" name="d" value="net">  <BR>

 
  5. Способны ли вы ударить собаку или кошку?(OH MY GOD)<BR>
  да <INPUT type="radio" name="e" value="da" CHECKED>  нет <INPUT type="radio" name="e" value="net">  <BR>
 

  6. Часто ли Вы принимаете лекарства? (OH MY GOD)<BR>
  да <INPUT type="radio" name="f" value="da" CHECKED>  нет <INPUT type="radio" name="f" value="net">  <BR>
 

  7. Часто ли Вы меняете магазин, в который ходите за продуктами?<BR>
  да <INPUT type="radio" name="g" value="da" CHECKED>  нет <INPUT type="radio" name="g" value="net">  <BR>
  

  8. Продолжаете ли Вы отстаивать свою точку зрения, поняв, что ошиблись?<BR>
  да <INPUT type="radio" name="h" value="da" CHECKED>  нет <INPUT type="radio" name="h" value="net">  <BR>
 

  9. Тяготят ли Вас общественные обязанности?<BR>
  да <INPUT type="radio" name="i" value="da" CHECKED>  нет <INPUT type="radio" name="i" value="net">  <BR>

  10. Способны ли Вы ждать более 5 минут, не проявляя беспокойства?  <BR>
  да <INPUT type="radio" name="j" value="da" CHECKED>  нет <INPUT type="radio" name="j" value="net">  <BR>

  11. Часто ли Вам приходят в голову мысли о Вашей невезучести? <BR>
  да <INPUT type="radio" name="k" value="da" CHECKED>  нет <INPUT type="radio" name="k" value="net">  <BR>

 
  12.Сохранилась ли у Вас фигура по сравнению с прошлым?  <BR>
  да <INPUT type="radio" name="l" value="da" CHECKED>  нет <INPUT type="radio" name="l" value="net">  <BR>
 
  13. Можете ли Вы с улыбкой воспринимать подтрунивание друзей?<BR>
  да <INPUT type="radio" name="m" value="da" CHECKED>  нет <INPUT type="radio" name="m" value="net">  <BR>
  
  14. Нравится ли Вам семейная жизнь?  <BR>
  да <INPUT type="radio" name="n" value="da" CHECKED>  нет <INPUT type="radio" name="n" value="net">  <BR>
 
  15. Злопамятны ли Вы? <BR>
  да <INPUT type="radio" name="o" value="da" CHECKED>  нет <INPUT type="radio" name="o" value="net">  <BR>
 
  16. Находите ли Вы, что стоит погода, типичная для данного времени года? <BR>
  да <INPUT type="radio" name="p" value="da" CHECKED>  нет <INPUT type="radio" name="p" value="net">  <BR>
 
  17. Случается ли Вам с утра быть в плохом настроении? <BR>
  да <INPUT type="radio" name="q" value="da" CHECKED>  нет <INPUT type="radio" name="q" value="net">  <BR>
 
  18. Раздражает ли Вас современная живопись? <BR>
  да <INPUT type="radio" name="r" value="da" CHECKED>  нет <INPUT type="radio" name="r" value="net">  <BR>
 
  19. Надоедает ли Вам присутствие чужих детей в доме более одного часа? <BR>
  да <INPUT type="radio" name="s" value="da" CHECKED>  нет <INPUT type="radio" name="s" value="net">  <BR>
  
  20. Надоедает ли Вам делать лабораторные по PHP?<BR>
  да <INPUT type="radio" name="t" value="da" CHECKED>  нет <INPUT type="radio" name="t" value="net">  <BR>

  <P> <INPUT type="submit" name="obr" value="Проверить"> 
</FORM> 
<?php
if (isset($_POST["obr"])) { 
 if ($_POST["c"]=="da")  
  	$k+=1;
 if ($_POST["i"]=="da")  
  	$k+=1;
  if ($_POST["j"]=="da")  
  	$k+=1;
 if ($_POST["m"]=="da")  
  	$k+=1;
  if ($_POST["n"]=="da")  
  	$k+=1;
 if ($_POST["s"]=="da")  
  	$k+=1;	
   if ($_POST["a"]=="net")  
  	$k+=1;
 if ($_POST["b"]=="net")  
  	$k+=1;
  if ($_POST["d"]=="net")  
  	$k+=1;
 if ($_POST["e"]=="net")  
  	$k+=1;
  if ($_POST["f"]=="net")  
  	$k+=1;
 if ($_POST["g"]=="net")  
  	$k+=1;
   if ($_POST["h"]=="net")  
  	$k+=1;
 if ($_POST["k"]=="net")  
  	$k+=1;
  if ($_POST["l"]=="net")  
  	$k+=1;
 if ($_POST["o"]=="net")  
  	$k+=1;
  if ($_POST["p"]=="net")  
  	$k+=1;
 if ($_POST["q"]=="net")  
  	$k+=1;
  if ($_POST["r"]=="net")  
  	$k+=1;
 if ($_POST["t"]=="net")  
  	$k+=1;
  echo $_POST["z"]."<br>";
  echo $k."<br>";		
  if ($k>15)
  echo "МЕГА ХАРОШ,ПОКЛАДИСТЫЙ ХАРАКТЕР";
  if ($k>=8 && $k<=15)
  echo "C вами можно ладить, с недостатками, но с кем не бывает.";
  if ($k<8)
  echo "У тебя нет друзей, сочувствую";
 echo ("<BR> <A href='s3-5.php'> Вернуться назад </A>"); 
 }
?>  
</BODY> 
</HTML>
