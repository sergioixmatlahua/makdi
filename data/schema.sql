/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
/**
 * Author:  Sergio
 * Created: Apr 24, 2019
 */

CREATE TABLE `donacion` (
  `idReto` INTEGER NOT NULL PRIMARY KEY,
  `tipoDonacion` INTEGER NOT NULL,
  `cantidad_Especie` INTEGER NOT NULL,
  `cantidad_pesos` INTEGER NOT NULL,
  `fecha` TEXT NOT NULL,
  `idSponsor` INTEGER NOT NULL
);

CREATE TABLE `likes` (
  `idReto` INTEGER NOT NULL PRIMARY KEY,
  `idUsuario` INTEGER NOT NULL,
  `fecha` INTEGER NOT NULL,
  `like` INTEGER NOT NULL
);

CREATE TABLE `organizacion` (
  `IdOrganizacion` INTEGER NOT NULL PRIMARY KEY,
  `nombre` TEXT NOT NULL,
  `direccion` TEXT NOT NULL,
  `telefono` TEXT NOT NULL,
  `logo` TEXT NOT NULL,
  `representante` TEXT NOT NULL,
  `idReto` INTEGER NOT NULL
);

CREATE TABLE `sponsor` (
  `idSponsor` INTEGER NOT NULL PRIMARY KEY,
  `tipoAyuda` TEXT NOT NULL,
  `idUsuario` INTEGER NOT NULL
);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `idUsuario` INTEGER NOT NULL PRIMARY KEY,
  `nombre` TEXT NOT NULL,
  `apellidoP` TEXT NOT NULL,
  `apellidoM` TEXT NOT NULL,
  `edad` INTEGER NOT NULL,
  `telefono` TEXT NOT NULL,
  `correo` TEXT NOT NULL,
  `direccion` TEXT NOT NULL,
  `foto` TEXT NOT NULL,
  `contrasenia` TEXT NOT NULL
);

CREATE TABLE `reto` (
  `idReto` INTEGER NOT NULL PRIMARY KEY,
  `nombreProblema` TEXT NOT NULL,
  `categoria` TEXT NOT NULL,
  `objetivo` TEXT NOT NULL,
  `descripcion` TEXT NOT NULL,
  `ubicacion` TEXT NOT NULL,
  `imagen` TEXT NOT NULL,
  `fecha` TEXT NOT NULL,
  `horaInicio` INTEGER NOT NULL,
  `numMinP` INTEGER NOT NULL,
  `numMaxP` INTEGER NOT NULL,
  `donativoDinero` TEXT,
  `donativoEspecie`  TEXT,
  `idUsuario` INTEGER NOT NULL
);
-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `voluntario`
--

CREATE TABLE `voluntario` (
  `idVuluntario` INTEGER NOT NULL PRIMARY KEY,
  `frecuencia` TEXT NOT NULL,
  `tipoVolunootario` TEXT NOT NULL,
  `idUsuario` INTEGER NOT NULL
);
