-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 01-Nov-2022 às 16:11
-- Versão do servidor: 10.4.21-MariaDB
-- versão do PHP: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: `event_registration_bd`
--

-- --------------------------------------------------------

--
-- Estrutura da tabela `event_registrations`
--

CREATE TABLE `event_registrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `company_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `area_operation` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nuit` int(11) NOT NULL,
  `company_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `province` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `action_time_market` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expectations` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `terms_conditions` tinyint(1) DEFAULT NULL,
  `payment_state` tinyint(1) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `event_registrations`
--

INSERT INTO `event_registrations` (`id`, `company_name`, `area_operation`, `nuit`, `company_type`, `province`, `location`, `action_time_market`, `expectations`, `lot`, `terms_conditions`, `payment_state`, `created_at`, `updated_at`) VALUES
(1, 'Developer mp', 'IT', 10, 'tecnologia', 'Maputo', '1 de maio', '10', 'Quais são as suas expectativas para este evento?\r\nQuais são as suas expectativas para este evento?\r\nQuais são as suas expectativas para este evento?\r\nQuais são as suas expectativas para este evento?\r\nQuais são as suas expectativas para este evento?', '100', 1, 1, '2022-10-31 09:47:47', '2022-10-31 18:29:14'),
(2, 'Developer tt', '234', 12, '22', 'Maputo', '1 de maio', '10', '2342342342', '4000', 1, 0, '2022-10-31 20:00:44', '2022-10-31 20:00:44'),
(3, 'Developer hoje', '234', 12, '22', 'Maputo', '1 de maio', '10', '2342342342', '4000', 1, 0, '2022-10-31 20:01:22', '2022-10-31 20:01:22'),
(4, 'Developer mz', 'IT', 12, 'Unipessoal', 'Maputo', '1 de maio', '10', '23423423333333333333333333333333', '4500', 1, 0, '2022-10-31 20:03:15', '2022-10-31 20:03:15');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `event_registrations`
--
ALTER TABLE `event_registrations`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `event_registrations`
--
ALTER TABLE `event_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
