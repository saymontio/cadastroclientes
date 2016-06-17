<html>
<head>
    <title>Cadastro de Clientes</title>
    <meta charset="UTF-8">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
          integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
    <!-- Optional theme -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css"
          integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css"
    <!-- Latest compiled and minified JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"
            integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS"
            crossorigin="anonymous"></script>
</head>
<body>
<?php
require_once('Clientes.php');
$clientes = [
    new Clientes(1, 'Maria da Rosa', '15/03/1988', '000.000.00-00', 'mariarosa@gmail.com', '(99)9999-9999', '(99)9999-9999', 'rua xxx', 'Cidade', 'Estado', '74.000-000'),
    new Clientes(2, 'Juliano Marques', '21/06/1968', '000.000.00-00', 'juliano@gmail.com', '(99)9999-9999', '(99)9999-9999', 'rua xxx', 'Cidade', 'Estado', '74.000-000'),
    new Clientes(3, 'Jose Alves', '27/08/1992', '000.000.00-00', 'jose@gmail.com', '(99)9999-9999', '(99)9999-9999', 'rua xxx', 'Cidade', 'Estado', '74.000-000'),
    new Clientes(4, 'Antonio da Silva', '16/02/1984', '000.000.00-00', 'antonio@gmail.com', '(99)9999-9999', '(99)9999-9999', 'rua xxx', 'Cidade', 'Estado', '74.000-000'),
    new Clientes(5, 'Luiz Mendonça', '14/09/1969', '000.000.00-00', 'luiz@gmail.com', '(99)9999-9999', '(99)9999-9999', 'rua xxx', 'Cidade', 'Estado', '74.000-000'),
    new Clientes(7, 'Divino Cesar', '12/10/1996', '000.000.00-00', 'divino@gmail.com', '(99)9999-9999', '(99)9999-9999', 'rua xxx', 'Cidade', 'Estado', '74.000-000'),
    new Clientes(7, 'Maria Madalena', '10/03/1994', '000.000.00-00', 'maria@gmail.com', '(99)9999-9999', '(99)9999-9999', 'rua xxx', 'Cidade', 'Estado', '74.000-000'),
    new Clientes(8, 'Estevão Cavalcante', '01/01/2000', '000.000.00-00', 'estevao@gmail.com', '(99)9999-9999', '(99)9999-9999', 'rua xxx', 'Cidade', 'Estado', '74.000-000'),
    new Clientes(9, 'Heric Stone', '15/09/1986', '000.000.00-00', 'heric@gmail.com', '(99)9999-9999', '(99)9999-9999', 'rua xxx', 'Cidade', 'Estado', '74.000-000'),
    new Clientes(10, 'Jaspion do Brasil', '12/12/1998', '000.000.00-00', 'jaspion@gmail.com', '(99)9999-9999', '(99)9999-9999', 'rua xxx', 'Cidade', 'Estado', '74.000-000'),
];
if (isset($_GET['ordem'])) {
    if ($_GET['ordem'] == 'true') {
        $clientes = array_reverse($clientes);
    }
}
?>
<div class="container">
    <h1>Lista de Clientes</h1> <a href="<?php echo isset($_GET['ordem']) && $_GET['ordem'] == 'true' ? '?ordem=false':'?ordem=true' ?>">Inverter Lista</a>
    <div class="row">
        <div class="col-md-12">
            <?php foreach ($clientes as $cliente) { ?>
                <div class="col-md-3">
                    <div class="cliente-container">
                        <div class="cliente">
                            <span><?php echo $cliente->getId() . ' - ' . $cliente->getNome(); ?></span>
                        </div>
                        <div class="detalhes">
                            <span><strong>Cliente id:</strong><?php echo $cliente->getId(); ?></span></br>
                            <span><strong>Nome:</strong><?php echo $cliente->getNome(); ?></span></br>
                            <span><strong>Aniversário:</strong><?php echo $cliente->getAniversario(); ?></span></br>
                            <span><strong>CPF:</strong><?php echo $cliente->getCpf(); ?></span></br>
                            <span><strong>E-mail:</strong><?php echo $cliente->getEmail(); ?></span></br>
                            <span><strong>Telefone:</strong><?php echo $cliente->getTelefone(); ?></span></br>
                            <span><strong>Celular:</strong><?php echo $cliente->getCelular(); ?></span></br>
                            <span><strong>Endereço:</strong><?php echo $cliente->getEndereco(); ?></span></br>
                            <span><strong>Cidade:</strong><?php echo $cliente->getCidade(); ?></span></br>
                            <span><strong>Estado:</strong><?php echo $cliente->getEstado(); ?></span></br>
                            <span><strong>CEP:</strong><?php echo $cliente->getCep(); ?></span>
                        </div>
                    </div>

                </div>
            <?php } ?>
        </div>
    </div>
</div>
</body>
</html>