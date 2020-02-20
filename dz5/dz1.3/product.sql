DROP DATABASE IF EXISTS product;
CREATE DATABASE product;
USE product;

DROP TABLE IF EXISTS storehouses_products;
CREATE TABLE storehouses_products (
	id SERIAL PRIMARY KEY AUTO_INCREMENT,
    price BIGINT 
); 

INSERT INTO `storehouses_products` (`price`) VALUES (0);
INSERT INTO `storehouses_products` (`price`) VALUES (2500);
INSERT INTO `storehouses_products` (`price`) VALUES (0);
INSERT INTO `storehouses_products` (`price`) VALUES (30);
INSERT INTO `storehouses_products` (`price`) VALUES (500);
INSERT INTO `storehouses_products` (`price`) VALUES (1);