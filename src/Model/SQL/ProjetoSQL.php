<?php 
//Define um namespace para a classe que representam as operações com SQL  
namespace Src\Model\SQL;


//Classe que representa as operações SQL relacionadas a tabela 'tb_projeto' no ToDoApp
class ProjetoSQL
{

    //Retorna uma string contendo um comando SQL para inserir um novo projeto na tabela 'tb_projeto'
    public static function INSERIR_PROJETO(): string 
    {

        $sql = 'INSERT INTO 
                tb_projeto (nome, descricao)
                VALUES
                (?, ?)';

        return $sql;

    }

    //Retorna uma string contendo um comando SQL para alterar um projeto já inserido na tabela 'tb_projeto'
    public static function ALTERAR_PROJETO(): string 
    {

        $sql = 'UPDATE tb_projeto
                    SET nome = ?,
                        descricao = ?
                WHERE id = ?';

        return $sql;

    }

    //Retorna uma string contendo um comando SQL para consultar os projeto já inseridos na tabela 'tb_projeto'
    public static function CONSULTAR_PROJETO(): string 
    {

        $sql = 'SELECT id,
                       nome,
                       descricao
                FROM tb_projeto
                ORDER BY nome';

        return $sql;

    }

    //Retorna uma string contendo um comando SQL para excluir um projeto já inserido na tabela 'tb_projeto'
    public static function EXCLUIR_PROJETO(): string 
    {

        $sql = 'DELETE
                FROM tb_projeto
                WHERE id = ?';

        return $sql;

    }

}