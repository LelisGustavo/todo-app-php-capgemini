<?php 
// Página de arquivo contendo os get's e set's que serão usados no projeto ToDoApp
// Referente ao Projeto 

// Agrupa as classes de VO do sistema
namespace Src\VO;

class ProjetoVO
{

    private $id;
    private $nome;
    private $descricao;


	// GET e SET ID
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

    //GET e SET DESCRIÇÃO
    public function setDescricao($descricao): void 
    {
        $this->descricao = $descricao;
    }
    public function getDescricao(): string 
    {
        return $this->descricao;
    }

}
