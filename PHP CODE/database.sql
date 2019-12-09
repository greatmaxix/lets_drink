DROP TABLE IF EXISTS users;
CREATE TABLE users (
  user_id int(10) AUTO_INCREMENT PRIMARY KEY,
  username varchar(100) NOT NULL UNIQUE,
  password VARCHAR(40) NOT NULL   
) ENGINE=InnoDB DEFAULT CHARSET=utf8; 

CREATE TABLE `Media` (
	`media_id`	int(11) NOT NULL,
	`title`	varchar(100) NOT NULL,
	`img`	varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

