-- phpMyAdmin SQL Dump
-- version 4.7.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Waktu pembuatan: 24 Apr 2018 pada 07.17
-- Versi server: 5.7.19
-- Versi PHP: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `instameter`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `created_at`) VALUES
(1, 1, 1, 'Hebat', '2018-04-24 00:27:37'),
(2, 1, 5, 'Kuy', '2018-04-24 06:22:16'),
(3, 1, 5, 'Hebat ajaan', '2018-04-24 06:22:23'),
(4, 1, 4, 'Banyak punya uang om', '2018-04-24 06:22:36'),
(5, 2, 5, 'WKWKWKW', '2018-04-24 06:29:56'),
(6, 2, 3, 'Kalau Berinstri 2', '2018-04-24 06:30:15');

-- --------------------------------------------------------

--
-- Struktur dari tabel `likes`
--

CREATE TABLE `likes` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `likes`
--

INSERT INTO `likes` (`id`, `user_id`, `post_id`, `created_at`) VALUES
(1, 2, 6, '2018-04-24 06:41:02'),
(2, 2, 6, '2018-04-24 06:41:03'),
(3, 2, 6, '2018-04-24 06:41:05'),
(4, 2, 6, '2018-04-24 06:41:06'),
(5, 2, 6, '2018-04-24 06:41:07'),
(6, 2, 6, '2018-04-24 06:41:08'),
(7, 2, 6, '2018-04-24 06:41:09'),
(8, 2, 6, '2018-04-24 06:41:10'),
(9, 2, 6, '2018-04-24 06:41:11'),
(10, 2, 4, '2018-04-24 06:41:56'),
(11, 4, 6, '2018-04-24 07:04:49'),
(12, 4, 6, '2018-04-24 07:04:52'),
(13, 4, 6, '2018-04-24 07:04:52'),
(14, 4, 6, '2018-04-24 07:04:53'),
(15, 4, 6, '2018-04-24 07:04:53'),
(16, 4, 6, '2018-04-24 07:04:53'),
(17, 4, 6, '2018-04-24 07:04:53'),
(18, 4, 6, '2018-04-24 07:04:53'),
(19, 4, 6, '2018-04-24 07:04:54'),
(20, 4, 6, '2018-04-24 07:04:55'),
(21, 4, 6, '2018-04-24 07:04:56'),
(22, 4, 6, '2018-04-24 07:04:57'),
(23, 4, 6, '2018-04-24 07:04:57'),
(24, 4, 6, '2018-04-24 07:04:57'),
(25, 4, 6, '2018-04-24 07:04:57'),
(26, 4, 6, '2018-04-24 07:04:57'),
(27, 4, 6, '2018-04-24 07:04:58'),
(28, 4, 6, '2018-04-24 07:04:58'),
(29, 4, 6, '2018-04-24 07:04:58'),
(30, 4, 6, '2018-04-24 07:04:59'),
(31, 4, 6, '2018-04-24 07:04:59'),
(32, 4, 6, '2018-04-24 07:07:28');

-- --------------------------------------------------------

--
-- Struktur dari tabel `posts`
--

CREATE TABLE `posts` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `caption` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `photo`, `caption`, `created_at`) VALUES
(1, 1, 'upload/sanur-beach-bali.jpg', 'Senangnya dalam hati', '2018-04-23 22:23:43'),
(2, 1, 'upload/sanur-beach-bali.jpg', 'Senangnya dalam hati', '2018-04-23 22:25:15'),
(3, 1, 'upload/sanur-beach-bali.jpg', 'Senangnya dalam hati', '2018-04-23 22:25:19'),
(4, 1, 'upload/20180424060429.png', 'Habis narik duit', '2018-04-24 06:15:29'),
(5, 1, 'upload/20180424060401.jpg', 'Suka mertaaa', '2018-04-24 06:17:01'),
(6, 2, 'upload/20180424060438.jpg', 'Kereeenn', '2018-04-24 06:30:38');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `phone` varchar(13) NOT NULL,
  `avatar` varchar(100) NOT NULL,
  `address` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `name`, `phone`, `avatar`, `address`, `created_at`) VALUES
(1, 'pande', 'pande@teamlabs.id', '123456', 'Pande Putu', '085737484960', 'upload/20180424060449.png', 'JALAN GUNUNG AGUNG GANG BUMI AYU G', '2018-04-23 15:27:21'),
(2, 'nyoman', 'nyoman@gmail.com', '123456', 'Nyoman Nuartha', '085', 'img/user2.png', 'Jalan Gunung Agung Gang Bumi Ayu', '2018-04-24 06:29:41'),
(4, 'ketut', 'ketut@gmail.com', '123456', 'Ketut', '1231', 'img/user.png', 'Ja', '2018-04-24 07:01:06'),
(9, 'triana', 'triana@triana.com', '123456', 'triana', '0857374849600', 'img/user.png', 'Jalan Gunung Agung Gang Bumi Ayu G No 17', '2018-04-24 07:08:30');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indeks untuk tabel `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`);

--
-- Indeks untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT untuk tabel `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `likes`
--
ALTER TABLE `likes`
  ADD CONSTRAINT `likes_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `likes_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Ketidakleluasaan untuk tabel `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
