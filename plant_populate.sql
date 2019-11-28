create database plant_database;
use plant_database;

create table shape_index  (
  shape_id varchar(10) primary key,
  shape_size char(40) not null
);

create table water_index  (
  water_id varchar(10) primary key,
  water_amount char(40) not null
);

create table cost_index  (
  cost_id varchar(10) primary key,
  cost_amount char(40) not null
);

create table plant_index  (
  plant_id varchar(10) primary key,
  plant_botanical char(100) not null,
  plant_common char(100) not null,  
  shape_id varchar(10) not null,  
  water_id varchar(10) not null,
  plant_height char(20) not null,
  plant_width char(20) not null,  
  cost_id varchar(10) not null,  
);



insert into shape_index  (
	shape_id, shape_size)values(
	'1', 'ground'
);
insert into shape_index  (
	shape_id, shape_size)values(
	'2', 'shrub'
);
insert into shape_index  (
	shape_id, shape_size)values(
	'3', 'tree'
);



insert into water_index  (
	water_id, water_amount)values(
	'1', 'low'
);
insert into water_index  (
	water_id, water_amount)values(
	'2', 'moderate'
);
insert into water_index  (
	water_id, water_amount)values(
	'3', 'high'
);



insert into cost_index  (
	cost_id, cost_amount)values(
	'1', '$3.99'
);
insert into cost_index  (
	cost_id, cost_amount)values(
	'2', '$7.99'
);
insert into cost_index  (
	cost_id, cost_amount)values(
	'3', '$11.99'
);



insert into plant_index  (
	plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values(
	'1', 'Salvia mellifera', 'Black Sage', '1', '1', '3-6 ft tall', '10 ft wide', '2'
);
insert into plant_index  (
	plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values(
	'2', 'Salvia apiana', 'White Sage', '1', '1', '3-5 ft tall', '3-8 ft wide', '2'
);
insert into plant_index  (
	plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values(
	'3', 'Berberis nevinii', 'Nevins Barberry', '2', '1', '3-7 ft tall', '6-12 ft wide', '3'
);