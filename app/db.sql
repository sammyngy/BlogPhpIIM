-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Jan 26, 2020 at 10:18 PM
-- Server version: 5.7.26
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `p4`
--

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `author` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `added_datetime` datetime NOT NULL,
  `updated_datetime` datetime DEFAULT NULL,
  `type_mission` text,
  `budget_max` text,
  `expert` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `author`, `title`, `content`, `added_datetime`, `updated_datetime`, `type_mission`, `budget_max`, `expert`) VALUES
(1, 'Sammy Nguyen', 'test', 'test', '2020-01-08 00:00:00', NULL, NULL, NULL, NULL),
(31, 'Sammy Nguyen', 'Coronavirus 2019-nCoV : ce que l’on sait de sa mortalité et de sa virulence', '&lt;section class=&quot;content&quot; style=&quot;color: #212121; font-family: Times; font-size: medium;&quot;&gt;\r\n&lt;p class=&quot;paragraph text_align_left&quot; style=&quot;margin: 0px 0px 20px; font-size: 19px; line-height: 30px; font-family: Georgia;&quot; data-original-fontsize=&quot;19px&quot; data-original-lineheight=&quot;30px&quot;&gt;Faut-il vraiment s\'inqui&amp;eacute;ter du coronavirus 2019-NCoV? Alors&amp;nbsp;&lt;a style=&quot;color: #1ea0e6;&quot; href=&quot;http://www.leparisien.fr/societe/coronavirus-en-france-ce-que-l-on-sait-des-trois-patients-hospitalises-a-paris-et-bordeaux-25-01-2020-8244204.php&quot; target=&quot;_blank&quot; rel=&quot;noopener&quot; data-original-fontsize=&quot;19px&quot; data-original-lineheight=&quot;30px&quot;&gt;que trois cas ont &amp;eacute;t&amp;eacute; identifi&amp;eacute;s en France&lt;/a&gt;, deux &amp;agrave; Paris et un &amp;agrave; Bordeaux, la question de sa virulence et de sa mortalit&amp;eacute; est au c&amp;oelig;ur de toutes les interrogations.&lt;/p&gt;\r\n&lt;/section&gt;\r\n&lt;section class=&quot;content&quot; style=&quot;color: #212121; font-family: Times; font-size: medium;&quot;&gt;\r\n&lt;p class=&quot;paragraph text_align_left&quot; style=&quot;margin: 0px 0px 20px; font-size: 19px; line-height: 30px; font-family: Georgia;&quot; data-original-fontsize=&quot;19px&quot; data-original-lineheight=&quot;30px&quot;&gt;Ce virus, dont l\'&amp;eacute;picentre serait un march&amp;eacute; &amp;agrave; Wuhan en Chine, semble &amp;ecirc;tre un nouveau type de coronavirus, famille comptant au moins sept virus identifi&amp;eacute;s. Ils peuvent provoquer des maladies b&amp;eacute;nignes chez l\'homme, comme un rhume, mais aussi d\'autres plus graves comme le Sras (Syndrome respiratoire aigu s&amp;eacute;v&amp;egrave;re), qui a fait plusieurs centaines de morts en 2002-2003.&lt;/p&gt;\r\n&lt;/section&gt;\r\n&lt;section class=&quot;content&quot; style=&quot;color: #212121; font-family: Times; font-size: medium;&quot;&gt;\r\n&lt;h2 class=&quot;inline_title margin_top_xxl margin_bottom_md&quot; style=&quot;font-size: 24px; margin: 40px 0px 20px; line-height: 30px; font-family: GraphikCondensed;&quot; data-original-fontsize=&quot;24px&quot; data-original-lineheight=&quot;30px&quot;&gt;&amp;laquo; Si vous &amp;ecirc;tes bien portant, vous restez debout &amp;raquo;&lt;/h2&gt;\r\n&lt;/section&gt;\r\n&lt;section class=&quot;content&quot; style=&quot;color: #212121; font-family: Times; font-size: medium;&quot;&gt;\r\n&lt;p class=&quot;paragraph text_align_left&quot; style=&quot;margin: 0px 0px 20px; font-size: 19px; line-height: 30px; font-family: Georgia;&quot; data-original-fontsize=&quot;19px&quot; data-original-lineheight=&quot;30px&quot;&gt;Comme l\'expliquait dans nos colonnes ce samedi matin Jean-Claude Manuguerra, responsable de la cellule d\'intervention biologique d\'urgence &amp;agrave; l\'Institut Pasteur, le profil des personnes d&amp;eacute;c&amp;eacute;d&amp;eacute;es fait avant tout &amp;eacute;tat de &amp;laquo; patients &amp;acirc;g&amp;eacute;s, souffrant de comorbidit&amp;eacute;s (des maladies qui en accompagnent d\'autres) ou plus jeunes mais malades, immunod&amp;eacute;prim&amp;eacute;s. &amp;raquo;&lt;/p&gt;\r\n&lt;/section&gt;\r\n&lt;section class=&quot;content&quot; style=&quot;color: #212121; font-family: Times; font-size: medium;&quot;&gt;\r\n&lt;p class=&quot;paragraph text_align_left&quot; style=&quot;margin: 0px 0px 20px; font-size: 19px; line-height: 30px; font-family: Georgia;&quot; data-original-fontsize=&quot;19px&quot; data-original-lineheight=&quot;30px&quot;&gt;Un virus, r&amp;eacute;sume-t-il, &amp;laquo; c\'est comme une baffe. Si vous &amp;ecirc;tes bien portant, vous restez debout sinon elle vous met &amp;agrave; terre &amp;raquo;.&lt;/p&gt;\r\n&lt;/section&gt;\r\n&lt;section class=&quot;content&quot; style=&quot;color: #212121; font-family: Times; font-size: medium;&quot;&gt;\r\n&lt;p class=&quot;paragraph text_align_left&quot; style=&quot;margin: 0px 0px 20px; font-size: 19px; line-height: 30px; font-family: Georgia;&quot; data-original-fontsize=&quot;19px&quot; data-original-lineheight=&quot;30px&quot;&gt;&amp;laquo; De fa&amp;ccedil;on g&amp;eacute;n&amp;eacute;rale, les patients (touch&amp;eacute;s par le nouveau virus) sont dans un &amp;eacute;tat moins grave qu\'avec le Sras &amp;raquo;, confirme le Pr Yazdanpanah, expert aupr&amp;egrave;s de l\'OMS et qui a pris en charge des patients en France.&lt;/p&gt;\r\n&lt;/section&gt;\r\n&lt;section class=&quot;content&quot; style=&quot;color: #212121; font-family: Times; font-size: medium;&quot;&gt;\r\n&lt;div class=&quot;element element-rawhtml&quot;&gt;\r\n&lt;p style=&quot;margin: 0px 0px 20px; font-size: 19px; line-height: 30px; font-family: Georgia;&quot;&gt;&lt;strong data-original-fontsize=&quot;19px&quot; data-original-lineheight=&quot;30px&quot;&gt;LIRE AUSSI &amp;gt;&amp;nbsp;&lt;/strong&gt;&lt;a style=&quot;color: #1ea0e6;&quot; href=&quot;http://www.leparisien.fr/societe/sante/virus-chinois-2019-ncov-quels-sont-les-symptomes-que-faire-en-cas-de-doute-25-01-2020-8244222.php&quot; target=&quot;_blank&quot; rel=&quot;noopener&quot; data-original-fontsize=&quot;19px&quot; data-original-lineheight=&quot;30px&quot;&gt;Coronavirus 2019-nCoV : quels sont les sympt&amp;ocirc;mes ? Que faire en cas de doute ?&lt;/a&gt;&lt;/p&gt;\r\n&lt;/div&gt;\r\n&lt;/section&gt;\r\n&lt;section class=&quot;content&quot; style=&quot;color: #212121; font-family: Times; font-size: medium;&quot;&gt;\r\n&lt;p class=&quot;paragraph text_align_left&quot; style=&quot;margin: 0px 0px 20px; font-size: 19px; line-height: 30px; font-family: Georgia;&quot; data-original-fontsize=&quot;19px&quot; data-original-lineheight=&quot;30px&quot;&gt;Pour en savoir plus, nous avons compar&amp;eacute; les chiffres du coronavirus-NCoV 2019 aux pr&amp;eacute;c&amp;eacute;dentes &amp;eacute;pid&amp;eacute;mies de coronavirus majeures, le Sras et le Mers.&lt;/p&gt;\r\n&lt;/section&gt;\r\n&lt;p&gt;&amp;nbsp;&lt;/p&gt;\r\n&lt;section class=&quot;content&quot; style=&quot;color: #212121; font-family: Times; font-size: medium;&quot;&gt;\r\n&lt;p class=&quot;paragraph text_align_left&quot; style=&quot;margin: 0px 0px 20px; font-size: 19px; line-height: 30px; font-family: Georgia;&quot; data-original-fontsize=&quot;19px&quot; data-original-lineheight=&quot;30px&quot;&gt;Depuis son apparition en 2002-2003, le premier a fait 774 morts pour plus de 8000 cas d\'infections recens&amp;eacute;s, comme le rappelle le&amp;nbsp;&lt;a style=&quot;color: #1ea0e6;&quot; href=&quot;https://onlinelibrary.wiley.com/doi/epdf/10.1002/jmv.25683?referrer_access_token=-qibEEJsfJZcve39RcyiOk4keas67K9QMdWULTWMo8NRNQdOpuUvZD_Ojvri06MqRHwMZcFvvczD4RJotzIWugxuZp3xG8C1tHmu4lWfAiaf7N581vy1-4fqZf_g48L7FKip7zfW-kZLZxWDcZEDvg%3D%3D&quot; target=&quot;_blank&quot; rel=&quot;noopener&quot; data-original-fontsize=&quot;19px&quot; data-original-lineheight=&quot;30px&quot;&gt;Journal of medical virology&lt;/a&gt;&amp;nbsp;dans un article qui vient d\'&amp;ecirc;tre publi&amp;eacute;. Soit un taux de mortalit&amp;eacute; de 9,6 %.&lt;/p&gt;\r\n&lt;/section&gt;', '2020-01-26 08:05:56', '2020-01-26 08:08:44', NULL, NULL, NULL),
(32, 'Sammy Nguyen', 'zeze', '&lt;p&gt;zeze&lt;/p&gt;', '2020-01-26 08:07:20', NULL, NULL, NULL, NULL),
(34, 'Sammy Nguyen', 'a', '&lt;p&gt;a&lt;/p&gt;', '2020-01-26 23:00:18', NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `pseudo` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `grade` varchar(255) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `pseudo`, `password`, `email`, `grade`) VALUES
(3, 'admin', '$2y$10$K5ABdxECRbfeywfYqaH9kOn7.HgmGe4qlzIt2d36sMeod28jhDyeu', 'admin@gmail.com', 'Admin'),
(27, 'sammy', '$2y$10$v0jppB6LKanngfb.g.KDFeO.N65nvuvpTCt6G7ggD4z2sKyQtqDHO', 'sammy@sammy.fr', ' 56');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
