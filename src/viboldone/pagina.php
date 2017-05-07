#!/usr/local/bin/php
<?
require("../include/var.inc");
$localpath="/viboldone";
require("../include/counter.inc");
?><html>
<head>
<title></title>
<meta name="GENERATOR" content="Microsoft FrontPage 3.0">
<meta name="Microsoft Border" content="none"></head>
<body bgcolor="#FFFFFF">
<table border="0" width="100%" cellspacing="1" cellpadding="0">
  <tr>
    <td width="50%" valign="top" align="center"> 
      <p align="left"><a target="_top" href="largfoto/abbazia/vib01.jpg"><img src="vibold01.jpg" alt="vibold01.jpg (56603 byte)" border="0" WIDTH="261" HEIGHT="302"></a> 
    </td>
    <td width="50%" valign="top" align="center"> 
      <p><font face="Verdana, Arial, Helvetica, sans-serif" size="3"><b>Benvenuti 
        a Viboldone</b></font><font face="Verdana, Arial, Helvetica, sans-serif"><br>
        <font size="2">storica frazione<br>
        della Città di San Giuliano Milanese</font></font></p>
      <hr noshade size="1">
      <p>&nbsp;</p>
      <p><a href="../index.php" target="_blank"><img src="../sangiulianomil/ACZppplogo.JPG"
border="0"></a><br>
        <small><font face="Verdana, Arial, Helvetica, sans-serif" size="1">sito 
        di proprietà dell'<a href="http://www.aczivido.net"
style="color: rgb(0,0,255)" target="_blank"><font color="#0000FF">Associazione 
        Culturale Zivido</font></a><br>
        <a href="mailto:webmaster@aczivido.net" style="color: rgb(0,0,255)"><font color="#0000FF">webmaster@aczivido.net</font></a></font></small></p>
      <p><font face="Verdana" color="#000000"><br>
        </font><font color="#006F00" face="Verdana, Arial, Helvetica, sans-serif" size="1"><small>aggiornato 
        al 27.10.2006</small><br>
        </font>
         
        <?
echo '<small><font color="#006F00" face="Verdana, Arial, Helvetica, sans-serif" size="1"><small>';
$conn=mysql_connect($mysql["ip"],$mysql["userid"],$mysql["pwd"]);
$db=mysql_select_db("aczivido",$conn);
$qry_counter=mysql_query("SELECT * FROM counter WHERE subweb='/viboldone'",$conn);
$counter=mysql_fetch_array($qry_counter);
echo $counter["count"];
mysql_close();
echo "</font></small>";
?>
        <small><font color="#006F00" face="Verdana, Arial, Helvetica, sans-serif" size="1">accessi dal 
        16.08.2001</font></small></p>
    </td>
  </tr>
</table>
</body>
</html>
