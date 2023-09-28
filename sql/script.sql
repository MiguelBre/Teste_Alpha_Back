create database teste_alphacode;

use teste_alphacode;

DROP TABLE tbl_contatos;
create table `tbl_contatos`(
	`id` INTEGER UNSIGNED NOT NULL AUTO_INCREMENT,
    `nome` VARCHAR(120) NOT NULL,
    `data_nascimento` date NOT NULL,
    `email` VARCHAR(120) NOT NULL,
    `profissao` VARCHAR(200) NOT NULL,
    `telefone` VARCHAR(14) NULL,
    `celular` VARCHAR(15) NOT NULL,
    `whatsapp` BOOLEAN NOT NULL,
    `notificacoes_email` BOOLEAN NOT NULL,
    `notificacoes_sms` BOOLEAN NOT NULL,
    PRIMARY KEY (id)
    );
    
INSERT INTO tbl_contatos(nome,data_nascimento,email,profissao, telefone, celular, whatsapp, notificacoes_email, notificacoes_sms) VALUES(
	"João Guilherme",
    "2001-09-11",
    "joao.guilherme@gmail.com",
    "Desenvolvedor Back-End",
    "(11) 4123-4123",
    "(11) 91234-5678",
    TRUE,
    TRUE,
    FALSE
),
(
	"Emy Santiago",
    "1983-12-25",
    "emilia.santiago@gmail.com",
    "Police Detective",
    "(11) 4123-4123",
    "(11) 91234-5678",
    TRUE,
    TRUE,
    FALSE
);

SELECT * FROM tbl_contatos;

SELECT * FROM tbl_contatos where id = 3;

UPDATE tbl_contatos
	SET nome = "Emilia Santiago", data_nascimento = "1983-12-23", email = "emilia.santiago@gmail.com", profissao = "Police Detective", telefone = "(11) 4123-4123", celular = "(11) 91234-1234", whatsapp = TRUE, notificacoes_email = TRUE, notificacoes_sms = FALSE
	where id = 3;
    
DELETE FROM tbl_contatos where id = 1;