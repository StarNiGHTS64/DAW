SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO"
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00"


CREAT TABLE 'tbl_sample' (
	'id' int(11) NOT NULL,
	'nombre' varchar(25) NOT NULL,
	'apellido_paterno' varchar(25) NOT NULL
	'apellido_materno' varchar(25) NOT NULL
	'estado' varchar(25) NOT NULL
	'hora' timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
) ENGINE=InnoDB DEFAULT CHARSET=latin;

INSERT INTO `examen` (`id`, `nombre`, `apellido_paterno`, `apellido_paterno`, `estado`, `hora`)VALUES
('1','Carlos','Becerra','Ortiz','Infeccion','0000-00-00 00:00:00'),
('2','Maria','Senties','Esquvel','Coma','0000-00-00 00:00:00'),
('3','Ruben','Rojas','Rubelo','Transformacion','0000-00-00 00:00:00'),
('4','Diego','Gonzalez','Diaz','Muerto','0000-00-00 00:00:00'),
('5','Sergio','Mercado','Silvano','Infeccion','0000-00-00 00:00:00'),
('6','Marco','Garcia','Mejia','Coma','0000-00-00 00:00:00'),
('7','Josue','Valdivia','Rivera','Transformacion','0000-00-00 00:00:00'),
('8','Franchesca','Solis','Estrada','Muerto','0000-00-00 00:00:00'),
('9','Alexa','Palomino','Hernandez','Infeccion','0000-00-00 00:00:00'),
('10','Fernanda','Zamorano','Orozco','Coma','0000-00-00 00:00:00');
COMMIT;
