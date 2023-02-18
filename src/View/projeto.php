<?php
//sai da página 1 nível, e adicionar o caminho que leva para o dataview, aonde está os if's isset e ajax
require_once dirname(__DIR__, 1) . '/Resource/dataview/gerenciar_projeto-dataview.php';
?>

<!DOCTYPE html>
<html>

<head>
    <?php
    //Inclusão do head do projeto ToDoApp na página
    include_once PATH_URL . '/Template/_includes/_head.php';
    ?>
</head>

<body class="hold-transition sidebar-mini">

    <div class="wrapper">

        <?php
        //Inclusão do topo e menu do projeto ToDoApp na página
        include_once PATH_URL . '/Template/_includes/_topo.php';
        include_once PATH_URL . '/Template/_includes/_menu.php';
        ?>
        <div class="content-wrapper">
            <section class="content-header">

            </section>

            <section class="content">
                <div class="card">
                    <div class="row bg-light rounded align-items-center justify-content-center mx-0">

                        <div class="col-md-6 text-center">

                            <div class="col-sm-20">
                                <h2 style="font-size: 35px; padding: 30px 5px 5px 50px; color: #42c6fa">Cadastrar
                                    Projeto</h2>
                            </div>
                            <div class="col-sm-20">
                                <h5>Aqui você poderá cadastrar seus projetos</h5>
                            </div>
                            <hr>
                            <!-- methodo post contendo os campos/informações que serão enviados para o back/banco de dados (cadastro) -->
                            <form id="form_cad" action="projeto.php" method="post">
                                <div class="form-group row">
                                    <label>Nome Projeto*</label>
                                    <input class="form-control obg" name="nome" id="nome">
                                </div>
                                <div class="form-group row">
                                    <label>Descrição</label>
                                    <textarea class="form-control" rows="3" name="descricao" id="descricao"></textarea>
                                </div>
                                <button class="btn btn-outline-primary" name="btn_cadastrar"
                                    onclick="return CadastrarProjeto('form_cad')">Cadastrar</button> 
                                    <br><br>
                            </form>
                        </div>
                    </div> 
                    
                    <div class="row bg-light rounded align-items-center justify-content-center mx-0">
                        <div class="col-md-6 text-center">
                            <!-- Tabela que será renderizada via ajax com a consulta do banco de dados -->
                            <table class="table table-hover" id="tableResult">
                                <!-- Aqui está a tabela renderizada -->
                            </table>
                        </div>
                    </div>

                    <!-- methodo post contendo os campos/informações que serão enviados para o back/banco de dados (alteração) -->
                    <form id="form_alt" action="projeto.php" method="post">
                        <?php
                        //Inclusão das modals do projeto ToDoApp na página
                        include_once 'modals/_gerenciar_projeto.php';
                        include_once 'modals/_excluir.php';
                        ?>
                    </form>
                </div>
            </section>
        </div>

        <?php
        //Inclusão do footer do projeto ToDoApp na página
        include_once PATH_URL . '/Template/_includes/_footer.php';
        ?>
    </div>

    <?php
    //Inclusão dos scripts e mensagens de ambiente do projeto ToDoApp
    include_once PATH_URL . '/Template/_includes/_scripts.php';
    include_once PATH_URL . '/Template/_includes/_msg.php';
    ?>
    <!-- Inclusão do JavaScript/Ajax que é referente a página projeto -->
    <script src="../Resource/ajax/projeto-ajx.js"></script>
    <!-- Retorno da consulta no banco de dados com ajax dos projetos cadastrados -->
    <script>ConsultarProjeto()</script>
</body>

</html>