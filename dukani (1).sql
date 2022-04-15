-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2022 at 09:23 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dukani`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart_item`
--

CREATE TABLE `cart_item` (
  `id` int(11) NOT NULL,
  `session_id` int(11) NOT NULL,
  `email_adress` varchar(100) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `discount`
--

CREATE TABLE `discount` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `discount_percent` decimal(10,0) NOT NULL,
  `active` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `favorites`
--

CREATE TABLE `favorites` (
  `fav_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL DEFAULT 0,
  `user_id` varchar(32) NOT NULL DEFAULT ''
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `image_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `image_url`) VALUES
(10, 'IMG-61e3e884a4b213.15365254.png'),
(11, 'IMG-61e3e8e9e4bd48.20484401.png'),
(12, 'IMG-61e3efcf127e45.94346614.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `payment_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `order_items`
--

CREATE TABLE `order_items` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `modified_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment_details`
--

CREATE TABLE `payment_details` (
  `id` int(11) NOT NULL,
  `order_id` int(11) NOT NULL,
  `amount` int(11) NOT NULL,
  `provider` varchar(500) NOT NULL,
  `status` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `id` int(11) NOT NULL,
  `name` varchar(300) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `image_url` text NOT NULL,
  `category_id` int(11) NOT NULL,
  `tag_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`id`, `name`, `description`, `price`, `quantity`, `image_url`, `category_id`, `tag_id`, `created_at`, `modified_at`, `deleted_at`) VALUES
(11, 'Satin Sleeveless Square Neck', 'Satin Sleeveless Square Neck', '30000', '10', 'IMG-61e40fc8c00002.10448427.jpg', 6, 1, '2022-01-16 12:30:00', '2022-01-16 12:30:00', '2022-01-16 12:30:00'),
(12, 'Floral Print Tied Trim Dress', 'Floral Print Tied Trim Dress', '16000', '23', 'IMG-61e4108030f218.41428660.jpg', 6, 0, '2022-01-16 12:33:04', '2022-01-16 12:33:04', '2022-01-16 12:33:04'),
(13, 'Racer back Maxi Dress', 'Racer back Maxi Dress', '15000', '34', 'IMG-61e41103e54cd1.96674574.jpg', 6, 0, '2022-01-16 12:35:15', '2022-01-16 12:35:15', '2022-01-16 12:35:15'),
(14, 'Solid Mesh Contrast Sleeveless Slit Long Dress', 'Solid Mesh Contrast Sleeveless Slit Long Dress', '12000', '17', 'IMG-61e41176c336d9.07260856.jpg', 6, 0, '2022-01-16 12:37:10', '2022-01-16 12:37:10', '2022-01-16 12:37:10'),
(15, 'Dream Slim Workout Crop Top', 'Dream Slim Workout Crop To', '14000', '34', 'IMG-61e41223520b55.14688821.jpg', 3, 0, '2022-01-16 12:40:03', '2022-01-16 12:40:03', '2022-01-16 12:40:03'),
(16, 'Red Crop Top', 'Red Crop Top', '30000', '21', 'IMG-61e412dd1c3ff9.75698238.jpg', 3, 0, '2022-01-16 12:43:09', '2022-01-16 12:43:09', '2022-01-16 12:43:09'),
(17, 'Boho Teal Floral Draw String Crop Top', 'Boho Teal Floral Draw String Crop Top', '10000', '21', 'IMG-61e4132dee1e99.85790983.jpg', 3, 0, '2022-01-16 12:44:29', '2022-01-16 12:44:29', '2022-01-16 12:44:29'),
(18, 'Floral Square Crop Top', 'Floral Square Crop Top', '20000', '35', 'IMG-61e41373a74ed6.44999877.jpg', 3, 1, '2022-01-16 12:45:39', '2022-01-16 12:45:39', '2022-01-16 12:45:39'),
(19, 'White Off Shoulder Puff Sleeve Crop Top', 'White Off Shoulder Puff Sleeve Crop Top', '16000', '12', 'IMG-61e413d3c973a1.20623151.jpg', 3, 0, '2022-01-16 12:47:15', '2022-01-16 12:47:15', '2022-01-16 12:47:15'),
(20, 'Solid Color Crop Top', 'Solid Color Crop Top', '12000', '10', 'IMG-61e413f5e86df6.64999919.jpg', 3, 1, '2022-01-16 12:47:49', '2022-01-16 12:47:49', '2022-01-16 12:47:49'),
(21, 'Snake Totem Slippers', 'Snake Totem Slippers', '5000', '10', 'IMG-61e41c99e2ab91.89987485.jpg', 5, 0, '2022-01-16 13:24:41', '2022-01-16 13:24:41', '2022-01-16 13:24:41'),
(22, 'Fashion Diamond High Heel Sandals', 'Fashion Diamond High Heel Sandals', '40000', '10', 'IMG-61e41ec39b8587.92130724.jpg', 5, 0, '2022-01-16 13:33:55', '2022-01-16 13:33:55', '2022-01-16 13:33:55'),
(23, 'Women Platform Chunky Sneakers', 'Women Platform Chunky Sneakers', '20000', '12', 'IMG-61e423c8bc7923.60569181.jpg', 3, 1, '2022-01-16 13:55:20', '2022-01-16 13:55:20', '2022-01-16 13:55:20'),
(24, 'Dr. Martens', 'Dr. Martens', '50000', '12', 'IMG-61e4263a77dbd4.20036938.jpg', 5, 0, '2022-01-16 14:05:46', '2022-01-16 14:05:46', '2022-01-16 14:05:46'),
(25, 'Suede Chunky Heels', 'Suede Chunky Heels', '25000', '21', 'IMG-61e4297fe43bb8.42919989.jpg', 5, 0, '2022-01-16 14:19:43', '2022-01-16 14:19:43', '2022-01-16 14:19:43'),
(26, 'High Waisted Wide Leg Pants', 'High Waisted Wide Leg Pants', '20000', '23', 'IMG-61e42d9d293278.27179368.jpg', 4, 1, '2022-01-16 14:37:17', '2022-01-16 14:37:17', '2022-01-16 14:37:17'),
(27, 'Women High Sneakers', 'Women High Sneakers', '30000', '50', 'IMG-61e5c85739e061.75133266.jpg', 5, 0, '2022-01-17 19:49:43', '2022-01-17 19:49:43', '2022-01-17 19:49:43'),
(28, 'Blue Striped Dress', 'Blue Striped Dress', '15000', '23', 'IMG-61e7bd3b752874.22277513.jpg', 6, 0, '2022-01-19 07:26:51', '2022-01-19 07:26:51', '2022-01-19 07:26:51');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(11) NOT NULL,
  `category_name` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `deleted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category_name`, `created_at`, `modified_at`, `deleted_at`) VALUES
(3, 'Tops', '2022-01-16 07:37:09', '2022-01-16 07:37:09', '2022-01-16 07:37:09'),
(4, 'Bottoms', '2022-01-16 07:38:39', '2022-01-16 07:38:39', '2022-01-16 07:38:39'),
(5, 'Shoes', '2022-01-16 07:39:15', '2022-01-16 07:39:15', '2022-01-16 07:39:15'),
(6, 'Dress', '2022-01-16 07:39:22', '2022-01-16 07:39:22', '2022-01-16 07:39:22'),
(7, 'Sets', '2022-01-16 12:51:18', '2022-01-16 12:51:18', '2022-01-16 12:51:18'),
(8, 'Jewelry', '2022-01-16 14:49:42', '2022-01-16 14:49:42', '2022-01-16 14:49:42'),
(9, 'Handbags', '2022-01-19 07:24:03', '2022-01-19 07:24:03', '2022-01-19 07:24:03');

-- --------------------------------------------------------

--
-- Table structure for table `product_image`
--

CREATE TABLE `product_image` (
  `id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `imageType` varchar(200) NOT NULL,
  `imageData` mediumblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `product_inventory`
--

CREATE TABLE `product_inventory` (
  `id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  `created_at` int(11) NOT NULL,
  `modified_at` int(11) NOT NULL,
  `deleted_at` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shopping_session`
--

CREATE TABLE `shopping_session` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `total` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `modified_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

CREATE TABLE `tags` (
  `id` int(11) NOT NULL,
  `tag_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tags`
--

INSERT INTO `tags` (`id`, `tag_name`) VALUES
(1, 'featured');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email_adress` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email_adress`, `password`, `created_at`) VALUES
(1, 'veelinus', 'vanessabenezeth@gmail.com', '123456', '2021-12-21 11:50:10'),
(2, 'vanesa', 'v@f.c', '$2y$10$7KfPc39/jYsFeAV3QbZzuOXZea1vTs1Q6yPe6879D/iTYuuTCGu02', '2021-12-21 12:29:05'),
(3, 'Masikio', 'masikio@gmail.com', '$2y$10$USBfDxoPyjt2cOLQg08Fcur6D/ZNp/0Uej7pwp/5HnZr5QNeMi11m', '2021-12-23 07:47:08'),
(4, 'george', 'geo@gm.com', '$2y$10$.hcw3ZR7hQ6EaGPITYj2RuyMoRNUKy4/e5VOTTfWEpTgyRDhHD/ci', '2022-01-03 13:37:51'),
(5, 'jason', 'jason@gmail.com', '$2y$10$MEeAYIjL3bfGwkWIhP6CROJ4o5B.AciessazG0oCKtrxHZ4U5wbwG', '2022-01-05 09:23:36'),
(6, 'lizzybeth', 'lizzzybeth@gmail.com', '$2y$10$cruumDu8AOBEFbuP2TLTh.2HTmlnoSbF.EYzACeMHLLFtym.GQsWO', '2022-01-11 14:40:18'),
(7, 'linusmaktz1', 'linusmak@gmail.com1', '$2y$10$uroYHDALuBkSXzOVwzzrWuzMCtl/E5OH5Z2wT6XNxVJwv5ysQ7b9O', '2022-01-14 13:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `user_address`
--

CREATE TABLE `user_address` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `address` text NOT NULL,
  `city` text NOT NULL,
  `telephone` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `use_payment`
--

CREATE TABLE `use_payment` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `payment_type` varchar(200) NOT NULL,
  `provider` varchar(200) NOT NULL,
  `account_no` int(11) NOT NULL,
  `expiry` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email_adress`),
  ADD KEY `session_id` (`session_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `discount`
--
ALTER TABLE `discount`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `favorites`
--
ALTER TABLE `favorites`
  ADD PRIMARY KEY (`fav_id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `payment_id` (`payment_id`);

--
-- Indexes for table `order_items`
--
ALTER TABLE `order_items`
  ADD PRIMARY KEY (`id`),
  ADD KEY `order_id` (`order_id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `payment_details`
--
ALTER TABLE `payment_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`category_name`) USING HASH;

--
-- Indexes for table `product_image`
--
ALTER TABLE `product_image`
  ADD PRIMARY KEY (`id`),
  ADD KEY `product_id` (`product_id`);

--
-- Indexes for table `product_inventory`
--
ALTER TABLE `product_inventory`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shopping_session`
--
ALTER TABLE `shopping_session`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `tags`
--
ALTER TABLE `tags`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email_adress` (`email_adress`);

--
-- Indexes for table `user_address`
--
ALTER TABLE `user_address`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `use_payment`
--
ALTER TABLE `use_payment`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart_item`
--
ALTER TABLE `cart_item`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `discount`
--
ALTER TABLE `discount`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `favorites`
--
ALTER TABLE `favorites`
  MODIFY `fav_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `order_items`
--
ALTER TABLE `order_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment_details`
--
ALTER TABLE `payment_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `product_image`
--
ALTER TABLE `product_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `product_inventory`
--
ALTER TABLE `product_inventory`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shopping_session`
--
ALTER TABLE `shopping_session`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tags`
--
ALTER TABLE `tags`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user_address`
--
ALTER TABLE `user_address`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `use_payment`
--
ALTER TABLE `use_payment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart_item`
--
ALTER TABLE `cart_item`
  ADD CONSTRAINT `cart_item_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_item_ibfk_2` FOREIGN KEY (`session_id`) REFERENCES `shopping_session` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_details`
--
ALTER TABLE `order_details`
  ADD CONSTRAINT `order_details_ibfk_1` FOREIGN KEY (`payment_id`) REFERENCES `payment_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_details_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `order_items`
--
ALTER TABLE `order_items`
  ADD CONSTRAINT `order_items_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `order_items_ibfk_2` FOREIGN KEY (`order_id`) REFERENCES `order_details` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `product_image`
--
ALTER TABLE `product_image`
  ADD CONSTRAINT `product_images_ibfk_1` FOREIGN KEY (`product_id`) REFERENCES `product` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shopping_session`
--
ALTER TABLE `shopping_session`
  ADD CONSTRAINT `shopping_session_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_address`
--
ALTER TABLE `user_address`
  ADD CONSTRAINT `user_address_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);

--
-- Constraints for table `use_payment`
--
ALTER TABLE `use_payment`
  ADD CONSTRAINT `use_payment_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
