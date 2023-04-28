
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

CREATE TABLE `pregunta` (
  `codigo` int(11) NOT NULL,
  `documento` int(11) NOT NULL,
  `pregunta` varchar(250) NOT NULL,
  `codigo_r` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

CREATE TABLE `respuesta` (
  `codigo` int(11) NOT NULL,
  `respuesta` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

INSERT INTO `respuesta` (`codigo`, `respuesta`) VALUES
(1, 'Por un conocido '),
(2, 'Por instagram'),
(3, 'Ninguna de las anteriores'),
(4, 'Si'),
(5, 'No'),
(6, 'Ropa de dama'),
(7, 'Ropa de caballero'),
(8, 'Ropa Unisex'),
(9, 'Zapatos de damas'),
(10, 'Zapatos de caballero'),
(11, 'Al por mayor'),
(12, 'Al detal'),
(13, 'Si'),
(14, 'No');

CREATE TABLE `usuario` (
  `nombre` varchar(250) NOT NULL,
  `documento` int(11) NOT NULL,
  `correo` varchar(50) NOT NULL,
  `contrasena` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

ALTER TABLE `pregunta`
  ADD PRIMARY KEY (`codigo`),
  ADD KEY `documento` (`documento`),
  ADD KEY `codigo_r` (`codigo_r`);

ALTER TABLE `respuesta`
  ADD PRIMARY KEY (`codigo`);

ALTER TABLE `usuario`
  ADD PRIMARY KEY (`documento`);

ALTER TABLE `pregunta`
  ADD CONSTRAINT `pregunta_ibfk_1` FOREIGN KEY (`codigo_r`) REFERENCES `respuesta` (`codigo`),
  ADD CONSTRAINT `pregunta_ibfk_2` FOREIGN KEY (`documento`) REFERENCES `usuario` (`documento`);
COMMIT;