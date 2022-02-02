-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 24-Out-2018 às 00:08
-- Versão do servidor: 10.1.36-MariaDB
-- versão do PHP: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robocup`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `noticia`
--

CREATE TABLE `noticia` (
  `id` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `titulo` varchar(40) NOT NULL,
  `data` varchar(40) NOT NULL,
  `descricao` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `noticia`
--

INSERT INTO `noticia` (`id`, `imagem`, `titulo`, `data`, `descricao`) VALUES
(1, 'image/IMG_20180504_153912.jpg', 'Montagem', '05/05/2018', 'Soldando os componentes que serÃ£o usados.'),
(2, 'image/IMG_20180510_181120.jpg', 'Segunda Chapa', '10/05/2018', 'FixaÃ§Ã£o da segunda chapa de MDF para proteÃ§Ã£o dos componentes'),
(3, 'image/IMG_20180510_195119.jpg', 'Primeiro Desenho', '12/05/2018', 'Primeira ideia de desenho para caracterizaÃ§Ã£o do robÃ´'),
(4, 'image/IMG-20180918-WA0026.jpg', 'Sensores', '18/09/2018', 'FixaÃ§Ã£o dos sensores de contato'),
(8, 'image/arma.jpg', 'Suporte das Armas', '19/09/2018', 'Encaixe onde as armas vÃ£o ficar presas e fazer o movimento de ataque'),
(9, 'image/IMG_20181010_0912305.jpg', 'RobÃ´ Pronto', '10/10/2018', 'Spider pronto e indo para sua primeira batalha nas classificatÃ³rias.');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `noticia`
--
ALTER TABLE `noticia`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `noticia`
--
ALTER TABLE `noticia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2147483647;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
