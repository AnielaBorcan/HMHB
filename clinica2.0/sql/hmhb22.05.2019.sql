-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Gazdă: 127.0.0.1:3306
-- Timp de generare: mai 22, 2019 la 04:21 PM
-- Versiune server: 5.7.24
-- Versiune PHP: 7.2.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Bază de date: `hmhb`
--

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `clinici`
--

DROP TABLE IF EXISTS `clinici`;
CREATE TABLE IF NOT EXISTS `clinici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `denumire` varchar(250) COLLATE utf16_romanian_ci NOT NULL,
  `adresa` varchar(250) COLLATE utf16_romanian_ci NOT NULL,
  `telefon` varchar(16) COLLATE utf16_romanian_ci NOT NULL,
  `email` varchar(64) COLLATE utf16_romanian_ci DEFAULT NULL,
  `logoFileName` varchar(50) COLLATE utf16_romanian_ci NOT NULL,
  `latitudine` double NOT NULL,
  `longitudine` double NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf16 COLLATE=utf16_romanian_ci;

--
-- Eliminarea datelor din tabel `clinici`
--

INSERT INTO `clinici` (`id`, `denumire`, `adresa`, `telefon`, `email`, `logoFileName`, `latitudine`, `longitudine`) VALUES
(1, 'Clinica New Medical', 'Bulevardul Stadionului 102-104, Buzău', '0772.153.310', 'newmedicalproiect@gmail.com', 'NewMedical.png', 45.153076, 26.798509),
(2, 'Cardio Clinique NCS', 'Str Pacii nr. 26, Buzau, jud. Buzau', '0786 511 860', 'drsavacardiologie@yahoo.com', 'Cardio_Clinics.png', 45.151513, 26.833741),
(3, 'MEDCON ', 'Colonel Ion Buzoianu, Nr. 55\r\nBuzău', '0238.445.590', NULL, 'medcon.png', 45.14707, 26.819237),
(4, 'CENTROMEDICA', 'Str. Tudor Vladimirescu, nr. 16 -19, Buzau', '0338401217', NULL, 'centromedica.png', 45.150512, 26.82269),
(5, 'Radu Claudia - Cabinet de Psihologie', 'Str. Patriei, nr. 55 bis, Buzau', '0742267491 ', NULL, 'RCCabinet_de_Psihologie.png', 45.148352, 26.813801),
(6, 'AmaMed Expert Center', 'Ramnicu Sarat, județ Buzau\r\nstr. Matei Basarab, 71', '0764903283 ', 'E.office@amamedexpertcenter.ro', 'AmaMed-Expert-Center.png', 45.386019, 27.050873),
(7, 'Angi San ', 'Str. Democratiei Nr. 83\r\nBuzau, Buzau', '0238.725.674', NULL, 'AngiSan.png', 45.152033, 26.809691),
(8, 'HELLO CLINIC\r\n', ' Bd-ul Unirii bloc 6A parter', '0729 930 950', NULL, 'HelloClinic.png', 45.149845, 26.816537),
(9, 'Cabinet de Pneumologie', 'Strada Patriei Nr. 55 bis, Buzău', '0741161259', NULL, 'cabinetPneumologie.png', 45.148564, 26.813541),
(10, 'Neurolife', 'Str.Mioritei, bl. A15, ap.1 (langa magazinul TransAlicom)', '0238717018', 'contact@neurolife.ro', 'neurolife.png', 45.156246, 26.814452),
(11, 'Neurosan', 'Bulevardul N. Titulescu Nr. 18, parter, cabinet nr. 15 ( Policlinica)', '0238.716.632', NULL, 'neurosan.png', 45.152426, 26.809589);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `clinici_domenii`
--

DROP TABLE IF EXISTS `clinici_domenii`;
CREATE TABLE IF NOT EXISTS `clinici_domenii` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_domeniu` int(11) NOT NULL,
  `id_clinica` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_domeniu` (`id_domeniu`),
  KEY `id_clinica` (`id_clinica`)
) ENGINE=InnoDB AUTO_INCREMENT=51 DEFAULT CHARSET=utf16 COLLATE=utf16_romanian_ci;

--
-- Eliminarea datelor din tabel `clinici_domenii`
--

INSERT INTO `clinici_domenii` (`id`, `id_domeniu`, `id_clinica`) VALUES
(1, 1, 1),
(2, 2, 1),
(3, 8, 1),
(4, 18, 1),
(5, 13, 1),
(6, 4, 1),
(7, 3, 1),
(8, 12, 1),
(9, 9, 1),
(10, 11, 1),
(11, 16, 5),
(12, 2, 2),
(30, 3, 3),
(31, 14, 4),
(32, 4, 4),
(33, 1, 4),
(34, 13, 4),
(35, 12, 4),
(36, 16, 4),
(37, 18, 4),
(38, 1, 6),
(39, 2, 6),
(40, 13, 6),
(41, 6, 6),
(42, 5, 7),
(43, 8, 7),
(44, 15, 8),
(46, 6, 9),
(47, 13, 10),
(48, 13, 11);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `clinici_specializari`
--

DROP TABLE IF EXISTS `clinici_specializari`;
CREATE TABLE IF NOT EXISTS `clinici_specializari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_clinica` int(11) NOT NULL,
  `id_specializare` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_clinica` (`id_clinica`),
  KEY `id_specializare` (`id_specializare`)
) ENGINE=InnoDB AUTO_INCREMENT=41 DEFAULT CHARSET=utf16 COLLATE=utf16_romanian_ci;

--
-- Eliminarea datelor din tabel `clinici_specializari`
--

INSERT INTO `clinici_specializari` (`id`, `id_clinica`, `id_specializare`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(9, 1, 9),
(10, 1, 10),
(11, 1, 11),
(12, 1, 12),
(13, 5, 13),
(14, 3, 14),
(15, 3, 15),
(16, 4, 16),
(17, 4, 17),
(18, 4, 4),
(19, 4, 18),
(20, 4, 10),
(21, 4, 13),
(22, 4, 21),
(23, 6, 4),
(24, 6, 1),
(25, 6, 18),
(26, 6, 7),
(27, 6, 22),
(28, 6, 23),
(29, 7, 24),
(30, 7, 6),
(31, 8, 25),
(32, 8, 26),
(33, 8, 27),
(34, 8, 28),
(35, 9, 22),
(36, 10, 7),
(37, 11, 7),
(39, 2, 3);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `domenii`
--

DROP TABLE IF EXISTS `domenii`;
CREATE TABLE IF NOT EXISTS `domenii` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `denumire` varchar(256) COLLATE utf16_romanian_ci NOT NULL,
  `imgFileName` varchar(50) COLLATE utf16_romanian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf16 COLLATE=utf16_romanian_ci;

--
-- Eliminarea datelor din tabel `domenii`
--

INSERT INTO `domenii` (`id`, `denumire`, `imgFileName`) VALUES
(1, 'Medicina interna', 'intern.png'),
(2, 'Cardiologie', 'heart.png'),
(3, 'Boli metabolice, nutritie si diabet', 'boliMetabolice.png'),
(4, 'Endocrinologie', 'endo.png'),
(5, 'Gastroenterologie', 'gastro.png'),
(6, 'Pneumologie', 'pneumo.png'),
(7, 'Oftalmologie', 'oftal.png'),
(8, 'ORL', 'ORL.png'),
(9, 'Psihiatrie', 'psihiatrie .png'),
(10, 'Ginecologie', 'ginecologie.png'),
(11, 'Chirurgie', 'chirurgieNou.png'),
(12, 'Ortopedie', 'ortopedie.png'),
(13, 'Neurologie', 'neurologie.png'),
(14, 'Dermatologie', 'dermatology.png'),
(15, 'Stomatologie', 'dinte.png'),
(16, 'Psihologie', 'psihologie.png'),
(17, 'Oncologie', 'oncology.png'),
(18, 'Urologie', 'urology.png');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `medici`
--

DROP TABLE IF EXISTS `medici`;
CREATE TABLE IF NOT EXISTS `medici` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nume` varchar(250) COLLATE utf16_romanian_ci NOT NULL,
  `telefon` varchar(16) COLLATE utf16_romanian_ci NOT NULL,
  `id_clinica` int(11) NOT NULL,
  `pozaProfil` varchar(255) COLLATE utf16_romanian_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_clinica` (`id_clinica`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf16 COLLATE=utf16_romanian_ci;

--
-- Eliminarea datelor din tabel `medici`
--

INSERT INTO `medici` (`id`, `nume`, `telefon`, `id_clinica`, `pozaProfil`) VALUES
(1, 'Iordache Gabriel', '0772.153.310', 1, 'Iordache_G.jpg'),
(2, 'Buzoiu Mădălina', '0772.153.310', 1, 'Buzoiu_M.jpg'),
(3, 'Şerbănete Corina', '0772.153.310', 1, 'SerbaneteC.jpg'),
(4, 'Anton Simona', '0772.153.310', 1, 'Anton_S.jpg'),
(5, 'Gavrilă Adriana', '0772.153.310', 1, 'Gavrila_A.jpg'),
(6, 'Mihalcea Mihaela ', '0772.153.310', 1, 'MihalceaM.jpg'),
(7, 'Sandu Valeriu', '0772.153.310', 1, 'doctor.png'),
(8, 'Grigorascu Lucica', '0772.153.310', 1, 'Grigorascu_L.jpg'),
(9, 'Micu Andrei', '0772.153.310', 1, 'doctor.png'),
(10, 'Porumb Dragoş', '0772.153.310', 1, 'doctor.png'),
(11, 'Constantin Simona', '0772.153.310', 1, 'Constantin_S.jpg'),
(12, 'Radan Melania', '0772.153.310', 1, 'RadanMelania.jpg'),
(13, 'Bostan Cătălin', '0772.153.310', 1, 'Bostan_C.jpg'),
(14, 'Radu Claudia', '0742267491', 5, 'RaduClaudia.jpg'),
(15, 'Silviana Constantinescu', '0238-445 590', 3, 'SilvianaC.jpg'),
(16, 'Dutescu Gheorghe', '0338401217', 4, 'Petru_Gh.jpg'),
(17, 'Gaţu Alina Andreea', '0338401217', 4, 'Gatu_A.jpg'),
(18, 'Lungu Stan Ana', '0338401217', 4, 'Lungu_S.jpg'),
(19, 'Mînăscurtă Angela', '0338401217', 4, 'MinascurtaA.jpg'),
(20, 'Mînăscurtă Valeriu', '0338401217', 4, 'MinascurtaV.jpg'),
(21, 'Bivolu Marina', '0338401217', 4, 'Bivolu_M.jpg'),
(22, 'Nita Marius Valentin', '0338401217', 4, 'NitaM.jpg'),
(23, 'Mircea Fugărescu', '0764 903 283', 6, 'MirceaF.jpg'),
(24, 'Carmen Milea', '0764 903 283', 6, 'Carmen_M.jpg'),
(25, 'Nadia Oprea', '0764 903 283', 6, 'NadiaOprea.jpg'),
(26, 'Daniela Voinea ', '0764 903 283', 6, 'Voinea_D.jpg'),
(27, 'Oana Năstase', '0764 903 283', 6, 'OanaNastase.jpg'),
(28, 'Iuliana Țopană', '0764 903 283', 6, 'Iuliana_T.jpg'),
(29, 'Elvis Firoiu', '0764 903 283', 6, 'Elvis_F.jpg'),
(30, 'Monica Chirea', '0764 903 283', 6, 'MonicaC.jpg'),
(31, 'Rareș Cătălin Bucur', '0764 903 283', 6, 'RaresBucur.jpg'),
(32, 'Ursachescu Andreea', '0771 205 607', 7, 'dr_ursachescu_andreea.jpg'),
(33, 'Ursachescu Cosmin', '0238 725 674', 7, 'UrsachescuCosmin.jpg'),
(34, 'Dinu I. Alexandru', '0729 930 950', 8, 'Doctor Stomatolog Dinu I. Alexandru.jpg'),
(35, 'Dani Zackem', ' 0729 930 950', 8, 'Dr. Dani Zackem.jpg'),
(36, 'Sina Kavian', ' 0729 930 950', 8, 'Dr. Sina Kavian.jpg'),
(37, 'Andrei Neamtu', ' 0729 930 950', 8, 'Dr. Andrei Neamtu.jpg'),
(38, 'Narcisa Ispas', '0741161259', 9, 'NarcisaI.jpg'),
(39, 'Radu Rodica Cristina', '0238717018', 10, 'RaduRodica.jpg'),
(40, 'Murgociu Dorina', '0238.716.632', 11, 'Murgociu.jpg'),
(61, 'Sava Nicoleta', '0786 511 860', 2, 'SavaNicoleta.jpg');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `medici_specializari`
--

DROP TABLE IF EXISTS `medici_specializari`;
CREATE TABLE IF NOT EXISTS `medici_specializari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_medic` int(11) NOT NULL,
  `id_specializare` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_medic` (`id_medic`),
  KEY `id_specializare` (`id_specializare`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf16 COLLATE=utf16_romanian_ci;

--
-- Eliminarea datelor din tabel `medici_specializari`
--

INSERT INTO `medici_specializari` (`id`, `id_medic`, `id_specializare`) VALUES
(1, 1, 1),
(2, 2, 3),
(3, 3, 2),
(4, 4, 2),
(5, 5, 4),
(6, 6, 5),
(7, 7, 6),
(8, 8, 7),
(9, 9, 8),
(10, 10, 9),
(11, 11, 10),
(12, 12, 11),
(13, 13, 12),
(14, 14, 11),
(15, 14, 13),
(16, 15, 14),
(17, 15, 15),
(18, 16, 16),
(19, 17, 17),
(20, 18, 4),
(21, 19, 18),
(22, 20, 10),
(23, 21, 13),
(24, 22, 21),
(25, 23, 4),
(26, 24, 2),
(27, 25, 1),
(28, 26, 18),
(29, 27, 7),
(30, 28, 23),
(31, 29, 23),
(32, 30, 22),
(33, 31, 23),
(34, 32, 24),
(35, 33, 6),
(36, 34, 24),
(37, 35, 25),
(38, 36, 26),
(39, 37, 27),
(40, 38, 22),
(41, 39, 7),
(42, 40, 7),
(44, 61, 3);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `specializari`
--

DROP TABLE IF EXISTS `specializari`;
CREATE TABLE IF NOT EXISTS `specializari` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `denumire` varchar(255) COLLATE utf16_romanian_ci NOT NULL,
  `id_domeniu` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_domeniu` (`id_domeniu`)
) ENGINE=InnoDB AUTO_INCREMENT=31 DEFAULT CHARSET=utf16 COLLATE=utf16_romanian_ci;

--
-- Eliminarea datelor din tabel `specializari`
--

INSERT INTO `specializari` (`id`, `denumire`, `id_domeniu`) VALUES
(1, 'Medic Primar in cardiologie', 2),
(2, 'Medic Specialist Medicina Interna', 1),
(3, 'Medic Specialist Cardiolog, Comp. in Ultrasonografie', 2),
(4, 'Medic Primar Medicină Internă', 1),
(5, 'Medic Specialist O.R.L.', 8),
(6, 'Medic Primar O.R.L.', 8),
(7, 'Medic Specialist in neurologie', 13),
(8, 'Medic primar Endocrinologie', 4),
(9, 'Medic specialist diabet, nutritie si boli metabolice', 3),
(10, 'Medic primar ortopedie-traumatologie', 12),
(11, 'Medic Specialist Psihiatrie', 9),
(12, 'Medic primar chirurgie generală', 11),
(13, 'Psiholog, Psihologia muncii, transporturilor', 16),
(14, 'Nutriţie şi boli metabolice', 3),
(15, 'Diabet zaharat', 3),
(16, 'Dermato-venerologie', 14),
(17, 'Medic specialist in endocrinologie, ecografie tiroidiană', 4),
(18, 'Medic primar in neurologie', 13),
(21, 'Medic specialist urologie', 18),
(22, 'Medic primar pneumologie', 6),
(23, 'Medic specialist pneumologie', 6),
(24, 'Medic specialist gastroenterologie', 5),
(25, 'Medic coordonator – Stomatologie generală.\r\n', 15),
(26, 'Medic specialist ortodontie si ortopedie dento-faciala.', 15),
(27, 'Medic specialist chirurgie dento-alveolara.', 15),
(28, 'Medic specialist parodontologie.', 15);

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `stiri`
--

DROP TABLE IF EXISTS `stiri`;
CREATE TABLE IF NOT EXISTS `stiri` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `continut` text COLLATE utf16_romanian_ci NOT NULL,
  `poze` varchar(255) COLLATE utf16_romanian_ci NOT NULL,
  `titlu` varchar(255) COLLATE utf16_romanian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf16 COLLATE=utf16_romanian_ci;

--
-- Eliminarea datelor din tabel `stiri`
--

INSERT INTO `stiri` (`id`, `continut`, `poze`, `titlu`) VALUES
(5, '<p class=\"news-body\">Oamenii care dorm mai putin de sase ore pe noapte pot avea un risc crescut de boli cardiovasculare, comparativ cu cei care dorm intre sapte si opt ore. Specialistii au descoperit prin acest studiu ca somnul insuficient creste riscul aterosclerozei, adica reducerea diametrului vaselor de sange pana la infundarea acestora, potrivit sciencedaily.com.</p>\r\n\r\n<p class=\"news-body\">\"Bolile cardiovasculare reprezinta o problema globala majora, iar noi incercam sa prevenim si sa tratam folosind mai multe abordari, cum ar fi produsele farmaceutice, activitatea fizica si dieta. Acest studiu subliniaza faptul ca somnul este important in lupta impotriva bolilor de inima. Cel mai grav este ca adesea neglijam acest factor. Acesta este primul studiu care arata ca somnul este asociat cu ateroscleroza in tot corpul, nu doar la nivelul inimii\", explica Jose M. Ordovas, autorul studiului.</p>\r\n\r\n<p class=\"news-body\">Studiile anterioare au demonstrat ca lipsa somnului ridica riscul bolilor cardiovasculare prin cresterea factorilor de risc, cum ar fi nivelurile de glucoza, tensiunea arteriala, inflamatia si obezitatea.</p>\r\n\r\n<p class=\"news-body\">La studiu au participat 3974 de angajati bancari din Spania. Specialistii au utilizat tehnici de imagistica pentru a detecta rata de progresie a leziunilor vasculare intr-un grup de oameni cu varsta medie de 46 de ani. Participantii nu sufereau de boli cardiace in acel moment, iar doua treimi erau barbati. Toti au purtat un actigraf, adica un dispozitiv mic care masoara non-stop activitatea si miscarea timp de sapte zile pentru a tine evidenta somnului.</p>\r\n\r\n<p class=\"news-body\">Oamenii au fost impartiti in patru grupuri:</p>\r\n<table>\r\n    <tr>\r\n      <td class=\"news-body\">Cei care au dormit mai putin de sase ore.\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n      <td class=\"news-body\">\r\n       Cei care au dormit intre sase si sapte ore.\r\n      </td>\r\n    </tr>\r\n    <tr>\r\n       <td class=\"news-body\">\r\n        Cei care au dormit intre sapte si opt ore.\r\n       </td>\r\n    </tr>\r\n    <tr>\r\n       <td class=\"news-body\">\r\n          Cei care au dormit mai mult de opt ore. \r\n       </td>\r\n    </tr>\r\n</table>\r\n\r\n<p class=\"news-body\">Participantilor li s-au facut ultrasunete 3D la inima si scanari cardiace pentru a identifica posibile boli.</p>\r\n\r\n<p class=\"news-body\">Cercetatorii au observat ca atunci cand au fost luati in considerare factorii de risc traditionali ai bolilor cardiace, participantii care au dormit mai putin de sase ore au avut un risc cu 27% mai mare de a dezvolta ateroscleroza la nivelul intregului corp, comparativ cu cei care au dormit intre sapte si opt ore.</p>\r\n\r\n<p class=\"news-body\">In mod similar, cei care au avut o calitate slaba a somnului au avut un risc cu 34% mai mare de a dezvolta ateroscleroza, comparativ cu cei care au raportat un somn calitativ.</p>\r\n\r\n<p class=\"news-body\">Calitatea somnului a fost calculata in functie de cat de des s-a trezit o persoana in timpul noptii si de frecventa miscarilor din timpul somnului, care reflecta fazele somnului.</p>\r\n\r\n<p class=\"news-body\">\"Este important sa subliniem faptul ca un somn mai scurt, dar calitativ, poate sa nu aiba efecte daunatoare doar pentru ca e scurt\", spune Fuster.</p>\r\n\r\n<p class=\"news-body\">Surprinzator, si un somn mai lung de opt ore pe noapte poate si asociat cu cresterea riscului aterosclerozei. Chiar daca numarul participantilor din acest interval de somn a fost mic, femeile au fost, in mod special, expuse riscului.</p>\r\n\r\n<p class=\"news-body\">Majoritatea participantilor care au avut un somn scurt si intrerupt au consumat cantitati mai mari de alcool si de cofeina.</p>\r\n\r\n<p class=\"news-body\">\"Multi cred ca alcoolul ne ajuta sa adormim mai repede, dar, daca consumati alcool, va puteti trezi dupa o scurta perioada de somn si puteti avea dificultati in a adormi din nou. Daca reusiti sa adormiti, exista un risc ridicat sa aveti un somn de slaba calitate\", explica Ordovas.</p>\r\n\r\n<p class=\"news-body\">Cercetarile anterioare sugereaza ca cafeaua poate avea efecte pozitive asupra inimii, dar Ordovas sustine ca depinde de cat de repede reuseste persoana respectiva sa metabolizeze cafeaua.</p>\r\n\r\n<p class=\"news-body\">\"In functie de genetica, daca metabolizati cafeaua mai repede, aceasta nu va afecta somnul. Totusi, daca este metabolizata incet, cofeina poate afecta somnul si poate creste riscul bolilor cardiovasculare\", adauga el.</p>\r\n\r\n<p class=\"news-body\">Studiul actual a avut un numar mare de participanti, toti fiind sanatosi. In plus, este semnificativ deoarece studiile anterioare s-au bazat pe chestionare, pe cand cel actual a utilizat un dispozitiv care a masurat orele de somn.</p>', 'item2.jpg', '<p class=\"news-title\">Persoanele care dorm putin au un risc ridicat de boli cardiovasculare</p>'),
(6, '<p class=\"news-body\">Exista o dezbatere continua cu privire la relatia dintre osteoartrita genunchiului si terapia hormonala, cu studii la scara mica, care ofera rezultate mixte. Un nou studiu condus de specialistii din Coreea demonstreaza ca femeile care au urmat aceasta terapie au avut o preponderenta mai mica a osteoartritei, comparativ cu femeile care nu au luat hormoni, potrivit sciencedaily.com.</p>\r\n\r\n<p class=\"news-body\">Rezultatele studiului au fost publicate in \"Menopause\", revista Societatii Americane de Menopauza.</p>\r\n<p class=\"news-title\">Ce este osteoartrita?</p>\r\n\r\n<p class=\"news-body\">Osteoartrita este cea mai frecventa afectiune musculo-scheletica in cazul persoanelor in varsta, fiind si principala cauza a durerii si dizabilitatii fizice. Este cauzata de modificari degenerative ale articulatiilor si afecteaza mai multe femei decat barbati, riscul fiind deosebit de ridicat la menopauza. Estrogenul are un efect antiinflamator in concentratii mari, astfel ca s-a emis o ipoteza potrivit careia modificarile hormonale ale femeilor, in special scaderea nivelului de estrogen, pot duce la o crestere semnificativa a riscului osteoartritei dupa menopauza.</p>\r\n\r\n<p class=\"news-body\">Deoarece genunchiul este articulatia cel mai frecvent afectata, osteoartrita genunchiului a fost punctul central al unui numar mare de studii privind eficacitatea terapiei hormonale. Cele mai frecvente tratamente pentru osteoartrita genunchiului includ interventii chirurgicale sau medicamente antiinflamatoare, ambele fiind asociate cu riscuri precum complicatii chirurgicale sau tulburari gastro-intestinale.</p>\r\n\r\n<p class=\"news-title\">Care sunt beneficiile terapiei cu hormoni?</p>\r\n\r\n<p class=\"news-body\">Mai multe studii au aratat ca terapia hormonala reduce modificarile hostologice ale cartilajului care este afectat si reduce si durerea cronica. Totusi, pana in momentul actual, nu a existat un studiu complex care sa examineze legatura dintre osteoartrita genunchiului si aceasta terapie.</p>\r\n\r\n<p class=\"news-body\">Cum a decurs studiul?</p>\r\n\r\n<p class=\"news-body\">Specialistii din Coreea au analizat datele a 4800 de femei care au intrat la menopauza. Astfel, au observat ca preponderenta osteoartritei genunchiului a fost semnificativ mai mica printre femeile care utilizau terapia cu hormoni, comparativ cu cele care nu au facut-o. Totusi, autorii au remarcat ca sunt necesare cercetari suplimentare, fiind importante si alte variabile, ca de exemplu varsta si indicele de masa corporala.</p>\r\n\r\n<p class=\"news-body\">Terapia hormonala joaca un rol protector impotriba osteoartritei genunchiului. Acest studiu sugereaza ca estrogenul administrat la menopauza poate inhiba deteriorarea cartilajului si a genunchiului, concluzioneaza JoAnn Pinkerton.</p>', 'item3.jpg', '<p class=\"news-title\">Terapia cu hormoni, cea mai eficienta pentru osteoartrita</p>'),
(7, '<p class=\"news-body\">Specialistii din Asociatia Europeana de Cardiologie Preventiva recomanda tuturor oamenilor diagnosticati cu diabet zaharat de tip II sa faca activitati fizice zilnic pentru a-si controla glicemia si pentru a-si imbunatati sanatatea inimii, potrivit eurekalert.org.</p>\r\n\r\n<p class=\"news-body\">\"Sedentarismul si alimentatia nesanatoasa sunt factorii care determina cel mai frecvent cresterea numarului de pacienti diagnosticati cu diabet zaharat de tip II si de pacienti cu probleme cardiovasculare. Diabetul dubleaza riscul mortalitatii. Totusi, cu cat pacientii fac mai multa miscare, cu atat mai mult scade riscul. Din pacate, sunt foarte putini care fac acest lucru\", explica Hareld Kemps, cardiolog la centrul medical Maxima din Veldhoven, Olanda.</p>\r\n\r\n<p class=\"news-body\">La nivel global, unul din 11 adulti are diabet, dintre care 90% au diabet zaharat de tip II. Aproape toti dezvolta, mai apoi, complicatii cardiovasculare, care sunt principala cauza de deces.</p>\r\n\r\n<p class=\"news-body\">Acest studiu contine recomandari practice medicale ce au ca scop motivarea pacientilor de a include activitatile fizice in rutina lor zilnica. Acestia trebuie sa isi stabileasca obiective realizabile si sa elaboreze programe individualizate de antrenament.</p>\r\n\r\n<p class=\"news-body\">\"In mod normal, medicii doar isi sfatuiesc pacientii, ceea ce nu este suficient. Pacientii trebuie sa fie evaluati, trebuie sa fie luate in considerare riscurile legate de activitatile fizice, dar si preferintele personale\", adauga Kemps.</p>\r\n\r\n<p class=\"news-body\">Pacientii sunt sfatuiti sa isi consulte medicul in privinta unui plan personalizat. Totusi, sunt multe activitati care nu necesita vizite medicale, cum ar fi mersul pe jos, sau cu bicicleta.</p>\r\n\r\n<p class=\"news-body\">Aderenta pe termen lung poate fi imbunatatita prin stabilirea unor obiective ce pot fi masurate in timp util. Planul de exercitii fizice poate fi adaptat in functie de preferintele pacientului. In plus, tehnologia ofera un plus. Pacientii pot fi monitorizati prin dispozitive precum smartwatch-uri, iar apoi datele pot fi trimise direct catre specialisti.</p>\r\n\r\n<p class=\"news-body\">Pentru o persoana in varsta, miscarea ar putea fi urcatul scarilor pana la apartament sau mersul pe jos la magazin. Chiar si acestea pot imbunatati cu adevarat calitatea vietii. Un alt stimulent este posibilitatea de a lua mai putine medicamente pentru controlul glicemiei.</p>\r\n\r\n<p class=\"news-body\">Obiectivele medicilor ar trebui sa fie fitness-ul cardiorespirator si controlul glicemiei. Ambele se pot imbunatati prin exercitii fizice, iar schimbarile influenteaza mortalitatea. In plus, sportul ajuta la scaderea tensiunii arteriale si a lipidelor daunatoare din sange.</p>\r\n\r\n<p class=\"news-title\">Pierderea in greutate nu trebuie sa fie scopul antrenamentelor.</p>\r\n\r\n<p class=\"news-body\">\"Este dificil sa pierdem in greutate doar prin exercitii fizice. Din aceasta cauza multi pacienti nu se simt suficient de motivati si renunta. Pierderea in greutate este importanta, dar aceasta nu include doar sport, ci si o dieta sanatoasa si echilibrata\", spune Kemps.</p>\r\n\r\n<p class=\"news-body\">Tipul de exercitii si intensitatea acestora trebuie sa fie personalizate in functie de fiecare pacient. De exemplu, alternarea mersului pe jos moderat si intens este cel mai eficient pentru controlarea nivelului de zahar din sange, dar poate fi o practica periculoasa pentru pacientii care dezvolta aritmii, adica ritm cardiac anormal.</p>\r\n\r\n<p class=\"news-body\">\"Trebuie sa subliniez importanta activitatilor fizice pentru pacientii cu diabet zaharat de tip II si cu probleme cardiace. Perioadele scurte de plimbare imbunatatesc controlul glicemiei, iar doua ore de plimbare pe saptamana reduc riscul complicatiilor cardiace\", concluzioneaza Kemps.</p>', 'item1.jpg', '<p align=\"center\" class=\"news-title\">Activitatile fizice reduc mortalitatea in cazul pacientilor diagnosticati cu diabet</p>');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `zone`
--

DROP TABLE IF EXISTS `zone`;
CREATE TABLE IF NOT EXISTS `zone` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `denumire` varchar(64) COLLATE utf16_romanian_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf16 COLLATE=utf16_romanian_ci;

--
-- Eliminarea datelor din tabel `zone`
--

INSERT INTO `zone` (`id`, `denumire`) VALUES
(1, 'Cap'),
(2, 'Gat'),
(3, 'Torace'),
(4, 'Abdomen'),
(5, 'Bazin'),
(6, 'Membre superioare'),
(7, 'Membre inferioare');

-- --------------------------------------------------------

--
-- Structură tabel pentru tabel `zone_domenii`
--

DROP TABLE IF EXISTS `zone_domenii`;
CREATE TABLE IF NOT EXISTS `zone_domenii` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_zona` int(11) NOT NULL,
  `id_domeniu` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id_zona` (`id_zona`),
  KEY `id_domeniu` (`id_domeniu`)
) ENGINE=InnoDB AUTO_INCREMENT=45 DEFAULT CHARSET=utf16 COLLATE=utf16_romanian_ci;

--
-- Eliminarea datelor din tabel `zone_domenii`
--

INSERT INTO `zone_domenii` (`id`, `id_zona`, `id_domeniu`) VALUES
(1, 1, 3),
(2, 1, 7),
(3, 1, 8),
(4, 1, 9),
(5, 1, 11),
(6, 1, 13),
(7, 1, 14),
(8, 1, 15),
(9, 1, 16),
(10, 1, 17),
(11, 2, 1),
(12, 2, 4),
(13, 2, 8),
(14, 2, 11),
(15, 2, 14),
(16, 2, 17),
(17, 3, 1),
(18, 3, 2),
(19, 3, 3),
(20, 3, 6),
(21, 3, 11),
(22, 3, 14),
(23, 3, 17),
(24, 4, 1),
(25, 4, 3),
(26, 4, 4),
(27, 4, 5),
(28, 4, 11),
(29, 4, 14),
(30, 4, 17),
(31, 4, 18),
(32, 5, 10),
(33, 5, 11),
(34, 5, 14),
(35, 5, 17),
(36, 5, 18),
(37, 6, 11),
(38, 6, 12),
(39, 6, 14),
(40, 6, 17),
(41, 7, 11),
(42, 7, 12),
(43, 7, 14),
(44, 7, 17);

--
-- Constrângeri pentru tabele eliminate
--

--
-- Constrângeri pentru tabele `clinici_domenii`
--
ALTER TABLE `clinici_domenii`
  ADD CONSTRAINT `clinici_domenii_ibfk_1` FOREIGN KEY (`id_clinica`) REFERENCES `clinici` (`id`),
  ADD CONSTRAINT `clinici_domenii_ibfk_2` FOREIGN KEY (`id_domeniu`) REFERENCES `domenii` (`id`);

--
-- Constrângeri pentru tabele `clinici_specializari`
--
ALTER TABLE `clinici_specializari`
  ADD CONSTRAINT `clinici_specializari_ibfk_1` FOREIGN KEY (`id_clinica`) REFERENCES `clinici` (`id`),
  ADD CONSTRAINT `clinici_specializari_ibfk_2` FOREIGN KEY (`id_specializare`) REFERENCES `specializari` (`id`);

--
-- Constrângeri pentru tabele `medici`
--
ALTER TABLE `medici`
  ADD CONSTRAINT `medici_ibfk_1` FOREIGN KEY (`id_clinica`) REFERENCES `clinici` (`id`);

--
-- Constrângeri pentru tabele `medici_specializari`
--
ALTER TABLE `medici_specializari`
  ADD CONSTRAINT `medici_specializari_ibfk_1` FOREIGN KEY (`id_medic`) REFERENCES `medici` (`id`),
  ADD CONSTRAINT `medici_specializari_ibfk_2` FOREIGN KEY (`id_specializare`) REFERENCES `specializari` (`id`);

--
-- Constrângeri pentru tabele `specializari`
--
ALTER TABLE `specializari`
  ADD CONSTRAINT `specializari_ibfk_1` FOREIGN KEY (`id_domeniu`) REFERENCES `domenii` (`id`);

--
-- Constrângeri pentru tabele `zone_domenii`
--
ALTER TABLE `zone_domenii`
  ADD CONSTRAINT `zone_domenii_ibfk_1` FOREIGN KEY (`id_zona`) REFERENCES `zone` (`id`),
  ADD CONSTRAINT `zone_domenii_ibfk_2` FOREIGN KEY (`id_domeniu`) REFERENCES `domenii` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
