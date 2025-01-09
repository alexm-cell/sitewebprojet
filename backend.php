CREATE DATABASE ecommerce;
USE ecommerce;

CREATE TABLE products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    price DECIMAL(10, 2) NOT NULL,
    description TEXT,
    image_url VARCHAR(255)
);

INSERT INTO products (name, price, description, image_url)
VALUES
('Produit 1', 19.99, 'Description du produit 1', 'image1.jpg'),
('Produit 2', 29.99, 'Description du produit 2', 'image2.jpg'),
('Produit 3', 39.99, 'Description du produit 3', 'image3.jpg');
