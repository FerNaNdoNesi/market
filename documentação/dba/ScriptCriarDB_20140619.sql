-- MySQL Script generated by MySQL Workbench
-- Thu Jun 19 20:02:20 2014
-- Model: New Model    Version: 1.0
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- -----------------------------------------------------
-- Schema mydb
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;
USE `mydb` ;

-- -----------------------------------------------------
-- Table `mydb`.`statusUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`statusUsuario` (
  `idStatusUsuario` INT NOT NULL AUTO_INCREMENT,
  `descricao` VARCHAR(45) NULL,
  PRIMARY KEY (`idStatusUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`nivelUsuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`nivelUsuario` (
  `idNivelUsuario` INT NOT NULL AUTO_INCREMENT,
  `descricaoNivelUsuario` VARCHAR(45) NULL,
  PRIMARY KEY (`idNivelUsuario`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`usuario`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`usuario` (
  `idUsuario` INT NOT NULL AUTO_INCREMENT,
  `nome` VARCHAR(45) NULL,
  `email` VARCHAR(45) NULL,
  `telefone` VARCHAR(45) NULL,
  `senha` VARCHAR(45) NULL,
  `idStatusUsuario` INT NOT NULL,
  `idNivelUsuario` INT NOT NULL,
  PRIMARY KEY (`idUsuario`),
  INDEX `fk_usuario_statusUsuario1_idx` (`idStatusUsuario` ASC),
  INDEX `fk_usuario_nivelUsuario1_idx` (`idNivelUsuario` ASC),
  CONSTRAINT `fk_usuario_statusUsuario1`
    FOREIGN KEY (`idStatusUsuario`)
    REFERENCES `mydb`.`statusUsuario` (`idStatusUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_usuario_nivelUsuario1`
    FOREIGN KEY (`idNivelUsuario`)
    REFERENCES `mydb`.`nivelUsuario` (`idNivelUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`nivelAnuncio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`nivelAnuncio` (
  `idNivelAnuncio` INT NOT NULL AUTO_INCREMENT,
  `descricaoNivelAnuncio` VARCHAR(45) NULL,
  PRIMARY KEY (`idNivelAnuncio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`statusAnuncio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`statusAnuncio` (
  `idStatusAnuncio` INT NOT NULL AUTO_INCREMENT,
  `descricaoStatusAnuncio` VARCHAR(45) NULL,
  PRIMARY KEY (`idStatusAnuncio`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`categoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`categoria` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `tituloCategoria` VARCHAR(45) NULL,
  PRIMARY KEY (`idCategoria`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`subCategoria`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`subCategoria` (
  `idCategoria` INT NOT NULL AUTO_INCREMENT,
  `idSubCategoria` INT NOT NULL,
  `tituloSubCategoria` VARCHAR(45) NULL,
  PRIMARY KEY (`idCategoria`, `idSubCategoria`),
  INDEX `fk_subCategoria_categoria1_idx` (`idCategoria` ASC),
  CONSTRAINT `fk_subCategoria_categoria1`
    FOREIGN KEY (`idCategoria`)
    REFERENCES `mydb`.`categoria` (`idCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`tipoProduto`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`tipoProduto` (
  `idtipoProduto` INT NOT NULL,
  `descricaoTipoProduto` VARCHAR(45) NULL,
  PRIMARY KEY (`idtipoProduto`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`anuncio`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`anuncio` (
  `idAnuncio` INT NOT NULL AUTO_INCREMENT,
  `idUsuario` INT NOT NULL,
  `tituloAnuncio` VARCHAR(45) NULL,
  `descricaoAnuncio` VARCHAR(999) NULL,
  `valorAnuncio` VARCHAR(45) NULL,
  `dtInicioAnuncio` DATE NULL,
  `diasAnunciado` INT NULL,
  `idStatusAnuncio` INT NOT NULL,
  `idNivelAnuncio` INT NOT NULL,
  `idCategoria` INT NOT NULL,
  `idSubCategoria` INT NOT NULL,
  `idTipoProduto` INT NOT NULL,
  PRIMARY KEY (`idAnuncio`, `idUsuario`),
  INDEX `fk_anuncio_usuario1_idx` (`idUsuario` ASC),
  INDEX `fk_anuncio_nivelAnuncio1_idx` (`idNivelAnuncio` ASC),
  INDEX `fk_anuncio_statusAnuncio1_idx` (`idStatusAnuncio` ASC),
  INDEX `fk_anuncio_subCategoria1_idx` (`idCategoria` ASC, `idSubCategoria` ASC),
  INDEX `fk_anuncio_tipoProduto1_idx` (`idTipoProduto` ASC),
  CONSTRAINT `fk_anuncio_usuario1`
    FOREIGN KEY (`idUsuario`)
    REFERENCES `mydb`.`usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_anuncio_nivelAnuncio1`
    FOREIGN KEY (`idNivelAnuncio`)
    REFERENCES `mydb`.`nivelAnuncio` (`idNivelAnuncio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_anuncio_statusAnuncio1`
    FOREIGN KEY (`idStatusAnuncio`)
    REFERENCES `mydb`.`statusAnuncio` (`idStatusAnuncio`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_anuncio_subCategoria1`
    FOREIGN KEY (`idCategoria` , `idSubCategoria`)
    REFERENCES `mydb`.`subCategoria` (`idCategoria` , `idSubCategoria`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_anuncio_tipoProduto1`
    FOREIGN KEY (`idTipoProduto`)
    REFERENCES `mydb`.`tipoProduto` (`idtipoProduto`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`statusContato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`statusContato` (
  `idStatusContato` INT NOT NULL AUTO_INCREMENT,
  `descricaoStatusContato` VARCHAR(45) NULL,
  PRIMARY KEY (`idStatusContato`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `mydb`.`contato`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `mydb`.`contato` (
  `idContato` INT NOT NULL AUTO_INCREMENT,
  `pergunta` VARCHAR(45) NULL,
  `resposta` VARCHAR(45) NULL,
  `anuncio_idAnuncio` INT NOT NULL,
  `anuncio_idUsuario` INT NOT NULL,
  `pergunta_idUsuario` INT NOT NULL,
  `idStatusContato` INT NOT NULL,
  PRIMARY KEY (`idContato`),
  INDEX `fk_contato_anuncio1_idx` (`anuncio_idAnuncio` ASC, `anuncio_idUsuario` ASC),
  INDEX `fk_contato_statusContato1_idx` (`idStatusContato` ASC),
  INDEX `fk_contato_usuario1_idx` (`pergunta_idUsuario` ASC),
  CONSTRAINT `fk_contato_anuncio1`
    FOREIGN KEY (`anuncio_idAnuncio` , `anuncio_idUsuario`)
    REFERENCES `mydb`.`anuncio` (`idAnuncio` , `idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_contato_statusContato1`
    FOREIGN KEY (`idStatusContato`)
    REFERENCES `mydb`.`statusContato` (`idStatusContato`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_contato_usuario1`
    FOREIGN KEY (`pergunta_idUsuario`)
    REFERENCES `mydb`.`usuario` (`idUsuario`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
