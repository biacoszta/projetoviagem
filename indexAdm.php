<DOCTYPE html>
    <html lang="en">

    <head>

        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">

        <title>Site de viagens</title>

        <!-- Custom fonts for this template-->
        <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
        <link
            href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
            rel="stylesheet">

        <!-- Custom styles for this template-->
        <link href="css/sb-admin-2.min.css" rel="stylesheet">
        <script src="https://unpkg.com/feather-icons"></script>
        <script type="text/javascript" src="js/javascript.js"></script>
    </head>
    <?php
session_start();
if(isset($_SESSION['mensagem'])):
    echo $_SESSION['mensagem'];
endif;
session_unset();

include_once 'php_action/conexao.php';
?>

    <body id="page-top">

        <!-- Page Wrapper -->
        <div id="wrapper">

            <!-- Sidebar -->
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

                <!-- Sidebar - Brand -->
                <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">

                    <div class="sidebar-brand-text mx-3">VIAGENS</div>
                </a>

                <!-- Divider -->
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item">

                    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Components:</h6>
                            <a class="collapse-item" href="buttons.html">Buttons</a>
                            <a class="collapse-item" href="cards.html">Cards</a>
                        </div>
                    </div>
                </li>

                <!-- Nav Item - Utilities Collapse Menu -->
                <li class="nav-item">

                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities"
                        data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                            <h6 class="collapse-header">Custom Utilities:</h6>
                            <a class="collapse-item" href="utilities-color.html">Colors</a>
                            <a class="collapse-item" href="utilities-border.html">Borders</a>
                            <a class="collapse-item" href="utilities-animation.html">Animations</a>
                            <a class="collapse-item" href="utilities-other.html">Other</a>
                        </div>
                    </div>
                </li>

                <!-- Divider -->
                <hr class="sidebar-divider">

                <!-- Heading -->
                <div class="sidebar-heading">
                    Addons
                </div>

                <!-- Nav Item - Pages Collapse Menu -->
                <li class="nav-item active">
                    <a class="nav-link" href="#" data-toggle="collapse" data-target="#collapsePages"
                        aria-expanded="true" aria-controls="collapsePages">
                        <i class="fas fa-fw fa-folder"></i>
                        <span>Destinos</span>
                    </a>

                </li>

                <!-- Nav Item - Charts
                <li class="nav-item">
                    <a class="nav-link" href="cadastrar.php">
                        <i class="fas fa-fw fa-chart-area"></i>
                        <span>Cadastrar destino</span></a>
                </li> -->

                <!-- Nav Item - Tables -->
                <!-- <li class="nav-item">
                    <a class="nav-link" href="concluidos.php">
                        <i data-feather="check"></i>
                        <span>Concluídos</span></a>
                </li> -->

                <!-- Divider -->
                <hr class="sidebar-divider d-none d-md-block">

                <!-- Sidebar Toggler (Sidebar) -->
                <div class="text-center d-none d-md-inline">
                    <button class="rounded-circle border-0" id="sidebarToggle"></button>
                </div>

            </ul>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            <div id="content-wrapper" class="d-flex flex-column">

                <!-- Main Content -->
                <div id="content">

                    <!-- Topbar -->
                    <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                        <!-- Sidebar Toggle (Topbar) -->
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>

                        <!-- Topbar Search -->
                        <form
                            class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                            <div class="input-group">
                                <input type="text" class="form-control bg-light border-0 small"
                                    placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                <div class="input-group-append">
                                    <button class="btn btn-primary" type="button">
                                        <i class="fas fa-search fa-sm"></i>
                                    </button>
                                </div>
                            </div>
                        </form>

                        <!-- Topbar Navbar -->
                        <ul class="navbar-nav ml-auto">

                            <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                            <li class="nav-item dropdown no-arrow d-sm-none">
                                <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                    aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                            <input type="text" class="form-control bg-light border-0 small"
                                                placeholder="Search for..." aria-label="Search"
                                                aria-describedby="basic-addon2">
                                            <div class="input-group-append">
                                                <button class="btn btn-primary" type="button">
                                                    <i class="fas fa-search fa-sm"></i>
                                                </button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </li>

                            <!-- Nav Item - Alerts -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                </a>
                                <!-- Dropdown - Alerts -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Alerts Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-primary">
                                                <i class="fas fa-file-alt text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 12, 2019</div>
                                            <span class="font-weight-bold">A new monthly report is ready to
                                                download!</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-success">
                                                <i class="fas fa-donate text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 7, 2019</div>
                                            $290.29 has been deposited into your account!
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                            <div class="icon-circle bg-warning">
                                                <i class="fas fa-exclamation-triangle text-white"></i>
                                            </div>
                                        </div>
                                        <div>
                                            <div class="small text-gray-500">December 2, 2019</div>
                                            Spending Alert: We've noticed unusually high spending for your account.
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All
                                        Alerts</a>
                                </div>
                            </li>

                            <!-- Nav Item - Messages -->
                            <li class="nav-item dropdown no-arrow mx-1">
                                <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">7</span>
                                </a>
                                <!-- Dropdown - Messages -->
                                <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Message Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_1.svg" alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                            <div class="text-truncate">Hi there! I am wondering if you can help me with
                                                a
                                                problem I've been having.</div>
                                            <div class="small text-gray-500">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_2.svg" alt="...">
                                            <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">I have the photos that you ordered last month,
                                                how
                                                would you like them sent to you?</div>
                                            <div class="small text-gray-500">Jae Chun · 1d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle" src="img/undraw_profile_3.svg" alt="...">
                                            <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Last month's report looks great, I am very happy
                                                with
                                                the progress so far, keep up the good work!</div>
                                            <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                            <img class="rounded-circle"
                                                src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="...">
                                            <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                            <div class="text-truncate">Am I a good boy? The reason I ask is because
                                                someone
                                                told me that people say this to all dogs, even if they aren't good...
                                            </div>
                                            <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More
                                        Messages</a>
                                </div>
                            </li>

                            <div class="topbar-divider d-none d-sm-block"></div>
                            <?php
                                $sql = "SELECT usuarios.id, nome, imagem FROM usuarios";
                                $resultado = mysqli_query($connect, $sql);
                                $dados = mysqli_fetch_array($resultado);
                            ?>
                            <!-- Nav Item - User Information -->
                            <li class="nav-item dropdown no-arrow">
                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <!-- <span class="mr-2 d-none d-lg-inline text-gray-600 small"><?php echo $dados['nome'];?></span> -->
                                    <img class="img-profile rounded-circle" src="<?php echo $dados['imagem'];?>">
                                </a>
                                <!-- Dropdown - User Information -->
                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                    aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                </div>
                            </li>

                        </ul>

                    </nav>
                    <!-- End of Topbar -->

                    <!-- Begin Page Content -->
                    <div class="container-fluid">

                        <!-- Page Heading -->
                        <h1 class="h3 mb-4 text-gray-800">Destinos</h1>
                        <button type="button" class="btn btn-primary mb-4" style="width: 310px;" data-toggle="modal"
                            data-target=".bd-example-modal-lg">Cadastrar destino</button>

                        <div class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog"
                            aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="container-fluid mr-4">

                                        <!-- Page Heading -->
                                        <h1 class="h3 mb-4 mt-4 text-gray-800">Cadastrar destino</h1>
                                        <div class="inteira">
                                            <div class="form-group mr-4">
                                                <label for="formGroupExampleInput">Nome</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput"
                                                    placeholder="Digite o nome do destino">
                                            </div>

                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput2">Valor</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Digite o valor do destino" id="valor">
                                                    </div>
                                                    <div class="col mr-4">
                                                        <label for="formGroupExampleInput2">Dias</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Digite o número de dias" id="dias">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput2">Descrição</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Descrição do destino" id="descricao">
                                                    </div>
                                                    <div class="col mr-4">
                                                        <label for="formGroupExampleInput2">Imagem</label>
                                                        <input type="text" class="form-control"
                                                            placeholder="Imagem do destino" id="imagem">
                                                    </div>
                                                </div>
                                            </div>
                                            <button type="button" class="btn btn-primary btn-md mt-4 mb-4"
                                                style="width: 250px;" onclick="add()">Enviar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <?php
                            // $sql = "SELECT * FROM destinos d INNER JOIN destinosUsuarios du ON du.idDestino = d.id
                            // -- inner join usuarios u on u.id = du.idUsuario where du.situacao = 'interesse'";
                            $sql = "SELECT * from destinos";
                            
                            $resultado = mysqli_query($connect, $sql);
                            while($dados = mysqli_fetch_array($resultado)):
                            ?>
                            <!-- /.container-fluid -->
                            <div class="card col-xl-3 col-md-2 mb-4 mr-2 ml-2 pt-3">
                                <img class="card-img-top" style="height: 180px; border-radius: 10px;"
                                    src="<?php echo $dados['imagem'];?>" alt="Imagem de capa do card">
                                <div class="card-body">
                                    <input type="hidden" name="id" id="id" value="">
                                    <h5 class="card-title" style="font-weight: bold;"><?php echo $dados['nome'];?></h5>
                                    <p class="card-text"><?php echo $dados['descricao'];?></p>
                                    <p class="card-text" style="color: blue; font-weight: bold;">R$
                                        <?php echo $dados['valor'];?></p>
                                    <p class="card-text" style="font-weight: bold;"><?php echo $dados['dias'];?> dias
                                    </p>
                                    <!-- <p class="card-text" style="color: blue; font-weight: bold;">Interessados: -->

                                    <!-- <p class="card-text" style="color: blue; font-weight: bold;">Concluidos: -->

                                    <button type="button" class="btn btn-primary btn-sm" data-toggle="modal"
                                        data-target="#modalExemplo"
                                        onclick="exibir(<?php echo $dados['id']; ?>)">Editar</button>
                                    <!-- Botão para acionar modal -->


                                    <!-- Modal -->

                                    <button type="button" class="btn btn-primary btn-sm btn-deletar"
                                        style="background: #ae0000; border:none;" id="btn-deletar"
                                        onclick="deletar(<?php echo $dados['id'];?>)">Excluir</button>
                                    <a href="#" class="btn btn-light" data-toggle="modal"
                                        data-target="#ModalLongoExemplo" id="list-favoritos"
                                        onclick="listagem(<?php echo $dados['id'];?>)"><i data-feather="users"
                                            style="color: blue;"></i></a>
                                    <!-- Modal -->

                                </div>
                            </div>
                            <?php endwhile;?>
                        </div>
                        <table class="table table-striped">
 
  
                        <div class="modal fade" id="modalExemplo" tabindex="-1" role="dialog"
                            aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Editar destino</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <div class="inteira">

                                            <div class="form-group mr-4">
                                                <input type="hidden" name="id" id="id1" value="">
                                                <label for="formGroupExampleInput">Nome</label>
                                                <input type="text" class="form-control" id="formGroupExampleInput1"
                                                    value="">
                                            </div>

                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput2">Valor</label>
                                                        <input type="text" class="form-control" id="valor1" value="">
                                                    </div>
                                                    <div class="col mr-4">
                                                        <label for="formGroupExampleInput2">Dias</label>
                                                        <input type="text" class="form-control" id="dias1" value="">
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="form-group">
                                                <div class="form-row">
                                                    <div class="col">
                                                        <label for="formGroupExampleInput2">Descrição</label>
                                                        <input type="textarea" class="form-control" id="descricao1" value="">
                                                    </div>
                                                    <div class="col mr-4">
                                                        <label for="formGroupExampleInput2">Imagem</label>
                                                        <input type="text" class="form-control" id="imagem1" value="">
                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Fechar</button>
                                        <button type="button" class="btn btn-primary" onclick="editar()">Salvar
                                            mudanças</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade" id="ModalLongoExemplo" tabindex="-1" role="dialog"
                            aria-labelledby="TituloModalLongoExemplo" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="TituloModalLongoExemplo">Concluídos e Interessados
                                        </h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                                            <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="content" style="padding: 20px;">

                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary"
                                            data-dismiss="modal">Fechar</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Content Wrapper -->

                </div>
                <!-- End of Page Wrapper -->
            </div>
            <!-- Scroll to Top Button-->
            <a class="scroll-to-top rounded" href="#page-top">
                <i class="fas fa-angle-up"></i>
            </a>

            <!-- Logout Modal-->
            <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">Select "Logout" below if you are ready to end your current session.
                        </div>
                        <div class="modal-footer">
                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                            <a class="btn btn-primary" href="login.html">Logout</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bootstrap core JavaScript-->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <!-- Core plugin JavaScript-->
            <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

            <script>
                feather.replace()
            </script>
    </body>

    </html>