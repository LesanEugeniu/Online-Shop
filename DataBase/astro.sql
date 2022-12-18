-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 26, 2022 at 03:34 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `astro`
--

-- --------------------------------------------------------

--
-- Table structure for table `bg_colors`
--

CREATE TABLE `bg_colors` (
  `bg_colors_id` int NOT NULL,
  `product_id` int NOT NULL,
  `elements_color` varchar(100) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `bg_colors`
--

INSERT INTO `bg_colors` (`bg_colors_id`, `product_id`, `elements_color`) VALUES
(1, 1, 'linear-gradient(315deg, #26264d 0%, #1b1b47 74%)'),
(2, 1, 'linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)'),
(3, 1, 'linear-gradient(315deg, #ff81a0 0%, #fa6288 74%)'),
(4, 2, 'linear-gradient(315deg, #6bffd3 0%, #0cfab3 74%)'),
(5, 2, 'linear-gradient(315deg, #c5a1f7 0%, #bc8cff 74%)'),
(6, 2, 'linear-gradient(315deg, #7472fc 0%, #5c59ff 74%)'),
(7, 2, 'linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)'),
(8, 2, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(9, 2, 'linear-gradient(315deg, #ff81a0 0%, #fa6288 74%)'),
(10, 3, 'linear-gradient(315deg, #6bffd3 0%, #0cfab3 74%)'),
(11, 3, 'linear-gradient(315deg, #c5a1f7 0%, #bc8cff 74%)'),
(12, 3, 'linear-gradient(315deg, #fadf96 0%, #fcd874 74%)'),
(13, 3, 'linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)'),
(14, 3, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(15, 3, 'linear-gradient(315deg, #ff81a0 0%, #fa6288 74%)'),
(16, 4, 'llinear-gradient(315deg, #364935 0%, #425c41 74%)'),
(17, 4, 'linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)'),
(18, 4, 'linear-gradient(315deg, #fcf5d0 0%, #fff2b0 74%)'),
(19, 4, 'linear-gradient(315deg, #8b8b8b 0%, #636363 74%)'),
(20, 4, 'linear-gradient(315deg, #9ae2ff 0%, #58c1eb 74%)'),
(21, 5, 'linear-gradient(315deg, #364935 0%, #425c41 74%)'),
(22, 5, 'linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)'),
(23, 5, 'linear-gradient(315deg, #f2d0fc 0%, #eeb6ff 74%)'),
(24, 5, 'linear-gradient(315deg, #26264d 0%, #1b1b47 74%)'),
(25, 5, 'linear-gradient(315deg, #9ae2ff 0%, #58c1eb 74%)'),
(26, 5, 'linear-gradient(315deg, #ff81a0 0%, #fa6288 74%)'),
(27, 6, 'linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)'),
(28, 6, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(29, 7, 'linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)'),
(30, 7, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(31, 8, 'linear-gradient(315deg, #c5a1f7 0%, #bc8cff 74%)'),
(32, 8, 'linear-gradient(315deg, #b048e0 0%, #c748e0 74%)'),
(33, 8, 'linear-gradient(315deg, #fff5c4 0%, #f7efa6 74%)'),
(34, 8, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(35, 9, 'linear-gradient(315deg, #c5a1f7 0%, #bc8cff 74%)'),
(36, 9, 'linear-gradient(315deg, #b048e0 0%, #c748e0 74%)'),
(37, 9, 'linear-gradient(315deg, #fff5c4 0%, #f7efa6 74%)'),
(38, 9, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(39, 9, 'linear-gradient(315deg, #3e6dc9 0%, #3e5fc9 74%)'),
(40, 10, 'linear-gradient(315deg, #3eadc9 0%, #0ea2c7 74%)'),
(41, 10, 'linear-gradient(315deg, #4b4b73 0%, #434470 74%)'),
(42, 10, 'linear-gradient(315deg, #dc95fc 0%, #e2a3ff 74%)'),
(43, 11, 'linear-gradient(315deg, #3eadc9 0%, #0ea2c7 74%)'),
(44, 11, 'linear-gradient(315deg, #4b4b73 0%, #434470 74%)'),
(45, 11, 'linear-gradient(315deg, #dc95fc 0%, #e2a3ff 74%)'),
(46, 12, 'linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)'),
(47, 12, 'linear-gradient(315deg, #e8d1a7 0%, #e6c995 74%)'),
(48, 12, 'linear-gradient(315deg, #b3e8f2 0%, #9bddeb 74%)'),
(49, 12, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(50, 13, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(51, 13, 'linear-gradient(315deg, #b3e8f2 0%, #9bddeb 74%)'),
(52, 13, 'linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)'),
(53, 14, 'linear-gradient(315deg, #364935 0%, #425c41 74%)'),
(54, 14, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(55, 14, 'linear-gradient(315deg, #f5f5f5 0%, #f9defc 74%)'),
(56, 15, 'linear-gradient(315deg, #3b1e2e 0%, #421d32 74%)'),
(57, 15, 'linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)'),
(58, 15, 'linear-gradient(315deg, #364935 0%, #425c41 74%)'),
(59, 15, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(60, 16, 'linear-gradient(315deg, #e386cd 0%, #e3c5aa 74%)'),
(61, 16, 'linear-gradient(315deg, #f5f5f5 0%, #c9c7c7 74%)'),
(62, 16, 'linear-gradient(315deg, #e3c5aa 0%, #ffd7b3 74%)'),
(63, 16, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(64, 17, 'linear-gradient(315deg, #fae9cf 0%, #fae5c5 74%)'),
(65, 17, 'linear-gradient(315deg, #f5f5f5 0%, #c9c7c7 74%)'),
(66, 18, 'linear-gradient(315deg, #a5b7f0 0%, #8a96bf 74%)'),
(67, 18, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(68, 19, 'linear-gradient(315deg, #a5b7f0 0%, #8a96bf 74%)'),
(69, 19, 'linear-gradient(315deg, #ff81a0 0%, #fa6288 74%)'),
(70, 19, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(71, 20, 'linear-gradient(315deg, #302822 0%, #362b24 74%)'),
(72, 20, 'linear-gradient(315deg, #ecc7fc 0%, #e8b5ff 74%)'),
(73, 20, 'linear-gradient(315deg, #f5f5f5 0%, #c9c7c7 74%)'),
(74, 21, 'linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)'),
(75, 21, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(76, 22, 'linear-gradient(315deg, #6fadc7 0%, #69a0b8 74%)'),
(77, 22, 'linear-gradient(315deg, #eed7fa 0%, #edcffc 74%)'),
(78, 22, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(79, 23, 'linear-gradient(315deg, #364935 0%, #425c41 74%)'),
(80, 23, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(81, 24, 'linear-gradient(315deg, #364935 0%, #425c41 74%)'),
(82, 24, 'linear-gradient(315deg, #f5f5f5 0%, #d6d6d6 74%)'),
(83, 24, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)'),
(84, 25, 'linear-gradient(315deg, #2b2b2b 0%, #171717 74%)');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `image`
--

CREATE TABLE `image` (
  `image_id` int NOT NULL,
  `product_id` int NOT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `image`
--

INSERT INTO `image` (`image_id`, `product_id`, `url`) VALUES
(1, 1, 'assets/iphoneSE/iphone-se-midnight-select.png'),
(2, 1, 'assets/iphoneSE/iphone-se-starlight-select.png'),
(3, 1, 'assets/iphoneSE/iphone-se-red-select.png'),
(4, 2, 'assets/iPhone12/iphone-12-green-select.png'),
(5, 2, 'assets/iPhone12/iphone-12-purple-select.png'),
(6, 2, 'assets/iPhone12/iphone-12-blue-select.png'),
(7, 2, 'assets/iPhone12/iphone-12-white-select.png'),
(8, 2, 'assets/iPhone12/iphone-12-black-select.png'),
(9, 2, 'assets/iPhone12/iphone-12-red-select.png'),
(10, 3, 'assets/iPhone11/iphone11-green-select.png'),
(11, 3, 'assets/iPhone11/iphone11-purple-select.png'),
(12, 3, 'assets/iPhone11/iphone11-yellow-select.png'),
(13, 3, 'assets/iPhone11/iphone11-white-select.png'),
(14, 3, 'assets/iPhone11/iphone11-black-select.png'),
(15, 3, 'assets/iPhone11/iphone11-red-select.png'),
(16, 4, 'assets/iPhone13/iphone-13-pro-family.png'),
(17, 4, 'assets/iPhone13/iphone-13-pro-silver.png'),
(18, 4, 'assets/iPhone13/iphone-13-pro-max-gold.png'),
(19, 4, 'assets/iPhone13/iphone-13-pro-graphite.png'),
(20, 4, 'assets/iPhone13/iphone-13-pro-blue.png'),
(21, 5, 'assets/iphone13-2cam/iphone-13-green-select.png'),
(22, 5, 'assets/iphone13-2cam/iphone-13-starlight-select-2021.png'),
(23, 5, 'assets/iphone13-2cam/iphone-13-pink-select-2021.png'),
(24, 5, 'assets/iphone13-2cam/iphone-13-midnight-select-2021.png'),
(25, 5, 'assets/iphone13-2cam/iphone-13-blue-select-2021.png'),
(26, 5, 'assets/iphone13-2cam/iphone-13-red-select-2021.png'),
(27, 6, 'assets/iPadPro/ipad-pro-11-select-cell-silver.png'),
(28, 6, 'assets/iPadPro/ipad-pro-11-select-cell-spacegray.png'),
(29, 7, 'assets/iPad/ipad-2021-hero-silver-wifi.png'),
(30, 7, 'assets/iPad/ipad-2021-hero-space-wifi.png'),
(31, 8, 'assets/iPadMini/ipad-mini-select-wifi-purple-202109.png'),
(32, 8, 'assets/iPadMini/ipad-mini-select-wifi-pink-202109.png'),
(33, 8, 'assets/iPadMini/ipad-mini-select-wifi-starlight-202109.png'),
(34, 8, 'assets/iPadMini/ipad-mini-select-wifi-space-gray-202109.png'),
(35, 9, 'assets/iPadAir/ipad-air-select-wifi-purple.png'),
(36, 9, 'assets/iPadAir/ipad-air-select-wifi-pink.png'),
(37, 9, 'assets/iPadAir/ipad-air-select-wifi-starlight.png'),
(38, 9, 'assets/iPadAir/ipad-air-select-wifi-spacegray.png'),
(39, 9, 'assets/iPadAir/ipad-air-select-wifi-blue.png'),
(40, 10, 'assets/Xiaomi12Pro/Xiaomi-12-Pro-Blue.png'),
(41, 10, 'assets/Xiaomi12Pro/Xiaomi-12-pro-Grey.png'),
(42, 10, 'assets/Xiaomi12Pro/Xiaomi-12-Pro-Purple.png'),
(43, 11, 'assets/Xiaomi12Pro/Xiaomi-12-Pro-Blue.png'),
(44, 11, 'assets/Xiaomi12Pro/Xiaomi-12-pro-Grey.png'),
(45, 11, 'assets/Xiaomi12Pro/Xiaomi-12-Pro-Purple.png'),
(46, 12, 'assets/Xiaomi11liteNE/white.png'),
(47, 12, 'assets/Xiaomi11liteNE/orange.png'),
(48, 12, 'assets/Xiaomi11liteNE/blue.png'),
(49, 12, 'assets/Xiaomi11liteNE/black.png'),
(50, 13, 'assets/Redmi10/black.png'),
(51, 13, 'assets/Redmi10/blue.png'),
(52, 13, 'assets/Redmi10/white.png'),
(53, 14, 'assets/GalaxyFold3/green.png'),
(54, 14, 'assets/GalaxyFold3/black.png'),
(55, 14, 'assets/GalaxyFold3/pink-white.png'),
(56, 15, 'assets/GalaxyS22Ultra/purple.png'),
(57, 15, 'assets/GalaxyS22Ultra/white.png'),
(58, 15, 'assets/GalaxyS22Ultra/green.png'),
(59, 15, 'assets/GalaxyS22Ultra/black.png'),
(60, 16, 'assets/GalaxyS21/purple-orange.png'),
(61, 16, 'assets/GalaxyS21/white-gray.png'),
(62, 16, 'assets/GalaxyS21/orange.png'),
(63, 16, 'assets/GalaxyS21/black.png'),
(64, 17, 'assets/HuaweiP50Pocket/gold.png'),
(65, 17, 'assets/HuaweiP50Pocket/white.png'),
(66, 18, 'assets/HuaweiNova9/blue.png'),
(67, 18, 'assets/HuaweiNova9/black.png'),
(68, 19, 'assets/HuaweiP30Pro/blue.png'),
(69, 19, 'assets/HuaweiP30Pro/red.png'),
(70, 19, 'assets/HuaweiP30Pro/black.png'),
(71, 20, 'assets/GalaxyTabS8Ultra/graphite.png'),
(72, 20, 'assets/GalaxyTabS8Ultra/pink.png'),
(73, 20, 'assets/GalaxyTabS8Ultra/white.png'),
(74, 21, 'assets/GalaxyTabA7Lite/white.png'),
(75, 21, 'assets/GalaxyTabA7Lite/black.png'),
(76, 22, 'assets/GalaxyTabS6Lite/blue.png'),
(77, 22, 'assets/GalaxyTabS6Lite/pink.png'),
(78, 22, 'assets/GalaxyTabS6Lite/black.png'),
(79, 23, 'assets/HuaweiMatePadPro/green.png'),
(80, 23, 'assets/HuaweiMatePadPro/black.png'),
(81, 24, 'assets/HuaweiMatePad11/green.png'),
(82, 24, 'assets/HuaweiMatePad11/white.png'),
(83, 24, 'assets/HuaweiMatePad11/black.png'),
(84, 25, 'assets/HuaweiMatePadPaper/black.png'),
(91, 50, '16693201316945c6842816f63423bd1cc75471c68e.jpg'),
(92, 50, '1669320156MV5BMTU1NTU4NTk5Ml5BMl5BanBnXkFtZTgwMTA3MTcxOTE@._V1_.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `orders_id` int NOT NULL,
  `user_id` int NOT NULL,
  `product_id` int NOT NULL,
  `quantity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `user_id`, `product_id`, `quantity`) VALUES
(12, 4, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `product_id` int NOT NULL,
  `brand` varchar(100) NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `price` int NOT NULL,
  `mini_description` varchar(255) NOT NULL,
  `description` varchar(700) NOT NULL,
  `image` varchar(255) NOT NULL,
  `number_models` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`product_id`, `brand`, `model_name`, `price`, `mini_description`, `description`, `image`, `number_models`) VALUES
(1, 'iPhone', 'SE', 429, 'All in a pocket-friendly 4.7\"<br>design.', 'The iPhone SE is a series of budget smartphones, part of the iPhone family designed by Apple.', '../assets/iPhoneSEImage.png', 3),
(2, 'iPhone', '12', 599, 'Blast past fast.', 'The iPhone 12 and iPhone 12 Mini (stylized and marketed as iPhone 12 mini) are a range of smartphones designed, developed, and marketed by Apple Inc. They are the fourteenth-generation, affordable flagship iPhones, succeeding the iPhone 11.[18] They were unveiled at a virtually held Apple Special Event at Apple Park in Cupertino, California on October 13, 2020, alongside the premium flagship iPhone 12 Pro and iPhone 12 Pro Max.', '../assets/iPhone12Image.png', 6),
(3, 'iPhone', '11', 499, 'Still in trend.', 'The iPhone 11 is a smartphone designed, developed, and marketed by Apple Inc. It is the 13th generation of iPhone, succeeding the iPhone XR, and was unveiled on September 10, 2019 alongside the iPhone 11 Pro at the Steve Jobs Theater in Apple Park, Cupertino, by Apple CEO Tim Cook. Preorders began on September 13, 2019, and the phone was officially released on September 20, 2019, one day after the official public release of iOS 13.', '../assets/iPhone11Image.png', 6),
(4, 'iPhone', '13 Pro', 999, 'New design<br>premium quality.', 'The Huawei MatePad Pro is an Android-based tablet designed and marketed by Huawei as part of their Huawei Mate series. It was announced on November 25, 2019 and was released on December 12, 2019.', '../assets/iPhone13ProImage.png', 5),
(5, 'iPhone', '13', 699, 'You new<br>superpower.', 'The iPhone 13 and iPhone 13 Mini (stylized as iPhone 13 mini) are smartphones designed, developed, marketed, and sold by Apple Inc. They are the fifteenth generation of iPhones (succeeding the iPhone 12 and iPhone 12 Mini). They were unveiled at an Apple Event in Apple Park in Cupertino, California on September 14, 2021, alongside the higher priced iPhone 13 Pro and iPhone 13 Pro Max flagships. Pre-orders for the iPhone 13 and iPhone 13 Mini began on September 17, 2021. They were officially released on September 24, 2021.', '../assets/iPhone13Image.png', 6),
(6, 'iPad', 'Pro', 799, 'The ultimate<br>iPad experience.', 'iPad Pro is a premium professional sub-lineup of the iPad tablet computers by Apple Inc. It runs iPadOS, an optimized derivation from the predecessor iOS. The original iPad Pro was introduced in September 2015 which was originally based in iOS 9; the second generation, unveiled in June 2017, made uses of an upgraded A10X Fusion chip with an extended 10.5-inch screen display.', '../assets/iPadPro-close.png', 2),
(7, 'iPad', '', 329, 'Delightfully capable. Surprisingly affordable.', 'The iPad is a brand of iOS and iPadOS-based tablet computers that are developed by Apple Inc. The iPad was conceived before the related iPhone but the iPhone was developed and released first. Speculation about the development, operating system, and release of the original iPad began in 2002 prior to its introduction on January 20, 2010. The iPad range consists of the original iPad lineup and the flagship products iPad Mini, iPad Air, and iPad Pro.', '../assets/iPad.png', 2),
(8, 'iPad', 'Mini', 499, 'Now more compact.', 'The iPad Mini (branded and marketed as iPad mini) is a line of mini tablet computers designed, developed, and marketed by Apple Inc. It is a sub-series of the iPad line of tablets, with screen sizes of 7.9 inches and 8.3 inches.', '../assets/ipadMini.png', 4),
(9, 'iPad', 'Air', 599, 'Light.Bright.Full of might.', 'The iPad Air is a tablet designed, developed, and marketed by Apple Inc. It was announced on October 22, 2013, and was released on November 1, 2013. Part of the iPad line of tablet computers, the iPad Air features a thinner design than its predecessors with similarities to the contemporaneous iPad Mini 2.', '../assets/iPadAir-bkg.jpg', 5),
(10, 'Xiaomi', '12 Pro', 1050, 'A new step towards<br>the future.', 'AMOLED display with 6.73 inch WQHD + diagonal and 120 Hz refresh rate provides a clear, bright and fluid viewing experience. The camera is equipped with 3 50MP lenses, improved film technology and night mode. HDR function and 4K video recording, 60 fps, can easily capture detailed images with just 0.02 lux light. Xiaomi 12 Pro has a 4-speaker audio system with dual tweeters and woofers from Harman / Cardon.', '../assets/Xiaomi12Pro.png', 3),
(11, 'Xiaomi', '12', 870, 'Get the 2022 trend.', '6.28-inch AMOLED screen with Dolby Vision technology. Brightness adjusts automatically to enhance eye comfort when you switch from a darker environment to a brighter one or vice versa. Harman / Kardon speakers with Dolby Atmos sound technology and symmetrical structure create a more captivating, fluid sound experience and high quality.Xiaomi 12 adopts a completely new focusing technology, with algorithms for learning and tracking the subject in the picture.', '../assets/Xiaomi12.png', 3),
(12, 'Xiaomi', '11 lite NE', 370, 'Enjoy performance<br>at the best price.', 'Xiaomi 11 Lite 5G NE mobile was launched on 15th September 2021. The phone comes with a 90 Hz refresh rate 6.55-inch touchscreen display offering a resolution of 1080x2400 pixels and an aspect ratio of 20:9. Xiaomi 11 Lite 5G NE is powered by an octa-core Qualcomm Snapdragon 778G processor. It comes with 6GB of RAM. The Xiaomi 11 Lite 5G NE runs Android 11 and is powered by a 4250mAh battery. The Xiaomi 11 Lite 5G NE supports proprietary fast charging.', '../assets/Xiaomi11LiteNE.png', 4),
(13, 'Redmi', '10', 200, 'Simple and futuristic design.', 'One of the most popular mid-range series globally, the Redmi Note, recently got an upgrade. We\'ve already reviewed the Redmi Note 10 Pro and found it to be an excellent handset, so it\'s now time to turn our heads to the vanilla Note 10. We are talking about the non-5G version here, though.', '../assets/Redmi10.png', 3),
(14, 'Galaxy', 'Fold 3', 2200, 'The monster that destroys all<br>the charts.', 'We could have sworn that Samsung\'s original plunge into foldable displays was not that long ago. It definitely feels that way. Yet, here we are with the latest and greatest Z Fold3 - a third-generation product, or perhaps even fourth, depending on how you count the initial failed Fold launch back in the day. Foldables are maturing and already a staple, of sorts, within Samsung\'s lineup. In fact, the Korean giant has now been consistently delivering Fold devices on a yearly schedule, and this year, it came at the expense of the new Galaxy Note lineup. Oh, how the tables have turned.', '../assets/GalaxyFold.png', 3),
(15, 'Galaxy', 'S22 Ultra', 1400, 'Touch everest, and feel the<br>performance.', 'The Note that isn\'t a Note, yet it may very well end up being the last Note - Samsung\'s Galaxy S22 Ultra has some big shoes to fill. Attempting to appeal to both productivity-focused stylus lovers and photography enthusiasts, the latest Ultra will either be the ultimate phone, period, or fall short for either group in some way. We\'re here to find out which one is it.', '../assets/GalaxyS22Ultra.png', 4),
(16, 'Galaxy', 'S21 G991', 1000, '8K cinematic resolution for<br>eternal moments.', 'For the second year in a row, Samsung unveils three phones as part of the spring flagship roster (even though it\'s very much winter this time around, at least where we are). And, much like last time, there\'s a very clear divide between the ultimate uncompromising Ultra and the two more restrained and down-to-earth \'regular\' S phones. If anything, the gap has even widened.', '../assets/GalaxyS21.png', 4),
(17, 'Huawei', 'P50 Pocket', 1550, 'Premium Foldable Design.<br>Ultra Spectrum Camera.', 'Easier on your pocket in more ways than one, the Huawei P50 Pocket is the company\'s latest foldable, and this one is available globally for a change. In contrast to last year\'s Mate X2, the Pocket will be sold outside of China, and its EUR1300 starting price can almost pass for reasonable, plus it\'s the other type of form factor that you might also call compact.', '../assets/HuaweiP50.png', 2),
(18, 'Huawei', 'Nova 9', 650, 'Have fun with your friends<br>and create great photos.', 'The Huawei nova series is intended for the younger generation with flashy looks and relatively low prices. The nova 9 family isn\'t far from the original formula. We got the vanilla nova 9 for this review, but the Pro model seems to be only slightly different - it has a bigger display, a smaller battery with faster charging and a secondary selfie camera. Sadly, only the standard nova 9 is making its way to the international market leaving the Pro to be a China-exclusive.', '../assets/HuaweiNova9.png', 2),
(19, 'Huawei', 'P30 Pro', 800, 'Zoom in to explore the<br>heavenly mystery at night.', 'The Huawei nova series is intended for the younger generation with flashy looks and relatively low prices. The nova 9 family isn\'t far from the original formula. We got the vanilla nova 9 for this review, but the Pro model seems to be only slightly different - it has a bigger display, a smaller battery with faster charging and a secondary selfie camera. Sadly, only the standard nova 9 is making its way to the international market leaving the Pro to be a China-exclusive.', '../assets/HuaweiP30.png', 3),
(20, 'Galaxy', 'Tab S8 Ultra', 1600, 'For a great experience.', 'The Samsung Galaxy Tab S8 is a series of Android-based tablets designed, developed and marketed by Samsung Electronics. Unveiled at Samsung\'s Galaxy Unpacked event on 9 February 2022, they serve as the successor to the Galaxy Tab S7 series.', '../assets/GlaxyTabS8Ultra.png', 3),
(21, 'Galaxy', 'Tab A7 Lite', 250, 'Best for social networking,<br>video calling.', 'Galaxy Tab A7 Lite carries more power than you\'d expect in a device this sleek. The 5,100 mAh* battery gives you the freedom to forget about the charger for long periods of time when you have somewhere to go or lots to watch. The Galaxy Tab A7 Lite camera is ready to capture and share your moment. Whether you\'re looking to capture stunning portraits or breathtaking scenery, this device has you covered. With 8MP main camera your memories stay vivid, bright, and clear.', '../assets/GalaxyTabA7Lite.png', 2),
(22, 'Galaxy', 'Tab S6 Lite', 400, 'Great for graphics.', 'Galaxy Tab A7 Lite carries more power than you\'d expect in a device this sleek. The 5,100 mAh* battery gives you the freedom to forget about the charger for long periods of time when you have somewhere to go or lots to watch. The Galaxy Tab A7 Lite camera is ready to capture and share your moment. Whether you\'re looking to capture stunning portraits or breathtaking scenery, this device has you covered. With 8MP main camera your memories stay vivid, bright, and clear.', '../assets/GalaxyTabS6Lite.png', 3),
(23, 'Huawei', 'MatePad Pro', 600, 'Unleash creativity and upgrade your<br>productivity on an remarkable<br>expansive screen.', 'You are going to hear that it\'s a new dawn for Huawei thanks to the first public release of HarmonyOS. And the new MatePad tablets are supposed to usher Huawei\'s products into a Harmony era and drop Android for good. But underneath all this PR talk everything boils down to one thing - can Harmony-operated devices rival Android\'s and Apple\'s? We have the MediaPad Pro 12.6 for a review today, and that\'s what we are going to try and find out.', '../assets/HuaweiMatePadPro.png', 2),
(24, 'Huawei', 'MatePad 11', 470, 'Enjoy fluid work and play with 120<br>Hz HUAWEI FullView Display,<br>Huawei Share and more.', 'You are going to hear that it\'s a new dawn for Huawei thanks to the first public release of HarmonyOS. And the new MatePad tablets are supposed to usher Huawei\'s products into a Harmony era and drop Android for good. But underneath all this PR talk everything boils down to one thing - can Harmony-operated devices rival Android\'s and Apple\'s? We have the MediaPad Pro 12.6 for a review today, and that\'s what we are going to try and find out.', '../assets/HuaweiMatePad11.png', 3),
(25, 'Huawei', 'MatePad Paper', 800, 'Comes with HUAWEI M-Pencil<br>(2nd generation).', 'The Huawei MatePad Pro is an Android-based tablet designed and marketed by Huawei as part of their Huawei Mate series. It was announced on November 25, 2019 and was released on December 12, 2019.', '../assets/HuaweiMatePadPaper.png', 1),
(50, 'Huawei', 'bmw', 200, 'wqrqweqweqwq', 'wqer asdsa sdgfdsgdfs jweuewhuihftewu uewhfuewhf uwefuiwef uiweifj weif iwe iwej fiweo jiowe oif weif weifj iwef iweo fewi ewif eiwfjiwoe iewof weifjewifjwe ioewrfwe', '16693201316945c6842816f63423bd1cc75471c68e.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `specification`
--

CREATE TABLE `specification` (
  `specification_id` int NOT NULL,
  `product_id` int NOT NULL,
  `display` varchar(20) NOT NULL,
  `gpu` varchar(20) NOT NULL,
  `batery` varchar(20) NOT NULL,
  `unlock_type` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `specification`
--

INSERT INTO `specification` (`specification_id`, `product_id`, `display`, `gpu`, `batery`, `unlock_type`) VALUES
(1, 1, '4.7 inch Display', '4 core GPU', '15 hours Batery', 'Touch ID Unlock'),
(2, 2, '6.1 inch Display', '4 core GPU', '17 hours Batery', 'Face ID Unlock'),
(3, 3, '6.1 inch Display', '4 core GPU', '17 hours Batery', 'Face ID Unlock'),
(4, 4, '6.7 inch Display', '5 core CPU', '28 hours Batery', 'Face ID Unlock'),
(5, 5, '6.1 inch Display', '4 core CPU', '19 hours Batery', 'Face ID Unlock'),
(6, 6, '12.9 inch Display', '12 MP Camera', 'M1 chip Proesor', '5 G cellular'),
(7, 7, '10.2 inch Display', '12 MP Camera', 'A13 Bionic Proesor', '4G LTE cellular'),
(8, 8, '8.3 inch Display', '12 MP Camera', 'A15 Bionic Proesor', '5G LTE cellular'),
(9, 9, '10.9 inch Display', '12 MP Camera', 'M1 chip Proesor', '5 G cellular'),
(10, 10, '6.73 inch Display', '50 MP Camera', '8 GB RAM', 'Adreno 730 GPU'),
(11, 11, '6.28 inch Display', '50 MP Camera', '8 GB RAM', 'Adreno 730 GPU'),
(12, 12, '6.55 inch Display', '64 MP Camera', '8 GB RAM', 'Adreno 642L GPU'),
(13, 13, '6.43 inch Display', '48 MP Camera', '6 GB RAM', 'Adreno 612 GPU'),
(14, 14, '7.6 inch Display', '120 MP Camera', '12 GB RAM', 'Adreno 660 GPU'),
(15, 15, '6.8 inch Display', '108 MP Camera', '12 GB RAM', 'Xclipse 920 GPU'),
(16, 16, '6.28 inch Display', '64 MP Camera', '8 GB RAM', 'Mali-G78 MP14 GPU'),
(17, 17, '6.9 inch Display', '40 MP Camera', '8 GB RAM', 'Adreno 660 GPU'),
(18, 18, '6.57 inch Display', '50 MP Camera', '8 GB RAM', 'Adreno 642L GPU'),
(19, 19, '6.47 inch Display', '40 MP Camera', '8 GB RAM', 'Mali-G76 MP10 GPU'),
(20, 20, '14.7 inch Display', '13 MP Camera', '16 GB RAM', 'Adreno 730 GPU'),
(21, 21, '8.7 inch Display', '8 MP Camera', '4 GB RAM', 'PowerVR GE8320 GPU'),
(22, 22, '10.4 inch Display', '8 MP Camera', '4 GB RAM', 'Mali-G72 MP3 GPU'),
(23, 23, '12.6 inch Display', '13 MP Camera', '12 GB RAM', 'Mali-G78 MP24 GPU'),
(24, 24, '10.95 inch Display', '13 MP Camera', '12 GB RAM', 'Adreno 650 GPU'),
(25, 25, '10.3 inch Display', 'HarmonyOS 2 OS', '64 GB ROM', 'Kirin 820E CPU'),
(44, 50, '12 12 12', 'rsea sdf sdf', ' wer  we we', ' tr er yt');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `unique_id` int NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(250) NOT NULL,
  `image` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `otp` int NOT NULL,
  `verification_status` varchar(50) NOT NULL,
  `Role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `unique_id`, `firstName`, `lastName`, `email`, `phone`, `address`, `image`, `password`, `otp`, `verification_status`, `Role`) VALUES
(4, 1393349365, 'Eugeniu', 'Leșan', 'eugeniu1337@gmail.com', '37360680574', 'Streadela macilor nr.5', '1668446259CTdOe0Oa09o.jpg', '81dc9bdb52d04dc20036dbd8313ed055', 0, 'Verified', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bg_colors`
--
ALTER TABLE `bg_colors`
  ADD PRIMARY KEY (`bg_colors_id`),
  ADD KEY `Produs-bg_colors` (`product_id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `Cart-users` (`user_id`),
  ADD KEY `Cart-product` (`product_id`);

--
-- Indexes for table `image`
--
ALTER TABLE `image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `Produs-image` (`product_id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`orders_id`),
  ADD KEY `Orders-users` (`user_id`),
  ADD KEY `Orders-product` (`product_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `specification`
--
ALTER TABLE `specification`
  ADD PRIMARY KEY (`specification_id`),
  ADD KEY `Produs-specifications` (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bg_colors`
--
ALTER TABLE `bg_colors`
  MODIFY `bg_colors_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `image`
--
ALTER TABLE `image`
  MODIFY `image_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=93;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `orders_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `specification`
--
ALTER TABLE `specification`
  MODIFY `specification_id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bg_colors`
--
ALTER TABLE `bg_colors`
  ADD CONSTRAINT `Produs-bg_colors` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `Cart-product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Cart-users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `image`
--
ALTER TABLE `image`
  ADD CONSTRAINT `Produs-image` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `Orders-product` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `Orders-users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `specification`
--
ALTER TABLE `specification`
  ADD CONSTRAINT `Produs-specifications` FOREIGN KEY (`product_id`) REFERENCES `product` (`product_id`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
