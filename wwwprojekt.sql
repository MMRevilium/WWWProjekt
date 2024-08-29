-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 29 Sie 2024, 19:44
-- Wersja serwera: 10.4.25-MariaDB
-- Wersja PHP: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wwwprojekt`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `buildy`
--

CREATE TABLE `buildy` (
  `ID` int(11) NOT NULL,
  `Nazwa` text NOT NULL,
  `Opis` text DEFAULT NULL,
  `obrazek` varchar(50) DEFAULT NULL,
  `AutorID` int(11) NOT NULL,
  `BronID` int(11) NOT NULL,
  `BronAbility1` tinyint(3) UNSIGNED NOT NULL,
  `BronAbility2` tinyint(3) UNSIGNED NOT NULL,
  `BronPassive` tinyint(3) UNSIGNED NOT NULL,
  `OffHandID` int(11) NOT NULL,
  `HelmID` int(11) NOT NULL,
  `HelmAbility` tinyint(3) UNSIGNED NOT NULL,
  `HelmPassive` tinyint(3) UNSIGNED NOT NULL,
  `ZbrojaID` int(11) NOT NULL,
  `ZbrojaAbility` tinyint(3) UNSIGNED NOT NULL,
  `ZbrojaPassive` tinyint(3) UNSIGNED NOT NULL,
  `ButyID` int(11) NOT NULL,
  `ButyAbility` tinyint(3) UNSIGNED NOT NULL,
  `ButyPassive` tinyint(3) UNSIGNED NOT NULL,
  `PelerynaID` int(11) NOT NULL,
  `JedzenieID` int(11) NOT NULL,
  `PotkiID` int(11) NOT NULL,
  `BagID` int(11) NOT NULL,
  `Schowaj` tinyint(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `buildy`
--

INSERT INTO `buildy` (`ID`, `Nazwa`, `Opis`, `obrazek`, `AutorID`, `BronID`, `BronAbility1`, `BronAbility2`, `BronPassive`, `OffHandID`, `HelmID`, `HelmAbility`, `HelmPassive`, `ZbrojaID`, `ZbrojaAbility`, `ZbrojaPassive`, `ButyID`, `ButyAbility`, `ButyPassive`, `PelerynaID`, `JedzenieID`, `PotkiID`, `BagID`, `Schowaj`) VALUES
(14, 'TestBuild', 'Testowy build postaci', 'Autograf.png', 2, 98, 1, 2, 1, 83, 2, 1, 0, 30, 2, 2, 55, 0, 1, 107, 109, 111, 142, 0),
(15, 'TestBuild', 'Testowy build postaci', '', 2, 98, 1, 2, 1, 83, 2, 1, 0, 30, 2, 2, 55, 0, 1, 107, 109, 111, 142, 0),
(16, 'TestBuild', 'Testowy build postaci', '', 2, 98, 1, 2, 1, 83, 2, 1, 0, 30, 2, 2, 55, 0, 1, 107, 109, 111, 142, 0),
(21, 'TestBuild', 'Testowy build postaci', '', 2, 98, 0, 2, 0, 83, 2, 1, 2, 30, 2, 2, 55, 1, 2, 107, 109, 111, 142, 0),
(22, 'TestBuild', 'Testowy build postaci', 'Autograf1.png', 2, 98, 1, 2, 1, 83, 2, 1, 0, 30, 2, 2, 55, 0, 1, 107, 109, 111, 142, 0),
(23, 'TestBuild', 'Testowy build postaci', 'Autograf2.png', 2, 98, 1, 2, 1, 83, 2, 1, 0, 30, 2, 2, 55, 0, 1, 107, 109, 111, 142, 0),
(24, 'TestBuild', 'Testowy build postaci', 'Autograf.png', 2, 98, 1, 2, 1, 83, 2, 1, 0, 30, 2, 2, 55, 0, 1, 107, 109, 111, 142, 0),
(25, 'TestBuild', 'Testowy build postaci', 'Autograf.png', 2, 98, 0, 2, 0, 83, 2, 1, 2, 30, 2, 2, 55, 1, 2, 107, 109, 111, 142, 0),
(26, 'HolyHelm', 'Testowy build postaci, ale inny', 'Pp.png', 2, 98, 0, 0, 0, 83, 1, 0, 0, 28, 2, 2, 55, 1, 2, 107, 109, 111, 142, 0),
(27, 'Fiend', '\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus molestie id dui in malesuada. Donec consequat accumsan ante, in pellentesque erat lobortis eget. Etiam libero dui, pellentesque eu velit in, imperdiet bibendum diam. Aenean nec bibendum sapien. Praesent in neque odio. Aliquam scelerisque turpis nec ante varius, vel gravida arcu pulvinar. Aliquam porta neque quis tortor mollis, varius vulputate magna pretium. Quisque egestas sagittis aliquam. Curabitur mauris ipsum, congue ac lacinia eu, commodo in turpis.\r\n\r\nSed sit amet lobortis est. Ut vel magna tortor. Mauris aliquet nisi id porta facilisis. Nunc aliquet dapibus metus. Ut a tellus nec nibh varius semper. Nullam fermentum scelerisque lorem eget dapibus. Fusce interdum cursus dui sit amet interdum. Curabitur aliquam, orci non vestibulum finibus, metus diam fermentum est, scelerisque lobortis mi mauris volutpat nibh. Mauris at sagittis eros, vestibulum interdum nibh.\r\n\r\nNunc lacinia tincidunt lorem nec ultrices. Cras ornare lacus ex, vitae sodales enim tincidunt non. Mauris fringilla pretium leo. Phasellus mattis libero ac odio hendrerit efficitur. Pellentesque eget faucibus tortor, et pretium quam. Pellentesque maximus, felis eget ornare tempus, augue nunc bibendum sapien, luctus posuere nisi velit eu mauris. Sed luctus et turpis eget consequat. Etiam sed libero condimentum, porttitor risus sit amet, dignissim eros. Sed tincidunt metus non ultrices iaculis. Fusce faucibus suscipit est, eu tristique tellus fermentum sed.\r\n\r\nAliquam nec nulla commodo, pellentesque magna ut, accumsan eros. Nam nulla nisi, iaculis eu lacinia vel, tincidunt id enim. Duis dignissim luctus diam, vel eleifend eros congue in. Cras non magna pulvinar, imperdiet enim eu, tincidunt nisl. Sed rhoncus nisi sed molestie congue. Vivamus id diam consectetur tellus iaculis mollis vel sagittis enim. Praesent porttitor tincidunt arcu, in accumsan turpis. Fusce maximus lacinia efficitur. Integer nec viverra nunc. Praesent ut sapien odio. Pellentesque varius congue dui non laoreet. Curabitur semper feugiat tortor, in cursus leo efficitur sit amet. Ut non tortor ex. Donec blandit arcu quis justo congue, efficitur ultrices ligula sollicitudin.\r\n\r\nLorem ipsum dolor sit amet, consectetur adipiscing elit. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Nam lacinia lacinia ex eget fringilla. Integer tortor justo, dignissim eu velit eget, congue bibendum ex. Donec eu ligula dui. In hac habitasse platea dictumst. Aliquam erat volutpat. Praesent mattis non ante sed maximus. Quisque dignissim leo leo.\r\n\r\nMorbi pellentesque libero at est vulputate lobortis ut vitae justo. Vivamus aliquam tempus orci, non rhoncus sapien fermentum id. Quisque commodo venenatis. ', 'Zdjęcie2.png', 1, 143, 0, 2, 0, 94, 3, 2, 1, 30, 2, 0, 57, 2, 2, 107, 109, 111, 142, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `itemy`
--

CREATE TABLE `itemy` (
  `ID` int(11) NOT NULL,
  `Nazwa` text NOT NULL,
  `Obrazek` text NOT NULL,
  `Slot` tinyint(3) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `itemy`
--

INSERT INTO `itemy` (`ID`, `Nazwa`, `Obrazek`, `Slot`) VALUES
(1, 'Cowl of Purity', 'cowlofpurity.png', 2),
(2, 'Feyscale Hat', 'feyscalehat.png', 2),
(3, 'Fiend Cowl', 'fiendcowl.png', 2),
(28, 'Robe of Purity', 'robeofpurity.png', 5),
(29, 'Fayscale Robe', 'fayscalerobe.png', 5),
(30, 'Fiend Robe', 'fiendrobe.png', 5),
(55, 'Sandals of Purity', 'sandalsofpurity.png', 8),
(56, 'Fayscale Sandals', 'fayscalesandals.png', 8),
(57, 'Fiend Sandals', 'fiendsandals.png', 8),
(82, 'Celestial Censer', 'celestialcenser.png', 6),
(83, 'Tome', 'tome.png', 6),
(84, 'Muisak', 'muisak.png', 6),
(85, 'Taproot', 'taproot.png', 6),
(86, 'Eye of Secrets', 'eyeofsecrets.png', 6),
(87, 'Astral Aegis', 'astralaegis.png', 6),
(88, 'Caitiff Shield', 'caitiffshield.png', 6),
(89, 'Facebreaker', 'facebreaker.png', 6),
(90, 'Shield', 'shield.png', 6),
(91, 'Sarcophagus', 'sarcophagus.png', 6),
(92, 'Sacred Scepter', 'sacredscepter.png', 6),
(93, 'Leering Cane', 'leeringcane.png', 6),
(94, 'Mistcaller', 'mistcaller.png', 6),
(95, 'Torch', 'torch.png', 6),
(96, 'Cryptcandle', 'cryptcandle.png', 6),
(97, 'Arcane Staff', 'arcanestaff.png', 4),
(98, 'Evensong', 'evensong.png', 4),
(105, 'Bag', 'bag.png', 1),
(106, 'Cape', 'cape.png', 3),
(107, 'Bridgewatch Cape', 'bridgewatchcape.png', 3),
(108, 'Grilled Fish', 'grilledfish.png', 7),
(109, 'Seaweed Salad', 'seaweedsalad.png', 7),
(110, 'Healing Potion', 'healingpotion.png', 9),
(111, 'Energy Potion', 'energypotion.png', 9),
(142, 'Satchel of Insight', 'satchelofinsight.png', 1),
(143, 'Carving Sword', 'carvingsword.png', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `itemyumiejetnosci`
--

CREATE TABLE `itemyumiejetnosci` (
  `ItemID` int(11) NOT NULL,
  `Keybind` varchar(2) NOT NULL,
  `UmiejetnosciID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `itemyumiejetnosci`
--

INSERT INTO `itemyumiejetnosci` (`ItemID`, `Keybind`, `UmiejetnosciID`) VALUES
(55, 'F', 10),
(55, 'F', 11),
(55, 'F', 12),
(55, 'P', 13),
(55, 'P', 4),
(55, 'P', 5),
(55, 'P', 6),
(143, 'Q', 14),
(143, 'Q', 15),
(143, 'W', 16),
(143, 'W', 17),
(143, 'W', 18),
(143, 'W', 19),
(143, 'W', 20),
(143, 'W', 21),
(143, 'P', 22),
(143, 'P', 23),
(143, 'P', 24),
(143, 'P', 25),
(56, 'F', 10),
(56, 'F', 11),
(56, 'F', 26),
(56, 'P', 13),
(56, 'P', 4),
(56, 'P', 5),
(56, 'P', 6),
(57, 'F', 10),
(57, 'F', 11),
(57, 'F', 27),
(57, 'P', 13),
(57, 'P', 4),
(57, 'P', 5),
(57, 'P', 6),
(98, 'Q', 32),
(98, 'Q', 33),
(98, 'Q', 34),
(98, 'W', 35),
(98, 'W', 36),
(98, 'W', 37),
(98, 'W', 38),
(98, 'W', 39),
(98, 'P', 40),
(98, 'P', 41),
(98, 'P', 42),
(98, 'P', 43),
(97, 'Q', 32),
(97, 'Q', 33),
(97, 'Q', 34),
(97, 'W', 35),
(97, 'W', 36),
(97, 'W', 37),
(97, 'W', 38),
(97, 'W', 39),
(97, 'P', 40),
(97, 'P', 41),
(97, 'P', 42),
(97, 'P', 43),
(3, 'D', 1),
(3, 'D', 2),
(3, 'D', 31),
(3, 'P', 4),
(3, 'P', 5),
(3, 'P', 6),
(2, 'D', 1),
(2, 'D', 2),
(2, 'D', 30),
(2, 'P', 4),
(2, 'P', 5),
(2, 'P', 6),
(1, 'D', 1),
(1, 'D', 2),
(1, 'D', 3),
(1, 'P', 4),
(1, 'P', 5),
(1, 'P', 6),
(28, 'R', 7),
(28, 'R', 8),
(28, 'R', 9),
(28, 'P', 4),
(28, 'P', 5),
(28, 'P', 6),
(29, 'R', 7),
(29, 'R', 8),
(29, 'R', 28),
(29, 'P', 4),
(29, 'P', 5),
(29, 'P', 6),
(30, 'R', 7),
(30, 'R', 8),
(30, 'R', 29),
(30, 'P', 4),
(30, 'P', 5),
(30, 'P', 6);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `komentarze`
--

CREATE TABLE `komentarze` (
  `ID` int(11) NOT NULL,
  `Text` text NOT NULL,
  `AutorID` int(11) NOT NULL,
  `BuildID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `komentarze`
--

INSERT INTO `komentarze` (`ID`, `Text`, `AutorID`, `BuildID`) VALUES
(1, '            \n          ', 2, 27),
(2, '            \n          nyKolej', 2, 27),
(3, 'QuickFix', 2, 27);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `polubienia`
--

CREATE TABLE `polubienia` (
  `ID` int(11) NOT NULL,
  `UserID` int(11) NOT NULL,
  `BuildID` int(11) NOT NULL,
  `Dislike` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `polubienia`
--

INSERT INTO `polubienia` (`ID`, `UserID`, `BuildID`, `Dislike`) VALUES
(1, 1, 27, 1),
(130, 2, 27, 0),
(132, 2, 21, 1),
(136, 2, 26, 1),
(141, 2, 24, 1),
(143, 2, 16, 1);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `powiadomienia`
--

CREATE TABLE `powiadomienia` (
  `ID` int(11) NOT NULL,
  `BuildID` int(11) NOT NULL,
  `Tresc` text NOT NULL,
  `UserID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `umiejetnosci`
--

CREATE TABLE `umiejetnosci` (
  `ID` int(11) NOT NULL,
  `Nazwa` text NOT NULL,
  `Opis` text NOT NULL,
  `Obrazek` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `umiejetnosci`
--

INSERT INTO `umiejetnosci` (`ID`, `Nazwa`, `Opis`, `Obrazek`) VALUES
(1, 'Energy Regain', '', 'energyregain.png'),
(2, 'Force Field', '', 'forcefield.png'),
(3, 'Avalonian Beam', '', 'avalonianbeam.png'),
(4, 'Aggression', '', 'aggression.png'),
(5, 'Concentration', '', 'concentration.png'),
(6, 'Efficiency', '', 'efficiency.png'),
(7, 'Mend Wounds', '', 'mendwounds.png'),
(8, 'Frost Shield', '', 'frostshield.png'),
(9, 'Enegry Emission', '', 'energyemission.png'),
(10, 'Dodge', '', 'dodge.png'),
(11, 'Energetic Sprint', '', 'energeticsprint.png'),
(12, 'Hover', '', 'hover.png'),
(13, 'Courier', '', 'courier.png'),
(14, 'Heroic Strike', '', 'heroicstrike.png'),
(15, 'Heroic Cleave', '', 'heroiccleave.png'),
(16, 'Blade Cyclone', '', 'bladecyclone.png'),
(17, 'Interrupt', '', 'interrupt.png'),
(18, 'Splitting Slash', '', 'splittingslash.png'),
(19, 'Hamstring', '', 'hamstring.png'),
(20, 'Parry Strike', '', 'parrystrike.png'),
(21, 'Iron Will', '', 'ironwill.png'),
(22, 'Deep cuts', '', 'deepcuts.png'),
(23, 'Weakening', '', 'weakening.png'),
(24, 'Heroic Fighting', '', 'heroicfighting.png'),
(25, 'Increased Defense', '', 'increaseddefense.png'),
(26, 'Ethereal Form', '', 'etherealform.png'),
(27, 'Position Swap', '', 'positionswap.png'),
(28, 'Fear Aura', '', 'fearaura.png'),
(29, 'Wild Magic', '', 'wildmagic.png'),
(30, 'Hyper Focus', '', 'hyperfocus.png'),
(31, 'Purge', '', 'purge.png'),
(32, 'Chain Missile', '', 'chainmissile.png'),
(33, 'Arcane Protection', '', 'arcaneprotection.png'),
(34, 'Magic Shock', '', 'magicshock.png'),
(35, 'Enigma Blade', '', 'enigmablade.png'),
(36, 'Motivating Cleanse', '', 'motivatingcleanse.png'),
(37, 'Frazzle', '', 'frazzle.png'),
(38, 'Empowering Beam', '', 'empoweringbeam.png'),
(39, 'Mimic', '', 'mimic.png'),
(40, 'Lingering Power', '', 'lingeringpower.png'),
(41, 'Energetic', '', 'energetic.png'),
(42, 'Calmness', '', 'calmness.png'),
(43, 'Hush', '', 'hush.png');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `ID` int(11) NOT NULL,
  `Nick` text NOT NULL,
  `Login` text NOT NULL,
  `Password` text NOT NULL,
  `AdminStatus` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `uzytkownicy`
--

INSERT INTO `uzytkownicy` (`ID`, `Nick`, `Login`, `Password`, `AdminStatus`) VALUES
(1, 'Revilium', 'Revilium', '6c14da109e294d1e8155be8aa4b1ce8e', NULL),
(2, 'Admin', 'Admin', '21232f297a57a5a743894a0e4a801fc3', 1);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `buildy`
--
ALTER TABLE `buildy`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AutorID` (`AutorID`),
  ADD KEY `BronID` (`BronID`),
  ADD KEY `OffHandID` (`OffHandID`),
  ADD KEY `HelmID` (`HelmID`),
  ADD KEY `ZbrojaID` (`ZbrojaID`),
  ADD KEY `ButyID` (`ButyID`),
  ADD KEY `PelerynaID` (`PelerynaID`),
  ADD KEY `JedzenieID` (`JedzenieID`),
  ADD KEY `PotkiID` (`PotkiID`),
  ADD KEY `BagID` (`BagID`);

--
-- Indeksy dla tabeli `itemy`
--
ALTER TABLE `itemy`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `itemyumiejetnosci`
--
ALTER TABLE `itemyumiejetnosci`
  ADD KEY `ItemID` (`ItemID`),
  ADD KEY `UmiejetnosciID` (`UmiejetnosciID`);

--
-- Indeksy dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `AutorID` (`AutorID`),
  ADD KEY `BuildID` (`BuildID`);

--
-- Indeksy dla tabeli `polubienia`
--
ALTER TABLE `polubienia`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `BuildID` (`BuildID`);

--
-- Indeksy dla tabeli `powiadomienia`
--
ALTER TABLE `powiadomienia`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserID` (`UserID`),
  ADD KEY `BuildID` (`BuildID`);

--
-- Indeksy dla tabeli `umiejetnosci`
--
ALTER TABLE `umiejetnosci`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `buildy`
--
ALTER TABLE `buildy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT dla tabeli `itemy`
--
ALTER TABLE `itemy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT dla tabeli `polubienia`
--
ALTER TABLE `polubienia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=144;

--
-- AUTO_INCREMENT dla tabeli `powiadomienia`
--
ALTER TABLE `powiadomienia`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `umiejetnosci`
--
ALTER TABLE `umiejetnosci`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `buildy`
--
ALTER TABLE `buildy`
  ADD CONSTRAINT `buildy_ibfk_1` FOREIGN KEY (`AutorID`) REFERENCES `uzytkownicy` (`ID`),
  ADD CONSTRAINT `buildy_ibfk_10` FOREIGN KEY (`BagID`) REFERENCES `itemy` (`ID`),
  ADD CONSTRAINT `buildy_ibfk_2` FOREIGN KEY (`BronID`) REFERENCES `itemy` (`ID`),
  ADD CONSTRAINT `buildy_ibfk_3` FOREIGN KEY (`OffHandID`) REFERENCES `itemy` (`ID`),
  ADD CONSTRAINT `buildy_ibfk_4` FOREIGN KEY (`HelmID`) REFERENCES `itemy` (`ID`),
  ADD CONSTRAINT `buildy_ibfk_5` FOREIGN KEY (`PelerynaID`) REFERENCES `itemy` (`ID`),
  ADD CONSTRAINT `buildy_ibfk_6` FOREIGN KEY (`JedzenieID`) REFERENCES `itemy` (`ID`),
  ADD CONSTRAINT `buildy_ibfk_7` FOREIGN KEY (`PotkiID`) REFERENCES `itemy` (`ID`),
  ADD CONSTRAINT `buildy_ibfk_8` FOREIGN KEY (`ButyID`) REFERENCES `itemy` (`ID`),
  ADD CONSTRAINT `buildy_ibfk_9` FOREIGN KEY (`ZbrojaID`) REFERENCES `itemy` (`ID`);

--
-- Ograniczenia dla tabeli `itemyumiejetnosci`
--
ALTER TABLE `itemyumiejetnosci`
  ADD CONSTRAINT `itemyumiejetnosci_ibfk_1` FOREIGN KEY (`UmiejetnosciID`) REFERENCES `umiejetnosci` (`ID`),
  ADD CONSTRAINT `itemyumiejetnosci_ibfk_2` FOREIGN KEY (`ItemID`) REFERENCES `itemy` (`ID`);

--
-- Ograniczenia dla tabeli `komentarze`
--
ALTER TABLE `komentarze`
  ADD CONSTRAINT `komentarze_ibfk_1` FOREIGN KEY (`BuildID`) REFERENCES `buildy` (`ID`),
  ADD CONSTRAINT `komentarze_ibfk_2` FOREIGN KEY (`AutorID`) REFERENCES `uzytkownicy` (`ID`);

--
-- Ograniczenia dla tabeli `polubienia`
--
ALTER TABLE `polubienia`
  ADD CONSTRAINT `polubienia_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `uzytkownicy` (`ID`),
  ADD CONSTRAINT `polubienia_ibfk_2` FOREIGN KEY (`BuildID`) REFERENCES `buildy` (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
