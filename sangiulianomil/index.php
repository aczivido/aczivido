#!/usr/local/bin/php
<?
require("../include/var.inc");
$localpath="/sangiulianomil" ; 
require("../include/counter.inc"); 
?><html>
<head>
<title>San Giuliano Milanese - indice</title>
<link href="/acz.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Stile1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 11px;
	color: #FFFFFF;
}
-->
</style>
</head>
<body>


<div align="right"> 
  <div align="left"> 
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top" bgcolor="#005A87"><img src="/log1.png" width="590" height="97"></td>
      </tr>
      <tr>
        <td align="left" valign="top"><img src="/log2.png" width="100%" height="20"></td>
      </tr>
      <tr>
        <td align="left" valign="top" bgcolor="#005A87"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td width="50%" align="center" valign="middle"><span class="Stile1">aggiornato al 19.04.2010<br>
                <?
$conn=mysql_connect($mysql["ip"],$mysql["userid"],$mysql["pwd"]);
$db=mysql_select_db("aczivido",$conn);
$qry_counter=mysql_query("SELECT * FROM counter WHERE subweb='/sangiulianomil'",$conn);
$counter=mysql_fetch_array($qry_counter);
echo $counter["count"];
mysql_close();
?>
&nbsp;accessi</span></td>
            <td width="50%" align="right" valign="top"><img src="/sangiulianomil/indx.png" width="300" height="48"></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td align="left" valign="top"><img src="/log3.png" width="100%" height="20"></td>
      </tr>
      <tr>
        <td align="left" valign="top" bgcolor="#005A87">&nbsp;</td>
      </tr>
    </table>
    <table width="100%"  border="0" cellpadding="0" cellspacing="0" bgcolor="#005A87">
      <tr>
        <td width="30%" align="left" valign="top">
		  <table width="100%"  border="0" cellspacing="2" cellpadding="0">
            <tr>
              <td align="left" valign="top"><a href="/sangiulianomil/storia/stoindex.php"><img src="/sangiulianomil/storia.png" width="278" height="20" border="0"></a></td>
            </tr>
            <tr>
              <td align="left" valign="top"><a href="/sangiulianomil/chiese/chindex.php"><img src="/sangiulianomil/chiese.png" width="278" height="20" border="0"></a></td>
            </tr>
            <tr>
              <td align="left" valign="top"><a href="/sangiulianomil/frazioni/frindex.php"><img src="/sangiulianomil/frazioni.png" width="278" height="20" border="0"></a></td>
            </tr>
            <tr>
              <td align="left" valign="top"><a href="/sangiulianomil/cascine/cascindex.php"><img src="/sangiulianomil/cascine.png" width="278" height="20" border="0"></a></td>
            </tr>
            <tr>
              <td align="left" valign="top"><a href="/sangiulianomil/mulini/mulindex.php"><img src="/sangiulianomil/mulini.png" width="278" height="20" border="0"></a></td>
            </tr>
            <tr>
              <td align="left" valign="top"><a href="/sangiulianomil/archivio/archindex.php"><img src="/sangiulianomil/archivio.png" width="278" height="20" border="0"></a></td>
            </tr>
            <tr>
              <td align="left" valign="top"><a href="/sangiulianomil/foto/ftindex.php"><img src="/sangiulianomil/image.png" width="278" height="20" border="0"></a></td>
            </tr>
            <tr>
              <td align="left" valign="top"><a href="/sangiulianomil/locstamp/stampindex.php"><img src="/sangiulianomil/stampa.png" width="278" height="20" border="0"></a></td>
            </tr>
            <tr>
              <td align="left" valign="top"><img src="/sangiulianomil/varie.png" width="278" height="20"></td>
            </tr>
          </table>
		  <br></td>
        <td width="70%" align="center" valign="middle"><img src="/sangiulianomil/sgm.png" width="128" height="158"><br>
          <br>        <img src="/sangiulianomil/sgm1.png" width="670" height="55"><br><br>
          <table width="100%"  border="0" cellspacing="0">
            <tr>
              <td align="center" valign="top">&nbsp;</td>
            </tr>
          </table>         </td>
      </tr>
    </table>
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td bgcolor="#005A87">&nbsp;</td>
      </tr>
    </table>
    <table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top"><img src="/log2.png" width="100%" height="20"></td>
      </tr>
      <tr>
        <td align="left" valign="top" bgcolor="#005A87">&nbsp;</td>
      </tr>
      <tr>
        <td align="left" valign="top"><img src="/log3.png" width="100%" height="20"></td>
      </tr>
    </table>
    
  </div>
</div>
<p class="piepagina"><a href="mailto:webmaster@aczivido.net">webmaster@aczivido.net</a></p>
</body>
</html>
