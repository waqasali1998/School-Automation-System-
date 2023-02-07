-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 02, 2023 at 09:45 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school_manage`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `std_id` int(11) DEFAULT NULL,
  `std_name` varchar(255) NOT NULL,
  `attendance` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `book_ass`
--

CREATE TABLE `book_ass` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `book_name` varchar(255) NOT NULL,
  `deadline` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `status` varchar(255) NOT NULL,
  `approve` varchar(255) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_ass`
--

INSERT INTO `book_ass` (`id`, `name`, `book_name`, `deadline`, `date`, `status`, `approve`) VALUES
(10, 'Muhamad', ' Mariette In Ecstasy', '5-jan-2023', '2023-02-02 13:37:25', 'Missing', '1'),
(11, 'usman', 'The Rosie Result', '6-july-2023', '2023-02-02 13:37:55', 'Assign', '1'),
(12, 'Huma', 'Brain Quest Workbook Grade 1', '2-jan-2023', '2023-02-02 13:38:42', 'Return', '1');

-- --------------------------------------------------------

--
-- Table structure for table `classes`
--

CREATE TABLE `classes` (
  `id` int(11) NOT NULL,
  `class` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `classes`
--

INSERT INTO `classes` (`id`, `class`, `subject`) VALUES
(1, 'prap 1', ''),
(2, 'prap 2', ''),
(3, 'prap 3', '');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE `cv` (
  `id` int(255) NOT NULL,
  `tname` varchar(255) NOT NULL,
  `tlast` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `nic` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `branch` varchar(255) NOT NULL,
  `expertise` varchar(255) NOT NULL,
  `resume` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `phone` varchar(255) NOT NULL,
  `approve` int(11) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cv`
--

INSERT INTO `cv` (`id`, `tname`, `tlast`, `email`, `position`, `dob`, `nic`, `Qualification`, `gender`, `branch`, `expertise`, `resume`, `date`, `phone`, `approve`) VALUES
(40, 'waqas', 'ali', 'waqas1998ali@gmail.com', 'Visiting faculty', '2023-02-15', '42228989898989', 'BsCs', 'male', 'Gulshan', 'It gives me great pleasure to convey to the parents, students and all concerned my deep feeling of admiration and pride at the success which the school has achieved during the past 40 years.', 'applications.html', '2023-02-02 13:05:03', '03322474982', 1),
(41, 'Asad', 'ahmed', 'waqas1998ali@gmail.com', 'Visiting faculty', '2023-02-18', '687868686876', 'Bscs', 'Male', 'Johar', 'It gives me great pleasure to convey to the parents, students and all concerned my deep feeling of admiration and pride at the success which the school has achieved during the past 40 years.', 'favicon.ico', '2023-02-02 13:07:52', '1223768676678', 0),
(42, 'Romail', 'Butt', 'waqas1998ali@gmail.com', 'Junior teacher', '2023-02-10', '65454565654', 'BScs', 'Male', 'Gulshan', 'It gives me great pleasure to convey to the parents, students and all concerned my deep feeling of admiration and pride at the success which the school has achieved during the past 40 years.', '.version', '2023-02-02 13:09:31', '89898787979879', 0),
(43, 'farah', 'khan', 'waqas1998ali@gmail.com', 'Junior teacher', '2023-02-20', '88978797987987', 'Mqtric', 'Female', 'Gulshan', 'It gives me great pleasure to convey to the parents, students and all concerned my deep feeling of admiration and pride at the success which the school has achieved during the past 40 years.', '.modell', '2023-02-02 13:12:23', '67686786768', 0);

-- --------------------------------------------------------

--
-- Table structure for table `example`
--

CREATE TABLE `example` (
  `id` int(11) NOT NULL,
  `name` int(255) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `example`
--

INSERT INTO `example` (`id`, `name`) VALUES
(7, 1),
(8, 1);

-- --------------------------------------------------------

--
-- Table structure for table `library`
--

CREATE TABLE `library` (
  `asin_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `approve` varchar(255) NOT NULL DEFAULT '1',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `library`
--

INSERT INTO `library` (`asin_no`, `name`, `category`, `approve`, `id`) VALUES
('L188990', ':Limited Stock Mariette In Ecstasy', 'prap 1', '2', 10006),
('77777878', 'asadadda', 'prap 1', '2', 10007),
('77777878', 'asadadda', 'prap 1', '2', 10008),
('77777878', 'asadadda', 'prap 1', '2', 10009),
('L60090', ' Mariette In Ecstasy', 'prap 1', '1', 10010),
('L677898', 'The Rosie Result', 'prap 2', '1', 10011),
('L667667', 'Brain Quest Workbook Grade 1', 'prap 3', '1', 10012);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `role_id`, `full_name`, `email`, `password`) VALUES
(1, 3, 'Admin', 'admin@gmail.com', 'admin'),
(37, 1, 'Teacher', 'waqas40@school.pk', '123');

-- --------------------------------------------------------

--
-- Table structure for table `marks`
--

CREATE TABLE `marks` (
  `id` int(11) NOT NULL,
  `std_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prap 1`
--

CREATE TABLE `prap 1` (
  `id` int(11) NOT NULL,
  `std_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prap 2`
--

CREATE TABLE `prap 2` (
  `id` int(11) NOT NULL,
  `std_id` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `prap 3`
--

CREATE TABLE `prap 3` (
  `id` int(11) NOT NULL,
  `std_id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `marks` varchar(255) NOT NULL,
  `subject` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register_student`
--

CREATE TABLE `register_student` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `gardian` varchar(255) NOT NULL,
  `class` varchar(255) NOT NULL,
  `register_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `approve` int(255) NOT NULL DEFAULT 1,
  `email` varchar(255) NOT NULL,
  `father_nic` varchar(255) NOT NULL,
  `student_nic` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_student`
--

INSERT INTO `register_student` (`id`, `fname`, `lname`, `dob`, `address`, `number`, `gender`, `gardian`, `class`, `register_date`, `approve`, `email`, `father_nic`, `student_nic`) VALUES
(73, 'Uzair', 'khan', '2012-01-31', 'Kids School has always strived for excellence and we are strongly committed to providing ease and comfort to the community. For your safety and convenience, you can apply for an admission online on our website by filling out the form below and our represe', '+1 (576) 709-3224', 'Et autem atque lorem', 'ALi Khan', 'prap 2', '2023-02-02 08:14:40', 0, 'uzairi@mailinator.com', '9273223i32', '33092323323'),
(74, 'Huma', 'Arain', '1979-02-22', 'Kids School has always strived for excellence and we are strongly committed to providing ease and comfort to the community. For your safety and convenience, you can apply for an admission online on our website by filling out the form below and our represe', '+1 (924) 622-4867', 'Female', 'Ch Arain', 'prap 2', '2023-02-02 08:15:51', 1, 'huma@mailinator.com', '2134342342323', '42343423234'),
(75, 'Saleh', 'jutt', '1978-04-24', 'Kids School has always strived for excellence and we are strongly committed to providing ease and comfort to the community. For your safety and convenience, you can apply for an admission online on our website by filling out the form below and our represe', '+1 (702) 193-4852', 'Male', 'Saleh ', 'prap 3', '2023-02-02 08:16:38', 0, 'saleh@mailinator.com', '78978978978789', '897777878978798'),
(76, 'Raaziya', 'Gujjar', '2010-08-27', 'Kids School has always strived for excellence and we are strongly committed to providing ease and comfort to the community. For your safety and convenience, you can apply for an admission online on our website by filling out the form below and our represe', '+1 (673) 913-7594', 'Female', 'Raza', 'prap 1', '2023-02-02 08:18:12', 0, 'raaziya@mailinator.com', '8978978979', '7897789787'),
(77, 'Hazma', 'saleem', '1989-05-12', 'Kids School has always strived for excellence and we are strongly committed to providing ease and comfort to the community. For your safety and convenience, you can apply for an admission online on our website by filling out the form below and our represe', '+1 (853) 418-6549', 'Male', 'saleem', 'prap 1', '2023-02-02 08:19:21', 1, 'hamza@mailinator.com', '98098988080', '32320990900'),
(78, 'usman', 'alarm', '1974-08-10', 'Kids School has always strived for excellence and we are strongly committed to providing ease and comfort to the community. For your safety and convenience, you can apply for an admission online on our website by filling out the form below and our represe', '+1 (837) 613-3454', 'Male', 'Alarm', 'prap 1', '2023-02-02 08:20:50', 1, 'usman@mailinator.com', '4646464665456', '5656645445'),
(79, 'Muhamad', 'taha', '1979-06-12', 'Kids School has always strived for excellence and we are strongly committed to providing ease and comfort to the community. For your safety and convenience, you can apply for an admission online on our website by filling out the form below and our represe', '+1 (445) 319-2838', 'Male', 'M.asad', 'prap 1', '2023-02-02 08:22:04', 1, 'taha@mailinator.com', '8978978799', '7867867888');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL,
  `approve` varchar(255) NOT NULL DEFAULT '0',
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 'Teacher', 1, '2023-01-24 08:07:53', '2023-01-24 08:07:53'),
(2, 'Student', 1, '2023-01-24 08:08:23', '2023-01-24 08:08:23'),
(3, 'Admin', 1, '2023-01-24 08:12:33', '2023-01-24 08:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `pending` int(11) NOT NULL,
  `approve` int(11) NOT NULL,
  `delete` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`pending`, `approve`, `delete`) VALUES
(0, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `id` int(11) NOT NULL,
  `asin_no` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`id`, `asin_no`, `name`) VALUES
(1008, 'S1001', 'English'),
(1009, 'S1002', 'Urdu'),
(1010, 'S100M', 'Math');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_ass`
--

CREATE TABLE `teacher_ass` (
  `id` int(11) NOT NULL,
  `tname` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `class` varchar(255) DEFAULT NULL,
  `subject` varchar(255) NOT NULL,
  `date` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `teacher_ass`
--

INSERT INTO `teacher_ass` (`id`, `tname`, `email`, `class`, `subject`, `date`) VALUES
(91, 'waqas', 'waqas40@school.pk', 'prap 1', 'English', '2023-02-02 08:24:50'),
(92, 'waqas', 'waqas40@school.pk', 'prap 2', 'Urdu', '2023-02-02 08:25:01'),
(93, 'waqas', 'waqas40@school.pk', 'prap 3', 'Math', '2023-02-02 08:25:09');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_ass`
--
ALTER TABLE `book_ass`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `classes`
--
ALTER TABLE `classes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cv`
--
ALTER TABLE `cv`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `example`
--
ALTER TABLE `example`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `library`
--
ALTER TABLE `library`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `marks`
--
ALTER TABLE `marks`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prap 1`
--
ALTER TABLE `prap 1`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prap 2`
--
ALTER TABLE `prap 2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `prap 3`
--
ALTER TABLE `prap 3`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_student`
--
ALTER TABLE `register_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `teacher_ass`
--
ALTER TABLE `teacher_ass`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=640;

--
-- AUTO_INCREMENT for table `book_ass`
--
ALTER TABLE `book_ass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `classes`
--
ALTER TABLE `classes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `cv`
--
ALTER TABLE `cv`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `example`
--
ALTER TABLE `example`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `library`
--
ALTER TABLE `library`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10013;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT for table `marks`
--
ALTER TABLE `marks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `prap 1`
--
ALTER TABLE `prap 1`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `prap 2`
--
ALTER TABLE `prap 2`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `prap 3`
--
ALTER TABLE `prap 3`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `register_student`
--
ALTER TABLE `register_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1011;

--
-- AUTO_INCREMENT for table `teacher_ass`
--
ALTER TABLE `teacher_ass`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
