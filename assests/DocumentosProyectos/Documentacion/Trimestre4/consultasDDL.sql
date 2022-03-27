
create table horarios(
id_horario int not null auto_increment comment 'referente al id de la tabla',
cod_horario varchar(5) not null unique comment 'referente a tipo de hrario',
nombre_horario varchar(45) not null comment 'nombre horario'
)engine=InnoDB;

create table estado(
id_estado int not null auto_increment comment 'referente al id de la tabla',
cod_estado varchar(5) not null unique comment 'referente a estado',
nombre_estado varchar(45) not null comment 'nombre estado'
)engine=InnoDB;

create table actividad_economica(
id_actividad_economica int not null auto_increment comment 'referente al id de la tabla',
cod_actividad_economica varchar(5) not null unique comment 'referente a la actividad economica principal',
nombre_actividad_economica varchar(45) not null comment 'nombre actividad economica'
)engine=InnoDB;

create table agendamiento(
id_agendamiento int not null auto_increment comment 'referente a indice de la tabla',
primary key (id_agendamiento),
cod_agendamiento varchar(5) not null comment 'codigo unico de agendamiento',
fecha_agendamiento date not null comment 'referente a la fecha a realizarce el evento',
motivo_agendamiento varchar (45) comment ' evento agendado ',
cod_estado varchar(5) comment ' estado actual del evento ',
)engine=InnoDB;



ALTER TABLE agendamiento ADD CONSTRAINT cod_estado_agendamiento FOREIGN KEY (cod_estado) REFERENCES estado(cod_estado);

create table asesor_comercial(
id_asesor_comercial int not null AUTO_INCREMENT comment 'id index de tabla',
primary key (id_asesor_comercial),
cod_rol_asesor varchar(5) comment 'cod unico de asesor',
cod_proveedor varchar(5) comment 'cod unico de proveedor asociado'
cod_asesor VARCHAR(5) NOT NULL COMMENT 'cod identificativo para asesor',
cod_estado varchar(5) comment 'cod estado de proveedor '
)engine=InnoDB;

//creacion de llaves foraneas tabla asesor_comercial

ALTER TABLE asesor_comercial ADD CONSTRAINT cod_proveedor FOREIGN KEY (cod_proveedor) REFERENCES proveedores(cod_proveedor);
ALTER TABLE asesor_comercial ADD CONSTRAINT cod_rol_asesor FOREIGN KEY (cod_rol_asesor) REFERENCES roles(cod_rol);
ALTER TABLE asesor_comercial ADD CONSTRAINT cod_estado_asesor FOREIGN KEY (cod_estado_asesor) REFERENCES estado(cod_estado);


create table proveedores(
id_proveedores int not null AUTO_INCREMENT comment 'referente a index de tabla',
cod_proveedor varchar(5) not null comment ' codigo de identificacion unico del proveedor',
primary key (id_proveedores),
cod_tipo_documento_prov varchar(5) not null comment 'referente a tipo de documento',
numero_documento varchar(15) not null unique comment 'numero unico de identificacion del proveedor',
razonSocial varchar(60) not null comment ' nombre, razon social del proveedor ',
telefono varchar(15) not null comment ' telefono principal empresa',
departamento varchar (45) comment ' departamento de ubicacion del proveedor',
ciudad varchar(45) not null comment 'ciudad de ubicacion del proveedor',
direccion varchar(60) not null comment ' ubicacion principal',
cod_estado_proveedor varchar(5) not null comment 'estado actual del proveedor',
cod_asesor varchar(5) not null comment 'referente al asesor del cliente',
cod_agendamiento varchar(5) comment 'referente al ultimo evento agendado',
cod_actividad_economica varchar(5) not null comment ' actividad economica principal del proveedor',
cod_comentario varchar(5) comment 'referente a ultimo tema tratado con el asesor y o proveedor ',
id_convenio varchar(5) not null  comment 'referente al tipo de vinculo comercial'
)engine=InnoDB;

//creacion de llaves foraneas tabla proveedores

ALTER TABLE proveedores ADD CONSTRAINT cod_asesor FOREIGN KEY (cod_asesor) REFERENCES asesor_comercial(cod_asesor);
ALTER TABLE proveedores ADD CONSTRAINT cod_estado_proveedor FOREIGN KEY (cod_estado_proveedor) REFERENCES estado(cod_estado);
ALTER TABLE proveedores ADD CONSTRAINT cod_agendamiento FOREIGN KEY (cod_agendamiento) REFERENCES agendamiento(cod_agendamiento);
ALTER TABLE proveedores ADD CONSTRAINT cod_actividad_economica FOREIGN KEY (cod_actividad_economica) REFERENCES actividad_economica(cod_actividad_economica));
ALTER TABLE proveedores ADD CONSTRAINT cod_comentario FOREIGN KEY (cod_comentario) REFERENCES comentarios(cod_comentario);
ALTER TABLE proveedores ADD CONSTRAINT id_convenio FOREIGN KEY (id_convenio) REFERENCES tipo_convenio(cod_convenio);
ALTER TABLE proveedores ADD CONSTRAINT cod_tipo_documento_prov FOREIGN KEY (cod_tipo_documento_prov) REFERENCES tipo_documento(cod_tipo_documento);
ALTER TABLE proveedores DROP INDEX cod_asesor, ADD UNIQUE cod_asesor (cod_asesor) USING BTREE;

create table respuesta(
id_respuesta int not null AUTO_INCREMENT comment 'id index de tabla ',
primary key(id_respuesta),
cod_respuesta varchar(5) not null unique comment 'codigo de identificacion unico de la respuesta', 
fecha_respuesta date not null comment ' fecha respuesta a comentario ',
contenido_respuesta varchar(300) comment 'contenido de la respuesta',
)engine=InnoDB

create table comentarios(
id_comentario int not null AUTO_INCREMENT comment 'id index de tabla',
cod_comentario varchar(5) not null comment ' identificador comentario ', 
primary key (id_comentario), 
fecha_comentario date not null comment ' fecha en que se crea el comentario	 ', 
contenido_comentario varchar(350) not null comment 'informacion de requerimiento del proveedor',
cod_respuesta_comentario varchar(5) comment 'referente al id de respuesta llamado de tabla respuesta',
cod_estado_comentario not null comment ' referente a estado en que se encuentra el comentario', 
)engine=InnoDB;


ALTER TABLE comentarios ADD CONSTRAINT cod_respuesta_comentario FOREIGN KEY (cod_respuesta_comentario) REFERENCES respuesta(cod_respuesta);
ALTER TABLE comentarios ADD CONSTRAINT cod_estado_comentario FOREIGN KEY (cod_estado_comentario) REFERENCES estado(cod_estado);

create TABLE tipo_convenio(
id_tipo_convenio  int not null AUTO_INCREMENT COMMENT "id index de tabla",
PRIMARY key (id_tipo_convenio),
cod_convenio varchar(5) not null unique comment 'codigo unico de identificacion de convenio',
nombre_tipo_convenio varchar (45) not null COMMENT "referente a convenios con proveedor" 
)ENGINE=INNODB;

create TABLE tipo_documento(
id_tipo_documento int not null AUTO_INCREMENT comment 'id index de tabla'
cod_tipo_documento varchar(5) not null unique COMMENT "referente al codigo de los tipos de documento",
PRIMARY key (id_tipo_documento),
nombre_tipo_documento varchar (45) not null COMMENT "referente tipo de documento" 
)ENGINE=INNODB;

create TABLE roles(
id_rol int not null AUTO_INCREMENT COMMENT "referente al identificador de la tabla",
PRIMARY key (id_rol),
cod_rol  varchar(5) not null unique comment 'codigo unico de rol',
nombre varchar (45) not null COMMENT "referente a tipo de rol del usuario" 
)ENGINE=INNODB;

create table usuarios(
id_usuarios int not null comment ' codigo index de la tabla',
primary key (id_usuarios),
cod_rol_usuario varchar(5) not null comment 'codigo de identificacion tipo de rol usuario, traido de tabla rol',
cod_tipo_documento_usuario varchar(5) not null comment 'codigo identificativo de tipos de documento de usuario',
id_horario varchar(5) not null comment 'id identificador de horarios laborales para usuario',
cod_estado_usuario varchar(5) not null comment 'codigo identificativo de estado actual del usuario',
numero_documento varchar(15) not null unique comment 'numero unico de identificacion de usuarios',
nombre varchar(45) not null comment ' nombre de usuario ',
apellido varchar(45) not null comment ' apellido usuario ',
email varchar(100) not null comment ' correo principal de usuario',
telefono varchar(14) not null comment 'numero principal de contacto',
contrasenia varchar(45),
preguntas_seguridad_1 varchar(20)  not null comment ' respuesta pregunta de verificacion de identidad',
preguntas_seguridad_2 varchar(20)  not null comment ' respuesta pregunta de verificacion de identidad',
preguntas_seguridad_3 varchar(20)  not null comment ' respuesta pregunta de verificacion de identidad',
termino_condiciones int(1) not null comment 'aceptacion  terminos y condiciones',
tratamiento_datos int(1) not null comment 'aceptacion  tratamiento de datos',
)engine=InnoDB;



ALTER TABLE usuarios ADD CONSTRAINT cod_tipo_documento_usuario FOREIGN KEY (cod_tipo_documento_usuario) REFERENCES tipo_documento(cod_tipo_documento);
ALTER TABLE usuarios ADD CONSTRAINT id_horario FOREIGN KEY (id_horario) REFERENCES horarios(cod_horario);
ALTER TABLE usuarios ADD CONSTRAINT cod_estado_usuario FOREIGN KEY (cod_estado_usuario) REFERENCES estado(cod_estado);
ALTER TABLE usuarios ADD CONSTRAINT cod_actividad_economica FOREIGN KEY (cod_actividad_economica) REFERENCES actividad_economica(cod_actividad_economica));
alter TABLE usuarios add c_asesor varchar(5);

ALTER TABLE `usuarios` CHANGE `contraseña` `contrasenia` VARCHAR(60) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL;
ALTER TABLE `tipo_documento` CHANGE `id_tipo_documento` `id_tipo_documento` INT NOT NULL AUTO_INCREMENT;
ALTER TABLE `roles` CHANGE `id_rol` `id_rol` INT NOT NULL AUTO_INCREMENT;

