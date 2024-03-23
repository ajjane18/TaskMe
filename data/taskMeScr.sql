/*Creating a database*/
CREATE DATABASE TASKME;

/*Creating the table for User*/
CREATE TABLE user(
		iduser INT PRIMARY KEY,
        user_name VARCHAR(45),
        F_name VARCHAR(45),
        L_name VARCHAR(45),
        age VARCHAR(45),
        email VARCHAR(45)
);

/*Inserting values for the user*/
/* INSERT INTO user(iduser, user_name, F_name, L_name, age, email) VALUES( , " ", " ", " ", " ", " "); */

/* Creating the table for guests*/
CREATE TABLE Guest(
		idGuest INT PRIMARY KEY, 
		F_name VARCHAR(45),
        L_name VARCHAR(45),
        age VARCHAR(45),
        email VARCHAR(45)
);

/* Inserting valuse for the Guest */
/* INSERT INTO Guest(idGuest, F_name, L_name, age, email) VALUE( , " ", " ", " ", " ", " "); */

/* Creating the table for Login*/
CREATE TABLE Login(
	id_login INT PRIMARY KEY,
    user_iduser INT ,
    Alert_idAlert INT
);

/*Inserting values into Login */
/* INSERT INTO Login(id_login) VALUES( , , ); */

/*Creating the table for events */
CREATE TABLE Events(
		idEvents INT PRIMARY KEY,
        Date date,
        Time varchar(45),
        Alert_idAlert INT
);

/*Inserting values for the events*/
/*INSERT INTO Events(idEvents, Date, Time, Alert_idAlert) VALUE ( , , " ", );*/

/* Creating a table for task*/
CREATE TABLE Task(
		idTask INT PRIMARY KEY,
        Type VARCHAR(45),
            Date date,
        Alert_idAlert INT
);

/*Inserting values for the task*/
/*INSERT INTO Task(idTask, Type, Date Alert_idAlert)VALUE( , " ",  , );*/

/* Creating a table for Alerts */
CREATE TABLE Alert (
    idAlert INT PRIMARY KEY
);

/* Inserting Values into Alert table */
/* INSERT INTO Alert(idAlert) VALUES(); */

