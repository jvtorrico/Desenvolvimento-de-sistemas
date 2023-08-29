-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 29-Ago-2023 às 14:40
-- Versão do servidor: 8.0.30
-- versão do PHP: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `bichochique`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais`
--

DROP TABLE IF EXISTS `animais`;
CREATE TABLE IF NOT EXISTS `animais` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(30) DEFAULT NULL,
  `sexo` char(1) DEFAULT NULL,
  `peso` float DEFAULT NULL,
  `tipos_animais_id` int NOT NULL,
  `raças_id` int NOT NULL,
  PRIMARY KEY (`id`,`tipos_animais_id`,`raças_id`),
  KEY `fk_animais_tipos_animais_idx` (`tipos_animais_id`),
  KEY `fk_animais_raças1_idx` (`raças_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `animais_has_proprietários`
--

DROP TABLE IF EXISTS `animais_has_proprietários`;
CREATE TABLE IF NOT EXISTS `animais_has_proprietários` (
  `animais_id` int NOT NULL,
  `proprietários_id` int NOT NULL,
  PRIMARY KEY (`animais_id`,`proprietários_id`),
  KEY `fk_animais_has_proprietários_proprietários1_idx` (`proprietários_id`),
  KEY `fk_animais_has_proprietários_animais1_idx` (`animais_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `proprietários`
--

DROP TABLE IF EXISTS `proprietários`;
CREATE TABLE IF NOT EXISTS `proprietários` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(60) DEFAULT NULL,
  `endereco` varchar(120) DEFAULT NULL,
  `fone` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `raças`
--

DROP TABLE IF EXISTS `raças`;
CREATE TABLE IF NOT EXISTS `raças` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(20) DEFAULT NULL,
  `descricao` longtext,
  `faixa_peso` varchar(20) DEFAULT NULL,
  `faixa_preco` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tipos_animais`
--

DROP TABLE IF EXISTS `tipos_animais`;
CREATE TABLE IF NOT EXISTS `tipos_animais` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuários`
--

DROP TABLE IF EXISTS `usuários`;
CREATE TABLE IF NOT EXISTS `usuários` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nome` varchar(45) DEFAULT NULL,
  `email` varchar(45) NOT NULL,
  `senha` varchar(45) NOT NULL,
  `data_criação` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `animais`
--
ALTER TABLE `animais`
  ADD CONSTRAINT `fk_animais_raças1` FOREIGN KEY (`raças_id`) REFERENCES `raças` (`id`),
  ADD CONSTRAINT `fk_animais_tipos_animais` FOREIGN KEY (`tipos_animais_id`) REFERENCES `tipos_animais` (`id`);

--
-- Limitadores para a tabela `animais_has_proprietários`
--
ALTER TABLE `animais_has_proprietários`
  ADD CONSTRAINT `fk_animais_has_proprietários_animais1` FOREIGN KEY (`animais_id`) REFERENCES `animais` (`id`),
  ADD CONSTRAINT `fk_animais_has_proprietários_proprietários1` FOREIGN KEY (`proprietários_id`) REFERENCES `proprietários` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
