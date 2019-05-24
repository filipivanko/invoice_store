DROP DATABASE IF EXISTS certificate_store_database;
CREATE DATABASE certificate_store_database;
USE certificate_store_database;

CREATE TABLE ssl_certificate(
ID varchar(256) NOT NULL,
certificate_name varchar (256),
site_certificate varchar(5000),
PRIMARY KEY (ID)
)


CREATE TABLE chain_certificate(
ID varchar(256) NOT NULL,
certificate_name varchar (256),
site_url varchar(256);
chain_certificate varchar(5000),
PRIMARY KEY (ID)
)


CREATE TABLE private_key(
ID varchar(256) NOT NULL,
private_key varchar(5000),
PRIMARY KEY (ID)
)

CREATE TABLE csr(
ID varchar(256) NOT NULL,
csr varchar(5000),
PRIMARY KEY (ID)
)

