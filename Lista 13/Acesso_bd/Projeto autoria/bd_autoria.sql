-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 20-Nov-2023 às 22:14
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
-- Banco de dados: `bd_autoria`
--
create database `bd_autoria`;
use `bd_autoria`;
-- --------------------------------------------------------

--
-- Estrutura da tabela `autor`
--

CREATE TABLE `autor` (
  `cod_autor` int(11) NOT NULL,
  `nomeautor` varchar(20) NOT NULL,
  `sobrenome` varchar(35) NOT NULL,
  `email` varchar(55) NOT NULL,
  `nasc` date NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autor`
--

INSERT INTO `autor` (`cod_autor`, `nomeautor`, `sobrenome`, `email`, `nasc`) VALUES
(1, 'Juliana Marina', ' Sandra Moraes', 'juliana_moraes@gameecia.com.br', '1990-05-02'),
(2, 'Pedro Henrique', 'Rafael', 'pedro_moraes@gameecia.com.br', '1990-05-02'),
(3, 'Eliane Elza', ' Sabrina Figueiredo', 'eliane_elza_figueiredo@dpi.indl.com.br', '1995-05-24'),
(4, 'Nelson', ' Luiz Dias', 'nelson_dias@grupoaguaviva.com.br', '1984-05-10'),
(5, 'Marcos ', 'Joaquim Pires', 'marcos_pires@sodexo.com', '1997-04-17'),
(6, 'Guilherme', ' Anthony Rezende', 'guilherme@clinicafacil.com.br', '1975-05-15'),
(7, 'Breno Lucca ', 'Luan Bernardes', 'breno_bernardes@vipsaude.com.br', '1989-05-23'),
(8, 'Iago Sebastião', ' Kauê Moreira', 'iago_sebastiao@freitasprior.com.br', '1988-03-08'),
(9, 'Helena Magalhoes', 'Santos', 'helena22@gmail.com', '1996-10-02');

-- --------------------------------------------------------

--
-- Estrutura da tabela `autoria`
--

CREATE TABLE `autoria` (
  `cod_autor` int(11) NOT NULL,
  `cod_livro` int(11) NOT NULL,
  `datalancamento` date NOT NULL,
  `editora` varchar(35) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `autoria`
--

INSERT INTO `autoria` (`cod_autor`, `cod_livro`, `datalancamento`, `editora`) VALUES
(1, 1011, '1999-05-12', 'lavra editora'),
(2, 1212, '2003-05-21', 'lavra editora'),
(3, 1102, '2014-05-14', 'C5 livros'),
(4, 1173, '2016-05-12', 'C5 livros'),
(5, 1223, '2021-05-12', 'moderna'),
(6, 5445, '2018-05-18', 'moderna'),
(7, 1195, '2022-05-26', 'CV');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livro`
--

CREATE TABLE `livro` (
  `cod_livro` int(11) NOT NULL,
  `titulo` varchar(30) NOT NULL,
  `categoria` varchar(25) NOT NULL,
  `ibsn` varchar(17) NOT NULL,
  `idioma` varchar(30) NOT NULL,
  `qtdepag` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `livro`
--

INSERT INTO `livro` (`cod_livro`, `titulo`, `categoria`, `ibsn`, `idioma`, `qtdepag`) VALUES
(1, 'Diario De um Banana', 'humor', '1021545', 'Portugues', 271),
(2, 'A Culpa Das Estrelas', 'romantico', '56454654', 'Portugues', 361),
(3, 'After', 'Drama', '1554511', 'Ingles', 220),
(4, 'After-Depois da Verdade', 'Drama', '56454612', 'Ingles', 287),
(5, 'Pequeno Principe', 'Infantil', '213123', 'Coreano', 150),
(6, 'Assim Que Acaba', 'Romance', '56458448', 'Ingles', 368),
(7, 'A rainha Vermelha', 'Ficcao juvenil', '56454888', 'Chines', 487);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario`
--

CREATE TABLE `usuario` (
  `Login` varchar(15) NOT NULL,
  `Senha` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario`
--

INSERT INTO `usuario` (`Login`, `Senha`) VALUES
('JP', 2016);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `autor`
--
ALTER TABLE `autor`
  ADD PRIMARY KEY (`cod_autor`);

--
-- Índices para tabela `livro`
--
ALTER TABLE `livro`
  ADD PRIMARY KEY (`cod_livro`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `autor`
--
ALTER TABLE `autor`
  MODIFY `cod_autor` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `livro`
--
ALTER TABLE `livro`
  MODIFY `cod_livro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5447;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
