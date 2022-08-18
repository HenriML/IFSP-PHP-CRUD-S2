

CREATE TABLE `tblcompra` (
  `compid` int(3) NOT NULL AUTO_INCREMENT,
  `compnome` varchar(50) NOT NULL,
  `compemail` varchar(50) NOT NULL,
  `comptel` varchar(15) NOT NULL,
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='Tabela de clientes';



INSERT INTO `tblcompra` (`compnome`, `compemail`, `comptel` ) VALUES
('Lucas Oliveira', 'lukss@gmail.com', '40028922');
('Marta Ferreira', 'martafc@gmail.com', '19284735'),
('Karem Medeiros', 'fakam@gmail.com', '19284732'),
('Betania Medeiros Chaves', 'betamed@uol.com', '19374857'),
('Dante Moreira Sales', 'dante@gmail.com', '71938563'),
('Renata Bueno', 'rebu@gmail.com', '17024322'),
('Marcia Pereira', 'marcia@gmail.com', '33628922'),
('Marcia Tania Pereira', 'tania@gmail.com', '40230222'),
('Monique Medeiros Soares', 'mmsoares@gmail.com', '40143922');

