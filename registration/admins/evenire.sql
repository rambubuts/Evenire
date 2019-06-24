SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

CREATE SCHEMA IF NOT EXISTS `mydb` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ;

USE `mydb`;

CREATE  TABLE IF NOT EXISTS `mydb`.`accounts` (
  `account_id` INT(11) NOT NULL ,
  `account_name` VARCHAR(45) NULL DEFAULT NULL ,
  `account_address` VARCHAR(100) NULL DEFAULT NULL ,
  `account_contact` VARCHAR(45) NULL DEFAULT NULL ,
  `account_email` VARCHAR(45) NULL DEFAULT NULL ,
  `account_type` VARCHAR(45) NULL DEFAULT NULL ,
  `account_status` INT(11) NOT NULL ,
  PRIMARY KEY (`account_id`) )
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `mydb`.`attendance` (
  `attendance_id` INT(11) NOT NULL ,
  `event_event_id` INT(11) NOT NULL ,
  `event_accounts_account_id` INT(11) NOT NULL ,
  PRIMARY KEY (`attendance_id`, `event_event_id`, `event_accounts_account_id`) ,
  INDEX `fk_attendance_event1_idx` (`event_event_id` ASC, `event_accounts_account_id` ASC) ,
  CONSTRAINT `fk_attendance_event1`
    FOREIGN KEY (`event_event_id` , `event_accounts_account_id` )
    REFERENCES `mydb`.`events` (`event_id` , `accounts_account_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `mydb`.`certificate` (
  `certificate_id` INT(11) NOT NULL ,
  `event_event_id` INT(11) NOT NULL ,
  `event_accounts_account_id` INT(11) NOT NULL ,
  PRIMARY KEY (`certificate_id`, `event_event_id`, `event_accounts_account_id`) ,
  INDEX `fk_certificate_event1_idx` (`event_event_id` ASC, `event_accounts_account_id` ASC) ,
  CONSTRAINT `fk_certificate_event1`
    FOREIGN KEY (`event_event_id` , `event_accounts_account_id` )
    REFERENCES `mydb`.`events` (`event_id` , `accounts_account_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `mydb`.`events` (
  `event_id` INT(11) NOT NULL AUTO_INCREMENT ,
  `event_title` VARCHAR(45) NULL DEFAULT NULL ,
  `event_type` VARCHAR(45) NULL DEFAULT NULL ,
  `event_category` VARCHAR(45) NULL DEFAULT NULL ,
  `accounts_account_id` INT(11) NOT NULL ,
  `status` INT(11) NOT NULL ,
  PRIMARY KEY (`event_id`, `accounts_account_id`) ,
  INDEX `fk_event_accounts1_idx` (`accounts_account_id` ASC) ,
  CONSTRAINT `fk_event_accounts1`
    FOREIGN KEY (`accounts_account_id` )
    REFERENCES `mydb`.`accounts` (`account_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `mydb`.`event_bundle` (
  `event_bundle_id` INT(11) NOT NULL ,
  `event_bundle_description` VARCHAR(100) NULL DEFAULT NULL ,
  `event_event_id` INT(11) NOT NULL ,
  `event_accounts_account_id` INT(11) NOT NULL ,
  PRIMARY KEY (`event_bundle_id`, `event_event_id`, `event_accounts_account_id`) ,
  INDEX `fk_event_bundle_event1_idx` (`event_event_id` ASC, `event_accounts_account_id` ASC) ,
  CONSTRAINT `fk_event_bundle_event1`
    FOREIGN KEY (`event_event_id` , `event_accounts_account_id` )
    REFERENCES `mydb`.`events` (`event_id` , `accounts_account_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `mydb`.`event_img` (
  `event_img_id` INT(11) NOT NULL ,
  `event_img` VARCHAR(45) NULL DEFAULT NULL ,
  `event_event_id` INT(11) NOT NULL ,
  `event_accounts_account_id` INT(11) NOT NULL ,
  PRIMARY KEY (`event_img_id`, `event_event_id`, `event_accounts_account_id`) ,
  INDEX `fk_event_img_event1_idx` (`event_event_id` ASC, `event_accounts_account_id` ASC) ,
  CONSTRAINT `fk_event_img_event1`
    FOREIGN KEY (`event_event_id` , `event_accounts_account_id` )
    REFERENCES `mydb`.`events` (`event_id` , `accounts_account_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `mydb`.`event_info` (
  `event_id` INT(11) NOT NULL ,
  `event_location` VARCHAR(45) NULL DEFAULT NULL ,
  `event_started_date` DATE NULL DEFAULT NULL ,
  `event_end_date` DATE NULL DEFAULT NULL ,
  `event_start_time` TIME NULL DEFAULT NULL ,
  `event_end_time` TIME NULL DEFAULT NULL ,
  `event_setting` VARCHAR(45) NULL DEFAULT NULL ,
  `event_event_id` INT(11) NOT NULL ,
  `event_accounts_account_id` INT(11) NOT NULL ,
  `event_description` VARCHAR(225) NULL DEFAULT NULL ,
  PRIMARY KEY (`event_id`, `event_event_id`, `event_accounts_account_id`) ,
  INDEX `fk_event_info_event1_idx` (`event_event_id` ASC, `event_accounts_account_id` ASC) ,
  CONSTRAINT `fk_event_info_event1`
    FOREIGN KEY (`event_event_id` , `event_accounts_account_id` )
    REFERENCES `mydb`.`events` (`event_id` , `accounts_account_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `mydb`.`event_payment` (
  `event_payment_id` INT(11) NOT NULL ,
  `event_payment_type` VARCHAR(45) NULL DEFAULT NULL ,
  `event_payment_amount` DOUBLE NULL DEFAULT NULL ,
  `event_event_id` INT(11) NOT NULL ,
  `event_accounts_account_id` INT(11) NOT NULL ,
  PRIMARY KEY (`event_payment_id`, `event_event_id`, `event_accounts_account_id`) ,
  INDEX `fk_event_payment_event1_idx` (`event_event_id` ASC, `event_accounts_account_id` ASC) ,
  CONSTRAINT `fk_event_payment_event1`
    FOREIGN KEY (`event_event_id` , `event_accounts_account_id` )
    REFERENCES `mydb`.`events` (`event_id` , `accounts_account_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `mydb`.`event_program` (
  `event_program_id` INT(11) NOT NULL ,
  `event_program_topic` VARCHAR(45) NULL DEFAULT NULL ,
  `event_handle` VARCHAR(45) NULL DEFAULT NULL ,
  `event_handle_sched` TIME NULL DEFAULT NULL ,
  `event_event_id` INT(11) NOT NULL ,
  `event_accounts_account_id` INT(11) NOT NULL ,
  PRIMARY KEY (`event_program_id`, `event_event_id`, `event_accounts_account_id`) ,
  INDEX `fk_event_speaker_event1_idx` (`event_event_id` ASC, `event_accounts_account_id` ASC) ,
  CONSTRAINT `fk_event_speaker_event1`
    FOREIGN KEY (`event_event_id` , `event_accounts_account_id` )
    REFERENCES `mydb`.`events` (`event_id` , `accounts_account_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `mydb`.`login` (
  `id` INT(11) NOT NULL ,
  `username` VARCHAR(45) NULL DEFAULT NULL ,
  `password` VARCHAR(45) NULL DEFAULT NULL ,
  `accounts_account_id` INT(11) NOT NULL ,
  PRIMARY KEY (`id`, `accounts_account_id`) ,
  INDEX `fk_login_accounts_idx` (`accounts_account_id` ASC) ,
  CONSTRAINT `fk_login_accounts`
    FOREIGN KEY (`accounts_account_id` )
    REFERENCES `mydb`.`accounts` (`account_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `mydb`.`login_history` (
  `log_history_id` INT(11) NOT NULL ,
  `log_date` DATE NULL DEFAULT NULL ,
  `log_time` TIME NULL DEFAULT NULL ,
  `login_id` INT(11) NOT NULL ,
  `login_accounts_account_id` INT(11) NOT NULL ,
  PRIMARY KEY (`log_history_id`, `login_id`, `login_accounts_account_id`) ,
  INDEX `fk_login_history_login1_idx` (`login_id` ASC, `login_accounts_account_id` ASC) ,
  CONSTRAINT `fk_login_history_login1`
    FOREIGN KEY (`login_id` , `login_accounts_account_id` )
    REFERENCES `mydb`.`login` (`id` , `accounts_account_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;

CREATE  TABLE IF NOT EXISTS `mydb`.`mail` (
  `mail_id` INT(11) NOT NULL ,
  `mail_type` VARCHAR(45) NULL DEFAULT NULL ,
  `mail_content` VARCHAR(45) NULL DEFAULT NULL ,
  `accounts_account_id` INT(11) NOT NULL ,
  PRIMARY KEY (`mail_id`, `accounts_account_id`) ,
  INDEX `fk_mail_accounts1_idx` (`accounts_account_id` ASC) ,
  CONSTRAINT `fk_mail_accounts1`
    FOREIGN KEY (`accounts_account_id` )
    REFERENCES `mydb`.`accounts` (`account_id` )
    ON DELETE NO ACTION
    ON UPDATE NO ACTION)
ENGINE = InnoDB
DEFAULT CHARACTER SET = latin1
COLLATE = latin1_swedish_ci;


SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
