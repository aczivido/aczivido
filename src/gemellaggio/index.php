#!/usr/local/bin/php
<?
require("../include/var.inc");
$localpath="/bussy";
require("../include/counter.inc");
?>
<html>
<head>
<title>Gemellaggio con Bussy Saint-Georges</title>
<link href="/acz.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Stile2 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFFFFF;
}
-->
</style>
</head>
<body>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top" bgcolor="#005A87"><img src="/log1.png" width="590" height="97"></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="/log2.png" width="100%" height="20"></td>
  </tr>
  <tr>
    <td align="right" valign="top" bgcolor="#005A87"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="50%" align="center" valign="middle"><span class="Stile2">n.
            <?
			$conn=mysql_connect($mysql["ip"],$mysql["userid"],$mysql["pwd"]);
			$db=mysql_select_db("aczivido",$conn);
			$qry_counter=mysql_query("SELECT sum(count) FROM counter WHERE subweb='/bussy'",$conn);
			$counter=mysql_fetch_array($qry_counter);
			echo $counter[0];
			mysql_close();
			?>
            visitatori dal 26.03.2007</span></td>
          <td width="50%" align="right" valign="top"><img src="/jumelage.png" width="319" height="59"></td>
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
    <td width="30%" align="left" valign="top"><table width="100%"  border="0" cellspacing="2" cellpadding="0">
        <tr>
          <td align="left" valign="top"><a href="/gemellaggio/comitato.php"><img src="/gemellaggio/comit.png" width="278" height="20" border="0"></a></td>
        </tr>
        <tr>
          <td align="left" valign="top"><a href="/gemellaggio/largeimages/busfoto/album/index.html"><img src="/gemellaggio/busyfoto.png" width="278" height="20" border="0"></a></td>
        </tr>
        <tr>
          <td align="left" valign="top"><a href="/gemellaggio/fotogem.php"><img src="/gemellaggio/gem2007.png" width="278" height="20" border="0"></a></td>
        </tr>
        <tr>
          <td align="left" valign="top"><a href="/gemellaggio/largeimages/2008/album/index.html"><img src="/gemellaggio/alb2008.png" width="278" height="20" border="0"></a></td>
        </tr>
        <tr>
          <td align="left" valign="top"><a href="/gemellaggio/largeimages/2006/album/index.html"><img src="/gemellaggio/alb2006.png" width="278" height="20" border="0"></a></td>
        </tr>
        <tr>
          <td align="left" valign="top"><a href="/gemellaggio/stampindx.php"><img src="/gemellaggio/stampa.png" width="278" height="20" border="0"></a></td>
        </tr>
        <tr>
          <td align="left" valign="top"><a href="/gemellaggio/video.php"><img src="/gemellaggio/video.png" width="278" height="20" border="0"></a></td>
        </tr>
        <tr>
          <td align="left" valign="top"><a href="http://italia.bussy.free.fr/"><img src="/links.png" width="278" height="20" border="0"></a></td>
        </tr>
      </table>
      <img src="/gemellaggio/iconvuota.png" width="278" height="100%"><br>
    </td>
    <td width="70%" align="left" valign="top"><img src="/gemellaggio/icon01.jpg" width="692" height="72"><br>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><p>&nbsp;</p></td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center" valign="top"><img src="/gemellaggio/bussy.jpg" width="600" height="399"></td>
        </tr>
      </table>
      <br></td>
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
<p class="piepagina"><a href="mailto:webmaster@aczivido.net">webmaster@aczivido.net</a></p>
</body>
</html>
