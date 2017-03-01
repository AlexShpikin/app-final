-- phpMyAdmin SQL Dump
-- version 4.4.15.7
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Фев 01 2017 г., 17:12
-- Версия сервера: 5.5.50
-- Версия PHP: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `persons`
--

CREATE TABLE IF NOT EXISTS `persons` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `sername` varchar(255) NOT NULL,
  `patronymic` varchar(255) NOT NULL,
  `boss_id` int(11) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `persons`
--

INSERT INTO `persons` (`id`, `name`, `sername`, `patronymic`, `boss_id`) VALUES
(1, 'Сергей', 'Орешков', 'Николаевич', 3),
(2, 'Валерий', 'Караулов', 'Петрович', NULL),
(3, 'Сергей', 'Чураев', 'Федорович', 5),
(4, 'Андрей', 'Хротов', 'Максмович', NULL),
(5, 'Сергей', 'Петров', 'Николаевич', NULL);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `persons`
--
ALTER TABLE `persons`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `persons`
--
ALTER TABLE `persons`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
