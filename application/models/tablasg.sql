CREATE TABLE profesor (
	cedula   VARCHAR(5)   NOT NULL,
	nombre           VARCHAR(30)  NOT NULL,
	fecha_nacimiento         VARCHAR(30)  NOT NULL,
	lugar_nacimiento             VARCHAR(1)   NOT NULL,
	titulo             VARCHAR(1)   NOT NULL,
	departamento             VARCHAR(1)   NOT NULL,
	PRIMARY KEY (cedula)
) ENGINE = InnoDB;

CREATE TABLE estudio (
	id               INT UNSIGNED NOT NULL AUTO_INCREMENT,
	persona          VARCHAR(20)  NOT NULL,
	institucion      VARCHAR(100) NOT NULL,
	pais             VARCHAR(50)  NOT NULL,
	fecha_graduacion DATE         NOT NULL,
	PRIMARY KEY (id),
	CONSTRAINT estudio_persona FOREIGN KEY (persona) REFERENCES persona (numero_documento)
) ENGINE = InnoDB;
