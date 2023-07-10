-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 10, 2023 at 07:28 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pirpoo`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata`
--

CREATE TABLE `biodata` (
  `bio_id` int(11) NOT NULL,
  `gender` int(11) NOT NULL,
  `bio_description` longtext NOT NULL,
  `profile_image` varchar(255) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `parent_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `friend`
--

CREATE TABLE `friend` (
  `frend_id` int(11) NOT NULL,
  `req_user_id` int(11) NOT NULL,
  `acc_user_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `group`
--

CREATE TABLE `group` (
  `group_id` int(11) NOT NULL,
  `group_name` varchar(30) NOT NULL,
  `group_description` longtext NOT NULL,
  `group_image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) NOT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `update_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `group_member`
--

CREATE TABLE `group_member` (
  `member_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `update_at` timestamp NULL DEFAULT NULL,
  `update_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `otp_id` int(11) NOT NULL,
  `otp` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `otp`
--

INSERT INTO `otp` (`otp_id`, `otp`, `user_id`) VALUES
(18, 8857, 30),
(20, 6729, 29);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_value` longtext NOT NULL,
  `post_image` varchar(225) NOT NULL,
  `group_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` int(11) NOT NULL,
  `role_name` varchar(255) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `role_name`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 'admin', NULL, NULL, NULL),
(2, 'psikolog', NULL, NULL, NULL),
(3, 'user', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `share`
--

CREATE TABLE `share` (
  `share_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `trending`
--

CREATE TABLE `trending` (
  `trending_id` int(11) NOT NULL,
  `hashtag` varchar(225) NOT NULL,
  `hashtag_count` varchar(225) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `updated_by` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` text NOT NULL,
  `usr_role_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `warning_lavel` int(11) NOT NULL DEFAULT 0,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `phone`, `usr_role_id`, `name`, `warning_lavel`, `deleted_at`, `updated_at`, `created_at`) VALUES
(1, 'awikwok', '9504c244d1909fe23961ac46ce61d0bb', '324234', 3, 'awikwok', 0, NULL, NULL, NULL),
(2, 'eqweewr', '80355073480594a99470dcacccd8cf2c', '12321', 3, 'fsdaf', 0, NULL, NULL, NULL),
(4, 'awikwok', '808cf84a706edcf0fb7f66f67ef3b067', '34234', 3, 'fsakg', 0, NULL, NULL, NULL),
(5, 'suga', '29c3ef5f55a9b7f964d14f0b242c7b9b', '432854845', 3, 'fsakdkfgkg', 0, NULL, NULL, NULL),
(6, 'awikwok', '5ca1d2f76aed859f2f4d7a50829003d7', '4324', 3, 'dasd', 0, NULL, NULL, NULL),
(7, 'awikwok', '7ce659013692824a922e0f101e7fb136', '342', 3, 'fhksda', 0, NULL, NULL, NULL),
(8, 'Awikwoko', 'fc2baa1a20b4d5190b122b383d7449fd', '342', 3, 'fsdafas', 0, NULL, NULL, NULL),
(9, 'awikwok', '0544ed93c22d5e1c869010c4515a7401', '4324', 3, 'fdsaf', 0, NULL, NULL, NULL),
(10, 'haii', '5c3568022286e4bab5b287942686b368', '63268', 3, 'fsdf', 0, NULL, NULL, NULL),
(11, 'haii', 'ee01dc93df62b72610b28cb7fab9df0c', '68969', 3, 'fdsaf', 0, NULL, NULL, NULL),
(12, 'awikwok', '0f4768a736e56a8ff3b6067caeeb85c7', '34296', 3, 'sff', 0, NULL, NULL, NULL),
(13, 'Hii', 'd2e463c7964fdc3523b0d9bb6b937c48', '424', 3, 'fdsaf', 0, NULL, NULL, NULL),
(14, 'Hii', '0911d1f883d425428fcfd5628ee3d68e', '234', 3, 'fdsaf', 0, NULL, NULL, NULL),
(15, 'hii', '0911d1f883d425428fcfd5628ee3d68e', '3213', 3, 'fhsdkafh', 0, NULL, NULL, NULL),
(16, 'hii', '9c599487aa9145bbc1031481dc0d60da', '342', 3, 'fsadf', 0, NULL, NULL, NULL),
(17, 'awikwok', '2f9618df0f4519e0c1fa4d7e8c974fab', '3432', 3, 'fsadf', 0, NULL, NULL, NULL),
(18, 'hii', '13d56fc97e3c6feb6dfb20d84f3c64cd', '3424', 3, 'fsdaf', 0, NULL, NULL, NULL),
(19, 'haii', '80355073480594a99470dcacccd8cf2c', '3123', 3, 'fdsfa', 0, NULL, NULL, NULL),
(20, 'budi', '627eb5eda2f4daffc5c5e8150f664b4b', '3213', 3, 'fsdf', 0, NULL, NULL, NULL),
(21, 'budi', '35a322a37e6fb34b2aaea6f4ed30aa7f', '23432', 3, 'fdsaf', 0, NULL, NULL, NULL),
(22, 'rewr', '4ec503be252d765ea37621a629afdaa6', '23432', 3, 'fsdaf', 0, NULL, NULL, NULL),
(23, 'gaw', '03a1a0d3ddad32e6c5d57dee72a9a833', '324', 3, 'fashld', 0, NULL, NULL, NULL),
(24, 'gaw', '038e807e75bb90bf7c8f2cc3ee754a7b', '32496', 3, 'fsdaf', 0, NULL, NULL, NULL),
(25, 'haii', '02ad6265462429afec966a5a1bdcdc19', '324', 3, 'fdsaf', 0, NULL, NULL, NULL),
(26, 'atun12312311', 'dd1a7af7000df7f16a03bfd510929054', '123213123', 3, 'awikwok', 0, NULL, NULL, NULL),
(27, 'gararetek44', '29c3ef5f55a9b7f964d14f0b242c7b9b', '3213123123', 3, 'taupik', 0, NULL, NULL, NULL),
(28, 'fsadffdsaf', 'c1daabad4e5850c37911a3c7fa548a64', '23432432', 3, 'fdsaf', 0, NULL, NULL, NULL),
(29, 'awikwok111111', '29c3ef5f55a9b7f964d14f0b242c7b9b', '085864296239', 3, 'awikwok', 0, NULL, NULL, NULL),
(30, 'mangbud123', '29c3ef5f55a9b7f964d14f0b242c7b9b', '085870472353', 3, 'mangbud', 0, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata`
--
ALTER TABLE `biodata`
  ADD PRIMARY KEY (`bio_id`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `friend`
--
ALTER TABLE `friend`
  ADD PRIMARY KEY (`frend_id`);

--
-- Indexes for table `group`
--
ALTER TABLE `group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `group_member`
--
ALTER TABLE `group_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`like_id`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`otp_id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Indexes for table `share`
--
ALTER TABLE `share`
  ADD PRIMARY KEY (`share_id`);

--
-- Indexes for table `trending`
--
ALTER TABLE `trending`
  ADD PRIMARY KEY (`trending_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata`
--
ALTER TABLE `biodata`
  MODIFY `bio_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `comment`
--
ALTER TABLE `comment`
  MODIFY `comment_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friend`
--
ALTER TABLE `friend`
  MODIFY `frend_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group`
--
ALTER TABLE `group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `group_member`
--
ALTER TABLE `group_member`
  MODIFY `member_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `like_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `otp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `share`
--
ALTER TABLE `share`
  MODIFY `share_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `trending`
--
ALTER TABLE `trending`
  MODIFY `trending_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
