-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2019 at 12:13 AM
-- Server version: 10.1.39-MariaDB
-- PHP Version: 7.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_our_story`
--

-- --------------------------------------------------------

--
-- Table structure for table `storys`
--

CREATE TABLE `storys` (
  `story_id` int(3) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `title` varchar(80) NOT NULL,
  `description` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `storys`
--

INSERT INTO `storys` (`story_id`, `team_name`, `title`, `description`) VALUES
(5, 'T0', 'orange wolves', 'this is about ow'),
(8, 'T7', 'Interior Design', ''),
(9, 'T6', 'Information technology', ''),
(10, 'T12', 'Visual Art', ''),
(11, 'T11', 'Photography', ''),
(12, 'T3', 'Graphic Design', ''),
(13, 'T10', 'Music', ''),
(14, 'T9', 'Media', ''),
(15, 'T1', 'Fashion', '<br><b>1st year</b><br>Fashion students have been working hard on their design brief. They have looked at the movement of the body to help inform their designs. They have explored different ideas using strategies such as sketching and manipulating fabrics based on their concept.<br><br>They have designed a range of garments and have chosen 1 to construct. They are pattern making their design and continuing to refine and explore their ideas. They have to make sure that their ideas are translated from paper into a wearable, promotional garment that has a strong emphasis on sustainability.\r\n\r\n<br><br>\r\n<b>2nd year</b><br> Fashion students have to produce 2 ranges (Promotional and Ready to Wear) and from these they choose a collection of designs for the catwalk. They have worked through a brief and developed a concept based on research from which to start their exploration and designing.<br><br>Students are encouraged to experiment and explore ideas. They sketch, experiment with fabrics and ideas, develop colour palettes and make fabric choices before pattern making, fitting and constructing their designs. They also collaborate with Hair and MU students on the most effective styling ideas to promote their collection'),
(16, 'T4', 'Hair', ''),
(17, 'T8', 'Makeup', ''),
(18, 'T5', 'Horticulture', ' Students have collaborated across the horticulture courses to design and deliver a cohesive installation that represents our professions, but also challenges perceptions and expectations of our work.<br><br>We have dreamt, brainstormed, researched, sketched, measured, cleaned, painted, constructed, adhered, built, suspended, wired, and planted to create the installation!\r\n'),
(20, 'T13', 'Yurauna', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `storys`
--
ALTER TABLE `storys`
  ADD PRIMARY KEY (`story_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `storys`
--
ALTER TABLE `storys`
  MODIFY `story_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
