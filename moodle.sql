-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 02-Jul-2015 às 19:48
-- Versão do servidor: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `moodle`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `fases`
--

CREATE TABLE IF NOT EXISTS `fases` (
  `descricaoFase` varchar(250) NOT NULL,
  PRIMARY KEY (`descricaoFase`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `fases`
--

INSERT INTO `fases` (`descricaoFase`) VALUES
('blbalbalba'),
('esse nova fase');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gantt_links`
--

CREATE TABLE IF NOT EXISTS `gantt_links` (
  `id` int(11) NOT NULL,
  `source` int(11) NOT NULL,
  `target` int(11) NOT NULL,
  `type` varchar(1) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `gantt_links`
--

INSERT INTO `gantt_links` (`id`, `source`, `target`, `type`) VALUES
(1, 1, 2, '1');

-- --------------------------------------------------------

--
-- Estrutura da tabela `gantt_tasks`
--

CREATE TABLE IF NOT EXISTS `gantt_tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `text` varchar(255) NOT NULL,
  `start_date` datetime NOT NULL,
  `duration` int(11) NOT NULL,
  `progress` float NOT NULL,
  `sortorder` int(11) NOT NULL,
  `parent` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Extraindo dados da tabela `gantt_tasks`
--

INSERT INTO `gantt_tasks` (`id`, `text`, `start_date`, `duration`, `progress`, `sortorder`, `parent`) VALUES
(1, 'Project #1', '2015-11-30 00:00:00', 11, 0.6, 0, 0),
(2, 'Projeto SalvaÃ§Ã£o', '2015-11-30 00:00:00', 1, 0, 0, 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--

CREATE TABLE IF NOT EXISTS `pessoa` (
  `login` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `TIPO_USUARIO` int(11) NOT NULL,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `cpf` varchar(50) NOT NULL,
  PRIMARY KEY (`login`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `pessoa`
--

INSERT INTO `pessoa` (`login`, `password`, `TIPO_USUARIO`, `nome`, `email`, `cpf`) VALUES
('lucasfborges', '0000', 1, 'nome', 'lucasfborges@gmail.com', '12345678900'),
('sanugav', '123', 1, 'nome', 'juliocto2011@hotmail.com', '08235855658');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
