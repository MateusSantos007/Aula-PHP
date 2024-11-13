-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 06/11/2024 às 00:51
-- Versão do servidor: 10.4.32-MariaDB
-- Versão do PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `sistema_sam`
--
CREATE DATABASE IF NOT EXISTS `sistema_sam` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `sistema_sam`;

-- --------------------------------------------------------

--
-- Estrutura para tabela `administracao`
--

CREATE TABLE `administracao` (
  `id` int(11) NOT NULL,
  `paciente` varchar(50) NOT NULL,
  `medicamento` varchar(50) NOT NULL,
  `enfermeiro` varchar(50) NOT NULL,
  `data_adm` date NOT NULL,
  `hora_adm` time NOT NULL,
  `dose` varchar(50) NOT NULL,
  `data_reg` date NOT NULL,
  `hora_reg` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `administracao`
--

INSERT INTO `administracao` (`id`, `paciente`, `medicamento`, `enfermeiro`, `data_adm`, `hora_adm`, `dose`, `data_reg`, `hora_reg`) VALUES
(5, 'paciente', 'medicamento', 'enfermeiro', '2024-11-05', '19:18:00', 'dose 1', '2024-11-05', '23:26:42'),
(6, 'paciente 1', 'medicamento', 'enfermeiro', '2024-11-05', '19:26:00', 'dose 3', '2024-11-05', '23:40:07'),
(7, 'paciente', 'medicamento', 'enfermeiro', '2024-11-05', '19:19:00', 'dose 2', '2024-11-05', '23:40:12'),
(8, 'enfermeiro', 'medicamento', 'medico', '2024-11-05', '19:41:00', 'dose 3', '2024-11-05', '23:42:20'),
(9, 'paciente 2', 'medicamento', 'medico', '2024-11-05', '19:57:00', 'dose 3', '2024-11-05', '19:57:38'),
(10, 'Elias', 'medicamento', 'medico', '0000-00-00', '00:00:00', 'dose 3', '2024-11-05', '20:16:37'),
(11, 'paciente 2', 'medicamento', 'medico', '0000-00-00', '00:00:00', 'dose 3', '2024-11-05', '20:17:43'),
(12, 'Elias', 'medicamento', 'medico', '0000-00-00', '00:00:00', 'dose 3', '2024-11-05', '20:27:21'),
(13, 'Elias', 'medicamento', 'medico', '2024-11-05', '19:27:00', 'dose 2', '2024-11-05', '20:28:29'),
(14, 'Elias', 'medicamento', 'medico', '2024-11-05', '19:27:00', 'dose 2', '2024-11-05', '20:28:46'),
(15, 'Elias', 'erro', 'medico', '2024-11-13', '02:36:00', 'dose 2', '2024-11-05', '20:30:53');

-- --------------------------------------------------------

--
-- Estrutura para tabela `enfermeiros`
--

CREATE TABLE `enfermeiros` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `COREN` varchar(50) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `enfermeiros`
--

INSERT INTO `enfermeiros` (`id`, `nome`, `COREN`, `usuario`, `senha`) VALUES
(2, 'enfermeiro', 'coren', 'usuario2', '123'),
(3, 'medico', 'coren', 'usuario3', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `medicos`
--

CREATE TABLE `medicos` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `especialidade` varchar(50) NOT NULL,
  `CRM` int(11) NOT NULL,
  `usuario` varchar(50) NOT NULL,
  `senha` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `medicos`
--

INSERT INTO `medicos` (`id`, `nome`, `especialidade`, `CRM`, `usuario`, `senha`) VALUES
(2, 'medico', 'especialidade', 123, 'usuario', '123'),
(3, 'medico2', 'especialidade', 222, 'usuario1', '123');

-- --------------------------------------------------------

--
-- Estrutura para tabela `pacientes`
--

CREATE TABLE `pacientes` (
  `id` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `leito` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `pacientes`
--

INSERT INTO `pacientes` (`id`, `nome`, `leito`) VALUES
(6, 'paciente 1', 'leito 1'),
(7, 'paciente 2', 'leito 2'),
(8, 'enfermeiro', 'leito 2'),
(9, 'Elias', 'leito 55');

-- --------------------------------------------------------

--
-- Estrutura para tabela `receitas`
--

CREATE TABLE `receitas` (
  `id` int(11) NOT NULL,
  `paciente` varchar(50) NOT NULL,
  `medicamento` varchar(50) NOT NULL,
  `medico` varchar(50) NOT NULL,
  `data_adm` date NOT NULL,
  `hora_adm` time NOT NULL,
  `dose` varchar(50) NOT NULL,
  `status` enum('A','I') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Despejando dados para a tabela `receitas`
--

INSERT INTO `receitas` (`id`, `paciente`, `medicamento`, `medico`, `data_adm`, `hora_adm`, `dose`, `status`) VALUES
(7, 'paciente', 'medicamento', 'medico', '2024-11-05', '19:18:00', 'dose 1', 'I'),
(8, 'paciente', 'medicamento', 'medico', '2024-11-05', '19:19:00', 'dose 2', 'I'),
(9, 'paciente 1', 'medicamento', 'medico', '2024-11-05', '19:26:00', 'dose 3', 'I'),
(10, 'enfermeiro', 'medicamento', 'medico', '2024-11-05', '19:41:00', 'dose 3', 'I'),
(11, 'paciente 2', 'medicamento', 'medico2', '2024-11-05', '19:57:00', 'dose 3', 'I'),
(12, 'paciente 2', 'medicamento', 'medico', '2024-11-05', '20:01:00', 'dose 3', 'I'),
(13, 'Elias', 'medicamento', 'medico', '2024-11-05', '20:09:00', 'dose 3', 'I'),
(14, 'Elias', 'medicamento', 'medico', '2024-11-05', '20:27:00', 'dose 3', 'I'),
(15, 'Elias', 'medicamento', 'medico', '2024-11-05', '20:27:00', 'dose 2', 'I'),
(16, 'Elias', 'erro', 'medico', '2024-11-05', '20:30:00', 'dose 2', 'I');

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `administracao`
--
ALTER TABLE `administracao`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `enfermeiros`
--
ALTER TABLE `enfermeiros`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `medicos`
--
ALTER TABLE `medicos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `administracao`
--
ALTER TABLE `administracao`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT de tabela `enfermeiros`
--
ALTER TABLE `enfermeiros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
