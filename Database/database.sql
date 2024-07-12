drop database if exists dbsenactec;
create database dbsenactec;
use dbsenactec;
create table if not exists users (
  id int not null auto_increment,
  name varchar(255) not null,
  email varchar(255) not null,
  password varchar(255) not null,
  primary key (id)
);