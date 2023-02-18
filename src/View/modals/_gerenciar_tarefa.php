<!-- Modal de alteração de tarefa -->

<div class="modal fade" id="modal-alterar-tarefa">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Alterar Tarefa</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_alt" id="id_alt">
                <div class="form-group row">
                    <label>Nome da Tarefa</label>
                    <input class="form-control obg" name="nome_alt" id="nome_alt">
                </div>
                <div class="form-group row">
                    <label>Projeto</label>
                    <select class="form-control select2 obg" style="width: 100%;" name="projeto_alt" id="projeto_alt">
                        <option value="">Selecione</option>
                        <?php foreach ($projetos as $item) { ?>
                            <option value="<?= $item['id'] ?>"><?= $item['nome'] ?></option>
                        <?php } ?>
                    </select>
                </div>
                <div class="form-group row">
                    <label>Descrição</label>
                    <textarea class="form-control" rows="3" name="descricao_alt" id="descricao_alt"></textarea>
                </div>
            </div>
            <div class="form-group col-md-12">
                <label>Prazo</label>
                <input type="date" class="form-control obg" name="prazo_alt" id="prazo_alt">
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                <button name="btn_alterar" class="btn btn-outline-success"
                    onclick="return AlterarTarefa('form_alt')">Alterar</button>
            </div>
        </div>
    </div>
</div>