-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.31 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.3.0.6589
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for student_management_system
CREATE DATABASE IF NOT EXISTS `student_management_system` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `student_management_system`;

-- Dumping structure for table student_management_system.acadamic_officer
CREATE TABLE IF NOT EXISTS `acadamic_officer` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table student_management_system.acadamic_officer: ~2 rows (approximately)
DELETE FROM `acadamic_officer`;
INSERT INTO `acadamic_officer` (`id`, `name`, `email`, `mobile_number`, `password`) VALUES
	(1, 'Saman Kumara', 'saman@gmail.com', '0786545213', '112233'),
	(2, 'Nisal', 'nisal@gmail.com', '0740826598', '442211');

-- Dumping structure for table student_management_system.add_lesson_notes
CREATE TABLE IF NOT EXISTS `add_lesson_notes` (
  `id` int NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `path` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table student_management_system.add_lesson_notes: ~1 rows (approximately)
DELETE FROM `add_lesson_notes`;
INSERT INTO `add_lesson_notes` (`id`, `title`, `grade`, `subject`, `path`) VALUES
	(1, 'Web Programming', '12', 'ICT', 'resource//640b4a6f7ef08.pdf');

-- Dumping structure for table student_management_system.add_new_assignments
CREATE TABLE IF NOT EXISTS `add_new_assignments` (
  `id` int NOT NULL AUTO_INCREMENT,
  `assignment_id` varchar(100) NOT NULL,
  `topic` varchar(50) NOT NULL,
  `start_date` date NOT NULL,
  `end_date` date NOT NULL,
  `subject` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `path` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table student_management_system.add_new_assignments: ~1 rows (approximately)
DELETE FROM `add_new_assignments`;
INSERT INTO `add_new_assignments` (`id`, `assignment_id`, `topic`, `start_date`, `end_date`, `subject`, `grade`, `path`) VALUES
	(1, 'Web/01/02/1235', 'Web Designing', '2023-03-03', '2023-03-24', 'ICT', '12', 'resource//640b4ad85e0d4.pdf');

-- Dumping structure for table student_management_system.admin
CREATE TABLE IF NOT EXISTS `admin` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table student_management_system.admin: ~2 rows (approximately)
DELETE FROM `admin`;
INSERT INTO `admin` (`id`, `name`, `email`, `password`) VALUES
	(1, 'Kehan Hasalawa', 'kehan@gmail.com', '123'),
	(2, 'Saman', 'saman@gmail.com', '852');

-- Dumping structure for table student_management_system.release_assignment_marks
CREATE TABLE IF NOT EXISTS `release_assignment_marks` (
  `rm_id` int NOT NULL AUTO_INCREMENT,
  `stu_id` int NOT NULL,
  `ass_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `stu_name` varchar(50) NOT NULL,
  `stu_grade` varchar(50) NOT NULL,
  `stu_marks` char(50) NOT NULL,
  PRIMARY KEY (`rm_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table student_management_system.release_assignment_marks: ~2 rows (approximately)
DELETE FROM `release_assignment_marks`;
INSERT INTO `release_assignment_marks` (`rm_id`, `stu_id`, `ass_id`, `stu_name`, `stu_grade`, `stu_marks`) VALUES
	(1, 1, 'Web/01/02/1235', 'Ravindu', '9', '75%'),
	(2, 5, 'Web/01/02/1235', 'Charuka', '7', '90%');

-- Dumping structure for table student_management_system.students
CREATE TABLE IF NOT EXISTS `students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `grade` varchar(2) NOT NULL,
  `password` varchar(25) NOT NULL,
  PRIMARY KEY (`id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table student_management_system.students: ~5 rows (approximately)
DELETE FROM `students`;
INSERT INTO `students` (`id`, `name`, `email`, `mobile_number`, `grade`, `password`) VALUES
	(1, 'Ravindu', 'hasalawakehan@gmail.com', '0716545236', '9', '12345'),
	(2, 'Nethsara', 'nethsara@gmail.com', '0789636854', '12', '741'),
	(3, 'Tharindu', 'tharindu@gmail.com', '0769545236', '8', '7536'),
	(4, 'Thiwanka', 'thiwanka@gmail.com', '0769875423', '10', '8569'),
	(5, 'Charuka', 'charuka@gmail.com', '0775698745', '7', '1236987');

-- Dumping structure for table student_management_system.student_marks
CREATE TABLE IF NOT EXISTS `student_marks` (
  `m_id` int NOT NULL AUTO_INCREMENT,
  `id` varchar(10) NOT NULL,
  `ass_id` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `name` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `grade` varchar(5) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `marks` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`m_id`) USING BTREE
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table student_management_system.student_marks: ~2 rows (approximately)
DELETE FROM `student_marks`;
INSERT INTO `student_marks` (`m_id`, `id`, `ass_id`, `name`, `grade`, `marks`) VALUES
	(1, '1', 'Web/01/02/1235', 'Ravindu', '9', '75%'),
	(2, '5', 'Web/01/02/1235', 'Charuka', '7', '90%');

-- Dumping structure for table student_management_system.stu_upload_assignment
CREATE TABLE IF NOT EXISTS `stu_upload_assignment` (
  `up_id` int NOT NULL AUTO_INCREMENT,
  `stu_id` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `subject` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `upl_path` varchar(100) NOT NULL,
  PRIMARY KEY (`up_id`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table student_management_system.stu_upload_assignment: ~1 rows (approximately)
DELETE FROM `stu_upload_assignment`;
INSERT INTO `stu_upload_assignment` (`up_id`, `stu_id`, `name`, `subject`, `grade`, `upl_path`) VALUES
	(33, '1', 'Ravindu', 'ICT', '12', 'resource//640b50876bf01.zip');

-- Dumping structure for table student_management_system.teachers
CREATE TABLE IF NOT EXISTS `teachers` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile_number` varchar(10) NOT NULL,
  `subject` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `grade` varchar(2) NOT NULL,
  `password` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table student_management_system.teachers: ~3 rows (approximately)
DELETE FROM `teachers`;
INSERT INTO `teachers` (`id`, `name`, `email`, `mobile_number`, `subject`, `grade`, `password`) VALUES
	(1, 'Pradeep', 'pradeep@gmail.com', '0776545829', 'English', '10', '741'),
	(2, 'Sanjeewa', 'sanjeewa@gmail.com', '0764562138', 'art', '12', '963'),
	(3, 'Leelawathi', 'leelawathi@gmail.com', '0756142693', 'Science', '10', '456');

-- Dumping structure for table student_management_system.verification_codes_academic
CREATE TABLE IF NOT EXISTS `verification_codes_academic` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `code` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table student_management_system.verification_codes_academic: ~4 rows (approximately)
DELETE FROM `verification_codes_academic`;
INSERT INTO `verification_codes_academic` (`id`, `user_id`, `code`, `created_at`) VALUES
	(1, 2, '452703642', '2023-03-10 11:35:28'),
	(2, 2, '1617908513', '2023-03-10 11:44:27'),
	(3, 2, '217154677', '2023-03-10 11:52:49'),
	(4, 2, '781159148', '2023-03-10 11:55:13');

-- Dumping structure for table student_management_system.verification_codes_students
CREATE TABLE IF NOT EXISTS `verification_codes_students` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `code` varchar(20) NOT NULL,
  `current_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table student_management_system.verification_codes_students: ~2 rows (approximately)
DELETE FROM `verification_codes_students`;
INSERT INTO `verification_codes_students` (`id`, `user_id`, `code`, `current_date`) VALUES
	(1, 1, '2062890906', '2023-03-10 12:17:18'),
	(2, 1, '1615632274', '2023-03-10 12:22:01'),
	(3, 1, '1965065752', '2023-03-10 13:37:58');

-- Dumping structure for table student_management_system.verification_code_teacher
CREATE TABLE IF NOT EXISTS `verification_code_teacher` (
  `id` int NOT NULL AUTO_INCREMENT,
  `user_id` int NOT NULL,
  `code` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table student_management_system.verification_code_teacher: ~2 rows (approximately)
DELETE FROM `verification_code_teacher`;
INSERT INTO `verification_code_teacher` (`id`, `user_id`, `code`, `date`) VALUES
	(1, 1, '1918710223', '2023-03-10 11:56:55'),
	(2, 1, '593551765', '2023-03-10 11:58:15');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
