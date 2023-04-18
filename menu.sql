-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Gegenereerd op: 18 apr 2023 om 10:52
-- Serverversie: 10.4.27-MariaDB
-- PHP-versie: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `menu`
--

-- --------------------------------------------------------

--
-- Tabelstructuur voor tabel `menu1`
--

CREATE TABLE `menu1` (
  `gerecht_id` int(11) NOT NULL,
  `gerecht_en_prijs` varchar(225) NOT NULL,
  `beschrijving` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Gegevens worden geëxporteerd voor tabel `menu1`
--

INSERT INTO `menu1` (`gerecht_id`, `gerecht_en_prijs`, `beschrijving`) VALUES
(1, 'Oesters - 10,95', 'Vers geoogste oesters met sojasaus on the side'),
(2, 'Afbak breekbrood - 6,95', 'Vers gebakken breekbrood\r\nUit de atlantische zee,\r\ngeserveerd met roomboter en zeezout'),
(3, 'Krabby Patty - 11,95', 'Een krab burger belegd met rode ui\r\nen noordse kaas\r\nop ons heerlijk zelfgemaakte broodje\r\n\r\n*geserveerd met friet en een frisse salade '),
(4, 'Zwarte walvis Tagliatelle - 17,95\r\n\r\n', 'Een Pasta gemaakt met inktvis inkt\r\ndie rust in een heerlijke roomsaus\r\nafgetopt met vers walvis vlees'),
(5, 'Creme brulee - 5,95', 'Een heerlijke creme brulee'),
(6, 'moeder’s Apple crumble - 6,95', 'Een huisgemaakte apple crumblegeserveerd met vanille ijs');

--
-- Indexen voor geëxporteerde tabellen
--

--
-- Indexen voor tabel `menu1`
--
ALTER TABLE `menu1`
  ADD PRIMARY KEY (`gerecht_id`);

--
-- AUTO_INCREMENT voor geëxporteerde tabellen
--

--
-- AUTO_INCREMENT voor een tabel `menu1`
--
ALTER TABLE `menu1`
  MODIFY `gerecht_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
