-- Create the database
CREATE DATABASE IF NOT EXISTS `db_cyber`;
USE `db_cyber`;

-- Create the users table
CREATE TABLE IF NOT EXISTS `users` (
    `id` INT AUTO_INCREMENT PRIMARY KEY,
    `username` VARCHAR(50) NOT NULL,
    `password` VARCHAR(255) NOT NULL
);

-- Insert sample user data
INSERT INTO `users` (`username`, `password`) VALUES
('user1', 'password1'),
('user2', 'password2'),
('user3', 'password3');

/*
-- Create a new SQL user with all privileges on the database
CREATE USER 'db_cyber'@'localhost' IDENTIFIED BY 'db_cyber';

-- Grant all privileges on the database to the new user
GRANT ALL PRIVILEGES ON db_cyber.* TO 'db_cyber'@'localhost';

-- Flush privileges to apply changes
FLUSH PRIVILEGES;
*/
