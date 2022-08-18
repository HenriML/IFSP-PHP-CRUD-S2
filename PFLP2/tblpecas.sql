CREATE TABLE `tblpecas`(
  
   `serpeca` INT(5) NOT NULL AUTO_INCREMENT,
      ADD PRIMARY KEY (`serpeca`);
   `nompeca` VARCHAR(30) NOT NULL,
   `fornepec` INT(1)  NOT NULL,
   CONSTRAINT fkpeca FOREIGN KEY(`fornepec`) REFERENCES `tblforne`(`idempre`),
   `quantipeca` INT(3);
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='Tabela de produtos';

INSERT INTO `tblpecas` (`nompeca`,`fornepec`,`quantipeca`) VALUES
    ('Navegador', 1, 67),
    ('Horizonte artificial', 1, 133),
    ('Acelerador', 3, 267),
    ('Aleta do Afterburner', 2, 28),
    ('Sidestick', 5, 467),
    ('Flaps', 4, 38),
    ('Medidor de combustível', 1,367),
    ('Medidor de altitude', 3,356),
    ('Medidor de velocidade', 2, 77),
    ('Tubo de Pitot', 1, 200),
    ('Parabrisa', 1, 12),
    ('Alça de manete', 6, 300 );



------------------------------------------------------------------


INSERT INTO `tblpecas` (`nompeca`,`fornepec`,`quantipeca`) VALUES
    ('Bomba de combustível', 1, 56),
    ('Mangueira', 1, 563),
    ('Radiador', 3, 37),
    ('Hélice', 2, 28),
    ('Manete de potência', 5, 467),
    ('Flares', 4, 38),
    ('Parafuso', 1,5367),
    ('Apontador', 3, 106),
    ('Medidor de óleo', 2, 47);
   
