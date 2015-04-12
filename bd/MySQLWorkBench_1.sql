SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_sector`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_sector` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_sector` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(32) NOT NULL ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_organizacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_organizacion` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_organizacion` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(64) NOT NULL ,
  `contacto` VARCHAR(256) NOT NULL ,
  `url` VARCHAR(256) NULL ,
  `sector_id` INT NOT NULL ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `sector_id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_organizaciones_sectores1_idx` (`sector_id` ASC) ,
  CONSTRAINT `fk_organizaciones_sectores1`
    FOREIGN KEY (`sector_id` )
    REFERENCES `yiikmap52`.`kmap_sector` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_capital_humano`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_capital_humano` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_capital_humano` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(64) NOT NULL ,
  `tipo` INT NOT NULL ,
  `contacto` VARCHAR(256) NOT NULL ,
  `secundaria` VARCHAR(128) NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_capital_estructural`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_capital_estructural` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_capital_estructural` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(32) NOT NULL ,
  `descripcion` VARCHAR(512) NULL ,
  `tipo` INT NOT NULL ,
  `un_capital` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_capital_relacional`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_capital_relacional` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_capital_relacional` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `afines` VARCHAR(128) NULL ,
  `organizacion_id` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_area`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_area` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_area` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(32) NOT NULL ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_competencia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_competencia` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_competencia` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(32) NOT NULL ,
  `tipo` INT NOT NULL ,
  `modelo` VARCHAR(32) NOT NULL ,
  `perfil` VARCHAR(256) NULL ,
  `area_id` INT NOT NULL ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `area_id`) ,
  INDEX `fk_competencias_areas1_idx` (`area_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  CONSTRAINT `fk_competencias_areas1`
    FOREIGN KEY (`area_id` )
    REFERENCES `yiikmap52`.`kmap_area` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_organizacion_has_competencia`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_organizacion_has_competencia` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_organizacion_has_competencia` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(512) NULL ,
  `organizacion_id` INT NOT NULL ,
  `competencia_id` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `organizacion_id`, `competencia_id`) ,
  INDEX `fk_organizaciones_has_competencias_organizaciones_idx` (`organizacion_id` ASC) ,
  INDEX `fk_organizaciones_has_competencias_competencias_idx` (`competencia_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  CONSTRAINT `fk_organizaciones_has_competencias_organizaciones`
    FOREIGN KEY (`organizacion_id` )
    REFERENCES `yiikmap52`.`kmap_organizacion` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_organizaciones_has_competencias_competencias`
    FOREIGN KEY (`competencia_id` )
    REFERENCES `yiikmap52`.`kmap_competencia` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION);


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_tangible`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_tangible` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_tangible` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(32) NOT NULL ,
  `tipo` INT NOT NULL ,
  `locacion` VARCHAR(128) NOT NULL ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_intangible`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_intangible` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_intangible` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(64) NOT NULL ,
  `tipo` INT NOT NULL ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_lookup`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_lookup` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_lookup` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `name` VARCHAR(32) NOT NULL ,
  `code` INT NOT NULL ,
  `type` VARCHAR(32) NOT NULL ,
  `position` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_proceso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_proceso` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_proceso` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `version` VARCHAR(8) NOT NULL ,
  `nombre` VARCHAR(64) NOT NULL ,
  `tipo` INT NOT NULL ,
  `objetivo` VARCHAR(128) NOT NULL ,
  `organizacion_id` INT NOT NULL ,
  `capital_humano_id` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `organizacion_id`, `capital_humano_id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_procesos_organizaciones1_idx` (`organizacion_id` ASC) ,
  INDEX `fk_procesos_capitales_humanos1_idx` (`capital_humano_id` ASC) ,
  CONSTRAINT `fk_procesos_organizaciones1`
    FOREIGN KEY (`organizacion_id` )
    REFERENCES `yiikmap52`.`kmap_organizacion` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_procesos_capitales_humanos1`
    FOREIGN KEY (`capital_humano_id` )
    REFERENCES `yiikmap52`.`kmap_capital_humano` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_normativa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_normativa` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_normativa` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(64) NOT NULL ,
  `locacion` VARCHAR(256) NOT NULL ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_proceso_has_normativa`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_proceso_has_normativa` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_proceso_has_normativa` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(512) NULL ,
  `proceso_id` INT NOT NULL ,
  `normativa_id` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `proceso_id`, `normativa_id`) ,
  INDEX `fk_processes_has_normativas_normativas1_idx` (`normativa_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  CONSTRAINT `fk_processes_has_normativas_processes1`
    FOREIGN KEY (`proceso_id` )
    REFERENCES `yiikmap52`.`kmap_proceso` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_processes_has_normativas_normativas1`
    FOREIGN KEY (`normativa_id` )
    REFERENCES `yiikmap52`.`kmap_normativa` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_proceso_has_proceso`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_proceso_has_proceso` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_proceso_has_proceso` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(512) NULL ,
  `tipo` INT NULL ,
  `proceso_id` INT NOT NULL ,
  `proceso_hijo_id` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `proceso_id`, `proceso_hijo_id`) ,
  INDEX `fk_processes_has_processes_processes2_idx` (`proceso_hijo_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  CONSTRAINT `fk_processes_has_processes_processes1`
    FOREIGN KEY (`proceso_id` )
    REFERENCES `yiikmap52`.`kmap_proceso` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_processes_has_processes_processes2`
    FOREIGN KEY (`proceso_hijo_id` )
    REFERENCES `yiikmap52`.`kmap_proceso` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_politica`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_politica` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_politica` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(64) NOT NULL ,
  `locacion` VARCHAR(256) NOT NULL ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_proceso_has_politica`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_proceso_has_politica` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_proceso_has_politica` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(512) NULL ,
  `proceso_id` INT NOT NULL ,
  `politica_id` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `proceso_id`, `politica_id`) ,
  INDEX `fk_processes_has_politicas_politicas1_idx` (`politica_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  CONSTRAINT `fk_processes_has_politicas_processes1`
    FOREIGN KEY (`proceso_id` )
    REFERENCES `yiikmap52`.`kmap_proceso` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_processes_has_politicas_politicas1`
    FOREIGN KEY (`politica_id` )
    REFERENCES `yiikmap52`.`kmap_politica` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_control`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_control` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_control` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(32) NOT NULL ,
  `tipo` INT NOT NULL ,
  `locacion` VARCHAR(256) NOT NULL ,
  `proceso_id` INT NOT NULL ,
  `descripcion` VARCHAR(512) NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `proceso_id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_controles_processes1_idx` (`proceso_id` ASC) ,
  CONSTRAINT `fk_controles_processes1`
    FOREIGN KEY (`proceso_id` )
    REFERENCES `yiikmap52`.`kmap_proceso` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_indicador`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_indicador` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_indicador` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(32) NOT NULL ,
  `locacion` VARCHAR(256) NOT NULL ,
  `proceso_id` INT NOT NULL ,
  `descripcion` VARCHAR(512) NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `proceso_id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_indicadores_processes1_idx` (`proceso_id` ASC) ,
  CONSTRAINT `fk_indicadores_processes1`
    FOREIGN KEY (`proceso_id` )
    REFERENCES `yiikmap52`.`kmap_proceso` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_documentacion`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_documentacion` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_documentacion` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(64) NOT NULL ,
  `locacion` VARCHAR(256) NOT NULL ,
  `proceso_id` INT NOT NULL ,
  `descripcion` VARCHAR(512) NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `proceso_id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_documentaciones_processes1_idx` (`proceso_id` ASC) ,
  CONSTRAINT `fk_documentaciones_processes1`
    FOREIGN KEY (`proceso_id` )
    REFERENCES `yiikmap52`.`kmap_proceso` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_sistema`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_sistema` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_sistema` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `nombre` VARCHAR(32) NOT NULL ,
  `locacion` VARCHAR(256) NOT NULL ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_proceso_has_sistema`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_proceso_has_sistema` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_proceso_has_sistema` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(512) NULL ,
  `proceso_id` INT NOT NULL ,
  `sistema_id` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `proceso_id`, `sistema_id`) ,
  INDEX `fk_processes_has_sistemas_sistemas1_idx` (`sistema_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  CONSTRAINT `fk_processes_has_sistemas_processes1`
    FOREIGN KEY (`proceso_id` )
    REFERENCES `yiikmap52`.`kmap_proceso` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_processes_has_sistemas_sistemas1`
    FOREIGN KEY (`sistema_id` )
    REFERENCES `yiikmap52`.`kmap_sistema` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_informacion_primaria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_informacion_primaria` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_informacion_primaria` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `que` VARCHAR(128) NOT NULL ,
  `quien` VARCHAR(128) NOT NULL ,
  `como` VARCHAR(128) NOT NULL ,
  `proceso_id` INT NOT NULL ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `proceso_id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_informaciones_primarias_processes1_idx` (`proceso_id` ASC) ,
  CONSTRAINT `fk_informaciones_primarias_processes1`
    FOREIGN KEY (`proceso_id` )
    REFERENCES `yiikmap52`.`kmap_proceso` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_informacion_secundaria`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_informacion_secundaria` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_informacion_secundaria` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `que` VARCHAR(128) NOT NULL ,
  `a_quien` VARCHAR(128) NOT NULL ,
  `como` VARCHAR(128) NOT NULL ,
  `proceso_id` INT NOT NULL ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `proceso_id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_informaciones_secundarias_processes1_idx` (`proceso_id` ASC) ,
  CONSTRAINT `fk_informaciones_secundarias_processes1`
    FOREIGN KEY (`proceso_id` )
    REFERENCES `yiikmap52`.`kmap_proceso` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_capital_humano_has_tangible`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_capital_humano_has_tangible` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_capital_humano_has_tangible` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(512) NULL ,
  `capital_humano_id` INT NOT NULL ,
  `tangible_id` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `capital_humano_id`, `tangible_id`) ,
  INDEX `fk_capitales_humanos_has_tangibles_tangibles1_idx` (`tangible_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  CONSTRAINT `fk_capitales_humanos_has_tangibles_capitales_humanos1`
    FOREIGN KEY (`capital_humano_id` )
    REFERENCES `yiikmap52`.`kmap_capital_humano` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_capitales_humanos_has_tangibles_tangibles1`
    FOREIGN KEY (`tangible_id` )
    REFERENCES `yiikmap52`.`kmap_tangible` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_capital_humano_has_intangible`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_capital_humano_has_intangible` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_capital_humano_has_intangible` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(512) NULL ,
  `capital_humano_id` INT NOT NULL ,
  `intangible_id` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `capital_humano_id`, `intangible_id`) ,
  INDEX `fk_capitales_humanos_has_intangibles_intangibles1_idx` (`intangible_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  CONSTRAINT `fk_capitales_humanos_has_intangibles_capitales_humanos1`
    FOREIGN KEY (`capital_humano_id` )
    REFERENCES `yiikmap52`.`kmap_capital_humano` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_capitales_humanos_has_intangibles_intangibles1`
    FOREIGN KEY (`intangible_id` )
    REFERENCES `yiikmap52`.`kmap_intangible` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_capital`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_capital` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_capital` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(512) NULL ,
  `tipo` INT NOT NULL ,
  `capital` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_organizacion_has_capital`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_organizacion_has_capital` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_organizacion_has_capital` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(512) NULL ,
  `organizacion_id` INT NOT NULL ,
  `capital_id` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `organizacion_id`, `capital_id`) ,
  INDEX `fk_organizaciones_has_capitales_capitales1_idx` (`capital_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  CONSTRAINT `fk_organizaciones_has_capitales_organizaciones1`
    FOREIGN KEY (`organizacion_id` )
    REFERENCES `yiikmap52`.`kmap_organizacion` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_organizaciones_has_capitales_capitales1`
    FOREIGN KEY (`capital_id` )
    REFERENCES `yiikmap52`.`kmap_capital` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_competencia_has_capital_humano`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_competencia_has_capital_humano` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_competencia_has_capital_humano` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(512) NULL ,
  `competencia_id` INT NOT NULL ,
  `capital_humano_id` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `competencia_id`, `capital_humano_id`) ,
  INDEX `fk_competencias_has_capitales_humanos_capitales_humanos1_idx` (`capital_humano_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  CONSTRAINT `fk_competencias_has_capitales_humanos_competencias1`
    FOREIGN KEY (`competencia_id` )
    REFERENCES `yiikmap52`.`kmap_competencia` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_competencias_has_capitales_humanos_capitales_humanos1`
    FOREIGN KEY (`capital_humano_id` )
    REFERENCES `yiikmap52`.`kmap_capital_humano` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_proceso_has_capital_estructural`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_proceso_has_capital_estructural` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_proceso_has_capital_estructural` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(512) NULL ,
  `proceso_id` INT NOT NULL ,
  `capital_estructural_id` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `proceso_id`, `capital_estructural_id`) ,
  INDEX `fk_proceso_has_capital_estructural_capital_estructural1_idx` (`capital_estructural_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  CONSTRAINT `fk_proceso_has_capital_estructural_proceso1`
    FOREIGN KEY (`proceso_id` )
    REFERENCES `yiikmap52`.`kmap_proceso` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proceso_has_capital_estructural_capital_estructural1`
    FOREIGN KEY (`capital_estructural_id` )
    REFERENCES `yiikmap52`.`kmap_capital_estructural` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_proceso_has_capital_humano`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_proceso_has_capital_humano` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_proceso_has_capital_humano` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(512) NULL ,
  `proceso_id` INT NOT NULL ,
  `capital_humano_id` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `proceso_id`, `capital_humano_id`) ,
  INDEX `fk_proceso_has_capital_humano_capital_humano1_idx` (`capital_humano_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  CONSTRAINT `fk_proceso_has_capital_humano_proceso1`
    FOREIGN KEY (`proceso_id` )
    REFERENCES `yiikmap52`.`kmap_proceso` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proceso_has_capital_humano_capital_humano1`
    FOREIGN KEY (`capital_humano_id` )
    REFERENCES `yiikmap52`.`kmap_capital_humano` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_proceso_has_capital_relacional`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_proceso_has_capital_relacional` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_proceso_has_capital_relacional` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `descripcion` VARCHAR(512) NULL ,
  `proceso_id` INT NOT NULL ,
  `capital_relacional_id` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `proceso_id`, `capital_relacional_id`) ,
  INDEX `fk_proceso_has_capital_relacional_capital_relacional1_idx` (`capital_relacional_id` ASC) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  CONSTRAINT `fk_proceso_has_capital_relacional_proceso1`
    FOREIGN KEY (`proceso_id` )
    REFERENCES `yiikmap52`.`kmap_proceso` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_proceso_has_capital_relacional_capital_relacional1`
    FOREIGN KEY (`capital_relacional_id` )
    REFERENCES `yiikmap52`.`kmap_capital_relacional` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_accionista`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_accionista` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_accionista` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `tipo` INT NOT NULL COMMENT 'puede ser capital_humano u organizacion.' ,
  `tipo_id` INT NOT NULL COMMENT 'el id correspondiente al tipo que es.' ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_cliente`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_cliente` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_cliente` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `tipo` INT NOT NULL COMMENT 'puede ser capital_humano u organizacion.' ,
  `tipo_id` INT NOT NULL COMMENT 'el id correspondiente al tipo que es.' ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_departamento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_departamento` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_departamento` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `capital_humano_id` INT NOT NULL ,
  `locacion` VARCHAR(512) NOT NULL ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`, `capital_humano_id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_departamento_capital_humano1_idx` (`capital_humano_id` ASC) ,
  CONSTRAINT `fk_departamento_capital_humano1`
    FOREIGN KEY (`capital_humano_id` )
    REFERENCES `yiikmap52`.`kmap_capital_humano` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_empleado`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_empleado` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_empleado` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `contacto` VARCHAR(512) NOT NULL ,
  `created_at` DATETIME NULL ,
  `updated_at` DATETIME NULL ,
  `departamento_id` INT NOT NULL ,
  `capital_humano_id` INT NOT NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_empleado_departamento1_idx` (`departamento_id` ASC) ,
  INDEX `fk_empleado_capital_humano1_idx` (`capital_humano_id` ASC) ,
  CONSTRAINT `fk_empleado_departamento1`
    FOREIGN KEY (`departamento_id` )
    REFERENCES `yiikmap52`.`kmap_departamento` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION,
  CONSTRAINT `fk_empleado_capital_humano1`
    FOREIGN KEY (`capital_humano_id` )
    REFERENCES `yiikmap52`.`kmap_capital_humano` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_proveedor`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_proveedor` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_proveedor` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `tipo` INT NOT NULL COMMENT 'puede ser capital_humano u organizacion.' ,
  `tipo_id` INT NOT NULL COMMENT 'el id correspondiente al tipo que es.' ,
  `descripcion` VARCHAR(512) NULL ,
  `created_at` DATETIME NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) )
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_test_emprendimiento`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_test_emprendimiento` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_test_emprendimiento` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `capital_humano_id` INT NOT NULL ,
  `p201estimula` INT NOT NULL ,
  `p202predisposicion` INT NOT NULL ,
  `p203iniciativa` INT NOT NULL ,
  `p204dedica` INT NOT NULL ,
  `p205relaciona` INT NOT NULL ,
  `p206autonomia` INT NOT NULL ,
  `p207responsabilidad` INT NOT NULL ,
  `p208independiente` INT NOT NULL ,
  `p209prever` INT NOT NULL ,
  `p210objetivos` INT NOT NULL ,
  `p211experiencia` INT NOT NULL ,
  `p212equipo` INT NOT NULL ,
  `p31explica` INT NOT NULL ,
  `p32iniciar` INT NOT NULL ,
  `p33oportuno` INT NOT NULL ,
  `p34convencido` INT NOT NULL ,
  `p35arranque` INT NOT NULL ,
  `p36presupuesto` INT NOT NULL ,
  `p37contacto` INT NOT NULL ,
  `p38invertiria` INT NOT NULL ,
  `p39conoce` INT NOT NULL ,
  `p41empresas` INT NOT NULL ,
  `p42actuan` INT NOT NULL ,
  `p43datos` INT NOT NULL ,
  `p44convencido` INT NOT NULL ,
  `p45vista` INT NOT NULL ,
  `p46mercado` INT NOT NULL ,
  `p47mecanismos` INT NOT NULL ,
  `p48situacion` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_test_emprendimiento_capital_humano1_idx` (`capital_humano_id` ASC) ,
  CONSTRAINT `fk_test_emprendimiento_capital_humano1`
    FOREIGN KEY (`capital_humano_id` )
    REFERENCES `yiikmap52`.`kmap_capital_humano` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_test_creatividad`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_test_creatividad` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_test_creatividad` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `capital_humano_id` INT NOT NULL ,
  `p01productividad` INT NOT NULL ,
  `p02agilidad` INT NOT NULL ,
  `p03originalidad` INT NOT NULL ,
  `p04diversion` INT NOT NULL ,
  `p05automotivacion` INT NOT NULL ,
  `p06persistencia` INT NOT NULL ,
  `p07lenguajes` INT NOT NULL ,
  `p08variedad` INT NOT NULL ,
  `p09fluencia` INT NOT NULL ,
  `p10visualizacion` INT NOT NULL ,
  `p11analogia` INT NOT NULL ,
  `p12problemas` INT NOT NULL ,
  `p13experimentos` INT NOT NULL ,
  `p14innovacion` INT NOT NULL ,
  `p15inventiva` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_test_liderazgo_transformacional_capital_humano1_idx` (`capital_humano_id` ASC) ,
  CONSTRAINT `fk_test_liderazgo_transformacional_capital_humano1`
    FOREIGN KEY (`capital_humano_id` )
    REFERENCES `yiikmap52`.`kmap_capital_humano` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;


-- -----------------------------------------------------
-- Table `yiikmap52`.`kmap_test_liderazgo_transformacional`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `yiikmap52`.`kmap_test_liderazgo_transformacional` ;

CREATE  TABLE IF NOT EXISTS `yiikmap52`.`kmap_test_liderazgo_transformacional` (
  `id` INT NOT NULL AUTO_INCREMENT ,
  `capital_humano_id` INT NOT NULL ,
  `p01proporciono` INT NOT NULL ,
  `p02reexamino` INT NOT NULL ,
  `p03interfiero` INT NOT NULL ,
  `p04enfoco` INT NOT NULL ,
  `p05evito` INT NOT NULL ,
  `p06hablo` INT NOT NULL ,
  `p07ausento` INT NOT NULL ,
  `p08perspectivas` INT NOT NULL ,
  `p09optimismo` INT NOT NULL ,
  `p10infundo` INT NOT NULL ,
  `p11refiero` INT NOT NULL ,
  `p12espero` INT NOT NULL ,
  `p13hablo` INT NOT NULL ,
  `p14especifico` INT NOT NULL ,
  `p15dedico` INT NOT NULL ,
  `p16dejo` INT NOT NULL ,
  `p17demuestro` INT NOT NULL ,
  `p18abandono` INT NOT NULL ,
  `p19trato` INT NOT NULL ,
  `p20demuestro` INT NOT NULL ,
  `p21actuo` INT NOT NULL ,
  `p22concentro` INT NOT NULL ,
  `p23considero` INT NOT NULL ,
  `p24llevo` INT NOT NULL ,
  `p25demuestro` INT NOT NULL ,
  `p26expreso` INT NOT NULL ,
  `p27dirijo` INT NOT NULL ,
  `p28evito` INT NOT NULL ,
  `p29considero` INT NOT NULL ,
  `p30hago` INT NOT NULL ,
  `p31ayudo` INT NOT NULL ,
  `p32sugiero` INT NOT NULL ,
  `p33tardo` INT NOT NULL ,
  `p34enfatizo` INT NOT NULL ,
  `p35expreso` INT NOT NULL ,
  `p36expreso` INT NOT NULL ,
  `p37eficaz` INT NOT NULL ,
  `p38utilizo` INT NOT NULL ,
  `p39hago` INT NOT NULL ,
  `p40eficiente` INT NOT NULL ,
  `p41trabajo` INT NOT NULL ,
  `p42elevo` INT NOT NULL ,
  `p43eficiente` INT NOT NULL ,
  `p44motivo` INT NOT NULL ,
  `p45encabezo` INT NOT NULL ,
  `created_at` DATETIME NOT NULL ,
  `updated_at` DATETIME NULL ,
  PRIMARY KEY (`id`) ,
  UNIQUE INDEX `id_UNIQUE` (`id` ASC) ,
  INDEX `fk_test_liderazgo_transformacional_capital_humano2_idx` (`capital_humano_id` ASC) ,
  CONSTRAINT `fk_test_liderazgo_transformacional_capital_humano2`
    FOREIGN KEY (`capital_humano_id` )
    REFERENCES `yiikmap52`.`kmap_capital_humano` (`id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB;



SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
