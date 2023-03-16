<?php

namespace App\Controller;
use App\Model\CarrosModel;
use App\DAO\CarrosDAO;

class CarrosController extends Controller
{
    public static function index() 
    {


        $model = new CarrosModel();
        $model->getAllRows();

        
        include 'View/modules/Carros/ListCarros.php';
    }

    public static function form()
    {



        $model = new CarrosModel();

        if(isset($_GET['id'])) // Verificando se existe uma variável $_GET
            $model = $model->getById( (int) $_GET['id']); // Typecast e obtendo o model preenchido vindo da DAO.
            // Para saber mais sobre Typecast, leia: https://tiago.blog.br/type-cast-ou-conversao-de-tipos-do-php-isso-pode-te-ajudar-muito/
        
        $model->getAllRowsFabr();
        $model->getAllRowsTipo();
        $model->getAllRowsComb();
        


        include 'View/modules/Carros/FormCarros.php';

        
    }

    public static function save() 
    {

        //var_dump($_POST);

        //exit;

        $carro = new CarrosModel();


        //$carro->aluguel = isset($_POST['aluguel']) ? true : false;

        
        $carro->id = $_POST['id'];
        $carro->marca = $_POST['marca'];
        $carro->modelo = $_POST['modelo'];
        $carro->id_fabricante = $_POST['id_fabricante'];
        $carro->id_tipo = $_POST['id_tipo'];
        $carro->ano = $_POST['ano'];
        $carro->id_combustivel = $_POST['id_combustivel'];
        $carro->cor = $_POST['cor'];
        $carro->numero_chassi = $_POST['numero_chassi'];
        $carro->kilometragem = $_POST['kilometragem'];
        $carro->revisao = isset($_POST['revisao']) ? true : false;
        $carro->modelo = isset($_POST['modelo']) ? true : false;
        $carro->sinistro = isset($_POST['sinistro']) ? true : false;
        $carro->roubo_furto = isset($_POST['roubo_furto']) ? true : false;
        $carro->aluguel = isset($_POST['aluguel']) ? true : false;
        $carro->particular = isset($_POST['particular']) ? true : false;
        $carro->observacoes = $_POST['observacoes'];
        
        
        $carro->save(); 

        header("Location: /veiculo"); 
    }

    public static function delete()
    {


        $model = new CarrosDAO();

        $model->delete( (int) $_GET['id'] ); // Enviando a variável $_GET como inteiro para o método delete

        header("Location: /carros");
    }

}