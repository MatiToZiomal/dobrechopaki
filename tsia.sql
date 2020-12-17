-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Gru 2020, 00:02
-- Wersja serwera: 10.4.11-MariaDB
-- Wersja PHP: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `tsia`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `lokalizacja`
--

CREATE TABLE `lokalizacja` (
  `id_lokalizacji` int(11) NOT NULL,
  `państwo` text NOT NULL,
  `miasto` text NOT NULL,
  `województwo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochód`
--

CREATE TABLE `samochód` (
  `id_samochodu` int(11) NOT NULL,
  `rocznik` int(11) NOT NULL,
  `skrzynia_biegów` text NOT NULL,
  `marka` text NOT NULL,
  `model` text NOT NULL,
  `id_silnika` int(11) NOT NULL,
  `id_wyglądu` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `serwis`
--

CREATE TABLE `serwis` (
  `id_serwisu` int(11) NOT NULL,
  `id_użytkownika` int(11) NOT NULL,
  `id_samochodu` int(11) NOT NULL,
  `zdjęcie_samochodu` longblob NOT NULL,
  `ilość_punktów` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `silnik`
--

CREATE TABLE `silnik` (
  `id_silnika` int(11) NOT NULL,
  `napęd` text NOT NULL,
  `moc` int(11) NOT NULL,
  `pojemność` int(11) NOT NULL,
  `przebieg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `użytkownik`
--

CREATE TABLE `użytkownik` (
  `id_użytkownika` int(11) NOT NULL,
  `imię` text NOT NULL,
  `nazwisko` text NOT NULL,
  `nazwa_użytkownika` text NOT NULL,
  `mail` text NOT NULL,
  `hasło` text NOT NULL,
  `id_lokalizacji` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wygląd`
--

CREATE TABLE `wygląd` (
  `id_wyglądu` int(11) NOT NULL,
  `felgi` text NOT NULL,
  `typ_nadwozia` text NOT NULL,
  `czy_modyfikowany` tinyint(1) NOT NULL,
  `kolor` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `lokalizacja`
--
ALTER TABLE `lokalizacja`
  ADD PRIMARY KEY (`id_lokalizacji`);

--
-- Indeksy dla tabeli `samochód`
--
ALTER TABLE `samochód`
  ADD PRIMARY KEY (`id_samochodu`);

--
-- Indeksy dla tabeli `serwis`
--
ALTER TABLE `serwis`
  ADD PRIMARY KEY (`id_serwisu`);

--
-- Indeksy dla tabeli `silnik`
--
ALTER TABLE `silnik`
  ADD PRIMARY KEY (`id_silnika`);

--
-- Indeksy dla tabeli `użytkownik`
--
ALTER TABLE `użytkownik`
  ADD PRIMARY KEY (`id_użytkownika`);

--
-- Indeksy dla tabeli `wygląd`
--
ALTER TABLE `wygląd`
  ADD PRIMARY KEY (`id_wyglądu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `lokalizacja`
--
ALTER TABLE `lokalizacja`
  MODIFY `id_lokalizacji` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `samochód`
--
ALTER TABLE `samochód`
  MODIFY `id_samochodu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `serwis`
--
ALTER TABLE `serwis`
  MODIFY `id_serwisu` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `silnik`
--
ALTER TABLE `silnik`
  MODIFY `id_silnika` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `użytkownik`
--
ALTER TABLE `użytkownik`
  MODIFY `id_użytkownika` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `wygląd`
--
ALTER TABLE `wygląd`
  MODIFY `id_wyglądu` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
