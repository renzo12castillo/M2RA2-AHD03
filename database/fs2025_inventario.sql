create database fs2025_inventario; 
use fs2025_inventario; 

create table puestos(
	puesto_id smallint auto_increment primary key, 
    puesto varchar(100)
); 

create table empleados(
	empleado_id mediumint primary key, 
    nombre varchar(50) not null, 
    apellido varchar(50) not null, 
    telefono int(8), 
    puesto_id smallint not null, 
    fecha_nacimiento date
); 

alter table empleados 
	add constraint puesto_id_fk foreign key (puesto_id)
    references puestos (puesto_id)
    on update cascade
    on delete cascade; 
    
create table usuarios(
	empleado_id mediumint, 
    usuario varchar(75) not null, 
    email varchar(75) not null, 
    contrasena varchar(255) unique not null, 
    estado boolean, 
    rol_id smallint
); 

alter table usuarios
modify column estado VARCHAR(50); 

alter table usuarios
add primary key (empleado_id);  

create table roles(
	rol_id smallint primary key, 
    nombre varchar(75), 
    descripcion varchar(150)
); 

create table equipos(
	equipo_id mediumint primary key, 
    no_serie mediumint not null, 
    marca_id smallint not null, 
    descripcion varchar(150), 
    fecha_compra date, 
    precio decimal(8,2), 
    tipo_equipo smallint, 
    empleado_id mediumint not null
); 

create table marcas(
	marca_id smallint primary key, 
    marca varchar(125)
); 

create table tipo_equipo(
	tipo_equipo smallint primary key, 
    nombre varchar(150)
); 

alter table usuarios 
	add constraint usuario_id foreign key(empleado_id)
    references empleados (empleado_id)
    on update cascade 
    on delete cascade; 
	
alter table usuarios 
	add constraint rol_id_fk foreign key (rol_id)
    references roles (rol_id)
    on update cascade
    on delete cascade; 
    
alter table equipos
	add constraint empleado_id_fk foreign key (empleado_id)
    references empleados (empleado_id)
    on update cascade 
    on delete cascade; 
    
alter table equipos
	add constraint marca_id_fk foreign key (marca_id)
    references marcas (marca_id)
    on update cascade 
    on delete cascade; 
    
alter table equipos
	add constraint tipo_equipo_fk foreign key (tipo_equipo)
    references tipo_equipo (tipo_equipo)
    on update cascade 
    on delete cascade; 







