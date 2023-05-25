<?php
use App\Controller\{
    CarrosController,
    WelcomeController
};

$parse_uri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);

switch($parse_uri) {

    // Fazendo a função de exportar Banco de Dados / Fazer dps a função de restaurar Banco de Dados
    case '/exportar':
        $return_var = NULL;
        $output = NULL;
        $command = 'C:/"Program Files"/MySQL/"MySQL Server 8.0"/bin/mysqldump -u root -p etecjau -P 3307 -h localhost db_bancodigital > C:/Dev/file.sql';
        exec($command, $output, $exit_code);

        var_dump($exit_code);

        echo "deu certo.";
    break;

    case "/":
        include 'View/modules/Pg-Inicial/Pg-Inicial.php';
    break;

    case "/carros":
        CarrosController::index();
    break;

    case "/carros/form":
        CarrosController::form();
    break;

    case "/carros/save":
        CarrosController::save();
    break;

    case "/carros/delete":
        CarrosController::delete();
    break;

     case "/carros/sucesso":
        include 'View/modules/Carros/SucessCarros.php';
    break;

    default:
        header("Location: /");
    break;
}