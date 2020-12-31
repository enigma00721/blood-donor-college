-- phpMyAdmin SQL Dump
-- version 4.6.6deb5ubuntu0.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Dec 31, 2020 at 09:56 AM
-- Server version: 5.7.32-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `obbs`
--

-- --------------------------------------------------------

--
-- Table structure for table `blood_groups`
--

CREATE TABLE `blood_groups` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blood_groups`
--

INSERT INTO `blood_groups` (`id`, `created_at`, `updated_at`, `name`) VALUES
(2, '2020-12-30 00:54:39', '2020-12-30 00:54:39', 'A+'),
(3, '2020-12-30 00:54:50', '2020-12-30 00:54:50', 'A-'),
(4, '2020-12-30 00:54:59', '2020-12-30 00:54:59', 'AB+'),
(5, '2020-12-30 00:55:05', '2020-12-30 00:55:05', 'B+'),
(6, '2020-12-30 00:55:16', '2020-12-30 00:55:16', 'O+'),
(7, '2020-12-30 00:55:22', '2020-12-30 00:55:22', 'O-');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `blood_group` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `created_at`, `updated_at`, `name`, `address`, `phone`, `blood_group`, `email`) VALUES
(2, '2020-12-29 04:52:48', '2020-12-30 08:03:37', 'Lokesh Bajracharya', 'Lazimpat', '98766789876', 'O-', 'lokesh@gmail.com'),
(3, '2020-12-29 04:53:57', '2020-12-29 04:53:57', 'Vanu Shrestha', 'Matatirthta', '09876568790', 'A-', 'retro.kaizen@gmail.com'),
(8, '2020-12-30 01:36:06', '2020-12-30 01:36:06', 'demo', 'Lazimpat', '09876567890', 'B+', 'loskesh@gmail.com'),
(9, '2020-12-30 07:26:07', '2020-12-30 07:26:07', 'someon', 'thankot', '90876', 'AB+', 'mashareq22overseas@gmail.com'),
(10, '2020-12-30 09:38:36', '2020-12-30 09:38:36', 'New Donor Came', 'Banepa', '98764567', 'AB-', 'baagmatigabion@gmail.com'),
(12, '2020-12-30 12:52:39', '2020-12-30 12:52:39', 'Raju Kumara Shah', 'Sano Thimi', '9844271440', 'O+', 'cold.knight21@gmail.com'),
(13, '2020-12-30 16:04:11', '2020-12-30 17:25:27', 'Demo User', 'computer world', '9876566987', 'O+', 'demo@demo.com'),
(15, '2020-12-30 18:10:54', '2020-12-30 18:10:54', 'Maxie Adams', 'Quitzonside', '+4938451751684', 'O+', 'obie.weissnat@example.com'),
(16, '2020-12-30 18:10:54', '2020-12-30 18:10:54', 'Karina Raynor', 'New Sofia', '+2658654051946', 'B+', 'matteo39@example.org'),
(17, '2020-12-30 18:10:54', '2020-12-30 18:10:54', 'Clinton Powlowski', 'Ratkehaven', '+3122127191262', 'B+', 'marquis.schoen@example.org'),
(18, '2020-12-30 18:10:54', '2020-12-30 18:10:54', 'Jadyn Spinka', 'Lake Kristinaburgh', '+8074110633935', 'AB+', 'watsica.emilia@example.net'),
(19, '2020-12-30 18:10:54', '2020-12-30 18:10:54', 'Kellen Von', 'Lake Rashawnview', '+7218265117946', 'O+', 'maximus.corkery@example.org'),
(20, '2020-12-30 18:10:54', '2020-12-30 18:10:54', 'Janelle Jast Jr.', 'North Huntertown', '+6606971977200', 'O-', 'lafayette37@example.org'),
(21, '2020-12-30 18:10:55', '2020-12-30 18:10:55', 'Halle Feest', 'Lake Anna', '+1462320774280', 'AB+', 'andrew.dare@example.com'),
(22, '2020-12-30 18:10:55', '2020-12-30 18:10:55', 'Ms. Amy Steuber Jr.', 'West Eugenia', '+1674809691414', 'O+', 'schaden.laila@example.com'),
(23, '2020-12-30 18:10:55', '2020-12-30 18:10:55', 'Dr. Augusta Hoeger II', 'Jorgestad', '+1924913038829', 'AB-', 'predovic.velma@example.net'),
(24, '2020-12-30 18:10:55', '2020-12-30 18:10:55', 'Dr. Percy Yundt Jr.', 'Goldnerhaven', '+9442539321278', 'A-', 'yschroeder@example.net');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `name` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `created_at`, `updated_at`, `name`, `email`, `feedback`, `user_id`) VALUES
(2, '2020-12-30 17:21:50', '2020-12-30 17:21:50', 'Sammy Willms', 'margarett.lubowitz@example.org', 'SAID was, \'Why is a very deep well. Either the well was very provoking to find her way out. \'I shall be late!\' (when she thought it over here,\' said.', 5),
(4, '2020-12-30 17:21:50', '2020-12-30 17:21:50', 'Ernestina Wuckert', 'raul.hauck@example.com', 'Mock Turtle. Alice was silent. The Dormouse had closed its eyes again, to see that queer little toss of her sharp little chin into Alice\'s head. \'Is.', 3),
(5, '2020-12-30 17:21:50', '2020-12-30 17:21:50', 'Kenyatta Hegmann', 'jaden38@example.com', 'V. Advice from a Caterpillar The Caterpillar and Alice looked at it gloomily: then he dipped it into his cup of tea, and looked into its face was.', 2),
(6, '2020-12-30 17:21:50', '2020-12-30 17:21:50', 'Denis Fritsch', 'patience.turcotte@example.net', 'I did: there\'s no use their putting their heads down! I am in the same thing,\' said the Queen. \'I haven\'t the slightest idea,\' said the youth, \'as I.', 3),
(7, '2020-12-30 17:21:50', '2020-12-30 17:21:50', 'Prof. Jermain Kiehn', 'mraz.abigayle@example.org', 'Caterpillar seemed to think about stopping herself before she had made the whole thing very absurd, but they were nowhere to be two people. \'But.', 3),
(8, '2020-12-30 17:21:50', '2020-12-30 17:21:50', 'Dr. Magnus Considine', 'rschroeder@example.net', 'He says it kills all the unjust things--\' when his eye chanced to fall upon Alice, as she went on planning to herself that perhaps it was out of his.', 1),
(9, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Miss June Schaefer II', 'wkilback@example.org', 'After a time she had succeeded in getting its body tucked away, comfortably enough, under her arm, that it was growing, and growing, and very soon.', 2),
(10, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Prof. Annabel Stiedemann II', 'miracle07@example.org', 'Queen said to the company generally, \'You are old,\' said the Queen was close behind us, and he\'s treading on my tail. See how eagerly the lobsters.', 4),
(11, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Prof. Danielle Ledner', 'btorp@example.net', 'Queen, \'and he shall tell you my history, and you\'ll understand why it is to do it.\' (And, as you say it.\' \'That\'s nothing to do.\" Said the mouse to.', 2),
(12, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Dr. Sedrick Wuckert', 'isaac54@example.net', 'The Cat seemed to be in before the trial\'s over!\' thought Alice. One of the deepest contempt. \'I\'ve seen hatters before,\' she said to herself.', 2),
(13, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Felipe Kertzmann', 'okuneva.rossie@example.net', 'Beautiful, beautiful Soup! Soup of the birds hurried off to other parts of the fact. \'I keep them to sell,\' the Hatter instead!\' CHAPTER VII. A Mad.', 4),
(14, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Alena Kuhn', 'chaz66@example.com', 'Hatter. \'He won\'t stand beating. Now, if you drink much from a bottle marked \'poison,\' so Alice ventured to say. \'What is his sorrow?\' she asked the.', 2),
(15, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Jaylan Dicki Sr.', 'frances.windler@example.org', 'VERY nearly at the frontispiece if you drink much from a Caterpillar The Caterpillar and Alice rather unwillingly took the hookah out of sight.', 2),
(16, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Seamus Wiza I', 'devante09@example.org', 'Alice,) and round goes the clock in a whisper, half afraid that she still held the pieces of mushroom in her pocket, and was looking at the stick.', 2),
(17, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Ms. Laury Reilly I', 'fgaylord@example.net', 'And she kept fanning herself all the while, till at last came a rumbling of little animals and birds waiting outside. The poor little juror (it was.', 1),
(18, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Prof. Fermin Littel MD', 'houston.dubuque@example.com', 'Alice remained looking thoughtfully at the Mouse\'s tail; \'but why do you like to be ashamed of yourself for asking such a thing as \"I get what I.', 5),
(19, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Mr. Dorcas Halvorson DVM', 'kiera23@example.com', 'I\'m NOT a serpent, I tell you!\' said Alice. \'Well, then,\' the Cat remarked. \'Don\'t be impertinent,\' said the Mock Turtle. Alice was a good thing!\'.', 3),
(20, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Mr. Dorcas Gerlach', 'karina73@example.com', 'I to do?\' said Alice. \'Why not?\' said the Duchess. An invitation for the rest of it altogether; but after a minute or two, which gave the Pigeon the.', 2),
(21, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Makayla Schumm', 'serenity96@example.org', 'Will you, won\'t you, will you, won\'t you, will you, won\'t you join the dance. Will you, won\'t you, will you, old fellow?\' The Mock Turtle said.', 4),
(22, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Dr. Christopher Luettgen I', 'bebert@example.net', 'Hatter; \'so I can\'t understand it myself to begin lessons: you\'d only have to whisper a hint to Time, and round the court and got behind him, and.', 2),
(23, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Mr. Lonnie Schoen V', 'cummerata.eduardo@example.net', 'March Hare moved into the teapot. \'At any rate I\'ll never go THERE again!\' said Alice doubtfully: \'it means--to--make--anything--prettier.\' \'Well.', 2),
(24, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Eden Konopelski DVM', 'jacquelyn.krajcik@example.org', 'So she swallowed one of them hit her in an offended tone, \'Hm! No accounting for tastes! Sing her \"Turtle Soup,\" will you, won\'t you join the dance?.', 1),
(25, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Macy Pouros', 'nwuckert@example.com', 'Mock Turtle recovered his voice, and, with tears again as quickly as she could do to hold it. As soon as look at the door-- Pray, what is the driest.', 5),
(26, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Ms. Candice Crist', 'nkassulke@example.net', 'The Queen smiled and passed on. \'Who ARE you doing out here? Run home this moment, and fetch me a good deal frightened by this time.) \'You\'re.', 4),
(27, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Rowland Emmerich', 'raegan.rau@example.net', 'Cat, and vanished. Alice was beginning to think that very few little girls eat eggs quite as safe to stay with it as well she might, what a.', 4),
(28, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Hans Koch', 'jacobs.suzanne@example.net', 'Hatter trembled so, that Alice had never been in a minute, trying to make it stop. \'Well, I\'d hardly finished the goose, with the Lory, with a yelp.', 5),
(29, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Corene Jacobs', 'schuster.ansley@example.com', 'Still she went in search of her little sister\'s dream. The long grass rustled at her as she had not attended to this mouse? Everything is so.', 3),
(30, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Parker Rath DVM', 'ysmith@example.com', 'Queen. \'Sentence first--verdict afterwards.\' \'Stuff and nonsense!\' said Alice sadly. \'Hand it over here,\' said the King, \'or I\'ll have you executed.', 5),
(31, '2020-12-30 17:21:51', '2020-12-30 17:21:51', 'Miss Fiona Hackett DVM', 'mjerde@example.net', 'I should say \"With what porpoise?\"\' \'Don\'t you mean by that?\' said the King. \'When did you manage on the bank, and of having nothing to do.\" Said.', 2),
(35, '2020-12-30 19:22:51', '2020-12-30 19:22:51', 'Pratik', 'demo21@demo.com', 'Still she went in search of her little sister\'s dream. The long grass rustled at her as she had not attended to this mouse? Everything is so.', 1),
(36, '2020-12-31 03:53:13', '2020-12-31 03:53:13', 'Sisan', 'brother@gmail.com', 'Hatter trembled so, that Alice had never been in a minute, trying to make it stop. \'Well, I\'d hardly finished the goose, with the Lory, with a yelp.', 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2020_12_29_095719_create_donors_table', 2),
(5, '2020_12_30_051630_create_blood_groups_table', 4),
(6, '2020_12_29_110013_create_feedback_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `is_admin`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'demo', 'demo@demo.com', '$2y$10$YBoidKm.8G8gxbBBqIMUsujrznxw0Mui3ha6QyJ0WT6Dxi/yHAxEG', 0, 'iLmalXmTsHZmDUIv3NguhfHQLwgaTF2vts7ZVIz2wAVL5FzPh3BtzOsOmjhe', '2020-12-29 04:07:52', '2020-12-29 04:07:52'),
(2, 'Admin', 'admin@admin.com', '$2y$10$ND91xsCn4el7OU0NUqNLw.cjD056TVGvGq2bRBfAb5ya40D.yFv9.', 1, 'hLKJoq1tLgb8ijIekYjs99rH1xOcoZYUrB6c9hrGtGg6ea35JQbe7VL4lwzR', '2020-12-30 17:21:50', '2020-12-30 18:04:05'),
(3, 'Toy Howell', 'lokesh@gmail.com', '$2y$10$Meu5D27JLiJfL1VVRYZp1OtdP8R.vezjpv6mKOYg3134.YUgBJl42', 0, 'MELMC1XyxZJchwb72ih6MCis4VMGVqxbh1ccgcRh3YAwZbmnb8P4lwbYkq34', '2020-12-30 17:21:50', '2020-12-30 17:21:50'),
(4, 'Dr. Felipe Towne III', 'retro.kaizen@gmail.com', '$2y$10$MZNmjpDQ5juf3yDvVcDly.yvUZ4CSiwvwSx701WiXN55Li83HXyKu', 0, 'YE4rlGLPs5', '2020-12-30 17:21:50', '2020-12-30 17:21:50'),
(5, 'Prof. Josue Cartwright Jr.', 'loskesh@gmail.com', '$2y$10$PGXE6kJ5H.2j8gB6fBDeSeNmxrGEzit5OlwcfKFXFV742.WjANiSC', 0, 'iNLP1s2yPr', '2020-12-30 17:21:50', '2020-12-30 17:21:50'),
(6, 'Rossie Waelchi', 'fmedhurst@example.org', '$2y$10$azEcthHABpWSv0unu.AAGeSOEWC6BDlsqgTcnxzBxX/dDnoL27lL2', 0, '3XazA0ovMY', '2020-12-30 17:21:50', '2020-12-30 17:21:50'),
(7, 'Delta Senger', 'vincenza.rodriguez@example.net', '$2y$10$7oHL20EnH3iWWwQKXICQeOT6xVSArtxpM04/ZOCV4CbwcGJyi4Tne', 0, 'JQNvYNlvDH', '2020-12-30 17:21:50', '2020-12-30 17:21:50'),
(8, 'Miss Addison Reichert PhD', 'ogoldner@example.com', '$2y$10$sCnk4zVCXy/VFmEQ3hljROgLUxnKkXyBNsy8NpN9kblZiMEKD1UjW', 0, 'YkO18FiyRa', '2020-12-30 17:21:50', '2020-12-30 17:21:50'),
(9, 'Xavier Goodwin II', 'matilda30@example.net', '$2y$10$oYzQAh6SqXxb27kd9WdDM.xYOV3rNaNgu3i3wp/vF8FmAHYC7ytO6', 0, 'aLrfS2Qhnz', '2020-12-30 17:21:50', '2020-12-30 17:21:50'),
(10, 'Amber Rempel', 'javier.rutherford@example.org', '$2y$10$C0TkNKzH1tqvbTiBR/IMZuQUSNXZJvXuxTVM7pW/qCdEJb6TFBSsO', 0, 'mdE12P98kp', '2020-12-30 17:21:50', '2020-12-30 17:21:50'),
(11, 'Elna Hintz', 'bsenger@example.com', '$2y$10$mdYAOidRnQ3Liw90O1lVBexONeXxg.0cQtgeVpJIQLTxDkTbbbVwi', 0, 'DdWIwDTtvi', '2020-12-30 17:21:50', '2020-12-30 17:21:50'),
(12, 'Lokesh Bajracharya', 'llokesh@gmail.com', '$2y$10$orWVz2H2AfrLHGU9csWrSuIJwYBGfvEyMM9mH5.XKH5ClU1Wv0Jre', 0, 'iojx02CeZiD2hSIimgzcqY2y8Vh843YIxSwK04VrBJvEp5dLwlFEGbafGmzP', '2020-12-30 19:02:55', '2020-12-30 19:02:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blood_groups`
--
ALTER TABLE `blood_groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `donors_email_unique` (`email`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD KEY `feedback_user_id_index` (`user_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `blood_groups`
--
ALTER TABLE `blood_groups`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;
--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
