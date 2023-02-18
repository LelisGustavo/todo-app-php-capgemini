<?php
//Uso da função static para setar a data atual do time zone Brasil
use Src\_Public\Util;

//Caminho que leva para o dataview, aonde está os if's isset e ajax
require_once dirname(__DIR__, 1) . '/Resource/dataview/gerenciar_projeto-dataview.php';
use Src\Controller\ProjetoCTRL;

$projetos = (new ProjetoCTRL)->ConsultarProjetoCTRL();
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
                                <h2 style="font-size: 35px; padding: 30px 5px 5px 50px; color: #42c6fa">Cadastrar Tarefa
                                </h2>
                            </div>
                            <div class="col-sm-20">
                                <h5>Aqui você poderá cadastrar suas tarefas</h5>
                            </div>
                            <hr>
                            <!-- methodo post contendo os campos/informações que serão enviados para o back/banco de dados (cadastro) -->
                            <form id="form_cad" action="tarefa.php" method="post">
                                <div class="form-group row">
                                    <label>Nome Tarefa*</label>
                                    <input class="form-control obg" name="nome" id="nome">
                                </div>
                                <div class="form-group row">
                                    <label>Projeto*</label>
                                    <select class="form-control select2 obg" style="width: 100%;" name="projeto"
                                        id="projeto">
                                        <option value="">Selecione</option>
                                        <?php foreach ($projetos as $item) { ?>
                                            <option value="<?= $item['id'] ?>"><?= $item['nome'] ?></option>
                                        <?php } ?>
                                    </select>
                                </div>
                                <div class="form-group row">
                                    <label>Descrição</label>
                                    <textarea class="form-control" rows="3" name="descricao" id="descricao"></textarea>
                                </div>
                                <div class="form-group row">
                                    <label>Prazo*</label>
                                    <input type="date" class="form-control obg" name="prazo" id="prazo" value="<?= Util::DataAtual() ?>">
                                </div>
                                <button class="btn btn-outline-primary" name="btn_cadastrar"
                                    onclick="return CadastrarTarefa('form_cad')">Cadastrar</button>
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
                    <form id="form_alt" action="tarefa.php" method="post">
                        <?php
                        //Inclusão das modals do projeto ToDoApp na página
                        include_once 'modals/_gerenciar_tarefa.php';
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
    <script src="../Resource/ajax/tarefa-ajx.js"></script>
    <script>ConsultarTarefa()</script>
</body>

</html>