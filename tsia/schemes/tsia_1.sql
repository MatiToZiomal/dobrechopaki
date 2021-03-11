-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 18 Gru 2020, 09:37
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
  `id_lokalizacji` bigint(20) UNSIGNED NOT NULL,
  `panstwo` text NOT NULL,
  `miasto` text NOT NULL,
  `wojewodztwo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `samochod`
--

CREATE TABLE `samochod` (
  `id_samochodu` bigint(20) UNSIGNED NOT NULL,
  `rocznik` int(11) NOT NULL,
  `skrzynia_biegow` text NOT NULL,
  `marka` text NOT NULL,
  `model` text NOT NULL,
  `id_silnika` bigint(11) UNSIGNED NOT NULL,
  `id_wygladu` bigint(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `serwis`
--

CREATE TABLE `serwis` (
  `id_serwisu` bigint(20) UNSIGNED NOT NULL,
  `id_użytkownika` bigint(11) UNSIGNED NOT NULL,
  `id_samochodu` bigint(11) UNSIGNED NOT NULL,
  `zdjecie_samochodu` longblob NOT NULL,
  `ilosc_punktow` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `silnik`
--

CREATE TABLE `silnik` (
  `id_silnika` bigint(20) UNSIGNED NOT NULL,
  `naped` text NOT NULL,
  `moc` int(11) NOT NULL,
  `pojemnosc` int(11) NOT NULL,
  `przebieg` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id_uzytkownika` bigint(20) UNSIGNED NOT NULL,
  `imie` text NOT NULL,
  `nazwisko` text NOT NULL,
  `nazwa_uzytkownika` text NOT NULL,
  `mail` text NOT NULL,
  `haslo` text NOT NULL,
  `id_lokalizacji` bigint(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyglad`
--

CREATE TABLE `wyglad` (
  `id_wygladu` bigint(20) UNSIGNED NOT NULL,
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
  ADD PRIMARY KEY (`id_lokalizacji`),
  ADD UNIQUE KEY `id_lokalizacji` (`id_lokalizacji`);

--
-- Indeksy dla tabeli `samochod`
--
ALTER TABLE `samochod`
  ADD PRIMARY KEY (`id_samochodu`),
  ADD UNIQUE KEY `id_samochodu` (`id_samochodu`);

--
-- Indeksy dla tabeli `serwis`
--
ALTER TABLE `serwis`
  ADD PRIMARY KEY (`id_serwisu`),
  ADD UNIQUE KEY `id_serwisu` (`id_serwisu`);

--
-- Indeksy dla tabeli `silnik`
--
ALTER TABLE `silnik`
  ADD PRIMARY KEY (`id_silnika`),
  ADD UNIQUE KEY `id_silnika` (`id_silnika`);

--
-- Indeksy dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id_uzytkownika`),
  ADD UNIQUE KEY `id_uzytkownika` (`id_uzytkownika`);

--
-- Indeksy dla tabeli `wyglad`
--
ALTER TABLE `wyglad`
  ADD PRIMARY KEY (`id_wygladu`),
  ADD UNIQUE KEY `id_wygladu` (`id_wygladu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `lokalizacja`
--
ALTER TABLE `lokalizacja`
  MODIFY `id_lokalizacji` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `samochod`
--
ALTER TABLE `samochod`
  MODIFY `id_samochodu` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `serwis`
--
ALTER TABLE `serwis`
  MODIFY `id_serwisu` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `silnik`
--
ALTER TABLE `silnik`
  MODIFY `id_silnika` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id_uzytkownika` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT dla tabeli `wyglad`
--
ALTER TABLE `wyglad`
  MODIFY `id_wygladu` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
