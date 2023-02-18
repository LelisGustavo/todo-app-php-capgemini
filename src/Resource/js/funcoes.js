function BASE_URL(nome_arquivo) {

    return "../Resource/dataview/" + nome_arquivo + ".php";

}

function LimparCampos(id_form) {

    $("#" + id_form + " input, #" + id_form + " select, #" + id_form + " textarea").each(function () {

        $(this).removeClass("is-valid");
        $(this).val('');

    })

}

function NotificarCampos(id_form) {

    let ret = true;

    $("#" + id_form + " input, #" + id_form + " select, #" + id_form + " textarea").each(function () {

        if ($(this).hasClass("obg")) {

            if ($(this).val().trim() == "") {
                ret = false;
                $(this).addClass("is-invalid");
            } else {
                $(this).removeClass("is-invalid").addClass("is-valid");
            }
        }
    })

    if (!ret)
        MensagemCampoObrigatorio();

    return ret;

}

function FecharModal(id_modal) {

    $("#" + id_modal).modal("hide");

}