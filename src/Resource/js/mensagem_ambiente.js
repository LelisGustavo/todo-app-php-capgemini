// Mensagens de ambiente para todo o projeto ToDo App (tanto em PHP quando em JS)
function RetornarMsg(ret) {

    let msg = "";

    switch (ret) {

        case -1:
            msg = "Ocorreu um erro na operação";
            break;
        case 0:
            msg = "Preencher o(s) campo(s) obrigatório(s)";
            break;
        case 1:
            msg = "Ação realizada com sucesso";
            break;
        case -2:
            msg = "O registro não pode ser excluído pois está em uso";
            break;
    }
    return msg;
}