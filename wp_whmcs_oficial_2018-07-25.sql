# ************************************************************
# Sequel Pro SQL dump
# Versão 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.5.5-10.1.31-MariaDB)
# Base de Dados: wp_whmcs_oficial
# Tempo de Geração: 2018-07-25 22:05:09 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump da tabela tbusuarios
# ------------------------------------------------------------

DROP TABLE IF EXISTS `tbusuarios`;

CREATE TABLE `tbusuarios` (
  `idUsu` int(11) NOT NULL AUTO_INCREMENT,
  `Nome` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Senha` varchar(45) NOT NULL,
  `Nivel` varchar(2) NOT NULL,
  `DtCadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ft` varchar(255) DEFAULT 'userex.jpg',
  `funcao` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`idUsu`),
  UNIQUE KEY `Index_2` (`Email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 PACK_KEYS=0;

LOCK TABLES `tbusuarios` WRITE;
/*!40000 ALTER TABLE `tbusuarios` DISABLE KEYS */;

INSERT INTO `tbusuarios` (`idUsu`, `Nome`, `Email`, `Senha`, `Nivel`, `DtCadastro`, `ft`, `funcao`)
VALUES
	(1,'SÃ¡vio Henrique de Souza Araujo','saviohenrique@gmail.com','e10adc3949ba59abbe56e057f20f883e','1','2018-06-06 14:37:49','savio.jpg','O MITO'),
	(6,'Leonardo Almeida','leonardo@webplace.com.br','7c012650bd5aaa97dc90947ae029bea6','1','2018-07-23 22:10:46','userex.jpg','MINHOCA'),
	(10,'sÃ¡vio','savio@','123456','','2018-07-24 22:38:35','userex.jpg',NULL);

/*!40000 ALTER TABLE `tbusuarios` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
