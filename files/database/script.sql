-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET utf8 ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`AUTOMOVIL`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`AUTOMOVIL` (
  `placas` VARCHAR(10) NOT NULL,
  `Automovilcol` VARCHAR(45) NULL,
  `marca` VARCHAR(45) NULL,
  `modelo` VARCHAR(45) NULL,
  PRIMARY KEY (`placas`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`USUARIO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`USUARIO` (
  `CURP` VARCHAR(20) NOT NULL,
  `nombre` VARCHAR(45) NOT NULL,
  `apellidoPat` VARCHAR(45) NOT NULL,
  `apellidoMat` VARCHAR(45) NOT NULL,
  `correo` VARCHAR(45) NULL,
  `telefono` VARCHAR(45) NOT NULL,
  `fechaRegistro` DATE NOT NULL,
  `rfc` VARCHAR(45) NULL,
  `noBoleta` VARCHAR(45) NULL,
  `tipoUsuario` VARCHAR(45) NOT NULL,
  `AUTOMOVIL1` VARCHAR(10) NOT NULL,
  `AUTOMOVIL2` VARCHAR(10) NOT NULL,
  PRIMARY KEY (`CURP`),
  INDEX `fk_USUARIO_AUTOMOVIL1_idx` (`AUTOMOVIL1` ASC),
  INDEX `fk_USUARIO_AUTOMOVIL2_idx` (`AUTOMOVIL2` ASC),
  CONSTRAINT `fk_USUARIO_AUTOMOVIL1`
    FOREIGN KEY (`AUTOMOVIL1`)
    REFERENCES `mydb`.`AUTOMOVIL` (`placas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_USUARIO_AUTOMOVIL2`
    FOREIGN KEY (`AUTOMOVIL2`)
    REFERENCES `mydb`.`AUTOMOVIL` (`placas`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`CAJON`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`CAJON` (
  `idCAJON` INT NOT NULL,
  `ubicacion` VARCHAR(45) NULL,
  `esReservado` TINYINT NOT NULL,
  `descripcion` VARCHAR(45) NULL,
  PRIMARY KEY (`idCAJON`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`USUARIO_DISCAPACITADO`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`USUARIO_DISCAPACITADO` (
  `CAJON_idCAJON` INT NOT NULL,
  `tiposDiscapacidad` VARCHAR(20) NOT NULL,
  `prioridad` INT NOT NULL,
  `datosUsrDisc` VARCHAR(20) NOT NULL,
  PRIMARY KEY (`CAJON_idCAJON`, `datosUsrDisc`),
  INDEX `fk_USUARIO_DISCAPACITADO_CAJON_idx` (`CAJON_idCAJON` ASC),
  INDEX `fk_USUARIO_DISCAPACITADO_USUARIO1_idx` (`datosUsrDisc` ASC),
  CONSTRAINT `fk_USUARIO_DISCAPACITADO_CAJON`
    FOREIGN KEY (`CAJON_idCAJON`)
    REFERENCES `mydb`.`CAJON` (`idCAJON`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_USUARIO_DISCAPACITADO_USUARIO1`
    FOREIGN KEY (`datosUsrDisc`)
    REFERENCES `mydb`.`USUARIO` (`CURP`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`ADMIN`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`ADMIN` (
  `claveAdmin` VARCHAR(10) NOT NULL,
  `datosUsuario` VARCHAR(20) NOT NULL,
  `turno` CHAR(1) NOT NULL,
  `ubicacionAdmin` VARCHAR(45) NULL,
  PRIMARY KEY (`claveAdmin`),
  INDEX `fk_ADMIN_USUARIO1_idx` (`datosUsuario` ASC),
  CONSTRAINT `fk_ADMIN_USUARIO1`
    FOREIGN KEY (`datosUsuario`)
    REFERENCES `mydb`.`USUARIO` (`CURP`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`VIGILANTE`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`VIGILANTE` (
  `USUARIO_CURP` VARCHAR(20) NOT NULL,
  `turno` CHAR(1) NOT NULL,
  INDEX `fk_VIGILANTE_USUARIO1_idx` (`USUARIO_CURP` ASC),
  PRIMARY KEY (`USUARIO_CURP`),
  CONSTRAINT `fk_VIGILANTE_USUARIO1`
    FOREIGN KEY (`USUARIO_CURP`)
    REFERENCES `mydb`.`USUARIO` (`CURP`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`REPORTE_SANCION`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`REPORTE_SANCION` (
  `claveSansion` INT NOT NULL AUTO_INCREMENT,
  `USUARIO_CURP` VARCHAR(20) NOT NULL,
  `ADMIN_claveAdmin` VARCHAR(10) NOT NULL,
  `VIGILANTE_USUARIO_CURP` VARCHAR(20) NOT NULL,
  `fecha` DATE NOT NULL,
  `tipo` VARCHAR(45) NULL,
  INDEX `fk_REPORTE_SANCION_USUARIO1_idx` (`USUARIO_CURP` ASC),
  INDEX `fk_REPORTE_SANCION_ADMIN1_idx` (`ADMIN_claveAdmin` ASC),
  INDEX `fk_REPORTE_SANCION_VIGILANTE1_idx` (`VIGILANTE_USUARIO_CURP` ASC),
  PRIMARY KEY (`claveSansion`),
  CONSTRAINT `fk_REPORTE_SANCION_USUARIO1`
    FOREIGN KEY (`USUARIO_CURP`)
    REFERENCES `mydb`.`USUARIO` (`CURP`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_REPORTE_SANCION_ADMIN1`
    FOREIGN KEY (`ADMIN_claveAdmin`)
    REFERENCES `mydb`.`ADMIN` (`claveAdmin`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_REPORTE_SANCION_VIGILANTE1`
    FOREIGN KEY (`VIGILANTE_USUARIO_CURP`)
    REFERENCES `mydb`.`VIGILANTE` (`USUARIO_CURP`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
