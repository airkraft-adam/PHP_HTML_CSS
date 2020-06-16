-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Cze 2020, 10:56
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
-- Baza danych: `sklep`
--
CREATE SCHEMA `sklep` DEFAULT CHARACTER SET utf8 COLLATE utf8_polish_ci ;
-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `towary`
--
use sklep
CREATE TABLE `towary` (
  `id` int(11) PRIMARY KEY AUTO_INCREMENT,
  `nazwa` varchar(31) UNIQUE NOT NULL,
  `cena` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_polish_ci;

--
-- Zrzut danych tabeli `towary`
--

INSERT INTO `towary` (`id`, `nazwa`, `cena`) VALUES
(1, 'chleb', '2.95'),
(2, 'masło', '4.77'),
(3, 'mleko', '3.19'),
(4, 'sok', '5.50'),
(5, 'piwo', '3.00'),
(6, 'drożdże', '4.25'),
(7, 'cukier', '1.83'),
(8, 'sól', '2.34'),
(9, 'jabłka', '4.50'),
(10, 'truskawki', '14.00');

-- --------------------------------------------------------

COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
