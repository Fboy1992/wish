SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

DROP SCHEMA IF EXISTS `wish` ;
CREATE SCHEMA IF NOT EXISTS `wish` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci ;
USE `wish` ;

-- -----------------------------------------------------
-- Table `wish`.`sf_wish`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `wish`.`sf_wish` ;

CREATE  TABLE IF NOT EXISTS `wish`.`sf_wish` (
  `wid` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '愿望主键ID' ,
  `content` VARCHAR(200) NOT NULL DEFAULT '' COMMENT '愿望内容' ,
  `name` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '愿望人昵称' ,
  `time` INT(10) UNSIGNED NOT NULL DEFAULT 0 COMMENT '许愿时间' ,
  PRIMARY KEY (`wid`) )
ENGINE = MyISAM
COMMENT = '愿望表';


-- -----------------------------------------------------
-- Table `wish`.`sf_admin`
-- -----------------------------------------------------
DROP TABLE IF EXISTS `wish`.`sf_admin` ;

CREATE  TABLE IF NOT EXISTS `wish`.`sf_admin` (
  `aid` INT UNSIGNED NOT NULL AUTO_INCREMENT COMMENT '后台用户主键' ,
  `username` VARCHAR(20) NOT NULL DEFAULT '' COMMENT '用户名' ,
  `password` CHAR(32) NOT NULL DEFAULT '' COMMENT '后台用户密码' ,
  PRIMARY KEY (`aid`) )
ENGINE = MyISAM
COMMENT = '后台用户表';

USE `wish` ;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
