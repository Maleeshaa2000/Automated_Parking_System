/* Create Database and Table */
CREATE DATABASE my_parking;

USE my_parking;

CREATE TABLE `login_users`(
	`UserID` INT(11) NOT NULL auto_increment,
	`UserName` VARCHAR(50),
	`Password` VARCHAR(10),
	`Remember` CHAR,
	PRIMARY KEY(`UserID`)
);

CREATE TABLE `sign_up_users`(
	`User_ID` INT(11) NOT NULL auto_increment,
	`UserName` VARCHAR(50),
	`Email` VARCHAR(100),
	`Password` VARCHAR(10),
	`ReEnter_Password` VARCHAR(10),
	PRIMARY KEY(`User_ID`)
);

CREATE TABLE `contacts`(
	`Customer_ID` INT(11) NOT NULL auto_increment,
	`Passion` VARCHAR(100),
	`First_Name` VARCHAR(50),
	`Last_Name` VARCHAR(50),
	`Email` VARCHAR(100),
	`Mobile_No` INT,
	`Message` VARCHAR(500),
	PRIMARY KEY(`Customer_ID`)
);

CREATE TABLE `payment_details`(
	`Payment_ID` INT(11) NOT NULL auto_increment,
	`payment_method` CHAR,
	`cardnum` BIGINT(16),
	`cvvcode` INT(3),
	`expiredate` DATE,
	PRIMARY KEY(`Payment_ID`)
);

CREATE TABLE `personal_details`(
	`Personal_ID` INT(11) NOT NULL auto_increment,
	`mobilenum` INT,
	`platenum` CHAR(6),
	PRIMARY KEY(`Personal_ID`)
);