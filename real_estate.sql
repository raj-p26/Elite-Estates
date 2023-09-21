-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 18, 2023 at 08:29 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `real_estate`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent_table`
--

CREATE TABLE `agent_table` (
  `agent_id` int(3) NOT NULL,
  `agent_name` varchar(20) NOT NULL,
  `agent_dob` date NOT NULL,
  `agent_phone` varchar(15) NOT NULL,
  `agent_email` varchar(30) NOT NULL,
  `agent_address` varchar(100) NOT NULL,
  `agent_image` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `agent_table`
--

INSERT INTO `agent_table` (`agent_id`, `agent_name`, `agent_dob`, `agent_phone`, `agent_email`, `agent_address`, `agent_image`) VALUES
(1, 'Pathan Sahil', '2003-07-09', '69696969', 'pathansahil@gmail.com', 'some area of some where in no where', 'agent-imagei-1.jpg'),
(2, 'Some Agent', '2000-05-01', '49041212', 'someone@gmail.com', 'some area of some where in no where', 'agent-image-2.jpg'),
(3, 'Other Agent', '1998-01-08', '7878787', 'otherone@gmail.com', 'some area of some where in no where', 'agent-image-3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `bought_commercial_properties`
--

CREATE TABLE `bought_commercial_properties` (
  `id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `commercial_project_id` int(3) NOT NULL,
  `agent_id` int(3) NOT NULL,
  `buying_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bought_commercial_properties`
--

INSERT INTO `bought_commercial_properties` (`id`, `user_id`, `commercial_project_id`, `agent_id`, `buying_date`) VALUES
(1, 4, 1, 2, '2023-09-16 18:32:58');

-- --------------------------------------------------------

--
-- Table structure for table `bought_flats`
--

CREATE TABLE `bought_flats` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `flat_id` int(11) NOT NULL,
  `agent_id` int(11) NOT NULL,
  `buying_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bought_flats`
--

INSERT INTO `bought_flats` (`id`, `user_id`, `flat_id`, `agent_id`, `buying_date`) VALUES
(1, 4, 1, 2, '2023-09-11 17:35:00'),
(2, 4, 5, 3, '2023-09-16 18:32:38'),
(10, 4, 1, 1, '2023-09-17 17:18:42');

-- --------------------------------------------------------

--
-- Table structure for table `bought_ready_to_move_in`
--

CREATE TABLE `bought_ready_to_move_in` (
  `id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `property_id` int(3) NOT NULL,
  `agent_id` int(3) NOT NULL,
  `buying_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bought_ready_to_move_in`
--

INSERT INTO `bought_ready_to_move_in` (`id`, `user_id`, `property_id`, `agent_id`, `buying_date`) VALUES
(1, 4, 1, 2, '2023-09-16 18:38:36');

-- --------------------------------------------------------

--
-- Table structure for table `commercial_properties`
--

CREATE TABLE `commercial_properties` (
  `commercial_property_id` int(3) NOT NULL,
  `commercial_property_name` varchar(40) NOT NULL,
  `commercial_property_location` varchar(60) NOT NULL,
  `commercial_property_bhk` varchar(2) NOT NULL,
  `commercial_property_sqft` varchar(4) NOT NULL,
  `commercial_property_floor_level` varchar(2) NOT NULL,
  `commercial_property_monthly_rent` int(5) NOT NULL,
  `commercial_property_image_1` varchar(255) NOT NULL,
  `commercial_property_image_2` varchar(255) NOT NULL,
  `commercial_property_image_3` varchar(255) NOT NULL,
  `commercial_property_ad_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `commercial_properties`
--

INSERT INTO `commercial_properties` (`commercial_property_id`, `commercial_property_name`, `commercial_property_location`, `commercial_property_bhk`, `commercial_property_sqft`, `commercial_property_floor_level`, `commercial_property_monthly_rent`, `commercial_property_image_1`, `commercial_property_image_2`, `commercial_property_image_3`, `commercial_property_ad_date`) VALUES
(1, 'Mahalakshmi Property', '12015., Mahalakshmi, Mumbai - South Mumbai, Maharashtra', '3', '2192', '12', 40000, 'mahalakshmi-property-image-1.jpeg', 'mahalakshmi-property-image-2.jpeg', 'mahalakshmi-property-image-3.jpeg', '2023-09-16 15:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `flats`
--

CREATE TABLE `flats` (
  `flat_id` int(4) NOT NULL,
  `flat_name` varchar(50) NOT NULL,
  `flat_location` varchar(255) NOT NULL,
  `flat_bhk` varchar(255) NOT NULL,
  `flat_sqft` varchar(255) NOT NULL,
  `flat_floor_level` varchar(255) NOT NULL,
  `flat_monthly_rent` int(11) NOT NULL,
  `flat_age_of_construction` int(11) NOT NULL,
  `flat_water_availability` varchar(25) NOT NULL,
  `flat_electricity_status` varchar(25) NOT NULL,
  `flat_image_1` varchar(250) NOT NULL,
  `flat_image_2` varchar(250) NOT NULL,
  `flat_image_3` text NOT NULL,
  `flat_ad_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `flats`
--

INSERT INTO `flats` (`flat_id`, `flat_name`, `flat_location`, `flat_bhk`, `flat_sqft`, `flat_floor_level`, `flat_monthly_rent`, `flat_age_of_construction`, `flat_water_availability`, `flat_electricity_status`, `flat_image_1`, `flat_image_2`, `flat_image_3`, `flat_ad_date`) VALUES
(1, 'khar west property', 'D-5 lilaram chsl dr ambedkar rd, dandpada, khar west., Khar West, Mumbai - Western Mumbai, Maharashtra', '1', '600', '6', 30000, 20, '24 Hours Available', 'No/Rare Powercut', 'khar-west-image-1.jpeg', 'khar-west-image-2.jpeg', 'khar-west-image-3.jpeg', '2023-08-07 16:42:33'),
(2, 'govandi property', 'Govandi, Govandi, Mumbai - Harbour Line, Maharashtra', '1', '450', '6', 25000, 23, '24 Hours Available', 'No/Rare Powercut', 'govandi-image-1.jpg', 'govandi-image-2.jpg', 'govandi-image-3.jpg', '2023-08-07 16:47:39'),
(3, 'Pragati Apartment', 'Pragati Apartment Friends Colony Bhandup East Mumbai Maharashtra 400042, Bhandup East, Mumbai - Central Mumbai, Maharashtra', '1', '730', '4', 100000, 20, '24 Hours Available', 'No/Rare Powercut', 'bhandup-east-image-1.jpg', 'bhandup-east-image-2.jpg', 'bhandup-east-image-3.jpg', '2023-09-02 16:59:53'),
(4, 'Vikhroli West Property', 'Bluemen Lifestyle Station Road Vikhroli West Mumbai Maharashtra 400083, Vikhroli West, Mumbai - Central Mumbai, Maharashtra', '2', '612', '12', 7500, 12, '24/7 Available', 'Rare Powercut', 'vikhroli-west-image-1.jpg', 'vikhroli-west-image-2.jpg', 'vikhroli-west-image-3.jpg', '2023-09-04 15:29:21'),
(5, 'Santacruz West Property', 'Flat Number 401 4th Floor Retreat Apartment Santacurz West Mumbai Maharashtra 400054, Santacruz, Mumbai - Western Mumbai, Maharashtra', '3', '1531', '4', 25000, 27, '24/7 Available', 'No/Rare Powercut', 'santacruz-west-image-1.jpg', 'santacruz-west-image-2.jpg', 'santacruz-west-image-3.jpg', '2023-09-04 15:33:47'),
(6, 'Nalasopara West Property', 'Neeta apartment nilemore shani Mandir road nalasopara west, Nalasopara West, Mumbai - Mira Road and Beyond, Maharashtra', '1', '341', '4', 5500, 10, '24/7 Available', 'No/Rare Powercut', 'nalasopara-west-image-1.jpg', 'nalasopara-west-image-2.jpg', 'nalasopara-west-image-3.jpg', '2023-09-04 15:37:28'),
(21, '1', '1', '1', '1', '1', 1, 1, '1', '1', 'repost-svgrepo-com.svg', 'text-icon.png', 'yeah-science.jpg', '2023-09-17 10:35:23'),
(22, '1', '1', '1', '1', '1', 1, 1, '1', '1', 'repost-svgrepo-com.svg', 'text-icon.png', 'yeah-science.jpg', '2023-09-17 12:01:47'),
(23, '2', '2', '2', '2', '2', 2, 2, '2', '2', 'repost-svgrepo-com.svg', 'text-icon.png', 'yeah-science.jpg', '2023-09-17 12:04:29'),
(24, '3', '3', '3', '3', '3', 3, 3, '3', '3', 'repost-svgrepo-com.svg', 'text-icon.png', 'yeah-science.jpg', '2023-09-17 12:05:42'),
(25, '8', '8', '8', '8', '8', 8, 8, '8', '8', 'repost-svgrepo-com.svg', 'text-icon.png', 'yeah-science.jpg', '2023-09-17 12:57:09'),
(26, '9', '9', '9', '9', '9', 9, 9, '9', '9', 'repost-svgrepo-com.svg', 'text-icon.png', 'yeah-science.jpg', '2023-09-17 12:57:50');

-- --------------------------------------------------------

--
-- Table structure for table `ready_to_move_in`
--

CREATE TABLE `ready_to_move_in` (
  `property_id` int(3) NOT NULL,
  `property_name` varchar(40) NOT NULL,
  `property_location` varchar(60) NOT NULL,
  `property_bhk` varchar(2) NOT NULL,
  `property_sqft` varchar(4) NOT NULL,
  `property_floor_level` varchar(2) NOT NULL,
  `property_monthly_rent` int(5) NOT NULL,
  `property_image_1` varchar(30) NOT NULL,
  `property_image_2` varchar(30) NOT NULL,
  `property_image_3` varchar(30) NOT NULL,
  `property_ad_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `ready_to_move_in`
--

INSERT INTO `ready_to_move_in` (`property_id`, `property_name`, `property_location`, `property_bhk`, `property_sqft`, `property_floor_level`, `property_monthly_rent`, `property_image_1`, `property_image_2`, `property_image_3`, `property_ad_date`) VALUES
(1, 'Chunabhatti Mumbai Property', '503., Chunabhatti, Mumbai - Central Mumbai, Maharashtra', '1', '400', '1', 23750, 'chunabhatti-mumbai-image-1.jpg', 'chunabhatti-mumbai-image-2.jpg', 'chunabhatti-mumbai-image-3.jpg', '2023-09-16 17:33:07');

-- --------------------------------------------------------

--
-- Table structure for table `registered_upcoming_project`
--

CREATE TABLE `registered_upcoming_project` (
  `id` int(3) NOT NULL,
  `user_id` int(3) NOT NULL,
  `upcoming_project_id` int(3) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registered_upcoming_project`
--

INSERT INTO `registered_upcoming_project` (`id`, `user_id`, `upcoming_project_id`, `registration_date`) VALUES
(1, 4, 1, '2023-09-16 18:36:13');

-- --------------------------------------------------------

--
-- Table structure for table `session_test`
--

CREATE TABLE `session_test` (
  `id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `passwd` varchar(30) NOT NULL,
  `joining_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `session_test`
--

INSERT INTO `session_test` (`id`, `firstname`, `lastname`, `email`, `passwd`, `joining_date`) VALUES
(3, 'admin', 'admin', 'rajpeshavariya@gmail.com', 'someadminpassword', '2023-09-08 06:46:38'),
(4, 'sagar', 'peshavariya', 'sagarpeshavariya@gmail.com', 'sagar@1609', '2023-09-11 15:27:43'),
(5, 'Test', 'Case', 'test@gmail.com', 'tester', '2023-09-17 17:03:31'),
(6, 'Vansh', 'peshavariya', 'vanshpeshavariya@gmail.com', 'vansh@3186', '2023-09-17 17:21:43');

-- --------------------------------------------------------

--
-- Table structure for table `session_test_agents`
--

CREATE TABLE `session_test_agents` (
  `id` int(11) NOT NULL,
  `agent_fullname` varchar(20) NOT NULL,
  `agent_number` varchar(20) NOT NULL,
  `agent_registered_address` varchar(100) NOT NULL,
  `agent_company_type` varchar(20) NOT NULL,
  `agent_email` varchar(35) NOT NULL,
  `agent_city` varchar(35) NOT NULL,
  `agent_state` varchar(30) NOT NULL,
  `agent_join_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `temp`
--

CREATE TABLE `temp` (
  `flat_id` int(4) NOT NULL,
  `flat_name` varchar(50) NOT NULL,
  `flat_location` varchar(255) NOT NULL,
  `flat_bhk` varchar(2) NOT NULL,
  `flat_sqft` varchar(5) NOT NULL,
  `flat_floor_level` varchar(2) NOT NULL,
  `flat_monthly_rent` int(6) NOT NULL,
  `flat_age_of_construction` int(3) NOT NULL,
  `flat_water_availability` varchar(25) NOT NULL,
  `flat_electricity_status` varchar(25) NOT NULL,
  `flat_image_1` varchar(50) NOT NULL,
  `flat_image_2` varchar(50) NOT NULL,
  `flat_image_3` text NOT NULL,
  `flat_ad_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `temp`
--

INSERT INTO `temp` (`flat_id`, `flat_name`, `flat_location`, `flat_bhk`, `flat_sqft`, `flat_floor_level`, `flat_monthly_rent`, `flat_age_of_construction`, `flat_water_availability`, `flat_electricity_status`, `flat_image_1`, `flat_image_2`, `flat_image_3`, `flat_ad_date`) VALUES
(2, 'govandi property', 'Govandi, Govandi, Mumbai - Harbour Line, Maharashtra', '1', '450', '6', 25000, 23, '24 Hours Available', 'No/Rare Powercut', 'govandi-image-1.jpg', 'govandi-image-2.jpg', 'govandi-image-3.jpg', '2023-08-07 16:47:39'),
(3, 'Pragati Apartment', 'Pragati Apartment Friends Colony Bhandup East Mumbai Maharashtra 400042, Bhandup East, Mumbai - Central Mumbai, Maharashtra', '1', '730', '4', 100000, 20, '24 Hours Available', 'No/Rare Powercut', 'bhandup-east-image-1.jpg', 'bhandup-east-image-2.jpg', 'bhandup-east-image-3.jpg', '2023-09-02 16:59:53'),
(4, 'Vikhroli West Property', 'Bluemen Lifestyle Station Road Vikhroli West Mumbai Maharashtra 400083, Vikhroli West, Mumbai - Central Mumbai, Maharashtra', '2', '612', '12', 7500, 12, '24/7 Available', 'Rare Powercut', 'vikhroli-west-image-1.jpg', 'vikhroli-west-image-2.jpg', 'vikhroli-west-image-3.jpg', '2023-09-04 15:29:21'),
(5, 'Santacruz West Property', 'Flat Number 401 4th Floor Retreat Apartment Santacurz West Mumbai Maharashtra 400054, Santacruz, Mumbai - Western Mumbai, Maharashtra', '3', '1531', '4', 25000, 27, '24/7 Available', 'No/Rare Powercut', 'santacruz-west-image-1.jpg', 'santacruz-west-image-2.jpg', 'santacruz-west-image-3.jpg', '2023-09-04 15:33:47');

-- --------------------------------------------------------

--
-- Table structure for table `upcoming_projects`
--

CREATE TABLE `upcoming_projects` (
  `upcoming_project_id` int(4) NOT NULL,
  `upcoming_project_name` varchar(20) NOT NULL,
  `upcoming_project_location` text NOT NULL,
  `upcoming_project_bhk` int(2) NOT NULL,
  `upcoming_project_sqft` varchar(5) NOT NULL,
  `upcoming_project_floor_level` varchar(3) NOT NULL,
  `upcoming_project_expected_start_date` date NOT NULL,
  `upcoming_project_expected_end_date` date NOT NULL,
  `upcoming_project_status` varchar(20) NOT NULL,
  `upcoming_project_developer` varchar(20) NOT NULL,
  `upcoming_project_image_1` varchar(255) NOT NULL,
  `upcoming_project_image_2` varchar(255) NOT NULL,
  `upcoming_project_image_3` varchar(255) NOT NULL,
  `upcoming_project_ad_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `upcoming_projects`
--

INSERT INTO `upcoming_projects` (`upcoming_project_id`, `upcoming_project_name`, `upcoming_project_location`, `upcoming_project_bhk`, `upcoming_project_sqft`, `upcoming_project_floor_level`, `upcoming_project_expected_start_date`, `upcoming_project_expected_end_date`, `upcoming_project_status`, `upcoming_project_developer`, `upcoming_project_image_1`, `upcoming_project_image_2`, `upcoming_project_image_3`, `upcoming_project_ad_date`) VALUES
(1, 'Pride Panorama', 'Pride Panorama, 657 Andheri Kurla Road, Sakinaka, Andheri East, Mumbai, Maharashtra', 3, '700', '10', '2023-09-16', '2025-12-22', 'Under Construction', 'Pride Group', 'panorama-project-image-1.jpg', 'panorama-project-image-2.jpg', 'panorama-project-image-3.jpg', '2023-09-16 17:49:26');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `password` varchar(30) DEFAULT NULL,
  `signin_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `signin_date`) VALUES
(1, '$name', '$email', '$passwd', '2023-05-08 21:10:38'),
(2, 'raj', 'rajpeshavariya007@gmail.com', 'restinpeace', '2023-05-08 21:11:40'),
(3, 'vansh', 'vanshpeshavariya@gmail.com', 'vansh@3186', '2023-05-08 21:17:01'),
(4, 'sagar', 'sagarpeshavariya@gmai.com', 'sagar@1609', '2023-05-08 21:18:16'),
(7, 'raj2', 'raj@gmail.com', 'restinpeace', '2023-05-09 14:28:31'),
(8, '', '', '', '2023-05-09 15:38:35');

-- --------------------------------------------------------

--
-- Table structure for table `user_feedback`
--

CREATE TABLE `user_feedback` (
  `id` int(3) NOT NULL,
  `username` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_feedback` text NOT NULL,
  `feedback_message_date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_feedback`
--

INSERT INTO `user_feedback` (`id`, `username`, `user_email`, `user_feedback`, `feedback_message_date`) VALUES
(1, 'rajp', 'rajp@gmail.com', 'This is a test message', '2023-08-06 17:59:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent_table`
--
ALTER TABLE `agent_table`
  ADD PRIMARY KEY (`agent_id`);

--
-- Indexes for table `bought_commercial_properties`
--
ALTER TABLE `bought_commercial_properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `commercial_project_id` (`commercial_project_id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `bought_flats`
--
ALTER TABLE `bought_flats`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `flat_id` (`flat_id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `bought_ready_to_move_in`
--
ALTER TABLE `bought_ready_to_move_in`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `property_id` (`property_id`),
  ADD KEY `agent_id` (`agent_id`);

--
-- Indexes for table `commercial_properties`
--
ALTER TABLE `commercial_properties`
  ADD PRIMARY KEY (`commercial_property_id`);

--
-- Indexes for table `flats`
--
ALTER TABLE `flats`
  ADD PRIMARY KEY (`flat_id`);

--
-- Indexes for table `ready_to_move_in`
--
ALTER TABLE `ready_to_move_in`
  ADD PRIMARY KEY (`property_id`);

--
-- Indexes for table `registered_upcoming_project`
--
ALTER TABLE `registered_upcoming_project`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `upcoming_project_id` (`upcoming_project_id`);

--
-- Indexes for table `session_test`
--
ALTER TABLE `session_test`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `session_test_agents`
--
ALTER TABLE `session_test_agents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `temp`
--
ALTER TABLE `temp`
  ADD PRIMARY KEY (`flat_id`);

--
-- Indexes for table `upcoming_projects`
--
ALTER TABLE `upcoming_projects`
  ADD PRIMARY KEY (`upcoming_project_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `unique_name` (`name`),
  ADD UNIQUE KEY `unique_email` (`email`);

--
-- Indexes for table `user_feedback`
--
ALTER TABLE `user_feedback`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent_table`
--
ALTER TABLE `agent_table`
  MODIFY `agent_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bought_commercial_properties`
--
ALTER TABLE `bought_commercial_properties`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bought_flats`
--
ALTER TABLE `bought_flats`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `bought_ready_to_move_in`
--
ALTER TABLE `bought_ready_to_move_in`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `commercial_properties`
--
ALTER TABLE `commercial_properties`
  MODIFY `commercial_property_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `flats`
--
ALTER TABLE `flats`
  MODIFY `flat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `ready_to_move_in`
--
ALTER TABLE `ready_to_move_in`
  MODIFY `property_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `registered_upcoming_project`
--
ALTER TABLE `registered_upcoming_project`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `session_test`
--
ALTER TABLE `session_test`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `session_test_agents`
--
ALTER TABLE `session_test_agents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `temp`
--
ALTER TABLE `temp`
  MODIFY `flat_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `upcoming_projects`
--
ALTER TABLE `upcoming_projects`
  MODIFY `upcoming_project_id` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_feedback`
--
ALTER TABLE `user_feedback`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bought_commercial_properties`
--
ALTER TABLE `bought_commercial_properties`
  ADD CONSTRAINT `bought_commercial_properties_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bought_commercial_properties_ibfk_2` FOREIGN KEY (`commercial_project_id`) REFERENCES `commercial_properties` (`commercial_property_id`),
  ADD CONSTRAINT `bought_commercial_properties_ibfk_3` FOREIGN KEY (`agent_id`) REFERENCES `agent_table` (`agent_id`);

--
-- Constraints for table `bought_flats`
--
ALTER TABLE `bought_flats`
  ADD CONSTRAINT `bought_flats_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bought_flats_ibfk_2` FOREIGN KEY (`flat_id`) REFERENCES `flats` (`flat_id`),
  ADD CONSTRAINT `bought_flats_ibfk_3` FOREIGN KEY (`agent_id`) REFERENCES `agent_table` (`agent_id`);

--
-- Constraints for table `bought_ready_to_move_in`
--
ALTER TABLE `bought_ready_to_move_in`
  ADD CONSTRAINT `bought_ready_to_move_in_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `bought_ready_to_move_in_ibfk_2` FOREIGN KEY (`property_id`) REFERENCES `ready_to_move_in` (`property_id`),
  ADD CONSTRAINT `bought_ready_to_move_in_ibfk_3` FOREIGN KEY (`agent_id`) REFERENCES `agent_table` (`agent_id`);

--
-- Constraints for table `registered_upcoming_project`
--
ALTER TABLE `registered_upcoming_project`
  ADD CONSTRAINT `registered_upcoming_project_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `registered_upcoming_project_ibfk_2` FOREIGN KEY (`upcoming_project_id`) REFERENCES `upcoming_projects` (`upcoming_project_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
