-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Servidor: localhost
-- Tempo de Geração: 07/05/2018 às 21:33
-- Versão do servidor: 5.5.46-0ubuntu0.14.04.2
-- Versão do PHP: 5.5.9-1ubuntu4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Banco de dados: `db_fatecie`
--

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_aluno`
--

CREATE TABLE IF NOT EXISTS `tb_aluno` (
  `id_aluno` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `data_nasc` date DEFAULT NULL,
  `email` varchar(255) COLLATE latin1_general_ci DEFAULT NULL,
  `celular` varchar(15) COLLATE latin1_general_ci DEFAULT NULL,
  `salario` decimal(10,2) DEFAULT NULL,
  PRIMARY KEY (`id_aluno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=13 ;

--
-- Fazendo dump de dados para tabela `tb_aluno`
--

INSERT INTO `tb_aluno` (`id_aluno`, `nome`, `data_nasc`, `email`, `celular`, `salario`) VALUES
(1, 'Marcia', '1986-12-07', 'marcia@hotmail.com', '(44) 97364-8374', 1500.00),
(2, 'Paula', '1993-08-25', 'contato@fatecie.br', '(43) 97384-7354', 2300.00),
(6, 'JULIANA2', '1995-02-12', 'juju@bol.com.br2', '(44) 87464-0922', 5400.02),
(7, 'PRICILIA  BORGES', '1983-04-28', 'pri@uol.com.br', '9974-3423', 3200.00),
(9, 'CATARINA ANTIGO', '1998-06-27', 'catt@hotmail.com', '(45) 87648-9844', 3500.00),
(11, 'PAULA RIBEIRO', '2001-05-16', 'pribeiro@uem.br', '(44) 92383-9933', 4500.00),
(12, 'RENATA SILVA', '2011-01-12', 'resilva@hotmail.com', '(43) 38374-0393', 4500.00);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_animal`
--

CREATE TABLE IF NOT EXISTS `tb_animal` (
  `id_animal` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(150) COLLATE utf8_unicode_ci NOT NULL,
  `data` date DEFAULT NULL,
  `tipo_bicho` char(1) COLLATE utf8_unicode_ci NOT NULL,
  `raca` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id_animal`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=5 ;

--
-- Fazendo dump de dados para tabela `tb_animal`
--

INSERT INTO `tb_animal` (`id_animal`, `nome`, `data`, `tipo_bicho`, `raca`) VALUES
(1, 'Garfield', '1987-10-27', '', 'gato'),
(2, 'Bob', '1998-08-13', '', 'cachorro'),
(3, 'Gibi', '2007-06-07', '', 'cachorro'),
(4, 'Thart', '1993-11-29', '', 'tartatuga');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_cidade`
--

CREATE TABLE IF NOT EXISTS `tb_cidade` (
  `id_cidade` int(11) NOT NULL AUTO_INCREMENT,
  `cidade` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `capital` enum('m','c') COLLATE utf8_unicode_ci DEFAULT 'm',
  `cid_id_estado` int(11) NOT NULL,
  PRIMARY KEY (`id_cidade`),
  KEY `cid_id_estado` (`cid_id_estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=47 ;

--
-- Fazendo dump de dados para tabela `tb_cidade`
--

INSERT INTO `tb_cidade` (`id_cidade`, `cidade`, `capital`, `cid_id_estado`) VALUES
(1, 'Capixaba', 'm', 1),
(2, 'Rio Branco', 'c', 1),
(3, 'Jordão', 'm', 1),
(4, 'Maceió', 'c', 2),
(5, 'Belo Monte', 'm', 2),
(6, 'Capela', 'm', 2),
(7, 'Craibras', 'm', 2),
(8, 'Salvados', 'c', 3),
(9, 'Anguera', 'm', 3),
(10, 'Barra', 'm', 3),
(11, 'Boa Nova', 'm', 3),
(12, 'Caculé', 'm', 3),
(13, 'Glória', 'm', 3),
(14, 'Goiânia', 'c', 4),
(15, 'Bonópolis', 'm', 4),
(16, 'Caçu', 'm', 4),
(17, 'Formoso', 'm', 4),
(18, 'Campo Grande', 'c', 5),
(19, 'Bonito', 'm', 5),
(20, 'Corguinho', 'm', 5),
(21, 'Dourados', 'm', 5),
(22, 'Curitiba', 'c', 6),
(23, 'Paranavaí', 'm', 6),
(24, 'Maringá', 'm', 6),
(25, 'Londrina', 'm', 6),
(26, 'Tambuara', 'm', 6),
(27, 'Paraiso do Norte', 'm', 6),
(28, 'Terra Rica', 'm', 6),
(29, 'Loanda', 'm', 6),
(30, 'Florianópolis', 'c', 7),
(31, 'Anotnio Carlos', 'm', 7),
(32, 'Águas Mornas', 'm', 7),
(33, 'Belmonte', 'm', 7),
(34, 'Brusque', 'm', 7),
(35, 'Camboriú', 'm', 7),
(36, 'São Paulo', 'c', 8),
(37, 'Altair', 'm', 8),
(38, 'Aparecida', 'm', 8),
(39, 'Bauru', 'm', 8),
(40, 'Campos do Jordão', 'm', 8),
(41, 'Dracena', 'm', 8),
(42, 'Palmas', 'c', 9),
(43, 'Ananás', 'm', 9),
(44, 'Arraias', 'm', 9),
(45, 'Gurupi', 'm', 9),
(46, 'Sucupira', 'm', 9);

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_estado`
--

CREATE TABLE IF NOT EXISTS `tb_estado` (
  `id_estado` int(11) NOT NULL AUTO_INCREMENT,
  `estado` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sigla` char(2) COLLATE utf8_unicode_ci DEFAULT NULL,
  `regiao` varchar(15) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id_estado`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=10 ;

--
-- Fazendo dump de dados para tabela `tb_estado`
--

INSERT INTO `tb_estado` (`id_estado`, `estado`, `sigla`, `regiao`) VALUES
(1, 'Acre', 'AC', 'Norte'),
(2, 'Alagoas', 'AL', 'Nordeste'),
(3, 'Bahia', 'BA', 'Nordeste'),
(4, 'Goiás', 'GO', 'Centro-Oeste'),
(5, 'Mato Grosso do Sul', 'MS', 'Centro-Oeste'),
(6, 'Paraná', 'PR', 'Sul'),
(7, 'Santa Catarina', 'SC', 'Sul'),
(8, 'São Paulo', 'SP', 'Sudeste'),
(9, 'Tocantins', 'TO', 'Norte');

-- --------------------------------------------------------

--
-- Estrutura para tabela `tb_pessoa`
--

CREATE TABLE IF NOT EXISTS `tb_pessoa` (
  `id_pessoa` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cidade` varchar(150) COLLATE utf8_unicode_ci DEFAULT NULL,
  `salario` double DEFAULT NULL,
  `vfloat` float DEFAULT NULL,
  PRIMARY KEY (`id_pessoa`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=8 ;

--
-- Fazendo dump de dados para tabela `tb_pessoa`
--

INSERT INTO `tb_pessoa` (`id_pessoa`, `nome`, `cidade`, `salario`, `vfloat`) VALUES
(1, 'Francisco', 'Umuarama', 0, NULL),
(2, 'Geremias', 'Maristela', 0, NULL),
(3, 'Irine', 'Maringá', 0, NULL),
(4, 'Pedro', 'Vila Rica', 0, NULL),
(5, 'Afonso', 'Maringa', 15, NULL),
(6, 'Astolfo', 'Astorga', 18.3, NULL),
(7, 'Azeite', 'Paranavaí', 0, NULL);

--
-- Restrições para dumps de tabelas
--

--
-- Restrições para tabelas `tb_cidade`
--
ALTER TABLE `tb_cidade`
  ADD CONSTRAINT `tb_cidade_ibfk_1` FOREIGN KEY (`cid_id_estado`) REFERENCES `tb_estado` (`id_estado`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
