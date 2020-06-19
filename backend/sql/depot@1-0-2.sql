-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2020 at 09:53 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `depot`
--

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `class` varchar(20) NOT NULL,
  `type` varchar(50) NOT NULL,
  `price` double NOT NULL,
  `stock` int(11) NOT NULL,
  `sold` int(11) NOT NULL,
  `view` int(11) NOT NULL,
  `url` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `class`, `type`, `price`, `stock`, `sold`, `view`, `url`) VALUES
(1, 'Whiff Brimstone', 'Demo', 'Armor', 21, 100, 0, 0, 'Item_icon_A_Whiff_of_the_Old_Brimstone'),
(2, 'Baba\'s Booties', 'Demo', 'Shoes', 15, 312, 0, 0, 'Item_icon_Ali_Baba_Booties'),
(5, 'Allbrero', 'Demo', 'Hat', 35, 98, 0, 0, 'Item_icon_Allbrero'),
(6, 'B\'argh\'s Bicorne', 'Demo', 'Hat', 40, 78, 0, 0, 'Item_icon_Bicorne'),
(7, 'Backbreaker\'s Guards', 'Demo', 'Armor', 27, 193, 0, 0, 'Item_icon_Backbreaker_Guard'),
(8, 'Battery Bandolier', 'Demo', 'Armor', 26, 110, 0, 0, 'Item_icon_Battery_Bandolier'),
(9, 'Bearded Bombardier', 'Demo', 'Face', 65, 45, 0, 0, 'Item_icon_Bearded_Bombardier'),
(10, 'Black Watch', 'Demo', 'Hat', 120, 24, 0, 0, 'Item_icon_Black_Watch'),
(11, 'Blast Blocker', 'Demo', 'Armor', 135, 19, 0, 0, 'Item_icon_Blast_Blocker'),
(12, 'Blind Justice', 'Demo', 'Face', 200, 5, 0, 0, 'Item_icon_Blind_Justice'),
(13, 'Australium Eyelander', 'Demo', 'Weapon', 135, 60, 0, 0, 'Item_icon_Australium_Eyelander'),
(14, 'Australium Grenade Launcher', 'Demo', 'Weapon', 102, 88, 0, 0, 'Item_icon_Australium_Grenade_Launcher'),
(15, 'Australium Stick Launcher', 'Demo', 'Weapon', 98, 143, 0, 0, 'Item_icon_Australium_Stickybomb_Launcher'),
(16, 'Claidheamh Mòr', 'Demo', 'Weapon', 210, 14, 0, 0, 'Item_icon_Claidheamh_Mòr'),
(17, 'Chargin Targe', 'Demo', 'Weapon', 75, 141, 0, 0, 'Item_icon_Chargin_Targe'),
(18, 'Aim Assistant', 'Engineer', 'Misc', 25, 319, 0, 0, 'Item_icon_Aim_Assistant'),
(19, 'Antartic Researcher', 'Engineer', 'Armor', 100, 98, 0, 0, 'Item_icon_Antarctic_Researcher'),
(20, 'Barnstormer', 'Engineer', 'Hat', 199, 65, 0, 0, 'Item_icon_Barnstormer'),
(21, 'Beep Boy', 'Engineer', 'Misc', 175, 89, 0, 0, 'Item_icon_Beep_Boy'),
(22, 'Braniac Hairpiece', 'Engineer', 'Hat', 142, 77, 0, 0, 'Item_icon_Brainiac_Hairpiece'),
(23, 'Brain Interface', 'Engineer', 'Hat', 199, 33, 0, 0, 'Item_icon_Brain_Interface'),
(24, 'Airwolf Wrench', 'Engineer', 'Weapon', 34, 166, 0, 0, 'Item_icon_Airwolf_Wrench'),
(25, 'Australium Frontier', 'Engineer', 'Weapon', 150, 111, 0, 0, 'Item_icon_Australium_Frontier_Justice'),
(26, 'Australium Wrench', 'Engineer', 'Weapon', 177, 78, 0, 0, 'Item_icon_Australium_Wrench'),
(27, 'Civic Duty Shotgun', 'Engineer', 'Weapon', 12, 412, 0, 0, 'Item_icon_Civic_Duty_Shotgun'),
(28, 'Gunslinger', 'Engineer', 'Misc', 400, 12, 0, 0, 'Item_icon_Gunslinger'),
(29, 'Bear Necessities ', 'Heavy', 'Hat', 213, 66, 0, 0, 'Item_icon_Bear_Necessities'),
(30, 'All Father', 'Heavy', 'Face', 188, 89, 0, 0, 'Item_icon_All-Father'),
(31, 'B.M.O.C', 'Heavy', 'Hat', 6, 569, 0, 0, 'Item_icon_B.M.O.C.'),
(32, 'Apparatchik\'s Apparel', 'Heavy', 'Armor', 12, 233, 0, 0, 'Item_icon_Apparatchiks_Apparel'),
(33, 'Backbiter\'s Billycock', 'Heavy', 'Hat', 55, 120, 0, 0, 'Item_icon_Backbiters_Billycock'),
(34, 'Apoco\'s Fist', 'Heavy', 'Weapon', 53, 88, 0, 0, 'Item_icon_Apoco-Fists'),
(35, 'Australium Minigun', 'Heavy', 'Weapon', 118, 99, 0, 0, 'Item_icon_Australium_Minigun'),
(36, 'Brain Candy', 'Heavy', 'Weapon', 788, 2, 0, 0, 'Item_icon_Brain_Candy_Minigun'),
(37, 'Buffalo Steak', 'Heavy', 'Weapon', 333, 24, 0, 0, 'Item_icon_Buffalo_Steak_Sandvich'),
(38, 'Dalokohs Bar', 'Heavy', 'Weapon', 188, 76, 0, 0, 'Item_icon_Dalokohs_Bar'),
(39, 'Butcher Bird', 'Heavy', 'Weapon', 25, 210, 0, 0, 'Item_icon_Butcher_Bird_Minigun'),
(40, 'Brush with Death', 'Medic', 'Hat', 49, 102, 0, 0, 'Item_icon_Brush_with_Death'),
(41, 'Angel of Death', 'Medic', 'Armor', 555, 6, 0, 0, 'Item_icon_Angel_of_Death'),
(42, 'Burly Beast', 'Medic', 'Armor', 312, 12, 0, 0, 'Item_icon_Burly_Beast'),
(43, 'Blighted Beak', 'Medic', 'Face', 10, 381, 0, 0, 'Item_icon_Blighted_Beak'),
(44, 'Bunnyhopper\'s Ballistic Vest', 'Medic', 'Armor', 20, 220, 0, 0, 'Item_icon_Bunnyhoppers_Ballistics_Vest'),
(45, 'Archimedes', 'Medic', 'Misc', 399, 17, 0, 0, 'Item_icon_Archimedes'),
(46, 'Amputator', 'Medic', 'Weapon', 5, 411, 0, 0, 'Item_icon_Amputator'),
(47, 'Australium Blutsauger', 'Medic', 'Weapon', 155, 45, 0, 0, 'Item_icon_Australium_Blutsauger'),
(48, 'Golden Frying Pan', 'Medic', 'Weapon', 500, 25, 0, 0, 'Item_icon_Golden_Frying_Pan'),
(49, 'Overdose', 'Medic', 'Weapon', 146, 77, 0, 0, 'Item_icon_Overdose'),
(50, 'Quick Fix', 'Medic', 'Weapon', 71, 58, 0, 0, 'Item_icon_Quick-Fix'),
(51, 'Balloonicorn', 'Pyro', 'Misc', 466, 9, 0, 0, 'Item_icon_Balloonicorn'),
(52, 'Australium Axtinguisher', 'Pyro', 'Weapon', 315, 23, 0, 0, 'Item_icon_Australium_Axtinguisher'),
(53, 'Abhorrent Appendages', 'Pyro', 'Armor', 35, 188, 0, 0, 'Item_icon_Abhorrent_Appendages'),
(54, 'Arachno Arsonist', 'Pyro', 'Hat', 79, 90, 0, 0, 'Item_icon_Arachno-Arsonist');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `middleName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `suffix` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `firstName`, `middleName`, `lastName`, `suffix`) VALUES
(21, 'wizerd', '$2y$10$CpNjyJC/H/bHFcpByKGuM.N2PpskrknlRbanB4J71u2eQX7Dezbpa', 'dino', 'rosales', 'gomez', ''),
(23, 'dinodoser', '$2y$10$izL7cAkKOS8cX8z1PSK/q.61aBbGuCBK8xcFF/jUhZqBjW.P1A/fW', 'dino', 'rosales', 'gomez', ''),
(24, 'Atlas17', '$2y$10$m9ReKB742rPsrTrtgEeI/.8S/lWOOV9yfkW1UzVY5xbKB2qy66DSu', 'Atlas', '', 'Kingston', ''),
(25, 'dinogomez', '$2y$10$4ShHpglg6L.ZpsaTs.K6dOJqe9aj97IT0fH.2Q9KHobu7s0mHEeHi', 'dino', 'rosales', 'gomez', ''),
(26, 'ruffyeon', '$2y$10$FEW8jjz3kY8.yvyG9nnzf.Vsnmz0kRm7IwK/ML4mi4eNDgbSQJxVa', 'Rufina', 'Reyes', 'Gomez', ''),
(27, 'dinogomez2', '$2y$10$6UnhIJ6vniV4.P6mL/4uDeh6pxKexZtkjvUUJoLSvnKJESVYYxrx.', 'dino', 'rosales', 'gomez', ''),
(28, 'Alcapone', '$2y$10$f1U8KkM.eaVG4DaPFHrus.WHqMJ8zfKrvtQS/f..YlhaO2/QYujxG', 'Martin', 'Corleone', 'Alcapone', ''),
(29, 'Ryan', '$2y$10$B4ZvOqWRE9RiqMN32rSWu.6uALbzllwUmJ2M9dVFmc/V/wDx8NqCu', 'Ryan', '', 'Manuel', ''),
(30, 'William', '$2y$10$gn4nUoHfW3vpZiNP3gnbDel8jHMMr2pYpX.iS6yxYOZNouLuAoxma', 'William', '', 'Wallace', ''),
(31, 'Adam123', '$2y$10$h3e3r2AIg4SeOA0ZEyTeWuFVT2Y8SiWZJ/bxcRB/P3G2u/8Mizc3y', 'Adam', '', 'Two Tree', ''),
(32, 'Berna', '$2y$10$ghZ/yxrCWpam0U.4jqWwt.WjYt0aoLF87ySOVA9lT5mr/efToFzwa', 'Analisa', 'Reyes', 'Gomez', ''),
(33, 'rockheart', '$2y$10$WUk30JXZMtaQQiWHF1Air.J4ObJWmaCluRAziMHzqkZ3qxEKxY1Lu', 'Felix', '', 'Anchovy', ''),
(34, 'Felix123', '$2y$10$xqvcQD6FfYsKWoRo5eNJz.ALatR9SQk5YfUYVWGotCfV/Q82KZmPi', 'Felix', '', 'Pendragon', ''),
(35, 'OwenClamor', '$2y$10$pomktsS3MaDUF50c.3dhku/A8mXLGGTea5SvGvyAYQxaNl7Ghms.O', 'Owen', '', 'Clamor', ''),
(36, 'Chris17', '$2y$10$GN9stHG0B4fhM.MGw92m/eoHGlyDRiSEFkOMpouH3H1X.FgP0scmi', 'Chris', 'Mayson', 'Chavez', 'Jr.'),
(37, 'gtechone', '$2y$10$CKEnVR3s/b658d.EKpGUBOMcxjpWZhT92oX.p.G/K6JuSzjwFgPl6', 'dino', 'rosales', 'gomez', ''),
(38, 'Alice32', '$2y$10$yygWri8spRQKMvARnitXoObAyEe7VkKnvbXZ9.7vyH5OwnKO.aXc2', 'Alice', 'Madison', 'Sommers', 'Sr.'),
(39, 'Riskyq', '$2y$10$d0UL.rBLeBmxNgtjEwl4oO1wW.u1SBC5hIMQIym5dAr.4qTQiz0zi', 'Brendo', '', 'Toledo', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`,`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=55;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
