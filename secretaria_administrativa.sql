-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema secretaria_administrativa
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema secretaria_administrativa
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `secretaria_administrativa` ;
USE `secretaria_administrativa` ;

-- -----------------------------------------------------
-- Table `secretaria_administrativa`.`Roles`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `secretaria_administrativa`.`Roles` (
  `idRoles` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idRoles`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DELAY_KEY_WRITE = 1;


-- -----------------------------------------------------
-- Table `secretaria_administrativa`.`usuarios`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `secretaria_administrativa`.`usuarios` (
  `idusuarios` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  `apellido` VARCHAR(45) NOT NULL,
  `cedula` VARCHAR(45) NOT NULL,
  `direccion` VARCHAR(45) NOT NULL,
  `correo_electronico` VARCHAR(45) NOT NULL,
  `password` VARCHAR(45) NOT NULL,
  `telefono` INT NOT NULL,
  `idRoles` INT NULL,
  PRIMARY KEY (`idusuarios`),
  INDEX `idRoles_idx` (`idRoles` ASC),
  CONSTRAINT `idRoles`
    FOREIGN KEY (`idRoles`)
    REFERENCES `secretaria_administrativa`.`Roles` (`idRoles`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `secretaria_administrativa`.`solicitud_reporte`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `secretaria_administrativa`.`solicitud_reporte` (
  `idformulario_reporte` INT NOT NULL AUTO_INCREMENT,
  `nombre_db` VARCHAR(45) NOT NULL,
  `apellido_db` VARCHAR(45) NOT NULL,
  `cedula_db` VARCHAR(45) NOT NULL,
  `correo_electronico` VARCHAR(45) NOT NULL,
  `date_reporte` DATE NOT NULL,
  `descripcion_dano` VARCHAR(45) NOT NULL,
  `tipo_dano` VARCHAR(45) NOT NULL,
  `idusuarios` INT NULL,
  `ubi_edificio` VARCHAR(45) NOT NULL,
  `ubi_planta` VARCHAR(45) NOT NULL,
  `ubi_area` VARCHAR(45) NOT NULL,
  `ubi_numsalon` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idformulario_reporte`),
  INDEX `idusuarios_idx` (`idusuarios` ASC),
  CONSTRAINT `idusuarios`
    FOREIGN KEY (`idusuarios`)
    REFERENCES `secretaria_administrativa`.`usuarios` (`idusuarios`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `secretaria_administrativa`.`Materiales`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `secretaria_administrativa`.`Materiales` (
  `idMateriales` INT NOT NULL AUTO_INCREMENT,
  `nombre` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idMateriales`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DELAY_KEY_WRITE = 1
PACK_KEYS = DEFAULT
ROW_FORMAT = DYNAMIC;


-- -----------------------------------------------------
-- Table `secretaria_administrativa`.`formulario_mantenimiento`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `secretaria_administrativa`.`formulario_mantenimiento` (
  `idformulario_mantenimiento` INT NOT NULL AUTO_INCREMENT,
  `date_inspec` DATE NOT NULL,
  `nombre_inspec` VARCHAR(45) NOT NULL,
  `observacion_efect` VARCHAR(45) NULL,
  `tecnicofi` VARCHAR(45) NOT NULL,
  `tecnicose` VARCHAR(45) NULL,
  `nombre_inspector` VARCHAR(45) NOT NULL COMMENT 'el inspector bro',
  `idMateriales` INT NULL,
  `idformulario_reporte` INT NULL,
  PRIMARY KEY (`idformulario_mantenimiento`),
  INDEX `idformulario_reporte_idx` (`idformulario_reporte` ASC),
  INDEX `idMateriales_idx` (`idMateriales` ASC),
  CONSTRAINT `idformulario_reporte`
    FOREIGN KEY (`idformulario_reporte`)
    REFERENCES `secretaria_administrativa`.`solicitud_reporte` (`idformulario_reporte`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `idMateriales`
    FOREIGN KEY (`idMateriales`)
    REFERENCES `secretaria_administrativa`.`Materiales` (`idMateriales`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `secretaria_administrativa`.`Permisos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `secretaria_administrativa`.`Permisos` (
  `idPermisos` INT NOT NULL AUTO_INCREMENT,
  `descripcion` VARCHAR(45) NOT NULL,
  `accion` VARCHAR(45) NULL,
  `constructor` VARCHAR(45) NULL,
  PRIMARY KEY (`idPermisos`))
ENGINE = InnoDB
AUTO_INCREMENT = 1
DELAY_KEY_WRITE = 1;


-- -----------------------------------------------------
-- Table `secretaria_administrativa`.`RolPermiso`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `secretaria_administrativa`.`RolPermiso` (
  `Roles_idRoles` INT NULL,
  `Permisos_idPermisos` INT NULL,
  `idRolPermiso` INT NOT NULL,
  PRIMARY KEY (`idRolPermiso`),
  INDEX `fk_Roles_has_Permisos_Roles1_idx` (`Roles_idRoles` ASC),
  INDEX `fk_Roles_has_Permisos_Permisos1_idx` (`Permisos_idPermisos` ASC),
  CONSTRAINT `fk_Roles_has_Permisos_Roles1`
    FOREIGN KEY (`Roles_idRoles`)
    REFERENCES `secretaria_administrativa`.`Roles` (`idRoles`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_Roles_has_Permisos_Permisos1`
    FOREIGN KEY (`Permisos_idPermisos`)
    REFERENCES `secretaria_administrativa`.`Permisos` (`idPermisos`)
    ON DELETE NO ACTION
    ON UPDATE CASCADE)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `secretaria_administrativa`.`materiales_requeridos`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `secretaria_administrativa`.`materiales_requeridos` (
  `idmateriales_requeridos` INT NOT NULL AUTO_INCREMENT,
  `idMateriales` INT NULL,
  `idFormulario_Mantenimiento` INT NULL,
  PRIMARY KEY (`idmateriales_requeridos`),
  INDEX `fk_materiales_requeridos_1_idx` (`idMateriales` ASC),
  INDEX `fk_materiales_requeridos_2_idx` (`idFormulario_Mantenimiento` ASC),
  CONSTRAINT `fk_materiales_requeridos_1`
    FOREIGN KEY (`idMateriales`)
    REFERENCES `secretaria_administrativa`.`Materiales` (`idMateriales`)
    ON DELETE CASCADE
    ON UPDATE CASCADE,
  CONSTRAINT `fk_materiales_requeridos_2`
    FOREIGN KEY (`idFormulario_Mantenimiento`)
    REFERENCES `secretaria_administrativa`.`formulario_mantenimiento` (`idformulario_mantenimiento`)
    ON DELETE CASCADE
    ON UPDATE CASCADE)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;

-- -----------------------------------------------------
-- Data for table `secretaria_administrativa`.`Roles`
-- -----------------------------------------------------
START TRANSACTION;
USE `secretaria_administrativa`;
INSERT INTO `secretaria_administrativa`.`Roles` (`idRoles`, `nombre`) VALUES (default, 'secretaria administrativa');
INSERT INTO `secretaria_administrativa`.`Roles` (`idRoles`, `nombre`) VALUES (default, 'secretaria');
INSERT INTO `secretaria_administrativa`.`Roles` (`idRoles`, `nombre`) VALUES (default, 'jefe de mantenimiento');
INSERT INTO `secretaria_administrativa`.`Roles` (`idRoles`, `nombre`) VALUES (default, 'invitado');

COMMIT;


-- -----------------------------------------------------
-- Data for table `secretaria_administrativa`.`solicitud_reporte`
-- -----------------------------------------------------
START TRANSACTION;
USE `secretaria_administrativa`;
INSERT INTO `secretaria_administrativa`.`solicitud_reporte` (`idformulario_reporte`, `nombre_db`, `apellido_db`, `cedula_db`, `correo_electronico`, `date_reporte`, `descripcion_dano`, `tipo_dano`, `idusuarios`, `ubi_edificio`, `ubi_planta`, `ubi_area`, `ubi_numsalon`) VALUES (DEFAULT, 'Félix', 'Saldaña', '8-940-610', 'felix.saldaña@utp.ac.pa', '2019-12-15', 'La fuente no deja de botar agua.', 'Plomeria', 4, 'Edificio 3', 'Piso 1', 'Laboratorio', '');

COMMIT;

