CREATE TABLE member
(
id SERIAL,
firstName VARCHAR(40),
lastName VARCHAR(60),
Email VARCHAR(60),
Password VARCHAR(120),
Phone integer NOT NULL
);

CREATE TABLE categories
(
categoryID SERIAL,
categoryName VARCHAR(225)
);

CREATE TABLE product
(
productID SERIAL,
categoryID integer NOT NULL,
productCode VARCHAR(10),
productName 	varchar(225),
listPrice integer,
productInfo VARCHAR(1500),
Image VARCHAR(300)
);

