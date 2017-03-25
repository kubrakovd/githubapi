-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 25, 2017 at 11:14 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `githubapi`
--

-- --------------------------------------------------------

--
-- Table structure for table `auth`
--

CREATE TABLE `auth` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `source` varchar(255) NOT NULL,
  `source_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `auth`
--

INSERT INTO `auth` (`id`, `user_id`, `source`, `source_id`) VALUES
(6, 8, 'github', '18071849'),
(7, 9, 'github', '26597773');

-- --------------------------------------------------------

--
-- Table structure for table `migration`
--

CREATE TABLE `migration` (
  `version` varchar(180) NOT NULL,
  `apply_time` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migration`
--

INSERT INTO `migration` (`version`, `apply_time`) VALUES
('m000000_000000_base', 1490172539),
('m130524_201442_init', 1490172549),
('m170322_085524_create_auth_table', 1490173116);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `auth_key` varchar(255) NOT NULL,
  `password_hash` varchar(255) NOT NULL,
  `password_reset_token` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `status` smallint(6) NOT NULL DEFAULT '10',
  `created_at` int(11) NOT NULL,
  `updated_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `auth_key`, `password_hash`, `password_reset_token`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, 'tester', 'hIzhV2q2J5X2TljkAim8DUy17KGx80rA', '$2y$13$ueg78/5YF5l35ZkwqiPFj..S79neWGUA6FLKuBjd./om8NymuDeEe', '', 'tester@ya.ru', 10, 1490173862, 1490173862),
(7, 'tester2', '4l6RcEGLlXNexIyKpBnDz3xC32wdAl-3', '$2y$13$RhZxE6Lpcp15Xg0ada9h2.jDhiRBDEIIpNOOotyryQ.Ccx6ERCaay', '', 'tester2@ya.ru', 10, 1490178498, 1490178498),
(8, 'kubrakovd', 'dab9qOURWDJeLlQUKWE5hlQcqiKMcY5w', '$2y$13$NnFk/Mk/pv72C4q8pB8AQOVCIPCaDoa1eG8dSUs3DDsXQsyl3YwTe', '_1IxVI_xB7ccQ7coJbTOMFdkaxHEzfOG_1490178592', 'kubrakov.d@gmail.com', 10, 1490178592, 1490178592),
(9, 'kubrakovden', 'Ik_HMlzwJSr-CLopRMPH8jdIuOjEedM5', '$2y$13$n1TzJvLoIOgfbbQmbrZLWeQvWGosINZx8/LZx.8xCUZ90VcuJA3Lu', '8BnRPE8etWzmxPlxnYjcCoAR1kQZyKTz_1490181350', 'dexa4@yandex.ru', 10, 1490181350, 1490181350);

-- --------------------------------------------------------

--
-- Table structure for table `user_activity`
--

CREATE TABLE `user_activity` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `date_created` int(13) NOT NULL,
  `action` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_activity`
--

INSERT INTO `user_activity` (`id`, `user_id`, `date_created`, `action`) VALUES
(2, 9, 1490299331, 'kubrakovdenopened files of the repository apibank of user '),
(3, 9, 1490299443, 'kubrakovden opened files of the repository datefinder of user kubrakovd'),
(4, 9, 1490299668, 'kubrakovden search list of the repositories  of user vikok'),
(5, 9, 1490299708, 'kubrakovden opened files of the repository cahee of user vikok'),
(7, 9, 1490299945, 'kubrakovden opened file https://api_github_com/repos/vikok/cahee/contents/_gitignore?ref=master of the repository'),
(8, 9, 1490300016, 'kubrakovden search list of the repositories  of user kubrakovd'),
(9, 9, 1490300019, 'kubrakovden opened files of the repository lambda of user kubrakovd'),
(10, 9, 1490300022, 'kubrakovden opened folder https://api_github_com/repos/kubrakovd/lambda/git/trees/6844efcbb737314087229ba710afa31cefe466fd of the repository'),
(11, 9, 1490300117, 'kubrakovden search list of the repositories  of user kubrakovd'),
(12, 9, 1490300120, 'kubrakovden opened files of the repository apibank of user kubrakovd'),
(13, 9, 1490300124, 'kubrakovden opened folder https://api_github_com/repos/kubrakovd/apibank/git/trees/ecb2f85dde31eedf67bafb69716acb19b273ce67 of the repository'),
(14, 9, 1490300168, 'kubrakovden opened folder https://api_github_com/repos/kubrakovd/apibank/git/trees/7f45ad5c172192a7cdc98c0b06fafb7133aeaa93 of the repository'),
(15, 9, 1490344728, 'kubrakovden search list of the repositories  of user kubrakovd'),
(16, 1, 1490344789, 'tester search list of the repositories  of user kubrakovd'),
(17, 1, 1490347811, 'tester search list of the repositories  of user kubrakovd'),
(18, 1, 1490347937, 'tester search list of the repositories  of user kubrakovd'),
(19, 1, 1490347944, 'tester search list of the repositories  of user kubrakovd'),
(20, 1, 1490348063, 'tester search list of the repositories  of user kubrakovd'),
(21, 1, 1490348231, 'tester search list of the repositories  of user kubrakovd'),
(22, 1, 1490348254, 'tester search list of the repositories  of user kubrakovd'),
(23, 1, 1490348261, 'tester search list of the repositories  of user kubrakovd'),
(24, 1, 1490348277, 'tester search list of the repositories  of user kubrakovd'),
(25, 1, 1490348282, 'tester search list of the repositories  of user kubrakovd'),
(26, 1, 1490348314, 'tester search list of the repositories  of user kubrakovd'),
(27, 1, 1490348338, 'tester search list of the repositories  of user kubrakovd'),
(28, 1, 1490348388, 'tester search list of the repositories  of user kubrakovd'),
(29, 1, 1490348674, 'tester search list of the repositories  of user kubrakovd'),
(30, 1, 1490348760, 'tester search list of the repositories  of user kubrakovd'),
(31, 1, 1490348798, 'tester search list of the repositories  of user kubrakovd'),
(32, 8, 1490434002, 'kubrakovd search list of the repositories  of user vikok'),
(33, 8, 1490434450, 'kubrakovd search list of the repositories  of user kubrakovd'),
(34, 8, 1490434455, 'kubrakovd opened files of the repository tinyone of user kubrakovd'),
(35, 8, 1490434460, 'kubrakovd opened folder https://api_github_com/repos/kubrakovd/tinyone/git/trees/847b7c63b0c8b340aef97e20350de9acf7865830 of the repository'),
(36, 8, 1490435381, 'kubrakovd search list of the repositories  of user kubrakovd'),
(37, 8, 1490435892, 'kubrakovd search list of the repositories  of user kubrakovd'),
(38, 8, 1490435896, 'kubrakovd opened files of the repository Elegant of user kubrakovd'),
(39, 8, 1490435900, 'kubrakovd opened folder https://api_github_com/repos/kubrakovd/Elegant/git/trees/dca239fb75c0958f039c5f821ed5bc9955018980 of the repository'),
(40, 8, 1490435906, 'kubrakovd opened folder https://api_github_com/repos/kubrakovd/Elegant/git/trees/b99b644dbfba5ae8b96eb43220628c6b985f65b7 of the repository'),
(41, 8, 1490435991, 'kubrakovd opened folder https://api_github_com/repos/kubrakovd/Elegant/git/trees/b99b644dbfba5ae8b96eb43220628c6b985f65b7 of the repository'),
(42, 8, 1490435999, 'kubrakovd opened folder https://api_github_com/repos/kubrakovd/Elegant/git/trees/b99b644dbfba5ae8b96eb43220628c6b985f65b7 of the repository'),
(43, 8, 1490436037, 'kubrakovd search list of the repositories  of user kubrakovd'),
(44, 8, 1490436040, 'kubrakovd opened files of the repository apibank of user kubrakovd'),
(45, 8, 1490436043, 'kubrakovd opened file https://api_github_com/repos/kubrakovd/apibank/contents/_bowerrc?ref=master of the repository'),
(46, 8, 1490436085, 'kubrakovd opened file https://api_github_com/repos/kubrakovd/apibank/contents/_bowerrc?ref=master of the repository'),
(47, 8, 1490436109, 'kubrakovd opened file https://api_github_com/repos/kubrakovd/apibank/contents/_bowerrc?ref=master of the repository'),
(48, 8, 1490436131, 'kubrakovd opened file https://api_github_com/repos/kubrakovd/apibank/contents/_bowerrc?ref=master of the repository'),
(49, 8, 1490436149, 'kubrakovd opened file https://api_github_com/repos/kubrakovd/apibank/contents/_bowerrc?ref=master of the repository'),
(50, 8, 1490436334, 'kubrakovd opened file https://api_github_com/repos/kubrakovd/apibank/contents/_bowerrc?ref=master of the repository'),
(51, 8, 1490436380, 'kubrakovd opened file https://api_github_com/repos/kubrakovd/apibank/contents/_bowerrc?ref=master of the repository'),
(52, 8, 1490436392, 'kubrakovd opened file https://api_github_com/repos/kubrakovd/apibank/contents/_bowerrc?ref=master of the repository'),
(53, 8, 1490436435, 'kubrakovd search list of the repositories  of user kubrakovd'),
(54, 8, 1490436439, 'kubrakovd opened files of the repository apibank of user kubrakovd'),
(55, 8, 1490436450, 'kubrakovd opened file https://api_github_com/repos/kubrakovd/apibank/contents/apibank_sql?ref=master of the repository'),
(56, 8, 1490436578, 'kubrakovd opened file https://api_github_com/repos/kubrakovd/apibank/contents/apibank_sql?ref=master of the repository'),
(57, 8, 1490436603, 'kubrakovd opened file https://api_github_com/repos/kubrakovd/apibank/contents/apibank_sql?ref=master of the repository'),
(58, 8, 1490436623, 'kubrakovd opened file https://api_github_com/repos/kubrakovd/apibank/contents/apibank_sql?ref=master of the repository');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `auth`
--
ALTER TABLE `auth`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk-auth-user_id-user-id` (`user_id`);

--
-- Indexes for table `migration`
--
ALTER TABLE `migration`
  ADD PRIMARY KEY (`version`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_activity`
--
ALTER TABLE `user_activity`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `auth`
--
ALTER TABLE `auth`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `user_activity`
--
ALTER TABLE `user_activity`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `auth`
--
ALTER TABLE `auth`
  ADD CONSTRAINT `fk-auth-user_id-user-id` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
