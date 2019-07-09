-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Май 09 2019 г., 16:48
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `font`
--

-- --------------------------------------------------------

--
-- Структура таблицы `family`
--

CREATE TABLE `family` (
  `id` int(11) NOT NULL,
  `title` varchar(255) DEFAULT NULL,
  `path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `family`
--

INSERT INTO `family` (`id`, `title`, `path`) VALUES
(1, 'Alexander', '../fonts/Alexander.otf'),
(2, 'Anonymous', '../fonts/Anonymous.ttf'),
(3, 'ArnamMono', '../fonts/ArnamMono.ttf'),
(4, 'Beermoney', '../fonts/Beermoney.ttf'),
(5, 'Celestina', '../fonts/Celestina.otf'),
(6, 'CodenameCoderFree', '../fonts/CodenameCoderFree.otf'),
(7, 'ConsolaMono', '../fonts/ConsolaMono.ttf'),
(8, 'Cousine', '../fonts/Cousine.ttf'),
(9, 'CutiveMono', '../fonts/CutiveMono.ttf'),
(10, 'DroidSansMono', '../fonts/DroidSansMono.ttf'),
(11, 'FiveMinutes', '../fonts/FiveMinutes.otf'),
(12, 'FantasqueSansMono', '../fonts/FantasqueSansMono.ttf'),
(13, 'FiraCode', '../fonts/FiraCode.otf'),
(14, 'FiraMonoOT', '../fonts/FiraMonoOT.otf'),
(15, 'IBMPlexMono', '../fonts/IBMPlexMono.ttf'),
(16, 'LemonTuesday', '../fonts/LemonTuesday.otf'),
(17, 'Leokadia', '../fonts/Leokadia.ttf'),
(18, 'Lionelofparis', '../fonts/Lionelofparis.ttf'),
(19, 'NotCourierSans', '../fonts/NotCourierSans.otf'),
(20, 'Notomono', '../fonts/Notomono.ttf'),
(21, 'Officecodepro', '../fonts/Officecodepro.otf'),
(22, 'Officecodeprod', '../fonts/Officecodeprod.otf'),
(23, 'OpenGostTypeA', '../fonts/OpenGostTypeA.ttf'),
(24, 'OverpassMono', '../fonts/OverpassMono.otf'),
(25, 'OxygenMono', '../fonts/OxygenMono.otf'),
(26, 'Pecita', '../fonts/Pecita.otf'),
(27, 'Ptmono', '../fonts/Ptmono.ttf'),
(28, 'RobotoMono', '../fonts/RobotoMono.ttf'),
(29, 'RubikMonoOne', '../fonts/RubikMonoOne.ttf'),
(30, 'ShareTechMono', '../fonts/ShareTechMono.otf'),
(31, 'Solena', '../fonts/Solena.otf'),
(32, 'SourceCodePro', '../fonts/SourceCodePro.otf'),
(33, 'SpaceMono', '../fonts/SpaceMono.ttf'),
(34, 'Texgyrecursor', '../fonts/Texgyrecursor.otf'),
(35, 'UbuntuMono', '../fonts/UbuntuMono.ttf'),
(36, 'VinMonoPro', '../fonts/VinMonoPro.ttf');

-- --------------------------------------------------------

--
-- Структура таблицы `size`
--

CREATE TABLE `size` (
  `id` int(11) NOT NULL,
  `size` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `size`
--

INSERT INTO `size` (`id`, `size`) VALUES
(1, '2'),
(2, '10'),
(3, '12'),
(4, '14'),
(5, '16'),
(6, '18'),
(7, '20'),
(8, '22'),
(9, '24'),
(10, '26'),
(11, '36'),
(12, '48'),
(13, '72');

-- --------------------------------------------------------

--
-- Структура таблицы `style`
--

CREATE TABLE `style` (
  `id` int(11) NOT NULL,
  `style` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `style`
--

INSERT INTO `style` (`id`, `style`) VALUES
(1, 'normal'),
(2, 'italic');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `weight`
--

CREATE TABLE `weight` (
  `id` int(11) NOT NULL,
  `weight` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `weight`
--

INSERT INTO `weight` (`id`, `weight`) VALUES
(1, 'normal'),
(2, 'bold'),
(3, 'bolder'),
(4, 'lighter');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `family`
--
ALTER TABLE `family`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `size`
--
ALTER TABLE `size`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `style`
--
ALTER TABLE `style`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `weight`
--
ALTER TABLE `weight`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `family`
--
ALTER TABLE `family`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT для таблицы `size`
--
ALTER TABLE `size`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT для таблицы `style`
--
ALTER TABLE `style`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `weight`
--
ALTER TABLE `weight`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
