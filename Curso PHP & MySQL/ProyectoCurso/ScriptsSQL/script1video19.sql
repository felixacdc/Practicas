CREATE TABLE `Felix`.`usuarios` ( `id_usuario` INT(12) NOT NULL AUTO_INCREMENT , `nombre` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `email` VARCHAR(50) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `password` VARCHAR(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL , `clase` INT(12) NOT NULL , PRIMARY KEY (`id_usuario`)) ENGINE = InnoDB;

INSERT INTO usuarios (nombre,email,password,clase) VALUES ('fex','pfmata01@gmail.com','1ac2',1);

INSERT INTO usuarios (nombre, email, password, clase) VALUES ('pepe','pepe@gmail.com','pp',2);



select * from Autos;
select idAuto, idMarca, Modelo, precio, traccion from Autos;
select Autos.idAuto, Autos.Modelo, Marcas.nombre from Autos inner join Marcas on Autos.idMarca = Marcas.idMarca;
select idMecanico, nombre, sueldo from Mecanicos where sueldo > 1000 and sueldo < 2000;
select * from Repuestos order by precio desc;
