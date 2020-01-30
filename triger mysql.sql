DELIMITER //
CREATE TRIGGER tr_updStockIngresoAnular AFTER UPDATE ON ingresos FOR EACH ROW
BEGIN
  UPDATE medicamentos a
    JOIN detalle_ingresos di
      ON di.idmedicamento = a.id
     AND di.idingreso = new.id
     set a.stock = a.stock - di.cantidad;
end;
//
DELIMITER ;


DELIMITER //
CREATE TRIGGER tr_updStockIngreso AFTER INSERT ON detalle_ingresos
 FOR EACH ROW BEGIN
 UPDATE medicamentos SET stock = stock + NEW.cantidad
 WHERE medicamentos.id = NEW.idmedicamento;
END
//
DELIMITER ;



DELIMITER //
CREATE TRIGGER tr_updStockVenta AFTER INSERT ON detalle_ventas
 FOR EACH ROW BEGIN
 UPDATE medicamentos SET stock = stock - NEW.cantidad
 WHERE medicamentos.id = NEW.idmedicamento;
END
//
DELIMITER ;


DELIMITER //
CREATE TRIGGER tr_updStockVentaAnular AFTER UPDATE ON ventas FOR EACH ROW
BEGIN
  UPDATE medicamentos a
    JOIN detalle_ventas di
      ON di.idmedicamento = a.id
     AND di.idventa= new.id
     set a.stock = a.stock + di.cantidad;
end;
//
DELIMITER ;
