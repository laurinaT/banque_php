DROP DATABASE IF EXISTS secure_bank;
CREATE DATABASE secure_bank CHARACTER SET 'utf8';
USE secure_bank;

DROP User IF EXISTS 'secure_bank_adm'@'Localhost';
CREATE User 'secure_bank_adm'@'Localhost';
GRANT ALL PRIVILEGES ON secure_bank.* To 'secure_bank_adm'@'Localhost' IDENTIFIED BY 'banque76';

CREATE TABLE User (
    id INT NOT NULL AUTO_INCREMENT,
    firstname VARCHAR(40) NOT NULL,
    lastname VARCHAR(40) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    user_mail VARCHAR(40) NOT NULL,
    user_pwd VARCHAR(40) NOT NULL,
    login_creation DATE NOT NULL,
    PRIMARY KEY (id)
) ENGINE = InnoDB;

CREATE TABLE Account(
    id INT NOT NULL AUTO_INCREMENT,
    account_name VARCHAR(40) NOT NULL,
    account_number VARCHAR(40) NOT NULL,
    account_user_id INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (account_user_id) REFERENCES User(id)
) ENGINE = InnoDB;

CREATE TABLE Last_operation(
    id INT NOT NULL AUTO_INCREMENT,
    last_operation_account_id INT NOT NULL,
    last_operation_amount VARCHAR(40) NOT NULL,
    last_operation_description TEXT,
   
    PRIMARY KEY (id),
    FOREIGN KEY (last_operation_account_id) REFERENCES Account(id)
) ENGINE = InnoDB;

INSERT INTO User(firstname, lastname, user_mail, user_pwd, login_creation)
Values 
 (
    'root_prenom', 
    'root_nom',
    'root@gmail.com',
    '',
    '2021-08-25'
    ),
 (
    'Licornina', 
    'Touss',
    'ceciestunmail@gmail.com',
    'petitpwd',
    '2021-04-12'
    ),
        
(
    'Nina',
    'Nin',
    'ninanina@hotmail.fr',
    'aussiunpetitpwd',
    '2018-12-14'
);

INSERT INTO Account(account_name, account_number, account_user_id)
Values  (
    'courant',
    '25421278',
    1
),
(
    
    'PEL',
    '56789009',
    2
);

INSERT INTO Last_operation(last_operation_amount, last_operation_description, last_operation_account_id)
Values  (
    '-60',
    'AUCHAN',
    1
),
(
    '-72',
    'SEPHORA',
    2
);
