CREATE TYPE StatusENUM AS ENUM('user', 'admin');
CREATE TABLE member
(
memberID SERIAL  PRIMARY KEY,
firstName VARCHAR(40),
lastName VARCHAR(60),
Email VARCHAR(60),
Password VARCHAR(120),
status StatusENUM
);

CREATE TABLE categories
(
categoryID SERIAL PRIMARY KEY,
categoryName VARCHAR(225)
);

CREATE TABLE product
(
productID SERIAL PRIMARY KEY,
categoryID integer NOT NULL REFERENCES categories (categoryID),
productCode VARCHAR(10),
productName 	varchar(225),
listPrice integer,
productInfo VARCHAR(1500),
Image VARCHAR(1500)
);

INSERT INTO member (memberID, firstName, lastName, Email, Password, status) VALUES
    (24, 'ilia', 'Sidamonidze', 'simon.ilia.sd@gmail.com', '$2y$10$YArzf2kS1xjgcY.dlqGaPuaDS8fkfpek1KsxpwA7zmjJtyzxXYlR.', 'admin'),
    (2, 'akaki', 'Sidamonidze', 'akaki@gmail.com', '$2y$10$YArzf2kS1xjgcY.dlqGaPuaDS8fkfpek1KsxpwA7zmjJtyzxXYlR.', 'user');

	INSERT INTO categories (categoryID, categoryName) VALUES
    (1, 'Suppluments'),
    (2, 'Equipments');








CREATE TABLE assignmentProducts
(
	id SERIAL PRIMARY KEY,
	categoryID SERIAL,
	Name VARCHAR(220) NOT NULL,
	Description VARCHAR(1500)  NOT NULL,
	Price integer,
	Image VARCHAR(300)
);

INSERT INTO assignmentProducts (categoryID, Name, Description, Price, Image) VALUES
    ('1', 'ASUS VivoBook TP410UA-DB51T 14', 'Touch Laptop i5-7200U 2.5GHz 6GB 1TB WIN10', 199, 'images/s-500.JPG'),
    ('2', 'Dell XPS', '13 i5 2.3GHz 8GB RAM 128GB SSD Win 10', 399, 'images/Dell_XPS.jpg'),
	('3', 'Asus P2540UA-AB51', '15.6" i5-7200U 2.5GHz 8GB 1TB Win 10', 299, 'images/Asus P2540UA-AB51.jpg'),
	('4', 'Asus ROG STRIX GL503VD', '15.6,i7-7700HQ 16GB RAM 1TB SSD GTX1050', 1000, 'images/Asus ROG STRIX GL503VD.jpg'),
	('5', 'Hewlett Packard 17-ap010nr Omen', '17" Intel i7-7700HQ 16GB RAM  2LV57UA#AB', 1200, 'images/Hewlett Packard 17-ap010nr Omen.jpg');


