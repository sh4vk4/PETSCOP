-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 01, 2021 at 06:39 AM
-- Server version: 8.0.24
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `petscop`
--

CREATE DATABASE `petscop`;

USE `petscop`;

-- --------------------------------------------------------

--
-- Table structure for table `accessory`
--

CREATE TABLE `accessory` (
  `productID` int NOT NULL,
  `pic_path` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `cost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `accessory`
--

INSERT INTO `accessory` (`productID`, `pic_path`, `name`, `desc`, `cost`) VALUES
(1, 'accessory.png', 'Серый ошейник', 'Удобный ошейник, не ограничивающий вашего любимца! Сделан из мягкого, удобного материала. В наличии три размера: XS, Medium и XL', 549),
(2, 'accessory1.png', 'Красный шипастый ошейник', 'Удобный ошейник, сделанный специально для самых грозных собак. В наличии два размера: Medium и XL', 679),
(3, 'accessory2.png', 'Поводок для скалолазания', 'Поводок для профессиональных скалолазов. Сделан из самого прочного материала, способного выдержать вес двух взрослых людей', 2399),
(4, 'accessory3.png', 'Комбинезон «Собачья мордашка»', 'Забавный красный комбинезон для уличных прогулок в прохладную погоду! В наличии только размер XS. ', 659);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--



CREATE TABLE `feedback` (
  `feedbackID` int NOT NULL,
  `nickname` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `productID` int NOT NULL,
  `pic_path` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `cost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`productID`, `pic_path`, `name`, `desc`, `cost`) VALUES
(1, 'food.png', 'Корм «PAWPAW»', 'Сухой корм для взрослых собак среднего размера, содержащий все нужные витамины и злаки для вашего питомца! В наличии имеется три вкуса: курица, говядина и свинина.', 1299),
(2, 'food1.png', 'Корм «BAKERS»', 'Сухой корм для пожилых собак всех размеров, с добавлением сушеных овощей! Помогает держать вашего любимца в форме. В наличии имеется два вкуса: курица и говядина.', 1499),
(3, 'food2.png', 'Корм «Pedigree»', 'Сбалансированныйи и питательный сухой корм для взрослых собак всех размеров. В наличии имеется четыре вкуса: курица, заяц, говядина и свинина.', 999),
(4, 'food3.png', 'Корм «Drools»', 'Питательный влажный корм для щенков, помогающий малышам вырастать здоровыми псами! Подходит для щенков всех пород. В наличии два вкуса: курица и заяц.', 699);

-- --------------------------------------------------------

--
-- Table structure for table `healthcare`
--

CREATE TABLE `healthcare` (
  `productID` int NOT NULL,
  `pic_path` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `cost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `healthcare`
--

INSERT INTO `healthcare` (`productID`, `pic_path`, `name`, `desc`, `cost`) VALUES
(1, 'healthcare.png', 'Шампунь «TENDA»', 'Высококачественный шампунь «TENDA» с запахом кокоса, от которого шерсть вашей собаки будет похожа на шелк! Питает кожу питомца, гиппоаллергенно.', 1899),
(2, 'healthcare1.png', 'Кондиционер «Mr. Bruno»', 'Бюджетный кондиционер, хорошо выполняющий свою работу. Уже после первой ванной процедуры шерсть вашего питомца будет сиять!', 699),
(3, 'healthcare2.png', 'Шампунь «BlueGOLD»', 'Натуральный шампунь, который не только вычистит шерсть вашего любимца, но и предотвратит попадание паразитов на его кожу!', 1659),
(4, 'healthcare3.png', 'Шампунь «Rocco & Roxie Supply Co.»', 'Мягкий шампунь для собак с чувствительной кожей. Очищает грязь и увлажняет кожу!', 1799);

-- --------------------------------------------------------

--
-- Table structure for table `popular_products`
--

CREATE TABLE `popular_products` (
  `productID` int NOT NULL,
  `pic_path` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `cost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `popular_products`
--

INSERT INTO `popular_products` (`productID`, `pic_path`, `name`, `desc`, `cost`) VALUES
(1, 'food.png', 'Корм «PAWPAW»', 'Сухой корм для взрослых собак среднего размера, содержащий все нужные витамины и злаки для вашего питомца! В наличии имеется три вкуса: курица, говядина и свинина.', 1299),
(2, 'toy.png', 'Игрушка «КУКИ-МОНСТР»', 'Забавная игрушка «КУКИ-МОНСТР» сделанная с любовью для вашего любимца! Хорошая игрушка для щенят, у которых режутся зубы. Сделана из прочного материала, внутри пищалка.', 349),
(3, 'accessory.png', 'Серый ошейник', 'Удобный ошейник, не ограничивающий вашего любимца! Сделан из мягкого, удобного материала. В наличии три размера: XS, Medium и XL', 549),
(4, 'healthcare.png', 'Шампунь «TENDA»', 'Высококачественный шампунь «TENDA» с запахом кокоса, от которого шерсть вашей собаки будет похожа на шелк! Питает кожу питомца, гиппоаллергенно.', 1899);

-- --------------------------------------------------------

--
-- Table structure for table `toys`
--

CREATE TABLE `toys` (
  `productID` int NOT NULL,
  `pic_path` varchar(255) NOT NULL,
  `name` varchar(50) NOT NULL,
  `desc` varchar(255) NOT NULL,
  `cost` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `toys`
--

INSERT INTO `toys` (`productID`, `pic_path`, `name`, `desc`, `cost`) VALUES
(1, 'toy.png', 'Игрушка «КУКИ-МОНСТР»', 'Забавная игрушка «КУКИ-МОНСТР» сделанная с любовью для вашего любимца! Хорошая игрушка для щенят, у которых режутся зубы. Сделана из прочного материала, внутри пищалка.', 349),
(2, 'toy1.png', 'Жевательная косточка', 'Яркая жеательная косточка, сделанная из безопасной, не жесткой резины. Отличная игрушка, чтобы отучить свою собаку грызть мебель!', 159),
(3, 'toy2.png', 'Канат', 'Прочный перетягивательный канат для активных игривых собак! Сделан из прочной веревки, очень стойкий.', 449),
(4, 'toy3.png', 'Мячик-погремушка', 'Любимая игрушка всех собак! Может занять делом даже самого неугомонного питомца.', 199);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userID` int NOT NULL,
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `passw` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb3;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userID`, `first_name`, `last_name`, `email`, `passw`) VALUES
(1, 'Admin', 'Admin', 'admin@admin.com', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accessory`
--
ALTER TABLE `accessory`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedbackID`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `healthcare`
--
ALTER TABLE `healthcare`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `popular_products`
--
ALTER TABLE `popular_products`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `toys`
--
ALTER TABLE `toys`
  ADD PRIMARY KEY (`productID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accessory`
--
ALTER TABLE `accessory`
  MODIFY `productID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedbackID` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `productID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `healthcare`
--
ALTER TABLE `healthcare`
  MODIFY `productID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `popular_products`
--
ALTER TABLE `popular_products`
  MODIFY `productID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `toys`
--
ALTER TABLE `toys`
  MODIFY `productID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
