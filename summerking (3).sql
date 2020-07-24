-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2020 at 05:21 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `summerking`
--

-- --------------------------------------------------------

--
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `article_id` int(11) NOT NULL,
  `article_name` varchar(255) NOT NULL,
  `article_body` text NOT NULL,
  `article_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`article_id`, `article_name`, `article_body`, `article_image`) VALUES
(1, 'Summerking coolers making life amazing', '', './images/sk-products/catalog/40_Page_34.jpg'),
(2, 'Summering cooler making lifes easy', '', './images/sk-products/catalog/40_Page_34.jpg'),
(4, 'Summerking making lifes fun', '', './images/sk-products/catalog/40_Page_14.jpg'),
(12, 'Summerking recognized as leader', '', './images/sk-products/catalog/40_Page_14.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `dealerlogin`
--

CREATE TABLE `dealerlogin` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dealerlogin`
--

INSERT INTO `dealerlogin` (`user_id`, `first_name`, `last_name`, `usertype`, `username`, `email`, `password`, `create_datetime`, `mobile_number`, `address`, `city`, `state`) VALUES
(2, 'Aman', 'Rastogi', 'Dealer', 'aman', 'amanr@gmail.com', 'aman', '0000-00-00 00:00:00', '9811554026', 'xyz', 'Delhi', 'Delhi'),
(3, 'Kapil', 'xyz', 'Dealer', 'kapil99', 'kapil1234@gmail.com', 'kapil', '0000-00-00 00:00:00', '9855447825', 'abcd', 'delhi', 'delhi'),
(4, 'xyz', 'xyz', 'Dealer', 'xyz', 'xyz@gmail.com', 'xyz', '0000-00-00 00:00:00', '9811554026', 'abcd', 'abcd', 'delhi');

-- --------------------------------------------------------

--
-- Table structure for table `product_registration_id`
--

CREATE TABLE `product_registration_id` (
  `product_registration_id` int(255) NOT NULL,
  `model_number` int(255) NOT NULL,
  `serial_number` int(255) NOT NULL,
  `purchase_date` date NOT NULL,
  `invoice_image` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_registration_id`
--

INSERT INTO `product_registration_id` (`product_registration_id`, `model_number`, `serial_number`, `purchase_date`, `invoice_image`, `username`) VALUES
(13, 0, 121221, '2020-05-21', '', 'kapil123'),
(42, 0, 12, '2020-06-02', 'Cooler-Pump-333.jpg', 'kapil'),
(50, 0, 789, '2020-06-11', 'download.png', 'kapil'),
(51, 0, 45632, '2020-06-13', 'main-qimg-73a8a85ee9908aaae8569847aa8ca048.jpg', 'kapil'),
(63, 0, 7895, '2020-06-13', 'vikas-harijan-9MrkEGxS-8c-unsplash.jpg', 'aman'),
(64, 0, 8965, '2020-06-12', 'download.png', 'aman'),
(65, 0, 78995, '2020-06-03', '06-17-2020_11:52:32', 'aman'),
(66, 0, 8599, '2020-06-05', 'Cooler-Pump-333.jpg', 'aman'),
(67, 0, 7458, '2020-06-11', 'jordan-whitfield-sm3Ub_IJKQg-unsplash.jpg', 'aman'),
(68, 0, 0, '2020-06-05', 'alysha-rosly-nxLwYpKXS1g-unsplash.jpg', 'aman'),
(69, 0, 85996, '2020-06-13', 'artem-bryzgalov-OGfXZo-Jyyg-unsplash.jpg', 'aman'),
(70, 0, 88547, '2020-06-06', 'download.png', 'aman');

-- --------------------------------------------------------

--
-- Table structure for table `skproducts`
--

CREATE TABLE `skproducts` (
  `id` int(11) NOT NULL,
  `model_number` int(11) NOT NULL,
  `product_type` varchar(255) NOT NULL,
  `price` float NOT NULL,
  `model_name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `speed` varchar(255) NOT NULL,
  `power_output` varchar(255) NOT NULL,
  `energy` varchar(255) NOT NULL,
  `description` varchar(600) NOT NULL,
  `sweep` varchar(255) DEFAULT NULL,
  `air_delivery` varchar(255) DEFAULT NULL,
  `tank_size` varchar(255) DEFAULT NULL,
  `ad` varchar(255) DEFAULT NULL,
  `lenght` int(11) NOT NULL,
  `width` int(11) NOT NULL,
  `height` int(11) NOT NULL,
  `dimension` varchar(255) DEFAULT NULL,
  `gross_weight` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `skproducts`
--

INSERT INTO `skproducts` (`id`, `model_number`, `product_type`, `price`, `model_name`, `image`, `speed`, `power_output`, `energy`, `description`, `sweep`, `air_delivery`, `tank_size`, `ad`, `lenght`, `width`, `height`, `dimension`, `gross_weight`) VALUES
(1, 0, 'Ceiling Fan', 1600, 'ECO POWER', 'eco_power.png', '390', '0', '- Copper CNC Winding.<br/>\r\n- High speed fan.<br/>\r\n- Special designed turning machines.<br/>\r\n- Double ball bearing.', 'It is a copper winding fan and it has a power output of 60 watt and it delivers high quality air on low voltage.', '900/1200 MM', '200 (CMM)', NULL, NULL, 0, 0, 0, NULL, NULL),
(3, 0, 'Ceiling Fan', 1700, 'FLASH', 'flash.png', '390', '79', '- Copper CNC Winding.<br/>\r\n- High Speed Fan.<br/>\r\n- Special Designed Turning Machines.<br/>\r\n- Superior Air Delivery.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '900/1200 MM', '210 (CMM)', NULL, NULL, 0, 0, 0, NULL, NULL),
(5, 0, 'Ceiling Fan', 1800, 'RAFTAAR', 'raftaar.png', '360', '75', '- Copper CNC Winding.<br/>\r\n- Evergreen Motor Design.<br/>\r\n- Aluminium Motor Cover.<br/>\r\n- Special Designed Turning Machines.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '900/1200 MM', '220 (CMM)', NULL, NULL, 0, 0, 0, NULL, NULL),
(9, 0, 'Ceiling Fan', 1800, 'EVA', 'eva.png', '360', '75', '- Copper CNC Winding.<br/>\r\n- Unique Motor Design.<br/>\r\n- Aluminium Motor Cover With Aluminium Blades.<br/>\r\n- Special Designed Turning Machines.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '900/1200 MM', '225 (CMM)', NULL, NULL, 0, 0, 0, NULL, NULL),
(10, 0, 'Ceiling Fan', 1800, 'FLASH PLUS', 'flash_plus.png', '390', '75', '- Copper CNC Winding.<br/>\r\n- HighSpeed Fan.<br/>\r\n- Decorative Trim/ Ring On Blade And Motor.<br/>\r\n- Superior Air Delivery.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '900/1200 MM', '210 (CMM)', NULL, NULL, 0, 0, 0, NULL, NULL),
(11, 0, 'Ceiling Fan', 1800, 'PULSAR', 'pulsar.png', '360', '75', '- Copper CNC Winding.<br/>\r\n- Unique Motor Design.<br/>\r\n- Decorative Trim/ Ring On Blade And Motor.<br/>\r\n- Superior Air Delivery.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '900/1200 MM', '220 (CMM)', NULL, NULL, 0, 0, 0, NULL, NULL),
(12, 0, 'Ceiling Fan', 1800, '600MM EVA DELUXE', '600mm_eva_deluxe.png', '750', '75', '- Copper CNC Winding.<br/>\r\n- Unique Motor Design.<br/>\r\n- Decorative Trim/ Ring On Blade And Motor.<br/>\r\n- 4 Blades Design For High Air Delivery.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '600MM', '165 (CMM)', NULL, NULL, 0, 0, 0, NULL, NULL),
(13, 0, 'Ceiling Fan', 1800, 'EVA 600MM ', 'eva_600mm.png', '750', '75', '- Copper CNC Winding.<br/>\r\n- Evergreen  Motor Design.<br/>\r\n- High Speed Fan.<br/>\r\n- 4 Blades Design For High Air Delivery.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '600MM', '165 (CMM)', NULL, NULL, 0, 0, 0, NULL, NULL),
(15, 0, 'Ceiling Fan', 1800, 'EGO ', 'ego.png', '360', '75', '- Copper CNC Winding.<br/>\r\n- Fully Conveyorized Paint Shop And Assembly Line.<br/>\r\n- Metallic Paint Finishes.<br/>\r\n- Three Coat Metallic Paint System To Enrich Glass.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '900/1200/1400 MM ', '236 (CMM)', NULL, NULL, 0, 0, 0, NULL, NULL),
(16, 0, 'Ceiling Fan', 1800, 'TULIP', 'tulip.png', '360', '75', '- Copper CNC Winding.<br/>\r\n- Modern Paint To Suit Your Interiors.<br/>\r\n- Decorative Part In PU Finishes.<br/>\r\n- Three Coat Metallic Paint System To Enrich Glass.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '900/1200 MM ', '235 (CMM)', NULL, NULL, 0, 0, 0, NULL, NULL),
(17, 0, 'Ceiling Fan', 1800, 'MARINO', 'marino.png', '350', '75', '- Copper CNC Winding.<br/>\r\n- Modern Paint To Suit Your Interiors.<br/>\r\n- Decorative Part In PU Finishes.<br/>\r\n- False Cover Used To Enhance Beauty.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '1200 MM ', '240 (CMM)', NULL, NULL, 0, 0, 0, NULL, NULL),
(18, 0, 'Ceiling Fan', 1800, 'IRISH', 'irish.png', '350', '75', '- Copper CNC Winding.<br/>\r\n- Modern Paint To Suit Your Interiors.<br/>\r\n- Decorative Part In PU Finishes.<br/>\r\n- False Cover Used To Enhance Beauty.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '1200 MM ', '240 (CMM)', NULL, NULL, 0, 0, 0, NULL, NULL),
(20, 0, 'Ceiling Fan', 1800, 'ORCHID', 'orchid.png', '350', '75', '- Copper CNC Winding.<br/>\r\n- Modern Paint To Suit Your Interiors.<br/>\r\n- Decorative Part In PU Finishes.<br/>\r\n- Three Coat Metallic Paint System Enrich Glass.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '1200 MM ', '240 (CMM)', NULL, NULL, 0, 0, 0, NULL, NULL),
(21, 0, 'Multipurpose Fan', 1800, 'ALL PURPOSE', 'all_purpose.png', '2200', '75', '- Copper Winding.<br/>\r\n- High Speed Fan.<br/>\r\n- 3 Speed Control.<br/>\r\n- Can Be Used In Many Ways.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '300 (12 INCH)', 'null', NULL, NULL, 0, 0, 0, NULL, NULL),
(22, 0, 'Multipurpose Fan', 1800, 'STORMY', 'stormy.png', '2400', '65', '- Copper Winding.<br/>\r\n- High Speed Fan.<br/>\r\n- Can Be Used In Many Ways.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '225 (9 INCH)', 'null', NULL, NULL, 0, 0, 0, NULL, NULL),
(23, 0, 'Multipurpose Fan', 1800, 'INNOX 12/16 WFHS', 'innox_WFHS.png', '2400', '80', '- Copper Winding.<br/>\r\n- High Speed Delivery And Velocity.<br/>\r\n- 90 Oscillations And Tilt Adjustment.<br/>\r\n- Smooth And Jerk Free With Double Pull Cord.<br/>\r\n- Virgin Plastic For High Gloss Body And Better Looks. ', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '300(12\")/400(16\")', 'null', NULL, NULL, 0, 0, 0, NULL, NULL),
(24, 0, 'Multipurpose Fan', 1800, 'INNOX 6/8/10 VFHS', 'innox_VFHS.png', '1400/1350/1300 ', '35/40/45', '- Silent Operation.<br/>\r\n- 75 Degree Opening.<br/>\r\n- Ideal For Mounting On Glass And Wood.<br/>\r\n- Aero Dynamic Air Suction.<br/>\r\n- Power Saving.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '150/200/250(6\"/8\"/10)', 'null', NULL, NULL, 0, 0, 0, NULL, NULL),
(25, 0, 'Multipurpose Fan', 1800, 'KIT PEDESTAL', 'kit_pedestal.png', '1400', '150', '- Copper Winding.<br/>\r\n- Height Adjustable Mechanism.<br/>\r\n- 3 Speed Control.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '500(20\")', 'null', NULL, NULL, 0, 0, 0, NULL, NULL),
(26, 0, 'Multipurpose Fan', 1800, 'INNOX 16PFHS', 'innox_16_PFHS.png', '1400', '120', '- Copper Winding.<br/>\r\n- Height Adjustable As Per Need.<br/>\r\n- Elegant Slim And Asthetics Looks.<br/>\r\n- 90 Oscillations And Tilt Adjustment.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '400(16\")', 'null', NULL, NULL, 0, 0, 0, NULL, NULL),
(27, 0, 'Multipurpose Fan', 1800, 'RUNNER/RUNNER SWING', 'runner_swing.png', '2200', '120', '- Copper Winding.<br/>\r\n- High Speed.<br/>\r\n- 3 Speed Control.<br/>\r\n- Oscillations Swing Model.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '400(16\")', 'null', NULL, NULL, 0, 0, 0, NULL, NULL),
(28, 0, 'Multipurpose Fan', 1800, 'FRESH AIR FAN', 'fresh_air_fan.png', '1400', '40/45', '- Copper Winding.<br/>\r\n- Shaded Pole Motor.<br/>\r\n- Wire Mesh Protection.\r\n', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '225/300(9\"/12\")', 'null', NULL, NULL, 0, 0, 0, NULL, NULL),
(29, 0, 'Multipurpose Fan', 1800, 'TURBO EXHAUST', 'turbo_exhaust.png', '1350/1360/750', 'NULL', '- Copper Winding.<br/>\r\n- Totally Enclosed Aluminium Shell.<br/>\r\n- Heavy Duty Motor.<br/>\r\n- High Air Delivery.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '375/450/600(15\"/18\"/24\")', 'null', NULL, NULL, 0, 0, 0, NULL, NULL),
(30, 0, 'Multipurpose Fan', 1800, 'TRANS AIR', 'trans_air.png', '1400', '50/90', '- Copper Winding.<br/>\r\n- exhaust Type Blade.<br/>\r\n- Double Ball Bearing.<br/>\r\n- Superior Air Delivery.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '225/300(9\"/12\")', 'null', NULL, NULL, 0, 0, 0, NULL, NULL),
(31, 0, 'Multipurpose Fan', 1800, 'ATLANTA', 'atlanta.png', '1350', '300', '- Copper Winding.<br/>\r\n- Totally Enclosed Aluminium Shell.<br/>\r\n- Premium Heavy Duty Motor.<br/>\r\n- Superior Air Delivery.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '450(18\")', 'null', NULL, NULL, 0, 0, 0, NULL, NULL),
(32, 0, 'Multipurpose Fan', 1800, 'TURBO FAN', 'turbo_fan.png', '2400', '70', '- Copper Winding.<br/>\r\n- High Speed Motor .<br/>\r\n- Exhaust Type Blade.<br/>\r\n- Superior Air Delivery.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '225(9\")', 'null', NULL, NULL, 0, 0, 0, NULL, NULL),
(33, 0, 'Plastic Air Coolers', 1800, 'TEENY', 'teeny.png', '2300', '105', '- Copper Winding.<br/>\r\n- Inverter Compatible.<br/>\r\n- Honeycomb Technology.<br/>\r\n- Compact And Modern Look.<br/>\r\n- Ideal For Kid Room(Office Space/Personal Space).', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '300 MM', '20 ft', '18L', '1900', 0, 0, 0, '400*340*620', '7.25kg'),
(34, 0, 'Plastic Air Coolers', 1800, 'RIO 30', 'rio_30.png', '2300', '105', '- Copper Winding.<br/>\r\n- Inverter Compatible.<br/>\r\n- Honeycomb Technology.<br/>\r\n- Compact And Modern Look.<br/>\r\n- With Castor Wheels.<br/>\r\n- Ideal For Kid Room(Office Space/Personal Space).', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '300 MM', '20 ft', '30L', '1900', 0, 0, 0, '535*550*885', '12.10kg'),
(35, 0, 'water heater', 1800, 'SONIC', 'sonic.png', 'null', 'null', '- Glass Lined Tank.<br/>\r\n- High Pressure Upto 8 bar.<br/>\r\n- Whirl Flow Mechanism.<br/>\r\n- Adjustable Temp Knob.<br/>\r\n- Single Weld Line In Tank.', '', '', '', '', '', 0, 0, 0, '', ''),
(36, 0, 'water heater', 1800, 'MIRAGE', 'mirage.png', 'null', 'null', '- Glass Lined Tank.<br/>\r\n- High Pressure Upto 8 bar.<br/>\r\n- Whirl Flow Mechanism.<br/>\r\n- Adjustable Temp Knob.<br/>\r\n- Single Weld Line In Tank.', '', '', '', '', '', 0, 0, 0, '', ''),
(37, 0, 'Room Heaters', 1800, 'INFERNO', 'inferno.png', 'null', 'null', '- Ideal Angle Oscillation Function.<br/>\r\n- Long Halogen Tube For Effective Heating.<br/>\r\n- Oval Shape Base For Better Stability.<br/>\r\n- Three Tube For Varied Heating Needs.<br/>\r\n- And Uninterrupted Heating.<br/>\r\n- Three Heat Setting 400W/800W/1200W.', '', '', '', '', '', 0, 0, 0, '', ''),
(38, 0, 'Room Heaters', 1800, 'CALDA', 'calda.png', 'null', 'null', '- Blower Forced Hot Air Circulation.<br/>\r\n- Dual Mode, Heater In Winter Fan In Summer.<br/>\r\n- Automatic Thermal Cut Out.<br/>\r\n- Variable Heating Positions For Different Heating Needs.<br/>\r\n- Two Heat Settings 1000/2000W.<br/>\r\n- Approved By BIS.\r\n', '', '', '', '', '', 0, 0, 0, '', ''),
(39, 0, 'Home Appliances', 1800, 'SENORA', 'senora.png', 'null', '1000W', '- Adjustable Thermostatic Control.<br/>\r\n- Silk Braided Copper Swivel Cord.<br/>\r\n- Indicator Light.<br/>\r\n- Non Stick Sole Plate.', '', '', '', '', '', 0, 0, 0, '', ''),
(40, 0, 'Home Appliances', 1800, 'NITRO', 'nitro.png', 'null', '1000W', '- Unique Temperature Control With Label.<br/>\r\n- Silk Braided Copper Swivel Cord.<br/>\r\n- Indicator Light.<br/>\r\n- Chrome Plated High Efficiency Heavy Weight Base.', '', '', '', '', '', 0, 0, 0, '', ''),
(41, 0, 'Plastic Air Coolers', 1800, 'ICY', 'icy.png', '2300', '105', '- Inverter Compatible.<br/>\r\n- Honeycomb Technology.<br/>\r\n- Compact And Modern Look.<br/>\r\n- With Castor Wheels.<br/>\r\n- Ideal For Indoor, Out Door, Personal Space.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '300 MM', '25 ft', '40L', '1900', 0, 0, 0, '500*455*985', '11.30kg'),
(42, 0, 'Plastic Air Coolers', 1800, 'LAGAN', 'lagan.png', '1400', '175', '- Inverter Compatible.<br/>\r\n- Designer Front.<br/>\r\n- Three Speed Control.<br/>\r\n- Water Level Indicator.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '400 MM', '30 ft', '50L', '3200', 0, 0, 0, '685*540*910', '16.25kg'),
(43, 0, 'Plastic Air Coolers', 1800, 'WINNER', 'winner.png', '1100', '175', '- Inverter Compatible.<br/>\r\n- Powerful Air Delivery.<br/>\r\n- Honeycomb Technology.<br/>\r\n- Ideal For Indoor, Outdoor, Showroom Spaces.<br/>\r\n- Water Level Indicator.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '400 MM', '35ft', '65L', '3500', 0, 0, 0, '620*540*1040', '18.30kg'),
(44, 0, 'Plastic Air Coolers', 1800, 'SNOWY', 'snowy.png', '1375', '185', '- Inverter Compatible.<br/>\r\n- Powerful Throw for Large Room.<br/>\r\n- 3 Speed Control. <br/>\r\n- Water Level Indicator.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '450 MM', '35ft', '60L', '3500', 0, 0, 0, '650*540*1070', '16.75kb'),
(45, 0, 'Plastic Air Coolers', 1800, 'PRIMO', 'primo.png', '1375', '185', '- Inverter Compatible.<br/>\r\n- Powerful Throw for Large Room.<br/>\r\n- Honeycomb Technology. <br/>\r\n- Overflow Facility.<br/>\r\n- Ideal For Indoor, Outdoor, Showroom Spaces.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '450 MM', '35ft', '60L', '3500', 0, 0, 0, '715*515*1250', '19.20kg'),
(46, 0, 'Plastic Air Coolers', 1800, 'PRIMO 2.0', 'primo_2.0.png', '1375', '185', '- Inverter Compatible.<br/>\r\n- Powerful Throw for Large Room.<br/>\r\n- Honeycomb Technology. <br/>\r\n- Overflow Facility.<br/>\r\n- Ideal For Indoor, Outdoor, Showroom Spaces.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '450 MM', '35ft', '60L', '3500', 0, 0, 0, '715*515*1250', '19.20kg'),
(47, 0, 'Plastic Air Coolers', 1800, 'AIRPORT', 'airport.png', '1400', '185', '- Inverter Compatible.<br/>\r\n- Water Level Indicator.<br/>\r\n- Honeycomb Technology. <br/>\r\n- Artistic Front.<br/>\r\n- Ideal For Indoor, Outdoor, Showroom Spaces.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '450 MM', '35ft', '60L', '3500', 0, 0, 0, '775*490*1140', '11.50kg'),
(48, 0, 'Plastic Air Coolers', 1800, 'SOLITAIRE', 'solitaire.png', '1400', '185', '- Inverter Compatible.<br/>\r\n- Ice Chamber.<br/>\r\n- Honeycomb Technology.<br/> \r\n- With Castor Wheels.<br/>\r\n- Powerful Throw For Large Room.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '450 MM', '35ft', '50L', '3500', 0, 0, 0, '770*540*1075', '21.00kg'),
(49, 0, 'Plastic Air Coolers', 1800, 'GRANDE', 'grande.png', '1375', '225', '- High Air, Low Noise.<br/>\r\n- Huge Jumbo Cabinet.<br/>\r\n- Honeycomb Technology. <br/>\r\n- With Castor Wheels.<br/>\r\n- Ideal For Indoor, Outdoor And Showroom Spaces.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '400 MM', '35ft', '85L', '3700', 0, 0, 0, '750*515*1195', '23.20kg'),
(50, 0, 'Plastic Air Coolers', 1800, 'DAISY 90', 'daisy_90.png', '1400', '180', '- Large Water Tank.<br/>\r\n- Overflow Facility.<br/>\r\n- Honeycomb Technology. <br/>\r\n- With Castor Wheels.<br/>\r\n- Ideal For Indoor, Outdoor And Showroom Spaces.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '450 MM', '40ft', '90L', '4000', 0, 0, 0, '685*530*1230', '22.00kg'),
(51, 0, 'Plastic Air Coolers', 1800, 'TYCOON', 'tycoon.png', '1350', '240', '- Three Speed Motor.<br/>\r\n- Powerful Air Delivery.<br/>\r\n- Honeycomb Technology. <br/>\r\n- Castor Wheels With Break.<br/>\r\n- Ideal For Indoor, Outdoor, Commercial & Industrial Use.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '450 MM', '40ft', '75L', '6000', 0, 0, 0, '855*530*1280', '26.00kg'),
(52, 0, 'Plastic Air Coolers', 1800, 'ATLANTIS', 'atlantis.png', '900', '650', '- High Grade Plastic Suitable For Outdoor.<br/>\r\n- Powerful Air Throw For Large Room.<br/>\r\n- Honeycomb Technology. <br/>\r\n- With Castor Wheels Lock Type.<br/>\r\n- Huge Jumbo Cabinet.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '30\" Axial Alum Blade', '35ft', '125', '15000', 0, 0, 0, '1120*670*1670', '52.00kg'),
(53, 0, 'Plastic Air Coolers', 1800, 'AXIS', 'axis.png', '1375', '', '- Heavy Galvanised Sheet.<br/>\r\n- Powder Coated For Long Life.<br/>\r\n- Powerful Air Throw.<br/>\r\n- Honeycomb Technology. <br/>\r\n- Three Speed Control.<br/>\r\n- Multidirectional Flow.<br/>\r\n- Optional Wheel Frame.', 'A fan that is uniquely crafted to offer superior air delivery with a silent operation along with 5 year warranty.', '450 MM', '40ft', 'Large Water Tank', '', 0, 0, 0, '', ''),
(54, 0, 'water heater', 1800, 'VIVA', 'viva.png', 'null', 'null', '- Superior Polymer Coated Tank.<br/>\r\n- High Pressure Upto 8 Bar.<br/>\r\n- Whirl Flow Mechanism.<br/>\r\n- Adjustable Temp. Knob.<br/>\r\n- Single Weld In Tank.\r\n', '', '', '', '', '', 0, 0, 0, '', ''),
(55, 0, 'water heater', 1800, 'JAZZ', 'jazz.png', 'null', 'null', '- Superior Polymer Coated Tank.<br/>\r\n- High Pressure Upto 8 Bar.<br/>\r\n- Whirl Flow Mechanism.<br/>\r\n- Adjustable Temp. Knob.<br/>\r\n- Single Weld In Tank.\r\n', '', '', '', '', '', 0, 0, 0, '', ''),
(56, 0, 'water heater', 1800, 'ASTRA', 'astra.png', 'null', 'null', '- Plastic Outer Body.<br/>\r\n- Heavy Gauge SS Tank.<br/>\r\n- Asnap Type Thermal Cut.<br/>\r\n- Pressurebrelease Value Set At 50 P.S.I.<br/>\r\n- Available IN 3L.', '', '', '', '', '', 0, 0, 0, '', ''),
(57, 0, 'water heater', 1800, 'STADARD', 'standard.png', 'null', 'null', '- An ISI Thermostat.<br/>\r\n- Heavy Gauge SS Tank.<br/>\r\n- A Thermal Cut Out.<br/>\r\n- Pressurebrelease Value Set At 50 P.S.I.<br/>\r\n- Available IN 6/10/15/25/35/50L.', '', '', '', '', '', 0, 0, 0, '', ''),
(58, 0, 'water heater', 1800, 'SPICE', 'spice.png', 'null', 'null', '- Rust Proof Plastic Cover.<br/>\r\n- Heavy Gauge SS Tank.<br/>\r\n- External Temp. Controller.<br/>\r\n- Pressurebrelease Value Set At 50 P.S.I.<br/>\r\n- Available IN 15/25L.<br/>\r\n- A Thermal Cut Out.<br/>\r\n- An ISI Thermostat.<br/>\r\n- White Grey & Ivory Brown', '', '', '', '', '', 0, 0, 0, '', ''),
(59, 0, 'water heater', 1800, 'SAPPHIRE', 'sapphire.png', 'null', 'null', '- ABS Outer Body.<br/>\r\n- Heavy Gauge SS Tank.<br/>\r\n- External Temp Controller.<br/>\r\n- An ISI Thermostat.<br/>\r\n- A Thermal Cut Out.<br/>\r\n- Pressurebrelease Value Set At 50 P.S.I.<br/>\r\n- Available in 1/15/25L.', '', '', '', '', '', 0, 0, 0, '', ''),
(60, 0, 'water heater', 1800, 'TRIGGER', 'trigger.png', 'null', 'null', '- Instant Gas Water Heater.<br/>\r\n- ISI Mark For Safety And Quality.<br/>\r\n- Heavy Heat Exchanger.<br/>\r\n- Auto Protection From Gas Leakage.<br/>\r\n- Flame Failure Device.', '', '', '', '', '', 0, 0, 0, '', ''),
(61, 0, 'water heater', 1800, 'IMPULSE', 'impulse.png', 'null', 'null', '- Instant Gas Water Heater.<br/>\r\n- ISI Mark For Safety And Quality.<br/>\r\n- Heavy Heat Exchanger.<br/>\r\n- Auto Protection From Gas Leakage.<br/>\r\n- Flame Failure Device.', '', '', '', '', '', 0, 0, 0, '', ''),
(62, 0, 'water heater', 1800, 'SPARK', 'spark.png', 'null', 'null', '- Instant Gas Water Heater.<br/>\r\n- ISI Mark For Safety And Quality.<br/>\r\n- Heavy Heat Exchanger.<br/>\r\n- Auto Protection From Gas Leakage.<br/>\r\n- Flame Failure Device.', '', '', '', '', '', 0, 0, 0, '', ''),
(63, 0, 'Immersion rod', 1800, 'IMERSION ROD', 'immersion_rod.png', 'null', 'null', '- 100% Copper Tubular Element.<br/>\r\n- Low Cost Water Heating Option.<br/>\r\n- Portable and Easy To Use.<br/>\r\n- Available In Water Proof Body.<br/>\r\n- Available in 1000/1500/2000 W.', '', '', '', '', '', 0, 0, 0, '', ''),
(64, 0, 'Room Heaters', 1800, 'FLAME', 'flame.png', 'null', 'null', '- High Quality Quartz Elements For Efficient Heating.<br/>\r\n- Two Heat Settings For Maintaining Desired Room Temperature.<br/>\r\n- Front Grill For Enhanced Safety.<br/>\r\n- Smart Carry Handles On Both Sides For Easy Portability.<br/>\r\n- Automatic Power Off ', '', '', '', '', '', 0, 0, 0, '', ''),
(65, 0, 'Room Heaters', 1800, 'USHMA', 'ushma.png', 'null', 'null', '- Blower Forced Hot Air Circulation.<br/>\r\n- Dual Mode, Heater In Winter Fan In Summer.<br/>\r\n- Automatic Thermal Cut Out.<br/>\r\n- Variable Heating Positions for Different Heating Needs.<br/>\r\n- Two Heat Settings 1000/2000 W.<br/>\r\n- Approved By BIS.', '', '', '', '', '', 0, 0, 0, '', ''),
(66, 0, 'Room Heaters', 1800, 'BLOW', 'blow.png', 'null', 'null', '- Blower Forced Hot Air Circulation.<br/>\r\n- Dual Mode, Heater In Winter Fan In Summer.<br/>\r\n- Automatic Thermal Cut Out.<br/>\r\n- Variable Heating Positions for Different Heating Needs.<br/>\r\n- Two Heat Settings 1000/2000 W.<br/>\r\n- Approved By BIS.', '', '', '', '', '', 0, 0, 0, '', ''),
(67, 0, 'Room Heaters', 1800, 'FLOW', 'flow.png', 'null', 'null', '- Blower Forced Hot Air Circulation.<br/>\r\n- Dual Mode, Heater In Winter Fan In Summer.<br/>\r\n- Automatic Thermal Cut Out.<br/>\r\n- Variable Heating Positions for Different Heating Needs.<br/>\r\n- Two Heat Settings 1000/2000 W.<br/>\r\n- Approved By BIS.', '', '', '', '', '', 0, 0, 0, '', ''),
(68, 0, 'Home Appliances', 1800, 'POPULAR', 'popular.png', 'null', '1000', '- Adjustable Thermostat Control.<br/>\r\n- Silk Braided Copper Swivel Cord.<br/>\r\n- Indicator Light.<br/>\r\n- Non Stick Sole Plate.', '', '', '', '', '', 0, 0, 0, '', ''),
(69, 0, 'Home Appliances', 1800, 'VIVA', 'viva_ha.png', 'null', '1000', '- Adjustable Thermostat Control.<br/>\r\n- Silk Braided Copper Swivel Cord.<br/>\r\n- Indicator Light.<br/>\r\n- Non Stick Sole Plate.', '', '', '', '', '', 0, 0, 0, '', ''),
(70, 0, 'Home Appliances', 1800, 'PRIME', 'prime.png', 'null', '550', '- Powerful CRC 550W motor.<br/>\r\n- Dry & Wet Grinding.<br/>\r\n- Centrifugal Juicer.<br/>\r\n- 1.5 LTR. Liquid PC Unbreakable Jar.<br/>\r\n- Unique Body Design.', '', '', '', '', '', 0, 0, 0, '', ''),
(71, 0, 'Home Appliances', 1800, 'AXIS', 'axis_ha.png', 'null', '550', '- Powerful 500W Universal motor.<br/>\r\n- Durable Thick Jar.<br/>\r\n- 1.2 LTR. Liquid Jar.<br/>\r\n- Shock =/Rust Proof ABS Body.<br/>\r\n- Stainless Steel Jar And Blades.\r\n', '', '', '', '', '', 0, 0, 0, '', ''),
(72, 0, 'Home Appliances', 1800, 'LEO', 'leo.png', 'null', '550', '- Powerful CRC 550W motor.<br/>\r\n- Dry & Wet Grinding.<br/>\r\n- Centrifugal Juicer.<br/>\r\n- 1.5 LTR. Liquid PC Unbreakable Jar.<br/>\r\n- Elegant Design.', '', '', '', '', '', 0, 0, 0, '', ''),
(73, 0, 'Home Appliances', 1800, 'NERO', 'nero.png', 'null', '550', '- Powerful 500W Universal motor.<br/>\r\n- Durable Thick Jar.<br/>\r\n- 1.2 LTR. Liquid Jar.<br/>\r\n- Shock =/Rust Proof ABS Body.<br/>\r\n- Stainless Steel Jar And Blades.\r\n', '', '', '', '', '', 0, 0, 0, '', ''),
(74, 0, 'Accessories', 1800, 'COOLER FAN', 'cooler_fan.png', '1375', '550', '- Premium Quality Cooler Kit.<br/>\r\n- 3 Speed Control.<br/>\r\n- Aluminium Blade.<br/>\r\n- High Air Delivery.<br/>\r\n- Speed 1375 RPM.', '', '', '', '', '', 0, 0, 0, '', ''),
(75, 0, 'Accessories', 1800, 'SP8 & MINI PUMP', 'sp8_&_mini_pump.png', '1375', '550', '- Premium Quality Submersible Pump.<br/>\r\n- For Coolers, Fountains & Other Use.', '', '', '', '', '', 0, 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `usertype` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `create_datetime` datetime NOT NULL,
  `mobile_number` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `usertype`, `username`, `email`, `password`, `create_datetime`, `mobile_number`, `address`, `city`, `state`) VALUES
(4, 'Aman', 'Rastogi', 'customer', 'aman', 'amanr@gmail.com', 'aman', '0000-00-00 00:00:00', '9811554026', '', '', ''),
(11, 'kapil', 'kumar', 'Customer', 'kapil', 'kapil019@in.com', 'kapil', '0000-00-00 00:00:00', '9560621037', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`article_id`);

--
-- Indexes for table `dealerlogin`
--
ALTER TABLE `dealerlogin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `product_registration_id`
--
ALTER TABLE `product_registration_id`
  ADD PRIMARY KEY (`product_registration_id`);

--
-- Indexes for table `skproducts`
--
ALTER TABLE `skproducts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dealerlogin`
--
ALTER TABLE `dealerlogin`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `product_registration_id`
--
ALTER TABLE `product_registration_id`
  MODIFY `product_registration_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `skproducts`
--
ALTER TABLE `skproducts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
