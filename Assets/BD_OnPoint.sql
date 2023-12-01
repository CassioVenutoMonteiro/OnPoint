drop database OnPoint;
create database OnPoint;
use OnPoint;

create table usuario(
id_usuario int unsigned auto_increment not null primary key,
nome varchar(30) not null,
email varchar(30) not null,
senha varchar(25) not null,
arquivo varchar(50)
)engine=innodb;

select * from usuario;

create table empresa(
id_empresa int unsigned auto_increment not null primary key,
nome varchar(30) not null,
email varchar(30) not null,
senha varchar(25) not null
)engine=innodb;

create table roupa(
id_roupa int unsigned auto_increment not null primary key,
nome varchar(40) not null,
dt date not null,
descricao varchar(100) not null,
tipo varchar(25),
evento varchar(25),
cor varchar(25),
usuario_fk int unsigned not null,
foreign key (usuario_fk) references usuario(id_usuario)
)engine=innodb;

create table look(
id_look int unsigned auto_increment not null primary key,
nome varchar(40) not null,
dt date,
estilo varchar(25),
horario time,
autoria varchar(40) not null,
usuario_fk int unsigned not null,
foreign key (usuario_fk) references usuario(id_usuario)
)engine=innodb;

create table look_roupa(
id_usuario_fk int unsigned not null,
id_roupa_fk int unsigned not null,
id_look_fk int unsigned not null,
primary key (id_usuario_fk,id_roupa_fk,id_look_fk),
foreign key (id_usuario_fk) references usuario(id_usuario),
foreign key (id_roupa_fk) references roupa(id_roupa),
foreign key (id_look_fk) references look(id_look)
)engine=innodb;

create table ajuda(
id_ajuda int unsigned auto_increment not null primary key,
evento varchar(25),
dt date,
hora time,
estiolo varchar(25),
descricao varchar(150),
usuario_ajudado_fk int unsigned not null,
usuario_ajudante_fk int unsigned not null,
foreign key (usuario_ajudado_fk) references usuario(id_usuario),
foreign key (usuario_ajudante_fk) references usuario(id_usuario)
)engine=innodb;
















/*
delimiter //
create procedure insUsuario(in _nome varchar(40), in _email varchar(30), in _senha varchar(25))
begin
	declare id int;
    select id_usuario into id from usuario where nome = _nome or email = _email and senha = _senha;
    if(id is null)
		then
			insert into usuario values(null,_nome,_email,_senha);
		else
			select "usuario ja cadastrado";
		end if;
end //
delimiter ;

delimiter //
create procedure insEmpresa(in _nome varchar(40), in _email varchar(30), in _senha varchar(25))
begin
	declare id int;
    select id_empresa into id from empresa where nome = _nome or email = _email and senha = _senha;
    if(id is null)
		then
			insert into empresa values(null,_nome,_email,_senha);
		else
			select "empresa ja cadastrado";
		end if;
end //
delimiter ;
*/









