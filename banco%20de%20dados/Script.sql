-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema bd_combustivel
-- -----------------------------------------------------
DROP SCHEMA IF EXISTS `bd_combustivel` ;

-- -----------------------------------------------------
-- Schema bd_combustivel
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `bd_combustivel` DEFAULT CHARACTER SET utf8 ;
USE `bd_combustivel` ;

-- -----------------------------------------------------
-- Table `bd_combustivel`.`tb_perfil`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_combustivel`.`tb_perfil` ;

CREATE TABLE IF NOT EXISTS `bd_combustivel`.`tb_perfil` (
  `idt_perfil` INT NOT NULL AUTO_INCREMENT,
  `nme_perfil` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idt_perfil`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_combustivel`.`tb_usuario`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_combustivel`.`tb_usuario` ;

CREATE TABLE IF NOT EXISTS `bd_combustivel`.`tb_usuario` (
  `idt_usuario` INT NOT NULL AUTO_INCREMENT,
  `cpf_usuario` VARCHAR(45) NULL,
  `nme_usuario` VARCHAR(45) NOT NULL,
  `psw_usuario` VARCHAR(45) NOT NULL,
  `email_usuario` VARCHAR(45) NOT NULL,
  `cod_perfil` INT NOT NULL,
  `cnpj_usuario` VARCHAR(45) NULL,
  PRIMARY KEY (`idt_usuario`))
ENGINE = InnoDB;

CREATE INDEX `fk_tb_usuario_tb_perfil1_idx` ON `bd_combustivel`.`tb_usuario` (`cod_perfil` ASC);

CREATE UNIQUE INDEX `cnpj_usuario_UNIQUE` ON `bd_combustivel`.`tb_usuario` (`cnpj_usuario` ASC);

CREATE UNIQUE INDEX `cpf_usuario_UNIQUE` ON `bd_combustivel`.`tb_usuario` (`cpf_usuario` ASC);


-- -----------------------------------------------------
-- Table `bd_combustivel`.`tb_posto`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_combustivel`.`tb_posto` ;

CREATE TABLE IF NOT EXISTS `bd_combustivel`.`tb_posto` (
  `idt_posto` INT NOT NULL,
  `nme_posto` VARCHAR(45) NOT NULL,
  `lat_posto` DECIMAL(10,0) NOT NULL,
  `lon_posto` DECIMAL(10,0) NOT NULL,
  `cod_usuario` INT NOT NULL,
  `endereco_posto` VARCHAR(80) NULL,
  `ativo_posto` TINYINT(1) NOT NULL,
  `desativo_posto` TINYINT(1) NOT NULL,
  `dta_modificacao_posto` DATE NOT NULL,
  `dta_cricao_posto` DATE NOT NULL,
  PRIMARY KEY (`idt_posto`))
ENGINE = InnoDB;

CREATE INDEX `fk_tb_posto_tb_usuario1_idx` ON `bd_combustivel`.`tb_posto` (`cod_usuario` ASC);


-- -----------------------------------------------------
-- Table `bd_combustivel`.`tb_combustivel`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_combustivel`.`tb_combustivel` ;

CREATE TABLE IF NOT EXISTS `bd_combustivel`.`tb_combustivel` (
  `idt_combustivel` INT NOT NULL AUTO_INCREMENT,
  `nme_tipo_combustivel` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idt_combustivel`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `bd_combustivel`.`ta_valor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_combustivel`.`ta_valor` ;

CREATE TABLE IF NOT EXISTS `bd_combustivel`.`ta_valor` (
  `idt_valor` INT NOT NULL AUTO_INCREMENT,
  `var_valor` DECIMAL NOT NULL,
  `cod_combustivel` INT NOT NULL,
  `cod_posto` INT NOT NULL,
  PRIMARY KEY (`idt_valor`))
ENGINE = InnoDB;

CREATE INDEX `fk_ta_valor_tb_combustivel1_idx` ON `bd_combustivel`.`ta_valor` (`cod_combustivel` ASC);

CREATE INDEX `fk_ta_valor_tb_posto1_idx` ON `bd_combustivel`.`ta_valor` (`cod_posto` ASC);


-- -----------------------------------------------------
-- Table `bd_combustivel`.`ta_avaliacao`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_combustivel`.`ta_avaliacao` ;

CREATE TABLE IF NOT EXISTS `bd_combustivel`.`ta_avaliacao` (
  `idt_avaliacao` INT NOT NULL AUTO_INCREMENT,
  `tipo_avaliacao` TINYINT(1) NOT NULL,
  `cod_usuario` INT NOT NULL,
  `cod_posto` INT NOT NULL,
  `dta_avaliacao` DATE NOT NULL,
  PRIMARY KEY (`idt_avaliacao`))
ENGINE = InnoDB;

CREATE INDEX `fk_ta_avaliacao_tb_usuario1_idx` ON `bd_combustivel`.`ta_avaliacao` (`cod_usuario` ASC);

CREATE INDEX `fk_ta_avaliacao_tb_posto1_idx` ON `bd_combustivel`.`ta_avaliacao` (`cod_posto` ASC);


-- -----------------------------------------------------
-- Table `bd_combustivel`.`tb_promocao`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `bd_combustivel`.`tb_promocao` ;

CREATE TABLE IF NOT EXISTS `bd_combustivel`.`tb_promocao` (
  `idt_promocao` INT NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idt_promocao`))
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
