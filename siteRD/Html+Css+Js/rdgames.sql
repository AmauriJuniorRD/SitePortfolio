-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 18-Jun-2021 às 14:36
-- Versão do servidor: 10.4.17-MariaDB
-- versão do PHP: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `rdgames`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `amigosgame`
--

CREATE TABLE `amigosgame` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `nick` varchar(30) DEFAULT NULL,
  `game` varchar(40) DEFAULT NULL,
  `plataforma` varchar(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `amigosgame`
--

INSERT INTO `amigosgame` (`id_usuario`, `nome`, `nick`, `game`, `plataforma`) VALUES
(1, 'naruto', 'rasengan', 'bomba patch', 'ps2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `compartilha`
--

CREATE TABLE `compartilha` (
  `id_usuario` int(11) NOT NULL,
  `equipe` varchar(30) DEFAULT NULL,
  `data_lanc` varchar(30) DEFAULT NULL,
  `link` varchar(400) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `compartilha`
--

INSERT INTO `compartilha` (`id_usuario`, `equipe`, `data_lanc`, `link`) VALUES
(6, 'Sega', '23 de junho de 1991', 'https://www.sega.com/games/sonic-hedgehog');

-- --------------------------------------------------------

--
-- Estrutura da tabela `game`
--

CREATE TABLE `game` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `idade` varchar(10) DEFAULT NULL,
  `jogosrd` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `game`
--

INSERT INTO `game` (`id_usuario`, `nome`, `idade`, `jogosrd`) VALUES
(16, 'irineu', '21', 'tijolinho_update'),
(17, 'goku', '8000', 'mais de 8000');

-- --------------------------------------------------------

--
-- Estrutura da tabela `orcamento`
--

CREATE TABLE `orcamento` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `orcamento`
--

INSERT INTO `orcamento` (`id_usuario`, `nome`, `telefone`, `email`, `descricao`) VALUES
(6, 'Iron Man', '100000', 'bilionario@gmail.com', 'Queria um game sobre mim já que sou o melhor vingador'),
(7, 'Vegeta', '8000', 'vegeta@gmail.com', 'Quero um game sobre mim pq sou melhor que o goku');

-- --------------------------------------------------------

--
-- Estrutura da tabela `parceria`
--

CREATE TABLE `parceria` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `pedido` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `parceria`
--

INSERT INTO `parceria` (`id_usuario`, `nome`, `telefone`, `email`, `pedido`) VALUES
(3, 'Unity', '808080', 'unity@gamil.com', 'Nossa logomarca no game');

-- --------------------------------------------------------

--
-- Estrutura da tabela `recrutamento`
--

CREATE TABLE `recrutamento` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `vagas` varchar(60) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `recrutamento`
--

INSERT INTO `recrutamento` (`id_usuario`, `nome`, `email`, `vagas`, `descricao`) VALUES
(1, 'tsubasa', 'tsubasa@gmail.com', 'Programador', 'Estou fazendo um jogo de futebol que vai superar o bomba patch');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `senha` varchar(32) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nome`, `telefone`, `email`, `senha`) VALUES
(4, 'irineu', '707070', 'irineu@gmail.com', '202cb962ac59075b964b07152d234b70'),
(5, 'vegeta', '8000', 'vegeta@gmail.com', '698d51a19d8a121ce581499d7b701668'),
(9, 'freffrwe', 'frefer', 'frefre@gmail.com', '11c319ac4dba0c288a0bd5a599499131');

-- --------------------------------------------------------

--
-- Estrutura da tabela `venda`
--

CREATE TABLE `venda` (
  `id_usuario` int(11) NOT NULL,
  `nome` varchar(30) DEFAULT NULL,
  `telefone` varchar(30) DEFAULT NULL,
  `email` varchar(40) DEFAULT NULL,
  `descricao` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Extraindo dados da tabela `venda`
--

INSERT INTO `venda` (`id_usuario`, `nome`, `telefone`, `email`, `descricao`) VALUES
(5, 'Naruto Uzumaki', '101010', 'sasuke@gmail.com', 'tenho um game meu correndo atras do sasuke, e gostaria de vendelo para vcs, pois não tenho como lançar'),
(6, 'Goku', '777', 'goku@gmail.com', 'fiz um game sobre dragon ball mais não tenho como lançar por isso quero fazer essa venda, o game esta prnto');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `amigosgame`
--
ALTER TABLE `amigosgame`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `compartilha`
--
ALTER TABLE `compartilha`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `game`
--
ALTER TABLE `game`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `orcamento`
--
ALTER TABLE `orcamento`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `parceria`
--
ALTER TABLE `parceria`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `recrutamento`
--
ALTER TABLE `recrutamento`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `venda`
--
ALTER TABLE `venda`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `amigosgame`
--
ALTER TABLE `amigosgame`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `compartilha`
--
ALTER TABLE `compartilha`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de tabela `game`
--
ALTER TABLE `game`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT de tabela `orcamento`
--
ALTER TABLE `orcamento`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT de tabela `parceria`
--
ALTER TABLE `parceria`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `recrutamento`
--
ALTER TABLE `recrutamento`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `venda`
--
ALTER TABLE `venda`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
