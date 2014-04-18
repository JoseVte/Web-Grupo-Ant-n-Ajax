#Borrar todos los datos guardados
#Para evitar errores de cables ajenas
SET FOREIGN_KEY_CHECKS=0;
TRUNCATE Albaran;
TRUNCATE Calendario_Eventos;
TRUNCATE Cliente;
TRUNCATE Factura;
TRUNCATE Gasto;
TRUNCATE Informes_albaran;
TRUNCATE Informes_factura;
TRUNCATE Informes_gasto;
TRUNCATE Informes_ingreso;
TRUNCATE Informes_pedido;
TRUNCATE Informes_presupuesto;
TRUNCATE Ingreso;
TRUNCATE LineaServicio;
TRUNCATE Pedido;
TRUNCATE Presupuesto;
TRUNCATE Proveedor;
TRUNCATE Reunion;
TRUNCATE Servicio;
TRUNCATE Usuario;
SET FOREIGN_KEY_CHECKS=1;