-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Хост: MySQL-8.0
-- Время создания: Дек 08 2024 г., 16:41
-- Версия сервера: 8.0.35
-- Версия PHP: 8.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `happynewyear`
--

-- --------------------------------------------------------

--
-- Структура таблицы `goods`
--

CREATE TABLE `goods` (
  `id` int NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Дамп данных таблицы `goods`
--

INSERT INTO `goods` (`id`, `name`, `price`, `image`) VALUES
(1, 'Шоколадный дед мороз', '100 руб.', 'static/img/product-2.png'),
(2, 'Новогодняя Ёлка', '9900 руб.', 'static/img/product-3.jpg'),
(3, 'Сладкая коробка', '600 руб.', 'static/img/product-4.jpg'),
(4, 'Фигурка деда мороза', '2000 руб.', 'static/img/product-5.jpg'),
(5, 'Новогодний шар', '3000 руб.', 'static/img/product-6.jpg'),
(6, 'Шар на елку', '300 руб.', 'static/img/product-7.jpg'),
(7, 'Мишура', '120 руб.', 'static/img/product-8.jpg'),
(8, 'Гирлянда \"Лампочки\"', '1200 руб.', 'static/img/product-9.jpg'),
(9, 'Новогоднее шампанское', '240 руб.', 'static/img/product-10.jpg'),
(10, 'Коробка конфет', '250 руб.', 'static/img/product-11.jpg'),
(11, 'Подарок \"Сюрприз\"', '900 руб.', 'static/img/product-12.jpg'),
(12, 'Звезда на Елку', '400 руб.', 'static/img/product-13.jpg'),
(13, 'Шапка новогодняя', '600 руб.', 'static/img/product-14.jpg'),
(14, 'Бенгальские огни', '100 руб.', 'static/img/product-15.jpg'),
(15, 'Хлопушка', '80 руб.', 'static/img/product-16.png');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `goods`
--
ALTER TABLE `goods`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
