#!/usr/local/bin/php 
<?
require("../include/var.inc");
$localpath="/gerosa";
require("../include/counter.inc");
?><html>
<head> 
<title>Gerosa Brichetto biografia</title>
<link href="/acz.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.Stile1 {color: #FFFFFF}
-->
</style>
</head>
<body> 
<table width="100%"  border="0" cellpadding="0" cellspacing="0" bgcolor="#005A87">
  <tr>
    <td width="70%" align="left" valign="top"><a href="/index.php"><img src="/log1.png" width="590" height="97" border="0"></a></td>
    <td width="30%" align="left" valign="middle"><p class="Stile1">aggiornato al 06.01.2009<br>
  n.
      <?
$conn=mysql_connect($mysql["ip"],$mysql["userid"],$mysql["pwd"]);
$db=mysql_select_db("aczivido",$conn);
$qry_counter=mysql_query("SELECT count FROM counter WHERE subweb='/gerosa'",$conn);
$counter=mysql_fetch_array($qry_counter);
echo $counter["count"];
mysql_close();
?>
  accessi<br>
  dal 01.03.2003</p></td>
  </tr>
</table>
<table width="100%"  border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left" valign="top"><img src="/log2.png" width="100%" height="20"></td>
  </tr>
  <tr>
    <td align="right" valign="middle" bgcolor="#005A87"><img src="/gerosa/gerosa1.png" width="376" height="44"></td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="/log3.png" width="100%" height="20"></td>
  </tr>
  <tr>
    <td bgcolor="#005A87"><p>&nbsp;</p></td>
  </tr>
</table>
<table width="100%"  border="0" cellpadding="0" cellspacing="0" bgcolor="#005A87">
  <tr>
    <td width="30%" align="center" valign="top"><img src="/gerosa/gerosa.png" width="69" height="91"><br>
    <br>
    <table width="80%"  border="0" cellpadding="0" cellspacing="5" bgcolor="#B9DCFF">
      <tr>
        <td><p>una nobile figura di uomo, medico soldato e storiografo</p></td>
      </tr>
    </table>
    <br>
    <table width="80%"  border="0" cellpadding="0" cellspacing="5" bgcolor="#B9DCFF">
      <tr>
        <td align="left" valign="top"><p><a href="leondi1.php">Sergio Leondi ricorda</a></p></td>
      </tr>
      <tr>
        <td align="left" valign="top"><p><a href="opere.php">Pubblicazioni</a></p></td>
      </tr>
    </table>
    <br></td>
    <td width="70%" align="left" valign="top"><table width="98%"  border="0" cellpadding="0" cellspacing="0" bgcolor="#62B0FF">
      <tr>
        <td width="5%" bgcolor="#FFD900">&nbsp;</td>
        <td width="2%">&nbsp;</td>
        <td width="92%"><p><strong>La vita </strong></p></td>
      </tr>
    </table>
      <table width="98%"  border="0" cellpadding="0" cellspacing="5" bgcolor="#B9DCFF">
        <tr>
          <td align="left" valign="top"><p>Nato a Linate, nelle immediate vicinanze di Milano, nel 1910, il Dr. Giuseppe Gerosa Brichetto ebbe una vita molto intensa, durante la quale il fatto di essere medico rappresent� sempre, per lui, il punto focale della sua esistenza.<br>
              Apparteneva ad una famiglia medio borghese che aveva gi� avuto due medici e dove era forte il senso del dovere e l'attaccamento alla Patria, retaggio di uno spirito fortemente liberale che affondava le proprie radici nell'Ideale risorgimentale (1).<br>
              Comp� gli studi classici presso un istituto di Monza e quindi al Liceo Beccaria di Milano. Da questi luoghi di studio, dove aleggiava forte lo spirito rosminiano, ne usc� mentenendo una spiccata propensione per il Modernismo, che avr� sempre modo di emergere, di quando in quando, durante tutto il corso della sua vita (2).<br>
              Nel 1935 completava meritatamente gli studi laureandosi in Medicina e Chirurgia presso l'Universit� di Milano. La meta raggiunta serv� da stimolo per proseguire ulteriormente gli studi avviandosi alla carriera universitaria. Si profil� per lui la possibilit� di conseguire la specializzazione in Tisiologia, applicandosi in qualit� di Assistente, presso il Sanatorio di Pineta di Sortenna, in Alta Valtellina. Si era sul finire del 1935, il pi� famoso Centro sanatoriale di Sondalo era ancora in costruzione, &quot;esistevano solamente i primi grandi piloni&quot;, annoter� il Dr. Gerosa Brichetto.<br>
              A riprova del suo interesse e della sua appassionata applicazione in questo suo primo lavoro medico, anche se durato pochi mesi, sono rimaste due pubblicazioni concernenti i &quot;versamenti pleurici&quot; (3).<br>
Pochi mesi dopo, nel febbraio del 1936, questo suo periodo di pratica veniva bruscamente interrotto per assolvere gli obblighi militari.<br>
Iniziava cos�, entrando nella Scuola d'Applicazione di Sanit� Militare di Firenze come &quot;aspirante ufficiale medico di complemento&quot;, la sua vita da militare. Vita che lui mai avrebbe pensato si sarebbe protratta per cos� lungo tempo, ben otto anni, e che segnasse cos� profondamente la sua esistenza.<br>
Nell'agosto del 1936 fu nominato Sottotenente Medico ed inviato all'8� Reggimento Fanteria, Brigata &quot;Cuneo&quot; in Milano, per il servizio di prima nomina. Come sempre, anche la sorte partecipa a condizionare la vita. Per sorteggio nell'aprile del 1937 fu inviato in Africa orientale Italiana, aggregato all'Ospedale da Campo della 2a Brigata Eritrea.<br>
Nel luglio del 1938 fu rimpatriato per esami ed ammesso al Servizio Permanente Effettivo; propenso al ritorno alla propria professione di medico, vi rinunci�. Posto in congedo, and� quindi a ricoprire la funzione di Medico di Reparto del Comune di Milano. Ma, nonostante la sua precisa scelta torn� fatalmente sotto le armi; ci� avvenne nel giugno del 1940, quando fu richiamato ed assegnato al Comando Divisione Fanteria &quot;Legnano&quot; in Milano.<br>
E' gi� guerra. Ai primi di gennaio del 1941 veniva mobilitato ed assegnato al 469� Ospedale da Campo in Albania, Fronte dell'XI Armata (4).<br>
Promosso Tenente Medico, nel giugno del 1941 fu rimpatriato ed assegnato al Comando Divisione Fanteria &quot;Legnano&quot;, allo Stato maggiore, in qualit� di Ufficiale Medico addetto all'Ufficio Sanit�. Nel settembre 1942 fu promosso Capitano e trasferito, con la Divisione &quot;Legnano&quot;, sul Fronte mediterraneo in Francia, da dove rientr� nell'agosto del 1943.<br>
Era un Ufficiale Medico molto apprezzato e stimato sia dai subalterni, che dai superiori, ne sono prova i rapidi passaggi di grado e la chiamata a ricoprire ruoli importanti, e di grande responsabilit�, presso gli alti Comandi.<br>
L'8 settembre lo trov� al Sud, oltre la Linea Gotica. Ader� per sua scelta e coscientemente al Corpo Italiano di Liberazione, che combatter� a fianco degli Alleati, e pi� precisamente con la 5a Armata Americana.<br>
Gravemente ferito nella Battaglia di Monte Lungo dell'8 dicembre 1943, fu decorato &quot;sul campo&quot; con Medaglia d'Argento al Valor Militare ed autorizzato a fregiarsi del Distintivo d'Onore per ferita. Fu insignito della Croce di Cavaliere della Corona d'Italia in zona di operazioni, personalmente dal Principe Umberto di Savoia. Ricevette anche la Croce di Cavaliere donato di 1^ Classe del Sovrano Ordine di Malta.<br>
Ripercorse tutta l'Italia risalendo verso Nord, col Corpo Italiano di Liberazione, ricoprendo il prestigioso ruolo di Capo Ufficio Sanit� - Stato maggiore. Dopo ben nove campagne di guerra fu collocato in congedo il 7 giugno 1946 col grado di Maggiore; successivamente nominato colonnello Medico &quot;ad honorem&quot;.<br>
Alle gi� menzionate onorificenze, al Dr. gerosa Brichetto furono conferite ben quattro Croci di Guerra &quot;al merito&quot;, insignito dalla Santa Sede della Croce d'Oro Lateranense, nominato Cittadino onorario dei Comuni di Mignano Montelupo e di Belvedere Ostiense, ed altre riconoscenze ancora.<br>
Nel luglio del 1946, appena congedato dopo ben sei anni di guerra, riprese servizio presso il Comune di Milano come Medico di reparto. In seguito a concorso, nel 1956 fu nominato Medico Condotto del Comune di Peschiera Borromeo (Milano), incarico che ricopr� fino al suo collocamento a riposo avvenuto nel 1985.<br>
Nel contempo ebbe modo di realizzare un'opera importante e destinata a perdurare nel tempo. Nel 1960 infatti fu promotore della Casa di Cura &quot;Le Quattro Marie&quot; in Milano, ora Centro Cardiologico &quot;Fondazione Monzino&quot;, struttura sanitaria all'avanguardia a livello europeo.<br>
Fino al 1964 il Dr. Gerosa Brichetto ne fu anche Direttore, incarico che degnamente ricopr� e che lasci� per tornare alla sua condotta medica, nella convinzione che � meglio dedicarsi alla gente piuttosto che spendere energie per mantenere posti di carriera voracemente ambiti.<br>
Sempre negli anni in cui esercit� l'attivit� di medico condotto, ricopriva anche gli incarichi di medico scolastico e medico aziendale, per questo fu conosciuto, stimato ed apprezzato divenendo un punto di riferimento per le pi� varie necessit�, come richieste d'aiuto nelle forme pi� diverse, pareri e consigli. Aveva un vero e proprio carisma che riusciva a coinvolgere le persone che lo conoscevano.<br>
Fin dai tempi dei suoi studi scolastici, il Dr. Gerosa Brichetto aveva sempre avuto una grande passione per la letteratura, per lo scrivere bene, quello che lui con affettuosa ironia amava definire &quot;le belle lettere&quot;. Quindi, oltre alle reminiscenze scolastiche, si dedic� a grandi letture e studi letterari, con predilezione per quelli a carattere storico. E fra quelli storici, furono sempre presenti la sanit� e la medicina in particolare.<br>
Citando la sua attivit� di scrittore si deve necessariamente evidenziare che le sue opere si dividono essenzialmente in tre argomentazioni: storiografia locale, letteratura ed argomenti militari. Questi ultimi sono impergnati sulla Guerra di Liberazione che, come gi� stato evidenziato, fu da lui vissuto in prima persona come ufficiale medico, da una posizione di tale rilievo e responsabilit� per cui i suoi scritti assumono oggi il ruolo di veri e propri documenti storici.<br>
Nel 1945. a guerra appena finita, pubblicava: &quot;Guerra di Liberazione - La 51a Sezione di Sanit�&quot;. Annotava episodi di guerra e parlava di uomini; il libro usciva anonimo ma la prefazione era firmata: &quot;Il vostro comandante&quot;.<br>
Poi, come abbiamo gi� visto, finita la guerra il Dr. Gerosa Brichetto torn� a fare il medico condotto; sebbene molto impegnato nella routine quotidiana si riserv� un po' di tempo per dedicarsi ai lavori intellettuali che lo appassionavano.<br>
Nel passato lo studio della storia locale era appannaggio dei parroci e dei medici. Al fascino di questa materia, non solo il Dr. Gerosa Brichetto non riusc� a sottrarsi, ma vi si dedic� con particolare passione e competenza.<br>
Si interess� in modo particolare del territorio compreso fra la periferia sud-est di Milano fino a Melegnano, comprese parti del territorio pavese, del Lodigiano, e oltre.<br>
Nel 1961 usciva il suo primo libro che trattava di storia locale.<br>
Il Dr. Gerosa Brichetto nel complesso ha pubblicato ben trenta fra fascicoli e libri. Si tratta di opere sovente ponderose, sempre bellissime nella loro veste tipografica, con una cadenza d'uscita pressoch� annuale.<br>
Due terzi dei suoi libri riguardano la storia locale del territorio che abbiamo accennato, i rimanenti sono di argomento militare. In tutti l'aspetto sanitario ha un ruolo preminente e di frequente ricorrenza.<br>
Fra tutti i suoi libri vi ha trovato anche posto, e un posto rilevante per la sua veste tipografica, l'opera: &quot;Vicenza Minore&quot;, a carattere antologico sulle poesie di Elisa De Muri e Olinto Grandesso Silvestri. Quest'ultimo, suo lontano parente, oltre ad essere poeta e patriota del Risorgimento, fu chirurgo di gran fama ed inventore, tra l'altro, delle &quot;legature elastiche in Chirurgia&quot; (5).<br>
Il Dr. Gerosa Brichetto si rivel� essere un grande storiografo. Il suo metodo, forse positivamente influenzato dalla preparazione professionale, era di una scientificit� ineccepibile. metodo di studio, scelta delle fonti, corredo iconografico, note esplicative e citazione bibliografiche facevano assurgere i suoi libri a vere e proprie opere di consultazione.<br>
La capacit� di esposizione e lo stile letterario rendevano la lettura, oltre che interessante, piacevole; a differenza della maggior parte delle opere storiche, che risultano essere quasi sempre ostiche alla letteratura.<br>
Pretendeva che la veste tipografica fosse dignitosa e gradevole, curando ed intervenendo personalmente nelle fasi di stampa.<br>
Oltre ai libri, ha pubblicato circa quattrocento corposi articoli, con le tematiche citate, su periodici locali; oltre trecentosessanta di questi su &quot;Il Melegnanese&quot;, del quale fu insostituibile e prezioso collaboratore.<br>
In circa trent'anni di ricerche e pubblicazioni, la grande esperienza acquisita e la generosa disponibilit� fecero del Dr. Gerosa Brichetto un punto di riferimento. La sua carismatica competenza nel campo invogliava gli appassionati cultori della storia locale a chiedere consigli e suggerimenti, oltre al piacere di scambiare esperienze e notizie (6). Sono molti gli studenti che si sono rivolti a lui al momento di stendere una tesi di laurea, tutti, indistintamente, oltre ad un cospicuo aiuto hanno beneficiato della sua esperienza e cordialit�.<br>
Si approdava alla casa di Ponte Lambro a Milano per consigli e consulenze in merito ad una ricerca storica e lo si salutava dopo ore di affascinanti colloqui, portandosi via come omaggio, uno dei suoi bei libri che, con sempre rinomato entusiasmo, dava alle stampe.<br>
Per la sua attivit� di medico svolta per oltre cinquant'anni nel territorio di Peschiera Borromeo, ma anche per il suo grande apporto alla ricerca storica a livello locale, nel 1995 fu insignito del &quot;Paul Harris Fellow&quot;, la pi� prestigiosa riconoscenza del Rotary Club.<br>
Questo riconoscimento � andato ad aggiungersi ai numerosi altri che il Dr. Gerosa Brichetto ha meritatamente ricevuto.<br>
Dopo una lunga malattia, durata anni, che lo port� sempre pi� frequentemente a ricoveri ospedalieri, e con soggiorni sempre pi� lunghi, il Dr. Gerosa Brichetto, il 14 agosto 1996, nel deserto estivo della metropoli milanese e con signorile discrezione, se ne and� per sempre.<br>
Fra i tanti ruoli che nella sua intensa vita fu chiamato a ricoprire, a quello di medico riserv� sempre un posto preminente. Tant'� che nell'epitaffio, da lui stesso voluto, non c'� fotografia e nemmeno le solite date ma, sotto il nome &quot;Giuseppe Gerosa Brichetto&quot;, compare solo la scritta &quot;medico&quot;.<br>
A riprova della sua realistica visione della vita ha voluto la frase: &quot;Et mors ultima restat post varios casus&quot;. In fondo � sempre la morte a sigillare definitivamente la vita, indipendentemente da come questa sia stata vissuta.<br>
(da &quot;Medicina e Ambiente&quot;, Atti del Congresso, Ispra 16-19 ottobre 1997 - a cura di Giuseppe Pettinari)</p></td>
        </tr>
      </table>
      <table width="98%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><p>&nbsp;</p></td>
        </tr>
      </table>
      <table width="98%"  border="0" cellpadding="0" cellspacing="0" bgcolor="#62B0FF">
        <tr>
          <td width="5%" bgcolor="#FFD900">&nbsp;</td>
          <td width="2%">&nbsp;</td>
          <td width="92%"><p><strong>Note</strong></p></td>
        </tr>
      </table>
      <table width="98%"  border="0" cellpadding="0" cellspacing="5" bgcolor="#B9DCFF">
        <tr>
          <td align="left" valign="top"><p><strong>(1)</strong> La Famiglia Gerosa Brichetto conserva una ricevuta di pagamento per &quot;l'Offerta di lire ottantacinque Millesimi 625 pari a 25 dollari pagata al Consorzio nazionale&quot; il 22 dicembre 1866 da F.P.Brichetto. La ricevuta � stata emessa a Torino il 14 settembre 1868, a firma di Eugenio di Savoia.<br><br>
              <strong>(2)</strong> Il Dr. Gerosa Brichetto ebbe modo di citare il &quot;Modernismo&quot; in &quot;Vicenza Minore&quot;, a proposito delle poesie di E. De Muri ed O. Grandesso Silvestri e dei loro rapporti con Giacomo Zanella ed Antonio Fogazzaro.<br><br>
              <strong>(3)</strong> &quot;Contributo allo studio della configurazione dei versamenti pleurici&quot; in &quot;Pensiero Medico&quot; Anno XXV - n.3 - Marzo 1936 - pagg. 59-71; &quot;La percussione nei versamenti pleurici e la plessimetria della regione vertebrale e paravertebrale&quot; in &quot;Manuale di Semeiotica Medica&quot; - Ed. F. Vallardi - Milano - 1938 - pagg.130-212<br><br>
              <strong>(4)</strong> Nonostante i disagi bellici, a riprova della sua applicazione professionale, pubblicher�: &quot;Osservazioni sulla cosiddetta febbre albanese&quot; in &quot;Notiziario di diagnostica e terapia&quot; - Anno XVI - n.4-5-6 - 1942 - pagg.1-8<br><br>
              <strong>(5)</strong> Su Olinto Grandesso Silvestri chirurgo aveva gi� fatto una pubblicazione: &quot;Una rivendicazione della Chirurgia Italiana Olinto Grandesso Silvestri&quot; in &quot;Gazzetta Medica Lombarda&quot; Anno XCIII - n.8 Agosto 1934 - pagg.3-6<br><br>
              <strong>(6)</strong> Allo scopo di continuare lo scambio di esperienze e notizie, oltre una ventina di appassionati studiosi di storia locale si sono spontaneamente uniti nel &quot;Gruppo di cultori di storia locale della Valle del Lambro&quot;, intitolato al Dr. Giuseppe Gerosa Brichetto. Il primo incontro fu tenuto a Sordio (Lodi) il 18 luglio 1997.</p></td>
        </tr>
      </table>
      <table width="100%"  border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><p>&nbsp;</p></td>
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
    <td bgcolor="#005A87">&nbsp;</td>
  </tr>
  <tr>
    <td align="left" valign="top"><img src="/log3.png" width="100%" height="20"></td>
  </tr>
</table>
<p class="piepagina"><a href="mailto:webmaster@aczivido.net">webmaster@aczivido.net</a></p>
</body>
</html>
