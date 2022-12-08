CREATE DATABASE School;

USE School;

CREATE TABLE Student (
    id int NOT NULL AUTO_INCREMENT UNIQUE,
    fname varchar(50),
    surname varchar(100),
    PRIMARY KEY (id)
);

CREATE TABLE Teacher (
    id int NOT NULL AUTO_INCREMENT UNIQUE,
    fname varchar(50),
    surname varchar(100),
    age int(3),
    subject_name int UNIQUE,
    PRIMARY KEY (id)
);

CREATE TABLE class_name (
    id int NOT NULL AUTO_INCREMENT UNIQUE,
    cname varchar(50),
    student_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (student_id) REFERENCES Student(id)
);

CREATE TABLE School_subject (
    id int NOT NULL AUTO_INCREMENT UNIQUE,
    sname varchar(50),
    class_id int,
    PRIMARY KEY (id),
    FOREIGN KEY (class_id) REFERENCES class_name(id)
);

CREATE TABLE User (
    id int NOT NULL AUTO_INCREMENT UNIQUE,
    login varchar(25) NOT NULL UNIQUE,
    password varchar(255) NOT NULL,
    fname varchar(50) NOT NULL,
    surname varchar(50) NOT NULL,
    age int(150) NOT NULL,
    admin boolean NOT NULL DEFAULT TRUE
);

INSERT INTO Student (fname, surname) VALUES ("Jakub", "Czyżewski");
INSERT INTO Student (fname, surname) VALUES ("Arkadiusz", "Dróżdż");
INSERT INTO Student (fname, surname) VALUES ("Oliwia", "Dziuba");
INSERT INTO Student (fname, surname) VALUES ("Maciej", "Wojtas");
INSERT INTO Student (fname, surname) VALUES ("Eliza", "Marzec");
INSERT INTO Student (fname, surname) VALUES ("Martyna", "Małek");
INSERT INTO Student (fname, surname) VALUES ("Hubert", "Sobczyk");
INSERT INTO Student (fname, surname) VALUES ("Hanna", "Zaremba");

INSERT INTO class_name (cname, student_id) VALUES ("1a", 1);
INSERT INTO class_name (cname, student_id) VALUES ("2a", 2);
INSERT INTO class_name (cname, student_id) VALUES ("2a", 3);
INSERT INTO class_name (cname, student_id) VALUES ("1a", 4);
INSERT INTO class_name (cname, student_id) VALUES ("3b", 5);
INSERT INTO class_name (cname, student_id) VALUES ("4a", 6);
INSERT INTO class_name (cname, student_id) VALUES ("3b", 7);
INSERT INTO class_name (cname, student_id) VALUES ("4a", 8);

INSERT INTO School_subject (sname, class_id) VALUES ("Historia", 1);
INSERT INTO School_subject (sname, class_id) VALUES ("Matematyka", 3);
INSERT INTO School_subject (sname, class_id) VALUES ("Polski", 5);

INSERT INTO Teacher (fname, surname, age, subject_name) VALUES ("Jan", "Kowalski", 47, 1);
INSERT INTO Teacher (fname, surname, age, subject_name) VALUES ("Anna", "Malinowska", 32, 2);
INSERT INTO Teacher (fname, surname, age, subject_name) VALUES ("Marian", "Nowak", 55, 3);



-- SHOW DATABASES;
-- SHOW TABLES;
SHOW COLUMNS FROM class_name;
SHOW COLUMNS FROM Teacher;
SHOW COLUMNS FROM School_subject;
SHOW COLUMNS FROM Student;
SHOW COLUMNS FROM user;





-- NIGDY WIĘCEJ TEGO GÓWNA