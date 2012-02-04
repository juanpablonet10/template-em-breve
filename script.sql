-- Template em breve
-- Tabela para newsletter
-- Lembre-se de alterar o arquivo newsletter.php com os mesmos nomes que estão sendo usados aqui.
create database if not exists embreve;
use embreve;
create table if not exists tbl_newsletter(
	nwt_id int auto_increment not null,
	nwt_email varchar(80) not null unique,
	primary key(nwt_id)
)
