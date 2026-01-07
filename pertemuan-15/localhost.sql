

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";



CREATE DATABASE IF NOT EXISTS `db_pwd2025` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci;
USE `db_pwd2025`;



CREATE TABLE `tbl_tamu` (
  `cid` int NOT NULL,
  `cnama` varchar(100) DEFAULT NULL,
  `cemail` varchar(100) DEFAULT NULL,
  `cpesan` text,
  `dcreated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;



INSERT INTO `tbl_tamu` (`cid`, `cnama`, `cemail`, `cpesan`, `dcreated_at`) VALUES
(20, 'Nur Faddddd', 'a@gmail.com', 'sadadas faedfasd', '2025-12-24 12:21:52'),
(21, 'nicolas lim', 'sada@i.com', 'kskakds a da', '2025-12-24 12:22:04');


ALTER TABLE `tbl_tamu`
  ADD PRIMARY KEY (`cid`);


ALTER TABLE `tbl_tamu`
  MODIFY `cid` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;


