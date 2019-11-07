-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2019 at 08:49 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `quiz`
--

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` int(11) NOT NULL,
  `question` varchar(5000) NOT NULL,
  `option_a` varchar(100) NOT NULL,
  `option_b` varchar(100) NOT NULL,
  `option_c` varchar(100) NOT NULL,
  `option_d` varchar(100) NOT NULL,
  `correct_ans` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `question`, `option_a`, `option_b`, `option_c`, `option_d`, `correct_ans`) VALUES
(1, 'In addition and subtraction of two integers , sign of the answer depends upon', 'Smaller number', 'Their difference', 'Their sum', 'Greater numerical value', 'Greater numerical value'),
(2, 'Sum of two negative number is always', 'Positive', 'Negative', '0', '1', 'Negative'),
(3, 'Sum of two Positive number is always', 'Negative', 'Positive', '1', '0', 'Positive'),
(4, 'Sum of -36 and 29 is', '-65', '65', '-7', '7', '-7'),
(5, 'Sum of -19 and -21 is', '-40', '40', '2', '-2', '-40\r\n'),
(6, 'Which of the following statement is false?', '-7 + (-6 ) = -13', '-5 + 1 = 4', '2 + (-1 ) = 1', '8 + (-9 ) = -1', '-5 + 1 = 4'),
(7, 'The pair of integers whose sum is -5', '1,-4', '-1,6', '-3,-2', '5,0', '-3,-2'),
(8, 'What integers or number should be added to -5 to get 4', '1', '-1', '9', '-9', '9'),
(9, 'What will be the additive inverse of -5', '-6', '-4', '3', '5', '5'),
(10, 'What will be the additive inverse of 7', '-7', '-6', '-5', '-4', '-7'),
(11, 'Predecessor of -9 is', '-8', '8', '-10', '10', '-10'),
(12, 'Successor of -1 is', '-2', '0', '1', '2', '0'),
(13, 'The value of 6 -(-3 ) is', '3', '-9', '-3', '9', '9'),
(14, 'The value of 26-30 is equal to', '4\r\n', '-4', '-56', '56', '-4'),
(15, 'Which of the following statement is true', '7-4=4-7', '7-4>4-7', '7-4<4-7', '7-4=-3', '7-4>4-7'),
(16, 'Choose appropriate number for blank: -7-( __ ) = 2', '5', '-5', '9', '-9', '9\r\n'),
(17, 'Multiplication of 3 and -4', '-7', '12', '-12', '7', '-12'),
(18, 'Multiplication of -2 , -7 and -10 gives', '-34', '19', '-140', '90', '-140'),
(19, 'Multiplication of 2 , -5 and 0 gives', '10', '0', '-10', '7', '0'),
(20, 'Identify the property used in the following: 2x13 + 8x13 = ( 2+8 )x13', 'Commutative', 'Closure', 'Associative', 'Distributive', 'Distributive');

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `correct_question` int(11) NOT NULL,
  `incorrect_question` int(11) NOT NULL,
  `score` int(11) NOT NULL,
  `remark` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reports`
--

INSERT INTO `reports` (`id`, `user_id`, `correct_question`, `incorrect_question`, `score`, `remark`) VALUES
(1, 2, 6, 14, 6, 'You need to work hard. Your score is low , Please concentrate on your studies.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'kartik chauhan', 'kartik_admin@anlics', '7c222fb2927d828af22f592134e8932480637c0d'),
(2, 'kartik chauhan', 'kartikchauhan100@gmail.com', '7c222fb2927d828af22f592134e8932480637c0d'),
(3, 'kartik chauhan', 'kartikchauhan100@gmail.com', '12345678'),
(4, 'kartik chauhan', 'kartik_writer@anlics', '7c222fb2927d828af22f592134e8932480637c0d');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
