<?php
// Página de arquivo contendo os get's e set's que serão usados no projeto ToDoApp
// Referente a Tarefa 

// Agrupa as classes de VO do sistema
namespace Src\VO;

class TarefaVO
{

    private $id;
    private $nome;
    private $prazo_final;
    private $descricao;
    private $id_projeto;

    //GET e SET ID
    public function setId($id): void
    {
        $this->id = $id;
    }

    public function getId(): int
    {
        return $this->id;
    }

    //GET e SET NOME
    public function setNome($nome): void
    {
        $this->nome = $nome;
    }
    public function getNome(): string
    {
        return $this->nome;
    }

    //GET  SET PRAZO FINAL
    public function setPrazoFinal($prazo_final): void 
    {
        $this->prazo_final = $prazo_final;
    }
    public function getPrazoFinal(): string
    {
        return $this->prazo_final;
    }

    //GET e SET DESCRIÇÃO
    public function setDescricao($descricao): void
    {
        $this->descricao = $descricao;
    }
    public function getDescricao(): string
    {
        return $this->descricao;
    }

    //GET e SET ID PROJETO
    public function setIdProjeto($id_projeto): void
    {
        $this->id_projeto = $id_projeto;
    }
    public function getIdProjeto(): string
    {
        return $this->id_projeto;
    }
}