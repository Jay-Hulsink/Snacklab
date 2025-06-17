drop database if exists SnackLab ;
create database SnackLab;
use SnackLab;
create table users (
	userId  int AUTO_INCREMENT,
    username varchar(255),
    pass varchar(255),
    PRIMARY KEY (userId)
);