-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 12, 2017 at 01:31 PM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thegamingplace`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `brand_id` int(100) NOT NULL,
  `brand_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brand_id`, `brand_title`) VALUES
(1, 'Nintendo'),
(2, 'Ubisoft'),
(3, 'Electronic Arts (EA)'),
(4, 'Sony'),
(5, 'Square Enix'),
(6, 'Microsoft'),
(7, 'Bandai Namco Games'),
(8, 'Activision Blizzard'),
(9, 'Zen Studios'),
(10, 'Warner Bros'),
(11, '505 Games');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `ip_add` varchar(250) NOT NULL,
  `user_id` int(10) NOT NULL,
  `product_title` varchar(300) NOT NULL,
  `product_image` text NOT NULL,
  `qty` int(100) NOT NULL,
  `price` int(100) NOT NULL,
  `total_amount` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `p_id`, `ip_add`, `user_id`, `product_title`, `product_image`, `qty`, `price`, `total_amount`) VALUES
(20, 4, '0', 3, 'Sniper Elite III ', 'game4.JPG', 5, 50, 250),
(28, 3, '0', 0, 'Batman - Black Gate', 'game1.JPG', 1, 30, 30),
(29, 7, '0', 0, 'Nintendo Console', 'nintendo.PNG', 1, 499, 499),
(30, 8, '0', 0, 'Nintendo Wii U Console', 'nintendowiiuconsole.JPG', 1, 5000, 5000),
(31, 1, '0', 3, 'Call of Duty', 'game2.JPG', 1, 49, 49),
(32, 2, '0', 3, 'Watch Dogs', 'game3.JPG', 1, 59, 59),
(36, 1, '0', 0, 'Call of Duty', 'game2.JPG', 1, 49, 49),
(37, 2, '0', 0, 'Watch Dogs', 'game3.JPG', 1, 59, 59),
(40, 5, '0', 3, 'Batman - Arkham City', 'game5.JPG', 1, 30, 30),
(42, 32, '0', 2, 'FIFA 2014', 'FIFA_14.jpg', 5, 170, 850),
(43, 14, '0', 2, 'PlayStation 2 Console', 'ps2.JPG', 3, 800, 2400),
(44, 31, '0', 2, 'Dragon Rage ', 'dragonrage.jpg', 1, 150, 150),
(45, 36, '0', 2, 'PES 2010', 'pes2010.jpg', 1, 175, 175);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`) VALUES
(1, 'Xbox One'),
(2, 'PlayStation 2'),
(3, 'PlayStation 3'),
(4, 'PlayStation 4'),
(5, 'Gaming Console'),
(6, 'Xbox 360'),
(7, 'Nintendo Wii U Games'),
(8, 'Other Console Games'),
(9, 'PS Vita');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `p_name` varchar(255) NOT NULL,
  `p_price` int(100) NOT NULL,
  `p_qty` int(100) NOT NULL,
  `p_status` varchar(100) NOT NULL,
  `trx_id` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(100) NOT NULL,
  `product_cat` int(100) NOT NULL,
  `product_brand` int(100) NOT NULL,
  `product_title` varchar(100) NOT NULL,
  `product_price` int(100) NOT NULL,
  `product_desc` text NOT NULL,
  `product_image` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_cat`, `product_brand`, `product_title`, `product_price`, `product_desc`, `product_image`, `product_keywords`) VALUES
(1, 3, 8, 'Call of Duty', 49, 'Call of Duty: Ghosts is an extraordinary step forward for one of the largest entertainment franchises of all-time. This new chapter in the call of duty franchise features a new dynamic where players are on the side of a crippled nation fighting not for freedom, or liberty, but simply to survive.', 'game2.JPG', 'call of duty'),
(2, 3, 2, 'Watch Dogs', 59, 'Watch Dogs: Features city technology and hold key information and all of the city''s residents. You play as Aiden Pearce, a brilliant hacker and former thug, whose brilliant past led to family tragedy. Now on the hunt for those who hurt your family, you''ll be able yo monitor and hack all who surround you by manipulating everything connected to the city''s network. Access omnipresent security cameras, donwload personal information to locate a target, control traffic lights and public transportation to stop the enemy...and more!', 'game3.JPG', 'watch dog'),
(3, 9, 10, 'Batman - Black Gate', 30, 'Batman - Black gate is for your mobile PlayStation console. Enjoy this action game with different interesting levels, suitable for your gaming pleasure. You''ll love it.', 'game1.JPG', 'batman black gate'),
(4, 3, 11, 'Sniper Elite III ', 50, 'Sniper Elite 3 takes players to the unforgiving yet exotic terrain of WW2''s North Africa conflicts in a battle against a deadly new foe. Equipped with Tiger tanks and the largest weaponry, Germany''s infamous Africa have the Allies outnumbered and outgunned.', 'game4.JPG', 'sniper elite'),
(5, 3, 10, 'Batman - Arkham City', 30, 'Face a unified roster of villains in the explosive finale to the legendary series..', 'game5.JPG', 'batman arkham city'),
(6, 3, 10, 'Shadow of Mordor', 50, 'Seek revenge and redemption in an epic new chronicle of Middle-earth..', 'game6.JPG', 'shadow of mordor'),
(7, 5, 1, 'Nintendo Console', 499, 'Nintendo console for your gaming pleasure.', 'nintendo.PNG', 'nintendo game console'),
(8, 5, 1, 'Nintendo Wii U Console', 5000, 'Nintendo Wii U Console for your new technology and innovative invention in gaming. Try something new ', 'nintendowiiuconsole.JPG', 'nintendo wii game console'),
(9, 5, 1, 'Nintendo Wii U Console', 6500, 'Nintendo Wii  console for the new gaming experience. You''ll love it.', 'nintendowiiuconsole2.JPG', 'nintendo wii console game'),
(10, 2, 4, 'PlayStation 2 Console', 800, 'Yet outdated but still in the gaming game to say.', 'playstation2.JPG', 'playstation2 game ps2'),
(11, 4, 4, 'PlayStation 4 Console', 4500, 'Enjoy this new generation playstation 4. Very sleek and sophisticated.', 'playstation4.PNG', 'playstation4 ps4 game'),
(12, 3, 4, 'PlayStation 3 Console', 2500, 'PlayStation 3 Console', 'ps3.JPG', 'playStation3 ps3 game'),
(13, 3, 4, 'playStation 3 Console', 2400, 'PlayStation 3 for you!', 'plystation3.JPG', 'playsation3 ps3 game'),
(14, 2, 4, 'PlayStation 2 Console', 800, 'Playstation 2 game', 'ps2.JPG', 'ps2 game playstation2'),
(15, 4, 4, 'PlayStation 4 New', 5000, 'Enjoy new the generation of PS 4 ', 'ps4.png', 'Ps 4 PlayStation 4'),
(16, 9, 4, 'PlayStation Vita', 2500, 'Ps Vita for gaming experience ', 'psvita.jpg', 'PS vita PlayStation Vita'),
(17, 9, 4, 'PS Vita Handheld', 2000, 'Had held ps vita', 'psvita2.jpg', 'Ps vita PlayStation vita'),
(18, 3, 6, 'XBox 360', 3500, 'Xbox360 New', 'xbox360.jpg', 'xbox 360'),
(19, 1, 3, 'Xbox One New', 2300, 'New xbox one', 'xboxone.jpg', 'Xbox One Xbox'),
(20, 7, 5, '007 James Bond', 250, '007 James Bond', '007legends.jpg', '007 James Bong Nintendo'),
(21, 7, 2, 'Assassin Creed', 250, 'Assassin Creed Features the shooting adventure of Hakkam. You are Acker Max, you shoot to get yor safety as you make your way home. ', 'as_creed.jpg', 'assassin creed nintendo'),
(22, 7, 5, 'Megamind', 230, 'Megamind the gaming ', 'megaming.jpg', 'Megamind Ninetendo'),
(23, 7, 7, 'MineCraft', 200, 'Mine Craft the game ', 'mincraft.jpg', 'minecraft nintendo'),
(24, 7, 7, 'Super Mario', 200, 'Super Mario', 'supermario.jpg', 'Super Mario Nintendo '),
(25, 7, 9, 'Tetris', 150, 'Tetris the game', 'tetris.jpg', 'Tetris Ninetendo'),
(26, 7, 7, '3D Super Mario', 300, 'Super Mario the game', 'supermariowii.jpg', 'Super Mario Nintendo'),
(27, 7, 11, 'Tokyo Mirage', 200, 'The adventure of Tokyo Mirage', 'tokyomirage.jpg', 'Tokyo Mirage Sessions Nintendo'),
(28, 7, 8, 'XenoBlade', 220, 'XenoBlade Chronicles X', 'Xenobl.jpg', 'XenoBlade Chronicles X Nintendo'),
(29, 7, 11, 'Zombie U', 300, 'Zombie U', 'zombiu.jpg', 'Zombie U Nintendo'),
(30, 2, 2, '7 Sins', 150, 'The horror game features the Misery of New York Night. You are Pierce Aiden and on the mission to save young girls that are a victim of human trafficking ', '7sins.jpg', 'Seven sins 7 sins PlayStation 2 Ps 2 PS2'),
(31, 2, 2, 'Dragon Rage ', 150, 'Dragon Rage. You are on the quest to fight horrific bad guys. You are on the mission to achieve the dragon crown.', 'dragonrage.jpg', 'Dragon rage PlayStation 2 Ps 2 PS2'),
(32, 2, 3, 'FIFA 2014', 170, 'FIFA 2014 brings you the adventure of soccer at its best. The game features the recent squad in teams like Barcelona, Chelsea, Arsenal and other European teams. It is full HD and promises the best gaming experience.', 'FIFA_14.jpg', 'Fifa 14 fifa 2014 PlayStation 2 Ps 2 PS2'),
(33, 2, 5, 'God Hand', 150, 'God Hand is the best game production the leaders in adventure games Capcom mobile. This is the best fighting game and features different levels of fighting.', 'godhand.jpg', 'God hand PlayStation 2 Ps 2 PS2'),
(34, 2, 2, 'God of War', 160, 'God of War is a horror adventure. You are on the quest to save the world from bad people of hakai, your mission to kill them all! ', 'godofwar.jpg', 'god of war PlayStation 2 Ps 2 PS2'),
(35, 2, 5, 'Grand Theft Auto', 160, 'Grand Theft Auto features the Gangsta life in New York Street, you are on the mission to scavenge the street for missing the street for a missing boy and prevent yourself from an angry mob trying to execute you.', 'grandtheftauto.jpg', 'Grand Theft auto gta PlayStation 2 Ps 2 PS2'),
(36, 2, 6, 'PES 2010', 175, 'Pro Evolution Soccer 2010 is the latest soccer game product by Microsoft Corporation. It features tournament like the Champions League, English Premier League and Europa Cup, the game includes the latest squads in all soccer teams.', 'pes2010.jpg', 'PES 2010 Pro Evolution Soccer 2010 PlayStation 2 Ps 2 PS2'),
(37, 2, 9, 'Silent Hill', 150, 'Silent Hill is the best horror game of 2015. It features the different levels of horror and adventure, you are the mission to get to the city of Gollom save and sound.', 'Silent_Hill_2.jpg', 'Silent hill PlayStation 2 Ps 2 PS2'),
(38, 2, 8, 'Spider Man', 150, 'Uncle Ben is murdered from a guy you saved from a hospital. You are on the mission to find this murderer and kill him for what he has done to you, yet you have to protect your identity from the New York police.', 'spiderman.jpg', 'spider man PlayStation 2 Ps 2 PS2'),
(39, 2, 10, 'Street FIFA', 150, 'Street FIFA is the game that features the street life soccer of Brazilians. You are to feature in different street soccer league and win trophies. The level and soccer matches get harder as you progress from one level to another.', 'streetfifa.jpg', 'Street Fifa PlayStation 2 Ps 2 PS2'),
(40, 2, 11, 'Tomb Raider ', 140, 'You are Angelina Jolie. You are on the mission to apprehend murderers and human traffickers, these guys are guilty of selling human body parts. The levels get harder as you progress.', 'tombraider.jpg', 'tomb raider PlayStation 2 Ps 2 PS2'),
(41, 3, 11, 'Avatar', 140, 'You are on the mission to protect your alien community (Avatar). The US army is trying to put you into extinction. You on the mission to survive this horror and survive.', 'avatar.jpg', 'Avatar PlayStation 3 Ps 3 PS3'),
(42, 3, 4, 'COD: Black Ops', 170, 'Call of Duty of Duty Black Ops features the adventure as the first publication. This production feature more levels of mission. You are to save the a group of lost children through a misty mountain and get them save and sound to the US embassy where they are transported to the United States.', 'callofduty.jpg', 'Call of Duty of Duty Black Ops PlayStation 3 Ps 3 PS3'),
(43, 3, 8, 'Game of Thrones', 160, 'The dead king''s crown has been stolen by some dangerous Knight from the city of Akai. You as the king''s some other soldiers are get back the crown from Akai. The adventure continues..', 'GameofThronesPS3.jpg', 'Game of thrones PlayStation 3 Ps 3 PS3'),
(44, 3, 8, 'Amazing Spider Man', 170, 'Mary Jane is going to be raped on her way to her boyfriend. Your crush on Mary would not let you allow any harm on Mary. You are the on the mission to protect Mary Jane and save her from violent and abusive boyfriend.', 'Theamzingps3.jpg', 'amazing spider man PlayStation 3 Ps 3 PS3'),
(45, 4, 2, 'Assassin Creed', 200, 'Assassin Creed Features the shooting adventure of Hakkam. You are Acker Max, you shoot to get yor safety as you make your way home. ', 'assasincreed.jpg', 'Assassin Creed PlayStation 4 Ps 4 PS4'),
(46, 4, 7, 'Battle Field', 210, 'You are at war to save Akwood and with group of army. You have to conquer the enemies and return home with the booty.', 'battefield.jpg', 'battle field PlayStation 4 Ps 4 PS4\r\n'),
(47, 4, 5, 'Blood Borne', 200, 'Blood borne as the name implies a game where blood is shed for blood. Your defend less army has been killed and you are on the mission to carry out a revenge on the oppressors  ', 'bloodborne.jpg', 'blood borne PlayStation 4 Ps 4 PS4\r\n'),
(48, 4, 1, 'Far Cry', 210, 'Your Pierce Mason who is lost in an island far far away from home. You are on the quest to make it home alive.', 'farcry.jpg', 'Far Cry PlayStation 4 Ps 4 PS4\r\n'),
(49, 4, 1, 'Final Fantasy', 190, 'You are from hunting and go back, you encounter some group of Gangstas who took your car and belongings. You are on the mission to get it back from them and the fight get bloody.', 'finalfintatasy.jpg', 'final fantasy PlayStation 4 Ps 4 PS4\r\n'),
(50, 4, 9, 'Ghost Recon', 220, 'Sakam is a threat to the citizens of the United States, your name is Freeman and your mission as sniper is kill Sakam and his crew.', 'ghostrecon.jpg', 'ghost recon PlayStation 4 Ps 4 PS4\r\n'),
(51, 4, 2, 'Mafia III', 190, 'Mafia III features the night life of Moscow. You are in disagreement with a group of outlaws. You are on the mission to execute them all', 'mafia3.jpg', 'Mafia 3 III PlayStation 4 Ps 4 PS4\r\n'),
(52, 4, 3, 'PES 2017', 230, 'Pro Evolution Soccer 2017 is the latest soccer game product by Microsoft Corporation. It features tournament like the Champions League, English Premier League and Europa Cup, the game includes the latest squads in all soccer teams.', 'pes2017.jpg', 'PES 2017 Pro Evolution Soccer PlayStation 4 Ps 4 PS4\r\n'),
(53, 4, 7, 'Pay Day II', 180, 'You are the joker. You are on the mission to rob City Bank in the state Ohio. You have to get away without being caught.', 'paydaycrimeedition.jpg', 'pay day 2 pay day II PlayStation 4 Ps 4 PS4\r\n'),
(54, 4, 1, 'Saints Row', 170, 'In the saints row, your mission to escape being the captive of human trafficker who burn and skim people alive. You are on the mission to save your friend that have been held captive in their custody. ', 'saintsrow.jpg', 'Saints row PlayStation 4 Ps 4 PS4\r\n'),
(55, 4, 1, 'Resident Evil', 220, 'Your name is Tracy Morgan, you are to get the cure for Zombies to Washington DC without being bitten by aliens that took over the United States. Your mission is to save the word and deliver Formula D4.', 'residentevilps4.jpg', 'resident evil PlayStation 4 Ps 4 PS4\r\n'),
(56, 6, 3, 'Uncharted IV', 220, 'Rob all banks in Moscow and get away alive. ', 'uncharted.jpg', 'Uncharted 4'),
(57, 1, 1, 'FIFA 2017', 180, 'FIFA 2017 brings you the adventure of soccer at its best. The game features the recent squad in teams like Barcelona, Chelsea, Arsenal and other European teams. It is full HD and promises the best gaming experience.', 'fifa2017.jpg', 'Fifa 2017 ps vita'),
(58, 1, 1, 'Halo 5', 175, 'Halo 5 is the gaming adventure of new Jersey. You are to kill the dead walking zombies and make the street safe', 'halo5.jpg', 'halo 5 ps vita'),
(59, 1, 2, 'Tomb Raider', 165, 'You are Angelina Jolie. You are on the mission to apprehend murderers and human traffickers, these guys are guilty of selling human body parts. The levels get harder as you progress.', 'tombr1aider.jpg', 'tomb raider '),
(60, 6, 5, 'Dragon Quest Builder', 215, 'Build Cities and gain points in this fun-filled gaming experience.', 'dragonquestbuilder.jpg', 'Dragon quest builder xbox 360'),
(61, 6, 7, 'Gears of War ', 200, 'Gears of War. Fight alien and create a safe and alien free world in this Sci-Fi gaming experience.', 'gearsofwar.jpg', 'Gears of War xbox 360'),
(62, 9, 8, 'Harry Potter', 140, 'Save your colleagues from the prison of Askerban in this mysterious and adventurous gamin experience', 'harrypotter.jpg', 'Harry Potter ps vita'),
(63, 9, 7, 'Kill Zone', 135, 'Kill to stay alive in thrilling game', 'killzone.jpg', 'kill zone ps vita'),
(64, 9, 7, 'Mortal Kombat', 140, 'Mortal Kombat has never been more interesting. Showcase your fighting skills in this thrilling gaming experience and advance to higher levels', 'mortalkombat.jpg', 'mortal kombat mk ps vita');

-- --------------------------------------------------------

--
-- Table structure for table `received_payment`
--

CREATE TABLE `received_payment` (
  `id` int(100) NOT NULL,
  `uid` int(100) NOT NULL,
  `pid` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `trx_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_info`
--

CREATE TABLE `user_info` (
  `user_id` int(10) NOT NULL,
  `first_name` varchar(300) NOT NULL,
  `last_name` varchar(300) NOT NULL,
  `email` varchar(300) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobile` varchar(10) NOT NULL,
  `address1` varchar(300) NOT NULL,
  `address2` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_info`
--

INSERT INTO `user_info` (`user_id`, `first_name`, `last_name`, `email`, `password`, `mobile`, `address1`, `address2`) VALUES
(1, 'demo', 'demo', 'demo@gmail.com', '12345', '123456789', '123 Troye street', 'Sunnyside Pretoria'),
(2, 'Wale', 'Amoo', 'amoowale@gmail.com', '8639c60427976860aae7fa8291525519', '0847878179', '213 Troye Street', 'Sunnyside Pretoria'),
(3, 'Wale', 'Amoo', 'waleamoo@gmail.com', '8639c60427976860aae7fa8291525519', '0815386315', '213 Troye Street Sunnyside', 'Pretoria'),
(4, 'James', 'Westmoreland', 'abc@gmail.com', '8639c60427976860aae7fa8291525519', '0732967863', '89 Church Gardens Flat 208', 'Sunnyside Pretoria'),
(5, 'Amoo', 'Wale', 'wale242@gmail.com', '8639c60427976860aae7fa8291525519', '0815386317', 'sunnyside', 'sunnyside');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`brand_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `received_payment`
--
ALTER TABLE `received_payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_info`
--
ALTER TABLE `user_info`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `brand_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
--
-- AUTO_INCREMENT for table `received_payment`
--
ALTER TABLE `received_payment`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user_info`
--
ALTER TABLE `user_info`
  MODIFY `user_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
