-- phpMyAdmin SQL Dump
-- version 4.0.10.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2017 at 11:06 PM
-- Server version: 5.6.34
-- PHP Version: 5.6.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zihanaca_zihana`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackId` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `phone` varchar(12) NOT NULL,
  PRIMARY KEY (`feedbackId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackId`, `name`, `message`, `phone`) VALUES
(4, 'Sabina', 'Good taste, so yummy', '9920116867'),
(5, 'Umair', 'Very good website sir do you provide pastries and donoughts.please provide party orders and some discount offers too..... Hey sir just a little request your image in the slider portion is not looking gud..... Look frwrd to it', '7977774981');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE IF NOT EXISTS `gallery` (
  `imageId` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `path` varchar(500) NOT NULL,
  `description` varchar(1500) NOT NULL,
  PRIMARY KEY (`imageId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=37 ;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`imageId`, `name`, `path`, `description`) VALUES
(1, 'Sweet croisent roll with fresh cream', 'images/gallery/sweet croisent roll with fresh cream.jpg', 'Sweet croisent roll with fresh cream'),
(2, 'Brownies', 'images/gallery/brownies.jpg', 'Brownies'),
(3, 'Butter cookies', 'images/gallery/butter cookies.jpg', 'Butter cookies'),
(4, 'Apple pie', 'images/gallery/apple pie.jpg', 'Apple pie'),
(5, 'Cinamon roll with fresh cream', 'images/gallery/cinamon roll with fresh cream.jpeg', 'Cinamon roll with fresh cream'),
(6, 'Macron', 'images/gallery/macron.jpg', 'Macron'),
(7, 'Muffins', 'images/gallery/muffins.jpg', 'Muffins'),
(8, 'Egg puff', 'images/gallery/egg puff.JPG', 'Egg puff'),
(9, 'Garlic bread', 'images/gallery/garlic bread.jpg', 'Garlic Bread'),
(13, 'Cake rusk', 'images/gallery/cake rusk.jpg', 'Cake rusk'),
(18, 'Pizza Bread', 'images/gallery/pizza base.jpg', 'Pizza Bread'),
(21, 'pound cake with caramel sauce', 'images/gallery/gallery-1461845706-delish-samoa-pound-cake-recipe.jpg', 'this is a boneless cake made with egg'),
(22, 'bread pudding', 'images/gallery/tn-nov-Banana-Caramel-Bread-Pudding.jpg', 'this is a banana caramel pudding made with egg and bread'),
(23, 'mix ice cream', 'images/gallery/images-114.jpeg', 'strawberry, chocolate, butterscotch ice cream'),
(24, 'swiss roll with coco powder', 'images/gallery/Yule-Log-1.jpg', 'eggless chocolate swiss roll with coco powder'),
(25, 'souffle with strawberry crush', 'images/gallery/images-85.jpeg', 'this souffle made with butter egg and all porpoises flour'),
(26, 'vanilla chocolate eclair', 'images/gallery/hqdefault.jpg', 'made with egg and flour'),
(27, 'marble cake', 'images/gallery/images-46.jpeg', 'this is a eggless marble cake'),
(28, 'chocolate truffel', 'images/gallery/images-138.jpeg', 'chocolate truffel boll'),
(29, 'red-vel-vet cake', 'images/gallery/images-60.jpeg', 'this is a eggless red vel vet cake'),
(30, 'chicken tandoori', 'images/gallery/images-66.jpeg', 'chicken tandoori'),
(31, 'doll cake', 'images/gallery/barbie-cakes.jpg', 'eggless and rich doll cake with fonden flower'),
(32, 'caramel custer', 'images/gallery/65-large.jpg', 'made with egg and milk'),
(33, 'painapple pastry', 'images/gallery/34-large.jpg', 'painapple pastry made with egg and flour');

-- --------------------------------------------------------

--
-- Table structure for table `intrestedWork`
--

CREATE TABLE IF NOT EXISTS `intrestedWork` (
  `insId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `date` varchar(20) NOT NULL,
  `gender` varchar(2) NOT NULL,
  `workshop` int(11) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `address` varchar(500) NOT NULL,
  PRIMARY KEY (`insId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE IF NOT EXISTS `product` (
  `productId` int(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `ratePerKg` float NOT NULL,
  `minQuantity` float NOT NULL,
  `description` varchar(1500) NOT NULL,
  `path` varchar(1000) NOT NULL,
  `slider` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`productId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=70 ;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`productId`, `name`, `ratePerKg`, `minQuantity`, `description`, `path`, `slider`) VALUES
(2, 'Egg less Chocolate cake', 600, 0.5, 'This is a eggless chocolate cake made with butter, milk made and chocolate', 'images/order/EL chocolate .5 320.jpg', 1),
(3, 'egg less fruit cake', 700, 1, 'This is a eggless fruit cake made with butter, milk made and fruit', 'images/order/EL fruit cake 1kg 750.jpeg', 1),
(4, 'fat less photo pineapple cake', 650, 2, 'This is a fat less photo pineapple cake made with egg, flour, and sugar papper', 'images/order/EL photo pineapple cake 2kg 1500.jpeg', 1),
(5, 'Fat less strawberry cake', 500, 0.5, 'This is a fat less strawberry cake made with egg and flour', 'images/order/FL strawberry 1.5 750.jpg', 0),
(6, 'Foundant cake', 1200, 2.5, 'This is a foundant cake made with strawberry flavours', 'images/order/foundant 2kg 2500.jpg', 0),
(7, 'Foundant cake', 1200, 2, 'This is a foundant cake made with strawberry flavours', 'images/order/foundant cake 2kg 2400.jpeg', 0),
(8, 'Spider man pineapple cake', 640, 2.5, 'This is a spider man toy cake made with pineapple flover', 'images/order/spider man  pineapple cake 2.5 1600 .jpeg', 0),
(9, 'Doremon cake with egg', 560, 1.5, 'This is a doremon cake made with egg and black current flover', 'images/order/WE Doremon 1.5kg 880.jpg', 1),
(12, 'Black current', 560, 0.5, 'This is a black current cake made with gel and fresh cream', 'images/order/black current .5kg 280.jpg', 1),
(14, 'Black forest with egg', 560, 0.5, 'This is a black forest cake made with egg and flour', 'images/order/WE black forest .5 280.jpg', 1),
(16, 'Chocolate ganash', 600, 0.5, 'This is a chocolate ganash cake made with fresh cream and chocolates', 'images/order/chocolate ganash .5 300.jpg', 1),
(17, 'Egg less Strawberry cake', 600, 0.5, 'This is a strawberry cake made with butter, milk made, and flour', 'images/order/EL strawerry  .5 300.jpg', 0),
(18, 'Pineapple cake', 600, 2, 'This is a two tier pineapple butter Scotch cake made with egg, butter, and flour', 'images/order/pineapple 2.5kg 1500.jpg', 1),
(19, 'Pineapple cake', 560, 1, 'This is a eggless pineapple cake made with gel and fruit', 'images/order/pineapple  1kg 560.jpg', 1),
(21, 'pineapple chocolate', 600, 0.5, 'This is a pineapple chocolate came made with pineapple crush and chocolate ganash', 'images/order/pineapple chocolate .5 kg 320.jpg', 1),
(25, 'chocolate cake', 600, 1.5, 'This is a chocolate mirror glaze cake made with butter, egg, and flour', 'images/order/chocolate  2kg 1200.jpg', 1),
(26, 'Strawberry cake', 560, 0.5, 'This is a strawberry gel cake made with egg and flour', 'images/order/strawberry .5 280.jpg', 0),
(41, 'cherry cakes', 750, 1, 'This is an egg sponge cake.It has fillings of fresh cherries which makes the cakes very soft to eat and  garnished with fresh fruit.', 'images/order/Chef Prabhakar 20161223_004540.jpg', 1),
(52, 'ben ten photo ckae', 770, 2, 'this is a eggless  Ben ten photo cake with kivi flavour', 'images/order/images-39.jpeg', 0),
(53, 'pineapple cake', 560, 0.5, 'this is a pineapple cake made with egg and flour', 'images/order/20160811_195108.png', 0),
(54, 'doll cake', 660, 2, 'this is a pineapple doll cake made with egg, flour, gel, and fruit', 'images/order/IMG-20161214-WA0000.jpg', 0),
(55, 'chocolate cake', 660, 1, 'this is a eggless chocolate cake made with butter and mlik made,', 'images/order/FB_IMG_1479240674443.jpg', 0),
(56, 'chocolate strawberry  cake', 560, 0.5, 'this is a chocolate strawberry cake made with egg, butter and flour.', 'images/order/2016-07-31-721.jpg', 0),
(57, 'spiderman toy cake', 660, 2, 'this is a tiy cake made with egg, butter, flour, and black current flavour', 'images/order/IMG-20161126-WA0015.jpg', 0),
(58, 'chocolate cake', 600, 0.5, 'this is a chocolate cake made with egg, butter and flour.', 'images/order/FB_IMG_1478800819894.jpg', 0),
(59, 'black current cake', 500, 0.5, 'this is a fat less black current cake made with egg and flour', 'images/order/20160805_201600.jpg', 0),
(60, 'doremon cake', 500, 2.5, 'this is a fat less black current cake made with egg and flour', 'images/order/IMG-20161101-WA0004.jpg', 1),
(61, 'red-vel-vet cake', 650, 2, 'eggless and rich red-vel vet cake with flour and fruit juice', 'images/order/images-60.jpeg', 0),
(62, 'chocolate cake', 600, 1.5, 'this is a chocolate cake made with egg, butter and flour.', 'images/order/images-17.jpeg', 0),
(63, 'pineapple cake', 560, 0.5, 'painapple cake made with egg, flour, and chocolate', 'images/order/FB_IMG_1478800835471.jpg', 0),
(64, 'chocolate strawberry  cake', 600, 0.5, 'this is a chocolate strawberry cake made with egg, butter and flour.', 'images/order/20160823_125844.jpg', 0),
(65, 'orange fruit cake', 700, 0.5, 'this is a orange fruit cake made with egg, flour, gel, and fruit', 'images/order/IMG-20161227-WA0005.jpg', 0),
(66, 'black forest cake', 560, 1, 'black forest cake made with egg, flour, and chocolate', 'images/order/IMG-20161129-WA0006.jpg', 0),
(67, 'pineapple cake', 560, 1, 'painapple cake made with egg, flour, and chocolate', 'images/order/FB_IMG_1478595470641.jpg', 1),
(68, 'mix fruit cake', 660, 1, 'this is a fat less pineapple mix fruit cake made with egg and flour', 'images/order/images-60.jpeg', 0),
(69, 'Oreo cake', 600, 1, 'this is a oreo black forest cake made with egg, flour, and chocolate', 'images/order/tarta_oreo2.jpg', 0);

-- --------------------------------------------------------

--
-- Table structure for table `productorder`
--

CREATE TABLE IF NOT EXISTS `productorder` (
  `orderId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `userId` int(11) NOT NULL,
  `productId` int(11) NOT NULL,
  `date` varchar(20) NOT NULL,
  `name` varchar(70) NOT NULL,
  `address` varchar(400) NOT NULL,
  `quantity` int(10) NOT NULL,
  `delivered` tinyint(1) DEFAULT '0',
  `seen` tinyint(1) NOT NULL DEFAULT '0',
  `dateOfDelivery` varchar(20) NOT NULL,
  `phone` varchar(12) NOT NULL,
  PRIMARY KEY (`orderId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `productorder`
--

INSERT INTO `productorder` (`orderId`, `userId`, `productId`, `date`, `name`, `address`, `quantity`, `delivered`, `seen`, `dateOfDelivery`, `phone`) VALUES
(18, 7, 28, '2016-12-25 20:10:25', 'sabina siraj shaikh', 'R-no,59. Alfiya manzil, amar nagar. CHS. Trombay mumbai 88.', 1, 1, 1, '2016-12-27', '9920116867');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `userId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `fullName` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` varchar(14) NOT NULL,
  `password` varchar(600) NOT NULL,
  `address` varchar(400) NOT NULL,
  `admin` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`userId`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userId`, `fullName`, `email`, `phone`, `password`, `address`, `admin`) VALUES
(6, 'siraj shaikh', 'zihana13cakes@gmail.com', '9867706959', 'd52a395ed601f0abe3d42c35879800c8', 'Room no 59,alfiya manzil,amar nagar CHS. trombay mumbai 88.', 1),
(7, 'sabina siraj shaikh', 'sabinasiraj2526@gmail.com', '9920116867', '12311f1cf90032095e9a991870217cea', 'R-no,59. Alfiya manzil, amar nagar. CHS. Trombay mumbai 88.', 0),
(8, 'Sufiyan pawaskar', 'sufiyan11221122@gmail.com', '9867119489', 'cf13096f62b402cbd6615c56adf19c93', 'Amar nagar,dhobhi ghat,trombay,mumbai-88', 0),
(9, 'Nilofar shaikh', 'bebonoughty@gmail.com', '983481381', '72640f5b7d3b2131baf7d29f2f508f09', 'koperkhairane navi Mumbai 400709', 0);

-- --------------------------------------------------------

--
-- Table structure for table `Workshop`
--

CREATE TABLE IF NOT EXISTS `Workshop` (
  `workshopId` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(300) NOT NULL,
  `content1` varchar(3000) NOT NULL,
  `content2` varchar(1000) DEFAULT NULL,
  `content3` varchar(1000) DEFAULT NULL,
  `duration` int(2) NOT NULL,
  `price` int(6) NOT NULL,
  PRIMARY KEY (`workshopId`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=41 ;

--
-- Dumping data for table `Workshop`
--

INSERT INTO `Workshop` (`workshopId`, `name`, `content1`, `content2`, `content3`, `duration`, `price`) VALUES
(1, '1', 'Fat less sponge cake.', 'One icing any flavour.', 'Butter cookies.', 1, 1500),
(2, '2', 'Lemon curd tart.', 'Apple pie.', 'Chocolate walnut brownie.', 1, 1500),
(3, '3', 'Croissants roll.', 'Cinamon roll.', 'Bread roll.', 1, 1500),
(4, '4', 'Veg or meat puffs.', 'Cheesy straw.', 'Veg/meat pie(um_ali etc).', 1, 1500),
(5, '5', 'Apple cinamon muffins.', 'Masala cookies.', 'Marble cake.', 1, 1500),
(6, '6', 'Chocolate eclair.', 'Dough nut(Donut).', 'Foccacia(italian bread).', 1, 1500),
(7, '7', 'Choco lava muffin.', 'Plum cake.', 'Pineapple/mango souffle.', 1, 1500),
(8, '8', 'Pineapple upside down cake.', 'Caramell custard.', 'Bread and butter pudding.', 1, 1500),
(9, '9', 'Almond macroon.', 'Cheesy cake(any flavour).', 'Red vel-vet cake .', 1, 1500),
(10, '10', 'Egg less sponge cake.', 'Chocolate mirror glaze.', 'Tiramisu.', 1, 1500),
(11, 'Chocolate class', '14 varieties chocolate(basic & advance) with garnishing.', NULL, NULL, 1, 1500),
(12, 'Ice cream class', '8 varieties of ice cream + more recipie black current kulfi etc.', NULL, NULL, 1, 1500),
(13, 'Cake decoration with sugar craft', 'Butter icing , royal icing , whip cream icing , fondant , marzippen , gumpaste , figure , border , chocolate garnishing etc.', NULL, NULL, 3, 4500),
(14, 'Full course', '30 varieties of dish,14 varieties of chocolate.', '8 varieties of ice cream,cake decoration,different types of icing.', 'Sugar craft.', 20, 18000);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
