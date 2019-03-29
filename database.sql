create database if not EXISTS php7days;

CREATE TABLE IF NOT EXISTS user (
id int(11) NOT NULL,
username varchar(30) NOT NULL,
password char(32) NOT NULL,
createtime int(11) NOT NULL,
createip int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
