-- phpMyAdmin SQL Dump
-- version 3.2.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 17, 2011 at 10:35 PM
-- Server version: 5.1.44
-- PHP Version: 5.3.2

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

--
-- Database: `php_demos`
--

-- --------------------------------------------------------

--
-- Table structure for table `national_forests`
--

CREATE TABLE `national_forests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(2) DEFAULT NULL,
  `area` int(10) unsigned DEFAULT NULL,
  `established` datetime DEFAULT NULL,
  `closest_city` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=124 ;

--
-- Dumping data for table `national_forests`
--

INSERT INTO `national_forests` (`id`, `state`, `area`, `established`, `closest_city`, `name`) VALUES
(2, 'AL', 11252, '0000-00-00 00:00:00', 'Tuskegee, AL', 'Tuskegee National Forest'),
(1, 'AK', 5400000, '1907-07-23 00:00:00', 'Anchorage, AK', 'Chugach National Forest'),
(3, 'AZ', 1780000, '1902-04-11 00:00:00', 'Tuscon, AZ', 'Coronado National Forest'),
(4, 'CA', 1900000, '1936-12-01 00:00:00', 'San Luis Obispo, CA', 'Los Padres National Forest'),
(7, 'WY', 2769950, '0000-00-00 00:00:00', 'Cheyenne, WY', 'Medicine Bow - Routt National Forest'),
(30, 'OR', 1800000, NULL, 'Bend, OR', 'Deschutes National Forest'),
(106, 'OR', 1067043, '1908-01-01 00:00:00', 'Government Camp, OR', 'Mount Hood National Forest'),
(110, 'PA', 512998, '1923-01-01 00:00:00', 'Warren, PA', 'Allegheny National Forest'),
(111, 'SD', 1251898, '1897-02-22 00:00:00', 'Rapid City, SD', 'Black Hills National Forest'),
(109, 'ID', 2630722, '1903-01-01 00:00:00', 'Pocatello, ID', 'Caribou-Targhee National Forest'),
(113, 'WA', 3998, NULL, 'Bellingham, WA', 'Mount Baker-Snoqualmie National Forest'),
(114, 'WA', 633677, NULL, 'Quinalt, WA', 'Olympic National Forest'),
(115, 'WV', 910155, '1920-04-28 00:00:00', 'Elkins, WV', 'Monongahela National Forest'),
(117, 'WY', 3400000, '1908-07-01 00:00:00', 'Big Piney, WY', 'Bridger-Teton National Forest'),
(116, 'WY', 2466586, '1891-03-03 00:00:00', 'Cody, WY', 'Shoshone National Forest'),
(5, 'CA', 1144235, '1908-01-01 00:00:00', 'Bakersfield, CA', 'Sequoia National Forest'),
(6, 'CA', 671686, '1907-01-01 00:00:00', 'San Bernardino, CA', 'San Bernardino National Forest'),
(105, 'OR', 1207039, '1908-01-01 00:00:00', 'Klamath Falls, OR', 'Fremont National Forest'),
(103, 'OR', 1737774, NULL, 'Yreka, CA', 'Klamath National Rorest'),
(104, 'OR', 1800000, '2004-01-01 00:00:00', 'Medford, OR', 'Rogue River - Siskiyou National Forest'),
(107, 'OR', 1675407, '1933-01-01 00:00:00', 'Eugene, OR', 'Willamette National Forest'),
(102, 'MT', 1278279, '1905-07-01 00:00:00', 'Billings, MT', 'Custer National Forest'),
(108, 'OR', 1800000, NULL, 'Elgin, OR', 'Umatilla National Forest'),
(112, 'TX', 161842, '1935-01-01 00:00:00', 'Lufkin, TX', 'Davy Crockett National Forest'),
(101, 'MN', 3900000, '1909-01-01 00:00:00', 'Virginia, MN', 'Superior National Forest'),
(100, 'MN', 1600000, '1908-01-01 00:00:00', 'Cass Lake, MN', 'Chippewa National Forest');

-- --------------------------------------------------------
