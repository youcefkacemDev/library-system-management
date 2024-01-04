CREATE DATABASE library_management_system;

CREATE TABLE student(
    id int not null AUTO_INCREMENT,
	student_id int(10) not null,
    student_name varchar(255) not null,
    student_branch varchar(100) not null,
    PRIMARY KEY(id)
);

CREATE TABLE category(
	category_id int(10) not null AUTO_INCREMENT,
    category_name varchar(255) not null,
    category_description text not null,
    PRIMARY KEY(category_id)
);

CREATE TABLE book(
	book_id int(10) not null AUTO_INCREMENT,
    book_isbn int(20) not null,
    book_title varchar(255) not null,
	book_author varchar(255) not null,
    number_of_copy int(2) not null,
    book_description text not null,
    category_id int(10) not null,
    PRIMARY KEY(book_id),
    FOREIGN KEY(category_id) REFERENCES category(category_id) ON DELETE NO ACTION
);

CREATE TABLE book_lending(
	id int not null AUTO_INCREMENT,
	book_id int(10) not null,
    student_id int(10) not null,
    lending_start date not null,
    lending_end date not null,
    PRIMARY KEY(id),
    FOREIGN KEY(book_id) REFERENCES book(book_id) ON DELETE NO ACTION,
    FOREIGN KEY(student_id) REFERENCES student(id) ON DELETE NO ACTION
);