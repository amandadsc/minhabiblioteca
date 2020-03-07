create database minhabiblioteca;

use minhabiblioteca;

create table livros(
    cod int primary key auto_increment,
    titulo varchar(50) unique,
    autor varchar(50),
    editora varchar(50),
    tipo varchar(50),
    genero varchar(50),
    emprestado varchar(10)
);

