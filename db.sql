USE projeto1

CREATE TABLE clientes (
    id int AUTO_INCREMENT PRIMARY KEY,
    cliente VARCHAR(150) NOT NULL,
    cidade VARCHAR(100),
    estado VARCHAR(50)
);

CREATE TABLE funcionarios (
    id int AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(100),
    cargo VARCHAR(30)
);