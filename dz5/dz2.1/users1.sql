DROP DATABASE IF EXISTS users1;
CREATE DATABASE users1;
USE users1;

DROP TABLE IF EXISTS users;
CREATE TABLE users (
	id BIGINT,
    age BIGINT 
); 

INSERT INTO `users` (`id`, `age`) VALUES (1, 10);
INSERT INTO `users` (`id`, `age`) VALUES (1, 25);
INSERT INTO `users` (`id`, `age`) VALUES (1, 5);
INSERT INTO `users` (`id`, `age`) VALUES (1, 30);
INSERT INTO `users` (`id`, `age`) VALUES (1, 50);
INSERT INTO `users` (`id`, `age`) VALUES (1, 70);

SELECT `id`, AVG(`age`) FROM users GROUP BY `id`;