<?php
// Arquivo responsável por todo gerenciamento do CRUD relacionado a página projeto.php

require_once '_include_autoload.php';

use Src\Controller\ProjetoCTRL;
use Src\VO\ProjetoVO;

$ctrl = new ProjetoCTRL;

if (isset($_POST['btn_cadastrar'])) {

    $vo = new ProjetoVO;

    $vo->setNome($_POST['nome']);
    $vo->setDescricao($_POST['descricao']);

    $ret = $ctrl->CadastrarProjetoCTRL($vo);

    if ($_POST['btn_cadastrar'] == 'ajx') {
        echo $ret;
    }

}

else if (isset($_POST['btn_alterar'])) {

    $vo = new ProjetoVO;

    $vo->setNome($_POST['nome_alt']);
    $vo->setDescricao($_POST['descricao_alt']);
    $vo->setId($_POST['id_alt']);

    $ret = $ctrl->AlterarProjetoCTRL($vo);

    if ($_POST['btn_alterar'] == 'ajx') {
        echo $ret;
    }

}

else if (isset($_POST['btn_excluir'])) {

    $vo = new ProjetoVO;

    $vo->setId($_POST['id_exc']);

    $ret = $ctrl->ExcluirProjetoCTRL($vo);

    if ($_POST['btn_excluir'] == 'ajx') {
        echo $ret;
    }

}

else if (isset($_POST['consultar_ajx']) && $_POST['consultar_ajx'] == 'ajx') {

    $projetos = $ctrl->ConsultarProjetoCTRL(); ?>

                <table class="table table-hover" id="tableResult">
                    <thead>
                        <tr>
                            <th>Projeto</th>
                            <th>Descrição</th>
                            <th>Ação</th>
                        </tr>
                    </thead>
                    <tbody>
            <?php foreach ($projetos as $item) { ?>
                            <tr>
                                <td>
                        <?= $item['nome'] ?>
                                </td>
                                <td>
                        <?= $item['descricao'] ?>
                                </td>
                                <td>
                                    <button class="btn btn-outline-warning btn-sm" data-toggle="modal" data-target="#modal-alterar-projeto"
                                        onclick="CarregarModalAlterarProjeto('<?= $item['id'] ?>', '<?= $item['nome'] ?>', '<?= $item['descricao'] ?>')">Alterar
                                    </button>

                                    <button class="btn btn-outline-danger btn-sm" data-toggle="modal" data-target="#modal-excluir"
                                        onclick="CarregarModalExcluir('<?= $item['id'] ?>', '<?= $item['nome'] ?>')">Excluir</button>
                                </td>
                            </tr>
            <?php } ?>
                    </tbody>
                </table>

<?php }


