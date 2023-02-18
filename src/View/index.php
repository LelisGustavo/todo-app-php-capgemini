<?php
//Caminho que leva ao autoload do projeto ToDoApp
require_once dirname(__DIR__, 2) . '\vendor\autoload.php';
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
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1></h1>
                        </div>
                    </div>
                </div>
            </section>


            <section class="content">

                <div class="container-fluid pt-4 px-4">
                    <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
                        <div class="col-md-6 text-center">
                            <div class="card-body">
                                <h3 style="font-size: 35px; color: #42c6fa">Nenhum Projeto por aqui :D</h3>
                                <h6>Clique no botão "+" para adicionar um novo projeto</h6>
                                <a href="projeto.php" class="nav-link">
                                    <i style="font-size: 35px; color: #42c6fa; padding: 5px 50px 5px 50px"
                                        class="nav-icon fas fa-plus-circle"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php
        //Inclusão do footer do projeto ToDoApp na página
        include_once PATH_URL . '/Template/_includes/_footer.php';
        ?>
    </div>

    <?php
    //Inclusão dos scripts do projeto ToDoApp
    include_once PATH_URL . '/Template/_includes/_scripts.php';
    ?>
</body>

</html>