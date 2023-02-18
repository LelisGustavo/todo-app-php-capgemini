<?php

require_once '_include_autoload.php';

use Src\Controller\TarefaCTRL;
use Src\Controller\ProjetoCTRL;
use Src\VO\TarefaVO;

$ctrl = new TarefaCTRL;

if (isset($_POST['btn_cadastrar'])) {

    $vo = new TarefaVO;

    $vo->setNome($_POST['nome']);
    $vo->setIdProjeto($_POST['projeto']);
    $vo->setDescricao($_POST['descricao']);
    $vo->setPrazoFinal($_POST['prazo']);

    $ret = $ctrl->CadastrarTarefaCTRL($vo);

    if ($_POST['btn_cadastrar'] == 'ajx') {
        echo $ret;
    }

}

else if (isset($_POST['btn_alterar'])) {

    $vo = new TarefaVO;

    $vo->setNome($_POST['nome_alt']);
    $vo->setIdProjeto($_POST['projeto_alt']);
    $vo->setDescricao($_POST['descricao_alt']);
    $vo->setPrazoFinal($_POST['prazo_alt']);
    $vo->setId($_POST['id_alt']);

    $ret = $ctrl->AlterarTarefaCTRL($vo);

    if ($_POST['btn_alterar'] == 'ajx') {
        echo $ret;
    }

}

else if (isset($_POST['btn_excluir'])) {

    $vo = new TarefaVO;

    $vo->setId($_POST['id_exc']);

    $ret = $ctrl->ExcluirTarefaCTRL($vo);

    if ($_POST['btn_excluir'] == 'ajx') {
        echo $ret;
    }

}

else if (isset($_POST['consultar_ajx']) && $_POST['consultar_ajx'] == 'ajx') {

    $tarefas = $ctrl->ConsultarTarefaCTRL(); ?>

                <table class="table table-hover" id="tableResult">
                    <thead>
                        <tr>
                            <th>Nome</th>
                            <th>Projeto</th>
                            <th>Descrição</th>
                            <th>Prazo</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php foreach ($tarefas as $item) { ?>
                            <tr>
                                <td>
                        <?= $item['nome'] ?>
                                </td>
                                <td>
                        <?= $item['nome_projeto'] ?>
                                </td>
                                <td>
                        <?= $item['descricao'] ?>
                                </td>
                                <td>
                        <?= $item['prazo_final'] ?>
                                </td>
                                <td>
                                    <button class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#modal-alterar-tarefa"
                                        onclick="CarregarModalAlterarTarefa('<?= $item['id'] ?>', '<?= $item['nome'] ?>', '<?= $item['descricao'] ?>', '<?= $item['prazo_final'] ?>')">Alterar
                                    </button>

                                    <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal-excluir"
                                        onclick="CarregarModalExcluir('<?= $item['id'] ?>', '<?= $item['nome'] ?>')">Excluir</button>
                                </td>
                <?php } ?>
                        </tr>
                    </tbody>
                </table>

<?php }

$projetos = (new ProjetoCTRL)->ConsultarProjetoCTRL();