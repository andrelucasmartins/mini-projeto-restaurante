CREATE TABLE `prjRestaurante`.`agenda` (
    `id` INT(11) NULL AUTO_INCREMENT ,
    `nome` VARCHAR(50) NOT NULL ,
    `end` VARCHAR(100) NOT NULL ,
    `tel` VARCHAR(15) NOT NULL ,
    PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;