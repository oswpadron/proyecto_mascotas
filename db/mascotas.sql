CREATE DATABASE IF NOT EXISTS mascotas_oswpadron
CHARACTER SET utf8mb4
COLLATE utf8mb4_general_ci;

USE mascotas_oswpadron;

CREATE TABLE IF NOT EXISTS mascotas_op ( 
  id_mascota INT(10) PRIMARY KEY NOT NULL, 
  nombre_mascota VARCHAR(20) NOT NULL, 
  tipo_mascota VARCHAR(20) NOT NULL, 
  raza_mascota VARCHAR(100) NOT NULL, 
  sexo_mascota VARCHAR(30) NOT NULL, 
  nombre_cliente VARCHAR(20) NOT NULL, 
  fecha_mascota VARCHAR(2) NOT NULL );

INSERT INTO mascotas_op (id_mascota, nombre_mascota, tipo_mascota, raza_mascota, sexo_mascota, nombre_cliente, fecha_mascota) 
VALUES 
(1, 'Coco', 'Perro', 'Pastor Aleman', 'Hembra','Oswaldo Padron', '11-08-12'), 
(2, 'Milzie', 'Gato', 'Siames', 'Macho','Jurgen Klopp', '06-04-18'),
(3, 'Nefen', 'Perro', 'Labrador', 'Macho','Eddy Calleja', '27-02-22'), 
(4, 'Emmet', 'Mono', 'Titi', 'Macho','Lautaro Martinez', '14-09-23'), 
(5, 'Mordecai', 'Perro', 'Puddle', 'Macho','Juan Arango', '03-05-24'), 
(6, 'Nova', 'Perro', 'Golden', 'Hembra','Carmen Camacho', '17-03-16');
