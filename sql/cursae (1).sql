-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: 19-Jun-2018 às 02:02
-- Versão do servidor: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cursae`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulas`
--

DROP TABLE IF EXISTS `aulas`;
CREATE TABLE IF NOT EXISTS `aulas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `conteudo` text,
  `video` text NOT NULL,
  `duration` int(11) DEFAULT NULL,
  `id_secao` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `ordem` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=48 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aulas`
--

INSERT INTO `aulas` (`id`, `nome`, `conteudo`, `video`, `duration`, `id_secao`, `id_curso`, `ordem`) VALUES
(23, 'Aula 1', '<p>Texto aula 1</p>\r\n', 'https://vimeo.com/224796738', 492, 23, 1, 1),
(24, 'Aula 2', '<p>Texto aula 2</p>\r\n', 'https://vimeo.com/224326254', 680, 23, 1, 2),
(25, 'Aula 3', '<p>Texto aula 3</p>\r\n', 'https://vimeo.com/223810249', 231, 23, 1, 4),
(26, 'Aula 1', NULL, 'https://vimeo.com/197443255', 240, 24, 1, 1),
(27, 'Aula 2', NULL, 'https://vimeo.com/80209061', 369, 24, 1, 2),
(28, 'Aula 3', NULL, 'https://vimeo.com/80209061', 369, 24, 1, 3),
(29, 'Aula 4', NULL, 'https://vimeo.com/80209061', 369, 24, 1, 3),
(30, 'Aula 1', '<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam ut lectus enim. Pellentesque vestibulum faucibus neque. Donec euismod velit a erat pharetra hendrerit. Nulla consequat, ipsum a aliquet ultrices, enim lorem dignissim urna, sagittis fringilla libero nunc ac enim. Nulla et nisi vehicula, vehicula neque ac, semper nisl. Sed suscipit urna tempor nulla consequat, sed posuere elit rhoncus. Vestibulum sapien felis, varius id sagittis ac, porttitor sit amet elit. Nunc et velit quam. Mauris pulvinar eleifend mi, eget sagittis ipsum lacinia sit amet. Sed varius augue sit amet ipsum mollis, a feugiat ligula blandit. Pellentesque pretium euismod vehicula.</p>\r\n\r\n<p>Pellentesque condimentum lobortis leo, a egestas lectus efficitur in. Vivamus rhoncus facilisis nisl, ac lobortis ligula imperdiet sit amet. Vivamus sem libero, rutrum at ex sit amet, aliquet sodales risus. Maecenas sed felis eu lorem luctus gravida. Morbi imperdiet eu est ac accumsan. Morbi vitae tincidunt nisl. Ut aliquet nibh ac sagittis rutrum. Donec hendrerit tempus nisi at cursus. Sed aliquam massa condimentum, faucibus magna rhoncus, pulvinar sapien.</p>\r\n\r\n<p>Vestibulum pellentesque consectetur diam eget placerat. Maecenas eget risus id augue vulputate ultricies. Maecenas arcu leo, volutpat sit amet porttitor eget, interdum sit amet tellus. Phasellus dolor urna, elementum non porta sit amet, maximus eu tortor. Phasellus interdum leo quis dictum pretium. Sed at enim sit amet tellus iaculis convallis hendrerit sed felis. Mauris eu elementum sem, quis interdum sapien. Nunc semper porta tellus id euismod. Nullam viverra libero non augue fringilla, at commodo nisl rhoncus. Nam gravida convallis eros id varius. Integer eu velit iaculis, tristique est vel, gravida eros.</p>\r\n', 'https://vimeo.com/223986921', 79, 25, 2, 1),
(31, 'Aula 2', NULL, 'https://vimeo.com/223494758', 311, 25, 2, 2),
(32, 'fdsdfsdfs', NULL, 'https://vimeo.com/223494758', 311, 26, 2, 2),
(33, 'dfsadsadsa', NULL, 'https://vimeo.com/223494758', 311, 26, 2, 3),
(34, 'https://vimeo.com/223494758', NULL, 'https://vimeo.com/223494758', 311, 26, 2, 1),
(35, 'Aula teste', '<p>teste</p>\r\n', 'https://vimeo.com/224796738', 492, 27, 2, 5),
(36, 'aula 2', '<p>https://vimeo.com/224796738</p>\r\n', 'https://vimeo.com/224796738', 492, 27, 2, 6),
(38, 'Teste', '<p>teste</p>\r\n', 'https://vimeo.com/223986921', 318, 29, 1, 7),
(39, 'Dance', NULL, 'https://vimeo.com/129104705', 133, 30, 1, 8),
(40, 'ApresentaÃ§Ã£o', '<p>Nesse v&iacute;deo pretendo demostrar o jogo que iremos criar durante o curso.</p>\r\n', 'https://www.youtube.com/watch?v=3_Vc7Vvx2gk', NULL, 31, 4, 1),
(41, 'O que Ã© Javascript?', NULL, 'https://vimeo.com/274781072', 282, 33, 5, 2),
(42, 'Javascript Vs Java', NULL, 'https://vimeo.com/274781094', 190, 33, 5, 3),
(43, 'Onde Ã© utilizado?', NULL, 'https://vimeo.com/274781118', 301, 33, 5, 4),
(44, 'Principais elementos', NULL, 'https://vimeo.com/274781119', NULL, 33, 5, 5),
(45, 'Aspectos AvanÃ§ados do Javascript', NULL, 'https://vimeo.com/274781134', 388, 33, 5, 6),
(46, 'ConclusÃ£o', NULL, 'https://vimeo.com/274781143', 109, 33, 5, 7),
(47, 'IntroduÃ§Ã£o', NULL, 'https://vimeo.com/274781045', 124, 33, 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `aulas_estudantes`
--

DROP TABLE IF EXISTS `aulas_estudantes`;
CREATE TABLE IF NOT EXISTS `aulas_estudantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_aula` int(11) NOT NULL,
  `id_estudante` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=47 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `aulas_estudantes`
--

INSERT INTO `aulas_estudantes` (`id`, `id_aula`, `id_estudante`, `id_curso`) VALUES
(1, 23, 4, 1),
(2, 24, 4, 1),
(3, 25, 4, 1),
(4, 26, 4, 1),
(5, 27, 4, 1),
(6, 28, 4, 1),
(7, 29, 4, 1),
(8, 38, 4, 1),
(9, 39, 4, 1),
(10, 40, 4, 4),
(11, 30, 4, 2),
(12, 31, 4, 2),
(13, 34, 4, 2),
(14, 32, 4, 2),
(15, 33, 4, 2),
(16, 35, 4, 2),
(17, 41, 4, 5),
(18, 42, 4, 5),
(19, 43, 4, 5),
(20, 44, 4, 5),
(21, 47, 4, 5),
(22, 45, 4, 5),
(23, 46, 4, 5),
(24, 47, 5, 5),
(25, 41, 5, 5),
(26, 23, 5, 1),
(27, 25, 5, 1),
(28, 24, 5, 1),
(29, 26, 5, 1),
(30, 27, 5, 1),
(31, 42, 5, 5),
(32, 43, 5, 5),
(33, 44, 5, 5),
(34, 45, 5, 5),
(35, 46, 5, 5),
(36, 39, 5, 1),
(37, 38, 5, 1),
(38, 28, 5, 1),
(39, 29, 5, 1),
(40, 30, 5, 2),
(41, 31, 5, 2),
(42, 32, 5, 2),
(43, 34, 5, 2),
(44, 33, 5, 2),
(45, 35, 5, 2),
(46, 36, 5, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `avaliacoes`
--

DROP TABLE IF EXISTS `avaliacoes`;
CREATE TABLE IF NOT EXISTS `avaliacoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudante` int(11) NOT NULL,
  `id_curso` int(11) NOT NULL,
  `estrelas` int(11) NOT NULL,
  `comentario` text NOT NULL,
  `data` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `avaliacoes`
--

INSERT INTO `avaliacoes` (`id`, `id_estudante`, `id_curso`, `estrelas`, `comentario`, `data`, `status`) VALUES
(6, 5, 5, 5, 'Curso top!', '2018-06-18 22:33:22', 0),
(7, 5, 2, 5, '000', '2018-06-18 22:40:22', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `categorias`
--

DROP TABLE IF EXISTS `categorias`;
CREATE TABLE IF NOT EXISTS `categorias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `id_categoria` int(11) DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `categorias`
--

INSERT INTO `categorias` (`id`, `nome`, `slug`, `icon`, `id_categoria`, `ordem`) VALUES
(1, 'Desenvolvimento', 'desenvolvimento', 'fa fa-code', NULL, 1),
(2, 'TI e Software', 'ti-e-software', 'fa fa-cloud', NULL, 2),
(3, 'Desenvolvimento de Jogos', 'desenvolvimento-de-jogos', 'fa fa-gamepad', 1, 3);

-- --------------------------------------------------------

--
-- Estrutura da tabela `codigos`
--

DROP TABLE IF EXISTS `codigos`;
CREATE TABLE IF NOT EXISTS `codigos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `codigo` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `id_produto` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=91 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `codigos`
--

INSERT INTO `codigos` (`id`, `codigo`, `status`, `id_produto`) VALUES
(4, 'JESSE71X02AULISSES', 1, 7),
(5, 'ROBY85Y33NASC', 1, 7),
(6, 'ANDRE0299YREISX', 1, 7),
(7, 'GUIZ88YXSANTOS', 1, 7),
(8, 'ALLANX17LIMAX', 1, 7),
(9, 'FERN2017CAMP', 1, 7),
(10, 'CHARLES99XYROSA', 1, 7),
(11, 'LAURAX99YCAM', 1, 7),
(12, 'ULISSESX17XSANT', 1, 7),
(13, 'HANDZ127XNOBRE', 1, 7),
(14, 'HENRYX99YHANS', 1, 7),
(15, 'ROBY17ZFREITAS', 1, 7),
(16, 'JUN2017COSTA', 1, 7),
(17, 'ERICX99XBIAZ', 1, 7),
(18, 'SERGIOY17XSANT', 1, 7),
(19, 'RODRIGOX17ROD', 1, 7),
(20, 'EDUX99XFREITAS', 1, 7),
(21, 'CLAUDIOX99XMOR', 1, 7),
(22, 'VALTERX99XFIL', 1, 7),
(23, 'PAULOX17XPACH', 1, 7),
(24, 'LUCASXYZGABRIEL', 1, 7),
(25, 'WILIAMX99XALVES', 1, 7),
(26, 'EMMAX99XFERN', 1, 7),
(27, 'WESLEYX99XSILVA', 1, 7),
(28, 'CARIBENET2017', 1, 7),
(29, 'FRANCISX99XCAB', 1, 7),
(30, 'ALANX99XMORATO', 1, 7),
(31, 'GABRIEL299XNERES', 1, 7),
(32, 'LUCIANO499SALES', 1, 3),
(33, 'POLAR32', 1, 7),
(34, 'PABLO199XMENEZES', 1, 6),
(35, 'SOLTERX99YSANT', 1, 7),
(36, 'BRENOY17XFARIAS', 1, 7),
(37, 'TIAGOX17XEUG', 1, 7),
(38, 'MARCOX299CESAR', 1, 7),
(40, 'TYF5634Y0', 1, 1),
(41, 'M4RTES4R', 1, 1),
(42, 'TTRSA434TR', 0, 2),
(43, 'TEMPL4356', 0, 2),
(44, 'FULL4TR34', 1, 3),
(47, 'MARCIOX99XROG', 1, 5),
(48, 'FABIOX99CARVALHO', 1, 5),
(49, 'ANDRE99XQUEIROZ', 1, 5),
(50, 'CLEIX99XGOMES', 1, 5),
(51, 'ARTENX99XMAD', 1, 6),
(52, 'CLAUDX99XSOU', 1, 5),
(53, 'VINIX17XPEREIRA', 1, 5),
(54, 'CLAUDIOX17XJR', 1, 2),
(55, 'PAULOX99XFILHO', 1, 5),
(56, 'WELLX99YOLIVER', 1, 5),
(57, 'GIULIANA2017XD', 1, 6),
(58, 'DENERX99XTROQ', 1, 5),
(59, 'MARCX99XCOSTA', 1, 5),
(60, 'MARCIOX99ZCAVAL', 1, 5),
(61, 'FELIP3X17DANTAS', 1, 6),
(62, 'ANDYY13XBERN', 1, 5),
(63, 'MARCELOX17YBAB', 1, 5),
(64, 'KLEBERX099YPETRY', 1, 5),
(65, 'LOISX55ZFAUSTINO', 1, 5),
(67, 'TESTE1REAL', 1, 9),
(69, 'P4CT4ESSEN32', 1, 5),
(70, 'P1CT2ESS4N35', 1, 5),
(71, 'B1WW2ESS438', 1, 1),
(72, 'AP2JK32FQ', 1, 1),
(73, 'AP2WA85MH', 1, 1),
(74, 'AP2BN10PU', 1, 1),
(84, 'APC2F5TTHK', 1, 1),
(83, 'APC2ATH', 1, 1),
(78, 'AP2FULL56', 1, 3),
(79, 'AP2FU3LL80', 0, 3),
(80, 'AP2F43L1W0', 0, 3),
(81, 'TESTE4265#', 1, 9),
(82, 'AP2FJEW2', 1, 1),
(85, 'FABIOF400MATTA', 1, 3),
(86, 'AC22017BEL', 1, 1),
(87, 'XMNPA3', 1, 1),
(88, 'JAHCKB20', 1, 1),
(89, 'KAJCLDH2A', 1, 1),
(90, 'NELSONC2', 1, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `configuracoes`
--

DROP TABLE IF EXISTS `configuracoes`;
CREATE TABLE IF NOT EXISTS `configuracoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pagseguro_email` varchar(50) NOT NULL,
  `pagseguro_email_sandbox` varchar(50) NOT NULL,
  `pagseguro_token_producao` varchar(255) NOT NULL,
  `pagseguro_token_sandbox` varchar(255) NOT NULL,
  `modo` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `configuracoes`
--

INSERT INTO `configuracoes` (`id`, `pagseguro_email`, `pagseguro_email_sandbox`, `pagseguro_token_producao`, `pagseguro_token_sandbox`, `modo`) VALUES
(1, 'jogosgratispro@gmail.com', 'willian_celsozd@hotmail.com', '0E67DC48A1194EA780D2A0C784ED87BE', '1B29EEAAD10E4B008A7B6EA2C09D0B54', 0);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos`
--

DROP TABLE IF EXISTS `cursos`;
CREATE TABLE IF NOT EXISTS `cursos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `id_categoria` int(11) NOT NULL,
  `privacidade` varchar(50) NOT NULL DEFAULT 'RASCUNHO',
  `valor` decimal(10,0) DEFAULT NULL,
  `thumbs` varchar(255) NOT NULL,
  `capa` varchar(255) DEFAULT NULL,
  `pre_requisito` text,
  `publico_alvo` text,
  `aprendizado` text,
  `video_destaque` varchar(255) DEFAULT NULL,
  `ordem` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos`
--

INSERT INTO `cursos` (`id`, `nome`, `slug`, `id_categoria`, `privacidade`, `valor`, `thumbs`, `capa`, `pre_requisito`, `publico_alvo`, `aprendizado`, `video_destaque`, `ordem`) VALUES
(1, 'Criando um jogo de Quiz com XML', 'criando-um-jogo-de-quiz-com-xml', 3, 'PUBLICADO', '0', '59ba8b65d05a1.jpg', '59ba94330011a.jpg', '<p>N&atilde;o precisam saber nada de programa&ccedil;&atilde;o. Tudo vai ser explicado durante o curso.</p>\r\n', '<ul>\r\n	<li>Pessoas interessadas em ingressar numa carreira de sucesso</li>\r\n	<li>Pessoas interessadas em aprender como utilizar o Construct2</li>\r\n	<li>Pessoas interessadas em aprender como criar v&aacute;rios estilos de jogos diferentes</li>\r\n	<li>Pessoas interessadas em ganhar dinheiro com jogos</li>\r\n</ul>\r\n', '<p>Criar v&aacute;rios estilos de jogos 2D utilizando o Construct2</p>\r\n', 'https://vimeo.com/224796738', 0),
(2, 'Criando um jogo estilo Angry Birds', 'criando-um-jogo-estilo-angry-birds', 3, 'PUBLICADO', '50', '59ba8bd67b7fd.jpg', '59ba9359db348.jpg', '<p>0N&atilde;o precisam saber nada de programa&ccedil;&atilde;o. Tudo vai ser explicado durante o curso.</p>\r\n', '<ul>\r\n	<li>Pessoas interessadas em ingressar numa carreira de sucesso</li>\r\n	<li>Pessoas interessadas em aprender como utilizar o Construct2</li>\r\n	<li>Pessoas interessadas em aprender como criar v&aacute;rios estilos de jogos diferentes</li>\r\n	<li>Pessoas interessadas em ganhar dinheiro com jogos</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Criar v&aacute;rios estilos de jogos 2D utilizando o Construct2</li>\r\n	<li>Publicar o jogo na internet&nbsp;</li>\r\n	<li>Possivelmente ganhar dinheiro com seus jogos</li>\r\n</ul>\r\n', 'https://vimeo.com/224796730', 0),
(4, 'Criando um jogo de Nave - Construct2', 'criando-um-jogo-de-nave-construct2', 3, 'PUBLICADO', NULL, '59dee0f2a401d.jpg', '59dee0f2a42e4.jpg', NULL, NULL, NULL, 'https://www.youtube.com/watch?v=3_Vc7Vvx2gk', NULL),
(5, 'Javascript FastTrack', 'curso-javascript-fasttrack', 3, 'PUBLICADO', '0', '5b26ea9a148e7.jpg', '5b26eba92e0eb.jpg', '<ul>\r\n	<li>Nenhum pr&eacute;-requisito</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Pessoas interessadas na &aacute;rea de Tecnologia da informa&ccedil;&atilde;o</li>\r\n</ul>\r\n', '<ul>\r\n	<li>Aprender os conceitos b&aacute;sicos do Javascript e sua utiliza&ccedil;&atilde;o no mundo real</li>\r\n</ul>\r\n', 'https://vimeo.com/274781045', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `cursos_instrutores`
--

DROP TABLE IF EXISTS `cursos_instrutores`;
CREATE TABLE IF NOT EXISTS `cursos_instrutores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_curso` int(11) NOT NULL,
  `id_instrutor` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=29 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `cursos_instrutores`
--

INSERT INTO `cursos_instrutores` (`id`, `id_curso`, `id_instrutor`) VALUES
(21, 1, 1),
(22, 1, 2),
(20, 2, 2),
(23, 3, 1),
(24, 4, 1),
(26, 2, 1),
(28, 5, 2);

-- --------------------------------------------------------

--
-- Estrutura da tabela `emails`
--

DROP TABLE IF EXISTS `emails`;
CREATE TABLE IF NOT EXISTS `emails` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `conteudo` text NOT NULL,
  `id_produto` int(11) NOT NULL,
  `assunto` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `emails`
--

INSERT INTO `emails` (`id`, `nome`, `conteudo`, `id_produto`, `assunto`) VALUES
(1, 'Pacote de R$ 150', '<p>Ol&aacute;<strong> {{nome}}</strong>, tudo bem?<br />\r\n<br />\r\nN&oacute;s gostar&iacute;amos de te agradecer por adquirir um de nossos produtos, o curso de desenvolvimento de jogos.<br />\r\nSegue abaixo o seu c&oacute;digo de acesso ao curso:<br />\r\n<span style=\"color:#008000;\"><strong>{{cupom}}</strong></span></p>\r\n\r\n<p><br />\r\n<strong><span style=\"color:#008000;\">COMO TER ACESSO AO CURSO?</span></strong><br />\r\nAcesse o&nbsp;link&nbsp;abaixo, e informe o c&oacute;digo do Cupom que voc&ecirc; recebeu.<br />\r\nEm seguida voc&ecirc; ser&aacute; redirecionado para a p&aacute;gina da <span style=\"color:#008000;\"><strong>Udemy</strong></span>, onde poder&aacute; fazer seu cadastro, utilizando seu cupom &uacute;nico.<br />\r\n<strong>Observa&ccedil;&atilde;o</strong>: O seu c&oacute;digo &eacute; &uacute;nico e intransfer&iacute;vel, podendo ser usado apenas uma &uacute;nica vez.<br />\r\n<a href=\"http://www.aprendaconstruct2.com.br/ativar-cupom-curso-completo\" target=\"_blank\">http://www.aprendaconstruct2.com.br/ativar-cupom-curso-completo</a></p>\r\n\r\n<p>Desejamos que voc&ecirc; possa aprender muito e tirar bastante proveito.<br />\r\nQualquer d&uacute;vida estamos a disposi&ccedil;&atilde;o.<br />\r\n<br />\r\nAtenciosamente,<br />\r\nWillian Zarpellon e Thiago Prado</p>\r\n', 1, 'Bem vindo ao curso completo de Construct2'),
(2, 'Acesso ao curso + Templates R$ 400,00', '<p>Ol&aacute;<strong> {{nome}}</strong>, tudo bem?<br />\r\n<br />\r\nN&oacute;s gostar&iacute;amos de te agradecer por adquirir um de nossos produtos, o curso de desenvolvimento de jogos.<br />\r\nSegue abaixo o seu c&oacute;digo de acesso ao curso:<br />\r\n<span style=\"color:#008000;\"><strong>{{cupom}}</strong></span></p>\r\n\r\n<p><br />\r\n<strong><span style=\"color:#008000;\">COMO TER ACESSO AO CURSO?</span></strong><br />\r\nAcesse o&nbsp;link&nbsp;abaixo, e informe o c&oacute;digo do Cupom que voc&ecirc; recebeu.<br />\r\nEm seguida voc&ecirc; ser&aacute; redirecionado para a p&aacute;gina da <span style=\"color:#008000;\"><strong>Udemy</strong></span>, onde poder&aacute; fazer seu cadastro, utilizando seu cupom &uacute;nico.<br />\r\n<strong>Observa&ccedil;&atilde;o</strong>: O seu c&oacute;digo &eacute; &uacute;nico e intransfer&iacute;vel, podendo ser usado apenas uma &uacute;nica vez.<br />\r\n<a href=\"http://www.aprendaconstruct2.com.br/ativar-cupom-curso-completo\" target=\"_blank\">http://www.aprendaconstruct2.com.br/ativar-cupom-curso-completo</a></p>\r\n\r\n<p><strong><span style=\"color:#008000;\">COMO TER ACESSO AOS TEMPLATES?</span></strong></p>\r\n\r\n<p>Para fazer download dos templates, acesse&nbsp;o link abaixo, informe o seu e-mail e o c&oacute;digo do seu cupom.</p>\r\n\r\n<p><a href=\"http://www.aprendaconstruct2.com.br/area-do-aluno\" target=\"_blank\">http://www.aprendaconstruct2.com.br/area-do-aluno</a></p>\r\n\r\n<p>Desejamos que voc&ecirc; possa aprender muito e tirar bastante proveito.<br />\r\nQualquer d&uacute;vida estamos a disposi&ccedil;&atilde;o.<br />\r\n<br />\r\nAtenciosamente,<br />\r\nWillian Zarpellon e Thiago Prado</p>\r\n', 3, 'Bem vindo ao curso completo de Construct2'),
(3, 'Templates do Curso R$ 300,00', '<p>Ol&aacute;<strong> {{nome}}</strong>, tudo bem?<br />\r\nN&oacute;s gostar&iacute;amos de te agradecer por adquirir um de nossos produtos, os templates do curso de Desenvolvimento de Jogos<br />\r\n&nbsp;</p>\r\n\r\n<p><strong><span style=\"color:#008000;\">COMO TER ACESSO AOS TEMPLATES?</span></strong></p>\r\n\r\n<p>Para fazer download dos templates, acesse&nbsp;o link abaixo, informe o seu e-mail e o c&oacute;digo&nbsp;<span style=\"color:#008000;\"><strong>{{cupom}}</strong></span></p>\r\n\r\n<p><a href=\"http://www.aprendaconstruct2.com.br/area-do-aluno\" target=\"_blank\">http://www.aprendaconstruct2.com.br/area-do-aluno</a></p>\r\n\r\n<p><br />\r\nQualquer d&uacute;vida estamos a disposi&ccedil;&atilde;o.<br />\r\n<br />\r\nAtenciosamente,<br />\r\nWillian Zarpellon e Thiago Prado</p>\r\n', 2, 'Obrigado pelo seu interesse em nossos Produtos'),
(4, 'Pacote Teste 1 real', '<p>Ol&aacute;<strong> {{nome}}</strong>, tudo bem?<br />\r\nN&oacute;s gostar&iacute;amos de te agradecer por adquirir um de nossos produtos, os templates do curso de Desenvolvimento de Jogos<br />\r\n&nbsp;</p>\r\n\r\n<p><strong><span style=\"color:#008000;\">COMO TER ACESSO AOS TEMPLATES?</span></strong></p>\r\n\r\n<p>Para fazer download dos templates, acesse&nbsp;o link abaixo, informe o seu e-mail e o c&oacute;digo&nbsp;<span style=\"color:#008000;\"><strong>{{cupom}}</strong></span></p>\r\n\r\n<p><a href=\"http://www.aprendaconstruct2.com.br/area-do-aluno\" target=\"_blank\">http://www.aprendaconstruct2.com.br/area-do-aluno</a></p>\r\n\r\n<p><br />\r\nQualquer d&uacute;vida estamos a disposi&ccedil;&atilde;o.<br />\r\n<br />\r\nAtenciosamente,<br />\r\nWillian Zarpellon e Thiago Prado</p>\r\n', 9, 'Bem vindo ao curso de Construct2'),
(5, 'Pacote de 99', '<p>Ol&aacute;<strong> {{nome}}</strong>, tudo bem?<br />\r\n<br />\r\nN&oacute;s gostar&iacute;amos de te agradecer por adquirir um de nossos produtos, o curso de desenvolvimento de jogos.<br />\r\nSegue abaixo o seu c&oacute;digo de acesso ao curso:<br />\r\n<span style=\"color:#008000;\"><strong>{{cupom}}</strong></span></p>\r\n\r\n<p><br />\r\n<strong><span style=\"color:#008000;\">COMO TER ACESSO AO CURSO?</span></strong><br />\r\nAcesse o&nbsp;link&nbsp;abaixo, e informe o c&oacute;digo do Cupom que voc&ecirc; recebeu.<br />\r\nEm seguida voc&ecirc; ser&aacute; redirecionado para a p&aacute;gina da <span style=\"color:#008000;\"><strong>Udemy</strong></span>, onde poder&aacute; fazer seu cadastro, utilizando seu cupom &uacute;nico.<br />\r\n<strong>Observa&ccedil;&atilde;o</strong>: O seu c&oacute;digo &eacute; &uacute;nico e intransfer&iacute;vel, podendo ser usado apenas uma &uacute;nica vez.<br />\r\n<a href=\"http://www.aprendaconstruct2.com.br/ativar-cupom-curso-completo\" target=\"_blank\">http://www.aprendaconstruct2.com.br/ativar-cupom-curso-completo</a></p>\r\n\r\n<p>Desejamos que voc&ecirc; possa aprender muito e tirar bastante proveito.<br />\r\nQualquer d&uacute;vida estamos a disposi&ccedil;&atilde;o.<br />\r\n<br />\r\nAtenciosamente,<br />\r\nWillian Zarpellon e Thiago Prado</p>\r\n', 5, 'Bem vindo ao curso de Construct2');

-- --------------------------------------------------------

--
-- Estrutura da tabela `estudantes`
--

DROP TABLE IF EXISTS `estudantes`;
CREATE TABLE IF NOT EXISTS `estudantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `ordem` int(11) NOT NULL,
  `street` varchar(255) DEFAULT NULL,
  `number` varchar(10) DEFAULT NULL,
  `district` varchar(50) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `state` varchar(50) DEFAULT NULL,
  `postalCode` varchar(20) DEFAULT NULL,
  `phoneAreaCode` varchar(5) DEFAULT NULL,
  `phone_number` varchar(50) DEFAULT NULL,
  `ativo` int(11) NOT NULL DEFAULT '1',
  `password` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `estudantes`
--

INSERT INTO `estudantes` (`id`, `nome`, `email`, `ordem`, `street`, `number`, `district`, `city`, `state`, `postalCode`, `phoneAreaCode`, `phone_number`, `ativo`, `password`) VALUES
(1, 'Willian', 'willian_celsozd@hotmail.com', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'f9d8f4f3fd9613d82ccf22996ddad959'),
(2, 'willian', 'willian2@hotmail.com', 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'b54306c29a14d87b6ccb1aaa204d059a'),
(3, 'Willian', 'willian2@websix.com.br', 3, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '398780f66b3794612b4b8d5bca1434c3'),
(4, 'Willian', 'willian@websix.com.br', 4, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, '398780f66b3794612b4b8d5bca1434c3'),
(5, 'Julio', 'julio@hotmail.com', 5, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, 'f62293ab669a157b8a932fe1403d0a48');

-- --------------------------------------------------------

--
-- Estrutura da tabela `instrutores`
--

DROP TABLE IF EXISTS `instrutores`;
CREATE TABLE IF NOT EXISTS `instrutores` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `sobrenome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `profissao` text NOT NULL,
  `biografia` text NOT NULL,
  `website` varchar(50) DEFAULT NULL,
  `googleplus` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `linkedin` varchar(255) DEFAULT NULL,
  `youtube` varchar(255) DEFAULT NULL,
  `foto` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `senha` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `instrutores`
--

INSERT INTO `instrutores` (`id`, `nome`, `sobrenome`, `email`, `profissao`, `biografia`, `website`, `googleplus`, `twitter`, `facebook`, `linkedin`, `youtube`, `foto`, `data_cadastro`, `senha`) VALUES
(1, 'Willian', 'Zarpellon', 'willian@polargames.com.br', 'Engenheiro de Software / Desenvolvedor de Games', 'Profissional na Ã¡rea de Desenvolvimento Web e jogos em HTML5. Formado em Tecnologia e Sistemas para Internet e sÃ³cio proprietÃ¡rio na empresa Websix. Conquistou o prÃªmio estadual de 2Âº Lugar do ParanÃ¡ na categoria Webdesigner (OlimpÃ­ada do conhecimento SENAI). Fundador do site Polar Games, onde dedica seu tempo focado em desenvolvimento jogos e tutoriais.', 'http://www.williancelso.com.br', NULL, NULL, 'https://www.facebook.com/williancelso.zarpellon', NULL, NULL, '59618e18e3eaa.jpg', '2017-06-29 01:09:45', '86d01430f507b43190b7e7d50b24553d'),
(2, 'Thiago', 'Prado', 'jogosgratispro@gmail.com', 'Game developer at Jogos Gratis Pro', 'Eu sou um desenvolvedor de jogos indie. Eu tenho trabalhado como um webdesigner, webdeveloper e especialista em marketing online antes de me tornar um desenvolvedor de jogos indie. Minha histÃ³ria de trabalho me ajudou a aprender todas as peÃ§as necessÃ¡rias para fazer grandes jogos e ganhar dinheiro com eles.\r\n\r\nMeu objetivo Ã© concentrar-se na experiÃªncia do usuÃ¡rio sem comprometer a funcionalidade. Estou sempre Ã  procura de melhores formas de implementar cada recurso levando em conta os trÃªs fatores-chave de um projeto: o tempo, o orÃ§amento e, claro, os resultados.\r\n\r\nEu sou inovador e estou em sempre buscando novas maneiras de desenvolver jogos utilizando o que a de melhor no mercado. Eu acredito fortemente no trabalho em equipe como o fator chave para qualquer desenvolvimento bem sucedido e eu gosto de compartilhar a minha motivaÃ§Ã£o e foco com o resto da equipe.\r\n\r\nEu acredito que os jogos podem inspirar, entreter e tornar o mundo um lugar mais divertido para se viver.\r\n\r\nEspecialidades: concepÃ§Ã£o e criaÃ§Ã£o de jogos com HTML5, CSS, PHP, MySQL Server, Web Services, JavaScript, jQuery e Webserver.', 'http://www.jogosgratispro.com', NULL, NULL, NULL, NULL, NULL, '59b2f76b212d5.jpg', '2017-09-08 20:02:51', '398780f66b3794612b4b8d5bca1434c3');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos`
--

DROP TABLE IF EXISTS `jogos`;
CREATE TABLE IF NOT EXISTS `jogos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `ordem` int(11) NOT NULL,
  `imagem` varchar(255) NOT NULL,
  `data_add` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(11) NOT NULL,
  `gamefile` varchar(255) DEFAULT NULL,
  `slug` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jogos`
--

INSERT INTO `jogos` (`id`, `nome`, `ordem`, `imagem`, `data_add`, `status`, `gamefile`, `slug`) VALUES
(1, 'FruitSlicer Template', 1, 'fruitslicer-template.jpg', '2017-04-01 22:32:27', 1, 'fruitslicertemplate.capx', 'fruitslicer-template'),
(2, 'Angry Zombies', 2, 'angry-zombies.jpg', '2017-04-01 22:50:18', 1, 'angryzombies.capx', 'angry-zombies'),
(3, 'Prehistoric Defense', 3, 'prehistoric-defense.jpg', '2017-04-01 23:23:49', 1, 'prehistoricdefense.capx', 'prehistoric-defense'),
(4, 'Super Quiz XML', 4, 'super-quiz-xml.jpg', '2017-04-02 01:02:36', 1, 'super-quiz-xml.capx', 'super-quiz-xml'),
(8, 'Cat Vs Dog', 5, 'cat-vs-dog.jpg', '2017-04-02 01:48:20', 1, 'cat-vs-dog.capx', 'cat-vs-dog'),
(11, '2Cars', 6, '2cars.png', '2017-04-02 07:05:10', 1, '2cars-1.1.capx', '2cars'),
(12, 'SuperCow', 7, 'supercow.png', '2017-04-02 08:08:31', 1, 'super-cow-jet-2.0.capx', 'supercow'),
(13, 'Dangerous Rails', 8, 'dangerous-rails.jpg', '2017-04-02 08:27:20', 1, 'dangerous-rails.zip', 'dangerous-rails'),
(14, 'Ninja Block', 9, 'ninja-block.jpg', '2017-04-02 20:48:44', 1, 'ninjablock.capx', 'ninja-block'),
(15, 'Shadow Boy', 10, 'shadow-boy.jpg', '2017-04-06 18:34:07', 1, 'shadow-boy-adventures.capx', 'shadow-boy'),
(16, 'Inventory System', 11, 'inventory-system.jpg', '2017-04-06 18:35:25', 1, 'inventory-system-2.0.capx', 'inventory-system'),
(17, 'Dinamic Quiz â€“ Template 4.0', 12, 'dinamic-quiz-template-40.jpg', '2017-04-06 21:34:10', 1, 'dynamicquiz-v4.zip', 'dinamic-quiz-template-40'),
(18, 'Galaxy Domination', 13, 'galaxy-domination.jpg', '2017-04-06 21:37:24', 1, 'galaxydomination.capx', 'galaxy-domination'),
(19, 'MemÃ³ria Animal', 14, 'memoria-animal.jpg', '2017-04-06 21:39:34', 1, 'animalsmemory.zip', 'memoria-animal'),
(20, 'Sweets Memory', 15, 'sweets-memory.jpg', '2017-04-06 21:43:46', 1, 'sweetsmemory.zip', 'sweets-memory'),
(21, 'Penguin JetPack', 16, 'penguin-jetpack.jpg', '2017-04-06 22:04:14', 1, 'penguinjetpack.zip', 'penguin-jetpack'),
(22, 'Cat Jump', 17, 'cat-jump.jpg', '2017-04-06 22:06:17', 1, 'catjumpv.2.capx', 'cat-jump'),
(23, 'Mad boy Adventures', 18, 'mad-boy-adventures.png', '2017-04-06 23:57:12', 1, 'madboy-adventures-1.7.capx', 'mad-boy-adventures'),
(24, 'Coloring 48 pages', 19, 'coloring-48-pages.png', '2017-04-07 00:03:19', 1, 'kids-coloring-book-2.4.capx', 'coloring-48-pages'),
(25, 'Miner Jump', 20, 'miner-jump.png', '2017-04-09 17:29:52', 1, 'minerjumpscirra.capx', 'miner-jump'),
(26, 'Jogo dos 7 erros', 21, 'jogo-dos-7-erros.png', '2017-04-11 03:43:16', 1, 'jogo-dos-7-erros.capx', 'jogo-dos-7-erros'),
(27, 'Jogo de Matematica', 22, 'jogo-de-matematica.png', '2017-04-11 03:48:53', 1, 'jogo-de-matematica-1.1.capx', 'jogo-de-matematica'),
(28, 'Jogo de quebra-cabeÃ§a', 23, 'jogo-de-quebra-cabeca.png', '2017-04-11 03:53:07', 1, 'jogo-de-quebra-cabeca-1.1.capx', 'jogo-de-quebra-cabeca'),
(29, 'Parking game', 24, 'parking-game.jpg', '2017-05-02 18:01:24', 1, 'jogo-de-estacionar-1.2.capx', 'parking-game');

-- --------------------------------------------------------

--
-- Estrutura da tabela `jogos_estudantes`
--

DROP TABLE IF EXISTS `jogos_estudantes`;
CREATE TABLE IF NOT EXISTS `jogos_estudantes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_jogo` int(11) NOT NULL,
  `id_estudante` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=3095 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `jogos_estudantes`
--

INSERT INTO `jogos_estudantes` (`id`, `id_jogo`, `id_estudante`) VALUES
(2987, 26, 19),
(2765, 1, 38),
(2764, 1, 49),
(2986, 26, 18),
(2763, 1, 19),
(2762, 1, 18),
(2761, 1, 17),
(2760, 1, 13),
(2759, 1, 15),
(2758, 1, 14),
(2757, 1, 12),
(2756, 1, 11),
(2755, 1, 10),
(2754, 1, 9),
(2753, 1, 8),
(2752, 1, 20),
(2751, 1, 21),
(2750, 1, 24),
(2749, 1, 22),
(2748, 1, 23),
(2747, 1, 25),
(2746, 1, 59),
(2745, 1, 27),
(2744, 1, 26),
(2743, 1, 28),
(2742, 1, 29),
(2741, 1, 30),
(2740, 1, 32),
(2739, 1, 44),
(2738, 1, 33),
(2985, 26, 17),
(2804, 2, 38),
(2803, 2, 49),
(2802, 2, 19),
(2801, 2, 18),
(2800, 2, 17),
(2799, 2, 13),
(2798, 2, 15),
(2797, 2, 14),
(2796, 2, 12),
(2795, 2, 11),
(2794, 2, 10),
(2793, 2, 9),
(2792, 2, 8),
(2791, 2, 20),
(2790, 2, 21),
(2789, 2, 24),
(2788, 2, 22),
(2787, 2, 23),
(2786, 2, 25),
(2785, 2, 59),
(2784, 2, 27),
(2783, 2, 26),
(2782, 2, 28),
(2781, 2, 29),
(2780, 2, 30),
(2779, 2, 32),
(2778, 2, 44),
(2777, 2, 33),
(2841, 3, 38),
(2840, 3, 19),
(2839, 3, 18),
(2838, 3, 17),
(2837, 3, 13),
(2836, 3, 15),
(2835, 3, 14),
(2834, 3, 12),
(2833, 3, 11),
(2832, 3, 10),
(2831, 3, 9),
(2830, 3, 8),
(2829, 3, 20),
(2828, 3, 21),
(2827, 3, 24),
(2826, 3, 22),
(2825, 3, 23),
(2824, 3, 25),
(2823, 3, 59),
(2822, 3, 27),
(2821, 3, 26),
(2820, 3, 28),
(2819, 3, 29),
(2818, 3, 30),
(2817, 3, 32),
(2816, 3, 44),
(2815, 3, 33),
(2814, 3, 34),
(2984, 26, 13),
(2878, 4, 38),
(2877, 4, 19),
(2876, 4, 18),
(2875, 4, 17),
(2874, 4, 13),
(2873, 4, 15),
(2872, 4, 14),
(2871, 4, 12),
(2870, 4, 11),
(2869, 4, 10),
(2868, 4, 9),
(2867, 4, 8),
(2866, 4, 20),
(2865, 4, 21),
(2864, 4, 24),
(2863, 4, 22),
(2862, 4, 23),
(2861, 4, 25),
(2860, 4, 59),
(2859, 4, 27),
(2858, 4, 26),
(2857, 4, 28),
(2856, 4, 29),
(2855, 4, 30),
(2854, 4, 32),
(2853, 4, 44),
(2852, 4, 33),
(2851, 4, 34),
(2983, 26, 15),
(2915, 8, 38),
(2914, 8, 19),
(2913, 8, 18),
(2912, 8, 17),
(2911, 8, 13),
(2910, 8, 15),
(2909, 8, 14),
(2908, 8, 12),
(2907, 8, 11),
(2906, 8, 10),
(2905, 8, 9),
(2904, 8, 8),
(2903, 8, 20),
(2902, 8, 21),
(2901, 8, 24),
(2900, 8, 22),
(2899, 8, 23),
(2898, 8, 25),
(2897, 8, 59),
(2896, 8, 27),
(2895, 8, 26),
(2894, 8, 28),
(2893, 8, 29),
(2892, 8, 30),
(2891, 8, 32),
(2890, 8, 44),
(2889, 8, 33),
(2888, 8, 34),
(2737, 1, 34),
(2776, 2, 34),
(2813, 3, 35),
(2850, 4, 35),
(2887, 8, 35),
(2775, 2, 35),
(2951, 11, 38),
(2197, 13, 32),
(734, 12, 41),
(2774, 2, 36),
(2736, 1, 35),
(2812, 3, 36),
(2849, 4, 36),
(2886, 8, 36),
(2950, 11, 19),
(2949, 11, 18),
(2948, 11, 17),
(2947, 11, 13),
(2946, 11, 15),
(2945, 11, 14),
(2944, 11, 12),
(2943, 11, 11),
(2942, 11, 10),
(2941, 11, 9),
(2940, 11, 8),
(2939, 11, 20),
(2938, 11, 21),
(2937, 11, 24),
(2936, 11, 22),
(2935, 11, 23),
(2934, 11, 25),
(2933, 11, 59),
(2932, 11, 27),
(2931, 11, 26),
(2930, 11, 28),
(2929, 11, 29),
(2928, 11, 30),
(2927, 11, 32),
(2926, 11, 44),
(2925, 11, 33),
(2924, 11, 34),
(2923, 11, 35),
(2922, 11, 36),
(952, 15, 42),
(2196, 13, 44),
(955, 16, 42),
(2157, 14, 31),
(2727, 17, 44),
(2195, 13, 41),
(962, 18, 14),
(2194, 13, 42),
(969, 23, 14),
(968, 20, 35),
(970, 23, 35),
(971, 24, 35),
(2735, 1, 36),
(2773, 2, 37),
(2811, 3, 37),
(2848, 4, 37),
(2885, 8, 37),
(2921, 11, 37),
(2884, 8, 42),
(2883, 8, 43),
(2734, 1, 37),
(2733, 1, 42),
(2772, 2, 42),
(2771, 2, 43),
(2810, 3, 42),
(2809, 3, 43),
(2847, 4, 42),
(2846, 4, 43),
(2920, 11, 42),
(2919, 11, 43),
(1366, 19, 31),
(2156, 14, 41),
(2199, 25, 32),
(2982, 26, 14),
(2981, 26, 12),
(2980, 26, 11),
(2979, 26, 10),
(2978, 26, 9),
(2977, 26, 8),
(2976, 26, 20),
(2975, 26, 21),
(2974, 26, 24),
(2973, 26, 22),
(2972, 26, 23),
(2971, 26, 25),
(2970, 26, 59),
(2969, 26, 27),
(2968, 26, 26),
(2967, 26, 28),
(2966, 26, 29),
(2965, 26, 30),
(2964, 26, 32),
(2963, 26, 44),
(2962, 26, 33),
(2961, 26, 34),
(2960, 26, 35),
(2959, 26, 36),
(2958, 26, 37),
(2957, 26, 42),
(2956, 26, 43),
(2955, 26, 45),
(3023, 27, 19),
(3022, 27, 18),
(3021, 27, 17),
(3020, 27, 13),
(3019, 27, 15),
(3018, 27, 14),
(3017, 27, 12),
(3016, 27, 11),
(3015, 27, 10),
(3014, 27, 9),
(3013, 27, 8),
(3012, 27, 20),
(3011, 27, 21),
(3010, 27, 24),
(3009, 27, 22),
(3008, 27, 23),
(3007, 27, 25),
(3006, 27, 59),
(3005, 27, 27),
(3004, 27, 26),
(3003, 27, 28),
(3002, 27, 29),
(3001, 27, 30),
(3000, 27, 32),
(2999, 27, 44),
(2998, 27, 33),
(2997, 27, 34),
(2996, 27, 35),
(2995, 27, 36),
(2994, 27, 37),
(2993, 27, 42),
(2992, 27, 43),
(2991, 27, 45),
(3059, 28, 19),
(3058, 28, 18),
(3057, 28, 17),
(3056, 28, 13),
(3055, 28, 15),
(3054, 28, 14),
(3053, 28, 12),
(3052, 28, 11),
(3051, 28, 10),
(3050, 28, 9),
(3049, 28, 8),
(3048, 28, 20),
(3047, 28, 21),
(3046, 28, 24),
(3045, 28, 22),
(3044, 28, 23),
(3043, 28, 25),
(3042, 28, 59),
(3041, 28, 27),
(3040, 28, 26),
(3039, 28, 28),
(3038, 28, 29),
(3037, 28, 30),
(3036, 28, 32),
(3035, 28, 44),
(3034, 28, 33),
(3033, 28, 34),
(3032, 28, 35),
(3031, 28, 36),
(3030, 28, 37),
(3029, 28, 42),
(3028, 28, 43),
(3027, 28, 45),
(2732, 1, 43),
(2770, 2, 45),
(2808, 3, 45),
(2845, 4, 45),
(2882, 8, 45),
(2918, 11, 45),
(3026, 28, 94),
(2990, 27, 94),
(2954, 26, 94),
(2731, 1, 45),
(2769, 2, 94),
(2807, 3, 94),
(2844, 4, 94),
(2881, 8, 94),
(2917, 11, 102),
(2155, 14, 44),
(2198, 13, 14),
(2200, 25, 31),
(2201, 22, 32),
(3093, 29, 19),
(3092, 29, 18),
(3091, 29, 17),
(3090, 29, 13),
(3089, 29, 15),
(3088, 29, 14),
(3087, 29, 12),
(3086, 29, 11),
(3085, 29, 10),
(3084, 29, 9),
(3083, 29, 8),
(3082, 29, 20),
(3081, 29, 21),
(3080, 29, 24),
(3079, 29, 22),
(3078, 29, 23),
(3077, 29, 59),
(3076, 29, 27),
(3075, 29, 26),
(3074, 29, 28),
(3073, 29, 29),
(3072, 29, 30),
(3071, 29, 32),
(3070, 29, 44),
(3069, 29, 33),
(3068, 29, 34),
(3067, 29, 35),
(3066, 29, 36),
(3065, 29, 42),
(3064, 29, 43),
(3063, 29, 45),
(3062, 29, 94),
(2730, 1, 94),
(2729, 1, 102),
(2768, 2, 97),
(2806, 3, 102),
(2843, 4, 102),
(2880, 8, 102),
(2953, 26, 102),
(2989, 27, 102),
(3025, 28, 102),
(3061, 29, 102),
(2767, 2, 102),
(2728, 17, 69),
(2766, 1, 31),
(2805, 2, 31),
(2842, 3, 31),
(2879, 4, 31),
(2916, 8, 31),
(2952, 11, 31),
(2988, 26, 31),
(3024, 27, 31),
(3060, 28, 31),
(3094, 29, 31);

-- --------------------------------------------------------

--
-- Estrutura da tabela `materiais_aulas`
--

DROP TABLE IF EXISTS `materiais_aulas`;
CREATE TABLE IF NOT EXISTS `materiais_aulas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `material` varchar(255) NOT NULL,
  `id_aula` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `materiais_aulas`
--

INSERT INTO `materiais_aulas` (`id`, `material`, `id_aula`) VALUES
(1, '5b04c757060e7-marco.pdf', 25),
(2, '5b04c771e8b57-abril.pdf', 25),
(3, '5b04c771ec305-marco.pdf', 25),
(4, '5b04c771f0d9f-orcamento-itau.pdf', 25),
(12, '5b04cac52e0a6-robloxscreenshot20180314_212651053.png', 30),
(13, '5b04cac5309fb-robloxscreenshot20180314_212847449.png', 30),
(14, '5b04cac538438-robloxscreenshot20180315_211458193.png', 30);

-- --------------------------------------------------------

--
-- Estrutura da tabela `newsletter`
--

DROP TABLE IF EXISTS `newsletter`;
CREATE TABLE IF NOT EXISTS `newsletter` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=63 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `newsletter`
--

INSERT INTO `newsletter` (`id`, `nome`, `email`, `data`) VALUES
(4, 'Willian', 'willian@websix.com.br', '2017-04-14 01:23:29'),
(8, 'Lucas Souza', 'dimondplays@gmail.com', '2017-04-15 01:43:08'),
(6, 'Michael Douglas Alves de Sousa', 'michaeldouglastech@gmail.com', '2017-04-14 14:42:32'),
(7, 'Gabriel Dias RiguÃªte Chaves', 'gabrieldidas6@gmail.com', '2017-04-14 23:55:30'),
(9, 'Evando Miranda', 'evandomiranda@gmail.com', '2017-04-15 14:53:50'),
(10, 'Alan Cardozo', 'alanthomascardozo@outlook.com.br', '2017-04-15 22:07:40'),
(11, 'Renato Andrade', 'renatim2008@gmail.com', '2017-04-16 00:58:19'),
(12, 'DANIEL', 'danielgracioso2008@hotmail.com', '2017-04-16 13:43:00'),
(13, 'Guilherme', 'noobeza057@outlook.com', '2017-04-17 18:31:03'),
(14, 'Joffre Macedo', 'joffremacedoneto@gmail.com', '2017-04-17 18:45:29'),
(15, 'Anderson sales', 'andersonsales-0@hotmail.com', '2017-04-18 06:20:24'),
(24, 'Miguel Senne', 'miguelsennejunior@gmail.com', '2017-04-20 18:56:13'),
(17, 'frabricio fonseca ramos ', 'fabricioqq1@gmail. com', '2017-04-18 12:02:03'),
(25, 'Miguel Senne', 'miguelsennejunior@gmail.com', '2017-04-20 18:56:13'),
(19, 'Andre Martins', 'andre_mof@ig.com.br', '2017-04-18 18:03:45'),
(20, 'Francisco Maia', 'fasmaia@msn.com', '2017-04-18 19:25:05'),
(21, 'Vinicius', 'gustavoguttlernavas@hotmail.com', '2017-04-19 03:49:19'),
(22, 'Danilo', 'daniloduarte.ti@gmail.com', '2017-04-19 20:27:01'),
(23, 'Austonio Queiroz dos Santos', 'austonio.santos@gmail.com', '2017-04-19 23:43:37'),
(26, 'luannscardua', 'luannscardua.rebuli@gmail.com', '2017-04-21 22:08:49'),
(27, 'Thiago Alcantara', 'thiago__tma@hotmail.com', '2017-04-22 09:45:01'),
(28, 'Mateus Barbosa Vieira Santos', 'reploidomega@gmail.com', '2017-04-23 00:24:35'),
(29, 'matheus', 'mnmds16@gmail.com', '2017-04-24 03:14:27'),
(30, 'jefferson', 'mr_therouk_j@hotmail.com', '2017-04-25 01:32:16'),
(31, 'Josevitor boabaide de paula ', 'vitorjoser255@gmail.com', '2017-04-25 22:33:59'),
(32, 'Julio CorrÃªa', 'juiocorrea21@gmail.com', '2017-04-26 02:02:15'),
(33, 'Danilo Silveira', 'danilocsilveira@gmail.com', '2017-04-26 17:35:42'),
(34, 'alyne', 'alynekkarla@gmail.com', '2017-04-26 18:45:13'),
(35, 'Jorge', 'japerezgzz@gmail.com', '2017-04-26 20:28:19'),
(36, 'carlos eduardo rodrigues santiago', 'carlosers@gmail.com', '2017-04-27 01:34:24'),
(37, 'luis fernando', 'killua1502@gmail.com', '2017-04-27 03:20:02'),
(38, 'Paulo Roberto Freitas Rodrigues', 'paulo.freitas27@gmail.com', '2017-04-27 12:58:23'),
(39, 'Caio andrade', 'caioaugusto2@hotmail.com', '2017-04-27 14:34:44'),
(40, 'Danilo Vianna Amador dos Santos', 'danilovianna@gmail.com', '2017-04-27 19:14:44'),
(41, 'Fernando', 'fa2pinho@gmail.com', '2017-04-27 21:58:54'),
(42, 'Yan Ricardo', 'yanricardo11@gmail.com', '2017-04-27 23:09:01'),
(43, 'Dener Maciel Ribeiro', 'Denerribeiro2015@outlook.com', '2017-04-28 00:50:53'),
(44, 'marcelo guerra', 'noserine@gmail.com', '2017-04-28 14:46:30'),
(45, 'Anderson', 'anderson@websix.com.br', '2017-04-28 17:56:09'),
(46, 'Jonny Michael', 'mainvys2d@gmail.com', '2017-04-29 13:20:38'),
(47, 'alexandre', 'alexandredarosaheck@hotmail.com', '2017-04-30 02:10:12'),
(48, 'aoomtv', 'aoomtv433@gmail.com', '2017-04-30 11:10:57'),
(49, 'Lucas Lopes Torres', 'lucas0112011@live.com', '2017-05-01 14:17:50'),
(50, 'Jhonatas Frederique Pereira Teixeira', 'jhonatasf.pereira@hotmail.com', '2017-05-01 16:35:53'),
(51, 'ALBERTO', 'albertojulio.dtm@gmail.com', '2017-05-01 19:05:27'),
(52, 'Leandro Silva', 'leandrols.2004@gmail.com', '2017-05-02 00:22:36'),
(53, 'Luisa Cardoso', 'luh.dwolf@gmail.com', '2017-05-02 00:22:42'),
(54, 'Gabriel Augusto Costa da Silva ', 'gabrielaugusto1999@gmail.com', '2017-05-02 11:50:34'),
(55, 'adelmo', 'adelmo.melo@gmail.com', '2017-05-02 18:42:27'),
(56, 'AdemirGamerYT', 'ademir1de1oliveira@gmail.com', '2017-05-03 00:49:40'),
(57, 'Tiago', 'tiago.guarusign@gmail.com', '2017-05-04 03:03:37'),
(58, 'Jansen Cibien', 'jansencibien@hotmail.com', '2017-05-05 12:01:33'),
(59, 'Igor Otavio', 'igor.otavio@gmail.com', '2017-05-05 12:37:21'),
(60, 'andrey vini ', 'lolpimba@gmail.com', '2017-05-06 00:01:33'),
(61, 'erisvan', 'erisvansaudanha001@gmail.com', '2017-05-07 12:17:32'),
(62, 'Gabriel cruz', 'cruz73957@gmail.com', '2017-05-29 12:47:01');

-- --------------------------------------------------------

--
-- Estrutura da tabela `notificacao`
--

DROP TABLE IF EXISTS `notificacao`;
CREATE TABLE IF NOT EXISTS `notificacao` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `transactionCode` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `data` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=188 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `notificacao`
--

INSERT INTO `notificacao` (`id`, `transactionCode`, `status`, `data`) VALUES
(1, 'CAE75044-C4A8-4832-9672-B03C66C4B141', 3, '2017-04-10 00:42:21'),
(2, '838E8B02-FBA1-4520-9C4A-7F39155DBA57', 3, '2017-04-10 00:44:49'),
(3, 'B101C807-37FD-4286-BBEB-60810F5AB608', 3, '2017-04-10 00:44:56'),
(4, 'C256B837-7464-4DBE-B02B-EC09D7C655E2', 3, '2017-04-10 00:45:03'),
(5, '645684AB-6EE7-4E2B-9BAB-316907BFAB1E', 3, '2017-04-10 00:45:08'),
(6, '537EECF0-45CA-4B8A-8399-9A18FB8171E5', 3, '2017-04-10 00:45:11'),
(7, 'AD8CE03E-1C0E-4358-B3CB-AA16D5CD3CA2', 3, '2017-04-10 00:45:16'),
(8, '38078B95-4308-499A-BCE8-2798DF080101', 3, '2017-04-10 00:45:40'),
(9, '23C60621-C7D5-4145-B256-B8746119C819', 3, '2017-04-10 00:45:43'),
(10, '22CAE1BB-53D8-4B93-A45A-3824300A2559', 3, '2017-04-10 00:45:46'),
(11, 'F6CDA768-DC89-408E-A47A-856482255298', 3, '2017-04-10 00:45:49'),
(12, '8A102725-94CB-40E7-8B5E-5DD869E2D58D', 3, '2017-04-10 00:45:53'),
(13, 'DFB9824A-0C52-41E7-BA8B-ED37C4396010', 3, '2017-04-10 00:45:56'),
(14, '92A8CF65-5ED5-47D6-8A19-860292064787', 3, '2017-04-10 00:45:59'),
(15, '60313EA4-2FEC-4D5E-A0EC-E9AAB00A2AD3', 3, '2017-04-10 00:46:02'),
(16, '06643DDD-740C-4A50-92E1-2F8922D29C75', 3, '2017-04-10 00:46:10'),
(17, 'B948E688-1C08-412D-86CE-9749DD76B013', 3, '2017-04-10 00:46:14'),
(18, 'CCFC3636-95C0-49EE-840D-3AC3CDCC358B', 3, '2017-04-10 00:46:17'),
(19, '167770BB-47EC-473D-98DE-188AAC875588', 3, '2017-04-10 00:46:20'),
(20, '69838365-2021-47B6-B51D-EA994C0E9BB2', 3, '2017-04-10 00:46:22'),
(21, 'B4AE1CE8-1561-446F-A365-CB35DF341471', 3, '2017-04-10 00:46:25'),
(22, 'FFB5DFEC-36B9-4398-AE7F-9BD72F1EA40F', 3, '2017-04-10 00:46:28'),
(23, 'F95FA783-AE8A-437C-AF65-888109011960', 3, '2017-04-10 00:46:31'),
(24, '2452D783-BAD6-4A2A-AD55-4190FAD0CFEF', 3, '2017-04-10 00:46:35'),
(25, '0E432061-544A-499B-A674-36781DC9680B', 3, '2017-04-10 00:46:38'),
(26, 'C39E3DDE-EAEA-4FA8-8CEC-0ED4EE8169BE', 3, '2017-04-10 00:46:41'),
(27, '8BB8FF09-E5FF-4DD7-9B3E-E9D39ADA6995', 3, '2017-04-10 00:46:44'),
(28, 'A0D4C4BB-3642-4035-AE1B-FC81AC36C4E5', 3, '2017-04-10 00:46:47'),
(29, 'AE1A6CDB-DAC6-4275-ABB3-D10D92A5B8C5', 3, '2017-04-10 00:46:50'),
(30, '7A80D9BE-28BC-4CF0-BE6F-47D5B73D52FD', 3, '2017-04-10 00:46:53'),
(31, 'CECD4B8D-4279-4FC8-9AB7-1B53A9078F74', 3, '2017-04-10 00:46:56'),
(32, '54063104-1AB4-44F0-992D-E056B27A4BAE', 3, '2017-04-10 00:46:59'),
(33, '053AB8D9-0D16-4095-95AC-6C42C10F266B', 3, '2017-04-10 00:47:02'),
(34, '1A1FCBF9-CC26-4935-AA7E-C00BF9AF918C', 3, '2017-04-10 00:47:05'),
(35, '018CC28E-AEFF-4EA8-84E9-F2F7C7D2A350', 4, '2017-04-10 00:47:08'),
(36, '3168E63E-4CBD-43D5-AEB8-A27098542724', 4, '2017-04-10 00:47:11'),
(37, 'A6CC9242-1AE5-43B2-8F9E-74BF3AC55854', 4, '2017-04-10 00:47:14'),
(38, '50E94F93-AE1F-49AB-917F-A827FAAB54DF', 3, '2017-04-10 00:47:17'),
(39, '3965074D-B94C-4F9B-A10D-E4AB85A622DA', 4, '2017-04-10 00:47:20'),
(40, '72DBC33E-29B4-43D3-B7CE-00FBE8C11B29', 4, '2017-04-10 00:47:23'),
(41, '171AFEAB-6B0F-4A56-9D60-D71FDF496BF2', 4, '2017-04-10 00:47:26'),
(42, 'BFBB023D-4990-492A-AE3D-DCC5774C8A09', 4, '2017-04-10 00:47:30'),
(43, '6E616D5D-67BE-4443-9EC8-6FDEDC0FC705', 4, '2017-04-10 00:47:33'),
(44, 'F4AD62FC-03CA-49B9-8A01-E9BAD04F9595', 4, '2017-04-10 00:47:36'),
(45, '7E99BCC1-EC4F-4ACC-9060-36118473A9DE', 4, '2017-04-10 00:47:39'),
(46, '0AB6E2DE-0108-45C0-B710-FE07C026F6ED', 4, '2017-04-10 00:47:42'),
(47, '7EDF0D6C-3F3B-4739-87BC-E094BDB2DE13', 4, '2017-04-10 00:47:44'),
(48, '022CDFF9-497F-4C91-99CA-07701A47F310', 4, '2017-04-10 00:47:47'),
(49, '17919F6C-109D-487B-B314-228DAEFB4CEC', 4, '2017-04-10 00:47:50'),
(50, '3F67370C-6857-4C8D-9A85-92B7258CD26C', 4, '2017-04-10 00:47:53'),
(51, '0BF93A14-9020-430C-8A39-584CDB4CB071', 4, '2017-04-10 00:47:56'),
(52, '752F6E95-91E1-45AA-8403-7EFBDAB8EE9D', 4, '2017-04-10 00:47:59'),
(56, '1A1FCBF9-CC26-4935-AA7E-C00BF9AF918C', 4, '2017-04-10 03:17:51'),
(57, '053AB8D9-0D16-4095-95AC-6C42C10F266B', 4, '2017-04-10 11:51:34'),
(58, '54063104-1AB4-44F0-992D-E056B27A4BAE', 4, '2017-04-10 15:15:38'),
(59, '50E94F93-AE1F-49AB-917F-A827FAAB54DF', 4, '2017-04-11 06:45:27'),
(60, 'CECD4B8D-4279-4FC8-9AB7-1B53A9078F74', 4, '2017-04-11 06:58:37'),
(61, '7A80D9BE-28BC-4CF0-BE6F-47D5B73D52FD', 4, '2017-04-11 07:00:15'),
(62, 'ED2AA214-113F-40C8-A5CD-565EA6FD768E', 1, '2017-04-11 11:26:51'),
(63, 'AE1A6CDB-DAC6-4275-ABB3-D10D92A5B8C5', 4, '2017-04-11 11:30:29'),
(64, 'A0D4C4BB-3642-4035-AE1B-FC81AC36C4E5', 4, '2017-04-11 16:25:25'),
(65, '8BB8FF09-E5FF-4DD7-9B3E-E9D39ADA6995', 4, '2017-04-11 16:42:18'),
(67, 'C39E3DDE-EAEA-4FA8-8CEC-0ED4EE8169BE', 4, '2017-04-11 23:30:17'),
(68, '2B0065AA-7F98-499A-92A1-CEEEDCDC6048', 3, '2017-04-12 00:46:08'),
(69, 'ED2AA214-113F-40C8-A5CD-565EA6FD768E', 3, '2017-04-12 06:10:29'),
(70, '2452D783-BAD6-4A2A-AD55-4190FAD0CFEF', 4, '2017-04-12 21:42:20'),
(71, 'F95FA783-AE8A-437C-AF65-888109011960', 4, '2017-04-13 00:51:34'),
(72, '0E432061-544A-499B-A674-36781DC9680B', 4, '2017-04-13 05:51:10'),
(73, 'B4AE1CE8-1561-446F-A365-CB35DF341471', 4, '2017-04-13 11:27:22'),
(74, '69838365-2021-47B6-B51D-EA994C0E9BB2', 4, '2017-04-13 11:57:33'),
(75, '167770BB-47EC-473D-98DE-188AAC875588', 4, '2017-04-13 14:58:17'),
(76, 'FFB5DFEC-36B9-4398-AE7F-9BD72F1EA40F', 4, '2017-04-13 17:28:08'),
(77, 'B948E688-1C08-412D-86CE-9749DD76B013', 4, '2017-04-13 20:03:42'),
(78, '06643DDD-740C-4A50-92E1-2F8922D29C75', 4, '2017-04-13 23:36:48'),
(79, 'FD4A0777-1B3E-4114-936C-814E5CCA7773', 7, '2017-04-14 10:42:44'),
(80, 'AEDE43A3-90B9-4537-9C8F-77B3D0B80AF2', 7, '2017-04-14 10:43:30'),
(81, '60313EA4-2FEC-4D5E-A0EC-E9AAB00A2AD3', 4, '2017-04-14 13:03:19'),
(82, 'DFB9824A-0C52-41E7-BA8B-ED37C4396010', 4, '2017-04-14 15:24:35'),
(83, 'F6CDA768-DC89-408E-A47A-856482255298', 4, '2017-04-14 16:48:28'),
(84, '22CAE1BB-53D8-4B93-A45A-3824300A2559', 4, '2017-04-14 21:39:30'),
(85, '53662238-668C-4045-ABEF-708F8CF0526A', 7, '2017-04-14 23:58:43'),
(86, '38078B95-4308-499A-BCE8-2798DF080101', 4, '2017-04-15 01:30:22'),
(87, '645684AB-6EE7-4E2B-9BAB-316907BFAB1E', 4, '2017-04-15 02:24:16'),
(88, 'CCFC3636-95C0-49EE-840D-3AC3CDCC358B', 4, '2017-04-15 06:31:07'),
(89, '8A102725-94CB-40E7-8B5E-5DD869E2D58D', 4, '2017-04-15 06:37:23'),
(90, '23C60621-C7D5-4145-B256-B8746119C819', 4, '2017-04-15 06:39:54'),
(91, 'C92F97EF-1AB7-4496-B3C7-75D9897F694F', 7, '2017-04-15 10:48:51'),
(92, '099C42E4-02B8-434F-B4ED-1071A6A82754', 7, '2017-04-15 11:01:53'),
(93, 'A6282AA3-F86E-4F01-A226-058CC803F08E', 7, '2017-04-15 11:02:36'),
(94, '87FFA1A7-2BEF-49BE-B5CB-1DA5FBAB66AD', 7, '2017-04-15 11:05:27'),
(95, '1B3C139A-7F5D-464B-8C83-FD2A34A7131F', 7, '2017-04-15 11:05:39'),
(96, '4CAD9F72-1D6A-4522-9720-54701B68413B', 7, '2017-04-15 11:09:50'),
(97, 'B6A22C91-32D1-4E97-888B-029D5914CAF7', 7, '2017-04-15 13:56:35'),
(98, 'B99381E4-7BA7-4BD8-8E72-7D5C88E11F90', 7, '2017-04-15 13:58:14'),
(99, 'B1176A49-8DDE-4108-9633-12E4AA0F8AC2', 7, '2017-04-15 14:06:43'),
(100, '8DD92CB8-8828-473D-9A7F-46840A6B90AB', 7, '2017-04-15 14:08:14'),
(101, 'F5FCE737-56F9-44AB-B01E-416415E8B381', 7, '2017-04-15 14:09:26'),
(102, '6F39A111-79F2-48C8-AA30-AA816DF41EF3', 7, '2017-04-15 14:26:47'),
(103, '6A02C401-040F-4286-BD8D-972209880C0C', 7, '2017-04-15 14:29:08'),
(104, '93897EBE-3CF2-4B32-B03E-BBB7076263F8', 7, '2017-04-15 14:30:50'),
(105, '838E8B02-FBA1-4520-9C4A-7F39155DBA57', 4, '2017-04-15 16:39:24'),
(106, '287980BB-5ABB-424A-B752-5DD2BD519D13', 1, '2017-04-15 17:53:11'),
(107, 'C256B837-7464-4DBE-B02B-EC09D7C655E2', 4, '2017-04-15 18:27:28'),
(108, '332ECC0D-2CFF-4614-A851-961E54DE328F', 7, '2017-04-15 18:35:04'),
(109, '1717A009-D3AB-4DBF-A63E-E70F990ABE79', 7, '2017-04-15 20:18:16'),
(110, '14DF2520-E081-42E7-9EB1-FDA944127CD7', 7, '2017-04-15 20:22:42'),
(111, '1056F8BF-AC02-4021-A834-4230FFCC9707', 7, '2017-04-15 20:24:23'),
(112, '5786B486-59DE-4297-BC75-BF8F4534FC35', 7, '2017-04-15 20:44:56'),
(113, '57CC05A6-382C-4B0A-B84D-B717C2E0E1A1', 7, '2017-04-15 20:46:27'),
(114, 'B69D1970-FF45-441D-84D3-F6852D5584B2', 7, '2017-04-15 20:50:49'),
(115, 'CB9D9BA5-E9E0-4FBE-B600-C50F4DEFC294', 7, '2017-04-15 21:24:16'),
(116, '28A02A11-A847-4A74-969D-9504F1E2A023', 7, '2017-04-15 21:25:03'),
(117, '0B3096C7-E86E-465C-B181-F7100CC9B96A', 1, '2017-04-15 23:03:29'),
(118, '0B3096C7-E86E-465C-B181-F7100CC9B96A', 3, '2017-04-16 00:31:29'),
(119, '5980FD3B-B0AA-4709-9D16-9C12A9C88AF1', 3, '2017-04-16 00:43:45'),
(120, 'D5A99888-6A2F-483A-A886-F7EC513E70EF', 7, '2017-04-16 14:09:56'),
(121, '917C40A9-FA42-4DB1-9C9C-A7EC1329BE62', 7, '2017-04-16 14:13:07'),
(122, 'C72600BC-7866-4B57-91B2-6A925654D319', 7, '2017-04-16 21:14:19'),
(123, '287980BB-5ABB-424A-B752-5DD2BD519D13', 7, '2017-04-17 18:01:37'),
(124, '92A8CF65-5ED5-47D6-8A19-860292064787', 4, '2017-04-18 07:43:29'),
(125, 'AD8CE03E-1C0E-4358-B3CB-AA16D5CD3CA2', 4, '2017-04-19 07:23:46'),
(126, '537EECF0-45CA-4B8A-8399-9A18FB8171E5', 4, '2017-04-19 07:23:46'),
(127, 'B101C807-37FD-4286-BBEB-60810F5AB608', 4, '2017-04-20 12:39:54'),
(128, 'CAE75044-C4A8-4832-9672-B03C66C4B141', 4, '2017-04-21 06:40:46'),
(129, 'AA4AE1BE-6498-4BA5-B6C4-20C61EB6B493', 7, '2017-04-22 12:01:11'),
(130, '2B0065AA-7F98-499A-92A1-CEEEDCDC6048', 4, '2017-04-26 00:48:25'),
(131, 'ED2AA214-113F-40C8-A5CD-565EA6FD768E', 4, '2017-04-26 07:25:07'),
(132, 'F2AF4219-65DF-40EC-93FA-8B8CEAFFD562', 1, '2017-04-27 00:02:26'),
(133, 'F2AF4219-65DF-40EC-93FA-8B8CEAFFD562', 3, '2017-04-28 06:38:05'),
(134, '580384C9-A8F6-4455-B412-F81690F05F83', 3, '2017-04-28 21:32:22'),
(135, '0B3096C7-E86E-465C-B181-F7100CC9B96A', 4, '2017-04-30 00:33:48'),
(136, '5980FD3B-B0AA-4709-9D16-9C12A9C88AF1', 4, '2017-04-30 00:45:45'),
(137, 'C5319EF6-F907-4983-B173-DB01F3745C9D', 7, '2017-05-01 20:40:05'),
(138, '24A2C70C-D8EF-435A-B2D8-DE982CAE7A2F', 7, '2017-05-01 20:45:50'),
(139, 'D2ED563A-DE68-4BF1-A222-F190775A6C52', 7, '2017-05-01 21:08:02'),
(140, 'D9A1D8EE-7F44-43AB-8A2F-F0FCE81D1425', 1, '2017-05-01 21:09:17'),
(141, '14E868D9-6D35-4ECD-A985-036FC9B1D856', 1, '2017-05-01 23:55:26'),
(142, '9F91B2B5-48EA-46B9-BE9B-C9887E196848', 3, '2017-05-02 00:32:53'),
(143, 'B7136F52-222D-40C4-A66F-57DFEB0954F9', 3, '2017-05-02 12:14:27'),
(144, '54E67649-8496-42F2-9D1C-6396F1A7F39D', 1, '2017-05-03 01:27:32'),
(145, 'EBB5DE21-BF19-4C88-8E7C-565D7DFD0083', 1, '2017-05-03 01:39:05'),
(146, 'D9A1D8EE-7F44-43AB-8A2F-F0FCE81D1425', 3, '2017-05-03 09:03:37'),
(147, '8D8AC90F-8B9C-471B-AEF7-21F093172A35', 7, '2017-05-04 02:15:29'),
(148, '4461C903-119F-463F-9367-09D280D77265', 1, '2017-05-04 02:57:43'),
(149, 'D6A5CE14-4444-48AB-B787-213285305FE8', 3, '2017-05-09 15:03:15'),
(150, 'F2AF4219-65DF-40EC-93FA-8B8CEAFFD562', 4, '2017-05-12 06:35:19'),
(151, '580384C9-A8F6-4455-B412-F81690F05F83', 4, '2017-05-12 21:33:40'),
(152, 'C134DF58-895F-467E-9DA4-3916DD943075', 1, '2017-05-12 21:53:32'),
(153, '14E868D9-6D35-4ECD-A985-036FC9B1D856', 7, '2017-05-14 13:09:27'),
(154, '54E67649-8496-42F2-9D1C-6396F1A7F39D', 7, '2017-05-15 11:25:26'),
(155, 'EBB5DE21-BF19-4C88-8E7C-565D7DFD0083', 7, '2017-05-15 11:26:17'),
(156, '9F91B2B5-48EA-46B9-BE9B-C9887E196848', 4, '2017-05-16 00:33:26'),
(157, 'B7136F52-222D-40C4-A66F-57DFEB0954F9', 4, '2017-05-16 12:15:38'),
(158, 'D9A1D8EE-7F44-43AB-8A2F-F0FCE81D1425', 4, '2017-05-17 08:58:04'),
(159, '7BD54281-FEA5-4159-AA7E-D3A3333BCE55', 3, '2017-05-17 23:42:56'),
(160, '4461C903-119F-463F-9367-09D280D77265', 7, '2017-05-18 11:23:44'),
(161, '5A62F935-AF91-411A-90B1-25C898E7D932', 1, '2017-05-21 17:38:27'),
(162, '58532EA1-F522-4F4E-B03E-F23B03B1F66A', 3, '2017-05-23 13:50:06'),
(163, 'AA493782-A359-45B3-AD70-E34F8C1324BB', 1, '2017-05-23 14:59:01'),
(164, 'D6A5CE14-4444-48AB-B787-213285305FE8', 4, '2017-05-23 15:06:24'),
(165, 'AA493782-A359-45B3-AD70-E34F8C1324BB', 3, '2017-05-24 06:15:47'),
(166, 'AE1382C7-86BA-46F4-8066-20996BD63384', 3, '2017-05-25 17:20:43'),
(167, 'C134DF58-895F-467E-9DA4-3916DD943075', 7, '2017-05-27 10:57:45'),
(168, '3F7A48F3-A95D-4037-A59B-043BE3890E4E', 1, '2017-05-27 19:14:11'),
(169, '62D33115-6690-43E1-8B79-1A5854793D7F', 1, '2017-05-31 11:39:14'),
(170, '7BD54281-FEA5-4159-AA7E-D3A3333BCE55', 4, '2017-05-31 23:45:29'),
(171, '3F7A48F3-A95D-4037-A59B-043BE3890E4E', 3, '2017-06-01 10:51:00'),
(172, '62D33115-6690-43E1-8B79-1A5854793D7F', 7, '2017-06-02 11:46:07'),
(173, 'ACEF0D66-A3DD-417C-A2DD-0F3A560ADB36', 1, '2017-06-03 11:56:34'),
(174, '5A62F935-AF91-411A-90B1-25C898E7D932', 7, '2017-06-03 12:16:41'),
(175, '58532EA1-F522-4F4E-B03E-F23B03B1F66A', 4, '2017-06-06 13:51:38'),
(176, '29937489-0296-4F17-AC27-21BE3FB3C765', 7, '2017-06-06 17:45:58'),
(177, '173D6805-95F5-47FB-8046-D193BF417980', 7, '2017-06-06 17:48:27'),
(178, 'AA493782-A359-45B3-AD70-E34F8C1324BB', 4, '2017-06-07 06:13:22'),
(179, 'ACEF0D66-A3DD-417C-A2DD-0F3A560ADB36', 3, '2017-06-07 10:02:00'),
(180, 'AE1382C7-86BA-46F4-8066-20996BD63384', 4, '2017-06-08 17:03:35'),
(181, '68BEE109-4274-45BE-A071-E855F43E99CD', 1, '2017-06-13 23:43:26'),
(182, '68BEE109-4274-45BE-A071-E855F43E99CD', 3, '2017-06-14 06:45:24'),
(183, '3F7A48F3-A95D-4037-A59B-043BE3890E4E', 4, '2017-06-15 10:48:56'),
(184, '34536793-D5B1-4818-84EF-69592C90064A', 7, '2017-06-21 02:30:39'),
(185, 'ACEF0D66-A3DD-417C-A2DD-0F3A560ADB36', 4, '2017-06-21 10:03:31'),
(186, 'B65688C9-61A7-4102-BDDC-E3D51681233C', 1, '2017-06-22 01:20:38'),
(187, 'B65688C9-61A7-4102-BDDC-E3D51681233C', 3, '2017-06-22 01:25:37');

-- --------------------------------------------------------

--
-- Estrutura da tabela `planos`
--

DROP TABLE IF EXISTS `planos`;
CREATE TABLE IF NOT EXISTS `planos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cod_plano` varchar(255) NOT NULL,
  `nome` varchar(255) NOT NULL,
  `descricao` text NOT NULL,
  `valor` decimal(10,0) NOT NULL,
  `periodo` varchar(50) NOT NULL,
  `url_cancelamento` text NOT NULL,
  `url_assinatura` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `planos`
--

INSERT INTO `planos` (`id`, `cod_plano`, `nome`, `descricao`, `valor`, `periodo`, `url_cancelamento`, `url_assinatura`) VALUES
(4, '21FD61A15D5DA45554484FA49BB73539', 'Plano Mensal', 'SerÃ¡ cobrado o valor de R$ 25,90 a cada 30 dias.', '26', 'MONTHLY', '2', '1'),
(5, '8326D33B232398D55443FF889514F970', 'Plano teste', 'teste', '50', 'TRIMONTHLY', 'http://cursae.dev/cancelado', 'http://cursae.dev/sucesso');

-- --------------------------------------------------------

--
-- Estrutura da tabela `produtos`
--

DROP TABLE IF EXISTS `produtos`;
CREATE TABLE IF NOT EXISTS `produtos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `itemDescription` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `ordem` int(11) NOT NULL,
  `itemAmount` decimal(10,0) NOT NULL,
  `descricao` text,
  `imagem` varchar(255) DEFAULT NULL,
  `restrito` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `produtos`
--

INSERT INTO `produtos` (`id`, `nome`, `itemDescription`, `status`, `ordem`, `itemAmount`, `descricao`, `imagem`, `restrito`) VALUES
(1, 'Acesso completo ao Curso', 'Acesso completo ao Curso', 1, 1, '200', '<ul class=\"details m-b-md\">\r\n	<li><b>Parcele em at&eacute; 12x pelo Pagseguro</b></li>\r\n	<li>Acesso a todas as aulas do curso</li>\r\n	<li>Mais de 30&nbsp;horas de conte&uacute;do exclusivo</li>\r\n	<li>Mais de 150 aulas com conte&uacute;do exclusivo</li>\r\n	<li>Acesso a todos os&nbsp;&nbsp;materiais gr&aacute;ficos usados durante o curso</li>\r\n</ul>\r\n', '58ea999b8188e.png', 0),
(2, 'Templates do Curso', 'Templates do Curso (NÃ£o incluso as aulas do curso)', 0, 2, '300', '<ul class=\"details m-b-md\">\r\n	<li>Template criando um jogo de Quiz</li>\r\n	<li>Template criando um jogo de matem&aacute;tica</li>\r\n	<li>Template criando um jogo de quebra-cabe&ccedil;a</li>\r\n	<li>Template criando um jogo de infinite Jump</li>\r\n	<li>Template criando um jogo de defender</li>\r\n	<li>Template criando um jogo estilo Angry Birds</li>\r\n	<li>Template criando um jogo de 7 diferen&ccedil;as</li>\r\n	<li>Template criando um jogo estilo Fruit Ninja</li>\r\n	<li>Template criando um jogo de estacionar</li>\r\n	<li><b>Parcele em at&eacute; 12x pelo Pagseguro</b></li>\r\n</ul>\r\n', '58ea99b709515.png', 0),
(3, 'Acesso ao Curso + CÃ³digo Fonte', 'Acesso ao Curso + CÃ³digo Fonte', 1, 3, '450', '<ul class=\"details m-b-md\">\r\n	<li><b>Parcele em at&eacute; 12x pelo Pagseguro</b></li>\r\n	<li>Acesso a todas as aulas do curso</li>\r\n	<li>Mais de 30 horas de conte&uacute;do exclusivo</li>\r\n	<li>Mais de 150 aulas com conte&uacute;do exclusivo</li>\r\n	<li>Acesso a todos os&nbsp;materiais gr&aacute;ficos usados durante o curso</li>\r\n	<li>Acesso a todos os templates dos jogos: Quiz, Matem&aacute;tica, Quebra-cabe&ccedil;as, Infinite Jump,<br /> Jogos de Defender,\r\n	Angry Birds, 7 Diferen&ccedil;as, Fruit Ninja, Parking Game</li>\r\n	<li>*Templates s&atilde;o os arquivos fontes originais de cada jogo</li>\r\n</ul>\r\n\r\n<p>&nbsp;</p>\r\n', '58ea99c1dbb71.png', 0),
(5, 'Pacote Essencial', 'Pacote Essencial', 0, 4, '99', '<ul class=\"details m-b-md\">\r\n	<li>Economize R$ 51,00 comprando na Pr&eacute;-venda</li>\r\n	<li>Acesso a todas as aulas do curso no dia do lan&ccedil;amento</li>\r\n	<li><b>Parcele em at&eacute; 12x pelo Pagseguro</b></li>\r\n</ul>\r\n', '58eae49a997a2.png', NULL),
(6, 'Pacote MÃ©dio', 'Pacote MÃ©dio', 0, 5, '199', '<ul class=\"details m-b-md\">\r\n	<li>Acesso a todas as aulas do curso no dia do lan&ccedil;amento</li>\r\n	<li>Ganhe 3 templates</li>\r\n	<li>Acesso ao curso Exporte para Mobile</li>\r\n	<li><b>Parcele em at&eacute; 12x pelo Pagseguro</b></li>\r\n</ul>\r\n', '58eae4a167303.png', NULL),
(7, 'Pacote Completo', 'Pacote Completo', 0, 6, '299', '<ul class=\"details m-b-md\">\r\n	<li>Acesso a todas as aulas do curso no dia do lan&ccedil;amento</li>\r\n	<li>Ganhe 3 Templates</li>\r\n	<li>Sorteio de uma c&oacute;pia do Construct2 Business</li>\r\n	<li>Acesso ao curso criando um aplicativo no Construct2</li>\r\n	<li>Acesso ao curso exporte para mobile</li>\r\n	<li><b>30 Minutos de consultoria via Skype</b></li>\r\n	<li>Todos os templates do Curso</li>\r\n	<li><b>Parcele em at&eacute; 12x pelo Pagseguro</b></li>\r\n</ul>\r\n', '58eae4a7784d5.png', NULL),
(9, 'Produto de testes', 'teste willian', 0, 7, '1', '<ul class=\"details m-b-md\">\r\n	<li>Benef&iacute;cios 1</li>\r\n	<li>Benef&iacute;cios 2</li>\r\n	<li><b>Parcele em at&eacute; 12x pelo Pagseguro</b></li>\r\n</ul>\r\n', '58ed770267007.png', 0),
(10, 'Upgrade pacote Essencial para MÃ©dio', 'Upgrade para pacote Essencial para MÃ©dio', 0, 8, '100', '<ul class=\"details m-b-md\">\r\n	<li><strong><span style=\"color:#008000;\">V&aacute;lido apenas para pessoas que compraram o pacote Essencial</span></strong></li>\r\n	<li>Acesso a todas as aulas do curso</li>\r\n	<li>Ganhe 3 templates</li>\r\n	<li>Acesso ao curso Exporte para Mobile</li>\r\n	<li><b>Parcele em at&eacute; 12x pelo Pagseguro</b></li>\r\n</ul>\r\n', '58ee298de2eea.png', 1),
(11, 'Upgrade pacote MÃ©dio para Completo', 'Upgrade pacote MÃ©dio para Completo', 0, 10, '100', '<ul class=\"details m-b-md\">\r\n	<li><strong><span style=\"color:#008000;\">V&aacute;lido apenas para pessoas que compraram o pacote M&eacute;dio</span></strong></li>\r\n	<li>Acesso a todas as aulas do curso</li>\r\n	<li>Ganhe 3 Templates</li>\r\n	<li>Todos os templates do Curso</li>\r\n	<li>Acesso ao curso criando um aplicativo no Construct2 (Dispon&iacute;vel<br />\r\n	a&nbsp;partir do segundo semestre)</li>\r\n	<li>Acesso ao curso exporte para mobile</li>\r\n	<li><b>30 Minutos de consultoria via Skype</b></li>\r\n	<li><b>Parcele em at&eacute; 12x pelo Pagseguro</b></li>\r\n</ul>\r\n', '58ee2fe6834ea.png', 1),
(12, 'Upgrade pacote Essencial para Completo', 'Upgrade pacote Essencial para Completo', 0, 9, '200', '<ul class=\"details m-b-md\">\r\n	<li><strong><span style=\"color:#008000;\">V&aacute;lido apenas para pessoas que compraram o pacote Essencial</span></strong></li>\r\n	<li>Acesso a todas as aulas do curso</li>\r\n	<li>Ganhe 3 Templates</li>\r\n	<li>Todos os templates do Curso</li>\r\n	<li>Acesso ao curso criando um aplicativo no Construct2 (Dispon&iacute;vel<br />\r\n	a&nbsp;partir do segundo semestre)</li>\r\n	<li>Acesso ao curso exporte para mobile</li>\r\n	<li><b>30 Minutos de consultoria via Skype</b></li>\r\n	<li><b>Parcele em at&eacute; 12x pelo Pagseguro</b></li>\r\n</ul>\r\n', '58ee2fb65ecdc.png', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `saques`
--

DROP TABLE IF EXISTS `saques`;
CREATE TABLE IF NOT EXISTS `saques` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `data` date DEFAULT NULL,
  `valor` decimal(10,2) DEFAULT NULL,
  `descricao` text,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `saques`
--

INSERT INTO `saques` (`id`, `data`, `valor`, `descricao`) VALUES
(1, '2017-04-15', '5000.00', 'Saque Willian'),
(2, '2017-04-15', '5000.00', 'Saque Thiago'),
(3, '2017-05-06', '150.00', 'Saque vÃ­deo LS'),
(4, '2017-05-15', '400.00', 'Deposito direto conta Willian'),
(5, '2017-07-02', '400.00', 'Saque Thiago'),
(6, '2017-06-02', '924.80', 'Saque Willian'),
(7, '2017-06-02', '924.82', 'Saque Thiago');

-- --------------------------------------------------------

--
-- Estrutura da tabela `secoes`
--

DROP TABLE IF EXISTS `secoes`;
CREATE TABLE IF NOT EXISTS `secoes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) NOT NULL,
  `descricao` text,
  `id_curso` int(11) NOT NULL,
  `ordem` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=34 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `secoes`
--

INSERT INTO `secoes` (`id`, `nome`, `descricao`, `id_curso`, `ordem`) VALUES
(23, 'MÃ³dulo 12', NULL, 1, 1),
(24, 'MÃ³dulo 2', NULL, 1, 2),
(25, 'MÃ³dulo 1', 'DescriÃ§Ã£o modulo 1', 2, 3),
(26, 'Modulo 2', NULL, 2, 4),
(27, 'Modulo 3', NULL, 2, 5),
(29, 'Modulo 3', NULL, 1, 3),
(30, 'Modulo 4', NULL, 1, 6),
(31, 'MÃ³dulo 1', NULL, 4, 1),
(33, 'MÃ³dulo 1', NULL, 5, 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE IF NOT EXISTS `usuarios` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nome` varchar(255) DEFAULT NULL,
  `usuario` varchar(255) NOT NULL,
  `senha` varchar(255) NOT NULL,
  `data_cadastro` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `nome`, `usuario`, `senha`, `data_cadastro`) VALUES
(21, 'Willian Celso', 'willian_celsozd@hotmail.com', '86d01430f507b43190b7e7d50b24553d', '2016-09-30 05:53:45'),
(23, 'websix', 'contato@websix.com.br', '398780f66b3794612b4b8d5bca1434c3', '2017-03-13 14:46:07'),
(24, 'Cultiva', 'site@cultivasolucoes.com.br', '8c537ef7c9a618400d62310c33f9b2e3', '2017-04-18 17:04:51');

-- --------------------------------------------------------

--
-- Estrutura da tabela `vendas`
--

DROP TABLE IF EXISTS `vendas`;
CREATE TABLE IF NOT EXISTS `vendas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `id_estudante` int(11) NOT NULL,
  `transactionCode` varchar(255) NOT NULL,
  `status` int(11) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `paymentMethod` int(11) DEFAULT NULL,
  `paymentMethodCode` int(11) DEFAULT NULL,
  `grossAmount` decimal(10,2) DEFAULT NULL,
  `netAmount` decimal(10,2) DEFAULT NULL,
  `installmentFeeAmount` decimal(10,2) DEFAULT NULL,
  `intermediationRateAmount` decimal(10,2) DEFAULT NULL,
  `intermediationFeeAmount` decimal(10,2) DEFAULT NULL,
  `extraAmount` decimal(10,2) DEFAULT NULL,
  `discountamount` decimal(10,2) DEFAULT NULL,
  `installmentCount` int(11) DEFAULT NULL,
  `id_produto` int(11) DEFAULT NULL,
  `id_codigo` int(11) DEFAULT NULL,
  `itemCount` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=121 DEFAULT CHARSET=latin1;

--
-- Extraindo dados da tabela `vendas`
--

INSERT INTO `vendas` (`id`, `id_estudante`, `transactionCode`, `status`, `date`, `paymentMethod`, `paymentMethodCode`, `grossAmount`, `netAmount`, `installmentFeeAmount`, `intermediationRateAmount`, `intermediationFeeAmount`, `extraAmount`, `discountamount`, `installmentCount`, `id_produto`, `id_codigo`, `itemCount`) VALUES
(2, 45, 'CAE75044-C4A8-4832-9672-B03C66C4B141', 4, '2017-04-03', 2, 202, '299.00', '283.68', NULL, '0.40', '14.92', NULL, NULL, 1, 7, 38, NULL),
(3, 37, '838E8B02-FBA1-4520-9C4A-7F39155DBA57', 4, '2017-04-01', 1, 101, '400.00', '379.64', '0.00', '0.40', '19.96', NULL, NULL, 12, 3, 32, NULL),
(4, 52, 'B101C807-37FD-4286-BBEB-60810F5AB608', 4, '2017-04-01', 2, 202, '99.00', '93.66', NULL, '0.40', '4.94', NULL, NULL, 1, 5, 47, NULL),
(5, 53, 'C256B837-7464-4DBE-B02B-EC09D7C655E2', 4, '2017-04-01', 1, 102, '99.00', '93.66', '0.00', '0.40', '4.94', NULL, NULL, 3, 5, 29, NULL),
(6, 35, '645684AB-6EE7-4E2B-9BAB-316907BFAB1E', 4, '2017-03-31', 1, 101, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 5, 7, 30, NULL),
(7, 54, '537EECF0-45CA-4B8A-8399-9A18FB8171E5', 4, '2017-03-31', 2, 202, '199.00', '188.67', NULL, '0.40', '9.93', NULL, NULL, 1, 6, 51, NULL),
(8, 43, 'AD8CE03E-1C0E-4358-B3CB-AA16D5CD3CA2', 4, '2017-03-31', 2, 202, '299.00', '283.68', NULL, '0.40', '14.92', NULL, NULL, 1, 7, 36, NULL),
(9, 55, '38078B95-4308-499A-BCE8-2798DF080101', 4, '2017-03-31', 1, 102, '99.00', '93.66', '0.00', '0.40', '4.94', NULL, NULL, 1, 5, 50, NULL),
(10, 56, '23C60621-C7D5-4145-B256-B8746119C819', 4, '2017-03-31', 2, 202, '99.00', '93.66', NULL, '0.40', '4.94', NULL, NULL, 1, 5, 49, NULL),
(11, 34, '22CAE1BB-53D8-4B93-A45A-3824300A2559', 4, '2017-03-31', 1, 102, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 1, 7, 29, NULL),
(12, 33, 'F6CDA768-DC89-408E-A47A-856482255298', 4, '2017-03-31', 1, 102, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 5, 7, 28, NULL),
(13, 41, '8A102725-94CB-40E7-8B5E-5DD869E2D58D', 4, '2017-03-31', 2, 202, '199.00', '188.67', NULL, '0.40', '9.93', NULL, NULL, 1, 6, 34, NULL),
(14, 44, 'DFB9824A-0C52-41E7-BA8B-ED37C4396010', 4, '2017-03-31', 1, 101, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 1, 7, 37, NULL),
(15, 42, '92A8CF65-5ED5-47D6-8A19-860292064787', 4, '2017-03-31', 2, 202, '299.00', '283.68', NULL, '0.40', '14.92', NULL, NULL, 1, 7, 35, NULL),
(16, 32, '60313EA4-2FEC-4D5E-A0EC-E9AAB00A2AD3', 4, '2017-03-30', 1, 102, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 7, 7, 27, NULL),
(17, 30, '06643DDD-740C-4A50-92E1-2F8922D29C75', 4, '2017-03-30', 1, 102, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 12, 7, 25, NULL),
(18, 29, 'B948E688-1C08-412D-86CE-9749DD76B013', 4, '2017-03-30', 1, 102, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 12, 7, 24, NULL),
(19, 36, 'CCFC3636-95C0-49EE-840D-3AC3CDCC358B', 4, '2017-03-30', 2, 202, '299.00', '283.68', NULL, '0.40', '14.92', NULL, NULL, 1, 7, 31, NULL),
(20, 57, '167770BB-47EC-473D-98DE-188AAC875588', 4, '2017-03-30', 1, 102, '99.00', '93.66', '0.00', '0.40', '4.94', NULL, NULL, 1, 5, 53, NULL),
(21, 26, '69838365-2021-47B6-B51D-EA994C0E9BB2', 4, '2017-03-30', 1, 101, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 1, 7, 21, NULL),
(22, 58, 'B4AE1CE8-1561-446F-A365-CB35DF341471', 4, '2017-03-30', 1, 102, '99.00', '93.66', '0.00', '0.40', '4.94', NULL, NULL, 5, 5, 52, NULL),
(23, 28, 'FFB5DFEC-36B9-4398-AE7F-9BD72F1EA40F', 4, '2017-03-30', 1, 102, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 3, 7, 23, NULL),
(24, 59, 'F95FA783-AE8A-437C-AF65-888109011960', 4, '2017-03-29', 1, 102, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 1, 7, 54, NULL),
(25, 60, '2452D783-BAD6-4A2A-AD55-4190FAD0CFEF', 4, '2017-03-29', 1, 102, '99.00', '93.66', '0.00', '0.40', '4.94', NULL, NULL, 12, 5, 55, NULL),
(26, 27, '0E432061-544A-499B-A674-36781DC9680B', 4, '2017-03-29', 2, 202, '299.00', '283.68', NULL, '0.40', '14.92', NULL, NULL, 1, 7, 22, NULL),
(27, 25, 'C39E3DDE-EAEA-4FA8-8CEC-0ED4EE8169BE', 4, '2017-03-28', 1, 102, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 1, 7, 20, NULL),
(28, 61, '8BB8FF09-E5FF-4DD7-9B3E-E9D39ADA6995', 4, '2017-03-28', 1, 102, '99.00', '93.66', '0.00', '0.40', '4.94', NULL, NULL, 2, 5, 58, NULL),
(29, 62, 'A0D4C4BB-3642-4035-AE1B-FC81AC36C4E5', 4, '2017-03-28', 1, 102, '199.00', '188.67', '0.00', '0.40', '9.93', NULL, NULL, 7, 6, 57, NULL),
(30, 63, 'AE1A6CDB-DAC6-4275-ABB3-D10D92A5B8C5', 4, '2017-03-28', 1, 101, '99.00', '93.66', '0.00', '0.40', '4.94', NULL, NULL, 1, 5, 56, NULL),
(31, 23, '7A80D9BE-28BC-4CF0-BE6F-47D5B73D52FD', 4, '2017-03-27', 2, 202, '299.00', '283.68', NULL, '0.40', '14.92', NULL, NULL, 1, 7, 18, NULL),
(32, 22, 'CECD4B8D-4279-4FC8-9AB7-1B53A9078F74', 4, '2017-03-27', 2, 202, '299.00', '283.68', NULL, '0.40', '14.92', NULL, NULL, 1, 7, 17, NULL),
(33, 21, '54063104-1AB4-44F0-992D-E056B27A4BAE', 4, '2017-03-27', 1, 102, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 3, 7, 16, NULL),
(34, 64, '053AB8D9-0D16-4095-95AC-6C42C10F266B', 4, '2017-03-27', 1, 102, '99.00', '93.66', '0.00', '0.40', '4.94', NULL, NULL, 1, 5, 59, NULL),
(35, 20, '1A1FCBF9-CC26-4935-AA7E-C00BF9AF918C', 4, '2017-03-26', 1, 102, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 12, 7, 15, NULL),
(36, 19, '018CC28E-AEFF-4EA8-84E9-F2F7C7D2A350', 4, '2017-03-25', 1, 102, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 3, 7, 14, NULL),
(37, 18, '3168E63E-4CBD-43D5-AEB8-A27098542724', 4, '2017-03-24', 1, 102, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 10, 7, 13, NULL),
(38, 17, 'A6CC9242-1AE5-43B2-8F9E-74BF3AC55854', 4, '2017-03-24', 1, 101, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 5, 7, 12, NULL),
(39, 24, '50E94F93-AE1F-49AB-917F-A827FAAB54DF', 4, '2017-03-22', 2, 202, '299.00', '283.68', NULL, '0.40', '14.92', NULL, NULL, 1, 7, 19, NULL),
(40, 65, '3965074D-B94C-4F9B-A10D-E4AB85A622DA', 4, '2017-03-21', 1, 101, '99.00', '93.66', '0.00', '0.40', '4.94', NULL, NULL, 1, 5, 60, NULL),
(41, 13, '72DBC33E-29B4-43D3-B7CE-00FBE8C11B29', 4, '2017-03-17', 1, 102, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 1, 7, 9, NULL),
(42, 66, '171AFEAB-6B0F-4A56-9D60-D71FDF496BF2', 4, '2017-03-17', 1, 102, '199.00', '188.67', '0.00', '0.40', '9.93', NULL, NULL, 4, 6, 61, NULL),
(43, 15, 'BFBB023D-4990-492A-AE3D-DCC5774C8A09', 4, '2017-03-17', 2, 202, '299.00', '283.68', NULL, '0.40', '14.92', NULL, NULL, 1, 7, 11, NULL),
(44, 14, '6E616D5D-67BE-4443-9EC8-6FDEDC0FC705', 4, '2017-03-17', 2, 202, '299.00', '283.68', NULL, '0.40', '14.92', NULL, NULL, 1, 7, 10, NULL),
(45, 12, 'F4AD62FC-03CA-49B9-8A01-E9BAD04F9595', 4, '2017-03-16', 1, 101, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 3, 7, 8, NULL),
(46, 67, '7E99BCC1-EC4F-4ACC-9060-36118473A9DE', 4, '2017-03-16', 1, 102, '99.00', '93.66', '0.00', '0.40', '4.94', NULL, NULL, 1, 5, 62, NULL),
(47, 68, '0AB6E2DE-0108-45C0-B710-FE07C026F6ED', 4, '2017-03-15', 1, 101, '99.00', '93.66', '0.00', '0.40', '4.94', NULL, NULL, 12, 5, 63, NULL),
(48, 11, '7EDF0D6C-3F3B-4739-87BC-E094BDB2DE13', 4, '2017-03-14', 2, 202, '299.00', '283.68', NULL, '0.40', '14.92', NULL, NULL, 1, 7, 7, NULL),
(49, 69, '022CDFF9-497F-4C91-99CA-07701A47F310', 4, '2017-03-13', 1, 105, '99.00', '93.66', '0.00', '0.40', '4.94', NULL, NULL, 3, 5, 64, NULL),
(50, 70, '17919F6C-109D-487B-B314-228DAEFB4CEC', 4, '2017-03-13', 2, 202, '99.00', '93.66', NULL, '0.40', '4.94', NULL, NULL, 1, 5, 65, NULL),
(51, 10, '3F67370C-6857-4C8D-9A85-92B7258CD26C', 4, '2017-03-11', 2, 202, '299.00', '283.68', NULL, '0.40', '14.92', NULL, NULL, 1, 7, 6, NULL),
(52, 9, '0BF93A14-9020-430C-8A39-584CDB4CB071', 4, '2017-03-11', 1, 103, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 3, 7, 5, NULL),
(53, 8, '752F6E95-91E1-45AA-8403-7EFBDAB8EE9D', 4, '2017-03-11', 1, 102, '299.00', '283.68', '0.00', '0.40', '14.92', NULL, NULL, 12, 7, 4, NULL),
(54, 71, 'ED2AA214-113F-40C8-A5CD-565EA6FD768E', 4, '2017-04-11', 2, 202, '99.00', '93.66', NULL, '0.40', '4.94', NULL, NULL, 1, 5, 69, NULL),
(55, 72, '2B0065AA-7F98-499A-92A1-CEEEDCDC6048', 4, '2017-04-11', 1, 101, '1.00', '0.55', '0.00', '0.40', '0.05', NULL, '0.00', 1, 9, 67, NULL),
(86, 81, '917C40A9-FA42-4DB1-9C9C-A7EC1329BE62', 7, '2017-04-16', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 12, 1, NULL, NULL),
(87, 81, 'C72600BC-7866-4B57-91B2-6A925654D319', 7, '2017-04-16', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 1, 1, NULL, NULL),
(58, 74, '53662238-668C-4045-ABEF-708F8CF0526A', 7, '2017-04-14', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 3, 1, NULL, NULL),
(59, 50, 'C92F97EF-1AB7-4496-B3C7-75D9897F694F', 7, '2017-03-31', 2, 202, '299.00', '283.68', NULL, '0.40', '14.92', NULL, NULL, 1, 2147483647, NULL, NULL),
(60, 75, '099C42E4-02B8-434F-B4ED-1071A6A82754', 7, '2017-03-31', 2, 202, '299.00', '283.68', NULL, '0.40', '14.92', NULL, NULL, 1, 2147483647, NULL, NULL),
(61, 74, 'A6282AA3-F86E-4F01-A226-058CC803F08E', 7, '2017-03-31', 2, 202, '199.00', '188.67', NULL, '0.40', '9.93', NULL, NULL, 1, 2147483647, NULL, NULL),
(62, 76, '87FFA1A7-2BEF-49BE-B5CB-1DA5FBAB66AD', 7, '2017-03-31', 2, 202, '199.00', '188.67', NULL, '0.40', '9.93', NULL, NULL, 1, 2147483647, NULL, NULL),
(63, 76, '1B3C139A-7F5D-464B-8C83-FD2A34A7131F', 7, '2017-03-31', 2, 202, '199.00', '188.67', NULL, '0.40', '9.93', NULL, NULL, 1, 2147483647, NULL, NULL),
(85, 81, 'D5A99888-6A2F-483A-A886-F7EC513E70EF', 7, '2017-04-16', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 1, 1, NULL, NULL),
(65, 78, 'B6A22C91-32D1-4E97-888B-029D5914CAF7', 7, '2017-04-15', 1, 101, '400.00', '379.64', '0.00', '0.40', '19.96', NULL, NULL, 2, 3, NULL, NULL),
(66, 78, 'B99381E4-7BA7-4BD8-8E72-7D5C88E11F90', 7, '2017-04-15', 1, 101, '400.00', '379.64', '0.00', '0.40', '19.96', NULL, NULL, 2, 3, NULL, NULL),
(67, 78, 'B1176A49-8DDE-4108-9633-12E4AA0F8AC2', 7, '2017-04-15', 1, 101, '400.00', '379.64', '0.00', '0.40', '19.96', NULL, NULL, 2, 3, NULL, NULL),
(68, 79, '8DD92CB8-8828-473D-9A7F-46840A6B90AB', 7, '2017-04-15', 1, 101, '400.00', '379.64', '0.00', '0.40', '19.96', NULL, NULL, 2, 3, NULL, NULL),
(69, 80, 'F5FCE737-56F9-44AB-B01E-416415E8B381', 7, '2017-04-15', 1, 101, '400.00', '379.64', '0.00', '0.40', '19.96', NULL, NULL, 2, 3, NULL, NULL),
(70, 78, '6F39A111-79F2-48C8-AA30-AA816DF41EF3', 7, '2017-04-15', 1, 101, '400.00', '379.64', '0.00', '0.40', '19.96', NULL, NULL, 2, 3, NULL, NULL),
(71, 78, '6A02C401-040F-4286-BD8D-972209880C0C', 7, '2017-04-15', 1, 101, '400.00', '379.64', '0.00', '0.40', '19.96', NULL, NULL, 2, 3, NULL, NULL),
(72, 78, '93897EBE-3CF2-4B32-B03E-BBB7076263F8', 7, '2017-04-15', 1, 101, '400.00', '379.64', '0.00', '0.40', '19.96', NULL, NULL, 1, 3, NULL, NULL),
(73, 81, '287980BB-5ABB-424A-B752-5DD2BD519D13', 7, '2017-04-15', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 1, 1, NULL, NULL),
(74, 81, '332ECC0D-2CFF-4614-A851-961E54DE328F', 7, '2017-04-15', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 1, 1, NULL, NULL),
(75, 81, '1717A009-D3AB-4DBF-A63E-E70F990ABE79', 7, '2017-04-15', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 1, 1, NULL, NULL),
(76, 81, '14DF2520-E081-42E7-9EB1-FDA944127CD7', 7, '2017-04-15', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 1, 1, NULL, NULL),
(77, 81, '1056F8BF-AC02-4021-A834-4230FFCC9707', 7, '2017-04-15', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 1, 1, NULL, NULL),
(78, 81, '5786B486-59DE-4297-BC75-BF8F4534FC35', 7, '2017-04-15', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 1, 1, NULL, NULL),
(79, 81, '57CC05A6-382C-4B0A-B84D-B717C2E0E1A1', 7, '2017-04-15', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 2, 1, NULL, NULL),
(80, 81, 'B69D1970-FF45-441D-84D3-F6852D5584B2', 7, '2017-04-15', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 3, 1, NULL, NULL),
(81, 81, 'CB9D9BA5-E9E0-4FBE-B600-C50F4DEFC294', 7, '2017-04-15', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 1, 1, NULL, NULL),
(82, 81, '28A02A11-A847-4A74-969D-9504F1E2A023', 7, '2017-04-15', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 1, 1, NULL, NULL),
(83, 82, '0B3096C7-E86E-465C-B181-F7100CC9B96A', 4, '2017-04-15', 3, 301, '150.00', '142.11', NULL, '0.40', '7.49', NULL, NULL, 1, 1, 41, NULL),
(84, 83, '5980FD3B-B0AA-4709-9D16-9C12A9C88AF1', 4, '2017-04-15', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 12, 1, 72, NULL),
(88, 50, 'AA4AE1BE-6498-4BA5-B6C4-20C61EB6B493', 7, '2017-04-09', 2, 202, '1.00', '0.55', NULL, '0.40', '0.05', NULL, NULL, 1, 8, NULL, NULL),
(89, 49, '0', 3, '2017-04-25', 1, 1, '0.00', '0.00', NULL, NULL, NULL, NULL, NULL, NULL, 9, 81, NULL),
(90, 74, 'F2AF4219-65DF-40EC-93FA-8B8CEAFFD562', 4, '2017-04-26', 2, 202, '99.00', '93.66', NULL, '0.40', '4.94', NULL, NULL, 1, 5, 70, NULL),
(91, 84, '580384C9-A8F6-4455-B412-F81690F05F83', 4, '2017-04-28', 1, 101, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 5, 1, 73, NULL),
(92, 85, 'C5319EF6-F907-4983-B173-DB01F3745C9D', 7, '2017-05-01', 1, 101, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 3, 1, NULL, NULL),
(93, 85, '24A2C70C-D8EF-435A-B2D8-DE982CAE7A2F', 7, '2017-05-01', 1, 101, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 3, 1, NULL, NULL),
(94, 85, 'D2ED563A-DE68-4BF1-A222-F190775A6C52', 7, '2017-05-01', 1, 101, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 2, 1, NULL, NULL),
(95, 85, 'D9A1D8EE-7F44-43AB-8A2F-F0FCE81D1425', 4, '2017-05-01', 2, 202, '150.00', '142.11', NULL, '0.40', '7.49', NULL, NULL, 1, 1, 82, NULL),
(96, 86, '14E868D9-6D35-4ECD-A985-036FC9B1D856', 7, '2017-05-01', 2, 202, '150.00', '142.11', NULL, '0.40', '7.49', NULL, NULL, 1, 1, NULL, NULL),
(98, 88, 'B7136F52-222D-40C4-A66F-57DFEB0954F9', 4, '2017-05-02', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 4, 1, 74, NULL),
(99, 89, '54E67649-8496-42F2-9D1C-6396F1A7F39D', 7, '2017-05-02', 2, 202, '150.00', '142.11', NULL, '0.40', '7.49', NULL, NULL, 1, 1, NULL, NULL),
(100, 90, 'EBB5DE21-BF19-4C88-8E7C-565D7DFD0083', 7, '2017-05-02', 2, 202, '400.00', '379.64', NULL, '0.40', '19.96', NULL, NULL, 1, 3, NULL, NULL),
(101, 91, '8D8AC90F-8B9C-471B-AEF7-21F093172A35', 7, '2017-05-03', 1, 107, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 5, 1, NULL, NULL),
(102, 91, '4461C903-119F-463F-9367-09D280D77265', 7, '2017-05-03', 2, 202, '150.00', '142.11', NULL, '0.40', '7.49', NULL, NULL, 1, 1, NULL, NULL),
(103, 92, 'D6A5CE14-4444-48AB-B787-213285305FE8', 4, '2017-05-09', 1, 105, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 1, 1, 84, NULL),
(104, 93, 'C134DF58-895F-467E-9DA4-3916DD943075', 7, '2017-05-12', 2, 202, '400.00', '379.64', NULL, '0.40', '19.96', NULL, NULL, 1, 3, NULL, NULL),
(105, 94, '0000', 3, '2017-05-15', 2, NULL, '0.00', '400.00', NULL, NULL, NULL, NULL, NULL, 1, 3, 85, NULL),
(109, 97, '58532EA1-F522-4F4E-B03E-F23B03B1F66A', 4, '2017-05-23', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 4, 1, 86, NULL),
(107, 95, '7BD54281-FEA5-4159-AA7E-D3A3333BCE55', 4, '2017-05-17', 1, 101, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 1, 1, 83, NULL),
(108, 96, '5A62F935-AF91-411A-90B1-25C898E7D932', 7, '2017-05-21', 2, 202, '150.00', '142.11', NULL, '0.40', '7.49', NULL, NULL, 1, 1, NULL, NULL),
(110, 98, 'AA493782-A359-45B3-AD70-E34F8C1324BB', 4, '2017-05-23', 2, 202, '150.00', '142.11', NULL, '0.40', '7.49', NULL, NULL, 1, 1, 71, NULL),
(111, 99, 'AE1382C7-86BA-46F4-8066-20996BD63384', 4, '2017-05-25', 1, 102, '150.00', '142.11', '0.00', '0.40', '7.49', NULL, NULL, 5, 1, 87, NULL),
(112, 100, '3F7A48F3-A95D-4037-A59B-043BE3890E4E', 4, '2017-05-27', 2, 202, '150.00', '142.11', NULL, '0.40', '7.49', NULL, NULL, 1, 1, 88, NULL),
(118, 103, '68BEE109-4274-45BE-A071-E855F43E99CD', 3, '2017-06-13', 2, 202, '200.00', '189.62', NULL, '0.40', '9.98', NULL, NULL, 1, 1, 89, NULL),
(115, 102, 'ACEF0D66-A3DD-417C-A2DD-0F3A560ADB36', 4, '2017-06-03', 2, 202, '450.00', '427.14', NULL, '0.40', '22.46', NULL, NULL, 1, 3, 78, NULL),
(116, 103, '29937489-0296-4F17-AC27-21BE3FB3C765', 7, '2017-06-06', 1, 102, '200.00', '189.62', '0.00', '0.40', '9.98', NULL, NULL, 6, 1, NULL, NULL),
(117, 103, '173D6805-95F5-47FB-8046-D193BF417980', 7, '2017-06-06', 1, 102, '200.00', '189.62', '0.00', '0.40', '9.98', NULL, NULL, 6, 1, NULL, NULL),
(119, 104, '34536793-D5B1-4818-84EF-69592C90064A', 7, '2017-06-20', 1, 102, '200.00', '189.62', '0.00', '0.40', '9.98', NULL, NULL, 6, 1, NULL, NULL),
(120, 71, 'B65688C9-61A7-4102-BDDC-E3D51681233C', 3, '2017-06-21', 3, 304, '30.00', '28.10', NULL, '0.40', '1.50', NULL, NULL, 1, 4, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
