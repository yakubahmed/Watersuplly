-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2020 at 02:06 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `watersupply`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_charge`
--

CREATE TABLE `tbl_charge` (
  `charge_id` int(11) NOT NULL,
  `house_id` int(11) DEFAULT NULL,
  `prev_reading` int(11) DEFAULT NULL,
  `curr_reading` int(11) DEFAULT NULL,
  `difference` int(11) DEFAULT NULL,
  `rate_id` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_city`
--

CREATE TABLE `tbl_city` (
  `city_id` int(11) NOT NULL,
  `city_name` varchar(50) DEFAULT NULL,
  `registered_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_city`
--

INSERT INTO `tbl_city` (`city_id`, `city_name`, `registered_date`) VALUES
(1, 'Mogadishu', NULL),
(4, 'Jowhar', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customer`
--

CREATE TABLE `tbl_customer` (
  `customer_id` int(11) NOT NULL,
  `customer_name` varchar(70) DEFAULT NULL,
  `city_id` int(11) DEFAULT NULL,
  `distruct_id` int(11) DEFAULT NULL,
  `zone_id` int(11) DEFAULT NULL,
  `house_id` int(11) DEFAULT NULL,
  `phone_number` int(11) DEFAULT NULL,
  `reg_date` date DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_distruct`
--

CREATE TABLE `tbl_distruct` (
  `distruct_id` int(11) NOT NULL,
  `city_id` int(11) DEFAULT NULL,
  `distruct_name` varchar(50) DEFAULT NULL,
  `registered_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_distruct`
--

INSERT INTO `tbl_distruct` (`distruct_id`, `city_id`, `distruct_name`, `registered_date`) VALUES
(3, 1, 'Heliwaaa', '2020-07-05'),
(4, 1, 'kaaram', '2020-07-06');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_group`
--

CREATE TABLE `tbl_group` (
  `group_id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_group`
--

INSERT INTO `tbl_group` (`group_id`, `name`) VALUES
(1, 'Finance'),
(2, 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_house`
--

CREATE TABLE `tbl_house` (
  `house_id` int(11) NOT NULL,
  `ref_no` varchar(255) DEFAULT NULL,
  `registered_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `menu_id` int(11) NOT NULL,
  `menu_name` varchar(50) DEFAULT NULL,
  `menu_icon` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`menu_id`, `menu_name`, `menu_icon`) VALUES
(1, 'Customer', 'user'),
(2, 'Place', 'home'),
(3, 'Finance', 'star');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_payment_method`
--

CREATE TABLE `tbl_payment_method` (
  `pay_meth_id` int(11) NOT NULL,
  `Name` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `registered_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_previlage`
--

CREATE TABLE `tbl_previlage` (
  `prev_id` int(11) NOT NULL,
  `group_id` int(11) DEFAULT NULL,
  `sub_menu_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_previlage`
--

INSERT INTO `tbl_previlage` (`prev_id`, `group_id`, `sub_menu_id`) VALUES
(1, 2, 1),
(2, 2, 2),
(3, 2, 5),
(4, 2, 6),
(5, 2, 7),
(6, 2, 8),
(7, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rate`
--

CREATE TABLE `tbl_rate` (
  `rate_id` int(11) NOT NULL,
  `rate_num` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  `registered_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_reciept`
--

CREATE TABLE `tbl_reciept` (
  `billing_id` int(11) NOT NULL,
  `house_id` int(11) DEFAULT NULL,
  `amount` decimal(18,2) DEFAULT NULL,
  `remaining` int(11) DEFAULT NULL,
  `pay_meth_id` int(11) DEFAULT NULL,
  `phoneNumber` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_sub_menu`
--

CREATE TABLE `tbl_sub_menu` (
  `sub_menu_id` int(11) NOT NULL,
  `menu_id` int(11) DEFAULT NULL,
  `sub_menu_name` varchar(50) DEFAULT NULL,
  `url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_sub_menu`
--

INSERT INTO `tbl_sub_menu` (`sub_menu_id`, `menu_id`, `sub_menu_name`, `url`) VALUES
(1, 1, 'Add', '../customer/add'),
(2, 1, 'Manage', '../customer/manage'),
(5, 2, 'City', '../place/city'),
(6, 2, 'distruct', '../place/distruct'),
(7, 2, 'zone', '../place/zone'),
(8, 3, 'Charge', '../finance/charge'),
(9, 3, 'Receipt', '../finance/receipt');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL,
  `fullname` varchar(50) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `email_address` varchar(50) DEFAULT NULL,
  `profile_pic` varchar(100) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `fullname`, `gender`, `email_address`, `profile_pic`, `password`, `group_id`, `status`) VALUES
(1, 'Yakub Ahmed', 'Male', 'yaaqa91@gmail.com', 'Yakub.jpg', 'Yakub@2019', 2, 'active');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_zone`
--

CREATE TABLE `tbl_zone` (
  `zone_id` int(11) NOT NULL,
  `distruct_id` int(11) DEFAULT NULL,
  `zone_name` varchar(50) DEFAULT NULL,
  `registered_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_zone`
--

INSERT INTO `tbl_zone` (`zone_id`, `distruct_id`, `zone_name`, `registered_date`) VALUES
(1, 3, 'guuled', NULL),
(3, 4, 'Al cadaala', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_distruct`
-- (See below for the actual view)
--
CREATE TABLE `view_distruct` (
`distruct_id` int(11)
,`city_name` varchar(50)
,`distruct_name` varchar(50)
,`registered_date` date
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `view_zone`
-- (See below for the actual view)
--
CREATE TABLE `view_zone` (
`zone_id` int(11)
,`distruct_name` varchar(50)
,`distruct_id` int(11)
,`zone_name` varchar(50)
,`registered_date` date
);

-- --------------------------------------------------------

--
-- Structure for view `view_distruct`
--
DROP TABLE IF EXISTS `view_distruct`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_distruct`  AS  select `d`.`distruct_id` AS `distruct_id`,`c`.`city_name` AS `city_name`,`d`.`distruct_name` AS `distruct_name`,`d`.`registered_date` AS `registered_date` from (`tbl_distruct` `d` join `tbl_city` `c` on(`d`.`city_id` = `c`.`city_id`)) ;

-- --------------------------------------------------------

--
-- Structure for view `view_zone`
--
DROP TABLE IF EXISTS `view_zone`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `view_zone`  AS  select `tbl_zone`.`zone_id` AS `zone_id`,`tbl_distruct`.`distruct_name` AS `distruct_name`,`tbl_distruct`.`distruct_id` AS `distruct_id`,`tbl_zone`.`zone_name` AS `zone_name`,`tbl_zone`.`registered_date` AS `registered_date` from (`tbl_zone` join `tbl_distruct`) where `tbl_zone`.`distruct_id` = `tbl_distruct`.`distruct_id` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_charge`
--
ALTER TABLE `tbl_charge`
  ADD PRIMARY KEY (`charge_id`),
  ADD KEY `house_id` (`house_id`),
  ADD KEY `rate_id` (`rate_id`);

--
-- Indexes for table `tbl_city`
--
ALTER TABLE `tbl_city`
  ADD PRIMARY KEY (`city_id`);

--
-- Indexes for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD PRIMARY KEY (`customer_id`),
  ADD KEY `city_id` (`city_id`),
  ADD KEY `distruct_id` (`distruct_id`),
  ADD KEY `zone_id` (`zone_id`),
  ADD KEY `house_id` (`house_id`);

--
-- Indexes for table `tbl_distruct`
--
ALTER TABLE `tbl_distruct`
  ADD PRIMARY KEY (`distruct_id`),
  ADD KEY `tbl_distruct_ibfk_1` (`city_id`);

--
-- Indexes for table `tbl_group`
--
ALTER TABLE `tbl_group`
  ADD PRIMARY KEY (`group_id`);

--
-- Indexes for table `tbl_house`
--
ALTER TABLE `tbl_house`
  ADD PRIMARY KEY (`house_id`);

--
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`menu_id`);

--
-- Indexes for table `tbl_payment_method`
--
ALTER TABLE `tbl_payment_method`
  ADD PRIMARY KEY (`pay_meth_id`);

--
-- Indexes for table `tbl_previlage`
--
ALTER TABLE `tbl_previlage`
  ADD PRIMARY KEY (`prev_id`),
  ADD KEY `group_id` (`group_id`),
  ADD KEY `sub_menu_id` (`sub_menu_id`);

--
-- Indexes for table `tbl_rate`
--
ALTER TABLE `tbl_rate`
  ADD PRIMARY KEY (`rate_id`);

--
-- Indexes for table `tbl_reciept`
--
ALTER TABLE `tbl_reciept`
  ADD PRIMARY KEY (`billing_id`),
  ADD KEY `house_id` (`house_id`);

--
-- Indexes for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
  ADD PRIMARY KEY (`sub_menu_id`),
  ADD KEY `menu_id` (`menu_id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `group_id` (`group_id`);

--
-- Indexes for table `tbl_zone`
--
ALTER TABLE `tbl_zone`
  ADD PRIMARY KEY (`zone_id`),
  ADD KEY `distruct_id` (`distruct_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_charge`
--
ALTER TABLE `tbl_charge`
  MODIFY `charge_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_city`
--
ALTER TABLE `tbl_city`
  MODIFY `city_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_distruct`
--
ALTER TABLE `tbl_distruct`
  MODIFY `distruct_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_group`
--
ALTER TABLE `tbl_group`
  MODIFY `group_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_house`
--
ALTER TABLE `tbl_house`
  MODIFY `house_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_payment_method`
--
ALTER TABLE `tbl_payment_method`
  MODIFY `pay_meth_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_previlage`
--
ALTER TABLE `tbl_previlage`
  MODIFY `prev_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_rate`
--
ALTER TABLE `tbl_rate`
  MODIFY `rate_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_reciept`
--
ALTER TABLE `tbl_reciept`
  MODIFY `billing_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
  MODIFY `sub_menu_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_zone`
--
ALTER TABLE `tbl_zone`
  MODIFY `zone_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_charge`
--
ALTER TABLE `tbl_charge`
  ADD CONSTRAINT `tbl_charge_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `tbl_house` (`house_id`),
  ADD CONSTRAINT `tbl_charge_ibfk_2` FOREIGN KEY (`rate_id`) REFERENCES `tbl_rate` (`rate_id`);

--
-- Constraints for table `tbl_customer`
--
ALTER TABLE `tbl_customer`
  ADD CONSTRAINT `tbl_customer_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`),
  ADD CONSTRAINT `tbl_customer_ibfk_2` FOREIGN KEY (`distruct_id`) REFERENCES `tbl_distruct` (`distruct_id`),
  ADD CONSTRAINT `tbl_customer_ibfk_3` FOREIGN KEY (`zone_id`) REFERENCES `tbl_zone` (`zone_id`),
  ADD CONSTRAINT `tbl_customer_ibfk_4` FOREIGN KEY (`house_id`) REFERENCES `tbl_house` (`house_id`);

--
-- Constraints for table `tbl_distruct`
--
ALTER TABLE `tbl_distruct`
  ADD CONSTRAINT `tbl_distruct_ibfk_1` FOREIGN KEY (`city_id`) REFERENCES `tbl_city` (`city_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_previlage`
--
ALTER TABLE `tbl_previlage`
  ADD CONSTRAINT `tbl_previlage_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `tbl_group` (`group_id`),
  ADD CONSTRAINT `tbl_previlage_ibfk_2` FOREIGN KEY (`sub_menu_id`) REFERENCES `tbl_sub_menu` (`sub_menu_id`);

--
-- Constraints for table `tbl_reciept`
--
ALTER TABLE `tbl_reciept`
  ADD CONSTRAINT `tbl_reciept_ibfk_1` FOREIGN KEY (`house_id`) REFERENCES `tbl_house` (`house_id`);

--
-- Constraints for table `tbl_sub_menu`
--
ALTER TABLE `tbl_sub_menu`
  ADD CONSTRAINT `tbl_sub_menu_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `tbl_menu` (`menu_id`);

--
-- Constraints for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD CONSTRAINT `tbl_user_ibfk_1` FOREIGN KEY (`group_id`) REFERENCES `tbl_group` (`group_id`);

--
-- Constraints for table `tbl_zone`
--
ALTER TABLE `tbl_zone`
  ADD CONSTRAINT `tbl_zone_ibfk_1` FOREIGN KEY (`distruct_id`) REFERENCES `tbl_distruct` (`distruct_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
