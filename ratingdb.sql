create table avis(
    id int primary key,
    departement varchar(4) not null,
    promo varchar(24) not null,
    module varchar(24) not null,
    etudiant varchar(24) not null,
    commentaire varchar(300) not null,
    note int not null check (note >= 0 and note <= 5),
    date date not null default now()
);

insert into avis values (1, 'INFO', 'BUT1', 'M3104', 'Jean', 'Le cours est cool', 5, '2017-12-05');
insert into avis values (2, 'INFO', 'BUT2', 'R1-02', 'Adrien', 'Cest super le PHP', 2, '2017-08-04');
insert into avis values (3, 'INFO', 'BUT2', 'R1-05', 'Benjamin', 'Excellent', 3, '2017-11-01');
insert into avis values (4, 'INFO', 'BUT2', 'M3104', 'Corentin', 'Tres bien', 2, '2017-01-21');
insert into avis values (5, 'INFO', 'BUT1', 'R1-05', 'Axel', 'Pas mal', 1, '2018-01-01');
insert into avis values (6, 'INFO', 'BUT2', 'R1-05', 'Frederique','Je nai pas aimer', 2, '2017-04-08');
insert into avis values (7, 'INFO', 'BUT2', 'M3104', 'Raphael', 'Bien', 4, '2017-01-01');
insert into avis values (8, 'INFO', 'BUT2', 'M3104', 'Mayel', 'Cours tres interessant', 5, '2018-01-01');
insert into avis values (9, 'INFO', 'BUT2', 'R1-02', 'Noa', 'Cours tres long', 4, '2018-02-03');
insert into avis values (10, 'INFO', 'BUT1', 'R1-02', 'David', 'Cours tres interessant', 5, '2019-01-01');