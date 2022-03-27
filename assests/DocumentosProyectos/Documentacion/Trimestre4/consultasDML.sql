// insertar en tablas 

insert into proveedores.horarios values
(NULL, 'h-N/A','No Aplica'),
(NULL, 'h-Man','Mañana'),
(NULL, 'h-Tar','Tarde'),
(NULL, 'h-Rot','Rotativo')

insert into proveedores.tipo_convenio values
(NULL, 'C-N/A','No Aplica'),
(NULL, 'Cntd','Pago de contado'),
(NULL, 'Antcp','Pago anticipado'),
(NULL, 'Crdt','Pago credito')

insert into proveedores.tipo_documento values
(NULL, 'C-N/A','No Asignado'),
(NULL, 'CC','Cedula de Extrangeria'),
(NULL, 'RUT','Registro Unico Tributario'),
(NULL, 'NIT','Numero de Identificacion Tributaria')

insert into proveedores.estado values
(NULL, 'Act','Activo'),
(NULL, 'In-Ac','Inactivo'),
(NULL, 'Pen','Pendiente'),
(NULL, 'Agen','Cancelado'),
(NULL, 'Re-Ag','Reagendar')

insert into proveedores.roles values
(NULL, 'R-N/A','No Aplica'),
(NULL, 'Admin','Administrador'),
(NULL, 'Aux','Auxiliar'),
(NULL, 'Asr','Asesor')

INSERT INTO proveedores.usuarios VALUES
(null,"Admin",'CC','h-N/A','Act','2145784','Admin','Pruebas','admin@pruebas.com','5784784','1234','mama','motas','papa',1,1,'')
(null,"Aux",'CE','h-Tar','Act','147854','Auxiliar','Pruebas','aux@pruebas.com','5788784','1234','mama','motas','papa',1,1,'')
(null,"Asr",'CC','h-N/A','Act','2145784','Asesor','Pruebas','asesor@pruebas.com','7844784','1234','mama','motas','papa',1,1,'asr01')

INSERT INTO proveedores.proveedores VALUES 
(null,'tecno01','NIT','78974874-8','tecnology s.a.s','6855855','cundinamarca','Bogota','calle falsa 123 av siempre viva','Act','asr01','age01','T-01','com-1','Cntd')


SELECT * FROM proveedores,cod_estado_proveedor,id_convenio WHERE proveedores.id_convenio=tipo_convenio.cod_convenio and proveedores.cod_estado_proveedor=estado.cod_estado and proveedores.cod_proveedor=:buscarDato;

INSERT INTO usuarios(numDocument,nombre, apellido, email, phone, tyc, td, preguntaUno, preguntaDos, preguntaTres, password, rolCliente, horario, idDocument,estado) VALUES (:documento,:nombre,:apellido,:email,:telefono,:tyc,:td,:question1,:question2,:question3,:password,:rol,:horario,:tipoDoc,:status
