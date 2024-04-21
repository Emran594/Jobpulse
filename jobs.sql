-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 21, 2024 at 03:36 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jobs`
--

-- --------------------------------------------------------

--
-- Table structure for table `application_status`
--

CREATE TABLE `application_status` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_application_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('rejected','hired') NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application_status`
--

INSERT INTO `application_status` (`id`, `job_application_id`, `candidate_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'hired', '2024-03-19 21:49:14', '2024-03-19 21:49:14'),
(2, 1, 1, 'hired', '2024-03-19 21:55:58', '2024-03-19 21:55:58'),
(3, 1, 1, 'hired', '2024-03-19 21:56:04', '2024-03-19 21:56:04'),
(4, 1, 1, 'hired', '2024-03-19 22:00:43', '2024-03-19 22:00:43'),
(5, 1, 1, 'hired', '2024-03-19 22:00:48', '2024-03-19 22:00:48'),
(6, 1, 1, 'hired', '2024-03-19 22:01:54', '2024-03-19 22:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`id`, `user_id`, `first_name`, `last_name`, `address`, `email`, `image`, `phone`, `created_at`, `updated_at`) VALUES
(1, 12, 'Abu Hanif', 'Chowdhury', 'Parbat, Gabtoli, Mirpur, Dhaka 1216', 'abu hanifc@gmail.com', 'uploads/12-1710563982-avatar-1.jpg', '01313711151', '2024-03-15 22:39:42', '2024-03-15 22:39:42'),
(2, 13, 'Asaduj Zaman', 'anik', 'Puran Bogra, Rajshahi Division, Bangladesh', 'anik@gmail.com', 'uploads/13-1710564887-avatar-8.jpg', '01312515242', '2024-03-15 22:54:47', '2024-03-15 22:54:47');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Full Stack Developer', NULL, NULL),
(2, 'Designer', NULL, NULL),
(3, 'Front End Developer', NULL, NULL),
(4, 'Backend Deveoloper', NULL, NULL),
(5, 'Digital Marketer', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `companies`
--

CREATE TABLE `companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `description` text DEFAULT NULL,
  `industry_type` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `employee` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `logo` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `companies`
--

INSERT INTO `companies` (`id`, `user_id`, `name`, `description`, `industry_type`, `location`, `employee`, `email`, `phone`, `logo`, `website`, `created_at`, `updated_at`) VALUES
(1, 2, 'Hovata Technology', 'It seems like you\'re asking for Lorem Ipsum text. Lorem Ipsum is a placeholder text commonly used in the design and publishing industries to simulate the appearance of written content. Here\'s an example of Lorem Ipsum text with 20 words:\r\n\r\n\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\"\r\n\r\nPlease note that Lorem Ipsum text has no inherent meaning and is used purely as a placeholder for visual design or layout purposes.', 'It / Software', 'Purana Paltan,Dhaka', '23', 'emran@example.com', '01313711151', 'uploads/2-1710565981-img-1.png', 'linnta.com', '2024-03-15 23:13:01', '2024-03-15 23:13:01'),
(2, 3, 'Lecture Pulbications Ltd', 'It seems like you\'re asking for Lorem Ipsum text. Lorem Ipsum is a placeholder text commonly used in the design and publishing industries to simulate the appearance of written content. Here\'s an example of Lorem Ipsum text with 20 words:\r\n\r\n\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\"\r\n\r\nPlease note that Lorem Ipsum text has no inherent meaning and is used purely as a placeholder for visual design or layout purposes.', 'Education & training', 'Purana Paltan,Dhaka', '200', 'emran@example.com', '01313711151', 'uploads/3-1710566200-img-7.png', 'linnta.com', '2024-03-15 23:16:40', '2024-03-15 23:16:40'),
(3, 4, 'Akij Group Of Industries', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Accounting & Finance', 'Dhaka,Bangladesh', '23', 'akij@gmail.com', '01964611277', 'uploads/4-1713689287-img-1.png', 'https://www.lipsum.com/', '2024-04-21 02:48:07', '2024-04-21 02:48:07'),
(4, 5, 'Bright Printing & Packaging', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).\\\r\nIt is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).', 'Accounting & Finance', 'Rajshahi,Bangladesh', '54', 'mohasin@gmail.com', '01964611277', 'uploads/5-1713689541-img-2.png', 'https://www.lipsum.com/', '2024-04-21 02:52:21', '2024-04-21 02:52:21'),
(5, 6, 'Omicon Group Of Industries', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'Purchasing Manager', 'Chittagong,Bangladesh', '1200', 'hr@omicon.com', '01964611277', 'uploads/6-1713691425-img-3.png', 'https://www.lipsum.com/', '2024-04-21 03:23:45', '2024-04-21 03:23:45'),
(6, 7, 'BelivIt', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.\\\r\n\r\nThere are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'It / Software', 'Paltan,Dhaka', '54', 'smemranhasans@gmail.com', '01964611277', 'uploads/7-1713691518-img-4.png', 'https://www.lipsum.com/', '2024-04-21 03:25:18', '2024-04-21 03:25:18'),
(7, 8, 'Lecture Publications Ltd', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'Education & training', 'Dhaka,Bangladesh', '235', 'smemranhasans@gmail.com', '01321150678', 'uploads/8-1713691607-img-6.png', 'lecturepublication.com', '2024-04-21 03:26:47', '2024-04-21 03:26:47'),
(8, 9, 'Panjeree Publication', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'Marketing & Advertising', 'Dhaka,Bangladesh', '54', 'pewiy49349@eryod.com', '01321150365', 'uploads/9-1713691670-img-8.png', 'panjeree.com', '2024-04-21 03:27:50', '2024-04-21 03:27:50'),
(9, 10, 'Juranpur Adarsha University College', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don\'t look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn\'t anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable. The generated Lorem Ipsum is therefore always free from repetition, injected humour, or non-characteristic words etc.', 'Education & training', 'Daudkandi,Cumilla', '235', 'pewiy49349@eryod.com', '01321150365', 'uploads/10-1713691774-img-9.png', 'panjeree.com', '2024-04-21 03:29:34', '2024-04-21 03:29:34');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE `educations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `group` varchar(255) NOT NULL,
  `year` varchar(255) NOT NULL,
  `result` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `user_id`, `title`, `group`, `year`, `result`, `created_at`, `updated_at`) VALUES
(1, 12, 'Secondary School Certificate (SSC)', 'Science', '2010', 'GPA: 5', '2024-03-15 22:40:22', '2024-03-15 22:40:22'),
(2, 12, 'Higher Secondary School Certificate (HSC)', 'Science', '2012', 'GPA: 5', '2024-03-15 22:40:47', '2024-03-15 22:40:47'),
(3, 13, 'Secondary School Certificate (SSC)', 'Commerce', '1998', 'First Division', '2024-03-15 22:55:32', '2024-03-15 22:55:32'),
(4, 13, 'Higher Secondary School Certificate (HSC)', 'Science', '2012', 'GPA:5', '2024-03-15 22:55:48', '2024-03-15 22:55:48');

-- --------------------------------------------------------

--
-- Table structure for table `experiences`
--

CREATE TABLE `experiences` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `from_date` date NOT NULL,
  `to_date` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `responsibility` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `experiences`
--

INSERT INTO `experiences` (`id`, `user_id`, `title`, `from_date`, `to_date`, `description`, `responsibility`, `created_at`, `updated_at`) VALUES
(1, 12, 'Senior Executive Implemention', '2024-03-01', '2024-03-31', 'It seems like you\'re asking for Lorem Ipsum text. Lorem Ipsum is a placeholder text commonly used in the design and publishing industries to simulate the appearance of written content. Here\'s an example of Lorem Ipsum text with 20 words', 'It seems like you\'re asking for Lorem Ipsum text. Lorem Ipsum is a placeholder text commonly used in the design and publishing industries to simulate the appearance of written content. Here\'s an example of Lorem Ipsum text with 20 words', '2024-03-15 22:42:15', '2024-03-15 22:42:15'),
(2, 12, 'Manager At Omicon Group', '2024-03-01', '2024-06-30', 'It seems like you\'re asking for Lorem Ipsum text. Lorem Ipsum is a placeholder text commonly used in the design and publishing industries to simulate the appearance of written content. Here\'s an example of Lorem Ipsum text with 20 words', 'It seems like you\'re asking for Lorem Ipsum text. Lorem Ipsum is a placeholder text commonly used in the design and publishing industries to simulate the appearance of written content. Here\'s an example of Lorem Ipsum text with 20 words', '2024-03-15 22:42:45', '2024-03-15 22:42:45'),
(3, 13, 'Senior Executive MIS', '2024-03-01', '2024-03-31', 'It seems like you\'re asking for Lorem Ipsum text. Lorem Ipsum is a placeholder text commonly used in the design and publishing industries to simulate the appearance of written content. Here\'s an example of Lorem Ipsum text with 20 words:', 'It seems like you\'re asking for Lorem Ipsum text. Lorem Ipsum is a placeholder text commonly used in the design and publishing industries to simulate the appearance of written content. Here\'s an example of Lorem Ipsum text with 20 words:', '2024-03-15 22:56:29', '2024-03-15 22:56:29'),
(4, 13, 'Manager At Fresh Industries Ltd', '2023-12-01', '2024-02-29', 'It seems like you\'re asking for Lorem Ipsum text. Lorem Ipsum is a placeholder text commonly used in the design and publishing industries to simulate the appearance of written content. Here\'s an example of Lorem Ipsum text with 20 words', 'It seems like you\'re asking for Lorem Ipsum text. Lorem Ipsum is a placeholder text commonly used in the design and publishing industries to simulate the appearance of written content. Here\'s an example of Lorem Ipsum text with 20 words', '2024-03-15 22:57:14', '2024-03-15 22:57:14');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `position` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `type` enum('full-time','part-time','contract','freelance') NOT NULL,
  `vacancy` varchar(255) NOT NULL,
  `experience` varchar(255) NOT NULL,
  `due_date` date NOT NULL,
  `benefits` text NOT NULL,
  `requirements` text NOT NULL,
  `salary` decimal(10,2) NOT NULL,
  `tags` varchar(255) NOT NULL,
  `is_active` int(11) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `user_id`, `title`, `position`, `category_id`, `type`, `vacancy`, `experience`, `due_date`, `benefits`, `requirements`, `salary`, `tags`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 2, 'Senior Manager Implementation', 'Manager', 1, 'full-time', '1', '5', '2024-03-15', 'It seems like you\'re asking for Lorem Ipsum text. Lorem Ipsum is a placeholder text commonly used in the design and publishing industries to simulate the appearance of written content. Here\'s an example of Lorem Ipsum text with 20 words:\r\n\r\n\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\"\r\n\r\nPlease note that Lorem Ipsum text has no inherent meaning and is used purely as a placeholder for visual design or layout purposes.', 'It seems like you\'re asking for Lorem Ipsum text. Lorem Ipsum is a placeholder text commonly used in the design and publishing industries to simulate the appearance of written content. Here\'s an example of Lorem Ipsum text with 20 words:\r\n\r\n\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\"\r\n\r\nPlease note that Lorem Ipsum text has no inherent meaning and is used purely as a placeholder for visual design or layout purposes.', 25000.00, 'Accounting, Human Resource,HR', 1, '2024-03-15 23:13:53', '2024-03-15 23:13:53'),
(2, 3, 'Assistant General Manager', 'Sr,Manager', 1, 'full-time', '2', '15', '2024-03-16', 'It seems like you\'re asking for Lorem Ipsum text. Lorem Ipsum is a placeholder text commonly used in the design and publishing industries to simulate the appearance of written content. Here\'s an example of Lorem Ipsum text with 20 words:\r\n\r\n\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\"\r\n\r\nPlease note that Lorem Ipsum text has no inherent meaning and is used purely as a placeholder for visual design or layout purposes.', 'It seems like you\'re asking for Lorem Ipsum text. Lorem Ipsum is a placeholder text commonly used in the design and publishing industries to simulate the appearance of written content. Here\'s an example of Lorem Ipsum text with 20 words:\r\n\r\n\"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.\"\r\n\r\nPlease note that Lorem Ipsum text has no inherent meaning and is used purely as a placeholder for visual design or layout purposes.', 5000.00, 'laravel,backend', 1, '2024-03-15 23:25:41', '2024-03-15 23:25:41'),
(3, 3, 'Laravel Developer', 'Jr, Developer', 4, 'freelance', '5', '2', '2024-04-21', 'As a Laravel Developer, you will play a crucial role in developing and maintaining high-quality web applications using Laravel framework. You will work closely with the development team to ensure seamless integration of front-end and back-end components, contribute to the architectural design, and optimize applications for maximum speed and scalability.', 'Key Responsibilities\r\n\r\nDevelop and maintain web applications using the Laravel framework.\r\nIntegrate data from various back-end services and databases.\r\nCollaborate with front-end developers to create user-friendly web pages.\r\nOptimize applications for maximum speed and scalability.\r\nImplement security and data protection.\r\nCreate and maintain software documentation.\r\nStay updated on emerging technologies/industry trends and apply them into operations and activities.\r\nPerform code reviews and provide constructive feedback to other developers.\r\nContribute to all phases of the development lifecycle.\r\nSupport continuous improvement by investigating alternatives and technologies.\r\nTroubleshoot, debug and upgrade existing systems.\r\nParticipate in the entire application lifecycle, focusing on coding and debugging.\r\nWrite clean, scalable code using Laravel best practices.\r\nTest and deploy applications and systems.\r\n\r\nRequired Qualifications\r\n\r\nBachelor’s degree in Computer Science or a related field.\r\nProven work experience as a Laravel Developer or similar role.\r\nStrong knowledge of PHP web frameworks, specifically Laravel.\r\nExperience with MySQL and database design.\r\nProficiency in front-end technologies such as HTML, CSS, and JavaScript.\r\nGood understanding of server-side CSS pre-processing platforms, such as LESS and SASS.\r\nExperience with RESTful APIs and API development.\r\nFamiliarity with version control systems such as GIT.\r\nAbility to solve complex problems efficiently.\r\nExcellent analytical and multitasking skills.\r\nSolid understanding of the full software development lifecycle.\r\nKnowledge of Agile methodologies.\r\nGood communication and teamwork skills.\r\nExperience with test-driven development.\r\nUnderstanding of web accessibility standards.', 25000.00, 'laravel,html,css', 1, '2024-04-21 03:44:30', '2024-04-21 03:44:30'),
(4, 3, 'Full Stack Web Developer', 'Others', 1, 'full-time', '5', '5', '2024-04-22', 'Are you a talented Full Stack Web Developer eager to join a fast-growing and leading technology e-commerce retailer? We are looking for a reliable self-starter with a strong focus on Javascript and PHP to develop and maintain software that drives a high-volume web store, interfacing with various systems and a wide range of integrated technologies.\r\n\r\nAs a Full Stack Web Developer, you will be responsible for owning and maintaining features deployed across our Website stack, as well as implementing new features that accelerate the desired direction of the business. You will work in a cross-functional team with touchpoints from customer-facing web front-ends to setting up the backend systems.\r\n\r\nThe ideal candidate will have strong debugging and troubleshooting skills, and experience working with various data sources, API integrations, and middleware. Additionally, they will have solid experience with the modern Javascript ecosystem, AWS and Digital Ocean knowledge, and a deep understanding of Relational Databases.', 'Responsibilities:\r\n\r\nBuild and Maintain features deployed across our web stack - WordPress, Shopify, PHP, Go High Level \r\nImplement new features that accelerate the desired direction of the business \r\nDesign solutions that work efficiently with currently deployed systems \r\nKeep the customer experience at the forefront when designing and implementing solutions \r\nWork in a cross-functional team with touchpoints from customer-facing web front-ends to setting up the backend system \r\nMaturing/refactoring currently active codebases and bringing them in line with industry-standard style, practice, and guidelines \r\n\r\nQualifications:\r\n\r\nComfortable using various programming languages, relational databases \r\nStrong debugging and troubleshooting skills \r\nStrong written and verbal communication skills \r\nExperience working with various data sources, API integrations, and middleware \r\n\r\nRequirements\r\n\r\nStrong full-stack development skills \r\nDeep understanding of Relational Databases \r\nDemonstrable experience with the modern JavaScript ecosystem – ES6, React/JSX, Angular, Vue, or similar, Nodejs, NPM/Yarn \r\nBack-end/server-side JavaScript (Lambda/SAM, Serverless framework, Express APIs, etc) \r\nAWS knowledge - SQS, EC2, Lambda, RDS, CloudFormation \r\nUnix-based OS skills – OS maintenance, system upkeep, system configuration \r\nUnderstanding of security principles and active design guidelines against potential threats \r\nAbility to debug issues that manifest, from the customer level to the back-office \r\nSolid understanding of standard data formats and serialisation, data schemas, and maintaining data integrity \r\nManaging codebases using version control (Git), working with automated deployments and pipelines (continuous integration/delivery) \r\n\r\nStrongly Desired Experience:\r\n\r\nWorking Cloudflare knowledge \r\nExperience with E-commerce systems (Magento, Shopify, etc) \r\nExperience working in an Agile environment: Kanban, Scrum, or similar frameworks \r\nIdeal candidates will also have: \r\nJava/JSP and related web application experience \r\nRetail/POS experience \r\nMicrosoft 365 knowledge \r\nGoogle Workspace knowledge \r\nBenefitsIf you are passionate about Javascript, and PHP and have experience working with various programming languages, relational databases, and API integrations, we would love to hear from you. This is an exciting opportunity to join a growing team and effect change, adding real value to the evolving E-commerce stack.', 20000.00, 'Fullstack,PHP,LARAVEL', 1, '2024-04-21 03:46:20', '2024-04-21 03:46:20'),
(5, 4, 'Executive / Jr Executive (Internal Audit)', 'Sr,Manager', 3, 'full-time', '3', '6', '2024-04-21', 'Requirements\r\nEducation\r\nMaster of Commerce (M.Com) in Accounts or Finance. Master of Business Administration (MBA) in Accounts or Finance.\r\n\r\nMBA/Master in Accounts or Finance from a reputed university.\r\n\r\nPartly qualified CA-CC/CMA course completed will be given preference.\r\n\r\nExperience\r\nAt most 2 years\r\nAdditional Requirements\r\nAge 25 to 32 years\r\nShould have competency on computer based accounting system.\r\n\r\nReporting and quantitative analytical ability.\r\n\r\nGood interpersonal & Communication skill.', 'Responsibilities & Context\r\nPhysically traveling all over Bangladesh.       \r\n\r\nCheck cash voucher, bills/expenses, payment requisitions.  \r\n\r\nGeneral store item inventory taking & audit.        \r\n\r\nPrepare comprehensive audit reports for management review.        \r\n\r\nPre & post-audit of all accounting transactions, purchase requisitions, financial vouchers, bill etc.        \r\n\r\nMonitor day to day financial transactions maintained by respective account departments.        \r\n\r\nConduct periodic internal audit of head office and make recommendation to ensure the highest standard of financial management system.\r\n\r\nVerifying and cross-checking of all accounting transactions made to all internal and external stakeholders.        \r\n\r\nKeep liaison with Accounts & Finance, External Audit.        \r\n\r\nReview of all financial records and reports of the company.', 20000.00, 'Marketing,Intern', 1, '2024-04-21 06:50:56', '2024-04-21 06:50:56'),
(6, 4, 'Chief Financial Officer (CFO)', 'Executive', 3, 'part-time', '3', '6', '2024-04-24', 'Responsibilities & Context\r\nJob Context\r\n\r\nRing Shine Textiles Ltd. is considered to be the most trusted & reliable national Textiles manufacturer and supplier of quality products in the country, which facilitates and adds considerable value to its business processes in providing consistently with high-quality products of international standards in the local and international market at a competitive price because we are Bangladesh’s largest fully integrated textile company with a dominant presence in the Cotton and Polyester segments. In doing so the company shall endeavor to establish a loyal and mutually rewarding relationship with customers, employees, associates, and shareholders of the company. To attain the ultimate goal, management is searching Chief Financial Officer (CFO) having robust professional attachment and well experience in the manufacturing Industries depending on the following Job Responsibilities and Job Specification.\r\n\r\nResponsibilities:\r\n\r\nOverall responsibilities of management reporting covering all financial aspects.\r\n\r\nAnalyzes financial statements, and prepares reports and recommendations to the top Management concerning financial performance.\r\n\r\nGood Knowledge about financial management, including financial planning, budget, and control to obtain the highest service advantage with a minimum cost impact.\r\n\r\nMonitor monthly performance reporting, financial statements and KPI\'s\r\n\r\nFactory Performance Evaluation and efficiency analysis.\r\n\r\nUnderstand taxation policy and lead organization tax planning to gain maximum tax benefits with adherence to compliance of all Laws, Rules & Regulations.\r\n\r\nUnderstand financial laws, tax implications, regulatory mechanisms around investments and advise management for necessary action to save cost & maximize gain.\r\n\r\nDesigning, implementing, controlling and supervising all types of finance, accounts & costing matters complaining regulatory policies-procedures, preparing up-dated MIS various reports, profit margin report, bank reconciliation for the management and BODs.\r\n\r\nCoordinate in preparation of annual budget, and Banking liability & overdue statement.\r\n\r\nPrepare and submit monthly business result with variance analysis to the top management.\r\n\r\nAssure books/records and system are kept according to accounting standards.\r\n\r\nMonitor Working Capital and Recommended improvement areas.\r\n\r\nReview financial statements to prepare consolidated financial statements periodically, half-yearly and annually.\r\n\r\nPrepare, Co-ordinate and review annual budgets and its timely submissions.\r\n\r\nOversee Corporate Insurance and Risk Management.\r\n\r\nAssess and evaluate financial performance of organization with regard to long-term operational goals, budgets and forecasts.\r\n\r\nDevelop management reporting/ analytical tools/ key indicators for accounts and finance section.\r\n\r\nFocus on cost saving, efficiency programs, Product profitability and Investment Analysis.\r\n\r\nWork with various department heads to upgrade internal controls, reporting systems, corporate.\r\n\r\npolicies & procedures and implementation of the same where needed.\r\n\r\nEnsure proper JD and KPIs are set for subordinates, evaluate staff performance and provide feedback, mentor for improvement, ensure discipline, identify training needs & facilitate training, and manage their career development.', 'Requirements\r\nEducation\r\nMaster degree in Accounting with Preferred Professional Certification: FCA/ACA/FCMA IBA, Dhaka University, University of Dhaka and Brac’s students will get preference.\r\n\r\nExperience\r\nAt least 15 years\r\nThe applicants should have experience in the following business area(s):\r\nTextile, Dyeing Factory\r\nAdditional Requirements\r\nSkills Required: Finance/ Accounts, Financial Analysis, Financial Audit, Financial Budget, Financial Planning, Income Tax and VAT.\r\n\r\nAt least 15 years wherein minimum 5 years working experience as CFO in any manufacturing listed company.\r\n\r\nThe applicants should have experience in the following area(s): Accounts and Finance.\r\n\r\nIncumbent should have practical experience with SAP.\r\n\r\nThe applicants should have experience in the following business area(s):\r\n\r\nSpinning & Textile and Garments. However, Textiles sector will be given preference. The incumbent should have proficiency and working experience at any Public Listed Company.\r\n\r\nWorking experience in the any factory (listed Textile & Garments company) located in BEPZA will get preference.\r\n\r\nIn-depth understanding of operational issues and policy work at state, national and international levels.\r\n\r\nSound and up-to-date knowledge of development concepts, methodologies and techniques including demonstrated expertise.\r\n\r\nExcellent management leadership skills as well as facilitation and capacity building for inter-linkages between Senior Officials and Management/ BODs.\r\n\r\nMust have knowledge about corporate finance, composite finance, SME finance, LC, LTR, UPAS LC, CC, Bank Guarantee, Business loan, Car loan, Personal Loan, Home Loan, all kind of term loan, funded or non-funded finance etc.\r\n\r\nKnowledge in GFET, import/export policy, TBML, CRM Policy, relevant circulars and guidelines (external and internal), loan documentation, etc.\r\n\r\nConceptual, analytical, documentation and presentation skills.\r\n\r\nProficiency in English language and a familiarity with the particular country environment as if effects development strategies.', 36500.00, 'laravel,html,css', 1, '2024-04-21 06:52:10', '2024-04-21 06:52:10'),
(7, 6, 'Site Cashier', 'Jr, Developer', 5, 'part-time', '2', '3', '2024-04-21', 'Requirements\r\nEducation\r\nAlim (Madrasah)\r\nHSC\r\nExperience\r\nAt least 1 year\r\nThe applicants should have experience in the following business area(s):\r\nIT Enabled Service, Engineering Firms, Real Estate\r\nFreshers are also encouraged to apply.\r\nAdditional Requirements\r\nAge 25 to 35 years', 'Responsibilities & Context\r\nMaintain Receivable & Payable Accounts.\r\n\r\nPrepare monthly site reconciliations statement.\r\n\r\nMaintain site costing, requisition and adjustment sheet.\r\n\r\nUpdate general cash book, petty cash book and bank book regularly.', 10000.00, 'Marketing,Intern', 1, '2024-04-21 06:53:46', '2024-04-21 06:53:46'),
(8, 6, 'Accounts Executive', 'Sr,Manager', 3, 'part-time', '5', '2', '2024-04-21', 'Requirements\r\nEducation\r\nSSC, HSC\r\n\r\nExperience\r\n1 to 3 years\r\nThe applicants should have experience in the following business area(s):\r\nE-commerce\r\nAdditional Requirements\r\nAge 20 to 30 years\r\nAccounting\r\n\r\nAccounting Software\r\n\r\nWeb browsing\r\n\r\nMicrosoft excel, word , powerpoint\r\n\r\n1-to-3-year(s) experience in relevant field.\r\n\r\nFreshers are also encouraged to apply.\r\n\r\nProper knowledge of MS Office, Excel, PowerPoint.\r\n\r\nExcellent communication skills in English.', 'Responsibilities & Context\r\nWe are looking for an energetic, dynamic and self-motivated female candidate who is willing to face challenges to work in any challenging situation.\r\n\r\nAccounts Receivable & Payable.\r\nPayroll & Financial Controls.\r\nFinancial Reporting & Banking.\r\nManage office operations and employee coordination.\r\nContribute to the overall improvement and development of the organization with innovation, revolution & leadership.\r\nMaintain accurate records of office finances and product management.', 60000.00, 'Marketing,Intern', 1, '2024-04-21 06:54:46', '2024-04-21 06:54:46'),
(9, 7, 'Senior Executive - People & OD', 'Jr, Developer', 2, 'part-time', '5', '6', '2024-04-21', 'Requirements\r\nExperience\r\n3 to 5 years\r\nThe applicants should have experience in the following business area(s):\r\nGroup of Companies, Plastic/ Polymer Industry, Cement Industry\r\nAdditional Requirements\r\nAge 27 to 32 years\r\n03 years of relevant working experience in any large conglomerate or multinational company.\r\nGood command over the computer, especially in MS Office / Internet & Email systems\r\nMust be intelligent, hardworking and dedicated for the role assigned.\r\nShould be dynamic with Interpersonal and excellent Communication Skills.\r\nWell-organized & strategic thinker.\r\nThe mentality of working with the team.\r\nShould have strong CV Bank.', 'Responsibilities & Context\r\nThe position will be responsible for talent acquisition and organizational development-related activities under the guidance of the team leader to provide the best human resources who will contribute towards the company’s continuous growth.\r\n\r\nThis incumbent will ensure all open positions are screened and filled within an appropriate time frame through sourcing, interviewing, and hiring candidates for all visible vacancies.\r\n\r\nIn addition to that, this position will also assist in policy making, organogram design, role profile creation, and job evaluation under the appropriate guidance of the team lead.\r\n\r\nCollaborate with the team lead regarding the vacant positions to take the necessary steps to fill them.\r\n\r\nMaking daily, weekly, monthly & quarterly reports on requisition activity to the talent acquisition plan with the guidance of the team lead.\r\n\r\nForecast quarterly and annual hiring needs of human resources. Source candidates via recruitment agencies and job online advertisements.\r\n\r\nScreening the candidates by resume shortlisting, phone interviews and personal interviews with coordination with the concerned departments & background verification of the shortlisted candidates.\r\n\r\nDesign job descriptions and interview questions that reflect every position\'s requirements. Identifying and recruiting prospective candidates using a variety of channels, including social media platforms, networking events, and job fairs.\r\n\r\nAssessing candidates to ensure qualification match, cultural fit and compatibility.\r\n\r\nCoordinate with the hiring manager(s) to determine the best recruiting process for the position(s) while maintaining recruiting and HR processes.\r\n\r\nConduct preliminary interviews with recruits to gauge interest, personality and salary requirements, which are followed by a final selection session.\r\n\r\nProvide feedback to the team lead about details regarding applications. Maintain employee referral program.\r\n\r\nFollow up with the related clerical aspects of employment, such as completing prescribed joining formalities, and notifying the department of the employee\'s start date and the requisition the employee is filling.\r\n\r\nAssist the team lead in the preparation of policies, role profiles, organograms, and various strategic HR issues.', 60000.00, 'Marketing,Intern', 1, '2024-04-21 06:56:24', '2024-04-21 06:56:24'),
(10, 7, 'Senior Officer - HR & Compliance', 'Jr, Developer', 2, 'freelance', '3', '2', '2024-04-22', 'Requirements\r\nEducation\r\nMasters\r\nMasters\' degree from any recognized University.\r\n\r\nBBA and MBA with major in HRM.\r\n\r\nPGD HRM (BIM) certified will be given preference.\r\n\r\nExperience\r\n5 to 10 years\r\nThe applicants should have experience in the following business area(s):\r\nGarments\r\nAdditional Requirements\r\nAge 30 to 40 years', 'Responsibilities & Context\r\nEnsure 100% implementation of Buyer\'s COC, Labor Law 2006 and Labor Rules 2015 in the factories.\r\n\r\nTo follow up factory fire safety, fire prevention, fire equipment, health, safety & suitable working environment at work place.\r\n\r\nProvide all compliance related training to the workers including PPE, H&S, OHS, Anti-harassment, COC etc.\r\n\r\nTo receive grievance, complain, demand & suggestion from the workers & discuss with concern factory management immediately to meet it up.\r\n\r\nRegular/Daily floor visit, identify non-compliant issues and resolve with the help of concern person.\r\n\r\nMake aware the existing workers about company provided all facilities & necessity of compliance.\r\n\r\nMaintain accurate and up-to-date documentation of compliance activities and incidents.\r\n\r\nCollaborate with cross-functional teams to address compliance issues and develop practical solutions.\r\n\r\nCommunicates and coordinates various audit body (SEDEX, BSCI, WRAP, ACCORD, ALLIANCE etc.) by providing supportive documents Ensure that Child Labors are not in practice. Well conversant with buyer COC.\r\n\r\nConduct health & safety risk assessment, fire risk assessment.\r\n\r\nEnsure safe and healthy working environment.', 10000.00, 'Fullstack,PHP,LARAVEL', 1, '2024-04-21 06:57:08', '2024-04-21 06:57:08');

-- --------------------------------------------------------

--
-- Table structure for table `job_applications`
--

CREATE TABLE `job_applications` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `job_id` bigint(20) UNSIGNED NOT NULL,
  `candidate_id` bigint(20) UNSIGNED NOT NULL,
  `status` enum('pending','approved','rejected') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `job_applications`
--

INSERT INTO `job_applications` (`id`, `job_id`, `candidate_id`, `status`, `created_at`, `updated_at`) VALUES
(1, 1, 12, 'pending', '2024-03-16 00:44:08', '2024-03-16 00:44:08'),
(2, 2, 12, 'pending', '2024-03-16 00:44:12', '2024-03-16 00:44:12'),
(3, 1, 13, 'pending', '2024-03-16 00:44:45', '2024-03-16 00:44:45'),
(4, 2, 13, 'pending', '2024-03-16 00:44:48', '2024-03-16 00:44:48'),
(5, 6, 12, 'pending', '2024-04-21 07:00:35', '2024-04-21 07:00:35'),
(6, 7, 12, 'pending', '2024-04-21 07:00:44', '2024-04-21 07:00:44'),
(7, 9, 12, 'pending', '2024-04-21 07:05:58', '2024-04-21 07:05:58'),
(8, 3, 12, 'pending', '2024-04-21 07:09:52', '2024-04-21 07:09:52');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2024_02_18_105630_create_companies_table', 1),
(6, '2024_02_21_062110_categories', 1),
(7, '2024_02_21_062122_jobs', 1),
(8, '2024_02_26_162829_create_candidates_table', 1),
(9, '2024_02_26_163134_create_experiences_table', 1),
(10, '2024_02_26_163243_create_educations_table', 1),
(11, '2024_02_26_163408_create_skills_table', 1),
(12, '2024_02_26_163611_create_job_applications_table', 1),
(13, '2024_03_04_023839_remove_cover_letter_from_job_applications', 1),
(14, '2024_03_14_071904_create_application_status_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `value` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`id`, `user_id`, `title`, `value`, `created_at`, `updated_at`) VALUES
(1, 12, 'FRONTEND', 'HTML,CSS,JAVASCRIPT', '2024-03-15 22:43:05', '2024-03-15 22:43:05'),
(2, 12, 'BACKEND', 'PHP,LARAVEL,MYSQL,WORDPRESS', '2024-03-15 22:43:46', '2024-03-15 22:43:46'),
(3, 12, 'LANGUAGE', 'ENGLISH,BANGLA,HINDI,ARABIC', '2024-03-15 22:44:15', '2024-03-15 22:44:15'),
(4, 12, 'HOBBY', 'CRICKET,RIDING BIKE', '2024-03-15 22:44:37', '2024-03-15 22:44:37'),
(5, 13, 'FRONTEND', 'HTML,CSS,JAVASCRIPT', '2024-03-15 22:58:11', '2024-03-15 22:58:11'),
(6, 13, 'BACKEND', 'PHP,LARAVEL,MYSQL,WORDPRESS', '2024-03-15 22:58:27', '2024-03-15 22:58:27'),
(7, 13, 'LANGUAGE', 'ENGLISH,BANGLA,HINDI,ARABIC', '2024-03-15 22:58:39', '2024-03-15 22:58:39'),
(8, 13, 'HOBBY', 'CRICKET,RIDING BIKE', '2024-03-15 22:58:52', '2024-03-15 22:58:52');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `otp` varchar(255) DEFAULT '0',
  `password` varchar(255) NOT NULL,
  `role` enum('1','2','3') NOT NULL DEFAULT '3',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `otp`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'User 1', 'user1@example.com', '0', '1234', '1', '2024-03-15 22:33:02', '2024-03-15 22:33:02'),
(2, 'User 2', 'user2@example.com', '0', '1234', '2', '2024-03-15 22:33:03', '2024-03-15 22:33:03'),
(3, 'User 3', 'user3@example.com', '0', '1234', '2', '2024-03-15 22:33:03', '2024-03-15 22:33:03'),
(4, 'User 4', 'user4@example.com', '0', '1234', '2', '2024-03-15 22:33:03', '2024-03-15 22:33:03'),
(5, 'User 5', 'user5@example.com', '0', '1234', '2', '2024-03-15 22:33:03', '2024-03-15 22:33:03'),
(6, 'User 6', 'user6@example.com', '0', '1234', '2', '2024-03-15 22:33:03', '2024-03-15 22:33:03'),
(7, 'User 7', 'user7@example.com', '0', '1234', '2', '2024-03-15 22:33:04', '2024-03-15 22:33:04'),
(8, 'User 8', 'user8@example.com', '0', '1234', '2', '2024-03-15 22:33:04', '2024-03-15 22:33:04'),
(9, 'User 9', 'user9@example.com', '0', '1234', '2', '2024-03-15 22:33:04', '2024-03-15 22:33:04'),
(10, 'User 10', 'user10@example.com', '0', '1234', '2', '2024-03-15 22:33:04', '2024-03-15 22:33:04'),
(11, 'User 11', 'user11@example.com', '0', '1234', '2', '2024-03-15 22:33:04', '2024-03-15 22:33:04'),
(12, 'User 12', 'user12@example.com', '0', '1234', '3', '2024-03-15 22:33:05', '2024-03-15 22:33:05'),
(13, 'User 13', 'user13@example.com', '0', '1234', '3', '2024-03-15 22:33:05', '2024-03-15 22:33:05'),
(14, 'User 14', 'user14@example.com', '0', '1234', '3', '2024-03-15 22:33:05', '2024-03-15 22:33:05'),
(15, 'User 15', 'user15@example.com', '0', '1234', '3', '2024-03-15 22:33:05', '2024-03-15 22:33:05'),
(16, 'User 16', 'user16@example.com', '0', '1234', '3', '2024-03-15 22:33:05', '2024-03-15 22:33:05'),
(17, 'User 17', 'user17@example.com', '0', '1234', '3', '2024-03-15 22:33:06', '2024-03-15 22:33:06'),
(18, 'User 18', 'user18@example.com', '0', '1234', '3', '2024-03-15 22:33:06', '2024-03-15 22:33:06'),
(19, 'User 19', 'user19@example.com', '0', '1234', '3', '2024-03-15 22:33:06', '2024-03-15 22:33:06'),
(20, 'User 20', 'user20@example.com', '0', '1234', '3', '2024-03-15 22:33:06', '2024-03-15 22:33:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `application_status`
--
ALTER TABLE `application_status`
  ADD PRIMARY KEY (`id`),
  ADD KEY `application_status_job_application_id_foreign` (`job_application_id`),
  ADD KEY `application_status_candidate_id_foreign` (`candidate_id`);

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `candidates_user_id_foreign` (`user_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `companies`
--
ALTER TABLE `companies`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `companies_user_id_unique` (`user_id`);

--
-- Indexes for table `educations`
--
ALTER TABLE `educations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `educations_user_id_foreign` (`user_id`);

--
-- Indexes for table `experiences`
--
ALTER TABLE `experiences`
  ADD PRIMARY KEY (`id`),
  ADD KEY `experiences_user_id_foreign` (`user_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_user_id_foreign` (`user_id`),
  ADD KEY `jobs_category_id_foreign` (`category_id`);

--
-- Indexes for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD PRIMARY KEY (`id`),
  ADD KEY `job_applications_job_id_foreign` (`job_id`),
  ADD KEY `job_applications_candidate_id_foreign` (`candidate_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`id`),
  ADD KEY `skills_user_id_foreign` (`user_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `application_status`
--
ALTER TABLE `application_status`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `companies`
--
ALTER TABLE `companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `educations`
--
ALTER TABLE `educations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `experiences`
--
ALTER TABLE `experiences`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `job_applications`
--
ALTER TABLE `job_applications`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `skills`
--
ALTER TABLE `skills`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `application_status`
--
ALTER TABLE `application_status`
  ADD CONSTRAINT `application_status_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `application_status_job_application_id_foreign` FOREIGN KEY (`job_application_id`) REFERENCES `job_applications` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `candidates`
--
ALTER TABLE `candidates`
  ADD CONSTRAINT `candidates_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `companies`
--
ALTER TABLE `companies`
  ADD CONSTRAINT `companies_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `educations`
--
ALTER TABLE `educations`
  ADD CONSTRAINT `educations_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `experiences`
--
ALTER TABLE `experiences`
  ADD CONSTRAINT `experiences_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `jobs`
--
ALTER TABLE `jobs`
  ADD CONSTRAINT `jobs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `jobs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `job_applications`
--
ALTER TABLE `job_applications`
  ADD CONSTRAINT `job_applications_candidate_id_foreign` FOREIGN KEY (`candidate_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `job_applications_job_id_foreign` FOREIGN KEY (`job_id`) REFERENCES `jobs` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `skills`
--
ALTER TABLE `skills`
  ADD CONSTRAINT `skills_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
