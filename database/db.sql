DROP if exists database alibaba_db;
create database alibaba_db;
grant all on alibaba_db.* TO "admin"@"localhost" identified by "admin" ;
use alibaba_db;

create TABLE USER(
    id INT PRIMARY KEY AUTO_INCREMENT,
    firstname VARCHAR(50) NOT NULL,
    lastname VARCHAR(50) NOT NULL,
    email VARCHAR(50) UNIQUE NOT NULL,
    `password` VARCHAR(300) NOT NULL,
    country VARCHAR(200) NOT NULL,
    company_name varchar(200) NOT NULL,
    phoneNumber VARCHAR(50) NOT NULL,
    trade_role ENUM('Buyer', 'Seller' , 'Both')
);