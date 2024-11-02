CREATE TABLE user_passwords (
	user_id INT AUTO_INCREMENT PRIMARY KEY,
	username VARCHAR(50) UNIQUE,
	password VARCHAR(255),
	firstname VARCHAR(50),
	lastname VARCHAR(50),
	dateofbirth DATE,
	specialization VARCHAR(100),
	date_added TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

INSERT INTO user_passwords (user_id, username, password, firstname, lastname, dateofbirth, specialization)
VALUES
(1, 'morthread', '091901', 'Kurt Kenji', 'Gonzales', '2001-09-19', 'Web Development'),
(2, 'ris', 'gablet', 'Gabriel', 'Arcega', '2001-12-13', 'Back End Developer'),
(3, 'maestro', 'a_squared', 'Aeron', 'Dualan', '2002-07-09', 'Back End Developer'),
(4, 'stnlysaurus', 'proline', 'Stanley', 'Panag', '2001-12-18', 'Front End Developer'),
(5, 'brnl_dyln', 'soyaaa',  'Dylan', 'Bernal', '2001-12-01', 'Front End Developer');

