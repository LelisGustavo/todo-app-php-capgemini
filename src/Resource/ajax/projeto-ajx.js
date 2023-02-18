function CadastrarProjeto(id_form) {

    if (NotificarCampos(id_form)) {

        let nome_projeto = $("#nome").val();
        let desc_projeto = $("#descricao").val();

        $.ajax({
            type: "POST",
            url: BASE_URL("gerenciar_projeto-dataview"),
            data: {
                btn_cadastrar: 'ajx',
                nome: nome_projeto,
                descricao: desc_projeto
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    LimparCampos(id_form);
                    ConsultarProjeto();
                } else {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}

function ConsultarProjeto() {

    $.ajax({
        type: "POST",
        url: BASE_URL("gerenciar_projeto-dataview"),
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
        url: BASE_URL("gerenciar_projeto-dataview"),
        data: {
            btn_excluir: 'ajx',
            id_exc: $("#id_exc").val()
        },
        success: function (retorno) {
            if (retorno == 1) {
                MensagemSucesso();
                ConsultarProjeto();
                FecharModal("modal-excluir");
            } else {
                MensagemErroExcluir();
            }
        }
    })
    return false;
}

function AlterarProjeto(id_form) {

    if (NotificarCampos(id_form)) {

        let nome_projeto = $("#nome_alt").val();
        let desc_projeto = $("#descricao_alt").val();
        let id = $("#id_alt").val();

        $.ajax({
            type: "POST",
            url: BASE_URL("gerenciar_projeto-dataview"),
            data: {
                btn_alterar: 'ajx',
                nome_alt: nome_projeto,
                descricao_alt: desc_projeto,
                id_alt: id
            },
            success: function (retorno) {
                if (retorno == 1) {
                    MensagemSucesso();
                    ConsultarProjeto();
                    LimparCampos(id_form);
                    FecharModal("modal-alterar-projeto");
                } else {
                    MensagemErro();
                }
            }
        })
    }
    return false;
}
