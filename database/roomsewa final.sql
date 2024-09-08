-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2024 at 07:44 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roomsewa`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id` int(10) NOT NULL,
  `property_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id`, `property_id`, `user_id`) VALUES
(100, 70, 16),
(101, 66, 16),
(102, 33, 16),
(103, 87, 16),
(104, 89, 17),
(105, 25, 17),
(106, 2, 9);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(11) NOT NULL,
  `sender_id` int(11) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `message` varchar(255) NOT NULL,
  `image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `sender_id`, `receiver_id`, `created_at`, `message`, `image`) VALUES
(53, 2, 1, '2024-08-29 16:34:05', '', '1c7e510db0abf16e58615c13d3de0e3ffa80c2f30a7bc54695f2952b901cf9ed.jpg'),
(54, 2, 1, '2024-08-29 16:36:32', '', '104e43ff97ca168675e36838983e6ab3b8acbce9a25d6daf39065161cd36c72d.jpg'),
(55, 2, 1, '2024-08-29 16:36:42', 'hlo', NULL),
(56, 2, 1, '2024-08-29 16:36:46', '', '39d05df2184ed55839a6bf1ac9a48daf1d60c533a1a0d3675fe8de4d4c84643c.jpg'),
(57, 2, 1, '2024-08-29 16:37:21', '', '6639eca385fadd2cd4393a7f84d56829af658de964083db723c93269f24005e6.jpg'),
(58, 2, 1, '2024-08-29 16:37:50', '', '3af5a1f79f7fcec0f3d844e5bdccbc365e6d5516674707d43efe419b404caba1.jpg'),
(59, 2, 1, '2024-08-29 16:40:30', 'gyjujgh', NULL),
(60, 2, 1, '2024-08-29 16:40:34', 'cgbcf', NULL),
(61, 2, 1, '2024-08-29 16:52:38', 'hello', NULL),
(62, 2, 1, '2024-08-29 16:52:41', 'sdfsdfdsf', NULL),
(63, 2, 1, '2024-08-29 16:52:43', 'fdsfsdf', NULL),
(64, 2, 1, '2024-08-29 16:52:47', '', 'a7991e3ee3e68dcb733cdb08cb8bd248c661d7a767acc4b9517fd4d929aa8080.gif'),
(65, 2, 1, '2024-08-29 16:53:06', '', 'ff2a7a18a3382f25de19b4528ff9bb0634daa4bdd68ea04042f69cbefac7a620.gif'),
(66, 2, 1, '2024-08-29 16:54:45', '', '5de77444503c6b16a2087f859e3bda707f309cf6f94e856034ec1e6a5b8e9c71.jpg'),
(67, 2, 1, '2024-08-29 16:57:03', '', '064387ee36d0b0c27456771a04fc1ef6efc1ea8f5e3b7c8dc44d5dc7fc8cf44f.jpg'),
(68, 2, 1, '2024-08-29 16:59:28', 'sdfddfs', NULL),
(69, 2, 1, '2024-08-29 16:59:31', 'sdfsdfdsfvsafbgs', NULL),
(70, 1, 4, '2024-08-30 09:46:18', 'Hello I want to book this property', NULL),
(71, 4, 1, '2024-08-30 09:46:39', 'yes sure why not', NULL),
(72, 4, 1, '2024-08-30 09:46:43', 'We can do this for sure', NULL),
(73, 1, 4, '2024-08-30 09:47:29', 'Thnk ypu', NULL),
(74, 4, 1, '2024-08-30 10:24:09', 'hilo', NULL),
(75, 4, 1, '2024-08-30 10:24:13', 'jsadksajdlksad', NULL),
(76, 4, 1, '2024-08-30 10:24:13', 'slkjsakdjlsad', NULL),
(77, 4, 1, '2024-08-30 10:24:14', 'dnsakdjnsa', NULL),
(78, 9, 4, '2024-08-31 04:20:28', 'Hello I want to book this property', NULL),
(79, 4, 9, '2024-08-31 04:21:06', 'ok sure', NULL),
(80, 4, 9, '2024-08-31 04:21:11', 'call me soon', NULL),
(81, 9, 4, '2024-08-31 04:22:31', 'How doo you want to make payment??', NULL),
(82, 4, 9, '2024-08-31 04:22:57', 'i want to pay after visuting ypur place', NULL),
(83, 9, 4, '2024-08-31 04:23:21', 'show me your property photo', NULL),
(84, 4, 9, '2024-08-31 04:23:32', 'ok sure', NULL),
(85, 4, 9, '2024-08-31 04:23:37', '', 'e949c1e7c2bb1c087de56a155f6eb82601f0931f8bf40897ec6d1e07737c1ee6.jpg'),
(86, 9, 4, '2024-08-31 04:23:49', 'ths is noce', NULL),
(87, 4, 9, '2024-08-31 04:24:06', 'i will send you my qe copde', NULL),
(88, 4, 9, '2024-08-31 04:24:14', 'send me money in advance', NULL),
(89, 16, 4, '2024-09-01 10:50:07', 'hello', NULL),
(90, 17, 4, '2024-09-01 11:02:49', 'hello', NULL),
(91, 4, 17, '2024-09-01 11:03:21', 'How can I help you??', NULL),
(92, 17, 4, '2024-09-01 11:03:39', 'I want to book propery', NULL),
(93, 9, 3, '2024-09-01 13:09:25', 'hello', NULL),
(94, 3, 9, '2024-09-02 03:55:09', 'how can i hrlp you?', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` int(1) NOT NULL,
  `country` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `zone` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `city` varchar(100) NOT NULL,
  `vdc_municipality` varchar(50) NOT NULL,
  `ward_no` int(10) NOT NULL,
  `tole` varchar(100) NOT NULL,
  `contact_no` bigint(10) NOT NULL,
  `property_type` varchar(50) NOT NULL,
  `estimated_price` bigint(10) NOT NULL,
  `total_rooms` int(10) NOT NULL,
  `bedroom` int(10) NOT NULL,
  `living_room` int(10) NOT NULL,
  `kitchen` int(10) NOT NULL,
  `bathroom` int(10) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `latitude` decimal(9,6) NOT NULL,
  `longitude` decimal(9,6) NOT NULL,
  `user_id` int(10) NOT NULL,
  `booked` varchar(10) DEFAULT 'No'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`id`, `country`, `province`, `zone`, `district`, `city`, `vdc_municipality`, `ward_no`, `tole`, `contact_no`, `property_type`, `estimated_price`, `total_rooms`, `bedroom`, `living_room`, `kitchen`, `bathroom`, `description`, `latitude`, `longitude`, `user_id`, `booked`) VALUES
(1, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 11, 'Sukhanagar', 9877777777, 'Room Rent', 10000, 1, 1, 0, 0, 1, 'Near to Bhatbhateni', 27.613034, 83.471561, 4, 'Yes'),
(2, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 3, 'Yes'),
(3, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9847030528, 'Room Rent', 5000, 2, 1, 0, 0, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'Yes'),
(4, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Milanchowk', 9867419155, 'Flat Rent', 15000, 5, 2, 1, 1, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
(5, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9847030528, 'Flat Rent', 10000, 3, 1, 1, 0, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'Yes'),
(6, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9867419155, 'Flat Rent', 5000, 3, 1, 1, 0, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'Yes'),
(7, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'kalikanagar', 9804400463, 'Flat Rent', 15000, 3, 1, 1, 0, 1, 'contact me for detail', 27.678549, 83.455625, 3, 'Yes'),
(8, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'kalikanagar', 9804400463, 'Room Rent', 4500, 2, 1, 0, 0, 1, 'contact me for detail', 27.678549, 83.455625, 3, 'Yes'),
(9, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'devinagar', 9847030528, 'Flat Rent', 4000, 1, 0, 0, 0, 1, 'contact me for detail', 27.810911, 83.699358, 3, 'Yes'),
(10, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'traffic chowk', 9847030528, 'Room Rent', 5500, 1, 0, 0, 0, 0, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
(11, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'kalikanagar', 9847030528, 'Room Rent', 7000, 3, 1, 0, 0, 0, 'contact me for detail', 27.678549, 83.455625, 4, 'Yes'),
(12, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9847030528, 'Room Rent', 6000, 3, 1, 1, 0, 1, 'contact me for detail', 27.700001, 83.466003, 3, 'No'),
(13, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Golpark', 9847030528, 'Room Rent', 3000, 1, 0, 0, 0, 0, 'contact me for detail', 27.700001, 83.466003, 3, 'Yes'),
(14, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 3, 'No'),
(15, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9867419155, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 3, 'No'),
(16, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 7, 'kailashnagar', 9804400463, 'Flat Rent', 10000, 5, 2, 1, 1, 1, 'contact me for detail', 27.522430, 83.321200, 3, 'No'),
(17, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'Yes'),
(18, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 7, 'Bus park', 9867419155, 'Room Rent', 7000, 3, 1, 1, 0, 1, 'contact me for detail', 27.522400, 83.321100, 3, 'Yes'),
(19, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(20, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'Yes'),
(21, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9867419155, 'Room Rent', 5500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(22, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(23, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'Yes'),
(24, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(25, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'Yes'),
(26, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'Yes'),
(27, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'Yes'),
(29, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(30, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
(31, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
(32, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'Yes'),
(33, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'Yes'),
(34, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
(35, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Baudhha', 9847030528, 'Room Rent', 5000, 1, 0, 0, 0, 1, 'Available for the students', 27.723176, 85.349522, 4, 'Yes'),
(36, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Bauddha', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Near chaitya', 27.723176, 85.349522, 4, 'No'),
(37, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'Yes'),
(38, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'Yes'),
(39, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(40, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
(41, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'Yes'),
(42, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'Yes'),
(43, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'Yes'),
(44, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'Yes'),
(45, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'No'),
(46, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(47, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'Yes'),
(48, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'Yes'),
(49, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(50, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(51, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(52, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
(53, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(54, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'Yes'),
(55, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'Yes'),
(56, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(57, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(58, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(59, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(60, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(61, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
(62, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'Yes'),
(63, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'Yes'),
(64, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
(65, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(66, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Palpa', 'Tansen', 'Municipality', 7, 'kailashnagar', 9867419155, 'Room Rent', 7000, 3, 1, 1, 0, 1, 'contact me for detail', 27.522400, 83.321100, 3, 'Yes'),
(67, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'No'),
(68, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'Yes'),
(69, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'Yes'),
(70, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'Yes'),
(71, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'Yes'),
(72, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'Yes'),
(73, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'Yes'),
(74, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(75, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(76, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'Yes'),
(77, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Udindhunga', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to Resunga secondary school ', 28.067826, 83.211564, 4, 'Yes'),
(78, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'Yes'),
(79, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
(80, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
(81, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Udindhunga', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to Resunga secondary school ', 28.067826, 83.211564, 4, 'No'),
(82, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
(83, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
(84, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Bauddha', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Near chaitya', 27.723176, 85.349522, 4, 'Yes'),
(85, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
(86, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
(87, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'Yes'),
(88, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Baudhha', 9847030528, 'Room Rent', 5000, 1, 0, 0, 0, 1, 'Available for the students', 27.723176, 85.349522, 4, 'Yes'),
(89, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Bauddha', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Near chaitya', 27.723176, 85.349522, 4, 'Yes'),
(90, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'Yes'),
(91, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'Yes'),
(92, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Baudhha', 9847030528, 'Room Rent', 5000, 1, 0, 0, 0, 1, 'Available for the students', 27.723176, 85.349522, 4, 'No'),
(93, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(94, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(95, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
(96, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'Yes'),
(97, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(98, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'Yes'),
(99, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Only for family of member less than5', 27.693181, 85.271917, 4, 'No'),
(100, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Baudhha', 9847030528, 'Room Rent', 5000, 1, 0, 0, 0, 1, 'Available for the students', 27.723176, 85.349522, 4, 'No'),
(101, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Bauddha', 9847030528, 'Flat Rent', 15000, 3, 1, 1, 1, 1, 'Near chaitya', 27.723176, 85.349522, 4, 'Yes'),
(102, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
(103, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'Yes'),
(104, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'Yes'),
(105, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
(106, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'Yes'),
(107, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(108, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Udindhunga', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to Resunga secondary school ', 28.067826, 83.211564, 4, 'No'),
(109, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Baghmare', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Petrol pump ', 28.067826, 83.211564, 4, 'No'),
(110, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'No'),
(111, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(112, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Gulmi', 'Resunga', 'Tamghas', 1, 'Chidichaur', 9847030528, 'Room Rent', 12000, 1, 0, 0, 0, 1, 'Near to Mahendra model secondary school ', 28.067826, 83.211564, 4, 'Yes'),
(113, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
(114, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(115, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(116, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(117, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'No'),
(118, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(119, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
(120, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Room Rent', 5000, 2, 1, 0, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'Yes'),
(121, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'No'),
(122, 'Nepal', 'Lumbini Pradesh', 'Lumbini', 'Rupandehi', 'Butwal', 'Municipality', 4, 'Laxminagar', 9847030528, 'Flat Rent', 12000, 3, 1, 1, 1, 1, 'Near to the white Rose Academy', 27.700001, 83.466003, 4, 'Yes'),
(123, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(124, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'Yes'),
(125, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
(126, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'Yes'),
(127, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'Yes'),
(128, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'Yes'),
(129, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'Yes'),
(130, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(131, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'Yes'),
(132, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Kalika Chok', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'Yes'),
(133, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, ' Maldhunga', 9847030528, 'Flat Rent', 15000, 3, 2, 1, 1, 1, 'Near to the Kalika Temple ', 28.259949, 83.593114, 4, 'Yes'),
(134, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Kathmandu', 'Kathmandu', 'Municipality', 4, 'Kalanki', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.693181, 85.271917, 4, 'No'),
(135, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(136, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Imadol', 9847030528, 'Room Rent', 6500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'No'),
(137, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Baglung', 'Municipality', 'Baglung', 3, 'Maldhunga', 9847030528, 'Room Rent', 5000, 3, 2, 1, 1, 1, 'At opposite of Kalika Mandir ', 28.259949, 83.593114, 4, 'Yes'),
(138, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(139, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 15000, 4, 2, 1, 1, 1, 'Near to Prithvi chok', 28.202995, 83.974005, 4, 'No'),
(140, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 4000, 1, 1, 0, 0, 1, 'Near to Prithvi chok ', 28.202995, 83.974005, 4, 'No'),
(141, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Flat Rent', 14000, 3, 1, 1, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'No'),
(142, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Prithvi chok', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'Near to Birendra chok ', 28.202995, 83.974005, 4, 'Yes'),
(143, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 5400, 1, 1, 0, 1, 1, 'At Lake side ', 28.208606, 83.960066, 4, 'No'),
(144, 'Nepal', 'Gandaki Pradesh', 'Gandaki', 'Kaski', 'Municipality', 'Pokhara', 1, 'Lake Side', 9847030528, 'Room Rent', 4500, 1, 1, 0, 0, 1, 'At Lake Side ', 28.208606, 83.960066, 4, 'No'),
(145, 'Nepal', 'Bagmati Pradesh', 'Bagmati', 'Lalitpur', 'Lalitpur', 'Municipality', 4, 'Gwarko', 9847030528, 'Room Rent', 4500, 1, 0, 0, 0, 1, 'Available for the students', 27.666497, 85.329770, 4, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `property_photo`
--

CREATE TABLE `property_photo` (
  `id` int(1) NOT NULL,
  `p_photo` varchar(500) NOT NULL,
  `property_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `property_photo`
--

INSERT INTO `property_photo` (`id`, `p_photo`, `property_id`) VALUES
(14, 'product-photo/1.jpg', 1),
(17, 'product-photo/112.jpg', 2),
(18, 'product-photo/84.jpg', 3),
(19, 'product-photo/12.jpg', 4),
(20, 'product-photo/84.jpg', 5),
(21, 'product-photo/102.jpg', 6),
(22, 'product-photo/112.jpg', 8),
(23, 'product-photo/12.jpg', 10),
(24, 'product-photo/12.jpg', 7),
(39, 'product-photo/80.jpg', 9),
(53, 'product-photo/38.jpg', 11),
(54, 'product-photo/22.jpg', 12),
(55, 'product-photo/120.jpg', 13),
(57, 'product-photo/44.jpg', 14),
(60, 'product-photo/123.jpg', 15),
(61, 'product-photo/38.jpg', 15),
(62, 'product-photo/22.jpg', 16),
(63, 'product-photo/120.jpg', 17),
(65, 'product-photo/42.jpg', 18),
(67, 'product-photo/27.jpg', 19),
(69, 'product-photo/38.jpg', 20),
(73, 'product-photo/38.jpg', 21),
(74, 'product-photo/29.jpg', 22),
(82, 'product-photo/118.jpg', 24),
(83, 'product-photo/112.jpg', 25),
(84, 'product-photo/102.jpg', 26),
(85, 'product-photo/103.jpg', 27),
(86, 'product-photo/120.jpg', 28),
(87, 'product-photo/80.jpg', 29),
(88, 'product-photo/104.jpg', 30),
(91, 'product-photo/112.jpg', 33),
(92, 'product-photo/123.jpg', 34),
(93, 'product-photo/120.jpg', 35),
(94, 'product-photo/80.jpg', 36),
(95, 'product-photo/84.jpg', 37),
(96, 'product-photo/38.jpg', 38),
(97, 'product-photo/106.jpg', 39),
(100, 'product-photo/118.jpg', 42),
(105, 'product-photo/137.jpg', 23),
(113, 'product-photo/147.jpg', 31),
(115, 'product-photo/149.jpg', 33),
(121, 'product-photo/156.jpg', 39),
(123, 'product-photo/158.jpg', 41),
(127, 'product-photo/152.jpg', 32),
(128, 'product-photo/143.jpg', 40),
(135, 'product-photo/115.jpg', 43),
(136, 'product-photo/118.jpg', 44),
(137, 'product-photo/112.jpg', 45),
(138, 'product-photo/1.jpg', 46),
(139, 'product-photo/12.jpg', 47),
(140, 'product-photo/157.jpg', 48),
(141, 'product-photo/80.jpg', 49),
(143, 'product-photo/123.jpg', 51),
(144, 'product-photo/18.jpg', 52),
(145, 'product-photo/145.jpg', 53),
(146, 'product-photo/144.jpg', 54),
(147, 'product-photo/120.jpg', 55),
(158, 'product-photo/149.jpg', 50),
(164, 'product-photo/19.jpg', 56),
(165, 'product-photo/84.jpg', 57),
(166, 'product-photo/137.jpg', 58),
(167, 'product-photo/115.jpg', 59),
(168, 'product-photo/38.jpg', 60),
(169, 'product-photo/42.jpg', 61),
(170, 'product-photo/73.jpg', 62),
(177, 'product-photo/112.jpg', 69),
(181, 'product-photo/84.jpg', 73),
(182, 'product-photo/38.jpg', 74),
(187, 'product-photo/142.jpg', 63),
(188, 'product-photo/144.jpg', 64),
(189, 'product-photo/80.jpg', 65),
(190, 'product-photo/25.jpg', 66),
(191, 'product-photo/145.jpg', 67),
(192, 'product-photo/146.jpg', 68),
(194, 'product-photo/158.jpg', 70),
(195, 'product-photo/160.jpg', 71),
(196, 'product-photo/138.jpg', 72),
(199, 'product-photo/45.jpg', 75),
(200, 'product-photo/38.jpg', 76),
(201, 'product-photo/42.jpg', 77),
(202, 'product-photo/73.jpg', 78),
(204, 'product-photo/55.jpg', 80),
(205, 'product-photo/9.jpg', 81),
(206, 'product-photo/11.jpg', 82),
(207, 'product-photo/19.jpg', 83),
(208, 'product-photo/28.jpg', 84),
(209, 'product-photo/100.jpg', 85),
(210, 'product-photo/99.jpg', 86),
(211, 'product-photo/98.jpg', 91),
(212, 'product-photo/88.jpg', 87),
(213, 'product-photo/86.jpg', 88),
(214, 'product-photo/68.jpg', 89),
(215, 'product-photo/75.jpg', 90),
(216, 'product-photo/77.jpg', 92),
(217, 'product-photo/74.jpg', 93),
(218, 'product-photo/14.jpg', 94),
(225, 'product-photo/143.jpg', 78),
(226, 'product-photo/142.jpg', 79),
(246, 'product-photo/2.jpg', 96),
(247, 'product-photo/3.jpg', 97),
(248, 'product-photo/4.jpg', 98),
(256, 'product-photo/12.jpg', 106),
(257, 'product-photo/13.jpg', 107),
(258, 'product-photo/14.jpg', 108),
(259, 'product-photo/15.jpg', 109),
(260, 'product-photo/16.jpg', 110),
(261, 'product-photo/17.jpg', 111),
(262, 'product-photo/18.jpg', 112),
(263, 'product-photo/19.jpg', 113),
(264, 'product-photo/20.jpg', 114),
(265, 'product-photo/21.jpg', 115),
(266, 'product-photo/22.jpg', 116),
(267, 'product-photo/23.jpg', 117),
(326, 'product-photo/137.jpg', 95),
(327, 'product-photo/143.jpg', 96),
(330, 'product-photo/167.jpg', 99),
(331, 'product-photo/159.jpg', 100),
(332, 'product-photo/148.jpg', 101),
(333, 'product-photo/135.jpg', 102),
(334, 'product-photo/138.jpg', 103),
(335, 'product-photo/145.jpg', 104),
(336, 'product-photo/151.jpg', 105),
(502, 'product-photo/154.jpg', 109),
(511, 'product-photo/144.jpg', 118),
(512, 'product-photo/125.jpg', 119),
(513, 'product-photo/136.jpg', 120),
(514, 'product-photo/157.jpg', 121),
(515, 'product-photo/158.jpg', 122),
(516, 'product-photo/159.jpg', 123),
(517, 'product-photo/130.jpg', 124),
(518, 'product-photo/144.jpg', 125),
(519, 'product-photo/147.jpg', 126),
(520, 'product-photo/148.jpg', 127),
(521, 'product-photo/149.jpg', 128),
(522, 'product-photo/146.jpg', 129),
(523, 'product-photo/160.jpg', 130),
(524, 'product-photo/137.jpg', 131),
(525, 'product-photo/138.jpg', 132),
(526, 'product-photo/139.jpg', 133),
(527, 'product-photo/140.jpg', 134),
(528, 'product-photo/141.jpg', 135),
(529, 'product-photo/138.jpg', 136),
(530, 'product-photo/139.jpg', 137),
(531, 'product-photo/140.jpg', 138),
(532, 'product-photo/141.jpg', 139),
(533, 'product-photo/142.jpg', 140),
(534, 'product-photo/143.jpg', 141),
(535, 'product-photo/144.jpg', 142),
(536, 'product-photo/145.jpg', 143),
(537, 'product-photo/146.jpg', 144),
(538, 'product-photo/147.jpg', 145);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `review_id` int(10) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `rating` int(5) NOT NULL,
  `property_id` int(11) NOT NULL,
  `user_id` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`review_id`, `comment`, `rating`, `property_id`, `user_id`) VALUES
(26, 'excelllent', 3, 75, 0),
(27, 'it is very good', 4, 82, 16);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `phone_no` bigint(10) NOT NULL,
  `address` varchar(200) NOT NULL,
  `profile_pic` varchar(100) NOT NULL,
  `cover_pic` varchar(100) DEFAULT NULL,
  `id_type` varchar(100) NOT NULL,
  `id_photo` varchar(1000) NOT NULL,
  `verification_code` text NOT NULL,
  `otp_created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `email_verified_at` datetime DEFAULT NULL,
  `resetOtp` text DEFAULT NULL,
  `role` enum('tenant','owner','','') NOT NULL DEFAULT 'tenant'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `phone_no`, `address`, `profile_pic`, `cover_pic`, `id_type`, `id_photo`, `verification_code`, `otp_created_at`, `email_verified_at`, `resetOtp`, `role`) VALUES
(3, 'Sunil Bhattarai', 'sunilbhattarai131@gmail.com', '312433c28349f63c4f387953ff337046e794bea0f9b9ebfcb08e90046ded9c76', 9860080745, 'Butwal', '1ba0c5aaae0c14d9d1844a62b30f66ec30f47df1141f1d91bd3bb84eb0555876.jpg', '74b33d58b6fbe7413316275fa8c808f09b9ff90c409f4dc25771eca15d28cb96.jpg', 'Citizenship', '197943aec213b4a96dd4f1fcc8a9de5f4d757f9a3912185e8fb566607fc9d195.jpg', '654321', '2024-09-01 13:01:08', '2024-09-01 18:46:11', NULL, 'owner'),
(4, 'Suman Bhattarai', 'sumanbhattarai196@gmail.com', '312433c28349f63c4f387953ff337046e794bea0f9b9ebfcb08e90046ded9c76', 9860080745, 'Butwal', 'fe8ef337f90b6c16f2db9a5e377e3491f40436345453cdcf8e089c1a28fa3c86.jpg', 'd82c9262aa5b55330ede30187217217c23326fe2f8451837ea71636ebfc461cb.jpg', 'Citizenship', '5f460486fcae30bb831afb8a1a87ffb8df5447985ffa4da83b5c1896d3cc63a6.jpg', '654321', '2024-08-29 09:53:15', '2024-08-29 15:38:23', NULL, 'owner'),
(9, 'Sunil Bhattarai', 'sunilbhattarai1313@gmail.com', '312433c28349f63c4f387953ff337046e794bea0f9b9ebfcb08e90046ded9c76', 9860080745, 'Kathmandu', 'b3e4da67106509db1a214c4619460bfded03a708f9a994eb96c016614fe97dd5.jpg', NULL, 'Citizenship', 'ac2436a7f2e967b2c4334c6665a9a68fd34752c293222e34c7b34a0b3c9ed3c9.jpg', '654321', '2024-09-01 11:01:56', '2024-09-01 16:47:00', NULL, 'tenant'),
(19, 'Sunil Bhattarai', 'sunilbhattarai11@gmail.com', '312433c28349f63c4f387953ff337046e794bea0f9b9ebfcb08e90046ded9c76', 9867543234, 'Butwal', '8ebe02b1ddbb38aafff84963c7e5e74348558f53e4169518ae3efd9d010a0a0f.jpg', '1363375f68bc5bcc7a12b89b6ea724775994e6c9ac2a414022c9bf45b3cd94ed.jpg', 'Citizenship', '041d7bcbd283a39f497332092d81411645a795e6b6ca04f75959fb893c6d9ea1.jpg', '123456', '2024-09-01 16:25:20', '2024-09-01 22:10:28', NULL, 'tenant'),
(20, 'Sunil Bhattarai', 'sunilbhattarai1@gmail.com', '312433c28349f63c4f387953ff337046e794bea0f9b9ebfcb08e90046ded9c76', 9867543234, 'Kathmandu', 'a291a667e407dfc3f85e77fb83bd80e6d64bb9c0a489dccf1adc1e75c0fc5fc7.jpg', NULL, 'Citizenship', '537007e58a95cdb3f22851317fa2f6413d7429a60625c6ecfb2f4f6f1fd37784.jpg', '168528', '2024-09-01 16:27:06', NULL, NULL, 'tenant');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`),
  ADD KEY `owner_id` (`user_id`);

--
-- Indexes for table `property_photo`
--
ALTER TABLE `property_photo`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`review_id`),
  ADD KEY `property_id` (`property_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8069;

--
-- AUTO_INCREMENT for table `property_photo`
--
ALTER TABLE `property_photo`
  MODIFY `id` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=580;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `review_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
