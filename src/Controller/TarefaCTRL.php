<?php 
// Agrupa as classes controladoras do sistema
namespace Src\Controller;


// Declaração de uso das classes necessárias para o arquivo TarefaCTRL
use Src\Model\TarefaDAO;
use Src\VO\TarefaVO;

// Classe que implementa as operações de controle de tarefas do sistema
class TarefaCTRL
{

    private $dao;

    // Método construdor, que garante o acesso da TarefaCTRL ao banco de dados e execusão das operações de controle do sistema ToDo App
    public function __construct()
    {

        $this->dao = new TarefaDAO;

    }

    // Método que recebe um objeto (VO) como parâmetro e retorna o resultado de um novo cadastro de tarefa no banco de dados
    public function CadastrarTarefaCTRL(TarefaVO $vo): int
    {

        if (empty($vo->getNome()) || empty($vo->getPrazoFinal()) || empty($vo->getIdProjeto()))
            return 0;

        return $this->dao->CadastrarTarefaDAO($vo);

    }

    // Método que recebe um objeto (VO) como parâmetro e retorna o resultado da alteraração de uma tarefa específica no banco de dados
    public function AlterarTarefaCTRL(TarefaVO $vo): int 
    {

        if (empty($vo->getNome()) || empty($vo->getPrazoFinal()) || empty($vo->getIdProjeto()))
            return 0;
        
        return $this->dao->AlterarTarefaDAO($vo);

    }

    // Método que recebe um objeto (VO) como parâmetro e retorna o resultado da consulta das tarefas no banco de dados
    public function ConsultarTarefaCTRL(): array 
    {

        return $this->dao->ConsultarTarefaDAO();

    }

    // Método que recebe um objeto (VO) como parâmetro e retorna o resultado da exclusão de uma tarefa específica no banco de dados
    public function ExcluirTarefaCTRL(TarefaVO $vo): int 
    {

        if (empty($vo->getId()))
            return 0;

        return $this->dao->ExcluirTarefaDAO($vo);

    }

}