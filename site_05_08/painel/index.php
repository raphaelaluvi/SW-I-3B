<?php
    include 'conecta.php';

    include 'menu.php';
?>
        <title>Cadastro Clientes teste</title>

            <div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Clientes</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item active"> <a class="btn btn-success" href="insere_cliente.php">INSERIR CLIENTE</a></li>
                        </ol>
                        
                        <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Clientes
                            </div>
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Telefone</th>
                                            <th>Opções</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th>ID</th>
                                            <th>Nome</th>
                                            <th>E-mail</th>
                                            <th>Telefone</th>
                                            <th>Opções</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>

                                        <?php

                                            $sql = "SELECT * FROM clientes";
                                            $consulta = $conexao->query($sql);

                                            //fetch_assoc() associa os registros com seus vetores, pelos indices
                                            
                                            while($dados = $consulta->fetch_assoc()){
                                                echo "<tr>";

                                                //pega pelo indice dele
                                                echo "<td>".$dados['id_cliente']."</td>";
                                                echo "<td>".$dados['nome_cliente']."</td>";
                                                echo "<td>".$dados['email_cliente']."</td>";
                                                echo "<td>".$dados['telefone']."</td>";
                                                echo "<td>
                                                    <a class='btn btn-info' href='atualiza_cliente.php'>ATUALIZAR</a>
                                                    <a class='btn btn-danger' href=''>APAGAR</a>
                                                </td>";

                                                echo "</tr>";
                                            }

                                        ?>
                                        
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </main>
                <footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; Your Website 2023</div>
                            <div>
                                <a href="#">Privacy Policy</a>
                                &middot;
                                <a href="#">Terms &amp; Conditions</a>
                            </div>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="js/scripts.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
        <script src="assets/demo/chart-area-demo.js"></script>
        <script src="assets/demo/chart-bar-demo.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="js/datatables-simple-demo.js"></script>
    </body>
</html>