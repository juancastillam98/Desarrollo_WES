drop database if exists db_tienda_ropa;
create database db_tienda_ropa;
use db_tienda_ropa;

CREATE TABLE prendas(
id INT PRIMARY KEY AUTO_INCREMENT,
nombre VARCHAR(80) NOT NULL,
talla VARCHAR(10) NOT NULL,
precio NUMERIC(6,2) NOT NULL,
categoria VARCHAR(20)
);
alter table prendas
	ADD COLUMN imagen varchar(250);

ALTER TABLE prendas
	ADD CONSTRAINT chk_valid_talla
    CHECK (talla IN ('XS','S','M','L','XL','XXL'));

ALTER TABLE prendas
	ADD CONSTRAINT chk_valid_categoria
    CHECK (categoria IN ('CAMISETAS','PANTALONES','ACCESORIOS'));

#drop table clientes;
create table clientes(
id int primary key AUTO_INCREMENT,
usuario VARCHAR(100) UNIQUE NOT NULL,
contrasena varchar(60) NOT NULL,
nombre VARCHAR(100) NOT NULL,
apellido1 VARCHAR(200) NOT NULL,
apellido2 VARCHAR(200),
fechaNacimiento DATE NOT NULL
);
alter table clientes
	ADD COLUMN imagen varchar(250);

#drop table clientes_prendas;

create table clientes_prendas(
id int primary key auto_increment,
cliente_id int,
prenda_id int,
cantidad int,
fecha date,
constraint clientes_prendas_cliente_fk foreign key (cliente_id) references clientes(id),
constraint clientes_prendas_prenda_fk foreign key (prenda_id) references prendas(id),
constraint chk_cantidad_valida check (cantidad >=1)
);
 #alter table clientes_prendas add column talla varchar(10);
select * from clientes;
select * from clientes where usuario = "pepe";

#añadir el campo de rol
#alter table clientes drop column rol;
alter table clientes add column rol varchar(15);
alter table clientes 
	ADD CONSTRAINT chk_rol_valido CHECK (rol in ('administrador', 'usuario'));
