drop database words;
create database words;

use words;

create table EnglishWords(
    WordID int unique not null AUTO_INCREMENT,
    Word varchar(255),
    PRIMARY KEY (WordID)
);