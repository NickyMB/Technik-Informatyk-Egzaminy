-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Czas generowania: 07 Gru 2017, 09:04
-- Wersja serwera: 10.1.28-MariaDB
-- Wersja PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `dane2`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `filmy`
--

CREATE TABLE `filmy` (
  `id` int(10) UNSIGNED NOT NULL,
  `gatunki_id` int(10) UNSIGNED NOT NULL,
  `rezyserzy_id` int(10) UNSIGNED NOT NULL,
  `tytul` text,
  `rok` year(4) DEFAULT NULL,
  `ocena` int(10) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `filmy`
--

INSERT INTO `filmy` (`id`, `gatunki_id`, `rezyserzy_id`, `tytul`, `rok`, `ocena`) VALUES
(1, 1, 1, 'Arrival', 2016, 4),
(2, 2, 2, 'Vaiana: Skarb oceanu', 2016, 5),
(3, 3, 3, 'Sully', 2016, 5),
(4, 3, 4, 'Milczenie', 2017, 6),
(5, 4, 5, 'Uciekaj!', 2017, 5),
(6, 5, 6, 'W starym, dobrym stylu', 2017, 6),
(7, 5, 7, 'Bodyguard Zawodowiec', 2017, 5),
(9, 1, 0, 'dasfse', 0000, 2),
(10, 1, 0, 'dasfse', 0000, 2);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `gatunki`
--

CREATE TABLE `gatunki` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `gatunki`
--

INSERT INTO `gatunki` (`id`, `nazwa`) VALUES
(1, 'Sci-Fi'),
(2, 'animacja'),
(3, 'dramat'),
(4, 'horror'),
(5, 'komedia');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `grzyby`
--

CREATE TABLE `grzyby` (
  `id` int(10) UNSIGNED NOT NULL,
  `rodzina_id` int(10) UNSIGNED NOT NULL,
  `potrawy_id` int(10) UNSIGNED NOT NULL,
  `nazwa` text,
  `potoczna` text,
  `jadalny` tinyint(1) DEFAULT NULL,
  `miesiac_zbierania` int(11) DEFAULT NULL,
  `nazwa_pliku` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `grzyby`
--

INSERT INTO `grzyby` (`id`, `rodzina_id`, `potrawy_id`, `nazwa`, `potoczna`, `jadalny`, `miesiac_zbierania`, `nazwa_pliku`) VALUES
(1, 1, 2, 'pieczarka dwuzarodnikowa', 'pieczarka', 1, 0, 'pieczarka.jpg'),
(2, 1, 2, 'czubajka kania', 'kania', 1, 9, 'kania.jpg'),
(3, 2, 4, 'borowik szlachetny', 'prawdziwek', 1, 10, 'borowik.jpg'),
(4, 2, 4, 'xerocomus', 'podgrzybek', 1, 10, 'podgrzybek.jpg'),
(5, 2, 5, 'goryczak zolciowy', 'szatan', 0, -1, 'szatan.jpg'),
(6, 3, 1, 'pieprznik jadalny', 'kurka', 1, 9, 'kurka.jpg'),
(7, 5, 1, 'pleurotus', 'boczniak', 1, 0, 'boczniak.jpg'),
(8, 4, 3, 'trufla letnia', 'trufla', 1, 8, 'trufla.jpg');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `ogloszenie`
--

CREATE TABLE `ogloszenie` (
  `id` int(10) UNSIGNED NOT NULL,
  `uzytkownik_id` int(10) UNSIGNED NOT NULL,
  `kategoria` int(10) UNSIGNED DEFAULT NULL,
  `podkategoria` int(10) UNSIGNED DEFAULT NULL,
  `tytul` text,
  `tresc` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `ogloszenie`
--

INSERT INTO `ogloszenie` (`id`, `uzytkownik_id`, `kategoria`, `podkategoria`, `tytul`, `tresc`) VALUES
(1, 1, 1, 12, 'Daniel Craig. Biografia', 'Biografia Daniela Craiga, niedrogo sprzedam'),
(2, 1, 1, 13, 'Selekcja', 'Sprzedam: \"Selekcja\" J. Kellermana, niezniszczona'),
(3, 2, 1, 13, 'Buick', 'Sprzedam horror Stephena Kinga w dobrym stanie'),
(4, 2, 1, 14, 'Tytus, Romek i Atomek', 'Ks. IV do sprzedania, stan dobry'),
(5, 2, 2, 0, 'Imagine Dragons', 'Sprzedam dwa CD Imagine Dragons');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `potrawy`
--

CREATE TABLE `potrawy` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `potrawy`
--

INSERT INTO `potrawy` (`id`, `nazwa`) VALUES
(1, 'sos'),
(2, 'duszone'),
(3, 'spagetti'),
(4, 'zupa'),
(5, 'niejadalne');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `pracownicy`
--

CREATE TABLE `pracownicy` (
  `id` int(10) UNSIGNED NOT NULL,
  `imie` text,
  `nazwisko` text,
  `stanowisko` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `pracownicy`
--

INSERT INTO `pracownicy` (`id`, `imie`, `nazwisko`, `stanowisko`) VALUES
(1, 'Anna', 'Kowalska', 1),
(2, 'Monika', 'Nowak', 2),
(3, 'Ewelina', 'Nowakowska', 2),
(4, 'Anna', 'Przybylska', 3),
(5, 'Maria', 'Kowal', 3),
(6, 'Ewa', 'Nowacka', 4);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rezyserzy`
--

CREATE TABLE `rezyserzy` (
  `id` int(10) UNSIGNED NOT NULL,
  `imie` text,
  `nazwisko` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `rezyserzy`
--

INSERT INTO `rezyserzy` (`id`, `imie`, `nazwisko`) VALUES
(1, 'Denis', 'Villeneuve'),
(2, 'Ron', 'Clements'),
(3, 'Clint', 'Eastwood'),
(4, 'Martin', 'Scorseze'),
(5, 'Jordan', 'Peele'),
(6, 'Zach', 'Braff'),
(7, 'Patrick', 'Hughes'),
(8, 'Francis Ford', 'Coppola');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `rodzina`
--

CREATE TABLE `rodzina` (
  `id` int(10) UNSIGNED NOT NULL,
  `nazwa` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `rodzina`
--

INSERT INTO `rodzina` (`id`, `nazwa`) VALUES
(1, 'pieczarkowate'),
(2, 'borowikowate'),
(3, 'pieprznikowate'),
(4, 'truflowate'),
(5, 'boczniakowate');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uczniowie`
--

CREATE TABLE `uczniowie` (
  `imie` text,
  `nazwisko` text,
  `wiek` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uczniowie`
--

INSERT INTO `uczniowie` (`imie`, `nazwisko`, `wiek`) VALUES
('Kamil', 'Ryba', 11),
('Karolina', 'Witecka', 8),
('Karol', 'Rybacki', 9),
('Marina', 'Damiencka', 9);

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `uzytkownik`
--

CREATE TABLE `uzytkownik` (
  `id` int(10) UNSIGNED NOT NULL,
  `imie` text,
  `nazwisko` text,
  `telefon` text,
  `email` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `uzytkownik`
--

INSERT INTO `uzytkownik` (`id`, `imie`, `nazwisko`, `telefon`, `email`) VALUES
(1, 'Anna', 'Kowalska', '601601601', 'anna@poczta.pl'),
(2, 'Jan', 'Nowak', '608608608', 'jan@poczta.pl'),
(3, 'Jolanta', 'Jasny', '606606606', 'jolanta@poczta.pl'),
(4, 'qqq', 'www', '345', 'dsfsdklfs@daskl');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wyniki`
--

CREATE TABLE `wyniki` (
  `id` int(10) UNSIGNED NOT NULL,
  `dyscyplina_id` int(10) UNSIGNED NOT NULL,
  `sportowiec_id` int(10) UNSIGNED NOT NULL,
  `wynik` decimal(5,2) DEFAULT NULL,
  `dataUstanowienia` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `wyniki`
--

INSERT INTO `wyniki` (`id`, `dyscyplina_id`, `sportowiec_id`, `wynik`, `dataUstanowienia`) VALUES
(1, 1, 1, '12.40', '2015-10-14'),
(2, 1, 1, '12.00', '2015-10-06'),
(3, 1, 2, '11.80', '2015-10-14'),
(4, 1, 2, '11.90', '2015-10-06'),
(5, 1, 3, '11.50', '2015-10-14'),
(6, 1, 3, '11.56', '2015-10-06'),
(7, 1, 4, '11.70', '2015-10-14'),
(8, 1, 4, '11.67', '2015-10-06'),
(9, 1, 5, '11.30', '2015-10-14'),
(10, 1, 5, '11.52', '2015-10-06'),
(11, 1, 6, '12.10', '2015-10-14'),
(12, 1, 6, '12.00', '2015-10-06'),
(13, 3, 1, '63.00', '2015-11-11'),
(14, 3, 1, '63.60', '2015-10-13'),
(15, 3, 2, '64.00', '2015-11-11'),
(16, 3, 2, '63.60', '2015-10-13'),
(17, 3, 3, '60.00', '2015-11-11'),
(18, 3, 3, '61.60', '2015-10-13'),
(19, 3, 4, '63.50', '2015-11-11'),
(20, 3, 4, '63.60', '2015-10-13'),
(21, 3, 5, '70.00', '2015-10-07'),
(22, 3, 6, '68.00', '2015-10-07');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zamowienia`
--

CREATE TABLE `zamowienia` (
  `id` int(10) UNSIGNED NOT NULL,
  `Samochody_id` int(10) UNSIGNED NOT NULL,
  `Klient` text,
  `telefon` text,
  `dataZam` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Zrzut danych tabeli `zamowienia`
--

INSERT INTO `zamowienia` (`id`, `Samochody_id`, `Klient`, `telefon`, `dataZam`) VALUES
(1, 3, 'Anna Kowalska', '111222333', '2016-02-15'),
(2, 6, 'Jan Nowakowski', '222111333', '2016-02-15'),
(3, 8, 'Marcin Kolwal', '333111222', '2016-02-15');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indexes for table `filmy`
--
ALTER TABLE `filmy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gatunki`
--
ALTER TABLE `gatunki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `grzyby`
--
ALTER TABLE `grzyby`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ogloszenie`
--
ALTER TABLE `ogloszenie`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `potrawy`
--
ALTER TABLE `potrawy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pracownicy`
--
ALTER TABLE `pracownicy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rezyserzy`
--
ALTER TABLE `rezyserzy`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rodzina`
--
ALTER TABLE `rodzina`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `uzytkownik`
--
ALTER TABLE `uzytkownik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wyniki`
--
ALTER TABLE `wyniki`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zamowienia`
--
ALTER TABLE `zamowienia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT dla tabeli `filmy`
--
ALTER TABLE `filmy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT dla tabeli `gatunki`
--
ALTER TABLE `gatunki`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `grzyby`
--
ALTER TABLE `grzyby`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `ogloszenie`
--
ALTER TABLE `ogloszenie`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `potrawy`
--
ALTER TABLE `potrawy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `pracownicy`
--
ALTER TABLE `pracownicy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT dla tabeli `rezyserzy`
--
ALTER TABLE `rezyserzy`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `rodzina`
--
ALTER TABLE `rodzina`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT dla tabeli `uzytkownik`
--
ALTER TABLE `uzytkownik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT dla tabeli `wyniki`
--
ALTER TABLE `wyniki`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT dla tabeli `zamowienia`
--
ALTER TABLE `zamowienia`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
