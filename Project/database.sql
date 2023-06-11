-- Create the database
CREATE DATABASE S_Stationery;

-- Switch to the newly created database
USE S_Stationery;

-- Create the 'users' table
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    user_key VARCHAR(100) NOT NULL
);

-- Create the 'products' table
CREATE TABLE products (
    id INT PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(100) NOT NULL,
    category VARCHAR(50) NOT NULL,
    description VARCHAR(255),
    price DECIMAL(10, 2) NOT NULL,
    rating DECIMAL(2, 1),
    product_key VARCHAR(100) NOT NULL
);
-- Create the 'cart' table
CREATE TABLE cart (
    id INT AUTO_INCREMENT PRIMARY KEY,
    user_id INT NOT NULL,
    product_id INT NOT NULL,
    quantity INT NOT NULL,
    FOREIGN KEY (user_id) REFERENCES users(id),
    FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Create a trigger for inserting new users
DELIMITER $$
CREATE TRIGGER before_insert_users
BEFORE INSERT ON users
FOR EACH ROW
BEGIN
    SET NEW.user_key = CONCAT(NEW.username, YEAR(CURDATE()), LPAD((SELECT COUNT(*) FROM users WHERE YEAR(CURDATE()) = YEAR(CURDATE())) + 1, 4, '0'));
END$$
DELIMITER ;

-- Create a trigger for inserting new products
DELIMITER $$
CREATE TRIGGER before_insert_products
BEFORE INSERT ON products
FOR EACH ROW
BEGIN
    SET NEW.product_key = CONCAT(NEW.name, YEAR(CURDATE()), LPAD((SELECT COUNT(*) FROM products WHERE YEAR(CURDATE()) = YEAR(CURDATE())) + 1, 4, '0'));
END$$
DELIMITER ;


