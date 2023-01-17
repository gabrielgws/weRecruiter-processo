-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 17-Jan-2023 às 03:23
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `werecruiter`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `usuarios`
--

CREATE TABLE `usuarios` (
  `id` int(11) NOT NULL,
  `firt_name` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gender` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adress` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL,
  `birthday` varchar(220) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `usuarios`
--

INSERT INTO `usuarios` (`id`, `firt_name`, `last_name`, `gender`, `adress`, `birthday`) VALUES
(1, 'Gabriel', 'Willian', 'Masculino', 'Brazil', '19/02/1994'),
(2, 'Gabriel', 'Willian', 'Masculino', 'Brazil', '19/02/1994'),
(3, 'Maria', 'Ereni', 'Feminino', 'Argentina', '06/10/1968'),
(4, 'Izaias', 'Domingos', 'Masculino', 'Colômbia', '07/04/1969'),
(5, 'Maria', 'Ereni', 'Feminino', 'Argentina', '06/10/1968'),
(6, 'Izaias', 'Domingos', 'Masculino', 'Colômbia', '07/04/1969'),
(7, 'Jéssica', 'Stéfani', 'Feminino', 'EUA', '15/07/1992'),
(8, 'Jéssica', 'Stéfani', 'Feminino', 'EUA', '15/07/1992'),
(9, 'Leilane', 'Mara', 'Feminino', 'RJ', '04/09/2001'),
(10, 'Leilane', 'Mara', 'Feminino', 'RJ', '04/09/2001'),
(11, 'Danilo', 'Barbosa', 'Masculino', 'Itau', '12/01/1993'),
(12, 'Danilo', 'Barbosa', 'Masculino', 'Itau', '12/01/1993');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `usuarios`
--
ALTER TABLE `usuarios`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `usuarios`
--
ALTER TABLE `usuarios`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
