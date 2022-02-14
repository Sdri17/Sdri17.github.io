-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1:3307
-- Generation Time: Feb 14, 2022 at 11:55 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `git`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
`id` int(11) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `jenkel` varchar(15) NOT NULL,
  `agama` varchar(15) NOT NULL,
  `jabatan` varchar(20) NOT NULL,
  `jenpen` varchar(30) NOT NULL,
  `mapel` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id`, `nip`, `nama`, `tgl_lahir`, `jenkel`, `agama`, `jabatan`, `jenpen`, `mapel`) VALUES
(1, '111    ', 'horassa    ', '2022-02-01', 'laki-laki    ', 'kristen    ', '    wali kelas    ', 's1    ', 'komputer2'),
(2, '112', 'safag', '2022-02-09', 'Laki-laki', 'Islam', 'sdfsa', 'asgd', 'gdsag'),
(3, '2312', 'sdag', '2022-02-09', 'Laki-laki', 'Islam', 'sadg', 'sdgds', 'asdga'),
(5, 'nip', 'dasg', '2022-02-09', 'Laki-laki', 'Islam', 'adsg', 'asdg', 'asdg'),
(6, 'nip', 'dasg', '2022-02-09', 'Laki-laki', 'Islam', 'adsg', 'asdg', 'asdg'),
(7, 'nip', 'dasg', '2022-02-09', 'Laki-laki', 'Islam', 'adsg', 'asdg', 'asdg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `guru`
--
ALTER TABLE `guru`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
