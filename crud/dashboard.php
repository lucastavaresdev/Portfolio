<?php include('php/conexao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center m-5">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#inserir">Inserir</button>
        </div>


        <?php
        $select = $conn->query("SELECT * from tb_usuario");
        $result = $select->fetchAll();
        ?>

            <div class="row">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Nome</th>
                            <th scope="col">Email</th>
                            <th scope="col">Imagem</th>
                            <th scope="col">Ações</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php  foreach($result as $row){ ?>
                            <td>
                                <?php echo $row['nome'];?>
                            </td>
                            <td>
                                <?php echo $row['email'];?>
                            </td>
                            <td>
                                imagem
                            </td>
                            <td>
                               <?php $id = $row['id']; 
                                echo '<a href="php/deletar.php?id=' .$id .'">deletar </a>';
                                echo '<a href="php/editar.php?id=' .$id .'">editar</a>';
                                ?>
                            </td>
                        </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>

    </div>
    <div class="modal fade" id="inserir" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Inserir novo usuario</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                  <span aria-hidden="true">&times;</span>
                                </button>
                </div>
                <div class="modal-body">
                    <form method="post" action="php/inserir_usuario.php">
                        <input type="text" class="form-control mt-2" placeholder="nome" name="nome">
                        <input type="email" class="form-control mt-2" placeholder="Email" name="email">
                        <input type="password" class="form-control mt-2" placeholder="Senha" name="senha">
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Inserir</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>



    <!-- javacript -->
    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.js"></script>
    <script src="js/fontawesome-all.js"></script>
</body>

</html>
