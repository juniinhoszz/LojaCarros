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
        
        $model->getAllRowsMarca();
        $model->getAllRowsFabr();
        $model->getAllRowsTipo();
        $model->getAllRowsComb();
        


        include 'View/modules/Carros/FormCarros.php';

        
    }

    public static function save() 
    {

        $carro = new CarrosModel();

        
        $carro->id = $_POST['id'];
        $carro->id_marca = $_POST['id_marca'];
        $carro->modelo = $_POST['modelo'];
        $carro->id_fabricante = $_POST['id_fabricante'];
        $carro->id_tipo = $_POST['id_tipo'];
        $carro->ano = $_POST['ano'];
        $carro->id_combustivel = $_POST['id_combustivel'];
        $carro->cor = $_POST['cor'];
        $carro->numero_chassi = $_POST['numero_chassi'];
        $carro->kilometragem = $_POST['kilometragem'];
        $carro->revisao = $_POST['revisao'];
        $carro->modelo = $_POST['modelo'];
        $carro->sinistro = $_POST['sinistro'];
        $carro->roubo_furto = $_POST['roubo_furto'];
        $carro->aluguel = $_POST['aluguel'];
        $carro->venda = $_POST['venda'];
        $carro->particular = $_POST['particular'];
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