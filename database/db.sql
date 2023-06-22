DROP DATABASE if exists  alibaba_db;
create database alibaba_db;
grant all on alibaba_db.* TO "admin"@"localhost" identified by "admin" ;
use alibaba_db;

create TABLE user(
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

CREATE TABLE IF NOT EXISTS product(
    user_id INT NOT NULL,
    product_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    category VARCHAR(100),
    product_name VARCHAR(100),
    quantity INT,
    price DOUBLE,
    product_img_url_1 VARCHAR(100),
    product_img_url_2 VARCHAR(100),
    product_img_url_3 VARCHAR(100),
    product_img_url_4 VARCHAR(100),
    product_img_url_5 VARCHAR(100),
    product_img_url_6 VARCHAR(100)

);

CREATE TABLE IF NOT EXISTS cart(
    cart_id INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES user(id),
    FOREIGN KEY (product_id) REFERENCES product(product_id)
);