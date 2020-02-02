CREATE DATABASE kp_express_db;

USE kp_express_db;

CREATE TABLE users(
  id VARCHAR(36),
  name VARCHAR(20),
  email VARCHAR(30),
  password VARCHAR(50),
  phone_number VARCHAR(15),
  created_date TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP,
  updated_date TIMESTAMP NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY(id)
);