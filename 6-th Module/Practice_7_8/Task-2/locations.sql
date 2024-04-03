-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Апр 02 2024 г., 19:24
-- Версия сервера: 8.0.29
-- Версия PHP: 8.1.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `locations`
--

-- --------------------------------------------------------

--
-- Структура таблицы `areas`
--

CREATE TABLE `areas` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_district` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `areas`
--

INSERT INTO `areas` (`id`, `name`, `id_district`) VALUES
(1, 'Таганский', 1),
(2, 'Тверской', 1),
(3, 'Красносельский', 1),
(4, 'Строгино', 2),
(5, 'Митино', 2),
(6, 'Щукино', 2),
(7, 'Сокольники', 3),
(8, 'Измайлово', 3),
(9, 'Перово', 3),
(10, 'Нагорный', 4),
(11, 'Царицыно', 4),
(12, 'Чертаново', 4);

-- --------------------------------------------------------

--
-- Структура таблицы `districts`
--

CREATE TABLE `districts` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `districts`
--

INSERT INTO `districts` (`id`, `name`) VALUES
(1, 'Центральный'),
(2, 'Северо-западный'),
(3, 'Восточный'),
(4, 'Южный');

-- --------------------------------------------------------

--
-- Структура таблицы `streets`
--

CREATE TABLE `streets` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `id_area` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `streets`
--

INSERT INTO `streets` (`id`, `name`, `id_area`) VALUES
(1, 'Народная', 1),
(2, 'Воловья', 1),
(3, 'Гончарная', 1),
(4, 'Москворецкая', 2),
(5, 'Делегатская', 2),
(6, 'Селезневская', 2),
(7, 'Каланчевская', 3),
(8, 'Новая Басманная', 3),
(9, 'Русаковская', 3),
(10, 'Таллинская', 4),
(11, 'Одинцовская', 4),
(12, 'Крылатская', 4),
(13, 'Староспасская', 5),
(14, 'Фабричная', 5),
(15, 'Муравская', 5),
(16, 'Пехотная', 6),
(17, 'Сосновная', 6),
(18, 'Новощукинская', 6),
(19, 'Маленковская', 7),
(20, 'Егерская', 7),
(21, 'Колодезная', 7);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `areas`
--
ALTER TABLE `areas`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `districts`
--
ALTER TABLE `districts`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `streets`
--
ALTER TABLE `streets`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `areas`
--
ALTER TABLE `areas`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT для таблицы `districts`
--
ALTER TABLE `districts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT для таблицы `streets`
--
ALTER TABLE `streets`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
