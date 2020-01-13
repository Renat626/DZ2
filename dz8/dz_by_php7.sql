-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Янв 13 2020 г., 17:37
-- Версия сервера: 8.0.15
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
-- База данных: `dz by php7`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id` int(100) NOT NULL,
  `userName` varchar(255) NOT NULL,
  `userSurname` varchar(255) NOT NULL,
  `productName` varchar(255) NOT NULL,
  `productPrice` decimal(65,0) NOT NULL,
  `productCount` int(255) NOT NULL,
  `productSum` int(255) NOT NULL,
  `status` varchar(10) NOT NULL DEFAULT 'Заказан'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `basket`
--

INSERT INTO `basket` (`id`, `userName`, `userSurname`, `productName`, `productPrice`, `productCount`, `productSum`, `status`) VALUES
(1, 'Ренат', 'Касымов', 'Катушка', '780', 3, 2340, 'Оплачен'),
(2, 'Ренат', 'Касымов', 'Спиннинг', '880', 2, 1760, 'Отгружен'),
(3, 'Ренат', 'Касымов', 'Воблер', '225', 2, 450, 'Заказан'),
(4, 'admin', 'admin', 'Катушка', '780', 1, 780, 'Заказан'),
(5, 'admin', 'admin', 'Спиннинг', '880', 1, 880, 'Заказан');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id` int(100) NOT NULL,
  `count` int(100) NOT NULL DEFAULT '0',
  `name` varchar(100) NOT NULL,
  `img` varchar(100) NOT NULL,
  `price` decimal(65,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id`, `count`, `name`, `img`, `price`) VALUES
(1, 0, 'Спиннинг', '_spinning_salmo-sniper-ultra-spin_25-180_3.png', '880'),
(2, 0, 'Катушка', '_katushki_bezynercionnaja_grfish-mini_750F_1.png', '780'),
(3, 0, 'Воблер', '_primanki_vobleri_german-l_classic_boxer_GR-002879_1.png', '225');

-- --------------------------------------------------------

--
-- Структура таблицы `signin`
--

CREATE TABLE `signin` (
  `id` int(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userSurname` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `signin`
--

INSERT INTO `signin` (`id`, `userName`, `userSurname`, `userPassword`) VALUES
(14, 'Ренат', 'Касымов', '$2y$10$iyZUd7qSl93Y6nCh.PSonewOfJScdl7OnG67c1TlP8XPoz9tq24cu'),
(15, 'admin', 'admin', '$2y$10$64hlk/MjV8sMnPayXdxQyuDb4usK5Xf0.s9U5n0aTYYYTspzN6goi');

-- --------------------------------------------------------

--
-- Структура таблицы `signup`
--

CREATE TABLE `signup` (
  `id` int(100) NOT NULL,
  `userName` varchar(100) NOT NULL,
  `userSurname` varchar(100) NOT NULL,
  `userPassword` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `signup`
--

INSERT INTO `signup` (`id`, `userName`, `userSurname`, `userPassword`) VALUES
(17, 'Ренат', 'Касымов', '$2y$10$iyZUd7qSl93Y6nCh.PSonewOfJScdl7OnG67c1TlP8XPoz9tq24cu'),
(18, 'admin', 'admin', '$2y$10$64hlk/MjV8sMnPayXdxQyuDb4usK5Xf0.s9U5n0aTYYYTspzN6goi');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Индексы таблицы `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- AUTO_INCREMENT для таблицы `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT для таблицы `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
