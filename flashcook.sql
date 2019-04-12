-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 21-Mar-2019 às 08:39
-- Versão do servidor: 10.1.37-MariaDB
-- versão do PHP: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `flashcook`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `receitas`
--

CREATE TABLE `receitas` (
  `id_rec` int(11) NOT NULL,
  `nome` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `autor` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `preparo` text COLLATE utf8_bin,
  `imagem` varchar(2000) COLLATE utf8_bin DEFAULT NULL,
  `nivel` varchar(250) COLLATE utf8_bin DEFAULT NULL,
  `ingredientes` varchar(200) COLLATE utf8_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `receitas`
--

INSERT INTO `receitas` (`id_rec`, `nome`, `autor`, `preparo`, `imagem`, `nivel`, `ingredientes`) VALUES
(1, 'Panqueca de Banana', NULL, 'Bata o ovo e amasse a banana.Junte a banana ao ovo em uma vasilha e mexa até dar liga (se preferir deixe pedacinhos de banana na massa).Adicione a canela.Acenda o fogo em temperatura média e adicione o óleo em uma frigideira grande.Com uma concha coloque a massa na frigideira formando círculos e frite dos dois lados.Sirva ainda quente.', NULL, 'Fácil', NULL);

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `email` varchar(50) COLLATE utf8_bin NOT NULL,
  `user` varchar(20) COLLATE utf8_bin NOT NULL,
  `senha` varchar(60) COLLATE utf8_bin NOT NULL,
  `confirmar_senha` varchar(60) COLLATE utf8_bin NOT NULL,
  `id_user` int(11) NOT NULL PRIMARY KEY AUTO_INCREMENT
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`email`, `user`, `senha`, `confirmar_senha`, `id_user`) VALUES
('driellymaciel@hotmail.com', 'elly', '2fb8f5604a891f03ce09961d8261698a', '2fb8f5604a891f03ce09961d8261698a', 17);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `receitas`
--
ALTER TABLE `receitas`
  ADD PRIMARY KEY (`id_rec`);

--
-- Indexes for table `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `receitas`
--
ALTER TABLE `receitas`
  MODIFY `id_rec` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
