CREATE DATABASE bd_aula;
USE bd_aula;

CREATE TABLE user(
    id INT PRIMARY KEY AUTO_INCREMENT,
    login VARCHAR(100),
    name VARCHAR(100),
    password VARCHAR(100),
    nivel INT
);

INSERT INTO user VALUES
(null, "teste", "teste", "teste", 1),
(null, "login_teste", "name_teste", "password_teste", 2),
(null, "login_admin", "admin", "admin", 1);