CREATE TABLE alien_abduction (
	id INT(11) PRIMARY KEY NOT NULL AUTO_INCREMENT,
	first_name VARCHAR(30) NOT NULL,
	last_name VARCHAR(30) NOT NULL,
	when_it_happened VARCHAR(30) NOT NULL,
	how_long VARCHAR(30),
	how_many VARCHAR(30),
	alien_description VARCHAR(100) NOT NULL,
	what_they_did VARCHAR(250),
	other_abductees VARCHAR(10),
	abductee_description VARCHAR(100),
	other_info VARCHAR(100),
	email VARCHAR(50),
	report_date TIMESTAMP
);

INSERT INTO alien_abduction VALUES (
NULL,
'Jane',
'Doe',
'Wednesday',
'5 hours',
'8',
'Tall with big heads',
'Tractor Beam, knocked out, woke up in a field.',
'Yes',
'Frank, Agent K, JJ',
'They took my shoes.',
'JD@gmail.com',
NULL
);
