-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 30-12-2020 a las 23:29:07
-- Versión del servidor: 10.4.16-MariaDB
-- Versión de PHP: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `hnsr`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `atencion`
--

CREATE TABLE `atencion` (
  `id_atencion` int(11) NOT NULL,
  `codigo_atencion` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_personal_salud` text COLLATE utf8_spanish_ci NOT NULL,
  `id_paciente` text COLLATE utf8_spanish_ci NOT NULL,
  `ups` text COLLATE utf8_spanish_ci NOT NULL,
  `servicio` text COLLATE utf8_spanish_ci NOT NULL,
  `especialidad` text COLLATE utf8_spanish_ci NOT NULL,
  `diagnostico` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen_diagnostico` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen_diagnostico2` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen_diagnostico3` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen_diagnostico4` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen_diagnotisco5` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen_diagnotisco6` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen_diagnotisco7` text COLLATE utf8_spanish_ci NOT NULL,
  `imagen_diagnotisco8` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_atencion` date NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `atencion`
--

INSERT INTO `atencion` (`id_atencion`, `codigo_atencion`, `id_usuario`, `id_personal_salud`, `id_paciente`, `ups`, `servicio`, `especialidad`, `diagnostico`, `imagen_diagnostico`, `imagen_diagnostico2`, `imagen_diagnostico3`, `imagen_diagnostico4`, `imagen_diagnotisco5`, `imagen_diagnotisco6`, `imagen_diagnotisco7`, `imagen_diagnotisco8`, `fecha_atencion`, `fecha`) VALUES
(11, 1, 9, '1', '1', 'Consulta Externa', 'Cirugia', 'Medicina Interna', 'aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), ', 'vistas/img/atenciones/prueba1.png', '', '', '', '', '', '', '', '2020-04-01', '2020-09-14 20:48:29'),
(12, 2, 9, '1', '3', 'Emergencia', 'Pediatria', 'Medicina General', 'bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122)', 'vistas/img/atenciones/2/424.jpg', '', '', '', '', '', '', '', '2020-04-08', '2020-11-17 22:14:32'),
(13, 3, 9, '2', '5', 'Hospitalizacion', 'Medicina', 'Medicina General', 'cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000) ', 'vistas/img/atenciones/3/229.png', '', '', '', '', '', '', '', '2020-04-09', '2020-11-17 22:14:54'),
(14, 4, 9, '1', '1', 'Consulta Externa', 'Medicina', 'Medicina General', 'dddddddddddddd (d2340), dddddddddddddd (d2340), dddddddddddddd (d2340), dddddddddddddd (d2340), dddddddddddddd (d2340), dddddddddddddd (d2340),  ', 'vistas/img/atenciones/prueba1.png', '', '', '', '', '', '', '', '2020-04-09', '2020-09-14 19:45:10'),
(15, 5, 9, '1', '2', 'Hospitalizacion', 'Ginecologia', 'Medicina General', 'eeeeeeeeeeeeeeee (d2340), eeeeeeeeeeeeeeee (d2340), eeeeeeeeeeeeeeee (d2340), eeeeeeeeeeeeeeee (d2340), eeeeeeeeeeeeeeee (d2340), eeeeeeeeeeeeeeee (d2340), eeeeeeeeeeeeeeee (d2340)', 'vistas/img/atenciones/5/459.jpg', '', '', '', '', '', '', '', '2020-04-08', '2020-11-17 22:53:15'),
(16, 6, 9, '1', '2', 'Hospitalizacion', 'Pediatria', 'Gastroenterologia', 'fffffffffffffffffffffff (d1234), fffffffffffffffffffffff (d1234), fffffffffffffffffffffff (d1234), fffffffffffffffffffffff (d1234), fffffffffffffffffffffff (d1234), fffffffffffffffffffffff (d1234), ', 'vistas/img/atenciones/6/878.png', '', '', '', '', '', '', '', '2020-04-14', '2020-11-17 22:53:32'),
(17, 7, 9, '1', '2', 'Hospitalizacion', 'Ginecologia', 'Gastroenterologia', 'ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ', 'vistas/img/atenciones/7/329.jpg', '', '', '', '', '', '', '', '2020-04-06', '2020-11-03 21:26:05'),
(18, 8, 9, '2', '2', 'Emergencia', 'Pediatria', 'Gastroenterologia', 'hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), ', 'vistas/img/atenciones/prueba1.png', '', '', '', '', '', '', '', '2020-04-01', '2020-09-14 19:45:14'),
(19, 9, 9, '2', '3', 'Emergencia', 'Pediatria', 'Gastroenterologia', 'iiiiiiiiiiiiiiiiiiiiiii (d1234), iiiiiiiiiiiiiiiiiiiiiii (d1234), iiiiiiiiiiiiiiiiiiiiiii (d1234), iiiiiiiiiiiiiiiiiiiiiii (d1234), iiiiiiiiiiiiiiiiiiiiiii (d1234), iiiiiiiiiiiiiiiiiiiiiii (d1234), ', 'vistas/img/atenciones/9/896.jpg', '', '', '', '', '', '', '', '2020-04-09', '2020-11-03 21:26:30'),
(20, 10, 9, '1', '3', 'Emergencia', 'Ginecologia', 'Gastroenterologia', 'jjjjjjjjjjjjjjjjjjjjjj (d1234), jjjjjjjjjjjjjjjjjjjjjj (d1234), jjjjjjjjjjjjjjjjjjjjjj (d1234), jjjjjjjjjjjjjjjjjjjjjj (d1234), jjjjjjjjjjjjjjjjjjjjjj (d1234), jjjjjjjjjjjjjjjjjjjjjj (d1234), ', 'vistas/img/atenciones/10/390.jpg', '', '', '', '', '', '', '', '2020-04-02', '2020-11-03 21:28:08'),
(21, 11, 9, '2', '4', 'Hospitalizacion', 'Pediatria', 'Gastroenterologia', 'kkkkkkkkkkkkk (d1234), kkkkkkkkkkkkk (d1234), kkkkkkkkkkkkk (d1234), kkkkkkkkkkkkk (d1234), kkkkkkkkkkkkk (d1234), kkkkkkkkkkkkk (d1234), ', 'vistas/img/atenciones/11/135.jpg', '', '', '', '', '', '', '', '2020-04-07', '2020-11-03 21:29:15'),
(22, 12, 9, '2', '4', 'Consulta Externa', 'Pediatria', 'Gastroenterologia', 'llllllllllllllllllllllllll (d1234), llllllllllllllllllllllllll (d1234), llllllllllllllllllllllllll (d1234), llllllllllllllllllllllllll (d1234), llllllllllllllllllllllllll (d1234), llllllllllllllllllllllllll (d1234), ', 'vistas/img/atenciones/12/404.jpg', '', '', '', '', '', '', '', '2020-04-15', '2020-11-03 21:29:38'),
(23, 13, 9, '2', '4', 'Emergencia', 'Cirugia', 'Gastroenterologia', 'mmmmmmmm (d1234), mmmmmmmm (d1234), mmmmmmmm (d1234), mmmmmmmm (d1234), mmmmmmmm (d1234), mmmmmmmm (d1234), ', 'vistas/img/atenciones/prueba1.png', '', '', '', '', '', '', '', '2020-04-22', '2020-09-14 19:45:17'),
(24, 14, 9, '1', '5', 'Consulta Externa', 'Medicina', 'Medicina Interna', 'Dolor de diente (X190), Dolor de espalda ()', 'vistas/img/atenciones/14/262.jpg', '', '', '', '', '', '', '', '2020-04-17', '2020-11-03 21:30:04'),
(25, 15, 9, '4', '1', 'Hospitalizacion', 'Cirugia', 'Gastroenterologia', 'ASDASDSA (1285XASD)', 'vistas/img/atenciones/15/962.png', '', '', '', '', '', '', '', '2020-09-04', '2020-11-03 21:31:23'),
(27, 16, 9, '1', '1', 'Consulta Externa', 'Ginecologia', 'Ginecologia', 'Luis Pruba2 (x10x)', 'vistas/img/atenciones/16/221.jpg', '', '', '', '', '', '', '', '2020-09-14', '2020-11-03 21:31:47'),
(28, 17, 9, '4', '3', 'Emergencia', 'Ginecologia', 'Pediatria', 'Rompedura de huesos  123(ncb)', 'vistas/img/atenciones/17/410.png', '', '', '', '', '', '', '', '2020-11-03', '2020-11-03 18:32:39'),
(29, 18, 9, '3', '4', 'Emergencia', 'Pediatria', 'Gastroenterologia', '1qsadsa', 'vistas/img/atenciones/18/828.jpg', '', '', '', '', '', '', '', '2020-11-10', '2020-11-03 20:55:44'),
(30, 19, 9, '1', '2', 'Hospitalizacion', 'Medicina', 'Medicina Interna', 'asdsad', 'vistas/img/atenciones/19/548.png', '', '', '', '', '', '', '', '2020-11-11', '2020-11-03 18:39:41'),
(31, 20, 9, '4', '2', 'Hospitalizacion', 'Ginecologia', 'Pediatria', 'qwewq21', 'vistas/img/atenciones/20/607.jpg', '', '', '', '', '', '', '', '2020-11-02', '2020-11-03 19:17:01'),
(32, 21, 9, '3', '5', 'Emergencia', 'Pediatria', 'Medicina General', 'asdsad', 'vistas/img/atenciones/21/505.jpg', '', '', '', '', '', '', '', '2020-11-18', '2020-11-03 21:22:39'),
(33, 22, 9, '2', '2', 'Hospitalizacion', 'Pediatria', 'Medicina General', 'aq112 (1xs1)', 'vistas/img/atenciones/22/669.png', '', '', '', '', '', '', '', '2020-11-03', '2020-11-03 21:21:17'),
(34, 23, 9, '2', '2', '', 'Medicina General', '', 'xzczxczx', 'vistas/img/atenciones/23/999.jpg', '', '', '', '', '', '', '', '2020-12-17', '2020-12-10 14:44:39'),
(35, 24, 9, '4', '3', '', 'Gastroenterologia', '', 'asdsadsa', 'vistas/img/atenciones/24/344.jpg', '', '', '', '', '', '', '', '2020-12-10', '2020-12-10 14:45:02'),
(36, 25, 9, '3', '4', '', 'Medicina General', '', 'sadasdsa', 'vistas/img/atenciones/i2/25/936.jpg', 'vistas/img/atenciones/doc/doc2.jpg', '', '', '', '', '', '', '2020-12-10', '2020-12-10 15:51:38'),
(37, 26, 9, '3', '3', '', 'Medicina General', '', 'asdsadsa 1520(xdf)', 'vistas/img/atenciones/i2/26/440.jpg', 'vistas/img/atenciones/doc/doc2.jpg', '', '', '', '', '', '', '2020-12-24', '2020-12-10 16:02:29'),
(38, 27, 9, '3', '3', '', 'Gastroenterologia', '', 'asdsadsadsa', 'vistas/img/atenciones/i3/27/704.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', '', '', '', '', '', '2020-12-09', '2020-12-10 16:15:34'),
(39, 28, 9, '3', '4', '', 'Gastroenterologia', '', 'asdsazdsa', 'vistas/img/atenciones/i4/28/728.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', '', '', '', '', '2020-12-10', '2020-12-10 16:39:01'),
(40, 29, 9, '2', '1', '', 'Medicina Interna', '', 'asdsadsadsa 21321', 'vistas/img/atenciones/i4/29/564.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', '', '', '', '', '2020-12-10', '2020-12-10 19:39:54'),
(41, 30, 9, '4', '5', '', 'Gastroenterologia', '', 'asdsadsa1 1112', 'vistas/img/atenciones/i2/30/535.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', '', '', '', '', '2020-12-10', '2020-12-10 20:04:10'),
(42, 31, 9, '4', '2', '', 'Medicina Interna', '', '132123132', 'vistas/img/atenciones/i4/31/520.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', '', '', '', '', '2020-12-17', '2020-12-10 20:10:51'),
(43, 32, 9, '3', '1', '', 'Medicina Interna', '', 'dsadsadsa', 'vistas/img/atenciones/i4/32/495.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', '', '', '', '', '2020-12-10', '2020-12-10 20:17:58'),
(44, 33, 9, '2', '4', '', 'Medicina Interna', '', 'asdsadsa', 'vistas/img/atenciones/i4/33/806.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', '', '', '', '', '2020-12-10', '2020-12-10 21:21:22'),
(45, 34, 9, '2', '2', '', 'Medicina General', '', 'asdsa', 'vistas/img/atenciones/i4/34/241.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', '', '', '', '', '2020-12-10', '2020-12-10 21:24:18'),
(46, 35, 9, '2', '2', '', 'Medicina General', '', '12123', 'vistas/img/atenciones/i3/35/355.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', 'vistas/img/atenciones/doc/doc2.jpg', '', '', '', '', '2020-12-18', '2020-12-10 21:26:08'),
(49, 38, 9, '2', '2', '', 'Medicina Interna', '', '123213', 'vistas/img/atenciones/i4/38/151.jpg', '', '', '', '', '', '', '', '2020-12-10', '2020-12-11 01:16:14'),
(50, 39, 9, '2', '1', '', 'Medicina General', '', '123132156sadsadsad', 'vistas/img/atenciones/i2/39/580.jpg', '', '', '', '', '', '', '', '2020-12-31', '2020-12-11 01:30:55'),
(51, 40, 9, '1', '3', '', 'Pediatria', '', 'aaaaaa', 'vistas/img/atenciones/i3/40/424.jpg', '', '', '', '', '', '', '', '2020-12-17', '2020-12-11 01:31:39'),
(52, 41, 9, '3', '3', '', 'Gastroenterologia', '', 'SDASDSA', 'vistas/img/atenciones/i2/41/136.jpg', '', '', '', '', '', '', '', '2020-12-09', '2020-12-11 01:48:12'),
(53, 42, 9, '3', '3', '', 'Pediatria', '', '1az32s1sa32d1sad321sa', 'vistas/img/atenciones/i4/42/868.jpg', 'Array', 'Array', 'Array', '', '', '', '', '2020-12-10', '2020-12-11 01:52:11'),
(54, 43, 9, '2', '3', '', 'Gastroenterologia', '', 'SADSA', 'vistas/img/atenciones/i4/43/962.jpg', '', '', '', '', '', '', '', '2020-12-10', '2020-12-11 02:23:38'),
(55, 44, 9, '4', '3', '', 'Pediatria', '', 'sadsadsa', 'vistas/img/atenciones/i4/44/766.jpg', '', '', '', '', '', '', '', '2020-12-23', '2020-12-11 02:24:23'),
(56, 45, 9, '4', '3', '', 'Gastroenterologia', '', '212sad12sa', 'vistas/img/atenciones/45/674.jpg', 'vistas/img/atenciones/i2/45/741.jpg', 'vistas/img/atenciones/i3/45/508.jpg', 'vistas/img/atenciones/i4/45/884.jpg', '', '', '', '', '2020-12-19', '2020-12-11 02:26:41'),
(57, 46, 9, '1', '1', '', 'Medicina Interna', '', 'AA', 'vistas/img/atenciones/46/762.jpg', 'vistas/img/atenciones/i2/46/224.jpg', 'vistas/img/atenciones/i3/46/800.jpg', 'vistas/img/atenciones/i4/46/381.jpg', '', '', '', '', '2020-12-10', '2020-12-11 03:23:28'),
(58, 47, 9, '2', '2', '', 'Gastroenterologia', '', '123123132', 'vistas/img/atenciones/47/180.jpg', 'vistas/img/atenciones/i2/47/676.jpg', 'vistas/img/atenciones/i3/47/992.jpg', 'vistas/img/atenciones/i4/47/928.jpg', '', '', '', '', '2020-12-24', '2020-12-11 03:24:04'),
(59, 48, 9, '4', '2', '', 'Medicina General', '', '1321322', 'vistas/img/atenciones/48/160.jpg', 'vistas/img/atenciones/i2/48/168.jpg', 'vistas/img/atenciones/i3/48/362.jpg', 'vistas/img/atenciones/i4/48/674.jpg', '', '', '', '', '2020-12-10', '2020-12-11 03:28:48'),
(61, 49, 9, '3', '3', '', 'Gastroenterologia', '', 'asdasd', 'vistas/img/atenciones/49/458.jpg', 'vistas/img/atenciones/i2/49/173.jpg', 'vistas/img/atenciones/i3/49/796.jpg', 'vistas/img/atenciones/i4/49/657.jpg', '', '', '', '', '2020-12-23', '2020-12-11 03:57:45'),
(62, 50, 9, '2', '2', '', 'Medicina General', '', 'FINAL CORREGIDO DE 4', 'vistas/img/atenciones/50/254.jpg', 'vistas/img/atenciones/i2/50/577.jpg', 'vistas/img/atenciones/i3/50/257.jpg', 'vistas/img/atenciones/i4/50/162.jpg', '', '', '', '', '2020-12-11', '2020-12-11 03:58:48'),
(63, 51, 9, '3', '4', '', 'Medicina General', '', 'asdsadsa', 'vistas/img/atenciones/51/915.jpg', 'vistas/img/atenciones/i2/51/368.jpg', '', '', '', '', '', '', '2020-12-15', '2020-12-22 13:13:04'),
(64, 52, 9, '3', '3', '', 'Medicina General', '', 'asdsadsa', 'vistas/img/atenciones/52/599.jpg', 'vistas/img/atenciones/i2/52/331.jpg', '', '', '', '', '', '', '2020-12-16', '2020-12-22 14:13:56'),
(65, 53, 9, '3', '1', '', 'Medicina Interna', '', 'Se rompio el brazo', 'vistas/img/atenciones/53/426.jpg', 'vistas/img/atenciones/i2/53/760.jpg', '', '', '', '', '', '', '0000-00-00', '2020-12-28 13:01:15'),
(66, 54, 9, '4', '1', '', 'Cred', '', 'cojo', 'vistas/img/atenciones/54/148.jpg', '', '', '', '', '', '', '', '2020-12-28', '2020-12-28 13:54:53');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `historia_clinica`
--

CREATE TABLE `historia_clinica` (
  `id_historia_clinica` int(11) NOT NULL,
  `id_usuario` int(11) NOT NULL,
  `id_paciente` text COLLATE utf8_spanish_ci NOT NULL,
  `tipo` text COLLATE utf8_spanish_ci NOT NULL,
  `atenciones` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `historia_clinica`
--

INSERT INTO `historia_clinica` (`id_historia_clinica`, `id_usuario`, `id_paciente`, `tipo`, `atenciones`, `fecha`) VALUES
(9, 9, '4', 'Activo', '[{\"id_atencion\":\"21\",\"id_paciente\":\"4\",\"id_personal_salud\":\"2\",\"servicio\":\"Pediatria\",\"diagnostico\":\"kkkkkkkkkkkkk (d1234), kkkkkkkkkkkkk (d1234), kkkkkkkkkkkkk (d1234), kkkkkkkkkkkkk (d1234), kkkkkkkkkkkkk (d1234), kkkkkkkkkkkkk (d1234), \",\"fecha_atencion\":\"2020-04-07\"},{\"id_atencion\":\"22\",\"id_paciente\":\"4\",\"id_personal_salud\":\"2\",\"servicio\":\"Pediatria\",\"diagnostico\":\"llllllllllllllllllllllllll (d1234), llllllllllllllllllllllllll (d1234), llllllllllllllllllllllllll (d1234), llllllllllllllllllllllllll (d1234), llllllllllllllllllllllllll (d1234), llllllllllllllllllllllllll (d1234), \",\"fecha_atencion\":\"2020-04-15\"},{\"id_atencion\":\"23\",\"id_paciente\":\"4\",\"id_personal_salud\":\"2\",\"servicio\":\"Cirugia\",\"diagnostico\":\"mmmmmmmm (d1234), mmmmmmmm (d1234), mmmmmmmm (d1234), mmmmmmmm (d1234), mmmmmmmm (d1234), mmmmmmmm (d1234), \",\"fecha_atencion\":\"2020-04-22\"},{\"id_atencion\":\"62\",\"id_paciente\":\"2\",\"id_personal_salud\":\"2\",\"servicio\":\"Medicina General\",\"diagnostico\":\"FINAL CORREGIDO DE 4\",\"fecha_atencion\":\"2020-12-11\"}]', '2020-12-11 04:06:57'),
(10, 9, '1', 'Activo', '[{\"id_atencion\":\"11\",\"id_paciente\":\"1\",\"id_personal_salud\":\"1\",\"servicio\":\"Medicina\",\"diagnostico\":\"aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), aaaaaaaaaaaaaaaaaaa (1025), \",\"fecha_atencion\":\"2020-04-01\"},{\"id_atencion\":\"12\",\"id_paciente\":\"1\",\"id_personal_salud\":\"1\",\"servicio\":\"Pediatria\",\"diagnostico\":\"bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122)\",\"fecha_atencion\":\"2020-04-08\"},{\"id_atencion\":\"13\",\"id_paciente\":\"1\",\"id_personal_salud\":\"2\",\"servicio\":\"Medicina\",\"diagnostico\":\"cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000) \",\"fecha_atencion\":\"2020-04-09\"},{\"id_atencion\":\"14\",\"id_paciente\":\"1\",\"id_personal_salud\":\"1\",\"servicio\":\"Medicina\",\"diagnostico\":\"dddddddddddddd (d2340), dddddddddddddd (d2340), dddddddddddddd (d2340), dddddddddddddd (d2340), dddddddddddddd (d2340), dddddddddddddd (d2340),  \",\"fecha_atencion\":\"2020-04-09\"}]', '2020-04-23 03:11:46'),
(13, 9, '5', 'Pasivo', '[{\"id_atencion\":\"15\",\"id_paciente\":\"2\",\"id_personal_salud\":\"1\",\"servicio\":\"Ginecologia\",\"diagnostico\":\"eeeeeeeeeeeeeeee (d2340), eeeeeeeeeeeeeeee (d2340), eeeeeeeeeeeeeeee (d2340), eeeeeeeeeeeeeeee (d2340), eeeeeeeeeeeeeeee (d2340), eeeeeeeeeeeeeeee (d2340), eeeeeeeeeeeeeeee (d2340)\",\"fecha_atencion\":\"2020-04-08\"},{\"id_atencion\":\"16\",\"id_paciente\":\"2\",\"id_personal_salud\":\"1\",\"servicio\":\"Pediatria\",\"diagnostico\":\"fffffffffffffffffffffff (d1234), fffffffffffffffffffffff (d1234), fffffffffffffffffffffff (d1234), fffffffffffffffffffffff (d1234), fffffffffffffffffffffff (d1234), fffffffffffffffffffffff (d1234), \",\"fecha_atencion\":\"2020-04-14\"},{\"id_atencion\":\"17\",\"id_paciente\":\"2\",\"id_personal_salud\":\"1\",\"servicio\":\"Ginecologia\",\"diagnostico\":\"ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), \",\"fecha_atencion\":\"2020-04-06\"},{\"id_atencion\":\"18\",\"id_paciente\":\"2\",\"id_personal_salud\":\"2\",\"servicio\":\"Pediatria\",\"diagnostico\":\"hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), \",\"fecha_atencion\":\"2020-04-01\"},{\"id_atencion\":\"24\",\"id_paciente\":\"5\",\"id_personal_salud\":\"1\",\"servicio\":\"Medicina\",\"diagnostico\":\"Dolor de diente (X190), Dolor de espalda ()\",\"fecha_atencion\":\"2020-04-17\"}]', '2020-04-17 18:57:06'),
(16, 11, '3', 'Pasivo', '[{\"id_atencion\":\"19\",\"id_paciente\":\"3\",\"id_personal_salud\":\"2\",\"servicio\":\"Pediatria\",\"diagnostico\":\"iiiiiiiiiiiiiiiiiiiiiii (d1234), iiiiiiiiiiiiiiiiiiiiiii (d1234), iiiiiiiiiiiiiiiiiiiiiii (d1234), iiiiiiiiiiiiiiiiiiiiiii (d1234), iiiiiiiiiiiiiiiiiiiiiii (d1234), iiiiiiiiiiiiiiiiiiiiiii (d1234), \",\"fecha_atencion\":\"2020-04-09\"},{\"id_atencion\":\"20\",\"id_paciente\":\"3\",\"id_personal_salud\":\"1\",\"servicio\":\"Ginecologia\",\"diagnostico\":\"jjjjjjjjjjjjjjjjjjjjjj (d1234), jjjjjjjjjjjjjjjjjjjjjj (d1234), jjjjjjjjjjjjjjjjjjjjjj (d1234), jjjjjjjjjjjjjjjjjjjjjj (d1234), jjjjjjjjjjjjjjjjjjjjjj (d1234), jjjjjjjjjjjjjjjjjjjjjj (d1234), \",\"fecha_atencion\":\"2020-04-02\"}]', '2020-04-27 21:15:06'),
(20, 9, '17', 'Pasivo', '[{\"id_atencion\":\"13\",\"id_paciente\":\"1\",\"id_personal_salud\":\"2\",\"servicio\":\"Medicina\",\"diagnostico\":\"cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000), cccccccccccccccccc (1000) \",\"fecha_atencion\":\"2020-04-09\"},{\"id_atencion\":\"14\",\"id_paciente\":\"1\",\"id_personal_salud\":\"1\",\"servicio\":\"Medicina\",\"diagnostico\":\"dddddddddddddd (d2340), dddddddddddddd (d2340), dddddddddddddd (d2340), dddddddddddddd (d2340), dddddddddddddd (d2340), dddddddddddddd (d2340),  \",\"fecha_atencion\":\"2020-04-09\"},{\"id_atencion\":\"12\",\"id_paciente\":\"1\",\"id_personal_salud\":\"1\",\"servicio\":\"Pediatria\",\"diagnostico\":\"bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122), bbbbbbbbbbbbbbbbb (1122)\",\"fecha_atencion\":\"2020-04-08\"}]', '2020-07-16 21:56:56'),
(21, 9, '24', 'Archivo General', '[{\"id_atencion\":\"17\",\"id_paciente\":\"2\",\"id_personal_salud\":\"1\",\"servicio\":\"Ginecologia\",\"diagnostico\":\"ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), ggggggggggggggggg (d1234), \",\"fecha_atencion\":\"2020-04-06\"},{\"id_atencion\":\"18\",\"id_paciente\":\"2\",\"id_personal_salud\":\"2\",\"servicio\":\"Pediatria\",\"diagnostico\":\"hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), hhhhhhhhhhhhh (d1234), \",\"fecha_atencion\":\"2020-04-01\"}]', '2020-07-16 22:06:13');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pacientes`
--

CREATE TABLE `pacientes` (
  `id_paciente` int(11) NOT NULL,
  `documento` int(11) NOT NULL,
  `nombre1` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre2` text COLLATE utf8_spanish_ci NOT NULL,
  `nombre3` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido_pat` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido_mat` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha_nacimiento` date NOT NULL,
  `telefono` text COLLATE utf8_spanish_ci NOT NULL,
  `atenciones` int(11) NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `pacientes`
--

INSERT INTO `pacientes` (`id_paciente`, `documento`, `nombre1`, `nombre2`, `nombre3`, `apellido_pat`, `apellido_mat`, `fecha_nacimiento`, `telefono`, `atenciones`, `fecha`) VALUES
(1, 11223344, 'Luis', 'Andrés', '', 'Suárez', 'Orbegoso', '2002-03-29', '159357456', 0, '2020-03-30 00:12:05'),
(2, 45659878, 'Joe', '', '', 'Barrios', 'Medina', '1858-05-12', '976585825', 0, '2020-05-15 17:33:52'),
(3, 85251565, 'Larisa', '', '', 'Ruiz', 'Cotrina', '1958-03-01', '076 852561', 0, '2020-03-29 22:56:37'),
(4, 65983212, 'Luis', 'Fernando', 'Fernandillo', 'Loquex', 'Flores', '2019-11-06', '987654321', 0, '2020-03-29 22:19:55'),
(5, 46512412, 'Joe', 'Joseph', '', 'Barrios', 'Medina', '1990-08-30', '943905009', 0, '2020-04-17 18:53:49'),
(6, 65984512, 'Alex', 'Faustino', '', 'Vargas', 'Vargas', '0000-00-00', '987456321', 0, '2020-05-14 21:21:04'),
(7, 25633658, 'Oscar', 'Manuel', '', 'Salazar', 'Chacon', '0000-00-00', '998877445', 0, '2020-05-14 21:21:04'),
(8, 23658965, 'Maria', 'Isabel', '', 'Vigo', 'Turco', '0000-00-00', '963258741', 0, '2020-05-14 21:21:04'),
(9, 78963254, 'Guillermo', 'Augusto', '', 'Vergara', 'Vergara', '0000-00-00', '963852852', 0, '2020-05-14 21:21:04'),
(10, 12365456, 'Karol', '', '', 'Hernandez', 'Hernandez', '0000-00-00', '987852741', 0, '2020-05-15 00:16:34'),
(11, 25633652, 'Jhonatan', '', '', 'Avalos', 'Carrion', '0000-00-00', '951852741', 0, '2020-05-14 21:21:04'),
(12, 74455887, 'Ruth', 'Noemy', '', 'Vasquez', 'Mego', '0000-00-00', '963852147', 0, '2020-05-14 21:21:04'),
(13, 89966558, 'Jean', 'Carlos', '', 'Cruz', 'Reyes', '0000-00-00', '935852147', 0, '2020-05-14 21:21:04'),
(14, 45212365, 'Eduardo', '', '', 'Huaccha', 'Mu?oz', '0000-00-00', '999666111', 0, '2020-05-14 21:21:04'),
(15, 15935785, 'Zarita', '', '', 'Briones', 'Briones', '0000-00-00', '959914857', 0, '2020-05-14 21:21:04'),
(16, 75395125, 'Alberto', '', '', 'Vasquez', 'Tantalean', '0000-00-00', '957397357', 0, '2020-05-14 21:21:04'),
(17, 26688442, 'Mario', '', '', 'Bazan', 'Briones', '0000-00-00', '954879856', 0, '2020-05-14 21:21:04'),
(18, 14414556, 'Ana', '', '', 'Orbegoso', 'Flores', '0000-00-00', '952362356', 0, '2020-05-14 21:21:04'),
(19, 36655441, 'Cristian', 'Paul', '', 'Perez', 'Escobedo', '0000-00-00', '949844855', 0, '2020-05-14 21:21:04'),
(20, 45588996, 'Deysi', '', '', 'Pereyra', 'Navarro', '0000-00-00', '947327355', 0, '2020-05-14 21:21:04'),
(21, 69988554, 'Jose', 'Carlos', '', 'Tavara', 'Carbajal', '0000-00-00', '944809854', 0, '2020-05-14 21:21:04'),
(22, 78963254, 'Johan', '', '', 'Quispe', 'Gil', '0000-00-00', '942292354', 0, '2020-05-14 21:21:04'),
(23, 99998888, 'Luciano', '', '', 'Ferrari', 'Maceratti', '1998-05-15', '99998888', 0, '2020-05-21 22:55:15'),
(24, 66665555, 'Matias', '', '', 'Rokefor', 'Leocadio', '1989-09-18', '986555222', 0, '2020-05-21 22:57:05'),
(26, 55882233, 'Alfonso', '', '', 'Ugarte', 'Medina', '2020-02-10', '963258147', 0, '2020-11-03 21:33:42'),
(27, 5253, 'prueba3', '', '', 'prueba1', 'prueba2', '2120-05-10', '', 0, '2020-12-09 16:27:28'),
(28, 1231, 'pp', '', '', 'p1', 'p2', '2020-12-10', '', 0, '2020-12-11 04:27:35'),
(29, 11211, '11', '', '', '11', '11', '0000-00-00', '', 0, '2020-12-11 04:33:07'),
(30, 48481515, 'Grimaldo', '', '', 'Rocket', 'Power', '1995-05-10', '999333222', 0, '2020-12-28 17:11:38');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `personal_salud`
--

CREATE TABLE `personal_salud` (
  `id_personal_salud` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `documento` text COLLATE utf8_spanish_ci NOT NULL,
  `profesion` text COLLATE utf8_spanish_ci NOT NULL,
  `especialidad` text COLLATE utf8_spanish_ci NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `personal_salud`
--

INSERT INTO `personal_salud` (`id_personal_salud`, `nombre`, `apellido`, `documento`, `profesion`, `especialidad`, `fecha`) VALUES
(1, 'Luis', 'Suarez', '46383832', 'Doctor', 'CIRUJANO', '2020-03-30 00:20:57'),
(2, 'Larisa', 'Ruiz', '12325632', 'Enfermera', 'CIRUJANO', '2020-04-27 16:18:47'),
(3, 'Daniel', 'Seclen', '85963652', 'Doctor', 'Cirujano', '2020-05-13 23:30:35'),
(4, 'Luciano', 'Ramirez Perez', '56897458', 'Doctor', 'CIRUJANO', '2020-05-21 23:03:47'),
(6, 'Carlos', 'Diaz', '45126396', 'Doctor', 'CIRUJANO', '2020-05-21 23:06:18'),
(7, 'Lucas', 'Bibrio', '74588547', 'Enfermera', 'Enfermera', '2020-05-21 23:41:06'),
(10, 'prueba', 'prueba1', '752148', 'Doctor', 'aaa', '2020-12-09 16:02:33'),
(11, 'prueba', 'prueba1', '752148', 'Enfermera', '', '2020-12-09 16:09:15'),
(12, 'prueba', 'prueba1', '4125-10', 'Doctor', '', '2020-12-09 16:17:16'),
(13, '11', '11', '111', 'Enfermera', '', '2020-12-11 04:26:41'),
(14, '11', '11', '111', 'Enfermera', '', '2020-12-11 04:26:41'),
(15, '123213', '12321321', '9875-1', 'Enfermera', '', '2020-12-11 04:27:01'),
(16, 'll2', 'oo2', '85693652', 'Psicologo', 'oo3', '2020-12-22 13:19:30');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios`
--

CREATE TABLE `usuarios` (
  `id_usuario` int(11) NOT NULL,
  `nombre` text COLLATE utf8_spanish_ci NOT NULL,
  `apellido` text COLLATE utf8_spanish_ci NOT NULL,
  `usuario` text COLLATE utf8_spanish_ci NOT NULL,
  `password` text COLLATE utf8_spanish_ci NOT NULL,
  `perfil` text COLLATE utf8_spanish_ci NOT NULL,
  `foto` text COLLATE utf8_spanish_ci NOT NULL,
  `estado` int(11) NOT NULL,
  `ultimo_login` datetime NOT NULL,
  `fecha` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_spanish_ci;

--
-- Volcado de datos para la tabla `usuarios`
--

INSERT INTO `usuarios` (`id_usuario`, `nombre`, `apellido`, `usuario`, `password`, `perfil`, `foto`, `estado`, `ultimo_login`, `fecha`) VALUES
(9, 'Luis', 'Suárez', 'admin', '$2a$07$asxx54ahjppf45sd87a5auXBm1Vr2M1NV5t/zNQtGHGpS5fFirrbG', 'Administrador', 'vistas/img/usuarios/admin/687.jpg', 1, '2020-12-30 13:11:46', '2020-12-30 18:11:46'),
(10, 'Joe', 'Barrios', 'joe', '$2a$07$asxx54ahjppf45sd87a5auzb3RjRW7f3ItQzCOz5RcrcvZ1f/DgV.', 'Administrador', 'vistas/img/usuarios/joe/916.jpg', 1, '2020-11-20 10:16:55', '2020-11-20 15:16:55'),
(11, 'Larisa', 'Ruiz', 'larisa', '$2a$07$asxx54ahjppf45sd87a5aumXW0ja8knQb74a39rBHv4HtKouDxjOm', 'Especial', 'vistas/img/usuarios/larisa/850.jpg', 1, '2020-11-20 10:17:06', '2020-11-20 15:17:06'),
(12, 'Adelmio Kenide', 'Plasencia Castillo', 'kenide', '$2a$07$asxx54ahjppf45sd87a5aua7TgZEPr5ntEVQk6AbD1AwJXhTzWKBu', 'Basico', 'vistas/img/usuarios/kenide/615.jpg', 1, '2020-04-27 11:03:34', '2020-04-27 21:09:30');

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `atencion`
--
ALTER TABLE `atencion`
  ADD PRIMARY KEY (`id_atencion`);

--
-- Indices de la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  ADD PRIMARY KEY (`id_historia_clinica`);

--
-- Indices de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  ADD PRIMARY KEY (`id_paciente`);

--
-- Indices de la tabla `personal_salud`
--
ALTER TABLE `personal_salud`
  ADD PRIMARY KEY (`id_personal_salud`);

--
-- Indices de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_usuario`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `atencion`
--
ALTER TABLE `atencion`
  MODIFY `id_atencion` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT de la tabla `historia_clinica`
--
ALTER TABLE `historia_clinica`
  MODIFY `id_historia_clinica` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT de la tabla `pacientes`
--
ALTER TABLE `pacientes`
  MODIFY `id_paciente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT de la tabla `personal_salud`
--
ALTER TABLE `personal_salud`
  MODIFY `id_personal_salud` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT de la tabla `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_usuario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
