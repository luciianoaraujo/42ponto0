-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Mar-2023 às 00:47
-- Versão do servidor: 5.7.36
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `delivery42`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `clientes`
--

DROP TABLE IF EXISTS `clientes`;
CREATE TABLE IF NOT EXISTS `clientes` (
  `id_cliente` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `senha` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_cliente`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `clientes`
--

INSERT INTO `clientes` (`id_cliente`, `nome`, `email`, `telefone`, `endereco`, `senha`) VALUES
(1, 'Ana Silva', 'ana.silva@gmail.com', '(11) 99999-9999', 'Rua A, 123', '123456'),
(2, 'João Santos', 'joao.santos@hotmail.com', '(21) 88888-8888', 'Avenida B, 456', '654321'),
(3, 'Maria Souza', 'maria.souza@yahoo.com', '(31) 77777-7777', 'Praça C, 789', 'senha123'),
(4, 'Pedro Oliveira', 'pedro.oliveira@outlook.com', '(41) 66666-6666', 'Alameda D, 234', 'abc123'),
(5, 'Luíza Pereira', 'luiza.pereira@gmail.com', '(51) 55555-5555', 'Rua E, 567', 'senha456');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estabelecimentos`
--

DROP TABLE IF EXISTS `estabelecimentos`;
CREATE TABLE IF NOT EXISTS `estabelecimentos` (
  `id_estabelecimento` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `telefone` varchar(20) DEFAULT NULL,
  `endereco` varchar(50) DEFAULT NULL,
  `hora_abertura` time DEFAULT NULL,
  `hora_fechamento` time DEFAULT NULL,
  PRIMARY KEY (`id_estabelecimento`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estabelecimentos`
--

INSERT INTO `estabelecimentos` (`id_estabelecimento`, `nome`, `email`, `telefone`, `endereco`, `hora_abertura`, `hora_fechamento`) VALUES
(1, 'Pizzaria do Zé', 'pizzariaze@gmail.com', '(11) 22222-2222', 'Rua F, 789', '18:00:00', '23:00:00'),
(2, 'Restaurante da Ana', 'restaurantedaana@hotmail.com', '(21) 33333-3333', 'Avenida G, 123', '12:00:00', '22:00:00'),
(3, 'Cafeteria do João', 'cafeteriadojoao@yahoo.com', '(31) 44444-4444', 'Praça H, 456', '09:00:00', '19:00:00'),
(4, 'Bar do Pedro', 'bardo.pedro@outlook.com', '(41) 55555-5555', 'Alameda I, 789', '16:00:00', '01:00:00'),
(5, 'Lanchonete da Luíza', 'lanchoneteda.luiza@gmail.com', '(51) 66666-6666', 'Rua J, 234', '10:00:00', '23:00:00');

-- --------------------------------------------------------

--
-- Estrutura da tabela `item_pedidos`
--

DROP TABLE IF EXISTS `item_pedidos`;
CREATE TABLE IF NOT EXISTS `item_pedidos` (
  `id_pedido` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  KEY `id_pedido` (`id_pedido`),
  KEY `id_produto` (`id_produto`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `item_pedidos`
--

INSERT INTO `item_pedidos` (`id_pedido`, `id_produto`) VALUES
(1, 1),
(1, 2),
(2, 2),
(2, 3),
(3, 4),
(4, 5),
(5, 1),
(5, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pedidos`
--

DROP TABLE IF EXISTS `pedidos`;
CREATE TABLE IF NOT EXISTS `pedidos` (
  `id_pedido` int(11) NOT NULL AUTO_INCREMENT,
  `id_cliente` int(11) DEFAULT NULL,
  `id_taxa` int(11) DEFAULT NULL,
  `pagamento` enum('Dinheiro','Cartão') DEFAULT NULL,
  `data` datetime DEFAULT NULL,
  `status` enum('Em andamento','Concluído','Cancelado') DEFAULT NULL,
  PRIMARY KEY (`id_pedido`),
  KEY `id_cliente` (`id_cliente`),
  KEY `id_taxa` (`id_taxa`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pedidos`
--

INSERT INTO `pedidos` (`id_pedido`, `id_cliente`, `id_taxa`, `pagamento`, `data`, `status`) VALUES
(1, 1, 1, 'Dinheiro', '2021-10-15 19:00:00', 'Em andamento'),
(2, 2, 2, 'Cartão', '2021-10-16 13:00:00', 'Concluído'),
(3, 3, 3, 'Dinheiro', '2021-10-17 10:00:00', 'Cancelado'),
(4, 4, 4, 'Cartão', '2021-10-18 21:00:00', 'Em andamento'),
(5, 5, 5, 'Dinheiro', '2021-10-19 18:00:00', 'Concluído');

-- --------------------------------------------------------

--
-- Estrutura stand-in para vista `pedidos_pendentes`
-- (Veja abaixo para a view atual)
--
DROP VIEW IF EXISTS `pedidos_pendentes`;
CREATE TABLE IF NOT EXISTS `pedidos_pendentes` (
`id_pedido` int(11)
,`nome_cliente` varchar(50)
,`pagamento` enum('Dinheiro','Cartão')
,`valor_taxa` varchar(30)
);

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id_produto` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) DEFAULT NULL,
  `descricao` text,
  `valor` varchar(30) DEFAULT NULL,
  `categoria` varchar(30) DEFAULT NULL,
  `tipo` varchar(30) DEFAULT NULL,
  `id_estabelecimento` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_produto`),
  KEY `id_estabelecimento` (`id_estabelecimento`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id_produto`, `nome`, `descricao`, `valor`, `categoria`, `tipo`, `id_estabelecimento`) VALUES
(1, 'Pizza Mussarela', 'Pizza com queijo mussarela', '35.00', 'Pizzas', 'Salgado', 1),
(2, 'Frango à Parmegiana', 'Filé de frango empanado com molho de tomate e queijo', '40.00', 'Pratos principais', 'Salgado', 2),
(3, 'Café Expresso', 'Café forte e encorpado', '5.00', 'Bebidas', 'Quente', 3),
(4, 'Cerveja Heineken', 'Cerveja puro malte', '8.00', 'Bebidas', 'Alcoólico', 4),
(5, 'Hambúrguer Simples', 'Pão, carne, queijo e alface', '20.00', 'Sanduíches', 'Salgado', 5);

-- --------------------------------------------------------

--
-- Estrutura da tabela `taxas`
--

DROP TABLE IF EXISTS `taxas`;
CREATE TABLE IF NOT EXISTS `taxas` (
  `id_taxa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `valor` varchar(30) DEFAULT NULL,
  `id_estabelecimento` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_taxa`),
  KEY `id_estabelecimento` (`id_estabelecimento`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `taxas`
--

INSERT INTO `taxas` (`id_taxa`, `nome`, `valor`, `id_estabelecimento`) VALUES
(1, 'Cidade', '5.00', 1),
(2, 'Rural', '10.00', 2);

-- --------------------------------------------------------

--
-- Estrutura para vista `pedidos_pendentes`
--
DROP TABLE IF EXISTS `pedidos_pendentes`;

DROP VIEW IF EXISTS `pedidos_pendentes`;
CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `pedidos_pendentes`  AS SELECT `p`.`id_pedido` AS `id_pedido`, `c`.`nome` AS `nome_cliente`, `p`.`pagamento` AS `pagamento`, `t`.`valor` AS `valor_taxa` FROM ((`pedidos` `p` join `clientes` `c` on((`p`.`id_cliente` = `c`.`id_cliente`))) join `taxas` `t` on((`p`.`id_taxa` = `t`.`id_taxa`))) WHERE (`p`.`status` = 'Em andamento') ;
COMMIT;

CREATE USER 'andersonpereira'@'localhost' IDENTIFIED BY 'andersonpereira@4525652';
GRANT ALL PRIVILEGES ON *.* TO 'andersonpereira'@'localhost' WITH GRANT OPTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
