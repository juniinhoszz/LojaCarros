<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar Carro</title>
    <style>
        label, input { display: block;}
        body{
        font-family: Arial, Helvetica, sans-serif;
    }
    </style>
</head>
<body>
<form action="/carros/save" method="post">
        <fieldset >
            <legend style="color: white;"><b>Cadastro de Carros</b></legend>
            
            <label for="id" style="color: white;">ID do veiculo:</label>
            <input type="text" for="id" disabled value="<?= $model->id ?>" name="id" />

            <label for="nome" style="color: white;">Marca:</label>
            <select name="marca" id="marca" style="background:#484d50; color:white; height:25px;">
            <option selected value="">Selecione uma Opção</option>
            <?php foreach($model->rowsMarca as $item): ?>

            <option value="<?= $item->id ?> "><?= $item->descricao ?></option>

            <?php endforeach ?>
            </select>

            <label for="modelo" style="color: white;">Modelo:</label>
            <input type="text" for="modelo" value="<?= $model->modelo ?>" name="modelo" />

            <label for="fabricante" style="color: white;">Fabricante:</label>
            <select name="fabricante" id="fabricante" style="background:#484d50; color:white; height:25px;">
            <option selected value="">Selecione uma Opção</option>
            <?php foreach($model->rowsFabr as $item): ?>

            <option value="<?= $item->id ?> "><?= $item->descricao ?></option>

            <?php endforeach ?>
            </select>

            <label for="tipo" style="color: white;">Tipo:</label>
            <select name="tipo" id="tipo" style="background:#484d50; color:white; height:25px;">
            <option selected value="">Selecione uma Opção</option>
            <?php foreach($model->rowsTipo as $item): ?>

            <option value="<?= $item->id ?> "><?= $item->descricao ?></option>

            <?php endforeach ?>
            </select><br>
            
            <label for="ano" style="color: white;">Ano:</label>
            <input type="text" for="ano" value="<?= $model->ano ?>" name="ano" />
            
            <label for="combustivel" style="color: white;">Combustivel:</label>
            <select name="combustivel" id="combustivel" style="background:#484d50; color:white; height:25px;">
            <option selected value="">Selecione uma Opção</option>
            <?php foreach($model->rowsComb as $item): ?>

            <option value="<?= $item->id ?> "><?= $item->descricao ?></option>

            <?php endforeach ?>
            </select>

            <label for="cor" style="color: white;">Cor:</label>
            <input type="text" for="cor" value="<?= $model->cor ?>" name="cor" />

            <label for="numero_chassi" style="color: white;">Numero de Chassi:</label>
            <input type="text" for="numero_chassi" value="<?= $model->numero_chassi ?>" name="numero_chassi" />

            <label for="kilometragem" style="color: white;">Kilometragem:</label>
            <input type="text" for="kilometragem" value="<?= $model->kilometragem ?>" name="kilometragem" /><br>

            
            
            <div style="display: flex;">
            
            <input type="checkbox" for="revisao" value="<?= $model->revisao ?>" id="revisao" name="revisao">
            <label for="revisao" style="color: white;" >Revisão</label>


            </div>
            <br>
            <button type="submit"  style="background-color:#484d50 ;  height:35px; width:65px; font-size:17px;color:white">Enviar</button>
        </fieldset>

        
    </form>   

    <br>
    <center><a href="/carros"><button style="height: 85px; width:350px; font-size:25px; background-color:#484d50;border: 1 solid black;color:white" >Ver listagem de Carros</button></a></center>
    
    <a href="/"><button style="height: 70px; width:300px; font-size:25px; background-color:#484d50;border: 1 solid black; position: absolute;
    bottom: 0;
    width: 99%;
    height: 100px;    
    text-align: center;
    line-height: 100px;color:white" >Voltar para página inicial</button></a>
    
    <style>
        body{
            background-color: #2e2e2e;
        }
        


    </style>

</body>
</html>