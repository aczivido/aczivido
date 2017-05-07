#!/usr/local/bin/php
<?
require("../include/var.inc");
$localpath="/borgo";
require("../include/counter.inc");
?><html>
<head> 
<title>Borgolombardo - indice</title>
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
    <td width="30%" align="center" valign="middle"><span class="Stile1">ultimo aggiornamento 21.07.2008&nbsp;<br>
n.
    <?
$conn=mysql_connect($mysql["ip"],$mysql["userid"],$mysql["pwd"]);
$db=mysql_select_db("aczivido",$conn);
$qry_counter=mysql_query("SELECT count FROM counter WHERE subweb='/borgo'",$conn);
$counter=mysql_fetch_array($qry_counter);
echo $counter["count"];
mysql_close();
?>
    accessi dal 28.06.2004&nbsp;</span></td>
  </tr>
</table>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top"><img src="/log2.png" width="100%" height="20"></td>
  </tr>
  <tr>
    <td align="right" valign="top" bgcolor="#FBFB00"><img src="logoborg.jpg" width="255" height="40"></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="/log3.png" width="100%" height="20"></td>
  </tr>
</table>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="21%" align="left" valign="top" bgcolor="#FBFB00"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="12%">&nbsp;</td>
          <td width="76%" align="center" valign="top"><img src="/borgo/maxband.png" width="142" height="484"></td>
          <td width="12%" align="center">&nbsp;</td>
        </tr>
      </table>
      <br>
    <br></td>
    <td width="4%" bgcolor="#005A87">&nbsp;</td>
    <td width="50%" align="left" valign="top"><table width="100%"  border="0" cellpadding="0" cellspacing="5" bgcolor="#B9DCFF">
      <tr>
        <td align="left" valign="top"><p>Una targa, posta all'ingresso di Borgolombardo, dal ponte sul Redefossi, avverte che il borgo fu costruito il 29 giugno 1929 da Luigi Volont&egrave;. Egli infatti acquist&ograve; dei terreni nel 1925 dai marchesi Litta-Modigliani, che li avevano ereditati dal senatore Eugenio Venini, sindaco di San Giuliano dal 1857 al 1863. Comperati i terreni Luigi Volont&egrave;, in intraprendente costruttore edile, si adoper&ograve; a far sorgere un villaggio-giardino, formato da villette unifamiliari a basso costo, corredate ognuna da orto e giardino. Per s&egrave; e la sua famiglia il Volont&egrave; si costru&igrave; una villa in stile medievale, in tono con i nomi che il fondatore di Borgolombardo volle dare alla sua creatura: via delle Crociate, Carroccio, Alberto da Giussano, Pontida, Battaglia di Legnano, Parlamento, Cavalieri. Tutti nomi legati alle vicende della Lega Lombarda antimperiale. L'idea del villaggio-giardino era buona e l'iniziativa ebbe successo, con la costruzione e vendita di moltissime villette, oltre ad altri caseggiati pi&ugrave; grossi. I nuovi abitanti erano quasi tutti operai che lavoravano nelle fabbriche milanesi con una forte politicizzazione in senso antifascista, aiutata in ci&ograve; da molti perseguitati politici che vi andavano ad abitare. Dopo l'8 settembre 1943 un folto gruppo di giovani, legati organizzativamente al partito comunista clandestino attraverso il proselitismo fatto da Pietro e Sergio Ricaldone, padre e figlio, abitanti alle Case Nuove del Bettolino, decise di partire da questa frazione verso la montagna, per combattere contro i nazifascisti. Alto &egrave; stato il contributo della frazione di Borgolombardo alla Resistenza, con giovani fucilati, morti o internati nei campi di concentramento in Germania e decine di partigiani combattenti. In loro ricordo l'amministrazione comunale ha eretto in Borgolombardo un monumento alla Resistenza inaugurato il 25 aprile 1987, opera dell'artista cileno Mario Tapia, cittadino sangiulianese da molti anni. Durante la guerra i Volont&egrave; aprirono la loro villa ad aule scolastiche e all'asilo infantile, oltre ad adibire un locale per la celebrazione della SS. Messa, tenuta da frati Francescani. Ottenuta la dispensa a diventare parrocchia, nel 1950 venne don Mario Scandroglio, primo parroco nella chiesa dedicata ai SS. Pietro e Paolo. Don Scandroglio, insieme a Luigi Volont&egrave;, si adoper&ograve; per far sorgere una chiesa degna della frazione, che nel frattempo continuava a crescere. La nuova parrocchiale venne inaugurata il 1&deg; novembre 1953, alla presenza del cardinale Ildefonso Schuster, arcivescovo di Milano. Il 29 giugno 1954, festivit&agrave; dei SS. Pietro e Paolo, patroni della frazione, fece il suo ingresso come nuovo parroco don Vincenzo Moroni, sostituito poi nel 1983 da don Antonio Sfondrini (dal 12 giugno 1994 &egrave; parroco don Fidelmo Xodo - nota Associazone Culturale Zivido). Oggi Borgolombardo ha perso la sua primitiva origine di Villaggio-giardino per assumere quello di grossa frazione, senza perdere per&ograve; la sua essenza originaria d'insediamento popolare. Nel quartiere sono sorte le nuove scuole elementari, inaugurate nel 1955; le scuole Medie e l'asilo infantile in via Giovanni XXIII; un Centro sociale polivalente nell'ex asilo Mantegazza; un Centro ricreativo delle ACLI.<br>
          (da Luciano Previato, &quot;San Giuliano Milanese, una storia da raccontare&quot; 1989)</p></td>
      </tr>
    </table>      </td>
    <td width="4%" bgcolor="#005A87">&nbsp;</td>
    <td width="21%" align="left" valign="top" bgcolor="#FBFB00"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="top"><img src="/borgo/corte.jpg" width="158" height="202"></td>
      </tr>
    </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="10%">&nbsp;</td>
          <td width="80%"><p><a href="/borgo/image/corte2004/album/index.html">2004</a> - <a href="/borgo/image/corte2005/album/index.html">2005</a> - <a href="/borgo/image/corte2006/album/index.html">2006</a> - <a href="/borgo/image/corte2007/album/index.html">2007</a> <a href="/borgo/video.php">2008</a></p></td>
          <td width="10%">&nbsp;</td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td align="center" valign="top"><img src="/borgo/damviv.jpg" width="166" height="99"></td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td width="10%">&nbsp;</td>
          <td width="80%" align="left" valign="top"><h1>La Dama Vivente</h1></td>
          <td width="10%">&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/borgo/dama01.php">2003</a> - <a href="/borgo/dama02.php">2004</a> - <a href="/borgo/image/damvi2005/album/index.html">2005</a> - <a href="/borgo/image/damvi2006/album/index.html">2006</a> - <a href="/borgo/image/damvi2007/album/index.html">2007</a> - </p></td>
          <td><p>&nbsp;</p></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left" valign="top"><h1>Video</h1></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/borgo/video.php">Guarda</a></p></td>
          <td><p>&nbsp;</p></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left" valign="top">&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td align="left" valign="top"><h1>Echi di stampa</h1></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/borgo/echi.php">Sfoglia</a></p></td>
          <td><p>&nbsp;</p></td>
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
