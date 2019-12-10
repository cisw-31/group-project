create database admin_database;
use admin_database;



create table Admin (
    UserName varchar(30) not null,
    Passwrd varchar(30) not null,
    PRIMARY KEY (UserName)
);


insert into Admin (UserName, Passwrd) values ('jack', '1234');
insert into Admin (UserName, Passwrd) values ('evan', 'abcd');
insert into Admin (UserName, Passwrd) values ('eder', '5678');
insert into Admin (UserName, Passwrd) values ('trenton', 'efgh');
insert into Admin (UserName, Passwrd) values ('ivan', '4321');
insert into Admin (UserName, Passwrd) values ('junpeng', 'dcba');
