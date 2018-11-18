-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 18-Nov-2018 às 01:40
-- Versão do servidor: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bancotcc`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbalternativa`
--

CREATE TABLE `tbalternativa` (
  `alternativaId` int(11) NOT NULL,
  `alternativaTexto` text NOT NULL,
  `alternativacorreta` tinyint(4) NOT NULL DEFAULT '0',
  `TbQuestao_questaoId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbalternativa`
--

INSERT INTO `tbalternativa` (`alternativaId`, `alternativaTexto`, `alternativacorreta`, `TbQuestao_questaoId`) VALUES
(1, '$a formas diferentes', 1, 1),
(2, '$b formas diferentes', 0, 1),
(3, '$c formas diferentes', 0, 1),
(4, '$d formas diferentes', 0, 1),
(5, '$a maneiras', 1, 2),
(6, '$b maneiras', 0, 2),
(7, '$c maneiras', 0, 2),
(8, '$d maneiras', 0, 2),
(9, '$a maneiras', 1, 3),
(10, '$b maneiras', 0, 3),
(11, '$c maneiras', 0, 3),
(12, '$d maneiras', 0, 3),
(13, '1', 1, 4),
(14, '2', 0, 4),
(15, '3', 0, 4),
(16, '4', 0, 4);

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbespecie`
--

CREATE TABLE `tbespecie` (
  `especieId` int(11) NOT NULL,
  `especieNome` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbespecie`
--

INSERT INTO `tbespecie` (`especieId`, `especieNome`) VALUES
(1, 'administrador'),
(2, 'aluno');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbquestao`
--

CREATE TABLE `tbquestao` (
  `questaoId` int(11) NOT NULL,
  `questaoNome` varchar(100) NOT NULL,
  `questaoDescricao` text NOT NULL,
  `questaoDataCriacao` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `questaoAssunto` text NOT NULL,
  `questaoDificuldade` int(11) NOT NULL,
  `questaoDados` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbquestao`
--

INSERT INTO `tbquestao` (`questaoId`, `questaoNome`, `questaoDescricao`, `questaoDataCriacao`, `questaoAssunto`, `questaoDificuldade`, `questaoDados`) VALUES
(1, 'Banco da praça', '$x casais de namorados vão sentar-se em um banco de uma praça. Em quantas ordens diferentes os seis podem sentar-se de modo que cada namorado fique ao lado de sua namorada? ', '2018-11-18 00:40:23', 'Princípio Fundamental de Contagem , PFC', 2, '$x = rand(2,4);\r\n\r\n$i = $x;\r\n$ans = 1;\r\nwhile ($i >= 1){\r\n    $ans *= $i*2;\r\n    $i--;\r\n}\r\n\r\n$a = $ans;\r\n$b = $ans/2;\r\n$c = $ans+12;\r\n$d = $ans*2;'),
(2, 'Escolhendo o look', 'Fábio tem $x camisas: $xp1 preta de mangas curtas , $xp2 preta de mangas compridas , $xa azul , $xc cinza e $xb branca e $y calças : $yp preta , $ya azul , $yv verde e $ym marrom. De quantas maneiras diferentes ele pode se vestir com uma camisa e uma calça de cores distintas? ', '2018-11-18 01:01:22', 'Princípio Fundamental de Contagem , PFC', 1, '$xp1 = rand(1,2);\r\n$xp2 = rand(1,2);\r\n$xa = rand(1,2);\r\n$xc = rand(1,2);\r\n$xb = rand(1,2);\r\n$x = $xp1 + $xp2 + $xa + $xc + $xb;\r\n\r\n$yp = rand(1,2);\r\n$ya = rand(1,2);\r\n$yv = rand(1,2);\r\n$ym = rand(1,2);\r\n$y = $yp + $ya + $yv + $ym; \r\n\r\n\r\n$ans = $x * $y - ($xp1 *$yp) - ($xp2 *$yp) - ($xa *$ya);\r\n\r\n$a = $ans;\r\n$b = $ans-2;\r\n$c = $ans+12;\r\n$d = $ans*2;\r\n'),
(3, 'Figurinhas', 'Bruno tem $x figurinhas idênticas com a bandeira da Alemanha, $y com a bandeira do Brasil e $z com a da Colômbia. Ele quer fazer um pacote com pelo menos 3 dessas figurinhas. De quantas maneiras ele pode fazer esse pacote?', '2018-11-18 01:29:19', 'Princípio Fundamental de Contagem , PFC', 1, '$x = rand(4,6);\r\n$y = rand(4,6);\r\n$z = rand(4,6);\r\n\r\n$ans = $x * $y * $z;\r\n\r\n$a = $ans;\r\n$b = $ans-2;\r\n$c = $ans+12;\r\n$d = $ans*2;\r\n'),
(4, 'teste', 'a resposta certa é 1', '2018-11-18 01:36:23', 'lalala', 1, '$x = 2;');

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbsubmissao`
--

CREATE TABLE `tbsubmissao` (
  `submissaoId` int(11) NOT NULL,
  `submissaoData` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `submissaoDados` text NOT NULL,
  `TbVeredito_vereditoId` int(11) NOT NULL,
  `TbAlternativa_alternativaId` int(11) NOT NULL,
  `TbUsuario_usuarioId` int(11) NOT NULL,
  `TbQuestao_questaoId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Estrutura da tabela `tbusuario`
--

CREATE TABLE `tbusuario` (
  `usuarioId` int(11) NOT NULL,
  `usuarioNomeCompleto` varchar(255) NOT NULL,
  `usuarioEmail` varchar(150) NOT NULL,
  `usuarioSenha` varchar(50) NOT NULL,
  `usuarioDataCadastro` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `usuarioSexo` char(1) NOT NULL,
  `TbEspecie_especieId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Extraindo dados da tabela `tbusuario`
--

INSERT INTO `tbusuario` (`usuarioId`, `usuarioNomeCompleto`, `usuarioEmail`, `usuarioSenha`, `usuarioDataCadastro`, `usuarioSexo`, `TbEspecie_especieId`) VALUES
(1, 'adm', 'adm@gmail.com', 'adm', '2018-11-18 00:29:24', 'f', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbalternativa`
--
ALTER TABLE `tbalternativa`
  ADD PRIMARY KEY (`alternativaId`,`TbQuestao_questaoId`),
  ADD UNIQUE KEY `alternativaId_UNIQUE` (`alternativaId`),
  ADD KEY `fk_TbAlternativa_TbQuestao1_idx` (`TbQuestao_questaoId`) USING BTREE;

--
-- Indexes for table `tbespecie`
--
ALTER TABLE `tbespecie`
  ADD PRIMARY KEY (`especieId`),
  ADD UNIQUE KEY `tipousuarioId_UNIQUE` (`especieId`),
  ADD UNIQUE KEY `tipousuarioNome_UNIQUE` (`especieNome`);

--
-- Indexes for table `tbquestao`
--
ALTER TABLE `tbquestao`
  ADD PRIMARY KEY (`questaoId`),
  ADD UNIQUE KEY `questaoId_UNIQUE` (`questaoId`);

--
-- Indexes for table `tbsubmissao`
--
ALTER TABLE `tbsubmissao`
  ADD PRIMARY KEY (`submissaoId`,`TbVeredito_vereditoId`,`TbAlternativa_alternativaId`,`TbUsuario_usuarioId`,`TbQuestao_questaoId`),
  ADD UNIQUE KEY `submissaoId_UNIQUE` (`submissaoId`),
  ADD KEY `fk_TbSubmissao_TbAlternativa1_idx` (`TbAlternativa_alternativaId`),
  ADD KEY `fk_TbSubmissao_TbUsuario1_idx` (`TbUsuario_usuarioId`),
  ADD KEY `fk_TbSubmissao_TbQuestao1_idx` (`TbQuestao_questaoId`);

--
-- Indexes for table `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD PRIMARY KEY (`usuarioId`,`TbEspecie_especieId`),
  ADD UNIQUE KEY `usuario_id_UNIQUE` (`usuarioId`),
  ADD UNIQUE KEY `usuario_email_UNIQUE` (`usuarioEmail`),
  ADD KEY `fk_TbUsuario_TbEspecie1_idx` (`TbEspecie_especieId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbalternativa`
--
ALTER TABLE `tbalternativa`
  MODIFY `alternativaId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbespecie`
--
ALTER TABLE `tbespecie`
  MODIFY `especieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbquestao`
--
ALTER TABLE `tbquestao`
  MODIFY `questaoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbsubmissao`
--
ALTER TABLE `tbsubmissao`
  MODIFY `submissaoId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbusuario`
--
ALTER TABLE `tbusuario`
  MODIFY `usuarioId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Limitadores para a tabela `tbalternativa`
--
ALTER TABLE `tbalternativa`
  ADD CONSTRAINT `fk_TbAlternativa_TbQuestao1` FOREIGN KEY (`TbQuestao_questaoId`) REFERENCES `tbquestao` (`questaoId`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Limitadores para a tabela `tbsubmissao`
--
ALTER TABLE `tbsubmissao`
  ADD CONSTRAINT `fk_TbSubmissao_TbAlternativa1` FOREIGN KEY (`TbAlternativa_alternativaId`) REFERENCES `tbalternativa` (`alternativaId`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_TbSubmissao_TbQuestao1` FOREIGN KEY (`TbQuestao_questaoId`) REFERENCES `tbquestao` (`questaoId`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_TbSubmissao_TbUsuario1` FOREIGN KEY (`TbUsuario_usuarioId`) REFERENCES `tbusuario` (`usuarioId`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Limitadores para a tabela `tbusuario`
--
ALTER TABLE `tbusuario`
  ADD CONSTRAINT `fk_TbUsuario_TbEspecie` FOREIGN KEY (`TbEspecie_especieId`) REFERENCES `tbespecie` (`especieId`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
