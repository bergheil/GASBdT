/***************************************************/
/*            G.A.S. Banca del tempo               */
/* Script iniziale per la costruzione del database */
/***************************************************/

-- Creazione db e utente admin
CREATE DATABASE gasdb;
CREATE USER 'gasuser'@'localhost' IDENTIFIED BY 'G@spwd2019';
CREATE USER 'gasuser'@'%' IDENTIFIED BY 'G@spwd2019';
GRANT ALL PRIVILEGES ON gasdb.* TO 'gasuser'@'localhost';
GRANT ALL PRIVILEGES ON gasdb.* TO 'gasuser'@'%';
FLUSH PRIVILEGES;

-- Creazione tabelle e relazioni

-- Tabella utente (sia per i membri del GAS che per i fornitori )
create table utente (
	id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT Primary key,
	nominativo varchar(255),
	indirizzo varchar(255),
	cap varchar(5),
	localita varchar(255),
	provincia varchar(2),
	piva_codfisc varchar(16),
	email varchar(100),    
    password varchar(20),
	telefono varchar(100),
    ruolo ENUM ('admin','coordinatore','referente', 'socio', 'fornitore') NOT NULL DEFAULT 'socio',
    data_ultimo_accesso timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
);

-- Rappresenta l'ordine
create table ordine (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT Primary key,
    titole varchar(255) NOT NULL,
    descrizione text,
    data_apertura datetime not null,
    data_chiusura datetime not null,    
    stato ENUM('aperto', 'chiuso'),
    fornitore_id bigint unsigned not null,
    referente_id bigint unsigned not null,    
    FOREIGN KEY (fornitore_id) REFERENCES utente(id),
    FOREIGN KEY (referente_id) REFERENCES utente(id)
)


-- Prodotti associati ad un fornitore
create table prodotti (
    id BIGINT UNSIGNED NOT NULL AUTO_INCREMENT Primary key,
    nome varchar(255) NOT NULL,
    descrizione text,
    quantita float,
    unita_di_misura ENUM('pezzi', 'gr', 'kg', 'ml', 'lt'),
    fornitore_id bigint unsigned not null,
    FOREIGN KEY (fornitore_id) REFERENCES utente(id)
)