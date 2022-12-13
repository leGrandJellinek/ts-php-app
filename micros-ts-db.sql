-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Дек 13 2022 г., 18:20
-- Версия сервера: 10.3.13-MariaDB-log
-- Версия PHP: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `micros-ts-db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `total`
--

CREATE TABLE `total` (
  `id` int(11) NOT NULL,
  `sum` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `login` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `categ` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `type` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `date` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `time` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `comment` varchar(256) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `total`
--

INSERT INTO `total` (`id`, `sum`, `login`, `categ`, `type`, `date`, `time`, `comment`) VALUES
(4, '123 123 123', '123456', 'Иные Доходы', 'Доход', '3123-12-04', '12:31', '234234'),
(5, '1 000 000', '123456', 'Развлечения', 'Расход', '2005-04-23', '19:24', ''),
(6, '10 000', 'stalker', 'Заработная плата', 'Доход', '', '', ''),
(8, '234 234 234', '123456', 'Заработная плата', 'Доход', '0422-02-24', '19:25', ''),
(9, '111 111', '123456', 'Заработная плата', 'Доход', '', '', ''),
(10, '324 234 234', '123456', 'Заработная плата', 'Доход', '2444-02-23', '11:23', '2424'),
(11, '100 000', 'jellinek', 'Заработная плата', 'Доход', '2022-12-13', '20:14', 'Для проверки'),
(12, '1 000 000', 'jellinek', 'Заработная плата', 'Доход', '2022-12-13', '20:14', 'Еще один для проверки'),
(13, '1 000 000', 'jellinek', 'Заработная плата', 'Доход', '2022-12-13', '20:15', 'Еще один для проверки щас опять будет проверка'),
(14, '100 000', 'jellinek', 'Продукты питания', 'Расход', '2022-12-13', '20:15', 'Бред');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `login` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `pass` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `name` varchar(256) CHARACTER SET utf8mb4 NOT NULL,
  `photo` varchar(256) CHARACTER SET utf8mb4 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `login`, `pass`, `name`, `photo`) VALUES
(25, 'stalker', '$2y$10$1zzCYlEmcUjP8eNffDOdh.Wk1uh3Zm/gDEnCODYFUtBIHEfQV2gwm', '123456', 'photo.png'),
(26, '123456', '$2y$10$FcY8qheWGBGOyuqoOIzfYOXCOts7nRPULrba8ZF8i0rKugT.vL.UG', '123456', 'photo.png'),
(27, '123456', '$2y$10$S9K6TpmmHEjljDPcYktM4ebwiSlXO1EpKvE4yOcsKIqhKwpt/J69u', '123456', 'photo.png'),
(28, '123456', '$2y$10$QKc11.Nn1tMgPDbc3fyI8ufdvxB4iIu158Tuh7Pg/vBD441afLxIm', '123456', 'photo.png'),
(29, 'stalker', '$2y$10$HKGchSZfaZuxNcLvYH6uF.il5CQg8mqdYT.lq1HWWBvUUyBG0szli', '2342342', 'photo.png'),
(30, 'jellinek', '$2y$10$dsbCX.fvtq7zF6J5hYIeHe/ak8YnOhHMrUJDHHazSb5vnXUgPVoLe', 'grisha', 'photo.png'),
(31, '', '$2y$10$95d/vWTAN5mGkBBi.OmfZOCtZ5oLR0Xyy8PK0lByEQDF1ahIcbKR.', '', 'photo.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `total`
--
ALTER TABLE `total`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `total`
--
ALTER TABLE `total`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
