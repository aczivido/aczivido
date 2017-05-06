#!/usr/local/bin/php 
<?
require("include/var.inc");
$localpath="/";
require("include/counter.inc");
?><html>
<head> 
<TITLE>Associazione Culturale Zivido</TITLE>
<link href="/acz.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Stile5 {color: #FFFFFF}
-->
</style>
</head>
<body> 
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="70%" align="left" valign="top" bgcolor="#005A87"><img src="/log1.png" width="590" height="97"></td>
    <td width="30%" align="left" valign="middle" bgcolor="#005A87"><h2>Benvenuti nel nostro portale</h2>
      <p><span class="Stile17 Stile1"><span class="Stile5">ultimo aggiornamento 13.02.2012<br>
        n.
        <?
$conn=mysql_connect($mysql["ip"],$mysql["userid"],$mysql["pwd"]);
$db=mysql_select_db("aczivido",$conn);
$qry_counter=mysql_query("SELECT sum(count) FROM counter",$conn);
$counter=mysql_fetch_array($qry_counter);
echo $counter[0];
mysql_close();
?>
      visitatori</span></span></p></td>
  </tr>
</table>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top"><img src="/log2.png" width="100%" height="20"></td>
  </tr>
</table>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td width="50%" align="left" valign="top" bgcolor="#005A87"><a href="opinione/opindex.php"><img src="opinpp.jpg" width="126" height="58" border="0"></a></td>
    <td width="50%" align="right" valign="top" bgcolor="#005A87"><a href="/gemellaggio/index.php"><img src="/jumelage.png" width="319" height="59" border="0"></a></td>
  </tr>
</table>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top"><img src="/log3.png" width="100%" height="20"></td>
  </tr>
</table>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td bgcolor="#005A87">&nbsp;</td>
  </tr>
</table>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" bgcolor="#005A87">
  <tr>
    <td width="30%" align="left" valign="top"><table width="100%"  border="0" cellspacing="2" cellpadding="0">
      <tr>
        <td align="left" valign="top"><a href="/ultimiagg.php"><img src="/ultimi.png" width="278" height="20" border="0"></a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="/attivita/iniziative.php"><img src="/inizia.png" width="278" height="20" border="0"></a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="/movies.php"><img src="/video.png" width="278" height="20" border="0"></a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="/zivido/igiganti/gigcopertina.php"><img src="/ritornano.png" width="278" height="20" border="0"></a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="/sestoulteriano/fiera.php"><img src="/fiera.png" width="278" height="20" border="0"></a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="/borgo/indexborg.php"><img src="/corte.png" width="278" height="20" border="0"></a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="/salastampa/stampaindex.php"><img src="/stampa.png" width="278" height="20" border="0"></a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="/imagesat.php"><img src="/sat.png" width="278" height="20" border="0"></a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="/borgogig/copertina.php"><img src="/borgo.png" width="278" height="20" border="0"></a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="/fotarchivio.php"><img src="/arcfoto.png" width="278" height="20" border="0"></a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="/zivido/archeologia/zivarcheo1.php"><img src="/archeo.png" width="278" height="20" border="0"></a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="/sgmap.php"><img src="/mappa.png" width="278" height="20" border="0"></a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="/12nov2003.php"><img src="/nassirya.png" width="278" height="20" border="0"></a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="/link/indexlink.php"><img src="/links.png" width="278" height="20" border="0"></a></td>
      </tr>
      <tr>
        <td align="left" valign="top"><a href="mailto:webmaster@aczivido.net"><img src="/scrivici.png" width="278" height="20" border="0"></a></td>
      </tr>
    </table>
    <img src="/gemellaggio/iconvuota.png" width="278" height="2232"></td>
    <td width="40%" align="left" valign="top"><a href="http://www.cittadelleidee.net"><img src="/cittaidee.jpg" width="385" height="88" border="0"></a><br>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
        </tr>
      </table>
      <table width="100%"  border="0">
        <tr>
          <td><p>&nbsp;</p></td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="center" valign="middle"><a href="/borgogig/addio.php"><img src="/grazzani.jpg" width="388" height="291" border="0"></a></td>
      </tr>
    </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><p>&nbsp;</p></td>
        </tr>
      </table>
            <table width="100%"  border="0" cellpadding="0" cellspacing="0">
      <tr>
        <td align="center" valign="top"><a href="/zivido/igiganti/gigcopertina.php"><img src="/ritornano.jpg" width="391" height="97" border="0"></a></td>
      </tr>
    </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><p>&nbsp;</p></td>
        </tr>
      </table>
      <table width="100%"  border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF">
      <tr>
        <td align="left" valign="top"><p>L'Associazione Culturale Zivido &egrave;  nata nel luglio 1984 per iniziativa di alcuni cittadini residenti nel Comune di San Giuliano Milanese, Provincia di Milano, (Italia) con il proposito  &quot;... di studiare, far conoscere, difendere e promuovere l'Arte, la Storia, l'Architettura, l'Ambiente, gli Usi e Costumi presenti sul territorio comunale sangiulianese. Suo compito sar&agrave; di raccogliere documentazione, testimonianze ed oggetti; di ordinare il materiale, conservarlo e renderlo accessibile al pubblico. Promuover&agrave; incontri, conferenze, dibattiti, studi, pubblicazioni ed ogni altra iniziativa conforme al presente Statuto...<br>
          L'Associazione collaborer&agrave;, di libera iniziativa, con tutte le Organizzazioni a lei similari ...&quot;&nbsp; (Statuto, artt. 2-3)</p></td>
      </tr>
    </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><p>&nbsp;</p></td>
        </tr>
      </table>
      <table width="100%"  border="0" cellpadding="0" cellspacing="3" bgcolor="#FFFFFF">
      <tr>
        <td align="center" valign="top"><img src="/guardie.png" width="377" height="60"></td>
      </tr>
    </table>
    <table width="100%"  border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF">
      <tr>
        <td align="center" valign="top"><p><a href="attivita/guardie.php">resoconto</a> - <a href="attivita/image/gspziv/album/index.html">foto a Zivido</a> - <a href="attivita/image/gsproc/album/index.html">foto a Rocca Brivio</a> - <a href="movies.php#004">filmato</a></p></td>
      </tr>
    </table>
        <table width="100%"  border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td><p>&nbsp;</p></td>
          </tr>
        </table>
      <table width="100%"  border="0" cellpadding="0" cellspacing="3" bgcolor="#FFFFFF">
      <tr>
        <td align="center" valign="top"><a href="zivido/bisa/caduti.php"><img src="40.gif" width="377" height="79" border="0"></a></td>
      </tr>
    </table>
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><p>&nbsp;</p></td>
              </tr>
            </table>
      <table width="100%"  border="0" cellpadding="0" cellspacing="3" bgcolor="#FFFFFF">
      <tr>
        <td align="center" valign="top"><a href="parco/borr.pdf"><img src="borr.gif" width="377" height="30" border="0"></a></td>
      </tr>
    </table>
          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><p>&nbsp;</p></td>
            </tr>
          </table>
          <table width="100%"  border="0" cellpadding="0" cellspacing="3" bgcolor="#FFFFFF">
            <tr>
              <td align="center" valign="middle"><a href="/historia/leondibib1.php"><img src="/leondi_sancarlo.jpg" width="378" height="60" border="0"></a></td>
            </tr>
          </table>
          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><p>&nbsp;</p></td>
            </tr>
          </table>
                <table width="100%"  border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF">
      <tr>
        <td align="left" valign="top" bgcolor="#CACACA"><h1>&nbsp;in primo piano </h1></td>
      </tr>
      <tr>
        <td align="left" valign="top"><p>              <a href="sangiulianomil/roccabrivio/tesi00.php">&quot;Rocca Brivio: ricerca storica, rilievo, manutenzione&quot;</a><br>
                <a href="historia/lombardia/cavazzini.php">La Madonna di Riozzo, una scultura da riscoprire</a><br>
                <a href="attivita/confint1.php">Realt&agrave; locale e situazione internazionale alla vigilia della &quot;Battaglia dei Giganti&quot;</a><br>
                <a href="attivita/confint3.php">L'artiglieria francese alla battaglia di Marignano</a><br>
                <a href="attivita/confint2.php">L'investitura di Francesco I&deg; da parte del Cavaliere Bayard</a><br>
                <a href="historia/lombardia/fantoni1.php">Tradizione e innovazione nel governo delle acque a Milano nel sec. XV</a><br>
                <a href="historia/lombardia/cremosano.php">&quot;Il Codice araldico di Marco Cremosano&quot;</a> Trascrizione dei nomi delle famiglie nobili milanesi e italiane a cura di Sergio Leondi<br>
                <a href="sestoulteriano/storia/villa01.php">San Matroniano nella leggenda e nella storia</a><br>
                <a href="historia/leondibib.php">Bibliografia di storia locale del territorio milanese a cura di Sergio Leondi</a> aggiornata al 31.12.2011<br>
                Zivido e la &quot;Battaglia dei Giganti&quot; sono stati oggetto di un &quot;reportage&quot; del settimanale svizzero Coop Coperazione (tiratura 112.642), con sede a Basilea. (<a href="salastampa/stampaindex.php">leggi</a>) (versione originale in <a href="http://www.cooperazione.ch/pdfdata/co/200425i/0425CO60_030.pdf">PDF</a>)<br>
                <a href="zivido/castello/affreschi.php">Gli affreschi del castello Brivio Sforza a Zivido</a><br>
                <a href="zivido/battaglialibri/esch01.php">I mercenari svizzeri in Italia. L'esperienza delle guerre milanesi (1510-1515) tratta da fonti bernesi</a><br>
                <a href="viboldone/storia/santam.php">La lastra sepolcrale del preposto Guglielmo De Villa del 1365 nella Badia di Viboldone</a><br>
                <a href="historia/lombardia/espi1.php">Josef Bisa, lo scultore dei Giganti</a><br>
              <a href="historia/lombardia/espi2.php">&quot;Della Vittoria&quot;</a> il monastero nascosto di Francesco I a San Giuliano Milanese</p>
          </td>
      </tr>
    </table>
          <table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><p>&nbsp;</p></td>
            </tr>
          </table>
      <table width="100%"  border="0" cellpadding="0" cellspacing="5" bgcolor="#FFFFFF">
      <tr>
        <td align="left" valign="top" bgcolor="#CACACA">
          <h1>&nbsp;segnalazioni</h1></td>
      </tr>
      <tr>
        <td align="left" valign="top"><p align="center"><strong>CASCINA SANTA BRERA - SAN GIULIANO MILANESE</strong><br>
MIGRANTI presso Cascina Santa Brera<br>
L'Agriturismo &egrave; stato contattato dalla Prefettura di Milano per ospitare 6 migranti provenienti dall'Africa, richiedenti asilo politico in Italia. Sono quindi arrivati: Ahmed originario del Ciad, Alex, Abraham, Ahmed, Adamu e Amechi originari della Nigeria. Nonostante il mese di agosto, le istituzioni e le associazioni presenti sul territorio si sono subito attivate, ma poi &egrave; arrivato il ferragosto. Ogni iniziativa di singoli e associazioni per aiutare queste persone a conoscere la lingua italiana sar&agrave; ben accetta.</p>
          </td>
      </tr>
      <tr>
        <td align="left" valign="top"><p> <strong>TUTTO AGOSTO: VENDITA DIRETTA PRODOTTI BIOLOGICI A KM ZERO </strong><br>
Presso la Cascina Santa Brera di San Giuliano Milanese &egrave; aperto uno Spaccio Agricolo il mercoled&igrave; e il venerd&igrave; dalle 16 alle 20, il sabato dalle 10 alle 18. Su appuntamento, si apre anche in altri orari (tel. 348 7329417).</p></td>
      </tr>
      <tr>
        <td align="left" valign="top"><p> <strong>dal 20 al 26 agosto: SETTIMANA VERDE PER TUTTI </strong><br>
(anche residenziale per chi desidera) - orticoltura e preparazione conserve. Alla mattina nell'orto e al pomeriggio imparare a riconoscere le erbe spontanee, a fare le conserve (salsa al prezzemolo, salsa di pomodoro, marmellate di more, di fichi, zucchine, lamponi...) e il pane a lievitazione naturale. 
E' possibile frequentare entrambi i corsi oppure solo mezza giornata 
con Anna Morera Perez e Patricia Figueiredo <br>
<a href="http://www.scuoladipratichesostenibili.it/settimanaverde.html">http://www. scuoladipratichesos tenibili. it/settimanaverde. html</a></p></td>
      </tr>
      <tr>
        <td align="left" valign="top"><p> <strong>PORTE APERTE E ADOTTA UN ORTO </strong><br>
domenica 21 agosto alle ore 10,30 visita guidata alla cascina e alle sue attivit&agrave; con la possibilit&agrave; di aderire al progetto "adotta un orto". E' possibile fermarsi anche per uno spuntino (15 euro) con le verdure dell'orto e i prodotti della cascina, prenotando al tel. 348 2627530.</p></td>
      </tr>
      <tr>
        <td align="left" valign="top"><p> <strong>LE BUONE PRATICHE CASALINGHE </strong><br>
            <strong>20-26 agosto</strong> - Laboratorio di trasformazione frutta e verdura per le conserve di stagione - con Patricia Figueiredo <br>
            <strong>10-11 settembre</strong> - Laboratorio di caseificazione (fare il formaggio) - con Lorenzo Bruschi <br>
            <strong>2 ottobre</strong> - Laboratorio di panificazione a lievitazione naturale (pasta madre) - con Catia Masiero <br>
            <strong>15-16 ottobre</strong> - Autoproduzione di saponi e cosmetici - con Francesca Moccia e Lorena Mariani</p></td>
      </tr>
      <tr>
        <td align="left" valign="top"><p> <strong>CORSI PER GLI APPASSIONATI DEL VERDE </strong><br>
            <strong>20-26 agosto</strong> - settimana verde con orticoltura e trasformazione prodotti - alla mattina il corso di orticoltura pratica per principianti con Anna Morera Perez <br>
            <strong>dal 10 settembre al 1 ottobre</strong> - Incontri di orticoltura biologica pratica per principianti - con Anna Morera Perez</p></td>
      </tr>
      <tr>
        <td align="left" valign="top"><p> <strong>AUTOCOSTRUZIONE E BIOEDILIZIA </strong><br>
            <strong>26-27 settembre </strong>- Laboratorio di intonaco con la calce e la terra cruda - le finiture (decorare, impermeabilizzare, risolvere i problemi pi&ugrave; comuni) - con Paolo D'Alpaos<br>
</p></td>
      </tr>
      <tr>
        <td align="left" valign="top"><p> <strong>INIZIATIVE PER BAMBINE E BAMBINI</strong> <br>
campi estivi (anche residenziali): dal 30 agosto al 3 settembre, dal 6 al 10 settembre <br>
Per info: tel. 335 - 7745510 <br>
<a href="http://www.scuoladipratichesostenibili.it/campiestivi.html">http://www. scuoladipratichesos tenibili. it/campiestivi.html </a><br>
<a href="http://www.praticareilfuturo.it/">http://www.praticareilfuturo. i t </a> </p></td>
      </tr>
      <tr>
        <td align="left" valign="top"><p> <strong>PROGETTI PER LE SCUOLE</strong> <br>
Cicli di incontri sull'orticoltura; la cura degli animali; la realizzazione di piccoli progetti di permacultura; il riciclo; la costruzione di giocattoli con materiali naturali e riciclati; i giochi e le fiabe di altri paesi del mondo; la produzione di pane, burro e marmellate; le erbe spontanee; il consumo critico; l'energia. <br>
Programmi e proposte da scaricare alla pagina: <a href="http://www.scuoladipratichesostenibili.it/perlescuole.html">http://www. scuoladipratichesos tenibili. it/perlescuole.html </a><br>
<a href="http://www.praticareilfuturo.it/">http://www.praticareilfuturo. i t </a> </p></td>
      </tr>
      <tr>
        <td align="left" valign="top"><p> <strong>DOPOSCUOLA IN FATTORIA</strong> <br>
La Cascina Santa Brera propone un doposcuola per le/i ragazzine/i degli ultimi &nbsp;anni delle elementari e delle medie, dalle ore 13,30 alle ore 18,30 circa. <br>
Attivit&agrave; previste: assistenza per i compiti e aiuto nello studio (anche con &nbsp;proposte di didattica attiva, per esempio piccoli esperimenti scientifici), &nbsp;giochi ed escursioni, laboratori creativi e di autoproduzione, attivit&agrave; &nbsp;nell'orto e con gli animali, piccoli progetti permaculturali, giochi e altre &nbsp;attivit&agrave; sulla permacultura, il consumo critico e gli stili di vita sostenibili. L'obiettivo &egrave; educare all'autonomia, alla responsabilit&agrave; e alla cooperazione, &nbsp;stimolando le potenzialit&agrave; autoeducative del gruppo, con particolare attenzione &nbsp;alla maturazione emotiva e relazionale. <br>
Contattare Sandra Cangemi: <a href="mailto:bambini@cascinasantabrera.it">bambini@cascinasantabrera.it </a>- tel. 335-7745510 <a href="http://www.praticareilfuturo.it/">http://www.praticareilfuturo. i t </a> </p></td>
      </tr>
      <tr>
        <td align="left" valign="top"><p><strong>ARCHIVIO DI STATO - MILANO</strong><br>
  dal giorno 15 giugno 2004 questo Istituto ha aperto all'utenza il servizio di consultazione dell'Archivio digitale. <a href="arcstato.php">(informazioni)</a></p></td>
      </tr>
    </table>
    </td>
    <td width="5%" align="center" valign="top">&nbsp;</td>
    <td width="25%" align="center" valign="top">
    <a href="/zivido/index.php"><img src="zividologo.jpg"
            alt="zividologo.jpg (8197 byte)" border="0" width="241" height="22"></a><br>
    <br>
    <a href="viboldone/index.htm"><img src="logoabbaz.jpg" alt="logoabbaz.jpg (18594 byte)"
            border="0" width="239" height="33"></a><br>
    <br>    <a href="/sangiulianomil/index.php"><img src="sgmcolor.jpg"
            alt="sgmcolor.jpg (16563 byte)" width="241" height="57" border="0"></a><br>
    <br>
    <a href="parco/index.php"><img src="ppparco.jpg" width="240" height="57" border="0"></a><br>
    <br>    <a href="/borgo/indexborg.php"><img src="pplogoborg.jpg" width="241" height="36" border="0"></a><br>
    <br>
    <a href="historia/index.php"><img src="historialog.jpg" border="0" style="border: 0px solid rgb(0,0,0)" width="237" height="49"></a><br>
    <br>
    <a href="sestoulteriano/index.php"><img src="ppsestologo.jpg" width="239" height="50" border="0"></a><br>    
    <br>
    <a href="gerosa/brichetto.php"><img src="gerosapp.jpg" width="238" height="36" border="0"></a><br>
    <br>
    <table width="98%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="25%" align="center" valign="top" bgcolor="#FFFFFF"><a href="http://www.golgiredaelli.it/"><img src="ipab.gif" width="49" height="69" border="0"></a></td>
        <td width="75%" align="left" valign="top" bgcolor="#FFFFFF"><p>Azienda di Servizi<br> 
          alla Persona<br>            
          <strong>Golgi - Redaelli</strong><br>
          (ex Amm. II.PP.A.B. 
           Milano)</p></td>
      </tr>
    </table>
    <table width="98%"  border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td align="left" valign="top" bgcolor="#FFFFFF"><p><a href="salastampa/naz/citt08042006_1.php">Quegli antichi oratori di campagna</a><br>
              <a href="salastampa/naz/citt26042005.php"> Cantalupo, l&#146;ora dei restauri</a><br>
              <a href="sangiulianomil/chiese/sanlorenzo2.php">La Pala ed i medaglioni</a><br>
              <a href="sangiulianomil/chiese/sanlorenzo.php">L'Oratorio di San Lorenzo a Cantalupo</a><br>
              <a href="sangiulianomil/chiese/sanlorenzo3.php">Intervento di conservazione e restauro</a><br>
              <a href="sangiulianomil/chiese/sanlorenzo3.php">Cantalupo: al via il restauro</a></p></td>
      </tr>
    </table>
    <br><br></td>
  </tr>
</table>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top"><img src="/log2.png" width="100%" height="20"></td>
  </tr>
</table>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" bgcolor="#005A87">
  <tr>
    <td width="25%" align="center" valign="top"><a href="raccontami/indexracc.php"><img src="raccontami.jpg" width="136" height="48" border="0"></a></td>
    <td width="25%" align="center" valign="top">&nbsp;</td>
    <td width="25%">&nbsp;</td>
    <td width="25%">&nbsp;</td>
  </tr>
</table>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top"><img src="/log3.png" width="100%" height="20"></td>
  </tr>
</table>
<p class="piepagina">Associazione Culturale Zivido - Via Privata Montenero, 7/a - I 20098 San Giuliano Milanese<br>
  <a href="mailto:webmaster@aczivido.net">webmaster@aczivido.net</a><br>
Progettato per una risoluzione di 1024x768</p>
</body>
</html>