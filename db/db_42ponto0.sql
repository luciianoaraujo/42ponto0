CREATE DATABASE IF NOT EXISTS `42ponto0` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `42ponto0`;

DELIMITER $$
CREATE DEFINER=`four2ponto0`@`localhost` 
PROCEDURE `insert_in_register` (IN `name_re` VARCHAR(60), IN `cnpj_re` VARCHAR(14), 
IN `email_re` VARCHAR(45), IN `password_re` VARCHAR(60), IN `phone_re` VARCHAR(20), IN `image` TEXT)
 BEGIN
INSERT INTO tb_register_restaurant(pk_id_register, name_register, cnpj_register, email_register, password_register, phone_register, image) 
VALUES (null,name_re,cnpj_re,email_re,password_re,phone_re,image);
END$$

CREATE DEFINER=`four2ponto0`@`localhost` 
FUNCTION `calculate_total` (`price` FLOAT, `quantity` INT) RETURNS FLOAT  BEGIN
DECLARE total FLOAT;
SET total = price * quantity;
RETURN total;
END$$

DELIMITER ;

CREATE TABLE `log_entrace_exit_register` (
  `id_log` int(11) NOT NULL,
  `id_register_restaurant` int(11) DEFAULT NULL,
  `name_register` varchar(60) DEFAULT NULL,
  `cnpj_register` varchar(14) DEFAULT NULL,
  `email_register` varchar(45) DEFAULT NULL,
  `password_register` varchar(60) DEFAULT NULL,
  `phone_register` varchar(20) DEFAULT NULL,
  `date_exit` datetime DEFAULT NULL,
  `date_entrace` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

DELIMITER $$
CREATE TRIGGER `tr_insert_register_restaurant` AFTER INSERT ON `log_entrace_exit_register` FOR EACH ROW BEGIN
INSERT INTO log_entrace_exit_register (id_log, id_register_restaurant,name_register,
	cnpj_register,email_register, password_register, phone_register,
	date_exit, date_entrace)
VALUES (null, NEW.id_register_restaurant,new.name_register,
new.cnpj_register,new.email_register,
new.password_register,new.phone_register, null,NOW());
END$$
DELIMITER ;

DELIMITER $$
CREATE TRIGGER `tr_delete_register_restaurant` AFTER DELETE ON `tb_register_restaurant` FOR EACH ROW BEGIN
UPDATE log_entrace_exit_register
SET date_exit = NOW()
WHERE id_register_restaurant = OLD.pk_id_register
AND date_exit IS NULL;
END
$$
DELIMITER ;

CREATE TABLE `tb_menu_restaurant` (
  `pk_id_menu` int(11) NOT NULL,
  `type_product_menu` varchar(45) DEFAULT NULL,
  `name_product_menu` varchar(60) DEFAULT NULL,
  `accompaniments_product_menu` text DEFAULT NULL,
  `preco_product_menu` float DEFAULT NULL,
  `fk_id_register_restaurant_menu` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

REPLACE INTO `tb_menu_restaurant` (`pk_id_menu`, `type_product_menu`, `name_product_menu`, `accompaniments_product_menu`, `preco_product_menu`, `fk_id_register_restaurant_menu`) VALUES
(22, 'lanches', 'Big Tasty', '', 30.99, 10),
(23, 'bebidas', 'Coca-Cola', '', 7.96, 10),
(24, 'lanches', 'X-egg', '', 17.69, 10),
(75, 'lanches', 'RED PROVA', 'TESTE', 30, 22),
(27, 'lanches', 'Quarter Pounder com Queijo', '', 25, 10),
(28, 'lanches', 'Cheeseburger', '', 22, 10),
(29, 'lanches', 'Hamburger', '', 18, 10),
(30, 'lanches', 'McFish', '', 25, 10),
(31, 'lanches', 'McChicken Deluxe', '', 30, 10),
(32, 'lanches', 'McChicken Bacon', '', 30, 10),
(33, 'lanches', 'McChicken Clubhouse', '', 28, 10),
(34, 'lanches', 'McChicken Bacon Clubhouse', '', 35, 10),
(35, 'entradas', 'Salada Caesar', '', 20, 10),
(36, 'entradas', 'Salada McChicken', '', 20, 10),
(37, 'entradas', 'McNuggets de frango', '', 18, 10),
(38, 'bebidas', 'Sprite', '', 8, 10),
(39, 'sobremesas', 'Sundae ', '', 12, 10),
(40, 'sobremesas', 'Tortinha de Maçã', '', 5, 10),
(41, 'sobremesas', 'Casquinha', '', 5, 10),
(42, 'lanches', 'Batatas Fritas', 'Acompanhamento crocante e delicioso para satisfazer seu desejo por batatas.', 20.45, 13),
(43, 'lanches', 'Cheeseburger', 'Uma combinação perfeita de queijo derretido, carne grelhada, picles, ketchup e mostarda, tudo em um pão macio.', 32.25, 13),
(44, 'lanches', 'Chicken Royale', 'Um saboroso filé de frango empanado, queijo derretido, alface fresca, tomate, maionese e ketchup, servidos em um pão macio.', 20.12, 13),
(45, 'sobremesas', 'Sundae', 'Uma deliciosa sobremesa com sorvete cremoso, cobertura de chocolate e toque final de chantilly.', 14.67, 13),
(46, 'bebidas', 'Caramel Macchiato', 'Uma combinação perfeita de espresso suave, leite vaporizado, espuma de leite sedosa e um toque de caramelo.', 12.34, 15),
(47, 'bebidas', 'Frappuccino de Caramelo', 'Uma bebida gelada e cremosa feita com café, leite, gelo e xarope de caramelo, finalizada com chantilly e mais caramelo.', 16.99, 15),
(48, 'bebidas', 'Latte de Baunilha', 'Uma mistura suave de espresso, leite vaporizado, espuma de leite aveludada e um toque de xarope de baunilha.', 15, 15),
(49, 'lanches', 'Bloomin\' Onion', 'A Bloomin\' Onion é um clássico aperitivo do Outback e um dos itens mais populares do menu. É uma cebola gigante, cortada em formato de flor, empanada e frita até ficar crocante. É servida com um delicioso molho de pétalas de cebola e é uma ótima opção para compartilhar com amigos e família.', 66.9, 12),
(50, 'bebidas', 'Mocha', 'Uma indulgente combinação de espresso, leite vaporizado, chocolate, espuma de leite e um toque de chantilly.', 15.99, 15),
(51, 'lanches', 'Ribs on The Barbie', 'As Ribs on The Barbie são costelas de porco grelhadas e regadas com um molho barbecue exclusivo do Outback. A carne é tão macia que se solta do osso, e o molho dá um sabor defumado e agridoce. É um prato muito suculento e saboroso, acompanhado de batatas fritas e coleslaw (salada de repolho).', 48.99, 12),
(52, 'pratos_principais', 'Outback Special', 'O Outback Special é um corte de carne nobre do Outback Steakhouse, um suculento bife de alcatra. É grelhado no ponto escolhido, proporcionando um sabor marcante e uma textura macia. É servido com um acompanhamento à escolha do cliente, como purê de batatas, legumes ou salada.', 125.99, 12),
(53, 'pratos_principais', 'Alice Springs Chicken', 'O Alice Springs Chicken é um prato de frango recheado com queijo, bacon e champignon, coberto com uma generosa porção de queijo derretido. É acompanhado por uma porção de batatas fritas crocantes e um molho especial. A combinação de sabores salgados e defumados torna esse prato uma escolha muito popular entre os clientes.', 225.8, 12),
(54, 'pizzas', 'Pizza Pepperoni', 'A clássica pizza de queijo coberta com generosas fatias de pepperoni, perfeitamente assada e cheia de sabor.', 35.9, 14),
(55, 'pizzas', 'Pizza Supreme', 'Uma combinação irresistível de pepperoni, linguiça, cebola, pimentão e azeitonas pretas, em uma deliciosa massa crocante.', 39.9, 14),
(56, 'pizzas', 'Pizza Margherita', 'Uma pizza tradicional com molho de tomate, queijo mussarela e manjericão fresco, oferecendo uma explosão de sabores simples e autênticos.', 32.9, 14),
(57, 'sobremesas', 'Queensland Chicken & Shrimp Pasta', 'Esta é uma opção favorita entre os fãs de massas. A Queensland Chicken & Shrimp Pasta apresenta uma combinação deliciosa de macarrão fettuccine com pedaços de frango grelhado, camarões suculentos e cogumelos salteados, tudo isso coberto com um molho cremoso e saboroso. É um prato satisfatório e cheio de sabores.', 36.5, 12),
(58, 'entradas', 'Breadsticks de Queijo', 'Palitos de pão macios e saborosos, cobertos com queijo derretido e um toque de tempero, perfeitos para compartilhar.', 24.9, 14),
(59, 'sobremesas', 'Chocolate Thunder From Down Under', ' Para os amantes de sobremesas, o Chocolate Thunder From Down Under é uma escolha irresistível. É uma fatia generosa de bolo de chocolate quente, servida com uma bola de sorvete de baunilha, coberta com uma calda de chocolate e finalizada com raspas de chocolate e chantilly. É uma explosão de sabor para os apaixonados por chocolate.', 38.99, 12),
(60, 'pizzas', 'Chicken Alfredo Pasta', 'Massa penne cozida al dente, coberta com um molho cremoso de Alfredo, frango desfiado e queijo gratinado. Uma opção deliciosa para os amantes de massa.', 42.9, 14),
(61, 'entradas', 'Cheesy Pops', 'Deliciosos pãezinhos de massa macia recheados com queijo derretido. Uma opção irresistível para quem busca uma entrada saborosa.', 19.9, 14),
(62, 'bebidas', 'Pumpkin Spice Latte', 'Uma bebida sazonalmente popular, com uma mistura de espresso, leite vaporizado, xarope de abóbora e especiarias como canela, cravo e noz-moscada. Uma combinação perfeita de sabores de outono.', 18.9, 15),
(63, 'lanches', 'Subway Club', 'O Subway Club é um dos sanduíches mais populares do menu. É feito com fatias de peito de peru, presunto e rosbife, juntamente com uma seleção de vegetais frescos, como alface, tomate e cebola. É servido em um pão fresco de sua escolha e pode ser complementado com uma variedade de molhos e condimentos.', 48.99, 11),
(64, 'bebidas', 'Chai Latte', 'Uma deliciosa combinação de chá preto, leite vaporizado, especiarias como canela, gengibre e cardamomo, resultando em uma bebida quente e reconfortante com um toque exótico.', 14.9, 15),
(65, 'lanches', 'Italian B.M.T', 'O Italian B.M.T. é outro clássico do Subway. Ele apresenta uma combinação de salame, pepperoni e presunto, acompanhados de vegetais frescos e queijos derretidos. É uma opção rica em sabor e bastante apreciada pelos fãs de sanduíches tradicionais italianos.', 89.95, 11),
(66, 'lanches', 'Veggie Delite', 'Para os vegetarianos e aqueles que preferem opções mais leves, o Veggie Delite é uma escolha popular. É recheado com uma variedade de vegetais frescos, como pepino, pimentão, tomate, cebola roxa, azeitonas e mais. É uma opção saudável, cheia de cores e texturas.', 35.85, 11),
(67, 'sobremesas', 'Sundae de Caramelo', 'Um delicioso sundae feito com sorvete cremoso, cobertura de caramelo e finalizado com chantilly. Uma opção doce e irresistível para satisfazer sua vontade de sobremesa.', 15.9, 13),
(68, 'lanches', 'Subway Melt', 'O Subway Melt é um sanduíche quente que combina fatias de frango grelhado, bacon crocante e queijo derretido. É uma opção saborosa e reconfortante, especialmente quando servido em pão fresco e aquecido no forno.', 33.96, 11),
(69, 'sobremesas', 'King Fusion Oreo', 'Uma sobremesa indulgente que combina pedaços crocantes de biscoito Oreo com sorvete de baunilha, cobertura de chocolate e chantilly. Uma combinação perfeita para os amantes de Oreo.', 12, 13),
(70, 'lanches', 'Steak & Cheese', 'O Steak & Cheese é um sanduíche que apresenta fatias suculentas de carne bovina grelhada, acompanhadas de queijo derretido. É uma opção saborosa e satisfatória, especialmente quando combinada com vegetais frescos, como cebola, pimentão e tomate. É uma escolha popular para os amantes de carne.', 66.89, 11),
(71, 'lanches', 'Subway Club Salad', ' Para aqueles que preferem uma refeição mais leve ou sem pão, a Subway oferece a Subway Club Salad. É uma salada que combina alface crocante com fatias de peito de peru, presunto, rosbife e queijo. Pode ser personalizada com a adição de diversos vegetais, molhos e temperos, de acordo com as preferências de cada um.', 75.99, 11),
(76, 'lanches', 'Pastel de Frango com Catupiry', '', 12, 23);

CREATE TABLE `tb_register_restaurant` (
  `pk_id_register` int(11) NOT NULL,
  `name_register` varchar(60) DEFAULT NULL,
  `cnpj_register` varchar(14) DEFAULT NULL,
  `email_register` varchar(45) DEFAULT NULL,
  `password_register` varchar(60) DEFAULT NULL,
  `phone_register` varchar(20) DEFAULT NULL,
  `image` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

REPLACE INTO `tb_register_restaurant` (`pk_id_register`, `name_register`, `cnpj_register`, `email_register`, `password_register`, `phone_register`, `image`) VALUES
(10, 'Mc donalds', '12345678901234', 'mcdonalds@gmail.com', '$2y$10$qOS3nVlXWj34Bw7d1rL2ou1Xe.cQ3rtXRZ6NI3rcsg25GJh1fG0iC', '1234567890', '../../public/images/logos/1.png'),
(11, 'Subway', '98765432109876', 'subway@gmail.com', '$2y$10$NeW6icqgv5bRdF0hZGRY0OfIJ6eOcfOlzJHvilZzl6K6.T6AIagZS', '0987654321', '../../public/images/logos/2.png'),
(12, 'Outback', '56789012345678', 'outback@gmail.com', '$2y$10$hUytZB1BXefgskyVyrbF5uuOguWVdMTwexQLEi95a5CGL/TJij0Vi', '4321567890', '../../public/images/logos/3.png'),
(13, 'Burger King', '43210987654321', 'bk@gmail.com', '$2y$10$m7V8X.9lzJNKBtAl5QiV7OhcvvoEsewwpGqaFsG4RDfMXSQrquxG2', '11910902999', '../../public/images/logos/4.png'),
(14, 'Pizza Hut', '87654321098765', 'pizzahut@gmail.com', '$2y$10$OfSUutYETnjhqo80.4O9BebFUvPisguOqs6qU9kxbnS0H5Re/Jcly', '1191919191', '../../public/images/logos/5.png'),
(15, 'Starbucks', '12345678901234', 'starbucks@gmail.com', '$2y$10$fsgAiQm5vfK/NOjElR6/0efbq/sStmChJD2dofLb/zzjX9mCiAtuu', '1190909090', '../../public/images/logos/6.png'),
(22, 'FAEX', '99999999999', 'aleandro.lima@faex.edu.br', '$2y$10$6ePhZbNrBP4zObWRGwo/2OW3IxDGmfIFWl7knnoHjUTmLmEhEmUM6', '35999460475', 'https://faex.edu.br/img/logo.png'),
(23, 'Pastel da Tia', '12345678901232', 'pasteldatia@gmail.com', '$2y$10$CpPYZhe/fITq9KQrQOnftOcdMs8AF92.JDglDHfaH385fo6tTQV0a', '11111111111', 'https://blog.agenciadosite.com.br/wp-content/uploads/2017/02/Pastel-Chef-L-SF-e1486724164401.jpg');


CREATE VIEW top_5_proutos_mais_caros AS
    SELECT 
        tbrr.name_register AS nome_restaurante,
        MAX(tbmr.preco_product_menu) AS produto_mais_caro
    FROM
        tb_register_restaurant AS tbrr
            LEFT JOIN
        tb_menu_restaurant AS tbmr ON tbrr.pk_id_register = tbmr.fk_id_register_restaurant_menu
    GROUP BY nome_restaurante
    ORDER BY produto_mais_caro DESC
    LIMIT 5;