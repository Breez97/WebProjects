-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 06 2024 г., 12:14
-- Версия сервера: 8.0.30
-- Версия PHP: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `address`
--

-- --------------------------------------------------------

--
-- Структура таблицы `area`
--

CREATE TABLE `area` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `id_district` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `area`
--

INSERT INTO `area` (`id`, `title`, `id_district`) VALUES
(1, 'Басманный', 1),
(2, 'Красносельский', 1),
(3, 'Пресненский', 1),
(4, 'Митино', 2),
(5, 'Строгино', 2),
(6, 'Щукино', 2),
(7, 'Гольяново', 3),
(8, 'Измайлово', 3),
(9, 'Сокольники', 3),
(10, 'Кузьминки', 4),
(11, 'Марьино', 4),
(12, 'Печатники', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `district`
--

CREATE TABLE `district` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `district`
--

INSERT INTO `district` (`id`, `title`) VALUES
(1, 'ЦАО'),
(2, 'СЗАО'),
(3, 'ВАО'),
(4, 'ЮВАО');

-- --------------------------------------------------------

--
-- Структура таблицы `street`
--

CREATE TABLE `street` (
  `id` int NOT NULL,
  `title` varchar(255) NOT NULL,
  `id_area` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `street`
--

INSERT INTO `street` (`id`, `title`, `id_area`) VALUES
(1, 'Бакунинская', 1),
(2, 'Гольяновская', 1),
(3, 'Спартаковская', 1),
(4, 'Каланчевская', 2),
(5, 'Краснопрудная', 2),
(6, 'Русаковская', 2),
(7, 'Малая Бронная', 3),
(8, 'Васильевская', 3),
(9, 'Ходынская', 3),
(10, 'Дубравная', 4),
(11, 'Муравская', 4),
(12, 'Староспасская', 4),
(13, 'Крылатская', 5),
(14, 'Одинцовская', 5),
(15, 'Таллинская', 5),
(16, 'Авиационная', 6),
(17, 'Живописная', 6),
(18, 'Пехотная', 6),
(19, 'Алтайская', 7),
(20, 'Иркутская', 7),
(21, 'Курганская', 7),
(22, 'Никитинская', 8),
(23, 'Первомайская', 8),
(24, 'Советская', 8),
(25, 'Бабаевская', 9),
(26, 'Колодезная', 9),
(27, 'Маленковская', 9),
(28, 'Жигулевская', 10),
(29, 'Краснодонская', 10),
(30, 'Окская', 10),
(31, 'Белореченская', 11),
(32, 'Иловайская', 11),
(33, 'Новомарьинская', 11),
(34, 'Батайская', 12),
(35, 'Угрешская', 12),
(36, 'Шоссейная', 12);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `area`
--
ALTER TABLE `area`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_district` (`id_district`);

--
-- Индексы таблицы `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `street`
--
ALTER TABLE `street`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_area` (`id_area`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `area`
--
ALTER TABLE `area`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT для таблицы `district`
--
ALTER TABLE `district`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `street`
--
ALTER TABLE `street`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Ограничения внешнего ключа сохраненных таблиц
--

--
-- Ограничения внешнего ключа таблицы `area`
--
ALTER TABLE `area`
  ADD CONSTRAINT `area_ibfk_1` FOREIGN KEY (`id_district`) REFERENCES `district` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Ограничения внешнего ключа таблицы `street`
--
ALTER TABLE `street`
  ADD CONSTRAINT `street_ibfk_1` FOREIGN KEY (`id_area`) REFERENCES `area` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
