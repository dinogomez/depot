-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 10:54 AM
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
  `url` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `about` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `class`, `type`, `price`, `stock`, `sold`, `view`, `url`, `description`, `about`) VALUES
(1, 'Whiff Brimstone', 'Demo', 'Armor', 21, 100, 0, 0, 'Item_icon_A_Whiff_of_the_Old_Brimstone', '', ''),
(2, 'Baba\'s Booties', 'Demo', 'Shoes', 15, 312, 0, 0, 'Item_icon_Ali_Baba_Booties', '', ''),
(5, 'Allbrero', 'Demo', 'Hat', 35, 98, 0, 0, 'Item_icon_Allbrero', '', ''),
(6, 'B\'argh\'s Bicorne', 'Demo', 'Hat', 40, 78, 0, 0, 'Item_icon_Bicorne', '', ''),
(7, 'Backbreaker\'s Guards', 'Demo', 'Armor', 27, 193, 0, 0, 'Item_icon_Backbreaker_Guard', '', ''),
(8, 'Battery Bandolier', 'Demo', 'Armor', 26, 110, 0, 0, 'Item_icon_Battery_Bandolier', '', ''),
(9, 'Bearded Bombardier', 'Demo', 'Face', 65, 45, 0, 0, 'Item_icon_Bearded_Bombardier', '', ''),
(10, 'Black Watch', 'Demo', 'Hat', 120, 24, 0, 0, 'Item_icon_Black_Watch', '', ''),
(11, 'Blast Blocker', 'Demo', 'Armor', 135, 19, 0, 0, 'Item_icon_Blast_Blocker', '', ''),
(12, 'Blind Justice', 'Demo', 'Face', 200, 5, 0, 0, 'Item_icon_Blind_Justice', '', ''),
(13, 'Australium Eyelander', 'Demo', 'Weapon', 135, 60, 0, 0, 'Item_icon_Australium_Eyelander', '', ''),
(14, 'Australium Grenade Launcher', 'Demo', 'Weapon', 102, 88, 0, 0, 'Item_icon_Australium_Grenade_Launcher', '', ''),
(15, 'Australium Stick Launcher', 'Demo', 'Weapon', 98, 143, 0, 0, 'Item_icon_Australium_Stickybomb_Launcher', '', ''),
(16, 'Claidheamh Mòr', 'Demo', 'Weapon', 210, 14, 0, 0, 'Item_icon_Claidheamh_Mòr', '', ''),
(17, 'Chargin Targe', 'Demo', 'Weapon', 75, 141, 0, 0, 'Item_icon_Chargin_Targe', '', ''),
(18, 'Aim Assistant', 'Engineer', 'Misc', 25, 319, 0, 0, 'Item_icon_Aim_Assistant', '', ''),
(19, 'Antartic Researcher', 'Engineer', 'Armor', 100, 98, 0, 0, 'Item_icon_Antarctic_Researcher', '', ''),
(20, 'Barnstormer', 'Engineer', 'Hat', 199, 65, 0, 0, 'Item_icon_Barnstormer', '', ''),
(21, 'Beep Boy', 'Engineer', 'Misc', 175, 89, 0, 0, 'Item_icon_Beep_Boy', '', ''),
(22, 'Braniac Hairpiece', 'Engineer', 'Hat', 142, 77, 0, 0, 'Item_icon_Brainiac_Hairpiece', '', ''),
(23, 'Brain Interface', 'Engineer', 'Hat', 199, 33, 0, 0, 'Item_icon_Brain_Interface', '', ''),
(24, 'Airwolf Wrench', 'Engineer', 'Weapon', 34, 166, 0, 0, 'Item_icon_Airwolf_Wrench', '', ''),
(25, 'Australium Frontier', 'Engineer', 'Weapon', 150, 111, 0, 0, 'Item_icon_Australium_Frontier_Justice', '', ''),
(26, 'Australium Wrench', 'Engineer', 'Weapon', 177, 78, 0, 0, 'Item_icon_Australium_Wrench', '', ''),
(27, 'Civic Duty Shotgun', 'Engineer', 'Weapon', 12, 412, 0, 0, 'Item_icon_Civic_Duty_Shotgun', '', ''),
(28, 'Gunslinger', 'Engineer', 'Misc', 400, 12, 0, 0, 'Item_icon_Gunslinger', '', ''),
(29, 'Bear Necessities ', 'Heavy', 'Hat', 213, 66, 0, 0, 'Item_icon_Bear_Necessities', '', ''),
(30, 'All Father', 'Heavy', 'Face', 188, 89, 0, 0, 'Item_icon_All-Father', '', ''),
(31, 'B.M.O.C', 'Heavy', 'Hat', 6, 569, 0, 0, 'Item_icon_B.M.O.C.', '', ''),
(32, 'Apparatchik\'s Apparel', 'Heavy', 'Armor', 12, 233, 0, 0, 'Item_icon_Apparatchiks_Apparel', '', ''),
(33, 'Backbiter\'s Billycock', 'Heavy', 'Hat', 55, 120, 0, 0, 'Item_icon_Backbiters_Billycock', '', ''),
(34, 'Apoco\'s Fist', 'Heavy', 'Weapon', 53, 88, 0, 0, 'Item_icon_Apoco-Fists', '', ''),
(35, 'Australium Minigun', 'Heavy', 'Weapon', 118, 99, 0, 0, 'Item_icon_Australium_Minigun', '', ''),
(36, 'Brain Candy', 'Heavy', 'Weapon', 391.59, 2, 0, 0, 'Item_icon_Brain_Candy_Minigun', '', ''),
(37, 'Buffalo Steak', 'Heavy', 'Weapon', 333, 24, 0, 0, 'Item_icon_Buffalo_Steak_Sandvich', '', ''),
(38, 'Dalokohs Bar', 'Heavy', 'Weapon', 188, 76, 0, 0, 'Item_icon_Dalokohs_Bar', '', ''),
(39, 'Butcher Bird', 'Heavy', 'Weapon', 25, 210, 0, 0, 'Item_icon_Butcher_Bird_Minigun', '', ''),
(40, 'Brush with Death', 'Medic', 'Face', 49, 102, 0, 0, 'Item_icon_Brush_with_Death', '', ''),
(41, 'Angel of Death', 'Medic', 'Armor', 555, 6, 0, 0, 'Item_icon_Angel_of_Death', '', ''),
(42, 'Burly Beast', 'Medic', 'Armor', 312, 12, 0, 0, 'Item_icon_Burly_Beast', '', ''),
(43, 'Blighted Beak', 'Medic', 'Face', 10, 381, 0, 0, 'Item_icon_Blighted_Beak', '', ''),
(44, 'Bunnyhopper\'s Ballistic Vest', 'Medic', 'Armor', 20, 220, 0, 0, 'Item_icon_Bunnyhoppers_Ballistics_Vest', '', ''),
(45, 'Archimedes', 'Medic', 'Misc', 399, 17, 0, 0, 'Item_icon_Archimedes', '', ''),
(46, 'Amputator', 'Medic', 'Weapon', 5, 411, 0, 0, 'Item_icon_Amputator', '', ''),
(47, 'Australium Blutsauger', 'Medic', 'Weapon', 155, 45, 0, 0, 'Item_icon_Australium_Blutsauger', '', ''),
(48, 'Golden Frying Pan', 'Medic', 'Weapon', 500, 25, 0, 0, 'Item_icon_Golden_Frying_Pan', '', ''),
(49, 'Overdose', 'Medic', 'Weapon', 146, 77, 0, 0, 'Item_icon_Overdose', '', ''),
(50, 'Quick Fix', 'Medic', 'Weapon', 71, 58, 0, 0, 'Item_icon_Quick-Fix', '', ''),
(51, 'Balloonicorn', 'Pyro', 'Misc', 466, 9, 0, 0, 'Item_icon_Balloonicorn', '', ''),
(52, 'Australium Axtinguisher', 'Pyro', 'Weapon', 315, 23, 0, 0, 'Item_icon_Australium_Axtinguisher', '', ''),
(53, 'Abhorrent Appendages', 'Pyro', 'Armor', 35, 188, 0, 0, 'Item_icon_Abhorrent_Appendages', 'Bartender. Scotch, neat. It has been a long day. Oh, is that a piano?<br>[sound of Chopin\'s Impromptu no. 4 in C sharp minor, ladies swooning]', 'The After Dark is a community-created cosmetic item for the Spy. It undoes the lower buttons on the Spy\'s suit and adds a team-colored vest underneath. It also replaces his necktie for an undone black bow tie, and a loose collar that partially exposes the Spy\'s bare neck. The After Dark was contributed to the Steam Workshop.'),
(54, 'Arachno Arsonist', 'Pyro', 'Face', 79, 90, 0, 0, 'Item_icon_Arachno-Arsonist', '', ''),
(55, 'Back Scratcher', 'Pyro', 'Weapon', 75, 122, 0, 0, 'Item_icon_Back_Scratcher', '', ''),
(56, 'Degreaser', 'Pyro', 'Weapon', 55, 162, 0, 0, 'Item_icon_Degreaser', '', ''),
(57, 'Detonator', 'Pyro', 'Weapon', 55, 100, 0, 0, 'Item_icon_Detonator', '', ''),
(58, 'Hot Air', 'Pyro', 'Hat', 109, 61, 0, 0, 'Item_icon_A_Head_Full_of_Hot_Air', '', ''),
(59, 'Antartic Headwear', 'Scout', 'Hat', 148, 72, 0, 0, 'Item_icon_Antarctic_Eyewear', '', ''),
(60, 'Aloha Apparel', 'Scout', 'Armor', 24, 112, 0, 0, 'Item_icon_Aloha_Apparel', '', ''),
(61, 'Alien Cranium', 'Scout', 'Hat', 666, 5, 0, 0, 'Item_icon_Alien_Cranium', '', ''),
(62, 'Australium Scattergun', 'Scout', 'Weapon', 417, 19, 0, 0, 'Item_icon_Australium_Scattergun', '', ''),
(63, 'Bat', 'Scout', 'Weapon', 0.99, 712, 0, 0, 'Item_icon_Bat', '', ''),
(64, 'Aviator Assasin', 'Scout', 'Hat', 100, 88, 0, 0, 'Item_icon_Aviator_Assassin', '', ''),
(65, 'Athenian Attire', 'Scout', 'Armor', 24, 212, 0, 0, 'Item_icon_Athenian_Attire', '', ''),
(66, 'Argyle Ace', 'Scout', 'Shoes', 211, 24, 0, 0, 'Item_icon_Argyle_Ace', '', ''),
(67, 'Shortstop', 'Scout', 'Weapon', 2.15, 310, 0, 0, 'Item_icon_Shortstop', '', ''),
(68, 'Candy Cane', 'Scout', 'Weapon', 1.85, 510, 0, 0, 'Item_icon_Candy_Cane', '', ''),
(69, 'Airwolf Sniper Rifle', 'Sniper', 'Weapon', 45, 88, 0, 0, 'Item_icon_Airwolf_Sniper_Rifle', '', ''),
(70, 'Anger', 'Sniper', 'Hat', 281.15, 34, 0, 0, 'Item_icon_Anger', '', ''),
(71, 'Archer Groundings', 'Sniper', 'Shoes', 10.5, 409, 0, 0, 'Item_icon_Archers_Groundings', '', ''),
(72, 'Archer Sterling', 'Sniper', 'Hat', 20.12, 311, 0, 0, 'Item_icon_Archers_Sterling', '', ''),
(73, 'Australium SMG', 'Sniper', 'Weapon', 255.19, 59, 0, 0, 'Item_icon_Australium_SMG', '', ''),
(74, 'Australium Sniper Rifle', 'Sniper', 'Weapon', 281.75, 21, 0, 0, 'Item_icon_Australium_Sniper_Rifle', '', ''),
(75, 'AWP', 'Sniper', 'Weapon', 301.95, 15, 0, 0, 'Item_icon_AWPer_Hand', '', ''),
(76, 'Cozy Camper', 'Sniper', 'Misc', 255.19, 41, 0, 0, 'Item_icon_Cozy_Camper', '', ''),
(77, 'Blokes Hat', 'Sniper', 'Hat', 69.12, 191, 0, 0, 'Item_icon_Blokes_Bucket_Hat', '', ''),
(78, 'Bushman\'s Bristles', 'Sniper', 'Face', 91.99, 69, 0, 0, 'Item_icon_Bushmans_Bristles', '', ''),
(79, 'Blokes Bucket Hat', 'Sniper', 'Hat', 109.18, 56, 0, 0, 'Item_icon_Blokes_Bucket_Hat', '', ''),
(80, 'Brim of Bullets', 'Sniper', 'Hat', 151.78, 37, 0, 0, 'Item_icon_Brim-Full_Of_Bullets', '', ''),
(81, 'Air Strike', 'Soldier', 'Weapon', 155.55, 55, 0, 0, 'Item_icon_Air_Strike', '', ''),
(82, 'Antartica Parka', 'Soldier', 'Armor', 120.29, 79, 0, 0, 'Item_icon_Antarctic_Parka', '', ''),
(83, 'Armored Authority', 'Soldier', 'Hat', 191.15, 61, 0, 0, 'Item_icon_Armored_Authority', '', ''),
(84, 'Attack  Packs', 'Soldier', 'Misc', 85.15, 60, 0, 0, 'Item_icon_Attack_Packs', '', ''),
(85, 'Australium Black Box', 'Soldier', 'Weapon', 412.15, 19, 0, 0, 'Item_icon_Australium_Black_Box', '', ''),
(86, 'Australium Rocket Launcher', 'Soldier', 'Weapon', 355.61, 28, 0, 0, 'Item_icon_Australium_Rocket_Launcher', '', ''),
(87, 'B.A.S.E Jumper', 'Soldier', 'Misc', 210.1, 31, 0, 0, 'Item_icon_B.A.S.E._Jumper', '', ''),
(88, 'Brawlin Buccaneer', 'Soldier', 'Armor', 129.91, 81, 0, 0, 'Item_icon_Brawling_Buccaneer', '', ''),
(89, 'Bone Dome', 'Soldier', 'Hat', 410, 7, 0, 0, 'Item_icon_Bone_Dome', '', ''),
(90, 'C.A.P.P.E.R', 'Soldier', 'Weapon', 488.15, 10, 0, 0, 'Item_icon_C.A.P.P.E.R', '', ''),
(91, 'Battalion\'s Backup', 'Soldier', 'Misc', 191.71, 48, 0, 0, 'Item_icon_Battalions_Backup', '', ''),
(92, 'Bill\'s Hat', 'Soldier', 'Hat', 5.65, 310, 0, 0, 'Item_icon_Bills_Hat', '', ''),
(93, 'Ambassador', 'Spy', 'Weapon', 20.25, 131, 0, 0, 'Item_icon_Ambassador', '', ''),
(94, 'Ap-Sap', 'Spy', 'Weapon', 49.23, 112, 0, 0, 'Item_icon_Ap-Sap', '', ''),
(95, 'Big Killer', 'Spy', 'Weapon', 55.91, 69, 0, 0, 'Item_icon_Big_Kill', '', ''),
(96, 'Australium Knife', 'Spy', 'Weapon', 377.15, 19, 0, 0, 'Item_icon_Australium_Knife', '', ''),
(97, 'Bobby Bonnet', 'Spy', 'Hat', 175.15, 60, 0, 0, 'Item_icon_Bobby_Bonnet', '', ''),
(98, 'Cloak and Dagger', 'Spy', 'Misc', 248.36, 40, 0, 0, 'Item_icon_Cloak_and_Dagger', '', ''),
(99, 'Blood Banker', 'Spy', 'Armor', 37, 89, 0, 0, 'Item_icon_Blood_Banker', '', ''),
(100, 'Bountiful Bow', 'Spy', 'Armor', 49.01, 131, 0, 0, 'Item_icon_Bountiful_Bow', '', ''),
(101, 'Conniver\'s Kunai', 'Spy', 'Weapon', 185.51, 34, 0, 0, 'Item_icon_Connivers_Kunai', '', ''),
(102, 'Belgian Detective', 'Spy', 'Hat', 69.81, 120, 0, 0, 'Item_icon_Belgian_Detective', '', ''),
(103, 'Big Topper', 'Spy', 'Hat', 91.65, 109, 0, 0, 'Item_icon_Big_Topper', '', ''),
(104, 'After Dark', 'Spy', 'Armor', 5.75, 199, 0, 0, 'Item_icon_After_Dark', '', ''),
(105, 'Au Courant Assasin', 'Spy', 'Armor', 81.55, 80, 0, 0, 'Item_icon_Au_Courant_Assassin', '', '');

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
(39, 'Riskyq', '$2y$10$d0UL.rBLeBmxNgtjEwl4oO1wW.u1SBC5hIMQIym5dAr.4qTQiz0zi', 'Brendo', '', 'Toledo', ''),
(40, 'Alias', '$2y$10$mIWltr2Jq2CloDO1fXyF1uzmn2pnZWeIz0pMJsMbAGd/uI22eObkG', 'Dino', 'Reyes', 'Gomez', ''),
(41, 'Alias12', '$2y$10$XnrR6CKIy5KcrwEs/5dEg.CIOKP8aRvFiccBZIQWgkgOJ2ybJ/uTS', 'Dino', 'Reyes', 'Gomez', ''),
(42, 'adam166', '$2y$10$2W2KBp0r8AsHODDHAKFqueSeLvv5PLVkhPtTuFtVBJYDU9zrbMQWa', 'dino', 'rosales', 'gomez', ''),
(43, 'roy12', '$2y$10$RrFscxFy/X8i5mCNUENB0.v/PsKqr6pTs8l41Z23tZuernDfHVx4e', 'dino', 'rosales', 'gomez', ''),
(44, 'roy1222', '$2y$10$JLjqXXE/8Bbdx3M0kzRZvucRXiWr4.xMQPcRXi6/PKe1/7YHuP04q', 'dino', 'rosales', 'gomez', ''),
(45, 'Juhn', '$2y$10$UMY5E0xpDGgLGk2PPZF6n.7xecOupai432ZVxJzA38Aa7ROKRzPm2', 'dino', 'rosales', 'gomez', ''),
(46, 'Juhn1', '$2y$10$KV.IYNhh8aE9ARkgpYJbuuBeqP/.6UeTNbYdmiU7XELQ/9dztbmD2', 'dino', 'rosales', 'gomez', ''),
(47, 'dinodoser12', '$2y$10$hPqYEtsXTqDe7ipiq7TLDeP48K5idarWUEcpNIp86u1ELWR7PZ/y2', 'dino', 'rosales', 'gomez', ''),
(48, 'Hugh', '$2y$10$ipwzFlfQcWZCacdYBVffpu9xbD35nuTb4paj8LhexoJTKU3wwxdh2', 'dino', 'rosales', 'gomez', ''),
(49, 'zlaput', '$2y$10$ChAjLohF3DKhHRVKEbjr4.v9NXxZZcPJ1kz9qvvwk2VdgeFc9aymm', 'Krizia', 'Justimbase', 'Laput', ''),
(50, 'gomez', '$2y$10$gBBXZF71EIsaziiUwaONJeroAHQV8Ud0zpq6OB96DhJdScdPXXKmm', 'dino', 'rosales', 'gomez', '');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
