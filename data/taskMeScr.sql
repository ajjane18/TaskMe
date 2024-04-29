/*Creating a database*/
CREATE DATABASE taskMe;
USE taskMe;

/* Creating a table for Alerts */
CREATE TABLE alert(
  idAlert INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  alertmsg VARCHAR(45)
);

/*Creating the table for User*/
CREATE TABLE users(
  iduser INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_name VARCHAR(45) NOT NULL,
  passW VARCHAR(45) NOT NULL,
  idAlert INT(11) UNSIGNED,
  FOREIGN KEY(idAlert) REFERENCES alert(idAlert)
);

/* Creating the table for guests*/
CREATE TABLE guest(
  idGuest INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  user_name VARCHAR(45) NOT NULL,
  full_name VARCHAR(45) NOT NULL,
  age INT(11) NOT NULL,
  passW VARCHAR(45) NOT NULL,
  email VARCHAR(45) NOT NULL
);

/*Creating the table for events */
CREATE TABLE eventList(
  idEvents INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  Date DATE NOT NULL,
  Time VARCHAR(45) NOT NULL,
  iduser INT(11) UNSIGNED,
  idAlert INT(11) UNSIGNED,
  FOREIGN KEY(idAlert) REFERENCES alert(idAlert),
  FOREIGN KEY(iduser) REFERENCES users(iduser)
);

/* Creating a table for task*/
CREATE TABLE task(
  idTask INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
  opt VARCHAR(45) NOT NULL,
  Type VARCHAR(45) NOT NULL,
  Date DATE NOT NULL,
  iduser INT(11) UNSIGNED,
  idAlert INT(11) UNSIGNED,
  FOREIGN KEY(idAlert) REFERENCES alert(idAlert),
  FOREIGN KEY(iduser) REFERENCES users(iduser)
);
