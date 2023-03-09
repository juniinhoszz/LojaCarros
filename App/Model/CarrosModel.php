<?php

namespace App\Model;
use App\DAO\CarrosDAO;

class CarrosModel extends Model
{
    public $id, $id_marca, $modelo, $id_fabricante, $id_tipo, $ano, $id_combustivel, $cor, $numero_chassi; 
    public $kilometragem, $revisao, $sinistro, $roubo_furto, $aluguel, $venda, $particular, $observacoes;
    

    public function save()
    {

        $dao = new CarrosDAO();

        // Se id for nulo, significa que trata-se de um novo registro
        // caso contrário, é um update poque a chave primária já existe.
        if(empty($this->id)) 
        {
            // No que estamos enviado o proprio objeto model para o insert, por isso do this
            $dao->insert($this);
        } else {
            $dao->update($this);
        }
    }

    public function getAllRows()
    {

        $dao = new CarrosDAO();

        $this->rows = $dao->select();
    }


     /**
     * Método que encapsula o acesso ao método selectById da camada DAO
     * O método recebe um parâmetro do tipo inteiro que é o id do registro
     * a ser recuperado do MySQL, via camada DAO.
     */
    public function getById(int $id)
    {


        $dao = new CarrosDAO();

        $obj = $dao->selectById($id); // Obtendo um model preenchido da camada DAO

        // Para saber mais operador ternário, leia: https://pt.stackoverflow.com/questions/56812/uso-de-e-em-php
        return ($obj) ? $obj : new CarrosModel(); // Operador Ternário

    }


    public function delete(int $id)
    {
        $dao = new CarrosDAO();

        $dao->delete($id);
    }
}