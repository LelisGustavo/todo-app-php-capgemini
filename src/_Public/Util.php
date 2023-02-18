<?php
//Define um namespace para a classe que representam as operações com SQL  
namespace Src\_Public;


//Classe responsável por fornecer funcionalidades comuns e reutilizáveis no sistema
class Util
{

    //Retorna a data atual no formato (ano-mês-dia), configurada para o fuso hórario do Brasil
    public static function DataAtual()
    {
        date_default_timezone_set('America/Sao_Paulo');
        return date('Y-m-d');
    }

}