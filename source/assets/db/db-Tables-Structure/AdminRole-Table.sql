CREATE TABLE areesemainadmin (
  id int(11) AUTO_INCREMENT PRIMARY KEY not null,
  adminName varchar(255) not null,
  email varchar(255) not null,
  adminRole varchar(20) not null,
  pass varchar(255) not null
);