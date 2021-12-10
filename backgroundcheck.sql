drop database if exists backgroundcheck;
create database backgroundcheck;

use backgroundcheck;



create table users(
id integer,
name varchar(50) not null,
email varchar(100),
telNo varchar(20) not null unique,
password varchar(20),
primary key(id)
);

create table criminals(
id integer,
surname varchar(50) not null,
firstname varchar(50) not null,
othernames varchar(50),
dob date,
nationalid varchar(30),
crime varchar(30),
doc date,
primary key(id)
);

create table admincredentials(
username varchar(200),
password varchar(20)
);





