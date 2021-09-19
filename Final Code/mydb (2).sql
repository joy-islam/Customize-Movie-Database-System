-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 19, 2021 at 07:16 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.4.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `prime_search_movie` (IN `title` VARCHAR(100))  BEGIN
	SELECT m.name, m.release_date, m.Duration,m.Language, m.Country_Name, m.Trailer, group_concat(a.Name SEPARATOR', ') as Cast, m.Description, m.Rating, m.Genre
 	FROM mydb.movie m join mydb.cast c on m.ID = c.MOvies_id join actor a on c.Actor_ID = a.ID
	WHERE  m.name = title
    group by m.ID;
END$$

CREATE DEFINER=`root`@`localhost` PROCEDURE `search_movie` (IN `title` VARCHAR(100))  BEGIN
	SELECT m.name, m.release_date, m.Duration,m.Language, m.Country_Name, m.Trailer, group_concat(a.Name SEPARATOR', ') as Cast, m.Description, m.Rating, m.Genre
 	FROM mydb.movie m join mydb.cast c on m.ID = c.MOvies_id join actor a on c.Actor_ID = a.ID
	WHERE  m.name = title
    group by m.ID;
END$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `actor`
--

CREATE TABLE `actor` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `actor`
--

INSERT INTO `actor` (`ID`, `Name`) VALUES
(1, 'Tobey Maguire'),
(2, 'Kirsten Dunst'),
(3, 'Willem Dafoe'),
(4, 'James Franco'),
(5, 'Rosemary Harris'),
(6, 'Cliff Robertson'),
(7, 'Cliff Robertson'),
(8, 'Jack Nicholson'),
(9, 'Louise Fletcher'),
(10, 'Michael Berryma'),
(11, 'Peter Brocco'),
(12, 'Joaquin Phoenix'),
(13, 'Robert De Niro'),
(14, 'Zazie Beetz'),
(15, 'Frances Conroy'),
(16, 'Anthony Perkins'),
(17, 'Janet Leigh'),
(18, 'Vera Miles'),
(19, 'Yash Rohan'),
(20, 'Pori Moni'),
(21, 'Fazlur Rahman Babu'),
(22, 'Brad Pitt'),
(23, 'Edward Norton'),
(24, 'Meat Loaf'),
(25, 'Helena Bonham Carter'),
(26, 'David Andrews'),
(27, 'Ray Milland'),
(28, 'Grace Kelly'),
(29, 'Robert Cummings'),
(30, 'Guy Pearce'),
(31, 'Carrie-Anne Moss'),
(32, 'Mark Boone Junio'),
(33, 'Jorja Fox'),
(34, 'Morgan Freeman'),
(35, 'Kevin Spacey'),
(36, 'Andrew Kevin Walker'),
(37, 'Leonardo DiCaprio'),
(38, 'Leonardo DiCaprio'),
(39, 'Elliot Page'),
(40, 'Ken Watanabe'),
(41, 'Craig Roberts'),
(42, 'Sally Hawkins'),
(43, 'Paddy Considine');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Password` char(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Password`) VALUES
(1, 'Joy', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `cast`
--

CREATE TABLE `cast` (
  `ID` int(11) NOT NULL,
  `MOvies_id` int(11) NOT NULL,
  `Actor_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cast`
--

INSERT INTO `cast` (`ID`, `MOvies_id`, `Actor_ID`) VALUES
(1, 1, 1),
(1, 1, 2),
(1, 1, 3),
(1, 1, 4),
(1, 1, 5),
(1, 1, 6),
(1, 1, 7),
(1, 2, 8),
(1, 2, 1),
(1, 2, 2),
(1, 2, 3),
(1, 2, 4),
(1, 2, 5),
(1, 2, 6),
(1, 3, 1),
(1, 3, 2),
(1, 3, 3),
(1, 3, 4),
(1, 3, 5),
(1, 3, 6),
(1, 3, 7),
(2, 4, 8),
(2, 4, 9),
(2, 4, 10),
(2, 4, 11),
(3, 5, 12),
(3, 5, 13),
(3, 5, 14),
(3, 5, 15),
(4, 6, 16),
(4, 6, 17),
(4, 6, 18),
(5, 7, 19),
(5, 7, 20),
(5, 7, 21),
(6, 8, 22),
(6, 8, 23),
(6, 8, 24),
(6, 8, 25),
(6, 8, 26),
(7, 9, 27),
(7, 9, 28),
(7, 9, 29),
(7, 9, 30),
(8, 10, 31),
(8, 10, 32),
(8, 10, 33),
(9, 11, 34),
(9, 11, 22),
(9, 11, 35),
(9, 11, 36),
(10, 12, 37),
(10, 12, 39),
(10, 12, 40),
(8, 13, 41),
(8, 13, 42),
(8, 13, 43);

-- --------------------------------------------------------

--
-- Table structure for table `director`
--

CREATE TABLE `director` (
  `Id` int(11) NOT NULL,
  `First_name` varchar(45) DEFAULT NULL,
  `Last_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `director`
--

INSERT INTO `director` (`Id`, `First_name`, `Last_name`) VALUES
(1, 'Sam', 'Raimi'),
(2, 'Milos', 'Forman'),
(3, ' Todd ', 'Phillips'),
(4, ' alfred', ' hitchcock'),
(5, ' Gias', ' Selim'),
(6, ' David', ' Fincher'),
(7, ' Christopher', ' Nolan'),
(8, ' alfred', ' hitchcock');

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `ID` int(11) NOT NULL,
  `name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `ID` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `release_date` date DEFAULT NULL,
  `Duration` time NOT NULL,
  `Language` enum('Bangla','English','Hindi') NOT NULL,
  `Country_Name` char(5) NOT NULL,
  `Director_Id` int(11) NOT NULL,
  `Trailer` blob DEFAULT NULL,
  `Cast_ID` varchar(45) NOT NULL,
  `Description` longtext DEFAULT NULL,
  `Rating` text DEFAULT NULL,
  `Genre` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`ID`, `name`, `release_date`, `Duration`, `Language`, `Country_Name`, `Director_Id`, `Trailer`, `Cast_ID`, `Description`, `Rating`, `Genre`) VALUES
(1, 'Spider man 1', '2000-03-02', '02:02:00', 'English', 'USA', 1, 0x68747470733a2f2f7777772e796f75747562652e636f6d2f77617463683f763d50436d4d4c665864555273, '1', 'peter was a simple boy from New your but after something he turned into another thing', '8.00', ' Action, Super Hero, Adventure, Fantasy, Science Fiction'),
(2, 'Spider man 2', '2004-06-30', '02:02:00', 'English', 'USA', 1, 0x68747470733a2f2f7777772e796f75747562652e636f6d2f77617463683f763d317339596c6e3059774377, '1', 'Peter Parker is dissatisfied with life when he loses his job, the love of his life, Mary Jane, and his powers. Amid all the chaos, he must fight Doctor Octavius who threatens to destroy New York City.', '8.5', 'Action, Super Hero, Science Fiction'),
(3, 'Spider man 3', '2007-03-02', '02:04:00', 'English', 'USA', 1, 0x68747470733a2f2f7777772e796f75747562652e636f6d2f77617463683f763d774f672d796a4f65755655, '1', 'Peter Parker becomes one with a symbiotic alien that bolsters his Spider-Man avatar and affects his psyche. He also has to deal with Sandman and maintain a fragmented relationship with Mary Jane.', '6.2', 'Action, Super Hero, Adventure, Thriller, Science Fiction'),
(4, 'One Flew Over The Cuckoos Nest', '1975-03-10', '02:13:00', 'English', 'USA', 2, 0x68747470733a2f2f7777772e796f75747562652e636f6d2f77617463683f763d325753794a677964547341, '2', 'In order to escape the prison labour, McMurphy, a prisoner, fakes insanity and is shifted to the special ward for the mentally unstable. In this ward, he must rise up against a cruel nurse, Ratched.', '8.7', 'Drama, Comedy-Drama'),
(5, 'Joker', '2019-10-04', '02:02:00', 'English', 'USA', 3, 0x68747470733a2f2f7777772e796f75747562652e636f6d2f77617463683f763d7434333350455147457263, '3', 'Forever alone in a crowd, failed comedian Arthur Fleck seeks connection as he walks the streets of Gotham City. Arthur wears two masks -- the one he paints for his day job as a clown, and the guise he projects in a futile attempt to feel like hes part of the world around him. Isolated, bullied and disregarded by society, Fleck begins a slow descent into madness as he transforms into the criminal mastermind known as the Joker.', '8.4', 'Thriller, Drama, Crime Flim, Physicological Thriller'),
(6, 'Psycho', '1960-09-08', '01:49:00', 'English', 'USA', 4, 0x68747470733a2f2f7777772e796f75747562652e636f6d2f77617463683f763d325753794a677964547341, '4', 'Marion disappears after stealing money from her employer. Her lover and sister try to find her and end up reaching the infamous Bates Motel, where they meet Norman Bates.', '8.5', 'Horror, Thriller, Psychological Horror, Slasher, Mystery'),
(7, 'Swapnajaal ', '2018-04-06', '02:20:12', 'Bangla', 'BD', 5, 0x68747470733a2f2f7777772e796f75747562652e636f6d2f77617463683f763d5075703670786d4e664334, '5', 'family and to get back his love, but even after justice is served, there are bigger obstacles on the way to their reunion.', '7.09', 'Romance, Drama'),
(8, 'Fight club ', '1999-05-30', '02:19:00', 'English', 'USA', 6, 0x68747470733a2f2f7777772e796f75747562652e636f6d2f77617463683f763d42644a4b6d3136436f364d, '6', 'Discontented with his capitalistic lifestyle, a white-collared insomniac forms an underground fight club with Tyler, a careless soap salesman. The project soon spirals down into something sinister..', '8.8', 'Action ,  Thriller, Dark Comedy, Drama'),
(9, 'Dial M For Murder ', '1954-05-29', '01:45:00', 'English', 'USA', 4, 0x68747470733a2f2f7777772e796f75747562652e636f6d2f77617463683f763d4a57505f68724e48534e34, '7', 'ony plans to murder his wife when he finds out that she had an affair with someone a year ago. He blackmails an old college associate to execute the crime but things dont work out as planned.', '8.2', 'Drama, Noir, Mystery, Thriller, Crime Flim, Crime Fiction'),
(10, 'Memento ', '2000-03-16', '01:53:00', 'English', 'UK', 7, 0x68747470733a2f2f7777772e796f75747562652e636f6d2f77617463683f763d3443563431686f79533841, '8', 'eonard Shelby, an insurance investigator, suffers from anterograde amnesia and uses notes and tattoos to hunt for the man he thinks killed his wife, which is the last thing he remembers..', '8.4', 'Drama, Noir, Mystery, Thriller, Crime Flim, Neo-Noir,Psychological Thriller, Indie Film, Cult Film'),
(11, 'Se7en', '1995-09-22', '02:07:00', 'English', 'USA', 6, 0x68747470733a2f2f7777772e796f75747562652e636f6d2f77617463683f763d7a6e6d5a6f566b436a7049, '9', 'A serial killer begins murdering people according to the seven deadly sins. Two detectives, one new to the city and the other about to retire, are tasked with apprehending the criminal', '8.6', 'Drama, Noir, Mystery, Crime Flim, Neo-Noir,Psychological Thriller, Indie Film'),
(12, 'Inception', '2010-07-07', '02:28:00', 'English', 'UK', 7, 0x68747470733a2f2f7777772e796f75747562652e636f6d2f77617463683f763d354569565f485849494773, '10', 'Cobb steals information from his targets by entering their dreams. Saito offers to wipe clean Cobbs criminal history as payment for performing an inception on his sick competitors son.', '8.8', 'Action , Science Fiction , Thriller, Adventure, Heist, Drama'),
(13, '', '0000-00-00', '00:00:00', '', '', 0, '', 'c.id', '', '', ''),
(14, '', '0000-00-00', '00:00:00', '', '', 0, '', 'c.id', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `movie_ genre`
--

CREATE TABLE `movie_ genre` (
  `MOvies_id` int(11) NOT NULL,
  `genre_ID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `ID` int(11) NOT NULL,
  `User_Email` varchar(100) NOT NULL,
  `Movie_name` varchar(100) NOT NULL,
  `Comment` longtext NOT NULL,
  `Time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`ID`, `User_Email`, `Movie_name`, `Comment`, `Time`) VALUES
(1, 'dsad ', 'asd', 'dsadsd', '2021-09-17 10:16:53'),
(2, 'atiquechowdhury254@gmail.com ', 'Spider man 1', 'sdf', '2021-09-17 10:17:18'),
(3, 'atiquechowdhury254@gmail.com ', 'Spider man 2', 'sdf', '2021-09-17 10:18:31'),
(4, 'atiquechowdhury254@gmail.com ', 'Spider man 2', 'sdf', '2021-09-17 10:19:48'),
(5, 'atiquechowdhury254@gmail.com ', 'Spider man 2', 'sdf', '2021-09-17 10:21:01'),
(6, 'atiquechowdhury254@gmail.com ', 'Spider man 2', 'sdf', '2021-09-17 10:21:43'),
(7, 'atiquechowdhury254@gmail.com ', 'Joker', 'yutytu', '2021-09-17 10:21:53'),
(8, 'atiquechowdhury254@gmail.com ', 'Joker', 'sdf', '2021-09-17 10:24:00'),
(9, ' ', 'Joker', 'yutytu', '2021-09-17 10:24:56'),
(10, 'atiquechowdhury254@gmail.com ', 'Spider man 1', 'sdf', '2021-09-17 10:32:50'),
(11, 'atiquechowdhury254@gmail.com ', 'Spider man 1', 'sadsaf', '2021-09-17 10:36:12'),
(12, 'atiquechowdhury254@gmail.com ', 'Spider man 1', 'sdf', '2021-09-17 10:38:58'),
(13, 'atiquechowdhury254@gmail.com ', 'Spider man 1', 'sdf', '2021-09-17 10:39:28'),
(14, 'Joy', '', 'trash', '2021-09-17 11:52:48'),
(15, 'atiquechowdhury254@gmail.com', '', 'trashdsa', '2021-09-17 11:55:04'),
(16, 'atiquechowdhury254@gmail.com', '', 'trashdsassafas', '2021-09-17 11:55:29'),
(17, 'atiquechowdhury254@gmail.com', '', 'trashdsassafas', '2021-09-17 11:56:10'),
(18, 'atiquechowdhury254@gmail.com', '', 'trash', '2021-09-17 11:56:43'),
(19, 'atiquechowdhury254@gmail.com', '', 'trashfssafsa', '2021-09-17 11:56:54'),
(20, 'atiquechowdhury254@gmail.com', '', 'trashfssafsa', '2021-09-17 11:57:51'),
(21, 'atiquechowdhury254@gmail.com', '', 'trashfssafsa', '2021-09-17 11:58:16'),
(22, 'atiquechowdhury254@gmail.com', '', 'trash', '2021-09-17 12:00:15'),
(23, 'atiquechowdhury254@gmail.com', 'Spider man 1', 'trash', '2021-09-17 12:00:39'),
(24, 'atiquechowdhury254@gmail.com', 'Spider man 1', 'trash', '2021-09-17 12:00:42'),
(25, 'atiquechowdhury254@gmail.com', 'Spider man 1', 'trash', '2021-09-17 12:00:45'),
(26, 'joyislam12345@gmail.com', 'Spider man 1', 'dsfgedafsaf', '2021-09-17 12:01:35'),
(27, 'joyislam12345@gmail.com', 'Spider man 1', 'trashdsassafas', '2021-09-17 14:01:38');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_ID` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `Password` char(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Phone_Number` char(15) NOT NULL,
  `Transction_ID` char(20) DEFAULT NULL,
  `State` tinyint(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_ID`, `Name`, `Password`, `Email`, `Phone_Number`, `Transction_ID`, `State`) VALUES
(8, 'Joy Islam', '12345', 'joyislam12345@gmail.com', '', 'sdfsdf', 1),
(11, 'Parvin Akther Jahan ', '12345', 'atiquechowdhury254@gmail.com', '01723922260', '', 0);

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `after_user_deletion` AFTER DELETE ON `user` FOR EACH ROW BEGIN
delete from watchlist where User_Email = old.Email;
END
$$
DELIMITER ;
DELIMITER $$
CREATE TRIGGER `after_user_deletions` AFTER DELETE ON `user` FOR EACH ROW BEGIN
delete from wishlist where User_Email = old.Email;
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `watchlist`
--

CREATE TABLE `watchlist` (
  `Watchlist_ID` int(11) NOT NULL,
  `User_Email` varchar(100) NOT NULL,
  `Movie_Name` varchar(100) NOT NULL,
  `History` timestamp NOT NULL DEFAULT current_timestamp(),
  `User_ID` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `watchlist`
--

INSERT INTO `watchlist` (`Watchlist_ID`, `User_Email`, `Movie_Name`, `History`, `User_ID`) VALUES
(15, 'joyislam12345@gmail.com', 'Joker', '2021-09-13 11:15:21', ''),
(16, 'joyislam12345@gmail.com', 'Spider man 2', '2021-09-13 11:15:23', ''),
(17, 'joyislam12345@gmail.com', 'Spider man 1', '2021-09-13 13:56:32', ''),
(18, 'joyislam12345@gmail.com', 'Spider man 3', '2021-09-14 11:41:26', '');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `Wishlist_ID` int(11) NOT NULL,
  `User_email` varchar(100) NOT NULL,
  `Movie_Name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`Wishlist_ID`, `User_email`, `Movie_Name`) VALUES
(3, 'joyislam12345@gmail.com', 'Spider man 3'),
(4, 'joyislam12345@gmail.com', 'Spider man 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `actor`
--
ALTER TABLE `actor`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `director`
--
ALTER TABLE `director`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `movie_ genre`
--
ALTER TABLE `movie_ genre`
  ADD PRIMARY KEY (`MOvies_id`,`genre_ID`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_ID`);

--
-- Indexes for table `watchlist`
--
ALTER TABLE `watchlist`
  ADD PRIMARY KEY (`Watchlist_ID`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`Wishlist_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `actor`
--
ALTER TABLE `actor`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `director`
--
ALTER TABLE `director`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `watchlist`
--
ALTER TABLE `watchlist`
  MODIFY `Watchlist_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `Wishlist_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
