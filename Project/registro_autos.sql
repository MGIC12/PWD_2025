CREATE DATABASE registro_autos;
USE registro_autos;

CREATE TABLE persona (
    NroDni VARCHAR(10) NOT NULL,
    Apellido VARCHAR(50) NOT NULL,
    Nombre VARCHAR(50) NOT NULL,
    fechaNac DATE NOT NULL DEFAULT '0000-00-00',
    Telefono VARCHAR(20) NOT NULL,
    Domicilio VARCHAR(200) NOT NULL,
    PRIMARY KEY (NroDni)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `persona` (`NroDni`, `Apellido`, `Nombre`, `fechaNac`, `Telefono`, `Domicilio`) VALUES 
('28326986', 'Moya', 'Manuel', '1981-12-03', '299-9632587', 'Linares 44 piso 2 dpto 5'),
('25963874', 'Farias', 'Marta', '1975-06-21', '299-1559354', 'Roca 568'),
('30875962', 'Lopez', 'Eduardo', '1983-10-03', '299-6587741', 'Santa Fe 98'),
('22985265', 'Ramirez', 'Claudia', '1971-05-16', '299-9854155', 'Sarmiento 55');

CREATE TABLE auto (
    Patente VARCHAR(10) NOT NULL,
    Marca VARCHAR(50) NOT NULL,
    Modelo INT NOT NULL,
    DniDuenio VARCHAR(10) NOT NULL,
    PRIMARY KEY (Patente),
    FOREIGN KEY (DniDuenio) 
        REFERENCES persona(NroDni)
        ON UPDATE RESTRICT
        ON DELETE RESTRICT
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

INSERT INTO `auto` (`Patente`, `Marca`, `Modelo`, `DniDuenio`) VALUES 
('ADC 152', 'Fiat Uno', 98, '28326986'),
('POL 968', 'Renault 12', 77, '28326986'),
('KJU 952', 'Ford Fiesta', 2006, '25963874'),
('UYH 985', 'Fiat Palio', 95, '30875962'),
('LKI 865', 'Fiat Siena', 90, '28326986'),
('SDC 965', 'Peugeot 205', 88, '30875962');
