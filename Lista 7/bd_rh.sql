-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 08-Maio-2023 às 21:31
-- Versão do servidor: 10.4.22-MariaDB
-- versão do PHP: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_rh`
--
-- --------------------------------------------------------
--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `codigo cargo` char(2) NOT NULL,
  `Descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `codigo depto` varchar(6) NOT NULL,
  `Descriaçao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `dependentes`
--

CREATE TABLE `dependentes` (
  `Matricula` varchar(4) NOT NULL,
  `Nome Dependente` varchar(20) NOT NULL,
  `Dt nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `Matricula` varchar(4) NOT NULL,
  `Nome` varchar(50) NOT NULL,
  `Data_Nasc` date NOT NULL,
  `Nacionalidade` varchar(25) NOT NULL,
  `Sexo` char(2) NOT NULL,
  `Estado civil` varchar(25) NOT NULL,
  `RG` varchar(12) NOT NULL,
  `Cic` varchar(14) NOT NULL,
  `Endereco` varchar(30) NOT NULL,
  `Telefone` varchar(8) NOT NULL,
  `Data Admissao` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`Matricula`, `Nome`, `Data_Nasc`, `Nacionalidade`, `Sexo`, `Estado civil`, `RG`, `Cic`, `Endereco`, `Telefone`, `Data Admissao`) VALUES
('1001', 'Giovana Marsigli Rodrigues', '2006-07-23', 'Paulistana', 'FE', 'Soltera', '5555555', '44466655511', 'Av. Águia de Haia,123', '77454458', '2022-06-20'),
('1002', 'Victor Ruan Galvão', '2002-11-01', 'Minas Gerais', 'MA', 'Soltero', '7220743', '75291121637', 'Avenida Magalhães Pinto,1269', '35902213', '2023-05-01'),
('1003', 'Márcio Fábio Ribeiro', '2002-01-24', 'Minas Gerais', 'MA', 'Casado', '5919813', '50358961610', 'Rua do Posto,52', '26680416', '2023-01-17'),
('1004', 'Nina Sophia Corte Real', '1993-02-04', 'Amazonas', 'FE', 'Soltera', '30.600.102-0', '058.577.082-49', 'Rua Getúlio Vargas, 315', '28727340', '2022-12-12');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lotaçao`
--

CREATE TABLE `lotaçao` (
  `Matricula` varchar(4) NOT NULL,
  `codigo depto` varchar(6) NOT NULL,
  `Dt Incio` datetime NOT NULL,
  `Dt fim` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocupaçao`
--

CREATE TABLE `ocupaçao` (
  `Matricula` varchar(4) NOT NULL,
  `codigo cargo` char(2) NOT NULL,
  `Dt Incio` datetime NOT NULL,
  `Dt fim` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cargos`
--
ALTER TABLE `cargos`
  ADD PRIMARY KEY (`codigo cargo`);

--
-- Índices para tabela `departamento`
--
ALTER TABLE `departamento`
  ADD PRIMARY KEY (`codigo depto`);

--
-- Índices para tabela `funcionario`
--
ALTER TABLE `funcionario`
  ADD PRIMARY KEY (`Matricula`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
