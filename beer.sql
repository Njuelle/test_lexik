-- Import this in your database for testing beers routes, controller and view

CREATE TABLE `beer` ( `id` INT NOT NULL AUTO_INCREMENT , `name` VARCHAR(45) NOT NULL , PRIMARY KEY (`id`)) ENGINE = InnoDB
INSERT INTO `beer` (`id`, `name`) VALUES (NULL, 'Karmeliet Triple');
INSERT INTO `beer` (`id`, `name`) VALUES (NULL, 'Punk IPA');
INSERT INTO `beer` (`id`, `name`) VALUES (NULL, 'Delirium Tremens');