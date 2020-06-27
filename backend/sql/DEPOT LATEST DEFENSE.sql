-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 27, 2020 at 07:48 AM
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `username` varchar(500) NOT NULL,
  `products` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `username`, `products`) VALUES
(25, '$2y$10$2aTNhx2Pf2nVOKT3XwWTSO5LhVmQqgG369S19IFj4ZjkVBwW615ti', 'a:3:{i:0;a:2:{i:0;s:2:\"68\";i:1;s:1:\"3\";}i:1;a:2:{i:0;s:2:\"89\";i:1;s:1:\"1\";}i:2;a:2:{i:0;s:2:\"45\";i:1;s:1:\"3\";}}'),
(34, '$2y$10$PX2rjmkbkzRzEu4cq92omuEhbXPyqC6PMnTB9OysW7QoMiy5XWv9C', 'a:1:{i:0;a:2:{i:0;s:2:\"60\";i:1;s:1:\"1\";}}');

-- --------------------------------------------------------

--
-- Table structure for table `checkout`
--

CREATE TABLE `checkout` (
  `id` int(11) NOT NULL,
  `uid` int(11) NOT NULL,
  `firstName` varchar(50) NOT NULL,
  `lastName` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `steamUser` varchar(50) NOT NULL,
  `save` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `checkout`
--

INSERT INTO `checkout` (`id`, `uid`, `firstName`, `lastName`, `email`, `steamUser`, `save`) VALUES
(3, 21, '0', 'Gomez', 'dinogomez117@gmail.com', 'Artisan', 1),
(4, 49, 'Therese', 'Laput', 'zlaput@gmail.com', 'zlaput18', 1);

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
  `level` varchar(50) NOT NULL,
  `restriction` varchar(100) NOT NULL,
  `stat+` varchar(1000) NOT NULL,
  `stat-` varchar(2000) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `about` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `name`, `class`, `type`, `price`, `stock`, `sold`, `view`, `url`, `level`, `restriction`, `stat+`, `stat-`, `description`, `about`) VALUES
(1, 'Whiff Brimstone', 'Demo', 'Armor', 21, 100, 0, 0, 'Item_icon_A_Whiff_of_the_Old_Brimstone', '', '', '', '', '', ''),
(2, 'Baba\'s Booties', 'Demo', 'Shoes', 15, 312, 0, 0, 'Item_icon_Ali_Baba_Booties', '', '', '', '', '', ''),
(5, 'Allbrero', 'Demo', 'Hat', 35, 98, 0, 0, 'Item_icon_Allbrero', 'Level 1-100 Hat', '', '', '', '', 'The Allbrero is a cosmetic item for the Demoman. It gives the Demoman a tan straw sombrero that bounces as the Demoman moves. On the upturn of the hat is a angular design with a thin green strip and two thick team tinted stripes around it. At the base of the crown is a band of cloth with a thick team tinted and thin green stripe. A piece of the brim has a bite in it.'),
(6, 'B\'argh\'s Bicorne', 'Demo', 'Hat', 40, 78, 0, 0, 'Item_icon_Bicorne', '', '', '', '', '', ''),
(7, 'Backbreaker\'s Guards', 'Demo', 'Armor', 27, 193, 0, 0, 'Item_icon_Backbreaker_Guard', '', '', '', '', '', ''),
(8, 'Battery Bandolier', 'Demo', 'Armor', 26, 110, 0, 0, 'Item_icon_Battery_Bandolier', '', '', '', '', '', ''),
(9, 'Bearded Bombardier', 'Demo', 'Face', 65, 45, 0, 0, 'Item_icon_Bearded_Bombardier', '', '', '', '', '', ''),
(10, 'Black Watch', 'Demo', 'Hat', 120, 24, 0, 0, 'Item_icon_Black_Watch', '', '', '', '', '', ''),
(11, 'Blast Blocker', 'Demo', 'Armor', 135, 19, 0, 0, 'Item_icon_Blast_Blocker', '', '', '', '', '', ''),
(12, 'Blind Justice', 'Demo', 'Face', 200, 5, 0, 0, 'Item_icon_Blind_Justice', '', '', '', '', '', ''),
(13, 'Australium Eyelander', 'Demo', 'Weapon', 135, 60, 0, 0, 'Item_icon_Australium_Eyelander', '', '', '', '', '', ''),
(14, 'Australium Grenade Launcher', 'Demo', 'Weapon', 102, 88, 0, 0, 'Item_icon_Australium_Grenade_Launcher', '', '', '', '', '', ''),
(15, 'Australium Stick Launcher', 'Demo', 'Weapon', 98, 143, 0, 0, 'Item_icon_Australium_Stickybomb_Launcher', '', '', '', '', '', ''),
(16, 'Claidheamh Mòr', 'Demo', 'Weapon', 210, 14, 0, 0, 'Item_icon_Claidheamh_Mòr', '', '', '', '', '', ''),
(17, 'Chargin Targe', 'Demo', 'Weapon', 75, 141, 0, 0, 'Item_icon_Chargin_Targe', '', '', '', '', '', ''),
(18, 'Aim Assistant', 'Engineer', 'Misc', 25, 319, 0, 0, 'Item_icon_Aim_Assistant', 'Commando Grade Mascot', '', '', '', '', 'The Aim Assistant is a community-created cosmetic item for the Engineer. It is miniature wind-up toy Level 1 Sentry Gun, perched on the Engineer\'s shoulder with small metal legs. Its metal key spins while moving.  This cosmetic item has two styles, named \"Normal\" and \"Mini\". The \"Mini\" style changes the appearance of the wind-up toy to a Combat Mini-Sentry Gun.  When players equipped with this item kill an enemy unassisted by another player, the killfeed shows everyone in Pyroland that it gets the assist, with its custom name if it has one.  The Aim Assistant was contributed to the Steam Workshop.'),
(19, 'Antartic Researcher', 'Engineer', 'Armor', 100, 98, 0, 0, 'Item_icon_Antarctic_Researcher', 'Level 1-100 Coat', '', '', '', '', 'The Antarctic Researcher is a community-created cosmetic item for the Engineer. It replaces the Engineer\'s default shirt with a partially zipped thick jacket with the sleeves rolled up, two front pockets and a blank name tag in the left side. Underneath it is a team-colored hooded sweatshirt with the hood peeking out the back. On both of his arms there are team-colored armbands with the Engineer\'s class emblems.'),
(20, 'Barnstormer', 'Engineer', 'Hat', 199, 65, 0, 0, 'Item_icon_Barnstormer', '', '', '', '', '', ''),
(21, 'Beep Boy', 'Engineer', 'Misc', 175, 89, 0, 0, 'Item_icon_Beep_Boy', '', '', '', '', '', ''),
(22, 'Braniac Hairpiece', 'Engineer', 'Hat', 142, 77, 0, 0, 'Item_icon_Brainiac_Hairpiece', '', '', '', '', '', ''),
(23, 'Brain Interface', 'Engineer', 'Hat', 199, 33, 0, 0, 'Item_icon_Brain_Interface', '', '', '', '', '', ''),
(25, 'Australium Frontier', 'Engineer', 'Weapon', 150, 111, 0, 0, 'Item_icon_Australium_Frontier_Justice', '', '', '', '', '', ''),
(26, 'Australium Wrench', 'Engineer', 'Weapon', 177, 78, 0, 0, 'Item_icon_Australium_Wrench', '', '', '', '', '', ''),
(27, 'Civic Duty Shotgun', 'Engineer', 'Weapon', 12, 412, 0, 0, 'Item_icon_Civic_Duty_Shotgun', '', '', '', '', '', ''),
(28, 'Gunslinger', 'Engineer', 'Misc', 400, 12, 0, 0, 'Item_icon_Gunslinger', '', '', '', '', '', ''),
(29, 'Bear Necessities ', 'Heavy', 'Hat', 213, 66, 0, 0, 'Item_icon_Bear_Necessities', '', '', '', '', '', ''),
(30, 'All Father', 'Heavy', 'Face', 188, 89, 0, 0, 'Item_icon_All-Father', 'Level 15 Facial Hair', '', '', '', 'Throughout the history of civilization, the white beard has come to symbolize wisdom and status. Show the world it\'s possible to be bearded AND stupid with this face-nest. Shove it, civilization!', 'The All-Father is a community-created multi-class cosmetic item for the Soldier, Demoman, Heavy, Engineer, Medic and Sniper. It is a large paintable white beard with matching bushy white whiskers and a mustache, similar to those commonly shown on Santa Claus.'),
(31, 'B.M.O.C', 'Heavy', 'Hat', 6, 569, 0, 0, 'Item_icon_B.M.O.C.', '', '', '', '', '', ''),
(32, 'Apparatchik\'s Apparel', 'Heavy', 'Armor', 12, 233, 0, 0, 'Item_icon_Apparatchiks_Apparel', 'Level 1-100 Shirt', '', '', '', 'Toting around a 150-kilogram minigun gives those forearm muscles a nice workout. Show them off with these rolled-sleeved shirts, in your choice of argyle, lumberjack, rugby stripe or vertical pinstripe.', 'The Apparatchik\'s Apparel is a community-created cosmetic item item for the Heavy. It is a long-sleeved shirt with rolled up sleeves, which replaces the Heavy\'s default shirt.  This cosmetic item has four styles, each one applying a different pattern to the shirt. The default style, \"Outdoorsmen\", applies a checker pattern. The second style, \"Blood Bin\", replaces the default pattern with a horizontal stripe pattern. \"Investor\", the third style, applies a vertical stripe pattern, and the fourth, aptly named \"J.R. Gyle\", applies an argyle pattern.'),
(33, 'Backbiter\'s Billycock', 'Heavy', 'Hat', 55, 120, 0, 0, 'Item_icon_Backbiters_Billycock', '', '', '', '', '', ''),
(34, 'Apoco\'s Fist', 'Heavy', 'Weapon', 53, 88, 0, 0, 'Item_icon_Apoco-Fists', 'Level 10 Fists', '', 'Killing an enemy with a critical hit will dismember your victim. Painfully.', '', 'Turn every one of your fingers into the Four Horsemen of the Apocalypse! That\'s over nineteen Horsemen of the Apocalypse per glove! The most Apocalypse we\'ve ever dared attach to one hand!', 'The Apoco-Fists are a promotional melee weapon for the Heavy. They appear as a pair of black, gold-lined, slightly glowing diamond-studded boxing gloves with a skull emblem on each middle finger.  This weapon functions identically to the Fists, but with an added cosmetic function: any enemies killed by a critical hit or mini-crit will be gibbed.  '),
(35, 'Australium Minigun', 'Heavy', 'Weapon', 118, 99, 0, 0, 'Item_icon_Australium_Minigun', '', '', '', '', '', ''),
(36, 'Brain Candy', 'Heavy', 'Weapon', 391.59, 2, 0, 0, 'Item_icon_Brain_Candy_Minigun', '', '', '', '', '', ''),
(37, 'Buffalo Steak', 'Heavy', 'Weapon', 333, 24, 0, 0, 'Item_icon_Buffalo_Steak_Sandvich', '', '', '', '', '', ''),
(38, 'Dalokohs Bar', 'Heavy', 'Weapon', 188, 76, 0, 0, 'Item_icon_Dalokohs_Bar', '', '', '', '', '', ''),
(39, 'Butcher Bird', 'Heavy', 'Weapon', 25, 210, 0, 0, 'Item_icon_Butcher_Bird_Minigun', '', '', '', '', '', ''),
(40, 'Brush with Death', 'Medic', 'Face', 49, 102, 0, 0, 'Item_icon_Brush_with_Death', '', '', '', '', '', ''),
(41, 'Angel of Death', 'Medic', 'Armor', 555, 6, 0, 0, 'Item_icon_Angel_of_Death', 'Level 1-100 Apparel', '', '', '', '', 'The Angel of Death is a community-created cosmetic item for the Medic. It turns the Medic\'s default lab coat into a team-colored surplice with wide sleeves. The item further adds a team-colored, gold-trimmed pellegrina which is worn on the Medic\'s shoulders, along with a dove engraved medallion which hangs from the Medic\'s neck.'),
(42, 'Burly Beast', 'Medic', 'Armor', 312, 12, 0, 0, 'Item_icon_Burly_Beast', '', '', '', '', '', ''),
(43, 'Blighted Beak', 'Medic', 'Face', 10, 381, 0, 0, 'Item_icon_Blighted_Beak', '', '', '', '', '', ''),
(44, 'Bunnyhopper\'s Ballistic Vest', 'Medic', 'Armor', 20, 220, 0, 0, 'Item_icon_Bunnyhoppers_Ballistics_Vest', '', '', '', '', '', ''),
(45, 'Archimedes', 'Medic', 'Misc', 399, 17, 0, 0, 'Item_icon_Archimedes', 'Level 1-100 Mascot', '', '', '', 'Before Archimedes came into the Medic\'s care, he made his living through wedding dovery. A lucrative trade, but he always felt something was missing. He looks back on the day that the Medic stole that catering van during the prime minister\'s wedding as the best day of his life. He\'s been burrowing into the chests of unwitting patients ever since.', ''),
(46, 'Amputator', 'Medic', 'Weapon', 5, 411, 0, 0, 'Item_icon_Amputator', 'Level 15 Bonesaw', '', '+3 health regenerated per second on wearer<br> Alt-Fire: Applies a healing effect to all nearby teammates', '-20% damage penalty', '', 'The Amputator is a community-created melee weapon for the Medic. It is a saw with angular edges and a distinct team-colored handle with an arrowhead-like extension near the top and the Medic\'s class icon in the center. The Amputator will not overheal teammates.'),
(47, 'Australium Blutsauger', 'Medic', 'Weapon', 155, 45, 0, 0, 'Item_icon_Australium_Blutsauger', '', '', '', '', '', ''),
(48, 'Golden Frying Pan', 'Medic', 'Weapon', 500, 25, 0, 0, 'Item_icon_Golden_Frying_Pan', '', '', '', '', '', ''),
(49, 'Overdose', 'Medic', 'Weapon', 146, 77, 0, 0, 'Item_icon_Overdose', '', '', '', '', '', ''),
(50, 'Quick Fix', 'Medic', 'Weapon', 71, 58, 0, 0, 'Item_icon_Quick-Fix', '', '', '', '', '', ''),
(51, 'Balloonicorn', 'Pyro', 'Misc', 466, 9, 0, 0, 'Item_icon_Balloonicorn', '', '', '', '', '', ''),
(52, 'Australium Axtinguisher', 'Pyro', 'Weapon', 315, 23, 0, 0, 'Item_icon_Australium_Axtinguisher', 'Level 10 Fire Axe', '', 'Mini-crits burning targets and extinguishes them. Damage increases based on remaining duration of afterburn Killing blows on burning players grant a speed boost.', '-33% damage penalty<br> No random critical hits<br> This weapon holsters 35% slower', '', 'The Axtinguisher is an unlockable melee weapon for the Pyro class. It is a crudely constructed Fire Axe consisting of a slightly rusted axe-head, stained with blood and wrapped in barbed wire, affixed to a curved wooden handle with a fabric grip and a splintered end.'),
(53, 'Abhorrent Appendages', 'Pyro', 'Armor', 35, 188, 0, 0, 'Item_icon_Abhorrent_Appendages', 'Level 1-100 Costume Piece', 'Holiday Restriction: Halloween / Full Moon', '', '', '', 'The Abhorrent Appendages are a community-created cosmetic item for the Pyro. It adds paintable appendages of amphibious nature that burst through the Pyro\'s gloves and boots.  This item can only be worn around Halloween or during a Full Moon; at other times of the year, it does not appear in gameplay, unless the server has Halloween mode enabled. However, it can be equipped at any time and can still be viewed on the loadout screen even when it is not visible during games.  The Abhorrent Appendages was contributed to the Steam Workshop.'),
(54, 'Arachno Arsonist', 'Pyro', 'Face', 79, 90, 0, 0, 'Item_icon_Arachno-Arsonist', 'Mercenary Grade Hat', '', '', '', '', 'The Arachno-Arsonist is a community-created cosmetic item for the Pyro. It replaces the Pyro\'s head with a dark-brown head of a spider. The fur around eyes is a bit darker than on the rest of the head. Spider\'s fangs, or chelicerae, are moving with the player\'s movements.'),
(55, 'Back Scratcher', 'Pyro', 'Weapon', 75, 122, 0, 0, 'Item_icon_Back_Scratcher', '', '', '', '', '', ''),
(56, 'Degreaser', 'Pyro', 'Weapon', 55, 162, 0, 0, 'Item_icon_Degreaser', '', '', '', '', '', ''),
(57, 'Detonator', 'Pyro', 'Weapon', 55, 100, 0, 0, 'Item_icon_Detonator', '', '', '', '', '', ''),
(58, 'Hot Air', 'Pyro', 'Hat', 109, 61, 0, 0, 'Item_icon_A_Head_Full_of_Hot_Air', '', '', '', '', '', ''),
(59, 'Antartic Eyewear', 'Scout', 'Hat', 148, 72, 0, 0, 'Item_icon_Antarctic_Eyewear', 'Mercenary Grade Apparel', '', '', '', '', 'The Antarctic Eyewear is a community-created cosmetic item for the Scout, Demoman, Engineer and Sniper. It includes a pair of goggles and a class-specific hairstyle: <ul> <li>Scout\'s hair becomes brushed back, giving the impression of speed.</li> <li>Demoman gets a short afro. One of the goggle lenses, the one over his missing eye, is cracked.</li> <li>Engineer gains middle-parted hair with bangs, similar to a hairstyle that was popular with men in the 90s.</li> <li>Sniper gets a pompadour, with a couple loose strands of hair falling out the front.</li> </ul>'),
(60, 'Aloha Apparel', 'Scout', 'Armor', 24, 112, 0, 0, 'Item_icon_Aloha_Apparel', 'Mercenary Grade Shirt', '', '', '', '', 'The Aloha Apparel is a community-created cosmetic item for the Scout, Engineer and Spy. It gives the class a team-colored button-up Hawaiian shirt with a floral pattern on it.  The Aloha Apparel was contributed to the Steam Workshop.'),
(61, 'Alien Cranium', 'Scout', 'Hat', 666, 5, 0, 0, 'Item_icon_Alien_Cranium', 'Level 1-100 Costume Piece', 'Holiday Restriction: Halloween / Full Moon', '', '', '', 'The Alien Cranium is a community-created promotional cosmetic item for the Scout. It appears as a head of a Xenomorph, the main enemy in Alien: Isolation.  This item can only be worn around Halloween or during a Full Moon; at other times of the year, it does not appear in gameplay, unless the server has Halloween mode enabled. However, it can be equipped at any time and can still be viewed on the loadout screen even when it is not visible during games.  This item was awarded in Genuine quality to players who pre-ordered Alien: Isolation on Steam before October 7th, 2014.  The Alien Cranium was contributed to the Steam Workshop.'),
(62, 'Australium Scattergun', 'Scout', 'Weapon', 417, 19, 0, 0, 'Item_icon_Australium_Scattergun', '', '', '', '', '', ''),
(63, 'Bat', 'Scout', 'Weapon', 0.99, 712, 0, 0, 'Item_icon_Bat', '', '', '', '', '', ''),
(64, 'Aviator Assasin', 'Scout', 'Hat', 100, 88, 0, 0, 'Item_icon_Aviator_Assassin', '', '', '', '', '', ''),
(65, 'Athenian Attire', 'Scout', 'Armor', 24, 212, 0, 0, 'Item_icon_Athenian_Attire', 'Commando Grade Shirt', '', '', '', '', 'The Athenian Attire is a community-created cosmetic item for the Scout. It replaces his default shirt and removes his dog tags with a short tunic, adorned with golden trims with angular spirals. It also gives him a black sash across his chest, a black belt with a golden buckle featuring his class emblem, and black bracers with the same golden trims as the tunic.'),
(66, 'Argyle Ace', 'Scout', 'Shoes', 211, 24, 0, 0, 'Item_icon_Argyle_Ace', 'Level 1-100 Shoes', '', '', '', '', 'The Argyle Ace is a cosmetic item for the Scout. It replaces the Scout\'s default shoes and socks with long socks with a diamond pattern and tan leather dress shoes.'),
(67, 'Shortstop', 'Scout', 'Weapon', 2.15, 310, 0, 0, 'Item_icon_Shortstop', '', '', '', '', '', ''),
(68, 'Candy Cane', 'Scout', 'Weapon', 1.85, 510, 0, 0, 'Item_icon_Candy_Cane', '', '', '', '', '', ''),
(70, 'Anger', 'Sniper', 'Hat', 281.15, 34, 0, 0, 'Item_icon_Anger', 'Level 10 Hat', '', '', '', '', 'The Anger is a promotional cosmetic item for the Sniper. It is a team-colored hood with a striped brown veil. Parts of the hood and the veil are held together by rough stitches.  The Anger was awarded in Genuine quality to players who purchased Brink before 10AM PDT on August 8, 2011.  Later, it was awarded in Unique quality to players who purchased the Quakecon Bundle before 10AM PDT on August 6th, 2012.'),
(71, 'Archer Groundings', 'Sniper', 'Shoes', 10.5, 409, 0, 0, 'Item_icon_Archers_Groundings', 'Level 1-100 Boots', '', '', '', '', 'The Archers(sic) Groundings are a community-created cosmetic item for the Sniper. It replaces the Sniper\'s default shoes with a pair of large cuffed light-brown boots made of crocodile leather. The cuffs of the boots are wrapped with brown leather belts with metal buckles.'),
(72, 'Archer Sterling', 'Sniper', 'Hat', 20.12, 311, 0, 0, 'Item_icon_Archers_Sterling', 'Commando Grade Hat', '', '', '', '', 'The Archer\'s Sterling is a community-created cosmetic item for the Sniper. It gives the Sniper a team-colored conical nasal helmet worn over leather coif.'),
(73, 'Australium SMG', 'Sniper', 'Weapon', 255.19, 59, 0, 0, 'Item_icon_Australium_SMG', '', '', '', '', '', ''),
(74, 'Australium Sniper Rifle', 'Sniper', 'Weapon', 281.75, 21, 0, 0, 'Item_icon_Australium_Sniper_Rifle', '', '', '', '', '', ''),
(75, 'AWP', 'Sniper', 'Weapon', 301.95, 15, 0, 0, 'Item_icon_AWPer_Hand', '', '', '', '', '', ''),
(76, 'Cozy Camper', 'Sniper', 'Misc', 255.19, 41, 0, 0, 'Item_icon_Cozy_Camper', '', '', '', '', '', ''),
(77, 'Blokes Hat', 'Sniper', 'Hat', 69.12, 191, 0, 0, 'Item_icon_Blokes_Bucket_Hat', '', '', '', '', '', ''),
(78, 'Bushman\'s Bristles', 'Sniper', 'Face', 91.99, 69, 0, 0, 'Item_icon_Bushmans_Bristles', '', '', '', '', '', ''),
(79, 'Blokes Bucket Hat', 'Sniper', 'Hat', 109.18, 56, 0, 0, 'Item_icon_Blokes_Bucket_Hat', '', '', '', '', '', ''),
(80, 'Brim of Bullets', 'Sniper', 'Hat', 151.78, 37, 0, 0, 'Item_icon_Brim-Full_Of_Bullets', '', '', '', '', '', ''),
(81, 'Air Strike', 'Soldier', 'Weapon', 155.55, 55, 0, 0, 'Item_icon_Air_Strike', 'Level 1-100 Rocket Launcher', '', '-15% blast damage from rocket jumps Increased attack speed and smaller blast radius while blast jumping Clip size increased on kill', '-15% damage penalty<br> -10% explosion radius', '', 'The Air Strike is a community-created primary weapon for the Soldier. It is a green atom bomb-shaped rocket launcher with a white checkered pattern near the front and tannish wooden handles. It fires a green and white missile with fins on the front and back of the projectile.  The projectiles fired by this weapon deal 15% less damage (both to enemies and the Soldier when rocket jumping) and have a 10% smaller explosion radius. '),
(82, 'Antartic Parka', 'Soldier', 'Armor', 120.29, 79, 0, 0, 'Item_icon_Antarctic_Parka', 'Level 1-100 Coat', '', '', '', '', 'The Antarctic Parka is a community-created cosmetic item for the Soldier. It is a team-colored, padded snow suit with a hanging hood.'),
(83, 'Armored Authority', 'Soldier', 'Hat', 191.15, 61, 0, 0, 'Item_icon_Armored_Authority', 'Level 1-100 Hat', '', '', '', '', 'Armored Authority is a community-created cosmetic item for the Soldier. It is a black helmet with three silver stars across the front and a brown leather strip wrapped around the front brim.'),
(84, 'Attack  Packs', 'Soldier', 'Misc', 85.15, 60, 0, 0, 'Item_icon_Attack_Packs', 'Mercenary Grade Cosmetic Item', '', '', '', '', 'The Attack Packs is a community-created cosmetic item for the Soldier. It is a green harness with pouches, similar to Vietnam War-era load-bearing equipment.'),
(85, 'Australium Black Box', 'Soldier', 'Weapon', 412.15, 19, 0, 0, 'Item_icon_Australium_Black_Box', 'Level 5 The', '', 'On Hit: Gain up to +20 health per attack', '-25% clip size', '', 'The Black Box is a community-created primary weapon for the Soldier. It is a black, rectangular rocket launcher with rounded edges, sporting two dark grey fastening bands near the front end and case coverings hanging open at both ends of the weapon. The rear case covering swings idly.'),
(86, 'Australium Rocket Launcher', 'Soldier', 'Weapon', 355.61, 28, 0, 0, 'Item_icon_Australium_Rocket_Launcher', '', '', '', '', '', ''),
(87, 'B.A.S.E Jumper', 'Soldier', 'Misc', 210.1, 31, 0, 0, 'Item_icon_B.A.S.E._Jumper', '', '', '', '', '', ''),
(88, 'Brawlin Buccaneer', 'Soldier', 'Armor', 129.91, 81, 0, 0, 'Item_icon_Brawling_Buccaneer', '', '', '', '', '', ''),
(89, 'Bone Dome', 'Soldier', 'Hat', 410, 7, 0, 0, 'Item_icon_Bone_Dome', '', '', '', '', '', ''),
(90, 'C.A.P.P.E.R', 'Soldier', 'Weapon', 488.15, 10, 0, 0, 'Item_icon_C.A.P.P.E.R', '', '', '', '', '', ''),
(91, 'Battalion\'s Backup', 'Soldier', 'Misc', 191.71, 48, 0, 0, 'Item_icon_Battalions_Backup', '', '', '', '', '', ''),
(92, 'Bill\'s Hat', 'Soldier', 'Hat', 5.65, 310, 0, 0, 'Item_icon_Bills_Hat', '', '', '', '', '', ''),
(93, 'Ambassador', 'Spy', 'Weapon', 20.25, 131, 0, 0, 'Item_icon_Ambassador', 'Level 5 Revolver', '', 'Crits on headshot', '-15% damage penalty<br> 20% slower firing speed<br> No random critical hits<br> Critical damage is affected by range<br>', '', 'The Ambassador is an unlockable secondary weapon for the Spy. It is a large-barreled revolver with a deep team-colored (red for RED, brown for BLU) rosewood grip, and an engraving of a reclining woman on the barrel. It has hollow point bullets loaded into the cylinder.  The Ambassador does 15% less damage, does not apply random critical hits, the critical hits and mini-crit damage affected by distance falloff, and fires at a slower rate than the default Revolver. However, it has perfect accuracy for shots fired at slower intervals and deals critical hits on a headshot. '),
(94, 'Ap-Sap', 'Spy', 'Weapon', 49.23, 112, 0, 0, 'Item_icon_Ap-Sap', 'Level 1-100 Sapper', '', '', '', 'Mann Co. got a great deal from a nice lady in an abandoned science facility on a warehouse full of slightly used, possibly mildly defective sappers. Unlike our other sappers, the Ap-Sap is sentient, and will provide hours of lively, one-sided conversation while you\'re trying to work.', 'The Ap-Sap is a promotional building weapon for the Spy. It is a flattened Wheatley core with a glowing blue eye, that has voice lines which are activated upon certain circumstances such as deploying a Sapper, death, and more. The eyelid of the Ap-Sap moves as it talks and widens when in range of a sappable building.  This weapon functions identically to the Sapper.'),
(95, 'Big Killer', 'Spy', 'Weapon', 55.91, 69, 0, 0, 'Item_icon_Big_Kill', '', '', '', '', '', ''),
(96, 'Australium Knife', 'Spy', 'Weapon', 377.15, 19, 0, 0, 'Item_icon_Australium_Knife', '', '', '', '', '', ''),
(97, 'Bobby Bonnet', 'Spy', 'Hat', 175.15, 60, 0, 0, 'Item_icon_Bobby_Bonnet', '', '', '', '', '', ''),
(98, 'Cloak and Dagger', 'Spy', 'Misc', 248.36, 40, 0, 0, 'Item_icon_Cloak_and_Dagger', '', '', '', '', '', ''),
(99, 'Blood Banker', 'Spy', 'Armor', 37, 89, 0, 0, 'Item_icon_Blood_Banker', '', '', '', '', '', ''),
(100, 'Bountiful Bow', 'Spy', 'Armor', 49.01, 131, 0, 0, 'Item_icon_Bountiful_Bow', '', '', '', '', '', ''),
(101, 'Conniver\'s Kunai', 'Spy', 'Weapon', 185.51, 34, 0, 0, 'Item_icon_Connivers_Kunai', '', '', '', '', '', ''),
(102, 'Belgian Detective', 'Spy', 'Hat', 69.81, 120, 0, 0, 'Item_icon_Belgian_Detective', '', '', '', '', '', ''),
(103, 'Big Topper', 'Spy', 'Hat', 91.65, 109, 0, 0, 'Item_icon_Big_Topper', '', '', '', '', '', ''),
(104, 'After Dark', 'Spy', 'Armor', 5.75, 199, 0, 0, 'Item_icon_After_Dark', 'Level 1-100 Apparel', '', '', '', 'Bartender. Scotch, neat. It has been a long day. Oh, is that a piano?<br>[sound of Chopin\'s Impromptu no. 4 in C sharp minor, ladies swooning]', 'The After Dark is a community-created cosmetic item for the Spy. It undoes the lower buttons on the Spy\'s suit and adds a team-colored vest underneath. It also replaces his necktie for an undone black bow tie, and a loose collar that partially exposes the Spy\'s bare neck. The After Dark was contributed to the Steam Workshop.'),
(105, 'Au Courant Assasin', 'Spy', 'Armor', 81.55, 80, 0, 0, 'Item_icon_Au_Courant_Assassin', 'Level 1-100 Shirt', '', '', '', '', 'The Au Courant Assassin is a community-created cosmetic item for the Spy. It replaces the Spy\'s default shirt and tie with a paintable open dress shirt and a team-colored paisley cravat, and adds gold buttons (silver buttons on BLU team) to his shirt and suit.');

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
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `checkout`
--
ALTER TABLE `checkout`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`);

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
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `checkout`
--
ALTER TABLE `checkout`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

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

--
-- Constraints for dumped tables
--

--
-- Constraints for table `checkout`
--
ALTER TABLE `checkout`
  ADD CONSTRAINT `checkout_ibfk_1` FOREIGN KEY (`uid`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
