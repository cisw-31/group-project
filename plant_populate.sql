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
  cost_amount varchar(40) not null
);

create table plant_index  (
  plant_id varchar(10) primary key,
  plant_botanical char(100) not null,
  plant_common char(100) not null,  
  shape_id varchar(10) not null,  
  water_id varchar(10) not null,
  plant_height char(20) not null,
  plant_width char(20) not null,  
  cost_id varchar(10) not null 
);


/* #####below is for user account##### */
/* #####table: "customers" is created##### */

create table customers
(
  customerid int unsigned not null auto_increment primary key,  

  /* #####below is account log in info ##### */
  username char(16) not null,
  password char(40) not null,

  /* #####below is customer shipping info ##### */
  ship_name char(60) DEFAULT NULL,
  ship_address1 char(80) DEFAULT NULL,
  ship_address2 char(80) DEFAULT NULL,
  ship_city char(30) DEFAULT NULL,
  ship_state char(20) DEFAULT NULL,
  ship_zip char(10) DEFAULT NULL,
  ship_country char(20) DEFAULT NULL
);

insert into customers  (
  /* #####test user account##### */
	username, password)values(
	'zijie', sha1('zijie')
);

/* ########## */

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
	'1', '3.99'
);
insert into cost_index  (
	cost_id, cost_amount)values(
	'2', '7.99'
);
insert into cost_index  (
	cost_id, cost_amount)values(
	'3', '11.99'
);


insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('1','Acer macrophyllum','Big Leaf Maple','3','3','30 - 115 ft tall','65 ft wide','3');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('2','Agave shawii','Coastal Agave','2','1','7 - 13 ft tall','3 ft wide','2');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('3','Aquilegia formosa','Western Columbine','1','2','1 - 3 ft tall','1 ft wide','1');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('4','Asclepias californica','California Milkweed','1','2','3 ft tall','3 ft wide','1');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('5','Berberis nevinii','Nevins Barberry','2','1','3 - 7  ft tall','6 - 12 ft wide','3');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('6','Ceanothus verrucosus','White Coast Ceanothus','2','1','4 - 10 ft tall','8 ft wide','2');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('7','Cercis occidentalis','Western Redbud','2','1','10 - 20 ft tall','10 - 15 ft wide','3');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('8','Chilopsis linearis','Desert Willow','3','1','5 - 25 ft tall','10 - 20 ft wide','3');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('9','Dudleya edulis','Fingertips','1','1','4 - 8 ft tall','1 ft wide','1');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('10','Erigeron glaucus','Seaside Fleabane','1','1','1 ft tall','2 ft wide','1');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('11','Eschscholzia californica','California Poppy','1','1','1 - 2 ft tall','1 - 2 ft wide','1');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('12','Heteromeles arbutifolia','Toyon','2','1','6 - 30 ft tall','10 - 15 ft wide','2');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('13','Lilium pardalinum','Tiger Lily','1','3','6 - 8 ft tall','1 ft wide','1');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('14','Lobelia cardinalis','Cardinal Flower','1','3','3 - 6 ft tall','2 - 5 ft wide','1');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('15','Lupinus arboreus','Coastal Bush Lupine','1','2','3 - 7 ft tall','4 ft wide','1');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('16','Lupinus succulents','Succulent Lupine','1','1','2 - 4 ft tall','3 ft wide','1');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('17','Muhlenbergia rigens','Deergrass','2','1','4 - 5 ft tall','4 ft wide','2');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('18','Platanus racemosa','Western Sycamore','3','3','20 - 50 ft tall','50 ft wide','3');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('19','Polystichum munitum','Sword Fern','1','1','2 - 6 ft tall','2 - 3 ft wide','1');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('20','Populus fremontii','Fremont Cottonwood','3','3','40 - 120 ft tall','35 ft wide','3');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('21','Quercus agrifolia','Coast Live Oak','3','1','25 - 80 ft tall','15 - 35 ft wide','3');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('22','Quercus lobata','Valley Oak','3','1','60 - 100 ft tall','50 ft wide','3');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('23','Rhamnus ilicifolia','Hollyleaf Redberry','2','1','1 - 9 ft tall','3 - 9 ft wide','2');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('24','Romneya coulteri','Coulters Matilija Poppy','2','1','7 - 10 ft tall','20 ft wide','2');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('25','Salix lasiolepis','Arroyo Willow','3','3','7 - 35 ft tall','15 ft wide','3');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('26','Salvia apiana','White Sage','1','1','3 - 5 ft tall','3 - 8 ft wide','2');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('27','Salvia mellifera','Black Sage','1','1','3 - 6 ft tall','10 ft wide','2');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('28','Sequoia sempervirens','Coast Redwood','3','1','60 - 380 ft tall','45 ft wide','2');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('29','Sisyrinchium bellum','Blue Eyed Grass','1','1','1 - 2 ft tall','3 ft wide','1');
insert into plant_index  (plant_id, plant_botanical, plant_common, shape_id, water_id, plant_height, plant_width, cost_id)values('30','Washingtonia filifera','Fan Palm','3','3','50 - 65 ft tall','10 - 15 ft wide','3');
