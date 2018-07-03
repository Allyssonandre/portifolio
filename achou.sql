-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 14-Mar-2018 às 23:23
-- Versão do servidor: 10.1.28-MariaDB
-- PHP Version: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `achou`
--

CREATE TABLE `achou` (
  `id` int(11) NOT NULL,
  `nome` varchar(200) NOT NULL,
  `telefone` varchar(13) NOT NULL,
  `email` varchar(200) NOT NULL,
  `dono` varchar(200) NOT NULL,
  `descricao` varchar(500) NOT NULL,
  `situacao` varchar(123) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `achou`
--

INSERT INTO `achou` (`id`, `nome`, `telefone`, `email`, `dono`, `descricao`, `situacao`) VALUES
(7, 'mario jose', '84 9844-889', 'mario@hotmail.com', 'anderson tavares', 'rde,dvf', 'achado'),
(8, 'manuela cosmo de freitas', '84 8888-999', 'naldo@hotmail.com', 'naldo nascimento', 'cpf, rg, titulo de eleitor', 'achado'),
(9, 'ana maria braga', '84 5555-999', 'ander@hotmail.com', 'ander carlos', 'rg,cpf', 'achado'),
(10, 'marta batata', '84 9999-876', 'martabatata@hotmail.com', 'marcos paulo', 'titulo de eleito, rg, cpf', 'achado'),
(11, 'joana braga de melo', '84 9876-345', 'holando@hotmail.com', 'holando da silva gomes', 'habilitaÃ§Ã£o, cpf,titulo de eleito', 'achado'),
(12, 'slash dos santos', '84 9548-785', 'galego@hotmail.com', 'galego da silva ', 'cpf,habilitaÃ§Ã£o,rg', 'achado'),
(13, 'eraldo gomes', '84 9345-675', 'bero@hotmail.com', 'jose braga', 'cpf,rg', 'achado'),
(14, 'jose maria', '84 9966-876', 'jose@hotmail.com', 'batma', 'cpf,rg', 'achado'),
(15, 'pedro alvares cabral', '(84)988776564', 'carlos@hotmail.com', 'carlos dos santos', 'rg,cnh,cpf', 'achado'),
(16, 'denisse de souza', '8498887690', 'renata@hotmail.com', 'Renata de Souza', 'cpf,rg', 'achado'),
(17, 'anderson do nascimento', '84978564930', 'roge@hotmail.com', 'rogerio dantas', 'rg,cpf', 'achado'),
(18, 'nando silva', '(84)996543857', 'andrenascimento@hotmail.com', 'Andre Nascimento', '			rg					    	\r\n								    ', 'achado');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `achou`
--
ALTER TABLE `achou`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `achou`
--
ALTER TABLE `achou`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
