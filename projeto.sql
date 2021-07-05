-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 03-Jul-2019 às 19:00
-- Versão do servidor: 10.1.38-MariaDB
-- versão do PHP: 7.3.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `projeto`
--
CREATE DATABASE IF NOT EXISTS `projeto` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `projeto`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `idnome` int(11) NOT NULL,
  `nome` varchar(45) NOT NULL,
  `tipo` varchar(45) NOT NULL,
  `matricula` varchar(12) NOT NULL,
  `datanascimento` date NOT NULL,
  `cpf` varchar(14) NOT NULL,
  `rg` varchar(12) NOT NULL,
  `email` varchar(45) NOT NULL,
  `telefone` varchar(15) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `rua` varchar(45) NOT NULL,
  `bairro` varchar(45) NOT NULL,
  `cidade` varchar(45) NOT NULL,
  `estado` varchar(45) NOT NULL,
  `cep` varchar(9) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`idnome`, `nome`, `tipo`, `matricula`, `datanascimento`, `cpf`, `rg`, `email`, `telefone`, `senha`, `rua`, `bairro`, `cidade`, `estado`, `cep`) VALUES
(1, 'teste', 'aluno', '201821001111', '1999-11-02', '111.111.111-11', '1111111', 'ale@gmail.com', '40028922', '123456', 'teste 99', 'das coves', 'correia pinto', 'santa catarina', '88535-000');


--
-- Indexes for dumped tables
--

--
-- Indexes for table `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`idnome`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `idnome` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
