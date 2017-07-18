USE bd_exercicio;

CREATE TABLE tb_livro(
	idLivro INT NOT NULL AUTO_INCREMENT PRIMARY KEY,
    nomeLivro VARCHAR(64) NOT NULL,
    editoraLivro VARCHAR(64) NOT NULL,
    autorLivro VARCHAR(64) NOT NULL
);

SELECT * FROM tb_livro;