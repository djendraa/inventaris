-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 27, 2020 at 05:37 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rumahinternet`
--

-- --------------------------------------------------------

--
-- Table structure for table `client`
--

CREATE TABLE `client` (
  `id` bigint(20) NOT NULL,
  `clientname` varchar(25) DEFAULT NULL,
  `address` varchar(200) DEFAULT NULL,
  `contact` varchar(15) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `client`
--

INSERT INTO `client` (`id`, `clientname`, `address`, `contact`, `created_at`, `updated_at`) VALUES
(1, 'Djendra', 'Jl. Sultan Hasanudin No. 126D RT03/02', '089643797334', '2020-07-10 13:30:33', NULL),
(2, 'Wisnu', 'Jl. Sultan Hasanudin', '08990099099', '2020-07-10 13:30:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `instalation`
--

CREATE TABLE `instalation` (
  `id` bigint(20) NOT NULL,
  `instalation` varchar(25) DEFAULT NULL,
  `client_id` bigint(20) DEFAULT NULL,
  `package_id` bigint(20) DEFAULT NULL,
  `support_id` bigint(20) DEFAULT NULL,
  `storage_id` bigint(20) DEFAULT NULL,
  `statusinstalation_id` bigint(20) DEFAULT NULL,
  `itemstatus_id` bigint(20) DEFAULT NULL,
  `qty` int(11) NOT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instalation`
--

INSERT INTO `instalation` (`id`, `instalation`, `client_id`, `package_id`, `support_id`, `storage_id`, `statusinstalation_id`, `itemstatus_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 'Pemasangan', 1, 2, 2, 1, 1, 1, 1, '2020-07-15 14:38:41', '2020-07-27 10:11:19');

-- --------------------------------------------------------

--
-- Table structure for table `item`
--

CREATE TABLE `item` (
  `id` bigint(20) NOT NULL,
  `item` varchar(25) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `item`
--

INSERT INTO `item` (`id`, `item`, `created_at`, `updated_at`) VALUES
(1, 'RB750', '2020-07-15 10:44:14', NULL),
(2, 'Totolink-S808 (8Port)', '2020-07-15 11:04:04', NULL),
(3, 'Totolink-N100RE', '2020-07-15 11:04:04', NULL),
(4, 'Konektor RJ-45', '2020-07-15 11:05:38', NULL),
(5, 'Cable LAN Indoor', '2020-07-15 11:05:38', NULL),
(6, 'Cable LAN Outdoor', '2020-07-15 11:05:38', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `itemstatus`
--

CREATE TABLE `itemstatus` (
  `id` bigint(20) NOT NULL,
  `itemstatus` varchar(25) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `itemstatus`
--

INSERT INTO `itemstatus` (`id`, `itemstatus`, `created_at`, `updated_at`) VALUES
(1, 'Terpakai', '2020-07-15 11:15:43', '2020-07-15 14:17:23'),
(2, 'Rusak', '2020-07-15 11:15:43', NULL),
(3, 'Hilang', '2020-07-15 11:15:43', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) NOT NULL,
  `orders` varchar(25) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `orders`, `created_at`, `updated_at`) VALUES
(1, 'Online', '2020-07-15 14:24:55', NULL),
(2, 'Offline', '2020-07-15 14:24:55', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` bigint(20) NOT NULL,
  `package` varchar(25) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`id`, `package`, `created_at`, `updated_at`) VALUES
(1, '5mpbs', '2020-07-15 14:36:41', NULL),
(2, '8mbps', '2020-07-15 14:36:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `purchase`
--

CREATE TABLE `purchase` (
  `id` bigint(20) NOT NULL,
  `purchase` varchar(25) DEFAULT NULL,
  `orders_id` bigint(20) NOT NULL,
  `store` varchar(200) DEFAULT NULL,
  `item_id` bigint(20) DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `requests_id` bigint(20) DEFAULT NULL,
  `statusrequests_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `purchase`
--

INSERT INTO `purchase` (`id`, `purchase`, `orders_id`, `store`, `item_id`, `price`, `qty`, `requests_id`, `statusrequests_id`, `created_at`, `updated_at`) VALUES
(1, 'Pembelian Totolink N100RE', 1, 'https://www.tokopedia.com', 3, 150000, 10, 1, 1, '2020-07-15 14:28:05', '2020-07-22 10:43:15');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` bigint(20) NOT NULL,
  `requests` varchar(25) DEFAULT NULL,
  `item_id` bigint(20) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `support_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `requests`, `item_id`, `qty`, `support_id`, `created_at`, `updated_at`) VALUES
(1, 'Barang Habis', 3, 10, 2, '2020-07-15 11:23:56', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statusinstalation`
--

CREATE TABLE `statusinstalation` (
  `id` bigint(20) NOT NULL,
  `statusinstalation` varchar(15) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statusinstalation`
--

INSERT INTO `statusinstalation` (`id`, `statusinstalation`, `created_at`, `updated_at`) VALUES
(1, 'Pending', '2020-07-15 14:36:14', NULL),
(2, 'Terpasang', '2020-07-15 14:36:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `statusrequests`
--

CREATE TABLE `statusrequests` (
  `id` bigint(20) NOT NULL,
  `statusrequests` varchar(25) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `statusrequests`
--

INSERT INTO `statusrequests` (`id`, `statusrequests`, `created_at`, `updated_at`) VALUES
(1, 'Di Ajukan', '2020-07-15 14:19:15', NULL),
(2, 'Di Aprrove', '2020-07-15 14:19:15', NULL),
(3, 'Di Cancel', '2020-07-15 14:19:15', '2020-07-15 14:19:59'),
(4, 'Di Beli', '2020-07-15 14:19:15', '2020-07-15 14:20:09'),
(5, 'Barang Sudah Datang', '2020-07-15 14:20:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `storage`
--

CREATE TABLE `storage` (
  `id` bigint(20) NOT NULL,
  `storage` varchar(30) NOT NULL,
  `item_id` bigint(20) DEFAULT NULL,
  `tipestorage_id` bigint(20) DEFAULT NULL,
  `purchase_id` bigint(20) DEFAULT NULL,
  `qty` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `storage`
--

INSERT INTO `storage` (`id`, `storage`, `item_id`, `tipestorage_id`, `purchase_id`, `qty`, `created_at`, `updated_at`) VALUES
(1, 'Stok Totolink-N100RE', 3, 1, 1, 10, '2020-07-15 14:35:15', '2020-07-27 10:09:05');

-- --------------------------------------------------------

--
-- Table structure for table `support`
--

CREATE TABLE `support` (
  `id` bigint(20) NOT NULL,
  `support` varchar(25) DEFAULT NULL,
  `user_id` bigint(20) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `support`
--

INSERT INTO `support` (`id`, `support`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Adhitya', 1, '2020-07-15 10:16:41', NULL),
(2, 'Adit', 2, '2020-07-15 10:16:41', NULL),
(3, 'Deden', 2, '2020-07-15 10:16:53', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipestorage`
--

CREATE TABLE `tipestorage` (
  `id` bigint(20) NOT NULL,
  `tipestorage` varchar(25) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipestorage`
--

INSERT INTO `tipestorage` (`id`, `tipestorage`, `created_at`, `updated_at`) VALUES
(1, 'Stok', '2020-07-15 09:59:59', NULL),
(2, 'Backup', '2020-07-15 09:59:59', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tipeuser`
--

CREATE TABLE `tipeuser` (
  `id` bigint(20) NOT NULL,
  `tipeuser` varchar(10) DEFAULT NULL,
  `created_at` datetime DEFAULT current_timestamp(),
  `updated_at` datetime DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tipeuser`
--

INSERT INTO `tipeuser` (`id`, `tipeuser`, `created_at`, `updated_at`) VALUES
(1, 'Super Admi', '2020-07-15 09:54:52', NULL),
(2, 'Admin', '2020-07-15 09:54:52', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `instalation`
--
ALTER TABLE `instalation`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_instalation_client_id` (`client_id`),
  ADD KEY `FK_instalation_support_id` (`support_id`),
  ADD KEY `FK_instalation_storage_id` (`storage_id`),
  ADD KEY `FK_instalation_statusinstalation_id` (`statusinstalation_id`),
  ADD KEY `FK_instalation_package_id` (`package_id`),
  ADD KEY `FK_instalation_itemstatus_id` (`itemstatus_id`);

--
-- Indexes for table `item`
--
ALTER TABLE `item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `itemstatus`
--
ALTER TABLE `itemstatus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `purchase`
--
ALTER TABLE `purchase`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_purchase_item_id` (`item_id`),
  ADD KEY `FK_purchase_requests_id` (`requests_id`),
  ADD KEY `FK_purchase_statusrequests_id` (`statusrequests_id`),
  ADD KEY `FK_purchase_orders_id` (`orders_id`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_requests_support_id` (`support_id`),
  ADD KEY `FK_request_item_id` (`item_id`);

--
-- Indexes for table `statusinstalation`
--
ALTER TABLE `statusinstalation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `statusrequests`
--
ALTER TABLE `statusrequests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `storage`
--
ALTER TABLE `storage`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_storage_purchase_id` (`purchase_id`),
  ADD KEY `FK_storage_tipestorage_id` (`tipestorage_id`),
  ADD KEY `FK_storage_item_id` (`item_id`);

--
-- Indexes for table `support`
--
ALTER TABLE `support`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_support_user_id` (`user_id`);

--
-- Indexes for table `tipestorage`
--
ALTER TABLE `tipestorage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tipeuser`
--
ALTER TABLE `tipeuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `client`
--
ALTER TABLE `client`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `instalation`
--
ALTER TABLE `instalation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `item`
--
ALTER TABLE `item`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `itemstatus`
--
ALTER TABLE `itemstatus`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `purchase`
--
ALTER TABLE `purchase`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `statusinstalation`
--
ALTER TABLE `statusinstalation`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `statusrequests`
--
ALTER TABLE `statusrequests`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `storage`
--
ALTER TABLE `storage`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `support`
--
ALTER TABLE `support`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tipestorage`
--
ALTER TABLE `tipestorage`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tipeuser`
--
ALTER TABLE `tipeuser`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `instalation`
--
ALTER TABLE `instalation`
  ADD CONSTRAINT `FK_instalation_client_id` FOREIGN KEY (`client_id`) REFERENCES `client` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_instalation_itemstatus_id` FOREIGN KEY (`itemstatus_id`) REFERENCES `itemstatus` (`id`),
  ADD CONSTRAINT `FK_instalation_package_id` FOREIGN KEY (`package_id`) REFERENCES `package` (`id`),
  ADD CONSTRAINT `FK_instalation_statusinstalation_id` FOREIGN KEY (`statusinstalation_id`) REFERENCES `statusinstalation` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_instalation_storage_id` FOREIGN KEY (`storage_id`) REFERENCES `storage` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_instalation_support_id` FOREIGN KEY (`support_id`) REFERENCES `support` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `purchase`
--
ALTER TABLE `purchase`
  ADD CONSTRAINT `FK_purchase_item_id` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `FK_purchase_orders_id` FOREIGN KEY (`orders_id`) REFERENCES `orders` (`id`),
  ADD CONSTRAINT `FK_purchase_requests_id` FOREIGN KEY (`requests_id`) REFERENCES `requests` (`id`),
  ADD CONSTRAINT `FK_purchase_statusrequests_id` FOREIGN KEY (`statusrequests_id`) REFERENCES `statusrequests` (`id`);

--
-- Constraints for table `requests`
--
ALTER TABLE `requests`
  ADD CONSTRAINT `FK_request_item_id` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `FK_requests_support_id` FOREIGN KEY (`support_id`) REFERENCES `support` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `storage`
--
ALTER TABLE `storage`
  ADD CONSTRAINT `FK_storage_item_id` FOREIGN KEY (`item_id`) REFERENCES `item` (`id`),
  ADD CONSTRAINT `FK_storage_purchase_id` FOREIGN KEY (`purchase_id`) REFERENCES `purchase` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `FK_storage_tipestorage_id` FOREIGN KEY (`tipestorage_id`) REFERENCES `tipestorage` (`id`);

--
-- Constraints for table `support`
--
ALTER TABLE `support`
  ADD CONSTRAINT `FK_support_user_id` FOREIGN KEY (`user_id`) REFERENCES `tipeuser` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
