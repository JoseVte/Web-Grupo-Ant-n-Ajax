#Borrar todas las tablas
#Para evitar errores de cables ajenas
SET FOREIGN_KEY_CHECKS=0;
DROP TABLE Albaran;
DROP TABLE Calendario_Eventos;
DROP TABLE Cliente;
DROP TABLE Factura;
DROP TABLE Gasto;
DROP TABLE Informes_albaran;
DROP TABLE Informes_factura;
DROP TABLE Informes_gasto;
DROP TABLE Informes_ingreso;
DROP TABLE Informes_pedido;
DROP TABLE Informes_presupuesto;
DROP TABLE Ingreso;
DROP TABLE LineaServicio;
DROP TABLE Pedido;
DROP TABLE Presupuesto;
DROP TABLE Proveedor;
DROP TABLE Reunion;
DROP TABLE Servicio;
DROP TABLE Usuario;
SET FOREIGN_KEY_CHECKS=1;