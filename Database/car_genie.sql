/*
SQLyog Community v13.2.0 (64 bit)
MySQL - 8.0.31 : Database - car_genie
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`car_genie` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;

USE `car_genie`;

/*Table structure for table `admin` */

DROP TABLE IF EXISTS `admin`;

CREATE TABLE `admin` (
  `Admin_ID` int NOT NULL,
  `Login_ID` varchar(255) NOT NULL,
  `Admin_Name` varchar(255) NOT NULL,
  `Admin_Pwd` varchar(255) NOT NULL,
  `Admin_Phone` mediumtext,
  PRIMARY KEY (`Admin_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `admin` */

/*Table structure for table `customer` */

DROP TABLE IF EXISTS `customer`;

CREATE TABLE `customer` (
  `Cus_id` int NOT NULL AUTO_INCREMENT,
  `Cus_Name` varchar(255) NOT NULL,
  `Email_ID` varchar(255) NOT NULL,
  `Cus_Pwd` varchar(255) DEFAULT NULL,
  `Cus_Sex` varchar(255) DEFAULT NULL,
  `Cus_Add` varchar(255) DEFAULT NULL,
  `Cus_City` varchar(255) DEFAULT NULL,
  `Cus_State` varchar(255) NOT NULL,
  `Cus_Phone` mediumtext,
  PRIMARY KEY (`Cus_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `customer` */

insert  into `customer`(`Cus_id`,`Cus_Name`,`Email_ID`,`Cus_Pwd`,`Cus_Sex`,`Cus_Add`,`Cus_City`,`Cus_State`,`Cus_Phone`) values 
(1,'Amar Choudhary','Amar9t8@gmail.com','12334',NULL,'House No. J-60, Kartar Nagar, 3-1/2 Pusta Gali no. 1, Delhi-53','NEW DELHI','Delhi','+919968853896'),
(2,'Amar Choudhary','amarhakerd@gmail.com','32432',NULL,'House No. J-60, Kartar Nagar, 3-1/2 Pusta Gali no. 1, Delhi-53','North East Delhi','DELHI','9968853896'),
(3,'Rahul Prasad','rahul@gmail.com','3982','Male','Test Address','Noida','Uttar Pradesh','99827386386'),
(4,'Amar Choudhary','Amar9t8@gmail.com','123','Male','House No. J-60, Kartar Nagar, 3-1/2 Pusta Gali no. 1, Delhi-53','NEW DELHI','Delhi','+919968853896');

/*Table structure for table `feedback` */

DROP TABLE IF EXISTS `feedback`;

CREATE TABLE `feedback` (
  `Feed_ID` int NOT NULL,
  `Cus_Id` int NOT NULL,
  `Vehicle_Id` int NOT NULL,
  `Feed_Type` varchar(255) DEFAULT NULL,
  `Feed_Details` varchar(511) DEFAULT NULL,
  `Feed_Response` varchar(511) DEFAULT NULL,
  `Feed_Status` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Feed_ID`),
  KEY `Cus_Id` (`Cus_Id`),
  KEY `Vehicle_Id` (`Vehicle_Id`),
  CONSTRAINT `feedback_ibfk_2` FOREIGN KEY (`Vehicle_Id`) REFERENCES `vehicle_info` (`Vehicle_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `feedback` */

/*Table structure for table `payment_info` */

DROP TABLE IF EXISTS `payment_info`;

CREATE TABLE `payment_info` (
  `Purchase_ID` int NOT NULL,
  `Cus_Id` int NOT NULL,
  `Vehicle_Id` int NOT NULL,
  `PurVehicle_Name` varchar(255) DEFAULT NULL,
  `Purchase_Paid` float(8,2) DEFAULT NULL,
  `Purchase_Price` float(8,2) DEFAULT NULL,
  `Purchase_Date` date DEFAULT NULL,
  `Purchase_Time` time DEFAULT NULL,
  `Purchase_Quantity` int DEFAULT NULL,
  `Delivery_Add` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Purchase_ID`),
  KEY `Cus_Id` (`Cus_Id`),
  KEY `Vehicle_Id` (`Vehicle_Id`),
  CONSTRAINT `payment_info_ibfk_2` FOREIGN KEY (`Vehicle_Id`) REFERENCES `vehicle_info` (`Vehicle_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `payment_info` */

/*Table structure for table `vehicle_info` */

DROP TABLE IF EXISTS `vehicle_info`;

CREATE TABLE `vehicle_info` (
  `Vehicle_ID` int NOT NULL,
  `Cus_Id` int NOT NULL,
  `Vehicle_Name` varchar(255) NOT NULL,
  `Vehicle_Category` varchar(255) NOT NULL,
  `Vehicle_Price` float(8,2) DEFAULT NULL,
  `Vehicle_Brand` varchar(45) DEFAULT NULL,
  `Vehicle_Details` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`Vehicle_ID`),
  KEY `Cus_Id` (`Cus_Id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

/*Data for the table `vehicle_info` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
