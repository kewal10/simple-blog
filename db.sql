-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Sep 28, 2016 at 10:32 AM
-- Server version: 5.6.28
-- PHP Version: 7.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `tech`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_title` varchar(255) NOT NULL,
  `post_description` text NOT NULL,
  `post_category` varchar(255) NOT NULL,
  `post_media` text NOT NULL,
  `post_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`post_id`, `user_id`, `post_title`, `post_description`, `post_category`, `post_media`, `post_date`) VALUES
(1, 1, 'Web Development', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dictum turpis augue, non rhoncus mi scelerisque ut. Nulla \n\nmattis purus quis nibh tristique, placerat pulvinar dui imperdiet. Sed neque nibh, pharetra eu orci et, mollis finibus purus. Vestibulum feugiat turpis dolor', 'Programming', '', '2016-04-13 02:54:13'),
(2, 1, 'Learn PHP', 'vitae fringilla magna consequat eu. Pellentesque vel porttitor ante, nec bibendum justo. Morbi dui magna, consequat egestas purus at, posuere rhoncus enim. Nunc metus lacus, vehicula ac condimentum vel, accumsan ut mauris.\r\nEtiam suscipit aliquet laoreet. Praesent pellentesque ultricies dolor, id sagittis odio lacinia eu. Nunc suscipit pharetra dolor sit amet dignissim. Lorem ipsum dolor sit amet,', 'Programming', '', '2016-03-22 21:28:14'),
(9, 1, 'photoshop for mockup', 'photoshop for mockup photoshop for mockup', 'Web Design', '', '2016-04-07 07:00:20'),
(10, 0, 'programming', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dictum turpis augue, non rhoncus mi scelerisque ut. Nulla mattis purus quis nibh tristique, placerat pulvinar dui imperdiet. Sed neque nibh, pharetra eu orci et, mollis finibus purus. Vestibulum feugiat turpis dolor', 'Programming', '', '2016-09-28 07:14:53'),
(11, 0, 'python ', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque dictum turpis augue, non rhoncus mi scelerisque ut. Nulla mattis purus quis nibh tristique, placerat pulvinar dui imperdiet. Sed neque nibh, pharetra eu orci et, mollis finibus purus. Vestibulum feugiat turpis dolor', 'Programming', '', '2016-09-28 07:15:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `user_name` varchar(40) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `first_name`, `last_name`, `email`, `user_name`, `password`) VALUES
(1, 'Kewal', 'me', 'kewal@me.com', 'admin', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`post_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `post_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;