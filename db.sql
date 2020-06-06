create table users(
  name varchar(30),
  regno varchar(9) primary key,
  email varchar(50) not null,
  usnm varchar(20) not null,
  pswd varchar(60) not null,
  branch varchar(30) not null
);

create table forum (
  id int(11) auto_increment primary key,
  que varchar(200) not null,
  ans varchar(500)
);

create table books (
  file varchar(60) primary key,
  book varchar(30) not null,
  author varchar(30) not null,
  subject varchar(20) not null
);