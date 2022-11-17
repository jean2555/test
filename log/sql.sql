CREATE DATABASE 'database';

CREATE TABLE 'user'(

'id' INT NOT NULL AUTOINCREMENT,
'name' NOTNULL,
'email' NOTNULL,
'password' NOTNULL,
'number' NOTNULL,
'genre' NOTNULL
PRIMARY KEY('id'))
ENGINE=InnoDB;