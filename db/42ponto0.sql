-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 03-Jun-2023 às 21:54
-- Versão do servidor: 8.0.32
-- versão do PHP: 8.0.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `42ponto0`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_menu_restaurant`
--

DROP TABLE IF EXISTS `tb_menu_restaurant`;
CREATE TABLE IF NOT EXISTS `tb_menu_restaurant` (
  `pk_id_menu` int NOT NULL AUTO_INCREMENT,
  `type_product_menu` varchar(45) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name_product_menu` varchar(60) DEFAULT NULL,
  `accompaniments_product_menu` text,
  `preco_product_menu` float DEFAULT NULL,
  `fk_id_register_restaurant_menu` int DEFAULT NULL,
  PRIMARY KEY (`pk_id_menu`),
  KEY `fk_id_register_restaurant_menu` (`fk_id_register_restaurant_menu`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_menu_restaurant`
--

INSERT INTO `tb_menu_restaurant` (`pk_id_menu`, `type_product_menu`, `name_product_menu`, `accompaniments_product_menu`, `preco_product_menu`, `fk_id_register_restaurant_menu`) VALUES
(22, 'lanches', 'Big Tasty', '', 30, 10),
(23, 'bebidas', 'Coca-Cola', '', 10, 10),
(24, 'lanches', 'X-egg', '', 18, 10);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tb_register_restaurant`
--

DROP TABLE IF EXISTS `tb_register_restaurant`;
CREATE TABLE IF NOT EXISTS `tb_register_restaurant` (
  `pk_id_register` int NOT NULL AUTO_INCREMENT,
  `name_register` varchar(60) DEFAULT NULL,
  `cnpj_register` varchar(14) DEFAULT NULL,
  `email_register` varchar(45) DEFAULT NULL,
  `password_register` varchar(60) DEFAULT NULL,
  `phone_register` varchar(20) DEFAULT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`pk_id_register`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Extraindo dados da tabela `tb_register_restaurant`
--

INSERT INTO `tb_register_restaurant` (`pk_id_register`, `name_register`, `cnpj_register`, `email_register`, `password_register`, `phone_register`, `image`) VALUES
(10, 'Mc donalds', '12345678901234', 'mcdonalds@gmail.com', '$2y$10$qOS3nVlXWj34Bw7d1rL2ou1Xe.cQ3rtXRZ6NI3rcsg25GJh1fG0iC', '1234567890', '../../public/images/logos/1.png'),
(11, 'Subway', '98765432109876', 'subway@gmail.com', '$2y$10$NeW6icqgv5bRdF0hZGRY0OfIJ6eOcfOlzJHvilZzl6K6.T6AIagZS', '0987654321', '../../public/images/logos/2.png'),
(12, 'Outback', '56789012345678', 'outback@gmail.com', '$2y$10$hUytZB1BXefgskyVyrbF5uuOguWVdMTwexQLEi95a5CGL/TJij0Vi', '4321567890', '../../public/images/logos/3.png'),
(13, 'Burger King', '43210987654321', 'bk@gmail.com', '$2y$10$m7V8X.9lzJNKBtAl5QiV7OhcvvoEsewwpGqaFsG4RDfMXSQrquxG2', '11910902999', '../../public/images/logos/4.png'),
(14, 'Pizza Hut', '87654321098765', 'pizzahut@gmail.com', '$2y$10$OfSUutYETnjhqo80.4O9BebFUvPisguOqs6qU9kxbnS0H5Re/Jcly', '1191919191', '../../public/images/logos/5.png'),
(15, 'Starbucks', '12345678901234', 'starbucks@gmail.com', '$2y$10$fsgAiQm5vfK/NOjElR6/0efbq/sStmChJD2dofLb/zzjX9mCiAtuu', '1190909090', '../../public/images/logos/6.png'),
(16, 'Pastel da tia', '12345678901238', 'pasteldatia@gmail.com', '$2y$10$eYD4uD5I5A3wtX5WudbpWOYnoHXngTE44tcUhzddr5rzYSTLlRSWq', '119191919130', 'https://blog.agenciadosite.com.br/wp-content/uploads/2017/02/Pastel-Chef-L-SF-e1486724164401.jpg');

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `tb_menu_restaurant`
--
ALTER TABLE `tb_menu_restaurant`
  ADD CONSTRAINT `tb_menu_restaurant_ibfk_1` FOREIGN KEY (`fk_id_register_restaurant_menu`) REFERENCES `tb_register_restaurant` (`pk_id_register`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
