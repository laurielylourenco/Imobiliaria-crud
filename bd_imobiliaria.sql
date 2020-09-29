-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 29/09/2020 às 19:23
-- Versão do servidor: 5.7.31-0ubuntu0.18.04.1
-- Versão do PHP: 7.2.24-0ubuntu0.18.04.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bd_imobiliaria`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `bd_imobiliaria`
--

CREATE TABLE `bd_imobiliaria` (
  `id` int(11) NOT NULL,
  `codigo_imovel` int(11) NOT NULL,
  `tipo` varchar(20) NOT NULL,
  `situcao_atual` varchar(40) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
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
-- Despejando dados para a tabela `bd_imobiliaria`
--

INSERT INTO `bd_imobiliaria` (`id`, `codigo_imovel`, `tipo`, `situcao_atual`, `bairro`, `cidade`, `nome_local`, `numero_local`, `numero_quarto`, `numero_banheiro`, `garagem`, `valor_imovel`) VALUES
(16, 5656, 'Cobertura', 'Alugado', 'Programador Cansado', 'juiz de fora', 'Rua Neil', 1, 4, 4, 4, 'Ate 60.000'),
(17, 1313, 'Apartamento', 'Vazio', 'Deuses Americanos', 'Santos dumot', 'Rua Zeus', 4000, 5, 12, 5, '80.000 ate 100.000'),
(18, 24, 'Casa', 'Vazio', 'All stars', 'Santos dumot', 'Rua de devs', 125, 4, 2, 1, '60.000 ate 80.000');

-- --------------------------------------------------------

--
-- Estrutura para tabela `cliente`
--

CREATE TABLE `cliente` (
  `id` int(11) NOT NULL,
  `nome` varchar(256) NOT NULL,
  `cpf` bigint(14) NOT NULL,
  `rua` varchar(40) NOT NULL,
  `num` int(14) NOT NULL,
  `cel` bigint(18) NOT NULL,
  `data_cliente` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `cliente`
--

INSERT INTO `cliente` (`id`, `nome`, `cpf`, `rua`, `num`, `cel`, `data_cliente`) VALUES
(15, 'Filip Valcanaia Pederneiras', 124555667, 'Rua dos Devs', 9, 23456789, '2020-09-29'),
(17, 'Kenzo Curvelo ', 56456567, 'Rua dos Corvos', 11, 32996734, '2020-09-29'),
(18, 'Denis Fialho ', 7658499333, 'Rua dos Campos', 35, 23887645, '2020-09-30');

-- --------------------------------------------------------

--
-- Estrutura para tabela `corretor`
--

CREATE TABLE `corretor` (
  `id` int(11) NOT NULL,
  `cresci` varchar(256) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `email` varchar(256) NOT NULL,
  `tel` bigint(18) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `corretor`
--

INSERT INTO `corretor` (`id`, `cresci`, `nome`, `email`, `tel`) VALUES
(15, '535GRT', 'Oriana Lousada Amarante', 'Amarante@yahoo.com', 64750302),
(14, '7070KO', 'Naruto usumaki', 'naruto@yahoo.com', 70707070),
(13, '643MG', 'Rodolfo Mainha Cangueiro', 'Cangueiro@gmail.com', 12444567),
(16, '3546WWE', 'Eliseu Franco Veiga', 'francoeliseu123@gmail.com', 3969877302);

-- --------------------------------------------------------

--
-- Estrutura para tabela `funcionario`
--

CREATE TABLE `funcionario` (
  `numero` int(11) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Despejando dados para a tabela `funcionario`
--

INSERT INTO `funcionario` (`numero`, `password`) VALUES
(1, 'adcd7048512e64b48da55b027577886ee5a36350'),
(123, '06e0d8589055ed6fd094bb0d2e33ef2652a3c9f2');

--
-- Índices de tabelas apagadas
--

--
-- Índices de tabela `bd_imobiliaria`
--
ALTER TABLE `bd_imobiliaria`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `cliente`
--
ALTER TABLE `cliente`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cpf` (`cpf`);

--
-- Índices de tabela `corretor`
--
ALTER TABLE `corretor`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `cresci` (`cresci`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT de tabelas apagadas
--

--
-- AUTO_INCREMENT de tabela `bd_imobiliaria`
--
ALTER TABLE `bd_imobiliaria`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT de tabela `cliente`
--
ALTER TABLE `cliente`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT de tabela `corretor`
--
ALTER TABLE `corretor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
