CREATE DATABASE IF NOT EXISTS base_datos_dss;

use base_datos_dss;

CREATE TABLE Gasto (
  Identificador INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  NombreOperacion VARCHAR(20)  NOT NULL  ,
  Coste DOUBLE  NOT NULL    ,
PRIMARY KEY(Identificador));



CREATE TABLE Proveedor (
  NIF VARCHAR(9)  NOT NULL  ,
  Nombre VARCHAR(20)  NOT NULL  ,
  Apellidos VARCHAR(255)  NULL    ,
  Direccion VARCHAR(255)  NOT NULL ,
  Telefono VARCHAR(9) NOT NULL ,
  Email VARCHAR(255) NOT NULL ,
PRIMARY KEY(NIF));



CREATE TABLE Ingreso (
  Identificador INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  NombreOperacion VARCHAR(20)  NOT NULL  ,
  Coste DOUBLE  NOT NULL    ,
PRIMARY KEY(Identificador));



CREATE TABLE Servicio (
  idServicio INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Nombre VARCHAR(45)  NOT NULL  ,
  Descripcion VARCHAR(255)  NULL    ,
PRIMARY KEY(idServicio));



CREATE TABLE Usuario (
  NIF VARCHAR(9)  NOT NULL  ,
  Nombre VARCHAR(20)  NOT NULL  ,
  Apellidos VARCHAR(255) BINARY  NULL  ,
  NvAcceso VARCHAR(20)  NOT NULL DEFAULT "Minimo" ,
  Pass VARCHAR(128)  NOT NULL    ,
  Direccion VARCHAR(255)  NOT NULL ,
  Telefono VARCHAR(9) NOT NULL ,
  Email VARCHAR(255) NOT NULL ,
PRIMARY KEY(NIF));



CREATE TABLE Calendario_Eventos (
  Fecha DATE  NOT NULL  ,
  Evento VARCHAR(20)  NOT NULL  ,
  Descripcion VARCHAR(255)  NULL    ,
PRIMARY KEY(Fecha, Evento));



CREATE TABLE Cliente (
  NIF VARCHAR(9)  NOT NULL  ,
  Nombre VARCHAR(20)  NOT NULL  ,
  Apellidos VARCHAR(255)  NULL    ,
  Direccion VARCHAR(255)  NOT NULL ,
  Telefono VARCHAR(9) NOT NULL ,
  Email VARCHAR(255) NOT NULL ,
PRIMARY KEY(NIF));



CREATE TABLE Informes_gasto (
  Gasto_Identificador INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  RutaFichero VARCHAR(255)  NOT NULL  ,
  Descripcion VARCHAR(255)  NULL  ,
  Fecha DATE  NOT NULL  ,
  Tipo VARCHAR(20)  NOT NULL    ,
PRIMARY KEY(Gasto_Identificador)  ,
INDEX Informes_FKIndex1(Gasto_Identificador),
  FOREIGN KEY(Gasto_Identificador)
    REFERENCES Gasto(Identificador)
      ON DELETE CASCADE
      ON UPDATE CASCADE);



CREATE TABLE Informes_ingreso (
  Ingreso_Identificador INTEGER UNSIGNED  NOT NULL  ,
  RutaFichero VARCHAR(255)  NOT NULL  ,
  Descripcion VARCHAR(255)  NULL  ,
  Fecha DATE  NOT NULL  ,
  Tipo VARCHAR(20)  NOT NULL    ,
PRIMARY KEY(Ingreso_Identificador)  ,
INDEX Informes_ingreso_FKIndex1(Ingreso_Identificador),
  FOREIGN KEY(Ingreso_Identificador)
    REFERENCES Ingreso(Identificador)
      ON DELETE CASCADE
      ON UPDATE CASCADE);



CREATE TABLE Reunion (
  Usuario_NIF VARCHAR(9)  NOT NULL  ,
  Calendario_Eventos_Fecha DATE  NOT NULL  ,
  Calendario_Eventos_Evento VARCHAR(20)  NOT NULL    ,
PRIMARY KEY(Usuario_NIF, Calendario_Eventos_Fecha, Calendario_Eventos_Evento)  ,
INDEX Usuario_has_Calendario_FKIndex1(Usuario_NIF)  ,
INDEX Usuario_has_Calendario_FKIndex2(Calendario_Eventos_Fecha, Calendario_Eventos_Evento),
  FOREIGN KEY(Usuario_NIF)
    REFERENCES Usuario(NIF)
      ON DELETE CASCADE
      ON UPDATE CASCADE,
  FOREIGN KEY(Calendario_Eventos_Fecha, Calendario_Eventos_Evento)
    REFERENCES Calendario_Eventos(Fecha, Evento)
      ON DELETE CASCADE
      ON UPDATE CASCADE);



CREATE TABLE Pedido (
  Identificador INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Proveedor_NIF VARCHAR(9)  NOT NULL  ,
  Cliente_NIF VARCHAR(9)  NOT NULL    ,
PRIMARY KEY(Identificador)  ,
INDEX Pedido_FKIndex1(Cliente_NIF)  ,
INDEX Pedido_FKIndex2(Proveedor_NIF),
  FOREIGN KEY(Cliente_NIF)
    REFERENCES Cliente(NIF)
      ON DELETE CASCADE
      ON UPDATE CASCADE,
  FOREIGN KEY(Proveedor_NIF)
    REFERENCES Proveedor(NIF)
      ON DELETE CASCADE
      ON UPDATE CASCADE);



CREATE TABLE LineaServicio (
  idLineaServicio INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Servicio_idServicio INTEGER UNSIGNED  NOT NULL  ,
  Pedido_Identificador INTEGER UNSIGNED  NOT NULL    ,
PRIMARY KEY(idLineaServicio)  ,
INDEX LineaServicio_FKIndex1(Servicio_idServicio)  ,
INDEX LineaServicio_FKIndex2(Pedido_Identificador),
  FOREIGN KEY(Servicio_idServicio)
    REFERENCES Servicio(idServicio)
      ON DELETE CASCADE
      ON UPDATE CASCADE,
  FOREIGN KEY(Pedido_Identificador)
    REFERENCES Pedido(Identificador)
      ON DELETE CASCADE
      ON UPDATE CASCADE);



CREATE TABLE Presupuesto (
  idPresupuesto INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Pedido_Identificador INTEGER UNSIGNED  NOT NULL    ,
PRIMARY KEY(idPresupuesto)  ,
INDEX Presupuesto_FKIndex1(Pedido_Identificador),
  FOREIGN KEY(Pedido_Identificador)
    REFERENCES Pedido(Identificador)
      ON DELETE CASCADE
      ON UPDATE CASCADE);



CREATE TABLE Informes_pedido (
  Pedido_Identificador INTEGER UNSIGNED  NOT NULL  ,
  RutaFichero VARCHAR(255)  NOT NULL  ,
  Descripcion VARCHAR(255)  NULL  ,
  Fecha DATE  NOT NULL  ,
  Tipo VARCHAR(20)  NOT NULL    ,
PRIMARY KEY(Pedido_Identificador)  ,
INDEX Informes_pedido_FKIndex1(Pedido_Identificador),
  FOREIGN KEY(Pedido_Identificador)
    REFERENCES Pedido(Identificador)
      ON DELETE CASCADE
      ON UPDATE CASCADE);



CREATE TABLE Albaran (
  idAlbaran INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Pedido_Identificador INTEGER UNSIGNED  NOT NULL    ,
PRIMARY KEY(idAlbaran)  ,
INDEX Albaran_FKIndex3(Pedido_Identificador),
  FOREIGN KEY(Pedido_Identificador)
    REFERENCES Pedido(Identificador)
      ON DELETE CASCADE
      ON UPDATE CASCADE);



CREATE TABLE Factura (
  idFactura INTEGER UNSIGNED  NOT NULL   AUTO_INCREMENT,
  Pedido_Identificador INTEGER UNSIGNED  NOT NULL    ,
PRIMARY KEY(idFactura)  ,
INDEX Factura_FKIndex1(Pedido_Identificador),
  FOREIGN KEY(Pedido_Identificador)
    REFERENCES Pedido(Identificador)
      ON DELETE CASCADE
      ON UPDATE CASCADE);



CREATE TABLE Informes_presupuesto (
  Presupuesto_idPresupuesto INTEGER UNSIGNED  NOT NULL  ,
  RutaFichero VARCHAR(255)  NOT NULL  ,
  Descripcion VARCHAR(255)  NULL  ,
  Fecha DATE  NOT NULL  ,
  Tipo VARCHAR(20)  NOT NULL    ,
PRIMARY KEY(Presupuesto_idPresupuesto)  ,
INDEX Informes_presupuesto_FKIndex1(Presupuesto_idPresupuesto),
  FOREIGN KEY(Presupuesto_idPresupuesto)
    REFERENCES Presupuesto(idPresupuesto)
      ON DELETE CASCADE
      ON UPDATE CASCADE);



CREATE TABLE Informes_albaran (
  Albaran_idAlbaran INTEGER UNSIGNED  NOT NULL  ,
  RutaFichero VARCHAR(255)  NOT NULL  ,
  Descripcion VARCHAR(255)  NULL  ,
  Fecha DATE  NOT NULL  ,
  Tipo VARCHAR(20)  NOT NULL    ,
PRIMARY KEY(Albaran_idAlbaran)  ,
INDEX Informes_albaran_FKIndex1(Albaran_idAlbaran),
  FOREIGN KEY(Albaran_idAlbaran)
    REFERENCES Albaran(idAlbaran)
      ON DELETE CASCADE
      ON UPDATE CASCADE);



CREATE TABLE Informes_factura (
  Factura_idFactura INTEGER UNSIGNED  NOT NULL  ,
  RutaFichero VARCHAR(255)  NOT NULL  ,
  Descripcion VARCHAR(255)  NULL  ,
  Fecha DATE  NOT NULL  ,
  Tipo VARCHAR(20)  NOT NULL    ,
PRIMARY KEY(Factura_idFactura)  ,
INDEX Informes_factura_FKIndex1(Factura_idFactura),
  FOREIGN KEY(Factura_idFactura)
    REFERENCES Factura(idFactura)
      ON DELETE CASCADE
      ON UPDATE CASCADE);


GRANT USAGE ON *.* TO 'dss'@'localhost' IDENTIFIED BY PASSWORD '*DB5F1E56DEBB0C2C4377D1936FFC03D819AFC668';
GRANT ALL PRIVILEGES ON `base_datos_dss`.* TO 'dss'@'localhost' WITH GRANT OPTION;
INSERT INTO `base_datos_dss`.`Usuario` (`NIF`, `Nombre`, `Apellidos`, `NvAcceso`, `Pass`, `Direccion`, `Telefono`, `Email`) VALUES ('00000000A', 'root', NULL, 'Maximo', SHA1('root'), 'c/root', '666999666', 'root@root.org');
