-- Use `enum` types as placeholders; replace these with your actual types
SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0;
SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;
SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='TRADITIONAL,ALLOW_INVALID_DATES';

-- Table structure for `entries`
-- This table stores the main information for each entry submission.
CREATE TABLE `entries` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `full_name` VARCHAR(255) NOT NULL,
    `surname` VARCHAR(255) NOT NULL,
    `company` VARCHAR(255) NOT NULL,
    `phone_number` VARCHAR(20) NOT NULL,
    `email` VARCHAR(255) NOT NULL,
    `entry_title` VARCHAR(255) NOT NULL,
    `project_category` VARCHAR(255) NOT NULL,
    `description` TEXT NOT NULL,
    `owner_developer_name` VARCHAR(255) NOT NULL,
    `developer_name` VARCHAR(255) NOT NULL,
    `date_of_completion` DATE NOT NULL,
    `capital_investment` DECIMAL(19, 4) NOT NULL,
    `economic_return` DECIMAL(19, 4) NOT NULL,
    `tenant_profile` TEXT NOT NULL,
    `BBBEE_status` VARCHAR(255) NOT NULL,
    `overall_impact` TEXT NOT NULL,
    `design_concept` TEXT NOT NULL,
    `functionality_fit_for_purpose` TEXT NOT NULL,
    `facilities_user_satisfaction` TEXT NOT NULL,
    `environmentally_sustainable_design` TEXT NOT NULL,
    `social_transformation` TEXT NOT NULL,
    `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    `updated_at` TIMESTAMP NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table structure for `entry_docs`
-- This table stores the documents associated with each entry, classified by type.
CREATE TABLE `entry_docs` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `entry_id` INT NOT NULL,
    `doc_type` ENUM('general_doc', 'other') NOT NULL,
    `doc_name` VARCHAR(255) NOT NULL,
    `doc_path` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    INDEX `fk_entry_docs_entry_id_idx` (`entry_id` ASC),
    CONSTRAINT `fk_entry_docs_entry_id`
        FOREIGN KEY (`entry_id`)
        REFERENCES `entries` (`id`)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Table structure for `entry_images`
-- This table stores the images associated with each entry, classified by type.
CREATE TABLE `entry_images` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `entry_id` INT NOT NULL,
    `image_type` ENUM('general_image', 'architectural_drawing') NOT NULL,
    `image_name` VARCHAR(255) NOT NULL,
    `image_path` VARCHAR(255) NOT NULL,
    `created_at` TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
    INDEX `fk_entry_images_entry_id_idx` (`entry_id` ASC),
    CONSTRAINT `fk_entry_images_entry_id`
        FOREIGN KEY (`entry_id`)
        REFERENCES `entries` (`id`)
        ON DELETE CASCADE
        ON UPDATE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

SET SQL_MODE=@OLD_SQL_MODE;
SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS;
SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS;
