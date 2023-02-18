function CadastrarTarefa(id_form) {

    if (NotificarCampos(id_form)) {

        let nome_tarefa = $("#nome").val();
        let nome_projeto = $("#projeto").val();
        let desc_tarefa = $("#descricao").val();
        let prazo_tarefa = $("#prazo").val();

        $.ajax({
            type: "POST",
            url: BASE_URL("gerenciar_tarefa-dataview"),
            data: {
                btn_cadastrar: 'ajx',
                nome: nome_tarefa,
                projeto: nome_projeto,
                descricao: desc_tarefa,
                prazo: prazo_tarefa
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form);
                    ConsultarTarefa();
                } else {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function ConsultarTarefa() {

    $.ajax({
        type: "POST",
        url: BASE_URL("gerenciar_tarefa-dataview"),
        data: {
            consultar_ajx: 'ajx'
        },
        success: function (dados_result) {
            $("#tableResult").html(dados_result);
        }
    })

}

function Excluir() {

    $.ajax({
        type: "POST",
        url: BASE_URL("gerenciar_tarefa-dataview"),
        data: {
            btn_excluir: 'ajx',
            id_exc: $("#id_exc").val()
        },
        success: function (retorno) {
            if (retorno == 1) {
                MensagemSucesso();
                ConsultarTarefa();
                FecharModal("modal-excluir");
            } else {
                MensagemErro();
            }
        }
    })
    return false;
}

function AlterarTarefa(id_form) {

    if (NotificarCampos(id_form)) {

        let nome_tarefa = $("#nome_alt").val();
        let nome_projeto = $("#projeto_alt").val();
        let desc_tarefa = $("#descricao_alt").val();
        let prazo_tarefa = $("#prazo_alt").val();
        let id = $("#id_alt").val();

        $.ajax({
            type: "POST",
            url: BASE_URL("gerenciar_tarefa-dataview"),
            data: {
                btn_alterar: 'ajx',
                nome_alt: nome_tarefa,
                projeto_alt: nome_projeto,
                descricao_alt: desc_tarefa,
                prazo_alt: prazo_tarefa,
                id_alt: id
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    ConsultarTarefa();
                    LimparCampos(id_form);
                    FecharModal("modal-alterar-tarefa")
                } else {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}