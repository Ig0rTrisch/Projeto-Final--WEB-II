create database if not exists InvestMais;
use InvestMais;

create table if not exists person(
	id_pessoa integer unique key not null auto_increment,
    name varchar(80) not null,
    cpf bigint unique key not null,
    birth_date date not null,
    email varchar(100) not null,
    primary key(id_pessoa)
);
create table if not exists employee(
	id_employee integer unique key not null auto_increment,
    registration integer not null,
    password varchar(50) not null,
    primary key(id_employee)
); 
create table if not exists client(
	id_client integer unique key auto_increment not null,
    login varchar(100) not null,
    password varchar(50) not null,
    primary key(id_client)
);
create table if not exists department(
	id_department integer unique key auto_increment not null,
    function_department varchar(50) not null,
    salary float(10,5) not null,
    primary key(id_department)
);
create table if not exists address(
	id_address integer not null unique key auto_increment,
    public_place varchar(30) not null,
    street_name varchar(100) not null,
    neighborhood varchar(50) not null,
    complement varchar(50) not null,
    number_of_address integer not null,
    zip_code bigint not null,
    primary key(id_address)
);
create table if not exists account(
	id_account integer not null auto_increment,
    balance float(6,2) not null,
    financing boolean not null,
    debit_per_month float(10,2) not null,
    primary key(id_account)
);