drop database if exists SnackLab;
create database SnackLab;
use `SnackLab`;
create table `groups` (
    id int AUTO_INCREMENT,
    groupName varchar(100),
    groupPass varchar(100), 
    PRIMARY KEY(id)
);
INSERT INTO `groups` (groupName, groupPass)
VALUES ("oma's smaakzame keuken", 'willie');
create table `users` (
	id int AUTO_INCREMENT,
    username varchar(255),
    pass varchar(255),
    groupId int,
    PRIMARY KEY (id),
    FOREIGN KEY (groupId) REFERENCES `groups`(id)
);

INSERT INTO `users` (username, pass, groupId)
VALUES
('Jay', 'pass', 1),
('Jesse', 'kakkerlak', 1);

CREATE TABLE `recipes` (
    id int AUTO_INCREMENT,
    groupId int,
    userId int,
    datePosted date,
    recipeTitle varchar(100),
    recipeDescription text,
    shortRecipeDescription varchar(60),
    PRIMARY KEY (id),
    FOREIGN KEY (userId) REFERENCES `users`(id),
    FOREIGN KEY (groupId) REFERENCES `groups`(id)
);

INSERT INTO `recipes` (groupId, userId, recipeTitle, shortRecipeDescription) 
VALUES
(1, 1, 'broccolisoep', 'smaakame soep met 90 kilo broccoli'),
(1, 1, 'broccolisoep', 'smaakame soep met 90 kilo broccoli'),
(1, 1, 'broccolisoep', 'smaakame soep met 90 kilo broccoli'),
(1, 1, 'broccolisoep', 'smaakame soep met 90 kilo broccoli'),
(1, 1, 'broccolisoep', 'smaakame soep met 90 kilo broccoli'),
(1, 1, 'broccolisoep', 'smaakame soep met 90 kilo broccoli'),
(1, 1, 'broccolisoep', 'smaakame soep met 90 kilo broccoli'),
(1, 1, 'broccolisoep', 'smaakame soep met 90 kilo broccoli'),
(1, 1, 'broccolisoep', 'smaakame soep met 90 kilo broccoli'),
(1, 1, 'broccolisoep', 'smaakame soep met 90 kilo broccoli');