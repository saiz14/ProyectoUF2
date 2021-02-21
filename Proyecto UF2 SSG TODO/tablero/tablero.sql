CREATE TABLE IF NOT EXISTS `roles` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`role` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `tasks` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`description` varchar(255) NOT NULL,
	`user` INT NOT NULL,
	`start_date` DATE NOT NULL,
	`finish_date` DATE NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `users` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`email` varchar(255) NOT NULL UNIQUE,
	`name` varchar(255) NOT NULL,
	`subname` varchar(255) NOT NULL,
	`password` varchar(255) NOT NULL,
	`role` INT NOT NULL,
	PRIMARY KEY (`id`)
);

CREATE TABLE IF NOT EXISTS `task_items` (
	`id` INT NOT NULL AUTO_INCREMENT,
	`taskeId` INT NOT NULL,
	`completed` BOOLEAN NOT NULL DEFAULT '0',
	`itemName` varchar(255) NOT NULL UNIQUE,
	PRIMARY KEY (`id`)
);

ALTER TABLE `tasks` ADD CONSTRAINT `tasks_fk0` FOREIGN KEY (`user`) REFERENCES `users`(`id`);

ALTER TABLE `users` ADD CONSTRAINT `users_fk0` FOREIGN KEY (`role`) REFERENCES `roles`(`id`);

ALTER TABLE `task_items` ADD CONSTRAINT `task_items_fk0` FOREIGN KEY (`taskeId`) REFERENCES `tasks`(`id`);


