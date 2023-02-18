<?php
//Define um namespace para a classe que representam as operações com SQL  
namespace Src\Model\SQL;

//Classe que representa as operações SQL relacionadas a tabela 'tb_tarefa' no ToDoApp
class TarefaSQL
{

    //Retorna uma string contendo um comando SQL para inserir uma nova tarefa na tabela 'tb_tarefa'
    public static function INSERIR_TAREFA(): string
    {

        $sql = 'INSERT INTO
                tb_tarefa (nome, prazo_final, descricao, id_projeto)
                VALUES
                (?, ?, ?, ?)';

        return $sql;

    }

    //Retorna uma string contendo um comando SQL para alterar uma tarefa já inserida na tabela 'tb_tarefa'
    public static function ALTERAR_TAREFA(): string
    {

        $sql = 'UPDATE tb_tarefa
                    SET nome = ?,
                    prazo_final = ?,
                    descricao = ?,
                    id_projeto = ?
                WHERE id = ?';

        return $sql;

    }

    //Retorna uma string contendo um comando SQL para consultar as tarefas já inseridas na tabela 'tb_tarefa'
    public static function CONSULTAR_TAREFA(): string
    {

        $sql = 'SELECT tar.id,
                       tar.nome,
                       DATE_FORMAT(prazo_final, "%d/%m/%Y") as prazo_final,
                       tar.descricao,
                       pro.nome as nome_projeto
                FROM tb_tarefa as tar
                INNER JOIN tb_projeto as pro
                    ON tar.id_projeto = pro.id
                ORDER BY nome';

        return $sql;

    }

    //Retorna uma string contendo um comando SQL para excluir uma tarefa já inserida na tabela 'tb_tarefa'
    public static function EXCLUIR_TAREFA(): string
    {

        $sql = 'DELETE
                FROM tb_tarefa
                WHERE id = ?';

        return $sql;

    }

}