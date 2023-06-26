-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Июн 26 2023 г., 08:44
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
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `name` varchar(100) NOT NULL,
  `age` varchar(50) NOT NULL,
  `theme` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `zadacha` varchar(100) NOT NULL,
  `date` varchar(50) NOT NULL,
  `score` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `name`, `age`, `theme`, `zadacha`, `date`, `score`) VALUES
(5, 'Анна Филончикова', 'Б9121-09.03.03пикд', 'Структуры данных', 'Очередь', '24 / 02', 90),
(6, 'Панкратова Екатерина', 'Б9121-09.03.03пикд', 'Алгоритмы и структуры данных', 'Стек', '09 / 10', 76),
(7, 'Быкова Ольга', 'Б9121-09.03.03пиу', 'Деревья поиска', 'Дерево AA', '21 / 04', 43),
(8, 'Перевозникова Наталья', 'Б9121-09.03.04', 'Деревья поиска', 'Красно-черные деревья', '09 / 12', 99),
(9, 'Анна Филончикова', 'Б9121-09.03.03пикд', 'Структуры данных', 'Стек', '12.04.2004', 90),
(10, 'Анна Филончикова', 'Б9121-09.03.03пикд', 'Структуры данных', 'Очередь', '27 / 02', 26),
(11, 'Панкратова Екатерина', 'Б9121-09.03.03пиу', 'Алгоритмы и структуры данных', 'Стек', '09 / 25', 21);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
