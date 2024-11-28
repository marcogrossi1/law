-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Tempo de geração: 12-Jul-2022 às 12:09
-- Versão do servidor: 5.7.31
-- versão do PHP: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `biblioteca`
--
CREATE DATABASE IF NOT EXISTS `biblioteca` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `biblioteca`;

-- --------------------------------------------------------

--
-- Estrutura da tabela `autores`
--

DROP TABLE IF EXISTS `autores`;
CREATE TABLE IF NOT EXISTS `autores` (
  `id-livro` int(4) NOT NULL,
  `nomes` varchar(30) NOT NULL,
  `sobrenome` varchar(15) NOT NULL,
  KEY `id-livro` (`id-livro`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `autores`
--

INSERT INTO `autores` (`id-livro`, `nomes`, `sobrenome`) VALUES
(5, 'V. M.', 'KENSKI'),
(6, 'William Geraldo', 'SALLUM'),
(8, 'Antonio Raimundo dos', 'SANTOS'),
(7, 'William Geraldo', 'SALLUM'),
(6, 'Juliano', 'SCHIMIGUEL'),
(4, 'Ricardo R.', 'LECHETA'),
(3, 'H. M.', 'DEITEL'),
(3, 'P. J.', 'DEITEL'),
(2, 'David', 'FLANAGAN'),
(1, 'Maurício Samy', 'SILVA'),
(9, 'Bruce', 'ECKEL'),
(10, 'Andrew S.', 'TANENBAUM');

-- --------------------------------------------------------

--
-- Estrutura da tabela `livros`
--

DROP TABLE IF EXISTS `livros`;
CREATE TABLE IF NOT EXISTS `livros` (
  `id` int(4) UNSIGNED NOT NULL AUTO_INCREMENT,
  `titulo` varchar(130) NOT NULL,
  `ano` int(4) NOT NULL,
  `editora` varchar(30) NOT NULL,
  `cidade` varchar(35) NOT NULL,
  `edicao` int(2) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `livros`
--

INSERT INTO `livros` (`id`, `titulo`, `ano`, `editora`, `cidade`, `edicao`) VALUES
(1, 'HTML5: A linguagem de marcação que revolucionou a Web', 2014, 'Novatec', 'São Paulo', 2),
(2, 'JavaScript: o guia definitivo', 2004, 'Bookman', 'Porto Alegre', 4),
(3, 'JAVA: como programar', 2003, 'Bookman', 'Porto Alegre', 4),
(4, 'Google Andorid: aprenda a criar aplicações para Android SDK', 2015, 'Novatec', 'São Paulo', 4),
(5, 'Gestão e uso das mídias em projetos de Educação a Distância', 2005, 'Revista ECurriculum', 'São Paulo', 1),
(6, 'O Processo de Recuperação dos Alunos da Disciplina de Matemática no Ensino Médio e Técnico, Utilizando a Educação a Distância', 2011, 'COPEC', 'Santos', 1),
(7, 'A Utilização das TIC´s, através de EaD, no Processo de Recuperação Final de Estudos da Matemática no Ensino Médio', 2015, 'UNICSUL', 'São Paulo', 1),
(8, 'Metodologia científica: a construção do conhecimento', 2002, 'DP&A', 'Rio de Janeiro', 5),
(9, 'Thinking in c++: introduction to standard C++', 2000, 'Prentice Hall', 'New Jersey/EUA', 2),
(10, 'Redes de Computadores', 2003, 'Campus', 'São Paulo', 4);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
