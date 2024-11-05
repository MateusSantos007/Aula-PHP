-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 05/11/2024 às 20:34
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
(2, 'test22', 'medicamento', 'Real Madrid', '2024-11-05', '15:02:00', 'dose', '2024-11-05', '19:02:27'),
(3, 't53', 'medicamento', 'Real Madrid', '2024-11-05', '16:32:00', 'dose', '2024-11-05', '20:32:24'),
(4, 'ultimate', 'medicamento', 'Real Madrid', '2024-11-06', '16:24:00', 'dose', '2024-11-05', '20:32:26');

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
(1, 'Real Madrid', 'COREN', 'usuario', '123');

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
(1, 'nome', 'especialidade', 123, 'usuario', '123');

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
(1, 'nome', 'leito'),
(2, 'test b', 'leito'),
(3, 'test22', 'leito'),
(4, 't53', 'leito 45'),
(5, 'ultimate', 'leito');

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
(3, 'test22', 'medicamento', 'nome', '2024-11-05', '15:02:00', 'dose', 'A'),
(4, 'ultimate', 'medicamento', 'nome', '2024-11-05', '16:20:00', 'dose', 'A'),
(5, 'ultimate', 'medicamento', 'nome', '2024-11-06', '16:24:00', 'dose', 'I'),
(6, 't53', 'medicamento', 'nome', '2024-11-05', '16:32:00', 'dose', 'A');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `enfermeiros`
--
ALTER TABLE `enfermeiros`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `medicos`
--
ALTER TABLE `medicos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
