create database Prova2;
use Prova2;
DROP TABLE IF EXISTS fluxo_caixa;
create table fluxo_caixa (
	id 		int 			not null auto_increment,
    data 		DATE	        not null,
    tipo		varchar(10)	    not null, 
    valor	decimal(10,2)		not null, 
   historico   varchar(150)     not null,
   cheque     varchar(100)      not null,
    primary key (id)
); 
