-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 31 Maj 2024, 00:51
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
  `ZbrojaPassive1` tinyint(3) UNSIGNED NOT NULL,
  `ZbrojaPassive2` tinyint(3) UNSIGNED NOT NULL,
  `ButyID` int(11) NOT NULL,
  `ButyAbility` tinyint(3) UNSIGNED NOT NULL,
  `ButyPassive` tinyint(3) UNSIGNED NOT NULL,
  `PelerynaID` int(11) NOT NULL,
  `JedzenieID` int(11) NOT NULL,
  `PotkiID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `itemyumiejetnosci`
--

CREATE TABLE `itemyumiejetnosci` (
  `ItemID` int(11) NOT NULL,
  `Keybind` int(11) NOT NULL,
  `UmiejetnosciID` int(11) NOT NULL
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

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownicy`
--

CREATE TABLE `uzytkownicy` (
  `ID` int(11) NOT NULL,
  `Nick` text NOT NULL,
  `Login` text NOT NULL,
  `Password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
  ADD KEY `PotkiID` (`PotkiID`);

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
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `itemy`
--
ALTER TABLE `itemy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `umiejetnosci`
--
ALTER TABLE `umiejetnosci`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `uzytkownicy`
--
ALTER TABLE `uzytkownicy`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Ograniczenia dla zrzutów tabel
--

--
-- Ograniczenia dla tabeli `buildy`
--
ALTER TABLE `buildy`
  ADD CONSTRAINT `buildy_ibfk_1` FOREIGN KEY (`AutorID`) REFERENCES `uzytkownicy` (`ID`),
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
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
