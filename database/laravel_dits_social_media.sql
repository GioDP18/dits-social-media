-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2024 at 11:02 AM
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
-- Database: `laravel_dits_social_media`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` bigint(20) UNSIGNED NOT NULL,
  `comment` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `users_id`, `posts_id`, `comment`, `image`, `created_at`, `updated_at`) VALUES
(1, 8, 7, 'Quis iure non voluptas eos facilis aut impedit.', 'https://via.placeholder.com/640x480.png/005599?text=deserunt', '2024-01-08 21:18:48', '2024-01-08 21:18:48'),
(2, 9, 2, 'Et omnis et dolorem architecto molestiae sint sed.', 'https://via.placeholder.com/640x480.png/004433?text=et', '2024-01-08 21:18:48', '2024-01-08 21:18:48'),
(3, 5, 6, 'Illo aliquam sit est.', 'https://via.placeholder.com/640x480.png/00ffee?text=est', '2024-01-08 21:18:48', '2024-01-08 21:18:48'),
(4, 5, 10, 'Commodi molestiae quisquam aut odio tempore.', 'https://via.placeholder.com/640x480.png/00ee33?text=quis', '2024-01-08 21:18:48', '2024-01-08 21:18:48'),
(5, 6, 10, 'Nihil ut reprehenderit cum distinctio amet perferendis ad.', 'https://via.placeholder.com/640x480.png/0011cc?text=blanditiis', '2024-01-08 21:18:48', '2024-01-08 21:18:48'),
(6, 3, 10, 'Nobis accusamus mollitia molestias inventore asperiores quas et.', 'https://via.placeholder.com/640x480.png/00ff00?text=nostrum', '2024-01-08 21:18:48', '2024-01-08 21:18:48'),
(7, 9, 3, 'Delectus sit rem nostrum officia vel.', 'https://via.placeholder.com/640x480.png/00bb88?text=sint', '2024-01-08 21:18:48', '2024-01-08 21:18:48'),
(8, 4, 10, 'Voluptatem in modi porro dolore repellat consequatur ut.', 'https://via.placeholder.com/640x480.png/007722?text=ut', '2024-01-08 21:18:48', '2024-01-08 21:18:48'),
(9, 4, 7, 'Rerum a in sequi quidem recusandae commodi minus.', 'https://via.placeholder.com/640x480.png/00aabb?text=ipsum', '2024-01-08 21:18:48', '2024-01-08 21:18:48'),
(10, 5, 3, 'Sed dolorem in adipisci qui.', 'https://via.placeholder.com/640x480.png/0099dd?text=aut', '2024-01-08 21:18:48', '2024-01-08 21:18:48'),
(11, 6, 9, 'Aut autem blanditiis quas magni.', 'https://via.placeholder.com/640x480.png/005599?text=sed', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(12, 3, 9, 'Quas nulla ipsam eveniet similique.', 'https://via.placeholder.com/640x480.png/00ffaa?text=sequi', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(13, 1, 2, 'Aliquid accusantium dolorum est dolor omnis nihil iure.', 'https://via.placeholder.com/640x480.png/002288?text=dolorum', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(14, 2, 7, 'Atque praesentium ut magni dolor expedita.', 'https://via.placeholder.com/640x480.png/005588?text=odit', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(15, 10, 7, 'Laudantium aliquam nostrum mollitia.', 'https://via.placeholder.com/640x480.png/0077ff?text=fugiat', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(16, 9, 10, 'Sapiente eaque ex praesentium voluptatem.', 'https://via.placeholder.com/640x480.png/004400?text=et', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(17, 5, 8, 'Odit adipisci accusantium labore qui officia.', 'https://via.placeholder.com/640x480.png/00ddaa?text=qui', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(18, 3, 5, 'Dolor ut necessitatibus ut corrupti animi harum architecto.', 'https://via.placeholder.com/640x480.png/00cc11?text=sint', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(19, 9, 2, 'Voluptatum quas et aut necessitatibus unde.', 'https://via.placeholder.com/640x480.png/00aa88?text=molestiae', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(20, 9, 9, 'Aliquam exercitationem eveniet commodi facere quibusdam quo.', 'https://via.placeholder.com/640x480.png/009900?text=voluptas', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(21, 3, 8, 'Impedit deserunt non dicta laborum aut impedit.', 'https://via.placeholder.com/640x480.png/00cc55?text=sapiente', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(22, 1, 7, 'Iste fuga ducimus corporis maxime nesciunt quae.', 'https://via.placeholder.com/640x480.png/003399?text=corporis', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(23, 2, 10, 'Tenetur maiores et aut esse dolores maiores.', 'https://via.placeholder.com/640x480.png/002222?text=eius', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(24, 4, 6, 'Ab quam deleniti consequatur rerum.', 'https://via.placeholder.com/640x480.png/00aa66?text=est', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(25, 2, 3, 'Reprehenderit ipsum molestiae nulla non.', 'https://via.placeholder.com/640x480.png/005533?text=fuga', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(26, 3, 1, 'Distinctio quae blanditiis tempore non possimus.', 'https://via.placeholder.com/640x480.png/00cc11?text=perspiciatis', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(27, 8, 5, 'Vero tempore dignissimos atque itaque est.', 'https://via.placeholder.com/640x480.png/0011ee?text=eligendi', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(28, 7, 8, 'Et quia non voluptatum atque.', 'https://via.placeholder.com/640x480.png/0066aa?text=eum', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(29, 8, 3, 'Possimus necessitatibus dolores explicabo et consectetur illum totam.', 'https://via.placeholder.com/640x480.png/0088ff?text=consequatur', '2024-01-09 00:41:26', '2024-01-09 00:41:26'),
(30, 2, 8, 'Molestiae maiores odit dolor assumenda rem non quis.', 'https://via.placeholder.com/640x480.png/0088ff?text=cum', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(31, 10, 9, 'Aut vel excepturi quod ut voluptas eum error.', 'https://via.placeholder.com/640x480.png/009944?text=vitae', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(32, 4, 8, 'Cumque odio nisi nihil.', 'https://via.placeholder.com/640x480.png/00ccdd?text=corrupti', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(33, 1, 1, 'Illo perferendis maxime quae nihil provident.', 'https://via.placeholder.com/640x480.png/00cc77?text=vitae', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(34, 10, 2, 'Accusamus voluptates facere doloribus voluptatum quaerat perferendis.', 'https://via.placeholder.com/640x480.png/008833?text=non', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(35, 7, 7, 'Autem sapiente quae nulla tempora.', 'https://via.placeholder.com/640x480.png/003399?text=quae', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(36, 8, 4, 'Eveniet doloremque sunt atque non repudiandae.', 'https://via.placeholder.com/640x480.png/003300?text=odit', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(37, 2, 6, 'Aut voluptas repellendus et.', 'https://via.placeholder.com/640x480.png/009977?text=dolor', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(38, 4, 4, 'Qui voluptatum quisquam fugiat temporibus corporis.', 'https://via.placeholder.com/640x480.png/00ffbb?text=voluptatem', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(39, 1, 7, 'Aut provident similique eos laborum non est.', 'https://via.placeholder.com/640x480.png/0066ee?text=in', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(40, 6, 7, 'Unde et perferendis sed explicabo error.', 'https://via.placeholder.com/640x480.png/0099dd?text=neque', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(41, 3, 10, 'Natus tenetur quaerat et sed qui rem nostrum.', 'https://via.placeholder.com/640x480.png/007744?text=harum', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(42, 7, 10, 'Accusantium ipsa ut omnis odit laboriosam.', 'https://via.placeholder.com/640x480.png/002211?text=omnis', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(43, 1, 4, 'Voluptas quis sit consectetur ex.', 'https://via.placeholder.com/640x480.png/003333?text=error', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(44, 10, 8, 'Qui iste dolor sit et.', 'https://via.placeholder.com/640x480.png/006699?text=pariatur', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(45, 6, 6, 'Incidunt ut ipsum dolores iusto et commodi.', 'https://via.placeholder.com/640x480.png/00ee33?text=nemo', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(46, 9, 3, 'Labore labore non aut consequatur aut illum.', 'https://via.placeholder.com/640x480.png/000066?text=est', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(47, 4, 6, 'Et esse animi ducimus et.', 'https://via.placeholder.com/640x480.png/000099?text=molestias', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(48, 1, 4, 'Inventore nisi nobis saepe ipsa.', 'https://via.placeholder.com/640x480.png/00ff55?text=esse', '2024-01-09 00:41:27', '2024-01-09 00:41:27'),
(49, 10, 9, 'Mollitia qui et autem ab hic repellendus et.', 'https://via.placeholder.com/640x480.png/00cc33?text=temporibus', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(50, 8, 4, 'Nam consequatur fugit expedita distinctio earum.', 'https://via.placeholder.com/640x480.png/00ffdd?text=sed', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(51, 6, 8, 'Voluptas aut voluptas eveniet sit.', 'https://via.placeholder.com/640x480.png/00ee33?text=excepturi', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(52, 8, 8, 'Facere sint fuga nisi recusandae.', 'https://via.placeholder.com/640x480.png/00ee00?text=qui', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(53, 3, 3, 'Quibusdam sunt odit et in.', 'https://via.placeholder.com/640x480.png/00ccaa?text=ut', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(54, 10, 8, 'Iusto facilis sed quod fugiat.', 'https://via.placeholder.com/640x480.png/00ff99?text=aut', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(55, 7, 9, 'Corporis eum ad quae rerum.', 'https://via.placeholder.com/640x480.png/00ee77?text=unde', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(56, 1, 1, 'Modi cupiditate ut qui maiores aut eos commodi.', 'https://via.placeholder.com/640x480.png/0099bb?text=placeat', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(57, 7, 1, 'Harum delectus quis suscipit et et.', 'https://via.placeholder.com/640x480.png/00ee99?text=esse', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(58, 6, 10, 'Consequatur voluptatem reiciendis dicta dignissimos sunt.', 'https://via.placeholder.com/640x480.png/004411?text=ducimus', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(59, 6, 8, 'Asperiores quia atque est et ea.', 'https://via.placeholder.com/640x480.png/00ccff?text=earum', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(60, 5, 2, 'Et dolorum corporis quis deleniti fugiat mollitia magnam.', 'https://via.placeholder.com/640x480.png/0055bb?text=deserunt', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(61, 6, 6, 'Accusantium ut voluptas repellendus voluptatem consequatur voluptatem aut.', 'https://via.placeholder.com/640x480.png/00bb88?text=quibusdam', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(62, 3, 8, 'Illum sed voluptas quia beatae qui blanditiis officiis.', 'https://via.placeholder.com/640x480.png/009900?text=earum', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(63, 6, 10, 'Nesciunt id modi commodi recusandae.', 'https://via.placeholder.com/640x480.png/0055aa?text=ipsam', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(64, 2, 9, 'Velit voluptas ipsa aut odit et.', 'https://via.placeholder.com/640x480.png/0055cc?text=non', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(65, 5, 10, 'Voluptas officiis fugiat voluptas consequatur.', 'https://via.placeholder.com/640x480.png/0088ff?text=quasi', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(66, 9, 5, 'Dignissimos natus repellendus dolor et harum iusto eum quasi.', 'https://via.placeholder.com/640x480.png/002299?text=quia', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(67, 2, 2, 'Nihil laudantium dolorum enim eos sapiente voluptatibus unde et.', 'https://via.placeholder.com/640x480.png/0033dd?text=tempora', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(68, 2, 8, 'Impedit id voluptatem tempora nam ea.', 'https://via.placeholder.com/640x480.png/002233?text=laboriosam', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(69, 7, 9, 'Veritatis voluptatem maxime doloribus dolorem sapiente voluptatum saepe.', 'https://via.placeholder.com/640x480.png/001144?text=eligendi', '2024-01-09 00:41:28', '2024-01-09 00:41:28'),
(70, 2, 7, 'Voluptas natus placeat est ut modi officia error.', 'https://via.placeholder.com/640x480.png/007799?text=eos', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(71, 3, 1, 'Placeat eligendi hic molestiae.', 'https://via.placeholder.com/640x480.png/004444?text=repellat', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(72, 6, 1, 'Rerum consequuntur amet repellat vel sit qui omnis.', 'https://via.placeholder.com/640x480.png/00cc00?text=ipsam', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(73, 10, 1, 'Occaecati consequatur occaecati provident.', 'https://via.placeholder.com/640x480.png/00dd99?text=officiis', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(74, 2, 8, 'Dignissimos natus ut dolorem itaque magni.', 'https://via.placeholder.com/640x480.png/0055aa?text=accusantium', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(75, 3, 9, 'Ut rerum facilis odio voluptas enim.', 'https://via.placeholder.com/640x480.png/00bbee?text=tempore', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(76, 2, 3, 'Velit corrupti incidunt atque.', 'https://via.placeholder.com/640x480.png/004455?text=necessitatibus', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(77, 6, 8, 'Et dolorem et voluptate quo quisquam unde.', 'https://via.placeholder.com/640x480.png/00ccdd?text=temporibus', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(78, 2, 3, 'Rem assumenda corporis aliquid.', 'https://via.placeholder.com/640x480.png/002299?text=repudiandae', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(79, 2, 7, 'Officiis hic omnis repellendus porro nam ut.', 'https://via.placeholder.com/640x480.png/004433?text=eum', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(80, 8, 7, 'Omnis optio earum ut similique enim minima.', 'https://via.placeholder.com/640x480.png/008811?text=et', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(81, 1, 3, 'Quasi quidem ut ex quis odit sit.', 'https://via.placeholder.com/640x480.png/00eeee?text=id', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(82, 3, 10, 'Expedita in dolor et iste et ea illum.', 'https://via.placeholder.com/640x480.png/006600?text=voluptas', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(83, 6, 4, 'Tenetur voluptatem delectus nobis nisi ab.', 'https://via.placeholder.com/640x480.png/0099ee?text=aut', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(84, 4, 6, 'Ipsam ut veritatis eaque recusandae amet cum aspernatur voluptatem.', 'https://via.placeholder.com/640x480.png/00bbdd?text=id', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(85, 3, 3, 'Saepe perspiciatis aliquam voluptas laudantium.', 'https://via.placeholder.com/640x480.png/00dddd?text=accusantium', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(86, 3, 6, 'Aut culpa consequuntur distinctio quae labore minus.', 'https://via.placeholder.com/640x480.png/000000?text=tempora', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(87, 3, 2, 'Sunt quis sequi quidem ratione perspiciatis velit accusantium expedita.', 'https://via.placeholder.com/640x480.png/004455?text=minima', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(88, 10, 7, 'Sit iusto incidunt accusantium necessitatibus.', 'https://via.placeholder.com/640x480.png/003355?text=eos', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(89, 6, 5, 'Similique quo quaerat occaecati ea.', 'https://via.placeholder.com/640x480.png/003344?text=mollitia', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(90, 10, 1, 'Non blanditiis dolor eum ipsam quis eum.', 'https://via.placeholder.com/640x480.png/002222?text=accusamus', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(91, 4, 10, 'Minima optio et aut ipsum.', 'https://via.placeholder.com/640x480.png/006666?text=quia', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(92, 6, 7, 'Totam impedit laboriosam maxime explicabo qui maiores.', 'https://via.placeholder.com/640x480.png/00dd77?text=voluptatum', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(93, 8, 6, 'Sit aliquam corporis vitae cumque dolorem.', 'https://via.placeholder.com/640x480.png/002255?text=rerum', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(94, 10, 2, 'Voluptatem cupiditate veritatis molestias tenetur accusantium.', 'https://via.placeholder.com/640x480.png/00bb55?text=excepturi', '2024-01-09 00:41:29', '2024-01-09 00:41:29'),
(95, 2, 6, 'Voluptas officiis et eius.', 'https://via.placeholder.com/640x480.png/00aa99?text=est', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(96, 9, 8, 'Nam reprehenderit eos maxime a dolorem nisi.', 'https://via.placeholder.com/640x480.png/00ffaa?text=ab', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(97, 10, 5, 'Molestias at sunt ut autem harum odit.', 'https://via.placeholder.com/640x480.png/0022aa?text=est', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(98, 9, 10, 'Saepe inventore veritatis molestiae sapiente esse ullam.', 'https://via.placeholder.com/640x480.png/006622?text=laborum', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(99, 4, 8, 'Animi enim officia quia velit delectus.', 'https://via.placeholder.com/640x480.png/001111?text=aut', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(100, 8, 1, 'Voluptatem dolores architecto repellendus beatae velit pariatur.', 'https://via.placeholder.com/640x480.png/00dddd?text=rerum', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(101, 9, 7, 'Sed vitae accusamus optio harum.', 'https://via.placeholder.com/640x480.png/00aa22?text=inventore', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(102, 4, 7, 'Magni aperiam qui itaque ut porro quidem nihil.', 'https://via.placeholder.com/640x480.png/005522?text=exercitationem', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(103, 10, 2, 'Ea in quos molestiae commodi aut dolores aliquam natus.', 'https://via.placeholder.com/640x480.png/007700?text=alias', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(104, 9, 6, 'Atque et itaque laborum.', 'https://via.placeholder.com/640x480.png/005588?text=eaque', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(105, 5, 6, 'Aut rerum ad voluptatibus eos et est ea.', 'https://via.placeholder.com/640x480.png/0022ff?text=et', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(106, 1, 1, 'Fugiat dolores minus earum architecto cumque.', 'https://via.placeholder.com/640x480.png/007733?text=architecto', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(107, 9, 5, 'Sint est necessitatibus aut.', 'https://via.placeholder.com/640x480.png/005544?text=debitis', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(108, 7, 9, 'Ea qui blanditiis dolor et voluptatem dignissimos eos.', 'https://via.placeholder.com/640x480.png/0055ee?text=enim', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(109, 3, 8, 'Ut et libero error.', 'https://via.placeholder.com/640x480.png/00ddaa?text=nulla', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(110, 1, 2, 'Voluptatem et temporibus voluptas impedit amet voluptatem.', 'https://via.placeholder.com/640x480.png/0044ff?text=nisi', '2024-01-09 00:41:30', '2024-01-09 00:41:30'),
(111, 1, 14, 'cvasdxzc', 'comment_images/SeBquWNl4Z6rhxXXdG5t59j5zv2HRMbecr3ClCYL.png', '2024-01-09 01:15:30', '2024-01-09 01:15:30'),
(112, 1, 13, 'HAHAHAHA', 'comment_images/T8G0KB0NMFmiOggYQ3cafSKk2BuxFqtaDnZAe1Qd.png', '2024-01-09 01:26:41', '2024-01-09 01:26:41');

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
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`id`, `users_id`, `posts_id`, `created_at`, `updated_at`) VALUES
(254, 3, 3, '2024-01-11 01:26:05', '2024-01-11 01:26:05'),
(255, 10, 10, '2024-01-11 01:26:05', '2024-01-11 01:26:05'),
(256, 5, 3, '2024-01-11 01:26:05', '2024-01-11 01:26:05'),
(257, 1, 3, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(258, 8, 2, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(259, 7, 8, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(260, 5, 4, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(261, 6, 3, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(262, 1, 7, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(263, 10, 6, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(264, 6, 6, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(265, 6, 2, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(266, 5, 10, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(267, 4, 4, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(268, 7, 7, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(269, 1, 5, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(270, 1, 4, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(271, 4, 10, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(272, 7, 1, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(273, 8, 7, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(274, 4, 6, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(275, 4, 6, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(276, 8, 5, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(277, 3, 10, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(278, 10, 2, '2024-01-11 01:26:06', '2024-01-11 01:26:06'),
(279, 5, 1, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(280, 5, 3, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(281, 10, 6, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(282, 9, 7, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(283, 8, 10, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(284, 5, 9, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(285, 2, 2, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(286, 5, 9, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(287, 1, 4, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(288, 10, 8, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(289, 10, 1, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(290, 8, 7, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(291, 8, 3, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(292, 8, 3, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(293, 1, 8, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(294, 4, 8, '2024-01-11 01:26:07', '2024-01-11 01:26:07'),
(295, 2, 3, '2024-01-11 01:26:08', '2024-01-11 01:26:08'),
(296, 5, 10, '2024-01-11 01:26:08', '2024-01-11 01:26:08'),
(297, 9, 1, '2024-01-11 01:26:08', '2024-01-11 01:26:08'),
(298, 7, 2, '2024-01-11 01:26:08', '2024-01-11 01:26:08'),
(299, 4, 3, '2024-01-11 01:26:08', '2024-01-11 01:26:08'),
(300, 5, 1, '2024-01-11 01:26:09', '2024-01-11 01:26:09'),
(301, 2, 7, '2024-01-11 01:26:09', '2024-01-11 01:26:09'),
(302, 3, 10, '2024-01-11 01:26:09', '2024-01-11 01:26:09'),
(303, 1, 3, '2024-01-11 01:26:09', '2024-01-11 01:26:09'),
(304, 3, 9, '2024-01-11 01:26:09', '2024-01-11 01:26:09'),
(305, 4, 2, '2024-01-11 01:26:09', '2024-01-11 01:26:09'),
(306, 7, 1, '2024-01-11 01:26:09', '2024-01-11 01:26:09'),
(307, 1, 6, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(308, 8, 1, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(309, 1, 4, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(310, 1, 10, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(311, 8, 9, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(312, 5, 6, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(313, 3, 1, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(314, 8, 3, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(315, 2, 8, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(316, 4, 6, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(317, 8, 4, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(318, 6, 1, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(319, 5, 2, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(320, 6, 9, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(321, 5, 1, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(322, 6, 5, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(323, 7, 2, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(324, 8, 2, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(325, 9, 3, '2024-01-11 01:26:10', '2024-01-11 01:26:10'),
(326, 2, 8, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(327, 3, 6, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(328, 6, 1, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(329, 8, 4, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(330, 7, 7, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(331, 6, 3, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(332, 2, 6, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(333, 5, 2, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(334, 9, 1, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(335, 2, 3, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(336, 10, 1, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(337, 6, 7, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(338, 6, 9, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(339, 8, 2, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(340, 7, 8, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(341, 5, 8, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(342, 6, 1, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(343, 9, 6, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(344, 6, 3, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(345, 5, 7, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(346, 1, 10, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(347, 3, 8, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(348, 6, 1, '2024-01-11 01:26:11', '2024-01-11 01:26:11'),
(349, 4, 7, '2024-01-11 01:26:12', '2024-01-11 01:26:12'),
(350, 6, 2, '2024-01-11 01:26:12', '2024-01-11 01:26:12'),
(351, 10, 9, '2024-01-11 01:26:12', '2024-01-11 01:26:12'),
(352, 2, 4, '2024-01-11 01:26:12', '2024-01-11 01:26:12'),
(353, 4, 10, '2024-01-11 01:26:12', '2024-01-11 01:26:12'),
(355, 11, 18, '2024-01-11 01:27:12', '2024-01-11 01:27:12'),
(356, 11, 20, '2024-01-11 01:28:06', '2024-01-11 01:28:06'),
(357, 11, 17, '2024-01-11 01:28:17', '2024-01-11 01:28:17');

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
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(27, '2019_08_19_000000_create_failed_jobs_table', 1),
(28, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(29, '2024_01_08_044110_create_posts_table', 1),
(30, '2024_01_08_044123_create_comments_table', 1),
(31, '2024_01_09_083226_create_likes_table', 2),
(32, '2024_01_11_081634_create_post_images_table', 3);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `caption` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `users_id`, `caption`, `created_at`, `updated_at`) VALUES
(1, 1, 'Doloribus non dolores doloremque minus eligendi molestias.', '2024-01-08 21:18:46', '2024-01-08 21:18:46'),
(2, 1, 'Culpa amet fuga assumenda voluptas magni dolor.', '2024-01-08 21:18:47', '2024-01-08 21:18:47'),
(3, 2, 'Ducimus aut et beatae qui facilis.', '2024-01-08 21:18:47', '2024-01-08 21:18:47'),
(4, 1, 'Ratione ut eum cumque iste.', '2024-01-08 21:18:47', '2024-01-08 21:18:47'),
(5, 2, 'Enim et aut repellat.', '2024-01-08 21:18:47', '2024-01-08 21:18:47'),
(6, 2, 'Quo dolorum distinctio dolor iste occaecati accusamus.', '2024-01-08 21:18:47', '2024-01-08 21:18:47'),
(7, 2, 'Possimus rem veritatis in provident et.', '2024-01-08 21:18:47', '2024-01-08 21:18:47'),
(8, 1, 'Sit laudantium ea est quibusdam in dolor.', '2024-01-08 21:18:47', '2024-01-08 21:18:47'),
(9, 2, 'Iure ut porro quam explicabo commodi reprehenderit expedita.', '2024-01-08 21:18:47', '2024-01-08 21:18:47'),
(10, 1, 'Architecto alias unde voluptates ab dolorem sint.', '2024-01-08 21:18:47', '2024-01-08 21:18:47'),
(11, 11, 'TESTING', '2024-01-08 23:00:33', '2024-01-08 23:00:33'),
(12, 12, 'Happy Anniversary Love mwa😘😘❤', '2024-01-08 23:58:19', '2024-01-08 23:58:19'),
(13, 12, 'Hey guys, I\'m BOBO 😂', '2024-01-09 08:24:52', '2024-01-09 00:24:52'),
(14, 11, 'How to solve this error? 🙏🙏🙏', '2024-01-09 09:11:18', '2024-01-09 01:11:18'),
(15, 11, 'TRYING', '2024-01-11 08:46:27', '2024-01-11 00:46:27'),
(16, 11, 'wfaesdve', '2024-01-11 08:58:03', '2024-01-11 00:58:03'),
(17, 11, 'wfaesdve', '2024-01-11 08:59:02', '2024-01-11 00:59:02'),
(18, 11, 'wfaesdve', '2024-01-11 09:00:01', '2024-01-11 01:00:01'),
(19, 11, 'fcqawsx', '2024-01-11 09:01:17', '2024-01-11 01:01:17'),
(20, 11, 'haqieuyvdbha', '2024-01-11 09:02:08', '2024-01-11 01:02:08');

-- --------------------------------------------------------

--
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `users_id` bigint(20) UNSIGNED NOT NULL,
  `posts_id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`id`, `users_id`, `posts_id`, `image`, `created_at`, `updated_at`) VALUES
(201, 11, 18, 'posts_images/hwKqqQJhj5iSOkflEiapFiKV6qTC44zY0OPqzwXl.png', '2024-01-11 01:00:01', '2024-01-11 01:00:01'),
(202, 11, 18, 'posts_images/GairMQSZWJW5gF80AR1toktEa531224gjEw6kgrm.png', '2024-01-11 01:00:02', '2024-01-11 01:00:02'),
(203, 11, 18, 'posts_images/AwGDOFwQIZiCpdpcezMy7ANXz30skVVr1EZxDaUI.png', '2024-01-11 01:00:02', '2024-01-11 01:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `birthdate` date NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `first_name`, `last_name`, `gender`, `birthdate`, `image`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr. Ben Rutherford', 'Zola Howe I', 'male', '1979-08-19', 'https://via.placeholder.com/640x480.png/006622?text=consequatur', 'sgrant@example.net', '2024-01-08 21:18:46', '$2y$12$wU6fqMrlZ/MIRosZZNq2re.lXLu5weZht990LS53FgMuFKf6ZyRAW', 'vXvJDa9e0G', '2024-01-08 21:18:46', '2024-01-08 21:18:46'),
(2, 'Cynthia Bins', 'Abby Trantow', 'female', '1983-10-14', 'https://via.placeholder.com/640x480.png/0055bb?text=ipsa', 'chelsea17@example.org', '2024-01-08 21:18:46', '$2y$12$wU6fqMrlZ/MIRosZZNq2re.lXLu5weZht990LS53FgMuFKf6ZyRAW', 'R19jenBv1B', '2024-01-08 21:18:46', '2024-01-08 21:18:46'),
(3, 'Holly Botsford', 'Kacey Weissnat', 'female', '1986-01-24', 'https://via.placeholder.com/640x480.png/00cccc?text=praesentium', 'bcremin@example.net', '2024-01-08 21:18:46', '$2y$12$wU6fqMrlZ/MIRosZZNq2re.lXLu5weZht990LS53FgMuFKf6ZyRAW', 'Bvswtqb0Do', '2024-01-08 21:18:46', '2024-01-08 21:18:46'),
(4, 'Dr. Patsy Nienow DVM', 'Weston O\'Reilly', 'male', '1977-12-06', 'https://via.placeholder.com/640x480.png/007711?text=et', 'ryleigh92@example.net', '2024-01-08 21:18:46', '$2y$12$wU6fqMrlZ/MIRosZZNq2re.lXLu5weZht990LS53FgMuFKf6ZyRAW', 'jhiJgEMQkR', '2024-01-08 21:18:46', '2024-01-08 21:18:46'),
(5, 'Ima Walker', 'Dr. Madie Strosin IV', 'female', '2011-12-27', 'https://via.placeholder.com/640x480.png/002299?text=esse', 'macejkovic.eve@example.org', '2024-01-08 21:18:46', '$2y$12$wU6fqMrlZ/MIRosZZNq2re.lXLu5weZht990LS53FgMuFKf6ZyRAW', '9ZzPj2A3Fs', '2024-01-08 21:18:46', '2024-01-08 21:18:46'),
(6, 'Santiago Stokes I', 'Delfina Champlin', 'female', '2012-09-19', 'https://via.placeholder.com/640x480.png/00ee44?text=impedit', 'crunolfsson@example.net', '2024-01-08 21:18:46', '$2y$12$wU6fqMrlZ/MIRosZZNq2re.lXLu5weZht990LS53FgMuFKf6ZyRAW', 'jkcgKYkh7z', '2024-01-08 21:18:46', '2024-01-08 21:18:46'),
(7, 'Tess Renner', 'Prof. Jeffry Doyle PhD', 'female', '1975-01-24', 'https://via.placeholder.com/640x480.png/0022cc?text=iusto', 'merritt.mraz@example.net', '2024-01-08 21:18:46', '$2y$12$wU6fqMrlZ/MIRosZZNq2re.lXLu5weZht990LS53FgMuFKf6ZyRAW', 'k68W0wOE9R', '2024-01-08 21:18:46', '2024-01-08 21:18:46'),
(8, 'Travis Connelly', 'Gladyce Hegmann', 'male', '1989-02-26', 'https://via.placeholder.com/640x480.png/00ff55?text=odio', 'angelina29@example.net', '2024-01-08 21:18:46', '$2y$12$wU6fqMrlZ/MIRosZZNq2re.lXLu5weZht990LS53FgMuFKf6ZyRAW', 'WieYVC5EaF', '2024-01-08 21:18:46', '2024-01-08 21:18:46'),
(9, 'Jamie Walsh', 'Mrs. Concepcion DuBuque', 'male', '2010-12-14', 'https://via.placeholder.com/640x480.png/00aa00?text=expedita', 'buddy52@example.net', '2024-01-08 21:18:46', '$2y$12$wU6fqMrlZ/MIRosZZNq2re.lXLu5weZht990LS53FgMuFKf6ZyRAW', 'VAoffLHKAr', '2024-01-08 21:18:46', '2024-01-08 21:18:46'),
(10, 'Lewis Franecki', 'Martin Carter', 'female', '1973-06-24', 'https://via.placeholder.com/640x480.png/009999?text=est', 'walter.jared@example.com', '2024-01-08 21:18:46', '$2y$12$wU6fqMrlZ/MIRosZZNq2re.lXLu5weZht990LS53FgMuFKf6ZyRAW', 'UNDY49bAI2', '2024-01-08 21:18:46', '2024-01-08 21:18:46'),
(11, 'Gio', 'Dela Pena', 'male', '2024-01-09', NULL, 'gio@gmail.com', NULL, '$2y$12$W2LWrgMw/WYJ7A/nPpqOpeXJ.XguqDu59f41HX39VTPpledfk1Gcm', NULL, '2024-01-08 21:19:14', '2024-01-08 21:19:14'),
(12, 'Tristan Angelo', 'Narido', 'male', '2024-01-04', NULL, 'tristan@gmail.com', NULL, '$2y$12$0yCt39p7hSzAJM3LfRcG3O/n5q/HfzP6O2AzR/IAFOdG9vZ.Lq3DW', NULL, '2024-01-08 23:56:54', '2024-01-08 23:56:54');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_users_id_foreign` (`users_id`),
  ADD KEY `comments_posts_id_foreign` (`posts_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `likes_users_id_foreign` (`users_id`),
  ADD KEY `likes_posts_id_foreign` (`posts_id`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `posts_users_id_foreign` (`users_id`);

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_images_users_id_foreign` (`users_id`),
  ADD KEY `post_images_posts_id_foreign` (`posts_id`);

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
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=358;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=204;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `comments_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `likes_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `post_images`
--
ALTER TABLE `post_images`
  ADD CONSTRAINT `post_images_posts_id_foreign` FOREIGN KEY (`posts_id`) REFERENCES `posts` (`id`),
  ADD CONSTRAINT `post_images_users_id_foreign` FOREIGN KEY (`users_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
