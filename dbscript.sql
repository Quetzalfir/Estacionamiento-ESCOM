-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema db_estacionamiento
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema db_estacionamiento
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `db_estacionamiento` DEFAULT CHARACTER SET utf8 ;
USE `db_estacionamiento` ;

-- -----------------------------------------------------
-- Table `db_estacionamiento`.`tb_cajon`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_estacionamiento`.`tb_cajon` (
  `noCajon` INT NOT NULL,
  `tipoCajon` VARCHAR(45) NULL,
  `estado` TINYINT(1) NULL,
  PRIMARY KEY (`noCajon`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_estacionamiento`.`tb_conductor`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_estacionamiento`.`tb_conductor` (
  `IDConductor` VARCHAR(45) NOT NULL,
  `nombre` VARCHAR(45) NULL,
  `apellidoPat` VARCHAR(45) NULL,
  `apellidoMat` VARCHAR(45) NULL,
  `telefono` VARCHAR(15) NULL,
  `correo` VARCHAR(45) NULL,
  `boletaRFC` VARCHAR(45) NULL,
  `tipo` VARCHAR(45) NULL,
  `password` VARCHAR(45) NOT NULL,
  `fechaRegistro` DATE NULL,
  `autorizado` TINYINT(1) NULL,
  `noCajon` INT NULL,
  PRIMARY KEY (`IDConductor`),
  INDEX `fk_tb_conductor_tb_cajon_idx` (`noCajon` ASC),
  CONSTRAINT `fk_tb_conductor_tb_cajon`
    FOREIGN KEY (`noCajon`)
    REFERENCES `db_estacionamiento`.`tb_cajon` (`noCajon`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_estacionamiento`.`tb_automovil`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_estacionamiento`.`tb_automovil` (
  `placas` VARCHAR(12) NOT NULL,
  `IDConductor` VARCHAR(45) NOT NULL,
  `tipo` VARCHAR(45) NULL,
  `modelo` VARCHAR(45) NULL,
  `compañia` VARCHAR(45) NULL,
  `colorAutomovil` VARCHAR(45) NULL,
  PRIMARY KEY (`placas`),
  INDEX `fk_tb_reporte_tb_conductor1_idx` (`IDConductor` ASC),
  CONSTRAINT `fk_tb_reporte_tb_conductor1`
    FOREIGN KEY (`IDConductor`)
    REFERENCES `db_estacionamiento`.`tb_conductor` (`IDConductor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `db_estacionamiento`.`tb_reporte`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `db_estacionamiento`.`tb_reporte` (
  `noReporte` INT NOT NULL,
  `IDConductor` VARCHAR(45) NOT NULL,
  `fechaReporte` DATE NULL,
  `tipo` VARCHAR(45) NULL,
  `descripcion` VARCHAR(100) NULL,
  `IDDenunciante` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`noReporte`, `IDConductor`),
  INDEX `fk_tb_reporte_tb_conductor2_idx` (`IDConductor` ASC),
  INDEX `fk_tb_reporte_tb_conductor3_idx` (`IDDenunciante` ASC),
  CONSTRAINT `fk_tb_reporte_tb_conductor2`
    FOREIGN KEY (`IDConductor`)
    REFERENCES `db_estacionamiento`.`tb_conductor` (`IDConductor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_tb_reporte_tb_conductor3`
    FOREIGN KEY (`IDDenunciante`)
    REFERENCES `db_estacionamiento`.`tb_conductor` (`IDConductor`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- INSERT TEST VALUES
-- -----------------------------------------------------

INSERT INTO `tb_conductor` 
        (`IDConductor`, `nombre`, `apellidoPat`, `apellidoMat`, `telefono`, `correo`, `boletaRFC`, `tipo`, `password`, `fechaRegistro`, `autorizado`, `noCajon`)
 VALUES ('admin', 'Juan', 'Parades', 'Aguilar', '558478865', 'juanpa@gmail.com', '6548646213', 'Admin', 'admin', '2018-11-26', '1', NULL)