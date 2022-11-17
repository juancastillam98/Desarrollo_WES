insert into clientes_prendas (cliente_id, prenda_id, cantidad, fecha) values (5, 19, 2, '2022-11-11');
insert into clientes_prendas (cliente_id, prenda_id, cantidad, fecha) values (5, 21, 3, '2022-02-11');
insert into clientes_prendas (cliente_id, prenda_id, cantidad, fecha) values (6, 20, 7, '2022-05-11');
insert into clientes_prendas (cliente_id, prenda_id, cantidad, fecha) values (9, 21, 3, '2022-10-11');
use db_tienda_ropa;
select * from clientes_prendas;

#desde php, en vez de ejecutar la consulta entera, mandamos llamar a la view
create view vw_clientes_prendas as (
select c.usuario, p.nombre producto, cp.cantidad, p.precio precioUnitario, cp.fecha
	from clientes c
    join clientes_prendas cp on c.id = cp.cliente_id
    join prendas p on p.id=cp.prenda_id);

select * from vw_clientes_prendas;
drop view vw_clientes_prendas;

alter table clientes_prendas DROP CONSTRAINT clientes_prendas_pk;

