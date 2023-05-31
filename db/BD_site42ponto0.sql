-- TABELA TB_CADASTRO_RESTAURANTE
CREATE DATABASE 42ponto0;
USE 42ponto0;

-- TABELA RESGISTER, ONDE, SERÁ FEITO O REGISTRO DOS NOVOS RESTAURANTES.
CREATE TABLE TB_REGISTER_RESTAURANT(
	pk_id_register INT AUTO_INCREMENT PRIMARY KEY,
    name_register VARCHAR(60),
    cnpj_register VARCHAR(14),
    email_register VARCHAR(45),
    password_register VARCHAR(60),
    phone_register VARCHAR(20) 
);

-- TABELA INFO, ONDE, SERÁ ALTERADO AS INFORMAÇÕES DO RESTAURANTE DENTRO DO NOSSO APP, OU SEJA, QUAIS INFORMAÇÕES APARECEM PARA OS CLIENTES.
CREATE TABLE TB_INFO_RESTAURANT(
	pk_id_info INT AUTO_INCREMENT PRIMARY KEY,
    status_info BOOLEAN, #ABERTO OU FECHADO
    phone_info VARCHAR(20),
    about_info TEXT,
    image_info TEXT,
    fk_id_register_info INT,
    FOREIGN KEY TB_INFO_RESTAURANT(fk_id_register_info) REFERENCES TB_REGISTER_RESTAURANT(pk_id_restaurant)
);

-- TABELA MENU, INFORMAÇÕES DOS PRODUTOS PARA VENDA, INSERÇÃO, DELETE E ALTERAÇÃO DOS PRODUTOS
CREATE TABLE TB_MENU_RESTAURANT(
    pk_id_menu INT AUTO_INCREMENT PRIMARY KEY,
    name_product_menu VARCHAR(60),
    accompaniments_product_menu TEXT,
    preco_product_menu FLOAT,
    image_product_menu TEXT,
    fk_id_register_restaurant_menu INT,
    FOREIGN KEY (fk_id_register_restaurant_menu) REFERENCES TB_REGISTER_RESTAURANT(pk_id_register)
);

-- TABELA SERÁ ACIONADA VIA TRIGGER, NÃO ALTERAR.
CREATE TABLE LOG_MOVE_RESTAURANT(
    id_log INT AUTO_INCREMENT PRIMARY KEY,
    fk_id_register_restaurant INT,
    date_exit DATETIME,
    date_entrace DATETIME,
    FOREIGN KEY (fk_id_register_restaurante) REFERENCES TB_REGISTER_RESTAURANT(pk_id_register)
);

-- TESTE INSERÇÃO DB
-- Inserindo valores na tabela TB_REGISTER_RESTAURANT
INSERT INTO TB_REGISTER_RESTAURANT (name_register, cnpj_register, email_register, password_register, phone_register)
VALUES
    ('Restaurante A', '12345678901234', 'restaurantea@example.com', 'password123', '1234567890'),
    ('Restaurante B', '98765432109876', 'restauranteb@example.com', 'password456', '0987654321'),
    ('Restaurante C', '56789012345678', 'restaurantec@example.com', 'password789', '5678901234'),
    ('Restaurante D', '43210987654321', 'restauranted@example.com', 'password321', '4321098765'),
    ('Restaurante E', '87654321098765', 'restaurantee@example.com', 'password654', '8765432109');

-- TRIGGERS
-- 1
DELIMITER $$
CREATE TRIGGER tr_insert_register_restaurant
AFTER INSERT ON TB_REGISTER_RESTAURANT
FOR EACH ROW
BEGIN
    INSERT INTO LOG_MOVE_RESTAURANT (id_log, fk_id_register_restaurant, date_exit, date_entrace)
    VALUES (null, NEW.pk_id_register,null,NOW());
END$$
DELIMITER ;

-- 2
DELIMITER $$
CREATE TRIGGER tr_delete_register_restaurant
AFTER DELETE ON TB_REGISTER_RESTAURANT
FOR EACH ROW
BEGIN
    UPDATE LOG_MOVE_RESTAURANT
    SET date_exit = NOW()
    WHERE fk_id_register_restaurant = OLD.pk_id_register
    AND date_exit IS NULL;
END$$
DELIMITER ;



-- FUNCION
DELIMITER $$
CREATE FUNCTION CALCULATE_TOTAL(price FLOAT, quantity INT)
RETURNS FLOAT
BEGIN
    DECLARE total FLOAT;
    SET total = price * quantity;
    RETURN total;
END$$
DELIMITER ;
-- Exemplo de uso: 
SELECT nome_product_menu, preco_product_menu, quantidade_product_menu, calculate_total(preco_product_menu, quantidade_product_menu) AS total
FROM TB_MENU_RESTAURANT;

-- VIEW
CREATE VIEW TOP_5_VALUES AS 
SELECT nome_product_menu, preco_product_menu, quantidade_product_menu, calculate_total(preco_product_menu, quantidade_product_menu) AS total
FROM TB_MENU_RESTAURANT
GROUP BY nome_product_menu
LIMIT 5;




