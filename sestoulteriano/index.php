#!/usr/local/bin/php 
<?
require("../include/var.inc");
$localpath="/sestoulteriano";
require("../include/counter.inc");
?><html>
<head> 
<title>Indice</title>
<link href="/acz.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Stile1 {
	font-family: Verdana, Arial, Helvetica, sans-serif;
	font-size: 12px;
	color: #FFFFFF;
}
-->
</style>
</head>
<body> 
<table width="100%"  border="0" cellpadding="0" cellspacing="0" bgcolor="#005A87">
  <tr>
    <td width="70%" align="left" valign="top"><img src="/log1.png" width="590" height="97"></td>
    <td width="30%" align="center" valign="middle"><span class="Stile1">ultimo aggiornamento<br>
13.08.2009<br>
<br>
n.
<?
$conn=mysql_connect($mysql["ip"],$mysql["userid"],$mysql["pwd"]);
$db=mysql_select_db("aczivido",$conn);
$counter=mysql_fetch_array(mysql_query("SELECT count FROM counter WHERE subweb='/sestoulteriano'",$conn));
echo $counter['count'];
mysql_close();
?>
&nbsp;visitatori<br>
dal 26.05.2002</span></td>
  </tr>
</table>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top"><img src="/log2.png" width="100%" height="20"></td>
  </tr>
  <tr>
    <td align="right" valign="top" bgcolor="#D8E6B5"><img src="image/sestologopp.jpg" width="247" height="59"></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="/log3.png" width="100%" height="20"></td>
  </tr>
</table>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="21%" align="left" valign="top" bgcolor="#D8E6B5"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="top"><img src="strega.jpg" width="133" height="159"></td>
      </tr>
    </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="17%"><p>&nbsp;</p></td>
          <td width="66%" align="left" valign="top"><p>Milena Bisacco
              la &quot;strega&quot; condannata 
al rogo (<a href="image/fiera2004/2004fiera01.jpg">ingrandisci</a>) </p></td>
          <td width="17%"><p>&nbsp;</p></td>
        </tr>
      </table>
    </td>
    <td width="4%" bgcolor="#005A87">&nbsp;</td>
    <td width="50%" align="left" valign="top" bgcolor="#005A87"><table width="100%"  border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF">
      <tr>
        <td align="left" valign="top"><p><strong><a href="/sestoulteriano/storia/storiaindx.php">STORIA</a></strong><br>
              <br>
          Le vicende nei secoli di una comunit&agrave; sono spesso interessanti, o importanti, per conoscerne lo sviluppo e le tradizioni, la vita quotidiana ed il suo probabile futuro. Sesto Ulteriano &egrave; la frazione pi&ugrave; popolosa del territorio comunale sangiulianese e nel contempo un centro industriale di grandi proporzioni. La nostra ricerca ed il lavoro di informazione non poteva esimersi dal dedicare a Sesto Ulteriano uno spazio adeguato, nella speranza di fare opera gradita non solo agli abitanti ma anche a coloro che non cessano di ampliare le proprie conoscenze</p></td>
      </tr>
    </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><p>&nbsp;</p></td>
        </tr>
      </table>
      <table width="100%"  border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF">
        <tr>
          <td align="left" valign="top"><p><strong><a href="/sestoulteriano/curios/curiosndx.php">CURIOSITA</a></strong><a href="/sestoulteriano/curios/curiosndx.php">'</a><br>
              <br>
          I piccoli fatti quotidiani, le notizie classificate come &quot;cronaca locale&quot;, aiutano a dare l'immagine reale di una comunit&agrave; in costante evoluzione. E' una storia minore, certo, ma ci coinvolge spesso personalmente.</p></td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><p>&nbsp;</p></td>
        </tr>
      </table>
      <table width="100%"  border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF">
        <tr>
          <td align="left" valign="top"><p><strong><a href="/sestoulteriano/infoto.php">SESTO IN FOTO</a></strong><br>
              <br>
          Anche le immagini fotografiche, vecchie o attuali, contribuiscono a far conoscere un ambiente, una realt&agrave;, e Sesto Ulteriano offre angoli che val la pena di ricordare. Invitiamo i Sestesi ad aiutarci nella ricerca di altre fotografie che testimonino momenti di vita.</p></td>
        </tr>
      </table>
    </td>
    <td width="4%" bgcolor="#005A87">&nbsp;</td>
    <td width="21%" align="left" valign="top" bgcolor="#D8E6B5"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="top"><a href="fiera.php"><img src="image/fieralogo1pp.jpg" width="122" height="119" border="0"></a></td>
      </tr>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
      <tr>
        <td align="center" valign="top"><font face="Verdana, Arial, Helvetica, sans-serif" size="2" color="#006600"><b></b></font></td>
      </tr>
    </table>
    </td>
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

