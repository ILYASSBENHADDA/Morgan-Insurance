-- Creation of Database
CREATE DATABASE morgan_db;

-- Creation of table Essance devis for one year
CREATE TABLE devis_essence_an (
    E_CV_4 int(100) not null,
    E_CV_5 int(100) not null,
    E_CV_6 int(100) not null,
    E_CV_7 int(100) not null,
    E_CV_8 int(100) not null,
    E_CV_9 int(100) not null,
    E_CV_10 int(100) not null,
    E_CV_11 int(100) not null
);

-- Creation of table Diesel devis for one year
CREATE TABLE devis_diesel_an (
    D_CV_4 int(100) not null,
    D_CV_5 int(100) not null,
    D_CV_6 int(100) not null,
    D_CV_7 int(100) not null,
    D_CV_8 int(100) not null,
    D_CV_9 int(100) not null,
    D_CV_10 int(100) not null,
    D_CV_11 int(100) not null
);

-- Creation of table Admin Login
CREATE TABLE admin_pass (
    admin_name varchar(255) not null,
    password varchar(255) not null
);

-- Insert data into table Essance
INSERT INTO devis_essence_an (E_CV_4, E_CV_5, E_CV_6, E_CV_7, E_CV_8, E_CV_9, E_CV_10, E_CV_11)
    VALUES ('2284.66', '2284.66', '2284.66', '2284.66', '2284.66', '2284.66', '2284.66', '2284.66');

-- Insert data into table Diesel
INSERT INTO devis_diesel_an (D_CV_4, D_CV_5, D_CV_6, D_CV_7, D_CV_8, D_CV_9, D_CV_10, D_CV_11)
    VALUES ('2284.66', '2284.66', '2284.66', '2284.66', '2284.66', '2284.66', '2284.66', '2284.66');

-- Insert data into table Admin_Pass
INSERT INTO admin_pass (admin_name, password)
    VALUES ('rachidchafiq', MD5('morgan#1234'));