-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 03:49 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `melbourne_watch_gallery`
--
DROP DATABASE IF EXISTS `melbourne_watch_gallery`;
CREATE DATABASE IF NOT EXISTS `melbourne_watch_gallery` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `melbourne_watch_gallery`;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `product_id` int(11) NOT NULL,
  `product_name` text NOT NULL,
  `overview` text NOT NULL,
  `model_no` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `image_1` text NOT NULL,
  `image_2` text NOT NULL,
  `image_3` text NOT NULL,
  `image_4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `product_name`, `overview`, `model_no`, `price`, `image_1`, `image_2`, `image_3`, `image_4`) VALUES
(1, 'Apple Watch Ultra 49mm Titanium Case GPS + Cellular Alpine Loop (Orange)', 'The most rugged and capable Apple Watch ever, designed for exploration, adventure and endurance. With a 49 mm aerospace-grade titanium case, extra-long battery life[1], specialised apps that work with the advanced sensors, and a new customisable Action button.', '608365', 1299, 'https://www.jbhifi.com.au/cdn/shop/products/608365-Product-1-I-637982261840566371_e018b846-fcc1-4be1-a2b7-02883510aa71.jpg?v=1662707379', 'https://www.jbhifi.com.au/cdn/shop/products/608365-Product-0-I-637982261840566371_cdb287c5-4343-4793-8036-37572e887aea.jpg?v=1662707379', 'https://www.jbhifi.com.au/cdn/shop/products/608365-Product-4-I-637982261840722548_e2f6b13e-8e5c-4795-af7d-6fd9861d56de.jpg?v=1662707379', 'https://www.jbhifi.com.au/cdn/shop/products/608365-Product-6-I-637982261840722548_172b3e79-c666-4c42-8959-02c5112896fa.jpg?v=1662707379'),
(2, 'Samsung Galaxy Watch6 Classic 47mm (Black)', 'Experience edge-to-edge stainless steel luxury on Samsung’s biggest screen yet with the Galaxy Watch6 Classic. Enjoy the iconic, durable design featuring advanced health and wellness technology to help you get in the zone1 and connectivity to your phone to manage the world from your wrist. Good sleep and good health go hand-in-hand, so rest easy with sleep coaching and get more wellness stats1 with around-the-clock health tracking and a battery you can count on.', '11901306758', 749, 'https://www.jbhifi.com.au/cdn/shop/products/654755-Product-0-I-638272237430085435.jpg?v=1692237501', 'https://www.jbhifi.com.au/cdn/shop/products/654755-Product-1-I-638272237431623626.jpg?v=1692237501', 'https://www.jbhifi.com.au/cdn/shop/products/654755-Product-2-I-638272237431602337.jpg?v=1692237501', 'https://www.jbhifi.com.au/cdn/shop/products/654755-Product-5-I-638272237432833016.jpg?v=1692237501'),
(3, 'Garmin Venu 3S Sports Watch (Ivory/Soft Gold)', '\r\nReceive an overview of your sleep, recovery, daily calendar, HRV status and more as soon as you wake up. Better understand how each workout affects your body and how much time you need to recover so you can take on any fitness challenge. Know your body better with extensive health monitoring features, including wrist-based heart rate, morning report, fitness age, stress tracking, menstrual cycle and pregnancy tracking, meditation and more.', ' 010-02785-04', 750, 'https://www.jbhifi.com.au/cdn/shop/products/660821-Product-0-I-638289649203221407.jpg?v=1693368195', 'https://www.jbhifi.com.au/cdn/shop/products/660821-Product-3-I-638289649203124000.jpg?v=1693368195', 'https://www.jbhifi.com.au/cdn/shop/products/660821-Product-2-I-638289649202765518.jpg?v=1693368195', 'https://www.jbhifi.com.au/cdn/shop/products/660821-Product-6-I-638289649203646299.jpg?v=1693368195'),
(4, 'Fitbit Versa 4 (Pink Sand/Copper Rose Aluminium)', 'Get better results from your workout routine with all-new Versa 4 + Premium. Know when you’re up for a challenge or need a recovery day with your personalised Daily Readiness Score. Track more exercises than ever right from your wrist with 40+ exercise modes. Choose from modes like strength training, HIIT, running, kayaking and more to see key stats in real time—including Active Zone Minutes which shows your target intensity levels. Do it all with a thin, lightweight fitness watch designed for comfort during workouts, sleep and more. Plus, never miss a beat with calls, texts and notifications right on your wrist and a battery life of 6+ days.', ' VERSA4-PNK', 380, 'https://www.jbhifi.com.au/cdn/shop/products/601080-Product-0-I-637965169377341592.jpg?v=1661320401', 'https://www.jbhifi.com.au/cdn/shop/products/601080-Product-1-I-637965169377341592.jpg?v=1661320401', 'https://cdn.shopify.com/s/files/1/0024/9803/5810/products/398459-Product-2-I_f62d4589-9fc5-4017-a72b-3739ebaa3877_540x540.jpg?v=1572323646', 'https://www.jbhifi.com.au/cdn/shop/products/601077-Product-0-I-637965169977307792.jpg?v=1661320391'),
(5, 'Samsung Galaxy Watch5 Pro 45mm (Grey Titanium)', 'Meet the Galaxy Watch5 Pro. The most durable and powerful smartwatch we have created yet. It comes with a powerful battery that lasts up to 80 hours to track your activity even on your most active days, and a durable Titanium case with scratch-resistant Sapphire Crystal Glass. Do more with a single charge. Galaxy Watch5 Pro gives you up to 80 hours of general use and up to 20 hours of use in continuous GPS mode. Designed to withstand longer in outdoor environment and even on your most active days.', '11901277986', 600, 'https://www.jbhifi.com.au/cdn/shop/products/597833-Product-0-I-637955541177587810.jpg?v=1691461982', 'https://www.jbhifi.com.au/cdn/shop/products/597833-Product-1-I-637955541177587810.jpg?v=1691461982', 'https://www.jbhifi.com.au/cdn/shop/products/597833-Product-2-I-637955541177900333.jpg?v=1691461982', 'https://www.jbhifi.com.au/cdn/shop/products/597833-Product-5-I-637955541177587810.jpg?v=1691461982'),
(9, 'Google Pixel Watch Champagne Gold Stainless Steel Case', 'The Google Pixel Watch has a beautiful circular, domed design and new Wear OS by Google experience.1 Live healthier with sleep, heart rate and activity tracking on Fitbit2 and get things done on the go with Google Assistant, Maps, Wallet, Calendar and Gmail. With the beautiful circular, domed design, scratch-resistant Corning® Gorilla® Glass and new Wear OS by Google experience, it\'s easy to get help at a glance. Stay on top of activity, calories burned and more with Fitbit fitness tracking. Track your heart rate and get insight into your sleep.2 You can even track your heart rhythm with ECG.', '636913', 330, 'https://www.jbhifi.com.au/cdn/shop/products/636913-Product-0-I-638168785700513915.jpg?v=1681281975', 'https://www.jbhifi.com.au/cdn/shop/products/636913-Product-1-I-638168785698222895.jpg?v=1681281975', 'https://www.jbhifi.com.au/cdn/shop/products/636913-Product-2-I-638168785695559277.jpg?v=1681281975', 'https://www.jbhifi.com.au/cdn/shop/products/636913-Product-4-I-638168785807860519.jpg?v=1681281975');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`) VALUES
(3, 'jerry', '900150983cd24fb0d6963f7d28e17f72'),
(4, 'admin', '900150983cd24fb0d6963f7d28e17f72');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
