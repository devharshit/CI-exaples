 CREATE TABLE for Users
CREATE TABLE `users` ( `user_id` INT NOT NULL AUTO_INCREMENT , `userfname` VARCHAR(30) NOT NULL , `user_name` VARCHAR(15) NOT NULL , `user_password` VARCHAR(15) NOT NULL , `user_role` VARCHAR(30) NOT NULL , `user_status` ENUM('1','0') NOT NULL DEFAULT '1' , PRIMARY KEY (`user_id`)) ENGINE = InnoDB;

INSERT INTO `users` (`user_id`, `userfname`, `user_name`, `user_password`, `user_role`, `user_status`) VALUES (NULL, 'harshit', 'harsh', 'harsh', 'masteradmin', '1');

INSERT INTO `user_role` (`role_id`, `userrole`) VALUES (NULL, 'masteruser'), (NULL, 'marker'), (NULL, 'signer');

/*
command to backup database using command line : 
	/opt/lampp/bin/mysqldump -u root -p mine > /home/dells22/Desktop/mine.sql
 	                                      database   destination of DB file    
                                        */
