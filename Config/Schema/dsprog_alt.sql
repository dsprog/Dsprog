

ALTER TABLE `users`
	CHANGE COLUMN `role` `role` TINYINT(1) NULL AFTER `password`;
ALTER TABLE `users`
	ADD COLUMN `nome` VARCHAR(150) NULL DEFAULT NULL AFTER `id`,
	ADD COLUMN `email` VARCHAR(150) NULL DEFAULT NULL AFTER `nome`;
ALTER TABLE `users`
	DROP COLUMN `role`;