SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";
CREATE DATABASE IF NOT EXISTS `test_lexik` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `test_lexik`;

CREATE TABLE `group` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `group` (`id`, `nom`, `updated_at`, `created_at`) VALUES
(1, 'A', '2017-12-22 09:18:31', '0000-00-00 00:00:00'),
(2, 'B', '2017-12-22 09:18:38', '0000-00-00 00:00:00'),
(3, 'C', '2017-12-22 09:18:40', '0000-00-00 00:00:00');

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nom` varchar(255) NOT NULL,
  `prenom` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `birth_date` datetime NOT NULL,
  `group_id` int(11) NOT NULL,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

INSERT INTO `user` (`id`, `nom`, `prenom`, `email`, `birth_date`, `group_id`, `updated_at`, `created_at`) VALUES
(1, 'Jackson', 'Mickael', 'mj@test.fr', '1985-07-17 00:00:00', 1, '2017-12-22 08:19:58', '2017-12-22 08:19:58'),
(2, 'Hendrix', 'Jimmy', 'jh@test.fr', '1979-02-21 00:00:00', 1, '2017-12-22 08:21:03', '2017-12-22 08:21:03'),
(3, 'Francois', 'Claude', 'fc@test.fr', '1963-02-21 00:00:00', 2, '2017-12-22 08:21:48', '2017-12-22 08:21:48'),
(4, 'Marley', 'Bob', 'mb@test.fr', '1981-02-21 00:00:00', 3, '2017-12-22 08:22:21', '2017-12-22 08:22:21'),
(5, 'Morisson', 'Jim', 'jm@test.fr', '1980-02-21 00:00:00', 3, '2017-12-22 08:22:50', '2017-12-22 08:22:50'),
(6, 'Brassens', 'Georges', 'gb@test.fr', '1965-02-21 00:00:00', 2, '2017-12-22 08:24:38', '2017-12-22 08:24:38');


ALTER TABLE `group`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_group_id_fk` (`group_id`);


ALTER TABLE `group`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

ALTER TABLE `user`
  ADD CONSTRAINT `user_group_id_fk` FOREIGN KEY (`group_id`) REFERENCES `group` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
