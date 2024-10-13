-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Gen 13, 2024 alle 09:59
-- Versione del server: 10.4.32-MariaDB
-- Versione PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dati`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `abitudini_sostenibili`
--

CREATE TABLE `abitudini_sostenibili` (
  `id` int(11) NOT NULL,
  `id_utente` int(11) DEFAULT NULL,
  `azione` varchar(255) DEFAULT NULL,
  `data` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `abitudini_sostenibili`
--

INSERT INTO `abitudini_sostenibili` (`id`, `id_utente`, `azione`, `data`) VALUES
(201, NULL, 't', '2024-01-13'),
(202, NULL, 'a', '2024-01-13');

-- --------------------------------------------------------

--
-- Struttura della tabella `utenti`
--

CREATE TABLE `utenti` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dump dei dati per la tabella `utenti`
--

INSERT INTO `utenti` (`id`, `nome`, `email`, `password`) VALUES
(59, 't', 't@t', '$2y$10$Y5QLIChAdGf3nXP.vGVcMe6RNMcJ7zRncmz1aUbv3/XhgKbMrcPF2'),
(60, 'a', 'a@a', '$2y$10$VpiSjq93CF.kC.ZknEjs9eKdsLWOGVOahe27TY2v0RggYAsItgP/O');

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `abitudini_sostenibili`
--
ALTER TABLE `abitudini_sostenibili`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_utente` (`id_utente`);

--
-- Indici per le tabelle `utenti`
--
ALTER TABLE `utenti`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `abitudini_sostenibili`
--
ALTER TABLE `abitudini_sostenibili`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=203;

--
-- AUTO_INCREMENT per la tabella `utenti`
--
ALTER TABLE `utenti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `abitudini_sostenibili`
--
ALTER TABLE `abitudini_sostenibili`
  ADD CONSTRAINT `abitudini_sostenibili_ibfk_1` FOREIGN KEY (`id_utente`) REFERENCES `utenti` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
