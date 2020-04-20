-- Comandos de Procedure

-- Procedure que insere
DELIMITER //
CREATE procedure insert_Aluno(
pnome VARCHAR(255),
pemail VARCHAR(255),
pdata_nascimento DATE
)
BEGIN

	INSERT INTO Alunos(nome, email, data_nascimento) VALUE(pnome, pemail, pdata_nascimento);
    
    SELECT * FROM Alunos WHERE ID = LAST_INSERT_ID();

END //
DELIMITER ;

-- Procedure que retorna o email 
CREATE PROCEDURE verEmail( id_pessoa smallint)
SELECT concat('O email dele é ', email)
FROM Alunos
WHERE ID = id_pessoa;

CALL verEmail(1);