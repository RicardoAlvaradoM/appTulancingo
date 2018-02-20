-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema tramites
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema tramites
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `tramites` DEFAULT CHARACTER SET utf8 COLLATE utf8_spanish_ci ;
USE `tramites` ;

-- -----------------------------------------------------
-- Table `tramites`.`users`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tramites`.`users` (
  `iduser` INT NOT NULL AUTO_INCREMENT,
  `full_name` VARCHAR(100) NOT NULL,
  `user_name` VARCHAR(80) NOT NULL,
  `hash` VARCHAR(30) NOT NULL,
  PRIMARY KEY (`iduser`),
  UNIQUE INDEX `iduser_UNIQUE` (`iduser` ASC),
  UNIQUE INDEX `user_name_UNIQUE` (`user_name` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `tramites`.`servicios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `tramites`.`servicios` (
  `idservicio` INT NOT NULL AUTO_INCREMENT,
  `name` VARCHAR(100) NOT NULL,
  `description` VARCHAR(200) NOT NULL,
  `unit_admin` VARCHAR(100) NOT NULL,
  `price` DECIMAL(8,2) NOT NULL,
  `requisito` VARCHAR(200) NOT NULL,
  `idUser` INT NOT NULL,
  PRIMARY KEY (`idservicio`),
  UNIQUE INDEX `idservicio_UNIQUE` (`idservicio` ASC),
  INDEX `idUser_idx` (`idUser` ASC),
  CONSTRAINT `idUser`
    FOREIGN KEY (`idUser`)
    REFERENCES `tramites`.`users` (`iduser`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

INSERT INTO `tramites`.`users` (`full_name`, `user_name`, `hash`) VALUES ('Ricardo ', 'ddd',md5('12344'));

SELECT * FROM tramites.users;
