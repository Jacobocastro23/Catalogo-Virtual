-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 12-09-2024 a las 21:36:08
-- Versión del servidor: 10.4.32-MariaDB
-- Versión de PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `bd_bolsaartemx_prueba`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `artworks`
--

CREATE TABLE `artworks` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `artist` varchar(255) DEFAULT NULL,
  `year` int(11) DEFAULT NULL,
  `technique` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `dimensions` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `artworks`
--

INSERT INTO `artworks` (`id`, `name`, `artist`, `year`, `technique`, `image`, `dimensions`) VALUES
(6, 'sendas ocultas', 'Nestor Medina', 2024, 'Mixta sobre tela', 'sendasocultas.png', '60X90cm'),
(7, 'Sin titulo', 'Adrían Ruiz Esparza', 2020, 'Acrilico sobre tela ', 'adrian.png', '60X90cm'),
(8, 'La linea', 'Ivan Bautista', 2021, 'Xilografía', 'lalinea.png', '37.5X27.5cm'),
(9, 'santa', 'I.noguez', 2021, 'Mixta sobre tela', 'santa.png', '37.5X27.5cm'),
(10, 'el 4 hojos barbon', 'El 4 hojos barbon', 2018, 'Agua fuerte', 'el4hojosbarbon.png', '37.5X27.5cm'),
(11, 'lefrineva', 'Diana MG', 2021, 'Xilografía', 'lefrineva.png', '37.5X27.5cm'),
(12, 'Espejo', 'Diana MG', 2021, 'Xilografía', 'espejo.png', '37.5X27.5cm'),
(13, 'Igualdad natural', 'Carlos Bautista', 2021, 'Linoleo', 'igualdadnatural.png', '37.5X27.5cm'),
(14, 'Las Tormentas del Morte México usa', 'Elisa Urias', 2017, 'Xilografía', 'lastormentasdelnorteméxicousa.png', '37.5X27.5cm'),
(15, 'Leve-infra', 'Joel Rendón ', 2021, 'Xilografía', 'leve-infra.png', '37.5X27.5cm'),
(16, 'La espera', 'Tere Casas', 2003, 'Oleo sobre tela ', 'Laespera.png', '80x90cm'),
(17, 'Jardin de Wilde', 'Tere Casas', 2020, 'Mixta sobre tela', 'JardindeWilde.png', '95x110cm'),
(18, 'Sin titulo', 'Tere Casas', 2016, 'Acrilico sobre tela', 'acrilicosobretela.png', '180x100cm'),
(19, 'Sin titulo', 'Guillermo Mendez', 2018, 'Oleo sobre tela ', 'Guillermo.png', '60x75cm'),
(20, 'Sin titulo', 'Abel Lozano', 2019, 'Acrilico sobre tela ', 'Abel.png', '55x80cm'),
(21, 'Encierro 3', 'Adrían Ruiz Esparza', 2002, 'oleo sobre tela', 'Encierro3.png', '210x180cm'),
(22, 'Sin titulo', 'Guillermo Mendez', 2018, 'Acrilico sobre tela ', 'Guillermo2.png', '135x135cm'),
(23, 'Fractal', 'Adrían Ruiz Esparza', 2007, 'oleo sobre tela', 'Fractal.png', '160x190cm'),
(24, 'Encierro 1', 'Adrían Ruiz Esparza', 2008, 'Oleo sobre tela ', 'Encierro1.png', '170x150cm'),
(25, 'Concentricos ', 'Adrían Ruiz Esparza', 2000, 'Mixta sobre tela', 'Concentricos.png', '90x120cm'),
(26, 'Homenaje a Lilia Carrillo', 'Adrían Ruiz Esparza', 2004, 'Oleo sobre tela ', 'HomenajeaLiliaCarrillo.png', '90x120cm'),
(27, 'SN/T', 'Adrían Ruiz Esparza', 2024, 'Acilico sobre tela', 'SNT.png', '110x90cm'),
(28, 'Sin titulo', 'Tere Casas', 2017, 'Oleo sobre tela', 'Tere.png', '110x115cm'),
(29, 'Masde cosas', 'Tere Casas', 2012, 'Oleo sobre tela', 'Masdecosas.png', '70x100cm');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `art_pieces`
--

CREATE TABLE `art_pieces` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `artist` varchar(255) NOT NULL,
  `year` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `image_url` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `autores_obra`
--

CREATE TABLE `autores_obra` (
  `idAutor_obra` int(11) NOT NULL,
  `idUsuario_plataforma` int(11) NOT NULL,
  `tipo_autor` int(11) NOT NULL,
  `nombre_autor` varchar(200) NOT NULL,
  `nacionalidad_autor` varchar(200) NOT NULL,
  `nacimiento_autor` varchar(200) NOT NULL,
  `deceso_autor` varchar(200) NOT NULL,
  `obra_representativa_autor` varchar(200) NOT NULL,
  `descripcion_autor` varchar(200) NOT NULL,
  `fregistro_autor` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `autores_obra`
--

INSERT INTO `autores_obra` (`idAutor_obra`, `idUsuario_plataforma`, `tipo_autor`, `nombre_autor`, `nacionalidad_autor`, `nacimiento_autor`, `deceso_autor`, `obra_representativa_autor`, `descripcion_autor`, `fregistro_autor`) VALUES
(1, 16, 2, 'FRIDA KAHLO', 'MEXICO', '1907', '1954', 'Las dos fridas', '​Fue autora de 150 obras, principalmente autorretratos, en los que proyectó sus dificultades por sobrevivir.', '2024-07-23');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `categorias_obra`
--

CREATE TABLE `categorias_obra` (
  `idCategoria_obra` int(11) NOT NULL,
  `nombre_categoria` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `categorias_obra`
--

INSERT INTO `categorias_obra` (`idCategoria_obra`, `nombre_categoria`) VALUES
(1, 'Pintura'),
(2, 'Grabado'),
(3, 'Escultura');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `colores_obra`
--

CREATE TABLE `colores_obra` (
  `idColor_obra` int(11) NOT NULL,
  `nombre_color` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `colores_obra`
--

INSERT INTO `colores_obra` (`idColor_obra`, `nombre_color`) VALUES
(1, 'Sepia'),
(2, 'Azul'),
(3, 'Amarillo'),
(4, 'Rojo'),
(5, 'Verde'),
(6, 'Naranja'),
(7, 'Morado'),
(8, 'Violeta'),
(9, 'Blanco'),
(10, 'Negro');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `estilos_obra`
--

CREATE TABLE `estilos_obra` (
  `idEstilo_obra` int(11) NOT NULL,
  `nombre_estilo` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `estilos_obra`
--

INSERT INTO `estilos_obra` (`idEstilo_obra`, `nombre_estilo`) VALUES
(1, 'Abstracto'),
(2, 'Figurativo');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `fichatecnica_obra`
--

CREATE TABLE `fichatecnica_obra` (
  `idFichaTecnica_obra` int(11) NOT NULL,
  `idUsuario_plataforma` int(11) NOT NULL,
  `autor_obra` varchar(200) NOT NULL,
  `serie_obra` varchar(200) NOT NULL,
  `titulo_obra` varchar(200) NOT NULL,
  `fejecucion_obra` varchar(200) NOT NULL,
  `originalidad_obra` varchar(100) NOT NULL,
  `colores_obra` varchar(200) NOT NULL,
  `tecnica_obra` varchar(100) NOT NULL,
  `orientacion_obra` varchar(100) NOT NULL,
  `dimAlto_obra` float NOT NULL,
  `dimAncho_obra` float NOT NULL,
  `dimLargo_obra` float NOT NULL,
  `peso_obra` float NOT NULL,
  `materiales_obra` varchar(200) NOT NULL,
  `enmarcado_obra` varchar(100) NOT NULL,
  `descripcion_obra` varchar(200) NOT NULL,
  `descripcion_tecnica_obra` varchar(200) NOT NULL,
  `idEstilo_obra` varchar(200) NOT NULL,
  `idTema_obra` varchar(200) NOT NULL,
  `idCategoria_obra` varchar(200) NOT NULL,
  `imagen_obra` varchar(200) NOT NULL,
  `certificado_autenticidad_obra` varchar(200) NOT NULL,
  `factura_fiscal_obra` varchar(200) NOT NULL,
  `fsolicitud_ficha` date NOT NULL,
  `estado_solicitud` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `fichatecnica_obra`
--

INSERT INTO `fichatecnica_obra` (`idFichaTecnica_obra`, `idUsuario_plataforma`, `autor_obra`, `serie_obra`, `titulo_obra`, `fejecucion_obra`, `originalidad_obra`, `colores_obra`, `tecnica_obra`, `orientacion_obra`, `dimAlto_obra`, `dimAncho_obra`, `dimLargo_obra`, `peso_obra`, `materiales_obra`, `enmarcado_obra`, `descripcion_obra`, `descripcion_tecnica_obra`, `idEstilo_obra`, `idTema_obra`, `idCategoria_obra`, `imagen_obra`, `certificado_autenticidad_obra`, `factura_fiscal_obra`, `fsolicitud_ficha`, `estado_solicitud`) VALUES
(1, 16, '1', '', 'Las dos fridas', '1939', 'Original', 'Azul,Rojo', 'Acuarela', 'Vertical', 173.5, 0, 173, 20, 'Óleo sobre lienzo', 'No', 'Constituye un autorretrato doble de la artista en la cual se duplica su imagen a manera de espejo', 'La pintura le fue inspirada por dos pinturas que vio a principios de año en el Louvre', '1', '7', '1', '20240723224637_FR-20240703222106DW-HAF25492353_YpuJ.jpg', 'CERT-20240723224637_FR-20240703222106DW-HAF25492353_YpuJ.pdf', 'FACT-20240723224637_FR-20240703222106DW-HAF25492353_YpuJ.pdf', '2024-07-23', 2);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `registro`
--

CREATE TABLE `registro` (
  `id_registro` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `correo` varchar(100) NOT NULL,
  `passwrd` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `registro`
--

INSERT INTO `registro` (`id_registro`, `nombre`, `correo`, `passwrd`) VALUES
(1, 'Haide', 'jaqui', '123'),
(2, 'Haide', 'Tony', '123'),
(5, 'sds', 'qwdsw', 'sdsd'),
(6, 'root', 'elede@gmail.com', 'root');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `tecnicas_artisticas`
--

CREATE TABLE `tecnicas_artisticas` (
  `idTecnica_artistica` int(11) NOT NULL,
  `idCategoria_obra` varchar(200) NOT NULL,
  `nombre_tecnica` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `tecnicas_artisticas`
--

INSERT INTO `tecnicas_artisticas` (`idTecnica_artistica`, `idCategoria_obra`, `nombre_tecnica`) VALUES
(1, '', 'Carbón'),
(2, '', 'Grafito'),
(3, '', 'Sanguina'),
(4, '', 'Lápices de colores'),
(5, '', 'Tinta'),
(6, '', 'Tiza'),
(7, '', 'Rotuladores'),
(8, '', 'Pastel'),
(9, '', 'Ceras'),
(10, '', 'Acuarela'),
(11, '', 'Temple'),
(12, '', 'Gouache'),
(13, '', 'Óleo'),
(14, '', 'Acrílico'),
(15, '', 'Encausto'),
(16, '', 'Pintura aerosol'),
(17, '', 'Collage'),
(18, '', 'Mixta'),
(19, '', 'Agua fuerte'),
(20, '', 'Agua tinta'),
(21, '', 'Grabado en relieve'),
(22, '', 'Litografía'),
(23, '', 'Serigrafía'),
(24, '', 'Colografía'),
(25, '', 'Punta seca'),
(26, '', 'Foto grabado'),
(27, '', 'Grabado digital'),
(28, '', 'Monotipia'),
(29, '', 'Grabado híbrido'),
(30, '', 'Escultura en talla'),
(31, '', 'Escultura en modelado'),
(32, '', 'Cerámica'),
(33, '', 'Escultura en metal'),
(34, '', 'Estructura en 3D'),
(35, '', 'Técnica expandida');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `temas_obra`
--

CREATE TABLE `temas_obra` (
  `idTema_obra` int(11) NOT NULL,
  `nombre_tema` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `temas_obra`
--

INSERT INTO `temas_obra` (`idTema_obra`, `nombre_tema`) VALUES
(1, 'Político'),
(2, 'Naturaleza'),
(3, 'Naturaleza muerta'),
(4, 'Psicología'),
(5, 'Filosofía'),
(6, 'Sociología'),
(7, 'Existencialismo'),
(8, 'Humanidad'),
(9, 'Pos humanidad'),
(10, 'Inmaterial'),
(11, 'Vacíos'),
(12, 'Otros');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario`
--

CREATE TABLE `usuario` (
  `id_usuario` int(11) NOT NULL,
  `nombre` varchar(200) NOT NULL,
  `correo` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuario_visitante`
--

CREATE TABLE `usuario_visitante` (
  `id_usuariovisitante` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_registro` int(11) NOT NULL,
  `estado` int(11) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `artworks`
--
ALTER TABLE `artworks`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `art_pieces`
--
ALTER TABLE `art_pieces`
  ADD PRIMARY KEY (`id`);

--
-- Indices de la tabla `autores_obra`
--
ALTER TABLE `autores_obra`
  ADD PRIMARY KEY (`idAutor_obra`);

--
-- Indices de la tabla `categorias_obra`
--
ALTER TABLE `categorias_obra`
  ADD PRIMARY KEY (`idCategoria_obra`);

--
-- Indices de la tabla `colores_obra`
--
ALTER TABLE `colores_obra`
  ADD PRIMARY KEY (`idColor_obra`);

--
-- Indices de la tabla `estilos_obra`
--
ALTER TABLE `estilos_obra`
  ADD PRIMARY KEY (`idEstilo_obra`);

--
-- Indices de la tabla `fichatecnica_obra`
--
ALTER TABLE `fichatecnica_obra`
  ADD PRIMARY KEY (`idFichaTecnica_obra`);

--
-- Indices de la tabla `registro`
--
ALTER TABLE `registro`
  ADD PRIMARY KEY (`id_registro`);

--
-- Indices de la tabla `tecnicas_artisticas`
--
ALTER TABLE `tecnicas_artisticas`
  ADD PRIMARY KEY (`idTecnica_artistica`);

--
-- Indices de la tabla `temas_obra`
--
ALTER TABLE `temas_obra`
  ADD PRIMARY KEY (`idTema_obra`);

--
-- Indices de la tabla `usuario`
--
ALTER TABLE `usuario`
  ADD PRIMARY KEY (`id_usuario`);

--
-- Indices de la tabla `usuario_visitante`
--
ALTER TABLE `usuario_visitante`
  ADD PRIMARY KEY (`id_usuariovisitante`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `artworks`
--
ALTER TABLE `artworks`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT de la tabla `art_pieces`
--
ALTER TABLE `art_pieces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `autores_obra`
--
ALTER TABLE `autores_obra`
  MODIFY `idAutor_obra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `categorias_obra`
--
ALTER TABLE `categorias_obra`
  MODIFY `idCategoria_obra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de la tabla `colores_obra`
--
ALTER TABLE `colores_obra`
  MODIFY `idColor_obra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT de la tabla `estilos_obra`
--
ALTER TABLE `estilos_obra`
  MODIFY `idEstilo_obra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `fichatecnica_obra`
--
ALTER TABLE `fichatecnica_obra`
  MODIFY `idFichaTecnica_obra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de la tabla `registro`
--
ALTER TABLE `registro`
  MODIFY `id_registro` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT de la tabla `tecnicas_artisticas`
--
ALTER TABLE `tecnicas_artisticas`
  MODIFY `idTecnica_artistica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT de la tabla `temas_obra`
--
ALTER TABLE `temas_obra`
  MODIFY `idTema_obra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT de la tabla `usuario`
--
ALTER TABLE `usuario`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuario_visitante`
--
ALTER TABLE `usuario_visitante`
  MODIFY `id_usuariovisitante` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
