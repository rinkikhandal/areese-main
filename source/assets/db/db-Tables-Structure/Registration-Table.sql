CREATE TABLE registration(
id int(11) AUTO_INCREMENT PRIMARY KEY not null,
username varchar(255) not null,
email varchar(255) not null,
phone varchar(20) not null,
pass varchar(255) not null,
about varchar(255) null,
profilePic varchar(255) null
);