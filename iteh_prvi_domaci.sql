-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 18, 2022 at 01:16 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iteh_prvi_domaci`
--

-- --------------------------------------------------------

--
-- Table structure for table `objave`
--

CREATE TABLE `objave` (
  `id_objave` int(11) NOT NULL,
  `sadrzaj` text NOT NULL,
  `naslov` varchar(100) NOT NULL,
  `id_korisnika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `objave`
--

INSERT INTO `objave` (`id_objave`, `sadrzaj`, `naslov`, `id_korisnika`) VALUES
(23, 'Kopaonik (poznat i kao Srebrna planina) je najveći planinski masiv u južnoj Srbiji koji se pruža od severozapada ka jugoistoku dužinom od oko 75 km, dosežući u srednjem delu širinu od oko 40 km. Jedan njegov deo je zaštićena zona pod imenom nacionalni park Kopaonik u okviru koga postoji veći broj zaštićenih prirodnih celina, a na njemu se nalazi i najveći skijaški centar u Srbiji. Njegov najviši vrh je Pančićev vrh sa 2017 m nmv. na kome se nalazi mauzolej čuvenog srpskog prirodnjaka po kome je dobio ime, oko koga se nalazi baza vojske Srbije. Ceo masiv je dobio naziv po velikom rudnom bogatstvu koje je na njemu eksploatisano još od srednjeg veka, a na njegovom širem prostoru je smešten čitav niz kulturno-istorijskih spomenika iz perioda od XII do XV veka. Zahvaljujući razvijenom turističkom centru sa savremenim hotelima i pratećim objektima, Kopaonik predstavlja jednu od najpopularnijih turističkih destinacija u Srbiji.', 'Kopaonik', 0),
(24, 'U građi Kopaonika učestvuju sve tri grupe stena. Njegovo jezgro sačinjeno je od intruzivne mase tonalitskog granita, koga od serpentinske mase odvaja zona škriljaca. Meridijanski pravac pružanja granitnog jezgra odredio je i pravac pružanja glavnog bila Kopaonika. U sastav ove planine ulaze još andezit i dacit, izlivne magmatske stene, odnosno krečnjaci i peščari, koji se prema načinu postanka klasifikuju kao sedimentne stene. Najvažnije rude Kopaonika nalaze se u pomenutim izlivnim magmatskim stenama.\r\n\r\nRaniji naziv najvišeg vrha bio je Suvo Rudište, a poticao je od mnogobrojnih rudnih žica koje izbijaju oko njega. Ovo je bio jedan od brojnih toponima koji ukazuju na rudno bogatstvo Kopaonika.', 'Geoloski sastav Kopaonika', 0),
(25, 'Kopaonik ima karakter horsta jer je sa svih strana ograničen rasedima (donjoibarski, župski, zapadnomoravski i kosovski).\r\n\r\nRaščlanjen je dolinama, između njegovih vrhova nalaze se prevoji, a na planinskim stranama javljaju se površi (fluvijalna kopaonička površ). Središnji deo planine je prostrana, fluvijalna zatalasana površ visoka oko 1 700 m (nv), koja se naziva „Ravni Kopaonik”.[1] Oko površi se dižu Suvo Rudište sa Pančićevim (Milanovim) vrhom (2017 m), Karaman (1934 m), Gobelja (1834 m) i dr. Jugoistočno od Suvog Rudišta greben Kopaonika je sužen i raščlanjen u niz plastastih uzvišenja: Čardak (1590 m), Šatorica (1750 m) i Oštro koplje (1789 m), između kojih su široke presedline.\r\n\r\nSa zapadne strane, od Ibarske magistrale, vode dva puta za Ravni Kopaonik, jedan od Biljanovca uz Jošaničku reku, a drugi od Rudnice; i sa istočne strane od Kruševca i Toplice preko Brzeća. Od Ravnog Kopaonika odvaja se njegov istočni ogranak sa spuštanjem na prevoj Mramor (1140 m), zatim se penje ka Velikoj ogledni (1359 m) i talasastim grebenom Vrata (1072 m), Počar (1163 m) završava sa Javorcem i njegovim vrhom Žurla (869 m), spuštajući se strmo u Jankovu klisuru koja ga odvaja od planine Jastrebac.', 'Reljef', 0),
(26, 'Sa skoro 200 sunčanih dana godišnje, Kopaonik zaslužuje svoje drugo ime „Sunčana planina“. Južni položaj, visina i otvorenost terena sprečava zadržavanje oblaka nad planinom. Hladan vazduh pada u okolne ravnice i uvale, tako da zimske temperature nisu preniske. Prosečna godišnja temperatura je 3,7 °C. Sneg počinje krajem novembra i traje do maja, prosečno 159 dana godišnje. Nivo padavina je veći od 1000 mm godišnje.', 'Klima', 0),
(27, 'Na Kopaoniku je najrasprostranjenija raskomadana šumsko-pašnjačka zona središnje Srbije. Na višim delovima je četinarska smrčeva i jelova, a po stranama bukova i hrastova šuma.\r\n\r\nKopaonik je mesto na kome se mogu naći primerci endemske flore kao što su kopaonička čuvarkuća (Sempervivum kopaonicense Pancic), Pančićeva potočarka (Cardamine Pancici) i kopaonička ljubičica (Viola kopaonicensis).\r\n\r\nOd mnogobrojnih životinjskih vrsta najznačajniji su sivi soko (Falco peregrinus), suri orao (Aquila chrysaetos), buljina (Bubo bubo), divlja mačka (Felix silvestris) i srna (Capreolus capreolus).', 'Flora i fauna', 0),
(28, 'Stočarstvo je glavno zanimanje stanovništva, a u novije vreme turizam. Kopaonik je već u srednjem veku bio rudarska oblast, pa su iz tog perioda ostali mnogi potkopi, nazivi i rudarski alati. Rudarstvo je obnovljeno u novije vreme, naročito u Trepči, koja na obroncima ove planine ima velika nalazišta olovno-cinkane rude. U samom podnožju Pančićevog vrha se nalazi rudnik Belo Brdo.\r\n\r\nDanas je na Ravnom Kopaoniku veliki turistički planinski centar, sa brojnim smeštajnim kapacitetima, sistemom smučarskih staza i žičara i drugom infrastrukturom. Drugi takav kompleks se razvija kod sela Brzeća na istočnoj padini, gde u hotelima, apartmanima i kućama ima oko 1.000 ležaja. Planinski dom je podignut još 1935.[6]\r\n\r\nPrivlačnost Kopaonika leži u izuzetnoj dinamici njegovog reljefa. Prostrani planinski pašnjaci guste zimzelene i mešovite šume, kao i planinski vrhovi sa kojih se vide Šar planina, Stara Planina kao i ostale okolne planine ostaju u neizbrisivom sećanju svih koji su posetili ovu planinsku lepoticu.', 'Privreda', 0);

-- --------------------------------------------------------

--
-- Table structure for table `skijasi`
--

CREATE TABLE `skijasi` (
  `id_korisnika` int(11) NOT NULL,
  `ime_prezime` varchar(50) NOT NULL,
  `korisnicko_ime` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `lozinka` varchar(20) NOT NULL,
  `skipas_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skijasi`
--

INSERT INTO `skijasi` (`id_korisnika`, `ime_prezime`, `korisnicko_ime`, `email`, `lozinka`, `skipas_id`) VALUES
(2, 'Nikola', 'Jelic', 'nikolajelic00@gmail.com', 'jelkica', 0),
(7, 'Stefan', 'Stefan123', 'stefan@gmail.com', 'stefan', 0),
(8, 'Marko', 'Mare', 'marko@gmail.com', 'marko', 0),
(11, 'Vesna', 'Vesna123', 'vesna@gmail.com', 'vesna', 0),
(12, 'Dusan', 'Dule00', 'dule@gmail.com', 'dusan', 0),
(14, 'Lazar', 'laki', 'laki@gmail.com', 'lazar', 0),
(15, 'Milos', 'Miki', 'miki@gmail.com', 'milos', 0),
(16, 'David', 'Dale', 'dale@gmail.com', 'dale', 0),
(17, 'Marija', 'maja123', 'maja@gmail.com', 'maja', 0),
(18, 'Ugljesa', 'uki123', 'ugljesa@gmail.com', 'uki', 0);

-- --------------------------------------------------------

--
-- Table structure for table `skipas`
--

CREATE TABLE `skipas` (
  `skipas_id` int(11) NOT NULL,
  `sezona` text NOT NULL,
  `trajanje` int(11) NOT NULL,
  `tip` text NOT NULL,
  `id_korisnika` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skipas`
--

INSERT INTO `skipas` (`skipas_id`, `sezona`, `trajanje`, `tip`, `id_korisnika`) VALUES
(123456, '2022', 15, 'standard', 2),
(456987, '2023', 10, 'deciji', 17),
(789465, '2022', 12, 'deciji', 7);

-- --------------------------------------------------------

--
-- Table structure for table `staze`
--

CREATE TABLE `staze` (
  `naziv_staze` varchar(30) NOT NULL,
  `duzina_staze` int(11) NOT NULL,
  `kategorija` varchar(20) NOT NULL,
  `id_staze` int(11) NOT NULL,
  `opis_staze` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staze`
--

INSERT INTO `staze` (`naziv_staze`, `duzina_staze`, `kategorija`, `id_staze`, `opis_staze`) VALUES
('Bela reka I', 1720, 'Plava', 1, 'Tip žičare: Dvosed Poma\r\nDužina: 1.720m\r\nKapacitet: 800\r\nVisinska razlika: 249m\r\nTrajanje vožnje: 10.50 min\r\n\r\nŽičara: tipa dvosedežnica – dužine trase 1720 m, visinske razlike 249 m. Polazi sa oko 1057 m/nv, a izlazak je na 1360m. Namenjena prvenstveno skijašima smeštenim u Brzecu za izvlačenje do vrha planine. Vožnja od početne Bele reke I (1100m) do vrha žičare Bela reka II (1860m) traje oko 40 min.\r\n\r\nStaza: Plava – Laka staza, koja je zbog male nadmorske visine često bez snega, pa žičare služe i za spuštanje sa vrha do Brzeća.'),
('Pancicev vrh', 1393, 'Crvena', 2, 'Tip žičare: Isklopivi četvorosed Doppelmayr\r\nVrsta staze: plava/crvena – srednje laka\r\nDužina: 1393m\r\nVisinska razlika: 248m\r\nVreme vožnje: 5 min\r\n\r\nŽičara: tipa isklopivi četvorosed – dužine trase 1.393m, visinska razlika 248 m.\r\nPrva žičara na Kopaoniku sa isklopivim korpama. Postavljena je 2006. godine umesto do tada najstarije kopaoničke jednosed žičare. Polazna stanica je u središnjem delu „Doline sporova“, a izlazna na vrhu Suvo rudište. Ova žičara radi i tokom leta.\r\n\r\nStaza: Crvena- Srednje teška / Plava – Laka. Staze se spuštaju sa obe strane žičare, a od polovine se granju na više trasa koje se zašticene šumom spuštaju prema turistickom centru. Sa vrha Suvo rudište možete preći na sve ostale delove skijališta.'),
('Karaman greben', 1440, 'Plava', 3, 'Tip žičare: Isklopivi šestosed Doppelmayr\r\nVrsta staze: plava – laka\r\nDužina: 1.225m\r\nVisinska razlika: 165m\r\nVreme vožnje: 5 min\r\n\r\nŽičara: tipa isklopivi šestosed – dužine trase 1.225 m, visinska razlika 165 m. Vodi od turistickog centra (Doline sportova) do vrha Karaman greben (1904m/nv). Obzirom da je glavna žičara za izlazak iz turistickog centra, cesto su velike gužve i dugo je cekanje u redu na žicu. Šestosed je postavljen za zimu 2010/2011 a zamenio je, uz produženje trase, postojeći četvorosed koji je te isrte godine prebačen na Sunčanu dolinu. Polazna stanica je spuštena niže uz polaznu stanicu Pančića. Pre pomenutog četvoroseda, do 2004 godine na ovoj trasi se nalazila dvosed žičara koja je premeštena na planinu Dibčibare.\r\n\r\nStaza: Plava/Laka. Staze sa obe strane žičare idealne za početnike i osrednje skijaše.\r\nPo izlasku sa žičare, sa leve staze odvaja prelazna staza prema žičari br.8 Mali Karaman.\r\nSa desne staze odvaja prelazna (tzv. test) staza prema prevoju Pajino preslo (1.800 m/nv) i dalje prema br.6 Dubokoj ili br.22 Mašincu.'),
('Duboka I', 1440, 'Crna', 4, 'Tip žičare: Isklopivi četvorosed Doppelmayr\r\nVrsta staze: crvena/crna- srednje-teška\r\nDužina: 1409m\r\nVisinska razlika: 385m\r\nVreme vožnje: 5 min\r\n\r\nŽičara: tipa isklopivi četvorosed – dužine trase 1.409m, visinska razlika 385 m. Vodi iz Duboke (1.595m) do Suvog rudišta (1.976m). Ovo je jedina žičara na Kopaoniku koja ima krivinu u trasi i na njoj međustanicu.\r\n\r\nStaza: Crveno-Crna / Srednja-teška. Žičari pripadaju dve ski staze teška (crna) i srednje teška (crvena). Većina ski takmičenja se održavaju na crnoj stazi. Veći deo je okružen šumom. Pri dnu je teža nego na vrhu. Preporučuje se boljim skijašima. Staza ima FIS hmologizaciju za održavanje takmičenja.'),
('Malo jezero', 410, 'Plava', 5, 'Tip žičare: Tanjir Poma\r\nVrsta staze: Plava – laka\r\nDužina: 450m\r\nVisinska razlika: 76m\r\nVreme vožnje: 2.5 min\r\n\r\nŽičara: Ski lift tipa tanjir – dužine trase 450 m, visinska razlika 76 m. Vodi od apartmanskog naselja Konaci do Krsta (1715m).\r\n\r\nStaza: Plava/Laka. To je vrlo kratka staza, zaklonjena od vetrova, tako da radi i u najnepovoljnijim meteorološkim uslovima. Gornji deo nešto strmiji prelazi u kraću zaravan a zatim u strmiji završni deo staze. Levo gledano u vis, paralelno se nalazi Half-pipe za snowboardere. Postoji mogucnost da sa ove staze relativno ravnom prečicom stignete do polazne stanice žilčara Pančić ili Karaman Greben. sa vrha staze levo možezte preći na stazu Sunčana dolina. Ovo je jedina osvetljena staza na kopaoniku za noćno skijanje (od 19 do 22 h).'),
('Krcmar', 1902, 'Crna', 6, 'Tip žičare: Dvosed RTB\r\nVrsta staze: crvena/crna- srednje-teška\r\nDužina: 1.930m\r\nVisinska razlika: 471m\r\nVreme vožnje: 12-18min\r\n\r\nŽičara: Dvosed žičara – dužine trase 1.930 m, visinske razlike 471m. Polazna stanica je u dnu Duboke, a izlazna na Krčmaru, neposredno ispod Pančićevog vrha.\r\n\r\nStaza: Crvena – Srednje teška. To je duža staza na istocno – južnoj strani Kopaonika. Polazi sa dna Duboke, i vodi do najvišeg Pančićevog vrha (2017 m) na Kopaonika. Pri vrhu staza je lakša i osunčana, u dnu nešto teža, okružena šumom. Ima međustanicu, tako da može da se izbegne najstrmiji deo pri dnu staze. Od medustanice vodi prečica koja se spušta na početnu stanicu žičare br.6 Duboka\r\n\r\nNa dnu staze je i polazna stanica četvoroseda br.20 Duboka II, koja služi za izvlačenje prema Karaman grebenu i dalje prema turističkom centru. Ova žičara nije godinama bila dostupna zbog posledica NATO bombardovanja vrha Kopaonika. Iako samo postrojenje žičare nije bilo oštećeno, opasnost su bile kasetne bombe. Kada je teren očišćen, žičara je nakon remonta ponovo proradila.'),
('Gobelja relej', 700, 'Crvena', 7, 'Tip žičare: Isklopivi četvorosed Doppelmayr\r\nVrsta staze: plava, crvena, crna – laka, srednja, teška\r\nDužina: 878m\r\nVisinska razlika: 233m\r\nVreme vožnje: 4 min\r\n\r\nŽičara: Četvorosed žičara – dužine trase 878 m, visinska razlika 233 m. 2008 je četvorosedom zamenjin ski lift tipa tanjir. Krajnja žičara na severu skijališta.\r\n\r\nStaza: Crvena-Srednje teška / Crna-Teška. Do nje se dolazi sa dna staze br.12 Gobelja relej. Sa vrha se otvara lep pogled na Župu i Toplicu. Pored predhodno dve postojeće staze prosečene su još dve'),
('Krst', 671, 'Plava', 14, 'Tip žičare: Četvorosed Vrsta staze: Plava – laka Dužina: 671 m Visinska razlika: 116 m Vreme vožnje: 7 min  Žičara: Tipa četvorosed sa trakom za ubrzavanje i fiksnim korpama na sajli – Dužina trase 671 m, visinska razlika 116 m. Novoizgrađena žičara puštena u pogon zime 2010/2011. Polazna stanica je u „Dolini sporova“ desno od žičare „Pančić“, a izlazna stanica poviše gornje stanice četvoroseda Sunčana dolina.  Staza: Plava/Laka. Uz ovu žičaru se spuštaju dve staze, sa svake strane po jedna. Idealne su za početnike i obuku skijanja. Pored ove dve pripadajuće staze, sa vrha ove žičare možete skijati levo ka stazama Malo jezero i Sunčana dolina.'),
('Mali karaman', 1082, 'Plava', 15, 'Tip žičare: Četvorosed Doppelmayr Vrsta staze: plava – laka Dužina: 1082m Visinska razlika: 193m Vreme vožnje: 6.5-7 min  Žičara: 8a – Ski lift tipa tanjir- Dužine trase 1.082 m, visinska razlika 193 m. kao i četvorosed žičara sa trakom za ubrzavanje – Dužine trase 1.042 m, visinska razlika 193 m.. Mali Karaman je bio usko grlo skijališta pa je 2006. paralelno sa trasom ski lifta izgrađena četvoroseda žičara. Ski lift nije demontiran i koristi se po potrebi.  Staza: Plava – Laka. Sa obe strane žičara uređene su staze za skijanje. Na izlazu sa žičare levo se odvaja prelazna staza preme žicari br.9 Marine vode. Na istoj levoj stazi nalazi se i poznati Planinarski dom RTANJ. Sa desne strane se odvaja prelazna staza prema žicari br.7 Karaman greben i turistickom centru. Na samom vrhu možete se preci na staze Gvozdac i Kneževske bare, ili prelaznom stazom do Bele reke II.'),
('Ledenice', 782, 'Crna', 17, 'Tip žičare: Sidro RTB Vrsta staze: crna – teška Dužina: 782m Visinska razlika: 265m Vreme vožnje: 4 min  Žičara: Ski lift tipa sidro – dužine trase 781 m, visinske razlike 267m. Polazi sa Gvozdaca i izvlači na vrh ledenice. Uglavnom nije u funkciji i služi kao rezerva za izvlačenje sa Gvozdaca. Staza: Crna – Teška i spušta se sa vrha Ledenice. Poslednjih godina se sneg na njoj ne taba, pa je pogodna za dobre skijaše koji vole skijanje po dubokom netaknutom snegu. (1915m/nv). Donja polovina staze je zajednička sa žičarom Gvozdac. Sa vrha Ledenice, osim pripadajućom stazom možete levo prema Beloj reci II ili ravnom prelaznom stazom prema Malom Karamanu.'),
('Marine vode', 909, 'Plava', 18, 'Tip žičare: ski lift Vrsta staze: plava – laka Dužina: 909m Visinska razlika: 187m Vreme vožnje: 4.5 min  Žičara: Ski lift tipa tanjir – dužine trase 909 m, visinska razlika 187 m. Do pocetne stanice se stiže sa vrha Mali Karaman obeleženom stazom. Vodi sa lokacije Marine vode na vrh Vučak – Karaman  Staza: Plava / Laka. Nalazi se na istocnoj strani i spusta se sa leve strane žičare sa vrha Vučak (1934 m/nv) prema, Marinim vodama. 2009. je prosečena i trasa desne staze. Sa vrha Vučak se može preci na stazu br.10 Karaman i dalje preme Gobelji ili vratiti nazad na stazu br.8 Mali Karaman.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `objave`
--
ALTER TABLE `objave`
  ADD PRIMARY KEY (`id_objave`),
  ADD KEY `id_korisnika` (`id_korisnika`);

--
-- Indexes for table `skijasi`
--
ALTER TABLE `skijasi`
  ADD PRIMARY KEY (`id_korisnika`),
  ADD KEY `skipas_id` (`id_korisnika`),
  ADD KEY `skipas_id_2` (`skipas_id`),
  ADD KEY `skipas_id_3` (`skipas_id`);

--
-- Indexes for table `skipas`
--
ALTER TABLE `skipas`
  ADD PRIMARY KEY (`skipas_id`),
  ADD KEY `skipas_id` (`skipas_id`);

--
-- Indexes for table `staze`
--
ALTER TABLE `staze`
  ADD PRIMARY KEY (`id_staze`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `objave`
--
ALTER TABLE `objave`
  MODIFY `id_objave` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `skijasi`
--
ALTER TABLE `skijasi`
  MODIFY `id_korisnika` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `staze`
--
ALTER TABLE `staze`
  MODIFY `id_staze` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
