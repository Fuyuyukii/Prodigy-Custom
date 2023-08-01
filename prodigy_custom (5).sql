-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 28-Jun-2023 às 14:02
-- Versão do servidor: 10.4.28-MariaDB
-- versão do PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `prodigy_custom`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `carro`
--

CREATE TABLE `carro` (
  `id_carro` int(11) NOT NULL,
  `nome` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carro`
--

INSERT INTO `carro` (`id_carro`, `nome`) VALUES
(1, 'peugeot'),
(2, 'saveiro');

-- --------------------------------------------------------

--
-- Estrutura da tabela `carro_produto`
--

CREATE TABLE `carro_produto` (
  `carro_id` int(11) NOT NULL,
  `produto_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `carro_produto`
--

INSERT INTO `carro_produto` (`carro_id`, `produto_id`) VALUES
(1, 31),
(1, 32),
(2, 33),
(2, 35);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

CREATE TABLE `categorias` (
  `categoria_id` int(11) NOT NULL,
  `categoria_nome` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

CREATE TABLE `produtos` (
  `id_produto` int(11) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `preco` decimal(10,0) NOT NULL,
  `descricao` text NOT NULL,
  `info_tecnica` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `preco`, `descricao`, `info_tecnica`) VALUES
(31, 'Ponteira Dupla Escapamento em Inox Bärenwald Mitte “Burned Tip” ', 500, 'ponteira dupla em inox', 'Inox Bärenwald Mitte “Burned Tip”'),
(32, 'Abafador Redondo Esportivo Universal Ths Inox 2.5 Polegadas', 639, 'feito em inox', 'inox\r\n2.5 polegadas'),
(33, '4 Rodas Orbital - Volcano - Aro 18 4x100 Prata', 3309, 'cor prata', 'conjunto de 4 rodas\r\nprata\r\naro 18 4x100'),
(35, 'Kit Embreagem Gol G4 1.0 8v', 392, 'kit de embreagem para gol g4 2006/2007/2008 luk', 'conjunto de peças composto por platô, disco e rolamento'),
(38, 'Catalisador Gol G3 e G4', 930, 'PRODUZIDO EM AÇO INOX E CERÂMICA INTERNA\r\n\r\nEXCELENTE INSTALAÇÃO E DURABILIDADE', 'CATALISADOR GOL 1.0 8v GIV 2010 2011 2012 2013 2 ENCAIXES SONDA '),
(39, 'Disco De Freio Dianteiro Gol 1.0 1.6 1.8 G2 G3 G4 Ventilado', 255, 'disco de freio vw gol 1.0 1.6 1.8', '239 mm de diâmetro \r\n20 mm de espessura\r\nfeito de alumínio\r\nsistema de fixação com 4 furos'),
(40, 'Jogo Junta Superior Cabeçote Gol G3 G4 G5 G6 1.0 8v', 104, 'jogo de junta do cabeçote gol g3 g4 g5 g6 Sabó, sem retentores', 'Contém na embalagem\r\n01 - JUNTA CABEÇOTE DE FIBRA\r\n01 - JUNTA TUBO MOTOR SAÍDA DO ESCAPAMENTO\r\n01 - JUNTA COLETOR DE ESCAPAMENTO\r\n01 - KIT DE ANÉIS DO COLETOR ADMISSÃO');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos_imagens`
--

CREATE TABLE `produtos_imagens` (
  `id_img` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `file_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produtos_imagens`
--

INSERT INTO `produtos_imagens` (`id_img`, `id_produto`, `file_path`) VALUES
(7, 31, '../imgs/ponteira.png'),
(8, 32, '../imgs/abafador2.png'),
(9, 33, '../imgs/orbital.png'),
(11, 35, '../imgs/kitembreagemgol.png'),
(14, 38, '../imgs/catalisadorgol.png'),
(15, 39, '../imgs/discofreio.png'),
(16, 40, '../imgs/juntacabecote.png');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_avaliacao`
--

CREATE TABLE `produto_avaliacao` (
  `cpf_usuario` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  `avaliacao` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `produto_avaliacao`
--

INSERT INTO `produto_avaliacao` (`cpf_usuario`, `id_produto`, `avaliacao`) VALUES
(23434, 31, 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produto_categoria`
--

CREATE TABLE `produto_categoria` (
  `produto_id` int(11) NOT NULL,
  `categoria_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `user_cpf` varchar(250) NOT NULL,
  `adm` int(1) DEFAULT NULL,
  `nome` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `CEP` varchar(255) DEFAULT NULL,
  `Senha` varchar(20) NOT NULL,
  `Telefone` int(11) NOT NULL,
  `user_photo_path` int(11) DEFAULT NULL,
  `Rua` varchar(255) DEFAULT NULL,
  `Numero` int(11) DEFAULT NULL,
  `Bairro` varchar(255) DEFAULT NULL,
  `Cidade` varchar(255) DEFAULT NULL,
  `Estado` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `user_cpf`, `adm`, `nome`, `Email`, `CEP`, `Senha`, `Telefone`, `user_photo_path`, `Rua`, `Numero`, `Bairro`, `Cidade`, `Estado`) VALUES
(5, '123', 1, 'Lila', 'lilinha@gmail.com', '89230430', '123', 123, NULL, 'Rua José Augusto de Carvalho', 88, NULL, 'Joinville', 'SC');

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_carrinho`
--

CREATE TABLE `usuario_carrinho` (
  `id_usuario` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Extraindo dados da tabela `usuario_carrinho`
--

INSERT INTO `usuario_carrinho` (`id_usuario`, `id_produto`) VALUES
(5, 32),
(5, 33);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_compras`
--

CREATE TABLE `usuario_compras` (
  `id_compra` int(11) NOT NULL,
  `id_usuario` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuario_img`
--

CREATE TABLE `usuario_img` (
  `id_usuario` int(11) NOT NULL,
  `img_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `carro`
--
ALTER TABLE `carro`
  ADD PRIMARY KEY (`id_carro`);

--
-- Índices para tabela `carro_produto`
--
ALTER TABLE `carro_produto`
  ADD PRIMARY KEY (`carro_id`,`produto_id`),
  ADD KEY `produto_id` (`produto_id`);

--
-- Índices para tabela `categorias`
--
ALTER TABLE `categorias`
  ADD PRIMARY KEY (`categoria_id`);

--
-- Índices para tabela `produtos`
--
ALTER TABLE `produtos`
  ADD PRIMARY KEY (`id_produto`);

--
-- Índices para tabela `produtos_imagens`
--
ALTER TABLE `produtos_imagens`
  ADD PRIMARY KEY (`id_img`,`id_produto`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices para tabela `produto_avaliacao`
--
ALTER TABLE `produto_avaliacao`
  ADD PRIMARY KEY (`cpf_usuario`,`id_produto`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices para tabela `produto_categoria`
--
ALTER TABLE `produto_categoria`
  ADD PRIMARY KEY (`produto_id`,`categoria_id`),
  ADD KEY `categoria_id` (`categoria_id`);

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Índices para tabela `usuario_carrinho`
--
ALTER TABLE `usuario_carrinho`
  ADD PRIMARY KEY (`id_usuario`,`id_produto`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices para tabela `usuario_compras`
--
ALTER TABLE `usuario_compras`
  ADD PRIMARY KEY (`id_compra`),
  ADD KEY `id_usuario` (`id_usuario`),
  ADD KEY `id_produto` (`id_produto`);

--
-- Índices para tabela `usuario_img`
--
ALTER TABLE `usuario_img`
  ADD PRIMARY KEY (`id_usuario`,`img_path`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `carro`
--
ALTER TABLE `carro`
  MODIFY `id_carro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de tabela `categorias`
--
ALTER TABLE `categorias`
  MODIFY `categoria_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `produtos`
--
ALTER TABLE `produtos`
  MODIFY `id_produto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT de tabela `produtos_imagens`
--
ALTER TABLE `produtos_imagens`
  MODIFY `id_img` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de tabela `usuario_compras`
--
ALTER TABLE `usuario_compras`
  MODIFY `id_compra` int(11) NOT NULL AUTO_INCREMENT;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `carro_produto`
--
ALTER TABLE `carro_produto`
  ADD CONSTRAINT `carro_produto_ibfk_1` FOREIGN KEY (`carro_id`) REFERENCES `carro` (`id_carro`),
  ADD CONSTRAINT `carro_produto_ibfk_2` FOREIGN KEY (`produto_id`) REFERENCES `produtos` (`id_produto`);

--
-- Limitadores para a tabela `produtos_imagens`
--
ALTER TABLE `produtos_imagens`
  ADD CONSTRAINT `produtos_imagens_ibfk_1` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`);

--
-- Limitadores para a tabela `usuario_carrinho`
--
ALTER TABLE `usuario_carrinho`
  ADD CONSTRAINT `usuario_carrinho_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `usuario_carrinho_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`);

--
-- Limitadores para a tabela `usuario_compras`
--
ALTER TABLE `usuario_compras`
  ADD CONSTRAINT `usuario_compras_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`),
  ADD CONSTRAINT `usuario_compras_ibfk_2` FOREIGN KEY (`id_produto`) REFERENCES `produtos` (`id_produto`);

--
-- Limitadores para a tabela `usuario_img`
--
ALTER TABLE `usuario_img`
  ADD CONSTRAINT `usuario_img_ibfk_1` FOREIGN KEY (`id_usuario`) REFERENCES `usuarios` (`id_usuario`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
