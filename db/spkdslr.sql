-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 08, 2017 at 04:47 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `spkdslr`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatif`
--

CREATE TABLE `alternatif` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `merk` varchar(100) NOT NULL,
  `sensor` int(11) NOT NULL,
  `maxIso` int(11) NOT NULL,
  `resolusiFoto` int(11) NOT NULL,
  `resolusiVideo` int(11) NOT NULL,
  `fitur` int(11) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `review` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alternatif`
--

INSERT INTO `alternatif` (`id`, `nama`, `harga`, `merk`, `sensor`, `maxIso`, `resolusiFoto`, `resolusiVideo`, `fitur`, `gambar`, `review`) VALUES
(5, 'Canon EOS 1300D', 1, 'Canon', 1, 2, 2, 1, 1, 'EOS1300D.jpg', 'http://www.canon-europe.com/for_home/product_finder/cameras/digital_slr/eos_1300d/specification.aspx'),
(7, 'Canon EOS 700D', 1, 'Canon', 1, 3, 2, 1, 2, 'EOS1300D.jpg', ''),
(8, 'Canon EOS 80D', 2, 'Canon', 1, 3, 5, 2, 4, 'EOS1300D.jpg', ''),
(9, 'Canon EOS 1D Mk.iv\r\n', 2, 'Canon', 2, 3, 1, 1, 2, 'EOS1300D.jpg', ''),
(10, 'Canon EOS 6D', 3, 'Canon', 3, 5, 3, 1, 4, 'EOS1300D.jpg', ''),
(11, 'Canon EOS 5D Mk.ii', 3, 'Canon', 3, 5, 4, 1, 3, 'EOS1300D.jpg', ''),
(12, 'Nikon D3200', 1, 'Nikon', 1, 2, 5, 2, 1, '', ''),
(13, 'Nikon D5300', 1, 'Nikon', 1, 3, 5, 2, 2, '', ''),
(14, 'Nikon D7200', 2, 'Nikon', 1, 3, 5, 2, 3, '', ''),
(15, 'Nikon D500', 3, 'Nikon', 3, 4, 3, 4, 4, '', ''),
(16, 'Nikon D810', 3, 'Nikon', 3, 4, 5, 2, 3, '', '');

-- --------------------------------------------------------

--
-- Stand-in structure for view `alternatifnorm`
-- (See below for the actual view)
--
CREATE TABLE `alternatifnorm` (
`id` int(11)
,`nama` varchar(100)
,`merk` varchar(100)
,`hargaNorm` decimal(14,4)
,`sensorNorm` decimal(14,4)
,`isoNorm` decimal(14,4)
,`resolusiNorm` decimal(19,8)
,`fiturNorm` decimal(14,4)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `alternatifvalue`
-- (See below for the actual view)
--
CREATE TABLE `alternatifvalue` (
`id` int(11)
,`nama` varchar(100)
,`merk` varchar(100)
,`harga` int(11)
,`sensor` int(11)
,`maxIso` int(11)
,`resolusiFoto` int(11)
,`resolusiVideo` int(11)
,`fitur` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `fitur`
--

CREATE TABLE `fitur` (
  `idFitur` int(11) NOT NULL,
  `pilihanFitur` text NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `fitur`
--

INSERT INTO `fitur` (`idFitur`, `pilihanFitur`, `nilai`) VALUES
(1, '1 Fitur', 1),
(2, '2 Fitur', 2),
(3, '3 Fitur', 3),
(4, '> 3 Fitur', 4);

-- --------------------------------------------------------

--
-- Table structure for table `harga`
--

CREATE TABLE `harga` (
  `idHarga` int(11) NOT NULL,
  `pilihanHarga` text NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `harga`
--

INSERT INTO `harga` (`idHarga`, `pilihanHarga`, `nilai`) VALUES
(1, '0 - 6 Juta', 1),
(2, '6 - 16 Juta', 2),
(3, '> 15 Juta', 3);

-- --------------------------------------------------------

--
-- Table structure for table `maxiso`
--

CREATE TABLE `maxiso` (
  `idIso` int(11) NOT NULL,
  `pilihanIso` text NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `maxiso`
--

INSERT INTO `maxiso` (`idIso`, `pilihanIso`, `nilai`) VALUES
(1, '6400', 6400),
(2, '12800', 12800),
(3, '25600', 25600),
(4, '51200', 512000),
(5, '102400', 102400);

-- --------------------------------------------------------

--
-- Table structure for table `resollusivideo`
--

CREATE TABLE `resollusivideo` (
  `idResolusiVideo` int(11) NOT NULL,
  `pilihanResolusiVideo` text NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resollusivideo`
--

INSERT INTO `resollusivideo` (`idResolusiVideo`, `pilihanResolusiVideo`, `nilai`) VALUES
(1, '1080p 30fps', 4),
(2, '1080p 60fps', 5),
(3, '1080p 120fps', 6),
(4, '4K 30fps', 9),
(5, '4K 60fps', 10);

-- --------------------------------------------------------

--
-- Table structure for table `resolusifoto`
--

CREATE TABLE `resolusifoto` (
  `idResolusiFoto` int(11) NOT NULL,
  `pilihanResolusiFoto` text NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `resolusifoto`
--

INSERT INTO `resolusifoto` (`idResolusiFoto`, `pilihanResolusiFoto`, `nilai`) VALUES
(1, '16 - 17.9 MP', 1),
(2, '18 - 19.9 MP', 2),
(3, '20 - 21.9 MP', 3),
(4, '22 - 23.9 MP', 4),
(5, '> 24 MP', 5);

-- --------------------------------------------------------

--
-- Table structure for table `sensor`
--

CREATE TABLE `sensor` (
  `idSensor` int(11) NOT NULL,
  `pilihanSensor` text NOT NULL,
  `nilai` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sensor`
--

INSERT INTO `sensor` (`idSensor`, `pilihanSensor`, `nilai`) VALUES
(1, 'Full-frame', 3),
(2, 'APS-H', 2),
(3, 'APS-C', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` text,
  `password` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure for view `alternatifnorm`
--
DROP TABLE IF EXISTS `alternatifnorm`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alternatifnorm`  AS  select `alternatifvalue`.`id` AS `id`,`alternatifvalue`.`nama` AS `nama`,`alternatifvalue`.`merk` AS `merk`,((select min(`alternatifvalue`.`harga`) from `alternatifvalue`) / `alternatifvalue`.`harga`) AS `hargaNorm`,(`alternatifvalue`.`sensor` / (select max(`alternatifvalue`.`sensor`) from `alternatifvalue`)) AS `sensorNorm`,(`alternatifvalue`.`maxIso` / (select max(`alternatifvalue`.`maxIso`) from `alternatifvalue`)) AS `isoNorm`,(((`alternatifvalue`.`resolusiFoto` / (select max(`alternatifvalue`.`resolusiFoto`) from `alternatifvalue`)) + (`alternatifvalue`.`resolusiVideo` / (select max(`alternatifvalue`.`resolusiVideo`) from `alternatifvalue`))) / 2) AS `resolusiNorm`,(`alternatifvalue`.`fitur` / (select max(`alternatifvalue`.`fitur`) from `alternatifvalue`)) AS `fiturNorm` from `alternatifvalue` order by `alternatifvalue`.`id` ;

-- --------------------------------------------------------

--
-- Structure for view `alternatifvalue`
--
DROP TABLE IF EXISTS `alternatifvalue`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `alternatifvalue`  AS  select `alternatif`.`id` AS `id`,`alternatif`.`nama` AS `nama`,`alternatif`.`merk` AS `merk`,`harga`.`nilai` AS `harga`,`sensor`.`nilai` AS `sensor`,`maxiso`.`nilai` AS `maxIso`,`resolusifoto`.`nilai` AS `resolusiFoto`,`resollusivideo`.`nilai` AS `resolusiVideo`,`fitur`.`nilai` AS `fitur` from ((((((`alternatif` join `harga` on((`alternatif`.`harga` = `harga`.`idHarga`))) join `sensor` on((`alternatif`.`sensor` = `sensor`.`idSensor`))) join `maxiso` on((`alternatif`.`maxIso` = `maxiso`.`idIso`))) join `resollusivideo` on((`resollusivideo`.`idResolusiVideo` = `alternatif`.`resolusiVideo`))) join `resolusifoto` on((`resolusifoto`.`idResolusiFoto` = `alternatif`.`resolusiFoto`))) join `fitur` on((`fitur`.`idFitur` = `alternatif`.`fitur`))) order by `alternatif`.`id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD PRIMARY KEY (`id`),
  ADD KEY `harga` (`harga`,`sensor`,`maxIso`,`resolusiFoto`,`resolusiVideo`,`fitur`),
  ADD KEY `sensor` (`sensor`),
  ADD KEY `resolusiVideo` (`resolusiVideo`),
  ADD KEY `resolusiFoto` (`resolusiFoto`),
  ADD KEY `fitur` (`fitur`),
  ADD KEY `maxIso` (`maxIso`);

--
-- Indexes for table `fitur`
--
ALTER TABLE `fitur`
  ADD PRIMARY KEY (`idFitur`);

--
-- Indexes for table `harga`
--
ALTER TABLE `harga`
  ADD PRIMARY KEY (`idHarga`);

--
-- Indexes for table `maxiso`
--
ALTER TABLE `maxiso`
  ADD PRIMARY KEY (`idIso`);

--
-- Indexes for table `resollusivideo`
--
ALTER TABLE `resollusivideo`
  ADD PRIMARY KEY (`idResolusiVideo`);

--
-- Indexes for table `resolusifoto`
--
ALTER TABLE `resolusifoto`
  ADD PRIMARY KEY (`idResolusiFoto`);

--
-- Indexes for table `sensor`
--
ALTER TABLE `sensor`
  ADD PRIMARY KEY (`idSensor`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alternatif`
--
ALTER TABLE `alternatif`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `fitur`
--
ALTER TABLE `fitur`
  MODIFY `idFitur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `harga`
--
ALTER TABLE `harga`
  MODIFY `idHarga` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `maxiso`
--
ALTER TABLE `maxiso`
  MODIFY `idIso` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `resollusivideo`
--
ALTER TABLE `resollusivideo`
  MODIFY `idResolusiVideo` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `resolusifoto`
--
ALTER TABLE `resolusifoto`
  MODIFY `idResolusiFoto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `sensor`
--
ALTER TABLE `sensor`
  MODIFY `idSensor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `alternatif`
--
ALTER TABLE `alternatif`
  ADD CONSTRAINT `alternatif_ibfk_1` FOREIGN KEY (`sensor`) REFERENCES `sensor` (`idSensor`),
  ADD CONSTRAINT `alternatif_ibfk_2` FOREIGN KEY (`resolusiVideo`) REFERENCES `resollusivideo` (`idResolusiVideo`),
  ADD CONSTRAINT `alternatif_ibfk_3` FOREIGN KEY (`resolusiFoto`) REFERENCES `resolusifoto` (`idResolusiFoto`),
  ADD CONSTRAINT `alternatif_ibfk_4` FOREIGN KEY (`harga`) REFERENCES `harga` (`idHarga`),
  ADD CONSTRAINT `alternatif_ibfk_5` FOREIGN KEY (`fitur`) REFERENCES `fitur` (`idFitur`),
  ADD CONSTRAINT `alternatif_ibfk_6` FOREIGN KEY (`maxIso`) REFERENCES `maxiso` (`idIso`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
