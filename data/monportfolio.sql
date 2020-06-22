-- MySQL Workbench Forward Engineering

SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='ONLY_FULL_GROUP_BY,STRICT_TRANS_TABLES,NO_ZERO_IN_DATE,NO_ZERO_DATE,ERROR_FOR_DIVISION_BY_ZERO,NO_ENGINE_SUBSTITUTION';

-- -----------------------------------------------------
-- Schema portfolio
-- -----------------------------------------------------

-- -----------------------------------------------------
-- Schema portfolio
-- -----------------------------------------------------
CREATE SCHEMA IF NOT EXISTS `portfolio` DEFAULT CHARACTER SET utf8 ;
USE `portfolio` ;

-- -----------------------------------------------------
-- Table `portfolio`.`Links`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `portfolio`.`Links` (
  `idLiens` INT UNSIGNED NOT NULL AUTO_INCREMENT,
  `URL` VARCHAR(255) NOT NULL,
  `description` VARCHAR(255) NULL,
  `categorie` VARCHAR(255) NULL,
  `nomSite` VARCHAR(45) NOT NULL,
  PRIMARY KEY (`idLiens`))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `portfolio`.`Utilisateurs`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `portfolio`.`Utilisateurs` (
  `idUtilisateurs` TINYINT(3) UNSIGNED NOT NULL,
  `login` VARCHAR(45) NOT NULL,
  `motDePasse` VARCHAR(255) NOT NULL,
  `email` VARCHAR(255) NOT NULL,
  PRIMARY KEY (`idUtilisateurs`),
  UNIQUE INDEX `email_UNIQUE` (`email` ASC))
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `portfolio`.`galerie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `portfolio`.`galerie` (
  `idgalerie` TINYINT(3) UNSIGNED NOT NULL,
  `urlTravail` VARCHAR(255) NULL,
  `urlIllustration` VARCHAR(255) NOT NULL,
  `dateTravail` DATE NOT NULL,
  `titreTravail` VARCHAR(45) NOT NULL,
  `statutTravail` VARCHAR(45) NULL,
  `admin-idUtilisateurs` TINYINT(3) UNSIGNED NOT NULL,
  PRIMARY KEY (`idgalerie`),
  INDEX `fk_galerie_Utilisateurs1_idx` (`admin-idUtilisateurs` ASC),
  CONSTRAINT `fk_galerie_Utilisateurs1`
    FOREIGN KEY (`admin-idUtilisateurs`)
    REFERENCES `portfolio`.`Utilisateurs` (`idUtilisateurs`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `portfolio`.`Categorie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `portfolio`.`Categorie` (
  `idCategorie` TINYINT(3) UNSIGNED NOT NULL,
  `intitule` VARCHAR(45) NOT NULL,
  `parentId` TINYINT(3) UNSIGNED NULL,
  PRIMARY KEY (`idCategorie`),
  INDEX `fk_Categorie_Categorie1_idx` (`parentId` ASC),
  CONSTRAINT `fk_Categorie_Categorie1`
    FOREIGN KEY (`parentId`)
    REFERENCES `portfolio`.`Categorie` (`idCategorie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `portfolio`.`Categorie_has_galerie`
-- -----------------------------------------------------
CREATE TABLE IF NOT EXISTS `portfolio`.`Categorie_has_galerie` (
  `Categorie_idCategorie` TINYINT(3) UNSIGNED NOT NULL,
  `galerie_idgalerie` TINYINT(3) UNSIGNED NOT NULL,
  `idGalerieCategorie` SMALLINT(5) UNSIGNED NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idGalerieCategorie`),
  INDEX `fk_Categorie_has_galerie_galerie1_idx` (`galerie_idgalerie` ASC),
  INDEX `fk_Categorie_has_galerie_Categorie_idx` (`Categorie_idCategorie` ASC),
  CONSTRAINT `fk_Categorie_has_galerie_Categorie`
    FOREIGN KEY (`Categorie_idCategorie`)
    REFERENCES `portfolio`.`Categorie` (`idCategorie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_Categorie_has_galerie_galerie1`
    FOREIGN KEY (`galerie_idgalerie`)
    REFERENCES `portfolio`.`galerie` (`idgalerie`)
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
