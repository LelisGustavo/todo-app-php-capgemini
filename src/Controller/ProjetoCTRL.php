<?php
// Agrupa as classes controladoras do sistema
namespace Src\Controller;


// Declaração de uso das classes necessárias para o arquivo ProjetoCTRL
use Src\Model\ProjetoDAO;
use Src\VO\ProjetoVO;

// Classe que implementa as operações de controle de projetos do sistema
class ProjetoCTRL
{

    private $dao;

    // Método construdor, que garante o acesso da ProjetoCTRL ao banco de dados e execusão das operações de controle do sistema ToDo App
    public function __construct()
    {

        $this->dao = new ProjetoDAO;

    }

    // Método que recebe um objeto (VO) como parâmetro e retorna o resultado de um novo cadastro de projeto no banco de dados
    public function CadastrarProjetoCTRL(ProjetoVO $vo): int
    {

        if (empty($vo->getNome()))
            return 0;

        return $this->dao->CadastrarProjetoDAO($vo);

    }

    // Método que recebe um objeto (VO) como parâmetro e retorna o resultado da alteraração de um projeto específico no banco de dados
    public function AlterarProjetoCTRL(ProjetoVO $vo): int
    {

        if (empty($vo->getNome())) 
            return 0;

        return $this->dao->AlterarProjetoDAO($vo);

    }

    // Método que recebe um objeto (VO) como parâmetro e retorna o resultado da consulta dos projetos no banco de dados
    public function ConsultarProjetoCTRL(): array 
    {

        return $this->dao->ConsultarProjetoDAO();

    }

    // Método que recebe um objeto (VO) como parâmetro e retorna o resultado da exclusão de um projeto específico no banco de dados
    public function ExcluirProjetoCTRL(ProjetoVO $vo): int 
    {

        if (empty($vo->getId()))
            return 0;

        return $this->dao->ExcluirProjetoDAO($vo);

    }

}