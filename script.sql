
---Create The User Table

create table users(
id int(5) PRIMARY KEY AUTO_INCREMENT,
email VARCHAR(50) UNIQUE,
firstname VARCHAR(40),
surname VARCHAR(40),
password VARCHAR(100),
date_created TIMESTAMP DEFAULT current_timestamp()

);

