-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 25, 2021 at 07:10 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3d_bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(6) NOT NULL,
  `ewallet` varchar(122) COLLATE utf8_unicode_ci NOT NULL,
  `bwallet` varchar(122) COLLATE utf8_unicode_ci NOT NULL,
  `bname` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `acctname` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `acctno` varchar(111) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(200) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `ewallet`, `bwallet`, `bname`, `acctname`, `acctno`, `email`, `password`) VALUES
(1, '999999999999', '', 'first', 'hhjjhkjjkjj', '345678908765', 'admin@yourdomain.com', 'admin123');

-- --------------------------------------------------------

--
-- Table structure for table `adminmessage`
--

CREATE TABLE `adminmessage` (
  `id` int(100) NOT NULL,
  `account` int(100) NOT NULL,
  `message` longtext NOT NULL,
  `status` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `msgid` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `btc`
--

CREATE TABLE `btc` (
  `id` int(11) NOT NULL,
  `btc` double NOT NULL,
  `usd` double NOT NULL,
  `btctnx` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(45) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(45) NOT NULL,
  `tnxid` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `btc`
--

INSERT INTO `btc` (`id`, `btc`, `usd`, `btctnx`, `email`, `status`, `tnxid`, `date`) VALUES
(28, 2.6347808995247384, 50000, 'dfhtrjutkyl', 'demo@scriptsdemo.website', 1, 'tnx5fca453179104', '2020-12-04 14:18:25');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(10) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `account` int(200) NOT NULL,
  `complain` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `account`, `complain`) VALUES
(2, 'Rathod', 'rathoddilip285@gmail.com', 2147483647, 'Case'),
(3, 'Devine', 'admin@yourdomain.com', 2147483647, 'Testing'),
(4, 'MARK CAGE', 'doryolotewo@gmail.com', 2147483647, ''),
(5, '', '', 0, ''),
(6, 'FASUYI BABATUNDE VICTOR', 'fasuyiwebhost@gmail.com', 2147483647, ''),
(7, 'Pankaj Kumar', 'pankajkumarpgi01@gmail.com', 2147483647, 'Please close my account'),
(8, 'zane grant', 'legrandezane591@gmail.com', 2147483647, 'please can u make me a full account with max funds please of the full working version please i need your help also to make shaw a transfer and deposit goes in please or can u help me get it to work please i need your help mate god bless thank u ');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `id` int(11) NOT NULL,
  `account` int(100) NOT NULL,
  `date` varchar(20) NOT NULL,
  `name` varchar(200) NOT NULL,
  `amount` int(200) NOT NULL,
  `duration` varchar(200) NOT NULL,
  `reason` varchar(200) NOT NULL,
  `loanid` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` int(19) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`id`, `account`, `date`, `name`, `amount`, `duration`, `reason`, `loanid`, `email`, `status`) VALUES
(54, 2147483647, '02-28-21', 'FASUYI BABATUNDE VICTOR', 4000000, '1year', 'personal', '9cB1MM0gAs', 'fasuyiwebhost@gmail.com', 1),
(64, 2147483647, '03-17-21', 'Harrison Wilfred', 2147483647, '1week', '', 'M9e19CgRD)', 'weme0125@gmail.com', 0),
(65, 2147483647, '03-17-21', 'Harrison Wilfred', 2147483647, '1week', '', 'c)N89bc7[>', 'weme0125@gmail.com', 0),
(67, 2147483647, '03-26-21', 'Seatbooking', 800000, '1week', 'demo', 'Ns6B|Pbdgf', 'pankajkumarpgi01@gmail.com', 1),
(69, 2147483647, '04-08-21', 'MR ZANE.M.GRANT', 50, '1week', 'world vision', '1gj}A3W)hT', 'admin@yourdomain.com', 1),
(70, 2147483647, '04-08-21', 'zane murray grant', 0, '3months', 'oil mine investments ', '7Ss|DTT{)X', 'admin@yourdomain.com', 1),
(71, 2147483647, '04-08-21', 'Robert Owor', 300, '2weeks', 'pay blls', 'd/8CMhhN3g', 'admin@yourdomain.com', 1),
(72, 2147483647, '04-12-21', '', 0, '3months', '', 'gPjWs)hZcS', 'admin@yourdomain.com', 1),
(73, 2147483647, '04-12-21', 'dtgdsgdfd', 100000, '1year', 'test', '16t]5h)[b5', 'admin@yourdomain.com', 1),
(74, 2147483647, '04-14-21', 'Qudus', 200000, '3months', 'Dope king', '9shetbMNRs', 'admin@yourdomain.com', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `ip` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `ua` varchar(255) NOT NULL,
  `tm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `md`
--

CREATE TABLE `md` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `account` varchar(200) NOT NULL,
  `cheque` varchar(200) NOT NULL,
  `cid` varchar(200) NOT NULL,
  `status` int(200) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md`
--

INSERT INTO `md` (`id`, `email`, `account`, `cheque`, `cid`, `status`, `date`) VALUES
(49, 'admin@yourdomain.com', '9694707078', '', '021G7GJ9DH', 0, '2021-04-20 03:11:17'),
(43, 'admin@yourdomain.com', '9694707078', '', 'J67H43DSJ9', 1, '2021-03-27 02:21:41'),
(44, 'admin@yourdomain.com', '9694707078', '', 'G76Y052GSS', 1, '2021-04-06 22:44:39'),
(46, 'admin@yourdomain.com', '9694707078', '', '2G5HHJ9G0Y', 1, '2021-04-08 19:29:19'),
(47, 'admin@yourdomain.com', '9694707078', '', '6JH1HGSH85', 1, '2021-04-08 19:58:36'),
(48, 'admin@yourdomain.com', '9694707078', '3d_Bank Demo.html', 'HJHJJ5HGH9', 1, '2021-04-08 19:59:10');

-- --------------------------------------------------------

--
-- Table structure for table `messageadmin`
--

CREATE TABLE `messageadmin` (
  `id` int(100) NOT NULL,
  `account` varchar(100) NOT NULL,
  `message` longtext NOT NULL,
  `reply` longtext NOT NULL,
  `msgid` varchar(199) NOT NULL,
  `status` int(10) NOT NULL,
  `astatus` int(23) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `messageadmin`
--

INSERT INTO `messageadmin` (`id`, `account`, `message`, `reply`, `msgid`, `status`, `astatus`, `date`) VALUES
(18, '9694707078', 'bullshit', 'how', 'g2e7h9ehVX', 0, 1, '2021-04-25 15:15:12'),
(19, '8778897225', 'yeah', 'xup', 'VMdyhADMs', 0, 1, '2021-04-25 15:25:06');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `email` varchar(200) NOT NULL,
  `message` longtext NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `email`, `message`) VALUES
(1, 'admin@scriptsdemo.website\r\n', 'No news to display');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(200) NOT NULL,
  `sname` varchar(200) NOT NULL,
  `apipr` varchar(200) NOT NULL,
  `apipu` varchar(200) NOT NULL,
  `currency` varchar(200) NOT NULL,
  `branch` varchar(200) NOT NULL,
  `bname` varchar(200) NOT NULL,
  `baddress` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(200) NOT NULL,
  `title` varchar(200) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `charges` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `sname`, `apipr`, `apipu`, `currency`, `branch`, `bname`, `baddress`, `email`, `phone`, `title`, `logo`, `charges`) VALUES
(2, 'yourdomain.com', '', '', '$', '', 'Not A Bank', '', 'support@yourdomain.com', '+1234567899876', 'Welcome to Not A Bank', 'logo@2x.png', '20');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_transaction`
--

CREATE TABLE `tbl_transaction` (
  `id` int(10) NOT NULL,
  `tx_no` varchar(20) NOT NULL,
  `tx_type` varchar(10) NOT NULL,
  `amount` double NOT NULL,
  `date` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  `to_accno` varchar(20) NOT NULL,
  `account` varchar(100) NOT NULL,
  `status` varchar(10) NOT NULL,
  `comments` varchar(200) NOT NULL,
  `charges` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_transaction`
--

INSERT INTO `tbl_transaction` (`id`, `tx_no`, `tx_type`, `amount`, `date`, `description`, `to_accno`, `account`, `status`, `comments`, `charges`) VALUES
(671, '02435798', 'credit', 2222, '2021/03/22', 'Test', '', '5427034850', 'SUCCESS', 'Test', 0),
(672, '17395648', 'credit', 50000, '2021/03/22', '', '', '6095971253', 'SUCCESS', '', 0),
(673, '49007688', 'debit', 1000000, '2021/03/23', '', '87379829890910', '9694707078', 'SUCCESS', 'contract', 0),
(674, '94907708', 'debit', 200, '2021/03/24', '', '43212345654', '9694707078', 'SUCCESS', 'hi', 0),
(675, '94838040', 'debit', 1000, '2021/03/24', '', 'to to', '9694707078', 'SUCCESS', 'hi', 0),
(676, '80390520', 'debit', 60, '2021/03/24', '', 'gooop', '9694707078', 'SUCCESS', 'kko hjhhuj i', 0),
(677, '09496373', 'debit', 47750, '2021/03/24', '', '', '9694707078', 'SUCCESS', '', 0),
(678, '62473850', 'credit', 100000, '2021/03/24', '', '', '3230733699', 'SUCCESS', '', 0),
(679, '34750912', 'credit', 5555, '2021/03/26', 'YGVVYIIO', '', '5321775802', 'SUCCESS', 'YGVVYIIO', 0),
(680, '84176352', 'credit', 800000, '2021/03/26', 'loan payment', '', '5321775802', 'success', 'loan payment', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(10) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `pwd` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `is_mobile` tinyint(4) NOT NULL,
  `mobile_hash` text NOT NULL,
  `utype` varchar(10) NOT NULL,
  `pics` varchar(200) NOT NULL,
  `bdate` varchar(100) NOT NULL,
  `acctno` double NOT NULL,
  `active` tinyint(4) NOT NULL,
  `status` tinyint(4) NOT NULL,
  `pin` int(20) NOT NULL,
  `session` tinyint(4) NOT NULL,
  `balance` int(200) NOT NULL,
  `address` varchar(100) NOT NULL,
  `city` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `zipcode` varchar(100) NOT NULL,
  `notification` tinyint(4) NOT NULL,
  `nbalance` double NOT NULL,
  `inbalance` double NOT NULL,
  `bname` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  `ipn` int(100) NOT NULL,
  `imf` int(100) NOT NULL,
  `cot` int(100) NOT NULL,
  `ssn` varchar(100) NOT NULL,
  `rtn` varchar(200) NOT NULL,
  `ip` varchar(100) NOT NULL,
  `acone` tinyint(4) NOT NULL,
  `actwo` tinyint(4) NOT NULL,
  `acthree` tinyint(4) NOT NULL,
  `rdate` timestamp NOT NULL DEFAULT current_timestamp(),
  `otp_hash` varchar(100) NOT NULL,
  `card` varchar(200) NOT NULL,
  `cardt` varchar(200) NOT NULL,
  `month` int(200) NOT NULL,
  `csv` int(100) NOT NULL,
  `carddate` timestamp NOT NULL DEFAULT current_timestamp(),
  `sstatus` int(11) NOT NULL,
  `yr` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `fname`, `lname`, `pwd`, `email`, `phone`, `gender`, `is_mobile`, `mobile_hash`, `utype`, `pics`, `bdate`, `acctno`, `active`, `status`, `pin`, `session`, `balance`, `address`, `city`, `state`, `zipcode`, `notification`, `nbalance`, `inbalance`, `bname`, `country`, `ipn`, `imf`, `cot`, `ssn`, `rtn`, `ip`, `acone`, `actwo`, `acthree`, `rdate`, `otp_hash`, `card`, `cardt`, `month`, `csv`, `carddate`, `sstatus`, `yr`) VALUES
(266, 'Trial', 'Account', '12345678', 'admin@yourdomain.com', '07060678899', 'Male', 0, '', 'Savings Ac', 'Emma.jpg', '08-17-1998', 9694707078, 1, 1, 1111, 0, 17544348, '234 street, saint louis street', 'lagos', 'lagos', '234', 0, 0, 0, 'Bank Name', 'Nigeria', 858, 3298, 1760, '2355d34r', '34543466544', '', 1, 0, 0, '2021-01-04 13:55:59', ' ', '2987070723908803', 'Credit Master Card', 12, 9006, '2021-01-04 13:55:59', 1, 24);

-- --------------------------------------------------------

--
-- Table structure for table `ticket_main`
--

CREATE TABLE `ticket_main` (
  `id` int(11) NOT NULL,
  `tid` varchar(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `btext` blob DEFAULT NULL,
  `tm` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ticket_reply`
--

CREATE TABLE `ticket_reply` (
  `id` int(11) NOT NULL,
  `tid` varchar(255) NOT NULL,
  `btext` blob DEFAULT NULL,
  `tm` varchar(255) NOT NULL,
  `typ` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `adminmessage`
--
ALTER TABLE `adminmessage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `btc`
--
ALTER TABLE `btc`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `md`
--
ALTER TABLE `md`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messageadmin`
--
ALTER TABLE `messageadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_main`
--
ALTER TABLE `ticket_main`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket_reply`
--
ALTER TABLE `ticket_reply`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `adminmessage`
--
ALTER TABLE `adminmessage`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `btc`
--
ALTER TABLE `btc`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `loan`
--
ALTER TABLE `loan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `md`
--
ALTER TABLE `md`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `messageadmin`
--
ALTER TABLE `messageadmin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_transaction`
--
ALTER TABLE `tbl_transaction`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=744;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=357;

--
-- AUTO_INCREMENT for table `ticket_main`
--
ALTER TABLE `ticket_main`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ticket_reply`
--
ALTER TABLE `ticket_reply`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
