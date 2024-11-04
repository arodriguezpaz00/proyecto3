create database academia;

use academia;

create table notas(
    nombre VARCHAR(250),
    identificacion INT(20),
    calificacion VARCHAR(15)
)

CREATE TABLE profesores (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    dni VARCHAR(20) NOT NULL UNIQUE,
    asignatura VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);


CREATE TABLE asignaturas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    horas INT NOT NULL
);

INSERT INTO asignaturas (nombre, horas) VALUES
('MF0950_1 : Desarrollo en Servidor', 60),
('MF0950_2 : Desarrollo en Frontend', 60),
('MF0950_3 : Frameworks de JavaScript', 45),
('MF0950_4 : Bases de Datos Relacionales', 60),
('MF0950_5 : API Restful', 30),
('MF0950_6 : Despliegue de Aplicaciones', 30),
('MF0950_7 : Gestión de Proyectos de Software', 40),
('MF0950_8 : Seguridad en Aplicaciones Web', 30);

SELECT *  from asignaturas;

CREATE TABLE estudiantes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre VARCHAR(100) NOT NULL,
    dni VARCHAR(20) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL,
    telefono VARCHAR(15) NOT NULL
);

CREATE TABLE estudiante_asignatura (
    id INT AUTO_INCREMENT PRIMARY KEY,
    estudiante_id INT NOT NULL,
    asignatura_id INT NOT NULL,
    fecha_asociacion DATE DEFAULT CURRENT_DATE,
    FOREIGN KEY (estudiante_id) REFERENCES estudiantes(id),
    FOREIGN KEY (asignatura_id) REFERENCES asignaturas(id)
);

SELECT * from estudiantes;