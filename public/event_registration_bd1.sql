-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Tempo de geração: 01-Nov-2022 às 16:17
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
-- Estrutura da tabela `event_companies`
--

CREATE TABLE `event_companies` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `c_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `c_cell` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_telefone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_contact_nuit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `c_logo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_registration_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `event_companies`
--

INSERT INTO `event_companies` (`id`, `c_email`, `c_cell`, `c_telefone`, `c_whatsapp`, `c_contact_nuit`, `c_logo`, `event_registration_id`, `created_at`, `updated_at`) VALUES
(1, 'transcom@gmail.com', '23860470923', '844552968', '844552968', '234234', '10', 1, '2022-10-31 09:47:47', '2022-10-31 09:47:47'),
(2, 'samuelmaculuve8@gmail.com', '23860470923', '844552968', '2342342', '2342342', '10', 3, '2022-10-31 20:01:24', '2022-10-31 20:01:24'),
(3, 'samuelmaculuve8@gmail.com', '23860470923', '844552968', '23423234', '234234', '10', 4, '2022-10-31 20:03:17', '2022-10-31 20:03:17');

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

-- --------------------------------------------------------

--
-- Estrutura da tabela `event_representatives`
--

CREATE TABLE `event_representatives` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_cell` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `r_whatsapp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `event_registration_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `event_representatives`
--

INSERT INTO `event_representatives` (`id`, `full_name`, `role`, `r_email`, `r_cell`, `r_whatsapp`, `event_registration_id`, `created_at`, `updated_at`) VALUES
(1, 'https://magecomp.com/blog/crud-operation-laravel-8/', 'Eng', 'samuelmaculuve8@gmail.com', '8487524689234', '234234234', 1, '2022-10-31 09:47:47', '2022-10-31 09:47:47'),
(2, 'jessica manjate', '23423', 'samuelmaculuve8@gmail.com', '8487524689234', '2222323', 3, '2022-10-31 20:01:23', '2022-10-31 20:01:23'),
(3, 'jessica manjate', 'Eng', 'samuelmaculuve8@gmail.com', '8487524689234', '23423423423', 4, '2022-10-31 20:03:17', '2022-10-31 20:03:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_10_29_101229_create_event_registrations_table', 1),
(6, '2022_10_29_103239_create_social_networks_table', 1),
(7, '2022_10_29_103350_create_event_representatives_table', 1),
(8, '2022_10_29_103619_create_event_companies_table', 1),
(9, '2022_10_30_181203_create_permission_tables', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1);

-- --------------------------------------------------------

--
-- Estrutura da tabela `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `permissions`
--

INSERT INTO `permissions` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'role-list', 'web', '2022-10-31 09:35:16', '2022-10-31 09:35:16'),
(2, 'role-create', 'web', '2022-10-31 09:35:16', '2022-10-31 09:35:16'),
(3, 'role-edit', 'web', '2022-10-31 09:35:17', '2022-10-31 09:35:17'),
(4, 'role-delete', 'web', '2022-10-31 09:35:17', '2022-10-31 09:35:17');

-- --------------------------------------------------------

--
-- Estrutura da tabela `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'web', '2022-10-31 09:35:09', '2022-10-31 09:35:09');

-- --------------------------------------------------------

--
-- Estrutura da tabela `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Estrutura da tabela `social_networks`
--

CREATE TABLE `social_networks` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `social_instagram` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_facebook` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_linkedin` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_website` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_tiktik` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_outra` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event_registration_id` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `social_networks`
--

INSERT INTO `social_networks` (`id`, `social_instagram`, `social_facebook`, `social_linkedin`, `social_website`, `social_tiktik`, `social_outra`, `event_registration_id`, `created_at`, `updated_at`) VALUES
(1, 'https://magecomp.com/blog/crud-operation-laravel-8/', 'https://magecomp.com/blog/crud-operation-laravel-8/', 'https://magecomp.com/blog/crud-operation-laravel-8/', 'https://magecomp.com/blog/crud-operation-laravel-8/', 'https://magecomp.com/blog/crud-operation-laravel-8/', 'https://magecomp.com/blog/crud-operation-laravel-8/', 1, '2022-10-31 09:47:47', '2022-10-31 09:47:47'),
(2, NULL, NULL, NULL, NULL, NULL, NULL, 2, '2022-10-31 20:00:46', '2022-10-31 20:00:46'),
(3, NULL, NULL, NULL, NULL, NULL, NULL, 3, '2022-10-31 20:01:23', '2022-10-31 20:01:23'),
(4, 'https://magecomp.com/blog/crud-operation-laravel-8/', NULL, NULL, NULL, NULL, NULL, 4, '2022-10-31 20:03:16', '2022-10-31 20:03:16');

-- --------------------------------------------------------

--
-- Estrutura da tabela `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Extraindo dados da tabela `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Samuel Maculuve', 'samuelmaculuve8@gmail.com', NULL, '$2y$10$A8m4q2R5VznRUHM94m3/ae0wN2V5SG63WoDAmM9Z8b7TMvjXMSRy.', NULL, '2022-10-31 09:35:09', '2022-10-31 09:35:09');

--
-- Índices para tabelas despejadas
--

--
-- Índices para tabela `event_companies`
--
ALTER TABLE `event_companies`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_companies_event_registration_id_foreign` (`event_registration_id`);

--
-- Índices para tabela `event_registrations`
--
ALTER TABLE `event_registrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `event_representatives`
--
ALTER TABLE `event_representatives`
  ADD PRIMARY KEY (`id`),
  ADD KEY `event_representatives_event_registration_id_foreign` (`event_registration_id`);

--
-- Índices para tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Índices para tabela `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Índices para tabela `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Índices para tabela `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Índices para tabela `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Índices para tabela `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `permissions_name_guard_name_unique` (`name`,`guard_name`);

--
-- Índices para tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Índices para tabela `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roles_name_guard_name_unique` (`name`,`guard_name`);

--
-- Índices para tabela `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Índices para tabela `social_networks`
--
ALTER TABLE `social_networks`
  ADD PRIMARY KEY (`id`),
  ADD KEY `social_networks_event_registration_id_foreign` (`event_registration_id`);

--
-- Índices para tabela `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT de tabelas despejadas
--

--
-- AUTO_INCREMENT de tabela `event_companies`
--
ALTER TABLE `event_companies`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `event_registrations`
--
ALTER TABLE `event_registrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `event_representatives`
--
ALTER TABLE `event_representatives`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT de tabela `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT de tabela `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de tabela `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT de tabela `social_networks`
--
ALTER TABLE `social_networks`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de tabela `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Restrições para despejos de tabelas
--

--
-- Limitadores para a tabela `event_companies`
--
ALTER TABLE `event_companies`
  ADD CONSTRAINT `event_companies_event_registration_id_foreign` FOREIGN KEY (`event_registration_id`) REFERENCES `event_registrations` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `event_representatives`
--
ALTER TABLE `event_representatives`
  ADD CONSTRAINT `event_representatives_event_registration_id_foreign` FOREIGN KEY (`event_registration_id`) REFERENCES `event_registrations` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Limitadores para a tabela `social_networks`
--
ALTER TABLE `social_networks`
  ADD CONSTRAINT `social_networks_event_registration_id_foreign` FOREIGN KEY (`event_registration_id`) REFERENCES `event_registrations` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
