create database store_db;

use store_db;

create table wines
(
   productId char(13) not null primary key,
   productName char(80),
   productOrigin char(80),
   yearMade int not null,
   catid int unsigned,
   price float(4,2) not null,
   description varchar(255)
);

create table categories
(
  catid int unsigned not null auto_increment primary key,
  catname char(60) not null
);