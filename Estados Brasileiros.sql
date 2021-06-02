-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Tempo de geração: 02-Jun-2021 às 14:26
-- Versão do servidor: 5.7.24
-- versão do PHP: 7.4.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `municipios`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `estado`
--

CREATE TABLE `estado` (
  `id` int(11) NOT NULL,
  `nome` varchar(75) DEFAULT NULL,
  `uf` varchar(2) DEFAULT NULL,
  `ddd` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='Unidades Federativas';

--
-- Extraindo dados da tabela `estado`
--

INSERT INTO `estado` (`id`, `nome`, `uf`, `ddd`) VALUES
(1, 'Acre', 'AC', '68'),
(2, 'Alagoas', 'AL', '82'),
(3, 'Amazonas', 'AM', '97,92'),
(4, 'Amapá', 'AP', '96'),
(5, 'Bahia', 'BA', '77,75,73,74,71'),
(6, 'Ceará', 'CE', '88,85'),
(7, 'Distrito Federal', 'DF', '61'),
(8, 'Espírito Santo', 'ES', '28,27'),
(9, 'Goiás', 'GO', '62,64,61'),
(10, 'Maranhão', 'MA', '99,98'),
(11, 'Minas Gerais', 'MG', '34,37,31,33,35,38,32'),
(12, 'Mato Grosso do Sul', 'MS', '67'),
(13, 'Mato Grosso', 'MT', '65,66'),
(14, 'Pará', 'PA', '91,94,93'),
(15, 'Paraíba', 'PB', '83'),
(16, 'Pernambuco', 'PE', '81,87'),
(17, 'Piauí', 'PI', '89,86'),
(18, 'Paraná', 'PR', '43,41,42,44,45,46'),
(19, 'Rio de Janeiro', 'RJ', '24,22,21'),
(20, 'Rio Grande do Norte', 'RN', '84'),
(21, 'Rondônia', 'RO', '69'),
(22, 'Roraima', 'RR', '95'),
(23, 'Rio Grande do Sul', 'RS', '53,54,55,51'),
(24, 'Santa Catarina', 'SC', '47,48,49'),
(25, 'Sergipe', 'SE', '79'),
(26, 'São Paulo', 'SP', '11,12,13,14,15,16,17,18,19'),
(27, 'Tocantins', 'TO', '63'),
(99, 'Exterior', 'EX', NULL);

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `estado`
--
ALTER TABLE `estado`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
