-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3307
-- Generation Time: 29-Out-2019 às 09:54
-- Versão do servidor: 5.7.25
-- versão do PHP: 7.1.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bd_imobiliaria`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `bd_imobiliaria`
--

CREATE TABLE `bd_imobiliaria` (
  `codigo_imovel` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `situcao_atual` varchar(40) NOT NULL,
  `bairro` varchar(20) NOT NULL,
  `cidade` varchar(30) NOT NULL,
  `nome_local` varchar(30) NOT NULL,
  `numero_local` int(11) NOT NULL,
  `numero_quarto` int(11) NOT NULL,
  `numero_banheiro` int(11) NOT NULL,
  `garagem` int(11) NOT NULL,
  `valor_imovel` varchar(40) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `bd_imobiliaria`
--

INSERT INTO `bd_imobiliaria` (`codigo_imovel`, `tipo`, `situcao_atual`, `bairro`, `cidade`, `nome_local`, `numero_local`, `numero_quarto`, `numero_banheiro`, `garagem`, `valor_imovel`) VALUES
(763, 'Casa', 'Alugado', 'Cidade do Sol', 'Juiz de Fora', 'Rua Rosario Fusco', 429, 5, 1, 1, 'Ate 60.000'),
(621, 'Cobertura', 'Vazio', 'areofo', 'Juiz de Fora', 'Rua Adam Smith', 78, 12, 2, 2, '80.000 ate 100.000'),
(112, 'Cobertura', 'Vazio', 'Santa Cruz', 'Juiz de Fora', 'Rua Juscelino Kuschet', 43, 5, 1, 1, '60.000 ate 80.000'),
(561, 'Casa', 'Vazio', 'Vila Olavo Costa', 'Juiz de Fora', 'Rua J', 171, 6, 1, 1, 'Ate 60.000'),
(274, 'Apartamento', 'Vazio', 'Santa Cruz', 'Juiz de Fora', 'Rua Lindolfo Goncalves Coelho', 578, 5, 2, 1, '60.000 ate 80.000'),
(201, 'Apartamento', 'Alugado', 'Manoel Honorio', 'Juiz de Fora', 'Rua Afonso Pena', 129, 4, 1, 1, '60.000 ate 80.000'),
(783, 'Apartamento', 'Alugado', 'Cruzeiro do Sul', 'Juiz de Fora', 'Travessa Maria da Conceicao', 107, 5, 2, 1, '80.000 ate 100.000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `cliente`
--

CREATE TABLE `cliente` (
  `nome` varchar(256) NOT NULL,
  `cpf` bigint(14) NOT NULL,
  `logra` varchar(40) NOT NULL,
  `nume_local` int(14) NOT NULL,
  `celular` bigint(18) NOT NULL,
  `estado` varchar(10) NOT NULL,
  `data` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cliente`
--

INSERT INTO `cliente` (`nome`, `cpf`, `logra`, `nume_local`, `celular`, `estado`, `data`) VALUES
('Edson Enrico Felipe Corte Rea', 886265630, 'Rua Alexandre Joaquim de Siqueira', 949, 32982583229, 'Desativado', 30102019),
('Emanuelly Lorena Martins', 40064506649, 'Rua Vereador Ignacio Halfeld', 783, 32995067988, 'Ativo', 29102019),
('Rodrigo Eduardo Guilherme Campos', 50401751678, 'Rua Halfeld', 500, 32987349428, 'Ativo', 10102019),
('Isabel Mariah da Cunha', 57528485632, 'Rua Afonso Pinto da Mota', 721, 32992711942, 'Ativo', 29102019),
('Bryan Arthur Diogo Campo', 64281915630, 'Rua Ipanema', 507, 32991371588, 'Desativado', 29102019),
('Lara Rebeca Barros', 75631926628, 'Rua Lindolfo Lage', 41, 32984784125, 'Desativado', 30102019),
('Sonia Isabelle Gomes', 96835951621, 'Rua Fernando Lobo', 537, 32991914716, 'Desativado', 29102019);

-- --------------------------------------------------------

--
-- Estrutura da tabela `corretor`
--

CREATE TABLE `corretor` (
  `cresci` varchar(256) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `tel_corretor` bigint(18) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `corretor`
--

INSERT INTO `corretor` (`cresci`, `nome`, `email`, `tel_corretor`) VALUES
('667MG', 'Marcela Stella Carvalho', 'marcela@gmail.com', 32946346),
('MG3021', 'Anthony Daniel Nunes', 'daniel_nunes@hotmail.com', 32991033655),
('45643MG', 'Rafaela Andrea Rezende', 'rezendear@yahoo.com', 32992126248);

-- --------------------------------------------------------

--
-- Estrutura da tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `numero` int(11) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `funcionario`
--

INSERT INTO `funcionario` (`numero`, `password`) VALUES
(1, 'adcd7048512e64b48da55b027577886ee5a36350');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bd_imobiliaria`
--
ALTER TABLE `bd_imobiliaria`
  ADD PRIMARY KEY (`codigo_imovel`);

--
-- Indexes for table `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`cpf`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
