<HTML>
<BODY>
<TABLE border=1>
<?php
for ($i=1; $i<=10; $i++) { 
 echo ("<tr>"); 
 for ($m=1; $m<=10; $m++) {
 echo ("<td align=center>"); 
 $a=++$a;
if (($a % 2) == 0) { echo ( "<font color='#FF0000'>$a</font>"); }
 else {echo ($a); } 
echo ("</td>");
} 
 echo ("</tr>"); 
}
?>
</TABLE>
</BODY>
</HTML>
