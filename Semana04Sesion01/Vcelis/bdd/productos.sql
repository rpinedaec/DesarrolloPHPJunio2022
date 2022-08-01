INSERT INTO `ishop`.`productos` (`idcategorias`, `nombre`, `descripcion`, `informacion`, `valor`, `igb`) VALUES ('1', 'Monitor 24 Pulgadas', 'Monitor 24 Pulgadas', 'Monitor 24 Pulgadas', '12000', b'1');

ALTER TABLE `ishop`.`productos` 
ADD COLUMN `idcategorias` INT(11) NOT NULL AFTER `idproductos`,
ADD INDEX `fk_productos_categorias_idx` (`idcategorias` ASC) VISIBLE;
;

ALTER TABLE `ishop`.`productos` 
ADD CONSTRAINT `fk_productos_categorias`
  FOREIGN KEY (`idcategorias`)
  REFERENCES `ishop`.`categorias` (`idcategorias`)
  ON DELETE NO ACTION
  ON UPDATE NO ACTION;


INSERT INTO `ishop`.`ordenes_cabecera` (`idusuarios`, `documento`, `igb`, `total`) VALUES ('1', '001575291', '60', '560');
INSERT INTO `ishop`.`ordenes_detalle` (`idordenes_cabecera`, `idproductos`, `cantidad`) VALUES ('1', '1', '3');
