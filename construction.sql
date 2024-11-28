-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28/11/2024 às 15:18
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
-- Banco de dados: `construction`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `agendamentos`
--

CREATE TABLE `agendamentos` (
  `id` int(11) NOT NULL,
  `apartamento` varchar(50) NOT NULL,
  `data` date NOT NULL,
  `hora` time NOT NULL,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `data_criacao` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `agendamentos`
--

INSERT INTO `agendamentos` (`id`, `apartamento`, `data`, `hora`, `nome`, `email`, `data_criacao`) VALUES
(5, 'apto4', '2024-12-25', '00:00:00', 'aparecida', 'aparecida@gmail.com', '2024-11-21 11:53:34'),
(6, 'apto1', '0000-00-00', '07:57:00', 'aparecida', 'aparecida@gmail.com', '2024-11-21 11:57:40'),
(7, 'apto1', '2024-12-10', '12:00:00', 'APARECIDA DA SILVA FERREIRA', 'aparecida.ferreira@gmail.com', '2024-11-27 23:41:38'),
(8, 'apto3', '2024-11-19', '13:00:00', 'junes4122222', 'junes@gmail.com', '2024-11-27 23:45:24'),
(9, 'apto3', '2024-11-21', '14:00:00', 'RAFAEL', 'rafael@gmail.com', '2024-11-28 00:12:22'),
(10, 'apto2', '2024-11-29', '14:00:00', 'rafael', 'rafael@gmail.com', '2024-11-28 12:13:09');

-- --------------------------------------------------------

--
-- Estrutura para tabela `contatos`
--

CREATE TABLE `contatos` (
  `id` int(11) NOT NULL,
  `nome` varchar(100) NOT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `forma_retorno` enum('ligação-durante-manha','ligação-durante-tarde','ligação-durante-noite','whatsApp','email') NOT NULL,
  `mensagem` text DEFAULT NULL,
  `data_envio` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `contatos`
--

INSERT INTO `contatos` (`id`, `nome`, `telefone`, `forma_retorno`, `mensagem`, `data_envio`) VALUES
(1, 'dddddd', '333333', 'ligação-durante-manha', 'sdsadsadsada', '2024-11-27 14:56:48'),
(2, 'ISADORA', '4567879076', 'ligação-durante-manha', 'NITHEL VAI PASSAR', '2024-11-27 15:03:52');

-- --------------------------------------------------------

--
-- Estrutura para tabela `imoveis`
--

CREATE TABLE `imoveis` (
  `id` int(11) NOT NULL,
  `tipo` enum('apartamento','casa','terreno') DEFAULT NULL,
  `numero_apartamento` int(11) DEFAULT NULL,
  `endereco` varchar(255) DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `quartos` int(11) DEFAULT NULL,
  `banheiros` int(11) DEFAULT NULL,
  `vagas` int(11) DEFAULT NULL,
  `imagem` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `imoveis`
--

INSERT INTO `imoveis` (`id`, `tipo`, `numero_apartamento`, `endereco`, `valor`, `quartos`, `banheiros`, `vagas`, `imagem`) VALUES
(1, 'casa', 0, 'rua pioneiros palotina pr', 4.00, 44, 4, 4, 'uploads/bts.jpg'),
(2, 'casa', 0, '4', 4.00, 4, 4, 4, 'imagem/jin.jpg'),
(3, 'casa', 1220, 'rua avenida brasil', 500.00, 3, 2, 2, 'imagem/download.jfif'),
(4, 'apartamento', 25, 'rua avenida brasil', 500.00, 2, 2, 2, 'imagem/jin.jpg');

-- --------------------------------------------------------

--
-- Estrutura para tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `cpf` varchar(14) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `telefone` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `tipo` int(1) NOT NULL DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Despejando dados para a tabela `usuarios`
--

INSERT INTO `usuarios` (`cpf`, `nome`, `telefone`, `email`, `senha`, `tipo`) VALUES
('', 'rafael', 111111111, 'rafael123@gmail.com', '123', 0),
('08829593958', 'leonardo', 2147483647, 'leonardo@gmail.com', '123', 0),
('222.222.222-22', 'aparecida', 2147483647, 'aparecida@gmail.com', '123', 1),
('22222222222222', 'rosa', 2147483647, 'rosa@gmail.com', '123', 0),
('333.333.333-33', 'Rafael', 2147483647, 'rafael@gmail.com', '$2y$10$MiCUF.IiS2LSq65teOed6euKofKf4kZZxwCN41oxC06IVyW/EBdF.', 1);

--
-- Índices para tabelas despejadas
--

--
-- Índices de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `contatos`
--
ALTER TABLE `contatos`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `imoveis`
--
ALTER TABLE `imoveis`
  ADD PRIMARY KEY (`id`);

--
-- Índices de tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`cpf`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT para tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `agendamentos`
--
ALTER TABLE `agendamentos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de tabela `contatos`
--
ALTER TABLE `contatos`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `imoveis`
--
ALTER TABLE `imoveis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
