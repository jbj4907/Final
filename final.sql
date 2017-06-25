-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- 생성 시간: 17-06-25 09:47
-- 서버 버전: 10.1.21-MariaDB
-- PHP 버전: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 데이터베이스: `final`
--

-- --------------------------------------------------------

--
-- 테이블 구조 `apply_widget`
--

CREATE TABLE `apply_widget` (
  `id` int(255) NOT NULL,
  `user` varchar(20) NOT NULL,
  `widget_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 테이블 구조 `login`
--

CREATE TABLE `login` (
  `id` varchar(20) NOT NULL,
  `pw` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- 테이블 구조 `widget`
--

CREATE TABLE `widget` (
  `id` int(255) NOT NULL,
  `name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=euckr ROW_FORMAT=COMPACT;

--
-- 테이블의 덤프 데이터 `widget`
--

INSERT INTO `widget` (`id`, `name`) VALUES
(0, '날씨'),
(1, '환율'),
(2, '뉴스');

--
-- 덤프된 테이블의 인덱스
--

--
-- 테이블의 인덱스 `apply_widget`
--
ALTER TABLE `apply_widget`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`),
  ADD KEY `id_2` (`id`);

--
-- 테이블의 인덱스 `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- 테이블의 인덱스 `widget`
--
ALTER TABLE `widget`
  ADD PRIMARY KEY (`id`);

--
-- 덤프된 테이블의 AUTO_INCREMENT
--

--
-- 테이블의 AUTO_INCREMENT `apply_widget`
--
ALTER TABLE `apply_widget`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
