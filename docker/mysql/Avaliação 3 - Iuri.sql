-- QUESTÃO 1

CREATE TABLE customers (
  id numeric PRIMARY KEY,
  name varchar(50),
  street varchar(50),
  city varchar(50)
);

INSERT INTO customers (id, name, street, city)
VALUES
  (1,	'Giovanna Goncalves Oliveira',	'Rua Mato Grosso',	'Canoas'),
  (2, 'Kauã Azevedo Ribeiro',	'Travessa Ibiá',	'Uberlândia'),
  (3,	'Rebeca Barbosa Santos',	'Rua Observatório Meteorológico',	'Salvador'),
  (4,	'Sarah Carvalho Correia',	'Rua Antônio Carlos da Silva',	'Uberlândia'),
  (5,	'João Almeida Lima',	'Rua Rio Taiuva',	'Ponta Grossa'),
  (6,	'Diogo Melo Dias',	'Rua Duzentos e Cinqüenta',	'Várzea Grande');

SELECT city FROM customers;
SELECT DISTINCT city FROM customers;

-- QUESTÃO 2

CREATE TABLE PROVIDERS (
  id numeric PRIMARY KEY,
  name varchar(50),
  street varchar(50),
  city varchar(50),
  state char(50)
);

INSERT INTO PROVIDERS (id, name, street, city, state)
VALUES
(1,	'Henrique', 'Av Brasil', 'Rio de Janeiro', 'RJ'),
(2,	'Marcelo Augusto', 'Rua Imigrantes', 'Belo Horizonte', 'MG'),
(3,	'Caroline Silva', 'Av São Paulo', 'Salvador', 'BA'),	
(4,	'Guilerme Staff', 'Rua Central', 'Porto Alegre', 'RS'),	
(5,	'Isabela Moraes', 'Av Juiz Grande', 'Curitiba', 'PR'),	
(6,	'Francisco Accerr', 'Av Paulista', 'São Paulo', 'SP'); 	    	 

SELECT DISTINCT city FROM PROVIDERS ORDER BY city ASC;

-- QUESTÃO 3

CREATE TABLE VIRUS (
  id INTEGER PRIMARY KEY,
  name varchar(50)
  );
  
INSERT INTO VIRUS (id, name)
VALUES
(1, 'H1RT'),	        
(2, 'H7H1'),	    
(3, 'HUN8'),	    
(4, 'XH1HX'),	            
(5, 'XXXX');  

SELECT REPLACE(name,'H1','X') FROM VIRUS;

-- QUESTÃO 4

CREATE TABLE account (
  id integer PRIMARY KEY,
  name varchar(50),
  login varchar(50),
  password varchar(50)
);

INSERT INTO account (id, name, login, password)
VALUES
(1, 'Joyce P. Parry', 'Promeraw', 'noh1Oozei'),
(2, 'Michael T. Gonzalez', 'Phers1942', 'Iath3see9bi'),
(3, 'Heather W. Lawless', 'Hankicht', 'diShono4'),
(4, 'Otis C. Hitt', 'Conalothe', 'zooFohH7w'),
(5, 'Roger N. Brownfield', 'Worseente', 'fah7ohN');	 

SELECT password,md5(password) FROM account;

-- QUESTÃO 5

CREATE TABLE aa_customers (
  id numeric PRIMARY KEY,
  name varchar(255),
  street varchar(255),
  city varchar(255),
  state varchar(2),
  credit_limit numeric
);

INSERT INTO aa_customers (id, name, street, city, state, credit_limit)
VALUES
(1, 'Nicolas Diogo Cardoso', 'Acesso Um', 'Porto Alegre', 'RS', '475'),
(2, 'Cecília Olivia Rodrigues', 'Rua Sizuka', 'Cianorte', 'PR', '3170'),
(3, 'Augusto F. C. E. Cardoso', 'Rua Baldomiro', 'Palhoça', 'SC', '1067'),
(4, 'Nicolas Diogo Cardoso', 'Acesso Um', 'Porto Alegre', 'RS', '475'),
(5, 'Sabrina H. G. Barros', 'Rua Engenheiro', 'Porto Alegre', 'RS', '4312'),
(6, 'Joaquim D. L. Araújo', 'Rua Vitorino', 'Novo Hamburgo', 'RS', '231 ');


CREATE TABLE aa_legal_person (
  id_customers numeric PRIMARY KEY,
  cnpj varchar(18),
  contact varchar(25)
);

INSERT INTO aa_legal_person (id_customers, cnpj, contact)
VALUES
(4, '85883842000191', '99767-0562'),	
(5, '47773848000117', '99100-8965'); 

SELECT cs.name, lp.id_customers FROM aa_customers cs, aa_legal_person lp WHERE cs.id = lp.id_customers;

-- QUESTÃO 6
CREATE TABLE PRODUCTS (
  id numeric PRIMARY KEY,
  name varchar(50),
  amount numeric,
  price numeric
);

INSERT INTO PRODUCTS (id, name, amount, price)
VALUES
(1, 'Two-doors wardrobe', '100', '800'),
(2, 'Dining table', '1000', '560'),
(3, 'Towel holder', '10000', '25.50'),
(4, 'Computer desk', '350', '320.50'),
(5, 'Chair', '3000', '210.64'),
(6, 'Single bed', '750', '460'); 

select max(price) as MAIOR, min(price) AS MENOR FROM PRODUCTS