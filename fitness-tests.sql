CREATE DATABASE IF NOT EXISTS Evaluaciones_fisicas CHARACTER SET utf8mb4;
USE Evaluaciones_fisicas;

CREATE TABLE Instituciones (
  Cod INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Institucion VARCHAR(50) NOT NULL
);


INSERT INTO Instituciones VALUES
(1, 'Natación'),
(2, 'Futbol'),
(3, 'Beisbol'),
(4, 'Rugby'),
(5, 'Baloncesto'),
(6, 'Submanirismo');





CREATE TABLE Sexo (
  Cod INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Sexo VARCHAR(50) NOT NULL
);


INSERT INTO Sexo VALUES
(1, 'Hombre'),
(2, 'Mujer'),
(3, 'Otro');





CREATE TABLE Datos_Basicos (
  id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  CI VARCHAR(10) NOT NULL,
  CI_Institucion VARCHAR(14) UNIQUE,
  Nombre VARCHAR(50) NOT NULL,
  Edad tinyINT(100) NOT NULL,
  Peso decimal(5,2) NOT NULL,
  Estatura decimal(3,2) NOT NULL,

  Cod_Sexo INT UNSIGNED,
  FOREIGN KEY(Cod_Sexo) REFERENCES Sexo(Cod), 
  Cod_Institucion INT UNSIGNED,
  FOREIGN KEY(Cod_Institucion) REFERENCES Instituciones(Cod),

  Resistencia decimal(5,2),
  PuntajeResistencia tinyINT(4),
  Salto decimal(4,1),
  PuntajeSalto tinyINT(4),
  Velocidad decimal(5,2),
  PuntajeVelocidad tinyINT(4),
  Flexibilidad decimal(4,1),
  PuntajeFlexibilidad tinyINT(4),
  Abdominales tinyINT(150),
  PuntajeAbdominales tinyINT(4),
  Flexores decimal(5,2),
  PuntajeFlexores tinyINT(4)
);

CREATE TABLE CalculoNotas (
  Dato tinyINT(150),
  Frecuencia tinyINT(150),
  FrecuenciaAcumulada tinyINT(150),
  Porcentaje decimal(5,2),
  Percentil tinyINT(101)
);

INSERT INTO 
Datos_Basicos
(CI, CI_Institucion, Nombre, Edad, Peso, Estatura, Cod_Sexo, Cod_Institucion,Abdominales)
VALUES
('V-26624747', 'V-26624747:1','a',18,70,1.9,1,1,6),
('V-26624748', 'V-26624748:1','a',18,70,1.9,1,1,7),
('V-26624749', 'V-26624749:1','a',18,70,1.9,1,1,8),
('V-26624750', 'V-26624750:1','a',18,70,1.9,1,1,8),
('V-26624751', 'V-26624751:1','a',18,70,1.9,1,1,9),
('V-26624752', 'V-26624752:1','a',18,70,1.9,1,1,9),
('V-26624753', 'V-26624753:1','a',18,70,1.9,1,1,10),
('V-26624754', 'V-26624754:1','a',18,70,1.9,1,1,10),
('V-26624771', 'V-26624771:1','a',18,70,1.9,1,1,10),
('V-26624755', 'V-26624755:1','a',18,70,1.9,1,1,11),
('V-26624756', 'V-26624756:1','a',18,70,1.9,1,1,11),
('V-26624757', 'V-26624757:1','a',18,70,1.9,1,1,11),
('V-26624758', 'V-26624758:1','a',18,70,1.9,1,1,11),
('V-26624759', 'V-26624759:1','a',18,70,1.9,1,1,12),
('V-26624760', 'V-26624760:1','a',18,70,1.9,1,1,12),
('V-26624761', 'V-26624761:1','a',18,70,1.9,1,1,12),
('V-26624762', 'V-26624762:1','a',18,70,1.9,1,1,12),
('V-26624763', 'V-26624763:1','a',18,70,1.9,1,1,12),
('V-26624764', 'V-26624764:1','a',18,70,1.9,1,1,13),
('V-26624765', 'V-26624765:1','a',18,70,1.9,1,1,13),
('V-26624766', 'V-26624766:1','a',18,70,1.9,1,1,13),
('V-26624767', 'V-26624767:1','a',18,70,1.9,1,1,14),
('V-26624768', 'V-26624768:1','a',18,70,1.9,1,1,14),
('V-26624769', 'V-26624769:1','a',18,70,1.9,1,1,15),
('V-26624770', 'V-26624770:1','a',18,70,1.9,1,1,16);