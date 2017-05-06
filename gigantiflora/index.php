<?
require("include/var.inc");
$localpath="/gigantiflora";
require("include/counter.inc");
?>
<html>
<head>
<title>GigantiFlora home page</title>
<link href="/gigantiflora/gigantiflora.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="right" valign="top"><h1>Associazione Culturale Zivido</h1></td>
  </tr>
  <tr>
    <td align="right" valign="top"><h5>ultimo aggiornamento 28.02.2007<br>
        n.
        <?
$conn=mysql_connect($mysql["ip"],$mysql["userid"],$mysql["pwd"]);
$db=mysql_select_db("aczivido",$conn);
$qry_counter=mysql_query("SELECT sum(count) FROM counter WHERE subweb='/gigantiflora'",$conn);
$counter=mysql_fetch_array($qry_counter);
echo $counter[0];
mysql_close();
?>
        visitatori</h5></td>
  </tr>
  <tr>
    <td align="right" valign="top">&nbsp;</td>
  </tr>
</table>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="74%">&nbsp;</td>
    <td width="1%">&nbsp;</td>
    <td width="25%" align="right" valign="top"><br>
      <a href="/gigantiflora/chi.php"><img src="/gigantiflora/icon2.png" width="200" height="63" border="0"></a><br>      <img src="/gigantiflora/icon1.png" width="200" height="63" border="0"></td>
  </tr>
  <tr>
    <td align="left" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="top"><strong>con il Patrocinio Ufficiale di</strong></td>
      </tr>
      <tr>
        <td align="center" valign="top">&nbsp;</td>
      </tr>
    </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="33%" align="center" valign="bottom"><br>
          Regione Lombardia<br></td>
        <td width="34%" align="center" valign="bottom"><br>
          Comune di Milano - Cultura<br></td>
        <td width="33%" align="center" valign="bottom"><br>
          Citt&agrave; di San Giuliano Milanese </td>
      </tr>
    </table>    
      <p>Il Rinascimento italiano fu un periodo di grande sviluppo culturale che ha lasciato un patrimonio immenso che ancora oggi &egrave; facilmente visibile, non solo in Italia. Il Ducato di Milano si distinse in modo particolare diventando, per l'Europa che nel XVI secolo andava lentamente formandosi e connotandosi, il punto di riferimento privilegiato e spesso fortemente desiderato.<br><br>
       Le &quot;guerre d'Italia&quot;, che videro in primo piano lo scontro violento tra francesi e svizzeri, sono la testimonianza tangibile e tragica del fortissimo anelito di conquistare il ducato pi&ugrave; ricco e pi&ugrave; moderno: il Ducato di Milano, con le sue ricchezze economiche e culturali.<br><br>
       Fu intorno all'antichissimo borgo di Zivido, oggi come ieri parte del territorio di San Giuliano Milanese, che nelle giornate del 13 e 14 settembre 1515 avvenne il pi&ugrave; cruento e determinate scontro armato il quale produsse conseguenze importanti nel panorama geopolitico europeo, ma che incise contestualmente in modo tangibile nella cultura.<br><br>
      La &quot;Battaglia dei Giganti&quot;, conosciuta anche impropriamente come &quot;battaglia di Marignano&quot;, che l'Associazione Culturale Zivido rievoca da 16 anni ogni settembre alla presenza delle massime autorit&agrave; italiane e straniere sotto la denominazione di &quot;Ritornano i Giganti&quot;, rappresenta il punto di svolta.<br><br>
       I francesi, vincitori, videro coronarsi il desiderio inseguito per decenni di possedere Milano ed il suo ducato; gli svizzeri, sconfitti con onore, cessarono la loro politica di espansione territoriale, seppure gratificati di quel territorio milanese che in seguito divenne il Canton Ticino, ed iniziarono la nuova e secolare politica della neutralit&agrave;.<br><br>
       Entrambi i contendenti riportarono in patria per&ograve; il grande patrimonio culturale del Rinascimento lombardo ed &egrave; significativo che proprio da questa Battaglia, avvenuta a Zivido, in Francia ebbe grande sviluppo il loro Rinascimento.<br><br>
       L'Associazione Culturale Zivido, nel suo lungo e pi&ugrave; che ventennale lavoro di valorizzazione della cultura milanese, ed in particolar modo sangiulianese, con &quot;GigantiFlora&quot; vuole riproporre un aspetto molto interessante del Rinascimento: la cultura del giardino e dei fiori che produsse i famosissimi e splendidi &quot;giardini all'italiana&quot;.<br><br>
       &quot;GigantiFlora&quot;, che si svolger&agrave; a San Giuliano Milanese da sabato 28 aprile a marted&igrave; 1 maggio p.v. presso il Parco della Quercia in via Risorgimento 27, non &egrave; una semplice retrospettiva di questa cultura della natura, ma intende dimostrare quanto la sensibilit&agrave; per i giardini e per i fiori ancora oggi si evidenzia con occhi e proposte moderne.</p></td>
    <td>&nbsp;</td>
    <td align="right" valign="top"><a href="/gigantiflora/prog.php"><img src="/gigantiflora/icon3.png" width="200" height="63" border="0"></a><br>
      <img src="/gigantiflora/icon4.png" width="200" height="63"><br>
      <a href="/gigantiflora/ades.php"><img src="/gigantiflora/icon5.png" width="200" height="58" border="0"></a><br>      <a href="/gigantiflora/stampa.php"><img src="/gigantiflora/icon6.png" width="200" height="58" border="0"></a><br>
      </p></td>
  </tr>
</table>
<p><br>
  <img src="/colori/6EA500.gif" width="100%" height="1"></p>
<p class="piepagina"><a href="/index.php"><img src="/sangiulianomil/ACZppplogo.JPG" width="61" height="95" border="0"></a><br>
  sito di proprietÓ dell'Associazione Culturale Zivido<br>
  <a href="mailto:webmaster@aczivido.net">webmaster@aczivido.net</a><br>
  Progettato per una risoluzione di 1024 x 768</p>
</body>
</html>
