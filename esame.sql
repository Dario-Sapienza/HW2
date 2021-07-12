-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Creato il: Lug 12, 2021 alle 22:34
-- Versione del server: 10.4.19-MariaDB
-- Versione PHP: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `esame`
--

-- --------------------------------------------------------

--
-- Struttura della tabella `azioni_news`
--

CREATE TABLE `azioni_news` (
  `id` int(11) NOT NULL,
  `utente_id` int(11) DEFAULT NULL,
  `titolo` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `azioni_news`
--

INSERT INTO `azioni_news` (`id`, `utente_id`, `titolo`) VALUES
(1, 3, 'Palestre in Danimarca, tra Covid e «umore»'),
(2, 4, 'Atti vandalici alla palestra del Volley Valley Catania, la solidarietà della Fipav Sicilia');

-- --------------------------------------------------------

--
-- Struttura della tabella `nuove_affiliazioni`
--

CREATE TABLE `nuove_affiliazioni` (
  `id` int(11) NOT NULL,
  `indirizzo` varchar(1023) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `nuove_affiliazioni`
--

INSERT INTO `nuove_affiliazioni` (`id`, `indirizzo`, `nome`) VALUES
(1, './img/fit-active.jpg', 'FIT-ACTIVE'),
(2, './img/fitness-club.jpg', 'FITNESS CLUB'),
(3, './img/neo-fit.jpg', 'NEO-FIT'),
(4, './img/next-fit.jpg', 'NEXT-FIT'),
(5, './img/world-of-fitness.jpg', 'WORLD OF FITNESS'),
(6, './img/primo-round.jpg', 'PRIMO ROUND');

-- --------------------------------------------------------

--
-- Struttura della tabella `palestra`
--

CREATE TABLE `palestra` (
  `id` int(11) NOT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `immagine` varchar(1023) DEFAULT NULL,
  `descrizione` varchar(1023) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `palestra`
--

INSERT INTO `palestra` (`id`, `nome`, `immagine`, `descrizione`) VALUES
(1, 'CUS CATANIA', './img/CUS.jpg', 'SALA PESI, SALA CARDIO, SALA BOXE, PISTA DI ATLETICA, CAMPO DA CALCIO/RUGBY, CAMPI DA BEACH VOLLEY, CAMPO DA TENNIS, CAMPO DA BASKET'),
(2, 'ALTAIR CLUB', './img/altair.jpg', 'PISCINA, SALA CALISTHENICS'),
(3, 'MC-FIT', './img/mc-fit.jpg', 'SALA PESI, SALA CARDIO, SALA CYCLING, SALA BOXE'),
(4, 'ONE-FIT', './img/one-fit.jpg', 'SALA PESI, SALA YOGA'),
(5, 'TORRE DEL GRIFO VILLAGE', './img/tdg.jpg', 'SALA PESI, SALA CARDIO, PISCINA, SPA, CAMPI DA CALCIO'),
(6, 'ATHLETIC CLUB', './img/atl-club.jpg', 'SALA PESI, SALA CARDIO, CAMPO DA BASKET'),
(7, 'VIRGIN ACTIVE', './img/virgin.jpg', 'SALA PESI, SALA FIT-BOXE, SALA CYCLING, SPA'),
(8, 'SPORTING CENTER', './img/sporting-center.jpg', 'SALA PESI, PISCINA, CAMPO DA PALLAVOLO/BASKET, CAMPO DA TENNIS'),
(9, 'STONE PERSONAL', './img/stone-personal.jpg', 'SALA PESI');

-- --------------------------------------------------------

--
-- Struttura della tabella `preferiti`
--

CREATE TABLE `preferiti` (
  `id` int(11) NOT NULL,
  `utente_id` int(11) DEFAULT NULL,
  `palestra_id` int(11) DEFAULT NULL,
  `nome_palestra` varchar(255) DEFAULT NULL,
  `immagine` varchar(1023) DEFAULT NULL,
  `descrizione` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `preferiti`
--

INSERT INTO `preferiti` (`id`, `utente_id`, `palestra_id`, `nome_palestra`, `immagine`, `descrizione`) VALUES
(3, 4, 5, 'TORRE DEL GRIFO VILLAGE', './img/tdg.jpg', 'SALA PESI, SALA CARDIO, PISCINA, SPA, CAMPI DA CALCIO'),
(4, 4, 6, 'ATHLETIC CLUB', './img/atl-club.jpg', 'SALA PESI, SALA CARDIO, CAMPO DA BASKET');

-- --------------------------------------------------------

--
-- Struttura della tabella `prenotazione_corso`
--

CREATE TABLE `prenotazione_corso` (
  `id` int(11) NOT NULL,
  `palestra_id` int(11) DEFAULT NULL,
  `corso` varchar(255) DEFAULT NULL,
  `cognome` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `prenotazione_corso`
--

INSERT INTO `prenotazione_corso` (`id`, `palestra_id`, `corso`, `cognome`, `username`) VALUES
(1, 3, 'BODY BUILDING', 'Aprile', 'oria97'),
(8, 5, 'TOTAL-BODY', 'Scalzo', 'gigi99');

-- --------------------------------------------------------

--
-- Struttura della tabella `utente`
--

CREATE TABLE `utente` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `mail` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `nome` varchar(255) DEFAULT NULL,
  `cognome` varchar(255) DEFAULT NULL,
  `eta` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dump dei dati per la tabella `utente`
--

INSERT INTO `utente` (`id`, `username`, `mail`, `password`, `nome`, `cognome`, `eta`) VALUES
(1, 'darsap', 'dariosapi4@gmail.com', '$2y$10$DlowmQGcKf9ou2crsgEk1upI.ikKqFMwv1EvWyPjXNdg0L9Zbnh46', 'Dario', 'Sapienza', 23),
(2, 'enri00', 'enri00@gmail.com', '$2y$10$FlABUlzbfycQjG0ZHxlY2u4G6.5xL/jJz1mr4L7AF30KPwv238sFC', 'enrica', 'sapataro', 22),
(3, 'oria97', 'oria97@gmail.com', '$2y$10$Q1XTWurG5apGTRP/uH6UY.MTqT0RJowSSby306hlVMpwkeBqv2T5G', 'Oriana', 'Aprile', 23),
(4, 'gigi99', 'gigi99@gmail.com', '$2y$10$AftbLZtza8VW9K/8R9dQcuXMJYLtDQi24kAOhN9XQh85j700FCW/C', 'Luigi', 'Scalzo', 22);

--
-- Indici per le tabelle scaricate
--

--
-- Indici per le tabelle `azioni_news`
--
ALTER TABLE `azioni_news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx1` (`utente_id`);

--
-- Indici per le tabelle `nuove_affiliazioni`
--
ALTER TABLE `nuove_affiliazioni`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `palestra`
--
ALTER TABLE `palestra`
  ADD PRIMARY KEY (`id`);

--
-- Indici per le tabelle `preferiti`
--
ALTER TABLE `preferiti`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx1` (`utente_id`),
  ADD KEY `idx2` (`palestra_id`);

--
-- Indici per le tabelle `prenotazione_corso`
--
ALTER TABLE `prenotazione_corso`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idx_palestra` (`palestra_id`);

--
-- Indici per le tabelle `utente`
--
ALTER TABLE `utente`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT per le tabelle scaricate
--

--
-- AUTO_INCREMENT per la tabella `azioni_news`
--
ALTER TABLE `azioni_news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT per la tabella `nuove_affiliazioni`
--
ALTER TABLE `nuove_affiliazioni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT per la tabella `palestra`
--
ALTER TABLE `palestra`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT per la tabella `preferiti`
--
ALTER TABLE `preferiti`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT per la tabella `prenotazione_corso`
--
ALTER TABLE `prenotazione_corso`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT per la tabella `utente`
--
ALTER TABLE `utente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Limiti per le tabelle scaricate
--

--
-- Limiti per la tabella `azioni_news`
--
ALTER TABLE `azioni_news`
  ADD CONSTRAINT `azioni_news_ibfk_1` FOREIGN KEY (`utente_id`) REFERENCES `utente` (`id`);

--
-- Limiti per la tabella `preferiti`
--
ALTER TABLE `preferiti`
  ADD CONSTRAINT `preferiti_ibfk_1` FOREIGN KEY (`utente_id`) REFERENCES `utente` (`id`),
  ADD CONSTRAINT `preferiti_ibfk_2` FOREIGN KEY (`palestra_id`) REFERENCES `palestra` (`id`);

--
-- Limiti per la tabella `prenotazione_corso`
--
ALTER TABLE `prenotazione_corso`
  ADD CONSTRAINT `prenotazione_corso_ibfk_1` FOREIGN KEY (`palestra_id`) REFERENCES `palestra` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
