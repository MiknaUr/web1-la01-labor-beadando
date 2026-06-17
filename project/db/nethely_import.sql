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

CREATE TABLE IF NOT EXISTS `kepek` (
    `id` INT UNSIGNED NOT NULL AUTO_INCREMENT,
    `fajlnev` VARCHAR(255) NOT NULL,
    `eredeti_nev` VARCHAR(255) NOT NULL,
    `feltolto` VARCHAR(32) NOT NULL,
    `feltoltve` DATETIME NOT NULL DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (`id`)
) ENGINE = InnoDB
  DEFAULT CHARSET = utf8mb4 COLLATE = utf8mb4_hungarian_ci;
