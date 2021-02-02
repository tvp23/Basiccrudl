create database basiccrud;

use basiccrud;

create table student (
    id int not null auto_increment,
    voornaam varchar(50),
    achternaam varchar(50),
    primary key (id)
);