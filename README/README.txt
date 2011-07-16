This is a simple php,mysql forum.Users have to register and then login.It also has the option of private messaging among registered users.
Users have their own profiles with their details stored in it.Users can edit their personal information when required.

Login using login-form.php or register at register-form.htm to begin using the forum.
For a demo login using the id:Dave
			   password:dave 
				(For seeing the demo import the sql dump project.sql into your phpmyadmin)

Before using the forum the following tables must be created in your phpmyadmin:


CREATE TABLE IF NOT EXISTS `answers` (
  
`answerid` int(4) NOT NULL AUTO_INCREMENT,
  
`id` int(4) NOT NULL,
  
`name` varchar(30) NOT NULL,
  
`answer` varchar(1000) NOT NULL,
  
`datetime` datetime NOT NULL,
  
`likes` int(4) NOT NULL,
 
`dislikes` int(4) NOT NULL,
 
PRIMARY KEY (`answerid`),
  
KEY `answerid` (`answerid`)

)



CREATE TABLE IF NOT EXISTS `members` (
  
`id` int(4) NOT NULL AUTO_INCREMENT,
  
`firstname` varchar(30) NOT NULL,
 
`email` varchar(40) NOT NULL,
 
`login` varchar(30) NOT NULL,
  
`passwd` varchar(30) NOT NULL,
  
`age` int(3) NOT NULL,
  
`interests` varchar(300) NOT NULL,
  
`phone` int(10) NOT NULL,
  
`threads` int(4) NOT NULL,
  
`posts` int(4) NOT NULL,
  
`last` datetime NOT NULL,
 
 PRIMARY KEY (`id`),
  
KEY `id` (`id`)

)



CREATE TABLE IF NOT EXISTS `recdmsgs` (
  
`from_user` varchar(30) NOT NULL,
  
`to_user` varchar(30) NOT NULL,
  
`message_title` varchar(50) NOT NULL,
 
`message_contents` varchar(500) NOT NULL,
 
  
`datetime` datetime NOT NULL,
  
`message_id` int(4) NOT NULL AUTO_INCREMENT,
  
PRIMARY KEY (`message_id`),
  
KEY `message_id` (`message_id`)

)



CREATE TABLE IF NOT EXISTS `recdmsgs` (
  
`from_user` varchar(30) NOT NULL,
  
`to_user` varchar(30) NOT NULL,
  
`message_title` varchar(50) NOT NULL,
  
`message_contents` varchar(500) NOT NULL,
  
  
`datetime` datetime NOT NULL,
  
`message_id` int(4) NOT NULL AUTO_INCREMENT,
  
PRIMARY KEY (`message_id`),
  
KEY `message_id` (`message_id`)
)



CREATE TABLE IF NOT EXISTS `threads` (
  
`id` int(4) NOT NULL AUTO_INCREMENT,
  
`subject` text NOT NULL,

`message` varchar(500) NOT NULL,
  
`name` varchar(30) NOT NULL,
  
`datetime` datetime NOT NULL,
 
`views` int(4) NOT NULL,
  
`replies` int(4) NOT NULL,
  
PRIMARY KEY (`id`),
 
KEY `id` (`id`)

)