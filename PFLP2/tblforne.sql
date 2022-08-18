CREATE TABLE `tblforne` (
   
    `idempre` INT(2) NOT NULL,
    CONSTRAINT pkpeca PRIMARY KEY(`idempre`),
    `nomempre` VARCHAR (30) NOT NULL,
    `datforne` DATE) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COMMENT='Tabela de fornecedores';

INSERT INTO `tblforne` (`idempre`, `nomempre`, `datforne`)
VALUES

(1, 'Embraer','2021-07-23'),
(2, 'Cessna','2018-03-28'),
(3, 'Piper','2017-10-12'),
(4, 'Learjet','2018-03-28'),
(5, 'Mcdonnell Douglas','2018-03-28');


