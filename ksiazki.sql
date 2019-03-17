-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 22 Lip 2017, 22:19
-- Wersja serwera: 10.1.21-MariaDB
-- Wersja PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `wesele`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ksiazki`
--

CREATE TABLE `ksiazki` (
  `ID_book` int(11) NOT NULL,
  `Name_1` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `Name_2` varchar(15) COLLATE utf8_polish_ci NOT NULL,
  `Owner` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `ksiazki`
--

INSERT INTO `ksiazki` (`ID_book`, `Name_1`, `Name_2`, `Owner`) VALUES
(1, '', '', 0),
(2, '', '', 0),
(3, '       ', '', 0),
(4, '', '', 0),
(5, '', '', 0),
(6, '', '', 0),
(7, '', '', 0),
(8, '', '', 0),
(9, '', '', 0),
(10, '', '', 0),
(11, '', '', 0),
(12, '', '', 0),
(13, '', '', 0),
(14, '', '', 0),
(15, '', '', 0),
(16, '', '', 0),
(17, '', '', 0),
(18, '', '', 0),
(19, '', '', 0),
(20, '', '', 0),
(21, '', '', 0),
(22, '', '', 0),
(23, '', '', 0),
(24, '', '', 0),
(25, '', '', 0),
(26, '', '', 0),
(27, '', '', 0),
(28, '', '', 0),
(29, 'Daro', 'Maro', 1),
(30, '', '', 0),
(31, '', '', 0),
(32, '', '', 0),
(33, '', '', 0),
(34, '', '', 0),
(35, '', '', 0),
(36, '', '', 0),
(37, '', '', 0),
(38, '', '', 0),
(39, '', '', 0),
(40, '', '', 0),
(41, '', '', 0),
(42, '', '', 0),
(43, '', '', 0),
(44, '', '', 0),
(45, '', '', 0),
(46, '', '', 0),
(47, '', '', 0),
(48, '', '', 0),
(49, '', '', 0),
(50, '', '', 0),
(51, '', '', 0),
(52, '', '', 0),
(53, '', '', 0),
(54, '', '', 0),
(55, '', '', 0),
(56, '', '', 0);

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `ksiazki`
--
ALTER TABLE `ksiazki`
  ADD PRIMARY KEY (`ID_book`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `ksiazki`
--
ALTER TABLE `ksiazki`
  MODIFY `ID_book` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
