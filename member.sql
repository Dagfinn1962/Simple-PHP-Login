 CREATE TABLE users (ID MEDIUMINT NOT NULL AUTO_INCREMENT PRIMARY KEY, username VARCHAR(60), password VARCHAR(60)) 
ENGINE = INNODB
AUTO_INCREMENT = 3
AVG_ROW_LENGTH = 8192
CHARACTER SET utf8
COLLATE utf8_general_ci;

-- 

-- 
-- Dumping data for table user
--
INSERT INTO user VALUES
(1, 'support@aichatbot.ai', 'aichatbot', 'Bulldog@1979', 1,),
(2, 'dagfinnlindbom@hotmail.com', 'User', 'user', 1,);

-- 
-- Restore previous SQL mode
-- 
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;

-- 
-- Enable foreign keys
-- 
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
