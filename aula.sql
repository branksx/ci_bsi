-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Maio-2022 às 16:11
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `aula`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `agenda`
--

CREATE TABLE `agenda` (
  `ID` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL,
  `Endereco` varchar(255) NOT NULL,
  `Telefone` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `agenda`
--

INSERT INTO `agenda` (`ID`, `Nome`, `Endereco`, `Telefone`) VALUES
(1, 'Bruno Baruffi Esteves', 'Rua ABC', '123123'),
(2, 'Joao Pedro Melo', 'Rua AXY', '4444444'),
(3, 'wwwe', 'wewewe', 'wsewew'),
(4, 'wwwe', 'wewewe', 'wsewew'),
(5, 'wwwe', 'wewewe', 'wsewew'),
(6, 'wwwe', 'wewewe', 'wsewew'),
(7, 'wwwe', 'wewewe', 'wsewew'),
(8, 'wwwe', 'wewewe', 'wsewew'),
(9, 'wwwe', 'wewewe', 'wsewew'),
(10, 'ddfsf', 'sdfsdfs', 'sdfsdf'),
(11, 'ddfsf', 'sdfsdfs', 'sdfsdf'),
(12, 'ddfsf', 'sdfsdfs', 'sdfsdf'),
(13, 'ddfsf', 'sdfsdfs', 'sdfsdf'),
(14, 'ddfsf', 'sdfsdfs', 'sdfsdf'),
(15, 'ddfsf', 'sdfsdfs', 'sdfsdf'),
(16, 'ddfsf', 'sdfsdfs', 'sdfsdf'),
(17, 'ddfsf', 'sdfsdfs', 'sdfsdf'),
(18, 'ddfsf', 'sdfsdfs', 'sdfsdf'),
(19, 'ddfsf', 'sdfsdfs', 'sdfsdf'),
(20, 'Testão', '12233322', 'aeiuhauhe');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `ID` int(11) NOT NULL,
  `Login` varchar(50) NOT NULL,
  `Senha` varchar(200) NOT NULL,
  `Nivel` int(11) NOT NULL,
  `Status` int(11) NOT NULL,
  `Nome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`ID`, `Login`, `Senha`, `Nivel`, `Status`, `Nome`) VALUES
(1, 'admin', '123', 1, 1, 'Branks'),
(2, 'bugs', '321', 2, 1, 'Adriano');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `agenda`
--
ALTER TABLE `agenda`
  ADD PRIMARY KEY (`ID`);

--
-- Índices para tabela `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agenda`
--
ALTER TABLE `agenda`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `usuario`
--
ALTER TABLE `usuario`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
