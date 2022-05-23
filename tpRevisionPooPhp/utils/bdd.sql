create database articles;
use articles;
create table article(
id_art int auto_increment primary key not null,
nom_art varchar(50),
content_art text
)engine=InnoDB;

insert into article (nom_art,content_art) VALUES ("voiture","renault"),("velo","libre");