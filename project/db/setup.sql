CREATE DATABASE IF NOT EXISTS `helios_mozi`
    CHARACTER SET utf8mb4 COLLATE utf8mb4_hungarian_ci;

USE `helios_mozi`;

CREATE TABLE IF NOT EXISTS `felhasznalok` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `csaladi_nev` VARCHAR(45) NOT NULL,
    `uto_nev` VARCHAR(45) NOT NULL,
    `bejelentkezes` VARCHAR(32) NOT NULL,
    `jelszo` CHAR(40) NOT NULL,
    PRIMARY KEY (`id`),
    UNIQUE KEY `bejelentkezes` (`bejelentkezes`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_hungarian_ci;

INSERT INTO `felhasznalok` (`csaladi_nev`, `uto_nev`, `bejelentkezes`, `jelszo`) VALUES
    ('Teszt', 'Elek', 'teszt', sha1('teszt'));
