CREATE TABLE `Felix`.`usuarios` ( `id_usuario` INT(12) NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `email` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `password` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `clase` INT(12) NOT NULL , PRIMARY KEY (`id_usuario`) ENGINE = InnoDB;

INSERT INTO usuarios (nombre,email,password,clase) VALUES ('fex','pfmata01@gmail.com','1ac2',1);

INSERT INTO usuarios (nombre, email, password, clase) VALUES ('pepe','pepe@gmail.com','pp',2);