<!-- Modal de alteração de projeto -->

<div class="modal fade" id="modal-alterar-projeto">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Alterar Projeto</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <input type="hidden" name="id_alt" id="id_alt">
                <div class="form-group row">
                    <label>Nome do Projeto</label>
                    <input class="form-control obg" name="nome_alt" id="nome_alt">
                </div>
                <div class="form-group row">
                    <label>Descrição</label>
                    <textarea class="form-control" rows="3" name="descricao_alt" id="descricao_alt"></textarea>
                </div>
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-outline-danger" data-dismiss="modal">Cancelar</button>
                <button name="btn_alterar" class="btn btn-outline-success" onclick="return AlterarProjeto('form_alt')">Alterar</button>
            </div>
        </div>
    </div>
</div>