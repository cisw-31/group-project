create database plant_db;

use plant_db;

create table plants
(
   plantId char(13) not null primary key,
   plantName char(80),
   catid int unsigned,
   price float(4,2) not null,
   description varchar(255)
);

create table categories
(
  catid int unsigned not null auto_increment primary key,
  catname char(60) not null
);