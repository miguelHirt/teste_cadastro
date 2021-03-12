-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 12-Mar-2021 às 14:56
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 7.4.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `teste`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `cadastro`
--

CREATE TABLE `cadastro` (
  `id` int(3) NOT NULL,
  `nome` varchar(25) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `fone` varchar(15) DEFAULT NULL,
  `estado` varchar(15) DEFAULT NULL,
  `cep` varchar(10) DEFAULT NULL,
  `estado2` varchar(10) DEFAULT NULL,
  `municipio` varchar(15) DEFAULT NULL,
  `bairro` varchar(20) DEFAULT NULL,
  `rua` varchar(20) DEFAULT NULL,
  `numero` varchar(8) NOT NULL,
  `complemento` varchar(100) DEFAULT NULL,
  `observacao` varchar(255) DEFAULT NULL,
  `cpf` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `cadastro`
--

INSERT INTO `cadastro` (`id`, `nome`, `email`, `fone`, `estado`, `cep`, `estado2`, `municipio`, `bairro`, `rua`, `numero`, `complemento`, `observacao`, `cpf`) VALUES
(23, 'Miguel Angelo da Silva Hi', 'myguy.myguy83@gmail.', '+5549988619333', 'SC', '89709-154', 'SC', 'Concordia', 'Guilherme Reich', 'Rua Guerino Ugolini', '49', 'Cassa marrom portão branco', 'teste', '1');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `cadastro`
--
ALTER TABLE `cadastro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `cadastro`
--
ALTER TABLE `cadastro`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
