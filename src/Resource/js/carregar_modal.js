function CarregarModalExcluir(id, nome) {

    $("#id_exc").val(id);
    $("#nome_exc").html(nome);

}

function CarregarModalAlterarProjeto(id, nome, desc) {

    $("#id_alt").val(id);
    $("#nome_alt").val(nome);
    $("#descricao_alt").val(desc);

}

function CarregarModalAlterarTarefa(id, nome_tarefa, desc) {

    $("#id_alt").val(id);
    $("#nome_alt").val(nome_tarefa);
    $("#descricao_alt").val(desc);

}