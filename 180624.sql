-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versión del servidor:         8.0.30 - MySQL Community Server - GPL
-- SO del servidor:              Win64
-- HeidiSQL Versión:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Volcando estructura de base de datos para formularios
CREATE DATABASE IF NOT EXISTS `calidad` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `calidad`;

-- Volcando estructura para tabla formularios.adicionals
CREATE TABLE IF NOT EXISTS `adicionals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `abreviaturas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aviso_lector` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `adicionals_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `adicionals_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.adicionals: ~3 rows (aproximadamente)
INSERT IGNORE INTO `adicionals` (`id`, `abreviaturas`, `aviso_lector`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'Producto de prueba', 'Producto de prueba', 2, '2024-02-28 01:32:35', '2024-02-28 01:32:35'),
	(2, '2', '2', 3, '2024-06-11 01:10:31', '2024-06-11 01:10:31'),
	(3, 'PRUEBAS', 'PRUEBAS', 4, '2024-06-11 01:30:05', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.almacens
CREATE TABLE IF NOT EXISTS `almacens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `precausiones_generales` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `condicion_alm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incompatibilidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `almacens_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `almacens_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.almacens: ~3 rows (aproximadamente)
INSERT IGNORE INTO `almacens` (`id`, `precausiones_generales`, `condicion_alm`, `incompatibilidad`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 2, '2024-02-28 01:32:35', '2024-02-28 01:32:35'),
	(2, '2', '2', '2', 3, '2024-06-11 01:10:31', '2024-06-11 01:10:31'),
	(3, 'PRUEBAS', '100624', '100624', 4, '2024-06-11 01:30:05', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.auxilios
CREATE TABLE IF NOT EXISTS `auxilios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sintoma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `auxilio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `auxilios_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `auxilios_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.auxilios: ~8 rows (aproximadamente)
INSERT IGNORE INTO `auxilios` (`id`, `tipo`, `sintoma`, `auxilio`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'ORAL', 'asf', 'fdfdsf', 3, '2024-06-11 01:26:17', '2024-06-11 01:26:17'),
	(2, 'CUTÁNEA', 'dfsdfd', 'fdfdsfsdfds', 3, '2024-06-11 01:26:17', '2024-06-11 01:26:17'),
	(3, 'INHALACIÓN', 'fdsff', 'fdfdsf', 3, '2024-06-11 01:26:17', '2024-06-11 01:26:17'),
	(4, 'OCULAR', 'pruebas', 'fdfdsf', 3, '2024-06-11 01:26:17', '2024-06-11 01:26:17'),
	(5, 'ORAL', 'PRUEBAS', '100624', 4, '2024-06-11 01:30:39', '2024-06-11 22:27:42'),
	(6, 'CUTÁNEA', 'PRUEBAS', 'PRUEBAS', 4, '2024-06-11 01:30:39', '2024-06-11 22:27:42'),
	(7, 'INHALACIÓN', '100624', 'PRUEBAS', 4, '2024-06-11 01:30:39', '2024-06-11 22:27:42'),
	(8, 'OCULAR', 'PRUEBAS', '100624', 4, '2024-06-11 01:30:39', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.biovitas
CREATE TABLE IF NOT EXISTS `biovitas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `desc_si_envase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si_tapa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si_liner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_si_etiqueta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_no_etiqueta` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_si_etiqueta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_no_etiqueta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si_capsula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si_desecante` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si_mezcla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `densidad_mezcla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ph_mezcla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_envase_si` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote_envase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cad_envase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criterio_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sap_id_etiqueta` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `biovitas_criterio_id_foreign` (`criterio_id`),
  CONSTRAINT `biovitas_criterio_id_foreign` FOREIGN KEY (`criterio_id`) REFERENCES `criterios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.biovitas: ~1 rows (aproximadamente)
INSERT IGNORE INTO `biovitas` (`id`, `desc_si_envase`, `desc_si_tapa`, `desc_si_liner`, `img_si_etiqueta`, `img_no_etiqueta`, `desc_si_etiqueta`, `desc_no_etiqueta`, `desc_si_capsula`, `desc_si_desecante`, `desc_si_mezcla`, `densidad_mezcla`, `ph_mezcla`, `desc_envase_si`, `lote_envase`, `cad_envase`, `criterio_id`, `created_at`, `updated_at`, `sap_id_etiqueta`) VALUES
	(1, '01Tarro pastillero PET verde R-38 de 150 ml, limpio, sin fauna nociva, completo y en buen estado.', '01Tapa plana VERDE R-38 sin liner bogri, limpia, completa, cierre hermético, el inserto de la tapa sin zafarse, sin abolladuras, y en buen estado.', '01Foil multiperforado para pet  R-38, con un sellado hermético, sin fugas, limpio y completo.', 'etiqueta_si.jpg', 'etiqueta_no.jpg', '01Etiqueta 58X163MM COMLAX CÁPSULAS BIOVITA 30 CAP, completa, sin arrugas, sin burbujas, limpia, pegada correctamente, alineada y centrada', '01Etiqueta de diferente producto, sucia, arrugada, con burbujas, rota, pegada incorrectamente, desalineada o no centrada.', '01Cápsula HGC tamaño 00 blanco/blanco.   En buen estado, con doble clip, limpia, en los pesos correctos.', '01Desecamen Pak Pem-Hi 0.5 g, limpio, completo, 1 pieza por envase.', '01Polvo de granulometría fina, de color café claro, de brillo bajo, olor ligero a canela, homogéneo y sin materia extraña.', '0.7322 g/ml01', '018.5', '01Codificado en ubicación correcta (parte inferior del envase), centrado, visible, legible y alineado.', 'LDCBVDDMMAA2024', 'MM/AAAA MX/TX2024', 16, '2024-05-30 19:30:33', '2024-06-18 00:54:26', '01E-16563');

-- Volcando estructura para tabla formularios.bpms
CREATE TABLE IF NOT EXISTS `bpms` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `turno` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `hora` time NOT NULL,
  `ubicacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realizo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vobo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.bpms: ~4 rows (aproximadamente)
INSERT IGNORE INTO `bpms` (`id`, `fecha`, `turno`, `hora`, `ubicacion`, `realizo`, `vobo`, `created_at`, `updated_at`) VALUES
	(1, '2024-03-06', 'MAÑANA', '10:55:00', 'CEDROS', 'Pepe Lepu', 'Jovany Guillen', '2024-03-06 18:56:43', '2024-03-06 18:56:43'),
	(2, '2024-06-12', 'MAÑANA', '09:05:00', 'CEDROS', 'Pepe Lepu', 'PRUEBAS2024', '2024-06-12 17:06:00', '2024-06-12 17:06:00'),
	(3, '2024-06-12', 'Pruebas autorizado', '13:11:00', 'MEZQUITE', 'PRUEBAS', 'JEGC', '2024-06-12 21:12:08', '2024-06-12 21:36:16'),
	(4, '2024-06-12', 'Pruebas autorizado', '13:11:00', 'MEZQUITE', 'PRUEBAS', 'JGC', '2024-06-12 21:13:10', '2024-06-12 21:43:01'),
	(5, '2024-06-11', 'PRUEBAS', '13:11:00', 'CEDROS', 'JOVANY', 'JGC', '2024-06-12 21:14:23', '2024-06-15 01:09:30');

-- Volcando estructura para tabla formularios.capsulas
CREATE TABLE IF NOT EXISTS `capsulas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sap_id_liner` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_si_liner` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_no_liner` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si_liner` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_no_liner` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `sap_id_extra` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_si_comodin` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_no_comodin` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_si_comodin` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_no_comodin` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criterio_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `capsulas_criterio_id_foreign` (`criterio_id`),
  CONSTRAINT `capsulas_criterio_id_foreign` FOREIGN KEY (`criterio_id`) REFERENCES `criterios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.capsulas: ~1 rows (aproximadamente)
INSERT IGNORE INTO `capsulas` (`id`, `sap_id_liner`, `img_si_liner`, `img_no_liner`, `desc_si_liner`, `desc_no_liner`, `sap_id_extra`, `img_si_comodin`, `img_no_comodin`, `desc_si_comodin`, `desc_no_comodin`, `criterio_id`, `created_at`, `updated_at`) VALUES
	(4, '006', '_90172663_thinkstockphotos-537817268.jpg', 'tabletas.jpg', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', NULL, 'images_(1).jpeg', 'images_(1).jpeg', NULL, NULL, 5, '2024-04-03 17:59:14', '2024-04-03 17:59:14');

-- Volcando estructura para tabla formularios.codificados
CREATE TABLE IF NOT EXISTS `codificados` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img_si_codi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_no_codi` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_si_codi` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_no_codi` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_si_display_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_no_display_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_si_display_c` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_no_display_c` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lote_envase_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cad_envase_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote_display_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cad_display_c` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criterio_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `codificados_criterio_id_foreign` (`criterio_id`) USING BTREE,
  CONSTRAINT `codificados_criterio_id_foreign` FOREIGN KEY (`criterio_id`) REFERENCES `criterios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.codificados: ~9 rows (aproximadamente)
INSERT IGNORE INTO `codificados` (`id`, `img_si_codi`, `img_no_codi`, `desc_si_codi`, `desc_no_codi`, `img_si_display_c`, `img_no_display_c`, `desc_si_display_c`, `desc_no_display_c`, `lote_envase_c`, `cad_envase_c`, `lote_display_c`, `cad_display_c`, `criterio_id`, `created_at`, `updated_at`) VALUES
	(4, 'circulo.png', 'circulo.png', '001', '001', 'circulo.png', 'circulo.png', '001', '001', '001', '001', '001', '001', 1, '2024-03-19 18:03:51', '2024-03-19 18:03:51'),
	(5, 'lote envase.png', 'lote envase no.png', 'Lote y caducidad impreso por parte del maquilador en la parte posterior inferior (debajo del código de barras y símbolos). Caracteres, centrados, legibles, completos, de tamaño y ubicación adecuados.', 'Lote incorrecto, ilegible, incompleto, alargado, curveado, desalineado, doble lote, diferente tamaño de caracteres, ubicación incorrecta. Zona de lotificado o envase manchado o salpicado de tinta.', 'lote display.png', 'lote caducidad mal.png', 'Lote y caducidad impresos en la tapa de la base del display. Caracteres, centrados, legibles, completos, de tamaño y ubicación adecuados.', 'Lote incorrecto, ilegible, incompleto, alargado, curveado, desalineado, doble lote, diferente tamaño de caracteres, ubicación incorrecta. Zona de lotificado o envase manchado o salpicado de tinta.', 'LDXYSDDMMAA', 'MM/AAAA MX/TX', 'LDXYSDDMMAA', 'MM/AAAA MX/TX', 2, '2024-03-20 22:36:37', '2024-03-20 22:36:37'),
	(7, 'aa74041a32154cba94bfdca71985d1dd.jpg', 'tubo.jpg', 'lorem itsu 3', 'lorem itsu 3', 'tubos_aluminio.png', 'aa74041a32154cba94bfdca71985d1dd.jpg', 'lorem itsu 3', 'lorem itsu 3', 'LDXYSDDMMAA', 'MM/AAAA MX/TX', 'LDXYSDDMMAA', 'MM/AAAA MX/TX', 3, '2024-03-25 16:58:15', '2024-03-25 16:58:15'),
	(8, 'otra.webp', 'otra.webp', '1', '1', 'universal.jpg', '8_ad3_clay_1000x1000_1645b256-5817-425e-841c-07891c9c91ae.webp', '1', '1', '1', '1', NULL, NULL, 4, '2024-03-28 21:26:09', '2024-03-28 21:26:09'),
	(15, 'retail_ready_packaging_gene.jpg', '2092331.jpg', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'otra.webp', 'counter_top_displays_confectionery2.png', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'LDXYSDDMMAA', 'MM/AAAA MX/TX', 'LDXYSDDMMAA', 'MM/AAAA MX/TX', 5, '2024-04-03 17:59:14', '2024-04-03 17:59:14'),
	(16, 'images_(3).jpeg', 'images_(3).jpeg', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'universal.jpg', 'universal.jpg', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'LDXYSDDMMAA', 'MM/AAAA MX/TX', 'PRUEBAS', 'MM/AAAA MX/TX', 6, '2024-04-05 01:11:06', '2024-04-05 01:11:06'),
	(17, 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'PRUEBAS', 'PRUEBAS', 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'PRUEBAS', 'PRUEBAS', 'LDXYSDDMMAA', 'MM/AAAA MX/TX', 'LDXYSDDMMAA', 'MM/AAAA MX/TX', 7, '2024-04-11 22:25:14', '2024-04-11 22:25:14'),
	(19, 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique sit amet libero vel mollis. Nullam accumsan nec orci a tempor. Praesent elementum justo massa, et pellentesque nulla sollicitudin ut. Pellentesque eu ligula sapien.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique sit amet libero vel mollis. Nullam accumsan nec orci a tempor. Praesent elementum justo massa, et pellentesque nulla sollicitudin ut. Pellentesque eu ligula sapien.', NULL, NULL, NULL, NULL, 'LDXYSDDMMAA', 'MM/AAAA MX/TX', NULL, NULL, 10, '2024-04-16 19:24:58', '2024-04-16 19:24:58'),
	(20, 'looky.png', 'looky.png', 'F', 'F', NULL, NULL, NULL, NULL, 'F', 'F', NULL, NULL, 11, '2024-05-24 00:45:56', '2024-05-24 00:45:56'),
	(21, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'lote feo', '2025-05-11', NULL, NULL, 12, '2024-05-29 22:29:24', '2024-06-17 18:40:12'),
	(22, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LDXYSDDMMAA', 'MM/AAAA MX/TX', NULL, NULL, 13, '2024-05-30 01:44:13', '2024-05-30 01:44:13'),
	(23, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'LDXYSDDMMAA', 'MM/AAAA MX/TX', NULL, NULL, 19, '2024-06-12 17:12:19', '2024-06-12 17:12:19');

-- Volcando estructura para tabla formularios.contenidos
CREATE TABLE IF NOT EXISTS `contenidos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `cajas_cama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `camas_palet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unidad_caja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unidad_palet` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `pterminado_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `caja_palet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `contenidos_pterminado_id_foreign` (`pterminado_id`),
  CONSTRAINT `contenidos_pterminado_id_foreign` FOREIGN KEY (`pterminado_id`) REFERENCES `pterminados` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.contenidos: ~2 rows (aproximadamente)
INSERT IGNORE INTO `contenidos` (`id`, `cajas_cama`, `camas_palet`, `unidad_caja`, `unidad_palet`, `pterminado_id`, `created_at`, `updated_at`, `caja_palet`) VALUES
	(1, '30', '30', '30', '30', 1, '2024-03-01 01:48:41', '2024-03-01 01:48:41', '30'),
	(2, '20', '30', '20', '20', 2, '2024-03-01 21:41:43', '2024-06-14 22:42:14', '25');

-- Volcando estructura para tabla formularios.corecciones
CREATE TABLE IF NOT EXISTS `corecciones` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `actividad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_corre` datetime DEFAULT NULL,
  `firma_corre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desviacionCorrecion_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `corecciones_desviacioncorrecion_id_foreign` (`desviacionCorrecion_id`),
  CONSTRAINT `corecciones_desviacioncorrecion_id_foreign` FOREIGN KEY (`desviacionCorrecion_id`) REFERENCES `desviaciones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.corecciones: ~22 rows (aproximadamente)
INSERT IGNORE INTO `corecciones` (`id`, `actividad`, `responsable`, `fecha_corre`, `firma_corre`, `tipo`, `desviacionCorrecion_id`, `created_at`, `updated_at`) VALUES
	(1, 'Agregar un día más al cronograma', 'Jovany', '2023-12-14 12:16:59', 'JEGC', 'Acción', 1, '2023-12-14 18:17:25', '2023-12-14 18:17:26'),
	(2, 'Dejar remojar 4 días', 'JESS', '2023-12-14 13:05:00', 'JNPC', 'Acción', 1, '2023-12-14 21:06:01', '2023-12-14 21:06:01'),
	(3, 'Pruebas', 'Juanitoo', '2023-12-14 13:12:00', 'SEB', 'Corrección', 2, '2023-12-14 21:12:37', '2023-12-14 21:12:37'),
	(4, 'Pruebas', 'Juanitoo', '2023-12-14 13:12:00', 'SEB', 'Corrección', 2, '2023-12-14 21:12:46', '2023-12-14 21:12:46'),
	(5, 'Pruebas', 'Juanitoo', '2023-12-14 13:12:00', 'SEB', 'Corrección', 2, '2023-12-14 21:13:05', '2023-12-14 21:13:05'),
	(6, 'ultimoID', 'ultimoID2023', '2023-12-14 15:00:00', 'ultimoID', 'Corrección', 3, '2023-12-14 23:00:42', '2023-12-14 23:48:32'),
	(7, 'Cambiar proceso y gramaje de la formula', 'I&D', '2023-12-20 11:32:00', 'JNPC', 'Corrección', 9, '2023-12-18 19:32:26', '2023-12-18 19:32:26'),
	(8, 'Acciones pruebas', 'I&D', '2023-12-20 11:32:00', 'JNPC', 'Acción', 9, '2023-12-18 19:32:51', '2023-12-18 19:32:51'),
	(9, 'Dejar remojar 4 días', 'Jovany Guillen', '2023-12-20 14:42:00', 'JEGC', 'Corrección', 10, '2023-12-20 22:42:47', '2023-12-20 22:42:47'),
	(10, 'PRUEBAS', 'Jovany Guillen', '2024-01-03 14:20:00', 'JEGC', 'Corrección', 14, '2024-01-03 22:20:57', '2024-01-03 22:20:57'),
	(11, 'Dejar remojar 4 días', 'Jovany Guillen', '2024-01-03 17:34:00', 'JEGC', 'Acción', 14, '2024-01-04 01:34:58', '2024-01-04 01:34:58'),
	(12, 'otra', 'Jovany Guillen', '2024-01-03 17:34:00', 'JEGC', 'Acción', 14, '2024-01-04 01:37:03', '2024-01-04 01:37:03'),
	(13, 'Cambiar proceso y gramaje de la formula', 'Sergio el Bailador', '2024-01-03 17:38:00', 'p', 'Acción', 14, '2024-01-04 01:38:13', '2024-01-04 01:38:13'),
	(14, 'Se autoriza mandar el producto, debido a que la fecha de caducidad variaba por solo tres meses. Y no había forma de identificar las piezas lotificadas  erróneamente.', 'Sergio el Bailador', '2024-01-04 12:58:00', 'SEB', 'Corrección', 15, '2024-01-04 20:58:20', '2024-01-04 20:58:20'),
	(15, 'ultimoID', 'ultimoID', '2024-01-17 12:08:00', 'JEGC', 'Corrección', 17, '2024-01-17 20:08:15', '2024-01-17 20:08:15'),
	(16, 'Pruebas de serie', 'Pruebas de serie', '2024-01-17 13:17:00', 'Pruebas de serie', 'Acción', 18, '2024-01-17 21:17:51', '2024-01-17 21:17:51'),
	(17, 'Dejar remojar 4 días', 'Jovany Guillen', '2024-01-24 09:56:00', 'JEGC', 'Acción', 23, '2024-01-24 17:56:30', '2024-01-24 17:56:30'),
	(18, 'CAMBIO DE SSD', 'JOVANY', '2024-02-27 17:12:00', 'JEGC', 'Acción', 2, '2024-02-28 01:12:26', '2024-02-28 01:12:26'),
	(19, 'No aplica', 'No aplica', NULL, 'No aplica', 'N/A', 2, '2024-05-07 18:03:01', '2024-05-07 18:03:01'),
	(22, 'CAMBIO DE SSD', 'JOVANY', '2024-06-13 09:27:00', 'JEGC', 'Corrección', 3, '2024-06-13 17:27:56', '2024-06-13 17:27:56'),
	(23, 'Limpieza', 'JOVANY', '2024-06-13 09:27:00', 'JEGC', 'Acción', 3, '2024-06-13 17:27:56', '2024-06-13 17:27:56'),
	(24, 'CAMBIO DE GABINETE1', 'CITECNOLOGÍA1', '2024-06-13 12:22:00', 'CITEC1', 'Corrección', 4, '2024-06-13 20:23:09', '2024-06-14 22:09:06'),
	(25, 'REGRESAR GABINETE1', 'JOVANY1', '2024-06-20 12:22:00', 'JGC1', 'Acción', 4, '2024-06-13 20:23:09', '2024-06-14 22:09:06');

-- Volcando estructura para tabla formularios.corrugados
CREATE TABLE IF NOT EXISTS `corrugados` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sap_id_corrugado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_si_corrugado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_no_corrugado` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si_corrugado` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_no_corrugado` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_si_acomodo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_no_acomodo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criterio_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sap_id_separador` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `corrugados_criterio_id_foreign` (`criterio_id`),
  CONSTRAINT `corrugados_criterio_id_foreign` FOREIGN KEY (`criterio_id`) REFERENCES `criterios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.corrugados: ~7 rows (aproximadamente)
INSERT IGNORE INTO `corrugados` (`id`, `sap_id_corrugado`, `img_si_corrugado`, `img_no_corrugado`, `desc_si_corrugado`, `desc_no_corrugado`, `img_si_acomodo`, `img_no_acomodo`, `criterio_id`, `created_at`, `updated_at`, `sap_id_separador`) VALUES
	(1, '001', 'tubos_aluminio.png', 'circulo.png', '001', '001', 'circulo.png', 'circulo.png', 1, '2024-03-19 18:03:51', '2024-03-19 18:03:51', NULL),
	(2, '12480', 'embalaje bien 1.png', 'corrugado_mal.png', 'Embalaje de PT en corrugado (40x30x43cm) en buen estado, displays acomodados de la siguiente manera: 1 cama vertical de 48 piezas (6x8 piezas) y 6 camas horizontales de 16 piezas, como se muestra en la foto: dando un total de 144 piezas. Se debe colocar un separador de cartón (ID:7439) al fondo. Correctamente cerrado con cinta adhesiva transparente. Identificado con etiqueta blanca de producción.', 'Envases de PT empacados en corrugado de tamaño diferente, en mal estado, producto fuera de especificación, mezcla de productos dentro de una sola caja, sin identificación, sin liner de cartón, lotes diferentes, Envases acomodados diferente a lo especificado y/o cantidad de piezas incorrecta.', 'Capturadepantalla2024-03-20140147.png', 'Capturadepantalla2024-03-20140147.png', 2, '2024-03-20 22:36:37', '2024-03-20 22:36:37', NULL),
	(4, '12480', 'tubos_aluminio.png', 'pildoras.jpg', 'lorem itsu 3', 'lorem itsu 3', 'circulo.png', 'pildoras.jpg', 3, '2024-03-25 16:58:15', '2024-03-25 16:58:15', NULL),
	(5, '12480', 'tabletas.jpg', 'images_(2).jpeg', '1', '12', NULL, NULL, 4, '2024-03-28 21:26:09', '2024-03-28 21:26:09', NULL),
	(12, '015', 'tabletas.jpg', 'perro.webp', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'aa74041a32154cba94bfdca71985d1dd.jpg', NULL, 5, '2024-04-03 17:59:14', '2024-04-03 17:59:14', '065'),
	(13, '12480', '51rsxx-dntl._ac_uf894,1000_ql80_.jpg', '51rsxx-dntl._ac_uf894,1000_ql80_.jpg', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', NULL, NULL, 6, '2024-04-05 01:11:06', '2024-04-05 01:11:06', NULL),
	(14, '12480', 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'PRUEBAS', 'PRUEBAS', NULL, NULL, 7, '2024-04-11 22:25:14', '2024-04-11 22:25:14', '1245');

-- Volcando estructura para tabla formularios.criterios
CREATE TABLE IF NOT EXISTS `criterios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sap_pt` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pesos` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `notas` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.criterios: ~17 rows (aproximadamente)
INSERT IGNORE INTO `criterios` (`id`, `tipo`, `id_sap_pt`, `producto`, `pesos`, `notas`, `created_at`, `updated_at`) VALUES
	(1, 'VISCOSO-1', '14949', 'OXYS-CREMA ANTIVEJECIMIENTO', 'Peso de caja pt ideal: 13kg', 'Ninguna', '2024-03-11 20:25:37', '2024-03-11 20:25:37'),
	(2, 'VISCOSO-1', '14949', 'OXYS – Crema antienvejecimiento', 'Peso de caja PT ideal: 13kg', 'Los pesos de los corrugados podrían variar por el llenado de los tubos depresibles. El peso que se plasma en estos documentos es un aproximado.', '2024-03-20 22:20:25', '2024-03-20 22:20:25'),
	(3, 'VISCOSO-1', '14949', 'OXYS – Crema antienvejecimiento', 'Peso de caja PT ideal: 13kg', 'LOS PESOS DE LOS CORRUGADOS PODRÍAN VARIAR POR EL LLENADO DE LOS TUBOS DEPRESIBLES. EL PESO QUE SE PLASMA EN ESTOS DOCUMENTOS ES UN APRÓXIMADO.', '2024-03-22 22:15:47', '2024-03-22 22:15:47'),
	(4, 'TABLETAS', '10605', 'ZIPKA (LINEUS)', 'PESO TABLETA: PESO MINIMO: 1G; PESO IDEAL:1.2G;PESO MÁXIMO:1.4G;', 'CORRUGADOS DE PT:\r\nPESO MINIMO:9.68KG\r\nPESO MÁXIMO:9.88KG\r\nPESO IDEAL:9.78KG', '2024-03-28 20:29:34', '2024-03-28 20:29:34'),
	(5, 'CAPSULAS', '11789', 'POMELO CBO', 'CAPSULA PESO BRUTO: 620 MG +/- 20MG; CORRUGADO MIN:6.60KG;IDEAL:6.65KG;MÁXIMO:6.70KG;', 'UNA PARTICULARIDAD DEL PERIODO VA CON TAPA PLANA NEGRA Y LINER SENSITIVO Y LA OTRA PARCIALIDAD CON TAPA METALICA NEGRA Y LINER SENSITIVO.', '2024-04-02 19:20:23', '2024-04-02 19:20:23'),
	(6, 'SACHET', '10605', 'PASTILLAS MÁGICAS', '●	Peso de caja PT ideal: 13kg', 'otras', '2024-04-05 18:36:48', '2024-04-05 18:36:48'),
	(7, 'LIQUIDO', '10605', 'PASTILLAS MÁGICAS', '●	Peso de caja PT ideal: 13kg', 'otras', '2024-04-05 18:36:48', '2024-04-05 18:36:48'),
	(10, 'POLVOS', '12345', 'MALTEADA DE PROTEINA SABOR CHOCOLATE (INSIDE BEAUTY)', 'Peso de caja pt ideal: 13kg', 'no hay', '2024-04-16 19:23:33', '2024-04-16 19:23:33'),
	(11, 'POLVOS', 'PRUEBAS', 'PRUEBAS', '25', 'NA', '2024-05-24 00:44:53', '2024-05-24 00:44:53'),
	(12, '2', '00001', 'SELENIUM Capsulas', '01PESO BRUTO DE LA CAPSULA: 500MG +- 20MG; . CORRUGADO DEL PT: PESO DEL CORRUGADO CON PRODUCTO:7.55KG; . PESO MÍNIMO: 7.46 KG; PESO MÁXIMO: 7.65 KG.', 'Perros. Gatos . Zorrillos', '2024-05-29 22:24:36', '2024-06-17 18:40:12'),
	(13, '2', '20241024', 'MALTEADA DE PROTEINA SABOR CHOCOLATE (INSIDE BEAUTY)', '●	Peso de caja PT ideal: 13kg', 'Sin observaciones', '2024-05-30 01:43:16', '2024-05-30 01:43:16'),
	(14, '3', '16022', 'CÁPSULA BIOVITA', 'PESOS BRUTO DE CÁPSULA:  620 mg +/- 20 mg  CORRUGADOS DE PT: Peso del corrugado con producto: 7.15 土 0.05 Kg', NULL, '2024-05-30 19:08:25', '2024-05-30 19:08:25'),
	(15, '3', '16022', 'CÁPSULA BIOVITA', 'PESOS BRUTO DE CÁPSULA:  620 mg +/- 20 mg  CORRUGADOS DE PT: Peso del corrugado con producto: 7.15 土 0.05 Kg', NULL, '2024-05-30 19:24:54', '2024-05-30 19:24:54'),
	(16, '3', '0111', 'CÁPSULA BIOVITA 01', '$PESOS BRUTO DE CÁPSULA:  620 mg +/- 20 mg  CORRUGADOS DE PT: Peso del corrugado con producto: 7.15 土 0.05 Kg', 'no hay notas disponibles', '2024-05-30 19:28:01', '2024-06-18 00:54:26'),
	(17, '4', '5339', 'MAR PIÑA COCO', 'ESPECIFICACIÓN DE PESO EN EL ENVASE  Peso Neto: 450 ± 2 g  ESPECIFICACIÓN DE PESO EN CORRUGADOS DE PT:  Peso mínimo: 15.05 Kg  Peso máximo: 14.95 Kg', NULL, '2024-05-31 18:15:20', '2024-05-31 18:15:20'),
	(18, '4', '002', 'MAR PIÑA COCO Temp', '00ESPECIFICACIÓN DE PESO EN EL ENVASE  Peso Neto: 450 ± 2 g  ESPECIFICACIÓN DE PESO EN CORRUGADOS DE PT:  Peso mínimo: 15.05 Kg  Peso máximo: 14.95 Kg', 'otras pruebas', '2024-05-31 18:23:52', '2024-06-18 21:49:12'),
	(19, '2', '14949', 'PASTILLAS MÁGICAS', '●	Peso de caja PT ideal: 13kg', NULL, '2024-06-12 17:11:27', '2024-06-12 17:11:27');

-- Volcando estructura para tabla formularios.derrames
CREATE TABLE IF NOT EXISTS `derrames` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `derrame_material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipo_proteccion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `precausiones_ambiente` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `material_limpieza` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desechos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `derrames_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `derrames_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.derrames: ~3 rows (aproximadamente)
INSERT IGNORE INTO `derrames` (`id`, `derrame_material`, `equipo_proteccion`, `precausiones_ambiente`, `material_limpieza`, `desechos`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 2, '2024-02-28 01:32:35', '2024-02-28 01:32:35'),
	(2, '2', '2', '2', '2', '2', 3, '2024-06-11 01:10:31', '2024-06-11 01:10:31'),
	(3, 'PRUEBAS', '100624', '100624', '100624', '100624', 4, '2024-06-11 01:30:05', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.desinfeccions
CREATE TABLE IF NOT EXISTS `desinfeccions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `actividad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sustancia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `concentracion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realizo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cumple` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sanitizacion_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `FK_desinfeccions_sanitizacions` (`sanitizacion_id`),
  CONSTRAINT `FK_desinfeccions_sanitizacions` FOREIGN KEY (`sanitizacion_id`) REFERENCES `sanitizacions` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.desinfeccions: ~10 rows (aproximadamente)
INSERT IGNORE INTO `desinfeccions` (`id`, `actividad`, `sustancia`, `concentracion`, `realizo`, `cumple`, `verifico`, `sanitizacion_id`, `created_at`, `updated_at`) VALUES
	(1, 'Limpieza del área cercana', 'CLORO', '10%', 'SERGIO ARRIAGA', 'SI', 'JOVANY', 1, '2024-03-05 21:31:51', '2024-03-05 21:31:51'),
	(2, 'Limpieza del área de trabajo', 'FABULOSO', '10%', 'SERGIO ARRIAGA', 'SI', 'JOVANY', 1, '2024-03-05 21:31:51', '2024-03-05 21:31:51'),
	(3, 'Limpieza del equipo', 'OTROS', '10%', 'SERGIO ARRIAGA', 'NO', 'JOVANY', 1, '2024-03-05 21:31:51', '2024-03-05 21:31:51'),
	(4, 'Sanitización del equipo', 'FOCA', '10%', 'SERGIO ARRIAGA', 'SI', 'JOVANY', 1, '2024-03-05 21:31:51', '2024-03-05 21:31:51'),
	(5, 'Sanitización de Utensilios', 'JABON GACHO DEL JERRY', '100%', 'SERGIO ARRIAGA', 'NO', 'JOVANY', 1, '2024-03-05 21:31:51', '2024-03-05 21:31:51'),
	(6, 'Limpieza del área cercana', 'OK', '20', 'OK', 'SI', 'JUAN', 3, '2024-06-04 01:25:02', '2024-06-11 00:27:09'),
	(7, 'PERROS', '78', '10%', 'SERGIO ARRIAGA', 'NO', 'JOVANY', 3, '2024-06-04 01:25:02', '2024-06-11 00:27:09'),
	(8, 'GATIOS', '85', '10%', 'SERGIO ARRIAGA', 'SI', 'JOVANY', 3, '2024-06-04 01:25:02', '2024-06-11 00:27:09'),
	(9, 'Sanitización del equipo', 'OK', '10%', 'SERGIO ARRIAGA', 'NO', 'JOVANY', 3, '2024-06-04 01:25:02', '2024-06-11 00:27:09'),
	(10, 'Sanitización de Utensilios', 'OK', '30%', 'SERGIO ARRIAGA', 'SI', 'JOVANY', 3, '2024-06-04 01:25:02', '2024-06-11 00:27:09'),
	(11, 'Limpieza del equipo', 'CLORO', '10%', 'SERGIO ARRIAGA', 'SI', 'JOVANY', 4, '2024-06-12 17:02:38', '2024-06-12 17:02:38'),
	(12, 'Limpieza del área de trabajo', 'CLORO', '10%', 'SERGIO ARRIAGA', 'SI', 'JOVANY', 4, '2024-06-12 17:02:38', '2024-06-12 17:02:38');

-- Volcando estructura para tabla formularios.desinfeccions_old
CREATE TABLE IF NOT EXISTS `desinfeccions_old` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `actividad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sustancia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `concentracion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realizo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cumple` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sanitizacion_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `desinfeccions_old_sanitizacion_id_foreign` (`sanitizacion_id`),
  CONSTRAINT `desinfeccions_old_sanitizacion_id_foreign` FOREIGN KEY (`sanitizacion_id`) REFERENCES `sanitizacions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.desinfeccions_old: ~0 rows (aproximadamente)

-- Volcando estructura para tabla formularios.desviaciones
CREATE TABLE IF NOT EXISTS `desviaciones` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `area_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prodcuto_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentacion_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cantidad_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desviacion_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `investigacion_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `anexos_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vobo_des` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dptoCierre_des` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firma` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `fechaCierre_des` datetime DEFAULT NULL,
  `Estatus` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `idComp` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsableC` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `responsableP` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `firma_cierre` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sem` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.desviaciones: ~4 rows (aproximadamente)
INSERT IGNORE INTO `desviaciones` (`id`, `area_des`, `prodcuto_des`, `presentacion_des`, `lote_des`, `cantidad_des`, `descripcion_des`, `desviacion_des`, `investigacion_des`, `anexos_des`, `vobo_des`, `dptoCierre_des`, `firma`, `fechaCierre_des`, `Estatus`, `created_at`, `updated_at`, `idComp`, `responsableC`, `responsableP`, `firma_cierre`, `sem`) VALUES
	(1, 'Sistemas', 'sistemas', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '2024-02-27 16:43:37', '1', '2024-02-27 22:43:47', '2024-02-27 22:43:49', '2024-1', '', '', '', 0),
	(2, 'PRODUCCIÓN-INNOVACIÓN', 'PASTILLAS MÁGICAS 2', 'PRUEBAS', 'PRUEBAS', '25', 'PROBLEMAS CON EL LOTE CADUCADO', 'PRUEBAS2024', 'PRUEBAS2024', 'circulo.png', 'Jovany Guillen Cortes, JOVANY GUILLEN', 'ultimo id', 'JGC', '2024-02-27 17:10:00', '3', '2024-02-28 01:12:16', '2024-02-28 01:12:16', '2024-0', 'Jovany Guillen, Coordinador TI', 'Jovany Guillen, Coordinador TI', 'ultimo id', 0),
	(3, 'Pruebas de partida', 'Pruebas', 'Pruebas', 'otra', '204', 'no hay', 'pruebas', 'no hay raza que haga lo que yo hago', 'frame.png', 'Jovany Guillen Cortes, Administrador', 'TI', 'JGC', '2024-06-13 12:12:00', '3', '2024-06-13 16:50:40', '2024-06-13 20:12:07', '2024-2', 'Jovany Guillen, Coordinador TI', 'Jovany Guillen, Coordinador TI', 'JGC', 6),
	(4, 'Tecnologías1', 'EQUIPO1', 'GABINETE1', '2024-06', '1PZ1', 'GABINETE COLOR NEGRO, MEMORIA 500GB, RAM 8GB.1', 'EL GABINETE SALE DEFECTUOSO SE TIENE QUE CAMBIAR.1', 'EL SELLO VIENE CON UNA ROPTURA DESDE QUE SE ENTREGA1', '5ebee6d7fa091c39ae2286a06cb63001.jpg', 'Jovany Guillen Cortes, Administrador1', 'TI1', 'JGC1', '2024-06-20 12:25:00', '1', '2024-06-13 20:21:33', '2024-06-14 22:09:06', '2024-3', 'JACUINDE GUZMAN MARIA DEL CARMEN, COORDINADOR 1', 'Jovany Guillen, Coordinador TI1', 'JGC1', 6);

-- Volcando estructura para tabla formularios.efectos
CREATE TABLE IF NOT EXISTS `efectos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `inhalacion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `ojos_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `piel_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `incendio_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingestion_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `efectos_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `efectos_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.efectos: ~3 rows (aproximadamente)
INSERT IGNORE INTO `efectos` (`id`, `inhalacion`, `ojos_p`, `piel_p`, `incendio_p`, `ingestion_p`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 2, '2024-02-28 01:32:35', '2024-02-28 01:32:35'),
	(2, '2', '2', '2', '2', '2', 3, '2024-06-11 01:10:31', '2024-06-11 01:10:31'),
	(3, 'PRUEBAS', '100624', '100624', '100624', '100624', 4, '2024-06-11 01:30:05', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.embalajes
CREATE TABLE IF NOT EXISTS `embalajes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `material` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_emb` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pterminado_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `embalajes_pterminado_id_foreign` (`pterminado_id`),
  CONSTRAINT `embalajes_pterminado_id_foreign` FOREIGN KEY (`pterminado_id`) REFERENCES `pterminados` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.embalajes: ~4 rows (aproximadamente)
INSERT IGNORE INTO `embalajes` (`id`, `material`, `codigo_emb`, `descripcion`, `pterminado_id`, `created_at`, `updated_at`) VALUES
	(1, 'ENVASE', '20', 'ENVASE DE PLASTICO', 2, '2024-03-01 21:47:18', '2024-06-14 22:42:14'),
	(2, 'ENVASE', '20', 'ENVASE DE PLASTICO', 2, '2024-03-01 21:52:30', '2024-06-14 22:42:14'),
	(3, 'otro', '20', 'otro', 2, '2024-03-01 22:01:19', '2024-06-14 22:42:14'),
	(4, 'pruebas', '20', 'pruebas', 2, '2024-03-01 22:03:16', '2024-06-14 22:42:14'),
	(5, 'de nuevo', '20', 'de nuevo', 2, '2024-03-01 22:03:16', '2024-06-14 22:42:14');

-- Volcando estructura para tabla formularios.empaques
CREATE TABLE IF NOT EXISTS `empaques` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `id_sap_envase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_si_envase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_no_envase` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_si_envase` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_no_envase` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_si_tapa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_no_tapa` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_si_tapa` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_no_tapa` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_sap_sello` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_si_sello` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_no_sello` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_si_sello` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_no_sello` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_sap_pegotin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_si_pegotin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_no_pegotin` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_si_pegotin` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_no_pegotin` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_sap_display` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_si_display` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_no_display` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_si_display` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_no_display` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criterio_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `id_sap_tapa` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `extra_display` varchar(300) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `empaques_criterio_id_foreign` (`criterio_id`),
  CONSTRAINT `empaques_criterio_id_foreign` FOREIGN KEY (`criterio_id`) REFERENCES `criterios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=36 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.empaques: ~9 rows (aproximadamente)
INSERT IGNORE INTO `empaques` (`id`, `id_sap_envase`, `img_si_envase`, `img_no_envase`, `desc_si_envase`, `desc_no_envase`, `img_si_tapa`, `img_no_tapa`, `desc_si_tapa`, `desc_no_tapa`, `id_sap_sello`, `img_si_sello`, `img_no_sello`, `desc_si_sello`, `desc_no_sello`, `id_sap_pegotin`, `img_si_pegotin`, `img_no_pegotin`, `desc_si_pegotin`, `desc_no_pegotin`, `id_sap_display`, `img_si_display`, `img_no_display`, `desc_si_display`, `desc_no_display`, `criterio_id`, `created_at`, `updated_at`, `id_sap_tapa`, `extra_display`) VALUES
	(6, '001', 'circulo.png', 'looky.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis risus metus, feugiat congue sem ultricies nec.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis risus metus, feugiat congue sem ultricies nec.', 'looky.png', 'looky.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis risus metus, feugiat congue sem ultricies nec.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis risus metus, feugiat congue sem ultricies nec.', '001', 'circulo.png', 'circulo.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis risus metus, feugiat congue sem ultricies nec.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis risus metus, feugiat congue sem ultricies nec.', '001', 'circulo.png', 'circulo.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis risus metus, feugiat congue sem ultricies nec.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis risus metus, feugiat congue sem ultricies nec.', '001', 'circulo.png', 'circulo.png', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis risus metus, feugiat congue sem ultricies nec.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sagittis risus metus, feugiat congue sem ultricies nec.', 1, '2024-03-19 18:03:51', '2024-03-19 18:03:51', NULL, NULL),
	(7, '13105', 'envase.png', 'envase mal.png', 'Tubo depresible plástico blanco para 70 mL diámetro 35*110 impreso con tapa flip-top blanca, limpios, sin fauna nociva, sin abolladuras y en buen estado.', 'Envase diferente al especificado, sucio, rayado, en mal estado, abollado y/o deforme.', 'tapa.png', 'tapa mal.png', 'Tapa limpia: sin contaminación, partículas extrañas, residuos de gel, sin deformaciones. Que cierre correctamente.', 'Tapa rota, deformada, sucia, con contaminación, partículas extrañas o residuos de gel. Que no cierre correctamente.', '7439', 'sello bien.png', 'sello mal.png', 'Foil de aluminio de 15 mm correctamente pegado a la boquilla del envase, sin aberturas, fisuras, fugas de producto, boquilla limpia.', 'Liner roto, con aberturas, fisuras, fugas de producto, boquilla sucia.', '10282', 'pegotin.png', 'pegotin mal.png', 'Pegotín circular que cumpla con medidas (diámetro 2.5 cm) sin impresión, limpio, sin arrugas, sin huellas dactilares o material extraño.', 'Pegotín sucio, arrugado, en mal estado, con huellas dactilares u otro tamaño o forma.', '14199', 'display.png', 'display mal.png', 'Display en buen estado, limpio, seco, no presenta modificaciones en base al plano mecánico (diseño, dimensiones e información).', 'Display sucio, arrugado, doblado, manchado, rayado, roto, presenta modificaciones en base al plano mecánico (diseño, dimensiones e información).', 2, '2024-03-20 22:36:37', '2024-03-20 22:36:37', NULL, NULL),
	(9, '13105', 'pildoras.jpg', 'tubo.jpg', 'lorem itsu 3', 'lorem itsu 3', 'aa74041a32154cba94bfdca71985d1dd.jpg', 'tubos_aluminio.png', 'lorem itsu 3', 'lorem itsu 3', '7439', 'tubos_aluminio.png', 'aa74041a32154cba94bfdca71985d1dd.jpg', 'lorem itsu 3', 'lorem itsu 3', '10282', 'pildoras.jpg', 'aa74041a32154cba94bfdca71985d1dd.jpg', 'asdsadfasf', 'lorem itsu 3', '001', 'tubo.jpg', 'tubos_aluminio.png', 'lorem itsu 3', 'lorem itsu 3', 3, '2024-03-25 16:58:15', '2024-03-25 16:58:15', NULL, NULL),
	(11, '1', 'images_(2).jpeg', 'images_(1).jpeg', '1', '1', '2092331.jpg', 'counter_top_displays_confectionery2.png', '1', '1', '1', 'images.jpeg', '8_ad3_clay_1000x1000_1645b256-5817-425e-841c-07891c9c91ae.webp', '1', '1', '1', 'otra.webp', 'perro.webp', '11', '1', '1', 'images.jpeg', '8_ad3_clay_1000x1000_1645b256-5817-425e-841c-07891c9c91ae.webp', '1', '1', 4, '2024-03-28 21:26:09', '2024-03-28 21:26:09', NULL, NULL),
	(22, '001', 'counter_top_displays_confectionery2.png', 'images.jpeg', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'otra.webp', '_90172663_thinkstockphotos-537817268.jpg', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', '002', '_90172663_thinkstockphotos-537817268.jpg', 'retail_ready_packaging_gene.jpg', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', '005', 'tabletas.jpg', 'counter_top_displays_confectionery2.png', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', '006', 'images.jpeg', '_90172663_thinkstockphotos-537817268.jpg', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 5, '2024-04-03 17:59:14', '2024-04-03 17:59:14', '004', NULL),
	(26, '13105', 'b28-s-picada_bolsa-biodegradable_entelequia_aa_1400x.webp', 'b28-s-picada_bolsa-biodegradable_entelequia_aa_1400x.webp', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'slide-yamp-320x320.jpg', 'slide-yamp-320x320.jpg', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', '7439', 'slide-yamp-320x320.jpg', 'slide-yamp-320x320.jpg', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', '10282', 'images_(3).jpeg', 'images_(3).jpeg', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', NULL, '8_ad3_clay_1000x1000_1645b256-5817-425e-841c-07891c9c91ae.webp', '8_ad3_clay_1000x1000_1645b256-5817-425e-841c-07891c9c91ae.webp', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 6, '2024-04-05 01:11:06', '2024-04-05 01:11:06', '001', NULL),
	(29, '001', 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'PRUEBAS', 'PRUEBAS', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '10282', 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'PRUEBAS', 'PRUEBAS', '14199', 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'PRUEBAS', 'PRUEBAS', 7, '2024-04-11 22:25:14', '2024-04-11 22:25:14', NULL, NULL),
	(31, '001', 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique sit amet libero vel mollis. Nullam accumsan nec orci a tempor. Praesent elementum justo massa, et pellentesque nulla sollicitudin ut. Pellentesque eu ligula sapien.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique sit amet libero vel mollis. Nullam accumsan nec orci a tempor. Praesent elementum justo massa, et pellentesque nulla sollicitudin ut. Pellentesque eu ligula sapien.', 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique sit amet libero vel mollis. Nullam accumsan nec orci a tempor. Praesent elementum justo massa, et pellentesque nulla sollicitudin ut. Pellentesque eu ligula sapien.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique sit amet libero vel mollis. Nullam accumsan nec orci a tempor. Praesent elementum justo massa, et pellentesque nulla sollicitudin ut. Pellentesque eu ligula sapien.', '003', 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique sit amet libero vel mollis. Nullam accumsan nec orci a tempor. Praesent elementum justo massa, et pellentesque nulla sollicitudin ut. Pellentesque eu ligula sapien.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique sit amet libero vel mollis. Nullam accumsan nec orci a tempor. Praesent elementum justo massa, et pellentesque nulla sollicitudin ut. Pellentesque eu ligula sapien.', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 10, '2024-04-16 19:24:58', '2024-04-16 19:24:58', '002', NULL),
	(32, '1', 'labs-azul.png', 'looky.png', 'DF', 'F', 'looky.png', 'looky.png', 'F', 'F', 'F', 'looky.png', 'looky.png', 'F', 'F', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 11, '2024-05-24 00:45:56', '2024-05-24 00:45:56', 'F', NULL),
	(33, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '001', 'labs-azul.png', NULL, NULL, NULL, 12, '2024-05-29 22:29:24', '2024-06-17 18:40:12', NULL, NULL),
	(34, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '14199', 'etiqueta_si.jpg', NULL, NULL, NULL, 13, '2024-05-30 01:44:13', '2024-05-30 01:44:13', NULL, NULL),
	(35, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '14199', 'looky.png', NULL, NULL, NULL, 19, '2024-06-12 17:12:19', '2024-06-12 17:12:19', NULL, NULL);

-- Volcando estructura para tabla formularios.envasados
CREATE TABLE IF NOT EXISTS `envasados` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `linea` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.envasados: ~0 rows (aproximadamente)
INSERT IGNORE INTO `envasados` (`id`, `fecha`, `linea`, `lote`, `orden`, `producto`, `presentacion`, `verifico`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `nota`, `created_at`, `updated_at`) VALUES
	(1, '2024-02-27 17:14:00', 'A-2', 'L02S48F5', 'OP-254', 'Formato bien', '1000G', 'JOVANY GUILLEN', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'SI', 'SI', 'SI', 'Reultado 1.Resultado2. resultadooooooo 45 ndsnnfjkfmgf', '2024-02-28 01:14:18', '2024-06-05 00:59:44');

-- Volcando estructura para tabla formularios.etiquetas
CREATE TABLE IF NOT EXISTS `etiquetas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img_etiqueta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `palabra` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indicacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `etiquetas_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `etiquetas_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.etiquetas: ~3 rows (aproximadamente)
INSERT IGNORE INTO `etiquetas` (`id`, `img_etiqueta`, `palabra`, `indicacion`, `categoria_p`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'jess.png', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 2, '2024-02-28 01:32:35', '2024-02-28 01:32:35'),
	(2, 'looky.png', '2', '2', '2', 3, '2024-06-11 01:10:31', '2024-06-11 01:10:31'),
	(3, 'looky.png', 'PRUEBAS', '100624', '100624', 4, '2024-06-11 01:30:05', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.failed_jobs: ~0 rows (aproximadamente)

-- Volcando estructura para tabla formularios.fichas
CREATE TABLE IF NOT EXISTS `fichas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caracteristicas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ingredientes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `info_nutri` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentacion_img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `almacen` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `advertencias` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `elaboro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.fichas: ~2 rows (aproximadamente)
INSERT IGNORE INTO `fichas` (`id`, `producto`, `lote`, `fecha`, `contenido`, `id_sap`, `descripcion`, `caracteristicas`, `porcion`, `ingredientes`, `info_nutri`, `presentacion_img`, `uso`, `almacen`, `advertencias`, `elaboro`, `created_at`, `updated_at`) VALUES
	(1, 'PASTILLAS MÁGICAS', 'L02S48F5', '18', 'TEST', 'I-1254', 'pruebas', 'NINGUNA', '100MG', 'CANCELADO', 'CANCELADO', 'descarga.png', 'untado', 'Almacen 7-s', 'Peligro', 'JGC', '2024-02-28 01:18:23', '2024-02-28 01:18:23'),
	(2, 'pruebas suplemento', 'L02023', '12', '12.54', 'a', 'PROBLEMAS CON EL LOTE CADUCADO', 'COSMETICO', 'COSMETICO', '1', 'CANCELADO', 'looky.png', 'CONSUMIR UNA PORCIÓN CON VASO DE AGUA', 'Almacen 7-s', 'Peligro', 'JGC', '2024-02-28 01:19:30', '2024-02-28 01:19:30'),
	(3, 'Prueba de edición ok', 'Jovany01', '8 meses', 'pruebas', '5442', 'tabletas de creatina 01', 'ni idea', 'pruebas', '1', 'CANCELADO', 'descarga.png', 'tomadas', 'en lugar refrigerado porfa', 'no tomar en menores de 3 años', 'JGC', '2024-06-10 18:42:24', '2024-06-10 20:24:07');

-- Volcando estructura para tabla formularios.granels
CREATE TABLE IF NOT EXISTS `granels` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img_si_mezcla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_no_mezcla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si_mezcla` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_no_mezcla` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `densidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viscosidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criterio_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `granels_criterio_id_foreign` (`criterio_id`),
  CONSTRAINT `granels_criterio_id_foreign` FOREIGN KEY (`criterio_id`) REFERENCES `criterios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.granels: ~9 rows (aproximadamente)
INSERT IGNORE INTO `granels` (`id`, `img_si_mezcla`, `img_no_mezcla`, `desc_si_mezcla`, `desc_no_mezcla`, `densidad`, `ph`, `viscosidad`, `criterio_id`, `created_at`, `updated_at`) VALUES
	(6, 'circulo.png', 'circulo.png', '001', '001', '001', '001', '001', 1, '2024-03-19 18:03:51', '2024-03-19 18:03:51'),
	(7, 'mezcla bien.png', 'mezcla mal.png', 'crema espesa color blanco de brillo alto con aroma a vainilla, uniforme, sin presencia de materia extraña, sin contaminación, que cumpla con la especificación en cuanto apariencia, textura, pH, color y pruebas sensoriales.', 'Mezcla con grumos, pastosa, diferente color, contaminada o con materia extraña y ajena a la mezcla.', '0.913 g/mL', '5.75', '22,000 cps', 2, '2024-03-20 22:36:37', '2024-03-20 22:36:37'),
	(9, 'pildoras.jpg', 'tubo.jpg', 'lorem itsu 3', 'lorem itsu 3', '0.913 g/mL', '5.75', '22,000 cps', 3, '2024-03-25 16:58:15', '2024-03-25 16:58:15'),
	(10, 'tabletas.jpg', 'universal.jpg', '1', '1', '1', '1', '1', 4, '2024-03-28 21:26:09', '2024-03-28 21:26:09'),
	(19, 'tubos_aluminio.png', 'images.jpeg', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', '0.913 g/mL', '5.75', '22,000 cps', 5, '2024-04-03 17:59:14', '2024-04-03 17:59:14'),
	(23, '2092331.jpg', '2092331.jpg', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', NULL, NULL, NULL, 6, '2024-04-05 01:11:06', '2024-04-05 01:11:06'),
	(24, 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'PRUEBAS', 'PRUEBAS', NULL, NULL, NULL, 7, '2024-04-11 22:25:14', '2024-04-11 22:25:14'),
	(26, 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique sit amet libero vel mollis. Nullam accumsan nec orci a tempor. Praesent elementum justo massa, et pellentesque nulla sollicitudin ut. Pellentesque eu ligula sapien.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique sit amet libero vel mollis. Nullam accumsan nec orci a tempor. Praesent elementum justo massa, et pellentesque nulla sollicitudin ut. Pellentesque eu ligula sapien.', NULL, NULL, NULL, 10, '2024-04-16 19:24:58', '2024-04-16 19:24:58'),
	(27, 'looky.png', 'looky.png', 'F', 'F', NULL, NULL, NULL, 11, '2024-05-24 00:45:56', '2024-05-24 00:45:56');

-- Volcando estructura para tabla formularios.indicacions
CREATE TABLE IF NOT EXISTS `indicacions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `codigo_indicacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `indicacion_peligro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clase_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria_ghs` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `indicacions_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `indicacions_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.indicacions: ~4 rows (aproximadamente)
INSERT IGNORE INTO `indicacions` (`id`, `codigo_indicacion`, `indicacion_peligro`, `clase_p`, `categoria_ghs`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, '8546', 'fdsg', 'peligros', 'peligors2', 3, '2024-06-11 01:25:46', '2024-06-11 01:25:46'),
	(2, '254', 'fdsg', 'peligros', 'peligors2', 3, '2024-06-11 01:25:46', '2024-06-11 01:25:46'),
	(3, 'PRUEBAS', 'PRUEBAS', 'PRUEBAS', '100624', 4, '2024-06-11 01:30:21', '2024-06-11 22:27:42'),
	(4, 'PRUEBAS', '100624', 'PRUEBAS', '100624', 4, '2024-06-11 01:30:21', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.informacions
CREATE TABLE IF NOT EXISTS `informacions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `contenido` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `porcion_g` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ficha_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `informacions_ficha_id_foreign` (`ficha_id`),
  CONSTRAINT `informacions_ficha_id_foreign` FOREIGN KEY (`ficha_id`) REFERENCES `fichas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.informacions: ~7 rows (aproximadamente)
INSERT IGNORE INTO `informacions` (`id`, `contenido`, `porcion`, `porcion_g`, `ficha_id`, `created_at`, `updated_at`) VALUES
	(1, 'Contenido Energético', '6.3 kJ', '1,575 kJ', 2, '2024-02-28 01:19:35', '2024-02-28 01:19:35'),
	(2, 'Zorrillo', '10g', '100g', 3, '2024-06-10 18:43:15', '2024-06-10 20:24:07'),
	(3, 'queso', '10g', '100g', 3, '2024-06-10 18:43:15', '2024-06-10 20:24:07'),
	(4, 'croquetas', '10g', '100g', 3, '2024-06-10 18:43:15', '2024-06-10 20:24:07'),
	(5, 'pelos de gato', '10g', '100g', 3, '2024-06-10 18:43:15', '2024-06-10 20:24:07'),
	(6, 'queda vacía', '20g', '100g', 3, '2024-06-10 18:43:15', '2024-06-10 20:24:07'),
	(7, 'cocacola en polvo', '10g', '100g', 3, '2024-06-10 18:43:15', '2024-06-10 20:24:07');

-- Volcando estructura para tabla formularios.ingredientes
CREATE TABLE IF NOT EXISTS `ingredientes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `componente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sinonimo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `formula` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `ingredientes_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `ingredientes_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.ingredientes: ~2 rows (aproximadamente)
INSERT IGNORE INTO `ingredientes` (`id`, `componente`, `sinonimo`, `cas`, `formula`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'Agua destilada', 'Pruebas', 'Pruebas', 'Pruebas', 3, '2024-06-11 01:25:58', '2024-06-11 01:25:58'),
	(2, 'PRUEBAS', '100624', 'PRUEBAS', '100624', 4, '2024-06-11 01:30:26', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.limpiezas
CREATE TABLE IF NOT EXISTS `limpiezas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fecha` datetime NOT NULL,
  `linea` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orden` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presentacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q6` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q7` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q8` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q9` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q10` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nota` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.limpiezas: ~0 rows (aproximadamente)
INSERT IGNORE INTO `limpiezas` (`id`, `fecha`, `linea`, `lote`, `orden`, `producto`, `presentacion`, `verifico`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `q7`, `q8`, `q9`, `q10`, `nota`, `created_at`, `updated_at`) VALUES
	(1, '2024-02-27 17:14:00', 'A-2', 'L02S48F5', 'OP-254', 'pruebas', '1000G', 'JOVANY GUILLEN', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'NO', 'Reultado 1.Resultado2.Resultado3', '2024-02-28 01:15:03', '2024-06-12 19:47:24'),
	(2, '2024-06-12 08:37:00', 'AP-9', 'L02S48F5', 'OP-254', 'KAI', 'TABLETA CUADRADA', 'AALS', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'NO', 'SI', '1- NO HAY CONTENEDORES DE RESIDUOS DENTRO DE LA LINEA .\r\n2-PRUEBAS .\r\n3-PURBAS2', '2024-06-12 16:39:23', '2024-06-12 16:39:23');

-- Volcando estructura para tabla formularios.liquidos
CREATE TABLE IF NOT EXISTS `liquidos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sap_id_etiqueta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_si_etiqueta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_no_etiqueta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si_etiqueta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_no_etiqueta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_si_etiqueta_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_no_etiqueta_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si_etiqueta_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_no_etiqueta_1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sap_id_gotero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_si_gotero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_no_gotero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si_gotero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_no_gotero` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_si_dedal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_no_dedal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si_dedal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_no_dedal` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criterio_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `liquidos_criterio_id_foreign` (`criterio_id`),
  CONSTRAINT `liquidos_criterio_id_foreign` FOREIGN KEY (`criterio_id`) REFERENCES `criterios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.liquidos: ~1 rows (aproximadamente)
INSERT IGNORE INTO `liquidos` (`id`, `sap_id_etiqueta`, `img_si_etiqueta`, `img_no_etiqueta`, `desc_si_etiqueta`, `desc_no_etiqueta`, `img_si_etiqueta_1`, `img_no_etiqueta_1`, `desc_si_etiqueta_1`, `desc_no_etiqueta_1`, `sap_id_gotero`, `img_si_gotero`, `img_no_gotero`, `desc_si_gotero`, `desc_no_gotero`, `img_si_dedal`, `img_no_dedal`, `desc_si_dedal`, `desc_no_dedal`, `criterio_id`, `created_at`, `updated_at`) VALUES
	(1, '002', 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'PRUEBAS', 'PRUEBAS', 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'PRUEBAS', 'PRUEBAS', '004', 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'PRUEBAS', 'PRUEBAS', 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'PRUEBAS', 'PRUEBAS', 7, '2024-04-11 22:25:14', '2024-04-11 22:25:14');

-- Volcando estructura para tabla formularios.logisticas
CREATE TABLE IF NOT EXISTS `logisticas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `palet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pterminado_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `logisticas_pterminado_id_foreign` (`pterminado_id`),
  CONSTRAINT `logisticas_pterminado_id_foreign` FOREIGN KEY (`pterminado_id`) REFERENCES `pterminados` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.logisticas: ~12 rows (aproximadamente)
INSERT IGNORE INTO `logisticas` (`id`, `tipo`, `producto`, `caja`, `palet`, `pterminado_id`, `created_at`, `updated_at`) VALUES
	(1, 'AMPLIO', '2cm', '2cm', '2cm', 1, '2024-03-01 01:48:22', '2024-03-01 01:48:22'),
	(2, 'PROFUNDO', '2cm', '2cm', '2cm', 1, '2024-03-01 01:48:22', '2024-03-01 01:48:22'),
	(3, 'ALTO', '2cm', '2cm', '2cm', 1, '2024-03-01 01:48:22', '2024-03-01 01:48:22'),
	(4, 'PESO NETO', '2cm', '2cm', '2cm', 1, '2024-03-01 01:48:22', '2024-03-01 01:48:22'),
	(5, 'PESO BRUTO', '2cm', '2cm', '2cm', 1, '2024-03-01 01:48:22', '2024-03-01 01:48:22'),
	(6, 'VOLUMEN', '2cm', '2cm', '2cm', 1, '2024-03-01 01:48:22', '2024-03-01 01:48:22'),
	(7, 'AMPLIO', '2cmOK', 'OK', 'OK', 2, '2024-03-01 21:41:33', '2024-06-14 22:42:14'),
	(8, 'PROFUNDO', 'OK', 'OK', 'OK', 2, '2024-03-01 21:41:33', '2024-06-14 22:42:14'),
	(9, 'OK', 'OK', 'KO', 'KO', 2, '2024-03-01 21:41:33', '2024-06-14 22:42:14'),
	(10, 'KO', 'OK', 'KO', 'OK', 2, '2024-03-01 21:41:33', '2024-06-14 22:42:14'),
	(11, 'OK', 'KO', 'OK', 'KO', 2, '2024-03-01 21:41:33', '2024-06-14 22:42:14'),
	(12, 'OK', 'OK', 'OK', 'OK', 2, '2024-03-01 21:41:33', '2024-06-14 22:42:14');

-- Volcando estructura para tabla formularios.medidas
CREATE TABLE IF NOT EXISTS `medidas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `niebla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `espuma` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `co2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `polvo_quimico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `otros` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `quimicas_peligrosas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `medidas_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `medidas_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.medidas: ~3 rows (aproximadamente)
INSERT IGNORE INTO `medidas` (`id`, `niebla`, `espuma`, `co2`, `polvo_quimico`, `otros`, `quimicas_peligrosas`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 2, '2024-02-28 01:32:35', '2024-02-28 01:32:35'),
	(2, '2', '2', '2', '2', '2', '2', 3, '2024-06-11 01:10:31', '2024-06-11 01:10:31'),
	(3, 'PRUEBAS', '100624', 'PRUEBAS', '100624', 'PRUEBAS', 'PRUEBAS', 4, '2024-06-11 01:30:05', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.mezclas
CREATE TABLE IF NOT EXISTS `mezclas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `q2` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `q3` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '',
  `q4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `q5` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `q6` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `observaciones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reviso` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `autorizo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `lote` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.mezclas: ~4 rows (aproximadamente)
INSERT IGNORE INTO `mezclas` (`id`, `producto`, `q1`, `q2`, `q3`, `q4`, `q5`, `q6`, `observaciones`, `reviso`, `autorizo`, `created_at`, `updated_at`, `lote`) VALUES
	(1, 'PASTILLAS MÁGICAS', '2024-03-04', 'SI', '2026-03-04', 'SI', 'SI', 'SI', 'ninguna. perros. pruebas', 'Jovany Guillen', 'Sergio el Bailador', '2024-02-28 01:16:08', '2024-06-14 22:36:46', 'L02S48F5'),
	(2, 'Croquetas de Perro', '2024-03-04', NULL, '2026-06-04', 'VG-5874', NULL, NULL, 'No aplica', 'PEDRO', 'DIANA', '2024-03-04 18:30:31', '2024-03-04 18:30:31', 'L02S48F5'),
	(3, 'Producto Nuevo', '2024-05-04', NULL, '2024-07', 'lotesillo', '2', NULL, 'NO SE LAVA CON SALVO POR QUE JERRY COMPRO JABÓN FOCA.perros', 'Fernandod', 'Sergio e', '2024-06-04 01:01:26', '2024-06-10 18:26:52', 'L02S48F5'),
	(4, 'Vitamina D', '2024-06-12', NULL, '06/2025', 'VG-5874', NULL, NULL, 'Ninguna', 'Fernando Maldonado', 'Barvara', '2024-06-12 16:48:58', '2024-06-12 16:48:58', 'L02S48F5');

-- Volcando estructura para tabla formularios.mezcla_items
CREATE TABLE IF NOT EXISTS `mezcla_items` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fecha` datetime DEFAULT NULL,
  `i_mezcla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `f_mezcla` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tiempo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apariencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `olor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cumple` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firma_realizo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firma_verifico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mezcla_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sabor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `granulometria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `consistencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solubilidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ph` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso_teorico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso_real` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  KEY `mezcla_items_mezcla_id_foreign` (`mezcla_id`),
  CONSTRAINT `mezcla_items_mezcla_id_foreign` FOREIGN KEY (`mezcla_id`) REFERENCES `mezclas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.mezcla_items: ~3 rows (aproximadamente)
INSERT IGNORE INTO `mezcla_items` (`id`, `fecha`, `i_mezcla`, `f_mezcla`, `tiempo`, `apariencia`, `color`, `olor`, `cumple`, `firma_realizo`, `firma_verifico`, `mezcla_id`, `created_at`, `updated_at`, `sabor`, `granulometria`, `consistencia`, `solubilidad`, `ph`, `peso_teorico`, `peso_real`) VALUES
	(1, '2024-02-27 00:00:00', '10:30', '10:30', '1', 'POLVOS', 'BLANCO', 'A CAÑO', 'SI', 'MARIANA', 'Jovany', 1, '2024-02-28 01:16:26', '2024-06-14 22:36:46', 'CHOCOLATE', '.5 %', '100%', 'CORRECTA', 'FUERTE', '2.5gr', '2.8gr'),
	(2, NULL, '10:30', '10:33', '3', 'POLVOS', 'BLANCO', 'A CAÑO', 'SI', 'MARIANA', 'JUAN', 2, '2024-03-04 18:33:53', '2024-03-04 18:33:53', 'CHOCOLATE', '.5 %', '100%', 'CORRECTA', 'FUERTE', '2.5gr', '2.8gr'),
	(3, NULL, '08:30', '21:31', 'pruebas', 'no hay', 'ok', 'A', 'S', 'PEdro', 'Juanito', 3, '2024-03-04 18:33:53', '2024-06-10 18:26:52', 'C', '.', '1', 'C', 'F', '2', '2'),
	(4, NULL, '09:30', '08:36', '254', 'Test', 'BLANCO', 'A CAÑO', 'SI', 'MARIANA', 'Jovany', 3, '2024-06-04 01:14:24', '2024-06-10 18:26:52', 'CHOCOLATE', '.5 %', '100%', 'CORRECTA', 'FUERTE', '2.5gr', '2.8gr'),
	(5, NULL, '08:49', '08:49', '4', 'pruebas', 'pruebas', 'pruebas', 'SI', 'pruebas', 'pruebas', 4, '2024-06-12 16:49:52', '2024-06-12 16:49:52', 'pruebas', 'pruebas', 'pruebas', 'pruebas', 'pruebas', 'pruebas', 'pruebas');

-- Volcando estructura para tabla formularios.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.migrations: ~52 rows (aproximadamente)
INSERT IGNORE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(6, '2023_12_08_142917_responsable', 2),
	(8, '2023_12_12_122954_create_desviacions_table', 4),
	(9, '2023_12_12_140212_create_desviacions_table', 5),
	(19, '2024_02_12_170825_create_seguridads_table', 15),
	(79, '2014_10_11_000000_create_usertypes_table', 16),
	(80, '2014_10_12_000000_create_users_table', 16),
	(81, '2014_10_12_100000_create_password_resets_table', 16),
	(82, '2019_08_19_000000_create_failed_jobs_table', 16),
	(83, '2019_12_14_000001_create_personal_access_tokens_table', 16),
	(84, '2023_12_08_145634_create_responsables_table', 16),
	(85, '2023_12_12_151124_create_desviaciones_table', 16),
	(86, '2023_12_13_113851_create_seguimientos_table', 16),
	(87, '2023_12_14_123933_create_corecciones_table', 16),
	(88, '2023_12_14_171750_create_mod_documentos_table', 16),
	(89, '2024_01_08_110449_create_envasados_table', 16),
	(90, '2024_01_08_162621_create_limpiezas_table', 16),
	(91, '2024_01_10_112102_create_mezclas_table', 16),
	(92, '2024_01_10_112952_create_mezcla_items_table', 16),
	(93, '2024_02_07_155152_create_fichas_table', 16),
	(94, '2024_02_13_104747_create_seguridads_table', 16),
	(95, '2024_02_14_185608_create_peligros_table', 16),
	(96, '2024_02_14_190239_create_etiquetas_table', 16),
	(97, '2024_02_14_190446_create_indicacions_table', 16),
	(98, '2024_02_14_190612_create_efectos_table', 16),
	(99, '2024_02_14_190740_create_ingredientes_table', 16),
	(100, '2024_02_14_191002_create_auxilios_table', 16),
	(101, '2024_02_14_191216_create_medidas_table', 16),
	(102, '2024_02_14_192301_create_derrames_table', 16),
	(103, '2024_02_14_192454_create_almacens_table', 16),
	(104, '2024_02_14_192607_create_proteccions_table', 16),
	(105, '2024_02_14_192753_create_propiedads_table', 16),
	(106, '2024_02_14_192959_create_reactividads_table', 16),
	(107, '2024_02_14_193120_create_toxicologias_table', 16),
	(108, '2024_02_14_193232_create_transportes_table', 16),
	(109, '2024_02_14_193356_create_transitos_table', 16),
	(110, '2024_02_14_193451_create_adicionals_table', 16),
	(111, '2024_02_26_115615_create_suplementos_table', 16),
	(112, '2024_02_26_121901_create_informacions_table', 16),
	(113, '2024_02_27_124023_create_pterminados_table', 16),
	(114, '2024_02_27_154249_create_logisticas_table', 16),
	(115, '2024_02_27_164011_create_contenidos_table', 16),
	(116, '2024_03_01_150508_create_embalajes_table', 17),
	(117, '2024_03_05_115714_create_sanitizacions_table', 18),
	(118, '2024_03_05_131812_create_desinfeccions_table', 19),
	(119, '2024_03_06_113056_create_bpms_table', 19),
	(120, '2024_03_06_120852_create_parametros_table', 20),
	(121, '2024_03_11_133818_create_criterios_table', 21),
	(122, '2024_03_11_143243_create_viscosos_table', 22),
	(123, '2024_03_13_160446_create_empaques_table', 23),
	(124, '2024_03_13_181337_create_granels_table', 24),
	(125, '2024_03_13_182940_create_sellados_table', 25),
	(126, '2024_03_13_184405_create_codificados_table', 26),
	(127, '2024_03_13_185128_create_corrugados_table', 27),
	(128, '2024_03_27_192742_create_polvoadicionals_table', 28),
	(129, '2024_04_01_131724_create_capsulas_table', 29),
	(130, '2024_04_04_105024_create_sachets_table', 30),
	(131, '2024_04_08_165926_create_liquidos_table', 30),
	(132, '2024_04_15_135736_create_polvos_table', 31),
	(133, '2024_05_29_144931_create_selenia_table', 31),
	(134, '2024_05_30_114541_create_biovitas_table', 31),
	(135, '2024_05_31_112504_create_polvotemps_table', 32);

-- Volcando estructura para tabla formularios.mod_documentos
CREATE TABLE IF NOT EXISTS `mod_documentos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `titulo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsable` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha` datetime DEFAULT NULL,
  `firma_mod` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desviacionDoc_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `mod_documentos_desviaciondoc_id_foreign` (`desviacionDoc_id`),
  CONSTRAINT `mod_documentos_desviaciondoc_id_foreign` FOREIGN KEY (`desviacionDoc_id`) REFERENCES `desviaciones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.mod_documentos: ~5 rows (aproximadamente)
INSERT IGNORE INTO `mod_documentos` (`id`, `codigo`, `titulo`, `responsable`, `fecha`, `firma_mod`, `desviacionDoc_id`, `created_at`, `updated_at`) VALUES
	(1, '1124-4', 'CAMBIO A DOC MAESTRO', 'JOVANY', '2024-02-27 17:12:00', 'MDCJ', 2, '2024-02-28 01:12:33', '2024-02-28 01:12:33'),
	(2, 'No Aplica', 'No Aplica', 'No Aplica', NULL, 'No Aplica', 2, '2024-05-07 18:30:52', '2024-05-07 18:30:52'),
	(3, 'No Aplica', 'No Aplica', 'No Aplica', NULL, 'No Aplica', 2, '2024-05-07 18:33:59', '2024-05-07 18:33:59'),
	(4, '2021', 'CAMBIO A DOC MAESTRO', 'JOVANY', '2024-06-13 10:09:00', 'MDCJ', 3, '2024-06-13 18:09:51', '2024-06-13 18:09:51'),
	(5, '2024-31', 'GARANTÍA1', 'JOVANY1', '2024-06-13 12:23:00', 'JGC1', 4, '2024-06-13 20:23:52', '2024-06-14 22:09:06');

-- Volcando estructura para tabla formularios.parametros
CREATE TABLE IF NOT EXISTS `parametros` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cofia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cubre` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `uniforme` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `manos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `heridas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `maquillaje` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `botas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `perfume` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `enfermedad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `articulos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciones` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bpm_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `parametros_bpm_id_foreign` (`bpm_id`),
  CONSTRAINT `parametros_bpm_id_foreign` FOREIGN KEY (`bpm_id`) REFERENCES `bpms` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.parametros: ~23 rows (aproximadamente)
INSERT IGNORE INTO `parametros` (`id`, `nombre`, `cofia`, `cubre`, `uniforme`, `manos`, `unas`, `heridas`, `maquillaje`, `botas`, `perfume`, `enfermedad`, `articulos`, `observaciones`, `bpm_id`, `created_at`, `updated_at`) VALUES
	(1, 'PEDRO CAPO', 'SI', 'SI', 'SI', 'SI', 'NO', 'SI', 'NO', 'SI', 'NO', 'SI', 'NO', 'ES UN GALÁN', 1, '2024-03-06 18:58:54', '2024-03-06 18:58:54'),
	(2, 'JUAN ODONOJU', 'SI', 'SI', 'SI', 'SI', 'NO', 'SI', 'NO', 'SI', 'NO', 'SI', 'NO', 'PRUEBAS', 1, '2024-03-06 18:58:54', '2024-03-06 18:58:54'),
	(3, 'PETER LA ANGUILA', 'SI', 'SI', 'SI', 'SI', 'NO', 'SI', 'NO', 'SI', 'NO', 'SI', 'NO', 'ES UN GALÁN', 1, '2024-03-06 22:18:18', '2024-03-06 22:18:18'),
	(4, 'Datos1', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'Datos1', 1, '2024-03-07 00:41:07', '2024-03-07 00:41:07'),
	(5, 'Datos3', 'NO', 'NO', 'NO', 'NO', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'Datos1', 1, '2024-03-07 00:41:07', '2024-03-07 00:41:07'),
	(6, 'Datos2', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'Datos1', 1, '2024-03-07 00:41:07', '2024-03-07 00:41:07'),
	(7, 'Datos5', 'SI', 'SI', 'SI', 'SI', 'SI', 'NO', 'NO', 'SI', 'SI', 'SI', 'NO', 'Datos1', 1, '2024-03-07 00:41:07', '2024-03-07 00:41:07'),
	(8, 'Datos7', 'SI', 'SI', 'NO', 'SI', 'SI', 'NO', 'SI', 'SI', 'SI', 'NO', 'SI', 'Datos1', 1, '2024-03-07 00:41:07', '2024-03-07 00:41:07'),
	(9, 'Datos10', 'SI', 'SI', 'NO', 'SI', 'SI', 'SI', 'NO', 'SI', 'SI', 'NO', 'NO', 'Final', 1, '2024-03-07 00:41:07', '2024-03-07 00:41:07'),
	(10, 'TEST', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'test', 1, '2024-03-07 00:45:59', '2024-03-07 00:45:59'),
	(11, 'TEST2', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'test', 1, '2024-03-07 00:45:59', '2024-03-07 00:45:59'),
	(12, 'TEST3', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'test', 1, '2024-03-07 00:45:59', '2024-03-07 00:45:59'),
	(13, 'TEST4', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'test', 1, '2024-03-07 00:45:59', '2024-03-07 00:45:59'),
	(14, 'TEST5', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'test', 1, '2024-03-07 00:45:59', '2024-03-07 00:45:59'),
	(15, 'TEST6', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'test', 1, '2024-03-07 00:45:59', '2024-03-07 00:45:59'),
	(16, 'PETER LA ANGUILA', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'Ninguna', 2, '2024-06-12 17:07:01', '2024-06-12 17:07:01'),
	(17, 'juanito', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'Ninguna', 2, '2024-06-12 17:07:01', '2024-06-12 17:07:01'),
	(18, 'pedro', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'Ninguna', 2, '2024-06-12 17:07:01', '2024-06-12 17:07:01'),
	(19, 'pancho', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'Ninguna', 2, '2024-06-12 17:07:01', '2024-06-12 17:07:01'),
	(20, 'JUAN', 'NO', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', NULL, 5, '2024-06-12 21:14:41', '2024-06-15 01:09:30'),
	(21, 'JUAN', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', NULL, 5, '2024-06-12 21:14:41', '2024-06-15 01:09:30'),
	(22, 'Pedro3', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI ES', 5, '2024-06-12 21:14:41', '2024-06-15 01:09:30'),
	(23, 'Pedro4', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', 'SI', NULL, 5, '2024-06-12 21:14:41', '2024-06-15 01:09:30');

-- Volcando estructura para tabla formularios.password_resets
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.password_resets: ~0 rows (aproximadamente)

-- Volcando estructura para tabla formularios.peligros
CREATE TABLE IF NOT EXISTS `peligros` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `peligro` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `salud` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inflamabilidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `reactividad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_etiqueta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `peligros_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `peligros_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.peligros: ~3 rows (aproximadamente)
INSERT IGNORE INTO `peligros` (`id`, `peligro`, `salud`, `inflamabilidad`, `reactividad`, `id_etiqueta`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 2, '2024-02-28 01:32:35', '2024-02-28 01:32:35'),
	(2, '2', '2', '2', '2', '2', 3, '2024-06-11 01:10:31', '2024-06-11 01:10:31'),
	(3, 'PRUEBAS', '100624', '100624', '100624', '3', 4, '2024-06-11 01:30:05', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.personal_access_tokens
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.personal_access_tokens: ~0 rows (aproximadamente)

-- Volcando estructura para tabla formularios.polvoadicionals
CREATE TABLE IF NOT EXISTS `polvoadicionals` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sap_id_desecante` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_si_desecante` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_no_desecante` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_si_desecante` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_no_desecante` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `sap_id_termo` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_si_termo` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_no_termo` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_si_termo` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_no_termo` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `criterio_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `polvoadicionals_criterio_id_foreign` (`criterio_id`),
  CONSTRAINT `polvoadicionals_criterio_id_foreign` FOREIGN KEY (`criterio_id`) REFERENCES `criterios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.polvoadicionals: ~5 rows (aproximadamente)
INSERT IGNORE INTO `polvoadicionals` (`id`, `sap_id_desecante`, `img_si_desecante`, `img_no_desecante`, `desc_si_desecante`, `desc_no_desecante`, `sap_id_termo`, `img_si_termo`, `img_no_termo`, `desc_si_termo`, `desc_no_termo`, `criterio_id`, `created_at`, `updated_at`) VALUES
	(1, '1', 'images_(1).jpeg', '2092331.jpg', '1', '1', '1', 'images_(2).jpeg', 'retail_ready_packaging_gene.jpg', '1', '1', 4, '2024-03-28 21:26:09', '2024-03-28 21:26:09'),
	(10, '006', 'otra.webp', '2092331.jpg', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', '006', 'tabletas.jpg', 'images_(1).jpeg', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 5, '2024-04-03 17:59:14', '2024-04-03 17:59:14'),
	(11, NULL, NULL, NULL, NULL, NULL, '004', 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'PRUEBAS', 'PRUEBAS', 7, '2024-04-11 22:25:14', '2024-04-11 22:25:14'),
	(12, NULL, NULL, NULL, NULL, NULL, NULL, 'r1108379_1296x729_16-9.jpg', NULL, 'SELLO TERMOENCOGIBLE grande', '120°C +-5°C; VELOCIDAD DE BANDA: 34HZ.', 12, '2024-05-29 22:29:24', '2024-06-17 18:40:12'),
	(13, NULL, NULL, NULL, NULL, NULL, NULL, 'termoencogible_si.jpg', NULL, 'SELLO TERMOENCOGIBLE 132X160 MM', 'TEMPERATURA DE TUNEL: 120°C +-5°C; VELOCIDAD DE BANDA: 34HZ.', 13, '2024-05-30 01:44:13', '2024-05-30 01:44:13'),
	(14, NULL, NULL, NULL, NULL, NULL, NULL, 'descarga.png', NULL, 'SELLO TERMOENCOGIBLE 132X160 MM', 'TEMPERATURA DE TUNEL: 120°C +-5°C; VELOCIDAD DE BANDA: 34HZ.', 19, '2024-06-12 17:12:19', '2024-06-12 17:12:19');

-- Volcando estructura para tabla formularios.polvos
CREATE TABLE IF NOT EXISTS `polvos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.polvos: ~0 rows (aproximadamente)

-- Volcando estructura para tabla formularios.polvotemps
CREATE TABLE IF NOT EXISTS `polvotemps` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `sap_id_etiqueta` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si_etiqueta` varchar(700) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si_mezcla` varchar(700) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_lotificado_si` varchar(700) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote_envase` varchar(700) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `cad_envase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `criterio_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `polvotemps_criterio_id_foreign` (`criterio_id`),
  CONSTRAINT `polvotemps_criterio_id_foreign` FOREIGN KEY (`criterio_id`) REFERENCES `criterios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.polvotemps: ~0 rows (aproximadamente)
INSERT IGNORE INTO `polvotemps` (`id`, `sap_id_etiqueta`, `desc_si_etiqueta`, `desc_si_mezcla`, `desc_lotificado_si`, `lote_envase`, `cad_envase`, `criterio_id`, `created_at`, `updated_at`) VALUES
	(1, 'E-677400', 'Etiqueta MAR FIBRA DE AVENA PIÑA COCO, 144 MM X 295 MM, limpia, alineada, sin burbujas, en buen estado, centrada, alineada y pegada correctamente.', '00Mezcla de polvo fibroso, color café claro, sin grumos, olor característico a piña coco, sin materia extraña a la mezcla.', '00Codificado completo, con los datos correctos, centrado, alineado y legible.', '00LDMPCMMAA', '2024', 18, '2024-05-31 18:27:02', '2024-06-18 21:49:12');

-- Volcando estructura para tabla formularios.propiedads
CREATE TABLE IF NOT EXISTS `propiedads` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `apariencia` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `olor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ph` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `punto_fusion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatura` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `velocidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `inflamabilidad_info` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `limite` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `presion_vapor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `densidad_vapor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `densidad_relativa` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `solubilidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `coeficiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatura_esp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `temperatura_descom` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `viscosidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peso_mol` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `materia_volatil` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `datos_relevantes` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `propiedads_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `propiedads_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.propiedads: ~3 rows (aproximadamente)
INSERT IGNORE INTO `propiedads` (`id`, `apariencia`, `olor`, `ph`, `punto_fusion`, `temperatura`, `velocidad`, `inflamabilidad_info`, `limite`, `presion_vapor`, `densidad_vapor`, `densidad_relativa`, `solubilidad`, `coeficiente`, `temperatura_esp`, `temperatura_descom`, `viscosidad`, `peso_mol`, `materia_volatil`, `datos_relevantes`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de pruebaProducto de pruebaProducto de pruebaProducto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 2, '2024-02-28 01:32:35', '2024-02-28 01:32:35'),
	(2, '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', '2', 3, '2024-06-11 01:10:31', '2024-06-11 01:10:31'),
	(3, 'PRUEBAS', 'Pruebas', 'test', '100624', 'PRUEBAS', '100624', '100624', '100624', 'PRUEBAS', 'PRUEBAS', '100624', '100624', '100624', 'PRUEBAS', '100624', '100624', 'PRUEBAS', 'PRUEBAS', '100624', 4, '2024-06-11 01:30:05', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.proteccions
CREATE TABLE IF NOT EXISTS `proteccions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `parametro_control` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `control_tecnico` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `medidas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prote_ojos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prote_piel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `prote_respiratoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peligros_termicos` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proteccions_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `proteccions_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.proteccions: ~3 rows (aproximadamente)
INSERT IGNORE INTO `proteccions` (`id`, `parametro_control`, `control_tecnico`, `medidas`, `prote_ojos`, `prote_piel`, `prote_respiratoria`, `peligros_termicos`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 2, '2024-02-28 01:32:35', '2024-02-28 01:32:35'),
	(2, '2', '2', '2', '2', '2', '2', '2', 3, '2024-06-11 01:10:31', '2024-06-11 01:10:31'),
	(3, 'PRUEBAS', '100624', 'PRUEBAS', '100624', '100624', '100624', '100624', 4, '2024-06-11 01:30:05', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.pterminados
CREATE TABLE IF NOT EXISTS `pterminados` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_categoria` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_envase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_display` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_caja` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_palet` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_opc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cod_granel` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `color_granel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `olor_granel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `apariencia_granel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `almacenamiento` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transporte` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote_caducidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.pterminados: ~2 rows (aproximadamente)
INSERT IGNORE INTO `pterminados` (`id`, `descripcion`, `id_sap`, `codigo`, `categoria`, `sub_categoria`, `marca`, `img_envase`, `img_display`, `img_caja`, `img_palet`, `img_opc`, `cod_granel`, `color_granel`, `olor_granel`, `apariencia_granel`, `almacenamiento`, `transporte`, `lote_caducidad`, `created_at`, `updated_at`) VALUES
	(1, 'PROBLEMAS CON EL LOTE CADUCADO', 'I-1254', '1024', 'SUPLEMENTOS', 'PROTEINAS', 'Jovany Guillen', 'circulo.png', 'descarga.png', 'pic.png', 'pic.png', 'jess.png', NULL, 'NEGRO', 'CAFÉ', 'CORRECTA', 'GUARDAR EN REFRI', 'TRANSPORTAR EN CÁMARA DE REFRIGERACIÓN', '2024-05LOT', '2024-03-01 01:47:12', '2024-03-01 01:47:12'),
	(2, 'GABINETE OK', '1234', 'Pruebas de serie', 'SUPLEMENTOS', 'PROTEINAS OK', 'Jovany Guillen', 'stykers.jpg', 'albercada.png', 'glpi.png', 'SHARK.webp', 'Canelo-vs-Golovkin.webp', NULL, 'NEGRO', 'BLANCO', 'CORRECTA', 'METER EN CALOR', 'TRANSPORTAR EN CÁMARA DE REFRIGERACIÓN', '2024-05LOT', '2024-03-01 21:41:00', '2024-06-14 22:42:14');

-- Volcando estructura para tabla formularios.reactividads
CREATE TABLE IF NOT EXISTS `reactividads` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `estabilidad_q` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `condiciones_e` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `reactividads_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `reactividads_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.reactividads: ~3 rows (aproximadamente)
INSERT IGNORE INTO `reactividads` (`id`, `estabilidad_q`, `condiciones_e`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'Producto de prueba', 'Producto de prueba', 2, '2024-02-28 01:32:35', '2024-02-28 01:32:35'),
	(2, '2', '2', 3, '2024-06-11 01:10:31', '2024-06-11 01:10:31'),
	(3, 'PRUEBAS', '100624', 4, '2024-06-11 01:30:05', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.responsables
CREATE TABLE IF NOT EXISTS `responsables` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre_resp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `puesto_resp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firma_resp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dpto_resp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.responsables: ~17 rows (aproximadamente)
INSERT IGNORE INTO `responsables` (`id`, `nombre_resp`, `puesto_resp`, `firma_resp`, `dpto_resp`, `created_at`, `updated_at`) VALUES
	(1, 'Jovany Guillen', 'Coordinador TI', 'JGC', 'Producción', '2024-02-28 00:39:25', '2024-02-28 00:39:25'),
	(2, 'Jovany Guillen', 'Coordinador TI', 'JGC', 'Calidad', '2024-02-28 00:40:26', '2024-02-28 00:40:26'),
	(3, 'JACUINDE GUZMAN MARIA DEL CARMEN', 'COORDINADOR', 'JGC', 'CAC', '2024-03-07 18:43:36', '2024-03-07 18:43:36'),
	(4, 'GUTIERREZ SANCHEZ GABRIELA', 'SUPERVISOR', 'JGC', 'CAC', '2024-03-07 18:43:49', '2024-03-07 18:43:49'),
	(5, 'CASTRO CORTEZ ELIZABETH', 'INSPECTOR', 'JGC', 'CAC', '2024-03-07 18:44:00', '2024-03-07 18:44:00'),
	(6, 'HERNANDEZ DEL RIO OSCAR DE JESUS', 'INSPECTOR', 'JGC', 'CAC', '2024-03-07 18:44:12', '2024-03-07 18:44:12'),
	(7, 'MENDEZ AGUILAR CINTHIA ERANDI', 'SUPERVISOR', 'JGC', 'CAC', '2024-03-07 18:44:23', '2024-03-07 18:44:23'),
	(8, 'ESCAMILLA CAMPOS JOAN RUBEN', 'INSPECTOR', 'JGC', 'CAC', '2024-03-07 18:44:35', '2024-03-07 18:44:35'),
	(9, 'PACHECO GARCIA JESUS SANTIAGO', 'INSPECTOR', 'JGC', 'CAC', '2024-03-07 18:44:45', '2024-03-07 18:44:45'),
	(10, 'LOPEZ SANDOVAL AURORA ARIANA', 'INSPECTOR', 'JGC', 'CAC', '2024-03-07 18:44:56', '2024-03-07 18:44:56'),
	(11, 'ROSAS TULAIS JUAN CARLOS', 'INSPECTOR', 'JGC', 'CAC', '2024-03-07 18:45:06', '2024-03-07 18:45:06'),
	(12, 'MARTINEZ VEGA CELESTE', 'INSPECTOR', 'JGC', 'CAC', '2024-03-07 18:45:21', '2024-03-07 18:45:21'),
	(13, 'ROBLES SANDERS JOSE LUIS', 'SUPERVISOR', 'JGC', 'CAC', '2024-03-07 18:45:33', '2024-03-07 18:45:33'),
	(14, 'ORTIZ ANUARIO ADRIAN', 'INSPECTOR', 'JGC', 'CAC', '2024-03-07 18:45:43', '2024-03-07 18:45:43'),
	(15, 'SALAZAR GONZALEZ LIZBETH', 'INSPECTOR', 'JGC', 'CAC', '2024-03-07 18:45:53', '2024-03-07 18:45:53'),
	(16, 'MARTINEZ CORREA EBER DIEGO', 'INSPECTOR', 'JGC', 'CAC', '2024-03-07 18:46:03', '2024-03-07 18:46:03'),
	(17, 'SOSA MENDOZA VALERIA', 'INSPECTOR', 'JGC', 'CAC', '2024-03-07 18:46:13', '2024-03-07 18:46:13');

-- Volcando estructura para tabla formularios.sachets
CREATE TABLE IF NOT EXISTS `sachets` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.sachets: ~0 rows (aproximadamente)

-- Volcando estructura para tabla formularios.sanitizacions
CREATE TABLE IF NOT EXISTS `sanitizacions` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `fecha` date NOT NULL,
  `h_inicio` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `h_final` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_anterior` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `p_entrada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `observaciones` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_supervisor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firma_supervisor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_calidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `firma_calidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.sanitizacions: ~3 rows (aproximadamente)
INSERT IGNORE INTO `sanitizacions` (`id`, `fecha`, `h_inicio`, `h_final`, `p_anterior`, `p_entrada`, `equipo`, `observaciones`, `nombre_supervisor`, `firma_supervisor`, `nombre_calidad`, `firma_calidad`, `created_at`, `updated_at`) VALUES
	(1, '2024-03-05', '11:07', '11:07', 'CROQUETAS DE PERRO', 'CROQUETAS DE GATO', 'PLANCHA DE TEFLON', 'NO SE LAVA CON SALVO POR QUE JERRY COMPRO JABÓN FOCA.', 'FER ANONIMO', 'FAQ', 'BARVARA REGIL', 'BRR', '2024-03-05 19:08:26', '2024-03-05 19:08:26'),
	(2, '2024-06-03', '17:21', '17:21', 'comida pal jerry', 'CROQUETAS DE GATO', 'PLANCHA DE TEFLON', 'NO SE LAVA CON SALVO POR QUE JERRY COMPRO JABÓN FOCA. perros', 'FER ANONIMO', 'FAQ', 'BARVARA REGIL', 'BRR', '2024-06-04 01:21:55', '2024-06-04 01:21:55'),
	(3, '2024-06-02', '20:23', '22:24', 'comida pal oscar', 'CROQUETAS DE PERRO', 'PLANCHA DE TEFLON SUCIA', 'NO SE LAVA CON SALVO POR QUE JERRY COMPRO JABÓN FOCA. perros', 'FER OK', 'FAQ', 'BARVARA REGIL OK', 'BRR', '2024-06-04 01:24:14', '2024-06-11 00:27:09'),
	(4, '2024-06-12', '10:03', '23:04', 'CROQUETAS DE PERRO', 'CROQUETAS DE GATO', 'PLANCHA DE TEFLON', 'ninguna', 'FER ANONIMO', 'FAQ', 'BARVARA REGIL', 'BRR', '2024-06-12 17:01:39', '2024-06-12 17:01:39');

-- Volcando estructura para tabla formularios.seguimientos
CREATE TABLE IF NOT EXISTS `seguimientos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `descripcion_seg` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `realizo_seg` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `fecha_seg` datetime DEFAULT NULL,
  `desviacion_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `seguimientos_desviacion_id_foreign` (`desviacion_id`),
  CONSTRAINT `seguimientos_desviacion_id_foreign` FOREIGN KEY (`desviacion_id`) REFERENCES `desviaciones` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.seguimientos: ~4 rows (aproximadamente)
INSERT IGNORE INTO `seguimientos` (`id`, `descripcion_seg`, `realizo_seg`, `fecha_seg`, `desviacion_id`, `created_at`, `updated_at`) VALUES
	(1, 'SE PIDE A SERGIO QUE SE CAMBIE EL ID ESTABLECIDO EN SAP', 'Sergio', '2024-02-27 17:12:00', 2, '2024-02-28 01:12:38', '2024-02-28 01:12:38'),
	(2, 'No aplica', 'No aplica', '0000-00-00 00:00:00', 2, '2024-05-07 18:34:07', '2024-05-07 18:34:07'),
	(3, 'HAGAN LO QUE QUIERAN', 'JOVANY', '2024-06-13 11:45:00', 3, '2024-06-13 19:46:01', '2024-06-13 19:46:01'),
	(4, 'NO LO VUELVAN HACER PLIS2', 'JOVANY1', '2024-06-13 12:24:00', 4, '2024-06-13 20:24:48', '2024-06-14 22:09:06');

-- Volcando estructura para tabla formularios.seguridads
CREATE TABLE IF NOT EXISTS `seguridads` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `marca` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sap` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `codigo_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `proposito_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usos_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nombre_distribuidor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `direccion_p` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.seguridads: ~4 rows (aproximadamente)
INSERT IGNORE INTO `seguridads` (`id`, `nombre`, `marca`, `id_sap`, `codigo_p`, `proposito_p`, `usos_p`, `nombre_distribuidor`, `direccion_p`, `created_at`, `updated_at`) VALUES
	(1, 'primero', 'primero', 'primero', 'primero', 'primero', 'primero', 'primero', 'primero', '2024-02-27 23:32:30', '2024-02-27 23:32:31'),
	(2, 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', '2024-02-28 01:32:35', '2024-02-28 01:32:35'),
	(3, 'Pruebas Jovany', '2', '2', '2', '20', '2', '2', '2', '2024-06-11 01:10:31', '2024-06-11 01:10:31'),
	(4, 'PRUEBAS', '100624', '100624', '100624', 'PRUEBAS', 'PRUEBAS', '100624', '100624', '2024-06-11 01:30:05', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.selenia
CREATE TABLE IF NOT EXISTS `selenia` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.selenia: ~0 rows (aproximadamente)

-- Volcando estructura para tabla formularios.sellados
CREATE TABLE IF NOT EXISTS `sellados` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `img_si_sellado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_no_sellado` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_si_sellado` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_no_sellado` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_si_acondicion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_no_acondicion` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_si_acondicion` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc_no_acondicion` varchar(1200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criterio_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `sap_id_acondicion` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_aux_1` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_aux_2` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `sellados_criterio_id_foreign` (`criterio_id`),
  CONSTRAINT `sellados_criterio_id_foreign` FOREIGN KEY (`criterio_id`) REFERENCES `criterios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.sellados: ~8 rows (aproximadamente)
INSERT IGNORE INTO `sellados` (`id`, `img_si_sellado`, `img_no_sellado`, `desc_si_sellado`, `desc_no_sellado`, `img_si_acondicion`, `img_no_acondicion`, `desc_si_acondicion`, `desc_no_acondicion`, `criterio_id`, `created_at`, `updated_at`, `sap_id_acondicion`, `img_aux_1`, `img_aux_2`) VALUES
	(6, 'circulo.png', 'circulo.png', '001', '001', 'circulo.png', 'circulo.png', '001', '001', 1, '2024-03-19 18:03:51', '2024-03-19 18:03:51', '1', '1', '1'),
	(7, 'depresible_bien.png', 'depresible mal.png', 'Sellado del depresible con lineas verticales uniformes, sin fugas de producto.', 'Sellado del depresible irregular, quemado, con fugas de producto.', 'acondicionamiento.png', 'Acondicionamiento_mal.png', 'Display armado correctamente, con pestañas en buen estado (sin roturas, sin arrugas, etc). Después se coloca el pegotín en la pestaña superior del display centrado, en el interior del display se debe acomodar el tubo depresible con la tapa hacia abajo.', 'Display sucio, arrugado, doblado, manchado, rayado, roto, despegado. Sin tubo depresible, sin pegotín. Pegotín con huellas dactilares, no centrado, con partículas en el pegamento.', 2, '2024-03-20 22:36:37', '2024-03-20 22:36:37', '1', '1', '1'),
	(9, 'aa74041a32154cba94bfdca71985d1dd.jpg', 'tubo.jpg', 'lorem itsu 3', 'lorem itsu 3', 'pildoras.jpg', 'tubos_aluminio.png', 'lorem itsu 3', 'lorem itsu 3', 3, '2024-03-25 16:58:15', '2024-03-25 16:58:15', '1', '1', '1'),
	(10, 'otra.webp', '8_ad3_clay_1000x1000_1645b256-5817-425e-841c-07891c9c91ae.webp', '1', '1', NULL, NULL, NULL, NULL, 4, '2024-03-28 21:26:09', '2024-03-28 21:26:09', '1', '1', '1'),
	(17, '_90172663_thinkstockphotos-537817268.jpg', 'retail_ready_packaging_gene.jpg', NULL, NULL, 'otra.webp', '8_ad3_clay_1000x1000_1645b256-5817-425e-841c-07891c9c91ae.webp', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 'Muy lejos, más allá de las montañas de palabras, alejados de los países de las vocales y las consonantes, viven los textos simulados. Viven aislados en casas de letras, en la costa de la semántica, un', 5, '2024-04-03 17:59:14', '2024-04-03 17:59:14', '007', 'universal.jpg', 'perro.webp'),
	(18, 'images_(3).jpeg', 'images_(3).jpeg', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'vY, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'images_(3).jpeg', 'images_(3).jpeg', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 'Y, viéndole don Quijote de aquella manera, con muestras de tanta tristeza, le dijo: Sábete, Sancho, que no es un hombre más que otro si no hace más que otro. Todas estas borrascas que nos suceden son.', 6, '2024-04-05 01:11:06', '2024-04-05 01:11:06', NULL, 'images_(3).jpeg', 'images_(3).jpeg'),
	(19, 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique sit amet libero vel mollis. Nullam accumsan nec orci a tempor. Praesent elementum justo massa, et pellentesque nulla sollicitudin ut. Pellentesque eu ligula sapien.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique sit amet libero vel mollis. Nullam accumsan nec orci a tempor. Praesent elementum justo massa, et pellentesque nulla sollicitudin ut. Pellentesque eu ligula sapien.', 'r1108379_1296x729_16-9.jpg', 'r1108379_1296x729_16-9.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique sit amet libero vel mollis. Nullam accumsan nec orci a tempor. Praesent elementum justo massa, et pellentesque nulla sollicitudin ut. Pellentesque eu ligula sapien.', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec tristique sit amet libero vel mollis. Nullam accumsan nec orci a tempor. Praesent elementum justo massa, et pellentesque nulla sollicitudin ut. Pellentesque eu ligula sapien.', 10, '2024-04-16 19:24:58', '2024-04-16 19:24:58', '007', NULL, NULL),
	(20, 'looky.png', 'looky.png', 'F', 'F', 'looky.png', 'looky.png', 'F', 'F', 11, '2024-05-24 00:45:56', '2024-05-24 00:45:56', 'F', NULL, NULL),
	(21, NULL, NULL, 'Pruebas', NULL, NULL, NULL, NULL, NULL, 12, '2024-05-29 22:29:24', '2024-06-17 18:40:12', NULL, NULL, NULL),
	(22, NULL, NULL, 'Empacado el PT en corrugado (40x30x43cm), 2 camas cada cama con 18 pz, dando un total de 36 pz por corrugado. Contando con un separador de 29x39 por cama.\r\nEmpacado de un solo producto por caja dentro de especificación, cada corrugado identificado con nombre del producto, lote y caducidad y especificando piezas por corrugado.', NULL, NULL, NULL, NULL, NULL, 13, '2024-05-30 01:44:13', '2024-05-30 01:44:13', NULL, NULL, NULL),
	(23, NULL, NULL, 'Problemas para poner una cochinada aqui', NULL, NULL, NULL, NULL, NULL, 19, '2024-06-12 17:12:19', '2024-06-12 17:12:19', NULL, NULL, NULL);

-- Volcando estructura para tabla formularios.suplementos
CREATE TABLE IF NOT EXISTS `suplementos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `ingrediente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ficha_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `suplementos_ficha_id_foreign` (`ficha_id`),
  CONSTRAINT `suplementos_ficha_id_foreign` FOREIGN KEY (`ficha_id`) REFERENCES `fichas` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.suplementos: ~6 rows (aproximadamente)
INSERT IGNORE INTO `suplementos` (`id`, `ingrediente`, `ficha_id`, `created_at`, `updated_at`) VALUES
	(1, 'Semilla de soya (Glycine max)', 1, '2024-02-28 01:18:27', '2024-02-28 01:18:27'),
	(2, 'Semilla de soya (Glycine max)', 2, '2024-02-28 01:19:37', '2024-02-28 01:19:37'),
	(3, 'no hay nada', 3, '2024-06-10 18:44:00', '2024-06-10 20:24:07'),
	(4, 'no hay nada', 3, '2024-06-10 18:44:00', '2024-06-10 20:24:07'),
	(5, 'no hay nada', 3, '2024-06-10 18:44:00', '2024-06-10 20:24:07'),
	(6, 'se acabó', 3, '2024-06-10 18:44:00', '2024-06-10 20:24:07');

-- Volcando estructura para tabla formularios.toxicologias
CREATE TABLE IF NOT EXISTS `toxicologias` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `toxicidad` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `vias_entrada` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `degradacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `metodos_eliminacion` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `toxicologias_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `toxicologias_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.toxicologias: ~3 rows (aproximadamente)
INSERT IGNORE INTO `toxicologias` (`id`, `toxicidad`, `vias_entrada`, `degradacion`, `metodos_eliminacion`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'vProducto de prueba', 2, '2024-02-28 01:32:35', '2024-02-28 01:32:35'),
	(2, '2', '2', '2', '2', 3, '2024-06-11 01:10:31', '2024-06-11 01:10:31'),
	(3, '100624', 'PRUEBAS', 'PRUEBAS', '100624', 4, '2024-06-11 01:30:05', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.transitos
CREATE TABLE IF NOT EXISTS `transitos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `regla_transito` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trans_internacional` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transitos_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `transitos_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.transitos: ~3 rows (aproximadamente)
INSERT IGNORE INTO `transitos` (`id`, `regla_transito`, `trans_internacional`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'Producto de prueba', 'Producto de prueba', 2, '2024-02-28 01:32:35', '2024-02-28 01:32:35'),
	(2, '2', '2', 3, '2024-06-11 01:10:31', '2024-06-11 01:10:31'),
	(3, 'PRUEBAS', '100624', 4, '2024-06-11 01:30:05', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.transportes
CREATE TABLE IF NOT EXISTS `transportes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `un` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_producto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `clase` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `grupo_embalaje` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `peligro_ambiente` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `seguridad_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `transportes_seguridad_id_foreign` (`seguridad_id`),
  CONSTRAINT `transportes_seguridad_id_foreign` FOREIGN KEY (`seguridad_id`) REFERENCES `seguridads` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.transportes: ~3 rows (aproximadamente)
INSERT IGNORE INTO `transportes` (`id`, `un`, `desc_producto`, `clase`, `grupo_embalaje`, `peligro_ambiente`, `seguridad_id`, `created_at`, `updated_at`) VALUES
	(1, 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 'Producto de prueba', 2, '2024-02-28 01:32:35', '2024-02-28 01:32:35'),
	(2, '2', '2', '2', '2', '2', 3, '2024-06-11 01:10:31', '2024-06-11 01:10:31'),
	(3, 'PRUEBAS', '100624', '100624', 'PRUEBAS', '100624', 4, '2024-06-11 01:30:05', '2024-06-11 22:27:42');

-- Volcando estructura para tabla formularios.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb3_spanish_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb3_spanish_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb3_spanish_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb3_spanish_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb3_spanish_ci NOT NULL,
  `usertype_id` bigint unsigned NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `firma` varchar(50) COLLATE utf8mb3_spanish_ci NOT NULL,
  `puesto` varchar(250) COLLATE utf8mb3_spanish_ci NOT NULL,
  `status` varchar(50) COLLATE utf8mb3_spanish_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_username_unique` (`username`),
  UNIQUE KEY `users_email_unique` (`email`),
  KEY `users_usertype_id_foreign` (`usertype_id`),
  CONSTRAINT `users_usertype_id_foreign` FOREIGN KEY (`usertype_id`) REFERENCES `usertypes` (`id`) ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- Volcando datos para la tabla formularios.users: ~10 rows (aproximadamente)
INSERT IGNORE INTO `users` (`id`, `uuid`, `name`, `username`, `email`, `email_verified_at`, `password`, `usertype_id`, `remember_token`, `created_at`, `updated_at`, `firma`, `puesto`, `status`) VALUES
	(1, '01637cd0-d5c1-11ee-9ccc-753960494904', 'Jovany Guillen Cortes', 'jguillen', 'j.guillen@laboratoriosdibar.com', NULL, '$2y$10$ADcA8TjTOum9wynd5jByWOKV3V0L4ZkaUWzonIG0oU4KIxz7wxKBW', 1, NULL, '2024-02-28 00:39:02', '2024-02-28 00:39:02', 'JGC', 'Administrador', '1'),
	(2, '6d070170-d5c6-11ee-b4f7-b9d74f358c4d', 'Sergio Arriaga', 'admin1@laboratoriosdibar.com', 'admin1@laboratoriosdibar.com', NULL, '$2y$10$AYnBytkQ6r1zzzkOgOcMjOkDmdPiMlaoGLJ5PJHgBU7bNxRZN13vG', 1, NULL, '2024-02-28 01:17:50', '2024-02-28 01:17:50', 'SAQ', '', '1'),
	(3, '95ec9380-dcb4-11ee-8152-af387a38153a', 'SERGIO ARRIAGA QUIROZ', 'admin@laboratoriosdibar.com', 'admin@laboratoriosdibar.com', NULL, '$2y$10$uXywF5LubPkZIyXtaMzM3eiU7kovPTC0NsbFJXT9K5.ScTcNv0nRq', 1, 'kX4oag8gT0ucMSjX8GQQEz2rhHhYyoNPkWLaZjYN7x15B69EUlkxe0zX8lOg', '2024-03-07 20:57:46', '2024-04-03 01:32:57', 'SAQ', 'Gerente TI', '1'),
	(4, 'e91ee790-dcb6-11ee-a53e-27f9d6e0a016', 'JACUINDE GUZMAN MARIA DEL CARMEN', 'cjacuinde', 'cjacuinde@laboratoriosdibar.com', NULL, '$2y$10$cXA7nJiqjNE3G5KG5RPwkOxJjl9ytxhk2ET02cRXGSaDupPCsYBbq', 2, NULL, '2024-03-07 21:14:24', '2024-03-07 21:14:24', 'MCJG', 'Coordinador CAC', '1'),
	(5, '20dc57e0-dcb7-11ee-8f40-3be083178549', 'GUTIERREZ SANCHEZ GABRIELA', 'gsanchez', 'gsanchez@laboratoriosdibar.com', NULL, '$2y$10$czKDJC959d19mf678ExZde.4re97S66M7M6hC0T576xGfZGb6nV9y', 2, NULL, '2024-03-07 21:15:58', '2024-03-07 21:15:58', 'GGS', 'SUPERVISOR', '1'),
	(6, 'f04d0da0-dcb7-11ee-912f-65925442bca8', 'CASTRO CORTEZ ELIZABETH', 'ecastro', 'ecastro@laboratoriosdibar.com', NULL, '$2y$10$YgZFWv25kOrkIBsIh/8Ff.yB.DiM5btaHl7NpudUYjdUtwb.w8sQG', 2, NULL, '2024-03-07 21:21:46', '2024-03-07 21:21:46', 'ECC', 'INSPECTOR', '1'),
	(7, '7e20c950-dcb9-11ee-9aa5-eb7f20874653', 'HERNANDEZ DEL RIO OSCAR DE JESUS', 'ohernandez', 'ohernandez@laboratoriosdibar.com', NULL, '$2y$10$tkg6DmwkHrSOcCek1ztOw.Q9mZ2NTEaScRRZWeb5Z76yLVLPcymzm', 2, NULL, '2024-03-07 21:32:53', '2024-03-07 21:32:53', 'ODJHDR', 'INSPECTOR', '1'),
	(8, '551c50e0-dcbd-11ee-bf46-75c8310cb07c', 'MENDEZ AGUILAR CINTHIA ERANDI', 'cmendez', 'cmendez@laboratoriosdibar.com', NULL, '$2y$10$43bbqKYrzqDvPxIPhjGnNuzFb6BxEiDbZm20xhVYMqajwhxSQ/xly', 2, NULL, '2024-03-07 22:00:22', '2024-03-07 22:00:22', 'CEAM', 'SUPERVISOR', '1'),
	(9, 'b9e76df0-dcd1-11ee-9154-3bbf81a0bf0d', 'ESCAMILLA CAMPOS JOAN RUBEN', 'j.escamilla', 'j.escamilla@laboratoriosdibar.com', NULL, '$2y$10$Uag7qBpaag8LpvU3nvNwxOgq2BBrJG1wAmLELx0udJVA7MrkeqyES', 2, NULL, '2024-03-08 00:26:22', '2024-03-08 01:49:02', 'JREC', 'INSPECTOR', '1'),
	(10, 'e3a77850-dfb9-11ee-91c4-0fe3894e9cf2', 'PACHECO GARCIA JESUS SANTIAGO', 'j.pacheco', 'j.pacheco@laboratoriosdibar.com', NULL, '$2y$10$THEmN9RdPtzOLvmtNRWRPuHod1xOtaBc..fUwiZ3UJn8Yd9GXCebC', 2, NULL, '2024-03-11 17:13:17', '2024-05-07 17:26:36', 'JSPG', 'INSPECTOR', '1');

-- Volcando estructura para tabla formularios.usertypes
CREATE TABLE IF NOT EXISTS `usertypes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` char(36) COLLATE utf8mb3_spanish_ci NOT NULL,
  `type` varchar(50) COLLATE utf8mb3_spanish_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb3 COLLATE=utf8mb3_spanish_ci;

-- Volcando datos para la tabla formularios.usertypes: ~3 rows (aproximadamente)
INSERT IGNORE INTO `usertypes` (`id`, `uuid`, `type`, `created_at`, `updated_at`) VALUES
	(1, '123', 'Administrador', '2024-02-27 22:38:22', '2024-02-27 22:38:24'),
	(2, '2', 'CAC', '2024-03-07 17:17:33', '2024-03-07 17:17:34'),
	(3, '3', 'ALMACÉN', '2024-03-07 17:17:59', '2024-03-07 17:18:00'),
	(4, '4', 'PRODUCCIÓN', '2024-03-07 17:18:22', '2024-03-07 17:18:23');

-- Volcando estructura para tabla formularios.viscosos
CREATE TABLE IF NOT EXISTS `viscosos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `area` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_sap` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_si` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `img_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_si` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `desc_no` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lote` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `densidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `ph` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `viscosidad` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `img_extra` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `criterios_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `viscosos_criterios_id_foreign` (`criterios_id`),
  CONSTRAINT `viscosos_criterios_id_foreign` FOREIGN KEY (`criterios_id`) REFERENCES `criterios` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Volcando datos para la tabla formularios.viscosos: ~0 rows (aproximadamente)
INSERT IGNORE INTO `viscosos` (`id`, `area`, `id_sap`, `img_si`, `img_no`, `desc_si`, `desc_no`, `lote`, `cad`, `densidad`, `ph`, `viscosidad`, `img_extra`, `criterios_id`, `created_at`, `updated_at`) VALUES
	(1, 'ENVASE', '123', 'c', 'c', 'Pruebas', 'Pruebas', 'Pruebas', 'Pruebas', 'Pruebas', 'Pruebas', 'Pruebas', NULL, 1, '2024-03-13 18:34:19', '2024-03-13 18:34:19');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
