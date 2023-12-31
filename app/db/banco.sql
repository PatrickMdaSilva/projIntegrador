Criação da tabela doar

CREATE TABLE `doar`.`users` (
 `id_user` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `name` VARCHAR(25) , 
 `lastname` VARCHAR(45) , 
 `email` VARCHAR(100) NOT NULL , 
 `password` VARCHAR(100) NOT NULL , 
 `token` VARCHAR(100) NOT NULL,  
 `type` TYNYINT(100)  
);

------------------------------------------------

Criação da tabela Livros

CREATE TABLE `doar`.`books` (
 `id_book` INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY ,
 `name` VARCHAR(50) ,
 `author` VARCHAR(40) ,
 `edition` VARCHAR(40) ,
 `publish` VARCHAR(40) ,
 `ass` VARCHAR(40) ,
 `image` VARCHAR(200) ,
 `donor` VARCHAR(40) ,
 `contact` VARCHAR(40) ,
 `id_user` INT(11) NOT NULL , 
 CONSTRAINT book_id_user FOREIGN KEY (id_user)
 REFERENCES users (id_user)
 ON DELETE CASCADE ON UPDATE CASCADE
);
----------------------------------------------------


