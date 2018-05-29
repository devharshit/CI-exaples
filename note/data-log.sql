 CREATE TABLE for Users
CREATE TABLE `users` ( `user_id` INT NOT NULL AUTO_INCREMENT , `userfname` VARCHAR(30) NOT NULL , `user_name` VARCHAR(15) NOT NULL , `user_password` VARCHAR(15) NOT NULL , `user_role` VARCHAR(30) NOT NULL , `user_status` ENUM('1','0') NOT NULL DEFAULT '1' , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;

INSERT INTO `users` (`user_id`, `userfname`, `user_name`, `user_password`, `user_role`, `user_status`) VALUES (NULL, 'harshit', 'harsh', 'harsh', 'masteradmin', '1');