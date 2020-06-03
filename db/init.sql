use univille;
CREATE TABLE `cliente` (
  `codigo` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(100) DEFAULT NULL,
  `endereco` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`codigo`)
);

GRANT ALL PRIVILEGES ON univille.* TO 'root'@'%' WITH GRANT OPTION; 
FLUSH PRIVILEGES;