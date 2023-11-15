create database db_showdeingressos;
show databases;
use db_showdeingressos;
select database();
create table meusingressos(
usuario varchar(20) primary key,
circo INT NOT NULL DEFAULT 0,
circomeia INT NOT NULL DEFAULT 0,
weeknd INT NOT NULL DEFAULT 0,
weekndmeia INT NOT NULL DEFAULT 0,
shrek INT NOT NULL DEFAULT 0,
shrekmeia INT NOT NULL DEFAULT 0,
festival INT NOT NULL DEFAULT 0,
festivalmeia INT NOT NULL DEFAULT 0,
fiesta INT NOT NULL DEFAULT 0,
fiestameia INT NOT NULL DEFAULT 0
);
show tables;
select * from meusingressos;	