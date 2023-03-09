-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema LojaCarros
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema LojaCarros
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `LojaCarros` DEFAULT CHARACTER SET utf8 ;
USE `LojaCarros` ;

-- -----------------------------------------------------
-- Table `LojaCarros`.`veiculo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `LojaCarros`.`veiculo` (
  `id` INT NOT NULL,
  `id_marca` INT NOT NULL,
  `modelo` VARCHAR(45) NOT NULL,
  `id_fabricante` INT NOT NULL,
  `id_tipo` INT NOT NULL,
  `ano` CHAR(4) NOT NULL,
  `id_combustivel` INT NOT NULL,
  `cor` VARCHAR(45) NOT NULL,
  `Numero_chassi` INT NOT NULL,
  `kilometragem` DOUBLE NOT NULL,
  `revisao` TINYINT NOT NULL,
  `sinistro` TINYINT NOT NULL,
  `roubo_furto` TINYINT NOT NULL,
  `aluguel` TINYINT NOT NULL,
  `venda` TINYINT NOT NULL,
  `particular` TINYINT NOT NULL,
  `observacoes` VARCHAR(100) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `LojaCarros`.`fabricante`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `LojaCarros`.`fabricante` (
  `id` INT NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `LojaCarros`.`marca`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `LojaCarros`.`marca` (
  `id` INT NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `LojaCarros`.`tipo`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `LojaCarros`.`tipo` (
  `id` INT NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `LojaCarros`.`combustivel`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `LojaCarros`.`combustivel` (
  `id` INT NOT NULL,
  `descricao` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`id`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
