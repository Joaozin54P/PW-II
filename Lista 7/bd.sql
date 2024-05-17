-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 09-Maio-2023 às 04:20
-- Versão do servidor: 10.4.27-MariaDB
-- versão do PHP: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cargos`
--

CREATE TABLE `cargos` (
  `codigo cargo` varchar(2) NOT NULL,
  `Descricao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `cargos`
--

INSERT INTO `cargos` (`codigo cargo`, `Descricao`) VALUES
('01', 'Consultor de Recursos humanos'),
('02', 'Analista de Recursos Humanos'),
('03', 'Bancário'),
('04', 'Analista de Investimento'),
('05', 'Contador'),
('06', 'Auditor'),
('07', 'Gerente de Negócios'),
('08', 'Gerente de Logística'),
('09', 'Diretor Comercial'),
('10', 'Analista jurídico');

-- --------------------------------------------------------

--
-- Estrutura da tabela `departamento`
--

CREATE TABLE `departamento` (
  `codigo depto` varchar(6) NOT NULL,
  `Descriaçao` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `departamento`
--

INSERT INTO `departamento` (`codigo depto`, `Descriaçao`) VALUES
('733431', 'Departamento de Recursos Humanos'),
('733432', 'Departamento de Contabilidade'),
('733433', 'Departamento de Finanças'),
('733434', 'Departamento de Operações'),
('733435', 'Departamento de Logística'),
('733436', 'Departamento Comercial'),
('733437', 'Departamento de Administração'),
('733438', 'Departamento Marketing'),
('733439', 'Departamento Jurídico'),
('733440', 'Departamento de Produção');

-- --------------------------------------------------------

--
-- Estrutura da tabela `dependentes`
--

CREATE TABLE `dependentes` (
  `Matricula` varchar(4) NOT NULL,
  `Nome Dependente` varchar(20) NOT NULL,
  `Dt nascimento` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `dependentes`
--

INSERT INTO `dependentes` (`Matricula`, `Nome Dependente`, `Dt nascimento`) VALUES
('1006', 'Mãe', '1963-05-06'),
('1008', 'Pai', '1956-05-04'),
('1009', 'Tio', '1963-05-01'),
('1010', 'Tia', '1974-05-16'),
('1012', 'Mãe', '1981-03-10'),
('1001', 'Mãe', '1982-06-23'),
('1002', 'Pai', '1963-05-06'),
('1015', 'Tio', '1982-06-23'),
('1014', 'Vó', '1956-12-10'),
('1003', 'Vô', '1943-03-07');

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
  `Endereco` varchar(50) NOT NULL,
  `Telefone` varchar(8) NOT NULL,
  `Data Admissao` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`Matricula`, `Nome`, `Data_Nasc`, `Nacionalidade`, `Sexo`, `Estado civil`, `RG`, `Cic`, `Endereco`, `Telefone`, `Data Admissao`) VALUES
('1001', 'Giovana Marsigli Rodrigues', '2006-07-23', 'Paulistana', 'FE', 'Soltera', '5555555', '44466655511', 'Av. Águia de Haia,123', '77454458', '2022-06-20'),
('1002', 'Victor Ruan Galvão', '2002-11-01', 'Minas Gerais', 'MA', 'Soltero', '7220743', '75291121637', 'Avenida Magalhães Pinto,1269', '35902213', '2023-05-01'),
('1003', 'Márcio Fábio Ribeiro', '2002-01-24', 'Minas Gerais', 'MA', 'Casado', '5919813', '50358961610', 'Rua do Posto,52', '26680416', '2023-01-17'),
('1004', 'Nina Sophia Corte Real', '1993-02-04', 'Amazonas', 'FE', 'Soltera', '30.600.102-0', '058.577.082-49', 'Rua Getúlio Vargas, 315', '28727340', '2022-12-12'),
('1005', 'Daniela Regina Eliane Drumond', '1983-08-02', 'Carioca', 'FE', 'Soltera', '15.313.735-6', '870.517.467-82', 'Rua Mauricio de Abreu, 21', '26626780', '2023-02-15'),
('1006', 'Leila da Silva Machado', '1977-10-25', 'Mineira', 'FE', 'Soltera', '48.864.281-4', '473.784.537-06', 'Rua Mauricio de Abreu,21', '98296124', '2019-03-05'),
('1007', 'Benício Martin Vinicius da Mota', '1990-05-02', 'Carioca', 'MA', 'CASADO', '16.797.383-6', '656.841.137-02', 'Rua Mauricio de Abreu,826', '28510619', '2023-05-07'),
('1008', 'Diego Felipe Dias', '1988-01-14', 'Acriano', 'MA', 'CASADO', '15.814.521-5', '051.384.662-08', 'Avenida Prefeito Rolando Morei', '29919439', '2023-04-12'),
('1009', 'Iago Otávio Rafael Fogaça', '1996-05-01', 'Acriano', 'MA', 'Soltero', '21.166.581-2', '483.547.192-00', 'Avenida Paraná, 295', '35189125', '2023-02-15'),
('1010', 'Leandro Thomas Geraldo', '1983-08-03', 'Mineiro', 'MA', 'Soltero', '11.321.464-9', '578.251.272-50', 'Avenida Paraná,584', '25149224', '2023-04-12'),
('1011', 'Yago Renato Martins', '1983-09-02', 'Paulistano', 'MA', 'CASADO', '35.810.839-1', '210.059.678-06', 'Rua Benedito Fernandes ,195', '29233878', '2023-05-03'),
('1012', 'Lívia Sebastiana Priscila', '1996-03-20', 'Paulistana', 'FE', 'CASADA', '40.796.408-3', '610.473.868-01', 'Rua Benedito Fernandes,195', '35414065', '2023-05-07'),
('1013', 'Silvana Maitê Marlene Melo', '1990-05-27', 'Paulistana', 'FE', 'Soltera', '44.582.845-6', '104.601.388-20', 'Praça Maria Josefina, 761', '25149243', '2021-12-07'),
('1014', 'Laís Maya Teixeira', '1983-03-02', 'Carioca', 'FE', 'CASADA', '19.091.474-9', '062.161.518-86', 'Rua Angelo Sanches, 442', '37484891', '2023-03-28'),
('1015', 'Nicolas Rafael Peixoto', '1997-07-21', 'Candango', 'MA', 'Viúvo', '33.916.285-5', '130.757.721-00', 'Quadra Quadra K,944', '29196365', '2020-12-07');

-- --------------------------------------------------------

--
-- Estrutura da tabela `lotaçao`
--

CREATE TABLE `lotaçao` (
  `Matricula` varchar(4) NOT NULL,
  `codigo depto` varchar(6) NOT NULL,
  `Dt Incio` datetime NOT NULL,
  `Dt fim` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `lotaçao`
--

INSERT INTO `lotaçao` (`Matricula`, `codigo depto`, `Dt Incio`, `Dt fim`) VALUES
('1001', '733431', '2023-05-09 08:34:11', '2023-05-09 17:34:11'),
('1002', '733432', '2023-05-09 06:36:41', '2023-05-09 20:36:41'),
('1003', '733433', '2023-05-03 13:37:36', '2023-05-03 23:37:36'),
('1004', '733434', '2023-05-02 00:38:36', '2023-05-02 12:38:36'),
('1005', '733435', '2023-05-09 08:30:27', '2023-05-09 21:39:27'),
('1006', '733436', '2023-05-01 21:40:32', '2023-05-02 06:40:32'),
('1007', '733437', '2023-05-04 21:40:59', '2023-05-05 03:40:59'),
('1008', '733438', '2023-04-12 21:42:02', '2023-04-13 01:42:02'),
('1009', '733439', '2023-05-09 03:42:47', '2023-05-09 16:42:47'),
('1010', '733440', '2023-05-07 02:43:25', '2023-05-09 21:43:25'),
('1011', '733441', '2023-05-07 21:44:15', '2023-05-08 03:44:15'),
('1012', '733442', '2023-05-03 21:45:00', '2023-05-04 09:10:28'),
('1013', '733443', '2023-05-07 21:45:57', '2023-05-09 04:45:57'),
('1014', '733444', '2023-05-01 21:46:37', '2023-05-02 03:46:37'),
('1015', '733445', '2023-05-09 02:47:09', '2023-05-09 02:47:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `ocupaçao`
--

CREATE TABLE `ocupaçao` (
  `Matricula` varchar(4) NOT NULL,
  `codigo cargo` varchar(2) NOT NULL,
  `Dt Incio` datetime NOT NULL,
  `Dt fim` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `ocupaçao`
--

INSERT INTO `ocupaçao` (`Matricula`, `codigo cargo`, `Dt Incio`, `Dt fim`) VALUES
('1001', '01', '2023-05-09 08:34:11', '2023-05-09 17:34:04'),
('1002', '01', '2023-05-08 22:10:35', '2023-05-09 03:10:35'),
('1003', '02', '2023-05-03 13:11:17', '2023-05-09 23:59:17'),
('1004', '02', '2023-05-07 22:12:06', '2023-05-08 03:12:06'),
('1005', '02', '2023-05-04 00:13:00', '2023-05-05 10:13:00'),
('1006', '03', '2023-05-06 11:13:49', '2023-05-07 03:13:49'),
('1007', '03', '2023-05-09 00:14:45', '2023-05-09 12:14:45'),
('1008', '04', '2023-05-09 01:15:36', '2023-05-09 11:15:36'),
('1009', '05', '2023-05-02 22:16:29', '2023-05-03 02:16:29'),
('1010', '06', '2023-05-01 04:18:46', '2023-05-02 06:18:46'),
('1011', '06', '2023-05-09 03:19:22', '2023-05-09 03:19:22'),
('1012', '07', '2023-05-09 03:20:26', '2023-05-09 08:20:26'),
('1013', '08', '2023-05-04 22:20:58', '2023-05-06 06:20:58'),
('1014', '09', '2023-05-01 07:21:37', '2023-05-03 07:21:37'),
('1015', '10', '2023-05-01 03:22:01', '2023-05-07 08:22:01');

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
