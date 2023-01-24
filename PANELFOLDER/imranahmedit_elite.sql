-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 07, 2022 at 07:09 AM
-- Server version: 10.3.35-MariaDB-log-cll-lve
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `imranahmedit_elite`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(60) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `email` varchar(60) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `password` varchar(60) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `lastactivity` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `email`, `password`, `lastactivity`) VALUES
(1, 'Imran Ahmed', 'Imran@elite-it.co.uk', 'e99a18c428cb38d5f260853678922e03', '2022-07-06 19:18:24');

-- --------------------------------------------------------

--
-- Table structure for table `chat_users`
--

CREATE TABLE `chat_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `type` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL,
  `status` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `chat_users`
--

INSERT INTO `chat_users` (`id`, `name`, `email`, `type`, `status`) VALUES
(1, 'admin', 'admin@gmail.com', 'admin', 'online'),
(2, 'Djordje', 'djordje@gmail.com', 'user', ''),
(3, 'lalarukh', 'lalarukh@mail.com', 'user', ''),
(4, 'Lalarukh', 'lalarukh@gmail.com', 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `comp_id` int(25) NOT NULL,
  `comp_name` varchar(80) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `comp_email` varchar(80) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `comp_phone` int(60) DEFAULT NULL,
  `comp_date` date DEFAULT NULL,
  `comp_category` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `comp_membership` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `comp_password` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `comp_address1` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `comp_state` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `comp_address2` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `comp_postcode` int(20) DEFAULT NULL,
  `comp_city` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `comp_country` varchar(60) COLLATE utf8_unicode_520_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`comp_id`, `comp_name`, `comp_email`, `comp_phone`, `comp_date`, `comp_category`, `comp_membership`, `comp_password`, `comp_address1`, `comp_state`, `comp_address2`, `comp_postcode`, `comp_city`, `comp_country`) VALUES
(4, 'ABC(updated)', 'hello@world.com', 1234567890, '2022-01-03', 'categ_3', 'membership_professional', 'e99a18c428cb38d5f260853678922e03', 'Dha Phase 8', 'Punjab', 'Lahore cantt', 54000, 'Lahore', 'Pakistan'),
(5, 'Harlow bakers', 'updated@mail.com', 12345689, '2021-11-08', 'categ_2', 'membership_free(update)', 'e99a18c428cb38d5f260853678922e03', 'United Kingdom (updated)', 'ABC-Updated', 'UK(Updated) ', 4321, 'Bradford(Update)', 'United Kingdom(UPDATED)');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `emp_id` int(50) NOT NULL,
  `emp_name` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `emp_email` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `emp_phone` int(30) DEFAULT NULL,
  `emp_date` date DEFAULT NULL,
  `emp_category` varchar(30) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `emp_password` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `emp_company` varchar(100) COLLATE utf8_unicode_520_ci DEFAULT NULL,
  `emp_address` varchar(100) COLLATE utf8_unicode_520_ci NOT NULL,
  `emp_state` varchar(60) COLLATE utf8_unicode_520_ci NOT NULL,
  `emp_city` varchar(60) COLLATE utf8_unicode_520_ci NOT NULL,
  `emp_country` varchar(60) COLLATE utf8_unicode_520_ci NOT NULL,
  `lastactivity` datetime DEFAULT NULL,
  `member_since` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`emp_id`, `emp_name`, `emp_email`, `emp_phone`, `emp_date`, `emp_category`, `emp_password`, `emp_company`, `emp_address`, `emp_state`, `emp_city`, `emp_country`, `lastactivity`, `member_since`) VALUES
(2, 'Djordje ', 'djordje@gmail.com', 98123786, '2021-12-21', 'admin', 'abc123', 'Harlow bakers', 'ABC Street near lahore', 'KPK', 'Qwerty', 'Canada', '2022-07-06 18:12:41', '2022-01-09 05:39:09'),
(3, 'Henry (!)', 'henry@email.com', 123456789, '2021-11-18', 'employee', 'abc123', 'ABC(updated)', 'DHA phase 8', 'LHR', 'lahore', 'Pakistan', '2022-06-27 17:40:47', '2022-01-09 05:39:18'),
(4, 'Alpha', 'alpha123@gmail.com', 897654123, '2020-12-16', 'employee', 'abc123', 'Harlow bakers', 'Street 3 phase 8', '543', 'Bradford', 'United Kingdom', '2022-06-04 21:24:17', '2022-01-09 05:39:26'),
(5, 'Jack Wilson', 'jack.wilson@gmail.com', 456789123, '2022-01-09', 'admin', 'abc123', 'ABC', 'Jack street, Phase 6 ', 'Punjab', 'Lahore', 'Hungary', '2022-07-06 18:11:09', '2022-01-09 07:41:49'),
(6, 'Luck Sam', 'luck.sam@gmail.com', 78893211, '2022-01-09', 'employee', 'abc123', 'ABC', 'Luck Phase 9 street 3', 'BGL', 'Paris', 'Palestine', '2022-07-01 15:48:23', '2022-01-09 05:54:37'),
(7, 'George Kim', 'kimgeorge@gmail.com', 67539222, '2022-01-09', 'employee', 'abc123', 'ABC', 'Kim Street George Phase 8', 'HTS', 'Istanbul', 'Turkey', '2022-07-01 17:14:55', '2022-01-09 05:57:40');

-- --------------------------------------------------------

--
-- Table structure for table `employee_cart`
--

CREATE TABLE `employee_cart` (
  `id` int(20) NOT NULL,
  `eemail` varchar(125) NOT NULL,
  `ecompname` varchar(125) NOT NULL,
  `pid` int(20) NOT NULL,
  `email_pid` varchar(125) NOT NULL,
  `pname` varchar(125) NOT NULL,
  `pprize` varchar(20) NOT NULL,
  `pimg` varchar(125) NOT NULL,
  `pdesc` varchar(1000) NOT NULL,
  `status` varchar(50) NOT NULL,
  `admin_status` varchar(125) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee_cart`
--

INSERT INTO `employee_cart` (`id`, `eemail`, `ecompname`, `pid`, `email_pid`, `pname`, `pprize`, `pimg`, `pdesc`, `status`, `admin_status`) VALUES
(7, 'djordje@gmail.com', 'Harlow bakers', 46, 'djordje@gmail.com_46', 'USB Cable', '1.2', '3.jpg', 'Suspendisse sagittis nibh ut tortor luctus, non elementum enim euismod. In ut accumsan nisi, in auctor leo. Proin mattis elit sit amet suscipit varius. Praesent venenatis eros quis lectus placerat tempor. Nulla rhoncus dictum tempor. Sed ornare lectus convallis tellus elementum condimentum ultricies eget metus. Praesent ut dapibus massa, et maximus libero. Nullam molestie tincidunt libero, in ornare turpis dictum euismod. Nulla varius maximus porttitor. Duis pulvinar lectus ut nibh fermentum, quis consectetur augue sollicitudin.', 'Approved', ''),
(4, 'djordje@gmail.com', 'Harlow bakers', 51, 'djordje@gmail.com_51', 'Microphone accessory', '50', 'mic.jpg', 'A microphone, colloquially called a mic or mike (/maÉªk/),[1] is a transducer that converts sound into an electrical signal. Microphones are used in many applications such as telephones, hearing aids, public address systems for concert halls and public events, motion picture production, live and recorded audio engineering, sound recording, two-way radios, megaphones, and radio and television broadcasting. They are also used in computers for recording voice, speech recognition, VoIP, and for other purposes such as ultrasonic sensors or knock.', 'Pending', ''),
(5, 'djordje@gmail.com', 'Harlow bakers', 52, 'djordje@gmail.com_52', 'Iphone 13 Pro', '2000', 'iphone.jpg', 'The iPhone 13 and iPhone 13 Mini (stylized as iPhone 13 mini) are smartphones designed, developed, marketed, and sold by Apple Inc. They are the fifteenth generation of iPhones (succeeding the iPhone 12 and iPhone 12 Mini). They were unveiled at an Apple Event in Apple Park in Cupertino, California on September 14, 2021, alongside the higher priced iPhone 13 Pro and iPhone 13 Pro Max flagships. Pre-orders for the iPhone 13 and iPhone 13 Mini began on September 17, 2021. They were officially released on September 24, 2021.', 'Pending', ''),
(9, 'djordje@gmail.com', 'Harlow bakers', 40, 'djordje@gmail.com_40', 'Laptop', '0.3', '2.jpg', 'Phasellus sodales ultrices leo, id tincidunt ex elementum a. Quisque arcu sem, fringilla eget nulla eu, suscipit vehicula est. Suspendisse sagittis nibh ut tortor luctus, non elementum enim euismod. In ut accumsan nisi, in auctor leo. Proin mattis elit sit amet suscipit varius. Praesent venenatis eros quis lectus placerat tempor. Nulla rhoncus dictum tempor. Sed ornare lectus convallis tellus elementum condimentum ultricies eget metus. Praesent ut dapibus massa, et maximus libero. Nullam molestie tincidunt libero, in ornare turpis dictum euismod. Nulla varius maximus porttitor. Duis pulvinar lectus ut nibh fermentum, quis consectetur augue sollicitudin.', 'Approved', 'Approved');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `mid` int(11) NOT NULL,
  `message` text COLLATE utf8_unicode_520_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `ref_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `status` varchar(255) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`mid`, `message`, `user_id`, `ref_id`, `time`, `status`) VALUES
(1, 'Hello admin, msg from Djordje user!!!', 2, 1, '2022-01-16 13:32:41', 'read'),
(2, 'Welcome Djordje, how can we help you?', 1, 2, '2022-01-16 13:33:11', ''),
(3, 'Hello From Lalarukh!', 3, 1, '2022-01-17 17:39:52', 'read'),
(4, 'Hello from Admin', 1, 3, '2022-01-17 17:40:05', ''),
(5, 'Hello again from lalarukh chat medium', 3, 1, '2022-03-03 05:45:46', 'read'),
(6, 'Hey\r\n', 1, 3, '2022-03-03 05:45:54', ''),
(7, 'Hi, New message from Djordje.\r\n', 2, 1, '2022-03-04 04:41:48', 'read'),
(8, 'Hi again :) Djordje text\r\n', 2, 1, '2022-03-19 18:22:30', 'read'),
(9, 'Hey again at 11\r\n', 1, 2, '2022-03-19 18:22:45', ''),
(10, 'Hi back to the room!', 2, 1, '2022-03-19 18:23:44', 'read');

-- --------------------------------------------------------

--
-- Table structure for table `order_requests`
--

CREATE TABLE `order_requests` (
  `id` int(100) NOT NULL,
  `userid` int(125) NOT NULL,
  `productname` varchar(200) COLLATE utf8_unicode_520_ci NOT NULL,
  `productimage` varchar(125) COLLATE utf8_unicode_520_ci NOT NULL,
  `type` varchar(125) COLLATE utf8_unicode_520_ci NOT NULL,
  `catalogue` varchar(125) COLLATE utf8_unicode_520_ci NOT NULL,
  `price` double NOT NULL,
  `useremail` varchar(125) COLLATE utf8_unicode_520_ci NOT NULL,
  `companyname` varchar(125) COLLATE utf8_unicode_520_ci NOT NULL,
  `description` varchar(1000) COLLATE utf8_unicode_520_ci NOT NULL,
  `status` varchar(40) COLLATE utf8_unicode_520_ci NOT NULL,
  `c_approved` varchar(50) COLLATE utf8_unicode_520_ci NOT NULL,
  `applied_date` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `order_requests`
--

INSERT INTO `order_requests` (`id`, `userid`, `productname`, `productimage`, `type`, `catalogue`, `price`, `useremail`, `companyname`, `description`, `status`, `c_approved`, `applied_date`) VALUES
(39, 4, 'Wireless Mouse', 'mouse.jpg', '9', '1', 0.5, 'alpha123@gmail.com', 'Harlow bakers', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam nisi massa, bibendum eget nulla et, tincidunt finibus lectus. Duis lobortis nulla ac tincidunt placerat. Praesent nulla risus, feugiat et libero porta, accumsan semper turpis. Nullam a tortor lacinia, egestas ligula nec, dignissim ante. Cras eget accumsan diam. Vestibulum vitae purus eu neque pellentesque ultricies non eget quam. Nam sit amet ornare lorem, eget varius est. Integer eget faucibus justo. Morbi in lorem quam. Donec consectetur nibh ac sapien mollis, at porta urna luctus. Fusce tellus magna, eleifend id mi sed, consequat fringilla nunc. In quis nunc a eros venenatis interdum.', 'Approved', '', '2022-06-06 17:25:49'),
(40, 4, 'Laptop', '2.jpg', '3', '2', 0.3, 'alpha123@gmail.com', 'Harlow bakers', 'Phasellus sodales ultrices leo, id tincidunt ex elementum a. Quisque arcu sem, fringilla eget nulla eu, suscipit vehicula est. Suspendisse sagittis nibh ut tortor luctus, non elementum enim euismod. In ut accumsan nisi, in auctor leo. Proin mattis elit sit amet suscipit varius. Praesent venenatis eros quis lectus placerat tempor. Nulla rhoncus dictum tempor. Sed ornare lectus convallis tellus elementum condimentum ultricies eget metus. Praesent ut dapibus massa, et maximus libero. Nullam molestie tincidunt libero, in ornare turpis dictum euismod. Nulla varius maximus porttitor. Duis pulvinar lectus ut nibh fermentum, quis consectetur augue sollicitudin.', 'Approved', 'Approved', '2022-06-06 17:28:46'),
(41, 4, 'Curved Monitor ', '4.jpg', '5', '1', 10.2, 'alpha123@gmail.com', 'Harlow bakers', 'Sed eu magna a purus faucibus sagittis. Nam bibendum eros nibh, ac ultrices sapien euismod et. Mauris vulputate sed metus nec pellentesque. Aliquam erat volutpat. Nulla suscipit risus massa, sed sollicitudin lacus volutpat pellentesque. Maecenas a dictum urna, sed tempor dolor. Vestibulum luctus risus et est posuere eleifend.', 'Approved', 'Approved', '2022-06-06 19:42:34'),
(42, 4, 'Simple Desktop ', '8.jpg', '1', '6', 12.3, 'alpha123@gmail.com', 'Harlow bakers', 'Donec euismod enim vel enim vestibulum hendrerit ut eleifend nisi. Aliquam justo tellus, hendrerit nec sem sed, dignissim volutpat felis. Aenean nibh augue, imperdiet at arcu ut, sollicitudin pellentesque tortor. Suspendisse eget sodales magna, ut vulputate velit. Integer in tortor nibh. Nulla eleifend ante justo, sit amet fringilla lorem iaculis auctor. Nulla consequat, ipsum quis auctor vulputate, justo dolor pellentesque diam, dignissim venenatis erat nunc et mi. Nam at lorem accumsan, bibendum libero id, facilisis libero.', 'Approved', '', '2022-06-06 19:43:38'),
(43, 4, 'Headphones', '6.jpg', '7', '3', 5.3, 'alpha123@gmail.com', 'Harlow bakers', 'Nullam commodo ornare augue eu malesuada. Curabitur sodales nunc mauris, a vestibulum lectus fermentum accumsan. Aenean ut leo sit amet nunc condimentum aliquam non a ante. Donec tempor felis a ultrices lobortis. Praesent ornare ipsum eu ex convallis condimentum. Donec tincidunt accumsan lacus sed fringilla. Suspendisse eros est, luctus sed metus ut, tempor imperdiet orci. Aliquam erat volutpat. Suspendisse potenti. Vivamus tempus nibh pulvinar mauris vulputate accumsan. Maecenas tempor leo quis arcu congue facilisis. Duis sit amet semper magna, ac tempus velit. Ut varius lacus sed erat porttitor, vitae euismod lorem feugiat. Ut luctus, libero et volutpat viverra, ante lacus ultricies purus, nec faucibus lectus ligula eu nibh. Vestibulum eget metus ac est venenatis aliquam.', 'Pending', '', '2022-06-06 19:44:38'),
(44, 4, 'Headset Wireless', '7.jpg', '7', '3', 5.3, 'alpha123@gmail.com', 'Harlow bakers', 'Suspendisse eros est, luctus sed metus ut, tempor imperdiet orci. Aliquam erat volutpat. Suspendisse potenti. Vivamus tempus nibh pulvinar mauris vulputate accumsan. Maecenas tempor leo quis arcu congue facilisis. Duis sit amet semper magna, ac tempus velit. Ut varius lacus sed erat porttitor, vitae euismod lorem feugiat. Ut luctus, libero et volutpat viverra, ante lacus ultricies purus, nec faucibus lectus ligula eu nibh. Vestibulum eget metus ac est venenatis aliquam.', 'Pending', '', '2022-06-06 19:45:21'),
(45, 4, 'Wireless Keyboard ', '5.jpg', '8', '2', 6.2, 'alpha123@gmail.com', 'Harlow bakers', 'Sed tristique metus mi, ac efficitur tortor dignissim non. Proin sapien nulla, luctus non sapien ac, dictum dictum nisl. Phasellus elit nisi, tempor nec nulla vel, sagittis vestibulum turpis. Duis sed hendrerit purus. Vestibulum facilisis lacus ac turpis rhoncus rutrum. Quisque consequat metus non sem commodo iaculis. Morbi eget neque efficitur, consectetur leo at, dignissim nulla. Curabitur in venenatis elit, id consequat leo. Aenean posuere orci ac scelerisque egestas. Sed a lectus ac mauris porta lobortis. Sed aliquet sagittis nibh ac posuere.', 'Approved', '', '2022-06-06 19:46:15'),
(46, 4, 'USB Cable', '3.jpg', '15', '5', 1.2, 'alpha123@gmail.com', 'Harlow bakers', 'Suspendisse sagittis nibh ut tortor luctus, non elementum enim euismod. In ut accumsan nisi, in auctor leo. Proin mattis elit sit amet suscipit varius. Praesent venenatis eros quis lectus placerat tempor. Nulla rhoncus dictum tempor. Sed ornare lectus convallis tellus elementum condimentum ultricies eget metus. Praesent ut dapibus massa, et maximus libero. Nullam molestie tincidunt libero, in ornare turpis dictum euismod. Nulla varius maximus porttitor. Duis pulvinar lectus ut nibh fermentum, quis consectetur augue sollicitudin.', 'Approved', 'Approved', '2022-06-06 19:46:55'),
(47, 4, 'Compatible Desk ', '9.jpg', '18', '3', 9.3, 'alpha123@gmail.com', 'Harlow bakers', 'Maecenas a dictum urna, sed tempor dolor. Vestibulum luctus risus et est posuere eleifend. Donec euismod enim vel enim vestibulum hendrerit ut eleifend nisi. Aliquam justo tellus, hendrerit nec sem sed, dignissim volutpat felis. Aenean nibh augue, imperdiet at arcu ut, sollicitudin pellentesque tortor. Suspendisse eget sodales magna, ut vulputate velit. Integer in tortor nibh. Nulla eleifend ante justo, sit amet fringilla lorem iaculis auctor. Nulla consequat, ipsum quis auctor vulputate, justo dolor pellentesque diam, dignissim venenatis erat nunc et mi. Nam at lorem accumsan, bibendum libero id, facilisis libero.', 'Approved', '', '2022-06-06 19:47:57'),
(48, 4, 'Desk Chair', '10.jpg', '20', '5', 24.5, 'alpha123@gmail.com', 'Harlow bakers', '. Vivamus tempus nibh pulvinar mauris vulputate accumsan. Maecenas tempor leo quis arcu congue facilisis. Duis sit amet semper magna, ac tempus velit. Ut varius lacus sed erat porttitor, vitae euismod lorem feugiat. Ut luctus, libero et volutpat viverra, ante lacus ultricies purus, nec faucibus lectus ligula eu nibh. Vestibulum eget metus ac est venenatis aliquam.\r\n\r\nSed tristique metus mi, ac efficitur tortor dignissim non. Proin sapien nulla, luctus non sapien ac, dictum dictum nisl.', 'Pending', '', '2022-06-06 19:49:31'),
(49, 2, 'Printer', 'printers.jpg', '10', '1', 7.8, 'djordje@gmail.com', 'Harlow bakers', 'Mauris vulputate sed metus nec pellentesque. Aliquam erat volutpat. Nulla suscipit risus massa, sed sollicitudin lacus volutpat pellentesque. Maecenas a dictum urna, sed tempor dolor. Vestibulum luctus risus et est posuere eleifend. Donec euismod enim vel enim vestibulum hendrerit ut eleifend nisi. Aliquam justo tellus, hendrerit nec sem sed, dignissim volutpat felis. Aenean nibh augue, imperdiet at arcu ut, sollicitudin pellentesque tortor. Suspendisse eget sodales magna, ut vulputate velit. Integer in tortor nibh. ', 'Approved', '', '2022-06-06 20:05:04'),
(50, 2, 'Mouse Pad', 'mousepad.jpg', '9', '1', 32, 'djordje@gmail.com', 'Harlow bakers', 'Praesent ornare ipsum eu ex convallis condimentum. Donec tincidunt accumsan lacus sed fringilla. Suspendisse eros est, luctus sed metus ut, tempor imperdiet orci. Aliquam erat volutpat. Suspendisse potenti. Vivamus tempus nibh pulvinar mauris vulputate accumsan. Maecenas tempor leo quis arcu congue facilisis. Duis sit amet semper magna, ac tempus velit. Ut varius lacus sed erat porttitor, vitae euismod lorem feugiat. Ut luctus, libero et volutpat viverra, ante lacus ultricies purus, nec faucibus lectus ligula eu nibh. ', 'Approved', '', '2022-06-07 17:54:13'),
(51, 2, 'Microphone accessory', 'mic.jpg', '11', '4', 50, 'djordje@gmail.com', 'Harlow bakers', 'A microphone, colloquially called a mic or mike (/maÉªk/),[1] is a transducer that converts sound into an electrical signal. Microphones are used in many applications such as telephones, hearing aids, public address systems for concert halls and public events, motion picture production, live and recorded audio engineering, sound recording, two-way radios, megaphones, and radio and television broadcasting. They are also used in computers for recording voice, speech recognition, VoIP, and for other purposes such as ultrasonic sensors or knock.', 'Approved', 'Approved', '2022-06-22 15:45:32'),
(52, 2, 'Iphone 13 Pro', 'iphone.jpg', '2', '3', 2000, 'djordje@gmail.com', 'Harlow bakers', 'The iPhone 13 and iPhone 13 Mini (stylized as iPhone 13 mini) are smartphones designed, developed, marketed, and sold by Apple Inc. They are the fifteenth generation of iPhones (succeeding the iPhone 12 and iPhone 12 Mini). They were unveiled at an Apple Event in Apple Park in Cupertino, California on September 14, 2021, alongside the higher priced iPhone 13 Pro and iPhone 13 Pro Max flagships. Pre-orders for the iPhone 13 and iPhone 13 Mini began on September 17, 2021. They were officially released on September 24, 2021.', 'Approved', 'Approved', '2022-06-22 15:54:20'),
(53, 2, 'WebCam 11 Max', 'webcm.jpg', '12', '5', 300, 'djordje@gmail.com', 'Harlow bakers', 'gfdgdfg gbfcgfg', 'Pending', '', '2022-06-24 16:04:39'),
(54, 2, 'Charger 89', 'chrger.jpg', '17', '3', 40, 'djordje@gmail.com', 'Harlow bakers', 'The Dodge Charger is a model of automobile marketed by Dodge in various forms over seven generations since 1966.\r\nThe first Charger was a show car in 1964.[1][2] A 1965 Charger II concept car resembled the 1966 production version', 'Approved', '', '2022-06-24 16:08:25'),
(55, 2, 'Shredders', 'shredder.jpg', '11', '4', 280, 'djordje@gmail.com', 'Harlow bakers', 'The Shredder (Oroku Saki, Japanese: å¤§å…­å’²) is a supervillain and the main antagonist of the Teenage Mutant Ninja Turtles franchise.[1] Created by Kevin Eastman and Peter Laird, he first appeared in the comic book Teenage Mutant Ninja Turtles #1 in May 1984. The Shredder is depicted as the ruthless leader of a criminal organization known as the Foot Clan, and serves as the arch-nemesis of the Turtles and Splinter.', 'Approved', '', '2022-06-24 16:29:28'),
(56, 2, 'Monitor Arms', 'arms.jpg', '26', '2', 250, 'djordje@gmail.com', 'Harlow bakers', 'The Foot Clan are the most feared clan of warriors and assassins in Japan. Both Hamato Yoshi and Oroku Nagi were members.', 'Pending', '', '2022-06-24 17:33:45'),
(57, 2, 'Laptop i5 DELL', 'lapop.jpg', '1', '1', 300, 'djordje@gmail.com', 'Harlow bakers', 'A laptop, laptop computer, or notebook computer is a small, portable personal computer (PC) with a screen and alphanumeric keyboard. ', 'Pending', '', '2022-06-25 12:40:57'),
(58, 0, '', '', '', '', 0, '', '', '', 'Pending', '', '2022-07-05 18:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `product_catalogue`
--

CREATE TABLE `product_catalogue` (
  `id` int(50) NOT NULL,
  `names` varchar(125) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `product_catalogue`
--

INSERT INTO `product_catalogue` (`id`, `names`) VALUES
(1, 'Product'),
(2, 'Engineering'),
(3, 'Sales'),
(4, 'Customer Support'),
(5, 'Operations'),
(6, 'Legal & Finance');

-- --------------------------------------------------------

--
-- Table structure for table `product_category`
--

CREATE TABLE `product_category` (
  `id` int(50) NOT NULL,
  `category` varchar(125) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `product_category`
--

INSERT INTO `product_category` (`id`, `category`) VALUES
(1, 'Devices'),
(2, 'IT Peripherals'),
(3, 'IT Accessories'),
(4, 'Furniture'),
(5, 'Furniture Accessories');

-- --------------------------------------------------------

--
-- Table structure for table `product_category_types`
--

CREATE TABLE `product_category_types` (
  `id` int(50) NOT NULL,
  `category_id` int(50) NOT NULL,
  `types` varchar(125) COLLATE utf8_unicode_520_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_520_ci;

--
-- Dumping data for table `product_category_types`
--

INSERT INTO `product_category_types` (`id`, `category_id`, `types`) VALUES
(1, 1, 'Laptops'),
(2, 1, 'Mobile devices'),
(3, 1, 'Desktops'),
(4, 1, 'Tablets'),
(5, 2, 'Monitors'),
(6, 2, 'Docking Stations'),
(7, 2, 'Headsets'),
(8, 2, 'Keyboards'),
(9, 2, 'Mice & Trackpads'),
(10, 2, 'Printers'),
(11, 2, 'Shredders'),
(12, 2, 'Webcams'),
(13, 2, 'WiFi range extenders'),
(14, 3, 'Dongles'),
(15, 3, 'Cables'),
(16, 3, 'Adapters'),
(17, 3, 'Chargers'),
(18, 4, 'Desks'),
(19, 4, 'Chairs'),
(20, 4, 'Desk risers'),
(21, 5, 'Standing mats'),
(22, 5, 'Laptop stands'),
(23, 5, 'Foot rests'),
(24, 5, 'Task lights'),
(25, 5, 'Desk tidies'),
(26, 5, 'Monitor arms');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `chat_users`
--
ALTER TABLE `chat_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`comp_id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`emp_id`),
  ADD UNIQUE KEY `unique` (`emp_email`);

--
-- Indexes for table `employee_cart`
--
ALTER TABLE `employee_cart`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_pid` (`email_pid`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `order_requests`
--
ALTER TABLE `order_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_catalogue`
--
ALTER TABLE `product_catalogue`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category`
--
ALTER TABLE `product_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_category_types`
--
ALTER TABLE `product_category_types`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `chat_users`
--
ALTER TABLE `chat_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `comp_id` int(25) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `emp_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `employee_cart`
--
ALTER TABLE `employee_cart`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `order_requests`
--
ALTER TABLE `order_requests`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=59;

--
-- AUTO_INCREMENT for table `product_catalogue`
--
ALTER TABLE `product_catalogue`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_category`
--
ALTER TABLE `product_category`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `product_category_types`
--
ALTER TABLE `product_category_types`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
