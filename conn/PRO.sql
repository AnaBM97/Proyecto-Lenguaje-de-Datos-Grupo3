--------------------------------------------------------
-- Archivo creado  - domingo-diciembre-11-2022   
--------------------------------------------------------
--------------------------------------------------------
--  DDL for Table ARTICULOS
--------------------------------------------------------

  CREATE TABLE "MARCELO"."ARTICULOS" 
   (	"ID_ARTICULO" NUMBER, 
	"PRECIO_UNIT" NUMBER, 
	"IMG_RUTA" VARCHAR2(150 BYTE), 
	"DESCRIPCION" VARCHAR2(200 BYTE), 
	"ID_TIPO" NUMBER
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table COMENTARIOS
--------------------------------------------------------

  CREATE TABLE "MARCELO"."COMENTARIOS" 
   (	"ID_COMENTARIO" NUMBER, 
	"DESCRIPCION" VARCHAR2(200 BYTE), 
	"FECHA" DATE
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table DET_FACTURA
--------------------------------------------------------

  CREATE TABLE "MARCELO"."DET_FACTURA" 
   (	"ID_DETA" NUMBER, 
	"ID_FACT" NUMBER, 
	"ID_ARTICULO" NUMBER, 
	"COSTO_UNIT" NUMBER, 
	"CANTIDAD_ARTICULOS" NUMBER, 
	"IMP" NUMBER, 
	"TOTAL" NUMBER
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table EMPLEADOS
--------------------------------------------------------

  CREATE TABLE "MARCELO"."EMPLEADOS" 
   (	"NOMBRE" VARCHAR2(50 BYTE), 
	"APELLDIO1" VARCHAR2(50 BYTE), 
	"APELLIDO2" VARCHAR2(50 BYTE), 
	"MONTO" NUMBER(10,0), 
	"EMPRESA" VARCHAR2(10 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table ENC_FACTURA
--------------------------------------------------------

  CREATE TABLE "MARCELO"."ENC_FACTURA" 
   (	"ID_FAC" NUMBER, 
	"ID_USUARIO" NUMBER, 
	"FECHA" DATE, 
	"ID_SESSION" VARCHAR2(200 BYTE), 
	"ESTADO" VARCHAR2(1 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table LOG_ERROR
--------------------------------------------------------

  CREATE TABLE "MARCELO"."LOG_ERROR" 
   (	"ID_LOG" NUMBER, 
	"FECHA" TIMESTAMP (6) DEFAULT SYSDATE, 
	"MSGERROR" VARCHAR2(2000 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table ROLES
--------------------------------------------------------

  CREATE TABLE "MARCELO"."ROLES" 
   (	"ID_ROL" NUMBER, 
	"ROL" VARCHAR2(50 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table TBEMPLEADOS
--------------------------------------------------------

  CREATE TABLE "MARCELO"."TBEMPLEADOS" 
   (	"VCEDULA" VARCHAR2(100 BYTE), 
	"VNOMBRE" VARCHAR2(100 BYTE), 
	"VAPELLIDO1" VARCHAR2(100 BYTE), 
	"VAPELLIDO2" VARCHAR2(100 BYTE), 
	"VSALARIO" NUMBER(5,0), 
	"VDEPARTAMENTO" NUMBER(5,0), 
	"CÓDIGO" NUMBER(10,0)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table TIPOS_ARTICULO
--------------------------------------------------------

  CREATE TABLE "MARCELO"."TIPOS_ARTICULO" 
   (	"ID_TIPO" NUMBER, 
	"TIPO" VARCHAR2(50 BYTE)
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Table USUARIOS
--------------------------------------------------------

  CREATE TABLE "MARCELO"."USUARIOS" 
   (	"ID_USUARIO" NUMBER, 
	"USU" VARCHAR2(20 BYTE), 
	"PASS" VARCHAR2(20 BYTE), 
	"NOMBRE" VARCHAR2(20 BYTE), 
	"APELL1" VARCHAR2(20 BYTE), 
	"APELL2" VARCHAR2(20 BYTE), 
	"CORREO" VARCHAR2(100 BYTE), 
	"TELEFONO" VARCHAR2(20 BYTE), 
	"DIRECCION" VARCHAR2(20 BYTE), 
	"ROL" NUMBER
   ) SEGMENT CREATION IMMEDIATE 
  PCTFREE 10 PCTUSED 40 INITRANS 1 MAXTRANS 255 
 NOCOMPRESS LOGGING
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
REM INSERTING into MARCELO.ARTICULOS
SET DEFINE OFF;
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('27','13000','imagenes\caf1.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('28','2400','imagenes\caf2.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('13','5000','imagenes\caf3.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('12','1000','imagenes\caf4.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('11','465','imagenes\caf5.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('10','550','imagenes\caf6.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('9','4100','imagenes\caf7.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('8','2300','imagenes\caf8.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('7','750','imagenes\caf9.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('6','163','imagenes\caf10.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('5','168','imagenes\caf11.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('4','164','imagenes\caf12.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('3','148','imagenes\caf13.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('2','147','imagenes\caf14.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('31','145','imagenes\caf15.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('30','2000','imagenes\caf16.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('29','163','imagenes\caf17.jpg','pc','1');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('14','199','imagenes\acom1.jpg','peri','2');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('26','1000','imagenes\acom2.jpg','peri','2');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('16','1305','imagenes\acom3.jpg','peri','2');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('17','2650','imagenes\acom4.jpg','peri','2');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('18','800','imagenes\acom5.jpg','peri','2');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('19','900','imagenes\acom6.jpg','peri','2');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('20','100','imagenes\acom7.jpg','peri','2');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('21','50','imagenes\acom8.jpg','peri','2');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('22','566','imagenes\acom9.jpg','peri','2');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('15','4700','imagenes\acom10.jpg','peri','2');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('23','5850','imagenes\acom11.jpg','peri','2');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('24','1110','imagenes\acom12.jpg','peri','2');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('25','1400','imagenes\acom13.jpg','peri','2');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('34','750','imagenes\comb1.jpg','usado','3');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('32','950','imagenes\comb2.jpg','usado','3');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('33','1456','imagenes\comb3.jpg','usado','3');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('35','1500','imagenes\comb4.jpg','usado','3');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('36','1400','imagenes\comb5.jpg','usado','3');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('37','1750','imagenes\comb6.jpg','usado','3');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('43','160','imagenes\almu1.jpg','monitor','4');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('40','100','imagenes\almu2.jpg','monitor','4');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('42','5','imagenes\almu3.jpg','monitor','4');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('41','850','imagenes\almu4.jpg','monitor','4');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('39','1556','imagenes\almu5.jpg','monitor','4');
Insert into MARCELO.ARTICULOS (ID_ARTICULO,PRECIO_UNIT,IMG_RUTA,DESCRIPCION,ID_TIPO) values ('38','1240','imagenes\almu6.jpg','monitor','4');
REM INSERTING into MARCELO.COMENTARIOS
SET DEFINE OFF;
Insert into MARCELO.COMENTARIOS (ID_COMENTARIO,DESCRIPCION,FECHA) values ('1','ojassssssxcvxcvcxvxxcvxvvx',to_date('6/6/22','fmDD/MM/RR'));
Insert into MARCELO.COMENTARIOS (ID_COMENTARIO,DESCRIPCION,FECHA) values ('6','el producto llego en mal estado',to_date('8/12/22','fmDD/MM/RR'));
Insert into MARCELO.COMENTARIOS (ID_COMENTARIO,DESCRIPCION,FECHA) values ('7','Esto es un test',to_date('8/12/22','fmDD/MM/RR'));
Insert into MARCELO.COMENTARIOS (ID_COMENTARIO,DESCRIPCION,FECHA) values ('5','todo muy bien ',to_date('22/8/22','fmDD/MM/RR'));
Insert into MARCELO.COMENTARIOS (ID_COMENTARIO,DESCRIPCION,FECHA) values ('8','holaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa',to_date('11/12/22','fmDD/MM/RR'));
Insert into MARCELO.COMENTARIOS (ID_COMENTARIO,DESCRIPCION,FECHA) values ('9','hola hola hola',to_date('11/12/22','fmDD/MM/RR'));
Insert into MARCELO.COMENTARIOS (ID_COMENTARIO,DESCRIPCION,FECHA) values ('10','excccccccccccasdcadvav',to_date('11/12/22','fmDD/MM/RR'));
Insert into MARCELO.COMENTARIOS (ID_COMENTARIO,DESCRIPCION,FECHA) values ('2',null,to_date('22/8/22','fmDD/MM/RR'));
Insert into MARCELO.COMENTARIOS (ID_COMENTARIO,DESCRIPCION,FECHA) values ('3','Todo muy bien en la plataforma',to_date('22/8/22','fmDD/MM/RR'));
Insert into MARCELO.COMENTARIOS (ID_COMENTARIO,DESCRIPCION,FECHA) values ('4','la compra muy bien',to_date('22/8/22','fmDD/MM/RR'));
REM INSERTING into MARCELO.DET_FACTURA
SET DEFINE OFF;
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('7','4','5','168','1','21,84','189,84');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('8','5','8','2300','2','598','5198');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('5','3','10','550','1','71,5','621,5');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('6','3','4','164','1','21,32','185,32');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('9','6','27','13000','1','1690','14690');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('10','7','32','950','1','123,5','1073,5');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('11','7','43','160','1','20,8','180,8');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('12','7','39','1556','1','202,28','1758,28');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('13','8','27','13000','2','3380','29380');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('14','9','27','13000','1','1690','14690');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('15','9','13','5000','1','650','5650');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('16','9','14','199','1','25,87','224,87');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('17','9','22','566','1','73,58','639,58');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('18','9','34','750','1','97,5','847,5');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('19','9','40','100','1','13','113');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('1','1','27','13000','1','1690','14690');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('2','1','10','13000','1','1690','14690');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('3','2','34','750','1','97,5','847,5');
Insert into MARCELO.DET_FACTURA (ID_DETA,ID_FACT,ID_ARTICULO,COSTO_UNIT,CANTIDAD_ARTICULOS,IMP,TOTAL) values ('4','2','32','950','1','123,5','1073,5');
REM INSERTING into MARCELO.EMPLEADOS
SET DEFINE OFF;
Insert into MARCELO.EMPLEADOS (NOMBRE,APELLDIO1,APELLIDO2,MONTO,EMPRESA) values ('Rafael','Calderon','guardia','500','BCCR');
Insert into MARCELO.EMPLEADOS (NOMBRE,APELLDIO1,APELLIDO2,MONTO,EMPRESA) values ('Carlos','Alvarado','guardia','500','BCCR');
Insert into MARCELO.EMPLEADOS (NOMBRE,APELLDIO1,APELLIDO2,MONTO,EMPRESA) values ('Oscar','Arias','Sanchez','500','BCCR');
REM INSERTING into MARCELO.ENC_FACTURA
SET DEFINE OFF;
Insert into MARCELO.ENC_FACTURA (ID_FAC,ID_USUARIO,FECHA,ID_SESSION,ESTADO) values ('4','1',to_date('8/12/22','fmDD/MM/RR'),'ixv8wLjR2Ao7ytOBeN4gzluZdcPECsUmG',null);
Insert into MARCELO.ENC_FACTURA (ID_FAC,ID_USUARIO,FECHA,ID_SESSION,ESTADO) values ('5','4',to_date('8/12/22','fmDD/MM/RR'),'ovFm9TSVrB6ygNI1R8fq5CbQpWJPw4eOt',null);
Insert into MARCELO.ENC_FACTURA (ID_FAC,ID_USUARIO,FECHA,ID_SESSION,ESTADO) values ('3','3',to_date('22/8/22','fmDD/MM/RR'),'EfNKDqtpbZj9uJnyAeVQkLg1v52sUPIzh',null);
Insert into MARCELO.ENC_FACTURA (ID_FAC,ID_USUARIO,FECHA,ID_SESSION,ESTADO) values ('6','2',to_date('11/12/22','fmDD/MM/RR'),'kLIHhoymxd4e2nFPYOK75SDvjRTfiz3pA',null);
Insert into MARCELO.ENC_FACTURA (ID_FAC,ID_USUARIO,FECHA,ID_SESSION,ESTADO) values ('7','2',to_date('11/12/22','fmDD/MM/RR'),'dwRx6Yo5nJctHjZ9aEufCzpLi7MkrPsNV',null);
Insert into MARCELO.ENC_FACTURA (ID_FAC,ID_USUARIO,FECHA,ID_SESSION,ESTADO) values ('8','2',to_date('11/12/22','fmDD/MM/RR'),'nycNx83qrmkftahETjdRZQUHGlOB5VoSC',null);
Insert into MARCELO.ENC_FACTURA (ID_FAC,ID_USUARIO,FECHA,ID_SESSION,ESTADO) values ('9','6',to_date('11/12/22','fmDD/MM/RR'),'SxgTY1pzE8A6PGLiK34yeZq2UwmXsoCQB',null);
Insert into MARCELO.ENC_FACTURA (ID_FAC,ID_USUARIO,FECHA,ID_SESSION,ESTADO) values ('1','1',to_date('22/8/22','fmDD/MM/RR'),'utF9RvJcnY4X6eAj5NCx2LUrMgaQ7sBwI',null);
Insert into MARCELO.ENC_FACTURA (ID_FAC,ID_USUARIO,FECHA,ID_SESSION,ESTADO) values ('2','1',to_date('22/8/22','fmDD/MM/RR'),'SBJnLap8QFXrqDH9t17dmjGVzR2Olo5Ki',null);
REM INSERTING into MARCELO.LOG_ERROR
SET DEFINE OFF;
Insert into MARCELO.LOG_ERROR (ID_LOG,FECHA,MSGERROR) values ('1',to_timestamp('20/5/22 02:28:39 PM','fmDD/MM/RR fmHH12:fmMI:SS AM'),'Error, login incorrecto, usuario = estrada123');
Insert into MARCELO.LOG_ERROR (ID_LOG,FECHA,MSGERROR) values ('5',to_timestamp('8/12/22 03:21:28 PM','fmDD/MM/RR fmHH12:fmMI:SS AM'),'Error, login incorrecto, usuario = mrojas');
Insert into MARCELO.LOG_ERROR (ID_LOG,FECHA,MSGERROR) values ('4',to_timestamp('22/8/22 06:18:45 PM','fmDD/MM/RR fmHH12:fmMI:SS AM'),'Error, login incorrecto, usuario = asas');
Insert into MARCELO.LOG_ERROR (ID_LOG,FECHA,MSGERROR) values ('6',to_timestamp('11/12/22 12:51:23 AM','fmDD/MM/RR fmHH12:fmMI:SS AM'),'Error, login incorrecto, usuario = eladio123');
Insert into MARCELO.LOG_ERROR (ID_LOG,FECHA,MSGERROR) values ('7',to_timestamp('11/12/22 12:51:29 AM','fmDD/MM/RR fmHH12:fmMI:SS AM'),'Error, login incorrecto, usuario = eladio123');
Insert into MARCELO.LOG_ERROR (ID_LOG,FECHA,MSGERROR) values ('2',to_timestamp('22/8/22 03:3:54 PM','fmDD/MM/RR fmHH12:fmMI:SS AM'),'Error, login incorrecto, usuario = sdsdds');
Insert into MARCELO.LOG_ERROR (ID_LOG,FECHA,MSGERROR) values ('3',to_timestamp('22/8/22 03:3:57 PM','fmDD/MM/RR fmHH12:fmMI:SS AM'),'Error, login incorrecto, usuario = estrada123');
REM INSERTING into MARCELO.ROLES
SET DEFINE OFF;
Insert into MARCELO.ROLES (ID_ROL,ROL) values ('1','1');
Insert into MARCELO.ROLES (ID_ROL,ROL) values ('2','2');
REM INSERTING into MARCELO.TBEMPLEADOS
SET DEFINE OFF;
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('107540213','Carlos','Ricardo','Benavides','5000','1','1');
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('307540212','Oscar ','Arias','Sanchez','25005','2','2');
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('106540217','Carlos','Alvarado','Torres','20000','3','3');
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('407540212','Ana','Rodriguez','Jimenez','10005','4','4');
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('107540211','Patricia','Ricardo','Benavides','5000','1','5');
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('307540222','Juan','Arias','Sanchez','25005','2','6');
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('106540237','Pedro','Alvarado','Torres','20000','1','7');
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('407540242','Luis','Rodriguez','Jimenez','10005','2','8');
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('107540253','Janneth','Ricardo','Benavides','5000','1','9');
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('307540262','Jorge','Arias','Sanchez','25005','2','10');
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('106540277','Shirley','Alvarado','Torres','20000','3','11');
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('407540282','Grace','Rodriguez','Jimenez','10005','3','12');
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('107540293','Darrell','Ricardo','Benavides','5000','3','13');
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('106542217','Jossell','Alvarado','Torres','20000','3','14');
Insert into MARCELO.TBEMPLEADOS (VCEDULA,VNOMBRE,VAPELLIDO1,VAPELLIDO2,VSALARIO,VDEPARTAMENTO,"CÓDIGO") values ('407543212','Cesar','Rodriguez','Jimenez','10005','3','15');
REM INSERTING into MARCELO.TIPOS_ARTICULO
SET DEFINE OFF;
Insert into MARCELO.TIPOS_ARTICULO (ID_TIPO,TIPO) values ('1','pc');
Insert into MARCELO.TIPOS_ARTICULO (ID_TIPO,TIPO) values ('2','usado');
Insert into MARCELO.TIPOS_ARTICULO (ID_TIPO,TIPO) values ('3','monitor');
Insert into MARCELO.TIPOS_ARTICULO (ID_TIPO,TIPO) values ('4','peri');
REM INSERTING into MARCELO.USUARIOS
SET DEFINE OFF;
Insert into MARCELO.USUARIOS (ID_USUARIO,USU,PASS,NOMBRE,APELL1,APELL2,CORREO,TELEFONO,DIRECCION,ROL) values ('4','ana.barrera','123','Ana','Barrera','Mendex','abarrera00353@ufide.ac.cr','86322147','San Jose','1');
Insert into MARCELO.USUARIOS (ID_USUARIO,USU,PASS,NOMBRE,APELL1,APELL2,CORREO,TELEFONO,DIRECCION,ROL) values ('1','mrojas123','123','marcelo','rojas','solano','marojas13@live.com.ar','84344582','cartago','1');
Insert into MARCELO.USUARIOS (ID_USUARIO,USU,PASS,NOMBRE,APELL1,APELL2,CORREO,TELEFONO,DIRECCION,ROL) values ('2','estrada123','123','Sebastian','Estrada','Solano','estrada13@live.com.ar','8745226','san jose','2');
Insert into MARCELO.USUARIOS (ID_USUARIO,USU,PASS,NOMBRE,APELL1,APELL2,CORREO,TELEFONO,DIRECCION,ROL) values ('3','ariveraromano','12345678','Armando','Romano','Rivera','arivera@hotmail.com','84344582','cartago','1');
Insert into MARCELO.USUARIOS (ID_USUARIO,USU,PASS,NOMBRE,APELL1,APELL2,CORREO,TELEFONO,DIRECCION,ROL) values ('5','eladio123','123','Eladio','Carrion','PR','eladio@gmail.com','8484848484','PR','1');
Insert into MARCELO.USUARIOS (ID_USUARIO,USU,PASS,NOMBRE,APELL1,APELL2,CORREO,TELEFONO,DIRECCION,ROL) values ('6','test1231','123','test','test','test','test@gmail.com','84848484','san jose','1');
--------------------------------------------------------
--  DDL for Index ARTICULOS_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "MARCELO"."ARTICULOS_PK" ON "MARCELO"."ARTICULOS" ("ID_ARTICULO") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index DET_FACTURA_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "MARCELO"."DET_FACTURA_PK" ON "MARCELO"."DET_FACTURA" ("ID_DETA") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index ENC_FACTURA_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "MARCELO"."ENC_FACTURA_PK" ON "MARCELO"."ENC_FACTURA" ("ID_FAC") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index LOG_ERROR_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "MARCELO"."LOG_ERROR_PK" ON "MARCELO"."LOG_ERROR" ("ID_LOG") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index PK_CÓDIGO
--------------------------------------------------------

  CREATE UNIQUE INDEX "MARCELO"."PK_CÓDIGO" ON "MARCELO"."TBEMPLEADOS" ("CÓDIGO") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index ROLES_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "MARCELO"."ROLES_PK" ON "MARCELO"."ROLES" ("ID_ROL") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index TIPOS_ARTICULO_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "MARCELO"."TIPOS_ARTICULO_PK" ON "MARCELO"."TIPOS_ARTICULO" ("ID_TIPO") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Index USUARIOS_PK
--------------------------------------------------------

  CREATE UNIQUE INDEX "MARCELO"."USUARIOS_PK" ON "MARCELO"."USUARIOS" ("ID_USUARIO") 
  PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS" ;
--------------------------------------------------------
--  DDL for Trigger TR_COMENTARIOS
--------------------------------------------------------

  CREATE OR REPLACE NONEDITIONABLE TRIGGER "MARCELO"."TR_COMENTARIOS" 
BEFORE INSERT OR UPDATE OR DELETE ON COMENTARIOS
FOR EACH ROW
DECLARE
CONSECUTIVO NUMBER := -1;
TABLA VARCHAR2(45) := 'COMENTARIOS';
ACCIONES VARCHAR2(45) := '';

BEGIN
     IF INSERTING THEN
            SELECT
                   NVL(MAX(ID_COMENTARIO)+1,1) 
             INTO  :NEW.ID_COMENTARIO
            FROM MARCELO.COMENTARIOS;
      END IF;
END;
/
ALTER TRIGGER "MARCELO"."TR_COMENTARIOS" ENABLE;
--------------------------------------------------------
--  DDL for Trigger TR_DET_FACTURA
--------------------------------------------------------

  CREATE OR REPLACE NONEDITIONABLE TRIGGER "MARCELO"."TR_DET_FACTURA" 
BEFORE INSERT OR UPDATE OR DELETE ON DET_FACTURA
FOR EACH ROW
DECLARE
CONSECUTIVO NUMBER := -1;
TABLA VARCHAR2(45) := 'DET_FACTURA';
ACCIONES VARCHAR2(45) := '';

BEGIN
     IF INSERTING THEN
            SELECT
                   NVL(MAX(ID_DETA)+1,1) 
             INTO  :NEW.ID_DETA
            FROM MARCELO.DET_FACTURA;
      END IF;
END;

/
ALTER TRIGGER "MARCELO"."TR_DET_FACTURA" ENABLE;
--------------------------------------------------------
--  DDL for Trigger TR_ENC_FACTURA
--------------------------------------------------------

  CREATE OR REPLACE NONEDITIONABLE TRIGGER "MARCELO"."TR_ENC_FACTURA" 
BEFORE INSERT OR UPDATE OR DELETE ON ENC_FACTURA
FOR EACH ROW
DECLARE
CONSECUTIVO NUMBER := -1;
TABLA VARCHAR2(45) := 'ENC_FACTURA';
ACCIONES VARCHAR2(45) := '';

BEGIN
     IF INSERTING THEN
            SELECT
                   NVL(MAX(ID_FAC)+1,1) 
             INTO  :NEW.ID_FAC
            FROM MARCELO.ENC_FACTURA;
      END IF;
END;

/
ALTER TRIGGER "MARCELO"."TR_ENC_FACTURA" ENABLE;
--------------------------------------------------------
--  DDL for Trigger TR_LOG_ERROR
--------------------------------------------------------

  CREATE OR REPLACE NONEDITIONABLE TRIGGER "MARCELO"."TR_LOG_ERROR" 
BEFORE INSERT OR UPDATE OR DELETE ON LOG_ERROR
FOR EACH ROW
DECLARE
CONSECUTIVO NUMBER := -1;
TABLA VARCHAR2(45) := 'LOG_ERROR';
ACCIONES VARCHAR2(45) := '';

BEGIN
     IF INSERTING THEN
            SELECT
                   NVL(MAX(ID_LOG)+1,1) 
             INTO  :NEW.ID_LOG
            FROM MARCELO.LOG_ERROR;
      END IF;
END;
/
ALTER TRIGGER "MARCELO"."TR_LOG_ERROR" ENABLE;
--------------------------------------------------------
--  DDL for Trigger TR_ROLES
--------------------------------------------------------

  CREATE OR REPLACE NONEDITIONABLE TRIGGER "MARCELO"."TR_ROLES" 
BEFORE INSERT OR UPDATE OR DELETE ON ROLES
FOR EACH ROW
DECLARE
CONSECUTIVO NUMBER := -1;
TABLA VARCHAR2(45) := 'ROLES';
ACCIONES VARCHAR2(45) := '';

BEGIN
     IF INSERTING THEN
            SELECT
                   NVL(MAX(ID_ROL)+1,1) 
             INTO  :NEW.ID_ROL
            FROM MARCELO.ROLES;
      END IF;
END;

/
ALTER TRIGGER "MARCELO"."TR_ROLES" ENABLE;
--------------------------------------------------------
--  DDL for Trigger TR_TIPOS_ARTICULO
--------------------------------------------------------

  CREATE OR REPLACE NONEDITIONABLE TRIGGER "MARCELO"."TR_TIPOS_ARTICULO" 
BEFORE INSERT OR UPDATE OR DELETE ON TIPOS_ARTICULO
FOR EACH ROW
DECLARE
CONSECUTIVO NUMBER := -1;
TABLA VARCHAR2(45) := 'TIPOS_ARTICULO';
ACCIONES VARCHAR2(45) := '';

BEGIN
     IF INSERTING THEN
            SELECT
                   NVL(MAX(ID_TIPO)+1,1) 
             INTO  :NEW.ID_TIPO
            FROM MARCELO.TIPOS_ARTICULO;
      END IF;
END;

/
ALTER TRIGGER "MARCELO"."TR_TIPOS_ARTICULO" ENABLE;
--------------------------------------------------------
--  DDL for Trigger TR_USUARIOS
--------------------------------------------------------

  CREATE OR REPLACE NONEDITIONABLE TRIGGER "MARCELO"."TR_USUARIOS" 
BEFORE INSERT OR UPDATE OR DELETE ON USUARIOS
FOR EACH ROW
DECLARE
CONSECUTIVO NUMBER := -1;
TABLA VARCHAR2(45) := 'USUARIOS';
ACCIONES VARCHAR2(45) := '';

BEGIN
     IF INSERTING THEN
            SELECT
                   NVL(MAX(ID_USUARIO)+1,1) 
             INTO  :NEW.ID_USUARIO
            FROM MARCELO.USUARIOS;
      END IF;
END;

/
ALTER TRIGGER "MARCELO"."TR_USUARIOS" ENABLE;
--------------------------------------------------------
--  DDL for Procedure PRD_ALMACENAR_COMENTARIOS
--------------------------------------------------------
set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "MARCELO"."PRD_ALMACENAR_COMENTARIOS" ( PDESCRICION IN VARCHAR2)
AS
BEGIN


    insert into comentarios(descripcion,fecha) values(PDESCRICION,TRUNC(SYSDATE));

    COMMIT;

EXCEPTION
WHEN OTHERS THEN
Raise_Application_Error (-20343, 'Error detectado..');
END;


/
--------------------------------------------------------
--  DDL for Procedure PRDBUSCARIDFACTURA
--------------------------------------------------------
set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "MARCELO"."PRDBUSCARIDFACTURA" ( PIDFACTURA IN VARCHAR2, DATOS OUT SYS_REFCURSOR)
AS
BEGIN
    OPEN DATOS FOR SELECT
    id_fac,
    id_usuario,
    fecha,
    id_session,
    estado
FROM
    enc_factura WHERE id_session = PIDFACTURA;

    EXCEPTION
WHEN OTHERS THEN
Raise_Application_Error (-20343, 'Error detectado..');
END;


/
--------------------------------------------------------
--  DDL for Procedure PRD_GET_DETALLE_PRECIO_ARTICULO
--------------------------------------------------------
set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "MARCELO"."PRD_GET_DETALLE_PRECIO_ARTICULO" ( PIDARTICULO IN NUMBER, DATOS OUT SYS_REFCURSOR)
AS
BEGIN
    OPEN DATOS FOR 

    SELECT
    id_articulo,
    precio_unit,
    img_ruta,
    descripcion,
    id_tipo
FROM
    articulos
    WHERE id_articulo = PIDARTICULO;

EXCEPTION
WHEN OTHERS THEN
Raise_Application_Error (-20343, 'Error detectado..');    
END;

/
--------------------------------------------------------
--  DDL for Procedure PRD_GET_FACTURA_FINAL
--------------------------------------------------------
set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "MARCELO"."PRD_GET_FACTURA_FINAL" ( PIDFACTURA IN NUMBER, DATOS OUT SYS_REFCURSOR)
AS
BEGIN
    OPEN DATOS FOR 

 select  df.id_deta, df.id_fact, df.id_articulo, df.costo_unit, df.cantidad_articulos, df.imp, df.total ,a.descripcion
 from det_factura df,articulos a
 where df.id_articulo = a.id_articulo
 and df.id_fact=PIDFACTURA;

EXCEPTION
WHEN OTHERS THEN
Raise_Application_Error (-20343, 'Error detectado..');
END;

/
--------------------------------------------------------
--  DDL for Procedure PRD_GET_MONITOR
--------------------------------------------------------
set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "MARCELO"."PRD_GET_MONITOR" ( DATOS OUT SYS_REFCURSOR)
AS
BEGIN
    OPEN DATOS FOR 

select id_articulo ,precio_unit,img_ruta,descripcion 
from articulos
where id_tipo = 4;

EXCEPTION
WHEN OTHERS THEN
Raise_Application_Error (-20343, 'Error detectado..');
END;

/
--------------------------------------------------------
--  DDL for Procedure PRD_GET_PERIFERICOS
--------------------------------------------------------
set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "MARCELO"."PRD_GET_PERIFERICOS" ( DATOS OUT SYS_REFCURSOR)
AS
BEGIN
    OPEN DATOS FOR 

select id_articulo ,precio_unit,img_ruta,descripcion 
from articulos
where id_tipo = 2;

EXCEPTION
WHEN OTHERS THEN
Raise_Application_Error (-20343, 'Error detectado..');
END;

/
--------------------------------------------------------
--  DDL for Procedure PRD_GET_PERIFERICOS2
--------------------------------------------------------
set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "MARCELO"."PRD_GET_PERIFERICOS2" ( DATOS OUT SYS_REFCURSOR)
AS
BEGIN
    OPEN DATOS FOR 

select id_articulo ,precio_unit,img_ruta,descripcion 
from articulos
where id_tipo = 1;

EXCEPTION
WHEN OTHERS THEN
Raise_Application_Error (-20343, 'Error detectado..');
END;

/
--------------------------------------------------------
--  DDL for Procedure PRD_GET_USADOS
--------------------------------------------------------
set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "MARCELO"."PRD_GET_USADOS" ( DATOS OUT SYS_REFCURSOR)
AS
BEGIN
    OPEN DATOS FOR 

select id_articulo ,precio_unit,img_ruta,descripcion 
from articulos
where id_tipo = 3;

EXCEPTION
WHEN OTHERS THEN
Raise_Application_Error (-20343, 'Error detectado..');
END;

/
--------------------------------------------------------
--  DDL for Procedure PRD_INSERTAR_DET_FACT
--------------------------------------------------------
set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "MARCELO"."PRD_INSERTAR_DET_FACT" ( pid_art IN NUMBER,pid_fact IN NUMBER, pcantidad IN NUMBER)
AS

  vprecioUnit  NUMBER;
  vpreciototal NUMBER;
  vpreciofinal NUMBER;
  v_iva        NUMBER; 

    CURSOR CUR_DATA_PRECIOS IS
    select precio_unit 
    from articulos 
    where id_articulo = pid_art;


BEGIN

    FOR X IN CUR_DATA_PRECIOS LOOP
      vprecioUnit := X.precio_unit;
    END LOOP;

    vpreciototal :=  vprecioUnit*pcantidad;
    v_iva        :=  ((vpreciototal/100)*13);
    vpreciofinal := vpreciototal+v_iva;


    INSERT INTO det_factura(id_fact,id_articulo,costo_unit,cantidad_articulos,imp,total)
    VALUES(pid_fact,pid_art,vprecioUnit,pcantidad,v_iva,vpreciofinal);

EXCEPTION
WHEN OTHERS THEN
    Raise_Application_Error (-20343, 'Error detectado..');
COMMIT;



END;

/
--------------------------------------------------------
--  DDL for Procedure PRD_INSERTAR_ENC_FAC
--------------------------------------------------------
set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "MARCELO"."PRD_INSERTAR_ENC_FAC" ( pid_usuario IN NUMBER,pkey IN VARCHAR2)
AS


  
BEGIN


    insert into enc_factura(id_usuario,id_session,fecha) values(pid_usuario,pkey,TRUNC(sysdate));
    COMMIT;


EXCEPTION
WHEN OTHERS THEN
Raise_Application_Error (-20343, 'Error detectado..');
END;


/
--------------------------------------------------------
--  DDL for Procedure PRD_LOGIN
--------------------------------------------------------
set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "MARCELO"."PRD_LOGIN" ( pusuario IN varchar2,ppass IN varchar2,DATOS OUT SYS_REFCURSOR)
AS


  
BEGIN

    OPEN DATOS FOR 
        select id_usuario, usu,nombre, apell1, apell2, correo, telefono, direccion, rol
        from usuarios 
        where usu =pusuario
        and  pass =ppass;

EXCEPTION
WHEN OTHERS THEN
    Raise_Application_Error (-20343, 'Error detectado..');
END;


/
--------------------------------------------------------
--  DDL for Procedure PRD_REGISTRAR_CLIENTE
--------------------------------------------------------
set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "MARCELO"."PRD_REGISTRAR_CLIENTE" ( pusu IN varchar2,ppass IN varchar2,pnombre IN varchar2,papell1 IN varchar2,papell2 IN varchar2, pcorreo IN varchar2 ,ptel IN varchar2,pdir IN varchar2)
AS


  
BEGIN

 insert into usuarios(usu,pass,nombre,apell1,apell2,correo,telefono,direccion,rol)
    values(pusu ,ppass ,pnombre , papell1 , papell2 ,pcorreo ,ptel , pdir,1 );
commit;

EXCEPTION
WHEN OTHERS THEN
Raise_Application_Error (-20343, 'Error detectado..');
END;


/
--------------------------------------------------------
--  DDL for Procedure PRD_REGISTRAR_ERROR
--------------------------------------------------------
set define off;

  CREATE OR REPLACE NONEDITIONABLE PROCEDURE "MARCELO"."PRD_REGISTRAR_ERROR" ( perror IN varchar2)
AS

 query_text varchar2(1000) := 'insert into log_error(fecha,msgerror) values (:P_FECHA, :P_ERROR)';

BEGIN

    execute immediate query_text using sysdate, perror;

    commit;

EXCEPTION
WHEN OTHERS THEN
    Raise_Application_Error (-20343, 'Error detectado..');
END;

/
--------------------------------------------------------
--  DDL for Package PK_REPORTES
--------------------------------------------------------

  CREATE OR REPLACE NONEDITIONABLE PACKAGE "MARCELO"."PK_REPORTES" AS 

  /* TODO enter package declarations (types, exceptions, methods etc) here */ 
    PROCEDURE prd_rpt_ventas( DATOS OUT SYS_REFCURSOR);
    PROCEDURE rpt_clientes_reg( DATOS OUT SYS_REFCURSOR);
    PROCEDURE rpt_comentarios( DATOS OUT SYS_REFCURSOR);
    PROCEDURE rpt_errores( DATOS OUT SYS_REFCURSOR);
END PK_REPORTES;


/
--------------------------------------------------------
--  DDL for Package Body PK_REPORTES
--------------------------------------------------------

  CREATE OR REPLACE NONEDITIONABLE PACKAGE BODY "MARCELO"."PK_REPORTES" AS

  PROCEDURE prd_rpt_ventas( DATOS OUT SYS_REFCURSOR) AS
    BEGIN

        OPEN DATOS FOR 
         select  df.id_deta, df.id_fact, df.id_articulo, df.costo_unit, df.cantidad_articulos, df.imp, df.total ,a.descripcion
         from det_factura df,articulos a
         where df.id_articulo = a.id_articulo
          order by id_deta desc;
    EXCEPTION
    WHEN OTHERS THEN
        Raise_Application_Error (-20343, 'Error detectado..');
    END prd_rpt_ventas;

    ----------------------------------------------------------------------------------------------------------------
    PROCEDURE rpt_clientes_reg( DATOS OUT SYS_REFCURSOR)AS
    BEGIN

        OPEN DATOS FOR 
            select id_usuario, usu, pass, nombre, apell1, apell2, correo, telefono, direccion, rol from usuarios where rol=1;

    EXCEPTION
    WHEN OTHERS THEN
        Raise_Application_Error (-20343, 'Error detectado..');
    END rpt_clientes_reg;

    -----------------------------------------------------------------------------------------------------------------
    PROCEDURE rpt_comentarios( DATOS OUT SYS_REFCURSOR)AS
    BEGIN

        OPEN DATOS FOR 
            select descripcion, id_comentario, fecha from comentarios order by id_comentario desc; 

    EXCEPTION
    WHEN OTHERS THEN
        Raise_Application_Error (-20343, 'Error detectado..');
    END rpt_comentarios;
    ---------------------------------------------------------------------------------------------------------------------
    PROCEDURE rpt_errores( DATOS OUT SYS_REFCURSOR)AS
    BEGIN

        OPEN DATOS FOR 
            select id_log, fecha, msgerror from log_error order by id_log desc;

    EXCEPTION
    WHEN OTHERS THEN
        Raise_Application_Error (-20343, 'Error detectado..');
    END rpt_errores;

END PK_REPORTES;

/
--------------------------------------------------------
--  DDL for Function FN_BUSCA_ID_FACTURA
--------------------------------------------------------

  CREATE OR REPLACE NONEDITIONABLE FUNCTION "MARCELO"."FN_BUSCA_ID_FACTURA" 
(
  PSESION IN VARCHAR2 
) RETURN VARCHAR2 AS 

    VID_FACT VARCHAR2(100):='';
BEGIN

     SELECT
        id_fac
        INTO VID_FACT
    FROM
        enc_factura WHERE id_session = PSESION;

    RETURN VID_FACT;
EXCEPTION
WHEN OTHERS THEN
    Raise_Application_Error (-20343, 'Error detectado..');
END FN_BUSCA_ID_FACTURA;


/
--------------------------------------------------------
--  Constraints for Table LOG_ERROR
--------------------------------------------------------

  ALTER TABLE "MARCELO"."LOG_ERROR" MODIFY ("ID_LOG" NOT NULL ENABLE);
  ALTER TABLE "MARCELO"."LOG_ERROR" ADD CONSTRAINT "LOG_ERROR_PK" PRIMARY KEY ("ID_LOG")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table TBEMPLEADOS
--------------------------------------------------------

  ALTER TABLE "MARCELO"."TBEMPLEADOS" ADD CONSTRAINT "PK_CÓDIGO" PRIMARY KEY ("CÓDIGO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table ENC_FACTURA
--------------------------------------------------------

  ALTER TABLE "MARCELO"."ENC_FACTURA" MODIFY ("ID_FAC" NOT NULL ENABLE);
  ALTER TABLE "MARCELO"."ENC_FACTURA" ADD CONSTRAINT "ENC_FACTURA_PK" PRIMARY KEY ("ID_FAC")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table ARTICULOS
--------------------------------------------------------

  ALTER TABLE "MARCELO"."ARTICULOS" MODIFY ("ID_ARTICULO" NOT NULL ENABLE);
  ALTER TABLE "MARCELO"."ARTICULOS" ADD CONSTRAINT "ARTICULOS_PK" PRIMARY KEY ("ID_ARTICULO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table USUARIOS
--------------------------------------------------------

  ALTER TABLE "MARCELO"."USUARIOS" MODIFY ("ID_USUARIO" NOT NULL ENABLE);
  ALTER TABLE "MARCELO"."USUARIOS" ADD CONSTRAINT "USUARIOS_PK" PRIMARY KEY ("ID_USUARIO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table ROLES
--------------------------------------------------------

  ALTER TABLE "MARCELO"."ROLES" MODIFY ("ID_ROL" NOT NULL ENABLE);
  ALTER TABLE "MARCELO"."ROLES" ADD CONSTRAINT "ROLES_PK" PRIMARY KEY ("ID_ROL")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table DET_FACTURA
--------------------------------------------------------

  ALTER TABLE "MARCELO"."DET_FACTURA" MODIFY ("ID_DETA" NOT NULL ENABLE);
  ALTER TABLE "MARCELO"."DET_FACTURA" ADD CONSTRAINT "DET_FACTURA_PK" PRIMARY KEY ("ID_DETA")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
--------------------------------------------------------
--  Constraints for Table TIPOS_ARTICULO
--------------------------------------------------------

  ALTER TABLE "MARCELO"."TIPOS_ARTICULO" MODIFY ("ID_TIPO" NOT NULL ENABLE);
  ALTER TABLE "MARCELO"."TIPOS_ARTICULO" ADD CONSTRAINT "TIPOS_ARTICULO_PK" PRIMARY KEY ("ID_TIPO")
  USING INDEX PCTFREE 10 INITRANS 2 MAXTRANS 255 COMPUTE STATISTICS 
  STORAGE(INITIAL 65536 NEXT 1048576 MINEXTENTS 1 MAXEXTENTS 2147483645
  PCTINCREASE 0 FREELISTS 1 FREELIST GROUPS 1
  BUFFER_POOL DEFAULT FLASH_CACHE DEFAULT CELL_FLASH_CACHE DEFAULT)
  TABLESPACE "USERS"  ENABLE;
