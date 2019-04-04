set autocommit=0;

create database if not exists visitor4u;

use visitor4u;

start transaction;

create table if not exists company
(
	idCompany int not null auto_increment primary key,
	companyName varchar (255) not null,
	street varchar (255) not null,
	number varchar (45) not null,
	postcode int not null,
	city varchar (255) not null 
)
;

create table if not exists user
(
	idUser int not null auto_increment primary key,
	firstname varchar (255) not null,
	lastname varchar (255) not null,
	username varchar (255) not null,
	password varchar (255) not null,
	privileges int not null,
	company_idCompany int not null,
	foreign key (company_idCompany) references company(idCompany)
)
;

create table if not exists employee
(
	idEmployee int not null auto_increment primary key,
	salutation varchar (255) not null,
	firstname varchar (255) not null,
	lastname varchar (255) not null,
	email varchar (255) not null,
	department varchar (255) not null,
	roomNo varchar (255) not null,
	phoneNo int not null,
	company_idCompany int not null,
	foreign key (company_idCompany) references company(idCompany)
)
;


create table if not exists visitors
(
	idVisitors int not null auto_increment primary key,
	salutation varchar (5),
	firstname varchar (255),
	lastname varchar (255),
	email varchar (255),
	companyName varchar (255),
	subject varchar (255),
	come_terminal varchar (255),
	go_terminal varchar (255),
	licensePlate varchar (255),
	come TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	go TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
	visited VARCHAR (255),
	title VARCHAR (255),
	dataProtection varchar (255),
	company_idCompany int not null,
	foreign key (company_idCompany) references company(idCompany)
)
;

create table if not exists settings
(
	idSettings int not null auto_increment primary key,
	set_title int not null,
	set_salutation int not null,
	set_firstname int not null,
	set_lastname int not null,
	set_email int not null,
	set_companyName int not null,
	set_subject int not null,
	set_visited int not null,
	set_terminal int not null,
	set_licensePlate int not null,
	set_max_terminal int not null,
	set_color varchar (45) not null,
	set_bg_color varchar (45) not null,
	set_link_dataProtection VARCHAR (255) not null,
	company_idCompany int not null,
	foreign key (company_idCompany) references company(idCompany)
)
;

commit;
