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

