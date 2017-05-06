#!/usr/local/bin/php 
<?
require("../include/var.inc");
$localpath="/historia";
require("../include/counter.inc");
?><html>
<head> 
<title>Historia home page</title>
<link href="/historia/historia.css" rel="stylesheet" type="text/css">
</head>
<body> 
<table border="0" width="100%" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="80%" valign="top" align="left"><img src="image/historia.jpg"

    alt="historia.jpg (19680 byte)"></td>
    <td width="20%" valign="middle" align="left"><p>ultimo 
        aggiornamento 
        <br>
      13.02.2012<br>      
      <br>      
      <?
$conn=mysql_connect($mysql["ip"],$mysql["userid"],$mysql["pwd"]);
$db=mysql_select_db("aczivido",$conn);
$qry_counter=mysql_query("SELECT count FROM counter WHERE subweb='/historia'",$conn);
$counter=mysql_fetch_array($qry_counter);
echo $counter[0];
mysql_close();
?>      
      accessi <br>
      dal 12.02.2002</p></td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="60%" valign="top">&nbsp;</td>
    <td width="40%">&nbsp;</td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr> 
    <td width="77%"> 
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td bgcolor="#E8E8E8" align="left" valign="middle"> 
            <p><strong>Italia
          </strong></p></td>
        </tr>
        <tr> 
          <td align="left" valign="middle">
          </td>
        </tr>
        <tr> 
          <td align="left" valign="middle"> 
            <p>Alto 
              Adige - Sud Tirol
          </p></td>
        </tr>
        <tr> 
          <td align="left" valign="middle"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="5%" align="center" valign="middle">                  <p>&nbsp;</p></td>
                <td width="95%" align="left" valign="top"> 
                  <p><a href="altoadige/brixen1.php">Bressanone 
                      (Brixen)</a></p></td>
              </tr>
              <tr> 
                <td width="5%" align="center" valign="middle"><p>&nbsp;</p></td>
                <td width="95%" align="left" valign="top"> 
                  <p><a href="altoadige/glorenza1.php">Glorenza 
                      (Glurns) la pi&ugrave; piccola citt&agrave; dell'Alto Adige: 
                      storia e storie</a></p></td>
              </tr>
              <tr>
                <td align="center" valign="middle"><p>&nbsp;</p></td>
                <td align="left" valign="top"><p>&nbsp;</p></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td align="left" valign="middle"> 
            <p>Lombardia
          </p></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center" valign="middle"><p><strong>***</strong></p></td>
          <td align="left" valign="top"><p><a href="lombardia/madonnariozzo1.php">Il restauro del rilievo &quot;Madonna con Bambino&quot;</a></p></td>
        </tr>
        <tr>
          <td align="left" valign="bottom"><p><strong>***</strong></p></td>
          <td align="left" valign="top"><p><a href="lombardia/madonnariozzo.php">La Madonna in trono con il Bambino e angeli del Maestro delle Sculture di Viboldone</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/arese.php">La parrocchia di Arese - 400 anni fra cronaca e storia</a></p>
          </td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p class="Stile1">&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/leti1.php">Il governo del Duca d'Ossuna e la vita di Bartolomeo Arese</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/cromilano.php">Compendio delle croniche della gran citt&agrave; di Milano</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/vitesforz.php">Vite degli Sforzeschi </a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/ascanio.php">Vita di Ascanio Sforza, fratello di Lodovico il Moro</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/francescoII.php">Francesco II Sforza, nono duca di Milano</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/lodovico.php">Lodovico Maria Sforza, settimo duca di Milano</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/giovanni.php">Giovanni Galeazzo Maria Sforza, sesto duca di Milano</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/galeazzo.php">Galeazzo Maria Sforza, quinto duca di Milano</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/fransforza.php">Francesco I Sforza, quarto duca di Milano</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/repambros.php">Repubblica Ambrosiana 1447-1450</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/statomilano.php">Quadro generale dello stato di Milano</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/sforza2.php">Illustrazione dello stemma sforzesco</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/sforza1.php">Bibliografia sforzesca</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/attendolo.php">Sforza Attendolo</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="middle"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/lombardia/senavra.php">Storia della Senavra</a></p></td>
        </tr>
        <tr>
          <td width="5%" align="center" valign="middle"><p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"><p><a href="/historia/lombardia/peroni.php">Melegnano traverso i secoli</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="middle">            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top">
            <p><a href="../attivita/confint3.php">L'artiglieria 
                francese alla battaglia di Marignano</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="middle"><p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/cavazzini.php">La 
                Madonna di Riozzo, una scultura da riscoprire</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="middle"><p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="../attivita/confint1.php">Realt&agrave; 
                locale e situazione internazionale alla vigilia della &quot;Battaglia 
                dei Giganti&quot;</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="middle"><p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="../attivita/confint2.php">L'investitura 
                di Francesco I&deg; da parte del Cavaliere Bayard</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="middle"><p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/fantoni1.php">Tradizione 
                e innovazione nel governo delle acque a Milano nel sec. XV</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"><p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/cremosano.php">&quot;Il 
                Codice araldico&quot; di Marco Cremosano. Trascrizione dei nomi 
                delle famiglie nobili milanesi e italiane a cura di Sergio Leondi</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="middle"><p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/collino.php">L'Abbazia 
                di Morimondo</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="middle"><p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/viaemilia.php">Comunicazioni 
                stradali attraverso i tempi: Milano-Piacenza-Bologna</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/pischel.php">Cenni 
                sull'arte nella Provincia di Milano - Relazione del Catalogo degli 
                oggetti d'arte nella Provincia di Milano</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/edolcini2.php">Dov'è morto Severino Boezio? Viaggio tra le ricchezze di Santa Maria Assunta</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/edolcini1.php">Siamo 
                davvero Longobardi?</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/espi2.php">&quot;Della 
                Vittoria&quot; il monastero nascosto di Francesco I a San Giuliano 
                Milanese</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/prinelli02.php">L'organo 
                di San Giovanni tra '800 e '900 - Per una storia della musica a 
                Melegnano</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/prinelli01.php">La 
                cascina &quot;a corte&quot; era il fondamento dell'economia. Appunti 
                per una storia della comunità di Riozzo</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/piacentini01.php">L'amicizia 
                del poeta Antonio Fregoso con lo storico Bernardino Coiro - Cinquecento 
                anni fa, tra Niguarda e Colturano (1)</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/ecattaneo01.php">S. 
                Maria di Calvenzano: la chiesa &quot;ambrosiana&quot; e &quot;cluniacense&quot;</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/schena01.php">Il 
                popolo ed il teatro nell'et&agrave; dei Borromeo</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/espi1.php">Josef 
                Bisa, lo scultore dei Giganti</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/oldini1.php">Discipline 
                per gli alunni delle Scuole Elementari della Monarchia Austriaca</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/demartino.php">Sant'Angelo 
                (Lodigiano) ed il suo Castello</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/verri1.php">Vicende 
                infelici de' Francesi - Francesco Sforza, riconosciuto duca di Milano 
                - Venuta in Italia di Francesco I re di Francia, ed assedio di Pavia 
                (capitolo XXIII)</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/palmisano1.php">La 
                battaglia dell'8 giugno 1859 nella cronaca di Charles Adam</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/leondi3.php">Il 
                Parco del Carengione. Passato, presente e futuro dell'oasi 
                naturalistica di Peschiera Borromeo</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/leondi2.php">Guida 
                al Castello di Peschiera Borromeo</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/leondi1.php">Tra 
                spruzzi d'acqua e cigolio di ruote, i mulini di Peschiera Borromeo 
                e dintorni</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/chittolini1.php">La 
                città di Milano dalla caduta degli Sforza al dominio spagnolo</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="lombardia/natale1.php">Magnificenza 
                e ragione: la pittura a Milano al tempo di Francesco e Galeazzo 
                Maria Sforza</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="top"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p>&nbsp;</p></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td>
          </td>
        </tr>
        <tr> 
          <td align="left" valign="middle">
            <p>Piemonte
          </p></td>
        </tr>
        <tr> 
          <td align="left" valign="middle"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="5%" align="center" valign="top">
                  <p>&nbsp;</p></td>
                <td width="95%" align="left" valign="top">
                  <p><a href="piemonte/viguzzolo1.php">La Pieve di Viguzzolo</a></p></td>
              </tr>
              <tr>
                <td align="center" valign="top"><p>&nbsp;</p></td>
                <td align="left" valign="top"><p>&nbsp;</p></td>
              </tr>
            </table>
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left" valign="top"><p>Toscana</p></td>
              </tr>
            </table>
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="5%" align="left" valign="top"><p>&nbsp;</p></td>
                <td width="95%" align="left" valign="top"><p><a href="/historia/toscana/giomedici.php">All'illustrissimo ed eccellentissimo signor Cosimo de' Medici, duca di Firenze.</a></p></td>
              </tr>
              <tr>
                <td width="5%" align="left" valign="top"><p>&nbsp;</p></td>
                <td width="95%" align="left" valign="top"><p><a href="/historia/toscana/giomedici1.php">Giovanni de' Medici</a></p></td>
              </tr>
              <tr>
                <td align="left" valign="top"><p>&nbsp;</p></td>
                <td align="left" valign="top"><p>&nbsp;</p></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td align="left" valign="middle">
          </td>
        </tr>
        <tr> 
          <td align="left" valign="middle">
            <p>Trentino
          </p></td>
        </tr>
        <tr> 
          <td align="left" valign="middle"> 
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr> 
                <td width="5%" align="center" valign="top">
                  <p>&nbsp;</p></td>
                <td width="95%" align="left" valign="top"> 
                  <p><a href="trentino/ledro.php">Breve 
                      storia della Valle di Ledro</a></p></td>
              </tr>
              <tr> 
                <td width="5%" align="center" valign="top">
                  <p>&nbsp;</p></td>
                <td width="95%" align="left" valign="top"> 
                  <p><a href="trentino/ledropalafitte.php">La 
                      palafitta del Lago di Ledro</a></p></td>
              </tr>
              <tr>
                <td align="center" valign="top"><p>&nbsp;</p></td>
                <td align="left" valign="top"><p>&nbsp;</p></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td align="left" valign="middle">
          </td>
        </tr>
        <tr> 
          <td align="left" valign="middle">
          <p>Umbria</p></td>
        </tr>
        <tr> 
          <td align="left" valign="middle">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td width="5%" valign="top"><p>&nbsp;</p></td>
                <td width="95%" align="left" valign="top">
                  <p><a href="umbria/bittarello.php">La 
                      Rocca di Citt&agrave; della Pieve</a></p></td>
              </tr>
              <tr>
                <td valign="top"><p>&nbsp;</p></td>
                <td align="left" valign="top"><p>&nbsp;</p></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td align="left" valign="middle">
         </td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td bgcolor="#E8E8E8">
            <p><strong>Francia
          </strong></p></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr> 
          <td width="5%" align="center" valign="top">
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top">
            <p><a href="francia/hare.php">Bayard: 
                The Good Knight Without Fear And Without Reproach (language: English)</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="francia/masson.php">&Eacute;nigmes 
                de rois &agrave; ch&acirc;teau Bayard</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="../attivita/confint3.php">L'artillerie 
              fran&ccedil;aise &agrave; la bataille de Marignan</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="../attivita/confint1.php">R&eacute;alit&eacute; 
                locale et situation internationale &agrave; la veille de la &quot;Bataille 
                des G&eacute;ants&quot;</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="../attivita/confint2.php">L'adoubement 
                de Fran&ccedil;ois Ier par le Chevalier Bayard</a></p></td>
        </tr>
        <tr> 
          <td width="5%" align="center" valign="top"> 
            <p>&nbsp;</p></td>
          <td width="95%" align="left" valign="top"> 
            <p><a href="francia/bornecque.php">Bayard 
                un grand serviteur de la France et de ses rois</a></p></td>
        </tr>
        <tr>
          <td align="center" valign="top"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p>&nbsp;</p></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="left" valign="top" bgcolor="#E8E8E8"> 
            <p><strong>Svizzera
          </strong></p></td>
        </tr>
      </table>
      <table width="100%" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td align="center" valign="top"><p>&nbsp;</p></td>
          <td align="left" valign="top"><p><a href="/historia/svizzera/sola1.php"><strong>Les Suisses et le Milanais: de simples mercenaires &agrave; conqu&eacute;rants (1494-1513)</strong></a></p></td>
        </tr>
        <tr> 
          <td align="center" valign="top" width="5%"> 
            <p>&nbsp;</p></td>
          <td align="left" valign="top" width="95%"> 
            <p><a href="svizzera/troso1.php">Le 
                fanterie Svizzere</a></p></td>
        </tr>
        <tr> 
          <td align="center" valign="top" width="5%">
            <p>&nbsp;</p></td>
          <td align="left" valign="top" width="95%">
            <p><a href="svizzera/troso2.php">Gli 
                imitatori degli Svizzeri</a></p></td>
        </tr>
      </table>
      <br>
    </td>
    <td width="23%" align="right" valign="top"> 
      <table width="90%" border="0" cellspacing="0" cellpadding="0" bordercolor="#E8E8E8">
        <tr> 
          <td align="left" valign="top" bgcolor="#E8E8E8"><p><strong>bibliografia di storia locale</strong><br>              a cura di Pierino Esposti<br>
              <a href="biblioA.php">A</a> <a href="biblioB.php">B</a> 
              <a href="biblioC.php">C</a> <a href="biblioD.php">D</a> 
              <a href="biblioE.php">E</a> <a href="biblioF.php">F</a> 
              <a href="biblioG.php">G</a> H I <a href="biblioL.php">L</a> 
              <a href="biblioM.php">M</a>
              <a href="biblioN.php">N</a> O <a href="biblioP.php">P</a> 
              Q <a href="biblioR.php">R</a> <a href="biblioS.php">S</a> 
            T U <a href="biblioV.php">V</a> <a href="biblioZ.php">Z</a></p>
          </td>
        </tr>
        <tr>
          <td align="left" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><p>&nbsp;</p></td>
            </tr>
          </table></td>
        </tr>
        <tr> 
          <td align="left" valign="top"> 
          </td>
        </tr>
        <tr> 
          <td align="left" valign="top" bgcolor="#E8E8E8"><p><strong>bibliografia 
              di storia locale del territorio
              milanese</strong><br> 
              <a href="/historia/leondibib.php">a cura di Sergio Leondi        </a><br>
            aggiornato al 31.12.2011</p></td>
        </tr>
        <tr>
          <td align="left" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><p>&nbsp;</p></td>
            </tr>
          </table></td>
        </tr>
        <tr> 
          <td align="left" valign="top"> 
          </td>
        </tr>
        <tr> 
          <td align="left" valign="top" bgcolor="#E8E8E8"> 
            <p><strong>Bibliografia di 
                San Carlo<br>Borromeo: 1984 e <span class="citazione">dintorni</span></strong><br>
              <a href="/historia/leondibib1.php">a cura 
              di Sergio Leondi</a><br>
              aggiornato al 12.01.2011 <br>
          </p></td>
        </tr>
        <tr>
          <td align="center" valign="top"><table width="100%"  border="0" cellspacing="0" cellpadding="0">
            <tr>
              <td><p>&nbsp;</p></td>
            </tr>
          </table>
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td align="left" valign="top" bgcolor="#E8E8E8"><p><strong>Fonti di storia melzese</strong><br>
                    <a href="/historia/villabib.php">a cura di Sergio Villa</a></p></td>
              </tr>
            </table>
            <table width="100%"  border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td><p>&nbsp;</p></td>
              </tr>
            </table>
          </td>
        </tr>
        <tr> 
          <td align="left" valign="top">
          </td>
        </tr>
        <tr> 
          <td align="center" valign="top" bgcolor="#E8E8E8"><img src="image/ilponte.jpg" width="153" height="46"></td>
        </tr>
        <tr> 
          <td align="left" valign="top" bgcolor="#E8E8E8"> 
            <p><a href="http://www.nautilaus.com/crs/s.angelo/costa.htm">Quando 
                non c'erano le mura</a><br>
                <a href="http://www.nautilaus.com/il_ponte/novembre2000/vecchia.htm">Oggi 
                la Vignola e domani...</a><br>
                <a href="http://www.nautilaus.com/il_ponte/ottobre2000/vecchia_sangelo1.htm">Oggi 
                a S.Maria e domani...</a><br>
                <a href="http://www.nautilaus.com/il_ponte/aprile2001/vecchia.htm">La 
                banda musicale</a><br>
                <a href="http://www.nautilaus.com/il_ponte/febbraio2002/teatro.htm">Vecchia 
                Sant'Angelo</a>
            </p></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top"><img src="../gerosa/colori/000000.gif" width="100%" height="1"></td>
  </tr>
</table>
<p class="piepagina"><a href="../index.php"><img src="../sangiulianomil/ACZppplogo.JPG" width="61" height="95" border="0"></a><br>
  sito di propriet&agrave; dell' <a href="../index.php" class="piepagina">Associazione Culturale Zivido</a><br>
    <a href="mailto:webmaster@aczivido.net" class="piepagina">webmaster@aczivido.net</a>
</p>
</body>
</html>

